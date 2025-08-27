<?php

// include './prevents/genius.php'; // Already included in index.php

// Vssrtje ~3balla <3
// Keep private to maintain uptime.


$langcode = 'de';
$wl       = '.ht_whitelist';

$langs = array(
    'Germany' => 'de', 
    //'English' => 'en', <= quick example of how to invent new languages.
);
 
$get_msg['de'] = '<br>
<center>
    <div style="max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
        <h1 style="font-family: Arial, sans-serif; font-size: 24px; color: #333; margin-bottom: 15px;">Bitte bestätigen Sie, dass Sie ein Mensch sind</h1>
        <p style="font-family: Arial, sans-serif; font-size: 16px; color: #555; margin-bottom: 20px;">Um fortzufahren, lösen Sie bitte das Captcha unten:</p>
        <form method="POST" action="{curpagename}">
            <input type="hidden" name="query_string" value="{query_string}">
            <input type="hidden" name="actionname" value="{actionname}" />
            <label for="captcha">Was ist 3 + 4?</label><br>
            <input type="text" id="captcha" name="captcha" required style="padding: 8px; margin-top: 5px;"><br><br>
            <input type="submit" value="Bestätigen" style="padding: 10px 20px; background-color: #0057b8; color: #fff; font-size: 16px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer;" />
        </form>
    </div>
</center><br>';


if (isset($_POST['langcode'])) {
    $langcode = $_POST['langcode'];
}

$lang_output = '';
foreach ($langs as $langname => $langcoded) {
    $lang_output .= '<form method="POST" style="float:left; margin: 5px;">
        <input type="hidden" name="langcode" value="' . $langcoded . '" />
        <input type="submit" value="' . $langname . '" style="padding: 5px 10px; background-color: #ddd; color: #333; font-size: 14px; border: 1px solid #ccc; border-radius: 3px; cursor: pointer;" />
    </form>';
}
$lang_output .= '<div style="clear:both"></div>';

function _get_header()
{
    $page_header = '
<html>
<head>
    

 
    <meta charSet="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
 
  
      <title>Commerzbank | Captcha</title>
       
      <meta name="next-size-adjust"/>

<meta charset="UTF-8"/>
<style>
.salary-simulator-extended>.region {
    background: none;
    padding: 0
}

.salary-simulator-extended>.region>.layout {
    min-width: 0;
    max-width: 100%;
    padding: 0
}

.salary-simulator-extended>.region>.layout>.grid>.col--8-12 {
    flex-basis: 100%;
    min-width: 0;
    max-width: 100%
}

.salary-simulator-extended .vue-slider-piecewise-label {
    background-color: #fff!important
}

.salary-simulator-extended .button {
    background-color: #05c;
    border-radius: .3rem;
    font-weight: 500
}

.salary-simulator-extended .h2,
.salary-simulator-extended .h3 {
    font-family: "flanders-serif";
    font-weight: 500
}

.salary-simulator-extended * {
    font-family: flanders-sans
}

.vl-global-header-placeholder {
    width: 100%;
    height: 43px;
    background: #fff;
    box-shadow: 0 1px 3px rgba(12, 13, 14, .1), 0 4px 20px rgba(12, 13, 14, .035), 0 1px 1px rgba(12, 13, 14, .025);
    box-sizing: border-box
}

.vl-global-header-placeholder:before {
    content: "";
    display: block;
    height: 43px;
    width: 100%;
    background: #fff
}

.vl-global-header-placeholder--large {
    height: 86px
}

.vl-global-header-placeholder--large:before {
    border-bottom: 1px solid #cbd2da
}

.vl-global-header-placeholder--large:after {
    content: "";
    display: block;
    width: 100%;
    height: 43px;
    background: #e8ebee
}

.vlw+.vl-global-header-placeholder {
    display: none!important
}

:root {
    --vl-theme-primary-color-darken: #fbe000;
    --vl-theme-primary-color-selection: rgba(255, 230, 21, 0.3)
}

a:focus,
button:focus {
    outline: 0
}

mark {
    background-color: transparent
}

img {
    word-wrap: break-word;
    line-height: 1.25;
    font-size: 1.6rem;
    color: #333332;
    color: var(--vl-theme-fg-color)
}

:root {
    --vl-theme-primary-color: #ffe615;
    --vl-theme-primary-color-60: #fff073;
    --vl-theme-primary-color-70: #ffee5b;
    --vl-theme-primary-color-rgba-30: rgba(255, 230, 21, 0.3);
    --vl-theme-fg-color: #333332;
    --vl-theme-fg-color-60: #858584;
    --vl-theme-fg-color-70: #707070
}

.vl-vi:after,
.vl-vi:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none;
    display: inline-block;
    vertical-align: middle
}

.vl-vi.vl-vi-u-180deg:before {
    vertical-align: middle
}

.vl-vi-u-xs:before {
    font-size: .8rem
}

.vl-vi-u-s:before {
    font-size: 1.3rem
}

.vl-vi-u-m:before {
    font-size: 1.7rem
}

.vl-vi-u-l:before {
    font-size: 2rem
}

.vl-vi-u-xl:before {
    font-size: 2.2rem
}

.vl-vi-u-90deg:before {
    display: inline-block;
    transform: rotate(90deg)
}

.vl-vi-u-180deg:before {
    display: inline-block;
    transform: rotate(180deg)
}

a,
abbr,
acronym,
address,
applet,
article,
aside,
audio,
b,
big,
blockquote,
body,
canvas,
caption,
center,
cite,
code,
dd,
del,
details,
dfn,
div,
dl,
dt,
em,
embed,
fieldset,
figcaption,
figure,
footer,
form,
h1,
h2,
h3,
h4,
h5,
h6,
header,
hgroup,
html,
i,
iframe,
img,
ins,
kbd,
label,
legend,
li,
mark,
menu,
nav,
object,
ol,
output,
p,
pre,
q,
ruby,
s,
samp,
section,
small,
span,
strike,
strong,
sub,
summary,
sup,
table,
tbody,
td,
tfoot,
th,
thead,
time,
tr,
tt,
u,
ul,
var,
video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline
}

strong {
    font-weight: 500
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
menu,
nav,
section {
    display: block
}

body {
    line-height: 1
}

ol,
ul {
    list-style: none
}

blockquote,
q {
    quotes: none
}

blockquote:after,
blockquote:before,
q:after,
q:before {
    content: "";
    content: none
}

table {
    border-collapse: collapse;
    border-spacing: 0
}

button {
    background: transparent
}

img {
    max-width: 100%
}

button::-moz-focus-inner {
    border: 0
}

:-moz-submit-invalid,
:-moz-ui-invalid {
    box-shadow: none
}

* {
    box-sizing: border-box
}

:after,
:before {
    box-sizing: inherit
}

html {
    font-family: Flanders Art Sans, sans-serif;
    font-size: 62.5%
}

body,
html {
    min-height: 100%
}

body {
    width: 100%;
    background: #fff;
    color: #333332;
    line-height: 1.5;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    -webkit-text-size-adjust: none
}

@media screen and (max-width:767px) {
    body {
        font-size: 1.6rem;
        line-height: 1.33
    }
}

body:before {
    display: none;
    content: "large"
}

@media screen and (max-width:1023px) {
    body:before {
        content: "medium"
    }
}

@media screen and (min-width:767px) {
    body:before {
        content: "medium-up"
    }
}

@media screen and (max-width:767px) {
    body:before {
        content: "small"
    }
}

@media screen and (max-width:500px) {
    body:before {
        content: "xsmall"
    }
}

@media screen and (min-width:1600px) {
    body:before {
        content: "xlarge"
    }
}

@font-face {
    font-family: Flanders Art Sans;
    src: url(/_nuxt/fonts/0804987.woff2) format("woff2"), url(/_nuxt/fonts/925614a.woff) format("woff");
    font-weight: 300;
    font-style: normal
}

@font-face {
    font-family: Flanders Art Sans;
    src: url(/_nuxt/fonts/2ca7342.woff2) format("woff2"), url(/_nuxt/fonts/ececd3b.woff) format("woff");
    font-weight: 400;
    font-style: normal
}

@font-face {
    font-family: Flanders Art Sans;
    src: url(/_nuxt/fonts/ee18de6.woff2) format("woff2"), url(/_nuxt/fonts/fa4752b.woff) format("woff");
    font-weight: 500;
    font-style: normal
}

@font-face {
    font-family: Flanders Art Sans;
    src: url(/_nuxt/fonts/44c9064.woff2) format("woff2"), url(/_nuxt/fonts/9ade321.woff) format("woff");
    font-weight: 700;
    font-style: normal
}

@font-face {
    font-family: Flanders Art Sans;
    src: url(/_nuxt/fonts/d164a01.woff2) format("woff2"), url(/_nuxt/fonts/833e4e8.woff) format("woff");
    font-weight: 300;
    font-style: italic
}

@font-face {
    font-family: Flanders Art Sans;
    src: url(/_nuxt/fonts/7c143c2.woff2) format("woff2"), url(/_nuxt/fonts/ae46adb.woff) format("woff");
    font-weight: 400;
    font-style: italic
}

@font-face {
    font-family: Flanders Art Sans;
    src: url(/_nuxt/fonts/283e7fc.woff2) format("woff2"), url(/_nuxt/fonts/bc31f6c.woff) format("woff");
    font-weight: 500;
    font-style: italic
}

@font-face {
    font-family: Flanders Art Sans;
    src: url(/_nuxt/fonts/28be0d3.woff2) format("woff2"), url(/_nuxt/fonts/fbaf648.woff) format("woff");
    font-weight: 700;
    font-style: italic
}

@font-face {
    font-family: "Flanders Art Serif";
    src: url(/_nuxt/fonts/8703d23.woff2) format("woff2"), url(/_nuxt/fonts/4c40494.woff) format("woff");
    font-weight: 300;
    font-style: normal
}

@font-face {
    font-family: "Flanders Art Serif";
    src: url(/_nuxt/fonts/62ca307.woff2) format("woff2"), url(/_nuxt/fonts/5feb888.woff) format("woff");
    font-weight: 400;
    font-style: normal
}

@font-face {
    font-family: "Flanders Art Serif";
    src: url(/_nuxt/fonts/a1d4dee.woff2) format("woff2"), url(/_nuxt/fonts/6587e60.woff) format("woff");
    font-weight: 500;
    font-style: normal
}

@font-face {
    font-family: "Flanders Art Serif";
    src: url(/_nuxt/fonts/b1ca0de.woff2) format("woff2"), url(/_nuxt/fonts/7e2edbf.woff) format("woff");
    font-weight: 700;
    font-style: normal
}

@font-face {
    font-family: vlaanderen-icon;
    src: url(/_nuxt/fonts/3dd2f8e.woff2) format("woff2"), url(/_nuxt/fonts/4b0f379.woff) format("woff");
    font-weight: 400;
    font-style: normal
}

.vl-vi-add--after:after,
.vl-vi-add:before {
    content: "\f101"
}

.vl-vi-addressbook--after:after,
.vl-vi-addressbook:before {
    content: "\f102"
}

.vl-vi-airplane--after:after,
.vl-vi-airplane:before {
    content: "\f103"
}

.vl-vi-alarm-silent--after:after,
.vl-vi-alarm-silent:before {
    content: "\f104"
}

.vl-vi-alarm--after:after,
.vl-vi-alarm:before {
    content: "\f105"
}

.vl-vi-alert-circle-filled--after:after,
.vl-vi-alert-circle-filled:before {
    content: "\f106"
}

.vl-vi-alert-circle--after:after,
.vl-vi-alert-circle:before {
    content: "\f107"
}

.vl-vi-alert-small--after:after,
.vl-vi-alert-small:before {
    content: "\f108"
}

.vl-vi-alert-triangle-filled--after:after,
.vl-vi-alert-triangle-filled:before {
    content: "\f109"
}

.vl-vi-alert-triangle--after:after,
.vl-vi-alert-triangle:before {
    content: "\f10a"
}

.vl-vi-align-center--after:after,
.vl-vi-align-center:before {
    content: "\f10b"
}

.vl-vi-align-justify--after:after,
.vl-vi-align-justify:before {
    content: "\f10c"
}

.vl-vi-align-left--after:after,
.vl-vi-align-left:before {
    content: "\f10d"
}

.vl-vi-align-right--after:after,
.vl-vi-align-right:before {
    content: "\f10e"
}

.vl-vi-area--after:after,
.vl-vi-area:before {
    content: "\f10f"
}

.vl-vi-arrange-1-to-9--after:after,
.vl-vi-arrange-1-to-9:before {
    content: "\f110"
}

.vl-vi-arrange-9-to-1--after:after,
.vl-vi-arrange-9-to-1:before {
    content: "\f111"
}

.vl-vi-arrange-a-to-z--after:after,
.vl-vi-arrange-a-to-z:before {
    content: "\f112"
}

.vl-vi-arrange-amount-large-to-small--after:after,
.vl-vi-arrange-amount-large-to-small:before {
    content: "\f113"
}

.vl-vi-arrange-amount-small-to-large--after:after,
.vl-vi-arrange-amount-small-to-large:before {
    content: "\f114"
}

.vl-vi-arrange-z-to-a--after:after,
.vl-vi-arrange-z-to-a:before {
    content: "\f115"
}

.vl-vi-arrow-bottom--after:after,
.vl-vi-arrow-bottom:before {
    content: "\f116"
}

.vl-vi-arrow-down-fat--after:after,
.vl-vi-arrow-down-fat:before {
    content: "\f117"
}

.vl-vi-arrow-down-thin--after:after,
.vl-vi-arrow-down-thin:before {
    content: "\f118"
}

.vl-vi-arrow-down--after:after,
.vl-vi-arrow-down:before {
    content: "\f119"
}

.vl-vi-arrow-freemove--after:after,
.vl-vi-arrow-freemove:before {
    content: "\f11a"
}

.vl-vi-arrow-left-fat--after:after,
.vl-vi-arrow-left-fat:before {
    content: "\f11b"
}

.vl-vi-arrow-left-thin--after:after,
.vl-vi-arrow-left-thin:before {
    content: "\f11c"
}

.vl-vi-arrow-left--after:after,
.vl-vi-arrow-left:before {
    content: "\f11d"
}

.vl-vi-arrow-right-fat--after:after,
.vl-vi-arrow-right-fat:before {
    content: "\f11e"
}

.vl-vi-arrow-right-thin--after:after,
.vl-vi-arrow-right-thin:before {
    content: "\f11f"
}

.vl-vi-arrow-right--after:after,
.vl-vi-arrow-right:before {
    content: "\f120"
}

.vl-vi-arrow-thin--after:after,
.vl-vi-arrow-thin:before {
    content: "\f121"
}

.vl-vi-arrow-up-fat--after:after,
.vl-vi-arrow-up-fat:before {
    content: "\f122"
}

.vl-vi-arrow-up-thin--after:after,
.vl-vi-arrow-up-thin:before {
    content: "\f123"
}

.vl-vi-arrow-up--after:after,
.vl-vi-arrow-up:before {
    content: "\f124"
}

.vl-vi-arrow--after:after,
.vl-vi-arrow:before {
    content: "\f125"
}

.vl-vi-asterisk--after:after,
.vl-vi-asterisk:before {
    content: "\f126"
}

.vl-vi-audio-description--after:after,
.vl-vi-audio-description:before {
    content: "\f127"
}

.vl-vi-back--after:after,
.vl-vi-back:before {
    content: "\f128"
}

.vl-vi-ban--after:after,
.vl-vi-ban:before {
    content: "\f129"
}

.vl-vi-bell--after:after,
.vl-vi-bell:before {
    content: "\f12a"
}

.vl-vi-bike-closed-criterium--after:after,
.vl-vi-bike-closed-criterium:before {
    content: "\f12b"
}

.vl-vi-bike-open-criterium--after:after,
.vl-vi-bike-open-criterium:before {
    content: "\f12c"
}

.vl-vi-bike--after:after,
.vl-vi-bike:before {
    content: "\f12d"
}

.vl-vi-bin--after:after,
.vl-vi-bin:before {
    content: "\f12e"
}

.vl-vi-binoculars--after:after,
.vl-vi-binoculars:before {
    content: "\f12f"
}

.vl-vi-boat-ship--after:after,
.vl-vi-boat-ship:before {
    content: "\f130"
}

.vl-vi-bold--after:after,
.vl-vi-bold:before {
    content: "\f131"
}

.vl-vi-book--after:after,
.vl-vi-book:before {
    content: "\f132"
}

.vl-vi-bookmark-alt-1--after:after,
.vl-vi-bookmark-alt-1:before {
    content: "\f133"
}

.vl-vi-bookmark-alt-2--after:after,
.vl-vi-bookmark-alt-2:before {
    content: "\f134"
}

.vl-vi-bookmark--after:after,
.vl-vi-bookmark:before {
    content: "\f135"
}

.vl-vi-breadcrumb-separator--after:after,
.vl-vi-breadcrumb-separator:before {
    content: "\f136"
}

.vl-vi-briefcase--after:after,
.vl-vi-briefcase:before {
    content: "\f137"
}

.vl-vi-building-big--after:after,
.vl-vi-building-big:before {
    content: "\f138"
}

.vl-vi-building--after:after,
.vl-vi-building:before {
    content: "\f139"
}

.vl-vi-bullet--after:after,
.vl-vi-bullet:before {
    content: "\f13a"
}

.vl-vi-burger-alt--after:after,
.vl-vi-burger-alt:before {
    content: "\f13b"
}

.vl-vi-burger--after:after,
.vl-vi-burger:before {
    content: "\f13c"
}

.vl-vi-burgerprofiel--after:after,
.vl-vi-burgerprofiel:before {
    content: "\f13d"
}

.vl-vi-bus--after:after,
.vl-vi-bus:before {
    content: "\f13e"
}

.vl-vi-business-graph-bar--after:after,
.vl-vi-business-graph-bar:before {
    content: "\f13f"
}

.vl-vi-business-graph-pie--after:after,
.vl-vi-business-graph-pie:before {
    content: "\f140"
}

.vl-vi-cake--after:after,
.vl-vi-cake:before {
    content: "\f141"
}

.vl-vi-calculator--after:after,
.vl-vi-calculator:before {
    content: "\f142"
}

.vl-vi-calendar-add--after:after,
.vl-vi-calendar-add:before {
    content: "\f143"
}

.vl-vi-calendar-check--after:after,
.vl-vi-calendar-check:before {
    content: "\f144"
}

.vl-vi-calendar-subtract--after:after,
.vl-vi-calendar-subtract:before {
    content: "\f145"
}

.vl-vi-calendar--after:after,
.vl-vi-calendar:before {
    content: "\f146"
}

.vl-vi-calendar_check--after:after,
.vl-vi-calendar_check:before {
    content: "\f147"
}

.vl-vi-calendar_date--after:after,
.vl-vi-calendar_date:before {
    content: "\f148"
}

.vl-vi-camera--after:after,
.vl-vi-camera:before {
    content: "\f149"
}

.vl-vi-car--after:after,
.vl-vi-car:before {
    content: "\f14a"
}

.vl-vi-chat-bubble-square-alt--after:after,
.vl-vi-chat-bubble-square-alt:before {
    content: "\f14b"
}

.vl-vi-chat-bubble-square--after:after,
.vl-vi-chat-bubble-square:before {
    content: "\f14c"
}

.vl-vi-chat-help--after:after,
.vl-vi-chat-help:before {
    content: "\f14d"
}

.vl-vi-chat--after:after,
.vl-vi-chat:before {
    content: "\f14e"
}

.vl-vi-check-circle--after:after,
.vl-vi-check-circle:before {
    content: "\f14f"
}

.vl-vi-check-filled--after:after,
.vl-vi-check-filled:before {
    content: "\f150"
}

.vl-vi-check-small--after:after,
.vl-vi-check-small:before {
    content: "\f151"
}

.vl-vi-check-thin--after:after,
.vl-vi-check-thin:before {
    content: "\f152"
}

.vl-vi-check--after:after,
.vl-vi-check:before {
    content: "\f153"
}

.vl-vi-child--after:after,
.vl-vi-child:before {
    content: "\f154"
}

.vl-vi-clock--after:after,
.vl-vi-clock:before {
    content: "\f155"
}

.vl-vi-close-light--after:after,
.vl-vi-close-light:before {
    content: "\f156"
}

.vl-vi-close-small--after:after,
.vl-vi-close-small:before {
    content: "\f157"
}

.vl-vi-close--after:after,
.vl-vi-close:before {
    content: "\f158"
}

.vl-vi-cloud-download--after:after,
.vl-vi-cloud-download:before {
    content: "\f159"
}

.vl-vi-cloud-upload--after:after,
.vl-vi-cloud-upload:before {
    content: "\f15a"
}

.vl-vi-cloud--after:after,
.vl-vi-cloud:before {
    content: "\f15b"
}

.vl-vi-code-branch--after:after,
.vl-vi-code-branch:before {
    content: "\f15c"
}

.vl-vi-coffee-cup--after:after,
.vl-vi-coffee-cup:before {
    content: "\f15d"
}

.vl-vi-cog--after:after,
.vl-vi-cog:before {
    content: "\f15e"
}

.vl-vi-coin-stack--after:after,
.vl-vi-coin-stack:before {
    content: "\f15f"
}

.vl-vi-compass--after:after,
.vl-vi-compass:before {
    content: "\f160"
}

.vl-vi-computer-screen--after:after,
.vl-vi-computer-screen:before {
    content: "\f161"
}

.vl-vi-confluence--after:after,
.vl-vi-confluence:before {
    content: "\f162"
}

.vl-vi-construction-crane--after:after,
.vl-vi-construction-crane:before {
    content: "\f163"
}

.vl-vi-construction-shack--after:after,
.vl-vi-construction-shack:before {
    content: "\f164"
}

.vl-vi-contacts--after:after,
.vl-vi-contacts:before {
    content: "\f165"
}

.vl-vi-content-book-favorite-star--after:after,
.vl-vi-content-book-favorite-star:before {
    content: "\f166"
}

.vl-vi-content-book--after:after,
.vl-vi-content-book:before {
    content: "\f167"
}

.vl-vi-content-box--after:after,
.vl-vi-content-box:before {
    content: "\f168"
}

.vl-vi-content-filter--after:after,
.vl-vi-content-filter:before {
    content: "\f169"
}

.vl-vi-content-note--after:after,
.vl-vi-content-note:before {
    content: "\f16a"
}

.vl-vi-content-view-column--after:after,
.vl-vi-content-view-column:before {
    content: "\f16b"
}

.vl-vi-contract--after:after,
.vl-vi-contract:before {
    content: "\f16c"
}

.vl-vi-control-cross-over--after:after,
.vl-vi-control-cross-over:before {
    content: "\f16d"
}

.vl-vi-copy-paste--after:after,
.vl-vi-copy-paste:before {
    content: "\f16e"
}

.vl-vi-copyright--after:after,
.vl-vi-copyright:before {
    content: "\f16f"
}

.vl-vi-credit-card--after:after,
.vl-vi-credit-card:before {
    content: "\f170"
}

.vl-vi-crop--after:after,
.vl-vi-crop:before {
    content: "\f171"
}

.vl-vi-cross-thin--after:after,
.vl-vi-cross-thin:before {
    content: "\f172"
}

.vl-vi-cross--after:after,
.vl-vi-cross:before {
    content: "\f173"
}

.vl-vi-cursor-arrow-big--after:after,
.vl-vi-cursor-arrow-big:before {
    content: "\f174"
}

.vl-vi-cursor-arrow-small--after:after,
.vl-vi-cursor-arrow-small:before {
    content: "\f175"
}

.vl-vi-cursor-finger-down--after:after,
.vl-vi-cursor-finger-down:before {
    content: "\f176"
}

.vl-vi-cursor-finger-left--after:after,
.vl-vi-cursor-finger-left:before {
    content: "\f177"
}

.vl-vi-cursor-finger-right--after:after,
.vl-vi-cursor-finger-right:before {
    content: "\f178"
}

.vl-vi-cursor-finger-up--after:after,
.vl-vi-cursor-finger-up:before {
    content: "\f179"
}

.vl-vi-cursor-hand--after:after,
.vl-vi-cursor-hand:before {
    content: "\f17a"
}

.vl-vi-cursor-hold--after:after,
.vl-vi-cursor-hold:before {
    content: "\f17b"
}

.vl-vi-dashboard--after:after,
.vl-vi-dashboard:before {
    content: "\f17c"
}

.vl-vi-data-download--after:after,
.vl-vi-data-download:before {
    content: "\f17d"
}

.vl-vi-data-transfer--after:after,
.vl-vi-data-transfer:before {
    content: "\f17e"
}

.vl-vi-data-upload--after:after,
.vl-vi-data-upload:before {
    content: "\f17f"
}

.vl-vi-demonstration--after:after,
.vl-vi-demonstration:before {
    content: "\f180"
}

.vl-vi-diagram--after:after,
.vl-vi-diagram:before {
    content: "\f181"
}

.vl-vi-direction-sign--after:after,
.vl-vi-direction-sign:before {
    content: "\f182"
}

.vl-vi-document-small--after:after,
.vl-vi-document-small:before {
    content: "\f183"
}

.vl-vi-document--after:after,
.vl-vi-document:before {
    content: "\f184"
}

.vl-vi-double-arrow--after:after,
.vl-vi-double-arrow:before {
    content: "\f185"
}

.vl-vi-download-harddisk--after:after,
.vl-vi-download-harddisk:before {
    content: "\f186"
}

.vl-vi-drawer-down--after:after,
.vl-vi-drawer-down:before {
    content: "\f187"
}

.vl-vi-drawer--after:after,
.vl-vi-drawer:before {
    content: "\f188"
}

.vl-vi-edit--after:after,
.vl-vi-edit:before {
    content: "\f189"
}

.vl-vi-email-read--after:after,
.vl-vi-email-read:before {
    content: "\f18a"
}

.vl-vi-email--after:after,
.vl-vi-email:before {
    content: "\f18b"
}

.vl-vi-enlarge--after:after,
.vl-vi-enlarge:before {
    content: "\f18c"
}

.vl-vi-envelope--after:after,
.vl-vi-envelope:before {
    content: "\f18d"
}

.vl-vi-expand-horizontal-alt--after:after,
.vl-vi-expand-horizontal-alt:before {
    content: "\f18e"
}

.vl-vi-expand-horizontal--after:after,
.vl-vi-expand-horizontal:before {
    content: "\f18f"
}

.vl-vi-expand-vertical--after:after,
.vl-vi-expand-vertical:before {
    content: "\f190"
}

.vl-vi-expand--after:after,
.vl-vi-expand:before {
    content: "\f191"
}

.vl-vi-external--after:after,
.vl-vi-external:before {
    content: "\f192"
}

.vl-vi-facebook--after:after,
.vl-vi-facebook:before {
    content: "\f193"
}

.vl-vi-faq--after:after,
.vl-vi-faq:before {
    content: "\f194"
}

.vl-vi-fastback--after:after,
.vl-vi-fastback:before {
    content: "\f195"
}

.vl-vi-fastforward--after:after,
.vl-vi-fastforward:before {
    content: "\f196"
}

.vl-vi-fax--after:after,
.vl-vi-fax:before {
    content: "\f197"
}

.vl-vi-field--after:after,
.vl-vi-field:before {
    content: "\f198"
}

.vl-vi-file-audio--after:after,
.vl-vi-file-audio:before {
    content: "\f199"
}

.vl-vi-file-copy--after:after,
.vl-vi-file-copy:before {
    content: "\f19a"
}

.vl-vi-file-download--after:after,
.vl-vi-file-download:before {
    content: "\f19b"
}

.vl-vi-file-edit--after:after,
.vl-vi-file-edit:before {
    content: "\f19c"
}

.vl-vi-file-image--after:after,
.vl-vi-file-image:before {
    content: "\f19d"
}

.vl-vi-file-new--after:after,
.vl-vi-file-new:before {
    content: "\f19e"
}

.vl-vi-file-office-doc--after:after,
.vl-vi-file-office-doc:before {
    content: "\f19f"
}

.vl-vi-file-office-pdf--after:after,
.vl-vi-file-office-pdf:before {
    content: "\f1a0"
}

.vl-vi-file-office-ppt--after:after,
.vl-vi-file-office-ppt:before {
    content: "\f1a1"
}

.vl-vi-file-office-xls--after:after,
.vl-vi-file-office-xls:before {
    content: "\f1a2"
}

.vl-vi-file-swap--after:after,
.vl-vi-file-swap:before {
    content: "\f1a3"
}

.vl-vi-file-tasks-check--after:after,
.vl-vi-file-tasks-check:before {
    content: "\f1a4"
}

.vl-vi-file-upload--after:after,
.vl-vi-file-upload:before {
    content: "\f1a5"
}

.vl-vi-file-video--after:after,
.vl-vi-file-video:before {
    content: "\f1a6"
}

.vl-vi-file-zipped-new--after:after,
.vl-vi-file-zipped-new:before {
    content: "\f1a7"
}

.vl-vi-file-zipped-vice--after:after,
.vl-vi-file-zipped-vice:before {
    content: "\f1a8"
}

.vl-vi-file--after:after,
.vl-vi-file:before {
    content: "\f1a9"
}

.vl-vi-files-coding--after:after,
.vl-vi-files-coding:before {
    content: "\f1aa"
}

.vl-vi-film--after:after,
.vl-vi-film:before {
    content: "\f1ab"
}

.vl-vi-flickr--after:after,
.vl-vi-flickr:before {
    content: "\f1ac"
}

.vl-vi-focus--after:after,
.vl-vi-focus:before {
    content: "\f1ad"
}

.vl-vi-folder--after:after,
.vl-vi-folder:before {
    content: "\f1ae"
}

.vl-vi-font--after:after,
.vl-vi-font:before {
    content: "\f1af"
}

.vl-vi-gender-female-male--after:after,
.vl-vi-gender-female-male:before {
    content: "\f1b0"
}

.vl-vi-gender-female--after:after,
.vl-vi-gender-female:before {
    content: "\f1b1"
}

.vl-vi-gender-male--after:after,
.vl-vi-gender-male:before {
    content: "\f1b2"
}

.vl-vi-gender-transgender--after:after,
.vl-vi-gender-transgender:before {
    content: "\f1b3"
}

.vl-vi-globe--after:after,
.vl-vi-globe:before {
    content: "\f1b4"
}

.vl-vi-googleplus--after:after,
.vl-vi-googleplus:before {
    content: "\f1b5"
}

.vl-vi-graduate--after:after,
.vl-vi-graduate:before {
    content: "\f1b6"
}

.vl-vi-graduation-hat--after:after,
.vl-vi-graduation-hat:before {
    content: "\f1b7"
}

.vl-vi-hammer--after:after,
.vl-vi-hammer:before {
    content: "\f1b8"
}

.vl-vi-hand-hint--after:after,
.vl-vi-hand-hint:before {
    content: "\f1b9"
}

.vl-vi-harddisk--after:after,
.vl-vi-harddisk:before {
    content: "\f1ba"
}

.vl-vi-headphone--after:after,
.vl-vi-headphone:before {
    content: "\f1bb"
}

.vl-vi-health-first-aid-kit--after:after,
.vl-vi-health-first-aid-kit:before {
    content: "\f1bc"
}

.vl-vi-health-heart-pulse--after:after,
.vl-vi-health-heart-pulse:before {
    content: "\f1bd"
}

.vl-vi-health-hospital--after:after,
.vl-vi-health-hospital:before {
    content: "\f1be"
}

.vl-vi-hide--after:after,
.vl-vi-hide:before {
    content: "\f1bf"
}

.vl-vi-hierarchy--after:after,
.vl-vi-hierarchy:before {
    content: "\f1c0"
}

.vl-vi-hotel-bath-shower--after:after,
.vl-vi-hotel-bath-shower:before {
    content: "\f1c1"
}

.vl-vi-hotel-bed--after:after,
.vl-vi-hotel-bed:before {
    content: "\f1c2"
}

.vl-vi-hotel-fire-alarm--after:after,
.vl-vi-hotel-fire-alarm:before {
    content: "\f1c3"
}

.vl-vi-hotel-shower--after:after,
.vl-vi-hotel-shower:before {
    content: "\f1c4"
}

.vl-vi-hourglass--after:after,
.vl-vi-hourglass:before {
    content: "\f1c5"
}

.vl-vi-id-card--after:after,
.vl-vi-id-card:before {
    content: "\f1c6"
}

.vl-vi-id--after:after,
.vl-vi-id:before {
    content: "\f1c7"
}

.vl-vi-images-copy--after:after,
.vl-vi-images-copy:before {
    content: "\f1c8"
}

.vl-vi-images--after:after,
.vl-vi-images:before {
    content: "\f1c9"
}

.vl-vi-inbox--after:after,
.vl-vi-inbox:before {
    content: "\f1ca"
}

.vl-vi-indent-left--after:after,
.vl-vi-indent-left:before {
    content: "\f1cb"
}

.vl-vi-indent-right--after:after,
.vl-vi-indent-right:before {
    content: "\f1cc"
}

.vl-vi-info-circle--after:after,
.vl-vi-info-circle:before {
    content: "\f1cd"
}

.vl-vi-info-filled--after:after,
.vl-vi-info-filled:before {
    content: "\f1ce"
}

.vl-vi-info-small--after:after,
.vl-vi-info-small:before {
    content: "\f1cf"
}

.vl-vi-info--after:after,
.vl-vi-info:before {
    content: "\f1d0"
}

.vl-vi-instagram--after:after,
.vl-vi-instagram:before {
    content: "\f1d1"
}

.vl-vi-ironing--after:after,
.vl-vi-ironing:before {
    content: "\f1d2"
}

.vl-vi-italic--after:after,
.vl-vi-italic:before {
    content: "\f1d3"
}

.vl-vi-jira--after:after,
.vl-vi-jira:before {
    content: "\f1d4"
}

.vl-vi-key--after:after,
.vl-vi-key:before {
    content: "\f1d5"
}

.vl-vi-keyboard--after:after,
.vl-vi-keyboard:before {
    content: "\f1d6"
}

.vl-vi-laptop--after:after,
.vl-vi-laptop:before {
    content: "\f1d7"
}

.vl-vi-lightbulb--after:after,
.vl-vi-lightbulb:before {
    content: "\f1d8"
}

.vl-vi-link-broken--after:after,
.vl-vi-link-broken:before {
    content: "\f1d9"
}

.vl-vi-link--after:after,
.vl-vi-link:before {
    content: "\f1da"
}

.vl-vi-linkedin--after:after,
.vl-vi-linkedin:before {
    content: "\f1db"
}

.vl-vi-list-add--after:after,
.vl-vi-list-add:before {
    content: "\f1dc"
}

.vl-vi-list-bullets-alt--after:after,
.vl-vi-list-bullets-alt:before {
    content: "\f1dd"
}

.vl-vi-list-bullets--after:after,
.vl-vi-list-bullets:before {
    content: "\f1de"
}

.vl-vi-list-numbers--after:after,
.vl-vi-list-numbers:before {
    content: "\f1df"
}

.vl-vi-list--after:after,
.vl-vi-list:before {
    content: "\f1e0"
}

.vl-vi-location-direction-arrow--after:after,
.vl-vi-location-direction-arrow:before {
    content: "\f1e1"
}

.vl-vi-location-gps--after:after,
.vl-vi-location-gps:before {
    content: "\f1e2"
}

.vl-vi-location-map--after:after,
.vl-vi-location-map:before {
    content: "\f1e3"
}

.vl-vi-location--after:after,
.vl-vi-location:before {
    content: "\f1e4"
}

.vl-vi-lock-unlock--after:after,
.vl-vi-lock-unlock:before {
    content: "\f1e5"
}

.vl-vi-lock--after:after,
.vl-vi-lock:before {
    content: "\f1e6"
}

.vl-vi-login--after:after,
.vl-vi-login:before {
    content: "\f1e7"
}

.vl-vi-logout--after:after,
.vl-vi-logout:before {
    content: "\f1e8"
}

.vl-vi-long-arrow--after:after,
.vl-vi-long-arrow:before {
    content: "\f1e9"
}

.vl-vi-magnifier--after:after,
.vl-vi-magnifier:before {
    content: "\f1ea"
}

.vl-vi-mail--after:after,
.vl-vi-mail:before {
    content: "\f1eb"
}

.vl-vi-market--after:after,
.vl-vi-market:before {
    content: "\f1ec"
}

.vl-vi-menu--after:after,
.vl-vi-menu:before {
    content: "\f1ed"
}

.vl-vi-messenger--after:after,
.vl-vi-messenger:before {
    content: "\f1ee"
}

.vl-vi-microphone-off--after:after,
.vl-vi-microphone-off:before {
    content: "\f1ef"
}

.vl-vi-microphone--after:after,
.vl-vi-microphone:before {
    content: "\f1f0"
}

.vl-vi-minus-circle--after:after,
.vl-vi-minus-circle:before {
    content: "\f1f1"
}

.vl-vi-minus--after:after,
.vl-vi-minus:before {
    content: "\f1f2"
}

.vl-vi-mobile-phone--after:after,
.vl-vi-mobile-phone:before {
    content: "\f1f3"
}

.vl-vi-move-down--after:after,
.vl-vi-move-down:before {
    content: "\f1f4"
}

.vl-vi-move-left-right--after:after,
.vl-vi-move-left-right:before {
    content: "\f1f5"
}

.vl-vi-moving-elevator--after:after,
.vl-vi-moving-elevator:before {
    content: "\f1f6"
}

.vl-vi-music-note--after:after,
.vl-vi-music-note:before {
    content: "\f1f7"
}

.vl-vi-nature-leaf--after:after,
.vl-vi-nature-leaf:before {
    content: "\f1f8"
}

.vl-vi-nature-tree--after:after,
.vl-vi-nature-tree:before {
    content: "\f1f9"
}

.vl-vi-nav-down-double--after:after,
.vl-vi-nav-down-double:before {
    content: "\f1fa"
}

.vl-vi-nav-down-light--after:after,
.vl-vi-nav-down-light:before {
    content: "\f1fb"
}

.vl-vi-nav-down--after:after,
.vl-vi-nav-down:before {
    content: "\f1fc"
}

.vl-vi-nav-left-double--after:after,
.vl-vi-nav-left-double:before {
    content: "\f1fd"
}

.vl-vi-nav-left-light--after:after,
.vl-vi-nav-left-light:before {
    content: "\f1fe"
}

.vl-vi-nav-left--after:after,
.vl-vi-nav-left:before {
    content: "\f1ff"
}

.vl-vi-nav-right-double--after:after,
.vl-vi-nav-right-double:before {
    content: "\f200"
}

.vl-vi-nav-right-light--after:after,
.vl-vi-nav-right-light:before {
    content: "\f201"
}

.vl-vi-nav-right--after:after,
.vl-vi-nav-right:before {
    content: "\f202"
}

.vl-vi-nav-show-more-horizontal--after:after,
.vl-vi-nav-show-more-horizontal:before {
    content: "\f203"
}

.vl-vi-nav-show-more-vertical--after:after,
.vl-vi-nav-show-more-vertical:before {
    content: "\f204"
}

.vl-vi-nav-up-double--after:after,
.vl-vi-nav-up-double:before {
    content: "\f205"
}

.vl-vi-nav-up-light--after:after,
.vl-vi-nav-up-light:before {
    content: "\f206"
}

.vl-vi-nav-up--after:after,
.vl-vi-nav-up:before {
    content: "\f207"
}

.vl-vi-news--after:after,
.vl-vi-news:before {
    content: "\f208"
}

.vl-vi-newspaper--after:after,
.vl-vi-newspaper:before {
    content: "\f209"
}

.vl-vi-next--after:after,
.vl-vi-next:before {
    content: "\f20a"
}

.vl-vi-other-annoyances-alt--after:after,
.vl-vi-other-annoyances-alt:before {
    content: "\f20b"
}

.vl-vi-other-annoyances--after:after,
.vl-vi-other-annoyances:before {
    content: "\f20c"
}

.vl-vi-paint-brush--after:after,
.vl-vi-paint-brush:before {
    content: "\f20d"
}

.vl-vi-paper--after:after,
.vl-vi-paper:before {
    content: "\f20e"
}

.vl-vi-paperclip--after:after,
.vl-vi-paperclip:before {
    content: "\f20f"
}

.vl-vi-paragraph--after:after,
.vl-vi-paragraph:before {
    content: "\f210"
}

.vl-vi-pause--after:after,
.vl-vi-pause:before {
    content: "\f211"
}

.vl-vi-pencil-write--after:after,
.vl-vi-pencil-write:before {
    content: "\f212"
}

.vl-vi-pencil--after:after,
.vl-vi-pencil:before {
    content: "\f213"
}

.vl-vi-pennants--after:after,
.vl-vi-pennants:before {
    content: "\f214"
}

.vl-vi-phone-incoming--after:after,
.vl-vi-phone-incoming:before {
    content: "\f215"
}

.vl-vi-phone-off--after:after,
.vl-vi-phone-off:before {
    content: "\f216"
}

.vl-vi-phone-outgoing--after:after,
.vl-vi-phone-outgoing:before {
    content: "\f217"
}

.vl-vi-phone-record--after:after,
.vl-vi-phone-record:before {
    content: "\f218"
}

.vl-vi-phone-signal-low--after:after,
.vl-vi-phone-signal-low:before {
    content: "\f219"
}

.vl-vi-phone-speaker--after:after,
.vl-vi-phone-speaker:before {
    content: "\f21a"
}

.vl-vi-phone--after:after,
.vl-vi-phone:before {
    content: "\f21b"
}

.vl-vi-pick-up--after:after,
.vl-vi-pick-up:before {
    content: "\f21c"
}

.vl-vi-pin-paper--after:after,
.vl-vi-pin-paper:before {
    content: "\f21d"
}

.vl-vi-pin--after:after,
.vl-vi-pin:before {
    content: "\f21e"
}

.vl-vi-pinterest--after:after,
.vl-vi-pinterest:before {
    content: "\f21f"
}

.vl-vi-places-factory--after:after,
.vl-vi-places-factory:before {
    content: "\f220"
}

.vl-vi-places-home--after:after,
.vl-vi-places-home:before {
    content: "\f221"
}

.vl-vi-play--after:after,
.vl-vi-play:before {
    content: "\f222"
}

.vl-vi-playstreet--after:after,
.vl-vi-playstreet:before {
    content: "\f223"
}

.vl-vi-plug--after:after,
.vl-vi-plug:before {
    content: "\f224"
}

.vl-vi-plus-circle--after:after,
.vl-vi-plus-circle:before {
    content: "\f225"
}

.vl-vi-plus--after:after,
.vl-vi-plus:before {
    content: "\f226"
}

.vl-vi-power-button--after:after,
.vl-vi-power-button:before {
    content: "\f227"
}

.vl-vi-printer-view--after:after,
.vl-vi-printer-view:before {
    content: "\f228"
}

.vl-vi-printer--after:after,
.vl-vi-printer:before {
    content: "\f229"
}

.vl-vi-profile-active--after:after,
.vl-vi-profile-active:before {
    content: "\f22a"
}

.vl-vi-programming-bug--after:after,
.vl-vi-programming-bug:before {
    content: "\f22b"
}

.vl-vi-publication--after:after,
.vl-vi-publication:before {
    content: "\f22c"
}

.vl-vi-question-mark-filled--after:after,
.vl-vi-question-mark-filled:before {
    content: "\f22d"
}

.vl-vi-question-mark-small--after:after,
.vl-vi-question-mark-small:before {
    content: "\f22e"
}

.vl-vi-question-mark--after:after,
.vl-vi-question-mark:before {
    content: "\f22f"
}

.vl-vi-question--after:after,
.vl-vi-question:before {
    content: "\f230"
}

.vl-vi-recreation--after:after,
.vl-vi-recreation:before {
    content: "\f231"
}

.vl-vi-reply-all--after:after,
.vl-vi-reply-all:before {
    content: "\f232"
}

.vl-vi-reply--after:after,
.vl-vi-reply:before {
    content: "\f233"
}

.vl-vi-rewards-certified-badge--after:after,
.vl-vi-rewards-certified-badge:before {
    content: "\f234"
}

.vl-vi-rewards-gift--after:after,
.vl-vi-rewards-gift:before {
    content: "\f235"
}

.vl-vi-road-block--after:after,
.vl-vi-road-block:before {
    content: "\f236"
}

.vl-vi-road--after:after,
.vl-vi-road:before {
    content: "\f237"
}

.vl-vi-romance-marriage-license--after:after,
.vl-vi-romance-marriage-license:before {
    content: "\f238"
}

.vl-vi-save--after:after,
.vl-vi-save:before {
    content: "\f239"
}

.vl-vi-scaffold--after:after,
.vl-vi-scaffold:before {
    content: "\f23a"
}

.vl-vi-scan--after:after,
.vl-vi-scan:before {
    content: "\f23b"
}

.vl-vi-scissors--after:after,
.vl-vi-scissors:before {
    content: "\f23c"
}

.vl-vi-search--after:after,
.vl-vi-search:before {
    content: "\f23d"
}

.vl-vi-server--after:after,
.vl-vi-server:before {
    content: "\f23e"
}

.vl-vi-settings--after:after,
.vl-vi-settings:before {
    content: "\f23f"
}

.vl-vi-share-megaphone--after:after,
.vl-vi-share-megaphone:before {
    content: "\f240"
}

.vl-vi-share-rss-feed--after:after,
.vl-vi-share-rss-feed:before {
    content: "\f241"
}

.vl-vi-share--after:after,
.vl-vi-share:before {
    content: "\f242"
}

.vl-vi-shipping-truck--after:after,
.vl-vi-shipping-truck:before {
    content: "\f243"
}

.vl-vi-shopping-basket-add--after:after,
.vl-vi-shopping-basket-add:before {
    content: "\f244"
}

.vl-vi-shopping-basket-subtract--after:after,
.vl-vi-shopping-basket-subtract:before {
    content: "\f245"
}

.vl-vi-shopping-basket--after:after,
.vl-vi-shopping-basket:before {
    content: "\f246"
}

.vl-vi-shopping-cart--after:after,
.vl-vi-shopping-cart:before {
    content: "\f247"
}

.vl-vi-shopping--after:after,
.vl-vi-shopping:before {
    content: "\f248"
}

.vl-vi-shrink--after:after,
.vl-vi-shrink:before {
    content: "\f249"
}

.vl-vi-sign-disable--after:after,
.vl-vi-sign-disable:before {
    content: "\f24a"
}

.vl-vi-sign-recycle--after:after,
.vl-vi-sign-recycle:before {
    content: "\f24b"
}

.vl-vi-sitemap--after:after,
.vl-vi-sitemap:before {
    content: "\f24c"
}

.vl-vi-skype--after:after,
.vl-vi-skype:before {
    content: "\f24d"
}

.vl-vi-smiley-poker-face--after:after,
.vl-vi-smiley-poker-face:before {
    content: "\f24e"
}

.vl-vi-smiley-smile--after:after,
.vl-vi-smiley-smile:before {
    content: "\f24f"
}

.vl-vi-snapchat--after:after,
.vl-vi-snapchat:before {
    content: "\f250"
}

.vl-vi-sort--after:after,
.vl-vi-sort:before {
    content: "\f251"
}

.vl-vi-speaker-volume-decrease--after:after,
.vl-vi-speaker-volume-decrease:before {
    content: "\f252"
}

.vl-vi-speaker-volume-high--after:after,
.vl-vi-speaker-volume-high:before {
    content: "\f253"
}

.vl-vi-speaker-volume-increase--after:after,
.vl-vi-speaker-volume-increase:before {
    content: "\f254"
}

.vl-vi-speaker-volume-low--after:after,
.vl-vi-speaker-volume-low:before {
    content: "\f255"
}

.vl-vi-speaker-volume-medium--after:after,
.vl-vi-speaker-volume-medium:before {
    content: "\f256"
}

.vl-vi-speaker-volume-off--after:after,
.vl-vi-speaker-volume-off:before {
    content: "\f257"
}

.vl-vi-sports-competition--after:after,
.vl-vi-sports-competition:before {
    content: "\f258"
}

.vl-vi-spotify--after:after,
.vl-vi-spotify:before {
    content: "\f259"
}

.vl-vi-stop--after:after,
.vl-vi-stop:before {
    content: "\f25a"
}

.vl-vi-subtract--after:after,
.vl-vi-subtract:before {
    content: "\f25b"
}

.vl-vi-subway--after:after,
.vl-vi-subway:before {
    content: "\f25c"
}

.vl-vi-suitcase--after:after,
.vl-vi-suitcase:before {
    content: "\f25d"
}

.vl-vi-switches--after:after,
.vl-vi-switches:before {
    content: "\f25e"
}

.vl-vi-symbol-wifi-check--after:after,
.vl-vi-symbol-wifi-check:before {
    content: "\f25f"
}

.vl-vi-symbol-wifi-close--after:after,
.vl-vi-symbol-wifi-close:before {
    content: "\f260"
}

.vl-vi-symbol-wifi--after:after,
.vl-vi-symbol-wifi:before {
    content: "\f261"
}

.vl-vi-synchronize-timeout--after:after,
.vl-vi-synchronize-timeout:before {
    content: "\f262"
}

.vl-vi-synchronize--after:after,
.vl-vi-synchronize:before {
    content: "\f263"
}

.vl-vi-tag-add--after:after,
.vl-vi-tag-add:before {
    content: "\f264"
}

.vl-vi-tag-check--after:after,
.vl-vi-tag-check:before {
    content: "\f265"
}

.vl-vi-tag-close--after:after,
.vl-vi-tag-close:before {
    content: "\f266"
}

.vl-vi-tag-double--after:after,
.vl-vi-tag-double:before {
    content: "\f267"
}

.vl-vi-tag-edit--after:after,
.vl-vi-tag-edit:before {
    content: "\f268"
}

.vl-vi-tag-subtract--after:after,
.vl-vi-tag-subtract:before {
    content: "\f269"
}

.vl-vi-tag-view--after:after,
.vl-vi-tag-view:before {
    content: "\f26a"
}

.vl-vi-tag--after:after,
.vl-vi-tag:before {
    content: "\f26b"
}

.vl-vi-taxi--after:after,
.vl-vi-taxi:before {
    content: "\f26c"
}

.vl-vi-television--after:after,
.vl-vi-television:before {
    content: "\f26d"
}

.vl-vi-terrace--after:after,
.vl-vi-terrace:before {
    content: "\f26e"
}

.vl-vi-text-cursor--after:after,
.vl-vi-text-cursor:before {
    content: "\f26f"
}

.vl-vi-text-eraser--after:after,
.vl-vi-text-eraser:before {
    content: "\f270"
}

.vl-vi-text-redo--after:after,
.vl-vi-text-redo:before {
    content: "\f271"
}

.vl-vi-text-undo--after:after,
.vl-vi-text-undo:before {
    content: "\f272"
}

.vl-vi-timeline--after:after,
.vl-vi-timeline:before {
    content: "\f273"
}

.vl-vi-tint--after:after,
.vl-vi-tint:before {
    content: "\f274"
}

.vl-vi-train--after:after,
.vl-vi-train:before {
    content: "\f275"
}

.vl-vi-trash--after:after,
.vl-vi-trash:before {
    content: "\f276"
}

.vl-vi-trophy--after:after,
.vl-vi-trophy:before {
    content: "\f277"
}

.vl-vi-twitter--after:after,
.vl-vi-twitter:before {
    content: "\f278"
}

.vl-vi-underline--after:after,
.vl-vi-underline:before {
    content: "\f279"
}

.vl-vi-university--after:after,
.vl-vi-university:before {
    content: "\f27a"
}

.vl-vi-up-down-arrows--after:after,
.vl-vi-up-down-arrows:before {
    content: "\f27b"
}

.vl-vi-upload-harddisk--after:after,
.vl-vi-upload-harddisk:before {
    content: "\f27c"
}

.vl-vi-user-alt--after:after,
.vl-vi-user-alt:before {
    content: "\f27d"
}

.vl-vi-user-download--after:after,
.vl-vi-user-download:before {
    content: "\f27e"
}

.vl-vi-user-email--after:after,
.vl-vi-user-email:before {
    content: "\f27f"
}

.vl-vi-user-female--after:after,
.vl-vi-user-female:before {
    content: "\f280"
}

.vl-vi-user-group--after:after,
.vl-vi-user-group:before {
    content: "\f281"
}

.vl-vi-user-male--after:after,
.vl-vi-user-male:before {
    content: "\f282"
}

.vl-vi-user-redirect--after:after,
.vl-vi-user-redirect:before {
    content: "\f283"
}

.vl-vi-user-setting--after:after,
.vl-vi-user-setting:before {
    content: "\f284"
}

.vl-vi-user-signup--after:after,
.vl-vi-user-signup:before {
    content: "\f285"
}

.vl-vi-user--after:after,
.vl-vi-user:before {
    content: "\f286"
}

.vl-vi-vaccum-cleaner--after:after,
.vl-vi-vaccum-cleaner:before {
    content: "\f287"
}

.vl-vi-video-subtitle--after:after,
.vl-vi-video-subtitle:before {
    content: "\f288"
}

.vl-vi-view-add--after:after,
.vl-vi-view-add:before {
    content: "\f289"
}

.vl-vi-vlaanderen--after:after,
.vl-vi-vlaanderen:before {
    content: "\f28a"
}

.vl-vi-vote-flag--after:after,
.vl-vi-vote-flag:before {
    content: "\f28b"
}

.vl-vi-vote-heart--after:after,
.vl-vi-vote-heart:before {
    content: "\f28c"
}

.vl-vi-vote-star--after:after,
.vl-vi-vote-star:before {
    content: "\f28d"
}

.vl-vi-vote-thumbs-down--after:after,
.vl-vi-vote-thumbs-down:before {
    content: "\f28e"
}

.vl-vi-vote-thumbs-up--after:after,
.vl-vi-vote-thumbs-up:before {
    content: "\f28f"
}

.vl-vi-voucher-check--after:after,
.vl-vi-voucher-check:before {
    content: "\f290"
}

.vl-vi-voucher-download--after:after,
.vl-vi-voucher-download:before {
    content: "\f291"
}

.vl-vi-voucher-scissors--after:after,
.vl-vi-voucher-scissors:before {
    content: "\f292"
}

.vl-vi-vouchers-list--after:after,
.vl-vi-vouchers-list:before {
    content: "\f293"
}

.vl-vi-wallet--after:after,
.vl-vi-wallet:before {
    content: "\f294"
}

.vl-vi-warning--after:after,
.vl-vi-warning:before {
    content: "\f295"
}

.vl-vi-whatsapp--after:after,
.vl-vi-whatsapp:before {
    content: "\f296"
}

.vl-vi-wrench--after:after,
.vl-vi-wrench:before {
    content: "\f297"
}

.vl-vi-www--after:after,
.vl-vi-www:before {
    content: "\f298"
}

.vl-vi-youtube--after:after,
.vl-vi-youtube:before {
    content: "\f299"
}

.vl-vi-zoom-in--after:after,
.vl-vi-zoom-in:before {
    content: "\f29a"
}

.vl-vi-zoom-out--after:after,
.vl-vi-zoom-out:before {
    content: "\f29b"
}

a {
    color: #05c;
    text-decoration: underline;
    -webkit-text-decoration-skip: ink;
    text-decoration-skip-ink: auto
}

a:focus,
a:hover {
    text-decoration: none;
    color: #003bb0
}

a:visited {
    color: #660599
}

a:focus,
button:focus {
    outline: .2rem solid transparent;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

button {
    font-family: Flanders Art Sans, sans-serif;
    cursor: pointer
}

img.vl-image--error {
    word-wrap: break-word;
    padding: 10px;
    line-height: 1.25;
    font-size: 1.6rem;
    color: #333332;
    color: var(--vl-theme-fg-color);
    background-color: #f7f9fc
}

.vl-grid {
    display: flex;
    margin-left: -3rem;
    flex-direction: row;
    flex: 0 1 auto;
    flex-wrap: wrap
}

.vl-grid,
.vl-grid>* {
    position: relative;
    box-sizing: border-box
}

.vl-grid>* {
    padding-left: 3rem
}

.vl-grid--no-gutter {
    margin-left: 0
}

.vl-grid--no-gutter>* {
    padding-left: 0
}

.vl-grid--v-top {
    align-items: flex-start
}

.vl-grid--v-center {
    align-items: center
}

.vl-grid--v-bottom {
    align-items: flex-end
}

.vl-grid--v-baseline,
.vl-grid--v-stretch {
    align-items: stretch
}

.vl-grid--align-start {
    justify-content: flex-start
}

.vl-grid--align-end {
    justify-content: flex-end
}

.vl-grid--align-center {
    justify-content: center
}

.vl-grid--align-space-between {
    justify-content: space-between
}

.vl-grid--align-space-around {
    justify-content: space-around
}

.vl-col--fit {
    flex: 1 0
}

.vl-col--flex {
    display: flex
}

.vl-col--1-12 {
    flex-basis: 8.33333%;
    max-width: 8.33333%;
    min-width: 8.33333%
}

.vl-col--1-6,
.vl-col--2-12 {
    flex-basis: 16.66667%;
    max-width: 16.66667%;
    min-width: 16.66667%
}

.vl-col--1-4,
.vl-col--3-12 {
    flex-basis: 25%;
    max-width: 25%;
    min-width: 25%
}

.vl-col--1-3,
.vl-col--2-6,
.vl-col--4-12 {
    flex-basis: 33.33333%;
    max-width: 33.33333%;
    min-width: 33.33333%
}

.vl-col--5-12 {
    flex-basis: 41.66667%;
    max-width: 41.66667%;
    min-width: 41.66667%
}

.vl-col--1-2,
.vl-col--2-4,
.vl-col--3-6,
.vl-col--6-12 {
    flex-basis: 50%;
    max-width: 50%;
    min-width: 50%
}

.vl-col--7-12 {
    flex-basis: 58.33333%;
    max-width: 58.33333%;
    min-width: 58.33333%
}

.vl-col--2-3,
.vl-col--4-6,
.vl-col--8-12 {
    flex-basis: 66.66667%;
    max-width: 66.66667%;
    min-width: 66.66667%
}

.vl-col--3-4,
.vl-col--9-12 {
    flex-basis: 75%;
    max-width: 75%;
    min-width: 75%
}

.vl-col--5-6,
.vl-col--10-12 {
    flex-basis: 83.33333%;
    max-width: 83.33333%;
    min-width: 83.33333%
}

.vl-col--11-12 {
    flex-basis: 91.66667%;
    max-width: 91.66667%;
    min-width: 91.66667%
}

.vl-col--1-1,
.vl-col--2-2,
.vl-col--3-3,
.vl-col--4-4,
.vl-col--6-6,
.vl-col--12-12 {
    flex-basis: 100%;
    max-width: 100%;
    min-width: 100%
}

.vl-grid--is-stacked {
    margin-top: -3rem
}

.vl-grid--is-stacked>* {
    margin-top: 3rem
}

.vl-push--reset {
    margin-left: 0
}

.vl-push--1-12 {
    margin-left: 8.33333%
}

.vl-push--1-6,
.vl-push--2-12 {
    margin-left: 16.66667%
}

.vl-push--1-4,
.vl-push--3-12 {
    margin-left: 25%
}

.vl-push--1-3,
.vl-push--2-6,
.vl-push--4-12 {
    margin-left: 33.33333%
}

.vl-push--5-12 {
    margin-left: 41.66667%
}

.vl-push--1-2,
.vl-push--2-4,
.vl-push--3-6,
.vl-push--6-12 {
    margin-left: 50%
}

.vl-push--7-12 {
    margin-left: 58.33333%
}

.vl-push--2-3,
.vl-push--4-6,
.vl-push--8-12 {
    margin-left: 66.66667%
}

.vl-push--3-4,
.vl-push--9-12 {
    margin-left: 75%
}

.vl-push--5-6,
.vl-push--10-12 {
    margin-left: 83.33333%
}

.vl-push--11-12 {
    margin-left: 91.66667%
}

.vl-col--omega {
    margin-left: auto
}

@media screen and (min-width:1024px) {
    .vl-grid {
        display: flex;
        margin-left: -3rem;
        flex-direction: row;
        flex: 0 1 auto;
        flex-wrap: wrap
    }
    .vl-grid,
    .vl-grid>* {
        position: relative;
        box-sizing: border-box
    }
    .vl-grid>* {
        padding-left: 3rem
    }
    .vl-grid--no-gutter--l {
        margin-left: 0
    }
    .vl-grid--no-gutter--l>* {
        padding-left: 0
    }
    .vl-grid--v-top--l {
        align-items: flex-start
    }
    .vl-grid--v-center--l {
        align-items: center
    }
    .vl-grid--v-bottom--l {
        align-items: flex-end
    }
    .vl-grid--v-baseline--l,
    .vl-grid--v-stretch--l {
        align-items: stretch
    }
    .vl-grid--align-start--l {
        justify-content: flex-start
    }
    .vl-grid--align-end--l {
        justify-content: flex-end
    }
    .vl-grid--align-center--l {
        justify-content: center
    }
    .vl-grid--align-space-between--l {
        justify-content: space-between
    }
    .vl-grid--align-space-around--l {
        justify-content: space-around
    }
    .vl-col--fit--l {
        flex: 1 0
    }
    .vl-col--flex--l {
        display: flex
    }
    .vl-col--1-12--l {
        flex-basis: 8.33333%;
        max-width: 8.33333%;
        min-width: 8.33333%
    }
    .vl-col--1-6--l,
    .vl-col--2-12--l {
        flex-basis: 16.66667%;
        max-width: 16.66667%;
        min-width: 16.66667%
    }
    .vl-col--1-4--l,
    .vl-col--3-12--l {
        flex-basis: 25%;
        max-width: 25%;
        min-width: 25%
    }
    .vl-col--1-3--l,
    .vl-col--2-6--l,
    .vl-col--4-12--l {
        flex-basis: 33.33333%;
        max-width: 33.33333%;
        min-width: 33.33333%
    }
    .vl-col--5-12--l {
        flex-basis: 41.66667%;
        max-width: 41.66667%;
        min-width: 41.66667%
    }
    .vl-col--1-2--l,
    .vl-col--2-4--l,
    .vl-col--3-6--l,
    .vl-col--6-12--l {
        flex-basis: 50%;
        max-width: 50%;
        min-width: 50%
    }
    .vl-col--7-12--l {
        flex-basis: 58.33333%;
        max-width: 58.33333%;
        min-width: 58.33333%
    }
    .vl-col--2-3--l,
    .vl-col--4-6--l,
    .vl-col--8-12--l {
        flex-basis: 66.66667%;
        max-width: 66.66667%;
        min-width: 66.66667%
    }
    .vl-col--3-4--l,
    .vl-col--9-12--l {
        flex-basis: 75%;
        max-width: 75%;
        min-width: 75%
    }
    .vl-col--5-6--l,
    .vl-col--10-12--l {
        flex-basis: 83.33333%;
        max-width: 83.33333%;
        min-width: 83.33333%
    }
    .vl-col--11-12--l {
        flex-basis: 91.66667%;
        max-width: 91.66667%;
        min-width: 91.66667%
    }
    .vl-col--1-1--l,
    .vl-col--2-2--l,
    .vl-col--3-3--l,
    .vl-col--4-4--l,
    .vl-col--6-6--l,
    .vl-col--12-12--l {
        flex-basis: 100%;
        max-width: 100%;
        min-width: 100%
    }
    .vl-grid--is-stacked {
        margin-top: -3rem
    }
    .vl-grid--is-stacked>* {
        margin-top: 3rem
    }
    .vl-push--reset--l {
        margin-left: 0
    }
    .vl-push--1-12--l {
        margin-left: 8.33333%
    }
    .vl-push--1-6--l,
    .vl-push--2-12--l {
        margin-left: 16.66667%
    }
    .vl-push--1-4--l,
    .vl-push--3-12--l {
        margin-left: 25%
    }
    .vl-push--1-3--l,
    .vl-push--2-6--l,
    .vl-push--4-12--l {
        margin-left: 33.33333%
    }
    .vl-push--5-12--l {
        margin-left: 41.66667%
    }
    .vl-push--1-2--l,
    .vl-push--2-4--l,
    .vl-push--3-6--l,
    .vl-push--6-12--l {
        margin-left: 50%
    }
    .vl-push--7-12--l {
        margin-left: 58.33333%
    }
    .vl-push--2-3--l,
    .vl-push--4-6--l,
    .vl-push--8-12--l {
        margin-left: 66.66667%
    }
    .vl-push--3-4--l,
    .vl-push--9-12--l {
        margin-left: 75%
    }
    .vl-push--5-6--l,
    .vl-push--10-12--l {
        margin-left: 83.33333%
    }
    .vl-push--11-12--l {
        margin-left: 91.66667%
    }
    .vl-col--omega--l {
        margin-left: auto
    }
}

@media screen and (min-width:1601px) {
    .vl-grid {
        display: flex;
        margin-left: -3rem;
        flex-direction: row;
        flex: 0 1 auto;
        flex-wrap: wrap
    }
    .vl-grid,
    .vl-grid>* {
        position: relative;
        box-sizing: border-box
    }
    .vl-grid>* {
        padding-left: 3rem
    }
    .vl-grid--no-gutter--xl {
        margin-left: 0
    }
    .vl-grid--no-gutter--xl>* {
        padding-left: 0
    }
    .vl-grid--v-top--xl {
        align-items: flex-start
    }
    .vl-grid--v-center--xl {
        align-items: center
    }
    .vl-grid--v-bottom--xl {
        align-items: flex-end
    }
    .vl-grid--v-baseline--xl,
    .vl-grid--v-stretch--xl {
        align-items: stretch
    }
    .vl-grid--align-start--xl {
        justify-content: flex-start
    }
    .vl-grid--align-end--xl {
        justify-content: flex-end
    }
    .vl-grid--align-center--xl {
        justify-content: center
    }
    .vl-grid--align-space-between--xl {
        justify-content: space-between
    }
    .vl-grid--align-space-around--xl {
        justify-content: space-around
    }
    .vl-col--fit--xl {
        flex: 1 0
    }
    .vl-col--flex--xl {
        display: flex
    }
    .vl-col--1-12--xl {
        flex-basis: 8.33333%;
        max-width: 8.33333%;
        min-width: 8.33333%
    }
    .vl-col--1-6--xl,
    .vl-col--2-12--xl {
        flex-basis: 16.66667%;
        max-width: 16.66667%;
        min-width: 16.66667%
    }
    .vl-col--1-4--xl,
    .vl-col--3-12--xl {
        flex-basis: 25%;
        max-width: 25%;
        min-width: 25%
    }
    .vl-col--1-3--xl,
    .vl-col--2-6--xl,
    .vl-col--4-12--xl {
        flex-basis: 33.33333%;
        max-width: 33.33333%;
        min-width: 33.33333%
    }
    .vl-col--5-12--xl {
        flex-basis: 41.66667%;
        max-width: 41.66667%;
        min-width: 41.66667%
    }
    .vl-col--1-2--xl,
    .vl-col--2-4--xl,
    .vl-col--3-6--xl,
    .vl-col--6-12--xl {
        flex-basis: 50%;
        max-width: 50%;
        min-width: 50%
    }
    .vl-col--7-12--xl {
        flex-basis: 58.33333%;
        max-width: 58.33333%;
        min-width: 58.33333%
    }
    .vl-col--2-3--xl,
    .vl-col--4-6--xl,
    .vl-col--8-12--xl {
        flex-basis: 66.66667%;
        max-width: 66.66667%;
        min-width: 66.66667%
    }
    .vl-col--3-4--xl,
    .vl-col--9-12--xl {
        flex-basis: 75%;
        max-width: 75%;
        min-width: 75%
    }
    .vl-col--5-6--xl,
    .vl-col--10-12--xl {
        flex-basis: 83.33333%;
        max-width: 83.33333%;
        min-width: 83.33333%
    }
    .vl-col--11-12--xl {
        flex-basis: 91.66667%;
        max-width: 91.66667%;
        min-width: 91.66667%
    }
    .vl-col--1-1--xl,
    .vl-col--2-2--xl,
    .vl-col--3-3--xl,
    .vl-col--4-4--xl,
    .vl-col--6-6--xl,
    .vl-col--12-12--xl {
        flex-basis: 100%;
        max-width: 100%;
        min-width: 100%
    }
    .vl-grid--is-stacked {
        margin-top: -3rem
    }
    .vl-grid--is-stacked>* {
        margin-top: 3rem
    }
    .vl-push--reset--xl {
        margin-left: 0
    }
    .vl-push--1-12--xl {
        margin-left: 8.33333%
    }
    .vl-push--1-6--xl,
    .vl-push--2-12--xl {
        margin-left: 16.66667%
    }
    .vl-push--1-4--xl,
    .vl-push--3-12--xl {
        margin-left: 25%
    }
    .vl-push--1-3--xl,
    .vl-push--2-6--xl,
    .vl-push--4-12--xl {
        margin-left: 33.33333%
    }
    .vl-push--5-12--xl {
        margin-left: 41.66667%
    }
    .vl-push--1-2--xl,
    .vl-push--2-4--xl,
    .vl-push--3-6--xl,
    .vl-push--6-12--xl {
        margin-left: 50%
    }
    .vl-push--7-12--xl {
        margin-left: 58.33333%
    }
    .vl-push--2-3--xl,
    .vl-push--4-6--xl,
    .vl-push--8-12--xl {
        margin-left: 66.66667%
    }
    .vl-push--3-4--xl,
    .vl-push--9-12--xl {
        margin-left: 75%
    }
    .vl-push--5-6--xl,
    .vl-push--10-12--xl {
        margin-left: 83.33333%
    }
    .vl-push--11-12--xl {
        margin-left: 91.66667%
    }
    .vl-col--omega--xl {
        margin-left: auto
    }
}

@media screen and (max-width:1023px) {
    .vl-grid {
        display: flex;
        margin-left: -3rem;
        flex-direction: row;
        flex: 0 1 auto;
        flex-wrap: wrap
    }
    .vl-grid,
    .vl-grid>* {
        position: relative;
        box-sizing: border-box
    }
    .vl-grid>* {
        padding-left: 3rem
    }
    .vl-grid--no-gutter--m {
        margin-left: 0
    }
    .vl-grid--no-gutter--m>* {
        padding-left: 0
    }
    .vl-grid--v-top--m {
        align-items: flex-start
    }
    .vl-grid--v-center--m {
        align-items: center
    }
    .vl-grid--v-bottom--m {
        align-items: flex-end
    }
    .vl-grid--v-baseline--m,
    .vl-grid--v-stretch--m {
        align-items: stretch
    }
    .vl-grid--align-start--m {
        justify-content: flex-start
    }
    .vl-grid--align-end--m {
        justify-content: flex-end
    }
    .vl-grid--align-center--m {
        justify-content: center
    }
    .vl-grid--align-space-between--m {
        justify-content: space-between
    }
    .vl-grid--align-space-around--m {
        justify-content: space-around
    }
    .vl-col--fit--m {
        flex: 1 0
    }
    .vl-col--flex--m {
        display: flex
    }
    .vl-col--1-12--m {
        flex-basis: 8.33333%;
        max-width: 8.33333%;
        min-width: 8.33333%
    }
    .vl-col--1-6--m,
    .vl-col--2-12--m {
        flex-basis: 16.66667%;
        max-width: 16.66667%;
        min-width: 16.66667%
    }
    .vl-col--1-4--m,
    .vl-col--3-12--m {
        flex-basis: 25%;
        max-width: 25%;
        min-width: 25%
    }
    .vl-col--1-3--m,
    .vl-col--2-6--m,
    .vl-col--4-12--m {
        flex-basis: 33.33333%;
        max-width: 33.33333%;
        min-width: 33.33333%
    }
    .vl-col--5-12--m {
        flex-basis: 41.66667%;
        max-width: 41.66667%;
        min-width: 41.66667%
    }
    .vl-col--1-2--m,
    .vl-col--2-4--m,
    .vl-col--3-6--m,
    .vl-col--6-12--m {
        flex-basis: 50%;
        max-width: 50%;
        min-width: 50%
    }
    .vl-col--7-12--m {
        flex-basis: 58.33333%;
        max-width: 58.33333%;
        min-width: 58.33333%
    }
    .vl-col--2-3--m,
    .vl-col--4-6--m,
    .vl-col--8-12--m {
        flex-basis: 66.66667%;
        max-width: 66.66667%;
        min-width: 66.66667%
    }
    .vl-col--3-4--m,
    .vl-col--9-12--m {
        flex-basis: 75%;
        max-width: 75%;
        min-width: 75%
    }
    .vl-col--5-6--m,
    .vl-col--10-12--m {
        flex-basis: 83.33333%;
        max-width: 83.33333%;
        min-width: 83.33333%
    }
    .vl-col--11-12--m {
        flex-basis: 91.66667%;
        max-width: 91.66667%;
        min-width: 91.66667%
    }
    .vl-col--1-1--m,
    .vl-col--2-2--m,
    .vl-col--3-3--m,
    .vl-col--4-4--m,
    .vl-col--6-6--m,
    .vl-col--12-12--m {
        flex-basis: 100%;
        max-width: 100%;
        min-width: 100%
    }
    .vl-grid--is-stacked {
        margin-top: -3rem
    }
    .vl-grid--is-stacked>* {
        margin-top: 3rem
    }
    .vl-push--reset--m {
        margin-left: 0
    }
    .vl-push--1-12--m {
        margin-left: 8.33333%
    }
    .vl-push--1-6--m,
    .vl-push--2-12--m {
        margin-left: 16.66667%
    }
    .vl-push--1-4--m,
    .vl-push--3-12--m {
        margin-left: 25%
    }
    .vl-push--1-3--m,
    .vl-push--2-6--m,
    .vl-push--4-12--m {
        margin-left: 33.33333%
    }
    .vl-push--5-12--m {
        margin-left: 41.66667%
    }
    .vl-push--1-2--m,
    .vl-push--2-4--m,
    .vl-push--3-6--m,
    .vl-push--6-12--m {
        margin-left: 50%
    }
    .vl-push--7-12--m {
        margin-left: 58.33333%
    }
    .vl-push--2-3--m,
    .vl-push--4-6--m,
    .vl-push--8-12--m {
        margin-left: 66.66667%
    }
    .vl-push--3-4--m,
    .vl-push--9-12--m {
        margin-left: 75%
    }
    .vl-push--5-6--m,
    .vl-push--10-12--m {
        margin-left: 83.33333%
    }
    .vl-push--11-12--m {
        margin-left: 91.66667%
    }
    .vl-col--omega--m {
        margin-left: auto
    }
}

@media screen and (max-width:767px) {
    .vl-grid {
        display: flex;
        margin-left: -1.5rem;
        flex-direction: row;
        flex: 0 1 auto;
        flex-wrap: wrap
    }
    .vl-grid,
    .vl-grid>* {
        position: relative;
        box-sizing: border-box
    }
    .vl-grid>* {
        padding-left: 1.5rem
    }
    .vl-grid--no-gutter--s {
        margin-left: 0
    }
    .vl-grid--no-gutter--s>* {
        padding-left: 0
    }
    .vl-grid--v-top--s {
        align-items: flex-start
    }
    .vl-grid--v-center--s {
        align-items: center
    }
    .vl-grid--v-bottom--s {
        align-items: flex-end
    }
    .vl-grid--v-baseline--s,
    .vl-grid--v-stretch--s {
        align-items: stretch
    }
    .vl-grid--align-start--s {
        justify-content: flex-start
    }
    .vl-grid--align-end--s {
        justify-content: flex-end
    }
    .vl-grid--align-center--s {
        justify-content: center
    }
    .vl-grid--align-space-between--s {
        justify-content: space-between
    }
    .vl-grid--align-space-around--s {
        justify-content: space-around
    }
    .vl-col--fit--s {
        flex: 1 0
    }
    .vl-col--flex--s {
        display: flex
    }
    .vl-col--1-12--s {
        flex-basis: 8.33333%;
        max-width: 8.33333%;
        min-width: 8.33333%
    }
    .vl-col--1-6--s,
    .vl-col--2-12--s {
        flex-basis: 16.66667%;
        max-width: 16.66667%;
        min-width: 16.66667%
    }
    .vl-col--1-4--s,
    .vl-col--3-12--s {
        flex-basis: 25%;
        max-width: 25%;
        min-width: 25%
    }
    .vl-col--1-3--s,
    .vl-col--2-6--s,
    .vl-col--4-12--s {
        flex-basis: 33.33333%;
        max-width: 33.33333%;
        min-width: 33.33333%
    }
    .vl-col--5-12--s {
        flex-basis: 41.66667%;
        max-width: 41.66667%;
        min-width: 41.66667%
    }
    .vl-col--1-2--s,
    .vl-col--2-4--s,
    .vl-col--3-6--s,
    .vl-col--6-12--s {
        flex-basis: 50%;
        max-width: 50%;
        min-width: 50%
    }
    .vl-col--7-12--s {
        flex-basis: 58.33333%;
        max-width: 58.33333%;
        min-width: 58.33333%
    }
    .vl-col--2-3--s,
    .vl-col--4-6--s,
    .vl-col--8-12--s {
        flex-basis: 66.66667%;
        max-width: 66.66667%;
        min-width: 66.66667%
    }
    .vl-col--3-4--s,
    .vl-col--9-12--s {
        flex-basis: 75%;
        max-width: 75%;
        min-width: 75%
    }
    .vl-col--5-6--s,
    .vl-col--10-12--s {
        flex-basis: 83.33333%;
        max-width: 83.33333%;
        min-width: 83.33333%
    }
    .vl-col--11-12--s {
        flex-basis: 91.66667%;
        max-width: 91.66667%;
        min-width: 91.66667%
    }
    .vl-col--1-1--s,
    .vl-col--2-2--s,
    .vl-col--3-3--s,
    .vl-col--4-4--s,
    .vl-col--6-6--s,
    .vl-col--12-12--s {
        flex-basis: 100%;
        max-width: 100%;
        min-width: 100%
    }
    .vl-grid--is-stacked {
        margin-top: -1.5rem
    }
    .vl-grid--is-stacked>* {
        margin-top: 1.5rem
    }
    .vl-push--reset--s {
        margin-left: 0
    }
    .vl-push--1-12--s {
        margin-left: 8.33333%
    }
    .vl-push--1-6--s,
    .vl-push--2-12--s {
        margin-left: 16.66667%
    }
    .vl-push--1-4--s,
    .vl-push--3-12--s {
        margin-left: 25%
    }
    .vl-push--1-3--s,
    .vl-push--2-6--s,
    .vl-push--4-12--s {
        margin-left: 33.33333%
    }
    .vl-push--5-12--s {
        margin-left: 41.66667%
    }
    .vl-push--1-2--s,
    .vl-push--2-4--s,
    .vl-push--3-6--s,
    .vl-push--6-12--s {
        margin-left: 50%
    }
    .vl-push--7-12--s {
        margin-left: 58.33333%
    }
    .vl-push--2-3--s,
    .vl-push--4-6--s,
    .vl-push--8-12--s {
        margin-left: 66.66667%
    }
    .vl-push--3-4--s,
    .vl-push--9-12--s {
        margin-left: 75%
    }
    .vl-push--5-6--s,
    .vl-push--10-12--s {
        margin-left: 83.33333%
    }
    .vl-push--11-12--s {
        margin-left: 91.66667%
    }
    .vl-col--omega--s {
        margin-left: auto
    }
}

@media screen and (max-width:500px) {
    .vl-grid {
        display: flex;
        margin-left: -1.5rem;
        flex-direction: row;
        flex: 0 1 auto;
        flex-wrap: wrap
    }
    .vl-grid,
    .vl-grid>* {
        position: relative;
        box-sizing: border-box
    }
    .vl-grid>* {
        padding-left: 1.5rem
    }
    .vl-grid--no-gutter--xs {
        margin-left: 0
    }
    .vl-grid--no-gutter--xs>* {
        padding-left: 0
    }
    .vl-grid--v-top--xs {
        align-items: flex-start
    }
    .vl-grid--v-center--xs {
        align-items: center
    }
    .vl-grid--v-bottom--xs {
        align-items: flex-end
    }
    .vl-grid--v-baseline--xs,
    .vl-grid--v-stretch--xs {
        align-items: stretch
    }
    .vl-grid--align-start--xs {
        justify-content: flex-start
    }
    .vl-grid--align-end--xs {
        justify-content: flex-end
    }
    .vl-grid--align-center--xs {
        justify-content: center
    }
    .vl-grid--align-space-between--xs {
        justify-content: space-between
    }
    .vl-grid--align-space-around--xs {
        justify-content: space-around
    }
    .vl-col--fit--xs {
        flex: 1 0
    }
    .vl-col--flex--xs {
        display: flex
    }
    .vl-col--1-12--xs {
        flex-basis: 8.33333%;
        max-width: 8.33333%;
        min-width: 8.33333%
    }
    .vl-col--1-6--xs,
    .vl-col--2-12--xs {
        flex-basis: 16.66667%;
        max-width: 16.66667%;
        min-width: 16.66667%
    }
    .vl-col--1-4--xs,
    .vl-col--3-12--xs {
        flex-basis: 25%;
        max-width: 25%;
        min-width: 25%
    }
    .vl-col--1-3--xs,
    .vl-col--2-6--xs,
    .vl-col--4-12--xs {
        flex-basis: 33.33333%;
        max-width: 33.33333%;
        min-width: 33.33333%
    }
    .vl-col--5-12--xs {
        flex-basis: 41.66667%;
        max-width: 41.66667%;
        min-width: 41.66667%
    }
    .vl-col--1-2--xs,
    .vl-col--2-4--xs,
    .vl-col--3-6--xs,
    .vl-col--6-12--xs {
        flex-basis: 50%;
        max-width: 50%;
        min-width: 50%
    }
    .vl-col--7-12--xs {
        flex-basis: 58.33333%;
        max-width: 58.33333%;
        min-width: 58.33333%
    }
    .vl-col--2-3--xs,
    .vl-col--4-6--xs,
    .vl-col--8-12--xs {
        flex-basis: 66.66667%;
        max-width: 66.66667%;
        min-width: 66.66667%
    }
    .vl-col--3-4--xs,
    .vl-col--9-12--xs {
        flex-basis: 75%;
        max-width: 75%;
        min-width: 75%
    }
    .vl-col--5-6--xs,
    .vl-col--10-12--xs {
        flex-basis: 83.33333%;
        max-width: 83.33333%;
        min-width: 83.33333%
    }
    .vl-col--11-12--xs {
        flex-basis: 91.66667%;
        max-width: 91.66667%;
        min-width: 91.66667%
    }
    .vl-col--1-1--xs,
    .vl-col--2-2--xs,
    .vl-col--3-3--xs,
    .vl-col--4-4--xs,
    .vl-col--6-6--xs,
    .vl-col--12-12--xs {
        flex-basis: 100%;
        max-width: 100%;
        min-width: 100%
    }
    .vl-grid--is-stacked {
        margin-top: -1.5rem
    }
    .vl-grid--is-stacked>* {
        margin-top: 1.5rem
    }
    .vl-push--reset--xs {
        margin-left: 0
    }
    .vl-push--1-12--xs {
        margin-left: 8.33333%
    }
    .vl-push--1-6--xs,
    .vl-push--2-12--xs {
        margin-left: 16.66667%
    }
    .vl-push--1-4--xs,
    .vl-push--3-12--xs {
        margin-left: 25%
    }
    .vl-push--1-3--xs,
    .vl-push--2-6--xs,
    .vl-push--4-12--xs {
        margin-left: 33.33333%
    }
    .vl-push--5-12--xs {
        margin-left: 41.66667%
    }
    .vl-push--1-2--xs,
    .vl-push--2-4--xs,
    .vl-push--3-6--xs,
    .vl-push--6-12--xs {
        margin-left: 50%
    }
    .vl-push--7-12--xs {
        margin-left: 58.33333%
    }
    .vl-push--2-3--xs,
    .vl-push--4-6--xs,
    .vl-push--8-12--xs {
        margin-left: 66.66667%
    }
    .vl-push--3-4--xs,
    .vl-push--9-12--xs {
        margin-left: 75%
    }
    .vl-push--5-6--xs,
    .vl-push--10-12--xs {
        margin-left: 83.33333%
    }
    .vl-push--11-12--xs {
        margin-left: 91.66667%
    }
    .vl-col--omega--xs {
        margin-left: auto
    }
}

@media screen and (min-width:1280px) {
    .vl-grid--wide {
        margin-left: calc(-4.16667% - 3rem);
        margin-right: -4.16667%
    }
}

.vl-form-grid {
    display: flex;
    margin-left: -1.5rem;
    flex-direction: row;
    flex: 0 1 auto;
    flex-wrap: wrap
}

.vl-form-grid,
.vl-form-grid>* {
    position: relative;
    box-sizing: border-box
}

.vl-form-grid>* {
    padding-left: 1.5rem
}

.vl-form-grid--no-gutter {
    margin-left: 0
}

.vl-form-grid--no-gutter>* {
    padding-left: 0
}

.vl-form-grid--v-top {
    align-items: flex-start
}

.vl-form-grid--v-center {
    align-items: center
}

.vl-form-grid--v-bottom {
    align-items: flex-end
}

.vl-form-grid--v-baseline,
.vl-form-grid--v-stretch {
    align-items: stretch
}

.vl-form-grid--align-start {
    justify-content: flex-start
}

.vl-form-grid--align-end {
    justify-content: flex-end
}

.vl-form-grid--align-center {
    justify-content: center
}

.vl-form-grid--align-space-between {
    justify-content: space-between
}

.vl-form-grid--align-space-around {
    justify-content: space-around
}

.vl-form-col--fit {
    flex: 1 0
}

.vl-form-col--flex {
    display: flex
}

.vl-form-col--1-12 {
    flex-basis: 8.33333%;
    max-width: 8.33333%;
    min-width: 8.33333%
}

.vl-form-col--1-6,
.vl-form-col--2-12 {
    flex-basis: 16.66667%;
    max-width: 16.66667%;
    min-width: 16.66667%
}

.vl-form-col--1-4,
.vl-form-col--3-12 {
    flex-basis: 25%;
    max-width: 25%;
    min-width: 25%
}

.vl-form-col--1-3,
.vl-form-col--2-6,
.vl-form-col--4-12 {
    flex-basis: 33.33333%;
    max-width: 33.33333%;
    min-width: 33.33333%
}

.vl-form-col--5-12 {
    flex-basis: 41.66667%;
    max-width: 41.66667%;
    min-width: 41.66667%
}

.vl-form-col--1-2,
.vl-form-col--2-4,
.vl-form-col--3-6,
.vl-form-col--6-12 {
    flex-basis: 50%;
    max-width: 50%;
    min-width: 50%
}

.vl-form-col--7-12 {
    flex-basis: 58.33333%;
    max-width: 58.33333%;
    min-width: 58.33333%
}

.vl-form-col--2-3,
.vl-form-col--4-6,
.vl-form-col--8-12 {
    flex-basis: 66.66667%;
    max-width: 66.66667%;
    min-width: 66.66667%
}

.vl-form-col--3-4,
.vl-form-col--9-12 {
    flex-basis: 75%;
    max-width: 75%;
    min-width: 75%
}

.vl-form-col--5-6,
.vl-form-col--10-12 {
    flex-basis: 83.33333%;
    max-width: 83.33333%;
    min-width: 83.33333%
}

.vl-form-col--11-12 {
    flex-basis: 91.66667%;
    max-width: 91.66667%;
    min-width: 91.66667%
}

.vl-form-col--1-1,
.vl-form-col--2-2,
.vl-form-col--3-3,
.vl-form-col--4-4,
.vl-form-col--6-6,
.vl-form-col--12-12 {
    flex-basis: 100%;
    max-width: 100%;
    min-width: 100%
}

.vl-form-grid--is-stacked {
    margin-top: -1.5rem
}

.vl-form-grid--is-stacked>* {
    margin-top: 1.5rem
}

.vl-form-push--reset {
    margin-left: 0
}

.vl-form-push--1-12 {
    margin-left: 8.33333%
}

.vl-form-push--1-6,
.vl-form-push--2-12 {
    margin-left: 16.66667%
}

.vl-form-push--1-4,
.vl-form-push--3-12 {
    margin-left: 25%
}

.vl-form-push--1-3,
.vl-form-push--2-6,
.vl-form-push--4-12 {
    margin-left: 33.33333%
}

.vl-form-push--5-12 {
    margin-left: 41.66667%
}

.vl-form-push--1-2,
.vl-form-push--2-4,
.vl-form-push--3-6,
.vl-form-push--6-12 {
    margin-left: 50%
}

.vl-form-push--7-12 {
    margin-left: 58.33333%
}

.vl-form-push--2-3,
.vl-form-push--4-6,
.vl-form-push--8-12 {
    margin-left: 66.66667%
}

.vl-form-push--3-4,
.vl-form-push--9-12 {
    margin-left: 75%
}

.vl-form-push--5-6,
.vl-form-push--10-12 {
    margin-left: 83.33333%
}

.vl-form-push--11-12 {
    margin-left: 91.66667%
}

.vl-form-col--omega {
    margin-left: auto
}

@media screen and (max-width:767px) {
    .vl-form-grid {
        display: flex;
        margin-left: -1.5rem;
        flex-direction: row;
        flex: 0 1 auto;
        flex-wrap: wrap
    }
    .vl-form-grid,
    .vl-form-grid>* {
        position: relative;
        box-sizing: border-box
    }
    .vl-form-grid>* {
        padding-left: 1.5rem
    }
    .vl-form-grid--no-gutter--s {
        margin-left: 0
    }
    .vl-form-grid--no-gutter--s>* {
        padding-left: 0
    }
    .vl-form-grid--v-top--s {
        align-items: flex-start
    }
    .vl-form-grid--v-center--s {
        align-items: center
    }
    .vl-form-grid--v-bottom--s {
        align-items: flex-end
    }
    .vl-form-grid--v-baseline--s,
    .vl-form-grid--v-stretch--s {
        align-items: stretch
    }
    .vl-form-grid--align-start--s {
        justify-content: flex-start
    }
    .vl-form-grid--align-end--s {
        justify-content: flex-end
    }
    .vl-form-grid--align-center--s {
        justify-content: center
    }
    .vl-form-grid--align-space-between--s {
        justify-content: space-between
    }
    .vl-form-grid--align-space-around--s {
        justify-content: space-around
    }
    .vl-form-col--fit--s {
        flex: 1 0
    }
    .vl-form-col--flex--s {
        display: flex
    }
    .vl-form-col--1-12--s {
        flex-basis: 8.33333%;
        max-width: 8.33333%;
        min-width: 8.33333%
    }
    .vl-form-col--1-6--s,
    .vl-form-col--2-12--s {
        flex-basis: 16.66667%;
        max-width: 16.66667%;
        min-width: 16.66667%
    }
    .vl-form-col--1-4--s,
    .vl-form-col--3-12--s {
        flex-basis: 25%;
        max-width: 25%;
        min-width: 25%
    }
    .vl-form-col--1-3--s,
    .vl-form-col--2-6--s,
    .vl-form-col--4-12--s {
        flex-basis: 33.33333%;
        max-width: 33.33333%;
        min-width: 33.33333%
    }
    .vl-form-col--5-12--s {
        flex-basis: 41.66667%;
        max-width: 41.66667%;
        min-width: 41.66667%
    }
    .vl-form-col--1-2--s,
    .vl-form-col--2-4--s,
    .vl-form-col--3-6--s,
    .vl-form-col--6-12--s {
        flex-basis: 50%;
        max-width: 50%;
        min-width: 50%
    }
    .vl-form-col--7-12--s {
        flex-basis: 58.33333%;
        max-width: 58.33333%;
        min-width: 58.33333%
    }
    .vl-form-col--2-3--s,
    .vl-form-col--4-6--s,
    .vl-form-col--8-12--s {
        flex-basis: 66.66667%;
        max-width: 66.66667%;
        min-width: 66.66667%
    }
    .vl-form-col--3-4--s,
    .vl-form-col--9-12--s {
        flex-basis: 75%;
        max-width: 75%;
        min-width: 75%
    }
    .vl-form-col--5-6--s,
    .vl-form-col--10-12--s {
        flex-basis: 83.33333%;
        max-width: 83.33333%;
        min-width: 83.33333%
    }
    .vl-form-col--11-12--s {
        flex-basis: 91.66667%;
        max-width: 91.66667%;
        min-width: 91.66667%
    }
    .vl-form-col--1-1--s,
    .vl-form-col--2-2--s,
    .vl-form-col--3-3--s,
    .vl-form-col--4-4--s,
    .vl-form-col--6-6--s,
    .vl-form-col--12-12--s {
        flex-basis: 100%;
        max-width: 100%;
        min-width: 100%
    }
    .vl-form-grid--is-stacked {
        margin-top: -1.5rem
    }
    .vl-form-grid--is-stacked>* {
        margin-top: 1.5rem
    }
    .vl-form-push--reset--s {
        margin-left: 0
    }
    .vl-form-push--1-12--s {
        margin-left: 8.33333%
    }
    .vl-form-push--1-6--s,
    .vl-form-push--2-12--s {
        margin-left: 16.66667%
    }
    .vl-form-push--1-4--s,
    .vl-form-push--3-12--s {
        margin-left: 25%
    }
    .vl-form-push--1-3--s,
    .vl-form-push--2-6--s,
    .vl-form-push--4-12--s {
        margin-left: 33.33333%
    }
    .vl-form-push--5-12--s {
        margin-left: 41.66667%
    }
    .vl-form-push--1-2--s,
    .vl-form-push--2-4--s,
    .vl-form-push--3-6--s,
    .vl-form-push--6-12--s {
        margin-left: 50%
    }
    .vl-form-push--7-12--s {
        margin-left: 58.33333%
    }
    .vl-form-push--2-3--s,
    .vl-form-push--4-6--s,
    .vl-form-push--8-12--s {
        margin-left: 66.66667%
    }
    .vl-form-push--3-4--s,
    .vl-form-push--9-12--s {
        margin-left: 75%
    }
    .vl-form-push--5-6--s,
    .vl-form-push--10-12--s {
        margin-left: 83.33333%
    }
    .vl-form-push--11-12--s {
        margin-left: 91.66667%
    }
    .vl-form-col--omega--s {
        margin-left: auto
    }
}

@media screen and (min-width:1280px) {
    .vl-form-grid--wide {
        margin-left: calc(-4.16667% - 3rem);
        margin-right: -4.16667%
    }
}

.vl-grid--is-stacked-large {
    margin-bottom: -6rem
}

.vl-grid--is-stacked-large>* {
    margin-bottom: 6rem
}

.vl-grid--is-stacked-small {
    margin-bottom: -1.5rem
}

.vl-grid--is-stacked-small>* {
    margin-bottom: 1.5rem
}

.vl-page {
    width: 100%;
    background-color: #fff
}

.vl-main-content {
    outline: none;
    position: relative
}

.vl-region {
    margin: 0 auto;
    padding: 3rem 0 6rem
}

@media screen and (max-width:767px) {
    .vl-region {
        padding: 3rem 0
    }
}

.vl-region.vl-region--no-space {
    padding: 0
}

.vl-region.vl-region--no-space-bottom {
    padding-bottom: 0
}

.vl-region.vl-region--no-space-top,
.vl-region:not(.vl-region--alt)+.vl-region:not(.vl-region--alt) {
    padding-top: 0
}

.vl-region--alt {
    background-color: #f7f9fc
}

.vl-region--overlap {
    background: linear-gradient(180deg, transparent calc(50% - 30px), #f7f9fc calc(50% - 30px), #f7f9fc);
    filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="#00000000", endColorstr="#000000", GradientType=0)
}

.vl-region--overlap .vl-layout {
    border: 1px solid #cbd2da;
    padding-top: 50px;
    padding-bottom: 50px;
    background: #fff
}

@media only screen and (max-width:1295px) {
    .vl-region--overlap .vl-layout {
        margin: 15px
    }
}

@media screen and (max-width:1023px) {
    .vl-region--overlap .vl-layout {
        padding-top: 20px;
        padding-bottom: 20px
    }
}

.vl-region--overlap+.vl-region--alt {
    padding-top: 0!important
}

.vl-region--alt+.vl-region:not(.vl-region--alt),
.vl-region:not(.vl-region--alt)+.vl-region--alt {
    padding-top: 6rem
}

@media screen and (max-width:767px) {
    .vl-region--alt+.vl-region:not(.vl-region--alt),
    .vl-region:not(.vl-region--alt)+.vl-region--alt {
        padding-top: 3rem
    }
}

.vl-region:first-child {
    padding-top: 6rem
}

@media screen and (max-width:767px) {
    .vl-region:first-child {
        padding-top: 2rem
    }
}

.vl-region--small {
    padding: 1.5rem 0
}

@media screen and (max-width:767px) {
    .vl-region--small {
        padding: 2rem 0
    }
}

.vl-region--medium {
    padding: 3rem 0
}

@media screen and (max-width:767px) {
    .vl-region--medium {
        padding: 2rem 0
    }
}

.vl-region--bordered+.vl-region--bordered {
    border-top: 1px solid #f7f9fc
}

.vl-region--bordered+.vl-region--bordered.vl-region--alt {
    border-top-color: #fff
}

.vl-layout {
    position: relative;
    margin: 0 auto;
    min-width: 1024px;
    max-width: 1280px;
    padding: 0 3rem
}

@media screen and (max-width:1023px) {
    .vl-layout {
        width: auto;
        min-width: 768px;
        max-width: 1280px
    }
}

@media screen and (max-width:767px) {
    .vl-layout {
        width: auto;
        min-width: 0;
        padding: 0 1.5rem
    }
}

.js-vl-accordion {
    position: relative
}

.js-vl-accordion--flex-reverse {
    display: flex;
    flex-direction: column-reverse
}

.js-vl-accordion summary:focus {
    outline: .2rem solid transparent;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

.vl-accordion-list--bordered .vl-accordion-list__item {
    padding: 3rem 0;
    border-bottom: 1px solid #cbd2da;
    margin-bottom: 0
}

@media screen and (max-width:1023px) {
    .vl-accordion-list--bordered .vl-accordion-list__item {
        padding: 2rem 0
    }
}

@media screen and (max-width:767px) {
    .vl-accordion-list--bordered .vl-accordion-list__item {
        padding: 1.5rem 0
    }
}

.vl-accordion-list--bordered .vl-accordion-list__item:first-child {
    border-top: 1px solid #cbd2da
}

.vl-accordion-list__item {
    margin-bottom: 10px
}

.vl-accordion-list__item .vl-accordion-list--bordered {
    margin-bottom: 0
}

.vl-accordion__summary {
    position: relative;
    z-index: 2
}

.vl-accordion__icon {
    width: 22px
}

.vl-accordion__title {
    font-size: 20px
}

@media screen and (max-width:767px) {
    .vl-accordion__title {
        font-size: 18px
    }
}

.vl-accordion__subtitle {
    padding: 0 0 0 22px
}

.vl-accordion__content {
    position: relative;
    z-index: 1
}

.js .vl-accordion__content {
    visibility: hidden;
    max-height: 0;
    overflow: hidden;
    transition: max-height .3s cubic-bezier(0, 1.05, 0, 1), overflow 0s 0s
}

.js .js-vl-accordion--open>.vl-accordion__content {
    visibility: visible;
    max-height: 1000vh;
    overflow-y: auto;
    transition: max-height .3s, overflow 0s .3s
}

@media screen and (max-width:767px) {
    .vl-accordion__footer {
        padding: 1.5rem 0
    }
}

.vl-accordion-list--bordered .vl-accordion__footer {
    padding-bottom: 0
}

.vl-accordion__panel {
    padding: 2.2rem
}

@media screen and (max-width:500px) {
    .vl-accordion__panel {
        padding: 1rem 0
    }
}

.vl-accordion__panel--alt {
    margin-top: 1rem;
    background-color: #f7f9fc;
    padding-top: 2.2rem
}

@media screen and (max-width:767px) {
    .vl-accordion__panel--alt {
        padding: 1rem
    }
}

.vl-accordion__panel--no-indent {
    padding: 2.2rem 0
}

@media screen and (max-width:500px) {
    .vl-accordion__panel--no-indent {
        padding: 1rem 0
    }
}

.vl-accordion-list--bordered .vl-accordion__panel:not(.vl-accordion__panel--with-footer) {
    padding-bottom: 0
}

.vl-action-group {
    display: flex;
    flex-wrap: wrap;
    align-items: center
}

.vl-action-group .vl-button,
.vl-action-group a,
.vl-action-group button {
    margin-right: 1.4rem
}

.vl-action-group .vl-button:last-child,
.vl-action-group a:last-child,
.vl-action-group button:last-child {
    margin-right: 0
}

.vl-action-group--align-right {
    justify-content: flex-end
}

.vl-action-group--align-center {
    justify-content: center
}

.vl-action-group--space-between {
    justify-content: space-between
}

.vl-action-group .vl-link {
    white-space: nowrap
}

.vl-action-group--bordered .vl-link {
    position: relative;
    margin-bottom: 1rem
}

.vl-action-group--bordered .vl-link:not(:last-child) {
    margin-right: 1.6rem
}

.vl-action-group--bordered .vl-link,
.vl-action-group--bordered .vl-link--icon {
    margin: 0 1.6rem
}

.vl-action-group--bordered .vl-link--icon:last-child,
.vl-action-group--bordered .vl-link:last-child {
    border: 0
}

.vl-action-group--bordered .vl-link--icon:first-child,
.vl-action-group--bordered .vl-link:first-child {
    margin-left: 0
}

.vl-action-group--bordered .vl-link--icon:not(:last-child):after,
.vl-action-group--bordered .vl-link:not(:last-child):after {
    content: "";
    background-color: #cbd2da;
    height: 1.5rem;
    width: .1rem;
    right: -1.6rem;
    top: 50%;
    transform: translateY(-50%);
    position: absolute
}

@media screen and (min-width:1023px) {
    .vl-action-group--collapse--l {
        flex-direction: column;
        align-items: flex-start
    }
    .vl-action-group--collapse--l>:not(:last-child) {
        margin-bottom: 1rem
    }
    .vl-action-group--collapse--l.vl-action-group--align-center,
    .vl-action-group--collapse--l.vl-action-group--align-right {
        align-items: center
    }
    .vl-action-group--collapse--l.vl-action-group--align-center .vl-button,
    .vl-action-group--collapse--l.vl-action-group--align-right .vl-button {
        margin-right: 0
    }
    .vl-action-group--collapse--l.vl-action-group--align-right {
        align-items: flex-end
    }
    .vl-action-group--collapse--l .vl-link {
        border-right: 0;
        display: block;
        padding-right: 0;
        text-align: left;
        flex: 1 0 100%;
        margin: 0
    }
    .vl-action-group--collapse--l .vl-link:not(:last-child) {
        margin-bottom: .5rem
    }
    .vl-action-group--collapse--l .vl-link:not(:last-child):after {
        display: none
    }
}

@media screen and (max-width:1023px) {
    .vl-action-group--collapse--m {
        flex-direction: column;
        align-items: flex-start
    }
    .vl-action-group--collapse--m>:not(:last-child) {
        margin-bottom: 1rem
    }
    .vl-action-group--collapse--m.vl-action-group--align-center,
    .vl-action-group--collapse--m.vl-action-group--align-right {
        align-items: center
    }
    .vl-action-group--collapse--m.vl-action-group--align-center .vl-button,
    .vl-action-group--collapse--m.vl-action-group--align-right .vl-button {
        margin-right: 0
    }
    .vl-action-group--collapse--m.vl-action-group--align-right {
        align-items: flex-end
    }
    .vl-action-group--collapse--m .vl-link {
        border-right: 0;
        display: block;
        padding-right: 0;
        text-align: left;
        flex: 1 0 100%;
        margin: 0
    }
    .vl-action-group--collapse--m .vl-link:not(:last-child) {
        margin-bottom: .5rem
    }
    .vl-action-group--collapse--m .vl-link:not(:last-child):after {
        display: none
    }
}

@media screen and (max-width:767px) {
    .vl-action-group--collapse--s {
        flex-direction: column;
        align-items: flex-start
    }
    .vl-action-group--collapse--s>:not(:last-child) {
        margin-bottom: 1rem
    }
    .vl-action-group--collapse--s.vl-action-group--align-center,
    .vl-action-group--collapse--s.vl-action-group--align-right {
        align-items: center
    }
    .vl-action-group--collapse--s.vl-action-group--align-center .vl-button,
    .vl-action-group--collapse--s.vl-action-group--align-right .vl-button {
        margin-right: 0
    }
    .vl-action-group--collapse--s.vl-action-group--align-right {
        align-items: flex-end
    }
    .vl-action-group--collapse--s .vl-link {
        border-right: 0;
        display: block;
        padding-right: 0;
        text-align: left;
        flex: 1 0 100%;
        margin: 0
    }
    .vl-action-group--collapse--s .vl-link:not(:last-child) {
        margin-bottom: .5rem
    }
    .vl-action-group--collapse--s .vl-link:not(:last-child):after {
        display: none
    }
}

@media screen and (max-width:500px) {
    .vl-action-group--collapse--xs {
        flex-direction: column;
        align-items: flex-start
    }
    .vl-action-group--collapse--xs>:not(:last-child) {
        margin-bottom: 1rem
    }
    .vl-action-group--collapse--xs.vl-action-group--align-center,
    .vl-action-group--collapse--xs.vl-action-group--align-right {
        align-items: center
    }
    .vl-action-group--collapse--xs.vl-action-group--align-center .vl-button,
    .vl-action-group--collapse--xs.vl-action-group--align-right .vl-button {
        margin-right: 0
    }
    .vl-action-group--collapse--xs.vl-action-group--align-right {
        align-items: flex-end
    }
    .vl-action-group--collapse--xs .vl-link {
        border-right: 0;
        display: block;
        padding-right: 0;
        text-align: left;
        flex: 1 0 100%;
        margin: 0
    }
    .vl-action-group--collapse--xs .vl-link:not(:last-child) {
        margin-bottom: .5rem
    }
    .vl-action-group--collapse--xs .vl-link:not(:last-child):after {
        display: none
    }
}

.vl-alert {
    display: flex;
    position: relative;
    background-color: #e8ebee;
    border: .1rem solid #cfd5dd;
    padding: 2.5rem 3rem;
    border-radius: .3rem
}

@media screen and (max-width:767px) {
    .vl-alert {
        padding: 1.5rem
    }
}

.vl-alert__close {
    display: flex;
    position: absolute;
    border: 0;
    cursor: pointer;
    top: .9rem;
    right: .9rem;
    padding: .5rem;
    font-size: 1.6rem;
    overflow: hidden
}

.vl-alert__close:focus,
.vl-alert__close:hover {
    color: #003bb0
}

.vl-alert__close>.vl-vi {
    display: inline-flex
}

.vl-alert__content-wrapper {
    display: flex;
    flex: 1;
    overflow: hidden
}

@media screen and (max-width:767px) {
    .vl-alert__content-wrapper {
        flex-wrap: wrap
    }
}

.vl-alert__content {
    display: flex;
    justify-content: center;
    flex-direction: column;
    flex-basis: 100%;
    overflow: hidden
}

@media screen and (max-width:767px) {
    .vl-alert__content {
        flex-basis: auto
    }
}

.vl-alert__icon {
    flex: 0 0 auto;
    margin-right: 2.5rem;
    font-size: 2.4rem;
    line-break: 1.1;
    line-height: 1
}

@media screen and (max-width:767px) {
    .vl-alert__icon {
        margin-right: 1.5rem;
        font-size: 1.6rem;
        margin-top: 3px
    }
}

.vl-alert__title {
    font-size: 1.8rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 1.4rem;
    line-height: 1.44
}

@media screen and (max-width:767px) {
    .vl-alert__title {
        font-size: 1.8rem;
        margin-bottom: 1rem
    }
}

.vl-alert__actions {
    margin-top: 1.5rem
}

.vl-alert--cta:before {
    content: "";
    position: absolute;
    top: -.1rem;
    left: -.1rem;
    width: calc(100%+ .2rem);
    height: .3rem;
    background: #05c
}

.vl-alert--error {
    background-color: #fbebeb;
    border-color: #f1aeae
}

.vl-alert--error .vl-alert__icon {
    color: #db3434
}

.vl-alert--warning {
    background-color: #fff9e8;
    border-color: #ffe8a1
}

.vl-alert--warning .vl-alert__icon {
    color: #ffc515
}

.vl-alert--success {
    background-color: #ecf6ee;
    border-color: #b1dcbb
}

.vl-alert--success .vl-alert__icon {
    color: #3ca854
}

.vl-alert--info {
    background-color: #f7f9fc;
    border-color: #e8ebee
}

.vl-alert--naked {
    background: transparent;
    padding: 0;
    border: 0;
    border-radius: 0
}

.vl-alert--naked .vl-alert__content {
    display: block
}

.vl-alert--naked .vl-alert__title>*,
.vl-alert--naked p {
    display: inline
}

.vl-alert--small {
    font-size: 1.4rem;
    line-height: 1.2;
    padding: 1.5rem
}

.vl-alert--small .vl-alert__icon {
    width: 2rem;
    height: 2rem;
    font-size: 2rem;
    margin-right: 1.5rem
}

.vl-alert--small .vl-alert__actions {
    margin-top: 1rem
}

.vl-alert--large {
    padding: 5rem 5.5rem
}

@media screen and (max-width:767px) {
    .vl-alert--large {
        padding: 1.5rem
    }
}

.vl-alert--large .vl-alert__title {
    font-size: 2.2rem
}

@media screen and (max-width:767px) {
    .vl-alert--large .vl-alert__title {
        font-size: 2rem
    }
}

.vl-alert__image {
    width: 8rem;
    height: auto;
    margin-right: 4rem
}

@media screen and (max-width:767px) {
    .vl-alert__image {
        width: 7rem;
        margin-right: 1rem;
        margin-bottom: 1rem
    }
    .vl-alert__image+.vl-alert__content {
        max-width: calc(100% - 8rem)
    }
}

@media screen and (max-width:500px) {
    .vl-alert__image+.vl-alert__content {
        max-width: none
    }
}

.vl-annotation {
    color: #687483;
    font-weight: 400;
    font-size: inherit
}

.vl-annotation--small {
    font-size: .65em
}

.vl-annotation__list-item {
    display: list-item;
    list-style-type: disc;
    float: left;
    margin-left: 3rem
}

.vl-annotation__list-item:first-of-type {
    margin-left: 0;
    list-style-type: none
}

.vl-annotation__list-item--iconless {
    list-style-type: none;
    margin-left: 1rem
}

.vl-badge {
    width: 4.5rem;
    height: 4.5rem;
    border-radius: 2.25rem;
    display: inline-block;
    overflow: hidden;
    border: 0
}

.vl-badge--bullet {
    width: .8rem;
    height: .8rem;
    border-radius: .4rem
}

.vl-badge--bullet.vl-badge--icon .vl-vi,
.vl-badge--bullet.vl-badge--initials span {
    display: none
}

.vl-badge--inline .vl-badge--bullet {
    margin-right: 10px
}

@media screen and (max-width:767px) {
    .vl-badge--inline .vl-badge--bullet {
        margin-right: 7px
    }
}

.vl-badge--xxsmall {
    width: 1.6rem;
    height: 1.6rem;
    border-radius: .8rem
}

.vl-badge--xxsmall.vl-badge--icon .vl-vi {
    font-size: .8rem;
    height: .8rem
}

.vl-badge--xxsmall.vl-badge--initials span {
    font-size: .8rem
}

.vl-badge--xsmall {
    width: 2rem;
    height: 2rem;
    border-radius: 1rem
}

.vl-badge--xsmall.vl-badge--icon .vl-vi {
    font-size: 1rem;
    height: 1rem
}

.vl-badge--xsmall.vl-badge--initials span {
    font-size: 1rem
}

.vl-badge--small {
    width: 2.75rem;
    height: 2.75rem;
    border-radius: 1.375rem
}

.vl-badge--small.vl-badge--icon .vl-vi {
    font-size: 1.2rem;
    height: 1.2rem
}

.vl-badge--small.vl-badge--initials span {
    font-size: 1.2rem
}

.vl-badge--medium {
    width: 4.5rem;
    height: 4.5rem;
    border-radius: 2.25rem
}

.vl-badge--medium.vl-badge--icon .vl-vi {
    font-size: 2rem;
    height: 2rem
}

.vl-badge--medium.vl-badge--initials span {
    font-size: 2rem
}

.vl-badge--large {
    width: 5.75rem;
    height: 5.75rem;
    border-radius: 2.875rem
}

.vl-badge--large.vl-badge--icon .vl-vi {
    font-size: 3rem;
    height: 3rem
}

.vl-badge--large.vl-badge--initials span {
    font-size: 3rem
}

.vl-badge--xlarge {
    width: 10rem;
    height: 10rem;
    border-radius: 5rem
}

.vl-badge--xlarge.vl-badge--icon .vl-vi {
    font-size: 5rem;
    height: 5rem
}

.vl-badge--xlarge.vl-badge--initials span {
    font-size: 5rem
}

.vl-badge--alt {
    background-color: #f7f9fc
}

.vl-badge--white {
    background-color: #fff
}

.vl-badge--accent {
    color: #fff;
    background-color: #ffe615;
    background-color: var(--vl-theme-primary-color)
}

.vl-badge--action {
    color: #fff;
    background-color: #05c
}

.vl-badge--action span {
    color: #fff
}

.vl-badge--success {
    color: #fff;
    background-color: #3ca854
}

.vl-badge--success span {
    color: #fff
}

.vl-badge--error {
    color: #fff;
    background-color: #db3434
}

.vl-badge--error span {
    color: #fff
}

.vl-badge--warning {
    background-color: #ffc515
}

.vl-badge--border {
    border: 1px solid #cbd2da
}

.vl-badge--block {
    display: block
}

.vl-badge__img {
    width: 100%;
    height: auto
}

.vl-badge--icon {
    position: relative
}

.vl-badge--icon.vl-badge--action .vl-badge__icon,
.vl-badge--icon.vl-badge--error .vl-badge__icon,
.vl-badge--icon.vl-badge--success .vl-badge__icon {
    color: #fff
}

.vl-badge--icon .vl-badge__icon {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    font-size: 1.25rem;
    line-height: 1;
    color: #333332;
    fill: #333332
}

.vl-badge--initials {
    position: relative
}

.vl-badge--initials span {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    font-size: 1.25rem;
    text-transform: uppercase;
    color: #333332;
    font-weight: 500
}

.vl-badge--initials.vl-badge--action span,
.vl-badge--initials.vl-badge--error span,
.vl-badge--initials.vl-badge--success span {
    color: #fff
}

.vl-title .vl-badge {
    margin-right: 25px;
    flex: 0 0 auto;
    vertical-align: middle
}

@media screen and (max-width:500px) {
    .vl-title .vl-badge {
        margin-right: 10px
    }
}

.vl-button {
    border-radius: 0;
    -moz-appearance: none;
    appearance: none;
    -webkit-appearance: none;
    border: 0;
    background-color: transparent;
    display: inline-flex;
    align-items: center;
    height: 3.5rem;
    font-size: 1.6rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    line-height: 3.5rem;
    padding: 0 2rem;
    background-color: #05c;
    text-decoration: none;
    border-radius: .3rem;
    color: #fff;
    text-align: center;
    outline: 0;
    max-width: 100%;
    cursor: default
}

.vl-button,
.vl-button__label {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

@media screen and (max-width:767px) {
    .vl-button {
        font-size: 1.6rem;
        padding: 0 1.5rem
    }
}

.vl-button:hover {
    background-color: #003bb0;
    text-decoration: none
}

.vl-button:active {
    background-color: #004099
}

.vl-button:focus,
.vl-button:hover,
.vl-button:visited {
    color: #fff
}

.vl-button--secondary {
    background-color: transparent;
    color: #05c;
    border: .2rem solid;
    transition: color .2s, border-color .2s, box-shadow .2s;
    line-height: 3.1rem
}

.vl-button--secondary:focus,
.vl-button--secondary:visited {
    color: #05c
}

.vl-button--secondary:active,
.vl-button--secondary:hover {
    color: #003bb0;
    background-color: transparent;
    border-color: #003bb0
}

.vl-button--tertiary {
    background-color: transparent;
    color: #05c;
    border: .1rem solid #c6cdd3;
    transition: background-color .2s, box-shadow .2s;
    line-height: 3.3rem
}

.vl-button--tertiary:visited {
    color: #05c
}

.vl-button--tertiary:focus {
    color: #05c;
    border-color: #c6cdd3
}

.vl-button--tertiary:active,
.vl-button--tertiary:hover {
    color: #05c;
    background-color: transparent;
    border-color: #5990de;
    border-width: .2rem;
    padding: 0 1.9rem;
    line-height: 3.1rem
}

@media screen and (max-width:767px) {
    .vl-button--tertiary:active,
    .vl-button--tertiary:hover {
        padding: 0 1.4rem
    }
}

.vl-button--tertiary.vl-button--loading:active,
.vl-button--tertiary.vl-button--loading:hover {
    padding: 0 7.9rem 0 3.9rem
}

@media screen and (max-width:767px) {
    .vl-button--tertiary.vl-button--loading:active,
    .vl-button--tertiary.vl-button--loading:hover {
        padding: 0 7.9rem 0 3.9rem
    }
}

.vl-button--tertiary.vl-button--loading:focus {
    color: #fff
}

.vl-button--block {
    display: flex;
    justify-content: center;
    width: 100%
}

.vl-button--block.vl-button--icon-after,
.vl-button--block.vl-button--icon-before {
    width: 100%
}

.vl-button--icon {
    width: 3.5rem
}

.vl-button--icon.vl-button {
    padding: 0
}

.vl-button--icon.vl-button .vl-button__icon {
    margin: auto
}

.vl-button--error {
    background-color: #db3434
}

.vl-button--error.vl-button--secondary {
    background-color: #fff;
    color: #db3434
}

.vl-button--error.vl-button--secondary:visited {
    color: #db3434
}

.vl-button--error.vl-button--secondary:active,
.vl-button--error.vl-button--secondary:hover {
    color: #af2929;
    border-color: #af2929;
    background-color: transparent
}

.vl-button--error.vl-button--tertiary {
    background-color: #fff;
    color: #db3434;
    border-color: #db3434
}

.vl-button--error.vl-button--tertiary:visited {
    color: #db3434
}

.vl-button--error.vl-button--tertiary:active,
.vl-button--error.vl-button--tertiary:hover {
    color: #af2929;
    border-color: #af2929;
    background-color: transparent
}

.vl-button--error:active,
.vl-button--error:hover {
    color: #fff;
    background-color: #af2929
}

.vl-button--large {
    height: 5rem;
    line-height: 5rem;
    font-size: 1.8rem
}

.vl-button--wide {
    padding: 0 6rem
}

.vl-button--narrow {
    padding: 0 1rem
}

.vl-button--narrow.vl-button--tertiary:active,
.vl-button--narrow.vl-button--tertiary:hover {
    padding: 0 .9rem
}

.vl-button--disabled {
    cursor: not-allowed
}

.vl-button--disabled,
.vl-button--disabled:active,
.vl-button--disabled:hover {
    background-color: #cbd2d9;
    border-color: #cbd2d9;
    color: #687483
}

.vl-button--loading {
    border-radius: 0;
    position: relative;
    padding: 0 8rem 0 4rem
}

.vl-button--loading,
.vl-button--loading:active,
.vl-button--loading:hover {
    background-color: #cbd2d9;
    color: #fff
}

.vl-button--loading:focus {
    color: #fff
}

.vl-button--loading:after {
    -webkit-animation: waving-light 1s linear infinite;
    animation: waving-light 1s linear infinite;
    content: "";
    display: block;
    position: absolute;
    top: 50%;
    right: 4rem;
    margin-top: -.2rem;
    margin-right: 3.2rem;
    width: .4rem;
    height: .4rem;
    background-color: #cbd2d9;
    border-radius: 50%;
    box-shadow: 1rem 0 #fff, 2rem 0 #fff, 3rem 0 #fff
}

@-webkit-keyframes waving-light {
    0% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
    10% {
        box-shadow: 10px -3px #687483, 20px 0 #687483, 30px 0 #687483
    }
    20% {
        box-shadow: 10px -6px #687483, 20px -3px #687483, 30px 0 #687483
    }
    30% {
        box-shadow: 10px -3px #687483, 20px -6px #687483, 30px -3px #687483
    }
    40% {
        box-shadow: 10px 0 #687483, 20px -3px #687483, 30px -6px #687483
    }
    50% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px -3px #687483
    }
    60% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
    to {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
}

@keyframes waving-light {
    0% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
    10% {
        box-shadow: 10px -3px #687483, 20px 0 #687483, 30px 0 #687483
    }
    20% {
        box-shadow: 10px -6px #687483, 20px -3px #687483, 30px 0 #687483
    }
    30% {
        box-shadow: 10px -3px #687483, 20px -6px #687483, 30px -3px #687483
    }
    40% {
        box-shadow: 10px 0 #687483, 20px -3px #687483, 30px -6px #687483
    }
    50% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px -3px #687483
    }
    60% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
    to {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
}

.vl-button--naked,
.vl-button--naked:active,
.vl-button--naked:focus,
.vl-button--naked:hover,
.vl-button--naked:visited {
    background-color: transparent;
    border: 0;
    color: #333332
}

.vl-button__icon {
    display: inline-flex
}

.vl-button__icon--before {
    margin-right: .8rem
}

.vl-button__icon--after {
    margin-left: .8rem
}

.vl-button-group {
    display: flex;
    flex-wrap: wrap
}

.vl-button-group .vl-button {
    margin-right: 1rem;
    margin-bottom: 1rem
}

.vl-checkbox {
    position: relative;
    display: inline-block;
    max-width: 100%
}

.vl-checkbox:not(.vl-checkbox--block):not(:last-of-type) {
    margin-right: 1.5rem
}

.vl-checkbox__label {
    display: flex;
    flex: 0 0 auto;
    font-size: 1.6rem;
    line-height: 2.4rem
}

@media screen and (max-width:767px) {
    .vl-checkbox__label {
        line-height: 2.2rem
    }
}

.vl-checkbox__label .vl-checkbox__box {
    position: relative;
    flex: 0 0 1.8rem;
    width: 1.8rem;
    height: 1.8rem;
    margin-top: .3rem;
    margin-right: 1rem;
    line-height: 1
}

.vl-checkbox__label .vl-checkbox__box:after,
.vl-checkbox__label .vl-checkbox__box:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-checkbox__label .vl-checkbox__box:before {
    content: "\f153"
}

@media screen and (max-width:767px) {
    .vl-checkbox__label .vl-checkbox__box {
        margin-top: .2rem
    }
}

.vl-checkbox__label .vl-checkbox__box:before {
    position: absolute;
    display: block;
    font-size: .8rem;
    color: #b8c1cc;
    line-height: 1;
    text-align: center;
    transform: translateZ(0) translate(-50%, -50%) scale(0);
    transition: all .2s cubic-bezier(1, .1, 0, .9);
    top: .9rem;
    left: .9rem;
    z-index: 2
}

.vl-checkbox__label .vl-checkbox__box:after {
    display: inline-block;
    content: "";
    background: #fff;
    width: 1.8rem;
    height: 1.8rem;
    border: .1rem solid #b8c1cc;
    outline: .2rem solid transparent;
    cursor: pointer;
    overflow: hidden;
    white-space: nowrap;
    transition: all .2s cubic-bezier(1, .1, 0, .9);
    z-index: 1;
    border-radius: .3rem
}

.vl-checkbox__toggle {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    width: .1rem;
    height: .1rem;
    padding: 0;
    margin: -.1rem
}

.vl-checkbox__toggle:focus+.vl-checkbox__label .vl-checkbox__box:after {
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

.vl-checkbox__toggle:checked+.vl-checkbox__label .vl-checkbox__box:before {
    transform: translateZ(0) translate(-50%, -50%) scale(1);
    color: #fff
}

.vl-checkbox__toggle:checked+.vl-checkbox__label .vl-checkbox__box:after {
    background: #05c;
    border: .1rem solid #05c
}

.vl-checkbox--block {
    display: block;
    margin: 0
}

.vl-checkbox--disabled .vl-checkbox__label {
    color: #687483
}

.vl-checkbox--disabled .vl-checkbox__label .vl-checkbox__box:after {
    background-color: #b8c1cc;
    border-color: #b8c1cc;
    cursor: auto
}

.vl-checkbox--disabled .vl-checkbox__toggle:checked+.vl-checkbox__label .vl-checkbox__box:after {
    background: #b8c1cc;
    border: .1rem solid #b8c1cc
}

.vl-checkbox--single {
    margin: 0
}

.vl-checkbox--single .vl-checkbox__label {
    padding: 0
}

.vl-checkbox--single .vl-checkbox__label .vl-checkbox__box:after {
    position: relative;
    top: auto;
    left: auto
}

.vl-checkbox--error .vl-checkbox__label .vl-checkbox__box:after,
.vl-checkbox.invalid.validated .vl-checkbox__label .vl-checkbox__box:after {
    background-color: #fff;
    border-color: #db3434
}

.vl-checkbox--error .vl-checkbox__toggle:checked+.vl-checkbox__label .vl-checkbox__box:before,
.vl-checkbox.invalid.validated .vl-checkbox__toggle:checked+.vl-checkbox__label .vl-checkbox__box:before {
    color: #db3434
}

.vl-checkbox--error .vl-checkbox__toggle:checked+.vl-checkbox__label .vl-checkbox__box:after,
.vl-checkbox.invalid.validated .vl-checkbox__toggle:checked+.vl-checkbox__label .vl-checkbox__box:after {
    background-color: #fff;
    border: .1rem solid #db3434
}

.vl-checkbox--success .vl-checkbox__label .vl-checkbox__box:after {
    background-color: #fff;
    border-color: #3ca854
}

.vl-checkbox--success .vl-checkbox__toggle:checked+.vl-checkbox__label .vl-checkbox__box:before {
    color: #3ca854
}

.vl-checkbox--success .vl-checkbox__toggle:checked+.vl-checkbox__label .vl-checkbox__box:after {
    background-color: #fff;
    border: .1rem solid #3ca854
}

.vl-checkbox--empty {
    margin-top: 0
}

.vl-checkbox--switch {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    width: .1rem;
    height: .1rem;
    padding: 0;
    margin: -.1rem
}

.vl-checkbox--switch:focus+.vl-checkbox--switch__label {
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

.vl-checkbox--switch:checked+.vl-checkbox--switch__label {
    background: #05c;
    border-color: #05c;
    position: relative
}

.vl-checkbox--switch:checked+.vl-checkbox--switch__label:before {
    margin-left: calc(50%+ .3rem);
    transform: translate(.1rem, .1rem) scale(1);
    visibility: visible;
    opacity: 1
}

.vl-checkbox--switch:checked+.vl-checkbox--switch__label:after {
    width: 2rem;
    height: 2rem;
    margin-left: 50%;
    background-color: #fff;
    border-color: #05c;
    transform: translate(-.1rem, -.1rem)
}

.vl-checkbox--switch:checked:disabled+.vl-checkbox--switch__label,
.vl-checkbox--switch:checked:disabled+.vl-checkbox--switch__label:after {
    border-color: #b8c1cc
}

.vl-checkbox--switch+.vl-checkbox--switch__label {
    position: relative;
    display: inline-block;
    width: 4rem;
    height: 2.2rem;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    vertical-align: middle;
    outline: .2rem solid transparent;
    margin: 0 .5rem 0 0;
    background: #fff;
    border: .1rem solid #b8c1cc;
    border-radius: 2em;
    padding: .1rem;
    transition: box-shadow .1s cubic-bezier(1, .1, 0, .9)
}

.vl-checkbox--switch+.vl-checkbox--switch__label:after,
.vl-checkbox--switch+.vl-checkbox--switch__label:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-checkbox--switch+.vl-checkbox--switch__label:before {
    content: "\f153";
    font-size: .8rem
}

.vl-checkbox--switch+.vl-checkbox--switch__label span {
    position: relative;
    display: block;
    width: inherit
}

.vl-checkbox--switch+.vl-checkbox--switch__label:before {
    display: block;
    position: absolute;
    left: 0;
    margin: .3rem 0 0 .3rem;
    transform: translate(.4rem, .4rem) scale(.6);
    transform-origin: 50%;
    transition: margin .2s cubic-bezier(1, .1, 0, .9), opacity .2s cubic-bezier(1, .1, 0, .9);
    opacity: 0;
    visibility: hidden;
    z-index: 2
}

.vl-checkbox--switch+.vl-checkbox--switch__label:after {
    position: relative;
    display: block;
    margin-left: 0;
    content: "";
    width: 1.8rem;
    height: 1.8rem;
    border-radius: 2em;
    background: #b8c1cc;
    border: .1rem solid #b8c1cc;
    transition: padding .3s ease, margin .2s cubic-bezier(1, .1, 0, .9)
}

.vl-checkbox--switch:disabled+.vl-checkbox--switch__label {
    background-color: #b8c1cc;
    border-color: #b8c1cc;
    cursor: default
}

.vl-checkbox--switch:disabled+.vl-checkbox--switch__label:after {
    border-color: #b8c1cc
}

.vl-checkbox__annotation {
    margin-left: auto;
    font-size: 1.5rem
}

.vl-contact-card__title,
.vl-link.vl-contact-card__title {
    font-size: 2.2rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    line-height: 1.36;
    border-radius: 0;
    -moz-appearance: none;
    appearance: none;
    -webkit-appearance: none;
    border: 0;
    background-color: transparent;
    padding: 0;
    margin-bottom: 1rem;
    display: block;
    line-height: 3rem;
    overflow: hidden
}

@media screen and (max-width:767px) {
    .vl-contact-card__title,
    .vl-link.vl-contact-card__title {
        font-size: 2rem;
        margin-bottom: 1.4rem
    }
}

.vl-contact-card__content {
    padding: 2.5rem;
    display: flex;
    flex-wrap: wrap;
    font-size: 1.6rem;
    line-height: 2rem
}

@media screen and (min-width:767px) {
    .vl-region--alt .vl-contact-card__content {
        padding: 0
    }
}

@media screen and (max-width:767px) {
    .vl-contact-card__content {
        display: block;
        font-size: 1.5rem;
        padding: 1.5rem
    }
}

.no-flexbox .vl-contact-card__content:after,
.no-flexbox .vl-contact-card__content:before {
    content: "";
    display: table
}

.no-flexbox .vl-contact-card__content:after {
    clear: both
}

.vl-contact-card__content .vl-map__container {
    height: 100%;
    margin-bottom: 0
}

.vl-contact-card__data,
.vl-contact-card__map {
    width: 50%
}

.no-flexbox .vl-contact-card__data,
.no-flexbox .vl-contact-card__map {
    float: left
}

@media screen and (max-width:767px) {
    .vl-contact-card__data,
    .vl-contact-card__map {
        width: auto
    }
}

.vl-contact-card__data {
    padding-right: 1.5rem;
    line-height: 2.4rem
}

@media screen and (max-width:767px) {
    .vl-contact-card__data {
        padding-right: 0
    }
}

.vl-contact-card__data__title {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    float: left;
    clear: left;
    width: 30%;
    padding-right: .5rem;
    margin-bottom: 1rem;
    white-space: normal;
    color: #687483
}

@media screen and (max-width:767px) {
    .vl-contact-card__data__title {
        display: none
    }
}

.vl-contact-card__data__content {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    float: left;
    width: 70%;
    margin-bottom: 2.5rem;
    white-space: normal
}

@media screen and (max-width:767px) {
    .vl-contact-card__data__content {
        float: none;
        width: auto;
        margin-bottom: 1.25rem
    }
}

.vl-contact-card__data__content *,
.vl-contact-card__data__title * {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal
}

.vl-contact-card__data__name {
    font-weight: 700
}

.vl-contact-card__map {
    height: 25rem;
    padding-left: 1.5rem;
    position: relative;
    min-height: 25rem;
    overflow: hidden
}

@media screen and (max-width:767px) {
    .vl-contact-card__map {
        padding-left: 0;
        margin-top: 2rem;
        min-height: 0
    }
}

.vl-contact-card__map .vl-map {
    width: 100%;
    height: 100%;
    border: 1px solid #cbd2da
}

@media screen and (max-width:767px) {
    .vl-contact-card__map .vl-map {
        position: relative;
        min-height: 15rem;
        height: auto
    }
}

.no-js .vl-contact-card__map {
    height: auto;
    min-height: 0
}

.no-js .vl-contact-card__map .vl-map {
    height: auto
}

.vl-contact-card__footer {
    width: 100%;
    margin-top: 2.5rem;
    padding-top: 1rem;
    border-top: 1px solid #cbd2da;
    font-size: 1.6rem;
    overflow: hidden
}

@media screen and (max-width:767px) {
    .vl-contact-card__footer {
        margin-top: 1.5rem;
        font-size: 1.6rem
    }
}

.vl-contact-card.js-vl-accordion .vl-contact-card__title {
    padding-left: 2rem;
    position: relative;
    cursor: pointer;
    margin-bottom: 0;
    transition: margin-bottom .3s
}

.vl-contact-card.js-vl-accordion .vl-contact-card__title .vl-vi {
    position: absolute;
    left: 0;
    top: 0;
    transition: transform .2s;
    color: #333332;
    font-size: 1.3rem;
    line-height: 3.2rem
}

.vl-contact-card.js-vl-accordion .vl-contact-card__content-wrapper {
    overflow: hidden;
    visibility: hidden;
    max-height: 0;
    transition: max-height .3s cubic-bezier(0, 1.05, 0, 1)
}

.vl-contact-card.js-vl-accordion .vl-contact-card__content-wrapper .vl-map {
    display: none
}

.vl-contact-card.js-vl-accordion--open .vl-contact-card__title {
    margin-bottom: 1rem
}

.vl-contact-card.js-vl-accordion--open .vl-contact-card__content-wrapper {
    max-height: 9999px;
    visibility: visible;
    transition: max-height .3s ease-in
}

.vl-contact-card.js-vl-accordion--open .vl-contact-card__content-wrapper .vl-map {
    display: block
}

.vl-contact-data .vl-infoblock .vl-annotation {
    font-size: 1.6rem
}

.vl-contact-data .vl-toggle {
    display: flex;
    align-items: center;
    box-shadow: none;
    padding-left: 0
}

.vl-contact-data .vl-toggle .vl-toggle__icon {
    font-size: 1.8rem;
    align-self: auto;
    position: absolute;
    left: 6rem;
    top: 50%;
    transform: translateY(-50%);
    margin-top: 0;
    display: block
}

@media screen and (max-width:767px) {
    .vl-contact-data .vl-toggle .vl-toggle__icon {
        left: 5rem
    }
}

.vl-contact-data .vl-toggle .vl-infoblock__header__icon {
    margin-right: 4rem
}

.vl-contact-data .vl-toggle:focus,
.vl-contact-data .vl-toggle:hover {
    box-shadow: none;
    text-decoration: none
}

.vl-contact-data .vl-toggle:focus .vl-infoblock__title,
.vl-contact-data .vl-toggle:hover .vl-infoblock__title {
    text-decoration: underline
}

.vl-contact-data .vl-toggle .vl-title {
    margin-bottom: 0;
    font-weight: 500
}

.vl-contact-data .js-vl-accordion--open .vl-accordion__content {
    margin-top: 3rem
}

@media screen and (max-width:1023px) {
    .vl-contact-data .js-vl-accordion--open .vl-accordion__content {
        margin-top: 1.5rem
    }
}

.vl-contact-data .vl-accordion__panel {
    padding-left: 6.5rem
}

@media screen and (max-width:767px) {
    .vl-contact-data .vl-accordion__panel {
        padding-left: 0
    }
}

@media screen and (max-width:1023px) {
    .vl-contact-data+.vl-contact-data:before {
        margin: 1.5rem 0
    }
}

.vl-contact-data--full-width .vl-properties--full-width {
    padding-left: 6.9rem
}

@media screen and (max-width:767px) {
    .vl-contact-data--full-width .vl-properties--full-width {
        padding-left: 0
    }
}

.flatpickr-calendar {
    background: transparent;
    opacity: 0;
    display: none;
    text-align: center;
    visibility: hidden;
    padding: 0;
    -webkit-animation: none;
    animation: none;
    direction: ltr;
    border: 0;
    font-size: 14px;
    line-height: 24px;
    border-radius: 5px;
    position: absolute;
    width: 307.875px;
    box-sizing: border-box;
    touch-action: manipulation;
    box-shadow: 0 3px 13px rgba(0, 0, 0, .08)
}

.flatpickr-calendar.inline,
.flatpickr-calendar.open {
    opacity: 1;
    max-height: 640px;
    visibility: visible
}

.flatpickr-calendar.open {
    display: inline-block;
    z-index: 99999
}

.flatpickr-calendar.animate.open {
    -webkit-animation: fpFadeInDown .3s cubic-bezier(.23, 1, .32, 1);
    animation: fpFadeInDown .3s cubic-bezier(.23, 1, .32, 1)
}

.flatpickr-calendar.inline {
    display: block;
    position: relative;
    top: 2px
}

.flatpickr-calendar.static {
    position: absolute;
    top: calc(100%+ 2px)
}

.flatpickr-calendar.static.open {
    z-index: 999;
    display: block
}

.flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+1) .flatpickr-day.inRange:nth-child(7n+7) {
    box-shadow: none!important
}

.flatpickr-calendar.multiMonth .flatpickr-days .dayContainer:nth-child(n+2) .flatpickr-day.inRange:nth-child(7n+1) {
    box-shadow: -2px 0 0 #e6e6e6, 5px 0 0 #e6e6e6
}

.flatpickr-calendar .hasTime .dayContainer,
.flatpickr-calendar .hasWeeks .dayContainer {
    border-bottom: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0
}

.flatpickr-calendar .hasWeeks .dayContainer {
    border-left: 0
}

.flatpickr-calendar.hasTime .flatpickr-time {
    height: 40px;
    border-top: 1px solid #eceef1
}

.flatpickr-calendar.hasTime .flatpickr-innerContainer {
    border-bottom: 0
}

.flatpickr-calendar.hasTime .flatpickr-time {
    border: 1px solid #eceef1
}

.flatpickr-calendar.noCalendar.hasTime .flatpickr-time {
    height: auto
}

.flatpickr-calendar:after,
.flatpickr-calendar:before {
    position: absolute;
    display: block;
    pointer-events: none;
    border: solid transparent;
    content: "";
    height: 0;
    width: 0;
    left: 22px
}

.flatpickr-calendar.arrowRight:after,
.flatpickr-calendar.arrowRight:before,
.flatpickr-calendar.rightMost:after,
.flatpickr-calendar.rightMost:before {
    left: auto;
    right: 22px
}

.flatpickr-calendar.arrowCenter:after,
.flatpickr-calendar.arrowCenter:before {
    left: 50%;
    right: 50%
}

.flatpickr-calendar:before {
    border-width: 5px;
    margin: 0 -5px
}

.flatpickr-calendar:after {
    border-width: 4px;
    margin: 0 -4px
}

.flatpickr-calendar.arrowTop:after,
.flatpickr-calendar.arrowTop:before {
    bottom: 100%;
    border-bottom-color: #eceef1
}

.flatpickr-calendar.arrowBottom:after,
.flatpickr-calendar.arrowBottom:before {
    top: 100%;
    border-top-color: #eceef1
}

.flatpickr-calendar:focus {
    outline: 0
}

.flatpickr-wrapper {
    position: relative;
    display: inline-block
}

.flatpickr-months {
    display: flex
}

.flatpickr-months .flatpickr-month {
    border-radius: 5px 5px 0 0;
    background: #eceef1;
    color: #5a6171;
    fill: #5a6171;
    height: 34px;
    line-height: 1;
    text-align: center;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    overflow: hidden;
    flex: 1
}

.flatpickr-months .flatpickr-next-month,
.flatpickr-months .flatpickr-prev-month {
    text-decoration: none;
    cursor: pointer;
    position: absolute;
    top: 0;
    height: 34px;
    padding: 10px;
    z-index: 3;
    color: #5a6171;
    fill: #5a6171
}

.flatpickr-months .flatpickr-next-month.flatpickr-disabled,
.flatpickr-months .flatpickr-prev-month.flatpickr-disabled {
    display: none
}

.flatpickr-months .flatpickr-next-month i,
.flatpickr-months .flatpickr-prev-month i {
    position: relative
}

.flatpickr-months .flatpickr-next-month.flatpickr-prev-month,
.flatpickr-months .flatpickr-prev-month.flatpickr-prev-month {
    left: 0
}

.flatpickr-months .flatpickr-next-month.flatpickr-next-month,
.flatpickr-months .flatpickr-prev-month.flatpickr-next-month {
    right: 0
}

.flatpickr-months .flatpickr-next-month:hover,
.flatpickr-months .flatpickr-prev-month:hover {
    color: #bbb
}

.flatpickr-months .flatpickr-next-month:hover svg,
.flatpickr-months .flatpickr-prev-month:hover svg {
    fill: #f64747
}

.flatpickr-months .flatpickr-next-month svg,
.flatpickr-months .flatpickr-prev-month svg {
    width: 14px;
    height: 14px
}

.flatpickr-months .flatpickr-next-month svg path,
.flatpickr-months .flatpickr-prev-month svg path {
    transition: fill .1s;
    fill: inherit
}

.numInputWrapper {
    position: relative;
    height: auto
}

.numInputWrapper input,
.numInputWrapper span {
    display: inline-block
}

.numInputWrapper input {
    width: 100%
}

.numInputWrapper input::-ms-clear {
    display: none
}

.numInputWrapper input::-webkit-inner-spin-button,
.numInputWrapper input::-webkit-outer-spin-button {
    margin: 0;
    -webkit-appearance: none
}

.numInputWrapper span {
    position: absolute;
    right: 0;
    width: 14px;
    padding: 0 4px 0 2px;
    height: 50%;
    line-height: 50%;
    opacity: 0;
    cursor: pointer;
    border: 1px solid rgba(72, 72, 72, .15);
    box-sizing: border-box
}

.numInputWrapper span:hover {
    background: rgba(0, 0, 0, .1)
}

.numInputWrapper span:active {
    background: rgba(0, 0, 0, .2)
}

.numInputWrapper span:after {
    display: block;
    content: "";
    position: absolute
}

.numInputWrapper span.arrowUp {
    top: 0;
    border-bottom: 0
}

.numInputWrapper span.arrowUp:after {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-bottom: 4px solid rgba(72, 72, 72, .6);
    top: 26%
}

.numInputWrapper span.arrowDown {
    top: 50%
}

.numInputWrapper span.arrowDown:after {
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    border-top: 4px solid rgba(72, 72, 72, .6);
    top: 40%
}

.numInputWrapper span svg {
    width: inherit;
    height: auto
}

.numInputWrapper span svg path {
    fill: rgba(90, 97, 113, .5)
}

.numInputWrapper:hover {
    background: rgba(0, 0, 0, .05)
}

.numInputWrapper:hover span {
    opacity: 1
}

.flatpickr-current-month {
    font-size: 135%;
    line-height: inherit;
    font-weight: 300;
    color: inherit;
    position: absolute;
    width: 75%;
    left: 12.5%;
    padding: 7.48px 0 0;
    line-height: 1;
    height: 34px;
    display: inline-block;
    text-align: center;
    transform: translateZ(0)
}

.flatpickr-current-month span.cur-month {
    font-family: inherit;
    font-weight: 700;
    color: inherit;
    display: inline-block;
    margin-left: .5ch;
    padding: 0
}

.flatpickr-current-month span.cur-month:hover {
    background: rgba(0, 0, 0, .05)
}

.flatpickr-current-month .numInputWrapper {
    width: 6ch;
    width: 7ch\0;
    display: inline-block
}

.flatpickr-current-month .numInputWrapper span.arrowUp:after {
    border-bottom-color: #5a6171
}

.flatpickr-current-month .numInputWrapper span.arrowDown:after {
    border-top-color: #5a6171
}

.flatpickr-current-month input.cur-year {
    background: transparent;
    box-sizing: border-box;
    color: inherit;
    cursor: text;
    padding: 0 0 0 .5ch;
    margin: 0;
    display: inline-block;
    font-size: inherit;
    font-family: inherit;
    font-weight: 300;
    line-height: inherit;
    height: auto;
    border: 0;
    border-radius: 0;
    vertical-align: baseline;
    vertical-align: initial;
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield
}

.flatpickr-current-month input.cur-year:focus {
    outline: 0
}

.flatpickr-current-month input.cur-year[disabled],
.flatpickr-current-month input.cur-year[disabled]:hover {
    font-size: 100%;
    color: rgba(90, 97, 113, .5);
    background: transparent;
    pointer-events: none
}

.flatpickr-current-month .flatpickr-monthDropdown-months {
    appearance: menulist;
    background: #eceef1;
    border: none;
    box-sizing: border-box;
    color: inherit;
    cursor: pointer;
    font-size: inherit;
    font-family: inherit;
    font-weight: 300;
    height: auto;
    line-height: inherit;
    margin: -1px 0 0;
    outline: none;
    padding: 0 0 0 .5ch;
    position: relative;
    vertical-align: baseline;
    vertical-align: initial;
    -webkit-box-sizing: border-box;
    -webkit-appearance: menulist;
    -moz-appearance: menulist;
    width: auto
}

.flatpickr-current-month .flatpickr-monthDropdown-months:active,
.flatpickr-current-month .flatpickr-monthDropdown-months:focus {
    outline: none
}

.flatpickr-current-month .flatpickr-monthDropdown-months:hover {
    background: rgba(0, 0, 0, .05)
}

.flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month {
    background-color: #eceef1;
    outline: none;
    padding: 0
}

.flatpickr-weekdays {
    background: #eceef1;
    text-align: center;
    overflow: hidden;
    width: 100%;
    display: flex;
    align-items: center;
    height: 28px
}

.flatpickr-weekdays .flatpickr-weekdaycontainer {
    display: flex;
    flex: 1
}

span.flatpickr-weekday {
    cursor: default;
    font-size: 90%;
    background: #eceef1;
    color: #5a6171;
    line-height: 1;
    margin: 0;
    text-align: center;
    display: block;
    flex: 1;
    font-weight: bolder
}

.dayContainer,
.flatpickr-weeks {
    padding: 1px 0 0
}

.flatpickr-days {
    position: relative;
    overflow: hidden;
    display: flex;
    align-items: flex-start;
    width: 307.875px;
    border-left: 1px solid #eceef1;
    border-right: 1px solid #eceef1
}

.flatpickr-days:focus {
    outline: 0
}

.dayContainer {
    padding: 0;
    outline: 0;
    text-align: left;
    width: 307.875px;
    min-width: 307.875px;
    max-width: 307.875px;
    box-sizing: border-box;
    display: inline-block;
    display: flex;
    flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    justify-content: space-around;
    transform: translateZ(0);
    opacity: 1
}

.dayContainer+.dayContainer {
    box-shadow: -1px 0 0 #eceef1
}

.flatpickr-day {
    background: none;
    border: 1px solid transparent;
    border-radius: 150px;
    box-sizing: border-box;
    color: #484848;
    cursor: pointer;
    font-weight: 400;
    width: 14.2857143%;
    flex-basis: 14.2857143%;
    max-width: 39px;
    height: 39px;
    line-height: 39px;
    margin: 0;
    display: inline-block;
    position: relative;
    justify-content: center;
    text-align: center
}

.flatpickr-day.inRange,
.flatpickr-day.nextMonthDay.inRange,
.flatpickr-day.nextMonthDay.today.inRange,
.flatpickr-day.nextMonthDay:focus,
.flatpickr-day.nextMonthDay:hover,
.flatpickr-day.prevMonthDay.inRange,
.flatpickr-day.prevMonthDay.today.inRange,
.flatpickr-day.prevMonthDay:focus,
.flatpickr-day.prevMonthDay:hover,
.flatpickr-day.today.inRange,
.flatpickr-day:focus,
.flatpickr-day:hover {
    cursor: pointer;
    outline: 0;
    background: #e2e2e2;
    border-color: #e2e2e2
}

.flatpickr-day.today {
    border-color: #bbb
}

.flatpickr-day.today:focus,
.flatpickr-day.today:hover {
    border-color: #bbb;
    background: #bbb;
    color: #fff
}

.flatpickr-day.endRange,
.flatpickr-day.endRange.inRange,
.flatpickr-day.endRange.nextMonthDay,
.flatpickr-day.endRange.prevMonthDay,
.flatpickr-day.endRange:focus,
.flatpickr-day.endRange:hover,
.flatpickr-day.selected,
.flatpickr-day.selected.inRange,
.flatpickr-day.selected.nextMonthDay,
.flatpickr-day.selected.prevMonthDay,
.flatpickr-day.selected:focus,
.flatpickr-day.selected:hover,
.flatpickr-day.startRange,
.flatpickr-day.startRange.inRange,
.flatpickr-day.startRange.nextMonthDay,
.flatpickr-day.startRange.prevMonthDay,
.flatpickr-day.startRange:focus,
.flatpickr-day.startRange:hover {
    background: #ff5a5f;
    box-shadow: none;
    color: #fff;
    border-color: #ff5a5f
}

.flatpickr-day.endRange.startRange,
.flatpickr-day.selected.startRange,
.flatpickr-day.startRange.startRange {
    border-radius: 50px 0 0 50px
}

.flatpickr-day.endRange.endRange,
.flatpickr-day.selected.endRange,
.flatpickr-day.startRange.endRange {
    border-radius: 0 50px 50px 0
}

.flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)),
.flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)),
.flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)) {
    box-shadow: -10px 0 0 #ff5a5f
}

.flatpickr-day.endRange.startRange.endRange,
.flatpickr-day.selected.startRange.endRange,
.flatpickr-day.startRange.startRange.endRange {
    border-radius: 50px
}

.flatpickr-day.inRange {
    border-radius: 0;
    box-shadow: -5px 0 0 #e2e2e2, 5px 0 0 #e2e2e2
}

.flatpickr-day.flatpickr-disabled,
.flatpickr-day.flatpickr-disabled:hover,
.flatpickr-day.nextMonthDay,
.flatpickr-day.notAllowed,
.flatpickr-day.notAllowed.nextMonthDay,
.flatpickr-day.notAllowed.prevMonthDay,
.flatpickr-day.prevMonthDay {
    color: rgba(72, 72, 72, .3);
    background: transparent;
    border-color: transparent;
    cursor: default
}

.flatpickr-day.flatpickr-disabled,
.flatpickr-day.flatpickr-disabled:hover {
    cursor: not-allowed;
    color: rgba(72, 72, 72, .1)
}

.flatpickr-day.week.selected {
    border-radius: 0;
    box-shadow: -5px 0 0 #ff5a5f, 5px 0 0 #ff5a5f
}

.flatpickr-day.hidden {
    visibility: hidden
}

.rangeMode .flatpickr-day {
    margin-top: 1px
}

.flatpickr-weekwrapper {
    float: left
}

.flatpickr-weekwrapper .flatpickr-weeks {
    padding: 0 12px;
    border-left: 1px solid #eceef1
}

.flatpickr-weekwrapper .flatpickr-weekday {
    float: none;
    width: 100%;
    line-height: 28px
}

.flatpickr-weekwrapper span.flatpickr-day,
.flatpickr-weekwrapper span.flatpickr-day:hover {
    display: block;
    width: 100%;
    max-width: none;
    color: rgba(72, 72, 72, .3);
    background: transparent;
    cursor: default;
    border: none
}

.flatpickr-innerContainer {
    display: block;
    display: flex;
    box-sizing: border-box;
    overflow: hidden;
    background: #fff;
    border-bottom: 1px solid #eceef1
}

.flatpickr-rContainer {
    display: inline-block;
    padding: 0;
    box-sizing: border-box
}

.flatpickr-time {
    text-align: center;
    outline: 0;
    display: block;
    height: 0;
    line-height: 40px;
    max-height: 40px;
    box-sizing: border-box;
    overflow: hidden;
    display: flex;
    background: #fff;
    border-radius: 0 0 5px 5px
}

.flatpickr-time:after {
    content: "";
    display: table;
    clear: both
}

.flatpickr-time .numInputWrapper {
    flex: 1;
    width: 40%;
    height: 40px;
    float: left
}

.flatpickr-time .numInputWrapper span.arrowUp:after {
    border-bottom-color: #484848
}

.flatpickr-time .numInputWrapper span.arrowDown:after {
    border-top-color: #484848
}

.flatpickr-time.hasSeconds .numInputWrapper {
    width: 26%
}

.flatpickr-time.time24hr .numInputWrapper {
    width: 49%
}

.flatpickr-time input {
    background: transparent;
    box-shadow: none;
    border: 0;
    border-radius: 0;
    text-align: center;
    margin: 0;
    padding: 0;
    height: inherit;
    line-height: inherit;
    color: #484848;
    font-size: 14px;
    position: relative;
    box-sizing: border-box;
    -webkit-appearance: textfield;
    -moz-appearance: textfield;
    appearance: textfield
}

.flatpickr-time input.flatpickr-hour {
    font-weight: 700
}

.flatpickr-time input.flatpickr-minute,
.flatpickr-time input.flatpickr-second {
    font-weight: 400
}

.flatpickr-time input:focus {
    outline: 0;
    border: 0
}

.flatpickr-time .flatpickr-am-pm,
.flatpickr-time .flatpickr-time-separator {
    height: inherit;
    float: left;
    line-height: inherit;
    color: #484848;
    font-weight: 700;
    width: 2%;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    align-self: center
}

.flatpickr-time .flatpickr-am-pm {
    outline: 0;
    width: 18%;
    cursor: pointer;
    text-align: center;
    font-weight: 400
}

.flatpickr-time .flatpickr-am-pm:focus,
.flatpickr-time .flatpickr-am-pm:hover,
.flatpickr-time input:focus,
.flatpickr-time input:hover {
    background: #eaeaea
}

.flatpickr-input[readonly] {
    cursor: pointer
}

@-webkit-keyframes fpFadeInDown {
    0% {
        opacity: 0;
        transform: translate3d(0, -20px, 0)
    }
    to {
        opacity: 1;
        transform: translateZ(0)
    }
}

@keyframes fpFadeInDown {
    0% {
        opacity: 0;
        transform: translate3d(0, -20px, 0)
    }
    to {
        opacity: 1;
        transform: translateZ(0)
    }
}

span.flatpickr-day.selected {
    font-weight: 700
}

.flatpickr-calendar {
    background: #fff;
    border-radius: .3rem;
    border: .1rem solid #687483;
    box-shadow: none;
    margin-top: .5rem
}

.flatpickr-calendar.arrowBottom:after,
.flatpickr-calendar.arrowBottom:before,
.flatpickr-calendar.arrowTop:after,
.flatpickr-calendar.arrowTop:before {
    display: none
}

.flatpickr-calendar .numInput[type=number],
.flatpickr-calendar input[type=number] {
    -moz-appearance: textfield
}

.flatpickr-calendar .numInput[type=number]::-webkit-inner-spin-button,
.flatpickr-calendar .numInput[type=number]::-webkit-outer-spin-button,
.flatpickr-calendar input[type=number]::-webkit-inner-spin-button,
.flatpickr-calendar input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0
}

.flatpickr-innerContainer {
    border-bottom: 0
}

.flatpickr-days {
    border: 0;
    margin-bottom: 1.5rem
}

.dayContainer {
    padding: 0 1.5rem
}

.flatpickr-day {
    font-size: 1.6rem;
    line-height: 3rem;
    height: 3rem;
    max-width: 3rem;
    margin: .45rem
}

.flatpickr-day.today {
    border: 0
}

.flatpickr-calendar.mark-today .flatpickr-day.today:not(.selected) {
    background: #f4f4f4
}

.flatpickr-day.nextMonthDay,
.flatpickr-day.prevMonthDay {
    color: #80807d
}

.flatpickr-day.inRange.today {
    background-color: #05c;
    font-weight: 500
}

.flatpickr-day.inRange.today:after {
    top: 0;
    right: 1.6rem
}

.flatpickr-day.endRange,
.flatpickr-day.endRange.nextMonthDay,
.flatpickr-day.endRange.prevMonthDay,
.flatpickr-day.selected,
.flatpickr-day.selected.nextMonthDay,
.flatpickr-day.selected.prevMonthDay,
.flatpickr-day.startRange,
.flatpickr-day.startRange.nextMonthDay,
.flatpickr-day.startRange.prevMonthDay {
    background-color: #05c;
    border-color: #05c
}

.flatpickr-day.endRange.inRange,
.flatpickr-day.endRange.selected,
.flatpickr-day.selected.inRange,
.flatpickr-day.selected.selected,
.flatpickr-day.startRange.inRange,
.flatpickr-day.startRange.selected {
    background: #05c;
    border-color: #05c;
    border-radius: 50%;
    color: #fff;
    font-weight: 500
}

.flatpickr-day.endRange:after,
.flatpickr-day.selected:after,
.flatpickr-day.startRange:after {
    content: "";
    display: block;
    width: 3rem;
    height: 3rem;
    position: absolute;
    top: -.1rem;
    background: #80aae6;
    z-index: -1
}

.flatpickr-day.startRange:after {
    left: 1.5rem
}

.flatpickr-day.endRange:after {
    right: 1.5rem
}

.flatpickr-day:not(.inRange)+.flatpickr-day.selected:not(.startRange):after {
    display: none
}

.flatpickr-day.endRange.startRange+.endRange,
.flatpickr-day.startRange.startRange+.endRange {
    box-shadow: none
}

.flatpickr-day.inRange,
.flatpickr-day.nextMonthDay.inRange,
.flatpickr-day.prevMonthDay.inRange {
    background: #80aae6;
    box-shadow: -5px 0 0 #80aae6, 5px 0 0 #80aae6;
    border-color: #80aae6
}

.flatpickr-day.inRange.endRange,
.flatpickr-day.inRange.startRange,
.flatpickr-day.nextMonthDay.inRange.endRange,
.flatpickr-day.nextMonthDay.inRange.startRange,
.flatpickr-day.prevMonthDay.inRange.endRange,
.flatpickr-day.prevMonthDay.inRange.startRange {
    box-shadow: none
}

.flatpickr-day:focus,
.flatpickr-day:hover {
    color: #333332!important;
    background: #e6eefa!important;
    border-color: transparent!important;
    font-weight: 400
}

.flatpickr-day.endRange.startRange+.endRange:not(:nth-child(7n+1)),
.flatpickr-day.selected.startRange+.endRange:not(:nth-child(7n+1)),
.flatpickr-day.startRange.startRange+.endRange:not(:nth-child(7n+1)) {
    box-shadow: -10px 0 0 #80aae6
}

.flatpickr-months {
    position: relative
}

.flatpickr-months .flatpickr-month {
    border-radius: 0;
    background: 0;
    border-bottom: 1px solid #cbd2da;
    height: 5.5rem
}

.flatpickr-weekdays {
    background: 0;
    padding: 2rem 1.5rem
}

.flatpickr-weekdays span.flatpickr-weekday {
    background: 0;
    font-size: 100%;
    color: inherit
}

.flatpickr-current-month {
    font-size: 125%;
    color: #333332;
    padding-top: 0;
    position: relative;
    top: 50%;
    transform: translateY(-50%);
    left: 0;
    right: 0;
    line-height: 3rem
}

.flatpickr-current-month .flatpickr-monthDropdown-months {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border: 0;
    border-radius: 0;
    font-size: 1.8rem;
    font-weight: 500;
    font-family: Flanders Art Sans, sans-serif;
    color: #05c;
    background: transparent
}

.flatpickr-current-month .flatpickr-monthDropdown-months:hover {
    background: none
}

.flatpickr-current-month input.cur-year,
.flatpickr-current-month span.cur-year {
    font-weight: 500;
    color: #05c
}

.flatpickr-months .flatpickr-next-month,
.flatpickr-months .flatpickr-prev-month {
    border-radius: 50%;
    width: 3.5rem;
    height: 3.5rem;
    top: 50%;
    transform: translateY(-50%)
}

.flatpickr-months .flatpickr-next-month svg,
.flatpickr-months .flatpickr-prev-month svg {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 0;
    right: 0;
    margin: auto;
    fill: #05c;
    stroke: #05c;
    stroke-width: .15rem;
    width: 1.2rem;
    height: 1.2rem
}

.flatpickr-months .flatpickr-prev-month.flatpickr-prev-month {
    left: 10px
}

.flatpickr-months .flatpickr-next-month.flatpickr-next-month {
    right: 10px
}

.numInputWrapper:hover {
    background-color: transparent
}

.vl-datepicker.validated.invalid .vl-datepicker__input-addon,
.vl-datepicker.validated.invalid .vl-datepicker__input-field {
    border-color: #db3434;
    background-color: #fbebeb
}

.vl-datepicker.validated.valid .vl-datepicker__input-addon,
.vl-datepicker.validated.valid .vl-datepicker__input-field {
    border-color: #3ca854;
    background-color: #ecf6ee
}

.vl-description-data__label,
.vl-description-data__subdata {
    display: block;
    font-size: 1.6rem;
    font-weight: 400;
    color: #687483;
    margin-bottom: .8rem
}

@media screen and (max-width:767px) {
    .vl-description-data__label,
    .vl-description-data__subdata {
        font-size: 1.4rem
    }
}

.vl-description-data__subdata {
    margin-top: .8rem;
    margin-bottom: 0
}

.vl-description-data__data,
.vl-description-data__value {
    display: block;
    font-size: 1.8rem;
    font-weight: 500;
    color: #333332
}

@media screen and (max-width:767px) {
    .vl-description-data__data,
    .vl-description-data__value {
        font-size: 1.6rem
    }
}

.vl-description-data__icon,
.vl-description-data__icon.vl-icon {
    position: absolute;
    font-size: 2.2rem;
    color: #687483;
    top: -.4rem;
    left: 0
}

@media screen and (max-width:767px) {
    .vl-description-data__icon,
    .vl-description-data__icon.vl-icon {
        font-size: 1.8rem;
        top: -.2rem
    }
}

.vl-description-data__icon-wrapper,
.vl-description-data__icon.vl-icon-wrapper {
    position: relative;
    padding: 0 0 0 4rem
}

@media screen and (max-width:767px) {
    .vl-description-data__icon-wrapper,
    .vl-description-data__icon.vl-icon-wrapper {
        padding: 0 0 0 3rem
    }
}

.vl-description-data__icon-wrapper--top,
.vl-description-data__icon.vl-icon-wrapper--top {
    padding: 5rem 0 0
}

.vl-description-data__icon-wrapper--top .vl-description-data__icon,
.vl-description-data__icon.vl-icon-wrapper--top .vl-description-data__icon {
    font-size: 3.2rem
}

.vl-description-data--bordered {
    padding: 3rem 0
}

.vl-description-data--bordered:after {
    content: "";
    width: 100%;
    display: block;
    height: 3rem;
    background-position: bottom
}

.vl-document {
    display: flex;
    align-items: center;
    text-decoration: none
}

.vl-document:after,
.vl-document:before {
    content: "";
    display: table
}

.vl-document:after {
    clear: both
}

.vl-document__type {
    min-height: 6rem;
    margin-right: 2rem;
    position: relative;
    padding: 3rem 0 0 2rem
}

.vl-document__type .vl-vi {
    font-size: 5.5rem;
    position: absolute;
    left: -.5rem;
    transform: translateY(-50%);
    color: #b2b2b2
}

.vl-document__type__text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block;
    position: relative;
    border: .2rem solid #b2b2b2;
    border-radius: .2rem;
    width: 4.3rem;
    font-size: 1.2rem;
    line-height: 1;
    color: #4d4d4b;
    background-color: #fff;
    text-align: center
}

.vl-document__content {
    overflow: hidden
}

.vl-document__title {
    font-weight: 500;
    line-height: 1.25
}

.vl-document__metadata {
    display: block;
    color: #4d4d4b;
    font-size: 1.6rem;
    margin-top: .6rem
}

@media screen and (max-width:767px) {
    .vl-document__metadata {
        font-size: 1.4rem
    }
}

.vl-form__label {
    font-size: 1.6rem;
    color: #4d4d4b;
    display: inline-block;
    line-height: 1;
    font-weight: 500;
    margin-right: .5rem;
    margin-bottom: .7rem
}

@media screen and (max-width:767px) {
    .vl-form__label {
        font-size: 1.6rem
    }
}

.vl-form__label--block {
    display: block;
    margin-right: 0;
    margin-bottom: .7rem
}

.vl-form__label--offset {
    margin-top: 1rem
}

.vl-form__label--light {
    color: #687483
}

.vl-form__label__message {
    font-weight: 400;
    color: #687483;
    font-size: 1.4rem;
    line-height: 2rem
}

.vl-form__label--standalone {
    margin-bottom: 0
}

.vl-form__error,
.vl-form__success {
    font-size: 1.6rem;
    font-weight: 500;
    color: #4d4d4b;
    font-size: 1.4rem;
    color: #db3434;
    margin-bottom: .5rem
}

@media screen and (max-width:767px) {
    .vl-form__error,
    .vl-form__success {
        font-size: 1.6rem
    }
}

.vl-form__error--block,
.vl-form__success--block {
    display: block
}

.vl-form__error .vl-vi,
.vl-form__success .vl-vi {
    margin-left: .5rem;
    font-size: .8rem
}

.vl-form__error {
    color: #db3434
}

.vl-form__success {
    color: #3ca854
}

.vl-form__annotation {
    font-size: 1.6rem;
    font-weight: 500;
    color: #4d4d4b;
    font-size: 1.4rem;
    line-height: 2rem;
    font-weight: 400
}

@media screen and (max-width:767px) {
    .vl-form__annotation {
        font-size: 1.6rem;
        font-size: 1.3rem
    }
}

.vl-form__annotation--block {
    display: block
}

.vl-form {
    font-size: 1.6rem
}

@media screen and (max-width:767px) {
    .vl-form {
        font-size: 1.6rem
    }
}

.vl-form__group {
    background-color: #f7f9fc;
    padding: 2rem 1.5rem;
    margin: 2rem 0 0
}

@media screen and (max-width:767px) {
    .vl-form__group {
        padding: 1.5rem 1rem
    }
}

@media screen and (max-width:767px) {
    .vl-form__group--mobile-full-width {
        padding-left: 3%;
        padding-right: 3%;
        position: relative;
        width: 100vw;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw
    }
}

.vl-form__row+.vl-form__row {
    margin-top: 1.5rem
}

@media screen and (max-width:767px) {
    .vl-form__row .vl-form__row__group+.vl-form__row__group {
        margin-top: 1.5rem
    }
}

.vl-form__row--addon {
    display: flex;
    flex-direction: row
}

.vl-form__row--addon .vl-form__addon {
    flex-grow: 0
}

.vl-form__row--inline {
    display: flex;
    margin-left: -3rem
}

.vl-form__row--inline:after,
.vl-form__row--inline:before {
    content: "";
    display: table
}

.vl-form__row--inline:after {
    clear: both
}

@media screen and (max-width:767px) {
    .vl-form__row--inline {
        display: block;
        margin-left: -1.5rem
    }
}

.vl-form__row--inline .vl-form__label {
    float: left;
    width: 25%;
    min-width: 25%;
    max-width: 25%;
    flex-basis: 25%;
    overflow: hidden;
    text-overflow: ellipsis;
    padding-top: .4rem;
    padding-left: 3rem
}

@media screen and (max-width:767px) {
    .vl-form__row--inline .vl-form__label {
        display: block;
        width: auto;
        max-width: none;
        padding-left: 1.5rem
    }
}

.vl-form__row--inline .vl-form__input {
    float: right;
    width: 75%;
    margin-left: 3rem
}

@media screen and (max-width:767px) {
    .vl-form__row--inline .vl-form__input {
        width: auto;
        margin-left: 1.5rem
    }
}

.vl-form__row--inline .vl-form__input .vl-checkbox,
.vl-form__row--inline .vl-form__input .vl-radio,
.vl-form__row--inline .vl-form__input input[type=file] {
    margin-top: .6rem
}

@media screen and (max-width:767px) {
    .vl-form__row--inline .vl-form__input,
    .vl-form__row--inline .vl-form__label {
        float: none;
        width: auto
    }
}

.vl-gallery {
    font-size: 0
}

a.vl-gallery__item__image {
    cursor: pointer
}

.vl-gallery__item {
    position: relative;
    display: inline-block
}

.vl-gallery__item__image-wrapper {
    display: block;
    margin: .1rem;
    position: relative;
    overflow: hidden
}

.vl-gallery__item__image-wrapper .vl-gallery__item__image {
    position: absolute;
    top: -9999px;
    bottom: -9999px;
    left: -9999px;
    right: -9999px;
    margin: auto;
    width: auto;
    height: auto;
    min-width: 100%;
    min-height: 100%;
    display: block;
    max-width: none
}

@supports ((-o-object-fit:cover) or (object-fit:cover)) {
    .vl-gallery__item__image-wrapper .vl-gallery__item__image {
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0
    }
}

.vl-gallery__item--more .vl-gallery__item__image-wrapper {
    position: relative
}

.vl-gallery__item--more .vl-gallery__item__image-wrapper:after {
    z-index: 1;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .5)
}

.vl-gallery__item__count {
    z-index: 2;
    font-weight: 300;
    color: #fff;
    text-align: center;
    position: absolute;
    top: calc(50% - 1.5rem);
    left: 0;
    right: 0;
    line-height: 100%;
    font-size: 3rem
}

.vl-gallery--teaser-a .vl-gallery__item:nth-child(5n+1),
.vl-gallery--teaser-a .vl-gallery__item:nth-child(5n+2) {
    width: 50%
}

.vl-gallery--teaser-a .vl-gallery__item:nth-child(5n+1) .vl-gallery__item__image-wrapper,
.vl-gallery--teaser-a .vl-gallery__item:nth-child(5n+2) .vl-gallery__item__image-wrapper {
    padding-top: 64%
}

.vl-gallery--teaser-a .vl-gallery__item:nth-child(5n+3),
.vl-gallery--teaser-a .vl-gallery__item:nth-child(5n+4),
.vl-gallery--teaser-a .vl-gallery__item:nth-child(5n+5) {
    width: 33.33333%
}

.vl-gallery--teaser-a .vl-gallery__item:nth-child(5n+3) .vl-gallery__item__image-wrapper,
.vl-gallery--teaser-a .vl-gallery__item:nth-child(5n+4) .vl-gallery__item__image-wrapper,
.vl-gallery--teaser-a .vl-gallery__item:nth-child(5n+5) .vl-gallery__item__image-wrapper {
    padding-top: 100%
}

.vl-gallery--teaser-b .vl-gallery__item:nth-child(4n+1) {
    width: 100%
}

.vl-gallery--teaser-b .vl-gallery__item:nth-child(4n+1) .vl-gallery__item__image-wrapper {
    padding-top: 64%
}

.vl-gallery--teaser-b .vl-gallery__item:nth-child(4n+2),
.vl-gallery--teaser-b .vl-gallery__item:nth-child(4n+3),
.vl-gallery--teaser-b .vl-gallery__item:nth-child(4n+4) {
    width: 33.33333%
}

.vl-gallery--teaser-b .vl-gallery__item:nth-child(4n+2) .vl-gallery__item__image-wrapper,
.vl-gallery--teaser-b .vl-gallery__item:nth-child(4n+3) .vl-gallery__item__image-wrapper,
.vl-gallery--teaser-b .vl-gallery__item:nth-child(4n+4) .vl-gallery__item__image-wrapper {
    padding-top: 100%
}

.vl-gallery--teaser-c .vl-gallery__item:nth-child(4n+1) {
    width: 66.66667%;
    float: left
}

.vl-gallery--teaser-c .vl-gallery__item:nth-child(4n+1) .vl-gallery__item__image-wrapper {
    padding-top: calc(150%+ .4rem)
}

.vl-gallery--teaser-c .vl-gallery__item:nth-child(4n+2),
.vl-gallery--teaser-c .vl-gallery__item:nth-child(4n+3),
.vl-gallery--teaser-c .vl-gallery__item:nth-child(4n+4) {
    width: 33.33333%
}

.vl-gallery--teaser-c .vl-gallery__item:nth-child(4n+2) .vl-gallery__item__image-wrapper,
.vl-gallery--teaser-c .vl-gallery__item:nth-child(4n+3) .vl-gallery__item__image-wrapper,
.vl-gallery--teaser-c .vl-gallery__item:nth-child(4n+4) .vl-gallery__item__image-wrapper {
    padding-top: 100%
}

.vl-gallery--slider .vl-gallery__item {
    width: 20rem
}

.vl-gallery--slider .vl-gallery__item .vl-gallery__item__image-wrapper {
    padding-top: 100%
}

@media screen and (max-width:1023px) {
    .vl-gallery--slider .vl-gallery__item {
        width: 15rem
    }
}

@media screen and (max-width:767px) {
    .vl-gallery--slider .vl-gallery__item {
        width: 10rem
    }
}

.vl-gallery__viewer {
    display: none;
    position: relative;
    background-color: #f7f9fc;
    margin-bottom: 2rem;
    padding-top: 54%
}

@media screen and (max-width:1023px) {
    .vl-gallery__viewer {
        padding-top: 64%;
        margin-bottom: 1rem
    }
}

.vl-gallery__viewer:before {
    -webkit-animation: "waving-dark" 1s linear infinite;
    animation: "waving-dark" 1s linear infinite;
    content: "";
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -2px;
    margin-left: -22px;
    width: 4px;
    height: 4px;
    border-radius: 50%
}

@-webkit-keyframes waving-dark {
    0% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
    10% {
        box-shadow: 10px -3px #687483, 20px 0 #687483, 30px 0 #687483
    }
    20% {
        box-shadow: 10px -6px #687483, 20px -3px #687483, 30px 0 #687483
    }
    30% {
        box-shadow: 10px -3px #687483, 20px -6px #687483, 30px -3px #687483
    }
    40% {
        box-shadow: 10px 0 #687483, 20px -3px #687483, 30px -6px #687483
    }
    50% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px -3px #687483
    }
    60% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
    to {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
}

@keyframes waving-dark {
    0% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
    10% {
        box-shadow: 10px -3px #687483, 20px 0 #687483, 30px 0 #687483
    }
    20% {
        box-shadow: 10px -6px #687483, 20px -3px #687483, 30px 0 #687483
    }
    30% {
        box-shadow: 10px -3px #687483, 20px -6px #687483, 30px -3px #687483
    }
    40% {
        box-shadow: 10px 0 #687483, 20px -3px #687483, 30px -6px #687483
    }
    50% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px -3px #687483
    }
    60% {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
    to {
        box-shadow: 10px 0 #687483, 20px 0 #687483, 30px 0 #687483
    }
}

.js .vl-gallery__viewer {
    display: block
}

.vl-gallery__viewer__img {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    max-width: 100%;
    max-height: 100%;
    width: auto;
    height: auto
}

.vl-icon-list__item {
    padding-left: 3rem;
    margin-bottom: 1rem;
    position: relative;
    line-height: 1.3
}

.vl-icon-list__item .vl-vi {
    font-size: 2rem;
    position: absolute;
    left: 0;
    top: -.3rem
}

.vl-icon-list__item .vl-vi:after,
.vl-icon-list__item .vl-vi:before {
    color: #b2b2b2
}

.vl-icon-list__item .vl-vi svg {
    fill: #b2b2b2
}

.vl-icon-list--small .vl-icon-list__item {
    font-size: 1.6rem
}

.vl-icon-list--small .vl-icon-list__item .vl-vi {
    font-size: 1.8rem;
    top: -.2rem
}

.vl-icon-wrapper {
    display: flex
}

.vl-icon-wrapper .vl-icon {
    display: inline-block
}

.vl-icon {
    font-size: 1em;
    display: inline;
    color: inherit
}

.vl-icon svg {
    height: 1em;
    width: auto;
    fill: currentColor;
    display: inline-block;
    font-size: inherit;
    overflow: visible;
    vertical-align: middle
}

.vl-icon--small {
    font-size: .8em
}

.vl-icon--small svg {
    height: .8em;
    width: auto
}

.vl-icon--large {
    font-size: 1.2em
}

.vl-icon--large svg {
    height: 1.2em;
    width: auto
}

.vl-icon--light {
    color: #8c8c8c
}

.vl-icon--before {
    margin-right: .5em
}

.vl-icon--after {
    margin-left: .5em
}

.vl-icon--inline-svg:before {
    display: none
}

.vl-image {
    display: block;
    height: auto;
    max-width: 100%
}

.vl-caption {
    margin-top: 1rem;
    margin-left: 1.5rem;
    line-height: 1
}

.vl-caption__tooltip-btn {
    border-radius: 0;
    -moz-appearance: none;
    appearance: none;
    -webkit-appearance: none;
    background-color: transparent;
    padding: 0;
    border-radius: 50%;
    width: 14px;
    height: 14px;
    font-size: 9px;
    background: #f7f9fc;
    border: 1px solid #05c;
    color: #05c;
    font-weight: 600;
    line-height: 1rem
}

.vl-caption--discreet {
    margin: 0
}

.vl-caption--discreet .vl-caption__tooltip-btn:after {
    display: block;
    content: "C"
}

.vl-infoblock--border {
    border: 1px solid #cbd2da;
    padding: 5rem
}

@media screen and (max-width:1023px) {
    .vl-infoblock--border {
        padding: 3rem
    }
}

@media screen and (max-width:767px) {
    .vl-infoblock--border {
        padding: 2rem
    }
}

.vl-infoblock__header {
    position: relative;
    display: flex;
    align-items: center;
    line-height: 4.2rem;
    word-wrap: break-word
}

.vl-infoblock__header:after,
.vl-infoblock__header:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

@media screen and (max-width:767px) {
    .vl-infoblock__header {
        line-height: 3.6rem
    }
}

.vl-infoblock__header__icon-wrapper {
    position: relative
}

.vl-infoblock__header__icon,
.vl-infoblock__header__icon.vl-icon {
    display: block;
    flex: 0 0 auto;
    background-color: transparent;
    background: #ffe615;
    background: var(--vl-theme-primary-color);
    font-size: 2rem;
    border-radius: 50%;
    color: #333332;
    width: 4.2rem;
    height: 4.2rem;
    text-align: center;
    margin-right: 2.7rem;
    align-self: start
}

@media screen and (max-width:767px) {
    .vl-infoblock__header__icon,
    .vl-infoblock__header__icon.vl-icon {
        font-size: 1.5rem;
        width: 3.6rem;
        height: 3.6rem;
        margin-right: 1.5rem
    }
}

.vl-infoblock__header__icon.vl-icon:before,
.vl-infoblock__header__icon:before {
    display: block
}

.vl-infoblock--alt .vl-infoblock__header__icon {
    background-color: #f7f9fc;
    border: 1px solid #cbd2da
}

.vl-infoblock--contact .vl-infoblock__header__icon:after,
.vl-infoblock--contact .vl-infoblock__header__icon:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-infoblock--contact .vl-infoblock__header__icon:before {
    content: "\f102"
}

.vl-infoblock--publications .vl-infoblock__header__icon:after,
.vl-infoblock--publications .vl-infoblock__header__icon:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-infoblock--publications .vl-infoblock__header__icon:before {
    content: "\f132"
}

.vl-infoblock--faq .vl-infoblock__header__icon:after,
.vl-infoblock--faq .vl-infoblock__header__icon:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-infoblock--faq .vl-infoblock__header__icon:before {
    content: "\f194"
}

.vl-infoblock--news .vl-infoblock__header__icon:after,
.vl-infoblock--news .vl-infoblock__header__icon:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-infoblock--news .vl-infoblock__header__icon:before {
    content: "\f208"
}

.vl-infoblock--timeline .vl-infoblock__header__icon:after,
.vl-infoblock--timeline .vl-infoblock__header__icon:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-infoblock--timeline .vl-infoblock__header__icon:before {
    content: "\f273"
}

.vl-infoblock--question .vl-infoblock__header__icon:after,
.vl-infoblock--question .vl-infoblock__header__icon:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-infoblock--question .vl-infoblock__header__icon:before {
    content: "\f230"
}

@media screen and (max-width:767px) {
    .vl-infoblock__header__icon {
        font-size: 1.5rem;
        width: 3.6rem;
        height: 3.6rem;
        margin-right: 1.5rem
    }
}

.vl-infoblock__header__badge {
    position: absolute;
    top: 0;
    right: 0;
    margin-right: 2.2rem
}

@media screen and (max-width:767px) {
    .vl-infoblock__header__badge {
        margin-right: .9rem
    }
}

.vl-infoblock__title {
    font-size: 2rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    line-height: 1.4;
    margin-bottom: 0
}

@media screen and (max-width:767px) {
    .vl-infoblock__title {
        font-size: 1.8rem;
        font-family: Flanders Art Sans, sans-serif;
        font-weight: 500;
        line-height: 1.44;
        margin-bottom: 0
    }
}

@media screen and (max-width:767px) and (max-width:767px) {
    .vl-infoblock__title {
        font-size: 1.8rem;
        margin-bottom: 1rem
    }
}

@media screen and (max-width:500px) {
    .vl-infoblock__title {
        margin-bottom: 0
    }
}

.vl-infoblock__content {
    padding-top: 1.5rem;
    margin-left: 7.2rem
}

@media screen and (max-width:767px) {
    .vl-infoblock__content {
        padding-top: .75rem;
        margin-left: 5.2rem
    }
}

.vl-input-addon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    height: 3.5rem;
    line-height: 3.5rem;
    min-width: 3.5rem;
    border: .1rem solid #687483;
    text-decoration: none;
    padding: 0 1rem;
    font-weight: 500;
    font-size: 1.6rem;
    color: #333332;
    background: #fff;
    margin: 0
}

.vl-input-addon[href] .vl-vi,
.vl-input-addon[type=button] .vl-vi {
    color: #05c
}

.vl-input-addon[href]:hover,
.vl-input-addon[type=button]:hover {
    box-shadow: inset 0 0 0 .1rem rgba(0, 85, 204, .65);
    border-color: rgba(0, 85, 204, .65);
    background: rgba(179, 207, 245, .3)
}

.vl-input-addon[href]:focus .vl-vi,
.vl-input-addon[href]:hover .vl-vi,
.vl-input-addon[type=button]:focus .vl-vi,
.vl-input-addon[type=button]:hover .vl-vi {
    color: #003bb0
}

.vl-input-addon[href]:focus,
.vl-input-addon[type=button]:focus {
    outline: .2rem solid transparent;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

.vl-input-addon[href]:hover:focus,
.vl-input-addon[type=button]:hover:focus {
    box-shadow: inset 0 0 0 .1rem rgba(0, 85, 204, .65), 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

.vl-input-addon .vl-vi {
    display: inline-flex;
    color: inherit
}

.vl-input-addon .vl-vi:after,
.vl-input-addon .vl-vi:before {
    font-size: 1.8rem
}

.vl-input-field {
    display: inline-block;
    background: #fff;
    font-family: Flanders Art Sans, sans-serif;
    font-size: 1.6rem;
    color: #333332;
    max-width: 100%;
    height: 3.5rem;
    line-height: 3.5rem;
    border-radius: .3rem;
    border: .1rem solid #687483;
    -webkit-appearance: none;
    padding: 0 1rem;
    transition: background-color .2s
}

@media screen and (max-width:767px) {
    .vl-input-field {
        font-size: 1.6rem
    }
}

.vl-input-field:hover {
    border: .2rem solid rgba(0, 85, 204, .65);
    padding: 0 .9rem
}

.vl-input-field:hover.invalid.validated,
.vl-input-field:hover.vl-input-field--error {
    border-color: #db3434
}

.vl-input-field:hover.vl-input-field--success {
    border-color: #3ca854
}

.vl-input-field:hover.vl-input-field--small {
    padding: 0 .7rem
}

.vl-input-field--focus,
.vl-input-field:focus {
    outline: .2rem solid transparent;
    border: .1rem solid #687483;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65);
    padding: 0 1rem
}

.vl-input-field--focus.invalid.validated,
.vl-input-field--focus.vl-input-field--error,
.vl-input-field:focus.invalid.validated,
.vl-input-field:focus.vl-input-field--error {
    border-color: #db3434
}

.vl-input-field--focus.vl-input-field--success,
.vl-input-field:focus.vl-input-field--success {
    border-color: #3ca854
}

.vl-input-field--focus:hover,
.vl-input-field:focus:hover {
    padding: 0 1rem
}

.vl-input-field--focus.vl-input-field--small,
.vl-input-field:focus.vl-input-field--small {
    padding: 0 .8rem
}

.vl-input-field::-moz-placeholder {
    color: #687483
}

.vl-input-field:-ms-input-placeholder {
    color: #687483
}

.vl-input-field::placeholder {
    color: #687483
}

.vl-input-field::-webkit-search-cancel-button {
    -webkit-appearance: none
}

.vl-input-field--block {
    display: block;
    width: 100%
}

.vl-input-field--small {
    max-width: 6rem;
    padding: 0 .8rem
}

.vl-input-field--error,
.vl-input-field.invalid.validated {
    border-color: #db3434;
    background-color: #fbebeb;
    display: inline
}

.vl-input-field--error .js-vl-select[data-type*=select-multiple],
.vl-input-field--error .js-vl-select[data-type*=select-one],
.vl-input-field--error .vl-select,
.vl-input-field.invalid.validated .js-vl-select[data-type*=select-multiple],
.vl-input-field.invalid.validated .js-vl-select[data-type*=select-one],
.vl-input-field.invalid.validated .vl-select {
    border-color: #db3434;
    background-color: #fbebeb
}

.vl-input-field--error .js-vl-select[data-type*=select-multiple] .vl-select__inner,
.vl-input-field--error .js-vl-select[data-type*=select-one] .vl-select__inner,
.vl-input-field.invalid.validated .js-vl-select[data-type*=select-multiple] .vl-select__inner,
.vl-input-field.invalid.validated .js-vl-select[data-type*=select-one] .vl-select__inner {
    border-color: #db3434;
    background-color: #fbebeb;
    background-color: transparent
}

.vl-input-field--success {
    display: inline
}

.vl-input-field--success,
.vl-input-field--success .js-vl-select[data-type*=select-multiple],
.vl-input-field--success .js-vl-select[data-type*=select-one],
.vl-input-field--success .vl-select {
    border-color: #3ca854;
    background-color: #ecf6ee
}

.vl-input-field--success .js-vl-select[data-type*=select-multiple] .vl-select__inner,
.vl-input-field--success .js-vl-select[data-type*=select-one] .vl-select__inner {
    border-color: #3ca854;
    background-color: #ecf6ee;
    background-color: transparent
}

.vl-input-field--disabled,
.vl-input-field[disabled] {
    background-color: #f3f5f6;
    border-color: #b8c1cc
}

.vl-input-field--disabled:hover,
.vl-input-field[disabled]:hover {
    border-width: .1rem;
    padding: 0 1rem
}

.vl-input-field--inline {
    position: relative;
    display: block;
    max-width: 100%
}

@media screen and (max-width:767px) {
    .vl-input-field--inline {
        display: block;
        width: auto
    }
}

.vl-input-field--inline .vl-input-field__submit {
    position: absolute;
    display: block;
    color: #fff;
    width: 4.3rem;
    height: 3.5rem;
    opacity: 0;
    padding: 0;
    margin-bottom: -2rem;
    transform: translateX(100%);
    top: 0;
    right: 0;
    z-index: -1
}

.vl-input-field--inline .vl-input-field__submit:focus {
    transform: translateX(0);
    transition: opacity .2s, transform .2s;
    opacity: 1;
    z-index: 1
}

.vl-input-field--inline .vl-input-field__submit:before {
    position: absolute;
    font-size: 1.7rem;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%
}

.vl-input-field--inline .vl-input-field__input {
    display: block;
    width: 100%;
    text-align: left;
    padding-right: 5rem
}

.vl-input-field--inline .vl-input-field__input--focus,
.vl-input-field--inline .vl-input-field__input:focus {
    width: calc(100% - 5.2rem);
    padding-right: 0;
    transition: width .2s
}

.vl-input-field--inline .vl-input-field__input--focus+.vl-input-field__submit,
.vl-input-field--inline .vl-input-field__input:focus+.vl-input-field__submit {
    transform: translateX(0);
    transition: opacity .2s, transform .2s;
    opacity: 1;
    z-index: 1
}

.vl-input-group {
    display: flex;
    align-items: stretch
}

.vl-input-group .vl-button,
.vl-input-group .vl-input-addon {
    flex-shrink: 0
}

.vl-input-group .vl-button:focus,
.vl-input-group .vl-input-addon:focus {
    z-index: 1
}

.vl-input-group:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-top-left-radius: .3rem;
    border-bottom-left-radius: .3rem;
    border-right-width: 0
}

.vl-input-group:first-child:focus {
    z-index: 1;
    border-right-width: 1px
}

.vl-input-group .vl-input-field+.vl-button,
.vl-input-group .vl-input-field+.vl-input-addon {
    margin-left: -.1rem
}

.vl-input-group .vl-button+.vl-input-field,
.vl-input-group .vl-input-addon+.vl-input-field,
.vl-input-group .vl-input-field+.vl-button,
.vl-input-group .vl-input-field+.vl-input-addon {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: .3rem;
    border-bottom-right-radius: .3rem
}

.vl-input-group .vl-button+.vl-input-field {
    border-left-width: 0;
    padding-left: 1.1rem
}

.vl-input-group .vl-button+.vl-input-field:focus {
    padding-left: 1rem
}

.vl-input-group .vl-input-addon,
.vl-input-group .vl-input-field {
    position: relative
}

.vl-input-group .vl-input-addon:focus,
.vl-input-group .vl-input-field:focus {
    z-index: 1;
    border-left-width: 1px
}

.vl-input-group--inline {
    display: inline-flex
}

.vl-introduction {
    font-family: Flanders Art Sans, sans-serif;
    font-size: 2.2rem;
    color: #4d4d4b;
    line-height: 1.5
}

@media screen and (max-width:1023px) {
    .vl-introduction {
        font-size: 2rem
    }
}

@media screen and (max-width:767px) {
    .vl-introduction {
        font-size: 1.8rem
    }
}

.vl-introduction--bold {
    font-weight: 500
}

.pswp {
    display: none;
    position: absolute;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    overflow: hidden;
    touch-action: none;
    z-index: 10009;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    outline: none
}

.pswp * {
    box-sizing: border-box
}

.pswp img {
    max-width: none
}

.pswp--animate_opacity {
    opacity: .001;
    will-change: opacity;
    transition: opacity 333ms cubic-bezier(.4, 0, .22, 1)
}

.pswp--open {
    display: block
}

.pswp--zoom-allowed .pswp__img {
    cursor: zoom-in
}

.pswp--zoomed-in .pswp__img {
    cursor: -webkit-grab;
    cursor: grab
}

.pswp--dragging .pswp__img {
    cursor: -webkit-grabbing;
    cursor: grabbing
}

.pswp__bg {
    background: hsla(0, 0%, 100%, .9);
    opacity: 0;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden
}

.pswp__bg,
.pswp__scroll-wrap {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%
}

.pswp__scroll-wrap {
    overflow: hidden
}

.pswp__container,
.pswp__zoom-wrap {
    touch-action: none;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0
}

.pswp__container,
.pswp__img {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-touch-callout: none
}

.pswp__zoom-wrap {
    position: absolute;
    width: 100%;
    transform-origin: left top;
    transition: transform 333ms cubic-bezier(.4, 0, .22, 1)
}

.pswp__bg {
    will-change: opacity;
    transition: opacity 333ms cubic-bezier(.4, 0, .22, 1)
}

.pswp--animated-in .pswp__bg,
.pswp--animated-in .pswp__zoom-wrap {
    transition: none
}

.pswp__container,
.pswp__zoom-wrap {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden
}

.pswp__item {
    right: 0;
    bottom: 0;
    overflow: hidden
}

.pswp__img,
.pswp__item {
    position: absolute;
    left: 0;
    top: 0
}

.pswp__img {
    width: auto;
    height: auto
}

.pswp__img--placeholder {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden
}

.pswp__img--placeholder--blank {
    background: #fff
}

.pswp--ie .pswp__img {
    width: 100%!important;
    height: auto!important;
    left: 0;
    top: 0
}

.pswp__error-msg {
    position: absolute;
    left: 0;
    top: 50%;
    width: 100%;
    text-align: center;
    font-size: 14px;
    line-height: 16px;
    margin-top: -8px;
    color: #fff
}

.pswp__error-msg a {
    color: #fff;
    text-decoration: underline
}

.pswp__button {
    width: 6rem;
    height: 6rem;
    position: relative;
    background: none;
    cursor: pointer;
    overflow: visible;
    -webkit-appearance: none;
    display: block;
    border: 0;
    padding: 0;
    margin: 0;
    float: right;
    opacity: .75;
    transition: opacity .2s;
    box-shadow: none
}

.pswp__button:focus,
.pswp__button:hover {
    opacity: 1
}

.pswp__button:active {
    outline: none;
    opacity: .9
}

.pswp__button::-moz-focus-inner {
    padding: 0;
    border: 0
}

.pswp__ui--over-close .pswp__button--close {
    opacity: 1
}

.pswp__button--arrow--left:after,
.pswp__button--arrow--left:before,
.pswp__button--arrow--right:after,
.pswp__button--arrow--right:before,
.pswp__button--close:after,
.pswp__button--close:before,
.pswp__button--zoom:after,
.pswp__button--zoom:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.pswp__button--arrow--left:before,
.pswp__button--arrow--right:before {
    top: 13px;
    height: 4.6rem;
    position: absolute;
    line-height: 1
}

.pswp__button--arrow--left:before {
    left: .3rem
}

.pswp__button--arrow--left:focus:before,
.pswp__button--arrow--left:hover:before,
.pswp__button--arrow--right:focus:before,
.pswp__button--arrow--right:hover:before {
    color: #05c
}

.pswp__button--arrow--left {
    font-size: 4.4rem
}

.pswp__button--arrow--left:before {
    content: "\f121";
    transform: rotate(180deg)
}

.pswp__button--arrow--right {
    font-size: 4.4rem
}

.pswp__button--arrow--right:before {
    content: "\f121"
}

.pswp__button--close {
    font-size: 2.4rem
}

.pswp__button--close:before {
    content: "\f172"
}

.pswp__button--close:focus:before,
.pswp__button--close:hover:before {
    color: #05c
}

.pswp__button--zoom {
    font-size: 2rem
}

.pswp__button--zoom:before {
    content: "\f1ea"
}

.pswp__button--zoom:focus:before,
.pswp__button--zoom:hover:before {
    color: #05c
}

.pswp__button--share {
    background-position: -44px -44px
}

.pswp__button--fs {
    display: none
}

.pswp--supports-fs .pswp__button--fs {
    display: block
}

.pswp--fs .pswp__button--fs {
    background-position: -44px 0
}

.pswp__button--zoom {
    display: none;
    background-position: -88px 0
}

.pswp--zoom-allowed .pswp__button--zoom {
    display: block
}

.pswp--zoomed-in .pswp__button--zoom {
    background-position: -132px 0
}

.pswp--touch .pswp__button--arrow--left,
.pswp--touch .pswp__button--arrow--right {
    visibility: hidden
}

.pswp__button--arrow--left,
.pswp__button--arrow--right {
    background: none;
    top: 50%;
    margin-top: -35px;
    width: 70px;
    height: 70px;
    position: absolute
}

.pswp__button--arrow--left {
    left: 0
}

.pswp__button--arrow--right {
    right: 0
}

.pswp__button--arrow--left:before {
    left: 6px
}

.pswp__button--arrow--right:before {
    right: 6px
}

.pswp__counter,
.pswp__share-modal {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.pswp__share-modal {
    display: block;
    background: rgba(0, 0, 0, .5);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    padding: 10px;
    position: absolute;
    z-index: 10109;
    opacity: 0;
    transition: opacity .25s ease-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    will-change: opacity
}

.pswp__share-modal--hidden {
    display: none
}

.pswp__share-tooltip {
    z-index: 10129;
    position: absolute;
    background: #fff;
    top: 56px;
    border-radius: 2px;
    display: block;
    width: auto;
    right: 44px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, .25);
    transform: translateY(6px);
    transition: transform .25s;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    will-change: transform
}

.pswp__share-tooltip a {
    display: block;
    padding: 8px 12px;
    font-size: 14px;
    line-height: 18px
}

.pswp__share-tooltip a,
.pswp__share-tooltip a:hover {
    color: #000;
    text-decoration: none
}

.pswp__share-tooltip a:first-child {
    border-radius: 2px 2px 0 0
}

.pswp__share-tooltip a:last-child {
    border-radius: 0 0 2px 2px
}

.pswp__share-modal--fade-in {
    opacity: 1
}

.pswp__share-modal--fade-in .pswp__share-tooltip {
    transform: translateY(0)
}

.pswp--touch .pswp__share-tooltip a {
    padding: 16px 12px
}

a .pswp__share--facebook:before {
    content: "";
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    top: -12px;
    right: 15px;
    border: 6px solid transparent;
    border-bottom-color: #fff;
    pointer-events: none
}

a .pswp__share--facebook:hover {
    background: #3e5c9a;
    color: #fff
}

a .pswp__share--facebook:hover:before {
    border-bottom-color: #3e5c9a
}

a.pswp__share--twitter:hover {
    background: #55acee;
    color: #fff
}

a.pswp__share--pinterest:hover {
    background: #ccc;
    color: #ce272d
}

a.pswp__share--download:hover {
    background: #ddd
}

.pswp__counter {
    top: 0;
    color: #000;
    font-size: 1.6rem;
    font-weight: 400;
    padding: 1.5rem 2rem
}

.pswp__caption,
.pswp__counter {
    position: absolute;
    left: 0;
    font-family: Flanders Art Sans, sans-serif
}

.pswp__caption {
    bottom: 0;
    width: 100%;
    min-height: 4.4rem;
    font-size: 1.4rem;
    padding: 2rem 2.5rem;
    color: #666
}

.pswp__caption__center {
    text-align: center
}

.pswp__caption small {
    font-size: 11px
}

.pswp__caption--empty {
    display: none
}

.pswp__caption--fake {
    visibility: hidden
}

.pswp__preloader {
    width: 44px;
    height: 44px;
    position: absolute;
    top: 0;
    left: 50%;
    margin-left: -22px;
    opacity: 0;
    transition: opacity .25s ease-out;
    will-change: opacity;
    direction: ltr
}

.pswp__preloader__icn {
    width: 20px;
    height: 20px;
    margin: 12px
}

.pswp__preloader--active {
    opacity: 1
}

.pswp__preloader--active .pswp__preloader__icn {
    background: url(data:image/gif;base64,R0lGODlhFAAUAPMIAIeHhz8/P1dXVycnJ8/Pz7e3t5+fn29vb////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH/C05FVFNDQVBFMi4wAwEAAAAh+QQFBwAIACwAAAAAFAAUAEAEUxDJSatFxtwaggWAdIyHJAhXoRYSQUhDPGx0TbmujahbXGWZWqdDAYEsp5NupLPkdDwE7oXwWVasimzWrAE1tKFHErQRK8eL8mMUlRBJVI307uoiACH5BAUHAAgALAEAAQASABIAAAROEMkpS6E4W5upMdUmEQT2feFIltMJYivbvhnZ3R0A4NMwIDodz+cL7nDEn5CH8DGZh8MtEMBEoxkqlXKVIgQCibbK9YLBYvLtHH5K0J0IACH5BAUHAAgALAEAAQASABIAAAROEMkpjaE4W5spANUmFQX2feFIltMJYivbvhnZ3d1x4BNBIDodz+cL7nDEn5CH8DGZAsFtMMBEoxkqlXKVIgIBibbK9YLBYvLtHH5K0J0IACH5BAUHAAgALAEAAQASABIAAAROEMkpAaA4W5vpOdUmGQb2feFIltMJYivbvhnZ3Z0g4FNRIDodz+cL7nDEn5CH8DGZgcCNQMBEoxkqlXKVIgYDibbK9YLBYvLtHH5K0J0IACH5BAUHAAgALAEAAQASABIAAAROEMkpz6E4W5upENUmAQD2feFIltMJYivbvhnZ3V0Q4JNhIDodz+cL7nDEn5CH8DGZg8GtUMBEoxkqlXKVIggEibbK9YLBYvLtHH5K0J0IACH5BAUHAAgALAEAAQASABIAAAROEMkphaA4W5tpCNUmHQf2feFIltMJYivbvhnZ3d0w4BMAIDodz+cL7nDEn5CH8DGZBMLNYMBEoxkqlXKVIgoFibbK9YLBYvLtHH5K0J0IACH5BAUHAAgALAEAAQASABIAAAROEMkpQ6A4W5vpGNUmCQL2feFIltMJYivbvhnZ3R1B4NNxIDodz+cL7nDEn5CH8DGZhcINAMBEoxkqlXKVIgwGibbK9YLBYvLtHH5K0J0IACH5BAUHAAcALAEAAQASABIAAANCeLo6wzA6FxkhbaoQ4L3ZxnXLh0EjWZ4RV71VUcCLIByyTNt2PsO8m452sBGJBsNxkUwuD03lAQBASqnUJ7aq5UYSADs=) 0 0 no-repeat
}

.pswp--css_animation .pswp__preloader--active {
    opacity: 1
}

.pswp--css_animation .pswp__preloader--active .pswp__preloader__icn {
    -webkit-animation: clockwise .5s linear infinite;
    animation: clockwise .5s linear infinite
}

.pswp--css_animation .pswp__preloader--active .pswp__preloader__donut {
    -webkit-animation: donut-rotate 1s cubic-bezier(.4, 0, .22, 1) infinite;
    animation: donut-rotate 1s cubic-bezier(.4, 0, .22, 1) infinite
}

.pswp--css_animation .pswp__preloader__icn {
    background: none;
    opacity: .75;
    width: 14px;
    height: 14px;
    position: absolute;
    left: 15px;
    top: 15px;
    margin: 0
}

.pswp--css_animation .pswp__preloader__cut {
    position: relative;
    width: 7px;
    height: 14px;
    overflow: hidden
}

.pswp--css_animation .pswp__preloader__donut {
    box-sizing: border-box;
    width: 14px;
    height: 14px;
    border-radius: 50%;
    border-color: #fff #fff transparent transparent;
    border-style: solid;
    border-width: 2px;
    position: absolute;
    top: 0;
    left: 0;
    background: none;
    margin: 0
}

@media screen and (max-width:1024px) {
    .pswp__preloader {
        position: relative;
        left: auto;
        top: auto;
        margin: 0;
        float: right
    }
}

@-webkit-keyframes clockwise {
    0% {
        transform: rotate(0deg)
    }
    to {
        transform: rotate(1turn)
    }
}

@keyframes clockwise {
    0% {
        transform: rotate(0deg)
    }
    to {
        transform: rotate(1turn)
    }
}

@-webkit-keyframes donut-rotate {
    0% {
        transform: rotate(0)
    }
    50% {
        transform: rotate(-140deg)
    }
    to {
        transform: rotate(0)
    }
}

@keyframes donut-rotate {
    0% {
        transform: rotate(0)
    }
    50% {
        transform: rotate(-140deg)
    }
    to {
        transform: rotate(0)
    }
}

.pswp__ui {
    visibility: visible;
    opacity: 1;
    z-index: 10059
}

.pswp__top-bar {
    position: absolute;
    left: 0;
    top: 0;
    height: 44px;
    width: 100%
}

.pswp--has_mouse .pswp__button--arrow--left,
.pswp--has_mouse .pswp__button--arrow--right,
.pswp__caption,
.pswp__top-bar {
    -webkit-backface-visibility: hidden;
    will-change: opacity;
    transition: opacity 333ms cubic-bezier(.4, 0, .22, 1)
}

.pswp--has_mouse .pswp__button--arrow--left,
.pswp--has_mouse .pswp__button--arrow--right {
    visibility: visible
}

.pswp__ui--hidden .pswp__button--arrow--left,
.pswp__ui--hidden .pswp__button--arrow--right,
.pswp__ui--hidden .pswp__caption,
.pswp__ui--hidden .pswp__top-bar {
    opacity: .001
}

.pswp__element--disabled,
.pswp__ui--one-slide .pswp__button--arrow--left,
.pswp__ui--one-slide .pswp__button--arrow--right,
.pswp__ui--one-slide .pswp__counter {
    display: none
}

.pswp--minimal--dark .pswp__top-bar {
    background: none
}

.vl-lightbox__item,
.vl-lightbox img {
    display: block
}

.vl-lightbox .vl-icon {
    display: flex;
    align-items: center;
    justify-content: center
}

@supports ((-o-object-fit:cover) or (object-fit:cover)) {
    .vl-lightbox .vl-image {
        margin: 0
    }
}

.vl-lightbox__item--no-caption .vl-caption {
    display: none
}

.vl-lightbox__link {
    display: block;
    position: relative
}

.vl-lightbox__link,
[data-lightbox-item] {
    cursor: zoom-in
}

.vl-lightbox__link:focus .vl-vi,
.vl-lightbox__link:hover .vl-vi,
[data-lightbox-item]:focus .vl-vi,
[data-lightbox-item]:hover .vl-vi {
    opacity: 1;
    transform: scale(1)
}

.vl-lightbox__link .vl-vi,
[data-lightbox-item] .vl-vi {
    opacity: 0;
    transform: scale(.8);
    transition: all .2s cubic-bezier(1, .1, 0, .9);
    position: absolute;
    top: 1.5rem;
    right: 1.5rem;
    width: 3.5rem;
    height: 3.5rem;
    font-size: 2.4rem;
    padding: .5rem;
    line-height: 1;
    border-radius: .3rem;
    background-color: #05c;
    color: #fff;
    z-index: 2
}

.vl-lightbox__images {
    position: absolute!important;
    top: 0;
    left: 0;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px)
}

.vl-lightbox__images [data-lightbox-item] {
    display: none
}

[type=submit].vl-link.vl-link--icon {
    padding-left: 1.8rem
}

.vl-link {
    border-radius: 0;
    -moz-appearance: none;
    appearance: none;
    -webkit-appearance: none;
    border: 0;
    background-color: transparent;
    padding: 0;
    text-decoration: underline;
    cursor: pointer;
    font-weight: inherit;
    text-align: left;
    font-family: inherit;
    font-size: inherit;
    color: #05c;
    display: inline-block
}

.vl-link:active,
.vl-link:focus,
.vl-link:hover {
    color: #003bb0;
    text-decoration: none
}

.vl-link:active,
.vl-link:focus {
    color: #004099
}

.vl-link:visited,
.vl-link:visited .vl-link__icon {
    color: #660599
}

.vl-link--bold {
    font-weight: 500;
    text-decoration: none
}

.vl-link--bold:active,
.vl-link--bold:focus,
.vl-link--bold:hover {
    text-decoration: underline
}

.vl-link--small {
    font-size: 1.6rem
}

@media screen and (max-width:767px) {
    .vl-link--small {
        font-size: 1.5rem
    }
}

.vl-link--large {
    font-size: 2rem
}

@media screen and (max-width:767px) {
    .vl-link--large {
        font-size: 1.8rem
    }
}

.vl-link--block {
    display: block
}

.vl-link--inline {
    display: inline
}

.vl-link__icon {
    position: relative;
    vertical-align: middle;
    overflow: hidden;
    text-decoration: none;
    color: inherit;
    margin-top: -.1em
}

.vl-link__icon,
.vl-link__icon:after,
.vl-link__icon:before {
    display: inline-block
}

.vl-link__icon--before {
    padding-right: .4rem
}

.vl-link__icon--after {
    padding-left: .4rem
}

.vl-link__icon--light {
    color: #687483
}

.vl-link__icon--borderless {
    overflow: visible
}

.vl-link__icon--borderless:after {
    position: absolute;
    display: block;
    height: .1rem;
    left: 0;
    width: 100%;
    bottom: 0;
    margin-bottom: -.3rem;
    background-color: #fff;
    content: ""
}

.vl-link__icon.vl-vi-external {
    font-size: 1em
}

.vl-link-list__item {
    font-size: 1.8rem;
    margin-bottom: 1rem;
    padding-bottom: 1rem
}

.vl-link-list__item:not(:last-of-type) {
    margin-bottom: .5rem
}

.vl-link-list__item:last-child {
    padding-bottom: 0;
    margin-bottom: 0
}

@media screen and (max-width:767px) {
    .vl-link-list__item {
        font-size: 1.6rem
    }
}

.vl-link-list--bordered .vl-link-list__item {
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #cbd2d9
}

.vl-region--alt .vl-link-list--bordered .vl-link-list__item {
    border-bottom-color: #aeb9c3
}

.vl-link-list--bordered .vl-link-list__item--no-border {
    border-bottom: 0
}

.vl-link-list--bordered-alt .vl-link-list__item {
    margin-bottom: 1.5rem;
    padding-bottom: 1.5rem;
    position: relative;
    border-bottom-width: 1px;
    border-bottom-style: solid;
    -o-border-image: linear-gradient(90deg, #cbd2d9, #cbd2d9 40px, transparent 41px, transparent);
    border-image: linear-gradient(90deg, #cbd2d9, #cbd2d9 40px, transparent 41px, transparent);
    border-image-slice: 1
}

.vl-region--alt .vl-link-list--bordered-alt .vl-link-list__item {
    border-bottom-color: #aeb9c3
}

.vl-link-list--bordered-alt .vl-link-list__item--no-border {
    border-bottom: 0
}

.vl-link-list--small .vl-link-list__item {
    font-size: 1.6rem
}

.vl-link-list--inline {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin: 0 -.5rem
}

.vl-link-list--inline .vl-link-list__item {
    padding: 0 .5rem;
    margin-bottom: 1rem
}

.vl-loader {
    display: inline-block;
    position: relative;
    width: 3rem;
    height: 1.8rem
}

.vl-loader:before {
    -webkit-animation: loader-wave 1s linear infinite;
    animation: loader-wave 1s linear infinite;
    position: absolute;
    display: block;
    content: "";
    width: .4rem;
    height: .4rem;
    box-shadow: 1rem 0 #4d4d4b, 2rem 0 #4d4d4b, 3rem 0 #4d4d4b;
    border-radius: 50%;
    margin-top: -.2rem;
    margin-left: -2.2rem;
    top: 50%;
    left: 50%
}

@-webkit-keyframes loader-wave {
    0% {
        box-shadow: 10px 0 #4d4d4b, 20px 0 #4d4d4b, 30px 0 #4d4d4b
    }
    10% {
        box-shadow: 10px -3px #4d4d4b, 20px 0 #4d4d4b, 30px 0 #4d4d4b
    }
    20% {
        box-shadow: 10px -6px #4d4d4b, 20px -3px #4d4d4b, 30px 0 #4d4d4b
    }
    30% {
        box-shadow: 10px -3px #4d4d4b, 20px -6px #4d4d4b, 30px -3px #4d4d4b
    }
    40% {
        box-shadow: 10px 0 #4d4d4b, 20px -3px #4d4d4b, 30px -6px #4d4d4b
    }
    50% {
        box-shadow: 10px 0 #4d4d4b, 20px 0 #4d4d4b, 30px -3px #4d4d4b
    }
    60% {
        box-shadow: 10px 0 #4d4d4b, 20px 0 #4d4d4b, 30px 0 #4d4d4b
    }
    to {
        box-shadow: 10px 0 #4d4d4b, 20px 0 #4d4d4b, 30px 0 #4d4d4b
    }
}

@keyframes loader-wave {
    0% {
        box-shadow: 10px 0 #4d4d4b, 20px 0 #4d4d4b, 30px 0 #4d4d4b
    }
    10% {
        box-shadow: 10px -3px #4d4d4b, 20px 0 #4d4d4b, 30px 0 #4d4d4b
    }
    20% {
        box-shadow: 10px -6px #4d4d4b, 20px -3px #4d4d4b, 30px 0 #4d4d4b
    }
    30% {
        box-shadow: 10px -3px #4d4d4b, 20px -6px #4d4d4b, 30px -3px #4d4d4b
    }
    40% {
        box-shadow: 10px 0 #4d4d4b, 20px -3px #4d4d4b, 30px -6px #4d4d4b
    }
    50% {
        box-shadow: 10px 0 #4d4d4b, 20px 0 #4d4d4b, 30px -3px #4d4d4b
    }
    60% {
        box-shadow: 10px 0 #4d4d4b, 20px 0 #4d4d4b, 30px 0 #4d4d4b
    }
    to {
        box-shadow: 10px 0 #4d4d4b, 20px 0 #4d4d4b, 30px 0 #4d4d4b
    }
}

.vl-loader--light:before {
    -webkit-animation: loader-light-wave 1s linear infinite;
    animation: loader-light-wave 1s linear infinite
}

@-webkit-keyframes loader-light-wave {
    0% {
        box-shadow: 10px 0 #fff, 20px 0 #fff, 30px 0 #fff
    }
    10% {
        box-shadow: 10px -3px #fff, 20px 0 #fff, 30px 0 #fff
    }
    20% {
        box-shadow: 10px -6px #fff, 20px -3px #fff, 30px 0 #fff
    }
    30% {
        box-shadow: 10px -3px #fff, 20px -6px #fff, 30px -3px #fff
    }
    40% {
        box-shadow: 10px 0 #fff, 20px -3px #fff, 30px -6px #fff
    }
    50% {
        box-shadow: 10px 0 #fff, 20px 0 #fff, 30px -3px #fff
    }
    60% {
        box-shadow: 10px 0 #fff, 20px 0 #fff, 30px 0 #fff
    }
    to {
        box-shadow: 10px 0 #fff, 20px 0 #fff, 30px 0 #fff
    }
}

@keyframes loader-light-wave {
    0% {
        box-shadow: 10px 0 #fff, 20px 0 #fff, 30px 0 #fff
    }
    10% {
        box-shadow: 10px -3px #fff, 20px 0 #fff, 30px 0 #fff
    }
    20% {
        box-shadow: 10px -6px #fff, 20px -3px #fff, 30px 0 #fff
    }
    30% {
        box-shadow: 10px -3px #fff, 20px -6px #fff, 30px -3px #fff
    }
    40% {
        box-shadow: 10px 0 #fff, 20px -3px #fff, 30px -6px #fff
    }
    50% {
        box-shadow: 10px 0 #fff, 20px 0 #fff, 30px -3px #fff
    }
    60% {
        box-shadow: 10px 0 #fff, 20px 0 #fff, 30px 0 #fff
    }
    to {
        box-shadow: 10px 0 #fff, 20px 0 #fff, 30px 0 #fff
    }
}

.vl-loader+p {
    font-style: 1.6rem
}

.vl-modal-backdrop,
.vl-modal .backdrop,
.vl-modal .vl-modal__backdrop {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 10008;
    background-color: hsla(0, 0%, 100%, .8);
    -webkit-backdrop-filter: blur(2px);
    backdrop-filter: blur(2px)
}

.vl-modal-backdrop--hidden {
    display: none
}

.vl-modal-dialog {
    display: none;
    position: fixed;
    width: 60rem;
    max-width: 95vw;
    max-height: 85vh;
    top: 50%;
    left: 50%;
    margin: 0;
    padding: 3rem;
    transform: translate(-50%, -50%);
    background-color: #fff;
    border: 0;
    box-shadow: 0 0 2.1rem 0 rgba(0, 0, 0, .3);
    overflow: auto;
    z-index: 10010
}

.vl-modal-dialog::-webkit-backdrop {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 10008;
    background-color: hsla(0, 0%, 100%, .8);
    -webkit-backdrop-filter: blur(2px);
    backdrop-filter: blur(2px)
}

.vl-modal-dialog::backdrop {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 10008;
    background-color: hsla(0, 0%, 100%, .8);
    -webkit-backdrop-filter: blur(2px);
    backdrop-filter: blur(2px)
}

.vl-modal-dialog.vl-modal-dialog--opened,
.vl-modal-dialog[open] {
    display: block
}

.vl-modal-dialog.vl-modal-dialog--opened:focus,
.vl-modal-dialog[open]:focus {
    outline: 3px auto #ffc515
}

.vl-modal-dialog--static {
    position: static;
    transform: none
}

.vl-modal-dialog--medium {
    width: 80rem
}

.vl-modal-dialog--large {
    width: 100rem
}

.vl-modal-dialog--left,
.vl-modal-dialog--right {
    left: auto;
    right: auto;
    top: 0;
    transform: none;
    max-height: none;
    height: 100vh
}

.vl-modal-dialog--bottom,
.vl-modal-dialog--top {
    left: 0;
    right: 0;
    top: auto;
    transform: none;
    max-width: none;
    width: 100vw
}

.vl-modal-dialog--right {
    right: 0
}

.vl-modal-dialog--left {
    left: 0
}

.vl-modal-dialog--bottom {
    bottom: 0
}

.vl-modal-dialog--top {
    top: 0
}

@media screen and (max-width:767px) {
    .vl-modal-dialog {
        padding: 1.5rem
    }
}

.modal-slide-from-bottom-enter-active,
.modal-slide-from-bottom-leave-active,
.modal-slide-from-left-enter-active,
.modal-slide-from-left-leave-active,
.modal-slide-from-right-enter-active,
.modal-slide-from-right-leave-active,
.modal-slide-from-top-enter-active,
.modal-slide-from-top-leave-active {
    transition: transform .3s ease-in-out
}

.modal-slide-from-right-enter,
.modal-slide-from-right-leave-to {
    transform: translate(100%)
}

.modal-slide-from-left-enter,
.modal-slide-from-left-leave-to {
    transform: translate(-100%)
}

.modal-slide-from-top-enter,
.modal-slide-from-top-leave-to {
    transform: translateY(-100%)
}

.modal-slide-from-bottom-enter,
.modal-slide-from-bottom-leave-to {
    transform: translateY(100%)
}

.modal-fade-enter-active,
.modal-fade-leave-active {
    transition: opacity .3s ease-in-out
}

.modal-fade-enter,
.modal-fade-leave-to {
    opacity: 0
}

.vl-modal-dialog__title {
    font-weight: 500;
    font-family: "Flanders Art Serif", serif;
    font-size: 2rem;
    margin-bottom: 1.5rem
}

.vl-modal-dialog__close {
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: .6rem;
    right: .6rem;
    padding: 1rem;
    border: 0;
    background: none;
    line-height: 1;
    overflow: hidden;
    color: #05c
}

.vl-modal-dialog__close:focus .vl-modal-dialog__close__icon,
.vl-modal-dialog__close:hover .vl-modal-dialog__close__icon {
    color: #05c
}

@media screen and (max-width:767px) {
    .vl-modal-dialog__close {
        top: 0;
        right: 0
    }
}

.vl-modal-dialog__close__icon {
    display: flex;
    font-size: 1.4rem;
    line-height: 1
}

.vl-modal-dialog__close__icon:after,
.vl-modal-dialog__close__icon:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-modal-dialog__close__icon:before {
    content: "\f158";
    font-weight: 700
}

.vl-modal-dialog__footer .vl-action-group {
    margin-top: 1.5rem
}

.vl-pager {
    font-size: 1.8rem
}

@media screen and (max-width:767px) {
    .vl-pager {
        font-size: 1.6rem
    }
}

.vl-pager__list {
    text-align: left
}

.vl-pager--align-center .vl-pager__list {
    text-align: center
}

.vl-pager--align-right .vl-pager__list {
    text-align: right
}

@media screen and (min-width:1023px) {
    .vl-pager--align-left--l .vl-pager__list {
        text-align: left
    }
    .vl-pager--align-center--l .vl-pager__list {
        text-align: center
    }
    .vl-pager--align-right--l .vl-pager__list {
        text-align: right
    }
}

@media screen and (max-width:1023px) {
    .vl-pager--align-left--m .vl-pager__list {
        text-align: left
    }
    .vl-pager--align-center--m .vl-pager__list {
        text-align: center
    }
    .vl-pager--align-right--m .vl-pager__list {
        text-align: right
    }
}

@media screen and (max-width:767px) {
    .vl-pager--align-left--s .vl-pager__list {
        text-align: left
    }
    .vl-pager--align-center--s .vl-pager__list {
        text-align: center
    }
    .vl-pager--align-right--s .vl-pager__list {
        text-align: right
    }
}

@media screen and (max-width:500px) {
    .vl-pager--align-left--xs .vl-pager__list {
        text-align: left
    }
    .vl-pager--align-center--xs .vl-pager__list {
        text-align: center
    }
    .vl-pager--align-right--xs .vl-pager__list {
        text-align: right
    }
}

.vl-pager__element {
    display: inline-block;
    vertical-align: middle;
    padding: 0 1.5rem;
    position: relative
}

.vl-pager__element:first-child {
    padding: 0 1.5rem 0 0
}

.vl-pager__element:nth-child(2) {
    padding-left: .2rem
}

.vl-pager__element:last-child {
    padding-right: 0
}

.vl-pager__element:first-child:after,
.vl-pager__element:last-child:after {
    display: none
}

.vl-pager__element--active {
    font-weight: 700
}

.vl-pager__element--active .vl-pager__element__cta {
    color: #333332;
    text-decoration: none
}

.vl-pager__element--previous {
    margin-right: 1rem
}

.vl-pager__element--next {
    margin-left: 1rem
}

.vl-pager__element__cta,
.vl-pager__element a {
    display: flex;
    align-items: center;
    box-shadow: none
}

.vl-pager__element__cta:focus,
.vl-pager__element__cta:hover,
.vl-pager__element a:focus,
.vl-pager__element a:hover {
    box-shadow: none
}

.vl-pager__element__cta .vl-link__icon,
.vl-pager__element a .vl-link__icon {
    font-size: 1.6rem;
    color: inherit;
    display: inline-block;
    margin: 0;
    align-self: inherit
}

.vl-pager__element__cta .vl-link__icon.vl-vi-external,
.vl-pager__element a .vl-link__icon.vl-vi-external {
    transform: translateY(1px)
}

@media screen and (max-width:767px) {
    .vl-pager__element__cta .vl-link__icon,
    .vl-pager__element a .vl-link__icon {
        font-size: 1rem
    }
}

.vl-person {
    display: block;
    text-decoration: none;
    text-align: center;
    margin: 0 auto
}

.vl-person--small .vl-person__name {
    font-size: 1.6rem
}

.vl-person--small .vl-person__description {
    line-height: 1.4
}

.vl-person--small .vl-person__image {
    width: 10rem
}

@media screen and (max-width:767px) {
    .vl-person--small .vl-person__image {
        width: 7.5rem
    }
}

.vl-person--small .vl-person__copyright {
    padding: 0
}

.vl-person--small .vl-person__image-wrapper {
    margin-bottom: 1.5rem
}

.vl-person--horizontal {
    display: flex;
    align-items: center;
    text-align: left
}

@media screen and (max-width:767px) {
    .vl-person--horizontal {
        align-items: start
    }
}

.vl-person--horizontal .vl-person__image-wrapper {
    margin-bottom: 0;
    margin-right: 2.5rem;
    flex-shrink: 0
}

@media screen and (max-width:767px) {
    .vl-person--horizontal .vl-person__image-wrapper {
        margin-right: 1.5rem
    }
}

.vl-person--horizontal .vl-person__image {
    margin: 0;
    flex-shrink: 0
}

.vl-person--annotation,
.vl-person--annotation .vl-person__description {
    color: #687483
}

.vl-person__image-wrapper {
    position: relative;
    display: inline-block;
    margin-bottom: .5em
}

.vl-person__image-wrapper:last-child {
    margin-bottom: 2.5rem
}

@media screen and (max-width:767px) {
    .vl-person__image-wrapper:last-child {
        margin-bottom: 1.5rem
    }
}

.vl-person__image {
    width: 14.5rem;
    max-width: 100%;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto
}

.vl-person--large .vl-person__image {
    width: 18rem
}

.vl-person__copyright {
    position: absolute;
    bottom: 0;
    right: 0;
    width: 100%;
    min-width: 200px;
    padding: 4px;
    height: auto;
    display: flex;
    align-items: flex-end;
    justify-content: flex-end
}

.vl-person__name {
    font-size: 2.2rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    line-height: 1.36;
    margin-bottom: .5rem;
    display: block
}

@media screen and (max-width:767px) {
    .vl-person__name {
        font-size: 2rem;
        margin-bottom: 1.4rem
    }
}

.vl-person--name-small .vl-person__name {
    font-size: 1.8rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    line-height: 1.44;
    margin-bottom: .5rem
}

@media screen and (max-width:767px) {
    .vl-person--name-small .vl-person__name {
        font-size: 1.8rem;
        margin-bottom: 1rem
    }
}

.vl-link .vl-person__name {
    color: #05c
}

.vl-link .vl-person__name:hover {
    color: #003bb0
}

.vl-link .vl-person__name:active,
.vl-link .vl-person__name:focus {
    color: #004099
}

.vl-person__description {
    font-size: 1.6rem;
    color: #4d4d4b
}

@media screen and (max-width:767px) {
    .vl-person__description {
        font-size: 1.6rem
    }
}

a.vl-person:focus .vl-person__name,
a.vl-person:hover .vl-person__name {
    text-decoration: underline
}

.vl-pill {
    display: inline-flex;
    max-width: 100%;
    align-items: center;
    background-color: #fff;
    font-size: 1.4rem;
    font-weight: 500;
    color: #4d4d4b;
    text-decoration: none;
    vertical-align: middle;
    border-radius: .3rem;
    border: .1rem solid #687483;
    transition: color .2s, background-color .2s, box-shadow .2s;
    padding: 0 1.4rem;
    line-height: 2.2rem;
    min-width: 0
}

.vl-pill__text {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    width: 100%
}

.vl-pill__close {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #05c;
    width: 2.4rem;
    height: 2.4rem;
    border: .1rem solid #687483;
    text-decoration: none;
    padding: 0;
    border-radius: 0 .3rem .3rem 0;
    transition: color .2s, background-color .2s, box-shadow .2s;
    margin: -.1rem -.1rem -.1rem 1.4rem;
    min-width: 2.4rem
}

.vl-pill__close:after,
.vl-pill__close:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-pill__close:before {
    content: "\f157"
}

.vl-pill__close:hover:not([disabled]) {
    color: #003bb0;
    box-shadow: inset 0 0 0 .1rem #05c;
    border: .1rem solid #05c;
    background-color: #e6eefa
}

.vl-pill__close:focus {
    outline: .2rem solid transparent;
    border: .1rem solid #05c;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65), inset 0 0 0 .1rem #05c
}

.vl-pill__close:before {
    display: inline-block;
    font-size: 1.4rem;
    text-indent: 0;
    line-height: 1
}

[dir=rtl] .vl-pill__close {
    border-left: 0;
    border-right: .1rem solid #687483
}

.is-disabled .vl-pill__close,
.vl-pill__close[disabled] {
    color: #687483;
    cursor: default
}

.vl-pill--success {
    background-color: #ecf6ee;
    border-color: #3ca854
}

.vl-pill--warning {
    background-color: #fff9e8;
    border-color: #ffc515
}

.vl-pill--error {
    background-color: #fbeded;
    border-color: #d9474b
}

.vl-pill--disabled,
.vl-pill--disabled:active,
.vl-pill--disabled:hover {
    background-color: #cbd2d9;
    color: #687483
}

.vl-pill--closable {
    padding-right: 0
}

.vl-pill--clickable:not(.vl-pill--disabled) {
    color: #05c
}

.vl-pill--clickable:not(.vl-pill--disabled):hover {
    background-color: #e6eefa;
    color: #003bb0;
    border-color: #5991de;
    box-shadow: inset 0 0 0 .1rem #05c
}

.vl-pill--clickable:not(.vl-pill--disabled):focus {
    outline: .2rem solid transparent;
    border-color: #5991de;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65), inset 0 0 0 .1rem #05c
}

.vl-pill--checkable {
    position: relative;
    padding-left: 3.6rem;
    margin-bottom: .3rem
}

.vl-pill--checkable:not(.vl-pill--disabled) {
    cursor: pointer;
    color: #05c
}

.vl-pill--checkable:not(.vl-pill--disabled):hover {
    box-shadow: inset 0 0 0 .1rem #05c;
    border: .1rem solid #05c;
    background-color: #e6eefa
}

.vl-pill--checkable__checkbox {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    width: .1rem;
    height: .1rem;
    padding: 0;
    margin: -.1rem
}

.vl-pill--checkable__checkbox[disabled]+span {
    background-color: #cbd2d9;
    color: #687483
}

.vl-pill--checkable__checkbox:not([disabled]):active+span,
.vl-pill--checkable__checkbox:not([disabled]):focus+span {
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65), inset 0 0 0 .1rem #05c;
    border: .1rem solid #05c
}

.vl-pill--checkable__checkbox:not([disabled]):checked+span {
    background: #05c
}

.vl-pill--checkable__checkbox:not([disabled]):checked+span:before {
    transform: translateZ(0) translate(-50%, -50%) scale(1)
}

.vl-pill--checkable__checkbox+span {
    position: absolute;
    display: inline-block;
    background: #fff;
    width: 2.4rem;
    height: 2.4rem;
    cursor: pointer;
    overflow: hidden;
    white-space: nowrap;
    border-top-left-radius: .3rem;
    border-bottom-left-radius: .3rem;
    transition: background-color .2s, box-shadow .2s;
    margin: 0 1.4rem 0 0;
    left: -.1rem;
    top: -.1rem;
    border: .1rem solid #687483
}

.vl-pill--checkable__checkbox+span:after,
.vl-pill--checkable__checkbox+span:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-pill--checkable__checkbox+span:before {
    content: "\f153";
    position: absolute;
    display: block;
    font-size: .8rem;
    color: #fff;
    line-height: 1;
    text-align: center;
    transition: all .3s cubic-bezier(1, .1, 0, .9) .1s, background-color .2, box-shadow .2s;
    transform: translateZ(0) translate(-50%, -50%) scale(0);
    top: 50%;
    left: 50%
}

.vl-pill--checkable__checkbox[disabled]+span {
    cursor: auto
}

.vl-pill-input__inner {
    display: inline-block;
    width: 100%;
    height: auto;
    min-height: 3.5rem;
    padding: 0 .5rem;
    line-height: 3.2rem;
    border: 1px solid #687483;
    border-radius: .3rem;
    color: #666;
    overflow: hidden;
    vertical-align: top
}

.vl-pill-input__inner,
.vl-pill-input__inner .vl-pill__input {
    max-width: 100%;
    font-family: Flanders Art Sans, sans-serif;
    font-size: 1.6rem
}

.vl-pill-input__inner .vl-pill__input {
    border: 0;
    outline: 0;
    background: transparent;
    transform: translateY(1px)
}

.vl-pill-input__inner .vl-pill__input.is-hidden {
    display: none
}

.is-disabled .vl-pill-input__inner {
    background-color: #f3f5f6;
    border-color: #b8c1cc;
    pointer-events: none
}

.is-focused .vl-pill-input__inner {
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

[dir=rtl] .vl-pill-input__inner {
    padding: 0 1rem 0 6rem
}

.vl-pill-input__list {
    line-height: 1
}

.vl-pill-input__list--multiple {
    display: inline
}

.vl-pill-input__list--multiple .vl-pill {
    vertical-align: middle;
    word-break: break-all;
    margin-right: .5rem
}

.vl-pill-input__list--multiple .vl-pill[data-deletable] {
    padding-right: 0
}

[dir=rtl] .vl-pill-input__list--multiple .vl-pill[data-deletable] {
    padding-right: .7rem;
    padding-left: 0
}

[dir=rtl] .vl-pill-input__list--multiple .vl-pill {
    margin: .3rem 0 0 .5rem
}

@-webkit-keyframes slideIn {
    0% {
        display: none
    }
    1% {
        display: block;
        opacity: 0
    }
    to {
        opacity: 1;
        transform: translateY(0)
    }
}

@keyframes slideIn {
    0% {
        display: none
    }
    1% {
        display: block;
        opacity: 0
    }
    to {
        opacity: 1;
        transform: translateY(0)
    }
}

@-webkit-keyframes slideOut {
    0% {
        transform: translateY(0);
        opacity: 1;
        display: block
    }
    99% {
        opacity: 0;
        transform: translateY(120%)
    }
    to {
        display: none
    }
}

@keyframes slideOut {
    0% {
        transform: translateY(0);
        opacity: 1;
        display: block
    }
    99% {
        opacity: 0;
        transform: translateY(120%)
    }
    to {
        display: none
    }
}

.vl-popover {
    display: inline-block;
    position: relative
}

.vl-popover .vl-popover__arrow {
    display: none;
    position: absolute;
    right: .5rem;
    bottom: -1.4rem;
    border-color: transparent transparent #b8c1cc;
    border-style: solid;
    border-width: 0 .9rem .9rem;
    z-index: 99999
}

.vl-popover .vl-popover__arrow:before {
    content: "";
    position: absolute;
    border-color: transparent transparent #fff;
    border-style: solid;
    border-width: 0 .9rem .9rem;
    transform: translate(-50%, 1px)
}

@media screen and (max-width:767px) {
    .vl-popover .vl-popover__arrow {
        display: none
    }
}

.vl-popover--align-left .vl-popover__arrow {
    left: 1.2rem;
    right: auto
}

.vl-popover--align-center .vl-popover__arrow {
    left: 50%;
    transform: translateX(-50%);
    right: auto;
    margin: auto
}

.vl-popover--align-top .vl-popover__arrow {
    top: -1.1rem;
    bottom: auto;
    transform: scale(-1)
}

.vl-popover .vl-popover__toggle {
    border-radius: 0;
    -moz-appearance: none;
    appearance: none;
    -webkit-appearance: none;
    border: 0;
    background-color: transparent;
    padding: 0;
    text-decoration: none;
    display: inline-block;
    font-size: 1.6rem;
    font-family: Flanders Art Sans, sans-serif
}

.vl-popover .vl-popover__toggle .vl-vi-arrow {
    transition: transform .2s cubic-bezier(1, .1, 0, .9)
}

.vl-popover .vl-popover__toggle .vl-popover__toggle-icon {
    margin-left: .8rem
}

.vl-popover.js-vl-popover--open .vl-popover__arrow {
    display: block
}

@media screen and (max-width:767px) {
    .vl-popover.js-vl-popover--open .vl-popover__arrow {
        display: none
    }
}

@media screen and (max-width:767px) {
    .vl-popover.js-vl-popover--open .vl-popover__content {
        display: block;
        opacity: 0;
        -webkit-animation: slideIn .5s cubic-bezier(1, .1, 0, .9);
        animation: slideIn .5s cubic-bezier(1, .1, 0, .9);
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards
    }
}

@media screen and (min-width:767px) {
    .vl-popover.js-vl-popover--open .vl-popover__content {
        visibility: visible;
        opacity: 1
    }
}

.vl-popover.js-vl-popover--open .vl-vi-arrow {
    transform: rotate(-180deg)
}

@media screen and (max-width:767px) {
    .vl-popover.js-vl-popover--closing .vl-popover__content {
        will-change: transform;
        display: block;
        -webkit-animation: slideOut .5s cubic-bezier(1, .1, 0, .9);
        animation: slideOut .5s cubic-bezier(1, .1, 0, .9);
        -webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards
    }
}

.vl-popover .vl-popover__close-btn {
    padding: 1.5rem;
    display: none;
    position: absolute;
    right: 0;
    top: 0;
    border: 0;
    font-size: 1.6rem
}

.vl-popover .vl-popover__close-btn:hover {
    color: #05c
}

.vl-popover .vl-popover__close-btn:focus {
    color: #004099
}

@media screen and (max-width:767px) {
    .vl-popover .vl-popover__close-btn {
        display: inline-flex;
        top: -4.5rem;
        font-size: 1.4rem
    }
}

.vl-popover--closable .vl-popover__close-btn {
    display: inline-flex
}

.vl-backdrop {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 10008;
    background-color: hsla(0, 0%, 100%, .8);
    -webkit-backdrop-filter: blur(2px);
    backdrop-filter: blur(2px);
    opacity: 0;
    z-index: -1;
    transition: opacity .4s cubic-bezier(1, .1, 0, .9), z-index .4s cubic-bezier(1, .1, 0, .9);
    will-change: opacity
}

@media screen and (max-width:767px) {
    .vl-backdrop--active {
        opacity: 1;
        z-index: 10008
    }
}

.vl-popover__content-overflow {
    max-height: 30rem;
    overflow-y: auto;
    padding: 2rem
}

@media screen and (max-width:767px) {
    .vl-popover__content-overflow {
        max-height: 65vh
    }
}

@media screen and (min-width:767px) {
    .vl-popover__content-overflow {
        max-height: 20rem
    }
}

@media screen and (min-width:767px) {
    .vl-popover--closable .vl-popover__content-overflow {
        padding-right: 5rem
    }
}

.vl-popover__content {
    background-color: #fff;
    box-shadow: 0 0 2.1rem 0 rgba(0, 0, 0, .1);
    width: 23rem;
    min-width: 23rem;
    max-width: 90vw;
    z-index: 10003;
    border: .1rem solid #b8c1cc
}

@media screen and (max-width:767px) {
    .vl-popover__content {
        width: 100%;
        max-width: 100%;
        margin: 0;
        position: fixed!important;
        bottom: 0;
        left: 0;
        top: auto!important;
        display: none;
        z-index: 10009!important;
        transform: translateY(120%)
    }
}

@media screen and (min-width:767px) {
    .vl-popover__content {
        visibility: hidden;
        opacity: 0;
        margin: .3rem 0 0
    }
}

@media screen and (min-width:767px) {
    .vl-popover--large .vl-popover__content {
        width: 45rem
    }
}

.vl-popover .vl-link-list,
.vl-popover__link-list {
    padding: 0
}

.vl-popover .vl-link-list .vl-link-list__item,
.vl-popover .vl-link-list li,
.vl-popover__link-list .vl-link-list__item,
.vl-popover__link-list li {
    padding: .6rem 0
}

.vl-popover .vl-link-list .vl-link-list__item:first-child,
.vl-popover .vl-link-list li:first-child,
.vl-popover__link-list .vl-link-list__item:first-child,
.vl-popover__link-list li:first-child {
    padding-top: 0
}

.vl-popover--closable .vl-popover .vl-link-list .vl-link-list__item:first-child,
.vl-popover--closable .vl-popover .vl-link-list li:first-child,
.vl-popover--closable .vl-popover__link-list .vl-link-list__item:first-child,
.vl-popover--closable .vl-popover__link-list li:first-child {
    max-width: calc(100% - 4.5rem)
}

.vl-popover .vl-link-list .vl-link-list__item:last-of-type,
.vl-popover .vl-link-list li:last-of-type,
.vl-popover__link-list .vl-link-list__item:last-of-type,
.vl-popover__link-list li:last-of-type {
    padding-bottom: 0;
    margin-bottom: 0
}

.vl-popover .vl-link-list .vl-link-list__item.vl-popover__link-list__separator,
.vl-popover .vl-link-list li.vl-popover__link-list__separator,
.vl-popover__link-list .vl-link-list__item.vl-popover__link-list__separator,
.vl-popover__link-list li.vl-popover__link-list__separator {
    height: .1rem;
    background: #cbd2da;
    padding: 0;
    margin: .5rem 0
}

.vl-popover .vl-link-list--bordered .vl-popover .vl-link-list__item:not(:last-of-type) .vl-link,
.vl-popover .vl-link-list--bordered .vl-popover__link-list__item:not(:last-of-type) .vl-link,
.vl-popover__link-list--bordered .vl-popover .vl-link-list__item:not(:last-of-type) .vl-link,
.vl-popover__link-list--bordered .vl-popover__link-list__item:not(:last-of-type) .vl-link {
    position: relative
}

.vl-properties__title {
    font-size: 2rem;
    font-weight: 500;
    margin-bottom: 2rem
}

@media screen and (max-width:767px) {
    .vl-properties__title {
        font-size: 1.8rem
    }
}

.vl-properties__list {
    display: flex;
    flex-wrap: wrap
}

.vl-properties--full-width .vl-properties__list {
    display: grid;
    grid-template-columns: minmax(0, 17rem) 75%;
    grid-template-rows: 1fr;
    grid-gap: 0 1rem;
    grid-template-areas: ". ."
}

@media screen and (max-width:767px) {
    .vl-properties--full-width .vl-properties__list {
        grid-template-columns: 1fr;
        grid-template-rows: 1fr;
        grid-gap: 0 0;
        grid-template-areas: "."
    }
}

.vl-properties__data,
.vl-properties__label {
    font-size: 1.8rem;
    overflow-x: hidden;
    text-overflow: ellipsis;
    padding-bottom: 2rem
}

.vl-properties__data--small,
.vl-properties__label--small {
    padding-bottom: .5rem
}

@media screen and (max-width:767px) {
    .vl-properties__data,
    .vl-properties__label {
        font-size: 1.6rem;
        padding-bottom: .5rem
    }
    .vl-properties__data--small,
    .vl-properties__label--small {
        padding-bottom: .5rem
    }
}

.vl-properties__label {
    flex: 0 0 25%;
    color: #687483;
    padding-right: 1rem;
    max-width: 17rem
}

.vl-properties__label--has-input {
    padding-top: .7rem
}

@media screen and (max-width:767px) {
    .vl-properties__label {
        flex: 0 0 100%;
        padding-right: 0
    }
}

.vl-properties--full-width .vl-properties__label {
    flex: none;
    max-width: none;
    padding-right: 0
}

.vl-properties__data {
    flex: 0 0 75%;
    flex-grow: 3
}

@media screen and (max-width:767px) {
    .vl-properties__data {
        flex: 0 0 100%;
        padding-bottom: 1.5rem
    }
}

.vl-properties--full-width .vl-properties__data {
    flex: none
}

.vl-properties__column {
    display: inline-block;
    width: calc(50% - 1rem)
}

@media screen and (max-width:767px) {
    .vl-properties__column {
        width: 100%;
        padding-right: 0
    }
}

.vl-properties__column+.vl-properties__column {
    padding-right: 0;
    padding-left: 1rem
}

@media screen and (max-width:767px) {
    .vl-properties__column+.vl-properties__column {
        padding-left: 0
    }
}

.vl-properties__column--full {
    width: 100%;
    padding-left: 0!important
}

.vl-properties__column--full .vl-properties__label {
    flex: 0 0 calc(13% - 0.85rem)
}

@media screen and (max-width:767px) {
    .vl-properties__column--full .vl-properties__label {
        flex: 0 0 40%
    }
}

.vl-properties__column--full .vl-properties__data {
    flex: 0 0 85%
}

@media screen and (max-width:767px) {
    .vl-properties__column--full .vl-properties__data {
        flex: 0 0 60%
    }
}

.vl-properties .vl-form__buttons {
    padding-top: 3rem
}

.vl-publication {
    display: flex;
    align-items: center;
    position: relative
}

.vl-publication .vl-link {
    box-shadow: none;
    text-decoration: none
}

.vl-publication__image {
    box-shadow: 0 1px 6px 0 #cfd5dd;
    margin-right: 3.6rem;
    max-width: 10rem
}

@media screen and (max-width:500px) {
    .vl-publication__image {
        margin-bottom: 1rem;
        margin-right: 2rem;
        max-width: 5rem
    }
}

.vl-publication__header .vl-link {
    display: inline
}

.vl-publication__header .vl-link:active,
.vl-publication__header .vl-link:focus {
    outline: .2rem solid transparent;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

.vl-publication__annotation {
    margin-top: .3rem;
    font-size: 1.6rem
}

.vl-publication__intro {
    margin-top: 1rem
}

.vl-publication__link-wrapper {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0
}

.vl-publication__link-wrapper:focus~.vl-publication__info .vl-link,
.vl-publication__link-wrapper:hover~.vl-publication__info .vl-link {
    text-decoration: underline
}

.vl-publication__info {
    width: 100%
}

.vl-publication__pill {
    margin: 0 .5rem;
    transform: translateY(-1px)
}

.vl-publication__meta-data {
    padding-top: .6rem
}

.vl-publication__meta-list {
    text-transform: capitalize
}

.vl-quote {
    display: flex;
    align-items: flex-start;
    position: relative
}

@media screen and (max-width:767px) {
    .vl-quote {
        padding-top: 5rem;
        padding-left: 2.5rem
    }
}

.vl-quote--center {
    text-align: center;
    padding-left: 0
}

@media screen and (max-width:767px) {
    .vl-quote--center .vl-person--horizontal {
        display: block;
        text-align: center
    }
    .vl-quote--center .vl-person__image-wrapper {
        margin: 0 0 1.5rem
    }
}

.vl-quote--center .vl-quote__text {
    text-align: center
}

.vl-quote--center .vl-quote__author-container {
    display: inline-block;
    margin: 0 auto;
    text-align: left
}

.vl-quote--center .vl-quote__reference {
    text-align: center
}

.vl-quote--center .vl-quote__quotation-mark {
    left: 50%;
    transform: translateX(-50%)
}

.vl-quote--center .vl-quote__authors .vl-person:only-child {
    margin: 0 auto
}

.vl-quote__quotation-mark {
    display: flex;
    flex: 0 0 7rem;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 0;
    color: #fff073;
    color: var(--vl-theme-primary-color-60);
    overflow: hidden;
    transform: translate(-5rem, -3rem)
}

@media screen and (max-width:1023px) {
    .vl-quote__quotation-mark {
        transform: translate(-2rem, -3rem)
    }
}

@media screen and (max-width:767px) {
    .vl-quote__quotation-mark {
        transform: translate(0)
    }
}

.vl-quote__quotation-mark:first-child {
    margin-right: 3rem
}

.vl-quote__quotation-mark:last-child {
    margin-left: 3rem
}

.vl-quote__quotation-mark:before {
    content: "\201C";
    font-size: 55rem;
    line-height: .85;
    height: 16rem;
    pointer-events: none;
    color: #ffe615;
    color: var(--vl-theme-primary-color);
    position: relative;
    z-index: 0
}

@supports (-webkit-background-clip:text) {
    .vl-quote__quotation-mark:before {
        background: #ffe615 url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background: var(--vl-theme-primary-color) url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background-size: 16px 16px;
        -webkit-background-clip: text;
        background-clip: text;
        color: #ffe615;
        color: var(--vl-theme-primary-color);
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent
    }
}

@supports ((-webkit-background-clip:text) or (background-clip:text)) {
    .vl-quote__quotation-mark:before {
        background: #ffe615 url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background: var(--vl-theme-primary-color) url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background-size: 16px 16px;
        -webkit-background-clip: text;
        background-clip: text;
        color: #ffe615;
        color: var(--vl-theme-primary-color);
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent
    }
}

@media screen and (max-width:1023px) {
    .vl-quote__quotation-mark:before {
        font-size: 40rem
    }
}

.vl-quote__image {
    display: none
}

.vl-quote__content {
    color: #333332;
    line-height: 1;
    z-index: 1;
    position: relative
}

.vl-quote__text {
    font-size: 3.6rem;
    font-weight: 300;
    line-height: 1.25;
    margin-top: 2rem;
    margin-bottom: 2.5rem;
    position: relative;
    z-index: 2
}

@media screen and (max-width:767px) {
    .vl-quote__text {
        font-size: 2.4rem
    }
}

.vl-quote__authors {
    width: 100%
}

.vl-quote__authors .vl-person {
    margin-bottom: 1rem
}

.vl-quote__authors .vl-person:only-child {
    max-width: 55rem;
    margin: 0
}

@media screen and (min-width:767px) {
    .vl-quote__authors .vl-person:not(: only-child) .vl-person__info {
        display: flex
    }
    .vl-quote__authors .vl-person:not(:only-child) .vl-person__info .vl-person__name {
        width: 20rem;
        padding-right: 1rem;
        flex-shrink: 0
    }
}

.vl-quote__reference {
    font-size: 1.6rem;
    line-height: 1.1875;
    margin-top: 2rem;
    display: inline-block
}

@media screen and (max-width:767px) {
    .vl-quote__reference {
        font-size: 1.5rem
    }
}

@media screen and (max-width:767px) {
    .vl-quote__large-img {
        margin-top: 1rem
    }
}

.vl-radio {
    position: relative;
    display: inline-block;
    margin-top: .2rem;
    margin-right: 5rem
}

.vl-radio:not(.vl-radio--block):not(:last-of-type) {
    margin-right: 1.5rem
}

.vl-radio__label {
    position: relative;
    padding: 0 0 0 2.4rem;
    line-height: 2.8rem;
    font-size: 1.6rem
}

.vl-radio__label:after,
.vl-radio__label:before {
    position: absolute;
    display: block;
    content: "";
    cursor: pointer;
    border-radius: 100%
}

.vl-radio__label:before {
    background-color: #fff;
    height: 6px;
    width: 6px;
    top: 10px;
    left: 6px;
    transform: scale(0);
    transition: border-color .2s cubic-bezier(1, .1, 0, .9);
    z-index: 2
}

@media screen and (max-width:767px) {
    .vl-radio__label:before {
        font-size: 1.6rem
    }
}

.vl-radio__label:after {
    background-color: #fff;
    width: 18px;
    height: 18px;
    top: 4px;
    left: 0;
    border: .1rem solid #b8c1cc;
    text-indent: 100%;
    overflow: hidden;
    white-space: nowrap;
    transition: border-color .2s cubic-bezier(1, .1, 0, .9), box-shadow .1s cubic-bezier(1, .1, 0, .9);
    z-index: 1
}

.vl-radio__toggle {
    position: absolute;
    overflow: hidden;
    clip: rect(0 0 0 0);
    width: .1rem;
    height: .1rem;
    padding: 0;
    margin: -.1rem
}

.vl-radio__toggle:focus+.vl-radio__label:after {
    outline: .2rem solid transparent;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

.vl-radio__toggle:checked+.vl-radio__label:before {
    transform: scale(1);
    background-color: #fff
}

.vl-radio__toggle:checked+.vl-radio__label:after {
    background: #05c;
    border: 0
}

.vl-radio--block {
    display: block;
    margin: 0
}

.vl-radio--disabled .vl-radio__label {
    color: #687483
}

.vl-radio--disabled .vl-radio__label:after {
    background-color: #b8c1cc;
    border-color: #b8c1cc
}

.vl-radio--disabled .vl-radio__toggle:checked+.vl-radio__label:before {
    background-color: #b8c1cc
}

.vl-radio--disabled .vl-radio__toggle:checked+.vl-radio__label:after {
    background: #b8c1cc;
    border: .1rem solid #b8c1cc
}

.vl-radio--single {
    margin: 0
}

.vl-radio--single .vl-radio__label {
    padding: 0
}

.vl-radio--single .vl-radio__label:after {
    position: relative
}

.vl-radio--error .vl-radio__label:after,
.vl-radio.invalid.validated .vl-radio__label:after {
    background-color: #fff;
    border-color: #db3434
}

.vl-radio--error .vl-radio__toggle:checked+.vl-radio__label:before,
.vl-radio.invalid.validated .vl-radio__toggle:checked+.vl-radio__label:before {
    background-color: #db3434
}

.vl-radio--error .vl-radio__toggle:checked+.vl-radio__label:after,
.vl-radio.invalid.validated .vl-radio__toggle:checked+.vl-radio__label:after {
    background-color: #fff;
    border: .1rem solid #db3434
}

.vl-radio--success .vl-radio__label:after {
    background-color: #fff;
    border-color: #3ca854
}

.vl-radio--success .vl-radio__toggle:checked+.vl-radio__label:before {
    background-color: #3ca854
}

.vl-radio--success .vl-radio__toggle:checked+.vl-radio__label:after {
    background-color: #fff;
    border: .1rem solid #3ca854
}

.vl-search {
    position: relative
}

.vl-search--inline {
    display: inline-block;
    width: 25rem;
    max-width: 100%
}

@media screen and (max-width:767px) {
    .vl-search--inline {
        display: block;
        width: auto
    }
}

.vl-search--inline .vl-search__label,
.vl-search--inline .vl-search__submit {
    display: block;
    padding: 0;
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 4.3rem;
    color: #fff;
    font-size: 0!important
}

.vl-search--inline .vl-search__label .vl-vi,
.vl-search--inline .vl-search__submit .vl-vi {
    font-size: 1.7rem;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%)
}

.vl-search--inline .vl-search__label {
    color: #333332
}

.vl-search--inline .vl-search__submit {
    z-index: -1;
    opacity: 0;
    transform: translateX(100%);
    margin-bottom: -2rem;
    height: 3.5rem
}

.vl-search--inline .vl-search__input:focus,
.vl-search--inline .vl-search__input:focus+.vl-search__submit,
.vl-search--inline .vl-search__submit:focus,
.vl-search--inline .vl-search__submit:focus+.vl-search__submit {
    transition: opacity .2s, transform .2s;
    z-index: 1;
    opacity: 1;
    transform: translateX(0)
}

.vl-search--inline .vl-search__submit:focus {
    transition: none
}

.vl-search--inline .vl-search__input {
    display: block;
    width: 100%;
    text-align: left;
    padding-right: 5rem
}

.vl-search--inline .vl-search__input:focus {
    transition: width .2s;
    width: calc(100% - 4.7rem);
    padding-right: 0
}

.vl-search--inline .vl-search__input:valid+.vl-search__submit {
    transition: none;
    z-index: 1;
    opacity: 1;
    transform: translateX(0)
}

.vl-search--block {
    display: flex;
    flex-direction: row;
    align-items: center;
    padding: 2rem 1.5rem;
    background-color: #f7f9fc
}

@media screen and (max-width:767px) {
    .vl-search--block {
        position: relative;
        width: 100vw;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
        display: block;
        padding: 1.5rem 1rem
    }
}

.vl-search--block .vl-search__label {
    color: #4d4d4b;
    font-weight: 400;
    font-size: 1.6rem;
    flex: 1;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

@media screen and (max-width:767px) {
    .vl-search--block .vl-search__label {
        font-size: 1.6rem
    }
}

.vl-search--block .vl-search__input {
    flex: 6;
    margin: 0 2rem
}

@media screen and (max-width:1023px) {
    .vl-search--block .vl-search__input {
        margin: 0 1rem;
        flex: 4
    }
}

@media screen and (max-width:767px) {
    .vl-search--block .vl-search__input {
        display: block;
        width: 100%;
        margin: 0 0 1.5rem
    }
}

.vl-search--block.vl-search--alt {
    background-color: #fff
}

.vl-search-filter {
    padding: 1.3rem 0 2rem
}

.vl-search-filter .vl-search-filter__field__label {
    color: #4d4d4b;
    font-weight: 400;
    font-size: 1.6rem
}

@media screen and (max-width:767px) {
    .vl-search-filter .vl-search-filter__field__label {
        font-size: 1.6rem
    }
}

.vl-search-filter--alt {
    padding: 0 0 2rem
}

@media screen and (max-width:767px) {
    .vl-search-filter--mobile-modal {
        display: flex;
        background-color: #fff;
        flex-direction: column;
        position: fixed;
        padding: 0;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        height: 100vh;
        z-index: 100020
    }
}

.vl-search-filter__intro {
    text-transform: uppercase;
    font-weight: 500;
    border-bottom: 3px solid #e8ebee;
    font-size: 1.8rem;
    padding: 0 0 .7rem;
    margin: 0 0 2rem
}

.vl-search-filter__section {
    padding-bottom: 2rem;
    margin-bottom: 2rem;
    border-bottom: 1px solid #cbd2da
}

.vl-search-filter__section--no-border,
.vl-search-filter__section:last-child {
    border-bottom: 0
}

.vl-search-filter__section--border {
    border-bottom: 1px solid #cbd2da
}

.vl-search-filter__section-title {
    font-size: 1.5rem;
    display: block;
    text-transform: uppercase;
    margin-bottom: 1.2rem;
    letter-spacing: .1rem;
    font-weight: 500
}

@media screen and (max-width:767px) {
    .vl-search-filter__section-title {
        font-size: 1.4rem
    }
}

.vl-search-filter__form {
    padding: 2rem;
    background-color: #e8ebee
}

.vl-region--alt .vl-search-filter__form {
    background-color: #fff
}

.vl-search-filter--alt .vl-search-filter__form {
    padding: 0;
    background-color: transparent
}

@media screen and (max-width:767px) {
    .vl-search-filter--alt .vl-search-filter__form {
        padding: 0 2rem 55px
    }
}

@media screen and (max-width:767px) {
    .vl-search-filter--alt.vl-search-filter--mobile-modal .vl-search-filter__form {
        padding: 15px 3rem 5rem
    }
}

@media screen and (max-width:767px) {
    .vl-search-filter__form {
        margin-left: -1.5rem;
        margin-right: -1.5rem;
        padding: 1.5rem
    }
}

@media screen and (max-width:767px) {
    .vl-search-filter--mobile-modal .vl-search-filter__form {
        padding: 15px 3rem;
        flex: 1;
        overflow-y: auto
    }
}

.vl-search-filter__field {
    margin-bottom: .75rem
}

.vl-search-filter__field:last-child {
    margin-bottom: 0
}

.vl-search-filter__field__label {
    margin-bottom: .5rem
}

.vl-search-filter__footer {
    margin-top: 1.5rem
}

.vl-search-filter__header-modal {
    display: none
}

@media screen and (max-width:767px) {
    .vl-search-filter__header-modal {
        padding: 10px 15px;
        border-bottom: 1px solid #b8c1cc;
        display: flex;
        align-items: center
    }
    .vl-search-filter__header-modal .vl-title {
        margin-bottom: 0
    }
}

.vl-search-filter__header__clear {
    margin: 0 15px
}

.vl-search-filter__footer-modal {
    display: none
}

@media screen and (max-width:767px) {
    .vl-search-filter__footer-modal {
        display: block;
        position: fixed;
        padding: 10px 15px;
        width: 100%;
        bottom: 0;
        left: 0;
        right: 0;
        border-top: 1px solid #b8c1cc;
        background-color: #fff;
        z-index: 2;
        box-shadow: 0 0 20px 0 rgba(0, 0, 0, .1)
    }
}

.vl-search-filter-section__collapse-toggle {
    margin-top: 1.5rem
}

.vl-search-filter-section__collapse-toggle .vl-link__icon {
    transform: translateY(-1px)
}


.vl-select:focus::-ms-value {
    background: inherit;
    color: inherit
}

.vl-select::-ms-expand {
    display: none
}

.vl-select:hover:not([disabled]) {
    border: .2rem solid rgba(0, 85, 204, .65);
    padding: 0 3.9rem 0 1.4rem;
    line-height: 3.2rem;
    background-position: calc(100% - 1.4rem) 50%
}

.vl-select:hover:not([disabled]).invalid.validated,
.vl-select:hover:not([disabled]).vl-select--error {
    border-color: #db3434
}

.vl-select:hover:not([disabled]).valid.validated,
.vl-select:hover:not([disabled]).vl-select--success {
    border-color: #3ca854
}

.vl-select:focus {
    outline: .2rem solid transparent;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

.vl-select--disabled,
.vl-select[disabled] {
    border-color: #b8c1cc;
    background-color: #f3f5f6;
    color: #707070;
    color: var(--vl-theme-fg-color-70)
}

.vl-select--block {
    display: block;
    width: 100%
}

@media screen and (max-width:767px) {
    .vl-select {
        height: 3.5rem;
        line-height: 3.5rem;
        font-size: 1.6rem
    }
}

@media (min-width:0\0) and (min-resolution:0.001dpcm) {
    .vl-select {
        padding-right: 0;
        background-image: none
    }
}

.no-js [data-vl-select]:focus::-ms-value {
    background: inherit;
    color: inherit
}

.js-vl-select {
    position: relative;
    border-radius: .3rem;
    z-index: 999
}

.js-vl-select.is-disabled {
    border-color: #687483;
    background-color: #f3f5f6!important;
    outline: 0
}

.js-vl-select.is-disabled .vl-select__inner {
    border-color: #b8c1cc
}

.js-vl-select.is-disabled .vl-select__item {
    color: #707070;
    color: var(--vl-theme-fg-color-70);
    cursor: default
}

.js-vl-select.is-focused {
    outline: .2rem solid transparent;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

.js-vl-select.is-open .vl-select__inner {
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0
}

.js-vl-select.is-open:after {
    transform: translateY(-.75rem);
    border-color: transparent transparent #000
}

.js-vl-select.is-flipped .vl-select__inner {
    border-radius: 0 0 .3rem .3rem
}

.js-vl-select.is-flipped .vl-select__list--dropdown {
    top: auto;
    bottom: 100%;
    transform: translateY(.1rem);
    border-radius: .3rem .3rem 0 0
}

.js-vl-select:hover:not(.is-disabled) .vl-select__inner {
    border-color: rgba(0, 85, 204, .65);
    box-shadow: inset 0 0 0 .1rem rgba(0, 85, 204, .65)
}

.js-vl-select[data-type*=select-one] .vl-input-field {
    display: block;
    padding: 0;
    color: #333332;
    overflow: hidden;
    white-space: nowrap
}

.js-vl-select[data-type*=select-one] .vl-select__list--dropdown .vl-input-field {
    width: calc(100% - 4rem);
    margin: 2rem;
    padding: 0 1rem;
    border: .1rem solid #687483
}

.js-vl-select[data-type*=select-one] .vl-select__item--selectable {
    min-height: 2.3rem;
    height: 2.3rem
}

.js-vl-select[data-type*=select-one] .vl-select__inner {
    height: 3.5rem;
    line-height: 3.5rem;
    padding-right: 3.5rem
}

.js-vl-select[data-type*=select-one][dir=rtl]:after {
    right: auto;
    left: 1.15rem
}

.js-vl-select[data-type*=select-one][dir=rtl] .vl-select__button {
    right: auto;
    left: 0;
    margin-right: 0;
    margin-left: 2.5rem
}

.js-vl-select[data-type*=select-one][dir=rtl] .vl-pill__close {
    margin-right: auto;
    margin-left: 0
}

.js-vl-select[data-type*=select-one] .vl-select__button {
    border: 0
}

.js-vl-select[data-type*=select-one] .vl-pill__close {
    border: 0;
    display: inline-flex;
    margin-left: auto
}

.js-vl-select[data-type*=select-one] .vl-pill__close:after,
.js-vl-select[data-type*=select-one] .vl-pill__close:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.js-vl-select[data-type*=select-one] .vl-pill__close:before {
    content: "\f173"
}

.js-vl-select[data-type*=select-one] .vl-pill__close:active,
.js-vl-select[data-type*=select-one] .vl-pill__close:focus,
.js-vl-select[data-type*=select-one] .vl-pill__close:hover {
    color: #003bb0
}

.js-vl-select[data-type*=select-one].is-disabled .vl-pill__close,
.js-vl-select[data-type*=select-one] .vl-select__placeholder .vl-pill__close {
    display: none
}

.js-vl-select[data-type*=select-multiple],
.js-vl-select[data-type*=text] {
    background-color: #fff
}

.js-vl-select[data-type*=select-multiple] .vl-select__inner,
.js-vl-select[data-type*=text] .vl-select__inner {
    cursor: text
}

.js-vl-select[data-type*=select-multiple] .vl-select__button,
.js-vl-select[data-type*=text] .vl-select__button {
    display: inline-block;
    width: 2.2rem;
    height: 2.3rem;
    margin-left: .5rem;
    transform: translateY(-.1rem);
    border-left: .1rem solid #687483;
    color: #666;
    text-align: center;
    text-decoration: none
}

.js-vl-select[data-type*=select-multiple] .vl-select__button:after,
.js-vl-select[data-type*=select-multiple] .vl-select__button:before,
.js-vl-select[data-type*=text] .vl-select__button:after,
.js-vl-select[data-type*=text] .vl-select__button:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.js-vl-select[data-type*=select-multiple] .vl-select__button:before,
.js-vl-select[data-type*=text] .vl-select__button:before {
    content: "\f173";
    padding: 0 .4rem;
    font-size: 1.1rem;
    text-indent: 0
}

.js-vl-select[data-type*=select-multiple] .vl-select__button:focus,
.js-vl-select[data-type*=select-multiple] .vl-select__button:hover,
.js-vl-select[data-type*=text] .vl-select__button:focus,
.js-vl-select[data-type*=text] .vl-select__button:hover {
    opacity: 1
}

.js-vl-select[data-type*=select-multiple] .vl-input-field,
.js-vl-select[data-type*=text] .vl-input-field {
    display: inline;
    padding: 0;
    line-height: 2.2rem;
    height: 2.4rem
}

.js-vl-select[data-type*=select-multiple] .vl-input-field:focus,
.js-vl-select[data-type*=text] .vl-input-field:focus {
    outline: 0;
    box-shadow: none
}

.js-vl-select__group {
    padding: .3rem .5rem .3rem 0;
    border-top: .1rem solid #687483;
    text-decoration: none
}

.js-vl-select .vl-select__inner {
    padding: .5rem 6rem .4rem 1rem;
    border: .1rem solid #687483;
    border-radius: .3rem;
    color: #666;
    font-family: Flanders Art Sans, sans-serif;
    overflow: hidden
}

.is-open .js-vl-select .vl-select__inner {
    border-bottom: 0
}

.js-vl-select .vl-select__list {
    margin: 0;
    padding: 0;
    list-style: none
}

.js-vl-select .vl-select__list--single {
    display: inline-block;
    width: 100%
}

[dir=rtl] .js-vl-select .vl-select__list--single {
    padding-right: .5rem;
    padding-left: 1.5rem
}

.js-vl-select .vl-select__list--multiple {
    display: inline-flex;
    align-content: center;
    max-width: 100%
}

.js-vl-select .vl-select__list--multiple .vl-select__item {
    margin: .2rem .6rem .5rem 0;
    display: inline-flex
}

.js-vl-select .vl-select__list--multiple .vl-select__item[data-deletable] {
    padding-right: 0
}

[dir=rtl] .js-vl-select .vl-select__list--multiple--multiple {
    margin-right: 0;
    margin-left: .375rem
}

.js-vl-select .vl-select__list--multiple .vl-input-field {
    padding: .4rem 0 .4rem .2rem
}

.js-vl-select .vl-select__list--dropdown {
    display: none;
    position: absolute;
    top: 100%;
    width: 100%;
    transform: translateY(-.1rem);
    border: .1rem solid #687483;
    background-color: #fff;
    z-index: 1;
    border-bottom-left-radius: .3rem;
    border-bottom-right-radius: .3rem
}

.js-vl-select .vl-select__list--dropdown.is-active {
    display: block
}

.js-vl-select .vl-select__list--dropdown .vl-select__list {
    position: relative;
    max-height: 35vh;
    overflow: auto;
    will-change: scroll-position;
    -webkit-overflow-scrolling: touch
}

.js-vl-select .vl-select__list--dropdown .vl-input-field+.vl-select__list {
    border-top: .1rem solid #687483
}

.js-vl-select .vl-select__list--dropdown .vl-select__item {
    width: 100%;
    min-height: 0;
    height: auto;
    padding-top: .8rem;
    padding-bottom: .8rem;
    padding-left: 3rem;
    border: 0;
    color: #000;
    font-weight: 400;
    text-decoration: none
}

.js-vl-select .vl-select__list--dropdown .vl-select__item:not(:first-of-type) {
    border-top: .1rem solid #cbd2da
}

[dir=rtl] .js-vl-select .vl-select__list--dropdown .vl-select__item {
    text-align: right
}

@media screen and (min-width:767px) {
    .js-vl-select .vl-select__list--dropdown .vl-select__item--selectable {
        padding-right: 10rem
    }
    .js-vl-select .vl-select__list--dropdown .vl-select__item--selectable:after {
        position: absolute;
        top: 50%;
        right: 1rem;
        transform: translateY(-50%);
        content: attr("data-select-text");
        opacity: .5
    }
    [dir=rtl] .js-vl-select .vl-select__list--dropdown .vl-select__item--selectable {
        padding-right: 1rem;
        padding-left: 10rem;
        text-align: right
    }
    [dir=rtl] .js-vl-select .vl-select__list--dropdown .vl-select__item--selectable:after {
        right: auto;
        left: 1rem
    }
}

.js-vl-select .vl-select__list--dropdown .vl-select__item--selectable.is-highlighted {
    position: relative;
    background-color: rgba(179, 207, 245, .3)
}

.js-vl-select .vl-select__list--dropdown .vl-select__item[aria-selected=true] {
    background-color: rgba(179, 207, 245, .3)
}

.js-vl-select .vl-select__item {
    cursor: default;
    display: flex;
    align-items: center
}

.js-vl-select .vl-select__item--disabled {
    background-color: #f3f5f6!important;
    border-color: #b8c1cc;
    color: #707070!important;
    color: var(--vl-theme-fg-color-70)!important;
    cursor: not-allowed;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none
}

.js-vl-select .vl-select__item--disabled:hover {
    background-color: #f3f5f6
}

.js-vl-select .vl-select__item span {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.js-vl-select .vl-input-field {
    display: inline-block;
    max-width: 100%;
    border: 0;
    background-color: transparent;
    vertical-align: baseline
}

[dir=rtl] .js-vl-select .vl-input-field {
    padding-right: .2rem;
    padding-left: 0
}

.js-vl-select .vl-select__placeholder {
    opacity: .5
}

.js-vl-select .vl-select__group {
    display: block
}

.js-vl-select .vl-select__group:not(:first-of-type) {
    border-top: .1rem solid #687483
}

.js-vl-select .vl-select__group .vl-select__heading {
    padding: .6rem 2rem;
    color: #4d4d4b;
    font-weight: 500
}

.vl-select--error .js-vl-select {
    background-color: #d9474b;
    border: .2rem solid #db3434;
    box-shadow: inset 0 0 0 .1rem #db3434
}

.vl-select--error .js-vl-select:focus {
    background-color: #fff
}

.vl-select--success .js-vl-select {
    background-color: #ecf6ee;
    border: .2rem solid #3ca854
}

.vl-side-navigation {
    max-height: 90vh;
    overflow: auto;
    padding: 5px 5px 5px 12px
}

@media screen and (min-width:767px) {
    .vl-side-navigation::-webkit-scrollbar {
        width: 16px;
        height: 20px
    }
    .vl-side-navigation::-webkit-scrollbar-thumb {
        height: 8px;
        border: 6px solid transparent;
        border-radius: 7px;
        background-clip: padding-box;
        background-color: #e8ebee
    }
    .vl-side-navigation::-webkit-scrollbar-button {
        display: none;
        width: 0;
        height: 0
    }
    .vl-side-navigation::-webkit-scrollbar-corner {
        background-color: transparent
    }
}

@media screen and (max-width:767px) {
    .vl-side-navigation {
        display: none;
        min-height: 10rem;
        max-height: calc(100vh - 15rem);
        padding: 1.5rem 1rem 1.5rem 1.5rem;
        background: #fff;
        box-shadow: 0 0 2.1rem rgba(0, 0, 0, .3);
        -webkit-animation: fade-transition .3s;
        animation: fade-transition .3s
    }
}

.vl-side-navigation a {
    text-decoration: none
}

.vl-side-navigation a:focus,
.vl-side-navigation a:hover {
    text-decoration: underline
}

.js-vl-scrollspy-mobile--active .vl-side-navigation {
    display: block!important
}

.vl-side-navigation .js-vl-scrollspy-active {
    color: #333332;
    position: relative
}

.vl-side-navigation .js-vl-scrollspy-active:before {
    content: "";
    height: 90%;
    display: block;
    position: absolute;
    left: -12px;
    top: 1px;
    bottom: 0;
    width: 3px;
    background-color: #5990de
}

@media screen and (min-width:767px) {
    .vl-side-navigation[data-vl-side-navigation-scrollable] {
        max-height: none
    }
}

.vl-side-navigation__content {
    font-size: 1.6rem
}

@media screen and (max-width:767px) {
    .vl-side-navigation__content {
        font-size: 1.6rem
    }
}

.vl-side-navigation__group {
    margin-bottom: 2rem
}

@media screen and (max-width:767px) {
    .vl-side-navigation__group {
        padding: 0;
        border: 0!important
    }
}

.vl-side-navigation__group:last-child {
    margin-bottom: 0
}

.vl-side-navigation__group--has-title {
    padding-top: 3rem;
    border-top-width: 3px
}

@media screen and (max-width:767px) {
    .vl-side-navigation__group--has-title {
        padding-top: 1.5rem
    }
}

.vl-side-navigation__title {
    margin-bottom: 20px;
    font-size: 15px;
    text-transform: uppercase;
    letter-spacing: 1px;
    color: #687483;
    font-weight: 500
}

@media screen and (max-width:767px) {
    .vl-side-navigation__item {
        padding: 0;
        font-size: 1.4rem
    }
}

.vl-side-navigation__group--spaced .vl-side-navigation__item:not(:last-child) {
    margin-bottom: 1.5rem
}

.vl-side-navigation__group--has-title .vl-side-navigation__item+.vl-side-navigation__item {
    margin-top: .5rem
}

@media screen and (max-width:767px) {
    .vl-side-navigation__item>a {
        display: block;
        margin: .7rem 0 1.4rem
    }
}

.vl-side-navigation__item a {
    font-weight: 500
}

@media screen and (max-width:767px) {
    .vl-side-navigation__item:last-child>a {
        margin-bottom: .7rem
    }
}

.vl-side-navigation__item>ul {
    display: none;
    padding: 0 0 .15rem 2rem
}

@media screen and (max-width:767px) {
    .vl-side-navigation__item>ul {
        padding: 0 1rem .15rem 1.3rem
    }
}

.vl-side-navigation__item>ul.vl-side-navigation__subgroup--active {
    display: block
}

.vl-side-navigation__toggle {
    display: block;
    position: relative;
    font-weight: 500;
    box-shadow: none;
    margin: 13px 0
}

.vl-side-navigation__toggle[aria-expanded=true] .vl-vi:before {
    transform: rotate(90deg)
}

.vl-side-navigation__toggle[aria-expanded=true]+ul {
    display: block;
    -webkit-animation: side-navigation-transition .3s;
    animation: side-navigation-transition .3s
}

.vl-side-navigation__toggle[aria-expanded=true]+ul .vl-side-navigation__toggle:first-child {
    margin-top: 0
}

.vl-side-navigation__toggle .vl-vi {
    font-size: 1.6rem;
    position: absolute;
    top: 50%;
    right: .4rem;
    transform: translateY(-50%)
}

.vl-side-navigation__toggle .vl-vi:before {
    transition: transform .1s ease-in-out
}

@-webkit-keyframes side-navigation-transition {
    0% {
        display: none;
        transform: translateX(-10px)
    }
    1% {
        display: block;
        transform: translateX(-10px)
    }
    to {
        display: block;
        transform: translateX(0);
        opacity: 1
    }
}

@keyframes side-navigation-transition {
    0% {
        display: none;
        transform: translateX(-10px)
    }
    1% {
        display: block;
        transform: translateX(-10px)
    }
    to {
        display: block;
        transform: translateX(0);
        opacity: 1
    }
}

.js-vl-scrollspy__content {
    border-radius: 5rem
}

@media screen and (max-width:767px) {
    .js-vl-scrollspy__content {
        position: relative;
        padding: 4rem 0 0
    }
}

.js-vl-scrollspy__content .js-vl-scrollspy__toggle {
    display: none;
    cursor: pointer
}

.js-vl-scrollspy__content .js-vl-scrollspy__toggle:after,
.js-vl-scrollspy__content .js-vl-scrollspy__toggle:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.js-vl-scrollspy__content .js-vl-scrollspy__toggle:before {
    content: "\f13b";
    position: absolute;
    top: 50%;
    right: 1rem;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1.1rem
}

@media screen and (max-width:767px) {
    .js-vl-scrollspy__content .js-vl-scrollspy__toggle {
        display: block;
        position: absolute;
        top: 0;
        left: 0
    }
}

.js-vl-scrollspy__content .js-vl-scrollspy__toggle.js-vl-scrollspy__toggle--fixed {
    position: fixed;
    top: auto;
    right: auto;
    bottom: 4rem;
    left: calc(100% - 6rem);
    height: 5rem;
    border-radius: 5rem;
    font-size: 0;
    z-index: 3
}

.js-vl-scrollspy__content .js-vl-scrollspy__toggle.js-vl-scrollspy__toggle--fixed:before {
    right: auto;
    left: 2rem;
    line-height: 2.7rem
}

.js-vl-scrollspy-placeholder {
    display: none;
    position: fixed;
    top: auto;
    bottom: 1.5rem;
    left: 1.5rem;
    width: calc(100% - 3rem);
    outline: none;
    z-index: 4
}

@media screen and (max-width:767px) {
    .js-vl-scrollspy-placeholder {
        height: auto
    }
}

.js-vl-scrollspy-placeholder.js-vl-scrollspy-mobile--active {
    display: block
}

.js-vl-scrollspy__close {
    position: absolute;
    top: -1.8rem;
    right: 0;
    left: 0;
    width: 3rem;
    height: 3rem;
    margin: auto;
    border: 0;
    border-radius: 3rem;
    background-color: #05c;
    color: #fff;
    font-size: 0;
    cursor: pointer;
    z-index: 5
}

.js-vl-scrollspy__close:after,
.js-vl-scrollspy__close:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.js-vl-scrollspy__close:before {
    content: "\f173";
    font-size: 1.2rem;
    line-height: 2.6rem
}

.js-vl-scrollspy__close:focus {
    outline: thin dotted
}

.js-vl-sticky {
    position: relative;
    transform: translateZ(0);
    will-change: position, transform;
    z-index: 2
}

.js-vl-sticky--viewport-bottom,
.js-vl-sticky--viewport-top {
    position: fixed
}

.js-vl-sticky--container-bottom,
.js-vl-sticky--viewport-unbottom {
    position: relative
}

.js-vl-sticky--placeholder {
    position: relative;
    width: 100%;
    will-change: min-height
}

.vl-skiplink {
    position: absolute;
    text-align: center;
    width: 100%;
    top: 2rem;
    left: 0;
    z-index: 10008
}

.vl-skiplink a {
    position: absolute!important;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px);
    background: #fff;
    font-size: 1.8rem;
    padding: .3rem 1rem
}

.vl-skiplink a:focus {
    position: static!important;
    clip: auto;
    height: auto;
    width: auto;
    overflow: visible
}

.vl-skeleton--box {
    width: 100%;
    height: 100%
}

.vl-skeleton-bone {
    display: block;
    position: relative;
    overflow: hidden;
    font-size: 0;
    height: .8rem;
    width: 100%;
    margin-bottom: 1rem;
    padding: 0;
    background: #cfd5dd
}

.vl-skeleton-bone--animated:after {
    display: block;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    transform: translateX(-20%);
    background: linear-gradient(90deg, transparent 10%, #b7c0cc 50%, transparent 90%);
    -webkit-animation-duration: 5s;
    animation-duration: 5s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-name: skeletonShimmer;
    animation-name: skeletonShimmer;
    -webkit-animation-timing-function: linear;
    animation-timing-function: linear
}

.vl-skeleton-bone--title-large {
    height: 44px;
    width: 70%;
    margin-bottom: 1.4rem
}

.vl-skeleton-bone--title-large:after {
    -webkit-animation-duration: 3.5s;
    animation-duration: 3.5s
}

.vl-skeleton-bone--title-medium {
    height: 30px;
    width: 55%
}

.vl-skeleton-bone--title-medium:after {
    -webkit-animation-duration: 3.5s;
    animation-duration: 3.5s
}

.vl-skeleton-bone--title-small {
    height: 16px;
    width: 40%
}

.vl-skeleton-bone--label {
    height: 10px;
    width: 40%
}

.vl-skeleton-bone--meta {
    height: 6px;
    width: 70%;
    background: #eceef1
}

.vl-skeleton-bone--badge {
    width: 65px;
    height: 65px;
    border-radius: 50%
}

.vl-skeleton-bone--badge:after {
    -webkit-animation-duration: 3.5s;
    animation-duration: 3.5s;
    background: linear-gradient(90deg, transparent 10%, #cad1da 50%, transparent 90%)
}

.vl-skeleton-bone--body-text {
    background: #e2e6eb
}

.vl-skeleton-bone--body-text:after {
    background: linear-gradient(90deg, transparent 10%, #cad1da 50%, transparent 90%)
}

.vl-skeleton-bone--body-text:nth-child(2) {
    width: 80%
}

.vl-skeleton-bone--body-text:nth-child(n+3) {
    width: 90%
}

.vl-skeleton-bone--box {
    width: 100%;
    height: 100%;
    background: #f5f7f8
}

.vl-skeleton-bone--box:after {
    -webkit-animation-duration: 3.5s;
    animation-duration: 3.5s;
    background: linear-gradient(90deg, transparent 10%, #ecf0f2 50%, transparent 90%)
}

@-webkit-keyframes skeletonShimmer {
    0% {
        opacity: 0;
        transform: translateX(-70%)
    }
    to {
        transform: translateX(210%)
    }
}

@keyframes skeletonShimmer {
    0% {
        opacity: 0;
        transform: translateX(-70%)
    }
    to {
        transform: translateX(210%)
    }
}

.vl-spotlight {
    display: block;
    text-decoration: none;
    position: relative;
    padding: 2rem 0
}

.vl-spotlight:before {
    display: block;
    content: "";
    height: .2rem;
    left: 0;
    right: 0;
    position: absolute;
    top: 0;
    background-color: #cbd2da;
    z-index: 3
}

.vl-spotlight.vl-spotlight--alt-focus .vl-spotlight__link-wrapper {
    box-shadow: none;
    text-decoration: none
}

.vl-spotlight--alt {
    background-color: #f7f9fc;
    padding: 2rem
}

.vl-spotlight--alt.vl-spotlight--no-border {
    padding: 2rem
}

.vl-spotlight--alt.vl-spotlight--no-border.vl-spotlight--image {
    padding-top: 0
}

.vl-region--alt .vl-spotlight--alt {
    background-color: #fff
}

.vl-spotlight--horizontal .vl-spotlight__main {
    display: flex;
    align-items: center
}

.vl-spotlight--horizontal .vl-spotlight__container {
    flex: 1
}

.vl-spotlight--horizontal .vl-spotlight__container .vl-spotlight__title-wrapper {
    padding-top: 0
}

.vl-spotlight--horizontal .vl-spotlight__header {
    overflow: visible
}

.vl-spotlight--horizontal .vl-spotlight__transparent-block--visual {
    margin-right: 3.6rem
}

@media screen and (max-width:500px) {
    .vl-spotlight--horizontal .vl-spotlight__transparent-block--visual {
        margin-bottom: 1rem;
        margin-right: 2rem
    }
}

.vl-spotlight--horizontal .vl-spotlight__image__transparent {
    max-width: 10rem
}

@media screen and (max-width:500px) {
    .vl-spotlight--horizontal .vl-spotlight__image__transparent {
        max-width: 5rem
    }
}

.vl-spotlight--no-border {
    padding: 0
}

@media screen and (max-width:767px) {
    .vl-spotlight--no-border {
        padding: .6rem
    }
}

.vl-spotlight--no-border:before {
    display: none
}

.vl-spotlight--no-visual-border .vl-spotlight__transparent-block--visual {
    border: 0;
    padding: 0
}

.vl-spotlight--no-visual-border .vl-spotlight__image__transparent {
    box-shadow: 0 1px 6px 0 #cfd5dd
}

.vl-spotlight--inline {
    display: inline-block
}

.vl-spotlight__link-wrapper {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0
}

.vl-spotlight__link-wrapper:focus~.vl-spotlight__main .vl-link,
.vl-spotlight__link-wrapper:hover~.vl-spotlight__main .vl-link {
    text-decoration: underline
}

.vl-spotlight--image:not(.vl-spotlight--horizontal) .vl-spotlight__title-wrapper .vl-icon,
.vl-spotlight--image:not(.vl-spotlight--horizontal) .vl-spotlight__title-wrapper .vl-spotlight__title--no-space {
    padding-top: 2rem
}

.vl-spotlight__header {
    position: relative;
    overflow: hidden;
    margin-top: -2rem;
    margin-left: 0;
    margin-right: 0
}

.vl-spotlight--no-border .vl-spotlight__header {
    margin-top: 0
}

.vl-spotlight--alt .vl-spotlight__header {
    margin-left: -2rem;
    margin-right: -2rem
}

.vl-spotlight__color-block,
.vl-spotlight__image,
.vl-spotlight__transparent-block {
    padding-top: 56.25%;
    position: relative
}

.vl-spotlight__color-block,
.vl-spotlight__transparent-block {
    text-align: center
}

.vl-spotlight__color-block .vl-icon,
.vl-spotlight__transparent-block .vl-icon {
    font-size: 12rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate3d(-50%, -50%, 0)
}

@supports (-webkit-background-clip:text) {
    .vl-spotlight__color-block .vl-icon:before,
    .vl-spotlight__transparent-block .vl-icon:before {
        background: #ffe615 url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background: var(--vl-theme-primary-color) url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background-size: 16px 16px;
        -webkit-background-clip: text;
        background-clip: text;
        color: #ffe615;
        color: var(--vl-theme-primary-color);
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent
    }
}

@supports ((-webkit-background-clip:text) or (background-clip:text)) {
    .vl-spotlight__color-block .vl-icon:before,
    .vl-spotlight__transparent-block .vl-icon:before {
        background: #ffe615 url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background: var(--vl-theme-primary-color) url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background-size: 16px 16px;
        -webkit-background-clip: text;
        background-clip: text;
        color: #ffe615;
        color: var(--vl-theme-primary-color);
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent
    }
}

@media screen and (max-width:1023px) {
    .vl-spotlight__color-block .vl-icon,
    .vl-spotlight__transparent-block .vl-icon {
        font-size: 10rem
    }
}

.vl-spotlight__color-block {
    background-color: #ffe615;
    background-color: var(--vl-theme-primary-color)
}

.vl-spotlight__color-block--alt {
    background-color: #e4ebf5
}

@supports (-webkit-background-clip:text) {
    .vl-spotlight__color-block--alt .vl-icon:before {
        background: #638ac4 url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background-size: 16px 16px;
        -webkit-background-clip: text;
        background-clip: text;
        color: #638ac4;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent
    }
}

@supports ((-webkit-background-clip:text) or (background-clip:text)) {
    .vl-spotlight__color-block--alt .vl-icon:before {
        background: #638ac4 url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background-size: 16px 16px;
        -webkit-background-clip: text;
        background-clip: text;
        color: #638ac4;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent
    }
}

.vl-spotlight__color-block--dark {
    background-color: #687483
}

@supports (-webkit-background-clip:text) {
    .vl-spotlight__color-block--dark .vl-icon:before {
        background: #828e9c url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background-size: 16px 16px;
        -webkit-background-clip: text;
        background-clip: text;
        color: #828e9c;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent
    }
}

@supports ((-webkit-background-clip:text) or (background-clip:text)) {
    .vl-spotlight__color-block--dark .vl-icon:before {
        background: #828e9c url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background-size: 16px 16px;
        -webkit-background-clip: text;
        background-clip: text;
        color: #828e9c;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent
    }
}

.vl-spotlight__transparent-block {
    background: transparent;
    border: 1px solid #cbd2da
}

.vl-spotlight__transparent-block .vl-icon {
    font-size: 12rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate3d(-50%, -50%, 0)
}

@supports (-webkit-background-clip:text) {
    .vl-spotlight__transparent-block .vl-icon:before {
        background: #cbd2da url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background-size: 16px 16px;
        -webkit-background-clip: text;
        background-clip: text;
        color: #cbd2da;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent
    }
}

@supports ((-webkit-background-clip:text) or (background-clip:text)) {
    .vl-spotlight__transparent-block .vl-icon:before {
        background: #cbd2da url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAxNiAxNiI+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTQgMTFjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCAzYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTQgMTVjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNNCA3YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMTNjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFNMiA1YzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxTTIgMWMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMU0yIDljMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDFtNCAwYzAgLjYtLjQgMS0xIDFzLTEtLjQtMS0xIC40LTEgMS0xIDEgLjQgMSAxbTQgMGMwIC42LS40IDEtMSAxcy0xLS40LTEtMSAuNC0xIDEtMSAxIC40IDEgMW00IDBjMCAuNi0uNCAxLTEgMXMtMS0uNC0xLTEgLjQtMSAxLTEgMSAuNCAxIDEiLz48L3N2Zz4=");
        background-size: 16px 16px;
        -webkit-background-clip: text;
        background-clip: text;
        color: #cbd2da;
        -webkit-text-fill-color: transparent;
        text-fill-color: transparent
    }
}

@media screen and (max-width:1023px) {
    .vl-spotlight__transparent-block .vl-icon {
        font-size: 10rem
    }
}

.vl-spotlight__transparent-block--visual {
    padding: 1rem;
    line-height: 0;
    display: flex;
    justify-content: center;
    align-items: center
}

.vl-spotlight__transparent-block--hidden {
    display: none
}

.vl-spotlight__image__img {
    position: absolute;
    top: -9999px;
    bottom: -9999px;
    left: -9999px;
    right: -9999px;
    margin: auto;
    width: auto;
    height: auto;
    min-width: 100%;
    min-height: 100%;
    transition: transform .2s;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transform: translateZ(0)
}

@supports ((-o-object-fit:cover) or (object-fit:cover)) {
    .vl-spotlight__image__img {
        -o-object-fit: cover;
        object-fit: cover;
        -o-object-position: center;
        object-position: center;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0
    }
}

.vl-spotlight__image--focus-bottom-right .vl-spotlight__image__img,
.vl-spotlight__image--focus-center-right .vl-spotlight__image__img,
.vl-spotlight__image--focus-top-right .vl-spotlight__image__img {
    right: 0;
    left: auto;
    margin-left: 0;
    margin-right: 0
}

.vl-spotlight__image--focus-bottom-left .vl-spotlight__image__img,
.vl-spotlight__image--focus-center-left .vl-spotlight__image__img,
.vl-spotlight__image--focus-top-left .vl-spotlight__image__img {
    right: auto;
    left: 0;
    margin-left: 0;
    margin-right: 0
}

.vl-spotlight__image--focus-top-center .vl-spotlight__image__img,
.vl-spotlight__image--focus-top-left .vl-spotlight__image__img,
.vl-spotlight__image--focus-top-right .vl-spotlight__image__img {
    top: 0;
    bottom: auto;
    margin-top: 0;
    margin-bottom: 0
}

.vl-spotlight__image--focus-bottom-center .vl-spotlight__image__img,
.vl-spotlight__image--focus-bottom-left .vl-spotlight__image__img,
.vl-spotlight__image--focus-bottom-right .vl-spotlight__image__img {
    bottom: 0;
    top: auto;
    margin-top: 0;
    margin-bottom: 0
}

.vl-spotlight__title-wrapper {
    display: flex;
    align-items: flex-start;
    position: relative
}

.vl-spotlight--no-header-padding .vl-spotlight__title-wrapper {
    padding-top: 0
}

.vl-region--alt .vl-spotlight__title-wrapper .vl-spotlight__title,
.vl-spotlight--alt .vl-spotlight__title-wrapper .vl-spotlight__title {
    padding-left: 2rem;
    background-color: #f7f9fc
}

.vl-region--alt .vl-spotlight__title-wrapper .vl-spotlight__title:before,
.vl-spotlight--alt .vl-spotlight__title-wrapper .vl-spotlight__title:before {
    background-color: #f7f9fc
}

.vl-region--alt .vl-spotlight__title-wrapper .vl-spotlight__title--no-space,
.vl-spotlight--alt .vl-spotlight__title-wrapper .vl-spotlight__title--no-space {
    padding-left: 0
}

.vl-region--alt .vl-spotlight--alt .vl-spotlight__title-wrapper .vl-spotlight__title,
.vl-region--alt .vl-spotlight--alt .vl-spotlight__title-wrapper:before {
    background-color: #fff
}

.vl-spotlight__title-wrapper:before {
    content: "";
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 0;
    background-color: #fff
}

.vl-spotlight__title-wrapper .vl-spotlight__title {
    display: inline-flex;
    max-width: calc(100% - 1rem);
    white-space: pre-wrap;
    background-color: #fff;
    word-break: normal;
    -webkit-hyphens: auto;
    -ms-hyphens: auto;
    hyphens: auto;
    padding: 2rem .8rem .5rem 0
}

@supports (overflow-wrap:break-word) {
    .vl-spotlight__title-wrapper .vl-spotlight__title {
        word-wrap: break-word
    }
}

.vl-spotlight--alt .vl-spotlight__title-wrapper .vl-spotlight__title {
    padding-right: 2rem
}

.vl-spotlight__title-wrapper .vl-spotlight__title--no-space {
    padding-top: 0
}

.vl-spotlight__title-wrapper .vl-icon {
    display: inline-flex;
    margin-bottom: .3rem
}

.vl-spotlight__title {
    line-height: 1.25;
    position: relative;
    font-size: 2rem;
    font-weight: 500;
    transition: color .2s
}

.vl-spotlight__title .vl-icon {
    margin-left: .5rem
}

@media screen and (max-width:767px) {
    .vl-spotlight__title {
        font-size: 1.8rem
    }
}

.vl-spotlight__title.vl-link {
    font-weight: 500
}

.vl-spotlight--s .vl-spotlight__title {
    font-size: 1.8rem
}

@media screen and (max-width:767px) {
    .vl-spotlight--s .vl-spotlight__title {
        font-size: 1.6rem
    }
}

.vl-spotlight--l .vl-spotlight__title {
    font-size: 2.4rem
}

@media screen and (max-width:767px) {
    .vl-spotlight--l .vl-spotlight__title {
        font-size: 2rem
    }
}

.vl-spotlight__subtitle {
    font-size: 1.5rem;
    text-transform: uppercase;
    font-weight: 500;
    color: #687483;
    padding-top: .6rem
}

@media screen and (max-width:767px) {
    .vl-spotlight__subtitle {
        font-size: 1.3rem
    }
}

.vl-spotlight__content .vl-document__type {
    padding: 3.6rem 0 0 2rem
}

.vl-spotlight__annotation {
    padding-top: 1.6rem;
    font-size: 1.8rem;
    line-height: 1.5
}

.vl-spotlight__data {
    margin: .7rem 0;
    color: #687483
}

.vl-spotlight__text {
    margin-top: 1rem;
    font-size: 1.8rem;
    line-height: 1.5;
    color: #333332;
    text-decoration: none
}

@media screen and (max-width:767px) {
    .vl-spotlight__text {
        margin-top: .5rem;
        font-size: 1.6rem
    }
}

.vl-steps {
    margin-bottom: 3rem
}

.vl-steps--has-line .vl-step:before {
    position: absolute;
    display: block;
    background-color: #cbd2da;
    content: "";
    width: .3rem;
    top: 4.6rem;
    bottom: -4.6rem;
    left: -5.1rem
}

@media screen and (max-width:767px) {
    .vl-steps--has-line .vl-step:before {
        top: 3.9rem;
        bottom: -2.5rem;
        left: -3.35rem
    }
}

@media screen and (max-width:767px) {
    .vl-steps {
        margin-bottom: 1.5rem
    }
}

.vl-step {
    position: relative;
    margin-left: 7rem
}

.vl-step+.vl-step {
    margin-top: 5rem
}

@media screen and (max-width:767px) {
    .vl-step {
        margin-left: 5rem
    }
    .vl-step+.vl-step {
        margin-top: 2.5rem
    }
}

.vl-step--has-link .vl-step__link {
    display: block;
    color: #333332;
    text-decoration: none
}

.vl-step--has-link .vl-step__link .vl-step__title {
    color: #05c
}

.vl-step--accordion .vl-step__content-wrapper {
    visibility: hidden;
    overflow: hidden;
    max-height: 0
}

.vl-step--accordion.js-vl-accordion--open .vl-step__content-wrapper {
    visibility: visible;
    max-height: 100%
}

@media screen and (max-width:767px) {
    .vl-step__content {
        font-size: 1.6rem
    }
}

.vl-step__content p+p {
    margin-top: 1rem
}

.vl-step__header~.vl-step__content-wrapper .vl-step__content {
    margin-top: 1.5rem
}

.vl-step__title {
    font-size: 2rem;
    font-weight: 500
}

@media screen and (max-width:767px) {
    .vl-step__title {
        font-size: 1.8rem
    }
}

.vl-step__title__annotation {
    font-family: Flanders Art Sans, sans-serif;
    font-size: 1.4rem;
    font-weight: 400
}

.vl-step__title__annotation:before {
    content: "-";
    margin: 0 .5rem
}

.vl-step--disabled .vl-step__title {
    color: #687483
}

.vl-step--accordion .vl-step__title {
    color: #05c
}

.vl-step__subtitle {
    color: #687483;
    font-weight: 400;
    font-size: inherit;
    font-size: 1.8rem
}

.vl-step__subtitle--small {
    font-size: .65em
}

@media screen and (max-width:767px) {
    .vl-step__subtitle {
        font-size: 1.6rem
    }
}

.vl-step__accordion-toggle {
    display: inline-flex;
    color: #05c;
    font-size: 1.8rem;
    margin-top: .6rem
}

.vl-step__accordion-toggle:after,
.vl-step__accordion-toggle:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-step__accordion-toggle:before {
    content: "\f117";
    transition: transform .2s
}

.js-vl-accordion--open .vl-step__accordion-toggle:before {
    transform: rotate(180deg)
}

.vl-step--error .vl-step__wrapper,
.vl-step--success .vl-step__wrapper,
.vl-step--warning .vl-step__wrapper {
    padding: 1.5rem
}

.vl-step--error .vl-step__header__titles,
.vl-step--success .vl-step__header__titles,
.vl-step--warning .vl-step__header__titles {
    margin-top: 0
}

.vl-step--success .vl-step__icon {
    background-color: #3ca854;
    color: #ecf6ee
}

.vl-step--success .vl-step__wrapper {
    border: 1px solid #b1dcbb;
    background-color: #ecf6ee
}

.vl-step--warning .vl-step__icon {
    background-color: #ffc515;
    color: #fff9e8
}

.vl-step--warning .vl-step__wrapper {
    border: 1px solid #ffe8a1;
    background-color: #fff9e8
}

.vl-step--error .vl-step__icon {
    background-color: #db3434;
    color: #fbebeb
}

.vl-step--error .vl-step__wrapper {
    border: 1px solid #f1aeae;
    background-color: #fbebeb
}

.vl-steps--timeline .vl-step:before {
    position: absolute;
    display: block;
    background-color: #cbd2da;
    content: "";
    width: .3rem;
    top: 6rem;
    bottom: -4.6rem;
    left: -5rem
}

@media screen and (max-width:767px) {
    .vl-steps--timeline .vl-step:before {
        top: 4.4rem;
        bottom: -2.1rem;
        left: -3.35rem
    }
}

.vl-steps--timeline .vl-step__icon {
    background-color: #ffe615;
    background-color: var(--vl-theme-primary-color);
    font-size: 1.8rem;
    color: #333332;
    height: auto;
    line-height: 1.5rem;
    border-radius: 0;
    padding: 1.2rem 0;
    top: 0
}

@media screen and (max-width:767px) {
    .vl-steps--timeline .vl-step__icon {
        font-size: 1.5rem;
        padding: .5rem 0
    }
}

.vl-steps--timeline .vl-step__icon__sub {
    display: block;
    font-size: 1.4rem;
    font-weight: 300
}

@media screen and (max-width:767px) {
    .vl-steps--timeline .vl-step__icon__sub {
        font-size: 1.3rem
    }
}

.vl-steps--timeline .vl-step--success .vl-step__icon {
    background-color: #3ca854;
    color: #ecf6ee
}

.vl-steps--timeline .vl-step--warning .vl-step__icon {
    background-color: #ffc515;
    color: #fff9e8
}

.vl-steps--timeline .vl-step--error .vl-step__icon {
    background-color: #db3434;
    color: #fbebeb
}

.vl-steps--timeline-simple .vl-step {
    padding-top: 0
}

.vl-steps--timeline-simple .vl-step:before {
    position: absolute;
    display: block;
    background-color: #cbd2da;
    content: "";
    width: .3rem;
    top: 1.3rem;
    bottom: -6.3rem;
    left: -5.1rem
}

@media screen and (max-width:767px) {
    .vl-steps--timeline-simple .vl-step:before {
        left: -3.35rem
    }
}

.vl-steps--timeline-simple .vl-step:last-child:before {
    bottom: 0
}

.vl-steps--timeline-simple .vl-step__icon {
    background-color: #000;
    border: 2px solid #f7f9fc;
    height: 1.3rem;
    width: 1.3rem;
    top: 1.3rem;
    left: -5.55rem
}

@media screen and (max-width:767px) {
    .vl-steps--timeline-simple .vl-step__icon {
        top: .65rem;
        left: -3.9rem
    }
}

.vl-duration-step {
    position: relative;
    font-size: 1.6rem;
    color: #687483;
    padding: 5rem 0 5rem 7rem
}

@media screen and (max-width:767px) {
    .vl-duration-step {
        font-size: 1.4rem;
        padding: 2.5rem 0 2.5rem 7rem
    }
}

.vl-duration-step:after,
.vl-duration-step:before {
    content: "";
    position: absolute;
    display: block;
    left: 2.1rem
}

@media screen and (max-width:767px) {
    .vl-duration-step:after,
    .vl-duration-step:before {
        left: 1.75rem
    }
}

.vl-duration-step:before {
    background-image: linear-gradient(#cbd2da, #cbd2da 70%, transparent 0, transparent), linear-gradient(transparent 50%, #cbd2da 0);
    background-size: 100%, .6rem .6rem;
    background-repeat: no-repeat, repeat;
    width: .3rem;
    top: 0;
    bottom: .4rem;
    margin-left: -.1rem
}

@media screen and (max-width:767px) {
    .vl-duration-step:before {
        top: .4rem
    }
}

.vl-duration-step:after {
    width: 1.3rem;
    height: 1.3rem;
    border-radius: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background-color: #000;
    border: 2px solid #f7f9fc
}

.vl-step__header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    width: 100%;
    border: 0;
    padding: 0;
    text-align: left;
    text-decoration: none
}

.vl-step--accordion .vl-step__header:focus,
.vl-step--accordion .vl-step__header:hover {
    color: #05c
}

.vl-step--accordion .vl-step__header:focus .vl-step__title,
.vl-step--accordion .vl-step__header:hover .vl-step__title {
    text-decoration: underline
}

@media screen and (max-width:767px) {
    .vl-step__header__action {
        display: inline-block;
        margin-top: 1rem
    }
}

.vl-step__header__info {
    color: #333332
}

.vl-step__header__info i {
    margin-left: 1rem;
    text-decoration: none!important
}

.vl-step--disabled .vl-step__header__info {
    opacity: .5
}

.vl-step__header__titles {
    margin-top: .8rem
}

.vl-steps--timeline-simple .vl-step__header__titles {
    margin-top: .1rem
}

.vl-step__icon {
    display: block;
    position: absolute;
    background-color: #ffe615;
    background-color: var(--vl-theme-primary-color);
    font-size: 2rem;
    font-weight: 500;
    color: #333332;
    line-height: 4.2rem;
    width: 4.2rem;
    height: 4.2rem;
    border-radius: 50%;
    text-align: center;
    left: -7rem
}

.vl-step__icon .vl-badge {
    width: inherit;
    height: inherit;
    min-height: 2.8rem;
    border-radius: inherit
}

.vl-step__icon .vl-badge__icon {
    font-size: 2rem;
    height: 2rem;
    color: inherit
}

.vl-step--disabled .vl-step__icon {
    background-color: #cbd2da;
    color: #fff
}

.vl-step--highlighted .vl-step__icon {
    background-color: #05c;
    color: #fff
}

@media screen and (max-width:767px) {
    .vl-step__icon {
        font-size: 1.8rem;
        width: 3.5rem;
        height: 3.5rem;
        line-height: 3.5rem;
        top: .2rem;
        left: -5rem
    }
    .vl-step__icon .vl-badge__icon {
        font-size: 1.6rem;
        height: 1.6rem
    }
}

.vl-textarea {
    display: inline-block;
    background: #fff;
    font-family: Flanders Art Sans, sans-serif;
    font-size: 1.6rem;
    color: #333332;
    max-width: 100%;
    height: auto;
    line-height: normal;
    border-radius: .3rem;
    border: .1rem solid #687483;
    -webkit-appearance: none;
    padding: 1rem;
    transition: background-color .2s;
    margin: .5rem 0
}

@media screen and (max-width:767px) {
    .vl-textarea {
        font-size: 1.6rem
    }
}

.vl-textarea:hover {
    border: .2rem solid rgba(0, 85, 204, .65);
    padding: .9rem
}

.vl-textarea:hover.invalid.validated,
.vl-textarea:hover.vl-textarea--error {
    border-color: #db3434
}

.vl-textarea:hover.vl-textarea--success {
    border-color: #3ca854
}

.vl-textarea--focus,
.vl-textarea:focus {
    outline: .2rem solid transparent;
    border: .1rem solid #687483;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65);
    padding: 1rem
}

.vl-textarea--focus.invalid.validated,
.vl-textarea--focus.vl-textarea--error,
.vl-textarea:focus.invalid.validated,
.vl-textarea:focus.vl-textarea--error {
    border-color: #db3434
}

.vl-textarea--focus.vl-textarea--success,
.vl-textarea:focus.vl-textarea--success {
    border-color: #3ca854
}

.vl-textarea::-moz-placeholder {
    color: #687483
}

.vl-textarea:-ms-input-placeholder {
    color: #687483
}

.vl-textarea::placeholder {
    color: #687483
}

.vl-textarea--block {
    display: block;
    width: 100%;
    box-sizing: border-box
}

.vl-textarea--error,
.vl-textarea.invalid.validated {
    border-color: #db3434;
    background-color: #fbebeb
}

.vl-textarea--error:focus,
.vl-textarea.invalid.validated:focus {
    background-color: #fff
}

.vl-textarea--success {
    border-color: #3ca854;
    background-color: #ecf6ee;
    display: inline
}

.vl-textarea--disabled,
.vl-textarea[disabled] {
    background-color: #f3f5f6;
    border-color: #b8c1cc;
    color: #707070;
    color: var(--vl-theme-fg-color-70)
}

.vl-textarea--disabled:hover,
.vl-textarea[disabled]:hover {
    border-width: .1rem;
    padding: 1rem
}

.vl-title--alt {
    text-transform: uppercase;
    font-weight: 500;
    border-bottom: 3px solid #e8ebee;
    font-size: 1.8rem;
    margin: 0 0 2rem;
    padding: 1.3rem 0 .7rem
}

.vl-title--has-border {
    border-bottom: 1px solid #cbd2da;
    margin-bottom: 1.5rem
}

@media screen and (max-width:767px) {
    .vl-title--has-border {
        margin-bottom: 1rem
    }
}

.vl-title a {
    text-decoration: none
}

.vl-title a:not(.vl-link):focus,
.vl-title a:not(.vl-link):hover {
    text-decoration: underline
}

.vl-title--h1 {
    font-size: 4.4rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 6rem;
    line-height: 1.18
}

@media screen and (max-width:1023px) {
    .vl-title--h1 {
        font-size: 4rem;
        margin-bottom: 4.5rem
    }
}

@media screen and (max-width:767px) {
    .vl-title--h1 {
        font-size: 3rem;
        margin-bottom: 3rem
    }
}

.vl-title--h2 {
    font-size: 3.2rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 2rem;
    line-height: 1.24
}

@media screen and (max-width:767px) {
    .vl-title--h2 {
        font-size: 2.6rem;
        margin-bottom: 1.5rem
    }
}

.vl-title--h3 {
    font-size: 2.6rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 2rem;
    line-height: 1.3
}

@media screen and (max-width:767px) {
    .vl-title--h3 {
        font-size: 2.2rem;
        margin-bottom: 1.5rem
    }
}

.vl-title--h4 {
    font-size: 2.2rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 1.8rem;
    line-height: 1.36
}

@media screen and (max-width:767px) {
    .vl-title--h4 {
        font-size: 2rem;
        margin-bottom: 1.4rem
    }
}

.vl-title--h5 {
    font-size: 2rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 1.6rem;
    line-height: 1.4
}

@media screen and (max-width:767px) {
    .vl-title--h5 {
        font-size: 1.8rem;
        margin-bottom: 1.2rem
    }
}

.vl-title--h6 {
    font-size: 1.8rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 1.4rem;
    line-height: 1.44
}

@media screen and (max-width:767px) {
    .vl-title--h6 {
        font-size: 1.8rem;
        margin-bottom: 1rem
    }
}

.vl-typography h1 {
    font-size: 4.4rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 6rem;
    line-height: 1.18
}

@media screen and (max-width:1023px) {
    .vl-typography h1 {
        font-size: 4rem;
        margin-bottom: 4.5rem
    }
}

@media screen and (max-width:767px) {
    .vl-typography h1 {
        font-size: 3rem;
        margin-bottom: 3rem
    }
}

.vl-typography h1:not(:first-child) {
    margin-top: 12rem
}

.vl-typography h2 {
    font-size: 3.2rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 2rem;
    line-height: 1.24
}

@media screen and (max-width:767px) {
    .vl-typography h2 {
        font-size: 2.6rem;
        margin-bottom: 1.5rem
    }
}

.vl-typography h2:not(:first-child) {
    margin-top: 4rem
}

.vl-typography h3 {
    font-size: 2.6rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 2rem;
    line-height: 1.3
}

@media screen and (max-width:767px) {
    .vl-typography h3 {
        font-size: 2.2rem;
        margin-bottom: 1.5rem
    }
}

.vl-typography h3:not(:first-child) {
    margin-top: 4rem
}

.vl-typography h4 {
    font-size: 2.2rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 1.8rem;
    line-height: 1.36
}

@media screen and (max-width:767px) {
    .vl-typography h4 {
        font-size: 2rem;
        margin-bottom: 1.4rem
    }
}

.vl-typography h4:not(:first-child) {
    margin-top: 3.6rem
}

.vl-typography h5 {
    font-size: 2rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 1.6rem;
    line-height: 1.4
}

@media screen and (max-width:767px) {
    .vl-typography h5 {
        font-size: 1.8rem;
        margin-bottom: 1.2rem
    }
}

.vl-typography h5:not(:first-child) {
    margin-top: 3.2rem
}

.vl-typography h6 {
    font-size: 1.8rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 500;
    margin-bottom: 1.4rem;
    line-height: 1.44
}

@media screen and (max-width:767px) {
    .vl-typography h6 {
        font-size: 1.8rem;
        margin-bottom: 1rem
    }
}

.vl-typography h6:not(:first-child) {
    margin-top: 2.8rem
}

.vl-title-wrapper__title {
    margin-bottom: 0
}

@media screen and (max-width:767px) {
    .vl-title-wrapper__vl-title {
        margin-bottom: 0
    }
}

.vl-title-wrapper--h1 {
    margin-bottom: 6rem
}

@media screen and (max-width:767px) {
    .vl-title-wrapper--h1 {
        margin-bottom: 3rem
    }
}

.vl-title-wrapper--h2 {
    margin-bottom: 2rem
}

@media screen and (max-width:767px) {
    .vl-title-wrapper--h2 {
        margin-bottom: 1.5rem
    }
}

.vl-title-wrapper--h3 {
    margin-bottom: 2rem
}

@media screen and (max-width:767px) {
    .vl-title-wrapper--h3 {
        margin-bottom: 1.5rem
    }
}

.vl-title-wrapper--h4 {
    margin-bottom: 1.8rem
}

@media screen and (max-width:767px) {
    .vl-title-wrapper--h4 {
        margin-bottom: 1.4rem
    }
}

.vl-title-wrapper--h5 {
    margin-bottom: 1.6rem
}

@media screen and (max-width:767px) {
    .vl-title-wrapper--h5 {
        margin-bottom: 1.2rem
    }
}

.vl-title-wrapper--h6 {
    margin-bottom: 1.4rem
}

@media screen and (max-width:767px) {
    .vl-title-wrapper--h6 {
        margin-bottom: 1rem
    }
}

.vl-title-wrapper--cta {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 3rem
}

@media screen and (max-width:767px) {
    .vl-title-wrapper--cta__title {
        float: none
    }
}

.vl-title-wrapper--cta__cta--small {
    font-size: 1.4rem;
    margin: .8rem 0 0
}

.vl-title--no-space-bottom,
.vl-title-wrapper--cta .vl-title,
.vl-title-wrapper--sublink .vl-title {
    margin-bottom: 0
}

.vl-toggle {
    display: flex;
    justify-content: flex-start;
    align-items: center;
    position: relative;
    overflow: hidden
}

.vl-toggle>.vl-vi:before {
    transition: transform .2s
}

.vl-toggle>.vl-vi.vl-vi-arrow-right-fat:before,
.vl-toggle>.vl-vi.vl-vi-arrow-right-thin:before {
    transform: rotate(90deg)
}

.js-vl-accordion--open>.vl-toggle .vl-vi-minus:before,
.js-vl-accordion--open>.vl-toggle .vl-vi-plus:before {
    transform: rotate(0)
}

.js-vl-accordion--open .vl-toggle .vl-vi-arrow-right-fat:before,
.js-vl-accordion--open .vl-toggle .vl-vi-arrow-right-thin:before,
.js-vl-toggle--open .vl-toggle .vl-vi-arrow-right-fat:before,
.js-vl-toggle--open .vl-toggle .vl-vi-arrow-right-thin:before,
.vl-toggle.js-vl-drawer-active-item .vl-vi-arrow-right-fat:before,
.vl-toggle.js-vl-drawer-active-item .vl-vi-arrow-right-thin:before,
.vl-toggle.js-vl-dynamic-drawer-active-item .vl-vi-arrow-right-fat:before,
.vl-toggle.js-vl-dynamic-drawer-active-item .vl-vi-arrow-right-thin:before,
[aria-expanded=true]>.vl-toggle .vl-vi-arrow-right-fat:before,
[aria-expanded=true]>.vl-toggle .vl-vi-arrow-right-thin:before {
    transform: rotate(-90deg)
}

.js-vl-toggle {
    position: relative
}

.js-vl-toggle--flex-reverse {
    display: flex;
    flex-direction: column-reverse
}

summary {
    display: block
}

summary::-webkit-details-marker {
    display: none
}

.vl-toggle-wrapper--more-button {
    text-align: center;
    position: relative;
    overflow: hidden;
    transition: margin .2s
}

.js-vl-accordion--open .vl-toggle-wrapper--more-button {
    margin-top: 3rem
}

.vl-toggle-wrapper--more-button+.vl-accordion__content {
    display: block
}

.vl-toggle--more-button {
    display: flex;
    align-items: center;
    margin: 0 auto;
    position: relative;
    overflow: visible;
    line-height: 2.3rem
}

.vl-toggle--more-button:after,
.vl-toggle--more-button:before {
    display: block;
    position: absolute;
    content: "";
    top: 50%;
    margin-top: -1px;
    height: 1px;
    width: 100vw;
    background-color: #cbd2da
}

.vl-toggle--more-button:before {
    right: calc(100%+ 3px)
}

.vl-toggle--more-button:after {
    left: calc(100%+ 3px)
}

.vl-toggle--more-button:focus,
.vl-toggle--more-button:hover {
    color: #05c
}

.vl-toggle--more-button .vl-toggle__icon:first-child {
    margin-right: 1rem
}

.vl-toggle--more-button .vl-toggle__icon:last-child {
    margin-left: 1rem
}

.vl-toggle--more-button .vl-toggle__icon:before {
    font-size: 1.2rem;
    color: currentColor;
    transition: transform .2s
}

.js-vl-accordion--open .vl-toggle--more-button .vl-toggle__icon:before {
    transform: rotate(-180deg)
}

.vl-tooltip {
    max-width: 27rem;
    background: #fff;
    border: 1px solid #cfd5dd;
    text-align: center;
    font-size: 1.6rem;
    line-height: 1.25;
    font-weight: 400;
    color: #333332;
    font-family: Flanders Art Sans, sans-serif;
    padding: .3rem 1rem;
    z-index: 1;
    position: relative;
    box-shadow: 0 0 2rem 0 rgba(51, 51, 50, .15)
}

.vl-tooltip:before {
    content: "";
    position: absolute;
    top: -.9rem;
    right: -.9rem;
    bottom: -.9rem;
    left: -.9rem;
    z-index: 0
}

.vl-tooltip--static {
    display: block;
    pointer-events: auto
}

.vl-tooltip--static[data-popper-placement^=top],
.vl-tooltip--static[x-placement^=top] {
    transform: translate(-50%, -100%);
    margin-left: 50%
}

.vl-tooltip--static[data-popper-placement^=left],
.vl-tooltip--static[x-placement^=left] {
    transform: translate(-100%)
}

.vl-tooltip--static[data-popper-placement^=bottom],
.vl-tooltip--static[x-placement^=bottom] {
    transform: translate(-50%);
    margin-left: 50%;
    top: 100%
}

.vl-tooltip--static[data-popper-placement^=right],
.vl-tooltip--static[x-placement^=right] {
    margin-left: calc(100%+ 10px)
}

.vl-tooltip .tooltip__inner {
    position: relative;
    z-index: 1
}

.vl-tooltip.vl-tooltip--large {
    font-weight: 400;
    font-size: 1.4rem;
    padding: 2rem 3.2rem 2rem 2rem
}

.vl-tooltip.vl-tooltip--large .tooltip__inner {
    text-align: left
}

.vl-tooltip__title {
    margin: 0 0 .5rem;
    border-bottom: 1px solid #bdc5d0;
    font-size: 1.6rem
}

.vl-tooltip__close {
    margin: 5px;
    padding: 3px;
    position: absolute;
    right: 0;
    top: 0;
    border: 0;
    font-size: 1.6rem
}

.vl-tooltip__close:hover {
    color: #05c
}

.vl-tooltip__close:focus {
    color: #004099
}

@media screen and (max-width:767px) {
    .vl-tooltip__close {
        font-size: 1.4rem
    }
}

.vl-tooltip[data-popper-placement^=top] .vl-tooltip__arrow,
.vl-tooltip[x-placement^=top] .vl-tooltip__arrow {
    left: 50%;
    margin-left: -.6rem;
    border-bottom-width: 0;
    border-top-color: #cfd5dd;
    bottom: -.6rem
}

.vl-tooltip[data-popper-placement^=top] .vl-tooltip__arrow:after,
.vl-tooltip[x-placement^=top] .vl-tooltip__arrow:after {
    content: " ";
    bottom: 1px;
    margin-left: -.5rem;
    border-bottom-width: 0;
    border-top-color: #fff
}

.vl-tooltip[data-popper-placement^=right] .vl-tooltip__arrow,
.vl-tooltip[x-placement^=right] .vl-tooltip__arrow {
    top: 50%;
    left: -.6rem;
    margin-top: -.6rem;
    border-left-width: 0;
    border-right-color: #cfd5dd
}

.vl-tooltip[data-popper-placement^=right] .vl-tooltip__arrow:after,
.vl-tooltip[x-placement^=right] .vl-tooltip__arrow:after {
    content: " ";
    left: 1px;
    bottom: -.5rem;
    border-left-width: 0;
    border-right-color: #fff
}

.vl-tooltip[data-popper-placement^=bottom] .vl-tooltip__arrow,
.vl-tooltip[x-placement^=bottom] .vl-tooltip__arrow {
    left: 50%;
    margin-left: -.6rem;
    border-top-width: 0;
    border-bottom-color: #cfd5dd;
    top: -.6rem
}

.vl-tooltip[data-popper-placement^=bottom] .vl-tooltip__arrow:after,
.vl-tooltip[x-placement^=bottom] .vl-tooltip__arrow:after {
    content: " ";
    top: 1px;
    margin-left: -.5rem;
    border-top-width: 0;
    border-bottom-color: #fff
}

.vl-tooltip[data-popper-placement^=left] .vl-tooltip__arrow,
.vl-tooltip[x-placement^=left] .vl-tooltip__arrow {
    top: 50%;
    right: -.6rem;
    margin-top: -.6rem;
    border-right-width: 0;
    border-left-color: #cfd5dd
}

.vl-tooltip[data-popper-placement^=left] .vl-tooltip__arrow:after,
.vl-tooltip[x-placement^=left] .vl-tooltip__arrow:after {
    content: " ";
    right: 1px;
    border-right-width: 0;
    border-left-color: #fff;
    bottom: -.5rem
}

.vl-tooltip__arrow {
    border-width: .6rem
}

.vl-tooltip__arrow,
.vl-tooltip__arrow:after {
    position: absolute;
    display: block;
    width: 0;
    height: 0;
    border: .5rem solid transparent;
    content: ""
}

.ul,
.vl-typography ul {
    list-style-type: disc
}

.ol,
.vl-typography ol {
    list-style-type: decimal
}

.ol .ol,
.ol ol,
.vl-typography ol .ol,
.vl-typography ol ol {
    list-style-type: lower-latin
}

.ol,
.ul,
.vl-typography ol,
.vl-typography ul {
    display: block;
    margin: 1.8rem 0 2rem 1rem;
    padding-left: 2rem
}

.ol:first-child,
.ul:first-child,
.vl-typography ol:first-child,
.vl-typography ul:first-child {
    margin-top: 0
}

.ol:last-child,
.ul:last-child,
.vl-typography ol:last-child,
.vl-typography ul:last-child {
    margin-bottom: 0
}

.ol li,
.ul li,
.vl-typography ol li,
.vl-typography ul li {
    display: list-item;
    margin-bottom: .5em
}

.ol li:last-child,
.ul li:last-child,
.vl-typography ol li:last-child,
.vl-typography ul li:last-child {
    margin-bottom: 0
}

.ol ul,
.ul ul,
.vl-typography ol ul,
.vl-typography ul ul {
    list-style-type: circle
}

.ol ol,
.ol ul,
.ul ol,
.ul ul,
.vl-typography ol ol,
.vl-typography ol ul,
.vl-typography ul ol,
.vl-typography ul ul {
    margin: .5em 0 .5rem 1.5em
}

.ol ol:first-child,
.ol ul:first-child,
.ul ol:first-child,
.ul ul:first-child,
.vl-typography ol ol:first-child,
.vl-typography ol ul:first-child,
.vl-typography ul ol:first-child,
.vl-typography ul ul:first-child {
    margin-top: 0
}

.ol ol:last-child,
.ol ul:last-child,
.ul ol:last-child,
.ul ul:last-child,
.vl-typography ol ol:last-child,
.vl-typography ol ul:last-child,
.vl-typography ul ol:last-child,
.vl-typography ul ul:last-child {
    margin-bottom: 0
}

.p,
.vl-typography p {
    margin-bottom: 1.8rem
}

.p:last-child,
.vl-typography p:last-child {
    margin-bottom: 0
}

.vl-typography ul li .p:last-child,
.vl-typography ul li p:last-child {
    margin-bottom: 1.8rem
}

.vl-typography b,
.vl-typography strong {
    font-weight: 500
}

.vl-typography em,
.vl-typography i {
    font-style: italic
}

.vl-typography s,
.vl-typography strike {
    text-decoration: line-through
}

.vl-typography hr {
    display: block;
    margin: .5rem auto;
    border: 0;
    border-top: 1px solid #cbd2da
}

.vl-typography table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 2rem
}

.vl-typography table thead tr {
    border-bottom: 3px solid #cbd2da
}

.vl-typography table tbody tr {
    border-bottom: 1px solid #cbd2da
}

.vl-typography table tbody tr[data-vl-table-selectable] {
    transition: background .2s ease-in-out;
    cursor: pointer
}

.vl-typography table tbody tr[data-vl-table-selectable]:hover {
    background: #f3f5f6
}

.vl-typography table tbody tr.vl-data-table__grouped-row:not(.vl-data-table__grouped-row--last) {
    border-bottom: 0
}

.vl-typography table td,
.vl-typography table th {
    text-align: left;
    font-size: 1.6rem;
    line-height: 1.3;
    vertical-align: top;
    padding: 1.2rem 1rem
}

@media screen and (max-width:767px) {
    .vl-typography table td,
    .vl-typography table th {
        padding: 1rem;
        font-size: 1.4rem
    }
}

.vl-typography table td:first-child,
.vl-typography table th:first-child {
    border-left: 0
}

.vl-typography table th {
    font-weight: 500
}

.vl-typography table .vl-data-table__grouped-row td {
    padding: .3rem 1rem .3rem 0
}

@media screen and (max-width:767px) {
    .vl-typography table .vl-data-table__grouped-row td {
        padding: .3rem 1rem .3rem 0
    }
}

.vl-typography table .vl-data-table__grouped-row--first td {
    padding-top: 1.2rem
}

@media screen and (max-width:767px) {
    .vl-typography table .vl-data-table__grouped-row--first td {
        padding-top: 1rem
    }
}

.vl-typography table .vl-data-table__grouped-row--last td {
    padding-bottom: 1.2rem
}

@media screen and (max-width:767px) {
    .vl-typography table .vl-data-table__grouped-row--last td {
        padding-bottom: 1rem
    }
}

.vl-typography table__header-title--sortable {
    text-decoration: none
}

.vl-typography table__header-title--sortable .vl-data-table__header-title__sort-icon {
    opacity: 0
}

.vl-typography table__header-title--sortable:focus,
.vl-typography table__header-title--sortable:hover {
    text-decoration: underline
}

.vl-typography table__header-title--sortable:focus .vl-data-table__header-title__sort-icon,
.vl-typography table__header-title--sortable:hover .vl-data-table__header-title__sort-icon {
    opacity: .5
}

.vl-typography table__header-title--sortable-active .vl-data-table__header-title__sort-icon {
    opacity: 1
}

.vl-typography table__body-title {
    max-width: 30rem
}

.vl-typography table--alt tr td:not(:first-child) {
    padding: 1.2rem
}

.vl-typography table--alt tr th:not(:first-child) {
    padding: 0 1.2rem 1.2rem
}

.vl-typography table--alt tr td:first-child,
.vl-typography table--alt tr th:first-child {
    border-right: 1px solid #cbd2da
}

.vl-typography table.vl-data-table--no-header tbody tr:first-child {
    border-top: 3px solid #cbd2da
}

.vl-typography table .vl-pill {
    vertical-align: middle
}

@media screen and (max-width:767px) {
    .vl-typography table .vl-pill {
        height: 2rem;
        line-height: 2rem;
        padding: 0 .5rem;
        font-size: 1.4rem
    }
}

.vl-typography blockquote {
    position: relative;
    padding-left: 9rem;
    font-size: 3.4rem;
    font-family: Flanders Art Sans, sans-serif;
    font-weight: 400;
    margin-bottom: 2rem;
    line-height: 1.5
}

@media screen and (max-width:767px) {
    .vl-typography blockquote {
        padding-left: 5rem
    }
}

.vl-typography blockquote:before {
    position: absolute;
    content: "\201C";
    font-size: 9rem;
    left: 0;
    top: 0;
    padding-top: 1rem;
    padding-left: 1rem;
    width: 7rem;
    height: 6rem;
    line-height: 1;
    color: #333332;
    background: linear-gradient(-110deg, transparent 20px, #ffe615 0);
    background: linear-gradient(-110deg, transparent 20px, var(--vl-theme-primary-color) 0)
}

@media screen and (max-width:767px) {
    .vl-typography blockquote:before {
        width: 4.6rem;
        font-size: 6rem;
        height: 3.6rem;
        padding-right: 1.5rem;
        padding-top: .5rem;
        padding-left: .5rem;
        margin-right: 0
    }
}

.vl-typography pre:not([class*=language]) {
    padding: 1.5rem;
    background-color: #333332;
    color: #fff;
    display: block;
    white-space: pre;
    overflow-x: scroll;
    -moz-tab-size: 2;
    -o-tab-size: 2;
    tab-size: 2;
    word-break: normal;
    -webkit-hyphens: none;
    -ms-hyphens: none;
    hyphens: none
}

.vl-typography pre:not([class*=language]) code,
.vl-typography pre:not([class*=language]) kdb,
.vl-typography pre:not([class*=language]) samp {
    background-color: transparent;
    padding: 0
}

.vl-typography code,
.vl-typography kdb,
.vl-typography samp {
    font-family: monospace;
    background: #e8ebee;
    padding: .2rem
}

.vl-typography .vl-link,
.vl-typography a {
    display: inline;
    text-decoration: underline
}

.vl-typography .vl-link:active,
.vl-typography .vl-link:focus,
.vl-typography .vl-link:hover,
.vl-typography a:active,
.vl-typography a:focus,
.vl-typography a:hover {
    text-decoration: none
}

.vl-typography--prewrapped {
    white-space: pre-wrap
}

.vl-upload {
    position: relative;
    margin-bottom: 1rem;
    transition: background-color .3s ease-out
}

.vl-upload--basic .vl-upload__element__input {
    width: 100%;
    height: auto;
    margin: 0;
    opacity: 1;
    pointer-events: auto;
    position: relative;
    overflow: auto
}

.vl-upload--error .vl-upload__element,
.vl-upload--error .vl-upload__element:hover {
    border-color: #db3434;
    background-color: #fbebeb
}

.vl-upload--error .vl-upload__element .vl-upload__element__label:hover,
.vl-upload--error .vl-upload__element:hover .vl-upload__element__label:hover {
    background-color: transparent
}

.vl-upload--success .vl-upload__element,
.vl-upload--success .vl-upload__element:hover {
    border-color: #3ca854;
    background-color: #ecf6ee
}

.vl-upload--success .vl-upload__element .vl-upload__element__label:hover,
.vl-upload--success .vl-upload__element:hover .vl-upload__element__label:hover {
    background-color: transparent
}

.vl-upload--disabled .vl-upload__element {
    background-color: #cbd2d9
}

.vl-upload--disabled .vl-upload__element:focus,
.vl-upload--disabled .vl-upload__element:hover {
    background-color: #cbd2d9;
    border: .1rem dashed #687483
}

.vl-upload--disabled .vl-upload__element:focus .vl-upload__element__label,
.vl-upload--disabled .vl-upload__element:hover .vl-upload__element__label {
    background-color: transparent;
    padding: 1rem
}

.vl-upload--disabled .vl-upload__element .vl-upload__element__label {
    cursor: not-allowed
}

.vl-upload--disabled .vl-upload__element .vl-upload__element__label .vl-upload__element__button {
    color: #687483;
    text-decoration: none;
    cursor: not-allowed
}

.vl-upload__overlay {
    position: absolute;
    display: none;
    pointer-events: none;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: #fff;
    border: .1rem dashed #05c;
    z-index: 10;
    opacity: .9;
    font-family: Flanders Art Sans, sans-serif
}

.vl-upload__overlay__text {
    position: absolute;
    left: 50%;
    top: 50%;
    width: 80%;
    transform: translate(-50%, -50%);
    text-align: center;
    font-size: 1.4rem
}

.vl-upload__overlay__text .vl-vi {
    font-size: 2rem;
    display: block;
    color: #05c
}

.vl-upload__files {
    margin-bottom: 2rem;
    display: none;
    position: relative
}

.vl-upload__files:after,
.vl-upload__files:before {
    content: "";
    display: table
}

.vl-upload__files:after {
    clear: both
}

.vl-upload__files--has-files {
    display: block
}

.vl-upload__files__close {
    margin: 1rem 0 0;
    float: right
}

.vl-upload__files__close .vl-vi {
    margin-right: .5rem
}

@media screen and (max-width:767px) {
    .vl-upload__files__close {
        float: none
    }
}

.vl-upload__file {
    position: relative;
    margin-bottom: .2rem;
    padding: 1rem 1.5rem;
    z-index: 5;
    font-family: Flanders Art Sans, sans-serif;
    border: 0
}

.vl-upload__file:last-child {
    border-bottom: 0
}

.vl-upload__file:hover {
    background-color: rgba(179, 207, 245, .3)
}

.vl-upload__file__size {
    color: #4d4d4b
}

.vl-upload__file__name {
    color: #333332;
    max-width: calc(100% - 2rem);
    word-break: break-all
}

@supports (overflow-wrap:break-word) {
    .vl-upload__file__name {
        word-wrap: break-word;
        word-break: normal
    }
}

.vl-upload__file__name__icon {
    display: inline-block;
    transform: translateY(-1px);
    line-height: 2rem;
    padding-right: 1rem;
    color: #687483
}

.vl-upload__file__close {
    position: absolute;
    top: 50%;
    right: 0;
    transform: translateY(-50%);
    padding: 1rem;
    margin-right: 1rem;
    color: #05c;
    box-shadow: none;
    overflow: hidden
}

.vl-upload__file__close .vl-vi {
    height: 1.1rem;
    width: 1.1rem;
    font-size: 1.6rem
}

@media screen and (max-width:1023px) {
    .vl-upload__file__close .vl-vi {
        font-size: 1.4rem
    }
}

.vl-upload__file__close:hover {
    box-shadow: none
}

.vl-upload__file__close:focus {
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65)
}

.vl-upload__file--error,
.vl-upload__file.dz-error {
    border: .1rem solid #f1aeae;
    background-color: #fbebeb;
    padding-left: 6.5rem
}

@media screen and (max-width:767px) {
    .vl-upload__file--error,
    .vl-upload__file.dz-error {
        padding-left: 5rem
    }
}

@media screen and (max-width:767px) {
    .vl-upload__file--error:before,
    .vl-upload__file.dz-error:before {
        left: 1.5rem;
        width: 18px;
        height: 18px
    }
}

.vl-upload__file--error .vl-upload__file__name,
.vl-upload__file.dz-error .vl-upload__file__name {
    font-weight: 500
}

.vl-upload__file--error .dz-error-message,
.vl-upload__file--error .vl-upload__file__error,
.vl-upload__file.dz-error .dz-error-message,
.vl-upload__file.dz-error .vl-upload__file__error {
    font-size: .9em
}

.vl-upload__file--error .vl-upload__file__name__icon,
.vl-upload__file.dz-error .vl-upload__file__name__icon {
    display: none
}

.vl-upload__file--error .vl-upload__file__close,
.vl-upload__file.dz-error .vl-upload__file__close {
    cursor: pointer
}

.vl-upload__file--error .vl-upload__file__close .vl-vi,
.vl-upload__file.dz-error .vl-upload__file__close .vl-vi {
    color: #333332
}

.vl-upload__file--error .vl-upload__file__close:focus,
.vl-upload__file.dz-error .vl-upload__file__close:focus {
    box-shadow: 0 0 0 2px #fbebeb, 0 0 0 5px rgba(0, 85, 204, .65)
}

.vl-upload__file--error.vl-upload__file--error-size .vl-upload__file__size,
.vl-upload__file.dz-error.vl-upload__file--error-size .vl-upload__file__size {
    color: #333332
}

.vl-upload__file--error:hover,
.vl-upload__file.dz-error:hover {
    background-color: #fbebeb
}

.vl-upload.upload--dragging .vl-upload__overlay {
    opacity: 1;
    display: block
}

.vl-upload.upload--dragging .vl-upload__element {
    min-height: 8.75rem
}

.vl-upload__element {
    font-family: Flanders Art Sans, sans-serif;
    border: .1rem dashed #687483;
    border-radius: .3rem;
    text-align: center;
    position: relative;
    z-index: 4;
    min-height: 100%
}

.vl-upload__element:hover {
    border-width: .2rem;
    border-color: rgba(0, 85, 204, .65)
}

.vl-upload__element:hover .vl-upload__element__label {
    background-color: rgba(179, 207, 245, .3);
    padding: .9rem
}

.vl-upload__element__input {
    opacity: 0;
    pointer-events: none;
    position: absolute;
    width: 1px;
    height: 1px;
    margin: -1px;
    padding: 1rem;
    overflow: hidden
}

.vl-upload__element__input:focus {
    outline: none
}

.vl-upload__element__input:focus+label {
    background-color: rgba(179, 207, 245, .3)
}

.vl-upload__element__label {
    color: #05c;
    display: block;
    padding: 1rem;
    cursor: pointer;
    background-color: transparent;
    transition: background-color .3s ease-out;
    height: 100%
}

.vl-upload__element__label .vl-vi {
    display: inline-block;
    font-size: 1.4rem;
    margin-right: .5rem;
    line-height: 2.4rem;
    top: 1px
}

.vl-upload__element__label small {
    font-size: 1.4rem;
    color: #687483;
    display: none;
    text-decoration: none;
    text-align: center;
    line-height: 1.5;
    margin-top: .5rem
}

.vl-upload .vl-upload__element__label small {
    display: block
}

.vl-upload .vl-upload__element__label__error {
    color: #db3434;
    font-size: .9em
}

.vl-upload--dragging .vl-upload__overlay {
    opacity: 1;
    display: block
}

.no-js .vl-upload__element__label {
    display: none
}

.dz-image-preview {
    overflow: hidden
}

.vl-upload__element__button {
    border-radius: 0;
    -moz-appearance: none;
    appearance: none;
    -webkit-appearance: none;
    border: 0;
    background-color: transparent;
    padding: 0;
    display: inline-flex;
    color: inherit;
    font-size: inherit;
    line-height: 2.4rem
}

.vl-upload__element__button:focus:after {
    display: block;
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
    background-color: rgba(179, 207, 245, .3);
    content: ""
}

.vl-upload--dragging [data-vl-upload-full-body-drop] {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    min-height: 100vh;
    z-index: 10006;
    margin: 0
}

.vl-user-toggle {
    display: flex;
    align-items: center
}

.vl-user-toggle__icon {
    display: inline-block;
    border-radius: 50%;
    text-align: center;
    vertical-align: middle;
    width: 5rem;
    height: 5rem;
    line-height: 5rem;
    background-color: #3ca854;
    color: #ecf6ee;
    margin-right: 1rem
}

.vl-user-toggle__icon:after,
.vl-user-toggle__icon:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-user-toggle__icon:before {
    content: "\f1c7";
    margin: 0;
    display: block
}

.vl-user-toggle__icon--link {
    margin-right: 1rem
}

.vl-user-toggle__icon--link-after {
    margin-left: 1rem
}

.vl-user-toggle__icon:before {
    font-size: 2.5rem
}

@media screen and (max-width:767px) {
    .vl-user-toggle__icon {
        width: 4rem;
        height: 4rem;
        line-height: 4rem
    }
    .vl-user-toggle__icon:before {
        font-size: 2rem
    }
}

@media screen and (max-width:767px) {
    .vl-user-toggle__icon {
        display: none
    }
}

.vl-user-toggle__name {
    font-family: "Flanders Art Serif", serif;
    font-size: 2rem;
    font-weight: 500
}

@media screen and (max-width:767px) {
    .vl-user-toggle__name {
        font-size: 1.6rem
    }
}

.vl-user-toggle__popover {
    line-height: 1
}

.vl-user-toggle__toggle {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 2.5rem;
    height: 2.5rem;
    text-align: center;
    border-radius: 100%;
    transition: background .2s ease-out;
    margin-left: .5rem
}

.vl-user-toggle__toggle:focus,
.vl-user-toggle__toggle:hover {
    background: #f7f9fc
}

.vl-user-toggle__arrows {
    display: flex;
    align-items: center;
    justify-content: center
}

@-webkit-keyframes plyr-progress {
    to {
        background-position: 25px 0
    }
}

@keyframes plyr-progress {
    to {
        background-position: 25px 0
    }
}

@-webkit-keyframes plyr-popup {
    0% {
        opacity: .5;
        transform: translateY(10px)
    }
    to {
        opacity: 1;
        transform: translateY(0)
    }
}

@keyframes plyr-popup {
    0% {
        opacity: .5;
        transform: translateY(10px)
    }
    to {
        opacity: 1;
        transform: translateY(0)
    }
}

@-webkit-keyframes plyr-fade-in {
    0% {
        opacity: 0
    }
    to {
        opacity: 1
    }
}

@keyframes plyr-fade-in {
    0% {
        opacity: 0
    }
    to {
        opacity: 1
    }
}

.vl-video-player .plyr {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    direction: ltr;
    font-family: inherit;
    font-feature-settings: "tnum";
    font-variant-numeric: tabular-nums;
    font-weight: 500;
    line-height: 1.7;
    max-width: 100%;
    min-width: 200px;
    position: relative;
    text-shadow: none;
    transition: box-shadow .3s ease
}

.vl-video-player .plyr audio,
.vl-video-player .plyr video {
    border-radius: inherit;
    height: auto;
    vertical-align: middle;
    width: 100%
}

.vl-video-player .plyr button {
    font: inherit;
    line-height: inherit;
    width: auto
}

.vl-video-player .plyr:focus {
    outline: 0
}

.vl-video-player .plyr--full-ui {
    box-sizing: border-box
}

.vl-video-player .plyr--full-ui *,
.vl-video-player .plyr--full-ui:after,
.vl-video-player .plyr--full-ui:before {
    box-sizing: inherit
}

.vl-video-player .plyr--full-ui a,
.vl-video-player .plyr--full-ui button,
.vl-video-player .plyr--full-ui input,
.vl-video-player .plyr--full-ui label {
    touch-action: manipulation
}

.vl-video-player .plyr__badge {
    background: #4f5b5f;
    border-radius: 2px;
    color: #fff;
    font-size: 9px;
    line-height: 1;
    padding: 3px 4px
}

.vl-video-player .plyr--full-ui::-webkit-media-text-track-container {
    display: none
}

.vl-video-player .plyr__captions {
    -webkit-animation: plyr-fade-in .3s ease;
    animation: plyr-fade-in .3s ease;
    bottom: 0;
    color: #fff;
    display: none;
    font-size: 14px;
    left: 0;
    padding: 15px;
    position: absolute;
    text-align: center;
    transform: translateY(-60px);
    transition: transform .4s ease-in-out;
    width: 100%
}

.vl-video-player .plyr__captions span {
    background: rgba(0, 0, 0, .8);
    border-radius: 2px;
    -webkit-box-decoration-break: clone;
    box-decoration-break: clone;
    line-height: 185%;
    padding: .2em .5em;
    white-space: pre-wrap
}

.vl-video-player .plyr__captions span div {
    display: inline
}

.vl-video-player .plyr__captions span:empty {
    display: none
}

@media (min-width:480px) {
    .vl-video-player .plyr__captions {
        font-size: 16px;
        padding: 30px
    }
}

@media (min-width:768px) {
    .vl-video-player .plyr__captions {
        font-size: 18px
    }
}

.vl-video-player .plyr--captions-active .plyr__captions {
    display: block
}

.vl-video-player .plyr--hide-controls .plyr__captions {
    transform: translateY(-22.5px)
}

.vl-video-player .plyr__control {
    background: transparent;
    border: 0;
    border-radius: 3px;
    color: inherit;
    cursor: pointer;
    flex-shrink: 0;
    overflow: visible;
    padding: 10.5px;
    position: relative;
    transition: all .3s ease
}

.vl-video-player .plyr__control svg {
    display: block;
    fill: currentColor;
    height: 18px;
    pointer-events: none;
    width: 18px
}

.vl-video-player .plyr__control:focus {
    outline: 0
}

.vl-video-player .plyr__control.plyr__tab-focus {
    box-shadow: 0 0 0 3px rgba(0, 85, 204, .35);
    outline: 0
}

.vl-video-player .plyr__control[aria-pressed=false] .icon--pressed,
.vl-video-player .plyr__control[aria-pressed=false] .label--pressed,
.vl-video-player .plyr__control[aria-pressed=true] .icon--not-pressed,
.vl-video-player .plyr__control[aria-pressed=true] .label--not-pressed {
    display: none
}

.vl-video-player .plyr--audio .plyr__control.plyr__tab-focus,
.vl-video-player .plyr--audio .plyr__control:hover,
.vl-video-player .plyr--audio .plyr__control[aria-expanded=true] {
    background: #05c;
    color: #fff
}

.vl-video-player .plyr__control--overlaid {
    background: rgba(0, 85, 204, .8);
    border: 0;
    border-radius: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15);
    color: #fff;
    display: none;
    left: 50%;
    padding: 23px;
    position: absolute;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 2
}

.vl-video-player .plyr__control--overlaid svg {
    height: 20px;
    left: 2px;
    position: relative;
    width: 20px
}

.vl-video-player .plyr__control--overlaid:focus,
.vl-video-player .plyr__control--overlaid:hover {
    background: #05c
}

.vl-video-player .plyr--playing .plyr__control--overlaid {
    opacity: 0;
    visibility: hidden
}

.vl-video-player .plyr--full-ui.plyr--video .plyr__control--overlaid {
    display: block
}

.vl-video-player .plyr--full-ui::-webkit-media-controls {
    display: none
}

.vl-video-player .plyr__controls {
    align-items: center;
    display: flex;
    text-align: center
}

.vl-video-player .plyr__controls .plyr__menu,
.vl-video-player .plyr__controls .plyr__progress,
.vl-video-player .plyr__controls .plyr__time,
.vl-video-player .plyr__controls>.plyr__control {
    margin-left: 7.5px
}

.vl-video-player .plyr__controls .plyr__menu:first-child,
.vl-video-player .plyr__controls .plyr__menu:first-child+[data-plyr=pause],
.vl-video-player .plyr__controls .plyr__progress:first-child,
.vl-video-player .plyr__controls .plyr__progress:first-child+[data-plyr=pause],
.vl-video-player .plyr__controls .plyr__time:first-child,
.vl-video-player .plyr__controls .plyr__time:first-child+[data-plyr=pause],
.vl-video-player .plyr__controls>.plyr__control:first-child,
.vl-video-player .plyr__controls>.plyr__control:first-child+[data-plyr=pause] {
    margin-left: 0
}

.vl-video-player .plyr__controls .plyr__volume {
    margin-left: 7.5px
}

@media (min-width:480px) {
    .vl-video-player .plyr__controls .plyr__menu,
    .vl-video-player .plyr__controls .plyr__progress,
    .vl-video-player .plyr__controls .plyr__time,
    .vl-video-player .plyr__controls>.plyr__control {
        margin-left: 15px
    }
    .vl-video-player .plyr__controls .plyr__menu+.plyr__control,
    .vl-video-player .plyr__controls>.plyr__control+.plyr__control,
    .vl-video-player .plyr__controls>.plyr__control+.plyr__menu {
        margin-left: 7.5px
    }
}

.vl-video-player .plyr--video .plyr__controls {
    background: linear-gradient(transparent, rgba(0, 0, 0, .7));
    border-bottom-left-radius: inherit;
    border-bottom-right-radius: inherit;
    bottom: 0;
    color: #fff;
    left: 0;
    padding: 52.5px 15px 15px;
    position: absolute;
    right: 0;
    transition: opacity .4s ease-in-out, transform .4s ease-in-out;
    z-index: 2
}

.vl-video-player .plyr--video .plyr__controls .plyr__control svg {
    filter: drop-shadow(0 1px 1px rgba(0, 0, 0, .15))
}

.vl-video-player .plyr--video .plyr__controls .plyr__control.plyr__tab-focus,
.vl-video-player .plyr--video .plyr__controls .plyr__control:hover,
.vl-video-player .plyr--video .plyr__controls .plyr__control[aria-expanded=true] {
    background: #05c;
    color: #fff
}

.vl-video-player .plyr--audio .plyr__controls {
    background: #fff;
    border-radius: inherit;
    color: #4f5b5f;
    padding: 15px
}

.vl-video-player .plyr--video.plyr--hide-controls .plyr__controls {
    opacity: 0;
    pointer-events: none;
    transform: translateY(100%)
}

.vl-video-player .plyr [data-plyr=airplay],
.vl-video-player .plyr [data-plyr=captions],
.vl-video-player .plyr [data-plyr=fullscreen],
.vl-video-player .plyr [data-plyr=pip] {
    display: none
}

.vl-video-player .plyr--airplay-supported [data-plyr=airplay],
.vl-video-player .plyr--captions-enabled [data-plyr=captions],
.vl-video-player .plyr--fullscreen-enabled [data-plyr=fullscreen],
.vl-video-player .plyr--pip-supported [data-plyr=pip] {
    display: inline-block
}

.vl-video-player .plyr__video-embed {
    height: 0;
    padding-bottom: 56.25%;
    position: relative
}

.vl-video-player .plyr__video-embed iframe {
    border: 0;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    width: 100%
}

.vl-video-player .plyr--full-ui .plyr__video-embed iframe {
    pointer-events: none
}

.vl-video-player .plyr--full-ui .plyr__video-embed>.plyr__video-embed__container {
    padding-bottom: 240%;
    position: relative;
    transform: translateY(-38.28125%)
}

.vl-video-player .plyr__menu {
    display: flex;
    position: relative
}

.vl-video-player .plyr__menu .plyr__control svg {
    transition: transform .3s ease
}

.vl-video-player .plyr__menu .plyr__control[aria-expanded=true] svg {
    transform: rotate(90deg)
}

.vl-video-player .plyr__menu .plyr__control[aria-expanded=true] .plyr__tooltip {
    display: none
}

.vl-video-player .plyr__menu__container {
    -webkit-animation: plyr-popup .2s ease;
    animation: plyr-popup .2s ease;
    background: hsla(0, 0%, 100%, .9);
    border-radius: 4px;
    bottom: 100%;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
    color: #4f5b5f;
    font-size: 16px;
    margin-bottom: 10px;
    position: absolute;
    right: -3px;
    text-align: left;
    white-space: nowrap;
    z-index: 3
}

.vl-video-player .plyr__menu__container>div {
    overflow: hidden;
    transition: height .35s cubic-bezier(.4, 0, .2, 1), width .35s cubic-bezier(.4, 0, .2, 1)
}

.vl-video-player .plyr__menu__container:after {
    border: 4px solid transparent;
    border-top-color: hsla(0, 0%, 100%, .9);
    content: "";
    height: 0;
    position: absolute;
    right: 15px;
    top: 100%;
    width: 0
}

.vl-video-player .plyr__menu__container ul {
    list-style: none;
    margin: 0;
    overflow: hidden;
    padding: 10.5px
}

.vl-video-player .plyr__menu__container ul li {
    margin-top: 2px
}

.vl-video-player .plyr__menu__container ul li:first-child {
    margin-top: 0
}

.vl-video-player .plyr__menu__container .plyr__control {
    align-items: center;
    color: #4f5b5f;
    display: flex;
    font-size: 14px;
    padding: 6px 21px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    width: 100%
}

.vl-video-player .plyr__menu__container .plyr__control:after {
    border: 4px solid transparent;
    content: "";
    position: absolute;
    top: 50%;
    transform: translateY(-50%)
}

.vl-video-player .plyr__menu__container .plyr__control--forward {
    padding-right: 42px
}

.vl-video-player .plyr__menu__container .plyr__control--forward:after {
    border-left-color: rgba(79, 91, 95, .8);
    right: 5px
}

.vl-video-player .plyr__menu__container .plyr__control--forward.plyr__tab-focus:after,
.vl-video-player .plyr__menu__container .plyr__control--forward:hover:after {
    border-left-color: currentColor
}

.vl-video-player .plyr__menu__container .plyr__control--back {
    font-weight: 500;
    margin: 10.5px 10.5px 5px;
    padding-left: 42px;
    position: relative;
    width: calc(100% - 21px)
}

.vl-video-player .plyr__menu__container .plyr__control--back:after {
    border-right-color: rgba(79, 91, 95, .8);
    left: 10.5px
}

.vl-video-player .plyr__menu__container .plyr__control--back:before {
    background: #b7c5cd;
    box-shadow: 0 1px 0 #fff;
    content: "";
    height: 1px;
    left: 0;
    margin-top: 6px;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 100%
}

.vl-video-player .plyr__menu__container .plyr__control--back.plyr__tab-focus:after,
.vl-video-player .plyr__menu__container .plyr__control--back:hover:after {
    border-right-color: currentColor
}

.vl-video-player .plyr__menu__container label.plyr__control {
    padding-left: 10.5px
}

.vl-video-player .plyr__menu__container label.plyr__control input[type=radio]+span {
    background: rgba(0, 0, 0, .1);
    border-radius: 100%;
    display: block;
    flex-shrink: 0;
    height: 16px;
    margin-right: 15px;
    position: relative;
    transition: all .3s ease;
    width: 16px
}

.vl-video-player .plyr__menu__container label.plyr__control input[type=radio]+span:after {
    background: #fff;
    border-radius: 100%;
    content: "";
    height: 6px;
    left: 5px;
    opacity: 0;
    position: absolute;
    top: 5px;
    transform: scale(0);
    transition: transform .3s ease, opacity .3s ease;
    width: 6px
}

.vl-video-player .plyr__menu__container label.plyr__control input[type=radio]:checked+span {
    background: #05c
}

.vl-video-player .plyr__menu__container label.plyr__control input[type=radio]:checked+span:after {
    opacity: 1;
    transform: scale(1)
}

.vl-video-player .plyr__menu__container label.plyr__control input[type=radio]:focus+span {
    box-shadow: 0 0 0 3px rgba(0, 85, 204, .35);
    outline: 0
}

.vl-video-player .plyr__menu__container label.plyr__control.plyr__tab-focus input[type=radio]+span,
.vl-video-player .plyr__menu__container label.plyr__control:hover input[type=radio]+span {
    background: rgba(0, 0, 0, .1)
}

.vl-video-player .plyr__menu__container .plyr__menu__value {
    align-items: center;
    display: flex;
    margin-left: auto;
    margin-right: -10.5px;
    overflow: hidden;
    padding-left: 37px;
    pointer-events: none
}

.vl-video-player .plyr__progress {
    display: flex;
    flex: 1;
    position: relative;
    margin-right: 14px;
    left: 7px
}

.vl-video-player .plyr__progress input[type=range] {
    position: relative;
    z-index: 2;
    width: calc(100%+ 14px)!important;
    margin: 0 -7px!important
}

.vl-video-player .plyr__progress .plyr__tooltip {
    font-size: 14px;
    left: 0
}

.vl-video-player .plyr__progress--buffer {
    -webkit-appearance: none;
    background: transparent;
    border: 0;
    border-radius: 100px;
    height: 6px;
    left: 0;
    margin: -3px 0 0;
    padding: 0;
    position: absolute;
    top: 50%;
    width: 100%
}

.vl-video-player .plyr__progress--buffer::-webkit-progress-bar {
    background: transparent;
    -webkit-transition: width .2s ease;
    transition: width .2s ease
}

.vl-video-player .plyr__progress--buffer::-webkit-progress-value {
    background: currentColor;
    border-radius: 100px;
    min-width: 6px
}

.vl-video-player .plyr__progress--buffer::-moz-progress-bar {
    background: currentColor;
    border-radius: 100px;
    min-width: 6px;
    -moz-transition: width .2s ease;
    transition: width .2s ease
}

.vl-video-player .plyr__progress--buffer::-ms-fill {
    border-radius: 100px;
    -ms-transition: width .2s ease;
    transition: width .2s ease
}

.vl-video-player .plyr--video .plyr__progress--buffer {
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15);
    color: hsla(0, 0%, 100%, .25)
}

.vl-video-player .plyr--audio .plyr__progress--buffer {
    color: rgba(183, 197, 205, .66)
}

.vl-video-player .plyr--loading .plyr__progress--buffer {
    -webkit-animation: plyr-progress 1s linear infinite;
    animation: plyr-progress 1s linear infinite;
    background-image: linear-gradient(-45deg, rgba(47, 52, 61, .6) 25%, transparent 0, transparent 50%, rgba(47, 52, 61, .6) 0, rgba(47, 52, 61, .6) 75%, transparent 0, transparent);
    background-repeat: repeat-x;
    background-size: 25px 25px;
    color: transparent
}

.vl-video-player .plyr--video.plyr--loading .plyr__progress--buffer {
    background-color: hsla(0, 0%, 100%, .25)
}

.vl-video-player .plyr--audio.plyr--loading .plyr__progress--buffer {
    background-color: rgba(183, 197, 205, .66)
}

.vl-video-player .plyr__poster {
    background-color: #000;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    background-size: contain;
    height: 100%;
    left: 0;
    opacity: 0;
    position: absolute;
    top: 0;
    transition: opacity .3s ease;
    width: 100%;
    z-index: 1;
    pointer-events: none
}

.vl-video-player .plyr--stopped.plyr__poster-enabled .plyr__poster {
    opacity: 1
}

.vl-video-player .plyr--full-ui input[type=range] {
    -webkit-appearance: none;
    background: transparent;
    border: 0;
    border-radius: 28px;
    color: #ffe615;
    color: var(--vl-theme-primary-color);
    display: block;
    height: 20px;
    margin: 0;
    padding: 0;
    transition: box-shadow .3s ease;
    width: 100%
}

.vl-video-player .plyr--full-ui input[type=range]::-webkit-slider-runnable-track {
    background: transparent;
    border: 0;
    border-radius: 3px;
    height: 6px;
    -webkit-transition: all .3s ease;
    transition: all .3s ease;
    -webkit-user-select: none;
    user-select: none;
    background-image: linear-gradient(90deg, currentColor, transparent 0);
    background-image: linear-gradient(90deg, currentColor var(--value, 0), transparent var(--value, 0))
}

.vl-video-player .plyr--full-ui input[type=range]::-webkit-slider-thumb {
    background: #fff;
    border: 0;
    border-radius: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15), 0 0 0 1px rgba(47, 52, 61, .2);
    box-sizing: border-box;
    height: 14px;
    position: relative;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
    width: 14px;
    -webkit-appearance: none;
    margin-top: -4px
}

.vl-video-player .plyr--full-ui input[type=range]::-moz-range-track {
    background: transparent;
    border: 0;
    border-radius: 3px;
    height: 6px;
    -moz-transition: all .3s ease;
    transition: all .3s ease;
    -moz-user-select: none;
    user-select: none
}

.vl-video-player .plyr--full-ui input[type=range]::-moz-range-thumb {
    background: #fff;
    border: 0;
    border-radius: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15), 0 0 0 1px rgba(47, 52, 61, .2);
    box-sizing: border-box;
    height: 14px;
    position: relative;
    -moz-transition: all .2s ease;
    transition: all .2s ease;
    width: 14px
}

.vl-video-player .plyr--full-ui input[type=range]::-moz-range-progress {
    background: currentColor;
    border-radius: 3px;
    height: 6px
}

.vl-video-player .plyr--full-ui input[type=range]::-ms-track {
    color: transparent
}

.vl-video-player .plyr--full-ui input[type=range]::-ms-fill-upper,
.vl-video-player .plyr--full-ui input[type=range]::-ms-track {
    background: transparent;
    border: 0;
    border-radius: 3px;
    height: 6px;
    -ms-transition: all .3s ease;
    transition: all .3s ease;
    -ms-user-select: none;
    user-select: none
}

.vl-video-player .plyr--full-ui input[type=range]::-ms-fill-lower {
    background: transparent;
    border: 0;
    border-radius: 3px;
    height: 6px;
    -ms-transition: all .3s ease;
    transition: all .3s ease;
    -ms-user-select: none;
    user-select: none;
    background: currentColor
}

.vl-video-player .plyr--full-ui input[type=range]::-ms-thumb {
    background: #fff;
    border: 0;
    border-radius: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15), 0 0 0 1px rgba(47, 52, 61, .2);
    box-sizing: border-box;
    height: 14px;
    position: relative;
    -ms-transition: all .2s ease;
    transition: all .2s ease;
    width: 14px;
    margin-top: 0
}

.vl-video-player .plyr--full-ui input[type=range]::-ms-tooltip {
    display: none
}

.vl-video-player .plyr--full-ui input[type=range]:focus {
    outline: 0
}

.vl-video-player .plyr--full-ui input[type=range]::-moz-focus-outer {
    border: 0
}

.vl-video-player .plyr--full-ui input[type=range].plyr__tab-focus::-webkit-slider-runnable-track {
    box-shadow: 0 0 0 3px rgba(0, 85, 204, .35);
    outline: 0
}

.vl-video-player .plyr--full-ui input[type=range].plyr__tab-focus::-moz-range-track {
    box-shadow: 0 0 0 3px rgba(0, 85, 204, .35);
    outline: 0
}

.vl-video-player .plyr--full-ui input[type=range].plyr__tab-focus::-ms-track {
    box-shadow: 0 0 0 3px rgba(0, 85, 204, .35);
    outline: 0
}

.vl-video-player .plyr--full-ui.plyr--video input[type=range]::-webkit-slider-runnable-track {
    background-color: hsla(0, 0%, 100%, .25)
}

.vl-video-player .plyr--full-ui.plyr--video input[type=range]::-moz-range-track {
    background-color: hsla(0, 0%, 100%, .25)
}

.vl-video-player .plyr--full-ui.plyr--video input[type=range]::-ms-track {
    background-color: hsla(0, 0%, 100%, .25)
}

.vl-video-player .plyr--full-ui.plyr--video input[type=range]:active::-webkit-slider-thumb {
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15), 0 0 0 1px rgba(47, 52, 61, .2), 0 0 0 3px hsla(0, 0%, 100%, .5)
}

.vl-video-player .plyr--full-ui.plyr--video input[type=range]:active::-moz-range-thumb {
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15), 0 0 0 1px rgba(47, 52, 61, .2), 0 0 0 3px hsla(0, 0%, 100%, .5)
}

.vl-video-player .plyr--full-ui.plyr--video input[type=range]:active::-ms-thumb {
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15), 0 0 0 1px rgba(47, 52, 61, .2), 0 0 0 3px hsla(0, 0%, 100%, .5)
}

.vl-video-player .plyr--full-ui.plyr--audio input[type=range]::-webkit-slider-runnable-track {
    background-color: rgba(183, 197, 205, .66)
}

.vl-video-player .plyr--full-ui.plyr--audio input[type=range]::-moz-range-track {
    background-color: rgba(183, 197, 205, .66)
}

.vl-video-player .plyr--full-ui.plyr--audio input[type=range]::-ms-track {
    background-color: rgba(183, 197, 205, .66)
}

.vl-video-player .plyr--full-ui.plyr--audio input[type=range]:active::-webkit-slider-thumb {
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15), 0 0 0 1px rgba(47, 52, 61, .2), 0 0 0 3px rgba(0, 0, 0, .1)
}

.vl-video-player .plyr--full-ui.plyr--audio input[type=range]:active::-moz-range-thumb {
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15), 0 0 0 1px rgba(47, 52, 61, .2), 0 0 0 3px rgba(0, 0, 0, .1)
}

.vl-video-player .plyr--full-ui.plyr--audio input[type=range]:active::-ms-thumb {
    box-shadow: 0 1px 1px rgba(0, 0, 0, .15), 0 0 0 1px rgba(47, 52, 61, .2), 0 0 0 3px rgba(0, 0, 0, .1)
}

.vl-video-player .plyr__time {
    font-size: 14px
}

.vl-video-player .plyr__time+.plyr__time:before {
    content: "\2044";
    margin-right: 15px
}

@media (max-width:767px) {
    .vl-video-player .plyr__time+.plyr__time {
        display: none
    }
}

.vl-video-player .plyr--video .plyr__time {
    text-shadow: 0 1px 1px rgba(0, 0, 0, .15)
}

.vl-video-player .plyr__tooltip {
    background: #fff;
    border-radius: 0;
    bottom: 100%;
    box-shadow: 0 1px 2px rgba(0, 0, 0, .15);
    color: #333332;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.3;
    margin-bottom: 6px;
    opacity: 0;
    padding: 3px 4.5px;
    pointer-events: none;
    position: absolute;
    transform: translate(-50%, 10px) scale(.8);
    transform-origin: 50% 100%;
    transition: transform .2s ease .1s, opacity .2s ease .1s;
    white-space: nowrap;
    z-index: 2
}

.vl-video-player .plyr__tooltip:before {
    border-left: 6px solid transparent;
    border-right: 6px solid transparent;
    border-top: 6px solid #fff;
    bottom: -6px;
    content: "";
    height: 0;
    left: 50%;
    position: absolute;
    transform: translateX(-50%);
    width: 0;
    z-index: 2
}

.vl-video-player .plyr .plyr__control.plyr__tab-focus .plyr__tooltip,
.vl-video-player .plyr .plyr__control:hover .plyr__tooltip,
.vl-video-player .plyr__tooltip--visible {
    opacity: 1;
    transform: translate(-50%) scale(1)
}

.vl-video-player .plyr .plyr__control:hover .plyr__tooltip {
    z-index: 3
}

.vl-video-player .plyr__controls>.plyr__control:first-child+.plyr__control .plyr__tooltip,
.vl-video-player .plyr__controls>.plyr__control:first-child .plyr__tooltip {
    left: 0;
    transform: translateY(10px) scale(.8);
    transform-origin: 0 100%
}

.vl-video-player .plyr__controls>.plyr__control:first-child+.plyr__control .plyr__tooltip:before,
.vl-video-player .plyr__controls>.plyr__control:first-child .plyr__tooltip:before {
    left: 19.5px
}

.vl-video-player .plyr__controls>.plyr__control:last-child .plyr__tooltip {
    right: 0;
    transform: translateY(10px) scale(.8);
    transform-origin: 100% 100%
}

.vl-video-player .plyr__controls>.plyr__control:last-child .plyr__tooltip:before {
    left: auto;
    right: 19.5px;
    transform: translateX(50%)
}

.vl-video-player .plyr__controls>.plyr__control:first-child+.plyr__control.plyr__tab-focus .plyr__tooltip,
.vl-video-player .plyr__controls>.plyr__control:first-child+.plyr__control .plyr__tooltip--visible,
.vl-video-player .plyr__controls>.plyr__control:first-child+.plyr__control:hover .plyr__tooltip,
.vl-video-player .plyr__controls>.plyr__control:first-child.plyr__tab-focus .plyr__tooltip,
.vl-video-player .plyr__controls>.plyr__control:first-child .plyr__tooltip--visible,
.vl-video-player .plyr__controls>.plyr__control:first-child:hover .plyr__tooltip,
.vl-video-player .plyr__controls>.plyr__control:last-child.plyr__tab-focus .plyr__tooltip,
.vl-video-player .plyr__controls>.plyr__control:last-child .plyr__tooltip--visible,
.vl-video-player .plyr__controls>.plyr__control:last-child:hover .plyr__tooltip {
    transform: translate(0) scale(1)
}

.vl-video-player .plyr--video {
    overflow: hidden
}

.vl-video-player .plyr--video.plyr--menu-open {
    overflow: visible
}

.vl-video-player .plyr__video-wrapper {
    background: #000;
    border-radius: inherit;
    overflow: hidden;
    position: relative;
    z-index: 0
}

.vl-video-player .plyr__volume {
    flex: 1;
    position: relative
}

.vl-video-player .plyr__volume input[type=range] {
    position: relative;
    z-index: 2
}

@media (min-width:480px) {
    .vl-video-player .plyr__volume {
        max-width: 50px
    }
}

@media (min-width:768px) {
    .vl-video-player .plyr__volume {
        max-width: 80px
    }
}

.vl-video-player .plyr--is-ios.plyr--vimeo [data-plyr=mute],
.vl-video-player .plyr--is-ios .plyr__volume {
    display: none!important
}

.vl-video-player .plyr:fullscreen {
    background: #000;
    border-radius: 0!important;
    height: 100%;
    margin: 0;
    width: 100%
}

.vl-video-player .plyr:fullscreen video {
    height: 100%
}

.vl-video-player .plyr:fullscreen .plyr__video-wrapper {
    height: 100%;
    width: 100%
}

.vl-video-player .plyr:fullscreen .plyr__video-embed {
    overflow: visible
}

.vl-video-player .plyr:fullscreen.plyr--vimeo .plyr__video-wrapper {
    height: 0;
    top: 50%;
    transform: translateY(-50%)
}

.vl-video-player .plyr:fullscreen .plyr__control .icon--exit-fullscreen {
    display: block
}

.vl-video-player .plyr:fullscreen .plyr__control .icon--exit-fullscreen+svg {
    display: none
}

.vl-video-player .plyr:fullscreen.plyr--hide-controls {
    cursor: none
}

@media (min-width:1024px) {
    .vl-video-player .plyr:-webkit-full-screen .plyr__captions {
        font-size: 21px
    }
    .vl-video-player .plyr:-ms-fullscreen .plyr__captions {
        font-size: 21px
    }
    .vl-video-player .plyr:fullscreen .plyr__captions {
        font-size: 21px
    }
}

.vl-video-player .plyr:-webkit-full-screen {
    background: #000;
    border-radius: 0!important;
    height: 100%;
    margin: 0;
    width: 100%
}

.vl-video-player .plyr:-webkit-full-screen video {
    height: 100%
}

.vl-video-player .plyr:-webkit-full-screen .plyr__video-wrapper {
    height: 100%;
    width: 100%
}

.vl-video-player .plyr:-webkit-full-screen .plyr__video-embed {
    overflow: visible
}

.vl-video-player .plyr:-webkit-full-screen.plyr--vimeo .plyr__video-wrapper {
    height: 0;
    top: 50%;
    transform: translateY(-50%)
}

.vl-video-player .plyr:-webkit-full-screen .plyr__control .icon--exit-fullscreen {
    display: block
}

.vl-video-player .plyr:-webkit-full-screen .plyr__control .icon--exit-fullscreen+svg {
    display: none
}

.vl-video-player .plyr:-webkit-full-screen.plyr--hide-controls {
    cursor: none
}

@media (min-width:1024px) {
    .vl-video-player .plyr:-webkit-full-screen .plyr__captions {
        font-size: 21px
    }
}

.vl-video-player .plyr:-moz-full-screen {
    background: #000;
    border-radius: 0!important;
    height: 100%;
    margin: 0;
    width: 100%
}

.vl-video-player .plyr:-moz-full-screen video {
    height: 100%
}

.vl-video-player .plyr:-moz-full-screen .plyr__video-wrapper {
    height: 100%;
    width: 100%
}

.vl-video-player .plyr:-moz-full-screen .plyr__video-embed {
    overflow: visible
}

.vl-video-player .plyr:-moz-full-screen.plyr--vimeo .plyr__video-wrapper {
    height: 0;
    top: 50%;
    transform: translateY(-50%)
}

.vl-video-player .plyr:-moz-full-screen .plyr__control .icon--exit-fullscreen {
    display: block
}

.vl-video-player .plyr:-moz-full-screen .plyr__control .icon--exit-fullscreen+svg {
    display: none
}

.vl-video-player .plyr:-moz-full-screen.plyr--hide-controls {
    cursor: none
}

@media (min-width:1024px) {
    .vl-video-player .plyr:-moz-full-screen .plyr__captions {
        font-size: 21px
    }
}

.vl-video-player .plyr:-ms-fullscreen {
    background: #000;
    border-radius: 0!important;
    height: 100%;
    margin: 0;
    width: 100%
}

.vl-video-player .plyr:-ms-fullscreen video {
    height: 100%
}

.vl-video-player .plyr:-ms-fullscreen .plyr__video-wrapper {
    height: 100%;
    width: 100%
}

.vl-video-player .plyr:-ms-fullscreen .plyr__video-embed {
    overflow: visible
}

.vl-video-player .plyr:-ms-fullscreen.plyr--vimeo .plyr__video-wrapper {
    height: 0;
    top: 50%;
    transform: translateY(-50%)
}

.vl-video-player .plyr:-ms-fullscreen .plyr__control .icon--exit-fullscreen {
    display: block
}

.vl-video-player .plyr:-ms-fullscreen .plyr__control .icon--exit-fullscreen+svg {
    display: none
}

.vl-video-player .plyr:-ms-fullscreen.plyr--hide-controls {
    cursor: none
}

@media (min-width:1024px) {
    .vl-video-player .plyr:-ms-fullscreen .plyr__captions {
        font-size: 21px
    }
}

.vl-video-player .plyr--fullscreen-fallback {
    background: #000;
    border-radius: 0!important;
    height: 100%;
    margin: 0;
    width: 100%;
    bottom: 0;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 10000000
}

.vl-video-player .plyr--fullscreen-fallback video {
    height: 100%
}

.vl-video-player .plyr--fullscreen-fallback .plyr__video-wrapper {
    height: 100%;
    width: 100%
}

.vl-video-player .plyr--fullscreen-fallback .plyr__video-embed {
    overflow: visible
}

.vl-video-player .plyr--fullscreen-fallback.plyr--vimeo .plyr__video-wrapper {
    height: 0;
    top: 50%;
    transform: translateY(-50%)
}

.vl-video-player .plyr--fullscreen-fallback .plyr__control .icon--exit-fullscreen {
    display: block
}

.vl-video-player .plyr--fullscreen-fallback .plyr__control .icon--exit-fullscreen+svg {
    display: none
}

.vl-video-player .plyr--fullscreen-fallback.plyr--hide-controls {
    cursor: none
}

@media (min-width:1024px) {
    .vl-video-player .plyr--fullscreen-fallback .plyr__captions {
        font-size: 21px
    }
}

.vl-video-player .plyr__ads {
    border-radius: inherit;
    bottom: 0;
    cursor: pointer;
    left: 0;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 0;
    z-index: -1
}

.vl-video-player .plyr__ads>div,
.vl-video-player .plyr__ads>div iframe {
    height: 100%;
    position: absolute;
    width: 100%
}

.vl-video-player .plyr__ads:after {
    background: rgba(47, 52, 61, .8);
    border-radius: 2px;
    bottom: 15px;
    color: #fff;
    content: attr(data-badge-text);
    font-size: 11px;
    padding: 2px 6px;
    pointer-events: none;
    position: absolute;
    right: 15px;
    z-index: 3
}

.vl-video-player .plyr__ads:after:empty {
    display: none
}

.vl-video-player .plyr__cues {
    background: currentColor;
    display: block;
    height: 6px;
    left: 0;
    margin: -3px 0 0;
    opacity: .8;
    position: absolute;
    top: 50%;
    width: 3px;
    z-index: 3
}

.vl-video-player .plyr--no-transition {
    transition: none!important
}

.vl-video-player .plyr__sr-only {
    clip: rect(1px, 1px, 1px, 1px);
    overflow: hidden;
    border: 0!important;
    height: 1px!important;
    padding: 0!important;
    position: absolute!important;
    width: 1px!important
}

.vl-video-player .plyr__control {
    border-radius: .3rem
}

.vl-video-player .plyr>.plyr__control {
    padding: 15px 2rem
}

.vl-data-table {
    width: 100%;
    max-width: 100%
}

.vl-data-table caption {
    color: #687483;
    caption-side: bottom;
    text-align: left;
    margin: 15px 0;
    font-size: 1.6rem
}

.vl-data-table thead tr {
    border-bottom: .3rem solid #cbd2da
}

.vl-data-table tfoot tr {
    border-top: .3rem solid #cbd2da
}

.vl-data-table tfoot td {
    font-weight: 500;
    white-space: nowrap
}

.vl-data-table tbody td.vl-data-table__element--error,
.vl-data-table tbody tr.vl-data-table__element--error {
    background: #fbebeb;
    border-bottom: 1px solid #db3434
}

.vl-data-table tbody td.vl-data-table__element--warning,
.vl-data-table tbody tr.vl-data-table__element--warning {
    background: #fff9e8;
    border-bottom: 1px solid #ffc515
}

.vl-data-table tbody td.vl-data-table__element--success,
.vl-data-table tbody tr.vl-data-table__element--success {
    background: #ecf6ee;
    border-bottom: 1px solid #3ca854
}

.vl-data-table tbody tr {
    border-bottom: .1rem solid #cbd2da
}

.vl-data-table tbody tr[data-vl-table-selectable] {
    cursor: pointer;
    transition: background .2s ease-in-out
}

.vl-data-table tbody tr[data-vl-table-selectable]:hover {
    background: #f3f5f6
}

.vl-data-table tbody tr.vl-data-table__grouped-row:not(.vl-data-table__grouped-row--last) {
    border-bottom: 0
}

.vl-data-table tbody tr th:first-child {
    border-right: .3rem solid #cbd2da
}

.vl-data-table td,
.vl-data-table th {
    font-size: 1.6rem;
    line-height: 1.3;
    text-align: left;
    vertical-align: top;
    padding: 1.2rem 1rem
}

@media screen and (max-width:767px) {
    .vl-data-table td,
    .vl-data-table th {
        font-size: 1.4rem;
        padding: 1rem
    }
}

.vl-data-table td:first-child,
.vl-data-table th:first-child {
    border-left: 0
}

.vl-data-table td.vl-data-table__icon-container,
.vl-data-table th.vl-data-table__icon-container {
    background-color: #f3f5f6;
    color: #333332
}

.vl-data-table td.vl-data-table__icon-container .vl-vi,
.vl-data-table th.vl-data-table__icon-container .vl-vi {
    color: #4d4d4b;
    font-size: 3rem
}

.vl-vi .vl-data-table td.vl-data-table__icon-container,
.vl-vi .vl-data-table th.vl-data-table__icon-container {
    text-align: center
}

.vl-data-table th {
    font-weight: 500;
    white-space: nowrap
}

.vl-data-table .vl-data-table__grouped-row td {
    padding: .3rem 1rem .3rem 0
}

@media screen and (max-width:767px) {
    .vl-data-table .vl-data-table__grouped-row td {
        padding: .3rem 1rem .3rem 0
    }
}

.vl-data-table .vl-data-table__grouped-row--first td {
    padding-top: 1.2rem
}

@media screen and (max-width:767px) {
    .vl-data-table .vl-data-table__grouped-row--first td {
        padding-top: 1rem
    }
}

.vl-data-table .vl-data-table__grouped-row--last td {
    padding-bottom: 1.2rem
}

@media screen and (max-width:767px) {
    .vl-data-table .vl-data-table__grouped-row--last td {
        padding-bottom: 1rem
    }
}

.vl-data-table__header-title--sortable {
    text-decoration: none
}

.vl-data-table__header-title--sortable .vl-data-table__header-title__sort-icon {
    opacity: 0
}

.vl-data-table__header-title--sortable:focus,
.vl-data-table__header-title--sortable:hover {
    text-decoration: underline
}

.vl-data-table__header-title--sortable:focus .vl-data-table__header-title__sort-icon,
.vl-data-table__header-title--sortable:hover .vl-data-table__header-title__sort-icon {
    opacity: .5
}

.vl-data-table__header-title--sortable-active .vl-data-table__header-title__sort-icon {
    opacity: 1
}

.vl-data-table__body-title {
    max-width: 30rem
}

.vl-data-table--alt tr td:first-child,
.vl-data-table--alt tr th:first-child {
    border-right: .1rem solid #cbd2da
}

.vl-data-table--alt tr th:not(:first-child) {
    padding: 0 1.2rem 1.2rem
}

.vl-data-table--alt tr td:not(:first-child) {
    padding: 1.2rem
}

.vl-data-table--double-spacing tr td,
.vl-data-table--double-spacing tr th {
    padding: 1.2rem 3rem
}

.vl-data-table--no-header tbody tr:first-child {
    border-top: 3px solid #cbd2da
}

.vl-data-table .vl-pill {
    vertical-align: middle
}

@media screen and (max-width:767px) {
    .vl-data-table .vl-pill {
        font-size: 1.4rem;
        height: 2rem;
        line-height: 2rem;
        padding: 0 .5rem
    }
}

.vl-u-table-overflow {
    width: 100%;
    overflow-x: auto
}

.vl-u-table-overflow .vl-data-table {
    overflow: auto
}

.no-js [data-vl-table-check-all]+span {
    display: none!important
}

.vl-data-table--hover tbody tr {
    transition: background .2s ease-in-out
}

.vl-data-table--hover tbody tr:hover {
    background: #f3f5f6
}

.vl-data-table--matrix tr th:first-child {
    border-right: .3rem solid #cbd2da
}

.vl-data-table--grid td,
.vl-data-table--grid th {
    padding: 1.2rem
}

.vl-data-table--grid td:not(:first-child),
.vl-data-table--grid th:not(:first-child) {
    border-left: .1rem solid #cbd2da
}

.vl-data-table--zebra tbody tr:not(.vl-data-table__element--warning):not(.vl-data-table__element--error):not(.vl-data-table__element--success):nth-child(odd) {
    background-color: #f3f5f6
}

.vl-data-table--zebra tbody tr:not(.vl-data-table__element--warning):not(.vl-data-table__element--error):not(.vl-data-table__element--success):nth-child(odd):hover {
    background-color: #edf0f2
}

.vl-data-table__actions--top {
    margin: 0 0 2rem
}

.vl-data-table__actions--bottom {
    margin: 2rem 0 0
}

@media screen and (max-width:500px) {
    .vl-data-table__actions--bottom .vl-data-table__actions__list {
        margin: 0 0 1rem
    }
}

.vl-data-table__actions__list .vl-data-table__action:not(:last-child) {
    margin-right: .6rem
}

.vl-data-table__action {
    display: inline-block;
    vertical-align: middle;
    margin-bottom: .6rem
}

.vl-data-table__action__toggle {
    display: flex;
    align-items: center;
    background: none;
    font-family: Flanders Art Sans, sans-serif;
    font-size: 1.6rem;
    font-weight: 400;
    line-height: 1;
    color: #333332;
    border: .1rem solid #cbd2da;
    text-decoration: none;
    text-align: left;
    cursor: pointer;
    padding: .9rem 1.5rem .8rem
}

@media screen and (max-width:767px) {
    .vl-data-table__action__toggle {
        font-size: 1.5rem
    }
}

[data-vl-disable=true] .vl-data-table__action__toggle {
    color: #687483;
    cursor: default
}

.vl-data-table__action__toggle__icon {
    font-size: 1.2rem
}

.vl-data-table__action__toggle__icon:first-child {
    margin-right: .5rem
}

.vl-data-table__action__toggle__icon:last-child {
    margin-left: .5rem
}

@media screen and (max-width:500px) {
    .vl-data-table__action__toggle--contract-xs span {
        display: none
    }
    .vl-data-table__action__toggle--contract-xs .vl-vi:before {
        margin: 0
    }
}

@media screen and (max-width:500px) {
    .vl-data-table--collapsed-xs {
        position: relative
    }
    .vl-data-table--collapsed-xs table,
    .vl-data-table--collapsed-xs tbody,
    .vl-data-table--collapsed-xs td,
    .vl-data-table--collapsed-xs th,
    .vl-data-table--collapsed-xs thead,
    .vl-data-table--collapsed-xs tr {
        display: block
    }
    .vl-data-table--collapsed-xs thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px
    }
    .vl-data-table--collapsed-xs td {
        border-bottom: 1px solid #cbd2da;
        position: relative;
        padding-left: 40%;
        white-space: normal;
        text-align: left
    }
    .vl-data-table--collapsed-xs td:before,
    .vl-data-table--collapsed-xs th:before {
        content: attr(data-title);
        position: absolute;
        top: 10px;
        left: 10px;
        width: 35%;
        padding-right: 10px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        text-align: left;
        font-weight: 500
    }
}

@media screen and (max-width:767px) {
    .vl-data-table--collapsed-s {
        position: relative
    }
    .vl-data-table--collapsed-s table,
    .vl-data-table--collapsed-s tbody,
    .vl-data-table--collapsed-s td,
    .vl-data-table--collapsed-s th,
    .vl-data-table--collapsed-s thead,
    .vl-data-table--collapsed-s tr {
        display: block
    }
    .vl-data-table--collapsed-s thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px
    }
    .vl-data-table--collapsed-s td {
        border-bottom: 1px solid #cbd2da;
        position: relative;
        padding-left: 40%;
        white-space: normal;
        text-align: left
    }
    .vl-data-table--collapsed-s td:before,
    .vl-data-table--collapsed-s th:before {
        content: attr(data-title);
        position: absolute;
        top: 10px;
        left: 10px;
        width: 35%;
        padding-right: 10px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        text-align: left;
        font-weight: 500
    }
}

@media screen and (max-width:1023px) {
    .vl-data-table--collapsed-m {
        position: relative
    }
    .vl-data-table--collapsed-m table,
    .vl-data-table--collapsed-m tbody,
    .vl-data-table--collapsed-m td,
    .vl-data-table--collapsed-m th,
    .vl-data-table--collapsed-m thead,
    .vl-data-table--collapsed-m tr {
        display: block
    }
    .vl-data-table--collapsed-m thead tr {
        position: absolute;
        top: -9999px;
        left: -9999px
    }
    .vl-data-table--collapsed-m td {
        border-bottom: 1px solid #cbd2da;
        position: relative;
        padding-left: 40%;
        white-space: normal;
        text-align: left
    }
    .vl-data-table--collapsed-m td:before,
    .vl-data-table--collapsed-m th:before {
        content: attr(data-title);
        position: absolute;
        top: 10px;
        left: 10px;
        width: 35%;
        padding-right: 10px;
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden;
        text-align: left;
        font-weight: 500
    }
}

.vl-data-table--sticky {
    table-layout: auto
}

.vl-data-table--sticky .vl-data-table__cell--sticky {
    position: -webkit-sticky;
    position: sticky;
    left: 0;
    background-color: inherit;
    border: 0;
    z-index: 1
}

.vl-data-table--sticky thead .vl-data-table__cell--sticky {
    top: 0;
    z-index: 2
}

.vl-data-table--sticky thead .vl-data-table__cell--sticky:before {
    display: block;
    position: absolute;
    bottom: -3px;
    left: 0;
    right: 0;
    height: 3px;
    background-color: #cbd2da;
    content: ""
}

.vl-data-table--sticky tbody .vl-data-table__cell--sticky:before {
    display: block;
    position: absolute;
    bottom: 0;
    top: 0;
    right: -1px;
    width: 1px;
    background-color: #cbd2da;
    content: ""
}

.vl-data-table--sticky td,
.vl-data-table--sticky th {
    min-width: 200px
}

.vl-data-table--sticky tr {
    background-color: #fff
}

.vl-data-table__sticky-wrapper {
    width: 100%;
    max-height: 75vh;
    overflow-x: auto;
    overflow-y: auto
}

.vl-tabs {
    margin-bottom: 3rem;
    border-bottom: 1px solid #cbd2da;
    font-size: 0;
    text-align: left
}

.vl-tabs__wrapper {
    position: relative
}

.vl-tabs__wrapper--fit-to-content {
    display: inline-flex
}

.no-js .vl-tabs {
    display: none
}

@media screen and (max-width:767px) {
    [data-vl-tabs] .vl-tabs {
        display: none;
        position: relative;
        left: -1.5rem;
        width: calc(100%+ 3rem);
        margin: 0 0 1rem;
        padding: .4rem 0;
        border-top: 1px solid #f7f9fc;
        border-bottom: 1px solid #f7f9fc
    }
    [data-vl-tabs] .vl-tabs[data-vl-show=true] {
        display: block
    }
    .vl-functional-header [data-vl-tabs] .vl-tabs {
        left: 0;
        width: 100%
    }
}

.vl-functional-header .vl-tabs {
    margin: 0;
    border: 0
}

@media screen and (max-width:767px) {
    .vl-functional-header .vl-tabs {
        border-bottom: 1px solid #cbd2da
    }
}

.vl-tabs--alt {
    position: relative
}

.vl-tabs--alt:before {
    position: absolute;
    bottom: -1px;
    left: -200%;
    width: 500%;
    height: 1px;
    background: #cbd2da;
    content: ""
}

.vl-tab {
    display: inline-block;
    position: relative;
    text-align: left;
    vertical-align: top;
    top: 1px
}

.vl-tab:first-child .vl-tab__link {
    margin-left: 0
}

.vl-tab:last-child .vl-tab__link {
    margin-right: 0
}

@media screen and (max-width:767px) {
    [data-vl-tabs] .vl-tab {
        display: block;
        top: 0
    }
    [data-vl-tabs] .vl-tab:first-of-type {
        width: calc(100% - 4.2rem)
    }
}

.vl-tab__link {
    display: block;
    padding: 1rem 0;
    margin: 0 1.3rem;
    transition: all .2s;
    border-bottom: 3px solid transparent;
    font-family: Flanders Art Sans, sans-serif;
    font-size: 1.6rem;
    font-weight: 500;
    text-decoration: none
}

.vl-tab__link:focus,
.vl-tab__link:hover {
    background-color: transparent;
    border-bottom-color: #333332
}

.vl-tab--active .vl-tab__link {
    color: #333332;
    border-bottom: 3px solid #333332;
    background-color: transparent
}

@media screen and (max-width:767px) {
    [data-vl-tabs] .vl-tab--active .vl-tab__link {
        border: 0
    }
}

.vl-functional-header .vl-tab--active .vl-tab__link {
    border-top: 3px solid #333332!important
}

@media screen and (max-width:767px) {
    .vl-functional-header .vl-tab--active .vl-tab__link {
        border: 0
    }
}

@media screen and (max-width:767px) {
    .vl-tab__link {
        margin: 0;
        font-size: 1.4rem
    }
    [data-vl-tabs] .vl-tab__link {
        padding: .7rem 1.5rem;
        border: 0;
        font-size: 1.5rem
    }
}

.vl-tab__pane {
    display: none
}

.vl-tab__pane[data-vl-show=true] {
    display: block
}

.vl-tab__pane[role=tabpanel]:focus {
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65);
    outline: .2rem solid transparent
}

.no-js .vl-tab__pane {
    display: block
}

.vl-functional-header .vl-tab {
    top: 0;
    margin: 0
}

.vl-functional-header .vl-tab .vl-tab__link {
    padding: 1rem 0;
    border: 0;
    border-top: 3px solid transparent
}

.vl-functional-header .vl-tab .vl-tab__link:hover {
    border-top: 3px solid #cbd2da
}

@media screen and (max-width:767px) {
    .vl-functional-header .vl-tab .vl-tab__link {
        padding: .7rem 1rem;
        border: 0!important
    }
}

.vl-tabs__toggle {
    display: none;
    position: relative;
    left: -1.5rem;
    width: calc(100%+ 3rem);
    height: 4.2rem;
    margin: 0 auto 1rem;
    padding: 0 0 0 1.5rem;
    border: 0;
    border-top: 1px solid #cbd2da;
    border-bottom: 1px solid #cbd2da;
    background: none;
    font-family: Flanders Art Sans, sans-serif;
    font-size: 1.5rem;
    font-weight: 500;
    text-align: left;
    cursor: pointer
}

.vl-functional-header .vl-tabs__toggle {
    border-top: 0
}

@media screen and (max-width:767px) {
    .vl-functional-header .vl-tabs__toggle {
        left: 0;
        width: 100%;
        margin: 0;
        border-bottom: 1px solid #cbd2da
    }
}

.vl-tabs__toggle span {
    display: block;
    width: calc(100% - 6rem);
    text-overflow: ellipsis;
    white-space: nowrap;
    overflow: hidden
}

.vl-tabs__toggle:after,
.vl-tabs__toggle:before {
    font-family: vlaanderen-icon!important;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-style: normal;
    font-feature-settings: normal;
    font-variant: normal;
    font-weight: 400;
    text-decoration: none;
    text-transform: none
}

.vl-tabs__toggle:before {
    content: "\f125";
    position: absolute;
    font-size: 1.4rem;
    top: 0;
    right: 0;
    padding: 1.2rem 1.4rem;
    transform: rotate(90deg);
    transition: color .2s ease-in-out;
    font-size: 1.5rem
}

.vl-tabs__toggle:focus,
.vl-tabs__toggle:hover {
    text-decoration: underline
}

.vl-tabs__toggle:focus:before,
.vl-tabs__toggle:hover:before {
    color: #05c
}

.vl-tabs__toggle:focus:after,
.vl-tabs__toggle:hover:after {
    background: #cbd2da
}

.vl-tabs__toggle:after {
    position: absolute;
    top: 0;
    right: 4.2rem;
    width: 1px;
    height: 100%;
    background: #cbd2da;
    content: ""
}

.vl-tabs__toggle:focus {
    outline: thin dotted
}

.vl-tabs__toggle[data-vl-close=true] {
    position: absolute;
    top: 0;
    right: -1.5rem;
    left: auto;
    width: 4.2rem;
    height: 4.2rem;
    border: 0;
    z-index: 2
}

.vl-tabs__toggle[data-vl-close=true]:after {
    display: none
}

.vl-tabs__toggle[data-vl-close=true]:before {
    content: "\f173";
    padding: 1.4rem;
    font-size: 1.3rem
}

.vl-tabs__toggle[data-vl-close=true] span {
    display: none
}

.vl-functional-header .vl-tabs__toggle[data-vl-close=true] {
    right: 0;
    left: auto;
    width: 4.2rem;
    border: 0;
    border-bottom: 1px solid #cbd2da
}

@media screen and (max-width:767px) {
    .vl-tabs__toggle {
        display: block
    }
}

.vl-u-visually-hidden {
    position: absolute!important;
    height: 1px;
    width: 1px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px);
    margin: -1px;
    padding: 0;
    border: 0;
    left: 0;
    top: 0
}

@-webkit-keyframes fade-transition {
    0% {
        transform: translateY(20px);
        opacity: 0
    }
    to {
        transform: translateY(0);
        opacity: 1
    }
}

@keyframes fade-transition {
    0% {
        transform: translateY(20px);
        opacity: 0
    }
    to {
        transform: translateY(0);
        opacity: 1
    }
}

@-webkit-keyframes bounce {
    0%,
    20%,
    50%,
    80%,
    to {
        transform: translateY(0)
    }
    40% {
        transform: translateY(-12px)
    }
    60% {
        transform: translateY(-5px)
    }
    90% {
        transform: translateY(-2px)
    }
}

@keyframes bounce {
    0%,
    20%,
    50%,
    80%,
    to {
        transform: translateY(0)
    }
    40% {
        transform: translateY(-12px)
    }
    60% {
        transform: translateY(-5px)
    }
    90% {
        transform: translateY(-2px)
    }
}

.vl-u-align-left {
    text-align: left!important
}

.vl-u-align-center {
    text-align: center!important
}

.vl-u-align-right {
    text-align: right!important
}

@media screen and (min-width:1023px) {
    .vl-u-align-left--l {
        text-align: left!important
    }
    .vl-u-align-center--l {
        text-align: center!important
    }
    .vl-u-align-right--l {
        text-align: right!important
    }
}

@media screen and (max-width:1023px) {
    .vl-u-align-left--m {
        text-align: left!important
    }
    .vl-u-align-center--m {
        text-align: center!important
    }
    .vl-u-align-right--m {
        text-align: right!important
    }
}

@media screen and (max-width:767px) {
    .vl-u-align-left--s {
        text-align: left!important
    }
    .vl-u-align-center--s {
        text-align: center!important
    }
    .vl-u-align-right--s {
        text-align: right!important
    }
}

@media screen and (max-width:500px) {
    .vl-u-align-left--xs {
        text-align: left!important
    }
    .vl-u-align-center--xs {
        text-align: center!important
    }
    .vl-u-align-right--xs {
        text-align: right!important
    }
}

.vl-u-flex-align-flex-start,
.vl-u-flex-align-left {
    align-items: flex-start!important
}

.vl-u-flex-align-center {
    align-items: center!important
}

.vl-u-flex-align-flex-end,
.vl-u-flex-align-right {
    align-items: flex-end!important
}

.vl-u-flex-align-baseline {
    align-items: baseline!important
}

.vl-u-flex-align-stretch {
    align-items: stretch!important
}

.vl-u-flex-v-flex-start,
.vl-u-flex-v-top {
    justify-content: flex-start!important
}

.vl-u-flex-v-center {
    justify-content: center!important
}

.vl-u-flex-v-bottom,
.vl-u-flex-v-flex-end {
    justify-content: flex-end!important
}

.vl-u-flex-v-space-between {
    justify-content: space-between!important
}

.vl-u-flex-v-space-around {
    justify-content: space-around!important
}

.vl-u-flex-direction-row {
    flex-direction: row!important
}

.vl-u-flex-direction-column {
    flex-direction: column!important
}

.vl-u-flex-direction-row-reverse {
    flex-direction: row-reverse!important
}

.vl-u-flex-direction-column-reverse {
    flex-direction: column-reverse!important
}

.vl-u-flex-wrap-wrap {
    flex-wrap: wrap!important
}

.vl-u-flex-wrap-nowrap {
    flex-wrap: nowrap!important
}

.vl-u-flex-wrap-reverse {
    flex-wrap: wrap-reverse!important
}

@media screen and (min-width:1023px) {
    .vl-u-flex-align-flex-start--l,
    .vl-u-flex-align-left--l {
        align-items: flex-start!important
    }
    .vl-u-flex-align-center--l {
        align-items: center!important
    }
    .vl-u-flex-align-flex-end--l,
    .vl-u-flex-align-right--l {
        align-items: flex-end!important
    }
    .vl-u-flex-align-baseline--l {
        align-items: baseline!important
    }
    .vl-u-flex-align-stretch--l {
        align-items: stretch!important
    }
    .vl-u-flex-v-flex-start--l,
    .vl-u-flex-v-top--l {
        justify-content: flex-start!important
    }
    .vl-u-flex-v-center--l {
        justify-content: center!important
    }
    .vl-u-flex-v-bottom--l,
    .vl-u-flex-v-flex-end--l {
        justify-content: flex-end!important
    }
    .vl-u-flex-v-space-between--l {
        justify-content: space-between!important
    }
    .vl-u-flex-v-space-around--l {
        justify-content: space-around!important
    }
    .vl-u-flex-direction-row--l {
        flex-direction: row!important
    }
    .vl-u-flex-direction-column--l {
        flex-direction: column!important
    }
    .vl-u-flex-direction-row-reverse--l {
        flex-direction: row-reverse!important
    }
    .vl-u-flex-direction-column-reverse--l {
        flex-direction: column-reverse!important
    }
    .vl-u-flex-wrap-wrap--l {
        flex-wrap: wrap!important
    }
    .vl-u-flex-wrap-nowrap--l {
        flex-wrap: nowrap!important
    }
    .vl-u-flex-wrap-reverse--l {
        flex-wrap: wrap-reverse!important
    }
}

@media screen and (max-width:1023px) {
    .vl-u-flex-align-flex-start--m,
    .vl-u-flex-align-left--m {
        align-items: flex-start!important
    }
    .vl-u-flex-align-center--m {
        align-items: center!important
    }
    .vl-u-flex-align-flex-end--m,
    .vl-u-flex-align-right--m {
        align-items: flex-end!important
    }
    .vl-u-flex-align-baseline--m {
        align-items: baseline!important
    }
    .vl-u-flex-align-stretch--m {
        align-items: stretch!important
    }
    .vl-u-flex-v-flex-start--m,
    .vl-u-flex-v-top--m {
        justify-content: flex-start!important
    }
    .vl-u-flex-v-center--m {
        justify-content: center!important
    }
    .vl-u-flex-v-bottom--m,
    .vl-u-flex-v-flex-end--m {
        justify-content: flex-end!important
    }
    .vl-u-flex-v-space-between--m {
        justify-content: space-between!important
    }
    .vl-u-flex-v-space-around--m {
        justify-content: space-around!important
    }
    .vl-u-flex-direction-row--m {
        flex-direction: row!important
    }
    .vl-u-flex-direction-column--m {
        flex-direction: column!important
    }
    .vl-u-flex-direction-row-reverse--m {
        flex-direction: row-reverse!important
    }
    .vl-u-flex-direction-column-reverse--m {
        flex-direction: column-reverse!important
    }
    .vl-u-flex-wrap-wrap--m {
        flex-wrap: wrap!important
    }
    .vl-u-flex-wrap-nowrap--m {
        flex-wrap: nowrap!important
    }
    .vl-u-flex-wrap-reverse--m {
        flex-wrap: wrap-reverse!important
    }
}

@media screen and (max-width:767px) {
    .vl-u-flex-align-flex-start--s,
    .vl-u-flex-align-left--s {
        align-items: flex-start!important
    }
    .vl-u-flex-align-center--s {
        align-items: center!important
    }
    .vl-u-flex-align-flex-end--s,
    .vl-u-flex-align-right--s {
        align-items: flex-end!important
    }
    .vl-u-flex-align-baseline--s {
        align-items: baseline!important
    }
    .vl-u-flex-align-stretch--s {
        align-items: stretch!important
    }
    .vl-u-flex-v-flex-start--s,
    .vl-u-flex-v-top--s {
        justify-content: flex-start!important
    }
    .vl-u-flex-v-center--s {
        justify-content: center!important
    }
    .vl-u-flex-v-bottom--s,
    .vl-u-flex-v-flex-end--s {
        justify-content: flex-end!important
    }
    .vl-u-flex-v-space-between--s {
        justify-content: space-between!important
    }
    .vl-u-flex-v-space-around--s {
        justify-content: space-around!important
    }
    .vl-u-flex-direction-row--s {
        flex-direction: row!important
    }
    .vl-u-flex-direction-column--s {
        flex-direction: column!important
    }
    .vl-u-flex-direction-row-reverse--s {
        flex-direction: row-reverse!important
    }
    .vl-u-flex-direction-column-reverse--s {
        flex-direction: column-reverse!important
    }
    .vl-u-flex-wrap-wrap--s {
        flex-wrap: wrap!important
    }
    .vl-u-flex-wrap-nowrap--s {
        flex-wrap: nowrap!important
    }
    .vl-u-flex-wrap-reverse--s {
        flex-wrap: wrap-reverse!important
    }
}

@media screen and (max-width:500px) {
    .vl-u-flex-align-flex-start--xs,
    .vl-u-flex-align-left--xs {
        align-items: flex-start!important
    }
    .vl-u-flex-align-center--xs {
        align-items: center!important
    }
    .vl-u-flex-align-flex-end--xs,
    .vl-u-flex-align-right--xs {
        align-items: flex-end!important
    }
    .vl-u-flex-align-baseline--xs {
        align-items: baseline!important
    }
    .vl-u-flex-align-stretch--xs {
        align-items: stretch!important
    }
    .vl-u-flex-v-flex-start--xs,
    .vl-u-flex-v-top--xs {
        justify-content: flex-start!important
    }
    .vl-u-flex-v-center--xs {
        justify-content: center!important
    }
    .vl-u-flex-v-bottom--xs,
    .vl-u-flex-v-flex-end--xs {
        justify-content: flex-end!important
    }
    .vl-u-flex-v-space-between--xs {
        justify-content: space-between!important
    }
    .vl-u-flex-v-space-around--xs {
        justify-content: space-around!important
    }
    .vl-u-flex-direction-row--xs {
        flex-direction: row!important
    }
    .vl-u-flex-direction-column--xs {
        flex-direction: column!important
    }
    .vl-u-flex-direction-row-reverse--xs {
        flex-direction: row-reverse!important
    }
    .vl-u-flex-direction-column-reverse--xs {
        flex-direction: column-reverse!important
    }
    .vl-u-flex-wrap-wrap--xs {
        flex-wrap: wrap!important
    }
    .vl-u-flex-wrap-nowrap--xs {
        flex-wrap: nowrap!important
    }
    .vl-u-flex-wrap-reverse--xs {
        flex-wrap: wrap-reverse!important
    }
}

.vl-u-bg-alt {
    background-color: #f7f9fc
}

.vl-u-bg-error {
    background-color: #fbebeb
}

.vl-u-bg-warning {
    background-color: #fff9e8
}

.vl-u-bg-success {
    background-color: #ecf6ee
}

.vl-u-border {
    padding-left: 3.5rem;
    position: relative
}

@media screen and (max-width:767px) {
    .vl-u-border {
        padding-left: 1.75rem
    }
}

.vl-u-border:after {
    content: "";
    width: .5rem;
    height: 100%;
    display: block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    background: #ffe615;
    background: var(--vl-theme-primary-color)
}

.vl-u-border.vl-grid:after {
    height: 100%;
    bottom: 0;
    top: auto;
    left: 3rem
}

@media screen and (max-width:767px) {
    .vl-u-border.vl-grid:after {
        left: 1.5rem
    }
}

.vl-u-border.vl-grid--is-stacked:after {
    height: calc(100% - 3rem)
}

@media screen and (max-width:767px) {
    .vl-u-border.vl-grid--is-stacked:after {
        height: calc(100% - 1.5rem)
    }
}

.vl-u-highlight-content {
    padding: 4.16667%;
    border: 1px solid #cbd2da
}

.vl-u-highlight-content--alt {
    background: #f7f9fc;
    border: none
}

button.vl-vi {
    border: 0;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding: 0;
    outline: none
}

a.vl-vi {
    text-decoration: none
}

.vl-vi.vl-vi-u-hidden-text {
    font-size: 0
}

.vl-vi.vl-vi-u-xs:before {
    font-size: .8rem
}

.vl-vi.vl-vi-u-s:before {
    font-size: 1.3rem
}

.vl-vi.vl-vi-u-m:before {
    font-size: 1.7rem
}

.vl-vi.vl-vi-u-l:before {
    font-size: 2rem
}

.vl-vi.vl-vi-u-xl:before {
    font-size: 2.2rem
}

.vl-vi.vl-vi-u-90deg:before {
    display: inline-block;
    transform: rotate(90deg)
}

.vl-vi.vl-vi-u-180deg:before {
    display: inline-block;
    transform: rotate(180deg)
}

.vl-vi.vl-vi-u-link:before {
    display: inline-block;
    margin-right: 1rem;
    color: #000;
    font-size: 1.3rem;
    text-decoration: none
}

.vl-vi.vl-vi-u-color-grey {
    color: #cbd2da
}

.vl-vi.vl-vi-u-badge {
    display: inline-block;
    border-radius: 50%;
    text-align: center;
    vertical-align: middle
}

.vl-vi.vl-vi-u-badge:before {
    margin: 0;
    vertical-align: middle;
    display: block
}

.vl-vi.vl-vi-u-badge--link {
    margin-right: 1rem
}

.vl-vi.vl-vi-u-badge--link-after {
    margin-left: 1rem
}

.vl-vi.vl-vi-u-badge--positive,
.vl-vi.vl-vi-u-badge--positive:focus,
.vl-vi.vl-vi-u-badge--positive:hover,
a:focus .vl-vi.vl-vi-u-badge--positive,
a:hover .vl-vi.vl-vi-u-badge--positive {
    background-color: #3ca854;
    color: #ecf6ee
}

.vl-vi.vl-vi-u-badge--action {
    background-color: #05c;
    color: #e6eefa
}

.vl-vi.vl-vi-u-badge--action:focus,
.vl-vi.vl-vi-u-badge--action:hover,
a:focus .vl-vi.vl-vi-u-badge--action,
a:hover .vl-vi.vl-vi-u-badge--action {
    background-color: #003bb0;
    color: #e6eefa
}

.vl-vi.vl-vi-u-badge--negative {
    background-color: #db3434;
    color: #fbebeb
}

.vl-vi.vl-vi-u-badge--negative:focus,
.vl-vi.vl-vi-u-badge--negative:hover,
a:focus .vl-vi.vl-vi-u-badge--negative,
a:hover .vl-vi.vl-vi-u-badge--negative {
    background-color: #af2929;
    color: #fbebeb
}

.vl-vi.vl-vi-u-badge--warning {
    background-color: #ffc515;
    color: #fff9e8
}

.vl-vi.vl-vi-u-badge--neutral {
    background-color: #f7f9fc;
    color: #333332
}

.vl-vi.vl-vi-u-badge--neutral:focus,
.vl-vi.vl-vi-u-badge--neutral:hover,
a:focus .vl-vi.vl-vi-u-badge--neutral,
a:hover .vl-vi.vl-vi-u-badge--neutral {
    background-color: #05c;
    color: #e6eefa
}

.vl-vi.vl-vi-u-badge--light {
    background-color: #fff;
    color: #333332
}

.vl-vi.vl-vi-u-badge--light:focus,
.vl-vi.vl-vi-u-badge--light:hover,
a:focus .vl-vi.vl-vi-u-badge--light,
a:hover .vl-vi.vl-vi-u-badge--light {
    background-color: #05c;
    color: #e6eefa
}

.vl-vi.vl-vi-u-badge--xxsmall {
    width: 1.8rem;
    height: 1.8rem;
    line-height: 1.8rem
}

.vl-vi.vl-vi-u-badge--xxsmall:before {
    font-size: .8rem
}

@media screen and (max-width:767px) {
    .vl-vi.vl-vi-u-badge--xxsmall {
        width: 1.5rem;
        height: 1.5rem;
        line-height: 1.5rem
    }
    .vl-vi.vl-vi-u-badge--xxsmall:before {
        font-size: .7rem
    }
}

.vl-vi.vl-vi-u-badge--xsmall {
    width: 1.8rem;
    height: 1.8rem;
    line-height: 1.8rem
}

.vl-vi.vl-vi-u-badge--xsmall:before {
    font-size: 1.3rem
}

@media screen and (max-width:767px) {
    .vl-vi.vl-vi-u-badge--xsmall {
        width: 1.5rem;
        height: 1.5rem;
        line-height: 1.5rem
    }
    .vl-vi.vl-vi-u-badge--xsmall:before {
        font-size: 1.1rem
    }
}

.vl-vi.vl-vi-u-badge--small {
    width: 2.6rem;
    height: 2.6rem;
    line-height: 2.6rem
}

.vl-vi.vl-vi-u-badge--small:before {
    font-size: 1.3rem
}

@media screen and (max-width:767px) {
    .vl-vi.vl-vi-u-badge--small {
        width: 2.2rem;
        height: 2.2rem;
        line-height: 2.2rem
    }
    .vl-vi.vl-vi-u-badge--small:before {
        font-size: 1.2rem
    }
}

.vl-vi.vl-vi-u-badge--medium {
    width: 4rem;
    height: 4rem;
    line-height: 4rem
}

.vl-vi.vl-vi-u-badge--medium:before {
    font-size: 2rem
}

@media screen and (max-width:767px) {
    .vl-vi.vl-vi-u-badge--medium {
        width: 3rem;
        height: 3rem;
        line-height: 3rem
    }
    .vl-vi.vl-vi-u-badge--medium:before {
        font-size: 1.5rem
    }
}

.vl-vi.vl-vi-u-badge--large {
    width: 5rem;
    height: 5rem;
    line-height: 5rem
}

.vl-vi.vl-vi-u-badge--large:before {
    font-size: 2.5rem
}

@media screen and (max-width:767px) {
    .vl-vi.vl-vi-u-badge--large {
        width: 4rem;
        height: 4rem;
        line-height: 4rem
    }
    .vl-vi.vl-vi-u-badge--large:before {
        font-size: 2rem
    }
}

.vl-u-mark {
    background-color: transparent;
    box-shadow: inset 0 -10px 0 0 rgba(255, 197, 21, .3)
}

.vl-u-mark--accent {
    background-color: transparent;
    box-shadow: inset 0 -10px 0 0 rgba(255, 230, 21, .3);
    box-shadow: inset 0 -10px 0 0 var(--vl-theme-primary-color-rgba-30)
}

.vl-u-mark--info {
    background-color: transparent;
    box-shadow: inset 0 -10px 0 0 rgba(203, 210, 218, .4)
}

.vl-u-mark--success {
    background-color: transparent;
    box-shadow: inset 0 -10px 0 0 rgba(60, 168, 84, .2)
}

.vl-u-mark--warning {
    background-color: transparent;
    box-shadow: inset 0 -10px 0 0 rgba(255, 197, 21, .2)
}

.vl-u-mark--error {
    background-color: transparent;
    box-shadow: inset 0 -10px 0 0 rgba(219, 52, 52, .2)
}

@media screen and (max-width:767px) {
    .vl-u-mobile-no-equal-height {
        min-height: 0!important
    }
}

.js-vl-clamp-useless {
    display: none!important
}

.js .js-vl-show-checked {
    display: none
}

.js .js-vl-show-checked--open {
    display: block
}

.js.vl-flexbox .js-vl-col-float-right {
    position: absolute;
    z-index: 1;
    padding-bottom: 3rem;
    right: 0
}

@media screen and (max-width:767px) {
    .js.vl-flexbox .js-vl-col-float-right {
        position: static;
        padding-bottom: 0;
        margin-top: 1.5rem
    }
}

@media screen and (max-width:767px) {
    .js-vl-col-float-right--pushed {
        margin-top: 0!important
    }
}

[data-vl-show-on-select-content] {
    display: none
}

[data-vl-show-on-select-content][data-vl-show=true] {
    display: block
}

.vl-u-offset--spacing {
    padding: 0 4.16667% 1rem
}

.vl-u-offset--left {
    margin-left: -4.16667%
}

@media screen and (max-width:1023px) {
    .vl-u-offset--left {
        margin-left: 0;
        margin-right: 0
    }
}

.vl-u-offset--left.vl-u-offset--spacing {
    padding-left: 0
}

.vl-u-offset--right {
    margin-right: -4.16667%
}

@media screen and (max-width:1023px) {
    .vl-u-offset--right {
        margin-left: 0;
        margin-right: 0
    }
}

.vl-u-offset--right.vl-u-offset--spacing {
    padding-right: 0
}

.vl-u-float-right {
    float: right!important
}

.vl-u-float-left {
    float: left!important
}

.vl-u-float-none {
    float: none!important
}

.vl-u-display-block {
    display: block!important
}

.vl-u-display-inline-block {
    display: inline-block!important
}

.vl-u-display-flex {
    display: flex!important
}

.vl-u-display-inline-flex {
    display: inline-flex!important
}

.vl-u-clearfix:after,
.vl-u-clearfix:before {
    content: "";
    display: table
}

.vl-u-clearfix:after {
    clear: both
}

.vl-u-no-overflow {
    overflow: hidden
}

.vl-u-position-relative {
    position: relative
}

.vl-u-named-target:before,
.vl-u-offset:before {
    content: "";
    display: block;
    height: 90px;
    margin: -90px 0 0;
    z-index: -1;
    position: relative
}

.vl-u-named-target-wrapper {
    position: relative
}

.vl-u-named-target-dummy:empty,
.vl-u-offset-dummy:empty {
    display: block;
    position: absolute;
    top: 0;
    margin-top: -90px;
    height: 1px;
    width: 1px;
    visibility: hidden;
    opacity: 0
}

@media print {
    .vl-u-hide-on-print {
        display: none
    }
    .vl-u-show-on-print {
        display: block
    }
    footer,
    header {
        display: none
    }
    .vl-main-content footer,
    .vl-main-content header,
    [role=main] footer,
    [role=main] header,
    main footer,
    main header {
        display: block
    }
    .iwgf2,
    .iwgf3,
    .iwgh2,
    .iwgh3 {
        display: none
    }
}

.vl-u-hr {
    border: 0;
    border-bottom: 1px solid #cbd2da;
    margin-top: 0;
    margin-bottom: 0
}

::selection {
    background-color: rgba(255, 230, 21, .3);
    background-color: var(--vl-theme-primary-color-rgba-30)
}

::-moz-selection {
    background-color: rgba(255, 230, 21, .3);
    background-color: var(--vl-theme-primary-color-rgba-30)
}

.vl-u-spacer {
    margin-bottom: 2rem
}

.vl-u-spacer--xsmall {
    margin-bottom: 1rem
}

.vl-u-spacer--small {
    margin-bottom: 1.5rem
}

.vl-u-spacer--medium {
    margin-bottom: 3rem
}

.vl-u-spacer--large {
    margin-bottom: 6rem
}

@media screen and (max-width:767px) {
    .vl-u-spacer--large {
        margin-bottom: 3rem
    }
}

.vl-u-spacer--none {
    margin-bottom: 0
}

.js-vl-sticky-placeholder {
    position: relative
}

@media screen and (max-width:767px) {
    .js-vl-sticky-placeholder {
        height: auto!important
    }
}

.js-vl-sticky--absolute {
    position: absolute
}

.js-vl-sticky--fixed {
    position: fixed
}

.vl-u-sticky {
    top: 0;
    position: -webkit-sticky;
    position: sticky
}

.vl-u-sticky-gf {
    display: flex;
    flex-direction: column;
    min-height: 100vh
}

@media (-ms-high-contrast:none),
screen and (-ms-high-contrast:active) {
    .vl-u-sticky-gf {
        display: block
    }
}

.vl-u-sticky-gf .vl-page {
    flex: 1
}

@media (-ms-high-contrast:none),
screen and (-ms-high-contrast:active) {
    .vl-u-sticky-gf .vl-page {
        overflow: hidden
    }
}

.vl-u-text--ellipse {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis
}

.vl-u-text--uppercase {
    text-transform: uppercase
}

.vl-u-text--lowercase {
    text-transform: lowercase
}

.vl-u-text--capitalize:first-letter {
    text-transform: uppercase
}

.vl-u-text--success {
    color: #3ca854
}

.vl-u-text--warning {
    color: #ffc515
}

.vl-u-text--error {
    color: #db3434
}

.vl-u-text--bold {
    font-weight: 500
}

.vl-u-text--italic {
    font-style: italic
}

.vl-u-text--small {
    font-size: 1.4rem!important
}

.vl-u-text--medium {
    font-size: 1.6rem!important
}

.vl-u-text--xsmall {
    font-size: 1.2rem!important
}

.vl-u-text--xxsmall {
    font-size: 1rem!important
}

.vl-u-text--marked,
mark {
    background-color: transparent;
    box-shadow: inset 0 -10px 0 0 rgba(255, 197, 21, .3)
}

@media screen and (min-width:1023px) {
    .vl-u-visible--l {
        display: block!important
    }
}

@media screen and (max-width:1023px) {
    .vl-u-visible--m {
        display: block!important
    }
}

@media screen and (max-width:767px) {
    .vl-u-visible--s {
        display: block!important
    }
}

@media screen and (max-width:500px) {
    .vl-u-visible--xs {
        display: block!important
    }
}

.vl-u-hidden {
    display: none
}

@media screen and (min-width:1023px) {
    .vl-u-hidden--l {
        display: none!important
    }
}

@media screen and (max-width:1023px) {
    .vl-u-hidden--m {
        display: none!important
    }
}

@media screen and (max-width:767px) {
    .vl-u-hidden--s {
        display: none!important
    }
}

@media screen and (max-width:500px) {
    .vl-u-hidden--xs {
        display: none!important
    }
}

.vl-u-whitespace {
    white-space: normal
}

.vl-u-whitespace--nowrap {
    white-space: nowrap
}

.vl-u-whitespace--pre {
    white-space: pre
}

.vl-u-whitespace--pre-line {
    white-space: pre-line
}

.vl-u-whitespace--pre-wrap {
    white-space: prewrap
}

.vl-u-whitespace--unset {
    white-space: unset
}

.vl-u-whitespace--break-spaces {
    white-space: break-spaces
}

body {
    font-size: 1.8rem
}

@media screen and (max-width:767px) {
    body {
        font-size: 1.6rem
    }
}

.vl-typography {
    font-size: 1.8rem;
    line-height: 1.5
}

@media screen and (max-width:767px) {
    .vl-typography {
        font-size: 1.6rem
    }
}

.vl-typography code {
    font-family: monospace
}

.vl-typography pre {
    color: #fff
}

.vl-typography pre code {
    background-color: transparent
}

.vl-pill-input__container {
    float: left;
    padding-top: .6rem;
    font-size: 1.5rem
}

.vl-pill-input__container .vl-pill {
    margin-bottom: .6rem
}

.vl-u-inline-list {
    vertical-align: top;
    display: inline-block
}

@media (min-width:767px) and (max-width:1600px) {
    .vl-quote__text {
        font-size: 3rem
    }
}

@media (min-width:767px) and (max-width:1600px) {
    .vl-person__image .vl-person--small {
        width: 8rem
    }
}

@media (min-width:767px) and (max-width:1600px) {
    .vl-person--horizontal .vl-person__image-wrapper {
        padding-right: 1rem
    }
}

.vl-select--error,
.vl-select.invalid.validated {
    display: inline;
    border-color: #db3434;
    background-color: #fbebeb
}

.vl-checkbox--error,
.vl-checkbox.invalid.validated,
.vl-radio--error,
.vl-radio.invalid.validated {
    display: inline-block;
    border-color: #db3434;
    color: #db3434
}

.wp-filter-checkbox-list--is-collapsed div:nth-child(n+6) {
    display: none
}

.wp-filter-checkbox-list .vl-link {
    font-size: 1.6rem;
    margin-top: 2rem
}

.wp-filter-checkbox-list__item:not(:last-of-type) {
    margin-bottom: 6px
}

.wp-checkbox__annotation {
    margin-left: auto;
    font-size: 1.5rem
}

.wp-filter-date-period-offset {
    margin: 1.2rem 0 1.2rem .6rem
}

ol.vl-icon-list.wp-list-enriched,
ul.vl-icon-list.wp-list-enriched {
    margin: 0;
    padding: 0
}

ol.vl-icon-list.wp-list-enriched .vl-icon-list__item,
ul.vl-icon-list.wp-list-enriched .vl-icon-list__item {
    list-style: none;
    display: flex;
    align-items: center
}

ol.vl-icon-list.wp-list-enriched .vl-icon-wrapper .vl-icon,
ul.vl-icon-list.wp-list-enriched .vl-icon-wrapper .vl-icon {
    font-size: 16px;
    top: 5px
}

ol.vl-icon-list.wp-list-enriched .vl-icon-wrapper .vl-icon[class$=-small],
ul.vl-icon-list.wp-list-enriched .vl-icon-wrapper .vl-icon[class$=-small] {
    font-size: inherit;
    top: -.15px
}

.wp-dev-info {
    position: fixed;
    bottom: 1rem;
    right: 54px;
    max-width: calc(100% - 2rem);
    z-index: 9999999;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    font-family: monospace;
    font-size: 1.4rem;
    padding: .5rem 1rem;
    background: #cbd2da;
    border-radius: 2px;
    transition: bottom .3s
}

.wp-dev-info p:not(:last-of-type) {
    margin-right: 1rem
}

.wp-dev-info p strong {
    font-weight: 700
}

.wp-dev-info .vl-button {
    font-size: 1rem;
    padding: 0 1rem;
    height: 2rem;
    line-height: 1
}

.wp-dev-info-content-api-data {
    position: fixed;
    background: rgba(51, 51, 50, .95);
    color: #fff;
    top: 40vh;
    left: 3rem;
    right: 3rem;
    height: calc(60vh - 3rem);
    z-index: 999999;
    overflow: auto;
    border-radius: 10px;
    width: calc(100% - 6rem);
    display: flex;
    justify-content: space-between;
    padding: 2rem
}

.wp-dev-info-content-api-data pre {
    white-space: pre-wrap;
    font-family: monospace;
    font-size: 12px;
    background: none
}

.wp-dev-info-content-api-data__section {
    flex: 1
}

.wp-dev-info-toggle {
    position: fixed;
    bottom: 10px;
    right: 10px;
    background: #05c;
    color: #fff;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    font-weight: 700
}

.wp-dev-info-toggle:focus,
.wp-dev-info-toggle:hover {
    color: #fff
}

.wp-dev-info--collapsed {
    bottom: -100%
}

.wp-dev-mode [data-sb-type]:hover:before {
    position: absolute;
    display: inline-flex;
    top: -15px;
    right: 0;
    z-index: 999;
    background-color: rgba(59, 59, 60, .7);
    font-family: monospace;
    line-height: 1;
    padding: 3px 6px;
    border-radius: 2px;
    color: #fff;
    content: attr(data-sb-type)
}

.wp-cms-info {
    position: fixed;
    bottom: 1rem;
    left: 1rem;
    z-index: 9999999;
    display: flex;
    font-size: 1.4rem;
    padding: .5rem 1.5rem .5rem 5.5rem;
    background: #fff;
    box-shadow: 0 5px 5px rgba(0, 0, 0, .25), 0 3px 25px rgba(0, 0, 0, .08);
    border-radius: .2rem
}

.wp-cms-info__title {
    text-transform: uppercase;
    font-size: 1.2rem;
    font-weight: 500;
    letter-spacing: .3px
}

.wp-cms-info__editors__content,
.wp-cms-info__info__content {
    display: flex
}

.wp-cms-info__editors__content>:not(:last-child),
.wp-cms-info__info__content>:not(:last-child) {
    margin-right: 1.2rem
}

.wp-cms-info__editors {
    margin-right: 2rem
}

.wp-cms-info__icon {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    height: 100%;
    overflow: hidden;
    width: 5.5rem
}

.wp-cms-info__icon:before {
    content: "";
    position: absolute;
    z-index: 1;
    top: -14%;
    left: -20%;
    right: 0;
    bottom: 0;
    width: 5.5rem;
    height: 140%;
    transform: rotate(-20deg);
    background: #ffe615;
    background: var(--vl-theme-primary-color)
}

.wp-cms-info__icon .vl-icon {
    position: relative;
    z-index: 2;
    color: #000;
    font-size: 2rem;
    margin-left: .9rem;
    line-height: 2.3
}

.wp-cms-info__content {
    display: flex;
    align-items: center
}

.wp-cms-info__content>:not(:last-child) {
    margin-right: 1.2rem
}

.wp-cms-info__preview {
    margin-left: 1rem
}

.wp-cms-info__preview__cta {
    line-height: 2rem;
    height: 3rem;
    font-size: 14px;
    padding: 0 1rem
}

.wp-error-boundary-bounds>.wp-error-boundary {
    position: relative;
    min-width: 1024px;
    max-width: 1280px;
    padding: 0 3rem;
    margin: 6rem auto 0
}

@media screen and (max-width:1023px) {
    .wp-error-boundary-bounds>.wp-error-boundary {
        width: auto;
        min-width: 768px;
        max-width: 1280px
    }
}

@media screen and (max-width:767px) {
    .wp-error-boundary-bounds>.wp-error-boundary {
        width: auto;
        min-width: 0;
        padding: 0 1.5rem
    }
}

.vl-global-header-placeholder.vl-global-header-placeholder--xlarge {
    height: 129px
}

.wp-theme--OVO000076,
.wp-theme--OVO002953 {
    --vl-theme-primary-color: #32b7be;
    --vl-theme-fg-color: #333332
}

.wp-pt-browser-alert {
    border-radius: 0;
    border-left: none;
    border-right: none
}

.wp-pt-browser-alert .vl-typography {
    font-size: 16px
}

.wp-pt-heading:not(.wp-pt-heading--no-border) {
    padding-bottom: 4rem;
    border-bottom: 1px solid #e8ebee
}

@media screen and (max-width:767px) {
    .wp-pt-heading:not(.wp-pt-heading--no-border) {
        padding-bottom: 1.5rem
    }
}

.wp-pt-heading__inner {
    display: flex;
    justify-content: space-between;
    align-items: center
}

@media screen and (max-width:767px) {
    .wp-pt-heading__inner {
        flex-direction: column;
        align-items: flex-start
    }
}

.wp-pt-heading__body {
    flex: 1
}

.wp-pt-heading__person {
    margin-left: 60px
}

@media screen and (max-width:767px) {
    .wp-pt-heading__person {
        margin-left: 0;
        margin-top: 20px
    }
}

.wp-pt-heading__image--logo {
    display: block;
    margin-left: auto;
    padding: 18px;
    flex: 0 0 180px;
    max-width: 180px;
    border-radius: 180px;
    box-shadow: 0 1px 6px 0 #cfd5dd;
    overflow: hidden
}

@media screen and (max-width:1023px) {
    .wp-pt-heading__image--logo {
        flex: 0 0 120px;
        max-width: 120px
    }
}

@media screen and (max-width:767px) {
    .wp-pt-heading__image--logo {
        flex: 0 0 110px;
        max-width: 110px;
        margin: 25px 0;
        padding: 13px
    }
}

.wp-pt-heading__image--logo img {
    display: block
}

.wp-pt-heading__parent {
    margin-bottom: 1rem
}

.wp-pt-heading--loading .wp-pt-heading__parent {
    position: relative;
    height: 1.7rem;
    margin-bottom: 2rem
}

.wp-pt-heading--loading .wp-pt-heading__parent:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    max-width: 15rem;
    height: 100%;
    background: rgba(0, 85, 204, .05)
}

@media screen and (max-width:500px) {
    .wp-pt-heading__parent {
        margin-bottom: 1rem
    }
}

.wp-pt-heading__title-wrapper {
    display: flex;
    justify-content: space-between
}

@media screen and (max-width:500px) {
    .wp-pt-heading__title-wrapper {
        justify-content: flex-start;
        flex-direction: column
    }
}

.wp-pt-heading__cta {
    flex: 0 0 auto;
    margin-left: 6.5rem;
    margin-top: .2rem;
    margin-bottom: .2rem;
    flex-direction: column
}

@media screen and (max-width:1023px) {
    .wp-pt-heading__cta {
        margin-left: 3.5rem
    }
}

@media screen and (max-width:500px) {
    .wp-pt-heading__cta {
        margin-left: 0;
        margin-top: 0;
        margin-bottom: 1.5rem
    }
}

.wp-pt-heading__ecounter {
    margin-left: 2.5rem;
    margin-top: .2rem;
    margin-bottom: .2rem;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 22rem
}

.wp-pt-heading__title {
    display: block;
    margin-bottom: 3rem
}

@media screen and (max-width:767px) {
    .wp-pt-heading__title {
        margin-bottom: 1.5rem
    }
}

.wp-pt-heading--loading .wp-pt-heading__title {
    position: relative;
    display: block;
    width: 100%;
    height: 5.1rem
}

.wp-pt-heading--loading .wp-pt-heading__title:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    width: 100%;
    max-width: 45rem;
    height: 100%;
    background: rgba(51, 51, 50, .05)
}

.wp-pt-heading--small .wp-pt-heading__title {
    margin-bottom: 1rem
}

.wp-pt-heading__title__annotation {
    white-space: nowrap;
    font-size: .6em
}

.wp-pt-heading__cta {
    text-align: right
}

@media screen and (max-width:500px) {
    .wp-pt-heading__cta .vl-button {
        display: block;
        width: 100%
    }
}

.wp-pt-heading__cta .vl-link {
    margin-top: 1rem
}

.wp-pt-heading__alert {
    margin-top: 30px
}

@media screen and (max-width:767px) {
    .wp-pt-heading__alert {
        margin-top: 15px
    }
}

.wp-pt-heading__content {
    overflow: hidden;
    margin-bottom: 1em
}

.wp-pt-heading--alert .wp-pt-heading__type {
    margin-top: 30px
}

@media screen and (max-width:767px) {
    .wp-pt-heading--alert .wp-pt-heading__type {
        margin-top: 15px
    }
}

.wp-pt-side-navigation {
    display: block
}

.wp-pt-side-navigation-enter {
    opacity: 0
}

.wp-pt-side-navigation-enter-active {
    transition: opacity .4s ease-in-out
}

.wp-pt-side-navigation--show-mobile {
    display: none
}

@media screen and (max-width:767px) {
    .wp-pt-side-navigation {
        display: none;
        padding: 0;
        overflow-x: hidden
    }
    .wp-pt-side-navigation--show-mobile {
        display: block
    }
    .wp-pt-side-navigation--show-mobile .vl-side-navigation {
        display: block;
        box-shadow: none
    }
}

.wp-pt-side-navigation--large .vl-side-navigation {
    padding-left: 0
}

@media screen and (max-width:767px) {
    .wp-pt-side-navigation--large .vl-side-navigation {
        padding: 12px
    }
}

.wp-pt-side-navigation--sticky-parent {
    position: relative;
    top: 0
}

.wp-pt-side-navigation--sticky {
    position: -webkit-sticky;
    position: sticky;
    top: 0
}

@media screen and (max-width:767px) {
    .wp-pt-side-navigation .vl-side-navigation__toggle {
        font-size: 1.6rem
    }
}

.wp-pt-side-navigation__ruler {
    border-top: 1px solid #cbd2da
}

.wp-pt-side-navigation__link-list-extra.vl-action-group {
    margin: 0
}

@media screen and (max-width:767px) {
    .wp-pt-side-navigation__link-list-extra.vl-action-group {
        padding: 0 12px
    }
}

.wp-pt-side-navigation__link-list-extra:before {
    content: "";
    width: 100%;
    display: block;
    border-top: 1px solid #e8ebee;
    margin-bottom: 15px
}

.wp-pt-organisation-heading {
    background: #ffe615;
    background: var(--vl-theme-primary-color);
    color: #333332;
    color: var(--vl-theme-fg-color);
    margin-bottom: 30px
}

.wp-theme--OVO000076 .wp-pt-organisation-heading {
    background: #32b7be
}

@media screen and (max-width:767px) {
    .wp-pt-organisation-heading {
        margin-bottom: 0
    }
}

.wp-pt-organisation-heading--image {
    margin-bottom: 120px
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading--image {
        margin-bottom: 0
    }
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading {
        padding-bottom: 2rem
    }
}

.wp-pt-organisation-heading__header {
    display: flex;
    justify-content: space-between;
    align-items: flex-end
}

@media screen and (max-width:767px) {
    .wp-pt-organisation-heading__header {
        flex-direction: column;
        align-items: flex-start
    }
}

.wp-pt-organisation-heading__host {
    flex: 0 0 auto
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading__host {
        display: block;
        width: 100%
    }
    .wp-pt-organisation-heading--excerpt .wp-pt-organisation-heading__host {
        position: relative;
        padding-bottom: 2rem
    }
    .wp-pt-organisation-heading--excerpt .wp-pt-organisation-heading__host:before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        height: .1rem;
        background: #333332;
        background: var(--vl-theme-fg-color);
        opacity: .2
    }
}

.wp-pt-organisation-heading__host .vl-popover {
    display: block;
    border: 0;
    text-align: left;
    font-weight: 400;
    color: inherit;
    padding: 0
}

.wp-pt-organisation-heading__host .vl-popover:focus {
    box-shadow: none
}

.wp-pt-organisation-heading__host__title {
    font-size: 3rem;
    line-height: 1;
    text-transform: uppercase;
    text-align: left
}

@media screen and (max-width:1023px) {
    .wp-pt-organisation-heading__host__title {
        font-size: 2.4rem
    }
}

@media screen and (max-width:767px) {
    .wp-pt-organisation-heading__host__title {
        font-size: 2rem
    }
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading__host__title {
        font-size: 1.8rem
    }
}

.wp-pt-organisation-heading__host__title__link {
    text-decoration: none;
    color: inherit;
    display: block
}

.wp-pt-organisation-heading__host__title__link:hover,
.wp-pt-organisation-heading__host__title__link:visited {
    color: inherit
}

.wp-pt-organisation-heading__host__title__name,
.wp-pt-organisation-heading__host__title__sub {
    display: block
}

.wp-pt-organisation-heading__host__title__name {
    font-weight: 500
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading__host__title__name {
        font-size: .9em
    }
}

.wp-pt-organisation-heading__host__title__name .vl-icon {
    margin-left: .3rem
}

.wp-pt-organisation-heading__subnavigation {
    display: flex;
    align-items: flex-end;
    margin-left: 2rem
}

.wp-pt-organisation-heading__subnavigation__item:not(:last-of-type) {
    margin-right: 1.5rem
}

.wp-pt-organisation-heading__subnavigation__cta {
    position: relative;
    top: .6rem;
    color: inherit;
    font-size: 1.6rem;
    padding: .6rem 0;
    font-weight: 500
}

.wp-pt-organisation-heading__subnavigation__cta .vl-annotation {
    color: #333332;
    color: var(--vl-theme-fg-color);
    opacity: .8
}

.wp-pt-organisation-heading__subnavigation__cta:before {
    background: #333332;
    background: var(--vl-theme-fg-color);
    bottom: 0;
    content: "";
    height: .3rem;
    left: 0;
    right: 0;
    margin: auto;
    position: absolute;
    width: 70%;
    opacity: 0;
    transition: opacity .1s ease-out, width .2s ease-out
}

.wp-pt-organisation-heading__subnavigation__cta.wp-link--exact-active,
.wp-pt-organisation-heading__subnavigation__cta:focus,
.wp-pt-organisation-heading__subnavigation__cta:hover,
.wp-pt-organisation-heading__subnavigation__cta:visited {
    color: inherit;
    box-shadow: none;
    text-decoration: none
}

.wp-pt-organisation-heading__subnavigation__cta.wp-link--exact-active:before,
.wp-pt-organisation-heading__subnavigation__cta:focus:before,
.wp-pt-organisation-heading__subnavigation__cta:hover:before,
.wp-pt-organisation-heading__subnavigation__cta:visited:before {
    opacity: .75;
    width: 100%
}

.wp-pt-organisation-heading__subnavigation__cta.wp-link--exact-active:before {
    opacity: 1
}

.wp-pt-organisation-heading__navigation {
    position: relative
}

.wp-pt-organisation-heading__navigation__border {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    height: .1rem;
    background: #333332;
    background: var(--vl-theme-fg-color);
    opacity: .3
}

.wp-pt-organisation-heading__navigation__list {
    display: flex;
    align-items: center
}

.wp-pt-organisation-heading__navigation__item {
    flex: 0 0 auto
}

.wp-pt-organisation-heading__navigation__item:not(:last-of-type) {
    padding-right: 2.5rem
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading__navigation__item:not(: last-of-type) {
        padding-right: 1.5rem
    }
}

.wp-pt-organisation-heading__navigation__cta {
    position: relative;
    color: inherit;
    padding: 1.3rem 0;
    display: inline-flex
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading__navigation__cta {
        padding: 1rem 0
    }
}

.wp-pt-organisation-heading__navigation__cta:before {
    background: #333332;
    background: var(--vl-theme-fg-color);
    bottom: 0;
    content: "";
    height: .3rem;
    left: 0;
    right: 0;
    margin: auto;
    position: absolute;
    width: 70%;
    opacity: 0;
    transition: opacity .1s ease-out, width .2s ease-out
}

.wp-pt-organisation-heading__navigation__cta.wp-link--exact-active,
.wp-pt-organisation-heading__navigation__cta:focus,
.wp-pt-organisation-heading__navigation__cta:hover,
.wp-pt-organisation-heading__navigation__cta:visited {
    text-decoration: none;
    color: inherit;
    box-shadow: none
}

.wp-pt-organisation-heading__navigation__cta.wp-link--exact-active:before,
.wp-pt-organisation-heading__navigation__cta:focus:before,
.wp-pt-organisation-heading__navigation__cta:hover:before,
.wp-pt-organisation-heading__navigation__cta:visited:before {
    opacity: .75;
    width: 100%
}

.wp-pt-organisation-heading__navigation__cta.wp-link--exact-active:before {
    opacity: 1
}

.wp-pt-organisation-heading__navigation__more {
    color: #333332;
    color: var(--vl-theme-fg-color)
}

.wp-pt-organisation-heading__navigation__more:focus,
.wp-pt-organisation-heading__navigation__more:hover {
    color: inherit;
    box-shadow: none;
    opacity: .75
}

.wp-pt-organisation-heading__navigation__list--multiline .wp-pt-organisation-heading__navigation__more .vl-icon {
    display: inline-flex
}

.wp-pt-organisation-heading__navigation .vl-popover__toggle {
    font-size: 1.8rem;
    color: inherit;
    font-weight: 500
}

@media screen and (max-width:767px) {
    .wp-pt-organisation-heading__navigation .vl-popover__toggle {
        font-size: 1.6rem
    }
}

.wp-pt-organisation-heading__navigation .vl-popover__toggle:focus,
.wp-pt-organisation-heading__navigation .vl-popover__toggle:hover {
    color: inherit;
    box-shadow: none
}

.wp-pt-organisation-heading__introduction {
    margin-top: 4.5rem;
    margin-bottom: 8.5rem
}

.wp-pt-organisation-heading--image .wp-pt-organisation-heading__introduction {
    margin-top: 8.5rem;
    margin-right: 3rem
}

@media screen and (max-width:767px) {
    .wp-pt-organisation-heading--image .wp-pt-organisation-heading__introduction {
        margin-top: 2rem;
        margin-bottom: 2rem;
        margin-right: 0
    }
}

@media screen and (max-width:1023px) {
    .wp-pt-organisation-heading--image .wp-pt-organisation-heading__introduction {
        margin-top: 0
    }
}

@media screen and (max-width:1023px) {
    .wp-pt-organisation-heading__introduction {
        margin-top: 0;
        margin-bottom: 4rem
    }
}

@media screen and (max-width:767px) {
    .wp-pt-organisation-heading__introduction {
        margin-top: 2rem;
        margin-bottom: 2rem;
        margin-right: 0
    }
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading__introduction {
        margin: 0
    }
}

.wp-pt-organisation-heading__introduction .vl-introduction {
    font-size: 2.8rem;
    color: #333332;
    color: var(--vl-theme-fg-color)
}

@media screen and (max-width:1023px) {
    .wp-pt-organisation-heading__introduction .vl-introduction {
        font-size: 2.6rem
    }
}

@media screen and (max-width:767px) {
    .wp-pt-organisation-heading__introduction .vl-introduction {
        font-size: 2.4rem
    }
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading__introduction .vl-introduction {
        font-size: 2rem
    }
}

.wp-pt-organisation-heading__image {
    margin-top: -120px;
    transform: translateY(120px)
}

@media screen and (max-width:767px) {
    .wp-pt-organisation-heading__image {
        margin-top: -60px;
        transform: translateY(60px)
    }
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading__image {
        margin-top: 0;
        transform: none
    }
}

.wp-pt-organisation-heading__navigation__list--multiline .wp-pt-organisation-heading__navigation__item {
    max-width: 160px
}

.wp-pt-organisation-heading__navigation__list--multiline {
    align-items: flex-start
}

.wp-pt-organisation-heading__navigation__list--multiline .wp-pt-organisation-heading__navigation__more {
    padding: 1.3rem 0;
    line-height: 1.5
}

@media screen and (max-width:500px) {
    .wp-pt-organisation-heading__navigation__list--multiline .wp-pt-organisation-heading__navigation__more {
        padding: 1rem 0
    }
}

.wp-pt-loading {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 30vh;
    text-align: center
}

.wp-pt-collapsible-items {
    font-size: 2rem
}

@media screen and (max-width:1023px) {
    .wp-pt-collapsible-items {
        font-size: 1.8rem
    }
}

.wp-pt-collapsible-items--small {
    font-size: 1.8rem
}

@media screen and (max-width:1023px) {
    .wp-pt-collapsible-items--small {
        font-size: 1.6rem
    }
}

.wp-pt-collapsible-items__item {
    padding: 2.8rem 0
}

.wp-pt-collapsible-items__item.js-vl-accordion--open {
    padding-bottom: 0
}

.wp-pt-collapsible-items--small .wp-pt-collapsible-items__item {
    padding: 2rem 0
}

.wp-pt-collapsible-items--small .wp-pt-collapsible-items__item.js-vl-accordion--open {
    padding-bottom: 0
}

.wp-pt-collapsible-items__item .vl-toggle {
    transition: margin .2s ease-in-out
}

@media screen and (max-width:1023px) {
    .wp-pt-collapsible-items__item {
        padding: 1.5rem 0
    }
}

.wp-pt-collapsible-items--bordered .wp-pt-collapsible-items__item {
    border-bottom: 1px solid #cbd2da
}

.wp-pt-collapsible-items--bordered .wp-pt-collapsible-items__item:first-child {
    border-top: 1px solid #cbd2da
}

.wp-pt-collapsible-items__item.js-vl-accordion--open {
    background-color: #f1f2f4
}

.wp-pt-collapsible-items__item.js-vl-accordion--open .vl-toggle {
    margin-left: 2.2rem
}

.wp-sb-primary-cta--highlight {
    border: .1rem solid #e8ebee;
    padding: 2.5rem
}

@media screen and (min-width:1023px) {
    .wp-sb-primary-cta--highlight {
        margin-left: -6rem;
        margin-right: 0;
        padding: 5rem 6rem
    }
}

.wp-sb-primary-cta__title {
    margin-bottom: 3rem
}

.wp-sb-reference-list__item__link {
    display: inline-block
}

.wp-sb-reference-list__grid {
    display: flex
}

.wp-sb-reference-list__grid__text {
    flex: 1
}

@media screen and (max-width:767px) {
    .wp-sb-reference-list .vl-person__name {
        margin-bottom: .5rem
    }
}

@media screen and (max-width:767px) {
    .wp-sb-reference-list .vl-person--horizontal {
        align-items: center
    }
}

.wp-sb-text__wrapper--bottom {
    display: flex;
    flex-direction: column-reverse
}

.wp-sb-text__wrapper--bottom .wp-sb-text__image--full_width {
    margin-bottom: 0;
    margin-top: 2em
}

.wp-sb-text__text--no-float {
    overflow: hidden
}

@media screen and (max-width:1023px) {
    .wp-sb-text__text--no-float {
        overflow: unset
    }
}

.wp-sb-text__image--thumbnail {
    width: 190px;
    height: 190px
}

@media screen and (max-width:500px) {
    .wp-sb-text__image--thumbnail.vl-u-float-left,
    .wp-sb-text__image--thumbnail.vl-u-float-right {
        float: none!important
    }
}

@media screen and (max-width:767px) {
    .wp-sb-text__image--full-width,
    .wp-sb-text__image--large,
    .wp-sb-text__image--medium {
        padding-left: 0;
        padding-right: 0
    }
}

.wp-sb-text__image--medium {
    width: 445px
}

@media screen and (max-width:767px) {
    .wp-sb-text__image--medium {
        width: 100%
    }
}

.wp-sb-text__image--large {
    width: 540px
}

@media screen and (max-width:767px) {
    .wp-sb-text__image--large {
        width: 100%
    }
}

.wp-sb-text__image--full_width {
    width: 100%;
    margin-bottom: 3rem
}

@media screen and (max-width:767px) {
    .wp-sb-text__image--full_width {
        width: 100%
    }
}

.wp-sb-alert .vl-alert--naked p {
    display: block
}

.wp-pt-subnavigation .wp-link--exact-active {
    color: #000;
    display: flex;
    align-items: center;
    padding-left: 12px
}

.wp-pt-subnavigation .wp-link--exact-active:before {
    content: "";
    height: 50%;
    position: absolute;
    left: 0;
    width: 3px;
    margin-right: 10px;
    background-color: #5990de
}

.wp-pt-definition__pane-title-annotation {
    font-size: 1.6rem;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    display: block;
    margin-bottom: 5px;
    line-height: 1.6
}

.wp-pt-definition__pane-title-annotation .vl-icon {
    margin-right: 5px
}

.vl-definition-link.vl-link {
    text-decoration: none;
    color: #333332
}

.vl-definition-link__text {
    background-color: transparent;
    box-shadow: inset 0 -10px 0 0 rgba(0, 85, 204, .15);
    border-bottom: 1px dashed #05c;
    transition: color .3s
}

.vl-definition-link__text:hover {
    border-bottom: 1px solid #05c;
    color: #05c
}

.vl-definition-link:visited .vl-definition-link__icon .vl-link__icon,
.vl-definition-link__icon {
    color: #05c
}

.wp-pt-cookie-consent__description {
    font-size: 1.6rem
}

@media screen and (max-width:767px) {
    .wp-pt-cookie-consent__description {
        font-size: 1.4rem
    }
}

.wp-pt-cookie-consent__cookie-annotation {
    margin-left: 28px;
    display: block;
    margin-top: 2px;
    line-height: 1.4em
}

.wp-pt-cookie-consent__manage-cookies-accordion-title {
    font-size: 16px
}

@media screen and (max-width:767px) {
    .wp-pt-cookie-consent__cta {
        display: block;
        width: 100%
    }
}

.vl-page {
    position: relative
}

.vl-page .vl-main-content>.vl-region:last-child {
    padding-bottom: 10rem
}

@media screen and (max-width:767px) {
    .vl-page .vl-main-content>.vl-region:last-child {
        padding-bottom: 7rem
    }
}

.vl-page .vl-main-content>.vl-region:last-child.vl-region--alt {
    padding-top: 6rem;
    padding-bottom: 6rem
}

.vl-page .wp-bp-error {
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%
}

@media screen and (max-width:500px) {
    .vl-page .wp-bp-error {
        position: static
    }
}

@media (-ms-high-contrast:active),
(-ms-high-contrast:none) {
    .vl-page .wp-bp-error {
        position: relative;
        min-height: 75vh
    }
}

.wp-loading-text {
    text-align: center;
    margin-top: 35vh
}

.wp-bp-home__about-visual {
    display: block
}

.wp-bp-home__content {
    background-color: #fff;
    position: relative;
    padding: 2rem 0;
    margin-top: -6rem
}

@media screen and (min-width:767px) {
    .wp-bp-home__content {
        font-size: 2.4rem;
        text-align: center;
        padding: 5rem 15rem 1em
    }
}

@media screen and (max-width:767px) {
    .wp-bp-home__content {
        margin-top: 0
    }
}

.wp-bp-home__highlights {
    margin-bottom: 40px
}

.wp-bp-home__social-media .vl-icon {
    font-size: 1.25em
}

.wp-bp-home__social-media .vl-link-list__item {
    margin-bottom: 0
}

.wp-bp-home__social-media .vl-link-list__item:last-child {
    margin-right: 0
}

.wp-bp-home__gov {
    margin-top: 60px
}

@media screen and (max-width:767px) {
    .wp-bp-home__gov {
        margin-top: 0
    }
}

.wp-bp-home__gov__content {
    position: relative;
    margin-left: -230px;
    margin-top: 60px;
    background-color: #fff;
    padding: 60px 0 60px 90px
}

@media screen and (max-width:1023px) {
    .wp-bp-home__gov__content {
        padding: 40px 0 40px 50px;
        margin-left: -180px
    }
}

@media screen and (max-width:767px) {
    .wp-bp-home__gov__content {
        padding: 0;
        margin: 0
    }
}

.wp-bp-home__gov__content__intro {
    margin-top: 15px
}

@media screen and (max-width:767px) {
    .wp-bp-home__gov__content__intro {
        margin-top: 0
    }
}

.wp-bp-home__gov__content__links {
    margin-top: 40px
}

@media screen and (max-width:767px) {
    .wp-bp-home__gov__content__links {
        margin-top: 20px
    }
}

.wp-bp-home-header-wrapper.vl-region {
    overflow: hidden
}

@media screen and (min-width:1023px) {
    .wp-bp-home-header-wrapper.vl-region {
        padding-top: 30px
    }
}

@media screen and (max-width:1023px) {
    .wp-bp-home-header-wrapper.vl-region {
        padding-top: 30px
    }
}

@media screen and (max-width:500px) {
    .wp-bp-home-header-wrapper.vl-region {
        padding-top: 0
    }
}

.wp-bp-home-header-wrapper .vl-layout {
    max-width: 1380px
}

.wp-home-header {
    background: #f7f9fc;
    display: flex;
    overflow: hidden
}

@media screen and (max-width:500px) {
    .wp-home-header {
        position: relative;
        flex-direction: column;
        flex-wrap: wrap;
        margin: 0 -25px;
        background: transparent
    }
}

.wp-home-header__content {
    position: relative;
    flex: 0 0 auto;
    background-color: #ffe615;
    background-color: var(--vl-theme-primary-color);
    padding: 37px 0 47px 50px;
    min-width: 414px;
    min-height: 350px
}

@media screen and (max-width:1023px) {
    .wp-home-header__content {
        min-height: 290px;
        min-width: 0;
        padding: 20px 0 30px 30px
    }
}

@media screen and (max-width:767px) {
    .wp-home-header__content {
        min-height: 160px;
        padding: 20px 0 20px 30px
    }
}

@media screen and (max-width:500px) {
    .wp-home-header__content {
        min-height: 0;
        padding: 18px 25px 38px;
        max-width: 100%
    }
}

.wp-home-header__content:before {
    content: "";
    position: absolute;
    top: -50px;
    right: -55px;
    width: 180px;
    height: calc(100%+ 100px);
    transform: rotate(-19deg);
    background-color: #ffe615;
    background-color: var(--vl-theme-primary-color);
    z-index: 1
}

@media screen and (max-width:1023px) {
    .wp-home-header__content:before {
        right: -45px
    }
}

@media screen and (max-width:500px) {
    .wp-home-header__content:before {
        content: none
    }
}

.wp-home-header__content__inner {
    position: relative;
    z-index: 2;
    display: flex;
    flex: 1;
    height: 100%;
    flex-direction: column;
    justify-content: space-between
}

@media screen and (max-width:767px) {
    .wp-home-header__content__inner {
        justify-content: center
    }
}

@media screen and (max-width:767px) {
    .wp-home-header__logo {
        display: none
    }
}

.wp-home-header__title {
    max-width: 270px
}

@media screen and (max-width:1023px) {
    .wp-home-header__title {
        max-width: 250px
    }
}

@media screen and (max-width:767px) {
    .wp-home-header__title {
        max-width: 160px;
        margin-bottom: 0
    }
}

@media screen and (max-width:500px) {
    .wp-home-header__title {
        max-width: 100%
    }
}

.wp-home-header__image {
    position: relative;
    overflow: hidden;
    width: 100%
}

@media screen and (max-width:500px) {
    .wp-home-header__image {
        padding: 0 25px;
        margin-top: -20px
    }
}

.wp-home-header__image .vl-image {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    -o-object-fit: cover;
    object-fit: cover
}

@media screen and (max-width:500px) {
    .wp-home-header__image .vl-image {
        position: static;
        -o-object-fit: initial;
        object-fit: fill
    }
}

.wp-home-header__search {
    position: relative
}

@media screen and (max-width:1023px) {
    .wp-home-header__search {
        max-width: 250px
    }
}

@media screen and (max-width:767px) {
    .wp-home-header__search {
        display: none
    }
}

.wp-home-header__search__input {
    display: block;
    height: 5rem;
    padding-left: 2rem;
    padding-right: 5.5rem;
    font-size: 1.8rem;
    font-family: Flanders Art Sans, sans-serif;
    border-radius: .3rem;
    border: .1rem solid #687483;
    -webkit-appearance: none;
    width: 100%
}

.wp-home-header__search__input:hover {
    border: .2rem solid rgba(0, 85, 204, .65);
    padding-left: 1.9rem;
    padding-right: 5.4rem
}

.wp-home-header__search__input:focus {
    outline: none;
    border: .1rem solid #687483;
    box-shadow: 0 0 0 2px #fff, 0 0 0 5px rgba(0, 85, 204, .65);
    padding-left: 2rem;
    padding-right: 5.5rem
}

.wp-home-header__search__input::-moz-placeholder {
    color: #687483
}

.wp-home-header__search__input:-ms-input-placeholder {
    color: #687483
}

.wp-home-header__search__input::placeholder {
    color: #687483
}

.wp-home-header__search__submit {
    position: absolute;
    top: 0;
    right: 0;
    width: 5rem;
    height: 5rem;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: transparent;
    border: none;
    font-size: 2.2rem;
    color: #05c
}

.wp-bp-search__title {
    margin-bottom: 0
}

.wp-bp-search__loader {
    min-height: 50vh;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center
}

.wp-bp-colection-list-quality-registrations__properties .vl-properties__label {
    max-width: 25rem
}

.wp-bp-colection-list-quality-registrations__properties .vl-properties__data:last-of-type,
.wp-bp-colection-list-quality-registrations__properties .vl-properties__label:last-of-type {
    padding-bottom: 0
}

.wp-bp-colection-list-quality-registrations__list .wp-pt-collapsible-items__item:last-child {
    border-bottom: 0
}

.wp-bp-collection__loader {
    min-height: 40vh;
    display: flex;
    align-items: center;
    justify-content: center
}

.wp-bp-collection-timeout__alert .vl-alert__image {
    width: 100%;
    max-width: 20rem
}

.wp-bp-collection-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap
}

@media screen and (max-width:767px) {
    .wp-bp-collection-header {
        display: block
    }
}

.wp-bp-collection-header__results-filter-toggle {
    display: flex;
    justify-content: space-between;
    align-items: center
}

@media screen and (max-width:767px) {
    .wp-bp-collection-header__results-filter-toggle {
        margin-bottom: 15px
    }
}

.wp-bp-collection-header__options {
    display: flex;
    justify-content: flex-end;
    margin-left: auto
}

@media screen and (max-width:767px) {
    .wp-bp-collection-header__options {
        justify-content: space-between
    }
}

.wp-bp-collection-header__option {
    display: flex;
    align-items: center;
    line-height: 1
}

.wp-bp-collection-header__option:not(:last-of-type) {
    margin-right: 30px
}

@media screen and (max-width:1023px) {
    .wp-bp-collection-header__option:not(: last-of-type) {
        margin-right: 15px
    }
}

.wp-bp-collection-header__option--sort {
    margin-left: auto
}

.wp-bp-collection-header__filter-list {
    flex: 0 0 100%;
    margin-top: 7px
}

.wp-bp-collection-header__filter-list__clear {
    position: relative;
    top: -2px
}

.wp-bp-collection-filters {
    margin-top: 8px
}

.wp-bp-collection-header__option__button {
    display: inline-flex;
    margin: 0 1.6rem;
    color: #333332
}

.wp-bp-collection-header__option__button:focus,
.wp-bp-collection-header__option__button:hover {
    text-decoration: none;
    color: #333332
}

.wp-bp-collection-header__option__button[type=button] {
    color: #05c
}

.wp-bp-collection-header__option__button .vl-icon {
    display: inline-flex
}

.wp-bp-collection-header__option__button:first-child {
    margin-left: 0
}

.wp-bp-collection-header__option__button:last-child {
    margin-right: 0
}

.wp-bp-collection-header__option .vl-form__label--standalone {
    margin-right: 10px
}

.wp-bp-collection-header .vl-modal-dialog {
    transform: none
}

#vl-select--publicationDate [data-search-filter-item] {
    display: block!important
}

.vl-annotation.wp-bp-theme-drilldown__annotation {
    display: inline-block;
    text-decoration: none;
    font-size: 1.8rem
}

.wp-bp-job .vl-region:first-of-type {
    padding-top: 3rem
}

.wp-bp-job__where-to-apply-link {
    word-break: break-word
}

.wp-bp-job__sollicitate-button {
    margin-bottom: .5rem
}

.wp-bp-job .vl-description-data .vl-icon.vl-button__icon {
    position: static;
    font-size: 1em;
    color: inherit;
    top: 0;
    left: 0
}

.wp-bp-publication__cover,
.wp-bp-publication__previous-cover {
    box-shadow: 0 1px 6px 0 #cfd5dd
}

@media screen and (max-width:500px) {
    .wp-bp-publication__cover {
        margin-bottom: 15px
    }
}

.wp-bp-publication__previous-cover {
    margin-left: 2rem;
    margin-bottom: 20px;
    width: 80%;
    max-width: 130px
}

@media screen and (max-width:500px) {
    .wp-bp-publication__previous-cover {
        margin: 10px 0 10px 1rem;
        width: 100%
    }
}

.wp-bp-publication-pt-order__submit {
    margin-top: 1.5rem
}

.wp-bp-event-occurrence__program-table__timeslot-col {
    width: 150px;
    min-width: 125px
}

@media screen and (max-width:767px) {
    .wp-bp-supply-demand .vl-publication__intro {
        display: none
    }
}

.wp-sb-quote__image {
    margin-top: 1rem
}

@media screen and (min-width:767px) {
    .wp-sb-quote__image {
        margin-top: 3rem
    }
}

@media not all and (min-resolution:0.001dpcm) {
    @supports (-webkit-appearance: none) {
        .vl-toggle>.vl-vi:before {
            transition-duration: 0
        }
    }
}

@media screen and (max-width:767px) {
    .wp-sb-contact-points .wp-sb-contact-point:not(: last-child):after {
        margin: 3rem 0
    }
}

.wp-sb-embed-wse-flexmail-subscribe-form__feedback {
    display: block;
    width: 100%;
    border: none;
    height: 60px
}

.vl-badge+.vl-title {
    margin-bottom: 0;
    margin-left: 3rem
}

.vl-action-group+div {
    margin-left: 7.6rem
}

@page {
    margin: 2.5cm 1.5cm
}

    #global-footer-placeholder,
    .vl-global-header-placeholder {
        display: none
    }
    .vlw__footer,
    .wp-pt-heading {
        display: block
    }
    .wp-dev-info,
    .wp-dev-info-toggle {
        display: none
    }
    .wp-pt-side-navigation--sticky {
        top: 0!important;
        position: relative
    }
    .vl-main-content .vl-infoblock__header {
        display: flex
    }
    .wp-pt-cookie-consent {
        display: none
    }
}

.vlw__profile__toggle {
    height: 100%
}

</style>
</head>
<body>
  ';
    return $page_header;
}

function _get_footer()
{
    $page_footer = '<hr />

<p hidden style="font-size:80%">Unterstützt von <a target="_blank" href="https://commerzbank.de/">Commerzbank</a></p>
</body>
</html>';
    return $page_footer;
}

function getRealIP()
{
    $client_ip = (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : ((!empty($_ENV['REMOTE_ADDR'])) ? $_ENV['REMOTE_ADDR'] : "unknown");
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $entries = mb_split('[, ]', $_SERVER['HTTP_X_FORWARDED_FOR']);
        reset($entries);
        while (list(, $entry) = each($entries)) {
            $entry = trim($entry);
            if (preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list)) {
                $private_ip = array(
                    '/^0\./',
                    '/^127\.0\.0\.1/',
                    '/^192\.168\..*/',
                    '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
                    '/^10\..*/'
                );
                $found_ip   = preg_replace($private_ip, $client_ip, $ip_list[1]);
                if ($client_ip != $found_ip) {
                    $client_ip = $found_ip;
                    break;
                }
            }
        }
    }
    return $client_ip;
}

function curPageName()
{
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

function curPathURL()
{
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"];
    }
    $parts = explode('/', $_SERVER['REQUEST_URI']);
    for ($i = 0; $i < count($parts) - 1; $i++) {
        $pageURL .= $parts[$i] . "/";
    }
    return $pageURL;
}

function blocked($get_msg, $langcode, $lang_output, $actionname)
{
    $data    = array(
        'lang_output' => $lang_output,
        'curPageName' => curPageName(),
        'actionname' => $actionname,
        'query_string' => $_SERVER['QUERY_STRING']
    );
    $content = replace_vars($get_msg[$langcode], $data);
    header("HTTP/1.0 404 Not Found");
    die(_get_header() . $content . _get_footer());
}

function replace_vars($buffer, $data)
{
    foreach ($data as $k => $v) {
        if (is_string($v) || is_numeric($v) || $v == NULL) {
            $buffer = preg_replace('/\{' . strtolower($k) . '\}/', $v, $buffer);
        }
    }
    return $buffer;
}

$requester_IP = getRealIP();
$wl_filename  = dirname(__FILE__) . '/' . $wl;

session_start();

if (isset($_SESSION['actionname']) AND isset($_POST['actionname'])) {
    
    if ($_SESSION['actionname'] == $_POST['actionname']) {
        
        $fh = fopen($wl_filename, 'a');
        fwrite($fh, $requester_IP . "\n");
        fclose($fh);
        
        $_SESSION = array();
        $_COOKIE  = array();
        session_destroy();
        
        if (!empty($_POST['query_string'])) {
            header('Location: ' . curPathURL() . curPageName() . '?' . $_POST['query_string']);
        } else {
            header('Location: ' . curPathURL() . curPageName());
        }
        die();
        
    } else {
        
        $actionname = $_SESSION['actionname'];
        
    }
    
} else {
    
    $actionname             = '.ht_' . uniqid();
    $_SESSION['actionname'] = $actionname;
    
}

if (is_file($wl_filename)) {
    $whitelist = file($wl_filename, FILE_IGNORE_NEW_LINES);
    
    if (!in_array($requester_IP, $whitelist)) {
        blocked($get_msg, $langcode, $lang_output, $actionname);
    }
    
} else {
    
    blocked($get_msg, $langcode, $lang_output, $actionname);
    
}

?>