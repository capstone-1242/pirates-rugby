<?php
/**
 * Theme Name: Pirates Rugby Theme
 * Theme URI: 
 * Author: DBM Developers
 * Author URI: 
 * Description: A custom block theme for WordPress
 * Requires at least: 6.0
 * Tested up to: 6.4
 * Requires PHP: 7.4
 * Version: 1.0.0
 * License: GNU General Public License v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: custom-pirate-demo
 *
 * @package custom-pirate-demo
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="wp-site-blocks">
    <?php block_template_part( 'header' ); ?>

    <main>
        <?php block_template_part( 'content' ); ?>
    </main>

    <?php block_template_part( 'footer' ); ?>
</div>

<?php wp_footer(); ?>
</body>
</html>
