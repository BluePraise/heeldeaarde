</div>

            <footer id="site-footer" role="contentinfo" class="footer-group">

                <div class="flex">

                    <div class="footer-menu">
                        <a class="nav-link" href="<?php echo site_url(); ?>" alt="back to home"></i> Home</a>
                        <a class="nav-link" href="<?php echo site_url('/magazine'); ?>" alt="to magazine"></i>Catalogus</a>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="link" data-toggle="modal" data-target="#myModal">Bestel</button>
                        <a href="mailto:hallo@heeldeaarde.net" alt="email will open to contact site">Contact</a>
                        <div class="footer-social social-icons">
                            <a class="link-icon-insta" href="https://www.instagram.com/heeldeaarde/" alt="link to instagram"> <i data-feather="instagram"></i></a>
                            <a class="link-icon-fb" href="https://www.facebook.com/heeldeaardetijdschrift" alt="link to facebook"> <i data-feather="facebook"></i></a>
                    </div>
                    </div><!-- .footer-social -->


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
              <h4 class="modal-title text-gray-dark">Ik bestel graag een papieren catalogus
<br>en bepaal zelf de prijs via een donatie.</h4>
            </div>
            <div class="modal-body">
              <?php echo do_shortcode( '[contact-form-7 id="35" title="Contactformulier 1"]'); ?>
            </div>
          </div>

        </div>
    </div>

        <?php wp_footer(); ?>
        <script>
            feather.replace()
        </script>
    </body>
</html>
