<div class="closure__inner <?php echo $closure_width; ?>">

    <div class="closure__text">
        <?php echo $footer_text; ?>
    </div>

    <?php if ( has_nav_menu( 'bottom' ) ) {
        wp_nav_menu( array(
                'theme_location' => 'bottom',
                'container'      => false,
                'menu_class'     => 'closure__nav'
            )
        );
    } ?>

    <?php do_action('waboot/component/footer-flex/after_bottom_navigation')?>

</div>
