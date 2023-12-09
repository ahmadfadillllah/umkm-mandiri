<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>E-Certificate UMKM Mandiri</title>
    <meta name="description" content="Kegiatan Seminar Nasional Pemberdayaan Ekonomi Ummat dengan tema
    Melalui UMKM Mandiri & Handal kita wujudkan Indonesia Emas 2045
    di Makassar yang diselenggarakan oleh
    Dewan Pimpinan Daerah Lembaga Dakwah Islam Indonesia (LDII) Kota Makassar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
  ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="https://ldiijatim.com/wp-content/uploads/2022/02/cropped-logo-ldii-jatim.png">
    <!-- Google Fonts
  ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/bootstrap.min.css">
    <!-- font awesome CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/font-awesome.min.css">
    <!-- owl.carousel CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/owl.theme.css">
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/owl.transitions.css">
    <!-- meanmenu CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/meanmenu/meanmenu.min.css">
    <!-- animate CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/animate.css">
    <!-- normalize CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/normalize.css">
    <!-- wave CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/wave/waves.min.css">
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/wave/button.css">
    <!-- mCustomScrollbar CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- Notika icon CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/notika-custom-icon.css">
    <!-- Data Table JS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/jquery.dataTables.min.css">
    <!-- main CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/main.css">
    <!-- style CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/style.css">
    <!-- responsive CSS
  ============================================ -->
    <link rel="stylesheet" href="{{ asset('umkm') }}/css/responsive.css">
    <!-- modernizr JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <br>
    <div class="breadcomb-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="breadcomb-list">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcomb-wp">
                            <div class="breadcomb-icon">
                                <i class="notika-icon notika-windows"></i>
                            </div>
                            <div class="breadcomb-ctn">
                                <h2>E-Certificate UMKM Mandiri</h2>
                                <p>Silahkan mencari sertifikatnya masing-masing, dan menekan tombol download,, jika nama
                                    tidak ada silahkan hubungi (Jihan Hulwah Syahrin: +62 823-4175-8014)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="data-table-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="data-table-list">
                <div class="table-responsive">
                    <table id="data-table-basic" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($peserta as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td><a href="{{ route('sertifikat', $item->id) }}" class="btn btn-primary" target="_blank">Lihat</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="breadcomb-area">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="breadcomb-list">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="breadcomb-wp">
                            <div class="breadcomb-icon">
                                <img src="https://ldiijatim.com/wp-content/uploads/2022/02/cropped-logo-ldii-jatim.png" alt="" width="30px">
                            </div>
                            <div class="breadcomb-ctn">
                                <p>Copyright © 2023 LDII Kota Makassar. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Data Table area End-->
    <!-- Start Footer area-->
    {{-- <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2023. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Footer area-->
    <!-- jquery
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/bootstrap.min.js"></script>
    <!-- wow JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/wow.min.js"></script>
    <!-- price-slider JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{ asset('umkm') }}/js/counterup/waypoints.min.js"></script>
    <script src="{{ asset('umkm') }}/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- sparkline JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{ asset('umkm') }}/js/sparkline/sparkline-active.js"></script>
    <!-- flot JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/flot/jquery.flot.js"></script>
    <script src="{{ asset('umkm') }}/js/flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('umkm') }}/js/flot/flot-active.js"></script>
    <!-- knob JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/knob/jquery.knob.js"></script>
    <script src="{{ asset('umkm') }}/js/knob/jquery.appear.js"></script>
    <script src="{{ asset('umkm') }}/js/knob/knob-active.js"></script>
    <!--  Chat JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/chat/jquery.chat.js"></script>
    <!--  todo JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/todo/jquery.todo.js"></script>
    <!--  wave JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/wave/waves.min.js"></script>
    <script src="{{ asset('umkm') }}/js/wave/wave-active.js"></script>
    <!-- plugins JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/plugins.js"></script>
    <!-- Data Table JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/data-table/jquery.dataTables.min.js"></script>
    <script src="{{ asset('umkm') }}/js/data-table/data-table-act.js"></script>
    <!-- main JS
  ============================================ -->
    <script src="{{ asset('umkm') }}/js/main.js"></script>
    <!-- tawk chat JS
</body>

</html>
