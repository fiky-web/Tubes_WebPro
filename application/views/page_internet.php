<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <title>Internet Service Provider Terbaik di Jakarta | Hypernet</title>
</head>

<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <img src="<?php echo base_url() ?>assets/img/internet_caro.jpg" class="d-block w-100" alt="slide_perusahaan">
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-5">
                <li class="nav-item mx-5 active">
                    <h6 style="margin-bottom: 20px; padding-top: 15px; color: green;">Produk & Layanan</h6>
                </li>
                <li class="nav-item mx-5 active">
                    <a style="margin-bottom: 20px; padding-top: 15px;" class="nav-link page-scroll" href="<?php echo base_url(); ?>index.php/internet_con/index">Layanan internet</a>
                </li>
                <li class="nav-item mx-5 active">
                    <a style="margin-bottom: 20px; padding-top: 15px;" class="nav-link page-scroll" href="<?php echo base_url(); ?>index.php/wifi_con/index">Layanan wifi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- Table -->
<div class="jumbotron jumbotron-fluid mt-5 bg-white">
    <div class="mx-auto" style="width: 75%; margin-top: 50px; margin-bottom: 50px;">
        <h3 style="font-weight:bolder; margin-bottom: 20px; padding-top: 15px; color: #18b190; text-align: center;">DAFTAR LAYANAN INTERNET</h3>
        <?php if ($this->session->userdata('username', 'admin')) { ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_internet" style="margin-bottom: 15px">Tambah Data Layanan</button>
        <?php } ?>
        <table class="table table-hover table-success" style="margin-top: 25px;" id="table">
            <thead class="thead-success">
                <tr>
                    <th scope="col">Nama Layanan</th>
                    <th scope="col">Jenis Layanan</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Durasi</th>
                    <?php if ($this->session->userdata('username', 'admin')) { ?>
                        <th scope="col">Control</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php $id = 1;
                foreach ($data as $dat) { ?>
                    <tr>
                        <td><?php echo $dat->layanan ?></td>
                        <td><?php echo $dat->jenis_layanan ?></td>
                        <td><?php echo $dat->kategori ?></td>
                        <td><?php echo $dat->Durasi ?></td>
                        <?php if ($this->session->userdata('username', 'admin')) { ?>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $dat->id_internet ?>">Edit</button>
                                <a type="button" class="btn btn-danger" href="<?php echo base_url(); ?>index.php/internet_con/delete_internet/<?php echo $dat->id_internet ?>" onClick="return confirm('Apakah Anda Yakin?')">Hapus</a>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <!-- Add Modal -->
    <div class="modal fade" id="add_internet">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Layanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url(); ?>index.php/internet_con/add_internet">
                        <div class="form-group">
                            <label>Nama layanan</label>
                            <input type="text" class="form-control" placeholder="Nama layanan" name="layanan" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Layanan</label>
                            <input type="text" class="form-control" placeholder="jenis layanan" name="jenis layanan" required>
                        </div>
                        <div class="form-group">
                            <label>Kategori</label>
                            <input type="text" class="form-control" placeholder="Kategori" name="kategori" required>
                        </div>
                        <div class="form-group">
                            <label>Durasi</label>
                            <input type="text" class="form-control" placeholder="Durasi" name="Durasi" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" value="Save Changes">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <?php $id = 1;
    foreach ($data as $dat) { ?>
        <div class="modal fade" id="edit<?php echo $dat->id_internet ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Layanan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url(); ?>index.php/internet_con/edit_internet">
                            <input type="hidden" class="form-control" name="id_internet" value="<?php echo $dat->id_internet ?>" required>
                            <div class="form-group">
                                <label>Nama Layanan</label>
                                <input type="text" class="form-control" placeholder="Nama Layanan" name="layanan" value="<?php echo $dat->layanan ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Layanan</label>
                                <input type="text" class="form-control" placeholder="jenis_layanan" name="jenis_layanan" value="<?php echo $dat->jenis_layanan ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <input type="text" class="form-control" placeholder="Kategori" name="kategori" value="<?php echo $dat->kategori ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Durasi</label>
                                <input type="text" class="form-control" placeholder="Durasi" name="Durasi" value="<?php echo $dat->Durasi ?>" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php } ?>

<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
    });
</script>

<!-- Awal About -->
<div class="jumbotron jumbotron-fluid mt-5 bg-light">
    <section id="about" class="about">
        <div class="container">
            <div class="row">
            </div>
            <div class="row">
                <div class="col-md text-justify">
                    <img src="<?php echo base_url(); ?>assets/img/internet.jpg" height="350">
                </div>
                <div class="col-md text-justify">
                    <div class="col text-center">
                        <h5 style="font-weight:bolder; margin-bottom: 20px; padding-top: 15px; color: #18b190;">LAYANAN KONEKSI INTERNET
                            YANG DAPAT DI SESUAIKAN DENGAN KEBUTUHAN ANDA</h5>
                    </div class="col-md text-justify">
                    <p>Internet merupakan salah satu kebutuhan utama bagi masyarakat global.
                        Menyadari bahwa para pelaku bisnis di Indonesia membutuhkan layanan
                        sambungan internet yang optimal agar mampu mengejar perkembangan
                        industri dunia, Hypernet mengembangkan bentuk layanan sambungan internet
                        yang sepenuhnya dapat disesuaikan dengan kebutuhan pengguna.
                        Dengan layanan koneksi internet yang dapat disesuaikan menjadikan
                        Hypernet service provider terbaik di Jakarta, Bali, Makassar, Semarang, Surabaya.
                    </p>
                    <p>
                        Bentuk layanan sambungan internet yang dikembangkan oleh Hypernet
                        berbasis 6 model infrastruktur jaringan, yaitu jaringan nirkabel, internet fiber optic,
                        jaringan satelit, jaringan Closed User Group, jaringan Advanced Closed User Group
                        dan SD WAN. Dengan 6 infrastruktur tersebut, Hypernet leluasa dalam
                        memberikan bentuk pelayanan sambungan internet yang sepenuhnya
                        dapat disesuaikan dengan kebutuhan, situasi, dan kondisi pengguna.
                    </p>
                </div>
            </div>
        </div>
</div>
</section>
</div>

<!-- Awal Kategori -->
<div class="jumbotron jumbotron-fluid mt-5 bg-white">
    <section id="kategori" class="kategori mt-5">
        <div class="container">

            <!-- Baris Judul -->
            <div class="row mb-4">
                <div class="col text-center">
                    <h2 style="font-weight:bolder; margin-bottom: 20px; padding-top: 15px; color: #18b190;">KATEGORI PRODUK</h2>

                </div>
            </div>

            <!-- Baris Cart 1 -->
            <div class="row mb-4">
                <div class="col-md mb-3">
                    <!-- Cart 1 -->
                    <div class="card">
                        <a href="#" class="text-dark">
                            <img src="<?php echo base_url() ?>assets/img/fion1.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title">FION</h6>
                                <p class="card-text">Merupakan bentuk layanan sambungan internet untuk kebutuhan kapasitas
                                    bandwidth besar dan berkecepatan tinggi dengan infrastruktur fiber optic.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Cart 2 -->
                <div class="col-md mb-3">
                    <div class="card">
                        <a href="#" class="text-dark">
                            <img src="<?php echo base_url() ?>assets/img/airin1.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title">AIRIN</h5>
                                <p class="card-text">Merupakan bentuk layanan sambungan internet menggunakan media radio
                                    fix wireless berbasis frekuensi 5Ghz dan media modem 4G.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Cart 3 -->
                <div class="col-md mb-3">
                    <div class="card">
                        <a href="#" class="text-dark">
                            <img src="<?php echo base_url() ?>assets/img/vsat1.png" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title">V-SAT</h5>
                                <p class="card-text">Merupakan bentuk layanan sambungan internet menggunakan media satelit.

                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="row mb-4">
    <div class="col text-center">
        <a type="button" href="<?php echo base_url(); ?>index.php/main_con/contact" class="btn btn-success btn-lg">Dapatkan Layanan Ini</a>
    </div>
</div>


<!-- carousel -->
<a href="<?php echo base_url(); ?>index.php/main_con/contact" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <img src="<?php echo base_url() ?>assets/img/carousel-5.jpg" class="d-block w-100" alt="slide_perusahaan">
    </div>
</a>