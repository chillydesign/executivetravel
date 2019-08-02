<!-- footer -->
<?php $tdu = get_template_directory_uri(); ?>
<footer class="footer" role="contentinfo">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h3><?php _e('Contactez-nous', 'webfactor'); ?></h3>
          <p><?php _e('Voyages d\’affaires', 'webfactor'); ?>  <br>
            +41 (0)22 929 8 929 <br>
            <a href="mailto:business@e-travel.ch">business@e-travel.ch</a>
          </p>

          <p><?php _e('Voyages d\'agrément', 'webfactor'); ?> <br>
            +41 (0)22 707 73 10 <br>
            <a href="mailto:tourisme@e-travel.ch">tourisme@e-travel.ch</a>
          </p>
          <a target="_blank" href="
          https://www.facebook.com/executivetravelsa/?__tn__=%2Cd%2CP-R&eid=ARBxt-MXwp6WQzXa20F1xBpmDbwQs0rktKA252qvw22xBOJZmdRrAN7UdpuUT3vHZlyW-GxAi4uKZctj" class="social_icon fb_footer">Facebook</a>
          <a target="_blank"  href="https://www.instagram.com/executive_travel_geneve" class="social_icon insta_footer">Instagram</a>
          <div class="fb-like" data-href="https://www.facebook.com/executivetravelsa/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true" style="position: relative; top: 14px;"></div>
        </div>
        <div class="col-sm-8">
          <h3><?php _e('Newsletter', 'webfactor'); ?></h3>
          <p><?php _e('Pour être tenu au courant de nos promotions et actualités vous pouvez vous inscrire à notre newsletter ici', 'webfactor'); ?> </p>

          <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
          <?php $form_widget = new \MailPoet\Form\Widget();
            echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));
          ?>

        <?php else: ?>
          <?php $form_widget = new \MailPoet\Form\Widget();
          echo $form_widget->widget(array('form' => 3, 'form_type' => 'php')); ?>
        <?php endif; ?>

          <div id="garantie_suisse">
              <img src="<?php echo $tdu; ?>/img/logo_garantie_suisse.jpg" alt="logo fond de garantie suisse" />
          </div>

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

</div><!-- END OF rest_of_page -->

<?php wp_footer(); ?>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114588276-8"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114588276-8');
</script>


</body>
</html>
