<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Style.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <!-- Style.css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style2.css">
    <!--Slide.css-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/slide.css">
    <!--all.css-->
    <link rel="stylesheet" href="<?php echo base_url() ?>css/all.css">
    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- DataTable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
</head>

<body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand ml-5" href="<?php echo base_url(); ?>index.php/main_con/index"><img src="<?php echo base_url(); ?>assets/img/hyper.png" height="50" width="150"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav md-4">
                    <li class="nav-item mx-0 active">
                        <div class="dropdown show">
                            <a class="btn btn-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                TENTANG KAMI
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/main_con/company">Sekilas Tentang Perusahaan</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/main_con/about">Team Tubes</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mx-0 active">
                        <div class="dropdown show">
                            <a class="btn btn-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PRODUK & LAYANAN
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/internet_con/index">Layanan Internet</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/wifi_con/index">Layanan Wifi</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mx-3 active">
                        <a class="nav-link page-scroll" href="<?php echo base_url(); ?>index.php/main_con/artikel">BERITA & ARTIKEL</a>
                    </li>
                    <li class="nav-item mx-3 active">
                        <a class="nav-link page-scroll" href="<?php echo base_url(); ?>index.php/promo_con/index">PROMO</a>
                    </li>
                    <li class="nav-item mx-3 active">
                        <a class="nav-link page-scroll" href="<?php echo base_url(); ?>index.php/main_con/contact">HUBUNGI KAMI</a>
                    </li>
                    <?php if ($this->session->userdata('username', 'admin')) { ?>
                        <li class="nav-item mx-3 active">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php/main_con/logout">LOGOUT</a>
                        <?php } else { ?>
                        <li class="nav-item mx-3 active">
                            <a class="nav-link" href="<?php echo base_url(); ?>index.php/main_con/login">LOGIN ADMIN</a>
                        <?php }; ?>

                </ul>
                <div class="fixed-top-right ml-3">
                    <h6 class="button button1" style="position: relative;color:black;font-weight: 0;"><img src="<?php echo base_url(); ?>assets/img/contact.jpg" height="70" width="250"></h6>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->