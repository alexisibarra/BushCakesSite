<? require_once "./views/layout/menu.php" ?>

<div id="fh5co-main">

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-push-4" id="fh5co-content">
                <div class="content-box animate-box">
                    <h2><? echo $producto->name ?></h2>
                    <p class="fh5co-category" style="font-size: 14px">
                        <? echo $producto->description ?>
                    </p>

                    <div class="owl-carousel animate-box">
                        <? foreach ($producto->images as $image) {?>
                            <div class="item">
                                <a href="<? echo $image?>" class="image-popup">
                                    <img src="<? echo $image?>" alt="image">
                                </a>
                            </div>
                        <? } ?>
                    </div>

                    <div class="fh5co-spacer fh5co-spacer-md"></div>

                    <div class="animate-box">
                        <? echo $producto->info ?>
                    </div>
                </div>
            </div>

            <? require './views/productos/sidebar.php'; ?>
        </div>
    </div>

</div>

<? require_once "./views/layout/footer.php" ?>
