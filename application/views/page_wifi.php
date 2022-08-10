<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <title>Wifi Service | Hypernet</title>
</head>

<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <img src="<?php echo base_url() ?>assets/img/wifi_caro.jpg" class="d-block w-100" alt="slide_perusahaan">
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
        <h3 style="font-weight:bolder; margin-bottom: 20px; padding-top: 15px; color: #18b190; text-align: center;">DAFTAR LAYANAN WIFI</h3>
        <?php if ($this->session->userdata('username', 'admin')) { ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_wifi" style="margin-bottom: 15px">Tambah Data Layanan Wifi</button>
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
                        <td><?php echo $dat->durasi ?></td>
                        <?php if ($this->session->userdata('username', 'admin')) { ?>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $dat->id_wifi ?>">Edit</button>
                                <a type="button" class="btn btn-danger" href="<?php echo base_url(); ?>index.php/wifi_con/delete_wifi/<?php echo $dat->id_wifi ?>" onClick="return confirm('Apakah Anda Yakin?')">Hapus</a>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <!-- Add Modal -->
    <div class="modal fade" id="add_wifi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Layanan Wifi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url(); ?>index.php/wifi_con/add_wifi">
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
                            <input type="text" class="form-control" placeholder="durasi" name="durasi" required>
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
        <div class="modal fade" id="edit<?php echo $dat->id_wifi ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Layanan Wifi</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url(); ?>index.php/wifi_con/edit_wifi">
                            <input type="hidden" class="form-control" name="id_wifi" value="<?php echo $dat->id_wifi ?>" required>
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
                                <input type="text" class="form-control" placeholder="durasi" name="durasi" value="<?php echo $dat->durasi ?>" required>
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
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/1jBkWJYNV9c" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="col-md text-justify">
                    <div class="col text-center">
                        <h5 style="font-weight:bolder; margin-bottom: 20px; padding-top: 15px; color: #18b190;">JARINGAN KONEKSI YANG DAPAT DISESUAIKAN DAN SISTEM YANG TERINTEGRASI</h5>

                    </div class="col-md text-justify">
                    <p>Sebagai wujud nyata Hypernet dalam meningkatkan nilai layanan informasi dan teknologi
                        kepada pelanggan, Hypernet mengembangkan bermacam bentuk layanan wifi yang dirancang untuk
                        menangani berbagai lingkup pekerjaan di dalam satu perangkat. Layanan WiFi As a Service bertujuan
                        untuk memberikan layanan IT yang efisien bagi penggunanya.
                    </p>
                    <p>
                        Layanan Wifi As A Service Hypernet adalah kombinasi fungsi berbagai macam layanan IT yang dapat menangani
                        bermacam pekerjaan dalam waktu yang bersamaan dan dikelompokkan berdasarkan konteks penggunaannya.
                        Berbasis perangkat keras maupun lunak, layanan Wifi As A Service memberikan solusi yang dapat
                        disesuaikan sepenuhnya berdasarkan kondisi serta kebutuhan pelanggan yang bersangkutan.
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
            <div class="row mb-2">
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
                            <img src="<?php echo base_url() ?>assets/img/wifi-1.jpg" class="card-img-top">
                            <div class="card-body text-center">
                                <h6 class="card-title">WIFI MANAGED SERVICE</h6>
                                <p class="card-text">One stop solution untuk berbagai masalah mulai dari 1 biaya, pengaturan, pemeliharaan, pemecahan masalah, keamanan,
                                    hingga layanan dukungan yang mereka berikan kepada pelanggan mereka.</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Cart 2 -->
                <div class="col-md mb-3">
                    <div class="card">
                        <a href="#" class="text-dark">
                            <img src="<?php echo base_url() ?>assets/img/wifi-2.jpg" class="card-img-top">
                            <div class="card-body text-center">
                                <h5 class="card-title">OPEN WIFI</h5>
                                <p class="card-text">Merupakan aplikasi manajemen WiFi berbasis komputasi awan yang dirancang untuk meningkatkan efektifitas beriklan serta
                                    mengumpulkan database pengguna public hotspot secara online</p>
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