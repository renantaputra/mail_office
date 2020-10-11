<!DOCTYPE html>
<html xmlns="">

<head>
	<style>
		.ff0 {
			font-family: sans-serif;
			visibility: hidden;
		}

		@font-face {
			font-family: ff1;
			src: url(f1.woff)format("woff");
		}

		.ff1 {
			font-family: ff1;
			line-height: 0.853027;
			font-style: normal;
			font-weight: normal;
			visibility: visible;
		}

		@font-face {
			font-family: ff2;
			src: url(f2.woff)format("woff");
		}

		.ff2 {
			font-family: ff2;
			line-height: 0.914551;
			font-style: normal;
			font-weight: normal;
			visibility: visible;
		}

		@font-face {
			font-family: ff3;
			src: url(f3.woff)format("woff");
		}

		.ff3 {
			font-family: ff3;
			line-height: 0.910156;
			font-style: normal;
			font-weight: normal;
			visibility: visible;
		}

		.m0 {
			transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
			-ms-transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
			-webkit-transform: matrix(0.250000, 0.000000, 0.000000, 0.250000, 0, 0);
		}

		.v0 {
			vertical-align: 0.000000px;
		}

		.ls0 {
			letter-spacing: 0.000000px;
		}

		.sc_ {
			text-shadow: none;
		}

		.sc0 {
			text-shadow: -0.015em 0 transparent, 0 0.015em transparent, 0.015em 0 transparent, 0 -0.015em transparent;
		}

		@media screen and (-webkit-min-device-pixel-ratio:0) {
			.sc_ {
				-webkit-text-stroke: 0px transparent;
			}

			.sc0 {
				-webkit-text-stroke: 0.015em transparent;
				text-shadow: none;
			}
		}

		.ws0 {
			word-spacing: 0.000000px;
		}

		._0 {
			width: 36.000000px;
		}

		.fc0 {
			color: rgb(0, 0, 0);
		}

		.fs0 {
			font-size: 48.000000px;
		}

		.y8 {
			bottom: 3.596000px;
		}

		.y23 {
			bottom: 5.530991px;
		}

		.yd {
			bottom: 17.394999px;
		}

		.y22 {
			bottom: 19.329994px;
		}

		.y21 {
			bottom: 33.128998px;
		}

		.y20 {
			bottom: 84.874996px;
		}

		.y1f {
			bottom: 98.673996px;
		}

		.y1e {
			bottom: 112.472996px;
		}

		.y0 {
			bottom: 273.000000px;
		}

		.y1c {
			bottom: 281.012979px;
		}

		.y1b {
			bottom: 294.811990px;
		}

		.y1a {
			bottom: 308.611001px;
		}

		.y19 {
			bottom: 322.410012px;
		}

		.y1d {
			bottom: 336.865988px;
		}

		.y18 {
			bottom: 464.539010px;
		}

		.y17 {
			bottom: 492.137014px;
		}

		.y16 {
			bottom: 505.936013px;
		}

		.y15 {
			bottom: 533.534010px;
		}

		.y14 {
			bottom: 547.333010px;
		}

		.y13 {
			bottom: 561.132010px;
		}

		.y12 {
			bottom: 574.931008px;
		}

		.y11 {
			bottom: 602.529005px;
		}

		.y10 {
			bottom: 616.328005px;
		}

		.yf {
			bottom: 630.127005px;
		}

		.ye {
			bottom: 643.926003px;
		}

		.yc {
			bottom: 681.727003px;
		}

		.yb {
			bottom: 709.325003px;
		}

		.ya {
			bottom: 723.124002px;
		}

		.y9 {
			bottom: 736.923002px;
		}

		.y7 {
			bottom: 750.722002px;
		}

		.y6 {
			bottom: 781.916001px;
		}

		.y5 {
			bottom: 823.312997px;
		}

		.y4 {
			bottom: 837.112000px;
		}

		.y3 {
			bottom: 864.657001px;
		}

		.y2 {
			bottom: 878.509000px;
		}

		.y1 {
			bottom: 896.447000px;
		}

		.h5 {
			height: 15.799000px;
		}

		.h6 {
			height: 29.598000px;
		}

		.h2 {
			height: 32.531250px;
		}

		.h4 {
			height: 33.328125px;
		}

		.h3 {
			height: 34.359375px;
		}

		.h7 {
			height: 136.699997px;
		}

		.h1 {
			height: 636.500000px;
		}

		.h0 {
			height: 936.000000px;
		}

		.w4 {
			width: 20.000000px;
		}

		.w5 {
			width: 38.000000px;
		}

		.w3 {
			width: 61.400002px;
		}

		.w6 {
			width: 164.000000px;
		}

		.w2 {
			width: 191.000000px;
		}

		.w7 {
			width: 213.850024px;
		}

		.w1 {
			width: 468.000000px;
		}

		.w0 {
			width: 612.000000px;
		}

		.x8 {
			left: 6.400000px;
		}

		.xd {
			left: 42.150000px;
		}

		.x12 {
			left: 43.780999px;
		}

		.x0 {
			left: 61.500000px;
		}

		.x14 {
			left: 69.756000px;
		}

		.x9 {
			left: 72.699998px;
		}

		.x13 {
			left: 77.105998px;
		}

		.x11 {
			left: 79.099998px;
		}

		.x15 {
			left: 87.594996px;
		}

		.x16 {
			left: 97.256999px;
		}

		.xa {
			left: 132.100000px;
		}

		.x2 {
			left: 146.798995px;
		}

		.xc {
			left: 150.100000px;
		}

		.xf {
			left: 155.599998px;
		}

		.x3 {
			left: 176.613995px;
		}

		.xe {
			left: 196.099998px;
		}

		.x1 {
			left: 214.641998px;
		}

		.x4 {
			left: 295.146996px;
		}

		.xb {
			left: 312.099992px;
		}

		.x7 {
			left: 348.099992px;
		}

		.x10 {
			left: 370.924995px;
		}

		.x6 {
			left: 385.760002px;
		}

		.x5 {
			left: 454.414009px;
		}

		@media print {
			.v0 {
				vertical-align: 0.000000pt;
			}

			.ls0 {
				letter-spacing: 0.000000pt;
			}

			.ws0 {
				word-spacing: 0.000000pt;
			}

			._0 {
				width: 48.000000pt;
			}

			.fs0 {
				font-size: 64.000000pt;
			}

			.y8 {
				bottom: 4.794666pt;
			}

			.y23 {
				bottom: 7.374654pt;
			}

			.yd {
				bottom: 23.193333pt;
			}

			.y22 {
				bottom: 25.773326pt;
			}

			.y21 {
				bottom: 44.171997pt;
			}

			.y20 {
				bottom: 113.166662pt;
			}

			.y1f {
				bottom: 131.565328pt;
			}

			.y1e {
				bottom: 149.963994pt;
			}

			.y0 {
				bottom: 364.000000pt;
			}

			.y1c {
				bottom: 374.683971pt;
			}

			.y1b {
				bottom: 393.082653pt;
			}

			.y1a {
				bottom: 411.481335pt;
			}

			.y19 {
				bottom: 429.880016pt;
			}

			.y1d {
				bottom: 449.154651pt;
			}

			.y18 {
				bottom: 619.385347pt;
			}

			.y17 {
				bottom: 656.182686pt;
			}

			.y16 {
				bottom: 674.581351pt;
			}

			.y15 {
				bottom: 711.378680pt;
			}

			.y14 {
				bottom: 729.777346pt;
			}

			.y13 {
				bottom: 748.176013pt;
			}

			.y12 {
				bottom: 766.574678pt;
			}

			.y11 {
				bottom: 803.372007pt;
			}

			.y10 {
				bottom: 821.770673pt;
			}

			.yf {
				bottom: 840.169340pt;
			}

			.ye {
				bottom: 858.568005pt;
			}

			.yc {
				bottom: 908.969337pt;
			}

			.yb {
				bottom: 945.766670pt;
			}

			.ya {
				bottom: 964.165337pt;
			}

			.y9 {
				bottom: 982.564003pt;
			}

			.y7 {
				bottom: 1000.962669pt;
			}

			.y6 {
				bottom: 1042.554668pt;
			}

			.y5 {
				bottom: 1097.750662pt;
			}

			.y4 {
				bottom: 1116.149334pt;
			}

			.y3 {
				bottom: 1152.876001pt;
			}

			.y2 {
				bottom: 1171.345333pt;
			}

			.y1 {
				bottom: 1195.262666pt;
			}

			.h5 {
				height: 21.065333pt;
			}

			.h6 {
				height: 39.463999pt;
			}

			.h2 {
				height: 43.375000pt;
			}

			.h4 {
				height: 44.437500pt;
			}

			.h3 {
				height: 45.812500pt;
			}

			.h7 {
				height: 182.266663pt;
			}

			.h1 {
				height: 848.666667pt;
			}

			.h0 {
				height: 1248.000000pt;
			}

			.w4 {
				width: 26.666667pt;
			}

			.w5 {
				width: 50.666667pt;
			}

			.w3 {
				width: 81.866669pt;
			}

			.w6 {
				width: 218.666667pt;
			}

			.w2 {
				width: 254.666667pt;
			}

			.w7 {
				width: 285.133366pt;
			}

			.w1 {
				width: 624.000000pt;
			}

			.w0 {
				width: 816.000000pt;
			}

			.x8 {
				left: 8.533333pt;
			}

			.xd {
				left: 56.200000pt;
			}

			.x12 {
				left: 58.374666pt;
			}

			.x0 {
				left: 82.000000pt;
			}

			.x14 {
				left: 93.007999pt;
			}

			.x9 {
				left: 96.933331pt;
			}

			.x13 {
				left: 102.807997pt;
			}

			.x11 {
				left: 105.466665pt;
			}

			.x15 {
				left: 116.793329pt;
			}

			.x16 {
				left: 129.675999pt;
			}

			.xa {
				left: 176.133333pt;
			}

			.x2 {
				left: 195.731994pt;
			}

			.xc {
				left: 200.133333pt;
			}

			.xf {
				left: 207.466665pt;
			}

			.x3 {
				left: 235.485326pt;
			}

			.xe {
				left: 261.466665pt;
			}

			.x1 {
				left: 286.189331pt;
			}

			.x4 {
				left: 393.529327pt;
			}

			.xb {
				left: 416.133323pt;
			}

			.x7 {
				left: 464.133323pt;
			}

			.x10 {
				left: 494.566661pt;
			}

			.x6 {
				left: 514.346670pt;
			}

			.x5 {
				left: 605.885345pt;
			}
		}

		/*!* Base CSS*/
		#sidebar {
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			width: 250px;
			padding: 0;
			margin: 0;
			overflow: auto
		}

		#page-container {
			position: absolute;
			top: 0;
			left: 0;
			margin: 0;
			padding: 0;
			border: 0
		}

		@media screen {
			#sidebar.opened+#page-container {
				left: 250px
			}

			#page-container {
				bottom: 0;
				right: 0;
				overflow: auto
			}

			.loading-indicator {
				display: none
			}

			.loading-indicator.active {
				display: block;
				position: absolute;
				width: 64px;
				height: 64px;
				top: 50%;
				left: 50%;
				margin-top: -32px;
				margin-left: -32px
			}

			.loading-indicator img {
				position: absolute;
				top: 0;
				left: 0;
				bottom: 0;
				right: 0
			}
		}

		@media print {
			@page {
				margin: 0
			}

			html {
				margin: 0
			}

			body {
				margin: 0;
				-webkit-print-color-adjust: exact
			}

			#sidebar {
				display: none
			}

			#page-container {
				width: auto;
				height: auto;
				overflow: visible;
				background-color: transparent
			}

			.d {
				display: none
			}
		}

		.pf {
			position: relative;
			background-color: white;
			overflow: hidden;
			margin: 0;
			border: 0
		}

		.pc {
			position: absolute;
			border: 0;
			padding: 0;
			margin: 0;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
			display: block;
			transform-origin: 0 0;
			-ms-transform-origin: 0 0;
			-webkit-transform-origin: 0 0
		}

		.pc.opened {
			display: block
		}

		.bf {
			position: absolute;
			border: 0;
			margin: 0;
			top: 0;
			bottom: 0;
			width: 100%;
			height: 100%;
			-ms-user-select: none;
			-moz-user-select: none;
			-webkit-user-select: none;
			user-select: none
		}

		.bi {
			position: absolute;
			border: 0;
			margin: 0;
			-ms-user-select: none;
			-moz-user-select: none;
			-webkit-user-select: none;
			user-select: none
		}

		@media print {
			.pf {
				margin: 0;
				box-shadow: none;
				page-break-after: always;
				page-break-inside: avoid
			}

			@-moz-document url-prefix() {
				.pf {
					overflow: visible;
					border: 1px solid #fff
				}

				.pc {
					overflow: visible
				}
			}
		}

		.c {
			position: absolute;
			border: 0;
			padding: 0;
			margin: 0;
			overflow: hidden;
			display: block
		}

		.t {
			position: absolute;
			white-space: pre;
			font-size: 1px;
			transform-origin: 0 100%;
			-ms-transform-origin: 0 100%;
			-webkit-transform-origin: 0 100%;
			unicode-bidi: bidi-override;
			-moz-font-feature-settings: "liga"0
		}

		.t:after {
			content: ''
		}

		.t:before {
			content: '';
			display: inline-block
		}

		.t span {
			position: relative;
			unicode-bidi: bidi-override
		}

		._ {
			display: inline-block;
			color: transparent;
			z-index: -1
		}

		::selection {
			background: rgba(127, 255, 255, 0.4)
		}

		::-moz-selection {
			background: rgba(127, 255, 255, 0.4)
		}

		.pi {
			display: none
		}

		.d {
			position: absolute;
			transform-origin: 0 100%;
			-ms-transform-origin: 0 100%;
			-webkit-transform-origin: 0 100%
		}

		.it {
			border: 0;
			background-color: rgba(255, 255, 255, 0.0)
		}

		.ir:hover {
			cursor: pointer
		}

		#outline li {
			list-style-type: none;
			margin: 1em 0
		}

		#outline li>ul {
			margin-left: 1em
		}

		#outline a,
		#outline a:visited,
		#outline a:hover,
		#outline a:active {
			line-height: 1.2;
			color: #e8e8e8;
			text-overflow: ellipsis;
			white-space: nowrap;
			text-decoration: none;
			display: block;
			overflow: hidden;
			outline: 0
		}

		#outline a:hover {
			color: #0cf
		}

		#page-container {
			background-color: #9e9e9e;
			background-image: url("data:image/svg+xml; base64, PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1IiBoZWlnaHQ9IjUiPgo8cmVjdCB3aWR0aD0iNSIgaGVpZ2h0PSI1IiBmaWxsPSIjOWU5ZTllIj48L3JlY3Q+CjxwYXRoIGQ9Ik0wIDVMNSAwWk02IDRMNCA2Wk0tMSAxTDEgLTFaIiBzdHJva2U9IiM4ODgiIHN0cm9rZS13aWR0aD0iMSI+PC9wYXRoPgo8L3N2Zz4=");
			-webkit-transition: left 500ms;
			transition: left 500ms
		}

		.pf {
			margin: 13px auto;
			box-shadow: 1px 1px 3px 1px #333;
			border-collapse: separate
		}

		.pc.opened {
			-webkit-animation: fadein 100ms;
			animation: fadein 100ms
		}

		.loading-indicator.active {
			-webkit-animation: swing 1.5s ease-in-out .01s infinite alternate none;
			animation: swing 1.5s ease-in-out .01s infinite alternate none
		}

		.checked {
			background: no-repeat url("data:image/png; base64, iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAB3RJTUUH3goQDSYgDiGofgAAAslJREFUOMvtlM9LFGEYx7/vvOPM6ywuuyPFihWFBUsdNnA6KLIh+QPx4KWExULdHQ/9A9EfUodYmATDYg/iRewQzklFWxcEBcGgEplDkDtI6sw4PzrIbrOuedBb9MALD7zv+3m+z4/3Bf7bZS2bzQIAcrmcMDExcTeXy10DAFVVAQDksgFUVZ1ljD3yfd+0LOuFpmnvVVW9GHhkZAQcxwkNDQ2FSCQyRMgJxnVdy7KstKZpn7nwha6urqqfTqfPBAJAuVymlNLXoigOhfd5nmeiKL5TVTV+lmIKwAOA7u5u6Lped2BsbOwjY6yf4zgQQkAIAcedaPR9H67r3uYBQFEUFItFtLe332lpaVkUBOHK3t5eRtf1DwAwODiIubk5DA8PM8bYW1EU+wEgCIJqsCAIQAiB7/u253k2BQDDMJBKpa4mEon5eDx+UxAESJL0uK2t7XosFlvSdf0QAEmlUnlRFJ9Waho2Qghc1/U9z3uWz+eX+Wr+lL6SZfleEAQIggA8z6OpqSknimIvYyybSCReMsZ6TislhCAIAti2Dc/zejVNWwCAavN8339j27YbTg0AGGM3WltbP4WhlRWq6Q/btrs1TVsYHx+vNgqKoqBUKn2NRqPFxsbGJzzP05puUlpt0ukyOI6z7zjOwNTU1OLo6CgmJyf/gA3DgKIoWF1d/cIY24/FYgOU0pp0z/Ityzo8Pj5OTk9PbwHA+vp6zWghDC+VSiuRSOQgGo32UErJ38CO42wdHR09LBQK3zKZDDY2NupmFmF4R0cHVlZWlmRZ/iVJUn9FeWWcCCE4ODjYtG27Z2Zm5juAOmgdGAB2d3cBADs7O8uSJN2SZfl+WKlpmpumaT6Yn58vn/fs6XmbhmHMNjc3tzDGFI7jYJrm5vb29sDa2trPC/9aiqJUy5pOp4f6+vqeJ5PJBAB0dnZe/t8NBajx/z37Df5OGX8d13xzAAAAAElFTkSuQmCC")
		}
	</style>

	<meta charset="utf-8" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- <link rel="stylesheet" href="base.min.css" />
	<link rel="stylesheet" href="fancy.min.css" />
	<link rel="stylesheet" href="main.css" /> -->
	<script src="compatibility.min.js"></script>
	<script src="theViewer.min.js"></script>
	<script>
		try {
			theViewer.defaultViewer = new theViewer.Viewer({});
		} catch (e) {}
	</script>
	<title>Contoh Surat</title>
