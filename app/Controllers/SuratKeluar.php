<?php

namespace App\Controllers;

use App\Models\SuratKeluarModel;
use App\Models\SuratMasukModel;
use App\Models\UserModel;
use TCPDF;

class SuratKeluar extends BaseController
{
    protected $helpers = [];
    public function __construct()
    {
        helper(['form']);
        $this->cek_login();
        $this->userModel = new UserModel();
        $this->suratKeluarModel = new SuratKeluarModel();
        $this->suratMasukModel = new SuratMasukModel();
    }

    public function index()
    {
        if ($this->cek_login() == FALSE) {
            session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
            return redirect()->to('/auth/login');
            if (session()->get('cek' === 'Maffice@Project_2020')) {
                session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data');
                return redirect()->to('/auth/login');
            }
        }

        $currentPage = $this->request->getVar('page_surat_keluar') ? $this->request->getVar('page_surat_keluar') : 1;

        $data = [
            'title' => 'Maffice | Data Surat | Surat Keluar',
            'surat_keluar' => $this->suratKeluarModel->getSuratKeluar(),
            'surat_keluar' => $this->suratKeluarModel
                ->join('user', 'user.id_user = surat_keluar.id_user')
                ->where('surat_keluar.nama_pengirim', session()->get('nama_lengkap'))
                ->orderby('surat_keluar.id_sk desc')
                ->paginate(5, 'surat_keluar'),
            'pager'  => $this->suratKeluarModel->pager,
            'currentPage' => $currentPage
        ];

        return view('surat_keluar/index', $data);
    }

    public function create()
    {
        $user = $this->userModel->where('status', 'Active')->findAll(); //status user
        $data = [
            'title' => 'Maffice | Data Surat | Tambah Surat Keluar',
            'user' => ['' => 'Pilih Penerima ...'] + array_column($user, 'nama_lengkap', 'id_user'),
            'validation' => \config\Services::validation()
        ];

        return view('surat_keluar/create', $data);
    }

