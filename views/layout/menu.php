<header id="fh5co-header-section" role="header" class="" >
<!--    <div id="menu-container" class="fluid-container menu-container">-->
<!---->
<!--        <div class="containe">-->
<!--            <h1 id="fh5co-logo" class="pull-left">-->
<!--                <a href="/">-->
<!--                    <img src="/assets/img/logo195x30.png" alt="">-->
<!--                </a>-->
<!--            </h1>-->
<!--            <nav id="fh5co-menu-wrap" role="navigation" class="visible-sm visible-md visible-lg">-->
<!--                <ul class="sf-menu" id="fh5co-primary-menu">-->
<!--                    --><?php
//                        require_once "./views/helpers/menu_items.php";
//                        $menuItems = new MenuItems();
//                        $menuItems->printItems(true);
//                    ?>
<!--                </ul>-->
<!--                <div class="clearfix"></div>-->
<!--            </nav>-->
<!--            <div class="clearfix"></div>-->
<!--        </div>-->
<!--        <div class="clearfix"></div>-->
<!--    </div>-->

    <nav id="fh5co-menu-wrap" class="menu-container" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">
<!--            <ul class="sf-menu" id="fh5co-primary-menu">-->
                <?php
                    require_once "./views/helpers/menu_items.php";
                    $menuItems = new MenuItems();
                    $menuItems->printItems(true);
                ?>
            </ul>
    </nav>

</header>

<style>
    #fh5co-menu-wrap .sf-menu {
        display: inline-block;
        float: none;
    }

    #fh5co-menu-wrap {
        text-align: center;
    }
</style>