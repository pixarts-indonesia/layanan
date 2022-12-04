<?= $this->extend('App\Views\Layout\main') ?>
<?= $this->section('slider') ?>
    <style>
        .img-bg {
            background-image: linear-gradient(
                to bottom,
                rgb(0 0 0 / 59%),
                rgb(0 0 0 / 72%)
            ), url('<?= base_url('assets/img/kontak.png') ?>');
        }
    </style>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center img-bg">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2><?= @$lang->contact; ?></h2>
            <ol>
                <li><a href="<?= base_url('/'); ?>"><?= @$lang->home; ?></a></li>
                <li><?= @$lang->contact; ?></li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->
<?= $this->endSection() ?>

<?= $this->section('content') ?>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-map"></i>
                        <h3><?= @$lang->address ?></h3>
                        <p>-</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3><?= @$lang->email; ?></h3>
                        <a href="mailto:informasi@pintukeluar.id">informasi@pintukeluar.id</a>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-telephone"></i>
                        <h3><?= @$lang->phone; ?></h3>
                        <a href="tel:6283862080888">+62 838-6208-0888</a>
                    </div>
                </div><!-- End Info Item -->
            </div>

            <div class="row gy-4 mt-1">
                <div class="col-lg-6 ">
                    <iframe src="https://maps.google.com/maps?q=indonesia&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
                </div><!-- End Google Maps -->
                <div class="col-lg-6">
                    <form data-aos="fade-up" class="php-email-form">
                        <div class="row gy-4">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="<?= @$lang->name; ?> *">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="mail" placeholder="<?= @$lang->email; ?> *">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" placeholder="<?= @$lang->message; ?> *" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <a href="#" class="btn btn-secondary"><?= @$lang->sand; ?></a>
                            </div>
                        </div>
                    </form>
                </div><!-- End Contact Form -->
            </div>
        </div>
    </section><!-- End Contact Section -->

<?= $this->endSection() ?>