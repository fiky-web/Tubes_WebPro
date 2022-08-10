<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
    <title>Promo | Hypernet</title>
</head>

<!-- carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <img src="<?php echo base_url() ?>assets/img/promo_caro.jpg" class="d-block w-100" alt="slide_perusahaan">
    </div>
</div>

<div class="jumbotron jumbotron-fluid mt-5 bg-white">
    <div class="mx-auto" style="width: 75%; margin-top: 50px; margin-bottom: 50px;">
        <h3 style="text-align: center; font-weight:bolder; margin-bottom: 20px; padding-top: 15px; color: #18b190;">DAFTAR PROMO LAYANAN</h3>
        <?php if ($this->session->userdata('username', 'admin')) { ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_promo" style="margin-bottom: 15px">Tambah Data Promo</button>
        <?php } ?>
        <table class="table table-hover table-success" style="margin-top: 25px;" id="table">
            <thead class="thead-success">
                <tr>
                    <th scope="col">Nama Promo</th>
                    <th scope="col">Besaran Potongan</th>
                    <th scope="col">Durasi Promo</th>
                    <?php if ($this->session->userdata('username', 'admin')) { ?>
                        <th scope="col">Control</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php $id = 1;
                foreach ($data as $dat) { ?>
                    <tr>
                        <td><?php echo $dat->promo ?></td>
                        <td><?php echo $dat->potongan ?></td>
                        <td><?php echo $dat->durasi ?></td>
                        <?php if ($this->session->userdata('username', 'admin')) { ?>
                            <td>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit<?php echo $dat->id_promo ?>">Edit</button>
                                <a type="button" class="btn btn-danger" href="<?php echo base_url(); ?>index.php/promo_con/delete_promo/<?php echo $dat->id_promo ?>" onClick="return confirm('Apakah Anda Yakin?')">Hapus</a>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <div class="modal fade" id="add_promo">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Promo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="<?php echo base_url(); ?>index.php/promo_con/add_promo">
                        <div class="form-group">
                            <label>Nama Promo</label>
                            <input type="text" class="form-control" placeholder="promo" name="promo" required>
                        </div>
                        <div class="form-group">
                            <label>Besaran Potongan</label>
                            <input type="text" class="form-control" placeholder="potongan" name="potongan" required>
                        </div>
                        <div class="form-group">
                            <label>Durasi Promo</label>
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

    <?php $id = 1;
    foreach ($data as $dat) { ?>
        <div class="modal fade" id="edit<?php echo $dat->id_promo ?>">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Data Promo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?php echo base_url(); ?>index.php/promo_con/edit_promo">
                            <input type="hidden" class="form-control" name="id_promo" value="<?php echo $dat->id_promo ?>" required>
                            <div class="form-group">
                                <label>Nama Promo</label>
                                <input type="text" class="form-control" placeholder="promo" name="promo" value="<?php echo $dat->promo ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Besaran Potongan</label>
                                <input type="text" class="form-control" placeholder="potongan" name="potongan" value="<?php echo $dat->potongan ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Durasi Promo</label>
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


<div class="jumbotron jumbotron-fluid mt-5 bg-ligth">
    <section id="promosi" class="promosi mt-5">
        <div class="container">


            <div class="row mb-4">
                <div class="col text-center">
                    <h2 style="font-weight:bolder; margin-bottom: 20px; padding-top: 15px; color: #18b190;">PROMO DARI KAMI</h2>
                    <p>Dapatkan Seluruh Informasi Tentang Program Promosi Kami</p>
                    <hr>
                </div>
            </div>

            <!-- Baris Cart 1 -->
            <div class="row mb-4">
                <div class="col-md mb-3">
                    <!-- Cart 1 -->
                    <div class="card">
                        <a href="#" class="text-dark">
                            <img src="<?php echo base_url(); ?>assets/img/promo1.jpg" class="card-img-top">
                            <div class="card-body">
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Cart 2 -->
                <div class="col-md mb-3">
                    <div class="card">
                        <a href="#" class="text-dark">
                            <img src="<?php echo base_url(); ?>assets/img/promo2.jpg" class="card-img-top">
                            <div class="card-body">
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Cart 3 -->
                <div class="col-md mb-3">
                    <div class="card">
                        <a href="#" class="text-dark">
                            <img src="<?php echo base_url(); ?>assets/img/promo3.jpg" class="card-img-top">
                            <div class="card-body">
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Baris Card 2 -->
            <div class="row mb-4">

                <!-- Cart 4 -->
                <div class="col-md mb-3">
                    <div class="card">
                        <a href="#" class="text-dark">
                            <img src="<?php echo base_url(); ?>assets/img/promo4.jpg" class="card-img-top">
                            <div class="card-body">
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Cart 5 -->
                <div class="col-md mb-3">
                    <div class="card">
                        <a href="#" class="text-dark">
                            <img src="<?php echo base_url(); ?>assets/img/promo5.jpg" class="card-img-top">
                            <div class="card-body">
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Cart 6 -->
                <div class="col-md mb-3">
                    <div class="card">
                        <a href="#" class="text-dark">
                            <img src="<?php echo base_url(); ?>assets/img/promo6.jpg" class="card-img-top">
                            <div class="card-body">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
    </section>
</div>

<!-- carousel -->
<a href="<?php echo base_url(); ?>index.php/main_con/contact" id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <img src="<?php echo base_url() ?>assets/img/carousel-5.jpg" class="d-block w-100" alt="slide_perusahaan">
    </div>
</a>