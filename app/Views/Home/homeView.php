<?= $this->extend('App\Views\Layout\main') ?>

<?= $this->section('slider') ?>
    <style>
        .img-bg {
            background-image: linear-gradient(
                to bottom,
                rgb(0 0 0 / 59%),
                rgb(0 0 0 / 72%)
            ), url('<?= base_url('assets/images/bg_1.jpg') ?>');
        }
    </style>
    
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                <h2 data-aos="fade-down"><?= @$lang->sub_slider; ?></h2>
                </div>
            </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active" style="background-image: url(assets/img/slider/slider-1.png)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/slider/slider-2.png)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/slider/slider-3.png)"></div>
            <div class="carousel-item" style="background-image: url(assets/img/slider/slider-4.png)"></div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2><?= @$lang->service; ?></h2>
                <p><?= @$lang->sub_satu; ?></p>
            </div>

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-sun"></i>
                    </div>
                    <h3>Cerah</h3>
                    <!-- <p>Cerah</p> -->
                </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-cloud"></i>
                    </div>
                    <h3>Awan</h3>
                    <!-- <p>Cerah</p> -->
                </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon">
                        <i class="fa-solid fa-umbrella"></i>
                    </div>
                    <h3>Payung</h3>
                    <!-- <p>Cerah</p> -->
                </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon">
                        <img class="img" src="<?= base_url('assets/icon/cloud-sun.png') ?>" width="50">
                    </div>
                    <h3>Mendung</h3>
                    <!-- <p>Mendung</p> -->
                </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item position-relative">
                    <div class="icon">
                        <img class="img" src="<?= base_url('assets/icon/cloud-rain.png') ?>" width="50">
                    </div>
                    <h3>Hujan</h3>
                    <!-- <p>Hujan</p> -->
                </div>
                </div><!-- End Service Item -->

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item position-relative">
                    <div class="icon">
                        <img class="img" src="<?= base_url('assets/icon/cloud-lightning.png') ?>" width="50">
                    </div>
                    <h3>Petir</h3>
                    <!-- <p>Petir</p> -->
                </div>
                </div><!-- End Service Item -->

            </div>

        </div>
    </section><!-- End Services Section -->
    
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
                                    <!-- <div class="watch-video d-flex align-items-center position-relative">
                                        <i class="bi bi-play-circle"></i>
                                        <a href="" class="glightbox stretched-link">Watch Video</a>
                                    </div> -->
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
    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">
            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <?php foreach (@$category as $key => $value) : ?>
                        <li data-filter=".filter-<?= strtolower($value->code_category); ?>"><?= $value->name; ?></li>
                    <?php endforeach; ?>
                </ul><!-- End Projects Filters -->

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <?php foreach (@$product as $key => $value) : ?>
                        <div class="col-lg-4 col-md-6 portfolio-item filter-<?= strtolower($value->code_category); ?>">
                            <div class="portfolio-content h-100">
                            <img src="assets/img/projects/<?= $value->img; ?>" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4><?= $value->name; ?></h4>
                                    <p><?= $value->description; ?></p>
                                    <a href="assets/img/projects/<?= $value->img; ?>" title="<?= $value->name; ?>" data-gallery="portfolio-gallery-<?= strtolower($value->code_category); ?>" class="glightbox preview-link">
                                        <i class="bi bi-zoom-in"></i>
                                    </a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->
                    <?php endforeach; ?>

                </div><!-- End Projects Container -->

            </div>
        </div>
    </section><!-- End Our Projects Section -->

<?= $this->endSection() ?>