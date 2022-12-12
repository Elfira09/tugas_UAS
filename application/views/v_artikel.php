<!DOCTYPE html>
<html lang="en">

<!--/ Section Blog Star /-->
<section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <h3 class="title-a">
                        Blog
                    </h3>
                    <p class="subtitle-a">
                        Artikel Terbaru Dari Kami.
                    </p>
                    <div class="line-mf"></div>
                </div>
            </div>
        </div>
        <div class="row">

            <?php foreach ($artikel as $a) { ?>
            <div class="col-md-4">
                <div class="card card-blog">
                    <div class="card-img">
                        <a href="<?php echo base_url() . $a->artikel_slug ?>">
                            <?php if ($a->artikel_sampul != "") { ?>
                            <img src="<?php echo base_url(); ?>gambar/artikel/<?php echo $a->artikel_sampul ?>" alt=""
                                class="img-fluid">
                            <?php } ?>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="card-category-box">
                            <div class="card-category">
                                <h6 class="category"><?php echo $a->kategori_nama ?></h6>
                            </div>
                        </div>

                        <h3 class="card-title"><a
                                href="<?php echo base_url() . $a->artikel_slug ?>"><?php echo $a->artikel_judul ?></a>
                        </h3>

                    </div>
                    <div class="card-footer">
                        <div class="post-author">
                            <a href="#">
                                <span class="author"><?php echo $a->pengguna_nama; ?></span>
                            </a>
                        </div>
                        <div class="post-date">
                            <span class="ion-ios-clock-outline"></span>
                            <?php echo date('d-M-Y', strtotime($a->artikel_tanggal)); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>