<?= $this->extend('App\Views\Layout\main') ?>
<?= $this->section('slider') ?>
    <style>
        .img-bg {
            background-image: linear-gradient(
                to bottom,
                rgb(0 0 0 / 59%),
                rgb(0 0 0 / 72%)
            ), url('<?= base_url('assets/img/tentang.png') ?>'); }
    </style>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center img-bg">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2><?= @$lang->about; ?></h2>
            <ol>
                <li><a href="<?= base_url('/'); ?>"><?= @$lang->home; ?></a></li>
                <li><?= @$lang->about; ?></li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row position-relative">
                <div class="col-lg-7 about-img" style="background-image: url(assets/img/mendung.png);"></div>
                <div class="col-lg-7">
                    <h2><?= @$lang->milestone.' '.@$lang->title; ?></h2>
                    <div class="our-story">
                        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                            <?php foreach (@$list_about as $key => $value) : ?>
                                <div class="carousel-item pt-3 <?= ($key == 0) ? 'active' : '' ?>">
                                    <h4><?= @$lang->year; ?> <?= $value->year; ?></h4>
                                    <h3><?= $value->title; ?></h3>
                                    <p><?= $value->text; ?></p>
                                </div>
                            <?php endforeach; ?>

                            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev" style="color: #000">
                                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next" style="color: #000">
                                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                            </a>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2><?= ucfirst(@$lang->pillar_of_power); ?></h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 p-5">
                    <div class="p-5 shadow-lg" style="background-color: #ffffff;" data-aos="zoom-in">
                        <h4><?= @$lang->social_power; ?></h4>
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/img/kekuatan-sosial.png') ?>" width="100%">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 p-5">
                    <div class="p-5 shadow-lg" style="background-color: #ffffff;" data-aos="zoom-in">
                        <h4><?= @$lang->innovation; ?></h4>
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/img/inovasi.png') ?>" width="100%">
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 p-5">
                    <div class="p-5 shadow-lg" style="background-color: #ffffff;" data-aos="zoom-in">
                        <h4><?= @$lang->solution ?></h4>
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/img/solusi.png') ?>" width="100%">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-5">
                    <div class="p-5 shadow-lg" style="background-color: #ffffff;" data-aos="zoom-in">
                        <h4><?= @$lang->transformation ?></h4>
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/img/tranformasi.png') ?>" width="100%">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 p-5">
                    <div class="p-5 shadow-lg" style="background-color: #ffffff;" data-aos="zoom-in">
                        <h4><?= @$lang->conquer_boundaries ?></h4>
                        <!-- <p>Penjelasan singkat</p> -->
                        <img src="<?= base_url('/assets/img/taklukan-batas.png') ?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>