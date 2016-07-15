

<footer role="contentinfo" id="fh5co-footer">
    <a href="#" class="fh5co-arrow fh5co-gotop footer-box"><i class="ti-angle-up"></i></a>
    <div class="container">
        <div class="row">
            <div class="col-md-push-2 col-md-4 col-sm-6 footer-box">
                <h3 class="fh5co-footer-heading">Bush cakes</h3>
                <ul class="fh5co-footer-links">
                    <?php
                        $menuItems->printItems(false);
                    ?>
                </ul>

            </div>
            <div class="col-md-push-2 col-md-4 col-sm-12 footer-box">
                <h3 class="fh5co-footer-heading">Contactanos</h3>
                <? 		require './views/layout/socialnetworks.php'; ?>
            </div>
            <div class="col-md-12 footer-box text-center">
                <div class="fh5co-copyright">
                    <p>&copy; 2016 Bush Cakes</p>
                </div>
            </div>

        </div>
        <!-- END row -->
        <div class="fh5co-spacer fh5co-spacer-md"></div>
    </div>
</footer>