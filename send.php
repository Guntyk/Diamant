<?php
define('url', "https://api.telegram.org/bot5331027047:AAFXDxilUP-OW4WLMaFHJsQegjZ96gBLNkE/");
$name = $_POST['name'];
$tel = $_POST['tel'];
$chat_id = '1133429141';
$message = urlencode("Name: " . $name . "\nPhone: " . $tel);
$answer_obj = json_decode(file_get_contents(url . "sendmessage?text=" . $message . "&chat_id=" . $chat_id . "&parse_mode=HTML"))
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
    <link rel="manifest" href="favicons/site.webmanifest">
    <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5847bf">
    <meta name="msapplication-TileColor" content="#5847bf">
    <meta name="theme-color" content="#5847bf">
    <meta name="description" content="Клуб бального танцю 'Діамант Еліт'">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css">
    <link rel="stylesheet" href="./css/style.min.css" media="print" onload="this.media='all'">
    <style>
        /* cyrillic-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 100;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 100;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 100;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 100;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 100;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 300;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 600;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 700;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 800;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /* cyrillic-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WRhyzbi.woff2) format('woff2');
        unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
        }
        /* cyrillic */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459W1hyzbi.woff2) format('woff2');
        unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
        }
        /* vietnamese */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459WZhyzbi.woff2) format('woff2');
        unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wdhyzbi.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Montserrat';
        font-style: normal;
        font-weight: 900;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/montserrat/v24/JTUSjIg1_i6t8kCHKm459Wlhyw.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        /*===============CSS RESET START=================*/
        html, body, div, span, applet, object, iframe,
        h1, h2, h3, h4, h5, h6, p, blockquote, pre,
        a, abbr, acronym, address, big, cite, code,
        del, dfn, em, img, ins, kbd, q, s, samp,
        small, strike, strong, sub, sup, tt, var,
        b, u, i, center,
        dl, dt, dd, ol, ul, li,
        fieldset, form, label, legend,
        table, caption, tbody, tfoot, thead, tr, th, td,
        article, aside, canvas, details, embed, 
        figure, figcaption, footer, header, hgroup, 
        menu, nav, output, ruby, section, summary,
        time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
        }
        /* HTML5 display-role reset for older browsers */
        article, aside, details, figcaption, figure, 
        footer, header, hgroup, menu, nav, section {
            display: block;
        }
        body {
            line-height: 1;
        }
        ol, ul {
            list-style: none;
        }
        blockquote, q {
            quotes: none;
        }
        blockquote:before, blockquote:after,
        q:before, q:after {
            content: '';
            content: none;
        }
        table {
            border-collapse: collapse;
            border-spacing: 0;
        }
        /*===============CSS RESET END=================*/
        /*===============COMMON START=================*/
        html {
            scroll-behavior: smooth;
        }
        body {
            font-family: 'Montserrat';
            font-size: 16px;
            line-height: 1.5;
            color: #333;
            background-color: #fff;
            cursor: url(icons/cursor-1.png), default;
        }
        * {
            box-sizing: border-box;
        }
        a {
            text-decoration: none;
            display: inline-block;
            color: inherit;
        }
        button,
        input,
        textarea {
            font: inherit;
        }
        .container{
            margin: 0 auto;
            width: 100%;
            max-width: 1320px;
        }
        .mb55 {
            margin-bottom: 55px;
        }
        .dancer__item:last-child {
            width: 1110px;
            height: 300px;
        }
        /*===============COMMON END=================*/
        /*===============HEADER START=================*/

        /*===============HEADER END=================*/
        /*===============PROMO START=================*/

        /*===============PROMO END=================*/
        /*===============ABOUT START=================*/

        /*===============ABOUT END=================*/
        /*Desktop first!*/
        /* `xxl` applies to xx-large devices (large desktops, less than 1400px) */
        @media (max-width: 1399.98px) { 
            .container{
                max-width: 1140px;
            }
            .trainer {
                width: 90%;
            }
        }
        /* `xl` applies to e-large devices (desktops, less than 1200px) */
        @media (max-width: 1199.98px) { 
            .container{
                max-width: 960px;
            }
            .staff-slider,
            .comment-slider {
                width: 1000px;
            }
            .staff-slider {
                padding: 30px;
            }
            .swiper-button-prev,
            .swiper-button-next {
                visibility: hidden;
            }
            .swiper-pagination {
                visibility: visible;
            }
            .selector {
                max-width: 1199px;
                font-size: 15px;
            }
            .dancer__item:last-child {
                margin: 15px 0;
                width: 540px;
            }
            .organizator__wrapper {
                width: 900px;
            }
            .organizator__title {
                font-size: 35px;
                line-height: 40px;
            }
            .trainer>.wrapper {
                margin-top: 70px;
            }
            .trainer__wrapper {
                margin-left: 50px;
            }
            .trainer__title {
                font-size: 45px;
                line-height: 55px;
            }
            .location iframe{
                width: 600px;
            }
        }
        /* `lg` applies to large devices (tablets, less than 992px) */
        @media (max-width: 991.98px) { 
            .container{
                max-width: 720px;
            }
            .staff-slider,
            .comment-slider {
                width: 300px;
            }
            .staff-slider {
                padding: 30px;
            }
            .swiper-button-prev,
            .swiper-button-next {
                visibility: hidden;
            }
            .swiper-pagination {
                visibility: visible;
            }
            .comment>img {
                padding-top: 20px;
                width: 100px
            }
            .feedback .comment {
                flex-direction: column;
                width: 250px;
                min-height: 300px;
            }
            .feedback__text {
                text-align: center;
            }
            .feedback__name {
                font-size: 18px;
            }
            .feedback__descr {
                margin: 10px 0;
                padding: 0 15px;
                font-size: 16px;
            }
            .promo__wrapper {
                top: 135px;
                width: 450px;
                margin: 90px 50px 0 0;
            }
            .promo__title {
                font-size: 35px;
                line-height: 39px;
            }
            .promo__subtitle {
                font-size: 16px;
                line-height: 21px;
            }
            .button {
                width: 250px;
                font-size: 17px;
            }
            .selector {
                max-width: 991px;
                font-size: 14px;
                text-align: center;
            }
            .selector:first-child{
                border-left: none;
            }
            .selector:last-child{
                border-right: none;
            }
            .organizator {
                width: 100%;
                text-align: center;
            }
            .organizator__card {
                justify-content: center;
            }
            .organizator__wrapper {
                flex-wrap: wrap;
                justify-content: center;
            }
            .organizator__title {
                margin: 50px 0;
            }
            .trainer img {
                width: 400px;
            }
            .trainer__title {
                font-size: 35px;
                line-height: 39px;
            }
            .trainer__subtitle {
                font-size: 16px;
                line-height: 21px;
            }
            .location {
                flex-wrap: wrap;
            }
            .location__wrapper {
                margin: 0 auto 30px auto;
                text-align: center;
            }
            .location iframe {
                margin: 0 auto;
            }
            .location__list {
                list-style-type: none;
                margin-left: 0;
            }
            .footer__logo {
                height: auto;
                width: 421px;
            }
        }
        /*=====================================1============================================*/
        /* `md` applies to medium devices (landscape phones, less than 768px) */
        @media (max-width: 767.98px) { 
            .container{
                max-width: 540px;
            }
            .staff-slider {
                width: 300px;
            }
            .staff-slider {
                padding: 30px;
            }
            .swiper-button-prev,
            .swiper-button-next {
                visibility: hidden;
            }
            .swiper-pagination {
                visibility: visible;
            }
            .promo__wrapper {
                top: 135px;
                width: 250px;
                margin: 50px 50px 0 0;
            }
            .promo__title {
                font-size: 25px;
                line-height: 29px;
            }
            .promo__subtitle {
                font-size: 16px;
                line-height: 17px;
            }
            .button {
                height: 42px;
                width: 200px;
                font-size: 13px;
            }
            .button>.phone,
            .button>.down {
                width: 15px;
                height: 15px;
            }
            .button>.phone {
                transform: translateY(0) translateX(-23px)
            }
            .button>.down {
                transform: translateY(0) translateX(7px)
            }
            .selector {
                max-width: 767px;
                font-size: 13px;
            }
            .dancer__item:last-child {
                width: 510px;
                height: 300px;
            }
            .staff {
                margin-bottom: 100px;
            }
            .staff__title {
                margin-top: 100px;
            }
            .organizator__card {
                width: 100%;
            }
            .trainer img {
                width: 250px;
            }
            .trainer__title {
                font-size: 25px;
                line-height: 29px;
            }
            .trainer__subtitle {
                font-size: 16px;
                line-height: 17px;
            }
            .location {
                flex-wrap: wrap;
            }
            .location__wrapper {
                margin: 0 auto 30px auto;
                text-align: center;
            }
            .footer__logo{
                height: auto;
                width: 300px;
            }
            .footer__menu>li {
                font-size: 16px;
                line-height: 20px;
            }
            .footer__menu__selector>li{
                font-size: 16px;
                line-height: 20px;
            }
        }
        /*====================================2=============================================*/
        /* `sm` applies to small devices (portrait phones, less than 576px) */
        @media (max-width: 575.98px) {
            .container{
                max-width: 100%;
                padding: 0 15px;
                margin: 0 auto;
            }
            /* Sliders */
            .staff-slider {
                width: 300px;
            }
            .comment-slider {
                width: 250px;
            }
            .staff-slider {
                padding: 30px;
            }
            .swiper-button-prev,
            .swiper-button-next {
                visibility: hidden;
            }
            .swiper-pagination {
                visibility: visible;
            }
            .comment>img {
                padding-top: 20px;
                width: 100px
            }
            .feedback .comment {
                flex-direction: column;
                width: 200px;
                min-height: 350px;
            }
            .feedback__text {
                text-align: center;
            }
            .feedback__name {
                font-size: 18px;
            }
            .feedback__descr {
                margin: 10px 0;
                padding: 0 15px;
                font-size: 16px;
            }
            /* Header */
            .header__row>a>img {
                width: 200px;
                height: 60px;
                margin: 5px 0;
            }
            .desktop {
                display: none;
            }
            .mobile {
                display: block;
            }
            .header__calls {
                display: none;
            }
            .header {
                width: 100%;
            }
            /* Promo */
            .promo {
                margin: 0 auto;
                padding-top: 30px;
            }
            .photo {
                margin-top: 0;
            }
            .promo__wrapper {
                width: 383px;
                height: auto;
                text-align: center;
                margin: 0 auto 30px auto;
            }
            .align {
                flex-wrap: wrap;
            }
            .promo__title {
                font-size: 30px;
                line-height: 29px;
            }
            .promo__subtitle {
                font-size: 14px;
                line-height: 17px;
            }
            .button__mt30 {
                margin-top: 23px;
            }
            /* Diamonds */
            .diamond__row {
                margin-bottom: 0;
                flex-wrap: wrap;
            }
            .diamond__mark {
                margin: 90px 0;
            }
            .second>img {
                left: 20px;
            }
            .third>img {
                left: -7px;
            }
            .second,
            .third {
                padding: 0 10px;
            }
            .diamond__title {
                margin-bottom: 0
            }
            /* Selector */
            .selector{
                max-width: 575px;
                font-size: 11px;
            }
            .selector:first-child{
                padding: 0 28px 0 8px;
                border-left: none;
            }
            .selector:nth-child(2){
                padding: 0 28px 0 28px;
            }
            .selector:last-child{
                padding: 0 0 0 28px;
                border-right: none;
            }
            /* Dancers */
            .dancer h2 {
                position: absolute;
                bottom: 17px;
                left: 10px;
            }
            .dancer__content {
                margin-top: 20px;
            }
            .dancer__item {
                margin: 4px;
                width: 141px;
                height: 141px;
                border-radius: 18px;
                font-size: 14px;
                line-height: 17px;
            }
            .dancer__item:last-child {
                margin: 4px;
                width: 290px;
                height: 141px;
            }
            .organizator__card {
                width: 300px;
            }
            .organizator__card>a>img {
                width: 350px;
            }
            .trainer>.wrapper {
                justify-content: center;
                margin-top: 30px;
                flex-wrap: wrap;
                text-align: center;
            }
            .trainer__wrapper {
                text-align: center;
                margin-left: 0;
            }
            .trainer__title {
                margin-top: 30px;
                font-size: 25px;
                line-height: 29px;
            }
            .trainer__subtitle {
                font-size: 16px;
                line-height: 17px;
            }
            .trainer img {
                width: 300px;
            }
            .staff {
                margin-bottom: 100px;
            }
            .staff__title {
                margin-top: 100px;
            }
            .location {
                flex-wrap: wrap;
            }
            .location__wrapper {
                margin: 0 auto 30px auto;
                text-align: center;
            }
            footer .wrapper {
                flex-wrap: wrap-reverse;
                justify-content: center;
            }
            .footer__logo {
                margin-top: 45px;
                width: 250px;
                height: auto;
            }
            aside {
                padding-top: 7.5px;
            }
            aside .none {
                display: none;
            }
        }
        @media (max-width: 360px) {
            .selector:first-child{
                padding: 0 15px 0 0;
            }
            .selector:nth-child(2){
                padding: 0 15px;
            }
            .selector:last-child{
                padding: 0 0 0 15px;
            }
        }
        /* `xsm` applies to x-small devices (old mini phones like iPhone 5/5s/SE, equals to 320px) */
        @media (max-width: 320px) { 
            /*without styles for container*/
            .dancer__item {
                width: 100%;
            }
            .organizator__card>a>img {
                width: 300px;
            }
        }
    </style>
    <title>Діамант Еліт</title>
