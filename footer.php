

            <footer id="site-footer" role="contentinfo" class="footer-group">

                <div class="grid grid-col-4">

                    <div class="footer-social">
                        <a href="#" alt="back to home"> <i data-feather="facebook"></i> Home</a>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="link" data-toggle="modal" data-target="#myModal">Bestel</button>
                        <a href="#" alt="link to facebook"> <i data-feather="facebook"></i></a>
                        <a href="#">hallo@heeldeaarde.net</a>
                    </div><!-- .footer-social -->

                    <div class="footer-credits">

                            <a href="<?php echo esc_url( __( '#', 'heeldeaarde' ) ); ?>">
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
              <h4 class="modal-title text-gray-dark">Bestel een magazine</h4>
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
