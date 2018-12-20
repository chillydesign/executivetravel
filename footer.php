<!-- footer -->
<footer class="footer" role="contentinfo">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>Contactez-nous</h3>
                    <p>Voyages d’affaires  <br>
                        +41 (0)22 929 8 929 <br>
                        <a href="mailto:affaires@e-travel.ch">affaires@e-travel.ch</a>
                    </p>

                    <p>Voyages d’agrément br
                        +41 (0)22 707 73 10 br
                        <a href="mailto:info@e-travel.ch">info@e-travel.ch</a>
                    </p>
                </div>
                <div class="col-sm-8">
                    <h3>Newsletter</h3>
                    <p>Pour être tenu au courant de nos promotions et actualités vous pouvez vous inscrire à notre newsletter ici </p>
                <form action="" method="post">
                    <input type="text" id="first_name" name="first_name" placeholder="Prénom" />
                    <input type="text" id="last_name" name="last_name" placeholder="Nom" />
                    <input type="text" id="email" name="email" placeholder="Adresse email" />
                    <input type="submit" id="submit_form" name="submit_form" value="S’inscrire" />
                </form>

                </div>
            </div>
        </div>

    </div>

    <div class="footer_bottom">
        <p class="container">
            &copy; <?php echo date('Y'); ?> Copyright ©<?php bloginfo('name'); ?> | Website by <a href="//webfactor.ch" title="Webfactor">Webfactor</a>
        </p>
    </div>

</footer>
<!-- /footer -->



<?php wp_footer(); ?>
<?php $tdu = get_template_directory_uri(); ?>
<script type='text/javascript' src='//maps.google.com/maps/api/js?key=AIzaSyA0MhoPPsfQ5valqUXSBMDROB9rAhbsvxs&#038;ver=4.8.1'></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/min/slick.min.js"></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/min/jquery.matchHeight.js"></script>
<script type="text/javascript" src="<?php echo $tdu; ?>/js/scripts.js?v=<?php echo wf_version(); ?>"></script>

<script>
// (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
// (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
// l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
// ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
// ga('send', 'pageview');
</script>

</body>
</html>
