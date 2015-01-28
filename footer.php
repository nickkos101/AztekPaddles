<footer>
    <div class="newsletter">
    <div class="mini-container">
        <div class="col-wrap">
            <div class="column half">
                <h5>Stay Fresh &amp; Informed</h5>
                <p>Enter e-mail to stay informed about Aztek goings on and special promotions.</p>
            </div>
            <div class="column half talignright">
                <form>
                    <input type="email" placeholder="Enter your Email.">
                    <button><i class="fa fa-angle-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
    <div class="mini-container footer-nav">
        <div class="col-wrap">
            <div class="column fifth mobile-hide">
                <img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png">
            </div>
            <div class="column fifth">
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
            <div class="column fifth">
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div>
            <div class="column fifth">
                <?php dynamic_sidebar( 'sidebar-4' ); ?>
            </div>
            <div class="column fifth">
                <?php dynamic_sidebar( 'sidebar-5' ); ?>
            </div>
            <div class="column full taligncenter">
                <p class="copyright">&copy; Aztek Paddles A. BST Nano Carbon Company 2015. All Rights Reserved. <a href="http://inspyregroup.com" target="_blank" title="ecommerce web design">Ecommerce design by INSPYRE.</a></p>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>