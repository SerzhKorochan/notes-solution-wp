<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Notes-solution
 */

get_header();
?>

<div id="full-bg">
        <form id="form-container" action="/login" method="post">

            <div id="authorization-form">
                <h1>Make some note :)</h1>

                <div id="email-input-container">
                    <p>leave your email here...</p>
                    <img src="<?php bloginfo('template_url'); ?>/img/Vector.svg">
                    <input type="email" name="auth_email" required> 
                </div>

                <div id="password-input-container">
                    <p>and try to remember password...</p>
                    <img src="<?php bloginfo('template_url'); ?>/img/carbon_password.svg">
                    <input type="password" name="auth_pass" required> 
                </div>
            </div>

            <input id="buttonstart" type="submit" value="Let's go!"></input>

        </form>
    </div>

<?php
get_sidebar();
get_footer();
