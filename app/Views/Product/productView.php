<?= $this->extend('App\Views\Layout\main') ?>
<?= $this->section('slider') ?>
    <style>
        .img-bg {
            background-image: linear-gradient(
                to bottom,
                rgb(0 0 0 / 59%),
                rgb(0 0 0 / 72%)
            ), url('<?= base_url('assets/img/produk.png') ?>');
        }
    </style>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center img-bg">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
            <h2><?= @$lang->product; ?></h2>
            <ol>
                <li><a href="<?= base_url('/'); ?>"><?= @$lang->home; ?></a></li>
                <li><?= @$lang->product; ?></li>
            </ol>
        </div>
    </div><!-- End Breadcrumbs -->
<?= $this->endSection() ?>
<?= $this->section('content') ?>
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