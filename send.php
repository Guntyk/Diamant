<?php
define('url', "https://api.telegram.org/bot5331027047:AAFXDxilUP-OW4WLMaFHJsQegjZ96gBLNkE/");
$name = $_POST['name'];
$phone = $_POST['phone'];
$chat_id = '1133429141';
$message = urlencode("Name: " . $name . "\nPhone: " . $phone);
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
            --swiper-theme-color: #8e2de2;
            /* cursor: url(icons/cursor-1.png), default; */
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
        .fancybox__content :focus:not(.carousel__button.is-close) {
            outline: none;
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
                width: 800px;
            }
            .staff-slider {
                padding: 30px 0;
            }
            .swiper-button-prev,
            .swiper-button-next {
                visibility: hidden;
            }
            .card {
                margin-right: 10px;
            }
            .card__name {
                text-align: center;
            }
            .card__descr {
                margin: 3px 10px;
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
            .organizator__card {
                width: 430px;
            }
            .gallery-photo {
                width: 430px;
            }
            .trainer>.wrapper>img {
                width: 600px;
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
            .advantages__wrapper:last-child {
                margin-left: 30px;
            }
            .advantages__text:first-child {
                width: 120px;
            }
            .advantages__text>span {
                margin-left: 0px;
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
            .header__calls {
                width: 230px;
            }
            .header__wrapper>li {
                margin-left: 25px;
            }
            .promo img {
                width: 310px;
                height: auto;
            }
            .promo__wrapper {
                margin-right: 50px;
            }
            .promo__title {
                font-size: 30px;
                line-height: 39px;
            }
            .promo__subtitle {
                font-size: 16px;
                line-height: 21px;
            }
            .advantages {
                padding: 40px 0;
            }
            .advantages__wrapper:first-child {
                min-width: 200px;
            }
            .advantages__wrapper:last-child {
                margin-left: 40px;
            }
            .advantages__title {
                margin-bottom: 30px;
                font-size: 30px;
            }
            .advantages__text {
                font-size: 16px;
            }
            .advantages__text>span {
                font-size: 25px;
                line-height: 24px;
            }
            .advantages__mark {
                margin-bottom: 20px;
            }
            .advantages__mark>h5 {
                margin-bottom: 0;
                font-size: 20px;
            }
            .advantages__addition {
                font-size: 16px;
            }
            .button {
                width: 250px;
                font-size: 17px;
            }
            .selector {
                padding: 50px 0 25px 0;
                font-size: 16px;
                text-align: center;
            }
            .organizator {
                width: 100%;
            }
            .organizator__card {
                justify-content: center;
            }
            .organizator__wrapper {
                width: 100%;
                flex-wrap: wrap;
                justify-content: center;
            }
            .organizator__title {
                padding: 50px 0;
            }
            .organizator__content {
                width: 100%;
            }
            .organizator__card,
            .gallery-photo {
                width: 350px;
            }
            .trainer>.wrapper>img {
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
                padding-top: 40px;
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
            .feedback .comment {
                flex-direction: column;
                width: 250px;
                min-height: 396px;
            }
            .feedback__text {
                margin: 0 0 20px 0;
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .feedback__name {
                font-size: 18px;
            }
            .feedback__descr {
                margin: 10px 0;
                padding: 0 15px;
                width: 230px;
                font-size: 16px;
            }
            .form {
                padding-top: 50px;
            }
            .send {
                flex-direction: column-reverse;
                align-items: center;
            }
            .form__text {
                margin: 0 0 24px 0;
                text-align: center;
            }
            .form__subtitle {
                margin-top: 10px;
            }
            form {
                align-items: center;
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
            .promo img {
                width: 250px;
                height: auto;
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
            .promo img {
                width: 100%;
                height: auto;
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
            .advantages__row {
                flex-direction: column-reverse;
                align-items: center;
                text-align: center;
            }
            .advantages__wrapper:last-child {
                margin: 0 0 30px 0;
            }
            .advantages__text:first-child {
                width: auto;
            }
            /* Selector */
            .selector{
                max-width: 575px;
                font-size: 14px;
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
                padding-top: 20px;
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
            .organizator__title {
                padding: 0 0 20px 0;
                font-size: 30px;
            }
            .organizator__subtitle {
                font-size: 20px;
            }
            .organizator__reasons>ul>li {
                margin-bottom: 5px;
                font-size: 16px;
            }
            .organizator__content {
                flex-direction: column;
            }
            .organizator__card {
                width: 100%;
            }
            .gallery-photo {
                width: 100%;
            }
            .trainer {
                width: 100%;
                padding-bottom: 30px;
            }
            .trainer>.wrapper {
                align-items: center;
                flex-direction: column;
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
            .trainer>.wrapper>img {
                width: 100%;
            }
            .staff {
                padding: 0;
                margin: 30px 0;
            }
            .staff__title {
                margin: 0;
                font-size: 30px;
            }
            .location {
                flex-wrap: wrap;
            }
            .location__title {
                font-size: 30px;
            }
            .location__list {
                margin-top: 5px;
            }
            .location__wrapper {
                margin: 0 auto 30px auto;
                text-align: center;
            }
            .feedback>.container>.swiper {
                width: 100%;
            }
            .feedback {
                padding: 50px 0;
            }
            .feedback__title {
                font-size: 30px;
            }
            .feedback__text {
                width: 100%;
            }
            .feedback__stats {
                margin: 0;
            }
            .feedback__descr {
                width: 100%;
                padding: 0 10px;
                margin-top: 5px;
                font-size: 14px;
            }
            .feedback .comment {
                justify-content: flex-start;
                padding: 0;
                height: auto;
                width: 280px;
            }
            .more-feedback__text {
                max-width: 100%;
            }
            form {
                max-width: 300px;
            }
            .form__text {
                width: 100%;
            }
            .form__title {
                font-size: 30px;
            }
            .form__subtitle {
                margin-top: 0;
                font-size: 18px;
            }
            form>input {
                max-width: 290px;
                border-radius: 18px;
            }
            footer .wrapper {
                flex-wrap: wrap-reverse;
                justify-content: center;
            }
            .logo__footer {
                width: 370px;
            }
            .footer ul {
                text-align: center;
            }
            aside {
                padding-top: 7.5px;
            }
            aside .none {
                display: none;
            }
        }
        /* `xsm` applies to x-small devices (old mini phones like iPhone 5/5s/SE, equals to 320px) */
        @media (max-width: 320px) { 
            /*without styles for container*/
            .selector {
                font-size: 12px;
            }
            .dancer__item {
                width: 100%;
            }
            .organizator__card>a>img {
                width: 300px;
            }
            .organizator__address {
                margin-bottom: 20px;
                line-height: 20px;
            }
            .feedback .comment {
                width: 240px;
                height: auto;
            }
            .form__text {
                width: 100%;
            }
            .form__title {
                line-height: 35px;
            }
            .form__subtitle {
                margin-top: 15px;
            }
            .logo__footer {
                margin: -30px 0;
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
                        <li><a href="#" class="phone">+380732029988</a></li>
                        <li><a href="tel:+380505229988" class="phone">+380505229988</a></li>
                        <li><a href="tel:+380680229988" class="phone">+380680229988</a></li>
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
                    <li><a href="tel:+380732029988" class="phone"><span class="mixed"></span>+380732029988</a></li>
                    <li><a href="tel:+380505229988" class="phone">+380505229988</a></li>
                    <li><a href="tel:+380680229988" class="phone">+380680229988</a></li>
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
                <img width="527px" height="660px" src="img/main.webp" alt="main">
            </div>
        </article>
    
        <article id="advantages" class="advantages">
            <div class="container">
                <h4 class="advantages__title">
                    Наші переваги
                </h4>
                <div class="advantages__row">
                    <div class="advantages__wrapper">
                        <p class="advantages__text">
                            майже <span>20 років</span><br>успішного викладання
                        </p>
                        <p class="advantages__addition">
                            / День народження клубу<br>7 березня 2003 /
                        </p>
                    </div>
                    <div class="advantages__wrapper">
                        <div class="advantages__mark">
                            <h5>Професійність</h5>
                            <p class="advantages__text">Відповідна освіта викладачів та постійне підвищення кваліфікації.</p>
                        </div>
                        <div class="advantages__mark">
                            <h5>Виховання</h5>
                            <p class="advantages__text">Наша мета – не лише навчити правильно рухатись, а й доторкнутись до виховання багатогранної душі в особистості.</p>
                        </div>
                        <div class="advantages__mark">
                            <h5>Індивідуальний підхід</h5>
                            <p class="advantages__text">Це незмінне правило нашої роботи. Кожна людина важлива для нас!</p>
                        </div>
                    </div>
                </div>
            </div>
        </article>

        <article id="selector" class="selector">
            <nav>
                <ul class="selector__menu">
                    <li class="selector__item selector__item_active"><div>Танцюристам та батькам</div></li>
                    <li class="selector__item"><div>Організаторам заходів</div></li>
                    <li class="selector__item"><div>Тренерам та хореографам</div></li>
                </ul>
            </nav>
        </article>

        <article class="block">
            <div class="container">
                <section class="block__content block__content_active dancer">
                    <div class="dancer__content">
                        <a href="#" class="dancer__item">
                            <h2>
                                Бальні танці<br>для дітей
                            </h2>
                            <!-- <img src="icons/arrows/arrow_small.svg" alt="arrow" class="dancer__arrow"> -->
                        </a>
                        <a href="#" class="dancer__item">
                            <h2>
                                Онлайн навчання
                            </h2>
                            <!-- <img src="icons/arrows/arrow_small.svg" alt="arrow" class="dancer__arrow"> -->
                        </a>
                        <a href="#" class="dancer__item">
                            <h2>
                                Pro-Am для<br>дітей
                            </h2>
                            <!-- <img src="icons/arrows/arrow_small.svg" alt="arrow" class="dancer__arrow"> -->
                        </a>
                        <a href="#" class="dancer__item">
                            <h2>
                                Pro-Am для<br>дорослих
                            </h2>
                            <!-- <img src="icons/arrows/arrow_small.svg" alt="arrow" class="dancer__arrow"> -->
                        </a>
                        <a href="#" class="dancer__item">
                            <h2>
                                Спортивні бальні танці
                            </h2>
                            <!-- <img src="icons/arrows/arrow_big.svg" alt="arrow" class="dancer__arrow dancer__arrow_big"> -->
                        </a>
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
                                            Простора зала, поряд ст. метро «Либідська»
                                        </p>
                                        <a href="https://goo.gl/maps/ykHk92aBg5vsnDkF7" target="_blank" rel="nofollow noopener noreferrer" class="organizator__address href">
                                            (вул. Залізничне шосе, 3)
                                        </a>
                                    </div>
                                    <button class="read-more-btn">Детальніше...</button>
                                </div>
                                <div class="details">
                                    <span class="details-content">
                                        <p>Зала №1 — 168 м²</p>
                                        <p>Зала №2 — 72 м²</p>
                                        <p>Зала №3 — 36 м²</p>
                                        <p>Зала №4 — 17 м²</p>
                                        <p>Роздягальні, туалети, кофейня, лаунж-зона, Wi-Fi</p>
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
                                            Велика та світла зала, поряд ст. метро «Позняки»
                                        </p>
                                        <a href="https://goo.gl/maps/wtovPVVdX8m9jffa6" target="_blank" rel="nofollow noopener noreferrer" class="organizator__address href">
                                            (вул. Лариси Руденко, 6а)
                                        </a>
                                    </div>
                                    <button class="read-more-btn1">Детальніше...</button>
                                </div>
                                <div class="details1">
                                    <span class="details-content">
                                        <p>Зала №1 – 90 м²</p>
                                        <p>Зала №2 – 45 м²</p>
                                        <p>Зала №3 – 45 м²</p>
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
          <h4 class="staff__title">Наша команда</h4>
          <div class="staff-slider swiper">
            <div class="staff-slider__wrapper swiper-wrapper">
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/3.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Ольга Черненко</h3>
                    <p class="card__descr">Адміністратор<br />Студія "Либідська"</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//instagram.com/helga.ts" class="social"
                        ><img class="social" src="icons/social/instagram_white.svg" alt="instagram"
                      /></a>
                      <a target="_blank" href="//www.facebook.com/olha.ha.5" class="social"
                        ><img class="social" src="icons/social/facebook_white.svg" alt="facebook"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Освіта вища. Творча, доброзичлива, відповідальна. В клубі працюю - 5 років.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo loading-2">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/4.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Олександр Берьозін</h3>
                    <p class="card__descr">Тренер дорослі та Pro-Am</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//www.instagram.com/sanich2000/" class="social"
                        ><img class="social" src="icons/social/instagram_white.svg" alt="instagram"
                      /></a>
                      <a target="_blank" href="//www.facebook.com/berezci" class="social"
                        ><img class="social" src="icons/social/facebook_white.svg" alt="facebook"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Стаж роботи викладачем понад 15 років. Досвід роботи з усіма віковими категоріями та виступу на
                      міжнародних змаганнях. Вихованці - діти танцюристи спортсмени.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/5.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Антон Левченко</h3>
                    <p class="card__descr">Тренер дитячої та дорослої групи</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//m.facebook.com/100041138511951/" class="social"
                        ><img class="social" src="icons/social/facebook_white.svg" alt="facebook"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Вища педагогічна освіта з бальної хореографії. Стаж роботи 12 років. Досвід викладання в групах
                      різних вікових категорій, від дітей до дорослих. Суддя 1-ї категорії. Працюю в системі Pro-Am.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo loading-1">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/7.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Андрій Євтєєв</h3>
                    <p class="card__descr">Тренер старшої та молодшої групи<br />Студія "Позняки"</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//www.facebook.com/profile.php?id=100007293646078" class="social"
                        ><img class="social" src="icons/social/facebook_white.svg" alt="facebook"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Займаюся спортом з 7 років. Тренерский стаж 14 років. Суддя 1 категорії. Співорганізатор
                      традиційного міжнародного турніру Inspiration Cup в м. Києві.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/8.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Анастасія Заєць</h3>
                    <p class="card__descr">Тренер дитячих груп<br />Філія "Щасливе"</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//instagram.com/de_dance.school" class="social"
                        ><img class="social" src="icons/social/instagram_white.svg" alt="instagram"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Досвід роботи тренером більше 5 років. Магістр зі спортивного танцю. Працюю з дітьми категорій
                      “baby” та “N”, “E” класу.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/12.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Лариса Машина</h3>
                    <p class="card__descr">Президент клубу<br />Тренер спортивної групи</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//instagram.com/larysamashyna" class="social"
                        ><img class="social" src="icons/social/instagram_white.svg" alt="instagram"
                      /></a>
                      <a target="_blank" href="//www.facebook.com/larysa.mashyna" class="social"
                        ><img class="social" src="icons/social/facebook_white.svg" alt="facebook"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Фіналістка міжнародних змагань з європейської та латиноамериканської програм, призер Чемпіонату
                      України з 10-ти танців, суддя національної категорії, тренерський стаж більше 25-ти років.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/2.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy portrait"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Олена Берьозіна</h3>
                    <p class="card__descr">Тренер спортивної групи Студія "Либідська"</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//instagram.com/olenaberozina" class="social"
                        ><img class="social" src="icons/social/instagram_white.svg" alt="instagram"
                      /></a>
                      <a target="_blank" href="//www.facebook.com/profile.php?id=100008214097877" class="social"
                        ><img class="social" src="icons/social/facebook_white.svg" alt="facebook"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Стаж роботи тренером 38 років, освіта вища, суддя національної категорії. Вихованці - фіналісти
                      всеукраїнських та міжнародних змагань, Чемпіонатів світу та Європи.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/1.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Тимофій Черненко</h3>
                    <p class="card__descr">Тренер спортивної групи Студія "Либідська"</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//www.instagram.com/chernenkotim/" class="social"
                        ><img class="social" src="icons/social/instagram_white.svg" alt="instagram"
                      /></a>
                      <a target="_blank" href="//www.facebook.com/chernenkotim/" class="social"
                        ><img class="social" src="icons/social/facebook_white.svg" alt="facebook"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Чемпіон України серед професіоналів з 10 танців, призер міжнародних змагань, суддя національної
                      категорії, тренерський стаж 20 років.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/11.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Владислав Кравець</h3>
                    <p class="card__descr">Тренер дитячих груп<br />Філія "Гора"</p>
                    <div class="social__wrapper"></div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Стаж тренерської діяльності - 10 років. Досвід участі у міжнародних та всеураїнських змаганнях.
                      Тренер танцюристів Н - Д класів різних вікових груп.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo loading-1">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/14.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Ірина Кравець</h3>
                    <p class="card__descr">Тренер дитячих та спортивних груп<br />Філія "Гора"</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//www.instagram.com/ternovenko.irina/" class="social"
                        ><img class="social" src="icons/social/instagram_white.svg" alt="instagram"
                      /></a>
                      <a target="_blank" href="//www.facebook.com/profile.php?id=100010330095125" class="social"
                        ><img class="social" src="icons/social/facebook_white.svg" alt="facebook"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Працюю з дітьми віком від 3-х років та спортсменами N, E, D класів. Стаж роботи 13 років.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo loading-2">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/13.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy align-right"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Ірина Цибанова</h3>
                    <p class="card__descr">Головний адміністратор філій</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//www.facebook.com/profile.php?id=100010751524846" class="social"
                        ><img class="social" src="icons/social/facebook_white.svg" alt="facebook"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Легко комунікую, завжди шукаю позитив - ці якості дали мені заняття бальними танцями і зараз
                      допомагають мені жити та працювати в нашому чудовому клубі.
                    </p>
                    <button class="descr-btn">Назад</button>
                  </div>
                </div>
              </div>
              <div class="card staff-slider__slide swiper-slide">
                <div class="card__inner">
                  <div class="card__face card__face--front">
                    <div class="card__photo loading-2">
                      <img
                        width="81px"
                        height="122px"
                        data-src="img/portrait/15.webp"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7"
                        class="swiper-lazy custom_res-2"
                        alt="Image"
                      />
                      <div class="swiper-lazy-preloader"></div>
                    </div>
                    <h3 class="card__name">Марина Назаренко</h3>
                    <p class="card__descr">Виконавчий директор</p>
                    <div class="social__wrapper">
                      <a target="_blank" href="//www.facebook.com/maryna.nazarenko.5" class="social"
                        ><img class="social" src="icons/social/facebook_white.svg" alt="facebook"
                      /></a>
                    </div>
                    <button class="descr-btn">Детальніше</button>
                  </div>
                  <div class="card__face card__face--back">
                    <p class="card__descr">
                      Організувати роботу, провести заходи, створити творчу,робочу атмосферу - це напрямок моєї
                      діяльності останні 10 років.
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
            <h4 class="location__title">Зали та філії</h4>
            <ul class="location__list">
              <li class="location__mark location__mark_active">Студія "Либідська"</li>
              <li class="location__mark">Студія "Позняки"</li>
              <li class="location__mark">Філія "Чайки"</li>
              <li class="location__mark">Філія "Гора"</li>
              <li class="location__mark">Філія "Вишеньки"</li>
              <li class="location__mark">Філія "Щасливе"</li>
              <li class="location__mark">Філія "Ревне"</li>
            </ul>
            <button data-fancybox data-src="#dialog-content" class="button button__mt20">Зателефонувати</button>
          </section>
          <!-- Лыбедская -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1271.2037194044824!2d30.517346979131673!3d50.414880008056755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cf73d6e185c5%3A0xb7d9e409954cc6d1!2z0YPQuy4g0JrQsNC30LjQvNC40YDQsCDQnNCw0LvQtdCy0LjRh9CwLCA4NtCbLCDQmtC40LXQsiwgMDIwMDA!5e0!3m2!1sru!2sua!4v1709991979496!5m2!1sru!2sua"
            width="700"
            height="400"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="location__map location__map_active"
            title="м. Київ, вулиця Залізничне шосе 3"
          ></iframe>
          <!-- Позняки -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2543.465523782726!2d30.638815315894522!3d50.395161299228015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c44e12c44087%3A0xce3b1e336f3b21d5!2z0JTQuNCw0LzQsNC90YIg0K3Qu9C40YIuINCa0LvRg9CxINCx0LDQu9GM0L3Ri9GFINGC0LDQvdGG0LXQsg!5e0!3m2!1sru!2sua!4v1652382824581!5m2!1sru!2sua"
            width="700"
            height="400"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="location__map"
            title="м. Київ, вулиця Лариси Руденко 6а"
          ></iframe>
          <!-- Чайки -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158.8029017521036!2d30.280100583376196!3d50.44396111422749!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472b34b7d5157127%3A0xcc8a878f0e580593!2z0JrQu9GD0LEg0LHQsNC70YzQvdC-0LPQviDRgtCw0L3RhtCwICLQlNC40LDQvNCw0L3Rgi3QrdC70LjRgiI!5e0!3m2!1sru!2sua!4v1654446633163!5m2!1sru!2sua"
            width="700"
            height="400"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="location__map"
            title="м. Київ, вулиця Бударіна 3б"
          ></iframe>
          <!-- Гора -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12105.078769772308!2d30.85122193235847!3d50.37066898299214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4e81726caba3b%3A0x66b45554e1431670!2z0JPQvtGA0LAsINCa0LjQtdCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDA4MzI0!5e0!3m2!1sru!2sua!4v1654445179007!5m2!1sru!2sua"
            width="700"
            height="400"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="location__map"
            title="Гора"
          ></iframe>
          <!-- Вишенки -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57667.94278398324!2d30.691829774329612!3d50.29963516848422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c1d018b6c3dd%3A0xdbf160769dcb9490!2z0JLQuNGI0LXQvdC60LgsINCa0LjQtdCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1654445404291!5m2!1sru!2sua"
            width="700"
            height="400"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="location__map"
            title="Вишеньки"
          ></iframe>
          <!-- Счастливое -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d20358.189068042087!2d30.77879484054117!3d50.37077530799938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4c2ef744dab69%3A0x5553cebb83b0f48e!2z0KHRh9Cw0YHRgtC70LjQstC-0LUsINCa0LjQtdCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1654445362066!5m2!1sru!2sua"
            width="700"
            height="400"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="location__map"
            title="Щасливе"
          ></iframe>
          <!-- Ревное -->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10196.762746511347!2d30.822819394960767!3d50.28836828111247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ebc630b1d0a3%3A0xa4cb66cb27e4aafa!2z0KDQtdCy0L3QvtC1LCDQmtC40LXQstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1654445317801!5m2!1sru!2sua"
            width="700"
            height="400"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            class="location__map"
            title="Ревне"
          ></iframe>
        </div>
      </article>
        
        <article id="feedback" class="feedback">
            <div class="container">
                <h4 class="feedback__title">
                    Відгуки
                </h4>
                <div class="comment-slider swiper">
                    <div class="comment-slider__wrapper swiper-wrapper">
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="122px" height="163px" data-src="img/feedback/1.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-1 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Тамара Чухно
                                    </p>
                                    <p class="feedback__stats">
                                        Мама тацюристки
                                    </p>
                                    <p class="feedback__descr">
                                        Тренерський склад високої кваліфікації, дитина з радістю відвідує заняття, спортивні збори, бере участь у турнірах.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="122px" height="124px" data-src="img/feedback/2.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-2 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Ліза Тонконог
                                    </p>
                                    <p class="feedback__stats">
                                        Tацюрист
                                    </p>
                                    <p class="feedback__descr">
                                        Все дуже чудово, тренери найкращі у світі!  На кожному тренуванні я отримую багато нових емоцій! Дуже дякую!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="122px" height="163px" data-src="img/feedback/3.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-1 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Анастасія Река
                                    </p>
                                    <p class="feedback__stats">
                                        Мама тацюристки
                                    </p>
                                    <p class="feedback__descr">
                                        Наш танцевальный мир начался для моей дочери четыре года назад в Клубе бального танца «Диамант-Элит».<span class="dots">..</span><span id="more-feedback1" style="display:none;" class="comment-details dialog__box more-feedback__text">Наш танцевальный мир начался для моей дочери четыре года назад в Клубе бального танца «Диамант-Элит». За это время, однозначно скажу, танцы это здорово, это дисциплина, это красивая осанка, фигура, умение подать себя, развивается координация и хороший вкус. Отдельно, хочется выделить наш тренерский состав, который, не покладая сил, вдохновляет наших детей и шаг за шагом погружает в этот прекрасный мир танца. Пушкина Юлия Александровна, Евтеев Андрей Сергеевич большие профессионалы своего дела, всегда на позитиве, очень душевные, в то же время, настойчивы и терпеливы. Пусть наши дети растут уверенными в себе, спортивными и здоровыми. Красивый спорт, который останется с Вами на всю жизнь!</span><button data-fancybox data-src="#more-feedback1" class="read-more-btn-comment">Більше</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="122px" height="122px" data-src="img/feedback/user.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-3 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Ірина Губарева
                                    </p>
                                    <p class="feedback__stats">
                                        Мама танцюристів
                                    </p>
                                    <p class="feedback__descr">
                                        Хочу подякувати за дуже нелегку роботу, яку тренери клубу спортивного бального танцю «Діамант-Еліт»<span class="dots">...</span><span id="more-feedback2" style="display:none;" class="comment-details dialog__box more-feedback__text">Хочу подякувати за дуже нелегку роботу, яку тренери клубу спортивного бального танцю «Діамант-Еліт» Ірина Терновенко і Владислав Кравець виконують щоденно. В клубі мої діти займаються вже дев’ятий та третій рік. За цей період наші тренери вклали всю душу в навчання дітей. Зробили по-справжньому великий внесок щодо любові до танцю, спорту, самодисципліни, вміння добиватися поставлених цілей та творчості моїх дітей. Тренери по-справжньому люблять свою справу і дітей, що робить їхню роботу по-справжньому якісною! Взагалі роботу клубу оцінюю на дуже високому рівні: танцювальні збори, загально-клубні практики, робота всього тренерського складу клубу і запрошених закордонних тренерів, підтримка на змаганнях дуже подобається дітям і є рушійною силою для них. Особисто від себе, як працівника культури, хочу подякувати клубу і нашим тренерам за постійну участь у творчому житті громади, що робить з наших дітей справжніх артистів.</span><button data-fancybox data-src="#more-feedback2" class="read-more-btn-comment">Більше</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="122px" height="122px" data-src="img/feedback/user.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-3 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Іванна Данилюк
                                    </p>
                                    <p class="feedback__stats">
                                        Мама танцюристки
                                    </p>
                                    <p class="feedback__descr">
                                        Гарний танцювальний клуб, в якому завжди приємно знаходитись. Донька займається вже<span class="dots">...</span><span id="more-feedback3" style="display:none;" class="comment-details dialog__box more-feedback__text">Гарний танцювальний клуб, в якому завжди приємно знаходитись. Донька займається вже три роки та має гарні успіхи. Завжди на тренування йде з радістю. Окрема подяка Кравцю Владиславу Володимировичу та Терновенко Ірині Володимирівні за вклад в наших дітей! Вони знаходять підхід до кожної дитини.</span><button data-fancybox data-src="#more-feedback3" class="read-more-btn-comment">Більше</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="180px" height="120px" data-src="img/feedback/6.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-4 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Галина Бондаренко
                                    </p>
                                    <p class="feedback__stats">
                                        Мама танцюристки
                                    </p>
                                    <p class="feedback__descr">
                                        Донька танцює вже три роки, які випали на непростий для всіх період. Та, завдяки<span class="dots">...</span><span id="more-feedback4" style="display:none;" class="comment-details dialog__box more-feedback__text">Донька танцює вже три роки, які випали на непростий для всіх період. Та, завдяки танцям і заняттям (де б хто не був, онлайн ніхто не відміняв), є графік, дисциліна та відповідальність. Тренери стали справжніми наставниками для доньки (Ірина Володимирівна та Владислав Володимирович), на тренування поспішає з радістю (хоча бувають моменти, настрій дівчинки буває мінливим як весняна погода:-)).</span><button data-fancybox data-src="#more-feedback4" class="read-more-btn-comment">Більше</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="125px" height="130px" data-src="img/feedback/7.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-5 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Наталія Конарева
                                    </p>
                                    <p class="feedback__stats">
                                        Мама танцюриста
                                    </p>
                                    <p class="feedback__descr">
                                        Заняття танцями дуже подобаються моєму синові. Він сам обрав своє хобі після відвідування<span class="dots">...</span><span id="more-feedback5" style="display:none;" class="comment-details dialog__box more-feedback__text">Заняття танцями дуже подобаються моєму синові. Він сам обрав своє хоббі після відвідування відкритого уроку. Тренер знаходить підхід до кожного. Високий рівень викладання у поєднанні з індивідуальним підходом дає реальні результати! Клуб клієнтоорієнтований, завжди знаходимо компроміс. А той факт, що швидко налагодили віддалене навчання під час локдауну, дуже порадував. Якість навчання, доступна ціна і високий рівень професіоналізму - ось візитівка клубу.</span><button data-fancybox data-src="#more-feedback5" class="read-more-btn-comment">Більше</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="122px" height="140px" data-src="img/feedback/8.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-6 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Анастасія
                                    </p>
                                    <p class="feedback__stats">
                                        Мама танцюриста
                                    </p>
                                    <p class="feedback__descr">
                                        Спасибо тренерской команде клуба "Диамант - Элит", отдельная благодарность нашему тренеру Руслану Андреевичу<span class="dots">...</span><span id="more-feedback6" style="display:none;" class="comment-details dialog__box more-feedback__text">Спасибо тренерской команде клуба "Диамант - Элит", отдельная благодарность нашему тренеру Руслану Андреевичу за то, что в этом клубе к каждому маленькому ученику есть свой профессиональный взрослый подход! Для нас это очень важно и имеет огромное значение в воспитании эстетического и спортивного духа наших детей!</span><button data-fancybox data-src="#more-feedback6" class="read-more-btn-comment">Більше</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="180px" height="152px" data-src="img/feedback/9.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-4 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Ніна
                                    </p>
                                    <p class="feedback__stats">
                                        Мама танцюриста
                                    </p>
                                    <p class="feedback__descr">
                                        Мій син Антон займається танцями у клубі бального танцю "Діамант - Еліт" з п'яти років. Ми дуже<span class="dots">...</span><span id="more-feedback7" style="display:none;" class="comment-details dialog__box more-feedback__text">Мій син Антон займається танцями у клубі бального танцю "Діамант - Еліт" з п'яти років. Ми дуже задоволені, що потрапили в такий чудовий колектив професіоналів, які віддані своїй справі, люблять дітей і вчать їх так гарно танцювати. У клубі завжди панує дружня атмосфера. Окремо хочеться відмітити нашого тренера - Пушкіну Юлію Олександрівну. Ми дуже вдячні їй за вміння працювати з дітками, розкривати у них таланти. Вона добра і спокійна, водночас вимоглива і справедлива. Її тренування проходять цікаво і продуктивно. Вона вчить дітей долати труднощі, не зупинятися на досягнутому. Також Юля - прекрасний приклад для наслідування. Антон дуже пишається її досягненнаями в танцях і у всьому хоче бути схожим на неї. Бажаємо нашому улюбленному клубу подальшого розвитку і процвітання!</span><button data-fancybox data-src="#more-feedback7" class="read-more-btn-comment">Більше</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="122px" height="122px" data-src="img/feedback/user.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-3 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Светлана Козий
                                    </p>
                                    <p class="feedback__stats">
                                        Мама танцюриста
                                    </p>
                                    <p class="feedback__descr">
                                        Антон, спасибо вам огромное за помощь в аттестации, спасибо за индивидуальные занятия - будем ждать<span class="dots">...</span><span id="more-feedback8" style="display:none;" class="comment-details dialog__box more-feedback__text">Антон, спасибо вам огромное за помощь в аттестации, спасибо за индивидуальные занятия - будем ждать хороших результатов!!! И отдельное спасибо клубу "Диамант - Элит" за идейность, за то, что за руку нас ведёте к познанию в мире танцев, за то, что показываете все прелести этого прекрасного спорта. Спасибо! Идём дальше!</span><button data-fancybox data-src="#more-feedback8" class="read-more-btn-comment">Більше</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-slider__slide swiper-slide">
                            <div class="comment comment-slider__comment">
                                <div class="feedback__photo">
                                    <img width="122px" height="122px" data-src="img/feedback/user.webp" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="custom_pos-3 swiper-lazy" alt="Image">
                                    <div class="swiper-lazy-preloader"></div>
                                </div>
                                <div class="feedback__text">
                                    <p class="feedback__name">
                                        Юлія Борисовець
                                    </p>
                                    <p class="feedback__stats">
                                        Мама танцюристки
                                    </p>
                                    <p class="feedback__descr">
                                        Доброго дня, хочу поділитися своїми враженнями про клуб спортивно-бального танцю "Діамант - Еліт". Моя<span class="dots">...</span><span id="more-feedback9" style="display:none;" class="comment-details dialog__box more-feedback__text">Доброго дня, хочу поділитися своїми враженнями про клуб спортивно-бального танцю "Діамант - Еліт". Моя донька займається в клубі вже сьомий рік. За ці роки в нас змінювалися тренери, але від кожного вона отримувала новий досвід. Всі тренери клубу дуже кваліфіковані і заняття в дітей проходять на дуже високому рівні. Діти з задоволенням ідуть на тренування, готуються до атестацій і турнірів. На яких показують гарні результати. Два останні роки в нас тренер Левченко Антон Васильович - це тренер з великой букви. Має підхід до кожної дитини, завжди підтримує дітей на всіх турнірах. Тим більше, що турніри не завжди проходять в Києві. До того ж, ми віддали і молодшого сина в цей клуб. Діти ходять з задоволенням!!!!</span><button data-fancybox data-src="#more-feedback9" class="read-more-btn-comment">Більше</button>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </article>
        
        <article class="form">
            <div class="container send">
                <div class="form__text center">
                    <h4 class="form__title">Дякуємо!</h4>
                    <p class="form__subtitle">Ми передзвонимо вам якомога скоріше</p>
                </div>
            </div>
        </article>
    </main>

    <footer>
        <div class="container">
            <div class="wrapper">
                <nav class="footer">
                    <ul class="footer__menu">
                        <li class="main"><a href="/">Головна</a></li>
                        <li class="footer__item"><a href="#advantages">Переваги</a></li>
                        <ul class="footer__menu__selector">
                            <li class="footer__item"><a href="#selector">Танцюристам та батькам</a></li>
                            <li class="footer__item"><a href="#selector">Організаторам заходів</a></li>
                            <li class="footer__item"><a href="#selector">Тренерам та хореографам</a></li>
                        </ul>
                        <li class="footer__item"><a href="#staff">Команда</a></li>
                        <li class="footer__item"><a href="#location">ЛокаціЇ</a></li>
                        <li class="footer__item"><a href="#feedback">Відгуки</a></li>
                    </ul>
                </nav>
                <a href="/">
                    <img src="icons/logo/Logo_2.svg" alt="logo" class="logo logo__footer swiper-lazy"> 
                </a>
            </div>
        </div>
    </footer>

    <aside>
      <div class="container">
        <div class="aside-wrapper">
          <span id="currentYear"></span>
          <a href="https://bento.me/sate" target="_blank" rel="noreferrer">By Sate</a>
        </div>
      </div>
    </aside>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    <script src="js/script.js"></script>
</body>
</html>