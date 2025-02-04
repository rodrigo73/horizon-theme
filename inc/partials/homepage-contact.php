<section id="contact">
    <div class="content">
        <div class="col-md-6 contact-form">
            <?php
                horizon_header(
                    'Contact the <span>Horizon</span>',
                    'Our Work is your satisfaction'
                );
            ?>
            <form class="horizon-form">
                <!-- Input Name-->
                <div class="form-group">
                    <input id="horizon-form-name" name="name" type="text" placeholder="<?php _e( 'Name', 'horizon-theme' ); ?>">
                </div>
                <!-- Input Mail-->
                <div class="form-group">
                    <input id="horizon-form-email" name="mail" type="text" placeholder="<?php _e( 'E-mail', 'horizon-theme' ); ?>">
                </div>
                <!-- Input Message -->
                <div class="form-group">
                    <textarea id="horizon-form-message" name="message" placeholder="<?php _e( 'Message', 'horizon-theme' ); ?>"></textarea>
                </div>
                <button href="#" class="horizon-btn btn-md"><?php _e( 'Send Message', 'horizon-theme' ); ?></button>
            </form>
        </div><!-- .contact-form -->
        <div id="map" class="col-md-6">
        </div><!-- #map -->
    </div><!-- .content -->
</section><!-- #contact -->
