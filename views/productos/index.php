<? require_once "./views/layout/menu.php" ?>

<div id="fh5co-main">

    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-push-4" id="fh5co-content">
                <div class="content-box animate-box">
                    <h2>Nuestros productos</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam dolor quas inventore hic
                        delectus, temporibus vel voluptate nemo, repellat eaque nostrum ducimus numquam repudiandae nam.
                        Quibusdam quaerat aspernatur commodi accusantium obcaecati pariatur vel eos quas vero quae rerum
                        nemo nihil non laborum labore magni numquam adipisci voluptatum, voluptates soluta. Vel!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur optio iusto officiis culpa
                        expedita rem nisi repudiandae quas, eveniet, neque nihil pariatur! Doloribus, sunt? Maiores
                        ipsum temporibus consectetur voluptas, placeat perspiciatis officia, distinctio repellat earum.
                    </p>

                </div>

<!--                <div class="fh5co-spacer fh5co-spacer-md"></div>-->

                <div class="row fh5co-cards" id="fh5co-works" style="background-color: transparent">
                    <?foreach ($menuItems->getSubitems("productos") as $item) {?>
                        <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12 fh5co-work-item work-box">
                            <div class="fh5co-card" href="#">
                                <img src="http://lorempixel.com/445/320" alt="Free HTML5 Bootstrap template" class="img-responsive">
                                <div class="fh5co-card-body">
                                    <h3><? echo $item->tag?></h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sunt porro delectus cum officia magnam.</p>
                                    <a href="<? echo $item->link?>" class="link">Read more</a>
                                </div>
                            </div>
                        </div>
                    <?}?>
                </div>

            </div>

            <? require './views/productos/sidebar.php'; ?>


        </div>
    </div>


</div>

<? require_once "./views/layout/footer.php" ?>
