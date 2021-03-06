<div class="footer-flex">
    <div class="footer-flex__widgetarea <?php echo $footer_width ?>">
        <?php do_action('waboot/component/footer-flex/before_widgets')?>

        <?php if ( is_active_sidebar( 'footer-flex-1' ) ) : ?>
            <div class="footer-flex__widget footer-flex__widget--1">
                <?php dynamic_sidebar( 'footer-flex-1' ); ?>
            </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-flex-2' ) ) : ?>
            <div class="footer-flex__widget footer-flex__widget--2">
                <?php dynamic_sidebar( 'footer-flex-2' ); ?>
            </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-flex-3' ) ) : ?>
            <div class="footer-flex__widget footer-flex__widget--3">
                <?php dynamic_sidebar( 'footer-flex-3' ); ?>
            </div>
        <?php endif; ?>
        <?php if ( is_active_sidebar( 'footer-flex-4' ) ) : ?>
            <div class="footer-flex__widget footer-flex__widget--4">
                <?php dynamic_sidebar( 'footer-flex-4' ); ?>
            </div>
        <?php endif; ?>

        <?php do_action('waboot/component/footer-flex/after_widgets')?>
    </div>
</div>
<div data-cookieonly class="closure site-closure" id="colophon" role="contentinfo">
    <?php echo $closure_content; ?>
</div><!-- .closure -->