</head>
<body>
    <header class="header">
        <div class="container header__row">
            <a href="/">
                <img src="icons/logo/Logo_1.svg" alt="logo" class="logo">
            </a>
            <div class="header__content">
                <button class="button desktop">
                    <img src="icons/phone_white.svg" alt="phone" class="phone">
                    Зателефонувати
                    <img src="icons/arrows/arrow_down.svg" alt="down" class="down">
                </button>
                <div class="header__calls">
                    <ul class="header__wrapper">
                        <li><a href="tel:+380505229988" class="phone">+380505229988</a></li>
                        <li><a href="tel:+380680229988" class="phone">+380680229988</a></li>
                        <li><a href="tel:+380732029988" class="phone">+380732029988</a></li>
                    </ul> 
                </div>
                <button data-fancybox data-src="#dialog-content" class="mobile">
                    <img src="icons/phone_white.svg" alt="phone" class="phone">
                </button>
            </div>
        </div>
    </header>
    
    <main>
        <article class="dialog">
            <div id="dialog-content" style="display:none;" class="dialog__box">
                <ul class="button__wrapper">
                    <li><a href="tel:+380505229988" class="phone">+380505229988</a></li>
                    <li><a href="tel:+380680229988" class="phone">+380680229988</a></li>
                    <li><a href="tel:+380732029988" class="phone">+380732029988</a></li>
                </ul> 
            </div>
        </article>

        <article class="promo">
            <div class="container align">
                <section class="promo__wrapper">
                    <h1 class="promo__title">
                        Клуб бального
                        танцю<br>
                        «Діамант-Еліт»
                    </h1>
                    <p class="promo__subtitle">
                        Ми дружня професійна команда.<br>
                        Наша мета - вдосконалюватись<br>
                        та робити світ кращим.<br>
                        <br>
                        Приєднуйся до нас!<br>
                        Танцюй і отримуй задоволення.
                    </p>
                </section>
                <section class="photo">
                    <img src="img/main.webp" alt="main">
                </section>
            </div>
        </article>
    
        <article class="diamond">
            <h4 class="diamond__title">
                Чому ми?
            </h4>
            <div class="container">
                <section class="diamond__row">
                    <div class="diamond__mark">
                        <img src="icons/diamond.svg" alt="Diamond">
                        <h4>Досвід</h4>
                        <p>20 років на ринку. День народження клубу: 7 березня 2003 року.</p>
                    </div>
                    <div class="diamond__mark">
                        <img src="icons/diamond.svg" alt="Diamond">
                        <h4>Професійність</h4>
                        <p>Відповідна освіта та досвід кожного. Регулярна участь у навчаннях та майстер-класах.</p>
                    </div>
                    <div class="diamond__mark">
                        <img src="icons/diamond.svg" alt="Diamond">
                        <h4>Виховання</h4>
                        <p>Мета: не тільки навчити правильно рухатись, а доторкнутися до виховання багатогранної душі.</p>
                    </div>
                </section>
                <section class="diamond__row">
                    <div class="diamond__mark second">
                        <img src="icons/diamond.svg" alt="Diamond">
                        <h4>Індивідуальність</h4>
                        <p>Кожна людина важлива для нас. Правило нашої роботи - індивідуальний підхід. </p>
                    </div>
                    <div class="diamond__mark third">
                        <img src="icons/diamond.svg" alt="Diamond">
                        <h4>Реабілітація</h4>
                        <p>Наше кредо - реабілітація особистості через рухи під музику.</p>
                    </div>
                </section>
            </div>
        </article>

        <article id="selector" class="selector">
            <nav>
                <ul class="selector__menu">
                    <li class="selector selector__item selector__item_active"><div>Танцюристам та батькам</div></li>
                    <li class="selector selector__item"><div>Організаторам заходів</div></li>
                    <li class="selector selector__item"><div>Тренерам та хореографам</div></li>
                </ul>
            </nav>
        </article>

        <article class="block">
            <div class="container">
                <section class="block__content block__content_active dancer">
                    <div class="dancer__content">
                        <div class="dancer__item">
                            <h2>
                                Бальні танці<br>для дітей
                            </h2>
                            <!-- <img src="icons/arrows/arrow_small.svg" alt="arrow" class="dancer__arrow"> -->
                        </div>
                        <div class="dancer__item">
                            <h2>
                                Онлайн навчання
                            </h2>
                            <!-- <img src="icons/arrows/arrow_small.svg" alt="arrow" class="dancer__arrow"> -->
                        </div>
                        <div class="dancer__item">
                            <h2>
                                Pro-Am для<br>дітей
                            </h2>
                            <!-- <img src="icons/arrows/arrow_small.svg" alt="arrow" class="dancer__arrow"> -->
                        </div>
                        <div class="dancer__item">
                            <h2>
                                Pro-Am для<br>дорослих
                            </h2>
                            <!-- <img src="icons/arrows/arrow_small.svg" alt="arrow" class="dancer__arrow"> -->
                        </div>
                        <div class="dancer__item">
                            <h2>
                                Спортивні бальні танці
                            </h2>
                            <!-- <img src="icons/arrows/arrow_big.svg" alt="arrow" class="dancer__arrow dancer__arrow_big"> -->
                        </div>
                    </div>
                </section>
                <section class="block__content organizator">
                    <h3 class="organizator__title">
                        Оренда приміщень
                    </h3>
                    <div class="organizator__wrapper">
                        <div class="organizator__content">
                            <div class="organizator__card">
                                <a href="./img/halls/lubidsky/1.webp" data-fancybox="gallery1" data-caption="Зал №1 — 168 м²">
                                    <img src="./img/halls/lubidsky/1.webp" alt="1" class="gallery-photo">
                                </a>
                                <a href="./img/halls/lubidsky/2.webp" data-fancybox="gallery1" data-caption="Зал №1 — 168 м²">
                                    <img src="./img/halls/lubidsky/2.webp" alt="2" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/lubidsky/3.webp" data-fancybox="gallery1" data-caption="Зал №1 — 168 м²">
                                    <img src="./img/halls/lubidsky/3.webp" alt="3" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/lubidsky/4.webp" data-fancybox="gallery1" data-caption="Зал №2 — 72 м²">
                                    <img src="./img/halls/lubidsky/4.webp" alt="4" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/lubidsky/5.webp" data-fancybox="gallery1" data-caption="Зал №2 — 72 м²">
                                    <img src="./img/halls/lubidsky/5.webp" alt="5" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/lubidsky/6.webp" data-fancybox="gallery1" data-caption="Зал №3 — 36 м²">
                                    <img src="./img/halls/lubidsky/6.webp" alt="6" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/lubidsky/7.webp" data-fancybox="gallery1" data-caption="Зал №3 — 36 м²">
                                    <img src="./img/halls/lubidsky/7.webp" alt="7" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/lubidsky/8.jpg" data-fancybox="gallery1" data-caption="Вхід">
                                    <img src="./img/halls/lubidsky/8.jpg" alt="8" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/lubidsky/9.jpg" data-fancybox="gallery1" data-caption="Вхід">
                                    <img src="./img/halls/lubidsky/9.jpg" alt="9" class="gallery-photo hide">
                                </a>
                                <div class="organizator__info">
                                    <div class="organizator__info_wrapper">
                                        <p class="organizator__address">
                                            Просторий зал, поряд ст. метро «Либідська»
                                        </p>
                                        <a href="https://goo.gl/maps/ykHk92aBg5vsnDkF7" target="_blank" rel="nofollow noopener noreferrer" class="organizator__address href">
                                            (вул. Залізничне шосе, 3)
                                        </a>
                                    </div>
                                    <button class="read-more-btn">Детальніше...</button>
                                </div>
                                <div class="details">
                                    <span class="details-content">
                                        <p>Зал №1 — 168 м²</p>
                                        <p>Зал №2 — 72 м²</p>
                                        <p>Зал №3 — 36 м²</p>
                                        <p>Зал №4 - ? м²</p>
                                        <p>Роздягальні, туалети, кофейня, лаунж-зона, WI-FI</p>
                                    </span>
                                </div>
                            </div>
                            <div class="organizator__card">
                                <a href="./img/halls/pozniaky/1.webp" data-fancybox="gallery" data-caption="Зал №1 – 90 м²">
                                    <img src="./img/halls/pozniaky/1.webp" alt="1" class="gallery-photo">
                                </a>
                                <a href="./img/halls/pozniaky/2.webp" data-fancybox="gallery" data-caption="Зал №1 – 90 м²">
                                    <img src="./img/halls/pozniaky/2.webp" alt="2" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/pozniaky/3.webp" data-fancybox="gallery" data-caption="Зал №1 – 90 м²">
                                    <img src="./img/halls/pozniaky/3.webp" alt="3" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/pozniaky/4.webp" data-fancybox="gallery" data-caption="Зал №2 – 45 м²">
                                    <img src="./img/halls/pozniaky/4.webp" alt="4" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/pozniaky/5.webp" data-fancybox="gallery" data-caption="Зал №2 – 45 м²">
                                    <img src="./img/halls/pozniaky/5.webp" alt="5" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/pozniaky/6.webp" data-fancybox="gallery" data-caption="Зал №3 – 45 м²">
                                    <img src="./img/halls/pozniaky/6.webp" alt="6" class="gallery-photo hide">
                                </a>
                                <a href="./img/halls/pozniaky/7.webp" data-fancybox="gallery" data-caption="Зал №3 – 45 м²">
                                    <img src="./img/halls/pozniaky/7.webp" alt="7" class="gallery-photo hide">
                                </a>
                                <div class="organizator__info">
                                    <div class="organizator__info_wrapper">
                                        <p class="organizator__address">
                                            Великий та світлий зал, поряд ст. метро «Позняки»
                                        </p>
                                        <a href="https://goo.gl/maps/wtovPVVdX8m9jffa6" target="_blank" rel="nofollow noopener noreferrer" class="organizator__address href">
                                            (вул. Лариси Руденко, 6а)
                                        </a>
                                    </div>
                                    <button class="read-more-btn1">Детальніше...</button>
                                </div>
                                <div class="details1">
                                    <span class="details-content">
                                        <p>Зал №1 – 90 м²</p>
                                        <p>Зал №2 – 45 м²</p>
                                        <p>Зал №3 – 45 м²</p>
                                        <p>Роздягальні, туалети, душова, лаунж-зона, Wi-Fi</p>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="organizator__reasons">
                            <h4 class="organizator__subtitle">
                                В наших залах ви можете провести:
                            </h4>
                            <ul>
                                <li>Майтер класи</li>
                                <li>Семінари</li>
                                <li>Вечірки</li>
                                <li>Конгреси</li>
                            </ul>
                        </div>
                    </div>
                </section>
                <section class="block__content trainer">
                    <div class="wrapper">
                        <img src="img/trainers/trainers.webp" alt="couple">
                        <div class="trainer__wrapper">
                            <h4 class="trainer__title">
                                Запрошуємо<br>
                                вас до<br>
                                співпраці
                            </h4>
                            <p class="trainer__subtitle">
                                Проводьте групові та індивідуальні<br>
                                заняття в наших залах
                            </p>
                            <button data-fancybox data-src="#dialog-content" class="button button__mt30">
                                Зателефонувати
                            </button>
                        </div>
                    </div>
                </section>
            </div>
        </article>
    
        <span id="staff" class="invisible"></span>
        <article class="staff">
            <div class="container carousel">
                <h4 class="staff__title">
                    Наша команда
                </h4>
                <div class="staff-slider swiper">
                    <div class="staff-slider__wrapper swiper-wrapper">
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/3.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Ольга Черненко
                                    </h3>
                                    <p class="card__descr">
                                        Адміністратор<br>Студія "Позняки"
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//instagram.com/helga.ts" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="//www.facebook.com/olha.ha.5" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Освіта вища. Творча, доброзичлива, відповідальна. В клубі працює 5 років.
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/4.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Олександр Берьозін
                                    </h3>
                                    <p class="card__descr">
                                        Тренер дорослі та ProAm
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//www.instagram.com/sanich2000/" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="//www.facebook.com/berezci" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Стаж роботи викладачем понад 15 років. Досвід праці з усіма віковими категоріями та виступу на міжнародних змаганнях. Вихованці - діти танцюристи спортсмени
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/5.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Антон Левченко
                                    </h3>
                                    <p class="card__descr">
                                        Тренер дитячої та дорослої групи
                                    </p>
                                    <div class="social__wrapper">
                                        <!-- <a target="_blank" href="#" class="social"><img class="social" src="icons/social/instagram_white.svg"></a> -->
                                        <a target="_blank" href="//m.facebook.com/100041138511951/" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Вища педагогічна освіта з бальної хореографії. Стаж роботи 12 років. Досвід викладання в групах різних вікових категорій, від дітей до дорослих. Суддя 1-ї категорії. Працює в системі Pro-am.
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/6.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Діана Берекашвілі
                                    </h3>
                                    <p class="card__descr">
                                        Тренер дитячих груп<br>Студія "Позняки"<br>Філія "Щасливе"
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//www.instagram.com/littlepuf" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="//www.facebook.com/diana.berekashvili.5" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Тренер бального танцю для дітей віком 4-5 років. Викладач акторської майстерності для дітей і дорослих. Режисер масових заходів клубу.
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/7.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Андрій Євтєєв
                                    </h3>
                                    <p class="card__descr">
                                        Тренер старшої та молодшої групи<br>Студія "Позняки"
                                    </p>
                                    <div class="social__wrapper">
                                        <!-- <a target="_blank" href="#" class="social"><img class="social" src="icons/social/instagram_white.svg"></a> -->
                                        <a target="_blank" href="//www.facebook.com/profile.php?id=100007293646078" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Займається спортом з 7 років. Тренерский стаж 14 років. Суддя 1 категорії. Співорганізатор традиційного міжнародного турніру Inspiration Cup в м. Києві
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/8.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Анастасія Заєць
                                    </h3>
                                    <p class="card__descr">
                                        Тренер дитячих груп<br>Філія "Щасливе"
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//instagram.com/de_dance.school" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <!-- <a target="_blank" href="#" class="social"><img class="social" src="icons/social/facebook_white.svg"></a> -->
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Досвід роботи тренером більше 5 років. Магістр зі спортивного танцю. Працює з дітьми категорій “baby” та “N”, “E” класу
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/1.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Тимофій Черненко
                                    </h3>
                                    <p class="card__descr">
                                        Тренер спортивної групи Студія "Либідська"
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//www.instagram.com/chernenkotim/" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="//www.facebook.com/chernenkotim/" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Чемпіон України серед професіоналів з 10 танців, призер міжнародних змагань, суддя національної категорії, тренерський стаж 20 років
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/12.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Лариса Машина
                                    </h3>
                                    <p class="card__descr">
                                        Президент клубу<br>Тренер спортивної групи
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//instagram.com/larysamashyna" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="//www.facebook.com/larysa.mashyna" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Фіналістка міжнародних змагань з європейської та латиноамериканської програм, призер Чемпіонату України з 10-ти танців, суддя національної категорії, тренерський стаж більше 25-ти років
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/2.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy portrait" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Олена Берьозіна
                                    </h3>
                                    <p class="card__descr">
                                        Тренер спортивної групи Студія "Либідська"
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//instagram.com/olenaberozina" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="//www.facebook.com/profile.php?id=100008214097877" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Стаж роботи тренером 38 років, освіта вища, суддя національної категорії. Вихованці - фіналісти всеукраїнських та міжнародних змагань, Чемпіонатів світу та Європи
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/9.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Юлія Пушкіна
                                    </h3>
                                    <p class="card__descr">
                                        Тренер початкових та спортивних груп<br>Студія "Позняки"
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//www.instagram.com/pushkina_ju" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="//www.facebook.com/jylia.pushkina" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Приоритет: гармонійний розвиток дитини у спорті та унікальність кожного учня. Вища освіта. Стаж - 4 роки. Діючий спортсмен, кандидат у майстри спорту, член збірної України зі спортивних танців
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/16.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Руслан Гітя
                                    </h3>
                                    <p class="card__descr">
                                        Тренер початкових та спортивних груп<br>Філія "Вишеньки"
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//www.instagram.com/ruslangitia/" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="//www.facebook.com/profile.php?id=100038626413634" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Освіта - вища. Стаж - 4 роки. Досвід роботи з дитячими групами та з парами ProAm. Діючий спортсмен, кандидат у майстри спорту, член збірної України зі спортивних танців
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/17.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Олексій Струков
                                    </h3>
                                    <p class="card__descr">
                                        Адміністратор<br>Студія "Либідська"
                                    </p>
                                    <div class="social__wrapper">
                                        <!-- <a target="_blank" href="https://google.com" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="https://duckduckgo.com" class="social"><img class="social" src="icons/social/facebook_white.svg"></a> -->
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Text
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/10.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Анастасія Шапаренко
                                    </h3>
                                    <p class="card__descr">
                                        Тренер дитячих груп та класичної хореографії<br>Студія "Либідська"
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//www.instagram.com/anastayshaparenko" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="//www.facebook.com/profile.php?id=100003257322604" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Вища педагогічна освіта, суддівська категорія. Досвід роботи 8 років. Може викладати українською та англійською мовами
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/11.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Владислав Кравець
                                    </h3>
                                    <p class="card__descr">
                                        Тренер дитячих груп<br>Філія "Гора"
                                    </p>
                                    <div class="social__wrapper">
                                        <!-- <a target="_blank" href="https://google.com" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="https://duckduckgo.com" class="social"><img class="social" src="icons/social/facebook_white.svg"></a> -->
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Стаж тренерської діяльності - 10 років. Досвід участі у міжнародних та всеураїнських змаганнях. Тренер танцюристів Н - Д класів різних вікових груп
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/14.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Ірина Терновенко
                                    </h3>
                                    <p class="card__descr">
                                        Тренер дитячих та спортивних груп<br>Філія "Гора"
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//www.instagram.com/ternovenko.irina/" class="social"><img class="social" src="icons/social/instagram_white.svg"></a>
                                        <a target="_blank" href="//www.facebook.com/profile.php?id=100010330095125" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Працюю з дітьми віком від 3-х років та спортсменів N, E, D класів. Стаж роботи 13 років
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/13.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Ірина Цибанова
                                    </h3>
                                    <p class="card__descr">
                                        Головний адміністратор філій
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//www.facebook.com/profile.php?id=100010751524846" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Легко комунікую, завжди шукаю позитив - ці якості дали мені заняття бальними танцями і зараз допомагають мені жити та працювати в нашому чудовому клубі
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                        <div class="card staff-slider__slide swiper-slide">
                            <div class="card__inner">
                                <div class="card__face card__face--front">
                                    <div class="card__photo">
                                        <img data-src="img/portrait/15.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="swiper-lazy" alt="Image">
                                        <div class="swiper-lazy-preloader"></div>
                                    </div>
                                    <h3 class="card__name">
                                        Марина Назаренко
                                    </h3>
                                    <p class="card__descr">
                                        Виконавчий директор
                                    </p>
                                    <div class="social__wrapper">
                                        <a target="_blank" href="//www.facebook.com/maryna.nazarenko.5" class="social"><img class="social" src="icons/social/facebook_white.svg"></a>
                                    </div>
                                    <button class="descr-btn">Детальніше</button>
                                </div>
                                <div class="card__face card__face--back">
                                    <p class="card__descr">
                                        Організувати роботу, провести заходи, створити творчу,робочу атмосферу - це напрямок моєї діяльності останні 10 років.
                                    </p>
                                    <button class="descr-btn">Назад</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div id="location" class="swiper-pagination"></div>
                </div>
            </div>
        </article>
    
        <article class="location">
            <div class="container location">
                <section class="location__wrapper">
                    <h4 class="location__title">
                        Зали та філіали
                    </h4>
                    <ul class="location__list">
                        <li class="location__mark location__mark_active">Студія "Либідська"</li>
                        <li class="location__mark">Студія "Позняки"</li>
                        <li class="location__mark">Філія "Гора"</li>
                        <li class="location__mark">Філія "Вишеньки"</li>
                        <li class="location__mark">Філія "Щасливе"</li>
                        <li class="location__mark">Філія "Ревне"</li>
                    </ul>
                    <button data-fancybox data-src="#dialog-content" class="button button__mt20">
                        Зателефонувати
                    </button>
                </section>
                <!-- Лыбедская -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d635.6877577831542!2d30.52615609019995!3d50.40847735984789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf380966fba5%3A0x8c5a1608e8e18a44!2sKlub%20Bal%CA%B9noho%20Tantsyu%20%22Diamant-Elit%22!5e0!3m2!1sru!2sus!4v1650437610926!5m2!1sru!2sus" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location__map location__map_active"></iframe>
                <!-- Позняки -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.465523782726!2d30.638815315894522!3d50.395161299228015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c44e12c44087%3A0xce3b1e336f3b21d5!2z0JTQuNCw0LzQsNC90YIg0K3Qu9C40YIuINCa0LvRg9CxINCx0LDQu9GM0L3Ri9GFINGC0LDQvdGG0LXQsg!5e0!3m2!1sru!2sua!4v1652382824581!5m2!1sru!2sua" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location__map"></iframe>
                <!-- Гора -->
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d346.8590452998959!2d30.862527128282203!3d50.37458544977905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x81ff271e56037615!2sKlub%20Bal%CA%B9noho%20Tantsyu%20%22Diamant-Elit%22!5e0!3m2!1sru!2sua!4v1652352034939!5m2!1sru!2sua" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location__map"></iframe> -->
                <!-- Вишенки -->
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d637.092650401863!2d30.713897590120407!3d50.303675683441206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c177c8bc3a87%3A0x98c487bfe60354a9!2z0JrQu9GD0LEg0LHQsNC70YzQvdC-0LPQviDRgtCw0L3RhtCwINCU0LjQsNC80LDQvdGCLdCV0LvQuNGC!5e0!3m2!1sru!2sua!4v1652382754990!5m2!1sru!2sua" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location__map"></iframe> -->
                <!-- Счастливое -->
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1272.1596788470433!2d30.7964028572514!3d50.37924496434345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c2eeb2fc0001%3A0x2ab3bdb4b081697!2sKlub%20Bal%CA%B9noho%20Tantsyu%20%22Diamant-Elit%22!5e0!3m2!1sru!2sua!4v1652383537518!5m2!1sru!2sua" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location__map"></iframe> -->
                <!-- Ревное -->
                <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4165.147632223963!2d30.834275472337662!3d50.28853143766903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4eb185db15ac3%3A0x5f48f16973fa9517!2sRevnivs%CA%B9ka%20Zahal%CA%B9noosvitnya%20Shkola%20I-Iii%20Stupeniv!5e0!3m2!1sru!2sua!4v1652352010524!5m2!1sru!2sua" width="700" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="location__map"></iframe> -->
            </div>
        </article>

        <article class="feedback">
            <div class="container">
                <h4 class="feedback__title">
                    Відгуки
                </h4>
                <div class="comment-slider swiper">
                    <div class="comment-slider__wrapper swiper-wrapper">
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img src="img/feedback/1.webp" alt="1">
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Тамара Чухно
                                    </p>
                                    <p class="feedback__stats">
                                        Мама тацюристки
                                    </p>
                                    <p class="feedback__descr">
                                        Тренерський склад високої кваліфікації, дитина з радістю і цікавістю відвідує заняття, спортивні збори, бере участь у турнірах.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img src="img/feedback/2.webp" alt="2">
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Ліза Тонконог
                                    </p>
                                    <p class="feedback__stats">
                                        Tацюрист
                                    </p>
                                    <p class="feedback__descr">
                                        Все дуже чудово, тренера найкращі у світі!  На кожному тренуванні я отримую багато нових емоцій! Дуже дякую!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img src="img/feedback/3.webp" alt="3">
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Анастасія Река
                                    </p>
                                    <p class="feedback__stats">
                                        Мама тацюристки
                                    </p>
                                    <p class="feedback__descr">
                                        Наш танцевальный мир начался для моей дочери четыре года назад в Клубе бального танца «Диамант-Элит».<span class="dots">..</span><span class="comment-details"> За это время, однозначно скажу, танцы это здорово, это дисциплина, это красивая осанка, фигура, умение подать себя, развивается координация и хороший вкус. Отдельно, хочется выделить наш тренерский состав, который не покладая сил, вдохновляет наших детей и шаг за шагом погружает в этот прекрасный мир танца. Пушкина Юлия Александровна, Евтеев Андрей Сергеевич большие профессионалы своего дела, всегда на позитиве, очень душевные, в тоже время настойчивы и терпеливы. Пусть наши дети растут уверенными в себе, спортивными и здоровыми. Красивый спорт, который останется с Вами на всю жизнь!</span><button class="read-more-btn-comment">Більше</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </article>

        <article class="form">
            <div class="container form">
                <form action="./send.php" method="POST">
                    <input type="text" name="name">
                    <input type="phone" name="tel">
                    <button type="submit">Send</button>
                </form>
                <div class="form__text">
                    <h4>Маєте питання?</h4>
                    <p>Ми передзвонимо та детально відповімо на усі ваші запитання</p>
                </div>
            </div>
        </article>
    </main>

    <footer>
        <div class="container">
            <div class="wrapper">
                <nav class="footer">
                    <ul class="footer__menu">
                        <li class="main"><a href="#">Головна</a></li>
                        <ul class="footer__menu__selector">
                            <li class="footer__item"><a href="#selector">Танцюристам та батькам</a></li>
                            <li class="footer__item"><a href="#selector">Організаторам заходів</a></li>
                            <li class="footer__item"><a href="#selector">Тренерам та хореографам</a></li>
                        </ul>
                        <li class="footer__item"><a href="#staff">Наша команда</a></li>
                        <li class="footer__item"><a href="#location">ЛокаціЇ</a></li>
                    </ul>
                </nav>
                <a href="/">
                    <img src="icons/logo/Logo_2.svg" alt="logo" class="logo logo__footer"> 
                </a>
            </div>
        </div>
    </footer>

    <aside>
        <div class="container">
            <section>
                © 2022 Diamant-Elite
                <a href="//guntyk.github.io/" target="_blank" rel="nofollow noopener noreferrer" class="none"><img src="icons/logo/sate.svg" alt="Sate"></a>
                <a href="//guntyk.github.io/" target="_blank" rel="nofollow noopener noreferrer">By Sate</a>
            </section>
        </div>
    </aside>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    <script src="js/script.js"></script>
</body>
</html>