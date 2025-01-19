<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package boomershub
 */

?>

<script>
        document.querySelector(".toggleSwitch").addEventListener("click", function () {
            const toggle = document.querySelector(".toggleSwitch");
            const options = document.querySelectorAll(".toggleOption");

            toggle.classList.toggle("active");
            options.forEach(option => option.classList.toggle("active"));
        });
    </script>

<?php wp_footer(); ?>

</body>

</html>