    public function surat_keluar()
    {
        //validasi input
        if (!$this->validate([
            'id_user' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama penerima harus diisi.'
                ]
            ],
            'no_surat' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => 'Nomor Surat wajib diisi.'
                ]
            ],
            'tgl_surat' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => 'Tanggal Surat wajib diisi.'
                ]
            ],
            'perihal' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => 'Perihal wajib diisi.'
                ]
            ],
            'lampiran' => [
                'rules' => 'uploaded[lampiran]|max_size[lampiran,51200]',
                'errors' => [
                    'uploaded' => 'Lampiran harus disertakan',
                    'max_size' => 'Ukuran lampiran tidak lebih dari 50 MB',
                ]
            ]
        ])) {
            return redirect()->to('/suratKeluar/create')->withInput();
        } else {
            //ambil lampiran
            $fileLampiran = $this->request->getFile('lampiran');

            //ambil nama file

            //generate nama acak
            $namaLampiran = uniqid('kominfo');
            //menghilangkan garis dari nama acak 
            $namaLampiran = strip_tags(stripslashes($namaLampiran));
            //menghilangkan . dan / dari nama acak
            $namaLampiran = str_replace(".", "", $namaLampiran);
            $namaLampiran = strrev(str_replace("/", "", $namaLampiran));
            //membatasi 3 nama acak
            $namaLampiran = substr($namaLampiran, 0, 3);

            $namaLampiran .= '_';
            $namaLampiran .= $fileLampiran->getName();

            //pindahkan ke file
            $fileLampiran->move('file', $namaLampiran);

            $data = [
                'nama_pengirim'     => session()->get('nama_lengkap'),
                'id_user'           => $this->request->getPost('id_user'),
                'no_surat'          => $this->request->getPost('no_surat'),
                'tgl_surat'         => $this->request->getPost('tgl_surat'),
                'perihal'           => $this->request->getPost('perihal'),
                'deskripsi'         => $this->request->getPost('deskripsi'),
                'lampiran'          => $namaLampiran
            ];

            // insert
            $simpan_sk = $this->suratKeluarModel->insertSuratKeluar($data);

            //mengirim ke surat masuk
            $simpan_sm = $this->suratMasukModel->insertSuratMasuk($data);

            if ($simpan_sk && $simpan_sm) {
                session()->setFlashdata('success', 'Surat Keluar Berhasil Terkirim');
                return redirect()->to(base_url('suratKeluar'));
            }
        }
    }

    public function show($id_sk)
    {
        $data = [
            'title' => 'Maffice | Data Surat | Show Surat Keluar',
            'surat_keluar' => $this->suratKeluarModel->getSuratKeluar($id_sk)
        ];

        return view('surat_keluar/show', $data);
    }

    public function edit($id_sk)
    {
        $user = $this->userModel->where('status', 'Active')->findAll();

        $data = [
            'title' => 'Maffice | Data Surat | Edit Surat Keluar',
            'user' => ['' => 'Pilih User'] + array_column($user, 'nama_lengkap', 'id_user'),
            'surat_keluar' => $this->suratKeluarModel->getSuratKeluar($id_sk),
            'validation' => \config\Services::validation()
        ];

        return view('surat_keluar/edit', $data);
    }

    public function update()
    {
        $id_sk = $this->request->getPost('id_sk');

        //validasi input
        if (!$this->validate([
            'id_user' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama penerima harus diisi.'
                ]
            ],
            'no_surat' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => 'Nomor Surat wajib diisi.'
                ]
            ],
            'tgl_surat' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => 'Tanggal Surat wajib diisi.'
                ]
            ],
            'perihal' => [
                'rules' => 'required',
                'errors' => [
                    'required'  => 'Perihal wajib diisi.'
                ]
            ],
            'lampiran' => [
                'rules' => 'uploaded[lampiran]|max_size[lampiran,51200]',
                'errors' => [
                    'uploaded' => 'Lampiran harus disertakan',
                    'max_size' => 'Ukuran lampiran tidak lebih dari 50 MB',
                ]
            ]
        ])) {
            return redirect()->to('/suratKeluar/edit/' . $id_sk)->withInput();
        } else {
            //ambil lampiran
            $fileLampiran = $this->request->getFile('lampiran');
            //cek file, apakah file lama
            if ($fileLampiran->getError() == 4) {
                $namaLampiran = $this->request->getVar('lampiranLama');
            } else {
                //pindahkan ke file
                $fileLampiran->move('file');

                //ambil nama file

                //generate nama acak
                $namaLampiran = uniqid('kominfo');
                //menghilangkan garis dari nama acak 
                $namaLampiran = strip_tags(stripslashes($namaLampiran));
                //menghilangkan . dan / dari nama acak
                $namaLampiran = str_replace(".", "", $namaLampiran);
                $namaLampiran = strrev(str_replace("/", "", $namaLampiran));
                //membatasi hanya 3 nama acak
                $namaLampiran = substr($namaLampiran, 0, 3);

                $namaLampiran .= '_';
                $namaLampiran .= $fileLampiran->getName();

                //hapus lampiran lama
                unlink('file/' . $this->request->getVar('lampiranLama'));
            }
        }
        $data = [
            'id_user'          => $this->request->getPost('id_user'),
            'no_surat'          => $this->request->getPost('no_surat'),
            'tgl_surat'         => $this->request->getPost('tgl_surat'),
            'nama_pengirim'     => $this->request->getPost('nama_pengirim'),
            'perihal'           => $this->request->getPost('perihal'),
            'deskripsi'         => $this->request->getPost('deskripsi'),
            'lampiran'          => $namaLampiran
        ];

        $ubah = $this->suratKeluarModel->updateSuratKeluar($data, $id_sk);
        if ($ubah) {
            session()->setFlashdata('info', 'Surat Keluar berhasil di Update');
            return redirect()->to(base_url('suratKeluar'));
        }
    }

    public function delete($id_sk)
    {
        //cari file berdasarkan id
        $surat_keluar = $this->suratKeluarModel->find($id_sk);

        //hapus file lampiran
        // unlink('file/' . $surat_keluar['lampiran']);

        $hapus = $this->suratKeluarModel->deleteSuratKeluar($id_sk);
        if ($hapus) {
            session()->setFlashdata('warning', 'Surat Keluar Berhasil Di Hapus');
            return redirect()->to(base_url('suratKeluar'));
        }
    }

    public function pelaporan()
    {

        $data = [
            'title' => 'Maffice | Pelaporan | Surat Keluar',
            'tgl_awal' => $this->request->getPost('tgl_awal'),
            'tgl_akhir' => $this->request->getPost('tgl_akhir')
        ];

        return view('pelaporan/surat_keluar', $data);
    }

    public function laporan()
    {
        $tgl_awal = $this->request->getPost('tgl_awal');
        $tgl_akhir = $this->request->getPost('tgl_akhir');

        $data = [
            'title' => 'Maffice | Pelaporan | Surat Keluar',
            'tgl_awal' => $this->request->getPost('tgl_awal'),
            'tgl_akhir' => $this->request->getPost('tgl_akhir'),
            'surat_keluar' => $this->suratKeluarModel->pelaporanSuratKeluar($tgl_awal, $tgl_akhir)
        ];

        return view('pelaporan/surat_keluar', $data);
    }

    public function laporan_exportPDF()
    {
        $tgl_awal = $this->request->getPost('tgl_awal');
        $tgl_akhir = $this->request->getPost('tgl_akhir');

        $data = [
            'tgl_awal' => $this->request->getPost('tgl_awal'),
            'tgl_akhir' => $this->request->getPost('tgl_akhir'),
            'surat_keluar' => $this->suratKeluarModel->pelaporanSuratKeluar($tgl_awal, $tgl_akhir)
        ];

        $html = view('pelaporan/cetak_surat_keluar', $data);
        // return view('pelaporan/cetak_surat_keluar', $data);

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(session()->get('nama_lengkap'));
        $pdf->SetTitle('surat');
        $pdf->SetSubject('surat');
        $pdf->SetFont('Times', '', 12, '', true);
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();

        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // line ini penting
        $this->response->setContentType('application/pdf');

        //Close and output PDF document
        $pdf->Output('surat.pdf', 'D');
    }
}
