<?php
/**
 * @author Drajat Hasan
 * @email drajathasan20@gmail.com
 * @create date 2021-06-06 08:04:38
 * @modify date 2022-01-11 21:24:34
 * @desc [description]
 */

// set jsMap
$InlineJs = '
    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
        $("."+selectedClass).fadeIn();
        $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });
';

$jsMap = [
    ["src" => zeinUrl(versioning("assets/js/jquery-2.1.0.min.js"))],
    ["src" => zeinUrl(versioning("assets/js/popper.js"))],
    ["src" => zeinUrl(versioning("assets/js/bootstrap.min.js"))],
    ["src" => zeinUrl(versioning("assets/js/owl-carousel.js"))],
    ["src" => zeinUrl(versioning("assets/js/accordions.js"))],
    ["src" => zeinUrl(versioning("assets/js/datepicker.js"))],
    ["src" => zeinUrl(versioning("assets/js/scrollreveal.min.js"))],
    ["src" => zeinUrl(versioning("assets/js/waypoints.min.js"))],
    ["src" => zeinUrl(versioning("assets/js/jquery.counterup.min.js"))],
    ["src" => zeinUrl(versioning("assets/js/imgfix.min.js"))],
    ["src" => zeinUrl(versioning("assets/js/slick.js"))],
    ["src" => zeinUrl(versioning("assets/js/lightbox.js"))],
    ["src" => zeinUrl(versioning("assets/js/isotope.js"))],
    ["src" => zeinUrl(versioning("assets/js/custom.js"))],
    $InlineJs
];

// Javascript
zeinJS($jsMap);
?>