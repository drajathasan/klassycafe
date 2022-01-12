<?php
include_once __DIR__ . DS . 'supports' . DS . 'Tools.php';
?>
<!DOCTYPE Html>
<html lang="id">
    <head>
        <?php zeinLoad('meta') ?>
    </head>
    <body>
    
        <!-- Components -->
        <?php 
            // Preloader
            zeinLoad('klassycafe.preloader');

            // Header
            zeinLoad('klassycafe.header');

            // Banner
            zeinLoad('klassycafe.banner');

            // About
            zeinLoad('klassycafe.aboutarea');

            // About
            zeinLoad('klassycafe.newbookarea');

            // Most
            zeinLoad('klassycafe.mostmember');

            // Most
            zeinLoad('klassycafe.register');

            // News
            zeinLoad('klassycafe.news');

            // News
            zeinLoad('klassycafe.footer');
        ?>
        <!-- End Components -->
        <?php zeinLoad('js') ?>
    </body>
</html>