</head>

<body>
	<div id="sidebar">
		<div id="outline">
		</div>
	</div>
	<div id="page-container">
		<div id="pf1" class="pf w0 h0" data-page-no="1">
			<div class="pc pc1 w0 h0">
				<img class="bi x0 y0 w1 h1" alt="" src="bg1.png" />
				<div class="t m0 x1 h2 y1 ff1 fs0 fc0 sc0 ls0 ws0">PEMERINTAH KABUPATEN TULUNGAGUNG</div>
				<div class="t m0 x2 h2 y2 ff1 fs0 fc0 sc0 ls0 ws0">DINAS PENDAPATAN, PENGELOLA KEUANGAN DAN ASET DAERAH
				</div>
				<div class="t m0 x3 h3 y3 ff2 fs0 fc0 sc0 ls0 ws0">Jalan ………… No. …………….Telepon ………….. Fax ……….</div>
				<div class="t m0 x4 h2 y4 ff1 fs0 fc0 sc0 ls0 ws0">TULUNG AGUNG</div>
				<!-- <div class="t m0 x5 h4 y5 ff3 fs0 fc0 sc0 ls0 ws0">Kode Pos ………..</div> -->
				<div class="t m0 x6 h4 y6 ff3 fs0 fc0 sc0 ls0 ws0">Tulungagung, <?= $surat_masuk['tgl_surat']; ?></div>
				<div class="c x7 y7 w2 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">Kepada</div>
				</div>
				<div class="c x9 y9 w3 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">Nomor</div>
				</div>
				<div class="c xa y9 w4 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">:</div>
				</div>
				<div class="c xb y9 w5 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">Yth.</div>
				</div>
				<div class="c x7 y9 w2 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0"><?= $surat_masuk['tgl_surat']; ?></div>
				</div>
				<div class="c x9 ya w3 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">Sifat</div>
				</div>
				<div class="c xa ya w4 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">:</div>
				</div>
				<div class="c x7 ya w2 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">mmmmmmmmmmmmmmmmmm</div>
				</div>
				<div class="c x9 yb w3 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">Lampiran</div>
				</div>
				<div class="c xa yb w4 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">:</div>
				</div>
				<div class="c x7 yb w2 h5">
					<div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">di -</div>
				</div>
				<div class="c x9 yc w3 h6">
					<div class="t m0 x8 h4 yd ff3 fs0 fc0 sc0 ls0 ws0">Perihal</div>
				</div>
				<div class="c xa yc w4 h6">
					<div class="t m0 x8 h4 yd ff3 fs0 fc0 sc0 ls0 ws0">:</div>
				</div>
				<div class="c xc yc w6 h6">
					<div class="t m0 x8 h4 yd ff3 fs0 fc0 sc0 ls0 ws0"><?= $surat_masuk['perihal']; ?></div>
					<!-- <div class="t m0 x8 h4 y8 ff3 fs0 fc0 sc0 ls0 ws0">mmmmmmmmmmmmmmmm</div> -->
				</div>
				<div class="c x7 yc w2 h6">
					<div class="t m0 xd h4 yd ff3 fs0 fc0 sc0 ls0 ws0">MMMMMMMMMM</div>
				</div>
				<div class="t m0 xe h4 ye ff3 fs0 fc0 sc0 ls0 ws0">Mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</div>
				<div class="t m0 xf h4 yf ff3 fs0 fc0 sc0 ls0 ws0">mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</div>
				<div class="t m0 xf h4 y10 ff3 fs0 fc0 sc0 ls0 ws0">mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</div>
				<div class="t m0 xf h4 y11 ff3 fs0 fc0 sc0 ls0 ws0">mm.</div>
				<div class="t m0 xe h4 y12 ff3 fs0 fc0 sc0 ls0 ws0">Mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</div>
				<div class="t m0 xf h4 y13 ff3 fs0 fc0 sc0 ls0 ws0">mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</div>
				<div class="t m0 xf h4 y14 ff3 fs0 fc0 sc0 ls0 ws0">mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</div>
				<div class="t m0 xf h4 y15 ff3 fs0 fc0 sc0 ls0 ws0">mm.</div>
				<div class="t m0 xe h4 y16 ff3 fs0 fc0 sc0 ls0 ws0">Mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm</div>
				<div class="t m0 xf h4 y17 ff3 fs0 fc0 sc0 ls0 ws0">mmmmmmmmmmmmmmmmmmmmmmmmmmmm.</div>
				<div class="t m0 x10 h4 y18 ff3 fs0 fc0 sc0 ls0 ws0"> </div>
				<div class="t m0 x11 h4 y19 ff3 fs0 fc0 sc0 ls0 ws0">Tembusan :</div>
				<div class="t m0 x11 h4 y1a ff3 fs0 fc0 sc0 ls0 ws0">1.<span class="_ _0"> </span>Mmmmmmmmmmmm</div>
				<div class="t m0 x11 h4 y1b ff3 fs0 fc0 sc0 ls0 ws0">2.<span class="_ _0"> </span>Mmmmmmmmmmmm</div>
				<div class="t m0 x11 h4 y1c ff3 fs0 fc0 sc0 ls0 ws0">3.<span class="_ _0"> </span>Mmmmmmmmmmmm.</div>
				<div class="c xb y1d w7 h7">
					<div class="t m0 x12 h4 y1e ff3 fs0 fc0 sc0 ls0 ws0">Kepala Dinas Pendapatan, </div>
					<div class="t m0 xd h4 y1f ff3 fs0 fc0 sc0 ls0 ws0">Pengelolaan Keuangan dan </div>
					<div class="t m0 x13 h4 y20 ff3 fs0 fc0 sc0 ls0 ws0">Aset Daerah</div>
					<div class="t m0 x14 h4 y21 ff3 fs0 fc0 sc0 ls0 ws0">NAMA JELAS</div>
					<div class="t m0 x15 h4 y22 ff3 fs0 fc0 sc0 ls0 ws0">Pangkat</div>
					<div class="t m0 x16 h4 y23 ff3 fs0 fc0 sc0 ls0 ws0">NIP</div>
				</div>
			</div>
			<div class="pi" data-data='{"ctm":[1.000000,0.000000,0.000000,1.000000,0.000000,0.000000]}'></div>
		</div>
	</div>
	<div class="loading-indicator">

	</div>
</body>

</html>