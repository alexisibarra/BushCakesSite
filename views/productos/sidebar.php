<div class="col-md-4 col-md-pull-8 left-sidebar animate-box" id="fh5co-sidebar">
    <? if ($data['subsection']){?>
    <div class="sidebar-box animate-box">
        <h3 class="sidebar-heading"><span class="border"></span>Nuestros productos</h3>
        <ul class="sidebar-links">
            <?php $menuItems->printSubitems("productos");?>
        </ul>
    </div>
    <?}?>

    <div class="sidebar-box">
        <h3 class="sidebar-heading"><span class="border"></span>Contactanos</h3>
        <? 		require './views/layout/socialnetworks.php'; ?>
    </div>

    <div class="sidebar-box animate-box">
        <h3 class="sidebar-heading"><span class="border"></span>Suscribete</h3>

        <form action="#" method="post">
            <div class="form-group">
                <label for="name" class="sr-only">Email</label>
                <input placeholder="Name" id="name" type="text" class="form-control input-lg">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg " value="Send">

            </div>
        </form>
    </div>
</div>