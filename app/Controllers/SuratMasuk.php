<?php

namespace App\Controllers;

use App\Models\SuratMasukModel;
use App\Models\UserModel;
use TCPDF;

class SuratMasuk extends BaseController
{
    protected $helpers = [];
    public function __construct()
    {
        helper(['form']);
        $this->cek_login();
        $this->userModel = new UserModel();
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

        $currentPage = $this->request->getVar('page_surat_masuk') ? $this->request->getVar('page_surat_masuk') : 1;

        $data = [
            'title' => 'Maffice | Data Surat | Surat Masuk',
            'surat_masuk' => $this->suratMasukModel->getSuratmasuk(),
            'surat_masuk' => $this->suratMasukModel
                ->join('user', 'user.id_user = surat_masuk.id_user')
                ->where('surat_masuk.id_user', session()->get('id_user'))
                ->orderby('surat_masuk.id_sm desc')
                ->paginate(5, 'surat_masuk'),
            'pager'  => $this->suratMasukModel->pager,
            'currentPage' => $currentPage
        ];

        return view('surat_masuk/index', $data);

        // $currentPage = $this->request->getVar('page_surat_Masuk') ? $this->request->getVar('page_surat_masuk') : 1;

        // $data = [
        //     'title' => 'Maffice | Data Surat | Surat Masuk',
        //     'surat_masuk' => $this->suratMasukModel->getSuratMasuk(),
        //     'surat_masuk' => $this->suratMasukModel->join('user', 'user.id_user = surat_masuk.id_user')->where('surat_masuk.id_user', session()->get('id_user'))->orderby('surat_masuk.id_sm desc')->paginate(5, 'surat_masuk'),
        //     'pager'  => $this->suratMasukModel->pager,
        //     'currentPage' => $currentPage
        // ];

        // return view('surat_masuk/index', $data);
    }

    public function show($id_sm)
    {
        $data = [
            'title' => 'Maffice | Data Surat | Show Surat Masuk',
            'surat_masuk' => $this->suratMasukModel->getSuratMasuk($id_sm)
        ];

        $baca = [
            'dibaca' => '1'
        ];
        $ubah = $this->suratMasukModel->updateBaca($baca, $id_sm);
        return view('surat_masuk/show', $data);
    }

    public function delete($id_sm)
    {
        $hapus = $this->suratMasukModel->deleteSuratMasuk($id_sm);
        if ($hapus) {
            session()->setFlashdata('warning', 'Surat Masuk Berhasil Di Hapus');
            return redirect()->to(base_url('suratMasuk'));
        }
    }

    public function surat_exportPDF($id_sm)
    {
        $data['surat_masuk'] = $this->suratMasukModel->getSuratMasuk($id_sm);

        $html = view('surat_masuk/suratDinas/template1', $data);
        // return view('surat_masuk/suratDinas/template1', $data);

        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor(session()->get('nama_lengkap'));
        $pdf->SetTitle('surat');
        $pdf->SetSubject('surat');
        $pdf->SetFont('times', '', 12, '', true);
        $pdf->SetMargins(20, 0, 15);

        // set certificate file
        // $certificate = 'file://data/cert/tcpdf.crt';

        // set additional information
        // $info = array(
        //     'Name' => 'TCPDF',
        //     'Location' => 'Office',
        //     'Reason' => 'Testing TCPDF',
        //     'ContactInfo' => 'http://www.tcpdf.org',
        // );

        // // set document signature
        // $pdf->setSignature($certificate, $certificate, 'tcpdfdemo', '', 2, $info);

        // // set default header data
        // $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));


        // // set header and footer fonts
        // $pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));

        // // set default monospaced font
        // $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // // set margins
        // $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        // $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();

        // output the HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // // create content for signature (image and/or text)
        // $pdf->Image('images/tcpdf_signature.png', 180, 60, 15, 15, 'PNG');

        // // define active area for signature appearance
        // $pdf->setSignatureAppearance(180, 60, 15, 15);

        // // *** set an empty signature appearance ***
        // $pdf->addEmptySignatureAppearance(180, 80, 15, 15);

        // line ini penting
        $this->response->setContentType('application/pdf');

        //Change To Avoid the PDF Error
        ob_end_clean();

        //Close and output PDF document
        $pdf->Output('surat.pdf', 'D');
    }

    public function pelaporan()
    {

        $data = [
            'title' => 'Maffice | Pelaporan | Surat masuk',
            'tgl_awal' => $this->request->getPost('tgl_awal'),
            'tgl_akhir' => $this->request->getPost('tgl_akhir')
        ];

        return view('pelaporan/surat_masuk', $data);
    }

    public function laporan()
    {
        $tgl_awal = $this->request->getPost('tgl_awal');
        $tgl_akhir = $this->request->getPost('tgl_akhir');
        $data = [
            'title' => 'Maffice | Pelaporan | Surat masuk',
            'tgl_awal' => $this->request->getPost('tgl_awal'),
            'tgl_akhir' => $this->request->getPost('tgl_akhir'),
            'surat_masuk' => $this->suratMasukModel->pelaporanSuratMasuk($tgl_awal, $tgl_akhir)
        ];

        return view('pelaporan/surat_masuk', $data);
    }

    public function laporan_exportPDF()
    {
        $tgl_awal = $this->request->getPost('tgl_awal');
        $tgl_akhir = $this->request->getPost('tgl_akhir');

        $data = [
            'tgl_awal' => $this->request->getPost('tgl_awal'),
            'tgl_akhir' => $this->request->getPost('tgl_akhir'),
            'surat_keluar' => $this->suratMasukModel->pelaporanSuratMasuk($tgl_awal, $tgl_akhir)
        ];


        $html = view('pelaporan/cetak_surat_masuk', $data);
        return view('pelaporan/cetak_surat_masuk', $data);

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
