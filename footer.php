<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$contact = edugreen_contact_data();
?>
<footer class="site-footer" data-reveal>
    <div class="container footer-grid">
        <section>
            <h2>Edu Green Afterschool</h2>
            <p>Educație non-formală, timp de calitate și activități adaptate pentru copii în Șelimbăr.</p>
            <p class="footer-note"><?php echo esc_html( $contact['registration_notice'] ); ?></p>
        </section>

        <section>
            <h2>Contact rapid</h2>
            <p><a href="tel:+<?php echo esc_attr( $contact['anca_phone_href'] ); ?>">Anca Rodean: <?php echo esc_html( $contact['anca_phone_display'] ); ?></a></p>
            <p><a href="tel:+<?php echo esc_attr( $contact['alexandra_phone_href'] ); ?>">Alexandra Niță: <?php echo esc_html( $contact['alexandra_phone_display'] ); ?></a></p>
            <p><a href="mailto:<?php echo antispambot( esc_attr( $contact['office_email'] ) ); ?>"><?php echo antispambot( esc_html( $contact['office_email'] ) ); ?></a></p>
            <p><a href="mailto:<?php echo antispambot( esc_attr( $contact['public_email'] ) ); ?>"><?php echo antispambot( esc_html( $contact['public_email'] ) ); ?></a></p>
        </section>

        <section>
            <h2>Adresă și social</h2>
            <p><?php echo esc_html( $contact['address'] ); ?></p>
            <p><a href="<?php echo esc_url( $contact['facebook_url'] ); ?>" target="_blank" rel="noopener noreferrer">Pagina de Facebook Edu Green Afterschool</a></p>
            <p><a href="<?php echo esc_url( edugreen_page_url( 'contact' ) ); ?>">Vezi pagina de contact</a></p>
        </section>
    </div>

    <div class="container footer-bottom">
        <p>&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
