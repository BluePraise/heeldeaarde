</div>

            <footer id="site-footer" role="contentinfo" class="footer-group">

                <div class="flex">
                    <?php if ( is_active_sidebar( 'footer-widget-area-1' ) ) : ?>
                        <?php dynamic_sidebar('footer-widget-area-1'); ?>
                    <?php else: ?>
                    <div class="footer-menu">
                        <a class="nav-link" href="<?php echo site_url(); ?>" alt="back to home"></i> Home</a>
                        <a class="nav-link" href="<?php echo site_url('/magazine'); ?>" alt="to magazine"></i>Catalogus</a>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="link" data-toggle="modal" data-target="#myModal">Bestel</button>
                        <a href="mailto:hallo@heeldeaarde.net" alt="email will open to contact site">Contact</a>
                        <div class="footer-social social-icons">
                            <a class="social-link" href="https://www.instagram.com/heeldeaarde/" alt="link to instagram">Instagram</a>
                            <a class="social-link" href="https://www.facebook.com/heeldeaardegids" alt="link to facebook">Facebook</a>
                        </div> <!-- .footer-social -->
                    </div> <!-- .footer-menu -->
                    <?php endif; ?>

                    <div class="footer-credits">

                            <a href="<?php echo site_url('/magazine/');  ?>">
                                <?php _e( 'Whole <br> Commons <br> Catalog', 'heeldeaarde' ); ?>
                            </a><!-- .powered-by-whole-commons-catalog -->

                    </div><!-- .footer-credits -->

                </div><!-- .section-inner -->

            </footer><!-- #site-footer -->
            </div><!-- .wrappers -->

  <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title text-gray-dark">Ik bestel graag een papieren catalogus <br>en bepaal zelf het bedrag via een donatie</h4>
            </div>
            <div class="modal-body">
              <?php echo do_shortcode( '[contact-form-7 id="88" title="Bestelformulier"]'); ?>
            </div>
          </div>

        </div>
    </div>
        <script>
            $('.js-toggle-on-click').on('click') {
                $(this).toggle(400);
            }
        </script>
        <?php wp_footer(); ?>
    </body>
</html>
