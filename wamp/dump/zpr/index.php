<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

@font-face {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 300;
  src: local("Open Sans Light"), local("OpenSans-Light"),
    url("../fonts/opensans/opensans-light-webfont.woff") format("woff");
}
@font-face {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 400;
  src: local("Open Sans"), local("OpenSans"),
    url("../fonts/opensans/opensans-webfont.woff") format("woff");
}
@font-face {
  font-family: "Open Sans";
  font-style: normal;
  font-weight: 700;
  src: local("Open Sans Bold"), local("OpenSans-Bold"),
    url("../fonts/opensans/opensans-bold-webfont.woff") format("woff");
}

html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%;
}
body {
  margin: 0;
}
article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
nav,
section,
summary {
  display: block;
}
audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline;
}
audio:not([controls]) {
  display: none;
  height: 0;
}
[hidden],
template {
  display: none;
}
a {
  background: transparent;
}
a:active,
a:hover {
  outline: 0;
}
abbr[title] {
  border-bottom: 1px dotted;
}
b,
strong {
  font-weight: bold;
}
dfn {
  font-style: italic;
}
h1 {
  margin: 0.67em 0;
  font-size: 2em;
}
mark {
  color: #000;
  background: #ff0;
}
small {
  font-size: 80%;
}
sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline;
}
sup {
  top: -0.5em;
}
sub {
  bottom: -0.25em;
}
img {
  border: 0;
}
svg:not(:root) {
  overflow: hidden;
}
figure {
  margin: 1em 40px;
}
hr {
  height: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
pre {
  overflow: auto;
}
code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em;
}
button,
input,
optgroup,
select,
textarea {
  margin: 0;
  font: inherit;
  color: inherit;
}
button {
  overflow: visible;
}
button,
select {
  text-transform: none;
}
button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer;
}
button[disabled],
html input[disabled] {
  cursor: default;
}
button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0;
}
input {
  line-height: normal;
}
input[type="checkbox"],
input[type="radio"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0;
}
input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}
input[type="search"] {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-appearance: textfield;
}
input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}
fieldset {
  padding: 0.35em 0.625em 0.75em;
  margin: 0 2px;
  border: 1px solid #c0c0c0;
}
legend {
  padding: 0;
  border: 0;
}
textarea {
  overflow: auto;
}
optgroup {
  font-weight: bold;
}
table {
  border-spacing: 0;
  border-collapse: collapse;
}
td,
th {
  padding: 0;
}
@media print {
  * {
    color: #000 !important;
    text-shadow: none !important;
    background: transparent !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
  }
  a,
  a:visited {
    text-decoration: underline;
  }
  a[href]:after {
    content: " (" attr(href) ")";
  }
  abbr[title]:after {
    content: " (" attr(title) ")";
  }
  a[href^="javascript:"]:after,
  a[href^="#"]:after {
    content: "";
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid;
  }
  thead {
    display: table-header-group;
  }
  tr,
  img {
    page-break-inside: avoid;
  }
  img {
    max-width: 100% !important;
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3;
  }
  h2,
  h3 {
    page-break-after: avoid;
  }
  select {
    background: #fff !important;
  }
  .navbar {
    display: none;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .btn > .caret,
  .dropup > .btn > .caret {
    border-top-color: #000 !important;
  }
  .label {
    border: 1px solid #000;
  }
  .table {
    border-collapse: collapse !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
}
@font-face {
  font-family: "Glyphicons Halflings";
  src: url("../fonts/glyphicons-halflings-regular.eot");
  src: url("../fonts/glyphicons-halflings-regular.eot?#iefix")
      format("embedded-opentype"),
    url("../fonts/glyphicons-halflings-regular.woff") format("woff"),
    url("../fonts/glyphicons-halflings-regular.ttf") format("truetype"),
    url("../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular")
      format("svg");
}
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: "Glyphicons Halflings";
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.glyphicon-asterisk:before {
  content: "\2a";
}
.glyphicon-plus:before {
  content: "\2b";
}
.glyphicon-euro:before {
  content: "\20ac";
}
.glyphicon-minus:before {
  content: "\2212";
}
.glyphicon-cloud:before {
  content: "\2601";
}
.glyphicon-envelope:before {
  content: "\2709";
}
.glyphicon-pencil:before {
  content: "\270f";
}
.glyphicon-glass:before {
  content: "\e001";
}
.glyphicon-music:before {
  content: "\e002";
}
.glyphicon-search:before {
  content: "\e003";
}
.glyphicon-heart:before {
  content: "\e005";
}
.glyphicon-star:before {
  content: "\e006";
}
.glyphicon-star-empty:before {
  content: "\e007";
}
.glyphicon-user:before {
  content: "\e008";
}
.glyphicon-film:before {
  content: "\e009";
}
.glyphicon-th-large:before {
  content: "\e010";
}
.glyphicon-th:before {
  content: "\e011";
}
.glyphicon-th-list:before {
  content: "\e012";
}
.glyphicon-ok:before {
  content: "\e013";
}
.glyphicon-remove:before {
  content: "\e014";
}
.glyphicon-zoom-in:before {
  content: "\e015";
}
.glyphicon-zoom-out:before {
  content: "\e016";
}
.glyphicon-off:before {
  content: "\e017";
}
.glyphicon-signal:before {
  content: "\e018";
}
.glyphicon-cog:before {
  content: "\e019";
}
.glyphicon-trash:before {
  content: "\e020";
}
.glyphicon-home:before {
  content: "\e021";
}
.glyphicon-file:before {
  content: "\e022";
}
.glyphicon-time:before {
  content: "\e023";
}
.glyphicon-road:before {
  content: "\e024";
}
.glyphicon-download-alt:before {
  content: "\e025";
}
.glyphicon-download:before {
  content: "\e026";
}
.glyphicon-upload:before {
  content: "\e027";
}
.glyphicon-inbox:before {
  content: "\e028";
}
.glyphicon-play-circle:before {
  content: "\e029";
}
.glyphicon-repeat:before {
  content: "\e030";
}
.glyphicon-refresh:before {
  content: "\e031";
}
.glyphicon-list-alt:before {
  content: "\e032";
}
.glyphicon-lock:before {
  content: "\e033";
}
.glyphicon-flag:before {
  content: "\e034";
}
.glyphicon-headphones:before {
  content: "\e035";
}
.glyphicon-volume-off:before {
  content: "\e036";
}
.glyphicon-volume-down:before {
  content: "\e037";
}
.glyphicon-volume-up:before {
  content: "\e038";
}
.glyphicon-qrcode:before {
  content: "\e039";
}
.glyphicon-barcode:before {
  content: "\e040";
}
.glyphicon-tag:before {
  content: "\e041";
}
.glyphicon-tags:before {
  content: "\e042";
}
.glyphicon-book:before {
  content: "\e043";
}
.glyphicon-bookmark:before {
  content: "\e044";
}
.glyphicon-print:before {
  content: "\e045";
}
.glyphicon-camera:before {
  content: "\e046";
}
.glyphicon-font:before {
  content: "\e047";
}
.glyphicon-bold:before {
  content: "\e048";
}
.glyphicon-italic:before {
  content: "\e049";
}
.glyphicon-text-height:before {
  content: "\e050";
}
.glyphicon-text-width:before {
  content: "\e051";
}
.glyphicon-align-left:before {
  content: "\e052";
}
.glyphicon-align-center:before {
  content: "\e053";
}
.glyphicon-align-right:before {
  content: "\e054";
}
.glyphicon-align-justify:before {
  content: "\e055";
}
.glyphicon-list:before {
  content: "\e056";
}
.glyphicon-indent-left:before {
  content: "\e057";
}
.glyphicon-indent-right:before {
  content: "\e058";
}
.glyphicon-facetime-video:before {
  content: "\e059";
}
.glyphicon-picture:before {
  content: "\e060";
}
.glyphicon-map-marker:before {
  content: "\e062";
}
.glyphicon-adjust:before {
  content: "\e063";
}
.glyphicon-tint:before {
  content: "\e064";
}
.glyphicon-edit:before {
  content: "\e065";
}
.glyphicon-share:before {
  content: "\e066";
}
.glyphicon-check:before {
  content: "\e067";
}
.glyphicon-move:before {
  content: "\e068";
}
.glyphicon-step-backward:before {
  content: "\e069";
}
.glyphicon-fast-backward:before {
  content: "\e070";
}
.glyphicon-backward:before {
  content: "\e071";
}
.glyphicon-play:before {
  content: "\e072";
}
.glyphicon-pause:before {
  content: "\e073";
}
.glyphicon-stop:before {
  content: "\e074";
}
.glyphicon-forward:before {
  content: "\e075";
}
.glyphicon-fast-forward:before {
  content: "\e076";
}
.glyphicon-step-forward:before {
  content: "\e077";
}
.glyphicon-eject:before {
  content: "\e078";
}
.glyphicon-chevron-left:before {
  content: "\e079";
}
.glyphicon-chevron-right:before {
  content: "\e080";
}
.glyphicon-plus-sign:before {
  content: "\e081";
}
.glyphicon-minus-sign:before {
  content: "\e082";
}
.glyphicon-remove-sign:before {
  content: "\e083";
}
.glyphicon-ok-sign:before {
  content: "\e084";
}
.glyphicon-question-sign:before {
  content: "\e085";
}
.glyphicon-info-sign:before {
  content: "\e086";
}
.glyphicon-screenshot:before {
  content: "\e087";
}
.glyphicon-remove-circle:before {
  content: "\e088";
}
.glyphicon-ok-circle:before {
  content: "\e089";
}
.glyphicon-ban-circle:before {
  content: "\e090";
}
.glyphicon-arrow-left:before {
  content: "\e091";
}
.glyphicon-arrow-right:before {
  content: "\e092";
}
.glyphicon-arrow-up:before {
  content: "\e093";
}
.glyphicon-arrow-down:before {
  content: "\e094";
}
.glyphicon-share-alt:before {
  content: "\e095";
}
.glyphicon-resize-full:before {
  content: "\e096";
}
.glyphicon-resize-small:before {
  content: "\e097";
}
.glyphicon-exclamation-sign:before {
  content: "\e101";
}
.glyphicon-gift:before {
  content: "\e102";
}
.glyphicon-leaf:before {
  content: "\e103";
}
.glyphicon-fire:before {
  content: "\e104";
}
.glyphicon-eye-open:before {
  content: "\e105";
}
.glyphicon-eye-close:before {
  content: "\e106";
}
.glyphicon-warning-sign:before {
  content: "\e107";
}
.glyphicon-plane:before {
  content: "\e108";
}
.glyphicon-calendar:before {
  content: "\e109";
}
.glyphicon-random:before {
  content: "\e110";
}
.glyphicon-comment:before {
  content: "\e111";
}
.glyphicon-magnet:before {
  content: "\e112";
}
.glyphicon-chevron-up:before {
  content: "\e113";
}
.glyphicon-chevron-down:before {
  content: "\e114";
}
.glyphicon-retweet:before {
  content: "\e115";
}
.glyphicon-shopping-cart:before {
  content: "\e116";
}
.glyphicon-folder-close:before {
  content: "\e117";
}
.glyphicon-folder-open:before {
  content: "\e118";
}
.glyphicon-resize-vertical:before {
  content: "\e119";
}
.glyphicon-resize-horizontal:before {
  content: "\e120";
}
.glyphicon-hdd:before {
  content: "\e121";
}
.glyphicon-bullhorn:before {
  content: "\e122";
}
.glyphicon-bell:before {
  content: "\e123";
}
.glyphicon-certificate:before {
  content: "\e124";
}
.glyphicon-thumbs-up:before {
  content: "\e125";
}
.glyphicon-thumbs-down:before {
  content: "\e126";
}
.glyphicon-hand-right:before {
  content: "\e127";
}
.glyphicon-hand-left:before {
  content: "\e128";
}
.glyphicon-hand-up:before {
  content: "\e129";
}
.glyphicon-hand-down:before {
  content: "\e130";
}
.glyphicon-circle-arrow-right:before {
  content: "\e131";
}
.glyphicon-circle-arrow-left:before {
  content: "\e132";
}
.glyphicon-circle-arrow-up:before {
  content: "\e133";
}
.glyphicon-circle-arrow-down:before {
  content: "\e134";
}
.glyphicon-globe:before {
  content: "\e135";
}
.glyphicon-wrench:before {
  content: "\e136";
}
.glyphicon-tasks:before {
  content: "\e137";
}
.glyphicon-filter:before {
  content: "\e138";
}
.glyphicon-briefcase:before {
  content: "\e139";
}
.glyphicon-fullscreen:before {
  content: "\e140";
}
.glyphicon-dashboard:before {
  content: "\e141";
}
.glyphicon-paperclip:before {
  content: "\e142";
}
.glyphicon-heart-empty:before {
  content: "\e143";
}
.glyphicon-link:before {
  content: "\e144";
}
.glyphicon-phone:before {
  content: "\e145";
}
.glyphicon-pushpin:before {
  content: "\e146";
}
.glyphicon-usd:before {
  content: "\e148";
}
.glyphicon-gbp:before {
  content: "\e149";
}
.glyphicon-sort:before {
  content: "\e150";
}
.glyphicon-sort-by-alphabet:before {
  content: "\e151";
}
.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152";
}
.glyphicon-sort-by-order:before {
  content: "\e153";
}
.glyphicon-sort-by-order-alt:before {
  content: "\e154";
}
.glyphicon-sort-by-attributes:before {
  content: "\e155";
}
.glyphicon-sort-by-attributes-alt:before {
  content: "\e156";
}
.glyphicon-unchecked:before {
  content: "\e157";
}
.glyphicon-expand:before {
  content: "\e158";
}
.glyphicon-collapse-down:before {
  content: "\e159";
}
.glyphicon-collapse-up:before {
  content: "\e160";
}
.glyphicon-log-in:before {
  content: "\e161";
}
.glyphicon-flash:before {
  content: "\e162";
}
.glyphicon-log-out:before {
  content: "\e163";
}
.glyphicon-new-window:before {
  content: "\e164";
}
.glyphicon-record:before {
  content: "\e165";
}
.glyphicon-save:before {
  content: "\e166";
}
.glyphicon-open:before {
  content: "\e167";
}
.glyphicon-saved:before {
  content: "\e168";
}
.glyphicon-import:before {
  content: "\e169";
}
.glyphicon-export:before {
  content: "\e170";
}
.glyphicon-send:before {
  content: "\e171";
}
.glyphicon-floppy-disk:before {
  content: "\e172";
}
.glyphicon-floppy-saved:before {
  content: "\e173";
}
.glyphicon-floppy-remove:before {
  content: "\e174";
}
.glyphicon-floppy-save:before {
  content: "\e175";
}
.glyphicon-floppy-open:before {
  content: "\e176";
}
.glyphicon-credit-card:before {
  content: "\e177";
}
.glyphicon-transfer:before {
  content: "\e178";
}
.glyphicon-cutlery:before {
  content: "\e179";
}
.glyphicon-header:before {
  content: "\e180";
}
.glyphicon-compressed:before {
  content: "\e181";
}
.glyphicon-earphone:before {
  content: "\e182";
}
.glyphicon-phone-alt:before {
  content: "\e183";
}
.glyphicon-tower:before {
  content: "\e184";
}
.glyphicon-stats:before {
  content: "\e185";
}
.glyphicon-sd-video:before {
  content: "\e186";
}
.glyphicon-hd-video:before {
  content: "\e187";
}
.glyphicon-subtitles:before {
  content: "\e188";
}
.glyphicon-sound-stereo:before {
  content: "\e189";
}
.glyphicon-sound-dolby:before {
  content: "\e190";
}
.glyphicon-sound-5-1:before {
  content: "\e191";
}
.glyphicon-sound-6-1:before {
  content: "\e192";
}
.glyphicon-sound-7-1:before {
  content: "\e193";
}
.glyphicon-copyright-mark:before {
  content: "\e194";
}
.glyphicon-registration-mark:before {
  content: "\e195";
}
.glyphicon-cloud-download:before {
  content: "\e197";
}
.glyphicon-cloud-upload:before {
  content: "\e198";
}
.glyphicon-tree-conifer:before {
  content: "\e199";
}
.glyphicon-tree-deciduous:before {
  content: "\e200";
}
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
html {
  font-size: 10px;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333;
  background-color: #fff;
}
input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
}
a {
  color: #428bca;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #2a6496;
  text-decoration: underline;
}
a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
figure {
  margin: 0;
}
img {
  vertical-align: middle;
}
.img-responsive,
.thumbnail > img,
.thumbnail a > img,
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  display: block;
  width: 100% \9;
  max-width: 100%;
  height: auto;
}
.img-rounded {
  border-radius: 6px;
}
.img-thumbnail {
  display: inline-block;
  width: 100% \9;
  max-width: 100%;
  height: auto;
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.img-circle {
  border-radius: 50%;
}
hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eee;
}
.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto;
}
h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit;
}
h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777;
}
h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%;
}
h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%;
}
h1,
.h1 {
  font-size: 36px;
}
h2,
.h2 {
  font-size: 30px;
}
h3,
.h3 {
  font-size: 24px;
}
h4,
.h4 {
  font-size: 18px;
}
h5,
.h5 {
  font-size: 14px;
}
h6,
.h6 {
  font-size: 12px;
}
p {
  margin: 0 0 10px;
}
.lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .lead {
    font-size: 21px;
  }
}
small,
.small {
  font-size: 85%;
}
cite {
  font-style: normal;
}
mark,
.mark {
  padding: 0.2em;
  background-color: #fcf8e3;
}
.text-left {
  text-align: left;
}
.text-right {
  text-align: right;
}
.text-center {
  text-align: center;
}
.text-justify {
  text-align: justify;
}
.text-nowrap {
  white-space: nowrap;
}
.text-lowercase {
  text-transform: lowercase;
}
.text-uppercase {
  text-transform: uppercase;
}
.text-capitalize {
  text-transform: capitalize;
}
.text-muted {
  color: #777;
}
.text-primary {
  color: #428bca;
}
a.text-primary:hover {
  color: #3071a9;
}
.text-success {
  color: #3c763d;
}
a.text-success:hover {
  color: #2b542c;
}
.text-info {
  color: #31708f;
}
a.text-info:hover {
  color: #245269;
}
.text-warning {
  color: #8a6d3b;
}
a.text-warning:hover {
  color: #66512c;
}
.text-danger {
  color: #a94442;
}
a.text-danger:hover {
  color: #843534;
}
.bg-primary {
  color: #fff;
  background-color: #428bca;
}
a.bg-primary:hover {
  background-color: #3071a9;
}
.bg-success {
  background-color: #dff0d8;
}
a.bg-success:hover {
  background-color: #c1e2b3;
}
.bg-info {
  background-color: #d9edf7;
}
a.bg-info:hover {
  background-color: #afd9ee;
}
.bg-warning {
  background-color: #fcf8e3;
}
a.bg-warning:hover {
  background-color: #f7ecb5;
}
.bg-danger {
  background-color: #f2dede;
}
a.bg-danger:hover {
  background-color: #e4b9b9;
}
.page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eee;
}
ul,
ol {
  margin-top: 0;
  margin-bottom: 10px;
}
ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0;
}
.list-unstyled {
  padding-left: 0;
  list-style: none;
}
.list-inline {
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}
.list-inline > li {
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}
dl {
  margin-top: 0;
  margin-bottom: 20px;
}
dt,
dd {
  line-height: 1.42857143;
}
dt {
  font-weight: bold;
}
dd {
  margin-left: 0;
}
@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    overflow: hidden;
    clear: left;
    text-align: right;
    text-overflow: ellipsis;
    white-space: nowrap;
  }
  .dl-horizontal dd {
    margin-left: 180px;
  }
}
abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777;
}
.initialism {
  font-size: 90%;
  text-transform: uppercase;
}
blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eee;
}
blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0;
}
blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777;
}
blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: "\2014 \00A0";
}
.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  text-align: right;
  border-right: 5px solid #eee;
  border-left: 0;
}
.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: "";
}
.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: "\00A0 \2014";
}
blockquote:before,
blockquote:after {
  content: "";
}
address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857143;
}
code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace;
}
code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 4px;
}
kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
}
kbd kbd {
  padding: 0;
  font-size: 100%;
  -webkit-box-shadow: none;
  box-shadow: none;
}
pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #333;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px;
}
pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0;
}
.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll;
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.row {
  margin-right: -15px;
  margin-left: -15px;
}
.col-xs-1,
.col-sm-1,
.col-md-1,
.col-lg-1,
.col-xs-2,
.col-sm-2,
.col-md-2,
.col-lg-2,
.col-xs-3,
.col-sm-3,
.col-md-3,
.col-lg-3,
.col-xs-4,
.col-sm-4,
.col-md-4,
.col-lg-4,
.col-xs-5,
.col-sm-5,
.col-md-5,
.col-lg-5,
.col-xs-6,
.col-sm-6,
.col-md-6,
.col-lg-6,
.col-xs-7,
.col-sm-7,
.col-md-7,
.col-lg-7,
.col-xs-8,
.col-sm-8,
.col-md-8,
.col-lg-8,
.col-xs-9,
.col-sm-9,
.col-md-9,
.col-lg-9,
.col-xs-10,
.col-sm-10,
.col-md-10,
.col-lg-10,
.col-xs-11,
.col-sm-11,
.col-md-11,
.col-lg-11,
.col-xs-12,
.col-sm-12,
.col-md-12,
.col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11,
.col-xs-12 {
  float: left;
}
.col-xs-12 {
  width: 100%;
}
.col-xs-11 {
  width: 91.66666667%;
}
.col-xs-10 {
  width: 83.33333333%;
}
.col-xs-9 {
  width: 75%;
}
.col-xs-8 {
  width: 66.66666667%;
}
.col-xs-7 {
  width: 58.33333333%;
}
.col-xs-6 {
  width: 50%;
}
.col-xs-5 {
  width: 41.66666667%;
}
.col-xs-4 {
  width: 33.33333333%;
}
.col-xs-3 {
  width: 25%;
}
.col-xs-2 {
  width: 16.66666667%;
}
.col-xs-1 {
  width: 8.33333333%;
}
.col-xs-pull-12 {
  right: 100%;
}
.col-xs-pull-11 {
  right: 91.66666667%;
}
.col-xs-pull-10 {
  right: 83.33333333%;
}
.col-xs-pull-9 {
  right: 75%;
}
.col-xs-pull-8 {
  right: 66.66666667%;
}
.col-xs-pull-7 {
  right: 58.33333333%;
}
.col-xs-pull-6 {
  right: 50%;
}
.col-xs-pull-5 {
  right: 41.66666667%;
}
.col-xs-pull-4 {
  right: 33.33333333%;
}
.col-xs-pull-3 {
  right: 25%;
}
.col-xs-pull-2 {
  right: 16.66666667%;
}
.col-xs-pull-1 {
  right: 8.33333333%;
}
.col-xs-pull-0 {
  right: auto;
}
.col-xs-push-12 {
  left: 100%;
}
.col-xs-push-11 {
  left: 91.66666667%;
}
.col-xs-push-10 {
  left: 83.33333333%;
}
.col-xs-push-9 {
  left: 75%;
}
.col-xs-push-8 {
  left: 66.66666667%;
}
.col-xs-push-7 {
  left: 58.33333333%;
}
.col-xs-push-6 {
  left: 50%;
}
.col-xs-push-5 {
  left: 41.66666667%;
}
.col-xs-push-4 {
  left: 33.33333333%;
}
.col-xs-push-3 {
  left: 25%;
}
.col-xs-push-2 {
  left: 16.66666667%;
}
.col-xs-push-1 {
  left: 8.33333333%;
}
.col-xs-push-0 {
  left: auto;
}
.col-xs-offset-12 {
  margin-left: 100%;
}
.col-xs-offset-11 {
  margin-left: 91.66666667%;
}
.col-xs-offset-10 {
  margin-left: 83.33333333%;
}
.col-xs-offset-9 {
  margin-left: 75%;
}
.col-xs-offset-8 {
  margin-left: 66.66666667%;
}
.col-xs-offset-7 {
  margin-left: 58.33333333%;
}
.col-xs-offset-6 {
  margin-left: 50%;
}
.col-xs-offset-5 {
  margin-left: 41.66666667%;
}
.col-xs-offset-4 {
  margin-left: 33.33333333%;
}
.col-xs-offset-3 {
  margin-left: 25%;
}
.col-xs-offset-2 {
  margin-left: 16.66666667%;
}
.col-xs-offset-1 {
  margin-left: 8.33333333%;
}
.col-xs-offset-0 {
  margin-left: 0;
}
@media (min-width: 768px) {
  .col-sm-1,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9,
  .col-sm-10,
  .col-sm-11,
  .col-sm-12 {
    float: left;
  }
  .col-sm-12 {
    width: 100%;
  }
  .col-sm-11 {
    width: 91.66666667%;
  }
  .col-sm-10 {
    width: 83.33333333%;
  }
  .col-sm-9 {
    width: 75%;
  }
  .col-sm-8 {
    width: 66.66666667%;
  }
  .col-sm-7 {
    width: 58.33333333%;
  }
  .col-sm-6 {
    width: 50%;
  }
  .col-sm-5 {
    width: 41.66666667%;
  }
  .col-sm-4 {
    width: 33.33333333%;
  }
  .col-sm-3 {
    width: 25%;
  }
  .col-sm-2 {
    width: 16.66666667%;
  }
  .col-sm-1 {
    width: 8.33333333%;
  }
  .col-sm-pull-12 {
    right: 100%;
  }
  .col-sm-pull-11 {
    right: 91.66666667%;
  }
  .col-sm-pull-10 {
    right: 83.33333333%;
  }
  .col-sm-pull-9 {
    right: 75%;
  }
  .col-sm-pull-8 {
    right: 66.66666667%;
  }
  .col-sm-pull-7 {
    right: 58.33333333%;
  }
  .col-sm-pull-6 {
    right: 50%;
  }
  .col-sm-pull-5 {
    right: 41.66666667%;
  }
  .col-sm-pull-4 {
    right: 33.33333333%;
  }
  .col-sm-pull-3 {
    right: 25%;
  }
  .col-sm-pull-2 {
    right: 16.66666667%;
  }
  .col-sm-pull-1 {
    right: 8.33333333%;
  }
  .col-sm-pull-0 {
    right: auto;
  }
  .col-sm-push-12 {
    left: 100%;
  }
  .col-sm-push-11 {
    left: 91.66666667%;
  }
  .col-sm-push-10 {
    left: 83.33333333%;
  }
  .col-sm-push-9 {
    left: 75%;
  }
  .col-sm-push-8 {
    left: 66.66666667%;
  }
  .col-sm-push-7 {
    left: 58.33333333%;
  }
  .col-sm-push-6 {
    left: 50%;
  }
  .col-sm-push-5 {
    left: 41.66666667%;
  }
  .col-sm-push-4 {
    left: 33.33333333%;
  }
  .col-sm-push-3 {
    left: 25%;
  }
  .col-sm-push-2 {
    left: 16.66666667%;
  }
  .col-sm-push-1 {
    left: 8.33333333%;
  }
  .col-sm-push-0 {
    left: auto;
  }
  .col-sm-offset-12 {
    margin-left: 100%;
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-sm-offset-9 {
    margin-left: 75%;
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-sm-offset-6 {
    margin-left: 50%;
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-sm-offset-3 {
    margin-left: 25%;
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-sm-offset-0 {
    margin-left: 0;
  }
}
@media (min-width: 992px) {
  .col-md-1,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9,
  .col-md-10,
  .col-md-11,
  .col-md-12 {
    float: left;
  }
  .col-md-12 {
    width: 100%;
  }
  .col-md-11 {
    width: 91.66666667%;
  }
  .col-md-10 {
    width: 83.33333333%;
  }
  .col-md-9 {
    width: 75%;
  }
  .col-md-8 {
    width: 66.66666667%;
  }
  .col-md-7 {
    width: 58.33333333%;
  }
  .col-md-6 {
    width: 50%;
  }
  .col-md-5 {
    width: 41.66666667%;
  }
  .col-md-4 {
    width: 33.33333333%;
  }
  .col-md-3 {
    width: 25%;
  }
  .col-md-2 {
    width: 16.66666667%;
  }
  .col-md-1 {
    width: 8.33333333%;
  }
  .col-md-pull-12 {
    right: 100%;
  }
  .col-md-pull-11 {
    right: 91.66666667%;
  }
  .col-md-pull-10 {
    right: 83.33333333%;
  }
  .col-md-pull-9 {
    right: 75%;
  }
  .col-md-pull-8 {
    right: 66.66666667%;
  }
  .col-md-pull-7 {
    right: 58.33333333%;
  }
  .col-md-pull-6 {
    right: 50%;
  }
  .col-md-pull-5 {
    right: 41.66666667%;
  }
  .col-md-pull-4 {
    right: 33.33333333%;
  }
  .col-md-pull-3 {
    right: 25%;
  }
  .col-md-pull-2 {
    right: 16.66666667%;
  }
  .col-md-pull-1 {
    right: 8.33333333%;
  }
  .col-md-pull-0 {
    right: auto;
  }
  .col-md-push-12 {
    left: 100%;
  }
  .col-md-push-11 {
    left: 91.66666667%;
  }
  .col-md-push-10 {
    left: 83.33333333%;
  }
  .col-md-push-9 {
    left: 75%;
  }
  .col-md-push-8 {
    left: 66.66666667%;
  }
  .col-md-push-7 {
    left: 58.33333333%;
  }
  .col-md-push-6 {
    left: 50%;
  }
  .col-md-push-5 {
    left: 41.66666667%;
  }
  .col-md-push-4 {
    left: 33.33333333%;
  }
  .col-md-push-3 {
    left: 25%;
  }
  .col-md-push-2 {
    left: 16.66666667%;
  }
  .col-md-push-1 {
    left: 8.33333333%;
  }
  .col-md-push-0 {
    left: auto;
  }
  .col-md-offset-12 {
    margin-left: 100%;
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-md-offset-9 {
    margin-left: 75%;
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-md-offset-6 {
    margin-left: 50%;
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-md-offset-3 {
    margin-left: 25%;
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-md-offset-0 {
    margin-left: 0;
  }
}
@media (min-width: 1200px) {
  .col-lg-1,
  .col-lg-2,
  .col-lg-3,
  .col-lg-4,
  .col-lg-5,
  .col-lg-6,
  .col-lg-7,
  .col-lg-8,
  .col-lg-9,
  .col-lg-10,
  .col-lg-11,
  .col-lg-12 {
    float: left;
  }
  .col-lg-12 {
    width: 100%;
  }
  .col-lg-11 {
    width: 91.66666667%;
  }
  .col-lg-10 {
    width: 83.33333333%;
  }
  .col-lg-9 {
    width: 75%;
  }
  .col-lg-8 {
    width: 66.66666667%;
  }
  .col-lg-7 {
    width: 58.33333333%;
  }
  .col-lg-6 {
    width: 50%;
  }
  .col-lg-5 {
    width: 41.66666667%;
  }
  .col-lg-4 {
    width: 33.33333333%;
  }
  .col-lg-3 {
    width: 25%;
  }
  .col-lg-2 {
    width: 16.66666667%;
  }
  .col-lg-1 {
    width: 8.33333333%;
  }
  .col-lg-pull-12 {
    right: 100%;
  }
  .col-lg-pull-11 {
    right: 91.66666667%;
  }
  .col-lg-pull-10 {
    right: 83.33333333%;
  }
  .col-lg-pull-9 {
    right: 75%;
  }
  .col-lg-pull-8 {
    right: 66.66666667%;
  }
  .col-lg-pull-7 {
    right: 58.33333333%;
  }
  .col-lg-pull-6 {
    right: 50%;
  }
  .col-lg-pull-5 {
    right: 41.66666667%;
  }
  .col-lg-pull-4 {
    right: 33.33333333%;
  }
  .col-lg-pull-3 {
    right: 25%;
  }
  .col-lg-pull-2 {
    right: 16.66666667%;
  }
  .col-lg-pull-1 {
    right: 8.33333333%;
  }
  .col-lg-pull-0 {
    right: auto;
  }
  .col-lg-push-12 {
    left: 100%;
  }
  .col-lg-push-11 {
    left: 91.66666667%;
  }
  .col-lg-push-10 {
    left: 83.33333333%;
  }
  .col-lg-push-9 {
    left: 75%;
  }
  .col-lg-push-8 {
    left: 66.66666667%;
  }
  .col-lg-push-7 {
    left: 58.33333333%;
  }
  .col-lg-push-6 {
    left: 50%;
  }
  .col-lg-push-5 {
    left: 41.66666667%;
  }
  .col-lg-push-4 {
    left: 33.33333333%;
  }
  .col-lg-push-3 {
    left: 25%;
  }
  .col-lg-push-2 {
    left: 16.66666667%;
  }
  .col-lg-push-1 {
    left: 8.33333333%;
  }
  .col-lg-push-0 {
    left: auto;
  }
  .col-lg-offset-12 {
    margin-left: 100%;
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%;
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%;
  }
  .col-lg-offset-9 {
    margin-left: 75%;
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%;
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%;
  }
  .col-lg-offset-6 {
    margin-left: 50%;
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%;
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%;
  }
  .col-lg-offset-3 {
    margin-left: 25%;
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%;
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%;
  }
  .col-lg-offset-0 {
    margin-left: 0;
  }
}
table {
  background-color: transparent;
}
th {
  text-align: left;
}
.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px;
}
.table > thead > tr > th,
.table > tbody > tr > th,
.table > tfoot > tr > th,
.table > thead > tr > td,
.table > tbody > tr > td,
.table > tfoot > tr > td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd;
}
.table > thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd;
}
.table > caption + thead > tr:first-child > th,
.table > colgroup + thead > tr:first-child > th,
.table > thead:first-child > tr:first-child > th,
.table > caption + thead > tr:first-child > td,
.table > colgroup + thead > tr:first-child > td,
.table > thead:first-child > tr:first-child > td {
  border-top: 0;
}
.table > tbody + tbody {
  border-top: 2px solid #ddd;
}
.table .table {
  background-color: #fff;
}
.table-condensed > thead > tr > th,
.table-condensed > tbody > tr > th,
.table-condensed > tfoot > tr > th,
.table-condensed > thead > tr > td,
.table-condensed > tbody > tr > td,
.table-condensed > tfoot > tr > td {
  padding: 5px;
}
.table-bordered {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > tbody > tr > th,
.table-bordered > tfoot > tr > th,
.table-bordered > thead > tr > td,
.table-bordered > tbody > tr > td,
.table-bordered > tfoot > tr > td {
  border: 1px solid #ddd;
}
.table-bordered > thead > tr > th,
.table-bordered > thead > tr > td {
  border-bottom-width: 2px;
}
.table-striped > tbody > tr:nth-child(odd) > td,
.table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5;
}
table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none;
}
table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none;
}
.table > thead > tr > td.active,
.table > tbody > tr > td.active,
.table > tfoot > tr > td.active,
.table > thead > tr > th.active,
.table > tbody > tr > th.active,
.table > tfoot > tr > th.active,
.table > thead > tr.active > td,
.table > tbody > tr.active > td,
.table > tfoot > tr.active > td,
.table > thead > tr.active > th,
.table > tbody > tr.active > th,
.table > tfoot > tr.active > th {
  background-color: #f5f5f5;
}
.table-hover > tbody > tr > td.active:hover,
.table-hover > tbody > tr > th.active:hover,
.table-hover > tbody > tr.active:hover > td,
.table-hover > tbody > tr:hover > .active,
.table-hover > tbody > tr.active:hover > th {
  background-color: #e8e8e8;
}
.table > thead > tr > td.success,
.table > tbody > tr > td.success,
.table > tfoot > tr > td.success,
.table > thead > tr > th.success,
.table > tbody > tr > th.success,
.table > tfoot > tr > th.success,
.table > thead > tr.success > td,
.table > tbody > tr.success > td,
.table > tfoot > tr.success > td,
.table > thead > tr.success > th,
.table > tbody > tr.success > th,
.table > tfoot > tr.success > th {
  background-color: #dff0d8;
}
.table-hover > tbody > tr > td.success:hover,
.table-hover > tbody > tr > th.success:hover,
.table-hover > tbody > tr.success:hover > td,
.table-hover > tbody > tr:hover > .success,
.table-hover > tbody > tr.success:hover > th {
  background-color: #d0e9c6;
}
.table > thead > tr > td.info,
.table > tbody > tr > td.info,
.table > tfoot > tr > td.info,
.table > thead > tr > th.info,
.table > tbody > tr > th.info,
.table > tfoot > tr > th.info,
.table > thead > tr.info > td,
.table > tbody > tr.info > td,
.table > tfoot > tr.info > td,
.table > thead > tr.info > th,
.table > tbody > tr.info > th,
.table > tfoot > tr.info > th {
  background-color: #d9edf7;
}
.table-hover > tbody > tr > td.info:hover,
.table-hover > tbody > tr > th.info:hover,
.table-hover > tbody > tr.info:hover > td,
.table-hover > tbody > tr:hover > .info,
.table-hover > tbody > tr.info:hover > th {
  background-color: #c4e3f3;
}
.table > thead > tr > td.warning,
.table > tbody > tr > td.warning,
.table > tfoot > tr > td.warning,
.table > thead > tr > th.warning,
.table > tbody > tr > th.warning,
.table > tfoot > tr > th.warning,
.table > thead > tr.warning > td,
.table > tbody > tr.warning > td,
.table > tfoot > tr.warning > td,
.table > thead > tr.warning > th,
.table > tbody > tr.warning > th,
.table > tfoot > tr.warning > th {
  background-color: #fcf8e3;
}
.table-hover > tbody > tr > td.warning:hover,
.table-hover > tbody > tr > th.warning:hover,
.table-hover > tbody > tr.warning:hover > td,
.table-hover > tbody > tr:hover > .warning,
.table-hover > tbody > tr.warning:hover > th {
  background-color: #faf2cc;
}
.table > thead > tr > td.danger,
.table > tbody > tr > td.danger,
.table > tfoot > tr > td.danger,
.table > thead > tr > th.danger,
.table > tbody > tr > th.danger,
.table > tfoot > tr > th.danger,
.table > thead > tr.danger > td,
.table > tbody > tr.danger > td,
.table > tfoot > tr.danger > td,
.table > thead > tr.danger > th,
.table > tbody > tr.danger > th,
.table > tfoot > tr.danger > th {
  background-color: #f2dede;
}
.table-hover > tbody > tr > td.danger:hover,
.table-hover > tbody > tr > th.danger:hover,
.table-hover > tbody > tr.danger:hover > td,
.table-hover > tbody > tr:hover > .danger,
.table-hover > tbody > tr.danger:hover > th {
  background-color: #ebcccc;
}
@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-x: auto;
    overflow-y: hidden;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd;
  }
  .table-responsive > .table {
    margin-bottom: 0;
  }
  .table-responsive > .table > thead > tr > th,
  .table-responsive > .table > tbody > tr > th,
  .table-responsive > .table > tfoot > tr > th,
  .table-responsive > .table > thead > tr > td,
  .table-responsive > .table > tbody > tr > td,
  .table-responsive > .table > tfoot > tr > td {
    white-space: nowrap;
  }
  .table-responsive > .table-bordered {
    border: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:first-child,
  .table-responsive > .table-bordered > tbody > tr > th:first-child,
  .table-responsive > .table-bordered > tfoot > tr > th:first-child,
  .table-responsive > .table-bordered > thead > tr > td:first-child,
  .table-responsive > .table-bordered > tbody > tr > td:first-child,
  .table-responsive > .table-bordered > tfoot > tr > td:first-child {
    border-left: 0;
  }
  .table-responsive > .table-bordered > thead > tr > th:last-child,
  .table-responsive > .table-bordered > tbody > tr > th:last-child,
  .table-responsive > .table-bordered > tfoot > tr > th:last-child,
  .table-responsive > .table-bordered > thead > tr > td:last-child,
  .table-responsive > .table-bordered > tbody > tr > td:last-child,
  .table-responsive > .table-bordered > tfoot > tr > td:last-child {
    border-right: 0;
  }
  .table-responsive > .table-bordered > tbody > tr:last-child > th,
  .table-responsive > .table-bordered > tfoot > tr:last-child > th,
  .table-responsive > .table-bordered > tbody > tr:last-child > td,
  .table-responsive > .table-bordered > tfoot > tr:last-child > td {
    border-bottom: 0;
  }
}
fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0;
}
legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333;
  border: 0;
  border-bottom: 1px solid #e5e5e5;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold;
}
input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal;
}
input[type="file"] {
  display: block;
}
input[type="range"] {
  display: block;
  width: 100%;
}
select[multiple],
select[size] {
  height: auto;
}
input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
}
.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s,
    -webkit-box-shadow ease-in-out 0.15s;
  -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
}
.form-control::-moz-placeholder {
  color: #777;
  opacity: 1;
}
.form-control:-ms-input-placeholder {
  color: #777;
}
.form-control::-webkit-input-placeholder {
  color: #777;
}
.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  cursor: not-allowed;
  background-color: #eee;
  opacity: 1;
}
textarea.form-control {
  height: auto;
}
input[type="search"] {
  -webkit-appearance: none;
}
input[type="date"],
input[type="time"],
input[type="datetime-local"],
input[type="month"] {
  line-height: 34px;
  line-height: 1.42857143 \0;
}
input[type="date"].input-sm,
input[type="time"].input-sm,
input[type="datetime-local"].input-sm,
input[type="month"].input-sm {
  line-height: 30px;
}
input[type="date"].input-lg,
input[type="time"].input-lg,
input[type="datetime-local"].input-lg,
input[type="month"].input-lg {
  line-height: 46px;
}
.form-group {
  margin-bottom: 15px;
}
.radio,
.checkbox {
  position: relative;
  display: block;
  min-height: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
}
.radio label,
.checkbox label {
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer;
}
.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-top: 4px \9;
  margin-left: -20px;
}
.radio + .radio,
.checkbox + .checkbox {
  margin-top: -5px;
}
.radio-inline,
.checkbox-inline {
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  vertical-align: middle;
  cursor: pointer;
}
.radio-inline + .radio-inline,
.checkbox-inline + .checkbox-inline {
  margin-top: 0;
  margin-left: 10px;
}
input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed;
}
.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed;
}
.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed;
}
.form-control-static {
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0;
}
.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-right: 0;
  padding-left: 0;
}
.input-sm,
.form-horizontal .form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-sm {
  height: 30px;
  line-height: 30px;
}
textarea.input-sm,
select[multiple].input-sm {
  height: auto;
}
.input-lg,
.form-horizontal .form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
select.input-lg {
  height: 46px;
  line-height: 46px;
}
textarea.input-lg,
select[multiple].input-lg {
  height: auto;
}
.has-feedback {
  position: relative;
}
.has-feedback .form-control {
  padding-right: 42.5px;
}
.form-control-feedback {
  position: absolute;
  top: 25px;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
}
.input-lg + .form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px;
}
.input-sm + .form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px;
}
.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline {
  color: #3c763d;
}
.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
}
.has-success .input-group-addon {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #3c763d;
}
.has-success .form-control-feedback {
  color: #3c763d;
}
.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline {
  color: #8a6d3b;
}
.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
}
.has-warning .input-group-addon {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #8a6d3b;
}
.has-warning .form-control-feedback {
  color: #8a6d3b;
}
.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline {
  color: #a94442;
}
.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
}
.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
}
.has-error .input-group-addon {
  color: #a94442;
  background-color: #f2dede;
  border-color: #a94442;
}
.has-error .form-control-feedback {
  color: #a94442;
}
.has-feedback label.sr-only ~ .form-control-feedback {
  top: 0;
}
.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373;
}
@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto;
  }
  .form-inline .input-group > .form-control {
    width: 100%;
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0;
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0;
  }
}
.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: 7px;
  margin-top: 0;
  margin-bottom: 0;
}
.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px;
}
.form-horizontal .form-group {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right;
  }
}
.form-horizontal .has-feedback .form-control-feedback {
  top: 0;
  right: 15px;
}
@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 14.3px;
  }
}
@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
  }
}
.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.btn:focus,
.btn:active:focus,
.btn.active:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.btn:hover,
.btn:focus {
  color: #333;
  text-decoration: none;
}
.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  pointer-events: none;
  cursor: not-allowed;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
  opacity: 0.65;
}
.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc;
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad;
}
.btn-default:active,
.btn-default.active,
.open > .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled,
.btn-default[disabled],
fieldset[disabled] .btn-default,
.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled:active,
.btn-default[disabled]:active,
fieldset[disabled] .btn-default:active,
.btn-default.disabled.active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default.active {
  background-color: #fff;
  border-color: #ccc;
}
.btn-default .badge {
  color: #fff;
  background-color: #333;
}
.btn-primary {
  color: #fff;
  background-color: #428bca;
  border-color: #357ebd;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #3071a9;
  border-color: #285e8e;
}
.btn-primary:active,
.btn-primary.active,
.open > .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled,
.btn-primary[disabled],
fieldset[disabled] .btn-primary,
.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled:active,
.btn-primary[disabled]:active,
fieldset[disabled] .btn-primary:active,
.btn-primary.disabled.active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary.active {
  background-color: #428bca;
  border-color: #357ebd;
}
.btn-primary .badge {
  color: #428bca;
  background-color: #fff;
}
.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439;
}
.btn-success:active,
.btn-success.active,
.open > .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success[disabled],
fieldset[disabled] .btn-success,
.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled:active,
.btn-success[disabled]:active,
fieldset[disabled] .btn-success:active,
.btn-success.disabled.active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success.active {
  background-color: #5cb85c;
  border-color: #4cae4c;
}
.btn-success .badge {
  color: #5cb85c;
  background-color: #fff;
}
.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc;
}
.btn-info:active,
.btn-info.active,
.open > .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info[disabled],
fieldset[disabled] .btn-info,
.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled:active,
.btn-info[disabled]:active,
fieldset[disabled] .btn-info:active,
.btn-info.disabled.active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info.active {
  background-color: #5bc0de;
  border-color: #46b8da;
}
.btn-info .badge {
  color: #5bc0de;
  background-color: #fff;
}
.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512;
}
.btn-warning:active,
.btn-warning.active,
.open > .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning[disabled],
fieldset[disabled] .btn-warning,
.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled:active,
.btn-warning[disabled]:active,
fieldset[disabled] .btn-warning:active,
.btn-warning.disabled.active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning.active {
  background-color: #f0ad4e;
  border-color: #eea236;
}
.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff;
}
.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925;
}
.btn-danger:active,
.btn-danger.active,
.open > .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger[disabled],
fieldset[disabled] .btn-danger,
.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled:active,
.btn-danger[disabled]:active,
fieldset[disabled] .btn-danger:active,
.btn-danger.disabled.active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger.active {
  background-color: #d9534f;
  border-color: #d43f3a;
}
.btn-danger .badge {
  color: #d9534f;
  background-color: #fff;
}
.btn-link {
  font-weight: normal;
  color: #428bca;
  cursor: pointer;
  border-radius: 0;
}
.btn-link,
.btn-link:active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent;
}
.btn-link:hover,
.btn-link:focus {
  color: #2a6496;
  text-decoration: underline;
  background-color: transparent;
}
.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777;
  text-decoration: none;
}
.btn-lg,
.btn-group-lg > .btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
.btn-sm,
.btn-group-sm > .btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-xs,
.btn-group-xs > .btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
.btn-block {
  display: block;
  width: 100%;
}
.btn-block + .btn-block {
  margin-top: 5px;
}
input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%;
}
.fade {
  opacity: 0;
  -webkit-transition: opacity 0.15s linear;
  -o-transition: opacity 0.15s linear;
  transition: opacity 0.15s linear;
}
.fade.in {
  opacity: 1;
}
.collapse {
  display: none;
}
.collapse.in {
  display: block;
}
tr.collapse.in {
  display: table-row;
}
tbody.collapse.in {
  display: table-row-group;
}
.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition: height 0.35s ease;
  -o-transition: height 0.35s ease;
  transition: height 0.35s ease;
}
.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px solid;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
}
.dropdown {
  position: relative;
}
.dropdown-toggle:focus {
  outline: 0;
}
.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
}
.dropdown-menu.pull-right {
  right: 0;
  left: auto;
}
.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.dropdown-menu > li > a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus {
  color: #262626;
  text-decoration: none;
  background-color: #f5f5f5;
}
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  color: #fff;
  text-decoration: none;
  background-color: #428bca;
  outline: 0;
}
.dropdown-menu > .disabled > a,
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  color: #777;
}
.dropdown-menu > .disabled > a:hover,
.dropdown-menu > .disabled > a:focus {
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
  background-image: none;
  filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
}
.open > .dropdown-menu {
  display: block;
}
.open > a {
  outline: 0;
}
.dropdown-menu-right {
  right: 0;
  left: auto;
}
.dropdown-menu-left {
  right: auto;
  left: 0;
}
.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777;
  white-space: nowrap;
}
.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990;
}
.pull-right > .dropdown-menu {
  right: 0;
  left: auto;
}
.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  content: "";
  border-top: 0;
  border-bottom: 4px solid;
}
.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 1px;
}
@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto;
  }
  .navbar-right .dropdown-menu-left {
    right: auto;
    left: 0;
  }
}
.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle;
}
.btn-group > .btn,
.btn-group-vertical > .btn {
  position: relative;
  float: left;
}
.btn-group > .btn:hover,
.btn-group-vertical > .btn:hover,
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus,
.btn-group > .btn:active,
.btn-group-vertical > .btn:active,
.btn-group > .btn.active,
.btn-group-vertical > .btn.active {
  z-index: 2;
}
.btn-group > .btn:focus,
.btn-group-vertical > .btn:focus {
  outline: 0;
}
.btn-group .btn + .btn,
.btn-group .btn + .btn-group,
.btn-group .btn-group + .btn,
.btn-group .btn-group + .btn-group {
  margin-left: -1px;
}
.btn-toolbar {
  margin-left: -5px;
}
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left;
}
.btn-toolbar > .btn,
.btn-toolbar > .btn-group,
.btn-toolbar > .input-group {
  margin-left: 5px;
}
.btn-group > .btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0;
}
.btn-group > .btn:first-child {
  margin-left: 0;
}
.btn-group > .btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn:last-child:not(:first-child),
.btn-group > .dropdown-toggle:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group > .btn-group {
  float: left;
}
.btn-group > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group > .btn-group:first-child > .btn:last-child,
.btn-group > .btn-group:first-child > .dropdown-toggle {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.btn-group > .btn-group:last-child > .btn:first-child {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0;
}
.btn-group > .btn + .dropdown-toggle {
  padding-right: 8px;
  padding-left: 8px;
}
.btn-group > .btn-lg + .dropdown-toggle {
  padding-right: 12px;
  padding-left: 12px;
}
.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}
.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.btn .caret {
  margin-left: 0;
}
.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0;
}
.dropup .btn-lg .caret {
  border-width: 0 5px 5px;
}
.btn-group-vertical > .btn,
.btn-group-vertical > .btn-group,
.btn-group-vertical > .btn-group > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
}
.btn-group-vertical > .btn-group > .btn {
  float: none;
}
.btn-group-vertical > .btn + .btn,
.btn-group-vertical > .btn + .btn-group,
.btn-group-vertical > .btn-group + .btn,
.btn-group-vertical > .btn-group + .btn-group {
  margin-top: -1px;
  margin-left: 0;
}
.btn-group-vertical > .btn:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-left-radius: 4px;
}
.btn-group-vertical > .btn-group:not(:first-child):not(:last-child) > .btn {
  border-radius: 0;
}
.btn-group-vertical > .btn-group:first-child:not(:last-child) > .btn:last-child,
.btn-group-vertical
  > .btn-group:first-child:not(:last-child)
  > .dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.btn-group-vertical
  > .btn-group:last-child:not(:first-child)
  > .btn:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate;
}
.btn-group-justified > .btn,
.btn-group-justified > .btn-group {
  display: table-cell;
  float: none;
  width: 1%;
}
.btn-group-justified > .btn-group .btn {
  width: 100%;
}
.btn-group-justified > .btn-group .dropdown-menu {
  left: auto;
}
[data-toggle="buttons"] > .btn > input[type="radio"],
[data-toggle="buttons"] > .btn > input[type="checkbox"] {
  position: absolute;
  z-index: -1;
  filter: alpha(opacity=0);
  opacity: 0;
}
.input-group {
  position: relative;
  display: table;
  border-collapse: separate;
}
.input-group[class*="col-"] {
  float: none;
  padding-right: 0;
  padding-left: 0;
}
.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0;
}
.input-group-lg > .form-control,
.input-group-lg > .input-group-addon,
.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 6px;
}
select.input-group-lg > .form-control,
select.input-group-lg > .input-group-addon,
select.input-group-lg > .input-group-btn > .btn {
  height: 46px;
  line-height: 46px;
}
textarea.input-group-lg > .form-control,
textarea.input-group-lg > .input-group-addon,
textarea.input-group-lg > .input-group-btn > .btn,
select[multiple].input-group-lg > .form-control,
select[multiple].input-group-lg > .input-group-addon,
select[multiple].input-group-lg > .input-group-btn > .btn {
  height: auto;
}
.input-group-sm > .form-control,
.input-group-sm > .input-group-addon,
.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
}
select.input-group-sm > .form-control,
select.input-group-sm > .input-group-addon,
select.input-group-sm > .input-group-btn > .btn {
  height: 30px;
  line-height: 30px;
}
textarea.input-group-sm > .form-control,
textarea.input-group-sm > .input-group-addon,
textarea.input-group-sm > .input-group-btn > .btn,
select[multiple].input-group-sm > .form-control,
select[multiple].input-group-sm > .input-group-addon,
select[multiple].input-group-sm > .input-group-btn > .btn {
  height: auto;
}
.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell;
}
.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0;
}
.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle;
}
.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #555;
  text-align: center;
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 4px;
}
.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 3px;
}
.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 18px;
  border-radius: 6px;
}
.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0;
}
.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group > .btn,
.input-group-btn:first-child > .dropdown-toggle,
.input-group-btn:last-child > .btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child > .btn-group:not(:last-child) > .btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
.input-group-addon:first-child {
  border-right: 0;
}
.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group > .btn,
.input-group-btn:last-child > .dropdown-toggle,
.input-group-btn:first-child > .btn:not(:first-child),
.input-group-btn:first-child > .btn-group:not(:first-child) > .btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}
.input-group-addon:last-child {
  border-left: 0;
}
.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap;
}
.input-group-btn > .btn {
  position: relative;
}
.input-group-btn > .btn + .btn {
  margin-left: -1px;
}
.input-group-btn > .btn:hover,
.input-group-btn > .btn:focus,
.input-group-btn > .btn:active {
  z-index: 2;
}
.input-group-btn:first-child > .btn,
.input-group-btn:first-child > .btn-group {
  margin-right: -1px;
}
.input-group-btn:last-child > .btn,
.input-group-btn:last-child > .btn-group {
  margin-left: -1px;
}
.nav {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none;
}
.nav > li {
  position: relative;
  display: block;
}
.nav > li > a {
  position: relative;
  display: block;
  padding: 10px 15px;
}
.nav > li > a:hover,
.nav > li > a:focus {
  text-decoration: none;
  background-color: #eee;
}
.nav > li.disabled > a {
  color: #777;
}
.nav > li.disabled > a:hover,
.nav > li.disabled > a:focus {
  color: #777;
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
}
.nav .open > a,
.nav .open > a:hover,
.nav .open > a:focus {
  background-color: #eee;
  border-color: #428bca;
}
.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5;
}
.nav > li > a > img {
  max-width: none;
}
.nav-tabs {
  border-bottom: 1px solid #ddd;
}
.nav-tabs > li {
  float: left;
  margin-bottom: -1px;
}
.nav-tabs > li > a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0;
}
.nav-tabs > li > a:hover {
  border-color: #eee #eee #ddd;
}
.nav-tabs > li.active > a,
.nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
  color: #555;
  cursor: default;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent;
}
.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0;
}
.nav-tabs.nav-justified > li {
  float: none;
}
.nav-tabs.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-tabs.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-tabs.nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs.nav-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs.nav-justified > .active > a,
.nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs.nav-justified > .active > a,
  .nav-tabs.nav-justified > .active > a:hover,
  .nav-tabs.nav-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.nav-pills > li {
  float: left;
}
.nav-pills > li > a {
  border-radius: 4px;
}
.nav-pills > li + li {
  margin-left: 2px;
}
.nav-pills > li.active > a,
.nav-pills > li.active > a:hover,
.nav-pills > li.active > a:focus {
  color: #fff;
  background-color: #428bca;
}
.nav-stacked > li {
  float: none;
}
.nav-stacked > li + li {
  margin-top: 2px;
  margin-left: 0;
}
.nav-justified {
  width: 100%;
}
.nav-justified > li {
  float: none;
}
.nav-justified > li > a {
  margin-bottom: 5px;
  text-align: center;
}
.nav-justified > .dropdown .dropdown-menu {
  top: auto;
  left: auto;
}
@media (min-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
  .nav-justified > li > a {
    margin-bottom: 0;
  }
}
.nav-tabs-justified {
  border-bottom: 0;
}
.nav-tabs-justified > li > a {
  margin-right: 0;
  border-radius: 4px;
}
.nav-tabs-justified > .active > a,
.nav-tabs-justified > .active > a:hover,
.nav-tabs-justified > .active > a:focus {
  border: 1px solid #ddd;
}
@media (min-width: 768px) {
  .nav-tabs-justified > li > a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0;
  }
  .nav-tabs-justified > .active > a,
  .nav-tabs-justified > .active > a:hover,
  .nav-tabs-justified > .active > a:focus {
    border-bottom-color: #fff;
  }
}
.tab-content > .tab-pane {
  display: none;
}
.tab-content > .active {
  display: block;
}
.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent;
}
@media (min-width: 768px) {
  .navbar {
    border-radius: 4px;
  }
}
@media (min-width: 768px) {
  .navbar-header {
    float: left;
  }
}
.navbar-collapse {
  padding-right: 15px;
  padding-left: 15px;
  overflow-x: visible;
  -webkit-overflow-scrolling: touch;
  border-top: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
}
.navbar-collapse.in {
  overflow-y: auto;
}
@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important;
  }
  .navbar-collapse.in {
    overflow-y: visible;
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-right: 0;
    padding-left: 0;
  }
}
.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px;
}
@media (max-width: 480px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px;
  }
}
.container > .navbar-header,
.container-fluid > .navbar-header,
.container > .navbar-collapse,
.container-fluid > .navbar-collapse {
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 768px) {
  .container > .navbar-header,
  .container-fluid > .navbar-header,
  .container > .navbar-collapse,
  .container-fluid > .navbar-collapse {
    margin-right: 0;
    margin-left: 0;
  }
}
.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px;
}
@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0;
  }
}
.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030;
  -webkit-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
@media (min-width: 768px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0;
  }
}
.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px;
}
.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0;
}
.navbar-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px;
}
.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none;
}
@media (min-width: 768px) {
  .navbar > .container .navbar-brand,
  .navbar > .container-fluid .navbar-brand {
    margin-left: -15px;
  }
}
.navbar-toggle {
  position: relative;
  float: right;
  padding: 9px 10px;
  margin-top: 8px;
  margin-right: 15px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px;
}
.navbar-toggle:focus {
  outline: 0;
}
.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px;
}
.navbar-toggle .icon-bar + .icon-bar {
  margin-top: 4px;
}
@media (min-width: 768px) {
  .navbar-toggle {
    display: none;
  }
}
.navbar-nav {
  margin: 7.5px -15px;
}
.navbar-nav > li > a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px;
}
@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .navbar-nav .open .dropdown-menu > li > a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px;
  }
  .navbar-nav .open .dropdown-menu > li > a {
    line-height: 20px;
  }
  .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-nav .open .dropdown-menu > li > a:focus {
    background-image: none;
  }
}
@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
  .navbar-nav.navbar-right:last-child {
    margin-right: -15px;
  }
}
@media (min-width: 768px) {
  .navbar-left {
    float: left !important;
  }
  .navbar-right {
    float: right !important;
  }
}
.navbar-form {
  padding: 10px 15px;
  margin-top: 8px;
  margin-right: -15px;
  margin-bottom: 8px;
  margin-left: -15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1),
    0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1),
    0 1px 0 rgba(255, 255, 255, 0.1);
}
@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle;
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto;
  }
  .navbar-form .input-group > .form-control {
    width: 100%;
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle;
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0;
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0;
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0;
  }
}
@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px;
  }
}
@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    padding-top: 0;
    padding-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
  .navbar-form.navbar-right:last-child {
    margin-right: -15px;
  }
}
.navbar-nav > li > .dropdown-menu {
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.navbar-fixed-bottom .navbar-nav > li > .dropdown-menu {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px;
}
.navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px;
}
.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px;
}
.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px;
}
@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-right: 15px;
    margin-left: 15px;
  }
  .navbar-text.navbar-right:last-child {
    margin-right: 0;
  }
}
.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7;
}
.navbar-default .navbar-brand {
  color: #777;
}
.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent;
}
.navbar-default .navbar-text {
  color: #777;
}
.navbar-default .navbar-nav > li > a {
  color: #777;
}
.navbar-default .navbar-nav > li > a:hover,
.navbar-default .navbar-nav > li > a:focus {
  color: #333;
  background-color: transparent;
}
.navbar-default .navbar-nav > .active > a,
.navbar-default .navbar-nav > .active > a:hover,
.navbar-default .navbar-nav > .active > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
.navbar-default .navbar-nav > .disabled > a,
.navbar-default .navbar-nav > .disabled > a:hover,
.navbar-default .navbar-nav > .disabled > a:focus {
  color: #ccc;
  background-color: transparent;
}
.navbar-default .navbar-toggle {
  border-color: #ddd;
}
.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd;
}
.navbar-default .navbar-toggle .icon-bar {
  background-color: #888;
}
.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7;
}
.navbar-default .navbar-nav > .open > a,
.navbar-default .navbar-nav > .open > a:hover,
.navbar-default .navbar-nav > .open > a:focus {
  color: #555;
  background-color: #e7e7e7;
}
@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #333;
    background-color: transparent;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #555;
    background-color: #e7e7e7;
  }
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #ccc;
    background-color: transparent;
  }
}
.navbar-default .navbar-link {
  color: #777;
}
.navbar-default .navbar-link:hover {
  color: #333;
}
.navbar-default .btn-link {
  color: #777;
}
.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333;
}
.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc;
}
.navbar-inverse {
  background-color: #222;
  border-color: #080808;
}
.navbar-inverse .navbar-brand {
  color: #777;
}
.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-text {
  color: #777;
}
.navbar-inverse .navbar-nav > li > a {
  color: #777;
}
.navbar-inverse .navbar-nav > li > a:hover,
.navbar-inverse .navbar-nav > li > a:focus {
  color: #fff;
  background-color: transparent;
}
.navbar-inverse .navbar-nav > .active > a,
.navbar-inverse .navbar-nav > .active > a:hover,
.navbar-inverse .navbar-nav > .active > a:focus {
  color: #fff;
  background-color: #080808;
}
.navbar-inverse .navbar-nav > .disabled > a,
.navbar-inverse .navbar-nav > .disabled > a:hover,
.navbar-inverse .navbar-nav > .disabled > a:focus {
  color: #444;
  background-color: transparent;
}
.navbar-inverse .navbar-toggle {
  border-color: #333;
}
.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333;
}
.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010;
}
.navbar-inverse .navbar-nav > .open > a,
.navbar-inverse .navbar-nav > .open > a:hover,
.navbar-inverse .navbar-nav > .open > a:focus {
  color: #fff;
  background-color: #080808;
}
@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu > .dropdown-header {
    border-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a {
    color: #777;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #fff;
    background-color: transparent;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #fff;
    background-color: #080808;
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #444;
    background-color: transparent;
  }
}
.navbar-inverse .navbar-link {
  color: #777;
}
.navbar-inverse .navbar-link:hover {
  color: #fff;
}
.navbar-inverse .btn-link {
  color: #777;
}
.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff;
}
.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444;
}
.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px;
}
.breadcrumb > li {
  display: inline-block;
}
.breadcrumb > li + li:before {
  padding: 0 5px;
  color: #ccc;
  content: "/\00a0";
}
.breadcrumb > .active {
  color: #777;
}
.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li > a,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #428bca;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px;
}
.pagination > li > a:hover,
.pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
  color: #2a6496;
  background-color: #eee;
  border-color: #ddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: #fff;
  cursor: default;
  background-color: #428bca;
  border-color: #428bca;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
  border-color: #ddd;
}
.pagination-lg > li > a,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}
.pagination-sm > li > a,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
.pager {
  padding-left: 0;
  margin: 20px 0;
  text-align: center;
  list-style: none;
}
.pager li {
  display: inline;
}
.pager li > a,
.pager li > span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px;
}
.pager li > a:hover,
.pager li > a:focus {
  text-decoration: none;
  background-color: #eee;
}
.pager .next > a,
.pager .next > span {
  float: right;
}
.pager .previous > a,
.pager .previous > span {
  float: left;
}
.pager .disabled > a,
.pager .disabled > a:hover,
.pager .disabled > a:focus,
.pager .disabled > span {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
}
.label {
  display: inline;
  padding: 0.2em 0.6em 0.3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: 0.25em;
}
a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
.label:empty {
  display: none;
}
.btn .label {
  position: relative;
  top: -1px;
}
.label-default {
  background-color: #777;
}
.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e;
}
.label-primary {
  background-color: #428bca;
}
.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #3071a9;
}
.label-success {
  background-color: #5cb85c;
}
.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44;
}
.label-info {
  background-color: #5bc0de;
}
.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5;
}
.label-warning {
  background-color: #f0ad4e;
}
.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f;
}
.label-danger {
  background-color: #d9534f;
}
.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c;
}
.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  background-color: #777;
  border-radius: 10px;
}
.badge:empty {
  display: none;
}
.btn .badge {
  position: relative;
  top: -1px;
}
.btn-xs .badge {
  top: 0;
  padding: 1px 5px;
}
a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer;
}
a.list-group-item.active > .badge,
.nav-pills > .active > a > .badge {
  color: #428bca;
  background-color: #fff;
}
.nav-pills > li > a > .badge {
  margin-left: 3px;
}
.jumbotron {
  padding: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eee;
}
.jumbotron h1,
.jumbotron .h1 {
  color: inherit;
}
.jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200;
}
.jumbotron > hr {
  border-top-color: #d5d5d5;
}
.container .jumbotron {
  border-radius: 6px;
}
.jumbotron .container {
  max-width: 100%;
}
@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px;
  }
  .container .jumbotron {
    padding-right: 60px;
    padding-left: 60px;
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 63px;
  }
}
.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}
.thumbnail > img,
.thumbnail a > img {
  margin-right: auto;
  margin-left: auto;
}
a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #428bca;
}
.thumbnail .caption {
  padding: 9px;
  color: #333;
}
.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px;
}
.alert h4 {
  margin-top: 0;
  color: inherit;
}
.alert .alert-link {
  font-weight: bold;
}
.alert > p,
.alert > ul {
  margin-bottom: 0;
}
.alert > p + p {
  margin-top: 5px;
}
.alert-dismissable,
.alert-dismissible {
  padding-right: 35px;
}
.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit;
}
.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.alert-success hr {
  border-top-color: #c9e2b3;
}
.alert-success .alert-link {
  color: #2b542c;
}
.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.alert-info hr {
  border-top-color: #a6e1ec;
}
.alert-info .alert-link {
  color: #245269;
}
.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.alert-warning hr {
  border-top-color: #f7e1b5;
}
.alert-warning .alert-link {
  color: #66512c;
}
.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.alert-danger hr {
  border-top-color: #e4b9c0;
}
.alert-danger .alert-link {
  color: #843534;
}
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-o-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  height: 20px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}
.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #428bca;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width 0.6s ease;
  -o-transition: width 0.6s ease;
  transition: width 0.6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: -o-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  -webkit-background-size: 40px 40px;
  background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar[aria-valuenow="1"],
.progress-bar[aria-valuenow="2"] {
  min-width: 30px;
}
.progress-bar[aria-valuenow="0"] {
  min-width: 30px;
  color: #777;
  background-color: transparent;
  background-image: none;
  -webkit-box-shadow: none;
  box-shadow: none;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: -o-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: -o-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: -o-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: -o-linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
  background-image: linear-gradient(
    45deg,
    rgba(255, 255, 255, 0.15) 25%,
    transparent 25%,
    transparent 50%,
    rgba(255, 255, 255, 0.15) 50%,
    rgba(255, 255, 255, 0.15) 75%,
    transparent 75%,
    transparent
  );
}
.media,
.media-body {
  overflow: hidden;
  zoom: 1;
}
.media,
.media .media {
  margin-top: 15px;
}
.media:first-child {
  margin-top: 0;
}
.media-object {
  display: block;
}
.media-heading {
  margin: 0 0 5px;
}
.media > .pull-left {
  margin-right: 10px;
}
.media > .pull-right {
  margin-left: 10px;
}
.media-list {
  padding-left: 0;
  list-style: none;
}
.list-group {
  padding-left: 0;
  margin-bottom: 20px;
}
.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd;
}
.list-group-item:first-child {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}
.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px;
}
.list-group-item > .badge {
  float: right;
}
.list-group-item > .badge + .badge {
  margin-right: 5px;
}
a.list-group-item {
  color: #555;
}
a.list-group-item .list-group-item-heading {
  color: #333;
}
a.list-group-item:hover,
a.list-group-item:focus {
  color: #555;
  text-decoration: none;
  background-color: #f5f5f5;
}
.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  color: #777;
  background-color: #eee;
}
.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit;
}
.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777;
}
.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #428bca;
  border-color: #428bca;
}
.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading > small,
.list-group-item.active:hover .list-group-item-heading > small,
.list-group-item.active:focus .list-group-item-heading > small,
.list-group-item.active .list-group-item-heading > .small,
.list-group-item.active:hover .list-group-item-heading > .small,
.list-group-item.active:focus .list-group-item-heading > .small {
  color: inherit;
}
.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #e1edf7;
}
.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8;
}
a.list-group-item-success {
  color: #3c763d;
}
a.list-group-item-success .list-group-item-heading {
  color: inherit;
}
a.list-group-item-success:hover,
a.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6;
}
a.list-group-item-success.active,
a.list-group-item-success.active:hover,
a.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d;
}
.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7;
}
a.list-group-item-info {
  color: #31708f;
}
a.list-group-item-info .list-group-item-heading {
  color: inherit;
}
a.list-group-item-info:hover,
a.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3;
}
a.list-group-item-info.active,
a.list-group-item-info.active:hover,
a.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f;
}
.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
}
a.list-group-item-warning {
  color: #8a6d3b;
}
a.list-group-item-warning .list-group-item-heading {
  color: inherit;
}
a.list-group-item-warning:hover,
a.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc;
}
a.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b;
}
.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede;
}
a.list-group-item-danger {
  color: #a94442;
}
a.list-group-item-danger .list-group-item-heading {
  color: inherit;
}
a.list-group-item-danger:hover,
a.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc;
}
a.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442;
}
.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px;
}
.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3;
}
.panel {
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.panel-body {
  padding: 15px;
}
.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel-heading > .dropdown .dropdown-toggle {
  color: inherit;
}
.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit;
}
.panel-title > a {
  color: inherit;
}
.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .list-group {
  margin-bottom: 0;
}
.panel > .list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0;
}
.panel > .list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel-heading + .list-group .list-group-item:first-child {
  border-top-width: 0;
}
.list-group + .panel-footer {
  border-top-width: 0;
}
.panel > .table,
.panel > .table-responsive > .table,
.panel > .panel-collapse > .table {
  margin-bottom: 0;
}
.panel > .table:first-child,
.panel > .table-responsive:first-child > .table:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:first-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > thead:first-child
  > tr:first-child
  td:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:first-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > tbody:first-child
  > tr:first-child
  td:first-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:first-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > thead:first-child
  > tr:first-child
  th:first-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:first-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > tbody:first-child
  > tr:first-child
  th:first-child {
  border-top-left-radius: 3px;
}
.panel > .table:first-child > thead:first-child > tr:first-child td:last-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > thead:first-child
  > tr:first-child
  td:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child td:last-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > tbody:first-child
  > tr:first-child
  td:last-child,
.panel > .table:first-child > thead:first-child > tr:first-child th:last-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > thead:first-child
  > tr:first-child
  th:last-child,
.panel > .table:first-child > tbody:first-child > tr:first-child th:last-child,
.panel
  > .table-responsive:first-child
  > .table:first-child
  > tbody:first-child
  > tr:first-child
  th:last-child {
  border-top-right-radius: 3px;
}
.panel > .table:last-child,
.panel > .table-responsive:last-child > .table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:first-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tbody:last-child
  > tr:last-child
  td:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:first-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tfoot:last-child
  > tr:last-child
  td:first-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:first-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tbody:last-child
  > tr:last-child
  th:first-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:first-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tfoot:last-child
  > tr:last-child
  th:first-child {
  border-bottom-left-radius: 3px;
}
.panel > .table:last-child > tbody:last-child > tr:last-child td:last-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tbody:last-child
  > tr:last-child
  td:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child td:last-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tfoot:last-child
  > tr:last-child
  td:last-child,
.panel > .table:last-child > tbody:last-child > tr:last-child th:last-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tbody:last-child
  > tr:last-child
  th:last-child,
.panel > .table:last-child > tfoot:last-child > tr:last-child th:last-child,
.panel
  > .table-responsive:last-child
  > .table:last-child
  > tfoot:last-child
  > tr:last-child
  th:last-child {
  border-bottom-right-radius: 3px;
}
.panel > .panel-body + .table,
.panel > .panel-body + .table-responsive {
  border-top: 1px solid #ddd;
}
.panel > .table > tbody:first-child > tr:first-child th,
.panel > .table > tbody:first-child > tr:first-child td {
  border-top: 0;
}
.panel > .table-bordered,
.panel > .table-responsive > .table-bordered {
  border: 0;
}
.panel > .table-bordered > thead > tr > th:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:first-child,
.panel > .table-bordered > tbody > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:first-child,
.panel > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:first-child,
.panel > .table-bordered > thead > tr > td:first-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:first-child,
.panel > .table-bordered > tbody > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:first-child,
.panel > .table-bordered > tfoot > tr > td:first-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:first-child {
  border-left: 0;
}
.panel > .table-bordered > thead > tr > th:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > th:last-child,
.panel > .table-bordered > tbody > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > th:last-child,
.panel > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > th:last-child,
.panel > .table-bordered > thead > tr > td:last-child,
.panel > .table-responsive > .table-bordered > thead > tr > td:last-child,
.panel > .table-bordered > tbody > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tbody > tr > td:last-child,
.panel > .table-bordered > tfoot > tr > td:last-child,
.panel > .table-responsive > .table-bordered > tfoot > tr > td:last-child {
  border-right: 0;
}
.panel > .table-bordered > thead > tr:first-child > td,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > td,
.panel > .table-bordered > tbody > tr:first-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > td,
.panel > .table-bordered > thead > tr:first-child > th,
.panel > .table-responsive > .table-bordered > thead > tr:first-child > th,
.panel > .table-bordered > tbody > tr:first-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:first-child > th {
  border-bottom: 0;
}
.panel > .table-bordered > tbody > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > td,
.panel > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > td,
.panel > .table-bordered > tbody > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tbody > tr:last-child > th,
.panel > .table-bordered > tfoot > tr:last-child > th,
.panel > .table-responsive > .table-bordered > tfoot > tr:last-child > th {
  border-bottom: 0;
}
.panel > .table-responsive {
  margin-bottom: 0;
  border: 0;
}
.panel-group {
  margin-bottom: 20px;
}
.panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px;
}
.panel-group .panel + .panel {
  margin-top: 5px;
}
.panel-group .panel-heading {
  border-bottom: 0;
}
.panel-group .panel-heading + .panel-collapse > .panel-body {
  border-top: 1px solid #ddd;
}
.panel-group .panel-footer {
  border-top: 0;
}
.panel-group .panel-footer + .panel-collapse .panel-body {
  border-bottom: 1px solid #ddd;
}
.panel-default {
  border-color: #ddd;
}
.panel-default > .panel-heading {
  color: #333;
  background-color: #f5f5f5;
  border-color: #ddd;
}
.panel-default > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ddd;
}
.panel-default > .panel-heading .badge {
  color: #f5f5f5;
  background-color: #333;
}
.panel-default > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ddd;
}
.panel-primary {
  border-color: #428bca;
}
.panel-primary > .panel-heading {
  color: #fff;
  background-color: #428bca;
  border-color: #428bca;
}
.panel-primary > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #428bca;
}
.panel-primary > .panel-heading .badge {
  color: #428bca;
  background-color: #fff;
}
.panel-primary > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #428bca;
}
.panel-success {
  border-color: #d6e9c6;
}
.panel-success > .panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6;
}
.panel-success > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #d6e9c6;
}
.panel-success > .panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d;
}
.panel-success > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #d6e9c6;
}
.panel-info {
  border-color: #bce8f1;
}
.panel-info > .panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1;
}
.panel-info > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #bce8f1;
}
.panel-info > .panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f;
}
.panel-info > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #bce8f1;
}
.panel-warning {
  border-color: #faebcc;
}
.panel-warning > .panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc;
}
.panel-warning > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #faebcc;
}
.panel-warning > .panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b;
}
.panel-warning > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #faebcc;
}
.panel-danger {
  border-color: #ebccd1;
}
.panel-danger > .panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1;
}
.panel-danger > .panel-heading + .panel-collapse > .panel-body {
  border-top-color: #ebccd1;
}
.panel-danger > .panel-heading .badge {
  color: #f2dede;
  background-color: #a94442;
}
.panel-danger > .panel-footer + .panel-collapse > .panel-body {
  border-bottom-color: #ebccd1;
}
.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden;
}
.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0;
}
.embed-responsive.embed-responsive-16by9 {
  padding-bottom: 56.25%;
}
.embed-responsive.embed-responsive-4by3 {
  padding-bottom: 75%;
}
.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15);
}
.well-lg {
  padding: 24px;
  border-radius: 6px;
}
.well-sm {
  padding: 9px;
  border-radius: 3px;
}
.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  filter: alpha(opacity=20);
  opacity: 0.2;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  filter: alpha(opacity=50);
  opacity: 0.5;
}
button.close {
  -webkit-appearance: none;
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0;
}
.modal-open {
  overflow: hidden;
}
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  outline: 0;
}
.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform 0.3s ease-out;
  -o-transition: -o-transform 0.3s ease-out;
  transition: transform 0.3s ease-out;
  -webkit-transform: translate3d(0, -25%, 0);
  -o-transform: translate3d(0, -25%, 0);
  transform: translate3d(0, -25%, 0);
}
.modal.in .modal-dialog {
  -webkit-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}
.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px;
}
.modal-content {
  position: relative;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  outline: 0;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
}
.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000;
}
.modal-backdrop.fade {
  filter: alpha(opacity=0);
  opacity: 0;
}
.modal-backdrop.in {
  filter: alpha(opacity=50);
  opacity: 0.5;
}
.modal-header {
  min-height: 16.42857143px;
  padding: 15px;
  border-bottom: 1px solid #e5e5e5;
}
.modal-header .close {
  margin-top: -2px;
}
.modal-title {
  margin: 0;
  line-height: 1.42857143;
}
.modal-body {
  position: relative;
  padding: 15px;
}
.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5;
}
.modal-footer .btn + .btn {
  margin-bottom: 0;
  margin-left: 5px;
}
.modal-footer .btn-group .btn + .btn {
  margin-left: -1px;
}
.modal-footer .btn-block + .btn-block {
  margin-left: 0;
}
.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}
@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto;
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    width: 300px;
  }
}
@media (min-width: 992px) {
  .modal-lg {
    width: 900px;
  }
}
.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-size: 12px;
  line-height: 1.4;
  visibility: visible;
  filter: alpha(opacity=0);
  opacity: 0;
}
.tooltip.in {
  filter: alpha(opacity=90);
  opacity: 0.9;
}
.tooltip.top {
  padding: 5px 0;
  margin-top: -3px;
}
.tooltip.right {
  padding: 0 5px;
  margin-left: 3px;
}
.tooltip.bottom {
  padding: 5px 0;
  margin-top: 3px;
}
.tooltip.left {
  padding: 0 5px;
  margin-left: -3px;
}
.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  text-decoration: none;
  background-color: #000;
  border-radius: 4px;
}
.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-left .tooltip-arrow {
  bottom: 0;
  left: 5px;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.top-right .tooltip-arrow {
  right: 5px;
  bottom: 0;
  border-width: 5px 5px 0;
  border-top-color: #000;
}
.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000;
}
.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000;
}
.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  left: 5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  right: 5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000;
}
.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  text-align: left;
  white-space: normal;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.popover.top {
  margin-top: -10px;
}
.popover.right {
  margin-left: 10px;
}
.popover.bottom {
  margin-top: 10px;
}
.popover.left {
  margin-left: -10px;
}
.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 18px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0;
}
.popover-content {
  padding: 9px 14px;
}
.popover > .arrow,
.popover > .arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.popover > .arrow {
  border-width: 11px;
}
.popover > .arrow:after {
  content: "";
  border-width: 10px;
}
.popover.top > .arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999;
  border-top-color: rgba(0, 0, 0, 0.25);
  border-bottom-width: 0;
}
.popover.top > .arrow:after {
  bottom: 1px;
  margin-left: -10px;
  content: " ";
  border-top-color: #fff;
  border-bottom-width: 0;
}
.popover.right > .arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999;
  border-right-color: rgba(0, 0, 0, 0.25);
  border-left-width: 0;
}
.popover.right > .arrow:after {
  bottom: -10px;
  left: 1px;
  content: " ";
  border-right-color: #fff;
  border-left-width: 0;
}
.popover.bottom > .arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999;
  border-bottom-color: rgba(0, 0, 0, 0.25);
}
.popover.bottom > .arrow:after {
  top: 1px;
  margin-left: -10px;
  content: " ";
  border-top-width: 0;
  border-bottom-color: #fff;
}
.popover.left > .arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999;
  border-left-color: rgba(0, 0, 0, 0.25);
}
.popover.left > .arrow:after {
  right: 1px;
  bottom: -10px;
  content: " ";
  border-right-width: 0;
  border-left-color: #fff;
}
.carousel {
  position: relative;
}
.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden;
}
.carousel-inner > .item {
  position: relative;
  display: none;
  -webkit-transition: 0.6s ease-in-out left;
  -o-transition: 0.6s ease-in-out left;
  transition: 0.6s ease-in-out left;
}
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
  line-height: 1;
}
.carousel-inner > .active,
.carousel-inner > .next,
.carousel-inner > .prev {
  display: block;
}
.carousel-inner > .active {
  left: 0;
}
.carousel-inner > .next,
.carousel-inner > .prev {
  position: absolute;
  top: 0;
  width: 100%;
}
.carousel-inner > .next {
  left: 100%;
}
.carousel-inner > .prev {
  left: -100%;
}
.carousel-inner > .next.left,
.carousel-inner > .prev.right {
  left: 0;
}
.carousel-inner > .active.left {
  left: -100%;
}
.carousel-inner > .active.right {
  left: 100%;
}
.carousel-control {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 15%;
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  filter: alpha(opacity=50);
  opacity: 0.5;
}
.carousel-control.left {
  background-image: -webkit-linear-gradient(
    left,
    rgba(0, 0, 0, 0.5) 0%,
    rgba(0, 0, 0, 0.0001) 100%
  );
  background-image: -o-linear-gradient(
    left,
    rgba(0, 0, 0, 0.5) 0%,
    rgba(0, 0, 0, 0.0001) 100%
  );
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(rgba(0, 0, 0, 0.5)),
    to(rgba(0, 0, 0, 0.0001))
  );
  background-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0.5) 0%,
    rgba(0, 0, 0, 0.0001) 100%
  );
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#80000000',endColorstr='#00000000',GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control.right {
  right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(
    left,
    rgba(0, 0, 0, 0.0001) 0%,
    rgba(0, 0, 0, 0.5) 100%
  );
  background-image: -o-linear-gradient(
    left,
    rgba(0, 0, 0, 0.0001) 0%,
    rgba(0, 0, 0, 0.5) 100%
  );
  background-image: -webkit-gradient(
    linear,
    left top,
    right top,
    from(rgba(0, 0, 0, 0.0001)),
    to(rgba(0, 0, 0, 0.5))
  );
  background-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0.0001) 0%,
    rgba(0, 0, 0, 0.5) 100%
  );
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00000000',endColorstr='#80000000',GradientType=1);
  background-repeat: repeat-x;
}
.carousel-control:hover,
.carousel-control:focus {
  color: #fff;
  text-decoration: none;
  filter: alpha(opacity=90);
  outline: 0;
  opacity: 0.9;
}
.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
}
.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px;
}
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px;
}
.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  margin-top: -10px;
  font-family: serif;
}
.carousel-control .icon-prev:before {
  content: "\2039";
}
.carousel-control .icon-next:before {
  content: "\203a";
}
.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none;
}
.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: rgba(0, 0, 0, 0);
  border: 1px solid #fff;
  border-radius: 10px;
}
.carousel-indicators .active {
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #fff;
}
.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
}
.carousel-caption .btn {
  text-shadow: none;
}
@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -15px;
    font-size: 30px;
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -15px;
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -15px;
  }
  .carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 30px;
  }
  .carousel-indicators {
    bottom: 20px;
  }
}
.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:before,
.btn-group-vertical > .btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: " ";
}
.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical > .btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-footer:after {
  clear: both;
}
.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto;
}
.pull-right {
  float: right !important;
}
.pull-left {
  float: left !important;
}
.hide {
  display: none !important;
}
.show {
  display: block !important;
}
.invisible {
  visibility: hidden;
}
.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0;
}
.hidden {
  display: none !important;
  visibility: hidden !important;
}
.affix {
  position: fixed;
  -webkit-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
@-ms-viewport {
  width: device-width;
}
.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important;
}
.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important;
}
@media (max-width: 767px) {
  .visible-xs {
    display: block !important;
  }
  table.visible-xs {
    display: table;
  }
  tr.visible-xs {
    display: table-row !important;
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important;
  }
}
@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important;
  }
  table.visible-sm {
    display: table;
  }
  tr.visible-sm {
    display: table-row !important;
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important;
  }
  table.visible-md {
    display: table;
  }
  tr.visible-md {
    display: table-row !important;
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg {
    display: block !important;
  }
  table.visible-lg {
    display: table;
  }
  tr.visible-lg {
    display: table-row !important;
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important;
  }
}
@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important;
  }
}
@media (max-width: 767px) {
  .hidden-xs {
    display: none !important;
  }
}
@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important;
  }
}
@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important;
  }
}
@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important;
  }
}
.visible-print {
  display: none !important;
}
@media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
}
.visible-print-block {
  display: none !important;
}
@media print {
  .visible-print-block {
    display: block !important;
  }
}
.visible-print-inline {
  display: none !important;
}
@media print {
  .visible-print-inline {
    display: inline !important;
  }
}
.visible-print-inline-block {
  display: none !important;
}
@media print {
  .visible-print-inline-block {
    display: inline-block !important;
  }
}
@media print {
  .hidden-print {
    display: none !important;
  }
}
.animated {
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -ms-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-duration: 0.5s;
  -moz-animation-duration: 0.5s;
  -ms-animation-duration: 0.5s;
  -o-animation-duration: 0.5s;
  animation-duration: 0.5s;
}
@-webkit-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-moz-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-o-keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@keyframes fadeIn {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
.fadeIn {
  -webkit-animation-name: fadeIn;
  -moz-animation-name: fadeIn;
  -o-animation-name: fadeIn;
  animation-name: fadeIn;
}
@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
@-moz-keyframes fadeInUp {
  0% {
    opacity: 0;
    -moz-transform: translateY(20px);
  }
  100% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
}
@-o-keyframes fadeInUp {
  0% {
    opacity: 0;
    -o-transform: translateY(20px);
  }
  100% {
    opacity: 1;
    -o-transform: translateY(0);
  }
}
@keyframes fadeInUp {
  0% {
    opacity: 0;
    transform: translateY(20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.fadeInUp {
  -webkit-animation-name: fadeInUp;
  -moz-animation-name: fadeInUp;
  -o-animation-name: fadeInUp;
  animation-name: fadeInUp;
}
@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
@-moz-keyframes fadeInDown {
  0% {
    opacity: 0;
    -moz-transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
}
@-o-keyframes fadeInDown {
  0% {
    opacity: 0;
    -o-transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    -o-transform: translateY(0);
  }
}
@keyframes fadeInDown {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  -moz-animation-name: fadeInDown;
  -o-animation-name: fadeInDown;
  animation-name: fadeInDown;
}
@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -moz-transform: translateX(-20px);
  }
  100% {
    opacity: 1;
    -moz-transform: translateX(0);
  }
}
@-o-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -o-transform: translateX(-20px);
  }
  100% {
    opacity: 1;
    -o-transform: translateX(0);
  }
}
@keyframes fadeInLeft {
  0% {
    opacity: 0;
    transform: translateX(-20px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}
.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  -moz-animation-name: fadeInLeft;
  -o-animation-name: fadeInLeft;
  animation-name: fadeInLeft;
}
@-webkit-keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translateX(20px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes fadeInRight {
  0% {
    opacity: 0;
    -moz-transform: translateX(20px);
  }
  100% {
    opacity: 1;
    -moz-transform: translateX(0);
  }
}
@-o-keyframes fadeInRight {
  0% {
    opacity: 0;
    -o-transform: translateX(20px);
  }
  100% {
    opacity: 1;
    -o-transform: translateX(0);
  }
}
@keyframes fadeInRight {
  0% {
    opacity: 0;
    transform: translateX(20px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}
.fadeInRight {
  -webkit-animation-name: fadeInRight;
  -moz-animation-name: fadeInRight;
  -o-animation-name: fadeInRight;
  animation-name: fadeInRight;
}
@-webkit-keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
@-moz-keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -moz-transform: translateY(2000px);
  }
  100% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
}
@-o-keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -o-transform: translateY(2000px);
  }
  100% {
    opacity: 1;
    -o-transform: translateY(0);
  }
}
@keyframes fadeInUpBig {
  0% {
    opacity: 0;
    transform: translateY(2000px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  -moz-animation-name: fadeInUpBig;
  -o-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig;
}
@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
}
@-moz-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -moz-transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
}
@-o-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -o-transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    -o-transform: translateY(0);
  }
}
@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    transform: translateY(-2000px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}
.fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
  -moz-animation-name: fadeInDownBig;
  -o-animation-name: fadeInDownBig;
  animation-name: fadeInDownBig;
}
@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -moz-transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -moz-transform: translateX(0);
  }
}
@-o-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -o-transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    -o-transform: translateX(0);
  }
}
@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    transform: translateX(-2000px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}
.fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  -moz-animation-name: fadeInLeftBig;
  -o-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig;
}
@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
}
@-moz-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -moz-transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -moz-transform: translateX(0);
  }
}
@-o-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -o-transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    -o-transform: translateX(0);
  }
}
@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    transform: translateX(2000px);
  }
  100% {
    opacity: 1;
    transform: translateX(0);
  }
}
.fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
  -moz-animation-name: fadeInRightBig;
  -o-animation-name: fadeInRightBig;
  animation-name: fadeInRightBig;
}
@-webkit-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@-moz-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@-o-keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
@keyframes fadeOut {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
.fadeOut {
  -webkit-animation-name: fadeOut;
  -moz-animation-name: fadeOut;
  -o-animation-name: fadeOut;
  animation-name: fadeOut;
}
@-webkit-keyframes fadeOutUp {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-20px);
  }
}
@-moz-keyframes fadeOutUp {
  0% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -moz-transform: translateY(-20px);
  }
}
@-o-keyframes fadeOutUp {
  0% {
    opacity: 1;
    -o-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -o-transform: translateY(-20px);
  }
}
@keyframes fadeOutUp {
  0% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(-20px);
  }
}
.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  -moz-animation-name: fadeOutUp;
  -o-animation-name: fadeOutUp;
  animation-name: fadeOutUp;
}
@-webkit-keyframes fadeOutDown {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(20px);
  }
}
@-moz-keyframes fadeOutDown {
  0% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -moz-transform: translateY(20px);
  }
}
@-o-keyframes fadeOutDown {
  0% {
    opacity: 1;
    -o-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -o-transform: translateY(20px);
  }
}
@keyframes fadeOutDown {
  0% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(20px);
  }
}
.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  -moz-animation-name: fadeOutDown;
  -o-animation-name: fadeOutDown;
  animation-name: fadeOutDown;
}
@-webkit-keyframes fadeOutLeft {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-20px);
  }
}
@-moz-keyframes fadeOutLeft {
  0% {
    opacity: 1;
    -moz-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -moz-transform: translateX(-20px);
  }
}
@-o-keyframes fadeOutLeft {
  0% {
    opacity: 1;
    -o-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -o-transform: translateX(-20px);
  }
}
@keyframes fadeOutLeft {
  0% {
    opacity: 1;
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    transform: translateX(-20px);
  }
}
.fadeOutLeft {
  -webkit-animation-name: fadeOutLeft;
  -moz-animation-name: fadeOutLeft;
  -o-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft;
}
@-webkit-keyframes fadeOutRight {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(20px);
  }
}
@-moz-keyframes fadeOutRight {
  0% {
    opacity: 1;
    -moz-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -moz-transform: translateX(20px);
  }
}
@-o-keyframes fadeOutRight {
  0% {
    opacity: 1;
    -o-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -o-transform: translateX(20px);
  }
}
@keyframes fadeOutRight {
  0% {
    opacity: 1;
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    transform: translateX(20px);
  }
}
.fadeOutRight {
  -webkit-animation-name: fadeOutRight;
  -moz-animation-name: fadeOutRight;
  -o-animation-name: fadeOutRight;
  animation-name: fadeOutRight;
}
@-webkit-keyframes fadeOutUpBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(-2000px);
  }
}
@-moz-keyframes fadeOutUpBig {
  0% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -moz-transform: translateY(-2000px);
  }
}
@-o-keyframes fadeOutUpBig {
  0% {
    opacity: 1;
    -o-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -o-transform: translateY(-2000px);
  }
}
@keyframes fadeOutUpBig {
  0% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(-2000px);
  }
}
.fadeOutUpBig {
  -webkit-animation-name: fadeOutUpBig;
  -moz-animation-name: fadeOutUpBig;
  -o-animation-name: fadeOutUpBig;
  animation-name: fadeOutUpBig;
}
@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -webkit-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateY(2000px);
  }
}
@-moz-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -moz-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -moz-transform: translateY(2000px);
  }
}
@-o-keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    -o-transform: translateY(0);
  }
  100% {
    opacity: 0;
    -o-transform: translateY(2000px);
  }
}
@keyframes fadeOutDownBig {
  0% {
    opacity: 1;
    transform: translateY(0);
  }
  100% {
    opacity: 0;
    transform: translateY(2000px);
  }
}
.fadeOutDownBig {
  -webkit-animation-name: fadeOutDownBig;
  -moz-animation-name: fadeOutDownBig;
  -o-animation-name: fadeOutDownBig;
  animation-name: fadeOutDownBig;
}
@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(-2000px);
  }
}
@-moz-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -moz-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -moz-transform: translateX(-2000px);
  }
}
@-o-keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    -o-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -o-transform: translateX(-2000px);
  }
}
@keyframes fadeOutLeftBig {
  0% {
    opacity: 1;
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    transform: translateX(-2000px);
  }
}
.fadeOutLeftBig {
  -webkit-animation-name: fadeOutLeftBig;
  -moz-animation-name: fadeOutLeftBig;
  -o-animation-name: fadeOutLeftBig;
  animation-name: fadeOutLeftBig;
}
@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -webkit-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translateX(2000px);
  }
}
@-moz-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -moz-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -moz-transform: translateX(2000px);
  }
}
@-o-keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    -o-transform: translateX(0);
  }
  100% {
    opacity: 0;
    -o-transform: translateX(2000px);
  }
}
@keyframes fadeOutRightBig {
  0% {
    opacity: 1;
    transform: translateX(0);
  }
  100% {
    opacity: 0;
    transform: translateX(2000px);
  }
}
.fadeOutRightBig {
  -webkit-animation-name: fadeOutRightBig;
  -moz-animation-name: fadeOutRightBig;
  -o-animation-name: fadeOutRightBig;
  animation-name: fadeOutRightBig;
}
@font-face {
  font-family: "FontAwesome";
  src: url("../fonts/fontawesome-webfont.eot?v=4.0.3");
  src: url("../fonts/fontawesome-webfont.eot?#iefix&v=4.0.3")
      format("embedded-opentype"),
    url("../fonts/fontawesome-webfont.woff?v=4.0.3") format("woff"),
    url("../fonts/fontawesome-webfont.ttf?v=4.0.3") format("truetype"),
    url("../fonts/fontawesome-webfont.svg?v=4.0.3#fontawesomeregular")
      format("svg");
  font-weight: normal;
  font-style: normal;
}
.fa {
  display: inline-block;
  font-family: FontAwesome;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.fa-lg {
  font-size: 1.3333333333333333em;
  line-height: 0.75em;
  vertical-align: -15%;
}
.fa-2x {
  font-size: 2em;
}
.fa-3x {
  font-size: 3em;
}
.fa-4x {
  font-size: 4em;
}
.fa-5x {
  font-size: 5em;
}
.fa-fw {
  width: 1.2857142857142858em;
  text-align: center;
}
.fa-ul {
  padding-left: 0;
  margin-left: 2.142857142857143em;
  list-style-type: none;
}
.fa-ul > li {
  position: relative;
}
.fa-li {
  position: absolute;
  left: -2.142857142857143em;
  width: 2.142857142857143em;
  top: 0.14285714285714285em;
  text-align: center;
}
.fa-li.fa-lg {
  left: -1.8571428571428572em;
}
.fa-border {
  padding: 0.2em 0.25em 0.15em;
  border: solid 0.08em #eee;
  border-radius: 0.1em;
}
.pull-right {
  float: right;
}
.pull-left {
  float: left;
}
.fa.pull-left {
  margin-right: 0.3em;
}
.fa.pull-right {
  margin-left: 0.3em;
}
.fa-spin {
  -webkit-animation: spin 2s infinite linear;
  -moz-animation: spin 2s infinite linear;
  -o-animation: spin 2s infinite linear;
  animation: spin 2s infinite linear;
}
@-moz-keyframes spin {
  0% {
    -moz-transform: rotate(0deg);
  }
  100% {
    -moz-transform: rotate(359deg);
  }
}
@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
  }
}
@-o-keyframes spin {
  0% {
    -o-transform: rotate(0deg);
  }
  100% {
    -o-transform: rotate(359deg);
  }
}
@-ms-keyframes spin {
  0% {
    -ms-transform: rotate(0deg);
  }
  100% {
    -ms-transform: rotate(359deg);
  }
}
@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(359deg);
  }
}
.fa-rotate-90 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=1);
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
.fa-rotate-180 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2);
  -webkit-transform: rotate(180deg);
  -moz-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  transform: rotate(180deg);
}
.fa-rotate-270 {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
  -webkit-transform: rotate(270deg);
  -moz-transform: rotate(270deg);
  -ms-transform: rotate(270deg);
  -o-transform: rotate(270deg);
  transform: rotate(270deg);
}
.fa-flip-horizontal {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0,mirror=1);
  -webkit-transform: scale(-1, 1);
  -moz-transform: scale(-1, 1);
  -ms-transform: scale(-1, 1);
  -o-transform: scale(-1, 1);
  transform: scale(-1, 1);
}
.fa-flip-vertical {
  filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=2,mirror=1);
  -webkit-transform: scale(1, -1);
  -moz-transform: scale(1, -1);
  -ms-transform: scale(1, -1);
  -o-transform: scale(1, -1);
  transform: scale(1, -1);
}
.fa-stack {
  position: relative;
  display: inline-block;
  width: 2em;
  height: 2em;
  line-height: 2em;
  vertical-align: middle;
}
.fa-stack-1x,
.fa-stack-2x {
  position: absolute;
  left: 0;
  width: 100%;
  text-align: center;
}
.fa-stack-1x {
  line-height: inherit;
}
.fa-stack-2x {
  font-size: 2em;
}
.fa-inverse {
  color: #fff;
}
.fa-glass:before {
  content: "\f000";
}
.fa-music:before {
  content: "\f001";
}
.fa-search:before {
  content: "\f002";
}
.fa-envelope-o:before {
  content: "\f003";
}
.fa-heart:before {
  content: "\f004";
}
.fa-star:before {
  content: "\f005";
}
.fa-star-o:before {
  content: "\f006";
}
.fa-user:before {
  content: "\f007";
}
.fa-film:before {
  content: "\f008";
}
.fa-th-large:before {
  content: "\f009";
}
.fa-th:before {
  content: "\f00a";
}
.fa-th-list:before {
  content: "\f00b";
}
.fa-check:before {
  content: "\f00c";
}
.fa-times:before {
  content: "\f00d";
}
.fa-search-plus:before {
  content: "\f00e";
}
.fa-search-minus:before {
  content: "\f010";
}
.fa-power-off:before {
  content: "\f011";
}
.fa-signal:before {
  content: "\f012";
}
.fa-gear:before,
.fa-cog:before {
  content: "\f013";
}
.fa-trash-o:before {
  content: "\f014";
}
.fa-home:before {
  content: "\f015";
}
.fa-file-o:before {
  content: "\f016";
}
.fa-clock-o:before {
  content: "\f017";
}
.fa-road:before {
  content: "\f018";
}
.fa-download:before {
  content: "\f019";
}
.fa-arrow-circle-o-down:before {
  content: "\f01a";
}
.fa-arrow-circle-o-up:before {
  content: "\f01b";
}
.fa-inbox:before {
  content: "\f01c";
}
.fa-play-circle-o:before {
  content: "\f01d";
}
.fa-rotate-right:before,
.fa-repeat:before {
  content: "\f01e";
}
.fa-refresh:before {
  content: "\f021";
}
.fa-list-alt:before {
  content: "\f022";
}
.fa-lock:before {
  content: "\f023";
}
.fa-flag:before {
  content: "\f024";
}
.fa-headphones:before {
  content: "\f025";
}
.fa-volume-off:before {
  content: "\f026";
}
.fa-volume-down:before {
  content: "\f027";
}
.fa-volume-up:before {
  content: "\f028";
}
.fa-qrcode:before {
  content: "\f029";
}
.fa-barcode:before {
  content: "\f02a";
}
.fa-tag:before {
  content: "\f02b";
}
.fa-tags:before {
  content: "\f02c";
}
.fa-book:before {
  content: "\f02d";
}
.fa-bookmark:before {
  content: "\f02e";
}
.fa-print:before {
  content: "\f02f";
}
.fa-camera:before {
  content: "\f030";
}
.fa-font:before {
  content: "\f031";
}
.fa-bold:before {
  content: "\f032";
}
.fa-italic:before {
  content: "\f033";
}
.fa-text-height:before {
  content: "\f034";
}
.fa-text-width:before {
  content: "\f035";
}
.fa-align-left:before {
  content: "\f036";
}
.fa-align-center:before {
  content: "\f037";
}
.fa-align-right:before {
  content: "\f038";
}
.fa-align-justify:before {
  content: "\f039";
}
.fa-list:before {
  content: "\f03a";
}
.fa-dedent:before,
.fa-outdent:before {
  content: "\f03b";
}
.fa-indent:before {
  content: "\f03c";
}
.fa-video-camera:before {
  content: "\f03d";
}
.fa-picture-o:before {
  content: "\f03e";
}
.fa-pencil:before {
  content: "\f040";
}
.fa-map-marker:before {
  content: "\f041";
}
.fa-adjust:before {
  content: "\f042";
}
.fa-tint:before {
  content: "\f043";
}
.fa-edit:before,
.fa-pencil-square-o:before {
  content: "\f044";
}
.fa-share-square-o:before {
  content: "\f045";
}
.fa-check-square-o:before {
  content: "\f046";
}
.fa-arrows:before {
  content: "\f047";
}
.fa-step-backward:before {
  content: "\f048";
}
.fa-fast-backward:before {
  content: "\f049";
}
.fa-backward:before {
  content: "\f04a";
}
.fa-play:before {
  content: "\f04b";
}
.fa-pause:before {
  content: "\f04c";
}
.fa-stop:before {
  content: "\f04d";
}
.fa-forward:before {
  content: "\f04e";
}
.fa-fast-forward:before {
  content: "\f050";
}
.fa-step-forward:before {
  content: "\f051";
}
.fa-eject:before {
  content: "\f052";
}
.fa-chevron-left:before {
  content: "\f053";
}
.fa-chevron-right:before {
  content: "\f054";
}
.fa-plus-circle:before {
  content: "\f055";
}
.fa-minus-circle:before {
  content: "\f056";
}
.fa-times-circle:before {
  content: "\f057";
}
.fa-check-circle:before {
  content: "\f058";
}
.fa-question-circle:before {
  content: "\f059";
}
.fa-info-circle:before {
  content: "\f05a";
}
.fa-crosshairs:before {
  content: "\f05b";
}
.fa-times-circle-o:before {
  content: "\f05c";
}
.fa-check-circle-o:before {
  content: "\f05d";
}
.fa-ban:before {
  content: "\f05e";
}
.fa-arrow-left:before {
  content: "\f060";
}
.fa-arrow-right:before {
  content: "\f061";
}
.fa-arrow-up:before {
  content: "\f062";
}
.fa-arrow-down:before {
  content: "\f063";
}
.fa-mail-forward:before,
.fa-share:before {
  content: "\f064";
}
.fa-expand:before {
  content: "\f065";
}
.fa-compress:before {
  content: "\f066";
}
.fa-plus:before {
  content: "\f067";
}
.fa-minus:before {
  content: "\f068";
}
.fa-asterisk:before {
  content: "\f069";
}
.fa-exclamation-circle:before {
  content: "\f06a";
}
.fa-gift:before {
  content: "\f06b";
}
.fa-leaf:before {
  content: "\f06c";
}
.fa-fire:before {
  content: "\f06d";
}
.fa-eye:before {
  content: "\f06e";
}
.fa-eye-slash:before {
  content: "\f070";
}
.fa-warning:before,
.fa-exclamation-triangle:before {
  content: "\f071";
}
.fa-plane:before {
  content: "\f072";
}
.fa-calendar:before {
  content: "\f073";
}
.fa-random:before {
  content: "\f074";
}
.fa-comment:before {
  content: "\f075";
}
.fa-magnet:before {
  content: "\f076";
}
.fa-chevron-up:before {
  content: "\f077";
}
.fa-chevron-down:before {
  content: "\f078";
}
.fa-retweet:before {
  content: "\f079";
}
.fa-shopping-cart:before {
  content: "\f07a";
}
.fa-folder:before {
  content: "\f07b";
}
.fa-folder-open:before {
  content: "\f07c";
}
.fa-arrows-v:before {
  content: "\f07d";
}
.fa-arrows-h:before {
  content: "\f07e";
}
.fa-bar-chart-o:before {
  content: "\f080";
}
.fa-twitter-square:before {
  content: "\f081";
}
.fa-facebook-square:before {
  content: "\f082";
}
.fa-camera-retro:before {
  content: "\f083";
}
.fa-key:before {
  content: "\f084";
}
.fa-gears:before,
.fa-cogs:before {
  content: "\f085";
}
.fa-comments:before {
  content: "\f086";
}
.fa-thumbs-o-up:before {
  content: "\f087";
}
.fa-thumbs-o-down:before {
  content: "\f088";
}
.fa-star-half:before {
  content: "\f089";
}
.fa-heart-o:before {
  content: "\f08a";
}
.fa-sign-out:before {
  content: "\f08b";
}
.fa-linkedin-square:before {
  content: "\f08c";
}
.fa-thumb-tack:before {
  content: "\f08d";
}
.fa-external-link:before {
  content: "\f08e";
}
.fa-sign-in:before {
  content: "\f090";
}
.fa-trophy:before {
  content: "\f091";
}
.fa-github-square:before {
  content: "\f092";
}
.fa-upload:before {
  content: "\f093";
}
.fa-lemon-o:before {
  content: "\f094";
}
.fa-phone:before {
  content: "\f095";
}
.fa-square-o:before {
  content: "\f096";
}
.fa-bookmark-o:before {
  content: "\f097";
}
.fa-phone-square:before {
  content: "\f098";
}
.fa-twitter:before {
  content: "\f099";
}
.fa-facebook:before {
  content: "\f09a";
}
.fa-github:before {
  content: "\f09b";
}
.fa-unlock:before {
  content: "\f09c";
}
.fa-credit-card:before {
  content: "\f09d";
}
.fa-rss:before {
  content: "\f09e";
}
.fa-hdd-o:before {
  content: "\f0a0";
}
.fa-bullhorn:before {
  content: "\f0a1";
}
.fa-bell:before {
  content: "\f0f3";
}
.fa-certificate:before {
  content: "\f0a3";
}
.fa-hand-o-right:before {
  content: "\f0a4";
}
.fa-hand-o-left:before {
  content: "\f0a5";
}
.fa-hand-o-up:before {
  content: "\f0a6";
}
.fa-hand-o-down:before {
  content: "\f0a7";
}
.fa-arrow-circle-left:before {
  content: "\f0a8";
}
.fa-arrow-circle-right:before {
  content: "\f0a9";
}
.fa-arrow-circle-up:before {
  content: "\f0aa";
}
.fa-arrow-circle-down:before {
  content: "\f0ab";
}
.fa-globe:before {
  content: "\f0ac";
}
.fa-wrench:before {
  content: "\f0ad";
}
.fa-tasks:before {
  content: "\f0ae";
}
.fa-filter:before {
  content: "\f0b0";
}
.fa-briefcase:before {
  content: "\f0b1";
}
.fa-arrows-alt:before {
  content: "\f0b2";
}
.fa-group:before,
.fa-users:before {
  content: "\f0c0";
}
.fa-chain:before,
.fa-link:before {
  content: "\f0c1";
}
.fa-cloud:before {
  content: "\f0c2";
}
.fa-flask:before {
  content: "\f0c3";
}
.fa-cut:before,
.fa-scissors:before {
  content: "\f0c4";
}
.fa-copy:before,
.fa-files-o:before {
  content: "\f0c5";
}
.fa-paperclip:before {
  content: "\f0c6";
}
.fa-save:before,
.fa-floppy-o:before {
  content: "\f0c7";
}
.fa-square:before {
  content: "\f0c8";
}
.fa-bars:before {
  content: "\f0c9";
}
.fa-list-ul:before {
  content: "\f0ca";
}
.fa-list-ol:before {
  content: "\f0cb";
}
.fa-strikethrough:before {
  content: "\f0cc";
}
.fa-underline:before {
  content: "\f0cd";
}
.fa-table:before {
  content: "\f0ce";
}
.fa-magic:before {
  content: "\f0d0";
}
.fa-truck:before {
  content: "\f0d1";
}
.fa-pinterest:before {
  content: "\f0d2";
}
.fa-pinterest-square:before {
  content: "\f0d3";
}
.fa-google-plus-square:before {
  content: "\f0d4";
}
.fa-google-plus:before {
  content: "\f0d5";
}
.fa-money:before {
  content: "\f0d6";
}
.fa-caret-down:before {
  content: "\f0d7";
}
.fa-caret-up:before {
  content: "\f0d8";
}
.fa-caret-left:before {
  content: "\f0d9";
}
.fa-caret-right:before {
  content: "\f0da";
}
.fa-columns:before {
  content: "\f0db";
}
.fa-unsorted:before,
.fa-sort:before {
  content: "\f0dc";
}
.fa-sort-down:before,
.fa-sort-asc:before {
  content: "\f0dd";
}
.fa-sort-up:before,
.fa-sort-desc:before {
  content: "\f0de";
}
.fa-envelope:before {
  content: "\f0e0";
}
.fa-linkedin:before {
  content: "\f0e1";
}
.fa-rotate-left:before,
.fa-undo:before {
  content: "\f0e2";
}
.fa-legal:before,
.fa-gavel:before {
  content: "\f0e3";
}
.fa-dashboard:before,
.fa-tachometer:before {
  content: "\f0e4";
}
.fa-comment-o:before {
  content: "\f0e5";
}
.fa-comments-o:before {
  content: "\f0e6";
}
.fa-flash:before,
.fa-bolt:before {
  content: "\f0e7";
}
.fa-sitemap:before {
  content: "\f0e8";
}
.fa-umbrella:before {
  content: "\f0e9";
}
.fa-paste:before,
.fa-clipboard:before {
  content: "\f0ea";
}
.fa-lightbulb-o:before {
  content: "\f0eb";
}
.fa-exchange:before {
  content: "\f0ec";
}
.fa-cloud-download:before {
  content: "\f0ed";
}
.fa-cloud-upload:before {
  content: "\f0ee";
}
.fa-user-md:before {
  content: "\f0f0";
}
.fa-stethoscope:before {
  content: "\f0f1";
}
.fa-suitcase:before {
  content: "\f0f2";
}
.fa-bell-o:before {
  content: "\f0a2";
}
.fa-coffee:before {
  content: "\f0f4";
}
.fa-cutlery:before {
  content: "\f0f5";
}
.fa-file-text-o:before {
  content: "\f0f6";
}
.fa-building-o:before {
  content: "\f0f7";
}
.fa-hospital-o:before {
  content: "\f0f8";
}
.fa-ambulance:before {
  content: "\f0f9";
}
.fa-medkit:before {
  content: "\f0fa";
}
.fa-fighter-jet:before {
  content: "\f0fb";
}
.fa-beer:before {
  content: "\f0fc";
}
.fa-h-square:before {
  content: "\f0fd";
}
.fa-plus-square:before {
  content: "\f0fe";
}
.fa-angle-double-left:before {
  content: "\f100";
}
.fa-angle-double-right:before {
  content: "\f101";
}
.fa-angle-double-up:before {
  content: "\f102";
}
.fa-angle-double-down:before {
  content: "\f103";
}
.fa-angle-left:before {
  content: "\f104";
}
.fa-angle-right:before {
  content: "\f105";
}
.fa-angle-up:before {
  content: "\f106";
}
.fa-angle-down:before {
  content: "\f107";
}
.fa-desktop:before {
  content: "\f108";
}
.fa-laptop:before {
  content: "\f109";
}
.fa-tablet:before {
  content: "\f10a";
}
.fa-mobile-phone:before,
.fa-mobile:before {
  content: "\f10b";
}
.fa-circle-o:before {
  content: "\f10c";
}
.fa-quote-left:before {
  content: "\f10d";
}
.fa-quote-right:before {
  content: "\f10e";
}
.fa-spinner:before {
  content: "\f110";
}
.fa-circle:before {
  content: "\f111";
}
.fa-mail-reply:before,
.fa-reply:before {
  content: "\f112";
}
.fa-github-alt:before {
  content: "\f113";
}
.fa-folder-o:before {
  content: "\f114";
}
.fa-folder-open-o:before {
  content: "\f115";
}
.fa-smile-o:before {
  content: "\f118";
}
.fa-frown-o:before {
  content: "\f119";
}
.fa-meh-o:before {
  content: "\f11a";
}
.fa-gamepad:before {
  content: "\f11b";
}
.fa-keyboard-o:before {
  content: "\f11c";
}
.fa-flag-o:before {
  content: "\f11d";
}
.fa-flag-checkered:before {
  content: "\f11e";
}
.fa-terminal:before {
  content: "\f120";
}
.fa-code:before {
  content: "\f121";
}
.fa-reply-all:before {
  content: "\f122";
}
.fa-mail-reply-all:before {
  content: "\f122";
}
.fa-star-half-empty:before,
.fa-star-half-full:before,
.fa-star-half-o:before {
  content: "\f123";
}
.fa-location-arrow:before {
  content: "\f124";
}
.fa-crop:before {
  content: "\f125";
}
.fa-code-fork:before {
  content: "\f126";
}
.fa-unlink:before,
.fa-chain-broken:before {
  content: "\f127";
}
.fa-question:before {
  content: "\f128";
}
.fa-info:before {
  content: "\f129";
}
.fa-exclamation:before {
  content: "\f12a";
}
.fa-superscript:before {
  content: "\f12b";
}
.fa-subscript:before {
  content: "\f12c";
}
.fa-eraser:before {
  content: "\f12d";
}
.fa-puzzle-piece:before {
  content: "\f12e";
}
.fa-microphone:before {
  content: "\f130";
}
.fa-microphone-slash:before {
  content: "\f131";
}
.fa-shield:before {
  content: "\f132";
}
.fa-calendar-o:before {
  content: "\f133";
}
.fa-fire-extinguisher:before {
  content: "\f134";
}
.fa-rocket:before {
  content: "\f135";
}
.fa-maxcdn:before {
  content: "\f136";
}
.fa-chevron-circle-left:before {
  content: "\f137";
}
.fa-chevron-circle-right:before {
  content: "\f138";
}
.fa-chevron-circle-up:before {
  content: "\f139";
}
.fa-chevron-circle-down:before {
  content: "\f13a";
}
.fa-html5:before {
  content: "\f13b";
}
.fa-css3:before {
  content: "\f13c";
}
.fa-anchor:before {
  content: "\f13d";
}
.fa-unlock-alt:before {
  content: "\f13e";
}
.fa-bullseye:before {
  content: "\f140";
}
.fa-ellipsis-h:before {
  content: "\f141";
}
.fa-ellipsis-v:before {
  content: "\f142";
}
.fa-rss-square:before {
  content: "\f143";
}
.fa-play-circle:before {
  content: "\f144";
}
.fa-ticket:before {
  content: "\f145";
}
.fa-minus-square:before {
  content: "\f146";
}
.fa-minus-square-o:before {
  content: "\f147";
}
.fa-level-up:before {
  content: "\f148";
}
.fa-level-down:before {
  content: "\f149";
}
.fa-check-square:before {
  content: "\f14a";
}
.fa-pencil-square:before {
  content: "\f14b";
}
.fa-external-link-square:before {
  content: "\f14c";
}
.fa-share-square:before {
  content: "\f14d";
}
.fa-compass:before {
  content: "\f14e";
}
.fa-toggle-down:before,
.fa-caret-square-o-down:before {
  content: "\f150";
}
.fa-toggle-up:before,
.fa-caret-square-o-up:before {
  content: "\f151";
}
.fa-toggle-right:before,
.fa-caret-square-o-right:before {
  content: "\f152";
}
.fa-euro:before,
.fa-eur:before {
  content: "\f153";
}
.fa-gbp:before {
  content: "\f154";
}
.fa-dollar:before,
.fa-usd:before {
  content: "\f155";
}
.fa-rupee:before,
.fa-inr:before {
  content: "\f156";
}
.fa-cny:before,
.fa-rmb:before,
.fa-yen:before,
.fa-jpy:before {
  content: "\f157";
}
.fa-ruble:before,
.fa-rouble:before,
.fa-rub:before {
  content: "\f158";
}
.fa-won:before,
.fa-krw:before {
  content: "\f159";
}
.fa-bitcoin:before,
.fa-btc:before {
  content: "\f15a";
}
.fa-file:before {
  content: "\f15b";
}
.fa-file-text:before {
  content: "\f15c";
}
.fa-sort-alpha-asc:before {
  content: "\f15d";
}
.fa-sort-alpha-desc:before {
  content: "\f15e";
}
.fa-sort-amount-asc:before {
  content: "\f160";
}
.fa-sort-amount-desc:before {
  content: "\f161";
}
.fa-sort-numeric-asc:before {
  content: "\f162";
}
.fa-sort-numeric-desc:before {
  content: "\f163";
}
.fa-thumbs-up:before {
  content: "\f164";
}
.fa-thumbs-down:before {
  content: "\f165";
}
.fa-youtube-square:before {
  content: "\f166";
}
.fa-youtube:before {
  content: "\f167";
}
.fa-xing:before {
  content: "\f168";
}
.fa-xing-square:before {
  content: "\f169";
}
.fa-youtube-play:before {
  content: "\f16a";
}
.fa-dropbox:before {
  content: "\f16b";
}
.fa-stack-overflow:before {
  content: "\f16c";
}
.fa-instagram:before {
  content: "\f16d";
}
.fa-flickr:before {
  content: "\f16e";
}
.fa-adn:before {
  content: "\f170";
}
.fa-bitbucket:before {
  content: "\f171";
}
.fa-bitbucket-square:before {
  content: "\f172";
}
.fa-tumblr:before {
  content: "\f173";
}
.fa-tumblr-square:before {
  content: "\f174";
}
.fa-long-arrow-down:before {
  content: "\f175";
}
.fa-long-arrow-up:before {
  content: "\f176";
}
.fa-long-arrow-left:before {
  content: "\f177";
}
.fa-long-arrow-right:before {
  content: "\f178";
}
.fa-apple:before {
  content: "\f179";
}
.fa-windows:before {
  content: "\f17a";
}
.fa-android:before {
  content: "\f17b";
}
.fa-linux:before {
  content: "\f17c";
}
.fa-dribbble:before {
  content: "\f17d";
}
.fa-skype:before {
  content: "\f17e";
}
.fa-foursquare:before {
  content: "\f180";
}
.fa-trello:before {
  content: "\f181";
}
.fa-female:before {
  content: "\f182";
}
.fa-male:before {
  content: "\f183";
}
.fa-gittip:before {
  content: "\f184";
}
.fa-sun-o:before {
  content: "\f185";
}
.fa-moon-o:before {
  content: "\f186";
}
.fa-archive:before {
  content: "\f187";
}
.fa-bug:before {
  content: "\f188";
}
.fa-vk:before {
  content: "\f189";
}
.fa-weibo:before {
  content: "\f18a";
}
.fa-renren:before {
  content: "\f18b";
}
.fa-pagelines:before {
  content: "\f18c";
}
.fa-stack-exchange:before {
  content: "\f18d";
}
.fa-arrow-circle-o-right:before {
  content: "\f18e";
}
.fa-arrow-circle-o-left:before {
  content: "\f190";
}
.fa-toggle-left:before,
.fa-caret-square-o-left:before {
  content: "\f191";
}
.fa-dot-circle-o:before {
  content: "\f192";
}
.fa-wheelchair:before {
  content: "\f193";
}
.fa-vimeo-square:before {
  content: "\f194";
}
.fa-turkish-lira:before,
.fa-try:before {
  content: "\f195";
}
.fa-plus-square-o:before {
  content: "\f196";
}
html {
  background-color: #f7f7f7;
  overflow-x: hidden;
}
body {
  font-family: "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  color: #717171;
  background-color: transparent;
  -webkit-font-smoothing: antialiased;
}
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  margin: 0;
}
a {
  color: #2e3e4e;
  text-decoration: none;
}
a:hover,
a:focus {
  color: #4a647e;
  text-decoration: none;
}
.badge {
  background-color: #bebebe;
}
.badge.up {
  position: relative;
  top: -10px;
  padding: 3px 6px;
}
.badge-sm {
  font-size: 85%;
  padding: 2px 5px !important;
}
label {
  font-weight: normal;
}
.label-sm {
  padding-top: 0;
  padding-bottom: 0;
}
.text-primary {
  color: #65bd77;
}
.text-info {
  color: #4cc0c1;
}
.text-success {
  color: #8ec165;
}
.text-warning {
  color: #ffc333;
}
.text-danger {
  color: #fb6b5b;
}
.text-light {
  color: #f1f1f1;
}
.text-white {
  color: #fff;
}
.text-dark {
  color: #2e3e4e;
}
.text-muted {
  color: #979797;
}
small {
  font-size: 90%;
}
.badge-white {
  background-color: transparent;
  border: 1px solid rgba(255, 255, 255, 0.35);
  padding: 2px 6px;
}
.badge-hollow {
  background-color: transparent;
  border: 1px solid rgba(0, 0, 0, 0.15);
  color: inherit;
}
.caret-white {
  border-top-color: #fff;
  border-top-color: rgba(255, 255, 255, 0.65);
}
a:hover .caret-white {
  border-top-color: #fff;
}
.tooltip-inner {
  background-color: rgba(0, 0, 0, 0.9);
  background-color: #2e3e4e;
}
.tooltip.top .tooltip-arrow {
  border-top-color: rgba(0, 0, 0, 0.9);
  border-top-color: #2e3e4e;
}
.tooltip.right .tooltip-arrow {
  border-right-color: rgba(0, 0, 0, 0.9);
  border-right-color: #2e3e4e;
}
.tooltip.bottom .tooltip-arrow {
  border-bottom-color: rgba(0, 0, 0, 0.9);
  border-bottom-color: #2e3e4e;
}
.tooltip.left .tooltip-arrow {
  border-left-color: rgba(0, 0, 0, 0.9);
  border-left-color: #2e3e4e;
}
.popover-content {
  font-size: 12px;
  line-height: 1.5;
}
.progress-xs {
  height: 6px;
}
.progress-sm {
  height: 10px;
}
.progress-sm .progress-bar {
  font-size: 10px;
  line-height: 1em;
}
.breadcrumb {
  background-color: #fff;
  border: 1px solid #e8e8e8;
  padding-left: 10px;
  font-size: 12px;
  margin-bottom: 10px;
}
.breadcrumb a {
  color: #999;
}
.accordion-group,
.accordion-inner {
  border-color: #e8e8e8;
  border-radius: 2px;
}
.alert {
  font-size: 85%;
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2);
}
.alert .close i {
  font-size: 12px;
  font-weight: normal;
  display: block;
}
.form-control {
  border-color: #d9d9d9;
  border-radius: 2px;
}
.form-control,
.form-control:focus {
  -webkit-box-shadow: none;
  box-shadow: none;
}
.form-control:focus {
  border-color: #4cc0c1;
}
.input-s-sm {
  width: 120px;
}
.input-s {
  width: 200px;
}
.input-s-lg {
  width: 250px;
}
.input-group-addon {
  border-color: #d9d9d9;
  background-color: #f9f9f9;
}
.list-group {
  border-radius: 2px;
}
.list-group.no-radius .list-group-item {
  border-radius: 0 !important;
}
.list-group.no-borders .list-group-item {
  border: none;
}
.list-group.no-border .list-group-item {
  border-width: 1px 0;
}
.list-group.no-bg .list-group-item {
  background-color: transparent;
}
.list-group-item {
  border-color: #e8e8e8;
  padding-right: 15px;
}
.list-group-item.media {
  margin-top: 0;
}
.list-group-item.active {
  color: #fff;
  border-color: #65bd77 !important;
  background-color: #65bd77 !important;
}
.list-group-item.active .text-muted {
  color: #d0ebd6;
}
.list-group-item.active a {
  color: #fff;
}
.list-group-alt .list-group-item:nth-child(2n + 2) {
  background-color: rgba(0, 0, 0, 0.02);
}
.list-group-lg .list-group-item {
  padding-top: 15px;
  padding-bottom: 15px;
}
.list-group-sp .list-group-item {
  margin-bottom: 5px;
  border-radius: 3px;
}
.list-group-item > .badge {
  margin-right: 0;
}
.list-group-item > .fa-chevron-right {
  float: right;
  margin-top: 4px;
  margin-right: -5px;
}
.list-group-item > .fa-chevron-right + .badge {
  margin-right: 5px;
}
.nav-pills.no-radius > li > a {
  border-radius: 0;
}
.nav-pills > li.active > a {
  color: #fff !important;
  background-color: #4cc0c1 !important;
}
.nav.nav-sm > li > a {
  padding: 6px 8px;
}
.nav .avatar {
  width: 30px;
  margin-top: -5px;
  margin-right: 5px;
}
.panel {
  border-radius: 2px;
}
.panel.panel-default {
  border-color: #e8e8e8;
}
.panel.panel-default > .panel-heading,
.panel.panel-default > .panel-footer {
  border-color: #e8e8e8;
}
.panel .list-group-item {
  border-color: #f0f0f0;
}
.panel.no-borders {
  border-width: 0;
}
.panel.no-borders .panel-heading,
.panel.no-borders .panel-footer {
  border-width: 0;
}
.panel .table td,
.panel .table th {
  padding: 6px 15px;
  border-top: 1px solid #f1f1f1;
}
.panel .table thead > tr > th {
  border-bottom: 1px solid #ebebeb;
}
.panel .table-striped > tbody > tr:nth-child(odd) > td,
.panel .table-striped > tbody > tr:nth-child(odd) > th {
  background-color: #f9f9f9;
}
.panel .table-striped > thead th {
  background: #f5f5f5;
  border-right: 1px solid #f1f1f1;
}
.panel .table-striped > thead th:last-child {
  border-right: none;
}
.panel-heading {
  border-radius: 2px 2px 0 0;
}
.panel-heading.no-border {
  margin: -1px -1px 0 -1px;
  border: none;
}
.panel-heading .nav {
  font-size: 13px;
  margin: -10px -15px -11px;
  border: none;
}
.panel-heading .nav > li > a {
  border-radius: 0;
  margin: 0;
  border-width: 0;
}
.panel-heading .nav-tabs.nav-justified {
  width: auto;
}
.panel-heading .nav-tabs.nav-justified > li:first-child > a,
.panel-heading .nav-tabs.pull-left > li:first-child > a {
  border-radius: 2px 0 0 0;
}
.panel-heading .nav-tabs.nav-justified > li:last-child > a,
.panel-heading .nav-tabs.pull-right > li:last-child > a {
  border-radius: 0 2px 0 0;
}
.panel-heading .nav-tabs > li > a {
  line-height: 1.5;
}
.panel-heading .nav-tabs > li > a:hover,
.panel-heading .nav-tabs > li > a:focus {
  border-width: 0;
  background: transparent;
  border-color: transparent;
}
.panel-heading .nav-tabs > li.active > a,
.panel-heading .nav-tabs > li.active > a:hover,
.panel-heading .nav-tabs > li.active > a:focus {
  color: #717171;
  background: #fff;
}
.panel-heading .list-group {
  background: transparent;
}
.panel-footer {
  border-radius: 0 0 2px 2px;
}
.panel-group .panel-heading + .panel-collapse .panel-body {
  border-top: 1px solid #eaedef;
}
.open {
  z-index: 1050;
  position: relative;
}
.dropdown-menu {
  font-size: 13px;
  border-radius: 2px;
  -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  border: 1px solid #ddd;
  border: 1px solid rgba(0, 0, 0, 0.1);
}
.dropdown-menu.pull-left {
  left: 100%;
}
.dropdown-menu > .panel {
  border: none;
  margin: -5px 0;
}
.dropdown-menu > li > a {
  padding: 5px 15px;
}
.dropdown-menu > li > a:hover,
.dropdown-menu > li > a:focus,
.dropdown-menu > .active > a,
.dropdown-menu > .active > a:hover,
.dropdown-menu > .active > a:focus {
  background-image: none;
  filter: none;
  background-color: #f1f1f1 !important;
  color: #717171;
}
.dropdown-header {
  padding: 5px 15px;
}
.dropdown-submenu {
  position: relative;
}
.dropdown-submenu:hover > a,
.dropdown-submenu:focus > a {
  background-color: #f1f1f1 !important;
  color: #717171;
}
.dropdown-submenu:hover > .dropdown-menu,
.dropdown-submenu:focus > .dropdown-menu {
  display: block;
}
.dropdown-submenu.pull-left {
  float: none !important;
}
.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
}
.dropdown-submenu .dropdown-menu {
  left: 100%;
  top: 0;
  margin-top: -6px;
  margin-left: -1px;
}
.dropup .dropdown-submenu > .dropdown-menu {
  top: auto;
  bottom: 0;
}
.dropdown-select > li > a input {
  position: absolute;
  left: -9999em;
}
.carousel-control {
  width: 40px;
  color: #999;
  text-shadow: none;
}
.carousel-control:hover,
.carousel-control:focus {
  color: #ccc;
  text-decoration: none;
  opacity: 0.9;
  filter: alpha(opacity=90);
}
.carousel-control.left,
.carousel-control.right {
  background-image: none;
  filter: none;
}
.carousel-control i {
  position: absolute;
  top: 50%;
  left: 50%;
  z-index: 5;
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-top: -10px;
  margin-left: -10px;
}
.carousel-indicators.out {
  bottom: -5px;
}
.carousel-indicators li {
  -webkit-transition: background-color 0.25s;
  transition: background-color 0.25s;
  background: #ddd;
  background-color: rgba(0, 0, 0, 0.2);
  border: none;
}
.carousel-indicators .active {
  background: #f0f0f0;
  background-color: rgba(200, 200, 200, 0.2);
  width: 10px;
  height: 10px;
  margin: 1px;
}
.carousel.carousel-fade .item {
  -webkit-transition: opacity 0.25s;
  transition: opacity 0.25s;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
}
.carousel.carousel-fade .active {
  opacity: 1;
  filter: alpha(opacity=1);
}
.carousel.carousel-fade .active.left,
.carousel.carousel-fade .active.right {
  left: 0;
  z-index: 2;
  opacity: 0;
  filter: alpha(opacity=0);
}
.carousel.carousel-fade .next,
.carousel.carousel-fade .prev {
  left: 0;
  z-index: 1;
}
.carousel.carousel-fade .carousel-control {
  z-index: 3;
}
.col-lg-2-4 {
  position: relative;
  min-height: 1px;
  padding-left: 15px;
  padding-right: 15px;
}
.col-0 {
  clear: left;
}
.row.no-gutter {
  margin-left: 0;
  margin-right: 0;
}
.no-gutter [class*="col"] {
  padding: 0;
}
.modal-backdrop {
  background-color: #2e3e4e;
}
.modal-backdrop.in {
  opacity: 0.8;
  filter: alpha(opacity=80);
}
.modal-over {
  width: 100%;
  height: 100%;
  position: relative;
  background: #2e3e4e;
}
.modal-center {
  position: absolute;
  left: 50%;
  top: 50%;
}
.modal-content {
  -webkit-box-shadow: 0 2px 10px rgba(0, 0, 0, 0.25);
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.25);
}
.icon-muted {
  color: #ccc;
}
.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: transparent;
}
.navbar-fixed-top + * {
  padding-top: 50px;
}
@media (min-width: 768px) {
  body.container {
    -webkit-box-shadow: 0 3px 60px rgba(0, 0, 0, 0.3);
    box-shadow: 0 3px 60px rgba(0, 0, 0, 0.3);
    border-left: 1px solid #cfcfcf;
    border-right: 1px solid #cfcfcf;
  }
  .app,
  .app body {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  .app .hbox.stretch {
    height: 100%;
  }
  .app .vbox > section,
  .app .vbox > footer {
    position: absolute;
  }
  .app .vbox.flex > section > section {
    overflow: auto;
  }
  .hbox {
    display: table;
    table-layout: fixed;
    border-spacing: 0;
    width: 100%;
  }
  .hbox > aside,
  .hbox > section {
    display: table-cell;
    vertical-align: top;
    height: 100%;
    padding: 0;
    float: none;
  }
  .hbox > aside.show,
  .hbox > aside.hidden-sm,
  .hbox > section.show,
  .hbox > section.hidden-sm {
    display: table-cell !important;
  }
  .vbox {
    display: table;
    border-spacing: 0;
    position: relative;
    height: 100%;
    width: 100%;
  }
  .vbox > section,
  .vbox > footer {
    top: 0;
    bottom: 0;
    width: 100%;
  }
  .vbox > header ~ section {
    top: 50px;
  }
  .vbox > section.w-f {
    bottom: 50px;
  }
  .vbox > footer {
    top: auto;
    z-index: 1000;
  }
  .vbox > footer ~ section {
    bottom: 50px;
  }
  .vbox.flex > header,
  .vbox.flex > section,
  .vbox.flex > footer {
    position: inherit;
  }
  .vbox.flex > section {
    display: table-row;
    height: 100%;
  }
  .vbox.flex > section > section {
    position: relative;
    height: 100%;
    -webkit-overflow-scrolling: touch;
  }
  .ie .vbox.flex > section > section {
    display: table-cell;
  }
  .vbox.flex > section > section > section {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
  }
  .aside-xs {
    width: 48px;
  }
  .aside {
    width: 180px;
  }
  .aside-sm {
    width: 150px;
  }
  .aside-md {
    width: 220px;
  }
  .aside-lg {
    width: 250px;
  }
  .aside-xl {
    width: 300px;
  }
  .aside-xxl {
    width: 450px;
  }
  .scrollable {
    -webkit-overflow-scrolling: touch;
  }
  ::-webkit-scrollbar {
    width: 7px;
    height: 7px;
  }
  ::-webkit-scrollbar-thumb {
    background-color: rgba(50, 50, 50, 0.3);
  }
  ::-webkit-scrollbar-thumb:hover {
    background-color: rgba(50, 50, 50, 0.6);
  }
  ::-webkit-scrollbar-track {
    background-color: rgba(50, 50, 50, 0.1);
  }
  ::-webkit-scrollbar-track:hover {
    background-color: rgba(50, 50, 50, 0.2);
  }
}
.hbox > aside,
.hbox > section {
  padding: 0 !important;
}
.header,
.footer {
  min-height: 50px;
  padding: 0 15px;
}
.header > p,
.footer > p {
  margin-top: 15px;
  display: inline-block;
}
.header > .btn,
.header > .btn-group,
.header > .btn-toolbar,
.footer > .btn,
.footer > .btn-group,
.footer > .btn-toolbar {
  margin-top: 10px;
}
.header > .btn-lg,
.footer > .btn-lg {
  margin-top: 0;
}
.header .nav-tabs,
.footer .nav-tabs {
  border: none;
  margin-left: -15px;
  margin-right: -15px;
}
.header .nav-tabs > li a,
.footer .nav-tabs > li a {
  border: none !important;
  border-radius: 0;
  padding-top: 15px;
  padding-bottom: 15px;
  line-height: 20px;
}
.header .nav-tabs > li a:hover,
.header .nav-tabs > li a:focus,
.footer .nav-tabs > li a:hover,
.footer .nav-tabs > li a:focus {
  background-color: transparent;
}
.header .nav-tabs > li.active a,
.footer .nav-tabs > li.active a {
  color: #717171;
}
.header .nav-tabs > li.active a,
.header .nav-tabs > li.active a:hover,
.footer .nav-tabs > li.active a,
.footer .nav-tabs > li.active a:hover {
  background-color: #f7f7f7;
}
.header .nav-tabs.nav-white > li.active a,
.header .nav-tabs.nav-white > li.active a:hover,
.footer .nav-tabs.nav-white > li.active a,
.footer .nav-tabs.nav-white > li.active a:hover {
  background-color: #fff;
}
.header.navbar,
.footer.navbar {
  min-height: 0;
  border-radius: 0;
  border: none;
  margin-bottom: 0;
  padding: 0;
}
@media (orientation: landscape) {
  html.ios7.ipad > body {
    padding-bottom: 20px;
  }
}
body.container {
  padding: 0;
}
.scrollable {
  overflow-x: hidden;
  overflow-y: auto;
}
.no-touch .scrollable.hover {
  overflow-y: hidden;
}
.no-touch .scrollable.hover:hover {
  overflow: visible;
  overflow-y: auto;
}
@media print {
  html,
  body,
  .hbox,
  .vbox {
    height: auto;
  }
  .vbox > section,
  .vbox > footer {
    position: relative;
  }
}
.slimScrollBar {
  border-radius: 0 !important;
}
.navbar-header {
  position: relative;
}
.navbar-header > .btn {
  position: absolute;
  font-size: 1.3em;
  padding: 9px 16px;
  line-height: 30px;
  left: 0;
}
.navbar-header .navbar-brand + .btn {
  right: 0;
  top: 0;
  left: auto;
}
.navbar-brand {
  float: none;
  text-align: center;
  font-size: 20px;
  line-height: 50px;
  display: inline-block;
  padding: 0 15px;
  font-weight: bold;
}
.navbar-brand:hover {
  text-decoration: none;
}
.navbar-brand img {
  max-height: 20px;
  margin-top: -4px;
  vertical-align: middle;
}
.nav-primary {
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}
.bg-light .nav-primary {
  border-bottom: 1px solid #e9e9e9;
}
.nav-primary li {
  line-height: 1.5;
}
.nav-primary li > a > i {
  margin: -12px -15px;
  line-height: 44px;
  width: 44px;
  float: left;
  margin-right: 10px;
  font-size: 14px;
  border-right: 1px solid rgba(255, 255, 255, 0.05);
  text-align: center;
  position: relative;
  overflow: hidden;
}
.nav-primary li > a > i:before {
  position: relative;
  z-index: 2;
}
.nav-primary li > a > i > b {
  position: absolute;
  left: -42px;
  width: 100%;
  top: 0;
  bottom: 0;
  z-index: 0;
  -webkit-transition: left 0.25s;
  transition: left 0.25s;
}
.nav-primary ul.nav > li > a {
  padding: 11px 15px;
  position: relative;
  font-weight: bold;
  font-size: 14px;
  border-top: 1px solid transparent;
  border-color: rgba(255, 255, 255, 0.05);
  transition: color 0.3s ease-in-out 0s;
}
.no-borders .nav-primary ul.nav > li > a {
  border-width: 0 !important;
}
.nav-primary ul.nav > li > a > .badge {
  font-size: 11px;
  padding: 3px 6px;
  margin-top: 2px;
}
.bg-light .nav-primary ul.nav > li > a {
  color: #717171 !important;
  border-color: #ececec;
}
.bg-light .nav-primary ul.nav > li > a > i {
  color: #a4a4a4;
  border-right: 1px solid #ececec;
}
.nav-primary ul.nav > li > a.active .text {
  display: none;
}
.nav-primary ul.nav > li > a.active .text-active {
  display: inline-block !important;
}
.nav-primary ul.nav > li:hover > a,
.nav-primary ul.nav > li:focus > a,
.nav-primary ul.nav > li > a:hover,
.nav-primary ul.nav > li > a:focus,
.nav-primary ul.nav > li > a:active,
.nav-primary ul.nav > li.active > a {
  color: #fff;
  background-color: inherit;
  background-color: rgba(0, 0, 0, 0.05) !important;
  text-shadow: none;
}
.nav-primary ul.nav > li:hover > a > i.icon,
.nav-primary ul.nav > li:focus > a > i.icon,
.nav-primary ul.nav > li > a:hover > i.icon,
.nav-primary ul.nav > li > a:focus > i.icon,
.nav-primary ul.nav > li > a:active > i.icon,
.nav-primary ul.nav > li.active > a > i.icon {
  color: #fff;
}
.nav-primary ul.nav > li:hover > a > i > b,
.nav-primary ul.nav > li:focus > a > i > b,
.nav-primary ul.nav > li > a:hover > i > b,
.nav-primary ul.nav > li > a:focus > i > b,
.nav-primary ul.nav > li > a:active > i > b,
.nav-primary ul.nav > li.active > a > i > b {
  left: 0 !important;
}
.nav-primary ul.nav > li li a {
  font-weight: normal;
  text-transform: none;
  font-size: 13px;
}
.nav-primary ul.nav > li.active > ul {
  display: block;
}
.nav-primary ul.nav ul {
  display: none;
}
@media (min-width: 768px) {
  .visible-nav-xs {
    display: none;
  }
  .nav-xs {
    width: 60px;
  }
  .nav-xs .slimScrollDiv,
  .nav-xs .slim-scroll {
    overflow: visible !important;
  }
  .nav-xs .slimScrollBar,
  .nav-xs .slimScrollRail {
    display: none !important;
  }
  .nav-xs .scrollable {
    overflow: visible;
  }
  .nav-xs .nav-primary > ul > li > a {
    position: relative;
    padding: 0;
    font-size: 11px;
    text-align: center;
    height: 60px;
    overflow-y: hidden;
    border: none;
  }
  .nav-xs .nav-primary > ul > li > a span {
    color: #fff !important;
    display: table-cell;
    vertical-align: middle;
    height: 60px;
    width: 60px;
    position: relative;
    z-index: 2;
  }
  .nav-xs .nav-primary > ul > li > a span.pull-right {
    display: none !important;
  }
  .nav-xs .nav-primary > ul > li > a i {
    width: auto;
    float: none;
    display: block;
    font-size: 19px;
    margin: 0;
    line-height: 60px;
    border: none !important;
    color: #fff !important;
    overflow: visible;
    -webkit-transition: margin-top 0.2s;
    transition: margin-top 0.2s;
  }
  .nav-xs .nav-primary > ul > li > a i b {
    left: 0 !important;
    -webkit-transition: top 0.2s;
    transition: top 0.2s;
  }
  .nav-xs .nav-primary > ul > li > a .badge {
    position: absolute;
    right: 6px;
    top: 4px;
    z-index: 3;
  }
  .nav-xs .nav-primary > ul > li:hover > a i,
  .nav-xs .nav-primary > ul > li:focus > a i,
  .nav-xs .nav-primary > ul > li:active > a i,
  .nav-xs .nav-primary > ul > li.active > a i {
    margin-top: -60px;
  }
  .nav-xs .nav-primary > ul > li:hover > a i b,
  .nav-xs .nav-primary > ul > li:focus > a i b,
  .nav-xs .nav-primary > ul > li:active > a i b,
  .nav-xs .nav-primary > ul > li.active > a i b {
    height: 60px;
    top: 60px;
  }
  .nav-xs .nav-primary > ul ul {
    display: none !important;
    position: absolute;
    left: 100%;
    top: 0;
    z-index: 1050;
    width: 220px;
    -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid #ddd;
    border: 1px solid rgba(0, 0, 0, 0.1);
    background-clip: padding-box;
  }
  .nav-xs .nav-primary li:hover > ul,
  .nav-xs .nav-primary li:focus > ul,
  .nav-xs .nav-primary li:active > ul {
    display: block !important;
  }
  .nav-xs.nav-xs-right .nav-primary > ul ul {
    left: auto;
    right: 100%;
  }
  .nav-xs > .vbox > .header,
  .nav-xs > .vbox > .footer {
    padding: 0 15px;
  }
  .nav-xs .hidden-nav-xs {
    display: none;
  }
  .nav-xs .visible-nav-xs {
    display: inherit;
  }
  .nav-xs .nav-user {
    padding: 12px 0;
  }
  .nav-xs .nav-user .avatar {
    float: none !important;
    margin-right: 0;
  }
  .nav-xs .nav-user .dropdown > a {
    display: block;
    text-align: center;
  }
  .nav-xs .navbar-header {
    float: none;
  }
  .nav-xs .navbar-brand {
    display: block;
    padding: 0;
  }
  .nav-xs .navbar-brand img {
    margin-right: 0;
  }
  .nav-xs .navbar {
    padding: 0;
  }
}
@media (max-width: 767px) {
  .navbar-fixed-top-xs {
    position: fixed;
    left: 0;
    width: 100%;
    z-index: 1100;
  }
  .navbar-fixed-top-xs + * {
    padding-top: 50px;
  }
  html,
  body {
    min-height: 100%;
    overflow-x: hidden;
  }
  .open,
  .open body {
    height: 100%;
  }
  .nav-primary .dropdown-menu {
    position: relative;
    float: none;
    left: 0;
    margin-left: 0;
    padding: 0;
  }
  .nav-primary .dropdown-menu a {
    padding: 15px;
    border-bottom: 1px solid #eee;
  }
  .nav-primary .dropdown-menu li:last-child a {
    border-bottom: none;
  }
  .navbar-header {
    text-align: center;
  }
  .nav-user {
    margin: 0;
    padding: 15px;
  }
  .nav-user.open {
    display: inherit !important;
  }
  .nav-user .dropdown-menu {
    display: block;
    position: static;
    float: none;
  }
  .nav-user .dropdown > a {
    display: block;
    text-align: center;
    font-size: 18px;
    padding-bottom: 10px;
  }
  .nav-user .avatar {
    width: 160px !important;
    float: none !important;
    display: block;
    margin: 20px auto;
    padding: 5px;
    background-color: rgba(255, 255, 255, 0.1);
    position: relative;
  }
  .nav-user .avatar:before {
    content: "";
    position: absolute;
    left: 5px;
    right: 5px;
    bottom: 5px;
    top: 5px;
    border: 4px solid #fff;
    border-radius: 500px;
  }
  .nav-off-screen {
    display: block !important;
    position: absolute;
    left: 0;
    top: 0;
    bottom: 0;
    width: 75%;
    visibility: visible;
    overflow-x: hidden;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch;
  }
  .nav-off-screen .nav-primary {
    display: block !important;
  }
  .nav-off-screen .navbar-fixed-top-xs {
    width: 75%;
  }
  .nav-off-screen.push-right .navbar-fixed-top-xs {
    left: 25%;
  }
  .nav-off-screen.push-right {
    left: auto;
    right: 0;
  }
  .nav-off-screen.push-right + * {
    -webkit-transform: translate3d(-75%, 0px, 0px);
    transform: translate3d(-75%, 0px, 0px);
  }
  .nav-off-screen + * {
    background-color: #f7f7f7;
    -webkit-transition: -webkit-transform 0.2s ease-in-out;
    -moz-transition: -moz-transform 0.2s ease-in-out;
    -o-transition: -o-transform 0.2s ease-in-out;
    transition: transform 0.2s ease-in-out;
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transform: translate3d(0px, 0px, 0px);
    transform: translate3d(0px, 0px, 0px);
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform: translate3d(75%, 0px, 0px);
    transform: translate3d(75%, 0px, 0px);
    overflow: hidden;
    position: absolute;
    width: 100%;
    top: 0px;
    bottom: 0;
    left: 0;
    right: 0;
    z-index: 2;
  }
  .nav-off-screen + * .nav-off-screen-block {
    display: block !important;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 1950;
  }
  .navbar + section .nav-off-screen {
    top: 50px;
  }
  .navbar + section .nav-off-screen + * {
    top: 50px;
  }
  .slimScrollDiv,
  .slim-scroll {
    overflow: visible !important;
    height: auto !important;
  }
  .slimScrollBar,
  .slimScrollRail {
    display: none !important;
  }
}
.arrow {
  border-width: 8px;
  z-index: 10;
}
.arrow,
.arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid;
}
.arrow:after {
  border-width: 7px;
  content: "";
}
.arrow.top {
  left: 50%;
  margin-left: -8px;
  border-top-width: 0;
  border-bottom-color: #eee;
  border-bottom-color: rgba(0, 0, 0, 0.1);
  top: -8px;
}
.arrow.top:after {
  content: " ";
  top: 1px;
  margin-left: -7px;
  border-top-width: 0;
  border-bottom-color: #fff;
}
.arrow.right {
  top: 50%;
  right: -8px;
  margin-top: -8px;
  border-right-width: 0;
  border-left-color: #eee;
  border-left-color: rgba(0, 0, 0, 0.1);
}
.arrow.right:after {
  content: " ";
  right: 1px;
  border-right-width: 0;
  border-left-color: #fff;
  bottom: -7px;
}
.arrow.bottom {
  left: 50%;
  margin-left: -8px;
  border-bottom-width: 0;
  border-top-color: #eee;
  border-top-color: rgba(0, 0, 0, 0.1);
  bottom: -8px;
}
.arrow.bottom:after {
  content: " ";
  bottom: 1px;
  margin-left: -7px;
  border-bottom-width: 0;
  border-top-color: #fff;
}
.arrow.left {
  top: 50%;
  left: -8px;
  margin-top: -8px;
  border-left-width: 0;
  border-right-color: #eee;
  border-right-color: rgba(0, 0, 0, 0.1);
}
.arrow.left:after {
  content: " ";
  left: 1px;
  border-left-width: 0;
  border-right-color: #fff;
  bottom: -7px;
}
.btn-link {
  color: #717171;
}
.btn-link.active {
  box-shadow: none;
}
.btn-default {
  color: #717171 !important;
  background-color: #fafafa;
  border-color: #dadada;
  border-bottom-color: #ccc;
  -webkit-box-shadow: 0 1px 1px rgba(90, 90, 90, 0.1);
  box-shadow: 0 1px 1px rgba(90, 90, 90, 0.1);
}
.btn-default:hover,
.btn-default:focus,
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
  color: #717171 !important;
  background-color: #ededed;
  border-color: #c6c6c6;
}
.btn-default:active,
.btn-default.active,
.open .dropdown-toggle.btn-default {
  background-image: none;
}
.btn-default.disabled,
.btn-default.disabled:hover,
.btn-default.disabled:focus,
.btn-default.disabled:active,
.btn-default.disabled.active,
.btn-default[disabled],
.btn-default[disabled]:hover,
.btn-default[disabled]:focus,
.btn-default[disabled]:active,
.btn-default[disabled].active,
fieldset[disabled] .btn-default,
fieldset[disabled] .btn-default:hover,
fieldset[disabled] .btn-default:focus,
fieldset[disabled] .btn-default:active,
fieldset[disabled] .btn-default.active {
  background-color: #fafafa;
  border-color: #dadada;
}
.btn-default.btn-bg {
  border-color: rgba(0, 0, 0, 0.1);
  background-clip: padding-box;
}
.btn-primary {
  color: #fff !important;
  background-color: #65bd77;
  border-color: #65bd77;
}
.btn-primary:hover,
.btn-primary:focus,
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  color: #fff !important;
  background-color: #53b567;
  border-color: #4bae5f;
}
.btn-primary:active,
.btn-primary.active,
.open .dropdown-toggle.btn-primary {
  background-image: none;
}
.btn-primary.disabled,
.btn-primary.disabled:hover,
.btn-primary.disabled:focus,
.btn-primary.disabled:active,
.btn-primary.disabled.active,
.btn-primary[disabled],
.btn-primary[disabled]:hover,
.btn-primary[disabled]:focus,
.btn-primary[disabled]:active,
.btn-primary[disabled].active,
fieldset[disabled] .btn-primary,
fieldset[disabled] .btn-primary:hover,
fieldset[disabled] .btn-primary:focus,
fieldset[disabled] .btn-primary:active,
fieldset[disabled] .btn-primary.active {
  background-color: #65bd77;
  border-color: #65bd77;
}
.btn-success {
  color: #fff !important;
  background-color: #8ec165;
  border-color: #8ec165;
}
.btn-success:hover,
.btn-success:focus,
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  color: #fff !important;
  background-color: #81ba53;
  border-color: #79b549;
}
.btn-success:active,
.btn-success.active,
.open .dropdown-toggle.btn-success {
  background-image: none;
}
.btn-success.disabled,
.btn-success.disabled:hover,
.btn-success.disabled:focus,
.btn-success.disabled:active,
.btn-success.disabled.active,
.btn-success[disabled],
.btn-success[disabled]:hover,
.btn-success[disabled]:focus,
.btn-success[disabled]:active,
.btn-success[disabled].active,
fieldset[disabled] .btn-success,
fieldset[disabled] .btn-success:hover,
fieldset[disabled] .btn-success:focus,
fieldset[disabled] .btn-success:active,
fieldset[disabled] .btn-success.active {
  background-color: #8ec165;
  border-color: #8ec165;
}
.btn-info {
  color: #fff !important;
  background-color: #4cc0c1;
  border-color: #4cc0c1;
}
.btn-info:hover,
.btn-info:focus,
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  color: #fff !important;
  background-color: #3fb4b5;
  border-color: #3ba9a9;
}
.btn-info:active,
.btn-info.active,
.open .dropdown-toggle.btn-info {
  background-image: none;
}
.btn-info.disabled,
.btn-info.disabled:hover,
.btn-info.disabled:focus,
.btn-info.disabled:active,
.btn-info.disabled.active,
.btn-info[disabled],
.btn-info[disabled]:hover,
.btn-info[disabled]:focus,
.btn-info[disabled]:active,
.btn-info[disabled].active,
fieldset[disabled] .btn-info,
fieldset[disabled] .btn-info:hover,
fieldset[disabled] .btn-info:focus,
fieldset[disabled] .btn-info:active,
fieldset[disabled] .btn-info.active {
  background-color: #4cc0c1;
  border-color: #4cc0c1;
}
.btn-warning {
  color: #fff !important;
  background-color: #ffc333;
  border-color: #ffc333;
}
.btn-warning:hover,
.btn-warning:focus,
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  color: #fff !important;
  background-color: #ffbc1a;
  border-color: #ffb70a;
}
.btn-warning:active,
.btn-warning.active,
.open .dropdown-toggle.btn-warning {
  background-image: none;
}
.btn-warning.disabled,
.btn-warning.disabled:hover,
.btn-warning.disabled:focus,
.btn-warning.disabled:active,
.btn-warning.disabled.active,
.btn-warning[disabled],
.btn-warning[disabled]:hover,
.btn-warning[disabled]:focus,
.btn-warning[disabled]:active,
.btn-warning[disabled].active,
fieldset[disabled] .btn-warning,
fieldset[disabled] .btn-warning:hover,
fieldset[disabled] .btn-warning:focus,
fieldset[disabled] .btn-warning:active,
fieldset[disabled] .btn-warning.active {
  background-color: #ffc333;
  border-color: #ffc333;
}
.btn-danger {
  color: #fff !important;
  background-color: #fb6b5b;
  border-color: #fb6b5b;
}
.btn-danger:hover,
.btn-danger:focus,
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  color: #fff !important;
  background-color: #fa5542;
  border-color: #fa4733;
}
.btn-danger:active,
.btn-danger.active,
.open .dropdown-toggle.btn-danger {
  background-image: none;
}
.btn-danger.disabled,
.btn-danger.disabled:hover,
.btn-danger.disabled:focus,
.btn-danger.disabled:active,
.btn-danger.disabled.active,
.btn-danger[disabled],
.btn-danger[disabled]:hover,
.btn-danger[disabled]:focus,
.btn-danger[disabled]:active,
.btn-danger[disabled].active,
fieldset[disabled] .btn-danger,
fieldset[disabled] .btn-danger:hover,
fieldset[disabled] .btn-danger:focus,
fieldset[disabled] .btn-danger:active,
fieldset[disabled] .btn-danger.active {
  background-color: #fb6b5b;
  border-color: #fb6b5b;
}
.btn-dark {
  color: #fff !important;
  background-color: #2e3e4e;
  border-color: #2e3e4e;
}
.btn-dark:hover,
.btn-dark:focus,
.btn-dark:active,
.btn-dark.active,
.open .dropdown-toggle.btn-dark {
  color: #fff !important;
  background-color: #25313e;
  border-color: #1f2a34;
}
.btn-dark:active,
.btn-dark.active,
.open .dropdown-toggle.btn-dark {
  background-image: none;
}
.btn-dark.disabled,
.btn-dark.disabled:hover,
.btn-dark.disabled:focus,
.btn-dark.disabled:active,
.btn-dark.disabled.active,
.btn-dark[disabled],
.btn-dark[disabled]:hover,
.btn-dark[disabled]:focus,
.btn-dark[disabled]:active,
.btn-dark[disabled].active,
fieldset[disabled] .btn-dark,
fieldset[disabled] .btn-dark:hover,
fieldset[disabled] .btn-dark:focus,
fieldset[disabled] .btn-dark:active,
fieldset[disabled] .btn-dark.active {
  background-color: #2e3e4e;
  border-color: #2e3e4e;
}
.btn-twitter {
  color: #fff !important;
  background-color: #00c7f7;
  border-color: #00c7f7;
}
.btn-twitter:hover,
.btn-twitter:focus,
.btn-twitter:active,
.btn-twitter.active,
.open .dropdown-toggle.btn-twitter {
  color: #fff !important;
  background-color: #00b2de;
  border-color: #00a6ce;
}
.btn-twitter:active,
.btn-twitter.active,
.open .dropdown-toggle.btn-twitter {
  background-image: none;
}
.btn-twitter.disabled,
.btn-twitter.disabled:hover,
.btn-twitter.disabled:focus,
.btn-twitter.disabled:active,
.btn-twitter.disabled.active,
.btn-twitter[disabled],
.btn-twitter[disabled]:hover,
.btn-twitter[disabled]:focus,
.btn-twitter[disabled]:active,
.btn-twitter[disabled].active,
fieldset[disabled] .btn-twitter,
fieldset[disabled] .btn-twitter:hover,
fieldset[disabled] .btn-twitter:focus,
fieldset[disabled] .btn-twitter:active,
fieldset[disabled] .btn-twitter.active {
  background-color: #00c7f7;
  border-color: #00c7f7;
}
.btn-facebook {
  color: #fff !important;
  background-color: #335397;
  border-color: #335397;
}
.btn-facebook:hover,
.btn-facebook:focus,
.btn-facebook:active,
.btn-facebook.active,
.open .dropdown-toggle.btn-facebook {
  color: #fff !important;
  background-color: #2d4984;
  border-color: #294279;
}
.btn-facebook:active,
.btn-facebook.active,
.open .dropdown-toggle.btn-facebook {
  background-image: none;
}
.btn-facebook.disabled,
.btn-facebook.disabled:hover,
.btn-facebook.disabled:focus,
.btn-facebook.disabled:active,
.btn-facebook.disabled.active,
.btn-facebook[disabled],
.btn-facebook[disabled]:hover,
.btn-facebook[disabled]:focus,
.btn-facebook[disabled]:active,
.btn-facebook[disabled].active,
fieldset[disabled] .btn-facebook,
fieldset[disabled] .btn-facebook:hover,
fieldset[disabled] .btn-facebook:focus,
fieldset[disabled] .btn-facebook:active,
fieldset[disabled] .btn-facebook.active {
  background-color: #335397;
  border-color: #335397;
}
.btn-gplus {
  color: #fff !important;
  background-color: #dd4a38;
  border-color: #dd4a38;
}
.btn-gplus:hover,
.btn-gplus:focus,
.btn-gplus:active,
.btn-gplus.active,
.open .dropdown-toggle.btn-gplus {
  color: #fff !important;
  background-color: #d73825;
  border-color: #ca3522;
}
.btn-gplus:active,
.btn-gplus.active,
.open .dropdown-toggle.btn-gplus {
  background-image: none;
}
.btn-gplus.disabled,
.btn-gplus.disabled:hover,
.btn-gplus.disabled:focus,
.btn-gplus.disabled:active,
.btn-gplus.disabled.active,
.btn-gplus[disabled],
.btn-gplus[disabled]:hover,
.btn-gplus[disabled]:focus,
.btn-gplus[disabled]:active,
.btn-gplus[disabled].active,
fieldset[disabled] .btn-gplus,
fieldset[disabled] .btn-gplus:hover,
fieldset[disabled] .btn-gplus:focus,
fieldset[disabled] .btn-gplus:active,
fieldset[disabled] .btn-gplus.active {
  background-color: #dd4a38;
  border-color: #dd4a38;
}
.btn {
  font-weight: 500;
  border-radius: 2px;
}
.btn-icon {
  padding-left: 0;
  padding-right: 0;
  width: 34px;
  text-align: center;
}
.btn-icon.btn-sm {
  width: 30px;
}
.btn-icon.btn-lg {
  width: 45px;
}
.text-active,
.active > .text {
  display: none !important;
}
.active > .text-active {
  display: inline-block !important;
}
.btn-group-justified {
  border-collapse: separate;
}
.btn-rounded {
  border-radius: 50px;
}
.btn > i.pull-left,
.btn > i.pull-right {
  line-height: 1.428571429;
}
.btn-block {
  padding-left: 12px;
  padding-right: 12px;
}
.btn-group-vertical > .btn:first-child:not(:last-child) {
  border-top-right-radius: 2px;
}
.btn-group-vertical > .btn:last-child:not(:first-child) {
  border-bottom-left-radius: 2px;
}
.chat-item:before,
.chat-item:after {
  content: " ";
  display: table;
}
.chat-item:after {
  clear: both;
}
.chat-item .arrow {
  top: 20px;
}
.chat-item .arrow.right:after {
  border-left-color: #8ec165;
}
.chat-item .chat-body {
  position: relative;
  margin-left: 45px;
  min-height: 30px;
}
.chat-item .chat-body .panel {
  margin: 0 -1px;
}
.chat-item.right .chat-body {
  margin-left: 0;
  margin-right: 45px;
}
.chat-item + .chat-item {
  margin-top: 15px;
}
.comment-list {
  position: relative;
}
.comment-list .comment-item {
  margin-top: 0;
  position: relative;
}
.comment-list .comment-item > .thumb-sm {
  width: 36px;
}
.comment-list .comment-item .arrow.left {
  top: 20px;
  left: 39px;
}
.comment-list .comment-item .comment-body {
  margin-left: 46px;
}
.comment-list .comment-item .panel-body {
  padding: 10px 15px;
}
.comment-list .comment-item .panel-heading,
.comment-list .comment-item .panel-footer {
  position: relative;
  font-size: 12px;
  background-color: #fff;
}
.comment-list .comment-reply {
  margin-left: 46px;
}
.comment-list:before {
  position: absolute;
  top: 0;
  bottom: 35px;
  left: 18px;
  width: 1px;
  background: #e0e4e8;
  content: "";
}
.timeline {
  display: table;
  width: 100%;
  border-spacing: 0;
  table-layout: fixed;
  position: relative;
  border-collapse: collapse;
}
.timeline:before {
  content: "";
  width: 6px;
  margin-left: -4px;
  position: absolute;
  left: 50%;
  top: 0;
  bottom: 30px;
  background-color: #ddd;
  z-index: 0;
}
.timeline .timeline-date {
  position: absolute;
  width: 150px;
  left: -200px;
  top: 50%;
  margin-top: -9px;
  text-align: right;
}
.timeline .timeline-icon {
  position: absolute;
  left: -41px;
  top: -2px;
  top: 50%;
  margin-top: -15px;
}
.timeline .time-icon {
  width: 30px;
  height: 30px;
  line-height: 26px;
  display: inline-block !important;
  z-index: 10;
  border: 2px solid #fff;
  border-radius: 20px;
  text-align: center;
}
.timeline .time-icon:before {
  font-size: 16px;
  margin-top: 5px;
}
.timeline-item {
  display: table-row;
}
.timeline-item:before,
.timeline-item.alt:after {
  content: "";
  display: block;
  width: 50%;
}
.timeline-item.alt {
  text-align: right;
}
.timeline-item.alt:before {
  display: none;
}
.timeline-item.alt .panel {
  margin-right: 25px;
  margin-left: 0;
}
.timeline-item.alt .timeline-date {
  left: auto;
  right: -200px;
  text-align: left;
}
.timeline-item.alt .timeline-icon {
  left: auto;
  right: -41px;
}
.timeline-item.active {
  display: table-caption;
  text-align: center;
}
.timeline-item.active:before {
  width: 1%;
}
.timeline-item.active .timeline-caption {
  display: inline-block;
  width: auto;
}
.timeline-item.active .timeline-caption h5 span {
  color: #fff;
}
.timeline-item.active .panel {
  margin-left: 0;
}
.timeline-item.active .timeline-date,
.timeline-item.active .timeline-icon {
  position: static;
  margin-bottom: 10px;
  display: inline-block;
  width: auto;
}
.timeline-caption {
  display: table-cell;
  vertical-align: top;
  width: 50%;
}
.timeline-caption .panel {
  display: inline-block;
  position: relative;
  margin-left: 25px;
  text-align: left;
}
.timeline-caption h5 {
  margin: 0;
}
.timeline-caption h5 span {
  display: block;
  color: #999;
  margin-bottom: 4px;
  font-size: 12px;
}
.timeline-caption p {
  font-size: 12px;
  margin-bottom: 0;
  margin-top: 10px;
}
.timeline-footer {
  display: table-row;
}
.timeline-footer a {
  display: table-cell;
  text-align: right;
}
.timeline-footer .time-icon {
  margin-right: -15px;
  z-index: 5;
}
#note-list .note-name,
#note-list .note-desc {
  height: 20px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
#note-list .note-desc {
  height: 16px;
  font-size: 11px;
}
#note-list li {
  cursor: pointer;
}
#task-list .edit {
  display: none;
  float: left;
  position: relative;
  left: 0;
  top: -8px;
  border-width: 0;
  background: transparent;
  box-shadow: none;
  padding: 0 30px 0 0;
  font-size: 13px;
  color: #fff;
}
#task-list .editing .task-name {
  display: none;
}
#task-list .editing .edit {
  display: block;
}
#task-list .checkbox {
  margin: 4px 0;
}
#task-list li {
  position: relative;
}
#task-list li .close {
  position: absolute;
  top: 13px;
  right: 15px;
}
#task-list li.done .task-name {
  text-decoration: line-through;
}
#task-detail textarea {
  height: 60px;
  font-size: 12px;
  border-radius: 0;
}
.paper {
  position: relative;
  background: -webkit-linear-gradient(top, #f0f0f0 0%, white 5%) 0 0;
  background: -moz-linear-gradient(top, #f0f0f0 0%, white 5%) 0 0;
  background: linear-gradient(top, #f0f0f0 0%, white 5%) 0 0;
  -webkit-background-size: 100% 30px;
  -moz-background-size: 100% 30px;
  -ms-background-size: 100% 30px;
  background-size: 100% 30px;
}
.paper:before {
  content: "";
  position: absolute;
  width: 0px;
  top: 0;
  left: 39px;
  bottom: 0;
  border-left: 1px solid #f9d3d3;
}
.paper textarea {
  border: none;
  background-color: transparent;
  height: 100%;
  padding: 30px 0 0 55px;
  line-height: 30px;
  min-height: 210px;
}
.tags .label {
  font-size: 1em;
  display: inline-block;
  padding: 6px 10px;
  margin-bottom: 3px;
}
.post-item {
  border-radius: 3px;
  background-color: #fff;
  -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.15);
  margin-bottom: 15px;
}
.post-item .post-title {
  margin-top: 0;
}
.post-item .post-media {
  text-align: center;
}
.post-item .post-media img {
  border-radius: 3px 3px 0 0;
}
.switch {
  cursor: pointer;
  position: relative;
}
.switch input {
  position: absolute;
  opacity: 0;
  filter: alpha(opacity=0);
}
.switch input:checked + span {
  background-color: #8ec165;
}
.switch input:checked + span:after {
  left: 31px;
}
.switch span {
  position: relative;
  width: 60px;
  height: 30px;
  border-radius: 30px;
  background-color: #fff;
  border: 1px solid #eee;
  border-color: rgba(0, 0, 0, 0.1);
  display: inline-block;
  -webkit-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.switch span:after {
  content: "";
  position: absolute;
  background-color: #fff;
  width: 26px;
  top: 1px;
  bottom: 1px;
  border-radius: 30px;
  -webkit-box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.25);
  -webkit-transition: left 0.2s;
  transition: left 0.2s;
}
.nav-docs > ul > li > a {
  padding-top: 5px !important;
  padding-bottom: 5px !important;
}
.dropfile {
  border: 2px dashed #e0e4e8;
  text-align: center;
  min-height: 20px;
}
.dropfile.hover {
  border-color: #aac3cc;
}
.dropfile small {
  margin: 50px 0;
  display: block;
}
.portlet {
  min-height: 30px;
}
.jqstooltip {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}
.easypiechart {
  position: relative;
  text-align: center;
}
.easypiechart .h2 {
  margin-left: 10px;
  margin-top: 10px;
  display: inline-block;
}
.easypiechart canvas {
  position: absolute;
  top: 0;
  left: 0;
}
.easypiechart .easypie-text {
  position: absolute;
  z-index: 1;
  line-height: 1;
  font-size: 75%;
  width: 100%;
  top: 60%;
}
.easypiechart img {
  margin-top: -4px;
}
.combodate select {
  display: inline-block;
}
.doc-buttons .btn {
  margin-bottom: 5px;
}
.the-icons {
  list-style: none;
}
.fontawesome-icon-list i {
  font-size: 14px;
  width: 40px;
  margin: 0;
  display: inline-block;
  text-align: center;
}
.fontawesome-icon-list a {
  line-height: 32px;
  display: block;
  white-space: nowrap;
}
.fontawesome-icon-list a:hover i {
  font-size: 28px;
  vertical-align: middle;
}
.th-sortable {
  cursor: pointer;
}
.th-sortable .th-sort {
  float: right;
  position: relative;
}
.th-sort i {
  position: relative;
  z-index: 1;
}
.th-sort .fa-sort {
  position: absolute;
  left: 0;
  top: 3px;
  color: #bac3cc;
  z-index: 0;
}
.th-sortable.active .text {
  display: none !important;
}
.th-sortable.active .text-active {
  display: inline-block !important;
}
.sortable-placeholder {
  list-style: none;
  border: 1px dashed #ccc;
  min-height: 50px;
  margin-bottom: 5px;
}
.input-append.date .add-on i,
.input-prepend.date .add-on i {
  display: block;
  cursor: pointer;
  width: 16px;
  height: 16px;
}
.parsley-error-list {
  margin: 0;
  padding: 0;
  list-style: none;
  margin-top: 6px;
  font-size: 12px;
}
.parsley-error {
  border-color: #ff5f5f !important;
}
.datepicker td.active,
.datepicker td.active:hover,
.datepicker td.active:hover.active,
.datepicker td.active.active {
  background: #65bd77;
}
.wizard .badge-info {
  background-color: #4cc0c1;
}
.wizard .badge-success {
  background-color: #8ec165;
}
.wizard ul li.active {
  color: #4cc0c1;
}
#flotTip {
  padding: 3px 5px;
  background-color: #000;
  z-index: 100;
  color: #fff;
  opacity: 0.7;
  filter: alpha(opacity=70);
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
.bg-gradient {
  background-image: -webkit-gradient(
    linear,
    left 0,
    left 100%,
    from(rgba(40, 50, 60, 0)),
    to(rgba(40, 50, 60, 0.05))
  );
  background-image: -webkit-linear-gradient(
    top,
    rgba(40, 50, 60, 0),
    0,
    rgba(40, 50, 60, 0.05),
    100%
  );
  background-image: -moz-linear-gradient(
    top,
    rgba(40, 50, 60, 0) 0,
    rgba(40, 50, 60, 0.05) 100%
  );
  background-image: linear-gradient(
    to bottom,
    rgba(40, 50, 60, 0) 0,
    rgba(40, 50, 60, 0.05) 100%
  );
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0028323c',endColorstr='#0c28323c',GradientType=0);
  filter: none;
}
.bg-light {
  background-color: #f1f1f1;
  color: #717171;
}
.bg-light.lt,
.bg-light .lt {
  background-color: #f7f7f7;
}
.bg-light.lter,
.bg-light .lter {
  background-color: #fefefe;
}
.bg-light.dk,
.bg-light .dk {
  background-color: #ebebeb;
}
.bg-light.dker,
.bg-light .dker {
  background-color: #e4e4e4;
}
.bg-light .bg {
  background-color: #f1f1f1;
}
.bg-dark {
  background-color: #2e3e4e;
  color: #9db1c5;
}
.bg-dark.lt,
.bg-dark .lt {
  background-color: #374b5e;
}
.bg-dark.lter,
.bg-dark .lter {
  background-color: #41586e;
}
.bg-dark.dk,
.bg-dark .dk {
  background-color: #25313e;
}
.bg-dark.dker,
.bg-dark .dker {
  background-color: #1b252e;
}
.bg-dark .bg {
  background-color: #2e3e4e;
}
.bg-dark a {
  color: #adbece;
}
.bg-dark a:hover {
  color: #fff;
}
.bg-dark a.list-group-item:hover,
.bg-dark a.list-group-item:focus {
  background-color: inherit;
}
.bg-dark .nav .caret {
  border-top-color: #9db1c5;
  border-bottom-color: #9db1c5;
}
.bg-dark .nav > li > a {
  color: #adbece;
}
.bg-dark .nav > li > a:hover,
.bg-dark .nav > li > a:focus {
  color: #fff;
  background-color: #25313e;
}
.bg-dark .nav > li > a:hover .caret,
.bg-dark .nav > li > a:focus .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}
.bg-dark .nav .open > a {
  background-color: #25313e;
}
.bg-dark.navbar .nav > li.active > a {
  color: #fff;
  background-color: #25313e;
}
.bg-dark .open > a,
.bg-dark .open > a:hover,
.bg-dark .open > a:focus {
  color: #fff;
}
.bg-dark .text-muted {
  color: #8da4bb !important;
}
.bg-dark .icon-muted {
  color: #4a647e !important;
}
.bg-black {
  background-color: #282828;
  color: #9b9b9b;
}
.bg-black.lt,
.bg-black .lt {
  background-color: #353535;
}
.bg-black.lter,
.bg-black .lter {
  background-color: #424242;
}
.bg-black.dk,
.bg-black .dk {
  background-color: #1b1b1b;
}
.bg-black.dker,
.bg-black .dker {
  background-color: #0f0f0f;
}
.bg-black .bg {
  background-color: #282828;
}
.bg-black a {
  color: #a8a8a8;
}
.bg-black a:hover {
  color: #fff;
}
.bg-black a.list-group-item:hover,
.bg-black a.list-group-item:focus {
  background-color: inherit;
}
.bg-black .nav .caret {
  border-top-color: #9b9b9b;
  border-bottom-color: #9b9b9b;
}
.bg-black .nav > li > a {
  color: #a8a8a8;
}
.bg-black .nav > li > a:hover,
.bg-black .nav > li > a:focus {
  color: #fff;
  background-color: #1b1b1b;
}
.bg-black .nav > li > a:hover .caret,
.bg-black .nav > li > a:focus .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}
.bg-black .nav .open > a {
  background-color: #1b1b1b;
}
.bg-black.navbar .nav > li.active > a {
  color: #fff;
  background-color: #1b1b1b;
}
.bg-black .open > a,
.bg-black .open > a:hover,
.bg-black .open > a:focus {
  color: #fff;
}
.bg-black .text-muted {
  color: #8e8e8e !important;
}
.bg-black .icon-muted {
  color: #4e4e4e !important;
}
.bg-primary {
  background-color: #65bd77;
  color: #e2f3e5;
}
.bg-primary.lt,
.bg-primary .lt {
  background-color: #77c587;
}
.bg-primary.lter,
.bg-primary .lter {
  background-color: #89cc97;
}
.bg-primary.dk,
.bg-primary .dk {
  background-color: #53b567;
}
.bg-primary.dker,
.bg-primary .dker {
  background-color: #48a75b;
}
.bg-primary .bg {
  background-color: #65bd77;
}
.bg-primary a {
  color: #ffffff;
}
.bg-primary a:hover {
  color: #fff;
}
.bg-primary a.list-group-item:hover,
.bg-primary a.list-group-item:focus {
  background-color: inherit;
}
.bg-primary .nav .caret {
  border-top-color: #e2f3e5;
  border-bottom-color: #e2f3e5;
}
.bg-primary .nav > li > a {
  color: #ffffff;
}
.bg-primary .nav > li > a:hover,
.bg-primary .nav > li > a:focus {
  color: #fff;
  background-color: #53b567;
}
.bg-primary .nav > li > a:hover .caret,
.bg-primary .nav > li > a:focus .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}
.bg-primary .nav .open > a {
  background-color: #53b567;
}
.bg-primary.navbar .nav > li.active > a {
  color: #fff;
  background-color: #53b567;
}
.bg-primary .open > a,
.bg-primary .open > a:hover,
.bg-primary .open > a:focus {
  color: #fff;
}
.bg-primary .text-muted {
  color: #d0ebd6 !important;
}
.bg-primary .icon-muted {
  color: #77c587 !important;
}
.bg-success {
  background-color: #8ec165;
  color: #ebf4e4;
}
.bg-success.lt,
.bg-success .lt {
  background-color: #9bc877;
}
.bg-success.lter,
.bg-success .lter {
  background-color: #a9d089;
}
.bg-success.dk,
.bg-success .dk {
  background-color: #81ba53;
}
.bg-success.dker,
.bg-success .dker {
  background-color: #74ad46;
}
.bg-success .bg {
  background-color: #8ec165;
}
.bg-success a {
  color: #ffffff;
}
.bg-success a:hover {
  color: #fff;
}
.bg-success a.list-group-item:hover,
.bg-success a.list-group-item:focus {
  background-color: inherit;
}
.bg-success .nav .caret {
  border-top-color: #ebf4e4;
  border-bottom-color: #ebf4e4;
}
.bg-success .nav > li > a {
  color: #ffffff;
}
.bg-success .nav > li > a:hover,
.bg-success .nav > li > a:focus {
  color: #fff;
  background-color: #81ba53;
}
.bg-success .nav > li > a:hover .caret,
.bg-success .nav > li > a:focus .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}
.bg-success .nav .open > a {
  background-color: #81ba53;
}
.bg-success.navbar .nav > li.active > a {
  color: #fff;
  background-color: #81ba53;
}
.bg-success .open > a,
.bg-success .open > a:hover,
.bg-success .open > a:focus {
  color: #fff;
}
.bg-success .text-muted {
  color: #deedd2 !important;
}
.bg-success .icon-muted {
  color: #9bc877 !important;
}
.bg-info {
  background-color: #4cc0c1;
  color: #d1efef;
}
.bg-info.lt,
.bg-info .lt {
  background-color: #5fc7c8;
}
.bg-info.lter,
.bg-info .lter {
  background-color: #72cdce;
}
.bg-info.dk,
.bg-info .dk {
  background-color: #3fb4b5;
}
.bg-info.dker,
.bg-info .dker {
  background-color: #38a1a2;
}
.bg-info .bg {
  background-color: #4cc0c1;
}
.bg-info a {
  color: #ffffff;
}
.bg-info a:hover {
  color: #fff;
}
.bg-info a.list-group-item:hover,
.bg-info a.list-group-item:focus {
  background-color: inherit;
}
.bg-info .nav .caret {
  border-top-color: #d1efef;
  border-bottom-color: #d1efef;
}
.bg-info .nav > li > a {
  color: #ffffff;
}
.bg-info .nav > li > a:hover,
.bg-info .nav > li > a:focus {
  color: #fff;
  background-color: #3fb4b5;
}
.bg-info .nav > li > a:hover .caret,
.bg-info .nav > li > a:focus .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}
.bg-info .nav .open > a {
  background-color: #3fb4b5;
}
.bg-info.navbar .nav > li.active > a {
  color: #fff;
  background-color: #3fb4b5;
}
.bg-info .open > a,
.bg-info .open > a:hover,
.bg-info .open > a:focus {
  color: #fff;
}
.bg-info .text-muted {
  color: #bee8e8 !important;
}
.bg-info .icon-muted {
  color: #5fc7c8 !important;
}
.bg-warning {
  background-color: #ffc333;
  color: #fff8e6;
}
.bg-warning.lt,
.bg-warning .lt {
  background-color: #ffcb4d;
}
.bg-warning.lter,
.bg-warning .lter {
  background-color: #ffd266;
}
.bg-warning.dk,
.bg-warning .dk {
  background-color: #ffbc1a;
}
.bg-warning.dker,
.bg-warning .dker {
  background-color: #ffb400;
}
.bg-warning .bg {
  background-color: #ffc333;
}
.bg-warning a {
  color: #ffffff;
}
.bg-warning a:hover {
  color: #fff;
}
.bg-warning a.list-group-item:hover,
.bg-warning a.list-group-item:focus {
  background-color: inherit;
}
.bg-warning .nav .caret {
  border-top-color: #fff8e6;
  border-bottom-color: #fff8e6;
}
.bg-warning .nav > li > a {
  color: #ffffff;
}
.bg-warning .nav > li > a:hover,
.bg-warning .nav > li > a:focus {
  color: #fff;
  background-color: #ffbc1a;
}
.bg-warning .nav > li > a:hover .caret,
.bg-warning .nav > li > a:focus .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}
.bg-warning .nav .open > a {
  background-color: #ffbc1a;
}
.bg-warning.navbar .nav > li.active > a {
  color: #fff;
  background-color: #ffbc1a;
}
.bg-warning .open > a,
.bg-warning .open > a:hover,
.bg-warning .open > a:focus {
  color: #fff;
}
.bg-warning .text-muted {
  color: #fff0cc !important;
}
.bg-warning .icon-muted {
  color: #ffcb4d !important;
}
.bg-danger {
  background-color: #fb6b5b;
  color: #ffffff;
}
.bg-danger.lt,
.bg-danger .lt {
  background-color: #fc8174;
}
.bg-danger.lter,
.bg-danger .lter {
  background-color: #fc988d;
}
.bg-danger.dk,
.bg-danger .dk {
  background-color: #fa5542;
}
.bg-danger.dker,
.bg-danger .dker {
  background-color: #fa3e29;
}
.bg-danger .bg {
  background-color: #fb6b5b;
}
.bg-danger a {
  color: #ffffff;
}
.bg-danger a:hover {
  color: #fff;
}
.bg-danger a.list-group-item:hover,
.bg-danger a.list-group-item:focus {
  background-color: inherit;
}
.bg-danger .nav .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
.bg-danger .nav > li > a {
  color: #ffffff;
}
.bg-danger .nav > li > a:hover,
.bg-danger .nav > li > a:focus {
  color: #fff;
  background-color: #fa5542;
}
.bg-danger .nav > li > a:hover .caret,
.bg-danger .nav > li > a:focus .caret {
  border-top-color: #fff;
  border-bottom-color: #fff;
}
.bg-danger .nav .open > a {
  background-color: #fa5542;
}
.bg-danger.navbar .nav > li.active > a {
  color: #fff;
  background-color: #fa5542;
}
.bg-danger .open > a,
.bg-danger .open > a:hover,
.bg-danger .open > a:focus {
  color: #fff;
}
.bg-danger .text-muted {
  color: #fff2f0 !important;
}
.bg-danger .icon-muted {
  color: #fc8174 !important;
}
.bg-white {
  background-color: #fff;
  color: #717171;
}
.bg-white a {
  color: #2e3e4e;
}
.bg-white a:hover {
  color: #1b252e;
}
.bg-white .text-muted {
  color: #979797 !important;
}
.bg-white-only {
  background-color: #fff;
}
.bg-empty {
  background-color: transparent;
}
.pos-rlt {
  position: relative;
}
.pos-stc {
  position: static;
}
.pos-abt {
  position: absolute;
}
.line {
  *width: 100%;
  height: 2px;
  margin: 10px 0;
  font-size: 0;
  overflow: hidden;
  background-color: transparent;
  border-width: 0;
  border-top: 1px solid #e8e8e8;
}
.line-xs {
  margin: 0;
}
.line-lg {
  margin-top: 15px;
  margin-bottom: 15px;
}
.line-dashed {
  border-style: dashed;
  background: transparent;
}
.no-line {
  border-width: 0;
}
.no-border,
.no-borders {
  border-color: transparent;
  border-width: 0;
}
.no-radius {
  border-radius: 0;
}
.block {
  display: block;
}
.block.hide {
  display: none;
}
.inline {
  display: inline-block !important;
}
.pull-none {
  float: none;
}
.rounded {
  border-radius: 500px;
}
.btn-s-xs {
  min-width: 90px;
}
.btn-s-sm {
  min-width: 100px;
}
.btn-s-md {
  min-width: 120px;
}
.btn-s-lg {
  min-width: 150px;
}
.btn-s-xl {
  min-width: 200px;
}
.l-h-2x {
  line-height: 2em;
}
.l-h-1x {
  line-height: 1.2;
}
.l-h {
  line-height: 1.5;
}
.v-middle {
  vertical-align: middle !important;
}
.v-top {
  vertical-align: top !important;
}
.v-bottom {
  vertical-align: bottom !important;
}
.font-thin {
  font-weight: 300;
}
.font-normal {
  font-weight: normal;
}
.font-semibold {
  font-weight: 600;
}
.font-bold {
  font-weight: 700;
}
.text-md {
  font-size: 0.85em;
}
.text-sm {
  font-size: 12px;
}
.text-xs {
  font-size: 10px;
}
.text-ellipsis {
  display: block;
  white-space: nowrap;
  width: 100%;
  overflow: hidden;
  text-overflow: ellipsis;
}
.text-uc {
  text-transform: uppercase;
}
.text-lt {
  text-decoration: line-through;
}
.text-ul {
  text-decoration: underline;
}
.box-shadow {
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
}
.avatar {
  border: 1px solid rgba(255, 255, 255, 0.35);
  display: block;
  border-radius: 500px;
  white-space: nowrap;
}
.avatar img {
  border-radius: 500px;
}
.wrapper-sm {
  padding: 10px;
}
.wrapper {
  padding: 15px;
}
.wrapper-md {
  padding: 20px;
}
.wrapper-lg {
  padding: 30px;
}
.wrapper-xl {
  padding: 50px;
}
.padder {
  padding-left: 15px;
  padding-right: 15px;
}
.padder-v {
  padding-top: 15px;
  padding-bottom: 15px;
}
.no-padder {
  padding: 0 !important;
}
.pull-in {
  margin-left: -15px;
  margin-right: -15px;
}
.pull-out {
  margin: -10px -15px;
}
.b-a {
  border: 1px solid #cfcfcf;
}
.b-t {
  border-top: 1px solid #cfcfcf;
}
.b-r {
  border-right: 1px solid #cfcfcf;
}
.b-b {
  border-bottom: 1px solid #cfcfcf;
}
.b-l {
  border-left: 1px solid #cfcfcf;
}
.b-light {
  border-color: #e4e4e4;
}
.b-dark {
  border-color: #374b5e;
}
.b-primary {
  border-color: #77c587;
}
.b-success {
  border-color: #9bc877;
}
.b-info {
  border-color: #5fc7c8;
}
.b-warning {
  border-color: #ffcb4d;
}
.b-danger {
  border-color: #fc8174;
}
.b-black {
  border-color: #353535;
}
.b-white {
  border-color: #fff;
}
.b-2x {
  border-width: 2px;
}
.b-3x {
  border-width: 3px;
}
.r {
  border-radius: 2px 2px 2px 2px;
}
.r-l {
  border-radius: 2px 0 0 2px;
}
.r-r {
  border-radius: 0 2px 2px 0;
}
.r-t {
  border-radius: 2px 2px 0 0;
}
.r-b {
  border-radius: 0 0 2px 2px;
}
.m-xs {
  margin: 5px;
}
.m-sm {
  margin: 10px;
}
.m {
  margin: 15px;
}
.m-md {
  margin: 20px;
}
.m-lg {
  margin: 30px;
}
.m-n {
  margin: 0 !important;
}
.m-l-none {
  margin-left: 0;
}
.m-l-xs {
  margin-left: 5px;
}
.m-l-sm {
  margin-left: 10px;
}
.m-l {
  margin-left: 15px;
}
.m-l-md {
  margin-left: 20px;
}
.m-l-lg {
  margin-left: 30px;
}
.m-l-xl {
  margin-left: 40px;
}
.m-l-n-xxs {
  margin-left: -1px;
}
.m-l-n-xs {
  margin-left: -5px;
}
.m-l-n-sm {
  margin-left: -10px;
}
.m-l-n {
  margin-left: -15px;
}
.m-l-n-md {
  margin-left: -20px;
}
.m-l-n-lg {
  margin-left: -30px;
}
.m-l-n-xl {
  margin-left: -40px;
}
.m-t-none {
  margin-top: 0;
}
.m-t-xxs {
  margin-top: 1px;
}
.m-t-xs {
  margin-top: 5px;
}
.m-t-sm {
  margin-top: 10px;
}
.m-t {
  margin-top: 15px;
}
.m-t-md {
  margin-top: 20px;
}
.m-t-lg {
  margin-top: 30px;
}
.m-t-xl {
  margin-top: 40px;
}
.m-t-n-xxs {
  margin-top: -1px;
}
.m-t-n-xs {
  margin-top: -5px;
}
.m-t-n-sm {
  margin-top: -10px;
}
.m-t-n {
  margin-top: -15px;
}
.m-t-n-md {
  margin-top: -20px;
}
.m-t-n-lg {
  margin-top: -30px;
}
.m-t-n-xl {
  margin-top: -40px;
}
.m-r-none {
  margin-right: 0;
}
.m-r-xs {
  margin-right: 5px;
}
.m-r-sm {
  margin-right: 10px;
}
.m-r {
  margin-right: 15px;
}
.m-r-md {
  margin-right: 20px;
}
.m-r-lg {
  margin-right: 30px;
}
.m-r-xl {
  margin-right: 40px;
}
.m-r-n-xxs {
  margin-right: -1px;
}
.m-r-n-xs {
  margin-right: -5px;
}
.m-r-n-sm {
  margin-right: -10px;
}
.m-r-n {
  margin-right: -15px;
}
.m-r-n-md {
  margin-right: -20px;
}
.m-r-n-lg {
  margin-right: -30px;
}
.m-r-n-xl {
  margin-right: -40px;
}
.m-b-none {
  margin-bottom: 0;
}
.m-b-xs {
  margin-bottom: 5px;
}
.m-b-sm {
  margin-bottom: 10px;
}
.m-b {
  margin-bottom: 15px;
}
.m-b-md {
  margin-bottom: 20px;
}
.m-b-lg {
  margin-bottom: 30px;
}
.m-b-xl {
  margin-bottom: 40px;
}
.m-b-n-xxs {
  margin-bottom: -1px;
}
.m-b-n-xs {
  margin-bottom: -5px;
}
.m-b-n-sm {
  margin-bottom: -10px;
}
.m-b-n {
  margin-bottom: -15px;
}
.m-b-n-md {
  margin-bottom: -20px;
}
.m-b-n-lg {
  margin-bottom: -30px;
}
.m-b-n-xl {
  margin-bottom: -40px;
}
.media-xs {
  min-width: 50px;
}
.media-sm {
  min-width: 80px;
}
.media-md {
  min-width: 90px;
}
.media-lg {
  min-width: 120px;
}
.thumb {
  width: 64px;
  display: inline-block;
}
.thumb-lg {
  width: 128px;
  display: inline-block;
}
.thumb-md {
  width: 90px;
  display: inline-block;
}
.thumb-xs {
  width: 18px;
  display: inline-block;
}
.thumb-sm {
  width: 36px;
  display: inline-block;
}
.thumb-wrapper {
  padding: 2px;
  border: 1px solid #ddd;
}
.thumb img,
.thumb-xs img,
.thumb-sm img,
.thumb-md img,
.thumb-lg img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}
.img-full {
  max-width: 100%;
}
.img-full > img {
  max-width: 100%;
}
.clear {
  display: block;
  overflow: hidden;
}
.scroll-x,
.scroll-y {
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
}
.scroll-y {
  overflow-y: auto;
}
.scroll-x {
  overflow-x: auto;
}
.no-touch .scroll-x,
.no-touch .scroll-y {
  overflow: hidden;
}
.no-touch .scroll-x:hover,
.no-touch .scroll-x:focus,
.no-touch .scroll-x:active {
  overflow-x: auto;
}
.no-touch .scroll-y:hover,
.no-touch .scroll-y:focus,
.no-touch .scroll-y:active {
  overflow-y: auto;
}
.no-touch .hover-action {
  display: none;
}
.no-touch .hover:hover .hover-action {
  display: inherit;
}
.h {
  font-size: 170px;
  font-weight: 300;
  text-shadow: 0 1px 0 #d9d9d9, 0 2px 0 #d0d0d0, 0 5px 10px rgba(0, 0, 0, 0.125),
    0 10px 20px rgba(0, 0, 0, 0.2);
}
@media screen and (min-width: 992px) {
  .col-lg-2-4 {
    width: 20%;
    float: left;
  }
}
@media (max-width: 767px) {
  .shift {
    display: none !important;
  }
  .shift.in {
    display: block !important;
  }
  .row-2 [class*="col"] {
    width: 50%;
    float: left;
  }
  .row-2 .col-0 {
    clear: none;
  }
  .row-2 li:nth-child(odd) {
    clear: left;
    margin-left: 0;
  }
  .text-center-xs {
    text-align: center;
  }
  .text-left-xs {
    text-align: left;
  }
  .pull-none-xs {
    float: none !important;
  }
  .hidden-xs.show {
    display: inherit !important;
  }
  .wrapper-lg {
    padding: 15px;
  }
}


    </style>
</head>
<body>
	<section class="vbox"> 
		<header class="bg-dark dk header navbar navbar-fixed-top-xs"> 
			<div class="navbar-header aside-md"> 
				<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html"><i class="fa fa-bars"></i></a> 
        <a href="#" class="navbar-brand" data-toggle="fullscreen"><i class="fa fa-code-fork icon">    </i>      fork</a> 
       
				<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user"><i class="fa fa-cog"></i></a> 
			</div> 
			<ul class="nav navbar-nav hidden-xs"> 
				<li class="dropdown"> 
					<a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-building-o"></i><span class="font-bold"> Activity</span></a> 
					<section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
						<div class="wrapper lter m-t-n-xs">
							<a href="#" class="thumb pull-left m-r"></a> 
							<div class="clear"> 
								<a href="#"><span class="text-white font-bold">@Mike Mcalidek</span> </a>
								<small class="block">Art Director</small> 
								<a href="#" class="btn btn-xs btn-success m-t-xs">Upgrade</a> 
							</div> 
						</div> 
						<div class="row m-l-none m-r-none m-b-n-xs text-center">
							<div class="col-xs-4"> 
								<div class="padder-v">
									<span class="m-b-xs h4 block text-white">245</span> 
									<small class="text-muted">Followers</small> 
								</div> 
							</div> 
							<div class="col-xs-4 dk"> 
								<div class="padder-v"> 
									<span class="m-b-xs h4 block text-white">55</span> 
									<small class="text-muted">Likes</small>
								</div>
							</div>
							<div class="col-xs-4">
								<div class="padder-v">
									<span class="m-b-xs h4 block text-white">2,035</span>
									<small class="text-muted">Photos</small>
								</div>
							</div>
						</div>
					</section> 
				</li> 
				<li>
					<div class="m-t m-l">
						<a href="price.html" class="dropdown-toggle btn btn-xs btn-primary" title="Upgrade"><i class="fa fa-long-arrow-up"></i></a>
					</div>
				</li>
			</ul> 
			
			<ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
				<li class="hidden-xs"> 
					<a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
						<i class="fa fa-bell"></i> 
						<span class="badge badge-sm up bg-danger m-l-n-sm count">2</span> 
					</a>
					<section class="dropdown-menu aside-xl">
						<section class="panel bg-white">
							<header class="panel-heading b-light bg-light">
								<strong>You have <span class="count">2</span> notifications</strong>
							</header>
							<div class="list-group list-group-alt animated fadeInRight">
								<a href="#" class="media list-group-item">
									<span class="pull-left thumb-sm"><img src="images/avatar.jpg" alt="John said" class="img-circle"></span>
									<span class="media-body block m-b-none"> Use awesome animate.css<br>
										<small class="text-muted">10 minutes ago</small>
									</span>
								</a> 
								<a href="#" class="media list-group-item"> 
									<span class="media-body block m-b-none">1.0 initial released<br><small class="text-muted">1 hour ago</small></span>
								</a>
							</div>
							
							<footer class="panel-footer text-sm"> 
								<a href="#" class="pull-right"><i class="fa fa-cog"></i></a> 
								<a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
							</footer>
						</section>
					</section>
				</li>
				<li class="dropdown hidden-xs">
					<a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a>
					<section class="dropdown-menu aside-xl animated fadeInUp">
						<section class="panel bg-white">
							<form role="search">
								<div class="form-group wrapper m-b-none">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search">
										<span class="input-group-btn">
											<button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button> 
										</span> 
									</div> 
								</div> 
							</form> 
						</section>
					</section> 
				</li> 
				<li class="dropdown"> 
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
            <span class="thumb-sm avatar pull-left">  &nbsp; &nbsp;<i class="fa fa-cog"></i></span> John.Smith <b class="caret"></b> 
					</a> 
					<ul class="dropdown-menu animated fadeInRight"> <span class="arrow top"></span> 
						<li> <a href="#">Settings</a> </li> 
						<li> <a href="profile.html">Profile</a> </li> 
						<li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li> 
						<li> <a href="docs.html">Help</a> </li> <li class="divider"></li> 
						<li> <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a> </li> 
					</ul> 
				</li> 
			</ul> 
		</header> 
		
		<section> 
			<section class="hbox stretch"> <!-- .aside --> 
				<aside class="bg-dark lter aside-md hidden-print" id="nav"> 
					<section class="vbox"> 
						<header class="header bg-primary lter text-center clearfix"> 
							<div class="btn-group"> 
								<button type="button" class="btn btn-sm btn-dark btn-icon" title="New project">
									<i class="fa fa-plus"></i>
								</button> 
								<div class="btn-group hidden-nav-xs"> 
									<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"> Switch Project 
										<span class="caret"></span> 
									</button> 
									<ul class="dropdown-menu text-left"> 
										<li><a href="#">Project</a></li> 
										<li><a href="#">Another Project</a></li> 
										<li><a href="#">More Projects</a></li> 
									</ul> 
								</div> 
							</div> 
						</header> 
						<section class="w-f scrollable"> 
							<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
								<!-- nav -->
								<nav class="nav-primary hidden-xs"> 
									<ul class="nav"> 
										<li class="active"> <a href="index-2.html" class="active"> <i class="fa fa-dashboard icon"> <b class="bg-danger"></b> </i> <span>Workset</span> </a> </li> 
										<li> 
											<a href="#layout" > <i class="fa fa-columns icon"><b class="bg-warning"></b> </i> <span class="pull-right"> <i class="fa fa-angle-down text"></i><i class="fa fa-angle-up text-active"></i></span> <span>Layouts</span> </a> 
											<ul class="nav lt"> 
												<li> 
													<a href="layout-c.html"> 
														<i class="fa fa-angle-right"></i> 
														<span>Color option</span> 
													</a> 
												</li> 
												<li> 
													<a href="layout-r.html"> 
														<i class="fa fa-angle-right"></i> 
														<span>Right nav</span> 
													</a> 
												</li> 
												<li> 
													<a href="layout-h.html"> 
														<i class="fa fa-angle-right"></i> 
														<span>H-Layout</span> 
													</a> 
												</li> 
											</ul>
										</li> 
										<li>
											<a href="#uikit" > 
												<i class="fa fa-flask icon"> <b class="bg-success"></b> </i> 
												<span class="pull-right"> 
													<i class="fa fa-angle-down text"></i>
													<i class="fa fa-angle-up text-active"></i> 
												</span> 
												<span>UI kit</span> 
											</a> 
											<ul class="nav lt"> 
												<li> 
													<a href="buttons.html">
														<i class="fa fa-angle-right"></i> <span>Buttons</span> 
													</a> 
												</li> 
												<li> 
													<a href="icons.html" >
														<b class="badge bg-info pull-right">369</b> 
														<i class="fa fa-angle-right"></i> <span>Icons</span> 
													</a> 
												</li> 
												<li> 
													<a href="grid.html" > 
														<i class="fa fa-angle-right"></i> <span>Grid</span> 
													</a> 
												</li> 
												<li>
													<a href="widgets.html" > 
														<b class="badge pull-right">8</b> 
														<i class="fa fa-angle-right"></i> 
														<span>Widgets</span> 
													</a> 
												</li> 
												<li > 
													<a href="components.html" > 
														<i class="fa fa-angle-right"></i> 
														<span>Components</span> 
													</a> 
												</li> 
												<li > 
													<a href="list.html" > 
														<i class="fa fa-angle-right"></i> 
														<span>List group</span> 
													</a> 
												</li> 
												<li > 
													<a href="#table" > 
														<i class="fa fa-angle-down text"></i> 
														<i class="fa fa-angle-up text-active"></i> 
														<span>Table</span> 
													</a> 
													<ul class="nav bg"> 
														<li > 
															<a href="table-static.html" > 
																<i class="fa fa-angle-right"></i> <span>Table static</span> 
															</a> 
														</li> 
														<li >
															<a href="table-datatable.html" > 
																<i class="fa fa-angle-right"></i> <span>Datatable</span> 
															</a> 
														</li> 
														<li > 
															<a href="table-datagrid.html" > 
																<i class="fa fa-angle-right"></i> <span>Datagrid</span> 
															</a> 
														</li> 
													</ul> 
												</li> 
												<li > 
													<a href="#form" > 
														<i class="fa fa-angle-down text"></i> 
														<i class="fa fa-angle-up text-active"></i> 
														<span>Form</span>
													</a> 
													<ul class="nav bg"> 
														<li > 
															<a href="form-elements.html" > 
																<i class="fa fa-angle-right"></i> 
																<span>Form elements</span> 
															</a> 
														</li> 
														<li > 
															<a href="form-validation.html" > 
																<i class="fa fa-angle-right"></i> 
																<span>Form validation</span> 
															</a> 
														</li> 
														<li > 
															<a href="form-wizard.html" > 
																<i class="fa fa-angle-right"></i>
																<span>Form wizard</span> 
															</a> 
														</li> 
													</ul> 
												</li> 
											<li > <a href="chart.html" > <i class="fa fa-angle-right"></i> <span>Chart</span> </a> </li> 
											<li > <a href="fullcalendar.html" > <i class="fa fa-angle-right"></i> <span>Fullcalendar</span> </a> </li> 
											<li > <a href="portlet.html" > <i class="fa fa-angle-right"></i><span>Portlet</span> </a> </li> 
											<li > <a href="timeline.html" > <i class="fa fa-angle-right"></i> <span>Timeline</span> </a></li> 
										</ul> 
									</li> 
									<li > 
										<a href="#pages" > <i class="fa fa-file-text icon"><b class="bg-primary"></b></i> <span class="pull-right"> <i class="fa fa-angle-down text"></i> <i class="fa fa-angle-up text-active"></i> </span><span>Pages</span> </a> 
										<ul class="nav lt"> 
											<li > <a href="gallery.html" > <i class="fa fa-angle-right"></i> <span>Gallery</span> </a> </li> 
											<li > <a href="profile.html" > <i class="fa fa-angle-right"></i> <span>Profile</span> </a> </li> 
											<li > <a href="invoice.html" > <i class="fa fa-angle-right"></i> <span>Invoice</span> </a> </li> 
											<li > <a href="intro.html" > <i class="fa fa-angle-right"></i> <span>Intro</span> </a> </li> 
											<li > <a href="master.html" > <i class="fa fa-angle-right"></i> <span>Master</span> </a> </li> 
											<li > <a href="gmap.html" > <i class="fa fa-angle-right"></i> <span>Google Map</span> </a> </li> 
											<li > <a href="jvectormap.html" > <i class="fa fa-angle-right"></i> <span>Vector Map</span> </a> </li> 
											<li > <a href="signin.html" > <i class="fa fa-angle-right"></i> <span>Signin</span> </a> </li> 
											<li > <a href="signup.html" > <i class="fa fa-angle-right"></i> <span>Signup</span> </a> </li> 
											<li > <a href="404.html" > <i class="fa fa-angle-right"></i> <span>404</span> </a> </li> 
										</ul> 
									</li> 
									<li > <a href="mail.html" > <b class="badge bg-danger pull-right">3</b> <i class="fa fa-envelope-o icon"> <b class="bg-primary dker"></b> </i> <span>Message</span> </a> </li> 
									<li > <a href="notebook.html" > <i class="fa fa-pencil icon"><b class="bg-info"></b> </i> <span>Notes</span> </a> </li> 
								</ul>
							</nav> <!-- / nav --> 
						</div> 
					</section> 
						
						<footer class="footer lt hidden-xs b-t b-dark"> <div id="chat" class="dropup"> <section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white"> <header class="panel-heading b-b b-light">Active chats</header> <div class="panel-body animated fadeInRight"> <p class="text-sm">No active chats.</p> <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p> </div> </section> </section> </div> <div id="invite" class="dropup"> 
							<section class="dropdown-menu on aside-md m-l-n"> <section class="panel bg-white"> <header class="panel-heading b-b b-light"> John <i class="fa fa-circle text-success"></i> </header> <div class="panel-body animated fadeInRight"> <p class="text-sm">No contacts in your lists.</p> <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p> </div> </section> </section> </div> <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon"> <i class="fa fa-angle-left text"></i> <i class="fa fa-angle-right text-active"></i> </a> 
							<div class="btn-group hidden-nav-xs"> <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button> <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button> </div> </footer> </section> </aside> <!-- /.aside --> <section id="content"> <section class="vbox"> 
								
								
								
								
								
								
								
								<section class="scrollable padder"> 
									
									
								<div style="height:800px;">
                  
                <!--
								<div id="calendar" style="position: fixed;background: #444;width: 3px;height: 2px;top: -294px;"></div> 
								-->  
                  
              </div>
								
                  
                  
                  
                  
                  
                  
                  
							</div> 
						</section> 
					</section> 
					<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a> 
				</section> 
				<aside class="bg-light lter b-l aside-md hide" id="notes"> 
					<div class="wrapper">Notification</div> 
				</aside> 
			</section> 
		</section> 
	</section> <!-- Bootstrap --> <!-- App --> 
	
</body>
<script>
    (function (e, t) {
  var n,
    r,
    i = typeof t,
    o = e.location,
    a = e.document,
    s = a.documentElement,
    l = e.jQuery,
    u = e.$,
    c = {},
    p = [],
    f = "1.10.2",
    d = p.concat,
    h = p.push,
    g = p.slice,
    m = p.indexOf,
    y = c.toString,
    v = c.hasOwnProperty,
    b = f.trim,
    x = function (e, t) {
      return new x.fn.init(e, t, r);
    },
    w = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
    T = /\S+/g,
    C = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
    N = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/,
    k = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
    E = /^[\],:{}\s]*$/,
    S = /(?:^|:|,)(?:\s*\[)+/g,
    A = /\\(?:["\\\/bfnrt]|u[\da-fA-F]{4})/g,
    j = /"[^"\\\r\n]*"|true|false|null|-?(?:\d+\.|)\d+(?:[eE][+-]?\d+|)/g,
    D = /^-ms-/,
    L = /-([\da-z])/gi,
    H = function (e, t) {
      return t.toUpperCase();
    },
    q = function (e) {
      (a.addEventListener ||
        "load" === e.type ||
        "complete" === a.readyState) &&
        (_(), x.ready());
    },
    _ = function () {
      a.addEventListener
        ? (a.removeEventListener("DOMContentLoaded", q, !1),
          e.removeEventListener("load", q, !1))
        : (a.detachEvent("onreadystatechange", q), e.detachEvent("onload", q));
    };
  (x.fn = x.prototype = {
    jquery: f,
    constructor: x,
    init: function (e, n, r) {
      var i, o;
      if (!e) return this;
      if ("string" == typeof e) {
        if (
          ((i =
            "<" === e.charAt(0) &&
            ">" === e.charAt(e.length - 1) &&
            e.length >= 3
              ? [null, e, null]
              : N.exec(e)),
          !i || (!i[1] && n))
        )
          return !n || n.jquery
            ? (n || r).find(e)
            : this.constructor(n).find(e);
        if (i[1]) {
          if (
            ((n = n instanceof x ? n[0] : n),
            x.merge(
              this,
              x.parseHTML(i[1], n && n.nodeType ? n.ownerDocument || n : a, !0)
            ),
            k.test(i[1]) && x.isPlainObject(n))
          )
            for (i in n)
              x.isFunction(this[i]) ? this[i](n[i]) : this.attr(i, n[i]);
          return this;
        }
        if (((o = a.getElementById(i[2])), o && o.parentNode)) {
          if (o.id !== i[2]) return r.find(e);
          (this.length = 1), (this[0] = o);
        }
        return (this.context = a), (this.selector = e), this;
      }
      return e.nodeType
        ? ((this.context = this[0] = e), (this.length = 1), this)
        : x.isFunction(e)
        ? r.ready(e)
        : (e.selector !== t &&
            ((this.selector = e.selector), (this.context = e.context)),
          x.makeArray(e, this));
    },
    selector: "",
    length: 0,
    toArray: function () {
      return g.call(this);
    },
    get: function (e) {
      return null == e
        ? this.toArray()
        : 0 > e
        ? this[this.length + e]
        : this[e];
    },
    pushStack: function (e) {
      var t = x.merge(this.constructor(), e);
      return (t.prevObject = this), (t.context = this.context), t;
    },
    each: function (e, t) {
      return x.each(this, e, t);
    },
    ready: function (e) {
      return x.ready.promise().done(e), this;
    },
    slice: function () {
      return this.pushStack(g.apply(this, arguments));
    },
    first: function () {
      return this.eq(0);
    },
    last: function () {
      return this.eq(-1);
    },
    eq: function (e) {
      var t = this.length,
        n = +e + (0 > e ? t : 0);
      return this.pushStack(n >= 0 && t > n ? [this[n]] : []);
    },
    map: function (e) {
      return this.pushStack(
        x.map(this, function (t, n) {
          return e.call(t, n, t);
        })
      );
    },
    end: function () {
      return this.prevObject || this.constructor(null);
    },
    push: h,
    sort: [].sort,
    splice: [].splice
  }),
    (x.fn.init.prototype = x.fn),
    (x.extend = x.fn.extend = function () {
      var e,
        n,
        r,
        i,
        o,
        a,
        s = arguments[0] || {},
        l = 1,
        u = arguments.length,
        c = !1;
      for (
        "boolean" == typeof s && ((c = s), (s = arguments[1] || {}), (l = 2)),
          "object" == typeof s || x.isFunction(s) || (s = {}),
          u === l && ((s = this), --l);
        u > l;
        l++
      )
        if (null != (o = arguments[l]))
          for (i in o)
            (e = s[i]),
              (r = o[i]),
              s !== r &&
                (c && r && (x.isPlainObject(r) || (n = x.isArray(r)))
                  ? (n
                      ? ((n = !1), (a = e && x.isArray(e) ? e : []))
                      : (a = e && x.isPlainObject(e) ? e : {}),
                    (s[i] = x.extend(c, a, r)))
                  : r !== t && (s[i] = r));
      return s;
    }),
    x.extend({
      expando: "jQuery" + (f + Math.random()).replace(/\D/g, ""),
      noConflict: function (t) {
        return e.$ === x && (e.$ = u), t && e.jQuery === x && (e.jQuery = l), x;
      },
      isReady: !1,
      readyWait: 1,
      holdReady: function (e) {
        e ? x.readyWait++ : x.ready(!0);
      },
      ready: function (e) {
        if (e === !0 ? !--x.readyWait : !x.isReady) {
          if (!a.body) return setTimeout(x.ready);
          (x.isReady = !0),
            (e !== !0 && --x.readyWait > 0) ||
              (n.resolveWith(a, [x]),
              x.fn.trigger && x(a).trigger("ready").off("ready"));
        }
      },
      isFunction: function (e) {
        return "function" === x.type(e);
      },
      isArray:
        Array.isArray ||
        function (e) {
          return "array" === x.type(e);
        },
      isWindow: function (e) {
        return null != e && e == e.window;
      },
      isNumeric: function (e) {
        return !isNaN(parseFloat(e)) && isFinite(e);
      },
      type: function (e) {
        return null == e
          ? e + ""
          : "object" == typeof e || "function" == typeof e
          ? c[y.call(e)] || "object"
          : typeof e;
      },
      isPlainObject: function (e) {
        var n;
        if (!e || "object" !== x.type(e) || e.nodeType || x.isWindow(e))
          return !1;
        try {
          if (
            e.constructor &&
            !v.call(e, "constructor") &&
            !v.call(e.constructor.prototype, "isPrototypeOf")
          )
            return !1;
        } catch (r) {
          return !1;
        }
        if (x.support.ownLast) for (n in e) return v.call(e, n);
        for (n in e);
        return n === t || v.call(e, n);
      },
      isEmptyObject: function (e) {
        var t;
        for (t in e) return !1;
        return !0;
      },
      error: function (e) {
        throw Error(e);
      },
      parseHTML: function (e, t, n) {
        if (!e || "string" != typeof e) return null;
        "boolean" == typeof t && ((n = t), (t = !1)), (t = t || a);
        var r = k.exec(e),
          i = !n && [];
        return r
          ? [t.createElement(r[1])]
          : ((r = x.buildFragment([e], t, i)),
            i && x(i).remove(),
            x.merge([], r.childNodes));
      },
      parseJSON: function (n) {
        return e.JSON && e.JSON.parse
          ? e.JSON.parse(n)
          : null === n
          ? n
          : "string" == typeof n &&
            ((n = x.trim(n)),
            n && E.test(n.replace(A, "@").replace(j, "]").replace(S, "")))
          ? Function("return " + n)()
          : (x.error("Invalid JSON: " + n), t);
      },
      parseXML: function (n) {
        var r, i;
        if (!n || "string" != typeof n) return null;
        try {
          e.DOMParser
            ? ((i = new DOMParser()), (r = i.parseFromString(n, "text/xml")))
            : ((r = new ActiveXObject("Microsoft.XMLDOM")),
              (r.async = "false"),
              r.loadXML(n));
        } catch (o) {
          r = t;
        }
        return (
          (r &&
            r.documentElement &&
            !r.getElementsByTagName("parsererror").length) ||
            x.error("Invalid XML: " + n),
          r
        );
      },
      noop: function () {},
      globalEval: function (t) {
        t &&
          x.trim(t) &&
          (
            e.execScript ||
            function (t) {
              e.eval.call(e, t);
            }
          )(t);
      },
      camelCase: function (e) {
        return e.replace(D, "ms-").replace(L, H);
      },
      nodeName: function (e, t) {
        return e.nodeName && e.nodeName.toLowerCase() === t.toLowerCase();
      },
      each: function (e, t, n) {
        var r,
          i = 0,
          o = e.length,
          a = M(e);
        if (n) {
          if (a) {
            for (; o > i; i++) if (((r = t.apply(e[i], n)), r === !1)) break;
          } else for (i in e) if (((r = t.apply(e[i], n)), r === !1)) break;
        } else if (a) {
          for (; o > i; i++) if (((r = t.call(e[i], i, e[i])), r === !1)) break;
        } else for (i in e) if (((r = t.call(e[i], i, e[i])), r === !1)) break;
        return e;
      },
      trim:
        b && !b.call("\ufeff\u00a0")
          ? function (e) {
              return null == e ? "" : b.call(e);
            }
          : function (e) {
              return null == e ? "" : (e + "").replace(C, "");
            },
      makeArray: function (e, t) {
        var n = t || [];
        return (
          null != e &&
            (M(Object(e))
              ? x.merge(n, "string" == typeof e ? [e] : e)
              : h.call(n, e)),
          n
        );
      },
      inArray: function (e, t, n) {
        var r;
        if (t) {
          if (m) return m.call(t, e, n);
          for (
            r = t.length, n = n ? (0 > n ? Math.max(0, r + n) : n) : 0;
            r > n;
            n++
          )
            if (n in t && t[n] === e) return n;
        }
        return -1;
      },
      merge: function (e, n) {
        var r = n.length,
          i = e.length,
          o = 0;
        if ("number" == typeof r) for (; r > o; o++) e[i++] = n[o];
        else while (n[o] !== t) e[i++] = n[o++];
        return (e.length = i), e;
      },
      grep: function (e, t, n) {
        var r,
          i = [],
          o = 0,
          a = e.length;
        for (n = !!n; a > o; o++) (r = !!t(e[o], o)), n !== r && i.push(e[o]);
        return i;
      },
      map: function (e, t, n) {
        var r,
          i = 0,
          o = e.length,
          a = M(e),
          s = [];
        if (a)
          for (; o > i; i++)
            (r = t(e[i], i, n)), null != r && (s[s.length] = r);
        else for (i in e) (r = t(e[i], i, n)), null != r && (s[s.length] = r);
        return d.apply([], s);
      },
      guid: 1,
      proxy: function (e, n) {
        var r, i, o;
        return (
          "string" == typeof n && ((o = e[n]), (n = e), (e = o)),
          x.isFunction(e)
            ? ((r = g.call(arguments, 2)),
              (i = function () {
                return e.apply(n || this, r.concat(g.call(arguments)));
              }),
              (i.guid = e.guid = e.guid || x.guid++),
              i)
            : t
        );
      },
      access: function (e, n, r, i, o, a, s) {
        var l = 0,
          u = e.length,
          c = null == r;
        if ("object" === x.type(r)) {
          o = !0;
          for (l in r) x.access(e, n, l, r[l], !0, a, s);
        } else if (
          i !== t &&
          ((o = !0),
          x.isFunction(i) || (s = !0),
          c &&
            (s
              ? (n.call(e, i), (n = null))
              : ((c = n),
                (n = function (e, t, n) {
                  return c.call(x(e), n);
                }))),
          n)
        )
          for (; u > l; l++) n(e[l], r, s ? i : i.call(e[l], l, n(e[l], r)));
        return o ? e : c ? n.call(e) : u ? n(e[0], r) : a;
      },
      now: function () {
        return new Date().getTime();
      },
      swap: function (e, t, n, r) {
        var i,
          o,
          a = {};
        for (o in t) (a[o] = e.style[o]), (e.style[o] = t[o]);
        i = n.apply(e, r || []);
        for (o in t) e.style[o] = a[o];
        return i;
      }
    }),
    (x.ready.promise = function (t) {
      if (!n)
        if (((n = x.Deferred()), "complete" === a.readyState))
          setTimeout(x.ready);
        else if (a.addEventListener)
          a.addEventListener("DOMContentLoaded", q, !1),
            e.addEventListener("load", q, !1);
        else {
          a.attachEvent("onreadystatechange", q), e.attachEvent("onload", q);
          var r = !1;
          try {
            r = null == e.frameElement && a.documentElement;
          } catch (i) {}
          r &&
            r.doScroll &&
            (function o() {
              if (!x.isReady) {
                try {
                  r.doScroll("left");
                } catch (e) {
                  return setTimeout(o, 50);
                }
                _(), x.ready();
              }
            })();
        }
      return n.promise(t);
    }),
    x.each(
      "Boolean Number String Function Array Date RegExp Object Error".split(
        " "
      ),
      function (e, t) {
        c["[object " + t + "]"] = t.toLowerCase();
      }
    );
  function M(e) {
    var t = e.length,
      n = x.type(e);
    return x.isWindow(e)
      ? !1
      : 1 === e.nodeType && t
      ? !0
      : "array" === n ||
        ("function" !== n &&
          (0 === t || ("number" == typeof t && t > 0 && t - 1 in e)));
  }
  (r = x(a)),
    (function (e, t) {
      var n,
        r,
        i,
        o,
        a,
        s,
        l,
        u,
        c,
        p,
        f,
        d,
        h,
        g,
        m,
        y,
        v,
        b = "sizzle" + -new Date(),
        w = e.document,
        T = 0,
        C = 0,
        N = st(),
        k = st(),
        E = st(),
        S = !1,
        A = function (e, t) {
          return e === t ? ((S = !0), 0) : 0;
        },
        j = typeof t,
        D = 1 << 31,
        L = {}.hasOwnProperty,
        H = [],
        q = H.pop,
        _ = H.push,
        M = H.push,
        O = H.slice,
        F =
          H.indexOf ||
          function (e) {
            var t = 0,
              n = this.length;
            for (; n > t; t++) if (this[t] === e) return t;
            return -1;
          },
        B =
          "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",
        P = "[\\x20\\t\\r\\n\\f]",
        R = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+",
        W = R.replace("w", "w#"),
        $ =
          "\\[" +
          P +
          "*(" +
          R +
          ")" +
          P +
          "*(?:([*^$|!~]?=)" +
          P +
          "*(?:(['\"])((?:\\\\.|[^\\\\])*?)\\3|(" +
          W +
          ")|)|)" +
          P +
          "*\\]",
        I =
          ":(" +
          R +
          ")(?:\\(((['\"])((?:\\\\.|[^\\\\])*?)\\3|((?:\\\\.|[^\\\\()[\\]]|" +
          $.replace(3, 8) +
          ")*)|.*)\\)|)",
        z = RegExp("^" + P + "+|((?:^|[^\\\\])(?:\\\\.)*)" + P + "+$", "g"),
        X = RegExp("^" + P + "*," + P + "*"),
        U = RegExp("^" + P + "*([>+~]|" + P + ")" + P + "*"),
        V = RegExp(P + "*[+~]"),
        Y = RegExp("=" + P + "*([^\\]'\"]*)" + P + "*\\]", "g"),
        J = RegExp(I),
        G = RegExp("^" + W + "$"),
        Q = {
          ID: RegExp("^#(" + R + ")"),
          CLASS: RegExp("^\\.(" + R + ")"),
          TAG: RegExp("^(" + R.replace("w", "w*") + ")"),
          ATTR: RegExp("^" + $),
          PSEUDO: RegExp("^" + I),
          CHILD: RegExp(
            "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" +
              P +
              "*(even|odd|(([+-]|)(\\d*)n|)" +
              P +
              "*(?:([+-]|)" +
              P +
              "*(\\d+)|))" +
              P +
              "*\\)|)",
            "i"
          ),
          bool: RegExp("^(?:" + B + ")$", "i"),
          needsContext: RegExp(
            "^" +
              P +
              "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +
              P +
              "*((?:-\\d)?\\d*)" +
              P +
              "*\\)|)(?=[^-]|$)",
            "i"
          )
        },
        K = /^[^{]+\{\s*\[native \w/,
        Z = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
        et = /^(?:input|select|textarea|button)$/i,
        tt = /^h\d$/i,
        nt = /'|\\/g,
        rt = RegExp("\\\\([\\da-f]{1,6}" + P + "?|(" + P + ")|.)", "ig"),
        it = function (e, t, n) {
          var r = "0x" + t - 65536;
          return r !== r || n
            ? t
            : 0 > r
            ? String.fromCharCode(r + 65536)
            : String.fromCharCode(55296 | (r >> 10), 56320 | (1023 & r));
        };
      try {
        M.apply((H = O.call(w.childNodes)), w.childNodes),
          H[w.childNodes.length].nodeType;
      } catch (ot) {
        M = {
          apply: H.length
            ? function (e, t) {
                _.apply(e, O.call(t));
              }
            : function (e, t) {
                var n = e.length,
                  r = 0;
                while ((e[n++] = t[r++]));
                e.length = n - 1;
              }
        };
      }
      function at(e, t, n, i) {
        var o, a, s, l, u, c, d, m, y, x;
        if (
          ((t ? t.ownerDocument || t : w) !== f && p(t),
          (t = t || f),
          (n = n || []),
          !e || "string" != typeof e)
        )
          return n;
        if (1 !== (l = t.nodeType) && 9 !== l) return [];
        if (h && !i) {
          if ((o = Z.exec(e)))
            if ((s = o[1])) {
              if (9 === l) {
                if (((a = t.getElementById(s)), !a || !a.parentNode)) return n;
                if (a.id === s) return n.push(a), n;
              } else if (
                t.ownerDocument &&
                (a = t.ownerDocument.getElementById(s)) &&
                v(t, a) &&
                a.id === s
              )
                return n.push(a), n;
            } else {
              if (o[2]) return M.apply(n, t.getElementsByTagName(e)), n;
              if (
                (s = o[3]) &&
                r.getElementsByClassName &&
                t.getElementsByClassName
              )
                return M.apply(n, t.getElementsByClassName(s)), n;
            }
          if (r.qsa && (!g || !g.test(e))) {
            if (
              ((m = d = b),
              (y = t),
              (x = 9 === l && e),
              1 === l && "object" !== t.nodeName.toLowerCase())
            ) {
              (c = mt(e)),
                (d = t.getAttribute("id"))
                  ? (m = d.replace(nt, "\\$&"))
                  : t.setAttribute("id", m),
                (m = "[id='" + m + "'] "),
                (u = c.length);
              while (u--) c[u] = m + yt(c[u]);
              (y = (V.test(e) && t.parentNode) || t), (x = c.join(","));
            }
            if (x)
              try {
                return M.apply(n, y.querySelectorAll(x)), n;
              } catch (T) {
              } finally {
                d || t.removeAttribute("id");
              }
          }
        }
        return kt(e.replace(z, "$1"), t, n, i);
      }
      function st() {
        var e = [];
        function t(n, r) {
          return (
            e.push((n += " ")) > o.cacheLength && delete t[e.shift()],
            (t[n] = r)
          );
        }
        return t;
      }
      function lt(e) {
        return (e[b] = !0), e;
      }
      function ut(e) {
        var t = f.createElement("div");
        try {
          return !!e(t);
        } catch (n) {
          return !1;
        } finally {
          t.parentNode && t.parentNode.removeChild(t), (t = null);
        }
      }
      function ct(e, t) {
        var n = e.split("|"),
          r = e.length;
        while (r--) o.attrHandle[n[r]] = t;
      }
      function pt(e, t) {
        var n = t && e,
          r =
            n &&
            1 === e.nodeType &&
            1 === t.nodeType &&
            (~t.sourceIndex || D) - (~e.sourceIndex || D);
        if (r) return r;
        if (n) while ((n = n.nextSibling)) if (n === t) return -1;
        return e ? 1 : -1;
      }
      function ft(e) {
        return function (t) {
          var n = t.nodeName.toLowerCase();
          return "input" === n && t.type === e;
        };
      }
      function dt(e) {
        return function (t) {
          var n = t.nodeName.toLowerCase();
          return ("input" === n || "button" === n) && t.type === e;
        };
      }
      function ht(e) {
        return lt(function (t) {
          return (
            (t = +t),
            lt(function (n, r) {
              var i,
                o = e([], n.length, t),
                a = o.length;
              while (a--) n[(i = o[a])] && (n[i] = !(r[i] = n[i]));
            })
          );
        });
      }
      (s = at.isXML = function (e) {
        var t = e && (e.ownerDocument || e).documentElement;
        return t ? "HTML" !== t.nodeName : !1;
      }),
        (r = at.support = {}),
        (p = at.setDocument = function (e) {
          var n = e ? e.ownerDocument || e : w,
            i = n.defaultView;
          return n !== f && 9 === n.nodeType && n.documentElement
            ? ((f = n),
              (d = n.documentElement),
              (h = !s(n)),
              i &&
                i.attachEvent &&
                i !== i.top &&
                i.attachEvent("onbeforeunload", function () {
                  p();
                }),
              (r.attributes = ut(function (e) {
                return (e.className = "i"), !e.getAttribute("className");
              })),
              (r.getElementsByTagName = ut(function (e) {
                return (
                  e.appendChild(n.createComment("")),
                  !e.getElementsByTagName("*").length
                );
              })),
              (r.getElementsByClassName = ut(function (e) {
                return (
                  (e.innerHTML =
                    "<div class='a'></div><div class='a i'></div>"),
                  (e.firstChild.className = "i"),
                  2 === e.getElementsByClassName("i").length
                );
              })),
              (r.getById = ut(function (e) {
                return (
                  (d.appendChild(e).id = b),
                  !n.getElementsByName || !n.getElementsByName(b).length
                );
              })),
              r.getById
                ? ((o.find.ID = function (e, t) {
                    if (typeof t.getElementById !== j && h) {
                      var n = t.getElementById(e);
                      return n && n.parentNode ? [n] : [];
                    }
                  }),
                  (o.filter.ID = function (e) {
                    var t = e.replace(rt, it);
                    return function (e) {
                      return e.getAttribute("id") === t;
                    };
                  }))
                : (delete o.find.ID,
                  (o.filter.ID = function (e) {
                    var t = e.replace(rt, it);
                    return function (e) {
                      var n =
                        typeof e.getAttributeNode !== j &&
                        e.getAttributeNode("id");
                      return n && n.value === t;
                    };
                  })),
              (o.find.TAG = r.getElementsByTagName
                ? function (e, n) {
                    return typeof n.getElementsByTagName !== j
                      ? n.getElementsByTagName(e)
                      : t;
                  }
                : function (e, t) {
                    var n,
                      r = [],
                      i = 0,
                      o = t.getElementsByTagName(e);
                    if ("*" === e) {
                      while ((n = o[i++])) 1 === n.nodeType && r.push(n);
                      return r;
                    }
                    return o;
                  }),
              (o.find.CLASS =
                r.getElementsByClassName &&
                function (e, n) {
                  return typeof n.getElementsByClassName !== j && h
                    ? n.getElementsByClassName(e)
                    : t;
                }),
              (m = []),
              (g = []),
              (r.qsa = K.test(n.querySelectorAll)) &&
                (ut(function (e) {
                  (e.innerHTML =
                    "<select><option selected=''></option></select>"),
                    e.querySelectorAll("[selected]").length ||
                      g.push("\\[" + P + "*(?:value|" + B + ")"),
                    e.querySelectorAll(":checked").length || g.push(":checked");
                }),
                ut(function (e) {
                  var t = n.createElement("input");
                  t.setAttribute("type", "hidden"),
                    e.appendChild(t).setAttribute("t", ""),
                    e.querySelectorAll("[t^='']").length &&
                      g.push("[*^$]=" + P + "*(?:''|\"\")"),
                    e.querySelectorAll(":enabled").length ||
                      g.push(":enabled", ":disabled"),
                    e.querySelectorAll("*,:x"),
                    g.push(",.*:");
                })),
              (r.matchesSelector = K.test(
                (y =
                  d.webkitMatchesSelector ||
                  d.mozMatchesSelector ||
                  d.oMatchesSelector ||
                  d.msMatchesSelector)
              )) &&
                ut(function (e) {
                  (r.disconnectedMatch = y.call(e, "div")),
                    y.call(e, "[s!='']:x"),
                    m.push("!=", I);
                }),
              (g = g.length && RegExp(g.join("|"))),
              (m = m.length && RegExp(m.join("|"))),
              (v =
                K.test(d.contains) || d.compareDocumentPosition
                  ? function (e, t) {
                      var n = 9 === e.nodeType ? e.documentElement : e,
                        r = t && t.parentNode;
                      return (
                        e === r ||
                        !(
                          !r ||
                          1 !== r.nodeType ||
                          !(n.contains
                            ? n.contains(r)
                            : e.compareDocumentPosition &&
                              16 & e.compareDocumentPosition(r))
                        )
                      );
                    }
                  : function (e, t) {
                      if (t) while ((t = t.parentNode)) if (t === e) return !0;
                      return !1;
                    }),
              (A = d.compareDocumentPosition
                ? function (e, t) {
                    if (e === t) return (S = !0), 0;
                    var i =
                      t.compareDocumentPosition &&
                      e.compareDocumentPosition &&
                      e.compareDocumentPosition(t);
                    return i
                      ? 1 & i ||
                        (!r.sortDetached && t.compareDocumentPosition(e) === i)
                        ? e === n || v(w, e)
                          ? -1
                          : t === n || v(w, t)
                          ? 1
                          : c
                          ? F.call(c, e) - F.call(c, t)
                          : 0
                        : 4 & i
                        ? -1
                        : 1
                      : e.compareDocumentPosition
                      ? -1
                      : 1;
                  }
                : function (e, t) {
                    var r,
                      i = 0,
                      o = e.parentNode,
                      a = t.parentNode,
                      s = [e],
                      l = [t];
                    if (e === t) return (S = !0), 0;
                    if (!o || !a)
                      return e === n
                        ? -1
                        : t === n
                        ? 1
                        : o
                        ? -1
                        : a
                        ? 1
                        : c
                        ? F.call(c, e) - F.call(c, t)
                        : 0;
                    if (o === a) return pt(e, t);
                    r = e;
                    while ((r = r.parentNode)) s.unshift(r);
                    r = t;
                    while ((r = r.parentNode)) l.unshift(r);
                    while (s[i] === l[i]) i++;
                    return i
                      ? pt(s[i], l[i])
                      : s[i] === w
                      ? -1
                      : l[i] === w
                      ? 1
                      : 0;
                  }),
              n)
            : f;
        }),
        (at.matches = function (e, t) {
          return at(e, null, null, t);
        }),
        (at.matchesSelector = function (e, t) {
          if (
            ((e.ownerDocument || e) !== f && p(e),
            (t = t.replace(Y, "='$1']")),
            !(!r.matchesSelector || !h || (m && m.test(t)) || (g && g.test(t))))
          )
            try {
              var n = y.call(e, t);
              if (
                n ||
                r.disconnectedMatch ||
                (e.document && 11 !== e.document.nodeType)
              )
                return n;
            } catch (i) {}
          return at(t, f, null, [e]).length > 0;
        }),
        (at.contains = function (e, t) {
          return (e.ownerDocument || e) !== f && p(e), v(e, t);
        }),
        (at.attr = function (e, n) {
          (e.ownerDocument || e) !== f && p(e);
          var i = o.attrHandle[n.toLowerCase()],
            a = i && L.call(o.attrHandle, n.toLowerCase()) ? i(e, n, !h) : t;
          return a === t
            ? r.attributes || !h
              ? e.getAttribute(n)
              : (a = e.getAttributeNode(n)) && a.specified
              ? a.value
              : null
            : a;
        }),
        (at.error = function (e) {
          throw Error("Syntax error, unrecognized expression: " + e);
        }),
        (at.uniqueSort = function (e) {
          var t,
            n = [],
            i = 0,
            o = 0;
          if (
            ((S = !r.detectDuplicates),
            (c = !r.sortStable && e.slice(0)),
            e.sort(A),
            S)
          ) {
            while ((t = e[o++])) t === e[o] && (i = n.push(o));
            while (i--) e.splice(n[i], 1);
          }
          return e;
        }),
        (a = at.getText = function (e) {
          var t,
            n = "",
            r = 0,
            i = e.nodeType;
          if (i) {
            if (1 === i || 9 === i || 11 === i) {
              if ("string" == typeof e.textContent) return e.textContent;
              for (e = e.firstChild; e; e = e.nextSibling) n += a(e);
            } else if (3 === i || 4 === i) return e.nodeValue;
          } else for (; (t = e[r]); r++) n += a(t);
          return n;
        }),
        (o = at.selectors = {
          cacheLength: 50,
          createPseudo: lt,
          match: Q,
          attrHandle: {},
          find: {},
          relative: {
            ">": { dir: "parentNode", first: !0 },
            " ": { dir: "parentNode" },
            "+": { dir: "previousSibling", first: !0 },
            "~": { dir: "previousSibling" }
          },
          preFilter: {
            ATTR: function (e) {
              return (
                (e[1] = e[1].replace(rt, it)),
                (e[3] = (e[4] || e[5] || "").replace(rt, it)),
                "~=" === e[2] && (e[3] = " " + e[3] + " "),
                e.slice(0, 4)
              );
            },
            CHILD: function (e) {
              return (
                (e[1] = e[1].toLowerCase()),
                "nth" === e[1].slice(0, 3)
                  ? (e[3] || at.error(e[0]),
                    (e[4] = +(e[4]
                      ? e[5] + (e[6] || 1)
                      : 2 * ("even" === e[3] || "odd" === e[3]))),
                    (e[5] = +(e[7] + e[8] || "odd" === e[3])))
                  : e[3] && at.error(e[0]),
                e
              );
            },
            PSEUDO: function (e) {
              var n,
                r = !e[5] && e[2];
              return Q.CHILD.test(e[0])
                ? null
                : (e[3] && e[4] !== t
                    ? (e[2] = e[4])
                    : r &&
                      J.test(r) &&
                      (n = mt(r, !0)) &&
                      (n = r.indexOf(")", r.length - n) - r.length) &&
                      ((e[0] = e[0].slice(0, n)), (e[2] = r.slice(0, n))),
                  e.slice(0, 3));
            }
          },
          filter: {
            TAG: function (e) {
              var t = e.replace(rt, it).toLowerCase();
              return "*" === e
                ? function () {
                    return !0;
                  }
                : function (e) {
                    return e.nodeName && e.nodeName.toLowerCase() === t;
                  };
            },
            CLASS: function (e) {
              var t = N[e + " "];
              return (
                t ||
                ((t = RegExp("(^|" + P + ")" + e + "(" + P + "|$)")) &&
                  N(e, function (e) {
                    return t.test(
                      ("string" == typeof e.className && e.className) ||
                        (typeof e.getAttribute !== j &&
                          e.getAttribute("class")) ||
                        ""
                    );
                  }))
              );
            },
            ATTR: function (e, t, n) {
              return function (r) {
                var i = at.attr(r, e);
                return null == i
                  ? "!=" === t
                  : t
                  ? ((i += ""),
                    "=" === t
                      ? i === n
                      : "!=" === t
                      ? i !== n
                      : "^=" === t
                      ? n && 0 === i.indexOf(n)
                      : "*=" === t
                      ? n && i.indexOf(n) > -1
                      : "$=" === t
                      ? n && i.slice(-n.length) === n
                      : "~=" === t
                      ? (" " + i + " ").indexOf(n) > -1
                      : "|=" === t
                      ? i === n || i.slice(0, n.length + 1) === n + "-"
                      : !1)
                  : !0;
              };
            },
            CHILD: function (e, t, n, r, i) {
              var o = "nth" !== e.slice(0, 3),
                a = "last" !== e.slice(-4),
                s = "of-type" === t;
              return 1 === r && 0 === i
                ? function (e) {
                    return !!e.parentNode;
                  }
                : function (t, n, l) {
                    var u,
                      c,
                      p,
                      f,
                      d,
                      h,
                      g = o !== a ? "nextSibling" : "previousSibling",
                      m = t.parentNode,
                      y = s && t.nodeName.toLowerCase(),
                      v = !l && !s;
                    if (m) {
                      if (o) {
                        while (g) {
                          p = t;
                          while ((p = p[g]))
                            if (
                              s
                                ? p.nodeName.toLowerCase() === y
                                : 1 === p.nodeType
                            )
                              return !1;
                          h = g = "only" === e && !h && "nextSibling";
                        }
                        return !0;
                      }
                      if (((h = [a ? m.firstChild : m.lastChild]), a && v)) {
                        (c = m[b] || (m[b] = {})),
                          (u = c[e] || []),
                          (d = u[0] === T && u[1]),
                          (f = u[0] === T && u[2]),
                          (p = d && m.childNodes[d]);
                        while (
                          (p = (++d && p && p[g]) || (f = d = 0) || h.pop())
                        )
                          if (1 === p.nodeType && ++f && p === t) {
                            c[e] = [T, d, f];
                            break;
                          }
                      } else if (
                        v &&
                        (u = (t[b] || (t[b] = {}))[e]) &&
                        u[0] === T
                      )
                        f = u[1];
                      else
                        while (
                          (p = (++d && p && p[g]) || (f = d = 0) || h.pop())
                        )
                          if (
                            (s
                              ? p.nodeName.toLowerCase() === y
                              : 1 === p.nodeType) &&
                            ++f &&
                            (v && ((p[b] || (p[b] = {}))[e] = [T, f]), p === t)
                          )
                            break;
                      return (f -= i), f === r || (0 === f % r && f / r >= 0);
                    }
                  };
            },
            PSEUDO: function (e, t) {
              var n,
                r =
                  o.pseudos[e] ||
                  o.setFilters[e.toLowerCase()] ||
                  at.error("unsupported pseudo: " + e);
              return r[b]
                ? r(t)
                : r.length > 1
                ? ((n = [e, e, "", t]),
                  o.setFilters.hasOwnProperty(e.toLowerCase())
                    ? lt(function (e, n) {
                        var i,
                          o = r(e, t),
                          a = o.length;
                        while (a--)
                          (i = F.call(e, o[a])), (e[i] = !(n[i] = o[a]));
                      })
                    : function (e) {
                        return r(e, 0, n);
                      })
                : r;
            }
          },
          pseudos: {
            not: lt(function (e) {
              var t = [],
                n = [],
                r = l(e.replace(z, "$1"));
              return r[b]
                ? lt(function (e, t, n, i) {
                    var o,
                      a = r(e, null, i, []),
                      s = e.length;
                    while (s--) (o = a[s]) && (e[s] = !(t[s] = o));
                  })
                : function (e, i, o) {
                    return (t[0] = e), r(t, null, o, n), !n.pop();
                  };
            }),
            has: lt(function (e) {
              return function (t) {
                return at(e, t).length > 0;
              };
            }),
            contains: lt(function (e) {
              return function (t) {
                return (t.textContent || t.innerText || a(t)).indexOf(e) > -1;
              };
            }),
            lang: lt(function (e) {
              return (
                G.test(e || "") || at.error("unsupported lang: " + e),
                (e = e.replace(rt, it).toLowerCase()),
                function (t) {
                  var n;
                  do
                    if (
                      (n = h
                        ? t.lang
                        : t.getAttribute("xml:lang") || t.getAttribute("lang"))
                    )
                      return (
                        (n = n.toLowerCase()),
                        n === e || 0 === n.indexOf(e + "-")
                      );
                  while ((t = t.parentNode) && 1 === t.nodeType);
                  return !1;
                }
              );
            }),
            target: function (t) {
              var n = e.location && e.location.hash;
              return n && n.slice(1) === t.id;
            },
            root: function (e) {
              return e === d;
            },
            focus: function (e) {
              return (
                e === f.activeElement &&
                (!f.hasFocus || f.hasFocus()) &&
                !!(e.type || e.href || ~e.tabIndex)
              );
            },
            enabled: function (e) {
              return e.disabled === !1;
            },
            disabled: function (e) {
              return e.disabled === !0;
            },
            checked: function (e) {
              var t = e.nodeName.toLowerCase();
              return (
                ("input" === t && !!e.checked) ||
                ("option" === t && !!e.selected)
              );
            },
            selected: function (e) {
              return (
                e.parentNode && e.parentNode.selectedIndex, e.selected === !0
              );
            },
            empty: function (e) {
              for (e = e.firstChild; e; e = e.nextSibling)
                if (e.nodeName > "@" || 3 === e.nodeType || 4 === e.nodeType)
                  return !1;
              return !0;
            },
            parent: function (e) {
              return !o.pseudos.empty(e);
            },
            header: function (e) {
              return tt.test(e.nodeName);
            },
            input: function (e) {
              return et.test(e.nodeName);
            },
            button: function (e) {
              var t = e.nodeName.toLowerCase();
              return ("input" === t && "button" === e.type) || "button" === t;
            },
            text: function (e) {
              var t;
              return (
                "input" === e.nodeName.toLowerCase() &&
                "text" === e.type &&
                (null == (t = e.getAttribute("type")) ||
                  t.toLowerCase() === e.type)
              );
            },
            first: ht(function () {
              return [0];
            }),
            last: ht(function (e, t) {
              return [t - 1];
            }),
            eq: ht(function (e, t, n) {
              return [0 > n ? n + t : n];
            }),
            even: ht(function (e, t) {
              var n = 0;
              for (; t > n; n += 2) e.push(n);
              return e;
            }),
            odd: ht(function (e, t) {
              var n = 1;
              for (; t > n; n += 2) e.push(n);
              return e;
            }),
            lt: ht(function (e, t, n) {
              var r = 0 > n ? n + t : n;
              for (; --r >= 0; ) e.push(r);
              return e;
            }),
            gt: ht(function (e, t, n) {
              var r = 0 > n ? n + t : n;
              for (; t > ++r; ) e.push(r);
              return e;
            })
          }
        }),
        (o.pseudos.nth = o.pseudos.eq);
      for (n in { radio: !0, checkbox: !0, file: !0, password: !0, image: !0 })
        o.pseudos[n] = ft(n);
      for (n in { submit: !0, reset: !0 }) o.pseudos[n] = dt(n);
      function gt() {}
      (gt.prototype = o.filters = o.pseudos), (o.setFilters = new gt());
      function mt(e, t) {
        var n,
          r,
          i,
          a,
          s,
          l,
          u,
          c = k[e + " "];
        if (c) return t ? 0 : c.slice(0);
        (s = e), (l = []), (u = o.preFilter);
        while (s) {
          (!n || (r = X.exec(s))) &&
            (r && (s = s.slice(r[0].length) || s), l.push((i = []))),
            (n = !1),
            (r = U.exec(s)) &&
              ((n = r.shift()),
              i.push({ value: n, type: r[0].replace(z, " ") }),
              (s = s.slice(n.length)));
          for (a in o.filter)
            !(r = Q[a].exec(s)) ||
              (u[a] && !(r = u[a](r))) ||
              ((n = r.shift()),
              i.push({ value: n, type: a, matches: r }),
              (s = s.slice(n.length)));
          if (!n) break;
        }
        return t ? s.length : s ? at.error(e) : k(e, l).slice(0);
      }
      function yt(e) {
        var t = 0,
          n = e.length,
          r = "";
        for (; n > t; t++) r += e[t].value;
        return r;
      }
      function vt(e, t, n) {
        var r = t.dir,
          o = n && "parentNode" === r,
          a = C++;
        return t.first
          ? function (t, n, i) {
              while ((t = t[r])) if (1 === t.nodeType || o) return e(t, n, i);
            }
          : function (t, n, s) {
              var l,
                u,
                c,
                p = T + " " + a;
              if (s) {
                while ((t = t[r]))
                  if ((1 === t.nodeType || o) && e(t, n, s)) return !0;
              } else
                while ((t = t[r]))
                  if (1 === t.nodeType || o)
                    if (((c = t[b] || (t[b] = {})), (u = c[r]) && u[0] === p)) {
                      if ((l = u[1]) === !0 || l === i) return l === !0;
                    } else if (
                      ((u = c[r] = [p]), (u[1] = e(t, n, s) || i), u[1] === !0)
                    )
                      return !0;
            };
      }
      function bt(e) {
        return e.length > 1
          ? function (t, n, r) {
              var i = e.length;
              while (i--) if (!e[i](t, n, r)) return !1;
              return !0;
            }
          : e[0];
      }
      function xt(e, t, n, r, i) {
        var o,
          a = [],
          s = 0,
          l = e.length,
          u = null != t;
        for (; l > s; s++)
          (o = e[s]) && (!n || n(o, r, i)) && (a.push(o), u && t.push(s));
        return a;
      }
      function wt(e, t, n, r, i, o) {
        return (
          r && !r[b] && (r = wt(r)),
          i && !i[b] && (i = wt(i, o)),
          lt(function (o, a, s, l) {
            var u,
              c,
              p,
              f = [],
              d = [],
              h = a.length,
              g = o || Nt(t || "*", s.nodeType ? [s] : s, []),
              m = !e || (!o && t) ? g : xt(g, f, e, s, l),
              y = n ? (i || (o ? e : h || r) ? [] : a) : m;
            if ((n && n(m, y, s, l), r)) {
              (u = xt(y, d)), r(u, [], s, l), (c = u.length);
              while (c--) (p = u[c]) && (y[d[c]] = !(m[d[c]] = p));
            }
            if (o) {
              if (i || e) {
                if (i) {
                  (u = []), (c = y.length);
                  while (c--) (p = y[c]) && u.push((m[c] = p));
                  i(null, (y = []), u, l);
                }
                c = y.length;
                while (c--)
                  (p = y[c]) &&
                    (u = i ? F.call(o, p) : f[c]) > -1 &&
                    (o[u] = !(a[u] = p));
              }
            } else (y = xt(y === a ? y.splice(h, y.length) : y)), i ? i(null, a, y, l) : M.apply(a, y);
          })
        );
      }
      function Tt(e) {
        var t,
          n,
          r,
          i = e.length,
          a = o.relative[e[0].type],
          s = a || o.relative[" "],
          l = a ? 1 : 0,
          c = vt(
            function (e) {
              return e === t;
            },
            s,
            !0
          ),
          p = vt(
            function (e) {
              return F.call(t, e) > -1;
            },
            s,
            !0
          ),
          f = [
            function (e, n, r) {
              return (
                (!a && (r || n !== u)) ||
                ((t = n).nodeType ? c(e, n, r) : p(e, n, r))
              );
            }
          ];
        for (; i > l; l++)
          if ((n = o.relative[e[l].type])) f = [vt(bt(f), n)];
          else {
            if (((n = o.filter[e[l].type].apply(null, e[l].matches)), n[b])) {
              for (r = ++l; i > r; r++) if (o.relative[e[r].type]) break;
              return wt(
                l > 1 && bt(f),
                l > 1 &&
                  yt(
                    e
                      .slice(0, l - 1)
                      .concat({ value: " " === e[l - 2].type ? "*" : "" })
                  ).replace(z, "$1"),
                n,
                r > l && Tt(e.slice(l, r)),
                i > r && Tt((e = e.slice(r))),
                i > r && yt(e)
              );
            }
            f.push(n);
          }
        return bt(f);
      }
      function Ct(e, t) {
        var n = 0,
          r = t.length > 0,
          a = e.length > 0,
          s = function (s, l, c, p, d) {
            var h,
              g,
              m,
              y = [],
              v = 0,
              b = "0",
              x = s && [],
              w = null != d,
              C = u,
              N = s || (a && o.find.TAG("*", (d && l.parentNode) || l)),
              k = (T += null == C ? 1 : Math.random() || 0.1);
            for (w && ((u = l !== f && l), (i = n)); null != (h = N[b]); b++) {
              if (a && h) {
                g = 0;
                while ((m = e[g++]))
                  if (m(h, l, c)) {
                    p.push(h);
                    break;
                  }
                w && ((T = k), (i = ++n));
              }
              r && ((h = !m && h) && v--, s && x.push(h));
            }
            if (((v += b), r && b !== v)) {
              g = 0;
              while ((m = t[g++])) m(x, y, l, c);
              if (s) {
                if (v > 0) while (b--) x[b] || y[b] || (y[b] = q.call(p));
                y = xt(y);
              }
              M.apply(p, y),
                w && !s && y.length > 0 && v + t.length > 1 && at.uniqueSort(p);
            }
            return w && ((T = k), (u = C)), x;
          };
        return r ? lt(s) : s;
      }
      l = at.compile = function (e, t) {
        var n,
          r = [],
          i = [],
          o = E[e + " "];
        if (!o) {
          t || (t = mt(e)), (n = t.length);
          while (n--) (o = Tt(t[n])), o[b] ? r.push(o) : i.push(o);
          o = E(e, Ct(i, r));
        }
        return o;
      };
      function Nt(e, t, n) {
        var r = 0,
          i = t.length;
        for (; i > r; r++) at(e, t[r], n);
        return n;
      }
      function kt(e, t, n, i) {
        var a,
          s,
          u,
          c,
          p,
          f = mt(e);
        if (!i && 1 === f.length) {
          if (
            ((s = f[0] = f[0].slice(0)),
            s.length > 2 &&
              "ID" === (u = s[0]).type &&
              r.getById &&
              9 === t.nodeType &&
              h &&
              o.relative[s[1].type])
          ) {
            if (
              ((t = (o.find.ID(u.matches[0].replace(rt, it), t) || [])[0]), !t)
            )
              return n;
            e = e.slice(s.shift().value.length);
          }
          a = Q.needsContext.test(e) ? 0 : s.length;
          while (a--) {
            if (((u = s[a]), o.relative[(c = u.type)])) break;
            if (
              (p = o.find[c]) &&
              (i = p(
                u.matches[0].replace(rt, it),
                (V.test(s[0].type) && t.parentNode) || t
              ))
            ) {
              if ((s.splice(a, 1), (e = i.length && yt(s)), !e))
                return M.apply(n, i), n;
              break;
            }
          }
        }
        return l(e, f)(i, t, !h, n, V.test(e)), n;
      }
      (r.sortStable = b.split("").sort(A).join("") === b),
        (r.detectDuplicates = S),
        p(),
        (r.sortDetached = ut(function (e) {
          return 1 & e.compareDocumentPosition(f.createElement("div"));
        })),
        ut(function (e) {
          return (
            (e.innerHTML = "<a href='#'></a>"),
            "#" === e.firstChild.getAttribute("href")
          );
        }) ||
          ct("type|href|height|width", function (e, n, r) {
            return r
              ? t
              : e.getAttribute(n, "type" === n.toLowerCase() ? 1 : 2);
          }),
        (r.attributes &&
          ut(function (e) {
            return (
              (e.innerHTML = "<input/>"),
              e.firstChild.setAttribute("value", ""),
              "" === e.firstChild.getAttribute("value")
            );
          })) ||
          ct("value", function (e, n, r) {
            return r || "input" !== e.nodeName.toLowerCase()
              ? t
              : e.defaultValue;
          }),
        ut(function (e) {
          return null == e.getAttribute("disabled");
        }) ||
          ct(B, function (e, n, r) {
            var i;
            return r
              ? t
              : (i = e.getAttributeNode(n)) && i.specified
              ? i.value
              : e[n] === !0
              ? n.toLowerCase()
              : null;
          }),
        (x.find = at),
        (x.expr = at.selectors),
        (x.expr[":"] = x.expr.pseudos),
        (x.unique = at.uniqueSort),
        (x.text = at.getText),
        (x.isXMLDoc = at.isXML),
        (x.contains = at.contains);
    })(e);
  var O = {};
  function F(e) {
    var t = (O[e] = {});
    return (
      x.each(e.match(T) || [], function (e, n) {
        t[n] = !0;
      }),
      t
    );
  }
  (x.Callbacks = function (e) {
    e = "string" == typeof e ? O[e] || F(e) : x.extend({}, e);
    var n,
      r,
      i,
      o,
      a,
      s,
      l = [],
      u = !e.once && [],
      c = function (t) {
        for (
          r = e.memory && t, i = !0, a = s || 0, s = 0, o = l.length, n = !0;
          l && o > a;
          a++
        )
          if (l[a].apply(t[0], t[1]) === !1 && e.stopOnFalse) {
            r = !1;
            break;
          }
        (n = !1),
          l && (u ? u.length && c(u.shift()) : r ? (l = []) : p.disable());
      },
      p = {
        add: function () {
          if (l) {
            var t = l.length;
            (function i(t) {
              x.each(t, function (t, n) {
                var r = x.type(n);
                "function" === r
                  ? (e.unique && p.has(n)) || l.push(n)
                  : n && n.length && "string" !== r && i(n);
              });
            })(arguments),
              n ? (o = l.length) : r && ((s = t), c(r));
          }
          return this;
        },
        remove: function () {
          return (
            l &&
              x.each(arguments, function (e, t) {
                var r;
                while ((r = x.inArray(t, l, r)) > -1)
                  l.splice(r, 1), n && (o >= r && o--, a >= r && a--);
              }),
            this
          );
        },
        has: function (e) {
          return e ? x.inArray(e, l) > -1 : !(!l || !l.length);
        },
        empty: function () {
          return (l = []), (o = 0), this;
        },
        disable: function () {
          return (l = u = r = t), this;
        },
        disabled: function () {
          return !l;
        },
        lock: function () {
          return (u = t), r || p.disable(), this;
        },
        locked: function () {
          return !u;
        },
        fireWith: function (e, t) {
          return (
            !l ||
              (i && !u) ||
              ((t = t || []),
              (t = [e, t.slice ? t.slice() : t]),
              n ? u.push(t) : c(t)),
            this
          );
        },
        fire: function () {
          return p.fireWith(this, arguments), this;
        },
        fired: function () {
          return !!i;
        }
      };
    return p;
  }),
    x.extend({
      Deferred: function (e) {
        var t = [
            ["resolve", "done", x.Callbacks("once memory"), "resolved"],
            ["reject", "fail", x.Callbacks("once memory"), "rejected"],
            ["notify", "progress", x.Callbacks("memory")]
          ],
          n = "pending",
          r = {
            state: function () {
              return n;
            },
            always: function () {
              return i.done(arguments).fail(arguments), this;
            },
            then: function () {
              var e = arguments;
              return x
                .Deferred(function (n) {
                  x.each(t, function (t, o) {
                    var a = o[0],
                      s = x.isFunction(e[t]) && e[t];
                    i[o[1]](function () {
                      var e = s && s.apply(this, arguments);
                      e && x.isFunction(e.promise)
                        ? e
                            .promise()
                            .done(n.resolve)
                            .fail(n.reject)
                            .progress(n.notify)
                        : n[a + "With"](
                            this === r ? n.promise() : this,
                            s ? [e] : arguments
                          );
                    });
                  }),
                    (e = null);
                })
                .promise();
            },
            promise: function (e) {
              return null != e ? x.extend(e, r) : r;
            }
          },
          i = {};
        return (
          (r.pipe = r.then),
          x.each(t, function (e, o) {
            var a = o[2],
              s = o[3];
            (r[o[1]] = a.add),
              s &&
                a.add(
                  function () {
                    n = s;
                  },
                  t[1 ^ e][2].disable,
                  t[2][2].lock
                ),
              (i[o[0]] = function () {
                return i[o[0] + "With"](this === i ? r : this, arguments), this;
              }),
              (i[o[0] + "With"] = a.fireWith);
          }),
          r.promise(i),
          e && e.call(i, i),
          i
        );
      },
      when: function (e) {
        var t = 0,
          n = g.call(arguments),
          r = n.length,
          i = 1 !== r || (e && x.isFunction(e.promise)) ? r : 0,
          o = 1 === i ? e : x.Deferred(),
          a = function (e, t, n) {
            return function (r) {
              (t[e] = this),
                (n[e] = arguments.length > 1 ? g.call(arguments) : r),
                n === s ? o.notifyWith(t, n) : --i || o.resolveWith(t, n);
            };
          },
          s,
          l,
          u;
        if (r > 1)
          for (s = Array(r), l = Array(r), u = Array(r); r > t; t++)
            n[t] && x.isFunction(n[t].promise)
              ? n[t]
                  .promise()
                  .done(a(t, u, n))
                  .fail(o.reject)
                  .progress(a(t, l, s))
              : --i;
        return i || o.resolveWith(u, n), o.promise();
      }
    }),
    (x.support = (function (t) {
      var n,
        r,
        o,
        s,
        l,
        u,
        c,
        p,
        f,
        d = a.createElement("div");
      if (
        (d.setAttribute("className", "t"),
        (d.innerHTML =
          "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>"),
        (n = d.getElementsByTagName("*") || []),
        (r = d.getElementsByTagName("a")[0]),
        !r || !r.style || !n.length)
      )
        return t;
      (s = a.createElement("select")),
        (u = s.appendChild(a.createElement("option"))),
        (o = d.getElementsByTagName("input")[0]),
        (r.style.cssText = "top:1px;float:left;opacity:.5"),
        (t.getSetAttribute = "t" !== d.className),
        (t.leadingWhitespace = 3 === d.firstChild.nodeType),
        (t.tbody = !d.getElementsByTagName("tbody").length),
        (t.htmlSerialize = !!d.getElementsByTagName("link").length),
        (t.style = /top/.test(r.getAttribute("style"))),
        (t.hrefNormalized = "/a" === r.getAttribute("href")),
        (t.opacity = /^0.5/.test(r.style.opacity)),
        (t.cssFloat = !!r.style.cssFloat),
        (t.checkOn = !!o.value),
        (t.optSelected = u.selected),
        (t.enctype = !!a.createElement("form").enctype),
        (t.html5Clone =
          "<:nav></:nav>" !== a.createElement("nav").cloneNode(!0).outerHTML),
        (t.inlineBlockNeedsLayout = !1),
        (t.shrinkWrapBlocks = !1),
        (t.pixelPosition = !1),
        (t.deleteExpando = !0),
        (t.noCloneEvent = !0),
        (t.reliableMarginRight = !0),
        (t.boxSizingReliable = !0),
        (o.checked = !0),
        (t.noCloneChecked = o.cloneNode(!0).checked),
        (s.disabled = !0),
        (t.optDisabled = !u.disabled);
      try {
        delete d.test;
      } catch (h) {
        t.deleteExpando = !1;
      }
      (o = a.createElement("input")),
        o.setAttribute("value", ""),
        (t.input = "" === o.getAttribute("value")),
        (o.value = "t"),
        o.setAttribute("type", "radio"),
        (t.radioValue = "t" === o.value),
        o.setAttribute("checked", "t"),
        o.setAttribute("name", "t"),
        (l = a.createDocumentFragment()),
        l.appendChild(o),
        (t.appendChecked = o.checked),
        (t.checkClone = l.cloneNode(!0).cloneNode(!0).lastChild.checked),
        d.attachEvent &&
          (d.attachEvent("onclick", function () {
            t.noCloneEvent = !1;
          }),
          d.cloneNode(!0).click());
      for (f in { submit: !0, change: !0, focusin: !0 })
        d.setAttribute((c = "on" + f), "t"),
          (t[f + "Bubbles"] = c in e || d.attributes[c].expando === !1);
      (d.style.backgroundClip = "content-box"),
        (d.cloneNode(!0).style.backgroundClip = ""),
        (t.clearCloneStyle = "content-box" === d.style.backgroundClip);
      for (f in x(t)) break;
      return (
        (t.ownLast = "0" !== f),
        x(function () {
          var n,
            r,
            o,
            s =
              "padding:0;margin:0;border:0;display:block;box-sizing:content-box;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;",
            l = a.getElementsByTagName("body")[0];
          l &&
            ((n = a.createElement("div")),
            (n.style.cssText =
              "border:0;width:0;height:0;position:absolute;top:0;left:-9999px;margin-top:1px"),
            l.appendChild(n).appendChild(d),
            (d.innerHTML = "<table><tr><td></td><td>t</td></tr></table>"),
            (o = d.getElementsByTagName("td")),
            (o[0].style.cssText = "padding:0;margin:0;border:0;display:none"),
            (p = 0 === o[0].offsetHeight),
            (o[0].style.display = ""),
            (o[1].style.display = "none"),
            (t.reliableHiddenOffsets = p && 0 === o[0].offsetHeight),
            (d.innerHTML = ""),
            (d.style.cssText =
              "box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;padding:1px;border:1px;display:block;width:4px;margin-top:1%;position:absolute;top:1%;"),
            x.swap(l, null != l.style.zoom ? { zoom: 1 } : {}, function () {
              t.boxSizing = 4 === d.offsetWidth;
            }),
            e.getComputedStyle &&
              ((t.pixelPosition =
                "1%" !== (e.getComputedStyle(d, null) || {}).top),
              (t.boxSizingReliable =
                "4px" ===
                (e.getComputedStyle(d, null) || { width: "4px" }).width),
              (r = d.appendChild(a.createElement("div"))),
              (r.style.cssText = d.style.cssText = s),
              (r.style.marginRight = r.style.width = "0"),
              (d.style.width = "1px"),
              (t.reliableMarginRight = !parseFloat(
                (e.getComputedStyle(r, null) || {}).marginRight
              ))),
            typeof d.style.zoom !== i &&
              ((d.innerHTML = ""),
              (d.style.cssText =
                s + "width:1px;padding:1px;display:inline;zoom:1"),
              (t.inlineBlockNeedsLayout = 3 === d.offsetWidth),
              (d.style.display = "block"),
              (d.innerHTML = "<div></div>"),
              (d.firstChild.style.width = "5px"),
              (t.shrinkWrapBlocks = 3 !== d.offsetWidth),
              t.inlineBlockNeedsLayout && (l.style.zoom = 1)),
            l.removeChild(n),
            (n = d = o = r = null));
        }),
        (n = s = l = u = r = o = null),
        t
      );
    })({}));
  var B = /(?:\{[\s\S]*\}|\[[\s\S]*\])$/,
    P = /([A-Z])/g;
  function R(e, n, r, i) {
    if (x.acceptData(e)) {
      var o,
        a,
        s = x.expando,
        l = e.nodeType,
        u = l ? x.cache : e,
        c = l ? e[s] : e[s] && s;
      if ((c && u[c] && (i || u[c].data)) || r !== t || "string" != typeof n)
        return (
          c || (c = l ? (e[s] = p.pop() || x.guid++) : s),
          u[c] || (u[c] = l ? {} : { toJSON: x.noop }),
          ("object" == typeof n || "function" == typeof n) &&
            (i
              ? (u[c] = x.extend(u[c], n))
              : (u[c].data = x.extend(u[c].data, n))),
          (a = u[c]),
          i || (a.data || (a.data = {}), (a = a.data)),
          r !== t && (a[x.camelCase(n)] = r),
          "string" == typeof n
            ? ((o = a[n]), null == o && (o = a[x.camelCase(n)]))
            : (o = a),
          o
        );
    }
  }
  function W(e, t, n) {
    if (x.acceptData(e)) {
      var r,
        i,
        o = e.nodeType,
        a = o ? x.cache : e,
        s = o ? e[x.expando] : x.expando;
      if (a[s]) {
        if (t && (r = n ? a[s] : a[s].data)) {
          x.isArray(t)
            ? (t = t.concat(x.map(t, x.camelCase)))
            : t in r
            ? (t = [t])
            : ((t = x.camelCase(t)), (t = t in r ? [t] : t.split(" "))),
            (i = t.length);
          while (i--) delete r[t[i]];
          if (n ? !I(r) : !x.isEmptyObject(r)) return;
        }
        (n || (delete a[s].data, I(a[s]))) &&
          (o
            ? x.cleanData([e], !0)
            : x.support.deleteExpando || a != a.window
            ? delete a[s]
            : (a[s] = null));
      }
    }
  }
  x.extend({
    cache: {},
    noData: {
      applet: !0,
      embed: !0,
      object: "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
    },
    hasData: function (e) {
      return (
        (e = e.nodeType ? x.cache[e[x.expando]] : e[x.expando]), !!e && !I(e)
      );
    },
    data: function (e, t, n) {
      return R(e, t, n);
    },
    removeData: function (e, t) {
      return W(e, t);
    },
    _data: function (e, t, n) {
      return R(e, t, n, !0);
    },
    _removeData: function (e, t) {
      return W(e, t, !0);
    },
    acceptData: function (e) {
      if (e.nodeType && 1 !== e.nodeType && 9 !== e.nodeType) return !1;
      var t = e.nodeName && x.noData[e.nodeName.toLowerCase()];
      return !t || (t !== !0 && e.getAttribute("classid") === t);
    }
  }),
    x.fn.extend({
      data: function (e, n) {
        var r,
          i,
          o = null,
          a = 0,
          s = this[0];
        if (e === t) {
          if (
            this.length &&
            ((o = x.data(s)), 1 === s.nodeType && !x._data(s, "parsedAttrs"))
          ) {
            for (r = s.attributes; r.length > a; a++)
              (i = r[a].name),
                0 === i.indexOf("data-") &&
                  ((i = x.camelCase(i.slice(5))), $(s, i, o[i]));
            x._data(s, "parsedAttrs", !0);
          }
          return o;
        }
        return "object" == typeof e
          ? this.each(function () {
              x.data(this, e);
            })
          : arguments.length > 1
          ? this.each(function () {
              x.data(this, e, n);
            })
          : s
          ? $(s, e, x.data(s, e))
          : null;
      },
      removeData: function (e) {
        return this.each(function () {
          x.removeData(this, e);
        });
      }
    });
  function $(e, n, r) {
    if (r === t && 1 === e.nodeType) {
      var i = "data-" + n.replace(P, "-$1").toLowerCase();
      if (((r = e.getAttribute(i)), "string" == typeof r)) {
        try {
          r =
            "true" === r
              ? !0
              : "false" === r
              ? !1
              : "null" === r
              ? null
              : +r + "" === r
              ? +r
              : B.test(r)
              ? x.parseJSON(r)
              : r;
        } catch (o) {}
        x.data(e, n, r);
      } else r = t;
    }
    return r;
  }
  function I(e) {
    var t;
    for (t in e)
      if (("data" !== t || !x.isEmptyObject(e[t])) && "toJSON" !== t) return !1;
    return !0;
  }
  x.extend({
    queue: function (e, n, r) {
      var i;
      return e
        ? ((n = (n || "fx") + "queue"),
          (i = x._data(e, n)),
          r &&
            (!i || x.isArray(r)
              ? (i = x._data(e, n, x.makeArray(r)))
              : i.push(r)),
          i || [])
        : t;
    },
    dequeue: function (e, t) {
      t = t || "fx";
      var n = x.queue(e, t),
        r = n.length,
        i = n.shift(),
        o = x._queueHooks(e, t),
        a = function () {
          x.dequeue(e, t);
        };
      "inprogress" === i && ((i = n.shift()), r--),
        i &&
          ("fx" === t && n.unshift("inprogress"),
          delete o.stop,
          i.call(e, a, o)),
        !r && o && o.empty.fire();
    },
    _queueHooks: function (e, t) {
      var n = t + "queueHooks";
      return (
        x._data(e, n) ||
        x._data(e, n, {
          empty: x.Callbacks("once memory").add(function () {
            x._removeData(e, t + "queue"), x._removeData(e, n);
          })
        })
      );
    }
  }),
    x.fn.extend({
      queue: function (e, n) {
        var r = 2;
        return (
          "string" != typeof e && ((n = e), (e = "fx"), r--),
          r > arguments.length
            ? x.queue(this[0], e)
            : n === t
            ? this
            : this.each(function () {
                var t = x.queue(this, e, n);
                x._queueHooks(this, e),
                  "fx" === e && "inprogress" !== t[0] && x.dequeue(this, e);
              })
        );
      },
      dequeue: function (e) {
        return this.each(function () {
          x.dequeue(this, e);
        });
      },
      delay: function (e, t) {
        return (
          (e = x.fx ? x.fx.speeds[e] || e : e),
          (t = t || "fx"),
          this.queue(t, function (t, n) {
            var r = setTimeout(t, e);
            n.stop = function () {
              clearTimeout(r);
            };
          })
        );
      },
      clearQueue: function (e) {
        return this.queue(e || "fx", []);
      },
      promise: function (e, n) {
        var r,
          i = 1,
          o = x.Deferred(),
          a = this,
          s = this.length,
          l = function () {
            --i || o.resolveWith(a, [a]);
          };
        "string" != typeof e && ((n = e), (e = t)), (e = e || "fx");
        while (s--)
          (r = x._data(a[s], e + "queueHooks")),
            r && r.empty && (i++, r.empty.add(l));
        return l(), o.promise(n);
      }
    });
  var z,
    X,
    U = /[\t\r\n\f]/g,
    V = /\r/g,
    Y = /^(?:input|select|textarea|button|object)$/i,
    J = /^(?:a|area)$/i,
    G = /^(?:checked|selected)$/i,
    Q = x.support.getSetAttribute,
    K = x.support.input;
  x.fn.extend({
    attr: function (e, t) {
      return x.access(this, x.attr, e, t, arguments.length > 1);
    },
    removeAttr: function (e) {
      return this.each(function () {
        x.removeAttr(this, e);
      });
    },
    prop: function (e, t) {
      return x.access(this, x.prop, e, t, arguments.length > 1);
    },
    removeProp: function (e) {
      return (
        (e = x.propFix[e] || e),
        this.each(function () {
          try {
            (this[e] = t), delete this[e];
          } catch (n) {}
        })
      );
    },
    addClass: function (e) {
      var t,
        n,
        r,
        i,
        o,
        a = 0,
        s = this.length,
        l = "string" == typeof e && e;
      if (x.isFunction(e))
        return this.each(function (t) {
          x(this).addClass(e.call(this, t, this.className));
        });
      if (l)
        for (t = (e || "").match(T) || []; s > a; a++)
          if (
            ((n = this[a]),
            (r =
              1 === n.nodeType &&
              (n.className ? (" " + n.className + " ").replace(U, " ") : " ")))
          ) {
            o = 0;
            while ((i = t[o++])) 0 > r.indexOf(" " + i + " ") && (r += i + " ");
            n.className = x.trim(r);
          }
      return this;
    },
    removeClass: function (e) {
      var t,
        n,
        r,
        i,
        o,
        a = 0,
        s = this.length,
        l = 0 === arguments.length || ("string" == typeof e && e);
      if (x.isFunction(e))
        return this.each(function (t) {
          x(this).removeClass(e.call(this, t, this.className));
        });
      if (l)
        for (t = (e || "").match(T) || []; s > a; a++)
          if (
            ((n = this[a]),
            (r =
              1 === n.nodeType &&
              (n.className ? (" " + n.className + " ").replace(U, " ") : "")))
          ) {
            o = 0;
            while ((i = t[o++]))
              while (r.indexOf(" " + i + " ") >= 0)
                r = r.replace(" " + i + " ", " ");
            n.className = e ? x.trim(r) : "";
          }
      return this;
    },
    toggleClass: function (e, t) {
      var n = typeof e;
      return "boolean" == typeof t && "string" === n
        ? t
          ? this.addClass(e)
          : this.removeClass(e)
        : x.isFunction(e)
        ? this.each(function (n) {
            x(this).toggleClass(e.call(this, n, this.className, t), t);
          })
        : this.each(function () {
            if ("string" === n) {
              var t,
                r = 0,
                o = x(this),
                a = e.match(T) || [];
              while ((t = a[r++]))
                o.hasClass(t) ? o.removeClass(t) : o.addClass(t);
            } else (n === i || "boolean" === n) && (this.className && x._data(this, "__className__", this.className), (this.className = this.className || e === !1 ? "" : x._data(this, "__className__") || ""));
          });
    },
    hasClass: function (e) {
      var t = " " + e + " ",
        n = 0,
        r = this.length;
      for (; r > n; n++)
        if (
          1 === this[n].nodeType &&
          (" " + this[n].className + " ").replace(U, " ").indexOf(t) >= 0
        )
          return !0;
      return !1;
    },
    val: function (e) {
      var n,
        r,
        i,
        o = this[0];
      {
        if (arguments.length)
          return (
            (i = x.isFunction(e)),
            this.each(function (n) {
              var o;
              1 === this.nodeType &&
                ((o = i ? e.call(this, n, x(this).val()) : e),
                null == o
                  ? (o = "")
                  : "number" == typeof o
                  ? (o += "")
                  : x.isArray(o) &&
                    (o = x.map(o, function (e) {
                      return null == e ? "" : e + "";
                    })),
                (r =
                  x.valHooks[this.type] ||
                  x.valHooks[this.nodeName.toLowerCase()]),
                (r && "set" in r && r.set(this, o, "value") !== t) ||
                  (this.value = o));
            })
          );
        if (o)
          return (
            (r = x.valHooks[o.type] || x.valHooks[o.nodeName.toLowerCase()]),
            r && "get" in r && (n = r.get(o, "value")) !== t
              ? n
              : ((n = o.value),
                "string" == typeof n ? n.replace(V, "") : null == n ? "" : n)
          );
      }
    }
  }),
    x.extend({
      valHooks: {
        option: {
          get: function (e) {
            var t = x.find.attr(e, "value");
            return null != t ? t : e.text;
          }
        },
        select: {
          get: function (e) {
            var t,
              n,
              r = e.options,
              i = e.selectedIndex,
              o = "select-one" === e.type || 0 > i,
              a = o ? null : [],
              s = o ? i + 1 : r.length,
              l = 0 > i ? s : o ? i : 0;
            for (; s > l; l++)
              if (
                ((n = r[l]),
                !(
                  (!n.selected && l !== i) ||
                  (x.support.optDisabled
                    ? n.disabled
                    : null !== n.getAttribute("disabled")) ||
                  (n.parentNode.disabled &&
                    x.nodeName(n.parentNode, "optgroup"))
                ))
              ) {
                if (((t = x(n).val()), o)) return t;
                a.push(t);
              }
            return a;
          },
          set: function (e, t) {
            var n,
              r,
              i = e.options,
              o = x.makeArray(t),
              a = i.length;
            while (a--)
              (r = i[a]),
                (r.selected = x.inArray(x(r).val(), o) >= 0) && (n = !0);
            return n || (e.selectedIndex = -1), o;
          }
        }
      },
      attr: function (e, n, r) {
        var o,
          a,
          s = e.nodeType;
        if (e && 3 !== s && 8 !== s && 2 !== s)
          return typeof e.getAttribute === i
            ? x.prop(e, n, r)
            : ((1 === s && x.isXMLDoc(e)) ||
                ((n = n.toLowerCase()),
                (o = x.attrHooks[n] || (x.expr.match.bool.test(n) ? X : z))),
              r === t
                ? o && "get" in o && null !== (a = o.get(e, n))
                  ? a
                  : ((a = x.find.attr(e, n)), null == a ? t : a)
                : null !== r
                ? o && "set" in o && (a = o.set(e, r, n)) !== t
                  ? a
                  : (e.setAttribute(n, r + ""), r)
                : (x.removeAttr(e, n), t));
      },
      removeAttr: function (e, t) {
        var n,
          r,
          i = 0,
          o = t && t.match(T);
        if (o && 1 === e.nodeType)
          while ((n = o[i++]))
            (r = x.propFix[n] || n),
              x.expr.match.bool.test(n)
                ? (K && Q) || !G.test(n)
                  ? (e[r] = !1)
                  : (e[x.camelCase("default-" + n)] = e[r] = !1)
                : x.attr(e, n, ""),
              e.removeAttribute(Q ? n : r);
      },
      attrHooks: {
        type: {
          set: function (e, t) {
            if (
              !x.support.radioValue &&
              "radio" === t &&
              x.nodeName(e, "input")
            ) {
              var n = e.value;
              return e.setAttribute("type", t), n && (e.value = n), t;
            }
          }
        }
      },
      propFix: { for: "htmlFor", class: "className" },
      prop: function (e, n, r) {
        var i,
          o,
          a,
          s = e.nodeType;
        if (e && 3 !== s && 8 !== s && 2 !== s)
          return (
            (a = 1 !== s || !x.isXMLDoc(e)),
            a && ((n = x.propFix[n] || n), (o = x.propHooks[n])),
            r !== t
              ? o && "set" in o && (i = o.set(e, r, n)) !== t
                ? i
                : (e[n] = r)
              : o && "get" in o && null !== (i = o.get(e, n))
              ? i
              : e[n]
          );
      },
      propHooks: {
        tabIndex: {
          get: function (e) {
            var t = x.find.attr(e, "tabindex");
            return t
              ? parseInt(t, 10)
              : Y.test(e.nodeName) || (J.test(e.nodeName) && e.href)
              ? 0
              : -1;
          }
        }
      }
    }),
    (X = {
      set: function (e, t, n) {
        return (
          t === !1
            ? x.removeAttr(e, n)
            : (K && Q) || !G.test(n)
            ? e.setAttribute((!Q && x.propFix[n]) || n, n)
            : (e[x.camelCase("default-" + n)] = e[n] = !0),
          n
        );
      }
    }),
    x.each(x.expr.match.bool.source.match(/\w+/g), function (e, n) {
      var r = x.expr.attrHandle[n] || x.find.attr;
      x.expr.attrHandle[n] =
        (K && Q) || !G.test(n)
          ? function (e, n, i) {
              var o = x.expr.attrHandle[n],
                a = i
                  ? t
                  : (x.expr.attrHandle[n] = t) != r(e, n, i)
                  ? n.toLowerCase()
                  : null;
              return (x.expr.attrHandle[n] = o), a;
            }
          : function (e, n, r) {
              return r
                ? t
                : e[x.camelCase("default-" + n)]
                ? n.toLowerCase()
                : null;
            };
    }),
    (K && Q) ||
      (x.attrHooks.value = {
        set: function (e, n, r) {
          return x.nodeName(e, "input")
            ? ((e.defaultValue = n), t)
            : z && z.set(e, n, r);
        }
      }),
    Q ||
      ((z = {
        set: function (e, n, r) {
          var i = e.getAttributeNode(r);
          return (
            i || e.setAttributeNode((i = e.ownerDocument.createAttribute(r))),
            (i.value = n += ""),
            "value" === r || n === e.getAttribute(r) ? n : t
          );
        }
      }),
      (x.expr.attrHandle.id = x.expr.attrHandle.name = x.expr.attrHandle.coords = function (
        e,
        n,
        r
      ) {
        var i;
        return r
          ? t
          : (i = e.getAttributeNode(n)) && "" !== i.value
          ? i.value
          : null;
      }),
      (x.valHooks.button = {
        get: function (e, n) {
          var r = e.getAttributeNode(n);
          return r && r.specified ? r.value : t;
        },
        set: z.set
      }),
      (x.attrHooks.contenteditable = {
        set: function (e, t, n) {
          z.set(e, "" === t ? !1 : t, n);
        }
      }),
      x.each(["width", "height"], function (e, n) {
        x.attrHooks[n] = {
          set: function (e, r) {
            return "" === r ? (e.setAttribute(n, "auto"), r) : t;
          }
        };
      })),
    x.support.hrefNormalized ||
      x.each(["href", "src"], function (e, t) {
        x.propHooks[t] = {
          get: function (e) {
            return e.getAttribute(t, 4);
          }
        };
      }),
    x.support.style ||
      (x.attrHooks.style = {
        get: function (e) {
          return e.style.cssText || t;
        },
        set: function (e, t) {
          return (e.style.cssText = t + "");
        }
      }),
    x.support.optSelected ||
      (x.propHooks.selected = {
        get: function (e) {
          var t = e.parentNode;
          return (
            t && (t.selectedIndex, t.parentNode && t.parentNode.selectedIndex),
            null
          );
        }
      }),
    x.each(
      [
        "tabIndex",
        "readOnly",
        "maxLength",
        "cellSpacing",
        "cellPadding",
        "rowSpan",
        "colSpan",
        "useMap",
        "frameBorder",
        "contentEditable"
      ],
      function () {
        x.propFix[this.toLowerCase()] = this;
      }
    ),
    x.support.enctype || (x.propFix.enctype = "encoding"),
    x.each(["radio", "checkbox"], function () {
      (x.valHooks[this] = {
        set: function (e, n) {
          return x.isArray(n) ? (e.checked = x.inArray(x(e).val(), n) >= 0) : t;
        }
      }),
        x.support.checkOn ||
          (x.valHooks[this].get = function (e) {
            return null === e.getAttribute("value") ? "on" : e.value;
          });
    });
  var Z = /^(?:input|select|textarea)$/i,
    et = /^key/,
    tt = /^(?:mouse|contextmenu)|click/,
    nt = /^(?:focusinfocus|focusoutblur)$/,
    rt = /^([^.]*)(?:\.(.+)|)$/;
  function it() {
    return !0;
  }
  function ot() {
    return !1;
  }
  function at() {
    try {
      return a.activeElement;
    } catch (e) {}
  }
  (x.event = {
    global: {},
    add: function (e, n, r, o, a) {
      var s,
        l,
        u,
        c,
        p,
        f,
        d,
        h,
        g,
        m,
        y,
        v = x._data(e);
      if (v) {
        r.handler && ((c = r), (r = c.handler), (a = c.selector)),
          r.guid || (r.guid = x.guid++),
          (l = v.events) || (l = v.events = {}),
          (f = v.handle) ||
            ((f = v.handle = function (e) {
              return typeof x === i || (e && x.event.triggered === e.type)
                ? t
                : x.event.dispatch.apply(f.elem, arguments);
            }),
            (f.elem = e)),
          (n = (n || "").match(T) || [""]),
          (u = n.length);
        while (u--)
          (s = rt.exec(n[u]) || []),
            (g = y = s[1]),
            (m = (s[2] || "").split(".").sort()),
            g &&
              ((p = x.event.special[g] || {}),
              (g = (a ? p.delegateType : p.bindType) || g),
              (p = x.event.special[g] || {}),
              (d = x.extend(
                {
                  type: g,
                  origType: y,
                  data: o,
                  handler: r,
                  guid: r.guid,
                  selector: a,
                  needsContext: a && x.expr.match.needsContext.test(a),
                  namespace: m.join(".")
                },
                c
              )),
              (h = l[g]) ||
                ((h = l[g] = []),
                (h.delegateCount = 0),
                (p.setup && p.setup.call(e, o, m, f) !== !1) ||
                  (e.addEventListener
                    ? e.addEventListener(g, f, !1)
                    : e.attachEvent && e.attachEvent("on" + g, f))),
              p.add &&
                (p.add.call(e, d), d.handler.guid || (d.handler.guid = r.guid)),
              a ? h.splice(h.delegateCount++, 0, d) : h.push(d),
              (x.event.global[g] = !0));
        e = null;
      }
    },
    remove: function (e, t, n, r, i) {
      var o,
        a,
        s,
        l,
        u,
        c,
        p,
        f,
        d,
        h,
        g,
        m = x.hasData(e) && x._data(e);
      if (m && (c = m.events)) {
        (t = (t || "").match(T) || [""]), (u = t.length);
        while (u--)
          if (
            ((s = rt.exec(t[u]) || []),
            (d = g = s[1]),
            (h = (s[2] || "").split(".").sort()),
            d)
          ) {
            (p = x.event.special[d] || {}),
              (d = (r ? p.delegateType : p.bindType) || d),
              (f = c[d] || []),
              (s =
                s[2] &&
                RegExp("(^|\\.)" + h.join("\\.(?:.*\\.|)") + "(\\.|$)")),
              (l = o = f.length);
            while (o--)
              (a = f[o]),
                (!i && g !== a.origType) ||
                  (n && n.guid !== a.guid) ||
                  (s && !s.test(a.namespace)) ||
                  (r && r !== a.selector && ("**" !== r || !a.selector)) ||
                  (f.splice(o, 1),
                  a.selector && f.delegateCount--,
                  p.remove && p.remove.call(e, a));
            l &&
              !f.length &&
              ((p.teardown && p.teardown.call(e, h, m.handle) !== !1) ||
                x.removeEvent(e, d, m.handle),
              delete c[d]);
          } else for (d in c) x.event.remove(e, d + t[u], n, r, !0);
        x.isEmptyObject(c) && (delete m.handle, x._removeData(e, "events"));
      }
    },
    trigger: function (n, r, i, o) {
      var s,
        l,
        u,
        c,
        p,
        f,
        d,
        h = [i || a],
        g = v.call(n, "type") ? n.type : n,
        m = v.call(n, "namespace") ? n.namespace.split(".") : [];
      if (
        ((u = f = i = i || a),
        3 !== i.nodeType &&
          8 !== i.nodeType &&
          !nt.test(g + x.event.triggered) &&
          (g.indexOf(".") >= 0 &&
            ((m = g.split(".")), (g = m.shift()), m.sort()),
          (l = 0 > g.indexOf(":") && "on" + g),
          (n = n[x.expando] ? n : new x.Event(g, "object" == typeof n && n)),
          (n.isTrigger = o ? 2 : 3),
          (n.namespace = m.join(".")),
          (n.namespace_re = n.namespace
            ? RegExp("(^|\\.)" + m.join("\\.(?:.*\\.|)") + "(\\.|$)")
            : null),
          (n.result = t),
          n.target || (n.target = i),
          (r = null == r ? [n] : x.makeArray(r, [n])),
          (p = x.event.special[g] || {}),
          o || !p.trigger || p.trigger.apply(i, r) !== !1))
      ) {
        if (!o && !p.noBubble && !x.isWindow(i)) {
          for (
            c = p.delegateType || g, nt.test(c + g) || (u = u.parentNode);
            u;
            u = u.parentNode
          )
            h.push(u), (f = u);
          f === (i.ownerDocument || a) &&
            h.push(f.defaultView || f.parentWindow || e);
        }
        d = 0;
        while ((u = h[d++]) && !n.isPropagationStopped())
          (n.type = d > 1 ? c : p.bindType || g),
            (s = (x._data(u, "events") || {})[n.type] && x._data(u, "handle")),
            s && s.apply(u, r),
            (s = l && u[l]),
            s &&
              x.acceptData(u) &&
              s.apply &&
              s.apply(u, r) === !1 &&
              n.preventDefault();
        if (
          ((n.type = g),
          !o &&
            !n.isDefaultPrevented() &&
            (!p._default || p._default.apply(h.pop(), r) === !1) &&
            x.acceptData(i) &&
            l &&
            i[g] &&
            !x.isWindow(i))
        ) {
          (f = i[l]), f && (i[l] = null), (x.event.triggered = g);
          try {
            i[g]();
          } catch (y) {}
          (x.event.triggered = t), f && (i[l] = f);
        }
        return n.result;
      }
    },
    dispatch: function (e) {
      e = x.event.fix(e);
      var n,
        r,
        i,
        o,
        a,
        s = [],
        l = g.call(arguments),
        u = (x._data(this, "events") || {})[e.type] || [],
        c = x.event.special[e.type] || {};
      if (
        ((l[0] = e),
        (e.delegateTarget = this),
        !c.preDispatch || c.preDispatch.call(this, e) !== !1)
      ) {
        (s = x.event.handlers.call(this, e, u)), (n = 0);
        while ((o = s[n++]) && !e.isPropagationStopped()) {
          (e.currentTarget = o.elem), (a = 0);
          while ((i = o.handlers[a++]) && !e.isImmediatePropagationStopped())
            (!e.namespace_re || e.namespace_re.test(i.namespace)) &&
              ((e.handleObj = i),
              (e.data = i.data),
              (r = (
                (x.event.special[i.origType] || {}).handle || i.handler
              ).apply(o.elem, l)),
              r !== t &&
                (e.result = r) === !1 &&
                (e.preventDefault(), e.stopPropagation()));
        }
        return c.postDispatch && c.postDispatch.call(this, e), e.result;
      }
    },
    handlers: function (e, n) {
      var r,
        i,
        o,
        a,
        s = [],
        l = n.delegateCount,
        u = e.target;
      if (l && u.nodeType && (!e.button || "click" !== e.type))
        for (; u != this; u = u.parentNode || this)
          if (1 === u.nodeType && (u.disabled !== !0 || "click" !== e.type)) {
            for (o = [], a = 0; l > a; a++)
              (i = n[a]),
                (r = i.selector + " "),
                o[r] === t &&
                  (o[r] = i.needsContext
                    ? x(r, this).index(u) >= 0
                    : x.find(r, this, null, [u]).length),
                o[r] && o.push(i);
            o.length && s.push({ elem: u, handlers: o });
          }
      return n.length > l && s.push({ elem: this, handlers: n.slice(l) }), s;
    },
    fix: function (e) {
      if (e[x.expando]) return e;
      var t,
        n,
        r,
        i = e.type,
        o = e,
        s = this.fixHooks[i];
      s ||
        (this.fixHooks[i] = s = tt.test(i)
          ? this.mouseHooks
          : et.test(i)
          ? this.keyHooks
          : {}),
        (r = s.props ? this.props.concat(s.props) : this.props),
        (e = new x.Event(o)),
        (t = r.length);
      while (t--) (n = r[t]), (e[n] = o[n]);
      return (
        e.target || (e.target = o.srcElement || a),
        3 === e.target.nodeType && (e.target = e.target.parentNode),
        (e.metaKey = !!e.metaKey),
        s.filter ? s.filter(e, o) : e
      );
    },
    props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(
      " "
    ),
    fixHooks: {},
    keyHooks: {
      props: "char charCode key keyCode".split(" "),
      filter: function (e, t) {
        return (
          null == e.which &&
            (e.which = null != t.charCode ? t.charCode : t.keyCode),
          e
        );
      }
    },
    mouseHooks: {
      props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(
        " "
      ),
      filter: function (e, n) {
        var r,
          i,
          o,
          s = n.button,
          l = n.fromElement;
        return (
          null == e.pageX &&
            null != n.clientX &&
            ((i = e.target.ownerDocument || a),
            (o = i.documentElement),
            (r = i.body),
            (e.pageX =
              n.clientX +
              ((o && o.scrollLeft) || (r && r.scrollLeft) || 0) -
              ((o && o.clientLeft) || (r && r.clientLeft) || 0)),
            (e.pageY =
              n.clientY +
              ((o && o.scrollTop) || (r && r.scrollTop) || 0) -
              ((o && o.clientTop) || (r && r.clientTop) || 0))),
          !e.relatedTarget &&
            l &&
            (e.relatedTarget = l === e.target ? n.toElement : l),
          e.which ||
            s === t ||
            (e.which = 1 & s ? 1 : 2 & s ? 3 : 4 & s ? 2 : 0),
          e
        );
      }
    },
    special: {
      load: { noBubble: !0 },
      focus: {
        trigger: function () {
          if (this !== at() && this.focus)
            try {
              return this.focus(), !1;
            } catch (e) {}
        },
        delegateType: "focusin"
      },
      blur: {
        trigger: function () {
          return this === at() && this.blur ? (this.blur(), !1) : t;
        },
        delegateType: "focusout"
      },
      click: {
        trigger: function () {
          return x.nodeName(this, "input") &&
            "checkbox" === this.type &&
            this.click
            ? (this.click(), !1)
            : t;
        },
        _default: function (e) {
          return x.nodeName(e.target, "a");
        }
      },
      beforeunload: {
        postDispatch: function (e) {
          e.result !== t && (e.originalEvent.returnValue = e.result);
        }
      }
    },
    simulate: function (e, t, n, r) {
      var i = x.extend(new x.Event(), n, {
        type: e,
        isSimulated: !0,
        originalEvent: {}
      });
      r ? x.event.trigger(i, null, t) : x.event.dispatch.call(t, i),
        i.isDefaultPrevented() && n.preventDefault();
    }
  }),
    (x.removeEvent = a.removeEventListener
      ? function (e, t, n) {
          e.removeEventListener && e.removeEventListener(t, n, !1);
        }
      : function (e, t, n) {
          var r = "on" + t;
          e.detachEvent &&
            (typeof e[r] === i && (e[r] = null), e.detachEvent(r, n));
        }),
    (x.Event = function (e, n) {
      return this instanceof x.Event
        ? (e && e.type
            ? ((this.originalEvent = e),
              (this.type = e.type),
              (this.isDefaultPrevented =
                e.defaultPrevented ||
                e.returnValue === !1 ||
                (e.getPreventDefault && e.getPreventDefault())
                  ? it
                  : ot))
            : (this.type = e),
          n && x.extend(this, n),
          (this.timeStamp = (e && e.timeStamp) || x.now()),
          (this[x.expando] = !0),
          t)
        : new x.Event(e, n);
    }),
    (x.Event.prototype = {
      isDefaultPrevented: ot,
      isPropagationStopped: ot,
      isImmediatePropagationStopped: ot,
      preventDefault: function () {
        var e = this.originalEvent;
        (this.isDefaultPrevented = it),
          e && (e.preventDefault ? e.preventDefault() : (e.returnValue = !1));
      },
      stopPropagation: function () {
        var e = this.originalEvent;
        (this.isPropagationStopped = it),
          e &&
            (e.stopPropagation && e.stopPropagation(), (e.cancelBubble = !0));
      },
      stopImmediatePropagation: function () {
        (this.isImmediatePropagationStopped = it), this.stopPropagation();
      }
    }),
    x.each(
      { mouseenter: "mouseover", mouseleave: "mouseout" },
      function (e, t) {
        x.event.special[e] = {
          delegateType: t,
          bindType: t,
          handle: function (e) {
            var n,
              r = this,
              i = e.relatedTarget,
              o = e.handleObj;
            return (
              (!i || (i !== r && !x.contains(r, i))) &&
                ((e.type = o.origType),
                (n = o.handler.apply(this, arguments)),
                (e.type = t)),
              n
            );
          }
        };
      }
    ),
    x.support.submitBubbles ||
      (x.event.special.submit = {
        setup: function () {
          return x.nodeName(this, "form")
            ? !1
            : (x.event.add(
                this,
                "click._submit keypress._submit",
                function (e) {
                  var n = e.target,
                    r =
                      x.nodeName(n, "input") || x.nodeName(n, "button")
                        ? n.form
                        : t;
                  r &&
                    !x._data(r, "submitBubbles") &&
                    (x.event.add(r, "submit._submit", function (e) {
                      e._submit_bubble = !0;
                    }),
                    x._data(r, "submitBubbles", !0));
                }
              ),
              t);
        },
        postDispatch: function (e) {
          e._submit_bubble &&
            (delete e._submit_bubble,
            this.parentNode &&
              !e.isTrigger &&
              x.event.simulate("submit", this.parentNode, e, !0));
        },
        teardown: function () {
          return x.nodeName(this, "form")
            ? !1
            : (x.event.remove(this, "._submit"), t);
        }
      }),
    x.support.changeBubbles ||
      (x.event.special.change = {
        setup: function () {
          return Z.test(this.nodeName)
            ? (("checkbox" === this.type || "radio" === this.type) &&
                (x.event.add(this, "propertychange._change", function (e) {
                  "checked" === e.originalEvent.propertyName &&
                    (this._just_changed = !0);
                }),
                x.event.add(this, "click._change", function (e) {
                  this._just_changed &&
                    !e.isTrigger &&
                    (this._just_changed = !1),
                    x.event.simulate("change", this, e, !0);
                })),
              !1)
            : (x.event.add(this, "beforeactivate._change", function (e) {
                var t = e.target;
                Z.test(t.nodeName) &&
                  !x._data(t, "changeBubbles") &&
                  (x.event.add(t, "change._change", function (e) {
                    !this.parentNode ||
                      e.isSimulated ||
                      e.isTrigger ||
                      x.event.simulate("change", this.parentNode, e, !0);
                  }),
                  x._data(t, "changeBubbles", !0));
              }),
              t);
        },
        handle: function (e) {
          var n = e.target;
          return this !== n ||
            e.isSimulated ||
            e.isTrigger ||
            ("radio" !== n.type && "checkbox" !== n.type)
            ? e.handleObj.handler.apply(this, arguments)
            : t;
        },
        teardown: function () {
          return x.event.remove(this, "._change"), !Z.test(this.nodeName);
        }
      }),
    x.support.focusinBubbles ||
      x.each({ focus: "focusin", blur: "focusout" }, function (e, t) {
        var n = 0,
          r = function (e) {
            x.event.simulate(t, e.target, x.event.fix(e), !0);
          };
        x.event.special[t] = {
          setup: function () {
            0 === n++ && a.addEventListener(e, r, !0);
          },
          teardown: function () {
            0 === --n && a.removeEventListener(e, r, !0);
          }
        };
      }),
    x.fn.extend({
      on: function (e, n, r, i, o) {
        var a, s;
        if ("object" == typeof e) {
          "string" != typeof n && ((r = r || n), (n = t));
          for (a in e) this.on(a, n, r, e[a], o);
          return this;
        }
        if (
          (null == r && null == i
            ? ((i = n), (r = n = t))
            : null == i &&
              ("string" == typeof n
                ? ((i = r), (r = t))
                : ((i = r), (r = n), (n = t))),
          i === !1)
        )
          i = ot;
        else if (!i) return this;
        return (
          1 === o &&
            ((s = i),
            (i = function (e) {
              return x().off(e), s.apply(this, arguments);
            }),
            (i.guid = s.guid || (s.guid = x.guid++))),
          this.each(function () {
            x.event.add(this, e, i, r, n);
          })
        );
      },
      one: function (e, t, n, r) {
        return this.on(e, t, n, r, 1);
      },
      off: function (e, n, r) {
        var i, o;
        if (e && e.preventDefault && e.handleObj)
          return (
            (i = e.handleObj),
            x(e.delegateTarget).off(
              i.namespace ? i.origType + "." + i.namespace : i.origType,
              i.selector,
              i.handler
            ),
            this
          );
        if ("object" == typeof e) {
          for (o in e) this.off(o, n, e[o]);
          return this;
        }
        return (
          (n === !1 || "function" == typeof n) && ((r = n), (n = t)),
          r === !1 && (r = ot),
          this.each(function () {
            x.event.remove(this, e, r, n);
          })
        );
      },
      trigger: function (e, t) {
        return this.each(function () {
          x.event.trigger(e, t, this);
        });
      },
      triggerHandler: function (e, n) {
        var r = this[0];
        return r ? x.event.trigger(e, n, r, !0) : t;
      }
    });
  var st = /^.[^:#\[\.,]*$/,
    lt = /^(?:parents|prev(?:Until|All))/,
    ut = x.expr.match.needsContext,
    ct = { children: !0, contents: !0, next: !0, prev: !0 };
  x.fn.extend({
    find: function (e) {
      var t,
        n = [],
        r = this,
        i = r.length;
      if ("string" != typeof e)
        return this.pushStack(
          x(e).filter(function () {
            for (t = 0; i > t; t++) if (x.contains(r[t], this)) return !0;
          })
        );
      for (t = 0; i > t; t++) x.find(e, r[t], n);
      return (
        (n = this.pushStack(i > 1 ? x.unique(n) : n)),
        (n.selector = this.selector ? this.selector + " " + e : e),
        n
      );
    },
    has: function (e) {
      var t,
        n = x(e, this),
        r = n.length;
      return this.filter(function () {
        for (t = 0; r > t; t++) if (x.contains(this, n[t])) return !0;
      });
    },
    not: function (e) {
      return this.pushStack(ft(this, e || [], !0));
    },
    filter: function (e) {
      return this.pushStack(ft(this, e || [], !1));
    },
    is: function (e) {
      return !!ft(this, "string" == typeof e && ut.test(e) ? x(e) : e || [], !1)
        .length;
    },
    closest: function (e, t) {
      var n,
        r = 0,
        i = this.length,
        o = [],
        a = ut.test(e) || "string" != typeof e ? x(e, t || this.context) : 0;
      for (; i > r; r++)
        for (n = this[r]; n && n !== t; n = n.parentNode)
          if (
            11 > n.nodeType &&
            (a
              ? a.index(n) > -1
              : 1 === n.nodeType && x.find.matchesSelector(n, e))
          ) {
            n = o.push(n);
            break;
          }
      return this.pushStack(o.length > 1 ? x.unique(o) : o);
    },
    index: function (e) {
      return e
        ? "string" == typeof e
          ? x.inArray(this[0], x(e))
          : x.inArray(e.jquery ? e[0] : e, this)
        : this[0] && this[0].parentNode
        ? this.first().prevAll().length
        : -1;
    },
    add: function (e, t) {
      var n =
          "string" == typeof e
            ? x(e, t)
            : x.makeArray(e && e.nodeType ? [e] : e),
        r = x.merge(this.get(), n);
      return this.pushStack(x.unique(r));
    },
    addBack: function (e) {
      return this.add(null == e ? this.prevObject : this.prevObject.filter(e));
    }
  });
  function pt(e, t) {
    do e = e[t];
    while (e && 1 !== e.nodeType);
    return e;
  }
  x.each(
    {
      parent: function (e) {
        var t = e.parentNode;
        return t && 11 !== t.nodeType ? t : null;
      },
      parents: function (e) {
        return x.dir(e, "parentNode");
      },
      parentsUntil: function (e, t, n) {
        return x.dir(e, "parentNode", n);
      },
      next: function (e) {
        return pt(e, "nextSibling");
      },
      prev: function (e) {
        return pt(e, "previousSibling");
      },
      nextAll: function (e) {
        return x.dir(e, "nextSibling");
      },
      prevAll: function (e) {
        return x.dir(e, "previousSibling");
      },
      nextUntil: function (e, t, n) {
        return x.dir(e, "nextSibling", n);
      },
      prevUntil: function (e, t, n) {
        return x.dir(e, "previousSibling", n);
      },
      siblings: function (e) {
        return x.sibling((e.parentNode || {}).firstChild, e);
      },
      children: function (e) {
        return x.sibling(e.firstChild);
      },
      contents: function (e) {
        return x.nodeName(e, "iframe")
          ? e.contentDocument || e.contentWindow.document
          : x.merge([], e.childNodes);
      }
    },
    function (e, t) {
      x.fn[e] = function (n, r) {
        var i = x.map(this, t, n);
        return (
          "Until" !== e.slice(-5) && (r = n),
          r && "string" == typeof r && (i = x.filter(r, i)),
          this.length > 1 &&
            (ct[e] || (i = x.unique(i)), lt.test(e) && (i = i.reverse())),
          this.pushStack(i)
        );
      };
    }
  ),
    x.extend({
      filter: function (e, t, n) {
        var r = t[0];
        return (
          n && (e = ":not(" + e + ")"),
          1 === t.length && 1 === r.nodeType
            ? x.find.matchesSelector(r, e)
              ? [r]
              : []
            : x.find.matches(
                e,
                x.grep(t, function (e) {
                  return 1 === e.nodeType;
                })
              )
        );
      },
      dir: function (e, n, r) {
        var i = [],
          o = e[n];
        while (
          o &&
          9 !== o.nodeType &&
          (r === t || 1 !== o.nodeType || !x(o).is(r))
        )
          1 === o.nodeType && i.push(o), (o = o[n]);
        return i;
      },
      sibling: function (e, t) {
        var n = [];
        for (; e; e = e.nextSibling) 1 === e.nodeType && e !== t && n.push(e);
        return n;
      }
    });
  function ft(e, t, n) {
    if (x.isFunction(t))
      return x.grep(e, function (e, r) {
        return !!t.call(e, r, e) !== n;
      });
    if (t.nodeType)
      return x.grep(e, function (e) {
        return (e === t) !== n;
      });
    if ("string" == typeof t) {
      if (st.test(t)) return x.filter(t, e, n);
      t = x.filter(t, e);
    }
    return x.grep(e, function (e) {
      return x.inArray(e, t) >= 0 !== n;
    });
  }
  function dt(e) {
    var t = ht.split("|"),
      n = e.createDocumentFragment();
    if (n.createElement) while (t.length) n.createElement(t.pop());
    return n;
  }
  var ht =
      "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
    gt = / jQuery\d+="(?:null|\d+)"/g,
    mt = RegExp("<(?:" + ht + ")[\\s/>]", "i"),
    yt = /^\s+/,
    vt = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
    bt = /<([\w:]+)/,
    xt = /<tbody/i,
    wt = /<|&#?\w+;/,
    Tt = /<(?:script|style|link)/i,
    Ct = /^(?:checkbox|radio)$/i,
    Nt = /checked\s*(?:[^=]|=\s*.checked.)/i,
    kt = /^$|\/(?:java|ecma)script/i,
    Et = /^true\/(.*)/,
    St = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
    At = {
      option: [1, "<select multiple='multiple'>", "</select>"],
      legend: [1, "<fieldset>", "</fieldset>"],
      area: [1, "<map>", "</map>"],
      param: [1, "<object>", "</object>"],
      thead: [1, "<table>", "</table>"],
      tr: [2, "<table><tbody>", "</tbody></table>"],
      col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
      td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
      _default: x.support.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"]
    },
    jt = dt(a),
    Dt = jt.appendChild(a.createElement("div"));
  (At.optgroup = At.option),
    (At.tbody = At.tfoot = At.colgroup = At.caption = At.thead),
    (At.th = At.td),
    x.fn.extend({
      text: function (e) {
        return x.access(
          this,
          function (e) {
            return e === t
              ? x.text(this)
              : this.empty().append(
                  ((this[0] && this[0].ownerDocument) || a).createTextNode(e)
                );
          },
          null,
          e,
          arguments.length
        );
      },
      append: function () {
        return this.domManip(arguments, function (e) {
          if (
            1 === this.nodeType ||
            11 === this.nodeType ||
            9 === this.nodeType
          ) {
            var t = Lt(this, e);
            t.appendChild(e);
          }
        });
      },
      prepend: function () {
        return this.domManip(arguments, function (e) {
          if (
            1 === this.nodeType ||
            11 === this.nodeType ||
            9 === this.nodeType
          ) {
            var t = Lt(this, e);
            t.insertBefore(e, t.firstChild);
          }
        });
      },
      before: function () {
        return this.domManip(arguments, function (e) {
          this.parentNode && this.parentNode.insertBefore(e, this);
        });
      },
      after: function () {
        return this.domManip(arguments, function (e) {
          this.parentNode && this.parentNode.insertBefore(e, this.nextSibling);
        });
      },
      remove: function (e, t) {
        var n,
          r = e ? x.filter(e, this) : this,
          i = 0;
        for (; null != (n = r[i]); i++)
          t || 1 !== n.nodeType || x.cleanData(Ft(n)),
            n.parentNode &&
              (t && x.contains(n.ownerDocument, n) && _t(Ft(n, "script")),
              n.parentNode.removeChild(n));
        return this;
      },
      empty: function () {
        var e,
          t = 0;
        for (; null != (e = this[t]); t++) {
          1 === e.nodeType && x.cleanData(Ft(e, !1));
          while (e.firstChild) e.removeChild(e.firstChild);
          e.options && x.nodeName(e, "select") && (e.options.length = 0);
        }
        return this;
      },
      clone: function (e, t) {
        return (
          (e = null == e ? !1 : e),
          (t = null == t ? e : t),
          this.map(function () {
            return x.clone(this, e, t);
          })
        );
      },
      html: function (e) {
        return x.access(
          this,
          function (e) {
            var n = this[0] || {},
              r = 0,
              i = this.length;
            if (e === t)
              return 1 === n.nodeType ? n.innerHTML.replace(gt, "") : t;
            if (
              !(
                "string" != typeof e ||
                Tt.test(e) ||
                (!x.support.htmlSerialize && mt.test(e)) ||
                (!x.support.leadingWhitespace && yt.test(e)) ||
                At[(bt.exec(e) || ["", ""])[1].toLowerCase()]
              )
            ) {
              e = e.replace(vt, "<$1></$2>");
              try {
                for (; i > r; r++)
                  (n = this[r] || {}),
                    1 === n.nodeType &&
                      (x.cleanData(Ft(n, !1)), (n.innerHTML = e));
                n = 0;
              } catch (o) {}
            }
            n && this.empty().append(e);
          },
          null,
          e,
          arguments.length
        );
      },
      replaceWith: function () {
        var e = x.map(this, function (e) {
            return [e.nextSibling, e.parentNode];
          }),
          t = 0;
        return (
          this.domManip(
            arguments,
            function (n) {
              var r = e[t++],
                i = e[t++];
              i &&
                (r && r.parentNode !== i && (r = this.nextSibling),
                x(this).remove(),
                i.insertBefore(n, r));
            },
            !0
          ),
          t ? this : this.remove()
        );
      },
      detach: function (e) {
        return this.remove(e, !0);
      },
      domManip: function (e, t, n) {
        e = d.apply([], e);
        var r,
          i,
          o,
          a,
          s,
          l,
          u = 0,
          c = this.length,
          p = this,
          f = c - 1,
          h = e[0],
          g = x.isFunction(h);
        if (
          g ||
          (!(1 >= c || "string" != typeof h || x.support.checkClone) &&
            Nt.test(h))
        )
          return this.each(function (r) {
            var i = p.eq(r);
            g && (e[0] = h.call(this, r, i.html())), i.domManip(e, t, n);
          });
        if (
          c &&
          ((l = x.buildFragment(e, this[0].ownerDocument, !1, !n && this)),
          (r = l.firstChild),
          1 === l.childNodes.length && (l = r),
          r)
        ) {
          for (a = x.map(Ft(l, "script"), Ht), o = a.length; c > u; u++)
            (i = l),
              u !== f &&
                ((i = x.clone(i, !0, !0)), o && x.merge(a, Ft(i, "script"))),
              t.call(this[u], i, u);
          if (o)
            for (
              s = a[a.length - 1].ownerDocument, x.map(a, qt), u = 0;
              o > u;
              u++
            )
              (i = a[u]),
                kt.test(i.type || "") &&
                  !x._data(i, "globalEval") &&
                  x.contains(s, i) &&
                  (i.src
                    ? x._evalUrl(i.src)
                    : x.globalEval(
                        (i.text || i.textContent || i.innerHTML || "").replace(
                          St,
                          ""
                        )
                      ));
          l = r = null;
        }
        return this;
      }
    });
  function Lt(e, t) {
    return x.nodeName(e, "table") &&
      x.nodeName(1 === t.nodeType ? t : t.firstChild, "tr")
      ? e.getElementsByTagName("tbody")[0] ||
          e.appendChild(e.ownerDocument.createElement("tbody"))
      : e;
  }
  function Ht(e) {
    return (e.type = (null !== x.find.attr(e, "type")) + "/" + e.type), e;
  }
  function qt(e) {
    var t = Et.exec(e.type);
    return t ? (e.type = t[1]) : e.removeAttribute("type"), e;
  }
  function _t(e, t) {
    var n,
      r = 0;
    for (; null != (n = e[r]); r++)
      x._data(n, "globalEval", !t || x._data(t[r], "globalEval"));
  }
  function Mt(e, t) {
    if (1 === t.nodeType && x.hasData(e)) {
      var n,
        r,
        i,
        o = x._data(e),
        a = x._data(t, o),
        s = o.events;
      if (s) {
        delete a.handle, (a.events = {});
        for (n in s)
          for (r = 0, i = s[n].length; i > r; r++) x.event.add(t, n, s[n][r]);
      }
      a.data && (a.data = x.extend({}, a.data));
    }
  }
  function Ot(e, t) {
    var n, r, i;
    if (1 === t.nodeType) {
      if (
        ((n = t.nodeName.toLowerCase()),
        !x.support.noCloneEvent && t[x.expando])
      ) {
        i = x._data(t);
        for (r in i.events) x.removeEvent(t, r, i.handle);
        t.removeAttribute(x.expando);
      }
      "script" === n && t.text !== e.text
        ? ((Ht(t).text = e.text), qt(t))
        : "object" === n
        ? (t.parentNode && (t.outerHTML = e.outerHTML),
          x.support.html5Clone &&
            e.innerHTML &&
            !x.trim(t.innerHTML) &&
            (t.innerHTML = e.innerHTML))
        : "input" === n && Ct.test(e.type)
        ? ((t.defaultChecked = t.checked = e.checked),
          t.value !== e.value && (t.value = e.value))
        : "option" === n
        ? (t.defaultSelected = t.selected = e.defaultSelected)
        : ("input" === n || "textarea" === n) &&
          (t.defaultValue = e.defaultValue);
    }
  }
  x.each(
    {
      appendTo: "append",
      prependTo: "prepend",
      insertBefore: "before",
      insertAfter: "after",
      replaceAll: "replaceWith"
    },
    function (e, t) {
      x.fn[e] = function (e) {
        var n,
          r = 0,
          i = [],
          o = x(e),
          a = o.length - 1;
        for (; a >= r; r++)
          (n = r === a ? this : this.clone(!0)),
            x(o[r])[t](n),
            h.apply(i, n.get());
        return this.pushStack(i);
      };
    }
  );
  function Ft(e, n) {
    var r,
      o,
      a = 0,
      s =
        typeof e.getElementsByTagName !== i
          ? e.getElementsByTagName(n || "*")
          : typeof e.querySelectorAll !== i
          ? e.querySelectorAll(n || "*")
          : t;
    if (!s)
      for (s = [], r = e.childNodes || e; null != (o = r[a]); a++)
        !n || x.nodeName(o, n) ? s.push(o) : x.merge(s, Ft(o, n));
    return n === t || (n && x.nodeName(e, n)) ? x.merge([e], s) : s;
  }
  function Bt(e) {
    Ct.test(e.type) && (e.defaultChecked = e.checked);
  }
  x.extend({
    clone: function (e, t, n) {
      var r,
        i,
        o,
        a,
        s,
        l = x.contains(e.ownerDocument, e);
      if (
        (x.support.html5Clone ||
        x.isXMLDoc(e) ||
        !mt.test("<" + e.nodeName + ">")
          ? (o = e.cloneNode(!0))
          : ((Dt.innerHTML = e.outerHTML), Dt.removeChild((o = Dt.firstChild))),
        !(
          (x.support.noCloneEvent && x.support.noCloneChecked) ||
          (1 !== e.nodeType && 11 !== e.nodeType) ||
          x.isXMLDoc(e)
        ))
      )
        for (r = Ft(o), s = Ft(e), a = 0; null != (i = s[a]); ++a)
          r[a] && Ot(i, r[a]);
      if (t)
        if (n)
          for (s = s || Ft(e), r = r || Ft(o), a = 0; null != (i = s[a]); a++)
            Mt(i, r[a]);
        else Mt(e, o);
      return (
        (r = Ft(o, "script")),
        r.length > 0 && _t(r, !l && Ft(e, "script")),
        (r = s = i = null),
        o
      );
    },
    buildFragment: function (e, t, n, r) {
      var i,
        o,
        a,
        s,
        l,
        u,
        c,
        p = e.length,
        f = dt(t),
        d = [],
        h = 0;
      for (; p > h; h++)
        if (((o = e[h]), o || 0 === o))
          if ("object" === x.type(o)) x.merge(d, o.nodeType ? [o] : o);
          else if (wt.test(o)) {
            (s = s || f.appendChild(t.createElement("div"))),
              (l = (bt.exec(o) || ["", ""])[1].toLowerCase()),
              (c = At[l] || At._default),
              (s.innerHTML = c[1] + o.replace(vt, "<$1></$2>") + c[2]),
              (i = c[0]);
            while (i--) s = s.lastChild;
            if (
              (!x.support.leadingWhitespace &&
                yt.test(o) &&
                d.push(t.createTextNode(yt.exec(o)[0])),
              !x.support.tbody)
            ) {
              (o =
                "table" !== l || xt.test(o)
                  ? "<table>" !== c[1] || xt.test(o)
                    ? 0
                    : s
                  : s.firstChild),
                (i = o && o.childNodes.length);
              while (i--)
                x.nodeName((u = o.childNodes[i]), "tbody") &&
                  !u.childNodes.length &&
                  o.removeChild(u);
            }
            x.merge(d, s.childNodes), (s.textContent = "");
            while (s.firstChild) s.removeChild(s.firstChild);
            s = f.lastChild;
          } else d.push(t.createTextNode(o));
      s && f.removeChild(s),
        x.support.appendChecked || x.grep(Ft(d, "input"), Bt),
        (h = 0);
      while ((o = d[h++]))
        if (
          (!r || -1 === x.inArray(o, r)) &&
          ((a = x.contains(o.ownerDocument, o)),
          (s = Ft(f.appendChild(o), "script")),
          a && _t(s),
          n)
        ) {
          i = 0;
          while ((o = s[i++])) kt.test(o.type || "") && n.push(o);
        }
      return (s = null), f;
    },
    cleanData: function (e, t) {
      var n,
        r,
        o,
        a,
        s = 0,
        l = x.expando,
        u = x.cache,
        c = x.support.deleteExpando,
        f = x.event.special;
      for (; null != (n = e[s]); s++)
        if ((t || x.acceptData(n)) && ((o = n[l]), (a = o && u[o]))) {
          if (a.events)
            for (r in a.events)
              f[r] ? x.event.remove(n, r) : x.removeEvent(n, r, a.handle);
          u[o] &&
            (delete u[o],
            c
              ? delete n[l]
              : typeof n.removeAttribute !== i
              ? n.removeAttribute(l)
              : (n[l] = null),
            p.push(o));
        }
    },
    _evalUrl: function (e) {
      return x.ajax({
        url: e,
        type: "GET",
        dataType: "script",
        async: !1,
        global: !1,
        throws: !0
      });
    }
  }),
    x.fn.extend({
      wrapAll: function (e) {
        if (x.isFunction(e))
          return this.each(function (t) {
            x(this).wrapAll(e.call(this, t));
          });
        if (this[0]) {
          var t = x(e, this[0].ownerDocument).eq(0).clone(!0);
          this[0].parentNode && t.insertBefore(this[0]),
            t
              .map(function () {
                var e = this;
                while (e.firstChild && 1 === e.firstChild.nodeType)
                  e = e.firstChild;
                return e;
              })
              .append(this);
        }
        return this;
      },
      wrapInner: function (e) {
        return x.isFunction(e)
          ? this.each(function (t) {
              x(this).wrapInner(e.call(this, t));
            })
          : this.each(function () {
              var t = x(this),
                n = t.contents();
              n.length ? n.wrapAll(e) : t.append(e);
            });
      },
      wrap: function (e) {
        var t = x.isFunction(e);
        return this.each(function (n) {
          x(this).wrapAll(t ? e.call(this, n) : e);
        });
      },
      unwrap: function () {
        return this.parent()
          .each(function () {
            x.nodeName(this, "body") || x(this).replaceWith(this.childNodes);
          })
          .end();
      }
    });
  var Pt,
    Rt,
    Wt,
    $t = /alpha\([^)]*\)/i,
    It = /opacity\s*=\s*([^)]*)/,
    zt = /^(top|right|bottom|left)$/,
    Xt = /^(none|table(?!-c[ea]).+)/,
    Ut = /^margin/,
    Vt = RegExp("^(" + w + ")(.*)$", "i"),
    Yt = RegExp("^(" + w + ")(?!px)[a-z%]+$", "i"),
    Jt = RegExp("^([+-])=(" + w + ")", "i"),
    Gt = { BODY: "block" },
    Qt = { position: "absolute", visibility: "hidden", display: "block" },
    Kt = { letterSpacing: 0, fontWeight: 400 },
    Zt = ["Top", "Right", "Bottom", "Left"],
    en = ["Webkit", "O", "Moz", "ms"];
  function tn(e, t) {
    if (t in e) return t;
    var n = t.charAt(0).toUpperCase() + t.slice(1),
      r = t,
      i = en.length;
    while (i--) if (((t = en[i] + n), t in e)) return t;
    return r;
  }
  function nn(e, t) {
    return (
      (e = t || e),
      "none" === x.css(e, "display") || !x.contains(e.ownerDocument, e)
    );
  }
  function rn(e, t) {
    var n,
      r,
      i,
      o = [],
      a = 0,
      s = e.length;
    for (; s > a; a++)
      (r = e[a]),
        r.style &&
          ((o[a] = x._data(r, "olddisplay")),
          (n = r.style.display),
          t
            ? (o[a] || "none" !== n || (r.style.display = ""),
              "" === r.style.display &&
                nn(r) &&
                (o[a] = x._data(r, "olddisplay", ln(r.nodeName))))
            : o[a] ||
              ((i = nn(r)),
              ((n && "none" !== n) || !i) &&
                x._data(r, "olddisplay", i ? n : x.css(r, "display"))));
    for (a = 0; s > a; a++)
      (r = e[a]),
        r.style &&
          ((t && "none" !== r.style.display && "" !== r.style.display) ||
            (r.style.display = t ? o[a] || "" : "none"));
    return e;
  }
  x.fn.extend({
    css: function (e, n) {
      return x.access(
        this,
        function (e, n, r) {
          var i,
            o,
            a = {},
            s = 0;
          if (x.isArray(n)) {
            for (o = Rt(e), i = n.length; i > s; s++)
              a[n[s]] = x.css(e, n[s], !1, o);
            return a;
          }
          return r !== t ? x.style(e, n, r) : x.css(e, n);
        },
        e,
        n,
        arguments.length > 1
      );
    },
    show: function () {
      return rn(this, !0);
    },
    hide: function () {
      return rn(this);
    },
    toggle: function (e) {
      return "boolean" == typeof e
        ? e
          ? this.show()
          : this.hide()
        : this.each(function () {
            nn(this) ? x(this).show() : x(this).hide();
          });
    }
  }),
    x.extend({
      cssHooks: {
        opacity: {
          get: function (e, t) {
            if (t) {
              var n = Wt(e, "opacity");
              return "" === n ? "1" : n;
            }
          }
        }
      },
      cssNumber: {
        columnCount: !0,
        fillOpacity: !0,
        fontWeight: !0,
        lineHeight: !0,
        opacity: !0,
        order: !0,
        orphans: !0,
        widows: !0,
        zIndex: !0,
        zoom: !0
      },
      cssProps: { float: x.support.cssFloat ? "cssFloat" : "styleFloat" },
      style: function (e, n, r, i) {
        if (e && 3 !== e.nodeType && 8 !== e.nodeType && e.style) {
          var o,
            a,
            s,
            l = x.camelCase(n),
            u = e.style;
          if (
            ((n = x.cssProps[l] || (x.cssProps[l] = tn(u, l))),
            (s = x.cssHooks[n] || x.cssHooks[l]),
            r === t)
          )
            return s && "get" in s && (o = s.get(e, !1, i)) !== t ? o : u[n];
          if (
            ((a = typeof r),
            "string" === a &&
              (o = Jt.exec(r)) &&
              ((r = (o[1] + 1) * o[2] + parseFloat(x.css(e, n))),
              (a = "number")),
            !(
              null == r ||
              ("number" === a && isNaN(r)) ||
              ("number" !== a || x.cssNumber[l] || (r += "px"),
              x.support.clearCloneStyle ||
                "" !== r ||
                0 !== n.indexOf("background") ||
                (u[n] = "inherit"),
              s && "set" in s && (r = s.set(e, r, i)) === t)
            ))
          )
            try {
              u[n] = r;
            } catch (c) {}
        }
      },
      css: function (e, n, r, i) {
        var o,
          a,
          s,
          l = x.camelCase(n);
        return (
          (n = x.cssProps[l] || (x.cssProps[l] = tn(e.style, l))),
          (s = x.cssHooks[n] || x.cssHooks[l]),
          s && "get" in s && (a = s.get(e, !0, r)),
          a === t && (a = Wt(e, n, i)),
          "normal" === a && n in Kt && (a = Kt[n]),
          "" === r || r
            ? ((o = parseFloat(a)), r === !0 || x.isNumeric(o) ? o || 0 : a)
            : a
        );
      }
    }),
    e.getComputedStyle
      ? ((Rt = function (t) {
          return e.getComputedStyle(t, null);
        }),
        (Wt = function (e, n, r) {
          var i,
            o,
            a,
            s = r || Rt(e),
            l = s ? s.getPropertyValue(n) || s[n] : t,
            u = e.style;
          return (
            s &&
              ("" !== l ||
                x.contains(e.ownerDocument, e) ||
                (l = x.style(e, n)),
              Yt.test(l) &&
                Ut.test(n) &&
                ((i = u.width),
                (o = u.minWidth),
                (a = u.maxWidth),
                (u.minWidth = u.maxWidth = u.width = l),
                (l = s.width),
                (u.width = i),
                (u.minWidth = o),
                (u.maxWidth = a))),
            l
          );
        }))
      : a.documentElement.currentStyle &&
        ((Rt = function (e) {
          return e.currentStyle;
        }),
        (Wt = function (e, n, r) {
          var i,
            o,
            a,
            s = r || Rt(e),
            l = s ? s[n] : t,
            u = e.style;
          return (
            null == l && u && u[n] && (l = u[n]),
            Yt.test(l) &&
              !zt.test(n) &&
              ((i = u.left),
              (o = e.runtimeStyle),
              (a = o && o.left),
              a && (o.left = e.currentStyle.left),
              (u.left = "fontSize" === n ? "1em" : l),
              (l = u.pixelLeft + "px"),
              (u.left = i),
              a && (o.left = a)),
            "" === l ? "auto" : l
          );
        }));
  function on(e, t, n) {
    var r = Vt.exec(t);
    return r ? Math.max(0, r[1] - (n || 0)) + (r[2] || "px") : t;
  }
  function an(e, t, n, r, i) {
    var o = n === (r ? "border" : "content") ? 4 : "width" === t ? 1 : 0,
      a = 0;
    for (; 4 > o; o += 2)
      "margin" === n && (a += x.css(e, n + Zt[o], !0, i)),
        r
          ? ("content" === n && (a -= x.css(e, "padding" + Zt[o], !0, i)),
            "margin" !== n &&
              (a -= x.css(e, "border" + Zt[o] + "Width", !0, i)))
          : ((a += x.css(e, "padding" + Zt[o], !0, i)),
            "padding" !== n &&
              (a += x.css(e, "border" + Zt[o] + "Width", !0, i)));
    return a;
  }
  function sn(e, t, n) {
    var r = !0,
      i = "width" === t ? e.offsetWidth : e.offsetHeight,
      o = Rt(e),
      a = x.support.boxSizing && "border-box" === x.css(e, "boxSizing", !1, o);
    if (0 >= i || null == i) {
      if (
        ((i = Wt(e, t, o)),
        (0 > i || null == i) && (i = e.style[t]),
        Yt.test(i))
      )
        return i;
      (r = a && (x.support.boxSizingReliable || i === e.style[t])),
        (i = parseFloat(i) || 0);
    }
    return i + an(e, t, n || (a ? "border" : "content"), r, o) + "px";
  }
  function ln(e) {
    var t = a,
      n = Gt[e];
    return (
      n ||
        ((n = un(e, t)),
        ("none" !== n && n) ||
          ((Pt = (
            Pt ||
            x("<iframe frameborder='0' width='0' height='0'/>").css(
              "cssText",
              "display:block !important"
            )
          ).appendTo(t.documentElement)),
          (t = (Pt[0].contentWindow || Pt[0].contentDocument).document),
          t.write("<!doctype html><html><body>"),
          t.close(),
          (n = un(e, t)),
          Pt.detach()),
        (Gt[e] = n)),
      n
    );
  }
  function un(e, t) {
    var n = x(t.createElement(e)).appendTo(t.body),
      r = x.css(n[0], "display");
    return n.remove(), r;
  }
  x.each(["height", "width"], function (e, n) {
    x.cssHooks[n] = {
      get: function (e, r, i) {
        return r
          ? 0 === e.offsetWidth && Xt.test(x.css(e, "display"))
            ? x.swap(e, Qt, function () {
                return sn(e, n, i);
              })
            : sn(e, n, i)
          : t;
      },
      set: function (e, t, r) {
        var i = r && Rt(e);
        return on(
          e,
          t,
          r
            ? an(
                e,
                n,
                r,
                x.support.boxSizing &&
                  "border-box" === x.css(e, "boxSizing", !1, i),
                i
              )
            : 0
        );
      }
    };
  }),
    x.support.opacity ||
      (x.cssHooks.opacity = {
        get: function (e, t) {
          return It.test(
            (t && e.currentStyle ? e.currentStyle.filter : e.style.filter) || ""
          )
            ? 0.01 * parseFloat(RegExp.$1) + ""
            : t
            ? "1"
            : "";
        },
        set: function (e, t) {
          var n = e.style,
            r = e.currentStyle,
            i = x.isNumeric(t) ? "alpha(opacity=" + 100 * t + ")" : "",
            o = (r && r.filter) || n.filter || "";
          (n.zoom = 1),
            ((t >= 1 || "" === t) &&
              "" === x.trim(o.replace($t, "")) &&
              n.removeAttribute &&
              (n.removeAttribute("filter"), "" === t || (r && !r.filter))) ||
              (n.filter = $t.test(o) ? o.replace($t, i) : o + " " + i);
        }
      }),
    x(function () {
      x.support.reliableMarginRight ||
        (x.cssHooks.marginRight = {
          get: function (e, n) {
            return n
              ? x.swap(e, { display: "inline-block" }, Wt, [e, "marginRight"])
              : t;
          }
        }),
        !x.support.pixelPosition &&
          x.fn.position &&
          x.each(["top", "left"], function (e, n) {
            x.cssHooks[n] = {
              get: function (e, r) {
                return r
                  ? ((r = Wt(e, n)), Yt.test(r) ? x(e).position()[n] + "px" : r)
                  : t;
              }
            };
          });
    }),
    x.expr &&
      x.expr.filters &&
      ((x.expr.filters.hidden = function (e) {
        return (
          (0 >= e.offsetWidth && 0 >= e.offsetHeight) ||
          (!x.support.reliableHiddenOffsets &&
            "none" === ((e.style && e.style.display) || x.css(e, "display")))
        );
      }),
      (x.expr.filters.visible = function (e) {
        return !x.expr.filters.hidden(e);
      })),
    x.each({ margin: "", padding: "", border: "Width" }, function (e, t) {
      (x.cssHooks[e + t] = {
        expand: function (n) {
          var r = 0,
            i = {},
            o = "string" == typeof n ? n.split(" ") : [n];
          for (; 4 > r; r++) i[e + Zt[r] + t] = o[r] || o[r - 2] || o[0];
          return i;
        }
      }),
        Ut.test(e) || (x.cssHooks[e + t].set = on);
    });
  var cn = /%20/g,
    pn = /\[\]$/,
    fn = /\r?\n/g,
    dn = /^(?:submit|button|image|reset|file)$/i,
    hn = /^(?:input|select|textarea|keygen)/i;
  x.fn.extend({
    serialize: function () {
      return x.param(this.serializeArray());
    },
    serializeArray: function () {
      return this.map(function () {
        var e = x.prop(this, "elements");
        return e ? x.makeArray(e) : this;
      })
        .filter(function () {
          var e = this.type;
          return (
            this.name &&
            !x(this).is(":disabled") &&
            hn.test(this.nodeName) &&
            !dn.test(e) &&
            (this.checked || !Ct.test(e))
          );
        })
        .map(function (e, t) {
          var n = x(this).val();
          return null == n
            ? null
            : x.isArray(n)
            ? x.map(n, function (e) {
                return { name: t.name, value: e.replace(fn, "\r\n") };
              })
            : { name: t.name, value: n.replace(fn, "\r\n") };
        })
        .get();
    }
  }),
    (x.param = function (e, n) {
      var r,
        i = [],
        o = function (e, t) {
          (t = x.isFunction(t) ? t() : null == t ? "" : t),
            (i[i.length] = encodeURIComponent(e) + "=" + encodeURIComponent(t));
        };
      if (
        (n === t && (n = x.ajaxSettings && x.ajaxSettings.traditional),
        x.isArray(e) || (e.jquery && !x.isPlainObject(e)))
      )
        x.each(e, function () {
          o(this.name, this.value);
        });
      else for (r in e) gn(r, e[r], n, o);
      return i.join("&").replace(cn, "+");
    });
  function gn(e, t, n, r) {
    var i;
    if (x.isArray(t))
      x.each(t, function (t, i) {
        n || pn.test(e)
          ? r(e, i)
          : gn(e + "[" + ("object" == typeof i ? t : "") + "]", i, n, r);
      });
    else if (n || "object" !== x.type(t)) r(e, t);
    else for (i in t) gn(e + "[" + i + "]", t[i], n, r);
  }
  x.each(
    "blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(
      " "
    ),
    function (e, t) {
      x.fn[t] = function (e, n) {
        return arguments.length > 0 ? this.on(t, null, e, n) : this.trigger(t);
      };
    }
  ),
    x.fn.extend({
      hover: function (e, t) {
        return this.mouseenter(e).mouseleave(t || e);
      },
      bind: function (e, t, n) {
        return this.on(e, null, t, n);
      },
      unbind: function (e, t) {
        return this.off(e, null, t);
      },
      delegate: function (e, t, n, r) {
        return this.on(t, e, n, r);
      },
      undelegate: function (e, t, n) {
        return 1 === arguments.length
          ? this.off(e, "**")
          : this.off(t, e || "**", n);
      }
    });
  var mn,
    yn,
    vn = x.now(),
    bn = /\?/,
    xn = /#.*$/,
    wn = /([?&])_=[^&]*/,
    Tn = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
    Cn = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
    Nn = /^(?:GET|HEAD)$/,
    kn = /^\/\//,
    En = /^([\w.+-]+:)(?:\/\/([^\/?#:]*)(?::(\d+)|)|)/,
    Sn = x.fn.load,
    An = {},
    jn = {},
    Dn = "*/".concat("*");
  try {
    yn = o.href;
  } catch (Ln) {
    (yn = a.createElement("a")), (yn.href = ""), (yn = yn.href);
  }
  mn = En.exec(yn.toLowerCase()) || [];
  function Hn(e) {
    return function (t, n) {
      "string" != typeof t && ((n = t), (t = "*"));
      var r,
        i = 0,
        o = t.toLowerCase().match(T) || [];
      if (x.isFunction(n))
        while ((r = o[i++]))
          "+" === r[0]
            ? ((r = r.slice(1) || "*"), (e[r] = e[r] || []).unshift(n))
            : (e[r] = e[r] || []).push(n);
    };
  }
  function qn(e, n, r, i) {
    var o = {},
      a = e === jn;
    function s(l) {
      var u;
      return (
        (o[l] = !0),
        x.each(e[l] || [], function (e, l) {
          var c = l(n, r, i);
          return "string" != typeof c || a || o[c]
            ? a
              ? !(u = c)
              : t
            : (n.dataTypes.unshift(c), s(c), !1);
        }),
        u
      );
    }
    return s(n.dataTypes[0]) || (!o["*"] && s("*"));
  }
  function _n(e, n) {
    var r,
      i,
      o = x.ajaxSettings.flatOptions || {};
    for (i in n) n[i] !== t && ((o[i] ? e : r || (r = {}))[i] = n[i]);
    return r && x.extend(!0, e, r), e;
  }
  (x.fn.load = function (e, n, r) {
    if ("string" != typeof e && Sn) return Sn.apply(this, arguments);
    var i,
      o,
      a,
      s = this,
      l = e.indexOf(" ");
    return (
      l >= 0 && ((i = e.slice(l, e.length)), (e = e.slice(0, l))),
      x.isFunction(n)
        ? ((r = n), (n = t))
        : n && "object" == typeof n && (a = "POST"),
      s.length > 0 &&
        x
          .ajax({ url: e, type: a, dataType: "html", data: n })
          .done(function (e) {
            (o = arguments),
              s.html(i ? x("<div>").append(x.parseHTML(e)).find(i) : e);
          })
          .complete(
            r &&
              function (e, t) {
                s.each(r, o || [e.responseText, t, e]);
              }
          ),
      this
    );
  }),
    x.each(
      [
        "ajaxStart",
        "ajaxStop",
        "ajaxComplete",
        "ajaxError",
        "ajaxSuccess",
        "ajaxSend"
      ],
      function (e, t) {
        x.fn[t] = function (e) {
          return this.on(t, e);
        };
      }
    ),
    x.extend({
      active: 0,
      lastModified: {},
      etag: {},
      ajaxSettings: {
        url: yn,
        type: "GET",
        isLocal: Cn.test(mn[1]),
        global: !0,
        processData: !0,
        async: !0,
        contentType: "application/x-www-form-urlencoded; charset=UTF-8",
        accepts: {
          "*": Dn,
          text: "text/plain",
          html: "text/html",
          xml: "application/xml, text/xml",
          json: "application/json, text/javascript"
        },
        contents: { xml: /xml/, html: /html/, json: /json/ },
        responseFields: {
          xml: "responseXML",
          text: "responseText",
          json: "responseJSON"
        },
        converters: {
          "* text": String,
          "text html": !0,
          "text json": x.parseJSON,
          "text xml": x.parseXML
        },
        flatOptions: { url: !0, context: !0 }
      },
      ajaxSetup: function (e, t) {
        return t ? _n(_n(e, x.ajaxSettings), t) : _n(x.ajaxSettings, e);
      },
      ajaxPrefilter: Hn(An),
      ajaxTransport: Hn(jn),
      ajax: function (e, n) {
        "object" == typeof e && ((n = e), (e = t)), (n = n || {});
        var r,
          i,
          o,
          a,
          s,
          l,
          u,
          c,
          p = x.ajaxSetup({}, n),
          f = p.context || p,
          d = p.context && (f.nodeType || f.jquery) ? x(f) : x.event,
          h = x.Deferred(),
          g = x.Callbacks("once memory"),
          m = p.statusCode || {},
          y = {},
          v = {},
          b = 0,
          w = "canceled",
          C = {
            readyState: 0,
            getResponseHeader: function (e) {
              var t;
              if (2 === b) {
                if (!c) {
                  c = {};
                  while ((t = Tn.exec(a))) c[t[1].toLowerCase()] = t[2];
                }
                t = c[e.toLowerCase()];
              }
              return null == t ? null : t;
            },
            getAllResponseHeaders: function () {
              return 2 === b ? a : null;
            },
            setRequestHeader: function (e, t) {
              var n = e.toLowerCase();
              return b || ((e = v[n] = v[n] || e), (y[e] = t)), this;
            },
            overrideMimeType: function (e) {
              return b || (p.mimeType = e), this;
            },
            statusCode: function (e) {
              var t;
              if (e)
                if (2 > b) for (t in e) m[t] = [m[t], e[t]];
                else C.always(e[C.status]);
              return this;
            },
            abort: function (e) {
              var t = e || w;
              return u && u.abort(t), k(0, t), this;
            }
          };
        if (
          ((h.promise(C).complete = g.add),
          (C.success = C.done),
          (C.error = C.fail),
          (p.url = ((e || p.url || yn) + "")
            .replace(xn, "")
            .replace(kn, mn[1] + "//")),
          (p.type = n.method || n.type || p.method || p.type),
          (p.dataTypes = x
            .trim(p.dataType || "*")
            .toLowerCase()
            .match(T) || [""]),
          null == p.crossDomain &&
            ((r = En.exec(p.url.toLowerCase())),
            (p.crossDomain = !(
              !r ||
              (r[1] === mn[1] &&
                r[2] === mn[2] &&
                (r[3] || ("http:" === r[1] ? "80" : "443")) ===
                  (mn[3] || ("http:" === mn[1] ? "80" : "443")))
            ))),
          p.data &&
            p.processData &&
            "string" != typeof p.data &&
            (p.data = x.param(p.data, p.traditional)),
          qn(An, p, n, C),
          2 === b)
        )
          return C;
        (l = p.global),
          l && 0 === x.active++ && x.event.trigger("ajaxStart"),
          (p.type = p.type.toUpperCase()),
          (p.hasContent = !Nn.test(p.type)),
          (o = p.url),
          p.hasContent ||
            (p.data &&
              ((o = p.url += (bn.test(o) ? "&" : "?") + p.data), delete p.data),
            p.cache === !1 &&
              (p.url = wn.test(o)
                ? o.replace(wn, "$1_=" + vn++)
                : o + (bn.test(o) ? "&" : "?") + "_=" + vn++)),
          p.ifModified &&
            (x.lastModified[o] &&
              C.setRequestHeader("If-Modified-Since", x.lastModified[o]),
            x.etag[o] && C.setRequestHeader("If-None-Match", x.etag[o])),
          ((p.data && p.hasContent && p.contentType !== !1) || n.contentType) &&
            C.setRequestHeader("Content-Type", p.contentType),
          C.setRequestHeader(
            "Accept",
            p.dataTypes[0] && p.accepts[p.dataTypes[0]]
              ? p.accepts[p.dataTypes[0]] +
                  ("*" !== p.dataTypes[0] ? ", " + Dn + "; q=0.01" : "")
              : p.accepts["*"]
          );
        for (i in p.headers) C.setRequestHeader(i, p.headers[i]);
        if (p.beforeSend && (p.beforeSend.call(f, C, p) === !1 || 2 === b))
          return C.abort();
        w = "abort";
        for (i in { success: 1, error: 1, complete: 1 }) C[i](p[i]);
        if ((u = qn(jn, p, n, C))) {
          (C.readyState = 1),
            l && d.trigger("ajaxSend", [C, p]),
            p.async &&
              p.timeout > 0 &&
              (s = setTimeout(function () {
                C.abort("timeout");
              }, p.timeout));
          try {
            (b = 1), u.send(y, k);
          } catch (N) {
            if (!(2 > b)) throw N;
            k(-1, N);
          }
        } else k(-1, "No Transport");
        function k(e, n, r, i) {
          var c,
            y,
            v,
            w,
            T,
            N = n;
          2 !== b &&
            ((b = 2),
            s && clearTimeout(s),
            (u = t),
            (a = i || ""),
            (C.readyState = e > 0 ? 4 : 0),
            (c = (e >= 200 && 300 > e) || 304 === e),
            r && (w = Mn(p, C, r)),
            (w = On(p, w, C, c)),
            c
              ? (p.ifModified &&
                  ((T = C.getResponseHeader("Last-Modified")),
                  T && (x.lastModified[o] = T),
                  (T = C.getResponseHeader("etag")),
                  T && (x.etag[o] = T)),
                204 === e || "HEAD" === p.type
                  ? (N = "nocontent")
                  : 304 === e
                  ? (N = "notmodified")
                  : ((N = w.state), (y = w.data), (v = w.error), (c = !v)))
              : ((v = N), (e || !N) && ((N = "error"), 0 > e && (e = 0))),
            (C.status = e),
            (C.statusText = (n || N) + ""),
            c ? h.resolveWith(f, [y, N, C]) : h.rejectWith(f, [C, N, v]),
            C.statusCode(m),
            (m = t),
            l && d.trigger(c ? "ajaxSuccess" : "ajaxError", [C, p, c ? y : v]),
            g.fireWith(f, [C, N]),
            l &&
              (d.trigger("ajaxComplete", [C, p]),
              --x.active || x.event.trigger("ajaxStop")));
        }
        return C;
      },
      getJSON: function (e, t, n) {
        return x.get(e, t, n, "json");
      },
      getScript: function (e, n) {
        return x.get(e, t, n, "script");
      }
    }),
    x.each(["get", "post"], function (e, n) {
      x[n] = function (e, r, i, o) {
        return (
          x.isFunction(r) && ((o = o || i), (i = r), (r = t)),
          x.ajax({ url: e, type: n, dataType: o, data: r, success: i })
        );
      };
    });
  function Mn(e, n, r) {
    var i,
      o,
      a,
      s,
      l = e.contents,
      u = e.dataTypes;
    while ("*" === u[0])
      u.shift(),
        o === t && (o = e.mimeType || n.getResponseHeader("Content-Type"));
    if (o)
      for (s in l)
        if (l[s] && l[s].test(o)) {
          u.unshift(s);
          break;
        }
    if (u[0] in r) a = u[0];
    else {
      for (s in r) {
        if (!u[0] || e.converters[s + " " + u[0]]) {
          a = s;
          break;
        }
        i || (i = s);
      }
      a = a || i;
    }
    return a ? (a !== u[0] && u.unshift(a), r[a]) : t;
  }
  function On(e, t, n, r) {
    var i,
      o,
      a,
      s,
      l,
      u = {},
      c = e.dataTypes.slice();
    if (c[1]) for (a in e.converters) u[a.toLowerCase()] = e.converters[a];
    o = c.shift();
    while (o)
      if (
        (e.responseFields[o] && (n[e.responseFields[o]] = t),
        !l && r && e.dataFilter && (t = e.dataFilter(t, e.dataType)),
        (l = o),
        (o = c.shift()))
      )
        if ("*" === o) o = l;
        else if ("*" !== l && l !== o) {
          if (((a = u[l + " " + o] || u["* " + o]), !a))
            for (i in u)
              if (
                ((s = i.split(" ")),
                s[1] === o && (a = u[l + " " + s[0]] || u["* " + s[0]]))
              ) {
                a === !0
                  ? (a = u[i])
                  : u[i] !== !0 && ((o = s[0]), c.unshift(s[1]));
                break;
              }
          if (a !== !0)
            if (a && e["throws"]) t = a(t);
            else
              try {
                t = a(t);
              } catch (p) {
                return {
                  state: "parsererror",
                  error: a ? p : "No conversion from " + l + " to " + o
                };
              }
        }
    return { state: "success", data: t };
  }
  x.ajaxSetup({
    accepts: {
      script:
        "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
    },
    contents: { script: /(?:java|ecma)script/ },
    converters: {
      "text script": function (e) {
        return x.globalEval(e), e;
      }
    }
  }),
    x.ajaxPrefilter("script", function (e) {
      e.cache === t && (e.cache = !1),
        e.crossDomain && ((e.type = "GET"), (e.global = !1));
    }),
    x.ajaxTransport("script", function (e) {
      if (e.crossDomain) {
        var n,
          r = a.head || x("head")[0] || a.documentElement;
        return {
          send: function (t, i) {
            (n = a.createElement("script")),
              (n.async = !0),
              e.scriptCharset && (n.charset = e.scriptCharset),
              (n.src = e.url),
              (n.onload = n.onreadystatechange = function (e, t) {
                (t || !n.readyState || /loaded|complete/.test(n.readyState)) &&
                  ((n.onload = n.onreadystatechange = null),
                  n.parentNode && n.parentNode.removeChild(n),
                  (n = null),
                  t || i(200, "success"));
              }),
              r.insertBefore(n, r.firstChild);
          },
          abort: function () {
            n && n.onload(t, !0);
          }
        };
      }
    });
  var Fn = [],
    Bn = /(=)\?(?=&|$)|\?\?/;
  x.ajaxSetup({
    jsonp: "callback",
    jsonpCallback: function () {
      var e = Fn.pop() || x.expando + "_" + vn++;
      return (this[e] = !0), e;
    }
  }),
    x.ajaxPrefilter("json jsonp", function (n, r, i) {
      var o,
        a,
        s,
        l =
          n.jsonp !== !1 &&
          (Bn.test(n.url)
            ? "url"
            : "string" == typeof n.data &&
              !(n.contentType || "").indexOf(
                "application/x-www-form-urlencoded"
              ) &&
              Bn.test(n.data) &&
              "data");
      return l || "jsonp" === n.dataTypes[0]
        ? ((o = n.jsonpCallback = x.isFunction(n.jsonpCallback)
            ? n.jsonpCallback()
            : n.jsonpCallback),
          l
            ? (n[l] = n[l].replace(Bn, "$1" + o))
            : n.jsonp !== !1 &&
              (n.url += (bn.test(n.url) ? "&" : "?") + n.jsonp + "=" + o),
          (n.converters["script json"] = function () {
            return s || x.error(o + " was not called"), s[0];
          }),
          (n.dataTypes[0] = "json"),
          (a = e[o]),
          (e[o] = function () {
            s = arguments;
          }),
          i.always(function () {
            (e[o] = a),
              n[o] && ((n.jsonpCallback = r.jsonpCallback), Fn.push(o)),
              s && x.isFunction(a) && a(s[0]),
              (s = a = t);
          }),
          "script")
        : t;
    });
  var Pn,
    Rn,
    Wn = 0,
    $n =
      e.ActiveXObject &&
      function () {
        var e;
        for (e in Pn) Pn[e](t, !0);
      };
  function In() {
    try {
      return new e.XMLHttpRequest();
    } catch (t) {}
  }
  function zn() {
    try {
      return new e.ActiveXObject("Microsoft.XMLHTTP");
    } catch (t) {}
  }
  (x.ajaxSettings.xhr = e.ActiveXObject
    ? function () {
        return (!this.isLocal && In()) || zn();
      }
    : In),
    (Rn = x.ajaxSettings.xhr()),
    (x.support.cors = !!Rn && "withCredentials" in Rn),
    (Rn = x.support.ajax = !!Rn),
    Rn &&
      x.ajaxTransport(function (n) {
        if (!n.crossDomain || x.support.cors) {
          var r;
          return {
            send: function (i, o) {
              var a,
                s,
                l = n.xhr();
              if (
                (n.username
                  ? l.open(n.type, n.url, n.async, n.username, n.password)
                  : l.open(n.type, n.url, n.async),
                n.xhrFields)
              )
                for (s in n.xhrFields) l[s] = n.xhrFields[s];
              n.mimeType &&
                l.overrideMimeType &&
                l.overrideMimeType(n.mimeType),
                n.crossDomain ||
                  i["X-Requested-With"] ||
                  (i["X-Requested-With"] = "XMLHttpRequest");
              try {
                for (s in i) l.setRequestHeader(s, i[s]);
              } catch (u) {}
              l.send((n.hasContent && n.data) || null),
                (r = function (e, i) {
                  var s, u, c, p;
                  try {
                    if (r && (i || 4 === l.readyState))
                      if (
                        ((r = t),
                        a &&
                          ((l.onreadystatechange = x.noop), $n && delete Pn[a]),
                        i)
                      )
                        4 !== l.readyState && l.abort();
                      else {
                        (p = {}),
                          (s = l.status),
                          (u = l.getAllResponseHeaders()),
                          "string" == typeof l.responseText &&
                            (p.text = l.responseText);
                        try {
                          c = l.statusText;
                        } catch (f) {
                          c = "";
                        }
                        s || !n.isLocal || n.crossDomain
                          ? 1223 === s && (s = 204)
                          : (s = p.text ? 200 : 404);
                      }
                  } catch (d) {
                    i || o(-1, d);
                  }
                  p && o(s, c, p, u);
                }),
                n.async
                  ? 4 === l.readyState
                    ? setTimeout(r)
                    : ((a = ++Wn),
                      $n && (Pn || ((Pn = {}), x(e).unload($n)), (Pn[a] = r)),
                      (l.onreadystatechange = r))
                  : r();
            },
            abort: function () {
              r && r(t, !0);
            }
          };
        }
      });
  var Xn,
    Un,
    Vn = /^(?:toggle|show|hide)$/,
    Yn = RegExp("^(?:([+-])=|)(" + w + ")([a-z%]*)$", "i"),
    Jn = /queueHooks$/,
    Gn = [nr],
    Qn = {
      "*": [
        function (e, t) {
          var n = this.createTween(e, t),
            r = n.cur(),
            i = Yn.exec(t),
            o = (i && i[3]) || (x.cssNumber[e] ? "" : "px"),
            a =
              (x.cssNumber[e] || ("px" !== o && +r)) &&
              Yn.exec(x.css(n.elem, e)),
            s = 1,
            l = 20;
          if (a && a[3] !== o) {
            (o = o || a[3]), (i = i || []), (a = +r || 1);
            do (s = s || ".5"), (a /= s), x.style(n.elem, e, a + o);
            while (s !== (s = n.cur() / r) && 1 !== s && --l);
          }
          return (
            i &&
              ((a = n.start = +a || +r || 0),
              (n.unit = o),
              (n.end = i[1] ? a + (i[1] + 1) * i[2] : +i[2])),
            n
          );
        }
      ]
    };
  function Kn() {
    return (
      setTimeout(function () {
        Xn = t;
      }),
      (Xn = x.now())
    );
  }
  function Zn(e, t, n) {
    var r,
      i = (Qn[t] || []).concat(Qn["*"]),
      o = 0,
      a = i.length;
    for (; a > o; o++) if ((r = i[o].call(n, t, e))) return r;
  }
  function er(e, t, n) {
    var r,
      i,
      o = 0,
      a = Gn.length,
      s = x.Deferred().always(function () {
        delete l.elem;
      }),
      l = function () {
        if (i) return !1;
        var t = Xn || Kn(),
          n = Math.max(0, u.startTime + u.duration - t),
          r = n / u.duration || 0,
          o = 1 - r,
          a = 0,
          l = u.tweens.length;
        for (; l > a; a++) u.tweens[a].run(o);
        return (
          s.notifyWith(e, [u, o, n]),
          1 > o && l ? n : (s.resolveWith(e, [u]), !1)
        );
      },
      u = s.promise({
        elem: e,
        props: x.extend({}, t),
        opts: x.extend(!0, { specialEasing: {} }, n),
        originalProperties: t,
        originalOptions: n,
        startTime: Xn || Kn(),
        duration: n.duration,
        tweens: [],
        createTween: function (t, n) {
          var r = x.Tween(
            e,
            u.opts,
            t,
            n,
            u.opts.specialEasing[t] || u.opts.easing
          );
          return u.tweens.push(r), r;
        },
        stop: function (t) {
          var n = 0,
            r = t ? u.tweens.length : 0;
          if (i) return this;
          for (i = !0; r > n; n++) u.tweens[n].run(1);
          return t ? s.resolveWith(e, [u, t]) : s.rejectWith(e, [u, t]), this;
        }
      }),
      c = u.props;
    for (tr(c, u.opts.specialEasing); a > o; o++)
      if ((r = Gn[o].call(u, e, c, u.opts))) return r;
    return (
      x.map(c, Zn, u),
      x.isFunction(u.opts.start) && u.opts.start.call(e, u),
      x.fx.timer(x.extend(l, { elem: e, anim: u, queue: u.opts.queue })),
      u
        .progress(u.opts.progress)
        .done(u.opts.done, u.opts.complete)
        .fail(u.opts.fail)
        .always(u.opts.always)
    );
  }
  function tr(e, t) {
    var n, r, i, o, a;
    for (n in e)
      if (
        ((r = x.camelCase(n)),
        (i = t[r]),
        (o = e[n]),
        x.isArray(o) && ((i = o[1]), (o = e[n] = o[0])),
        n !== r && ((e[r] = o), delete e[n]),
        (a = x.cssHooks[r]),
        a && "expand" in a)
      ) {
        (o = a.expand(o)), delete e[r];
        for (n in o) n in e || ((e[n] = o[n]), (t[n] = i));
      } else t[r] = i;
  }
  x.Animation = x.extend(er, {
    tweener: function (e, t) {
      x.isFunction(e) ? ((t = e), (e = ["*"])) : (e = e.split(" "));
      var n,
        r = 0,
        i = e.length;
      for (; i > r; r++) (n = e[r]), (Qn[n] = Qn[n] || []), Qn[n].unshift(t);
    },
    prefilter: function (e, t) {
      t ? Gn.unshift(e) : Gn.push(e);
    }
  });
  function nr(e, t, n) {
    var r,
      i,
      o,
      a,
      s,
      l,
      u = this,
      c = {},
      p = e.style,
      f = e.nodeType && nn(e),
      d = x._data(e, "fxshow");
    n.queue ||
      ((s = x._queueHooks(e, "fx")),
      null == s.unqueued &&
        ((s.unqueued = 0),
        (l = s.empty.fire),
        (s.empty.fire = function () {
          s.unqueued || l();
        })),
      s.unqueued++,
      u.always(function () {
        u.always(function () {
          s.unqueued--, x.queue(e, "fx").length || s.empty.fire();
        });
      })),
      1 === e.nodeType &&
        ("height" in t || "width" in t) &&
        ((n.overflow = [p.overflow, p.overflowX, p.overflowY]),
        "inline" === x.css(e, "display") &&
          "none" === x.css(e, "float") &&
          (x.support.inlineBlockNeedsLayout && "inline" !== ln(e.nodeName)
            ? (p.zoom = 1)
            : (p.display = "inline-block"))),
      n.overflow &&
        ((p.overflow = "hidden"),
        x.support.shrinkWrapBlocks ||
          u.always(function () {
            (p.overflow = n.overflow[0]),
              (p.overflowX = n.overflow[1]),
              (p.overflowY = n.overflow[2]);
          }));
    for (r in t)
      if (((i = t[r]), Vn.exec(i))) {
        if (
          (delete t[r], (o = o || "toggle" === i), i === (f ? "hide" : "show"))
        )
          continue;
        c[r] = (d && d[r]) || x.style(e, r);
      }
    if (!x.isEmptyObject(c)) {
      d ? "hidden" in d && (f = d.hidden) : (d = x._data(e, "fxshow", {})),
        o && (d.hidden = !f),
        f
          ? x(e).show()
          : u.done(function () {
              x(e).hide();
            }),
        u.done(function () {
          var t;
          x._removeData(e, "fxshow");
          for (t in c) x.style(e, t, c[t]);
        });
      for (r in c)
        (a = Zn(f ? d[r] : 0, r, u)),
          r in d ||
            ((d[r] = a.start),
            f &&
              ((a.end = a.start),
              (a.start = "width" === r || "height" === r ? 1 : 0)));
    }
  }
  function rr(e, t, n, r, i) {
    return new rr.prototype.init(e, t, n, r, i);
  }
  (x.Tween = rr),
    (rr.prototype = {
      constructor: rr,
      init: function (e, t, n, r, i, o) {
        (this.elem = e),
          (this.prop = n),
          (this.easing = i || "swing"),
          (this.options = t),
          (this.start = this.now = this.cur()),
          (this.end = r),
          (this.unit = o || (x.cssNumber[n] ? "" : "px"));
      },
      cur: function () {
        var e = rr.propHooks[this.prop];
        return e && e.get ? e.get(this) : rr.propHooks._default.get(this);
      },
      run: function (e) {
        var t,
          n = rr.propHooks[this.prop];
        return (
          (this.pos = t = this.options.duration
            ? x.easing[this.easing](
                e,
                this.options.duration * e,
                0,
                1,
                this.options.duration
              )
            : e),
          (this.now = (this.end - this.start) * t + this.start),
          this.options.step &&
            this.options.step.call(this.elem, this.now, this),
          n && n.set ? n.set(this) : rr.propHooks._default.set(this),
          this
        );
      }
    }),
    (rr.prototype.init.prototype = rr.prototype),
    (rr.propHooks = {
      _default: {
        get: function (e) {
          var t;
          return null == e.elem[e.prop] ||
            (e.elem.style && null != e.elem.style[e.prop])
            ? ((t = x.css(e.elem, e.prop, "")), t && "auto" !== t ? t : 0)
            : e.elem[e.prop];
        },
        set: function (e) {
          x.fx.step[e.prop]
            ? x.fx.step[e.prop](e)
            : e.elem.style &&
              (null != e.elem.style[x.cssProps[e.prop]] || x.cssHooks[e.prop])
            ? x.style(e.elem, e.prop, e.now + e.unit)
            : (e.elem[e.prop] = e.now);
        }
      }
    }),
    (rr.propHooks.scrollTop = rr.propHooks.scrollLeft = {
      set: function (e) {
        e.elem.nodeType && e.elem.parentNode && (e.elem[e.prop] = e.now);
      }
    }),
    x.each(["toggle", "show", "hide"], function (e, t) {
      var n = x.fn[t];
      x.fn[t] = function (e, r, i) {
        return null == e || "boolean" == typeof e
          ? n.apply(this, arguments)
          : this.animate(ir(t, !0), e, r, i);
      };
    }),
    x.fn.extend({
      fadeTo: function (e, t, n, r) {
        return this.filter(nn)
          .css("opacity", 0)
          .show()
          .end()
          .animate({ opacity: t }, e, n, r);
      },
      animate: function (e, t, n, r) {
        var i = x.isEmptyObject(e),
          o = x.speed(t, n, r),
          a = function () {
            var t = er(this, x.extend({}, e), o);
            (i || x._data(this, "finish")) && t.stop(!0);
          };
        return (
          (a.finish = a),
          i || o.queue === !1 ? this.each(a) : this.queue(o.queue, a)
        );
      },
      stop: function (e, n, r) {
        var i = function (e) {
          var t = e.stop;
          delete e.stop, t(r);
        };
        return (
          "string" != typeof e && ((r = n), (n = e), (e = t)),
          n && e !== !1 && this.queue(e || "fx", []),
          this.each(function () {
            var t = !0,
              n = null != e && e + "queueHooks",
              o = x.timers,
              a = x._data(this);
            if (n) a[n] && a[n].stop && i(a[n]);
            else for (n in a) a[n] && a[n].stop && Jn.test(n) && i(a[n]);
            for (n = o.length; n--; )
              o[n].elem !== this ||
                (null != e && o[n].queue !== e) ||
                (o[n].anim.stop(r), (t = !1), o.splice(n, 1));
            (t || !r) && x.dequeue(this, e);
          })
        );
      },
      finish: function (e) {
        return (
          e !== !1 && (e = e || "fx"),
          this.each(function () {
            var t,
              n = x._data(this),
              r = n[e + "queue"],
              i = n[e + "queueHooks"],
              o = x.timers,
              a = r ? r.length : 0;
            for (
              n.finish = !0,
                x.queue(this, e, []),
                i && i.stop && i.stop.call(this, !0),
                t = o.length;
              t--;

            )
              o[t].elem === this &&
                o[t].queue === e &&
                (o[t].anim.stop(!0), o.splice(t, 1));
            for (t = 0; a > t; t++)
              r[t] && r[t].finish && r[t].finish.call(this);
            delete n.finish;
          })
        );
      }
    });
  function ir(e, t) {
    var n,
      r = { height: e },
      i = 0;
    for (t = t ? 1 : 0; 4 > i; i += 2 - t)
      (n = Zt[i]), (r["margin" + n] = r["padding" + n] = e);
    return t && (r.opacity = r.width = e), r;
  }
  x.each(
    {
      slideDown: ir("show"),
      slideUp: ir("hide"),
      slideToggle: ir("toggle"),
      fadeIn: { opacity: "show" },
      fadeOut: { opacity: "hide" },
      fadeToggle: { opacity: "toggle" }
    },
    function (e, t) {
      x.fn[e] = function (e, n, r) {
        return this.animate(t, e, n, r);
      };
    }
  ),
    (x.speed = function (e, t, n) {
      var r =
        e && "object" == typeof e
          ? x.extend({}, e)
          : {
              complete: n || (!n && t) || (x.isFunction(e) && e),
              duration: e,
              easing: (n && t) || (t && !x.isFunction(t) && t)
            };
      return (
        (r.duration = x.fx.off
          ? 0
          : "number" == typeof r.duration
          ? r.duration
          : r.duration in x.fx.speeds
          ? x.fx.speeds[r.duration]
          : x.fx.speeds._default),
        (null == r.queue || r.queue === !0) && (r.queue = "fx"),
        (r.old = r.complete),
        (r.complete = function () {
          x.isFunction(r.old) && r.old.call(this),
            r.queue && x.dequeue(this, r.queue);
        }),
        r
      );
    }),
    (x.easing = {
      linear: function (e) {
        return e;
      },
      swing: function (e) {
        return 0.5 - Math.cos(e * Math.PI) / 2;
      }
    }),
    (x.timers = []),
    (x.fx = rr.prototype.init),
    (x.fx.tick = function () {
      var e,
        n = x.timers,
        r = 0;
      for (Xn = x.now(); n.length > r; r++)
        (e = n[r]), e() || n[r] !== e || n.splice(r--, 1);
      n.length || x.fx.stop(), (Xn = t);
    }),
    (x.fx.timer = function (e) {
      e() && x.timers.push(e) && x.fx.start();
    }),
    (x.fx.interval = 13),
    (x.fx.start = function () {
      Un || (Un = setInterval(x.fx.tick, x.fx.interval));
    }),
    (x.fx.stop = function () {
      clearInterval(Un), (Un = null);
    }),
    (x.fx.speeds = { slow: 600, fast: 200, _default: 400 }),
    (x.fx.step = {}),
    x.expr &&
      x.expr.filters &&
      (x.expr.filters.animated = function (e) {
        return x.grep(x.timers, function (t) {
          return e === t.elem;
        }).length;
      }),
    (x.fn.offset = function (e) {
      if (arguments.length)
        return e === t
          ? this
          : this.each(function (t) {
              x.offset.setOffset(this, e, t);
            });
      var n,
        r,
        o = { top: 0, left: 0 },
        a = this[0],
        s = a && a.ownerDocument;
      if (s)
        return (
          (n = s.documentElement),
          x.contains(n, a)
            ? (typeof a.getBoundingClientRect !== i &&
                (o = a.getBoundingClientRect()),
              (r = or(s)),
              {
                top:
                  o.top + (r.pageYOffset || n.scrollTop) - (n.clientTop || 0),
                left:
                  o.left + (r.pageXOffset || n.scrollLeft) - (n.clientLeft || 0)
              })
            : o
        );
    }),
    (x.offset = {
      setOffset: function (e, t, n) {
        var r = x.css(e, "position");
        "static" === r && (e.style.position = "relative");
        var i = x(e),
          o = i.offset(),
          a = x.css(e, "top"),
          s = x.css(e, "left"),
          l =
            ("absolute" === r || "fixed" === r) &&
            x.inArray("auto", [a, s]) > -1,
          u = {},
          c = {},
          p,
          f;
        l
          ? ((c = i.position()), (p = c.top), (f = c.left))
          : ((p = parseFloat(a) || 0), (f = parseFloat(s) || 0)),
          x.isFunction(t) && (t = t.call(e, n, o)),
          null != t.top && (u.top = t.top - o.top + p),
          null != t.left && (u.left = t.left - o.left + f),
          "using" in t ? t.using.call(e, u) : i.css(u);
      }
    }),
    x.fn.extend({
      position: function () {
        if (this[0]) {
          var e,
            t,
            n = { top: 0, left: 0 },
            r = this[0];
          return (
            "fixed" === x.css(r, "position")
              ? (t = r.getBoundingClientRect())
              : ((e = this.offsetParent()),
                (t = this.offset()),
                x.nodeName(e[0], "html") || (n = e.offset()),
                (n.top += x.css(e[0], "borderTopWidth", !0)),
                (n.left += x.css(e[0], "borderLeftWidth", !0))),
            {
              top: t.top - n.top - x.css(r, "marginTop", !0),
              left: t.left - n.left - x.css(r, "marginLeft", !0)
            }
          );
        }
      },
      offsetParent: function () {
        return this.map(function () {
          var e = this.offsetParent || s;
          while (
            e &&
            !x.nodeName(e, "html") &&
            "static" === x.css(e, "position")
          )
            e = e.offsetParent;
          return e || s;
        });
      }
    }),
    x.each(
      { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" },
      function (e, n) {
        var r = /Y/.test(n);
        x.fn[e] = function (i) {
          return x.access(
            this,
            function (e, i, o) {
              var a = or(e);
              return o === t
                ? a
                  ? n in a
                    ? a[n]
                    : a.document.documentElement[i]
                  : e[i]
                : (a
                    ? a.scrollTo(
                        r ? x(a).scrollLeft() : o,
                        r ? o : x(a).scrollTop()
                      )
                    : (e[i] = o),
                  t);
            },
            e,
            i,
            arguments.length,
            null
          );
        };
      }
    );
  function or(e) {
    return x.isWindow(e)
      ? e
      : 9 === e.nodeType
      ? e.defaultView || e.parentWindow
      : !1;
  }
  x.each({ Height: "height", Width: "width" }, function (e, n) {
    x.each(
      { padding: "inner" + e, content: n, "": "outer" + e },
      function (r, i) {
        x.fn[i] = function (i, o) {
          var a = arguments.length && (r || "boolean" != typeof i),
            s = r || (i === !0 || o === !0 ? "margin" : "border");
          return x.access(
            this,
            function (n, r, i) {
              var o;
              return x.isWindow(n)
                ? n.document.documentElement["client" + e]
                : 9 === n.nodeType
                ? ((o = n.documentElement),
                  Math.max(
                    n.body["scroll" + e],
                    o["scroll" + e],
                    n.body["offset" + e],
                    o["offset" + e],
                    o["client" + e]
                  ))
                : i === t
                ? x.css(n, r, s)
                : x.style(n, r, i, s);
            },
            n,
            a ? i : t,
            a,
            null
          );
        };
      }
    );
  }),
    (x.fn.size = function () {
      return this.length;
    }),
    (x.fn.andSelf = x.fn.addBack),
    "object" == typeof module && module && "object" == typeof module.exports
      ? (module.exports = x)
      : ((e.jQuery = e.$ = x),
        "function" == typeof define &&
          define.amd &&
          define("jquery", [], function () {
            return x;
          }));
})(window);
if (typeof jQuery === "undefined") {
  throw new Error("Bootstrap's JavaScript requires jQuery");
}
+(function ($) {
  "use strict";
  function transitionEnd() {
    var el = document.createElement("bootstrap");
    var transEndEventNames = {
      WebkitTransition: "webkitTransitionEnd",
      MozTransition: "transitionend",
      OTransition: "oTransitionEnd otransitionend",
      transition: "transitionend"
    };
    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] };
      }
    }
    return false;
  }
  $.fn.emulateTransitionEnd = function (duration) {
    var called = false;
    var $el = this;
    $(this).one("bsTransitionEnd", function () {
      called = true;
    });
    var callback = function () {
      if (!called) $($el).trigger($.support.transition.end);
    };
    setTimeout(callback, duration);
    return this;
  };
  $(function () {
    $.support.transition = transitionEnd();
    if (!$.support.transition) return;
    $.event.special.bsTransitionEnd = {
      bindType: $.support.transition.end,
      delegateType: $.support.transition.end,
      handle: function (e) {
        if ($(e.target).is(this))
          return e.handleObj.handler.apply(this, arguments);
      }
    };
  });
})(jQuery);
+(function ($) {
  "use strict";
  var dismiss = '[data-dismiss="alert"]';
  var Alert = function (el) {
    $(el).on("click", dismiss, this.close);
  };
  Alert.VERSION = "3.2.0";
  Alert.prototype.close = function (e) {
    var $this = $(this);
    var selector = $this.attr("data-target");
    if (!selector) {
      selector = $this.attr("href");
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, "");
    }
    var $parent = $(selector);
    if (e) e.preventDefault();
    if (!$parent.length) {
      $parent = $this.hasClass("alert") ? $this : $this.parent();
    }
    $parent.trigger((e = $.Event("close.bs.alert")));
    if (e.isDefaultPrevented()) return;
    $parent.removeClass("in");
    function removeElement() {
      $parent.detach().trigger("closed.bs.alert").remove();
    }
    $.support.transition && $parent.hasClass("fade")
      ? $parent.one("bsTransitionEnd", removeElement).emulateTransitionEnd(150)
      : removeElement();
  };
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.alert");
      if (!data) $this.data("bs.alert", (data = new Alert(this)));
      if (typeof option == "string") data[option].call($this);
    });
  }
  var old = $.fn.alert;
  $.fn.alert = Plugin;
  $.fn.alert.Constructor = Alert;
  $.fn.alert.noConflict = function () {
    $.fn.alert = old;
    return this;
  };
  $(document).on("click.bs.alert.data-api", dismiss, Alert.prototype.close);
})(jQuery);
+(function ($) {
  "use strict";
  var Button = function (element, options) {
    this.$element = $(element);
    this.options = $.extend({}, Button.DEFAULTS, options);
    this.isLoading = false;
  };
  Button.VERSION = "3.2.0";
  Button.DEFAULTS = { loadingText: "loading..." };
  Button.prototype.setState = function (state) {
    var d = "disabled";
    var $el = this.$element;
    var val = $el.is("input") ? "val" : "html";
    var data = $el.data();
    state = state + "Text";
    if (data.resetText == null) $el.data("resetText", $el[val]());
    $el[val](data[state] == null ? this.options[state] : data[state]);
    setTimeout(
      $.proxy(function () {
        if (state == "loadingText") {
          this.isLoading = true;
          $el.addClass(d).attr(d, d);
        } else if (this.isLoading) {
          this.isLoading = false;
          $el.removeClass(d).removeAttr(d);
        }
      }, this),
      0
    );
  };
  Button.prototype.toggle = function () {
    var changed = true;
    var $parent = this.$element.closest('[data-toggle="buttons"]');
    if ($parent.length) {
      var $input = this.$element.find("input");
      if ($input.prop("type") == "radio") {
        if ($input.prop("checked") && this.$element.hasClass("active"))
          changed = false;
        else $parent.find(".active").removeClass("active");
      }
      if (changed)
        $input
          .prop("checked", !this.$element.hasClass("active"))
          .trigger("change");
    }
    if (changed) this.$element.toggleClass("active");
  };
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.button");
      var options = typeof option == "object" && option;
      if (!data) $this.data("bs.button", (data = new Button(this, options)));
      if (option == "toggle") data.toggle();
      else if (option) data.setState(option);
    });
  }
  var old = $.fn.button;
  $.fn.button = Plugin;
  $.fn.button.Constructor = Button;
  $.fn.button.noConflict = function () {
    $.fn.button = old;
    return this;
  };
  $(document).on(
    "click.bs.button.data-api",
    '[data-toggle^="button"]',
    function (e) {
      var $btn = $(e.target);
      if (!$btn.hasClass("btn")) $btn = $btn.closest(".btn");
      Plugin.call($btn, "toggle");
      e.preventDefault();
    }
  );
})(jQuery);
+(function ($) {
  "use strict";
  var Carousel = function (element, options) {
    this.$element = $(element).on(
      "keydown.bs.carousel",
      $.proxy(this.keydown, this)
    );
    this.$indicators = this.$element.find(".carousel-indicators");
    this.options = options;
    this.paused = this.sliding = this.interval = this.$active = this.$items = null;
    this.options.pause == "hover" &&
      this.$element
        .on("mouseenter.bs.carousel", $.proxy(this.pause, this))
        .on("mouseleave.bs.carousel", $.proxy(this.cycle, this));
  };
  Carousel.VERSION = "3.2.0";
  Carousel.DEFAULTS = { interval: 5000, pause: "hover", wrap: true };
  Carousel.prototype.keydown = function (e) {
    switch (e.which) {
      case 37:
        this.prev();
        break;
      case 39:
        this.next();
        break;
      default:
        return;
    }
    e.preventDefault();
  };
  Carousel.prototype.cycle = function (e) {
    e || (this.paused = false);
    this.interval && clearInterval(this.interval);
    this.options.interval &&
      !this.paused &&
      (this.interval = setInterval(
        $.proxy(this.next, this),
        this.options.interval
      ));
    return this;
  };
  Carousel.prototype.getItemIndex = function (item) {
    this.$items = item.parent().children(".item");
    return this.$items.index(item || this.$active);
  };
  Carousel.prototype.to = function (pos) {
    var that = this;
    var activeIndex = this.getItemIndex(
      (this.$active = this.$element.find(".item.active"))
    );
    if (pos > this.$items.length - 1 || pos < 0) return;
    if (this.sliding)
      return this.$element.one("slid.bs.carousel", function () {
        that.to(pos);
      });
    if (activeIndex == pos) return this.pause().cycle();
    return this.slide(pos > activeIndex ? "next" : "prev", $(this.$items[pos]));
  };
  Carousel.prototype.pause = function (e) {
    e || (this.paused = true);
    if (this.$element.find(".next, .prev").length && $.support.transition) {
      this.$element.trigger($.support.transition.end);
      this.cycle(true);
    }
    this.interval = clearInterval(this.interval);
    return this;
  };
  Carousel.prototype.next = function () {
    if (this.sliding) return;
    return this.slide("next");
  };
  Carousel.prototype.prev = function () {
    if (this.sliding) return;
    return this.slide("prev");
  };
  Carousel.prototype.slide = function (type, next) {
    var $active = this.$element.find(".item.active");
    var $next = next || $active[type]();
    var isCycling = this.interval;
    var direction = type == "next" ? "left" : "right";
    var fallback = type == "next" ? "first" : "last";
    var that = this;
    if (!$next.length) {
      if (!this.options.wrap) return;
      $next = this.$element.find(".item")[fallback]();
    }
    if ($next.hasClass("active")) return (this.sliding = false);
    var relatedTarget = $next[0];
    var slideEvent = $.Event("slide.bs.carousel", {
      relatedTarget: relatedTarget,
      direction: direction
    });
    this.$element.trigger(slideEvent);
    if (slideEvent.isDefaultPrevented()) return;
    this.sliding = true;
    isCycling && this.pause();
    if (this.$indicators.length) {
      this.$indicators.find(".active").removeClass("active");
      var $nextIndicator = $(
        this.$indicators.children()[this.getItemIndex($next)]
      );
      $nextIndicator && $nextIndicator.addClass("active");
    }
    var slidEvent = $.Event("slid.bs.carousel", {
      relatedTarget: relatedTarget,
      direction: direction
    });
    if ($.support.transition && this.$element.hasClass("slide")) {
      $next.addClass(type);
      $next[0].offsetWidth;
      $active.addClass(direction);
      $next.addClass(direction);
      $active
        .one("bsTransitionEnd", function () {
          $next.removeClass([type, direction].join(" ")).addClass("active");
          $active.removeClass(["active", direction].join(" "));
          that.sliding = false;
          setTimeout(function () {
            that.$element.trigger(slidEvent);
          }, 0);
        })
        .emulateTransitionEnd(
          $active.css("transition-duration").slice(0, -1) * 1000
        );
    } else {
      $active.removeClass("active");
      $next.addClass("active");
      this.sliding = false;
      this.$element.trigger(slidEvent);
    }
    isCycling && this.cycle();
    return this;
  };
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.carousel");
      var options = $.extend(
        {},
        Carousel.DEFAULTS,
        $this.data(),
        typeof option == "object" && option
      );
      var action = typeof option == "string" ? option : options.slide;
      if (!data)
        $this.data("bs.carousel", (data = new Carousel(this, options)));
      if (typeof option == "number") data.to(option);
      else if (action) data[action]();
      else if (options.interval) data.pause().cycle();
    });
  }
  var old = $.fn.carousel;
  $.fn.carousel = Plugin;
  $.fn.carousel.Constructor = Carousel;
  $.fn.carousel.noConflict = function () {
    $.fn.carousel = old;
    return this;
  };
  $(document).on(
    "click.bs.carousel.data-api",
    "[data-slide], [data-slide-to]",
    function (e) {
      var href;
      var $this = $(this);
      var $target = $(
        $this.attr("data-target") ||
          ((href = $this.attr("href")) && href.replace(/.*(?=#[^\s]+$)/, ""))
      );
      if (!$target.hasClass("carousel")) return;
      var options = $.extend({}, $target.data(), $this.data());
      var slideIndex = $this.attr("data-slide-to");
      if (slideIndex) options.interval = false;
      Plugin.call($target, options);
      if (slideIndex) {
        $target.data("bs.carousel").to(slideIndex);
      }
      e.preventDefault();
    }
  );
  $(window).on("load", function () {
    $('[data-ride="carousel"]').each(function () {
      var $carousel = $(this);
      Plugin.call($carousel, $carousel.data());
    });
  });
})(jQuery);
+(function ($) {
  "use strict";
  var Collapse = function (element, options) {
    this.$element = $(element);
    this.options = $.extend({}, Collapse.DEFAULTS, options);
    this.transitioning = null;
    if (this.options.parent) this.$parent = $(this.options.parent);
    if (this.options.toggle) this.toggle();
  };
  Collapse.VERSION = "3.2.0";
  Collapse.DEFAULTS = { toggle: true };
  Collapse.prototype.dimension = function () {
    var hasWidth = this.$element.hasClass("width");
    return hasWidth ? "width" : "height";
  };
  Collapse.prototype.show = function () {
    if (this.transitioning || this.$element.hasClass("in")) return;
    var startEvent = $.Event("show.bs.collapse");
    this.$element.trigger(startEvent);
    if (startEvent.isDefaultPrevented()) return;
    var actives = this.$parent && this.$parent.find("> .panel > .in");
    if (actives && actives.length) {
      var hasData = actives.data("bs.collapse");
      if (hasData && hasData.transitioning) return;
      Plugin.call(actives, "hide");
      hasData || actives.data("bs.collapse", null);
    }
    var dimension = this.dimension();
    this.$element.removeClass("collapse").addClass("collapsing")[dimension](0);
    this.transitioning = 1;
    var complete = function () {
      this.$element
        .removeClass("collapsing")
        .addClass("collapse in")
        [dimension]("");
      this.transitioning = 0;
      this.$element.trigger("shown.bs.collapse");
    };
    if (!$.support.transition) return complete.call(this);
    var scrollSize = $.camelCase(["scroll", dimension].join("-"));
    this.$element
      .one("bsTransitionEnd", $.proxy(complete, this))
      .emulateTransitionEnd(350)
      [dimension](this.$element[0][scrollSize]);
  };
  Collapse.prototype.hide = function () {
    if (this.transitioning || !this.$element.hasClass("in")) return;
    var startEvent = $.Event("hide.bs.collapse");
    this.$element.trigger(startEvent);
    if (startEvent.isDefaultPrevented()) return;
    var dimension = this.dimension();
    this.$element[dimension](this.$element[dimension]())[0].offsetHeight;
    this.$element
      .addClass("collapsing")
      .removeClass("collapse")
      .removeClass("in");
    this.transitioning = 1;
    var complete = function () {
      this.transitioning = 0;
      this.$element
        .trigger("hidden.bs.collapse")
        .removeClass("collapsing")
        .addClass("collapse");
    };
    if (!$.support.transition) return complete.call(this);
    this.$element[dimension](0)
      .one("bsTransitionEnd", $.proxy(complete, this))
      .emulateTransitionEnd(350);
  };
  Collapse.prototype.toggle = function () {
    this[this.$element.hasClass("in") ? "hide" : "show"]();
  };
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.collapse");
      var options = $.extend(
        {},
        Collapse.DEFAULTS,
        $this.data(),
        typeof option == "object" && option
      );
      if (!data && options.toggle && option == "show") option = !option;
      if (!data)
        $this.data("bs.collapse", (data = new Collapse(this, options)));
      if (typeof option == "string") data[option]();
    });
  }
  var old = $.fn.collapse;
  $.fn.collapse = Plugin;
  $.fn.collapse.Constructor = Collapse;
  $.fn.collapse.noConflict = function () {
    $.fn.collapse = old;
    return this;
  };
  $(document).on(
    "click.bs.collapse.data-api",
    '[data-toggle="collapse"]',
    function (e) {
      var href;
      var $this = $(this);
      var target =
        $this.attr("data-target") ||
        e.preventDefault() ||
        ((href = $this.attr("href")) && href.replace(/.*(?=#[^\s]+$)/, ""));
      var $target = $(target);
      var data = $target.data("bs.collapse");
      var option = data ? "toggle" : $this.data();
      var parent = $this.attr("data-parent");
      var $parent = parent && $(parent);
      if (!data || !data.transitioning) {
        if ($parent)
          $parent
            .find('[data-toggle="collapse"][data-parent="' + parent + '"]')
            .not($this)
            .addClass("collapsed");
        $this[$target.hasClass("in") ? "addClass" : "removeClass"]("collapsed");
      }
      Plugin.call($target, option);
    }
  );
})(jQuery);
+(function ($) {
  "use strict";
  var backdrop = ".dropdown-backdrop";
  var toggle = '[data-toggle="dropdown"]';
  var Dropdown = function (element) {
    $(element).on("click.bs.dropdown", this.toggle);
  };
  Dropdown.VERSION = "3.2.0";
  Dropdown.prototype.toggle = function (e) {
    var $this = $(this);
    if ($this.is(".disabled, :disabled")) return;
    var $parent = getParent($this);
    var isActive = $parent.hasClass("open");
    clearMenus();
    if (!isActive) {
      if (
        "ontouchstart" in document.documentElement &&
        !$parent.closest(".navbar-nav").length
      ) {
        $('<div class="dropdown-backdrop"/>')
          .insertAfter($(this))
          .on("click", clearMenus);
      }
      var relatedTarget = { relatedTarget: this };
      $parent.trigger((e = $.Event("show.bs.dropdown", relatedTarget)));
      if (e.isDefaultPrevented()) return;
      $this.trigger("focus");
      $parent.toggleClass("open").trigger("shown.bs.dropdown", relatedTarget);
    }
    return false;
  };
  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27)/.test(e.keyCode)) return;
    var $this = $(this);
    e.preventDefault();
    e.stopPropagation();
    if ($this.is(".disabled, :disabled")) return;
    var $parent = getParent($this);
    var isActive = $parent.hasClass("open");
    if (!isActive || (isActive && e.keyCode == 27)) {
      if (e.which == 27) $parent.find(toggle).trigger("focus");
      return $this.trigger("click");
    }
    var desc = " li:not(.divider):visible a";
    var $items = $parent.find(
      '[role="menu"]' + desc + ', [role="listbox"]' + desc
    );
    if (!$items.length) return;
    var index = $items.index($items.filter(":focus"));
    if (e.keyCode == 38 && index > 0) index--;
    if (e.keyCode == 40 && index < $items.length - 1) index++;
    if (!~index) index = 0;
    $items.eq(index).trigger("focus");
  };
  function clearMenus(e) {
    if (e && e.which === 3) return;
    $(backdrop).remove();
    $(toggle).each(function () {
      var $parent = getParent($(this));
      var relatedTarget = { relatedTarget: this };
      if (!$parent.hasClass("open")) return;
      $parent.trigger((e = $.Event("hide.bs.dropdown", relatedTarget)));
      if (e.isDefaultPrevented()) return;
      $parent.removeClass("open").trigger("hidden.bs.dropdown", relatedTarget);
    });
  }
  function getParent($this) {
    var selector = $this.attr("data-target");
    if (!selector) {
      selector = $this.attr("href");
      selector =
        selector &&
        /#[A-Za-z]/.test(selector) &&
        selector.replace(/.*(?=#[^\s]*$)/, "");
    }
    var $parent = selector && $(selector);
    return $parent && $parent.length ? $parent : $this.parent();
  }
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.dropdown");
      if (!data) $this.data("bs.dropdown", (data = new Dropdown(this)));
      if (typeof option == "string") data[option].call($this);
    });
  }
  var old = $.fn.dropdown;
  $.fn.dropdown = Plugin;
  $.fn.dropdown.Constructor = Dropdown;
  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old;
    return this;
  };
  $(document)
    .on("click.bs.dropdown.data-api", clearMenus)
    .on("click.bs.dropdown.data-api", ".dropdown form", function (e) {
      e.stopPropagation();
    })
    .on("click.bs.dropdown.data-api", toggle, Dropdown.prototype.toggle)
    .on(
      "keydown.bs.dropdown.data-api",
      toggle + ', [role="menu"], [role="listbox"]',
      Dropdown.prototype.keydown
    );
})(jQuery);
+(function ($) {
  "use strict";
  var Modal = function (element, options) {
    this.options = options;
    this.$body = $(document.body);
    this.$element = $(element);
    this.$backdrop = this.isShown = null;
    this.scrollbarWidth = 0;
    if (this.options.remote) {
      this.$element.find(".modal-content").load(
        this.options.remote,
        $.proxy(function () {
          this.$element.trigger("loaded.bs.modal");
        }, this)
      );
    }
  };
  Modal.VERSION = "3.2.0";
  Modal.DEFAULTS = { backdrop: true, keyboard: true, show: true };
  Modal.prototype.toggle = function (_relatedTarget) {
    return this.isShown ? this.hide() : this.show(_relatedTarget);
  };
  Modal.prototype.show = function (_relatedTarget) {
    var that = this;
    var e = $.Event("show.bs.modal", { relatedTarget: _relatedTarget });
    this.$element.trigger(e);
    if (this.isShown || e.isDefaultPrevented()) return;
    this.isShown = true;
    this.checkScrollbar();
    this.$body.addClass("modal-open");
    this.setScrollbar();
    this.escape();
    this.$element.on(
      "click.dismiss.bs.modal",
      '[data-dismiss="modal"]',
      $.proxy(this.hide, this)
    );
    this.backdrop(function () {
      var transition = $.support.transition && that.$element.hasClass("fade");
      if (!that.$element.parent().length) {
        that.$element.appendTo(that.$body);
      }
      that.$element.show().scrollTop(0);
      if (transition) {
        that.$element[0].offsetWidth;
      }
      that.$element.addClass("in").attr("aria-hidden", false);
      that.enforceFocus();
      var e = $.Event("shown.bs.modal", { relatedTarget: _relatedTarget });
      transition
        ? that.$element
            .find(".modal-dialog")
            .one("bsTransitionEnd", function () {
              that.$element.trigger("focus").trigger(e);
            })
            .emulateTransitionEnd(300)
        : that.$element.trigger("focus").trigger(e);
    });
  };
  Modal.prototype.hide = function (e) {
    if (e) e.preventDefault();
    e = $.Event("hide.bs.modal");
    this.$element.trigger(e);
    if (!this.isShown || e.isDefaultPrevented()) return;
    this.isShown = false;
    this.$body.removeClass("modal-open");
    this.resetScrollbar();
    this.escape();
    $(document).off("focusin.bs.modal");
    this.$element
      .removeClass("in")
      .attr("aria-hidden", true)
      .off("click.dismiss.bs.modal");
    $.support.transition && this.$element.hasClass("fade")
      ? this.$element
          .one("bsTransitionEnd", $.proxy(this.hideModal, this))
          .emulateTransitionEnd(300)
      : this.hideModal();
  };
  Modal.prototype.enforceFocus = function () {
    $(document)
      .off("focusin.bs.modal")
      .on(
        "focusin.bs.modal",
        $.proxy(function (e) {
          if (
            this.$element[0] !== e.target &&
            !this.$element.has(e.target).length
          ) {
            this.$element.trigger("focus");
          }
        }, this)
      );
  };
  Modal.prototype.escape = function () {
    if (this.isShown && this.options.keyboard) {
      this.$element.on(
        "keyup.dismiss.bs.modal",
        $.proxy(function (e) {
          e.which == 27 && this.hide();
        }, this)
      );
    } else if (!this.isShown) {
      this.$element.off("keyup.dismiss.bs.modal");
    }
  };
  Modal.prototype.hideModal = function () {
    var that = this;
    this.$element.hide();
    this.backdrop(function () {
      that.$element.trigger("hidden.bs.modal");
    });
  };
  Modal.prototype.removeBackdrop = function () {
    this.$backdrop && this.$backdrop.remove();
    this.$backdrop = null;
  };
  Modal.prototype.backdrop = function (callback) {
    var that = this;
    var animate = this.$element.hasClass("fade") ? "fade" : "";
    if (this.isShown && this.options.backdrop) {
      var doAnimate = $.support.transition && animate;
      this.$backdrop = $(
        '<div class="modal-backdrop ' + animate + '" />'
      ).appendTo(this.$body);
      this.$element.on(
        "click.dismiss.bs.modal",
        $.proxy(function (e) {
          if (e.target !== e.currentTarget) return;
          this.options.backdrop == "static"
            ? this.$element[0].focus.call(this.$element[0])
            : this.hide.call(this);
        }, this)
      );
      if (doAnimate) this.$backdrop[0].offsetWidth;
      this.$backdrop.addClass("in");
      if (!callback) return;
      doAnimate
        ? this.$backdrop
            .one("bsTransitionEnd", callback)
            .emulateTransitionEnd(150)
        : callback();
    } else if (!this.isShown && this.$backdrop) {
      this.$backdrop.removeClass("in");
      var callbackRemove = function () {
        that.removeBackdrop();
        callback && callback();
      };
      $.support.transition && this.$element.hasClass("fade")
        ? this.$backdrop
            .one("bsTransitionEnd", callbackRemove)
            .emulateTransitionEnd(150)
        : callbackRemove();
    } else if (callback) {
      callback();
    }
  };
  Modal.prototype.checkScrollbar = function () {
    if (document.body.clientWidth >= window.innerWidth) return;
    this.scrollbarWidth = this.scrollbarWidth || this.measureScrollbar();
  };
  Modal.prototype.setScrollbar = function () {
    var bodyPad = parseInt(this.$body.css("padding-right") || 0, 10);
    if (this.scrollbarWidth)
      this.$body.css("padding-right", bodyPad + this.scrollbarWidth);
  };
  Modal.prototype.resetScrollbar = function () {
    this.$body.css("padding-right", "");
  };
  Modal.prototype.measureScrollbar = function () {
    var scrollDiv = document.createElement("div");
    scrollDiv.className = "modal-scrollbar-measure";
    this.$body.append(scrollDiv);
    var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth;
    this.$body[0].removeChild(scrollDiv);
    return scrollbarWidth;
  };
  function Plugin(option, _relatedTarget) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.modal");
      var options = $.extend(
        {},
        Modal.DEFAULTS,
        $this.data(),
        typeof option == "object" && option
      );
      if (!data) $this.data("bs.modal", (data = new Modal(this, options)));
      if (typeof option == "string") data[option](_relatedTarget);
      else if (options.show) data.show(_relatedTarget);
    });
  }
  var old = $.fn.modal;
  $.fn.modal = Plugin;
  $.fn.modal.Constructor = Modal;
  $.fn.modal.noConflict = function () {
    $.fn.modal = old;
    return this;
  };
  $(document).on(
    "click.bs.modal.data-api",
    '[data-toggle="modal"]',
    function (e) {
      var $this = $(this);
      var href = $this.attr("href");
      var $target = $(
        $this.attr("data-target") ||
          (href && href.replace(/.*(?=#[^\s]+$)/, ""))
      );
      var option = $target.data("bs.modal")
        ? "toggle"
        : $.extend(
            { remote: !/#/.test(href) && href },
            $target.data(),
            $this.data()
          );
      if ($this.is("a")) e.preventDefault();
      $target.one("show.bs.modal", function (showEvent) {
        if (showEvent.isDefaultPrevented()) return;
        $target.one("hidden.bs.modal", function () {
          $this.is(":visible") && $this.trigger("focus");
        });
      });
      Plugin.call($target, option, this);
    }
  );
})(jQuery);
+(function ($) {
  "use strict";
  var Tooltip = function (element, options) {
    this.type = this.options = this.enabled = this.timeout = this.hoverState = this.$element = null;
    this.init("tooltip", element, options);
  };
  Tooltip.VERSION = "3.2.0";
  Tooltip.DEFAULTS = {
    animation: true,
    placement: "top",
    selector: false,
    template:
      '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
    trigger: "hover focus",
    title: "",
    delay: 0,
    html: false,
    container: false,
    viewport: { selector: "body", padding: 0 }
  };
  Tooltip.prototype.init = function (type, element, options) {
    this.enabled = true;
    this.type = type;
    this.$element = $(element);
    this.options = this.getOptions(options);
    this.$viewport =
      this.options.viewport &&
      $(this.options.viewport.selector || this.options.viewport);
    var triggers = this.options.trigger.split(" ");
    for (var i = triggers.length; i--; ) {
      var trigger = triggers[i];
      if (trigger == "click") {
        this.$element.on(
          "click." + this.type,
          this.options.selector,
          $.proxy(this.toggle, this)
        );
      } else if (trigger != "manual") {
        var eventIn = trigger == "hover" ? "mouseenter" : "focusin";
        var eventOut = trigger == "hover" ? "mouseleave" : "focusout";
        this.$element.on(
          eventIn + "." + this.type,
          this.options.selector,
          $.proxy(this.enter, this)
        );
        this.$element.on(
          eventOut + "." + this.type,
          this.options.selector,
          $.proxy(this.leave, this)
        );
      }
    }
    this.options.selector
      ? (this._options = $.extend({}, this.options, {
          trigger: "manual",
          selector: ""
        }))
      : this.fixTitle();
  };
  Tooltip.prototype.getDefaults = function () {
    return Tooltip.DEFAULTS;
  };
  Tooltip.prototype.getOptions = function (options) {
    options = $.extend({}, this.getDefaults(), this.$element.data(), options);
    if (options.delay && typeof options.delay == "number") {
      options.delay = { show: options.delay, hide: options.delay };
    }
    return options;
  };
  Tooltip.prototype.getDelegateOptions = function () {
    var options = {};
    var defaults = this.getDefaults();
    this._options &&
      $.each(this._options, function (key, value) {
        if (defaults[key] != value) options[key] = value;
      });
    return options;
  };
  Tooltip.prototype.enter = function (obj) {
    var self =
      obj instanceof this.constructor
        ? obj
        : $(obj.currentTarget).data("bs." + this.type);
    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions());
      $(obj.currentTarget).data("bs." + this.type, self);
    }
    clearTimeout(self.timeout);
    self.hoverState = "in";
    if (!self.options.delay || !self.options.delay.show) return self.show();
    self.timeout = setTimeout(function () {
      if (self.hoverState == "in") self.show();
    }, self.options.delay.show);
  };
  Tooltip.prototype.leave = function (obj) {
    var self =
      obj instanceof this.constructor
        ? obj
        : $(obj.currentTarget).data("bs." + this.type);
    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions());
      $(obj.currentTarget).data("bs." + this.type, self);
    }
    clearTimeout(self.timeout);
    self.hoverState = "out";
    if (!self.options.delay || !self.options.delay.hide) return self.hide();
    self.timeout = setTimeout(function () {
      if (self.hoverState == "out") self.hide();
    }, self.options.delay.hide);
  };
  Tooltip.prototype.show = function () {
    var e = $.Event("show.bs." + this.type);
    if (this.hasContent() && this.enabled) {
      this.$element.trigger(e);
      var inDom = $.contains(document.documentElement, this.$element[0]);
      if (e.isDefaultPrevented() || !inDom) return;
      var that = this;
      var $tip = this.tip();
      var tipId = this.getUID(this.type);
      this.setContent();
      $tip.attr("id", tipId);
      this.$element.attr("aria-describedby", tipId);
      if (this.options.animation) $tip.addClass("fade");
      var placement =
        typeof this.options.placement == "function"
          ? this.options.placement.call(this, $tip[0], this.$element[0])
          : this.options.placement;
      var autoToken = /\s?auto?\s?/i;
      var autoPlace = autoToken.test(placement);
      if (autoPlace) placement = placement.replace(autoToken, "") || "top";
      $tip
        .detach()
        .css({ top: 0, left: 0, display: "block" })
        .addClass(placement)
        .data("bs." + this.type, this);
      this.options.container
        ? $tip.appendTo(this.options.container)
        : $tip.insertAfter(this.$element);
      var pos = this.getPosition();
      var actualWidth = $tip[0].offsetWidth;
      var actualHeight = $tip[0].offsetHeight;
      if (autoPlace) {
        var orgPlacement = placement;
        var $parent = this.$element.parent();
        var parentDim = this.getPosition($parent);
        placement =
          placement == "bottom" &&
          pos.top + pos.height + actualHeight - parentDim.scroll >
            parentDim.height
            ? "top"
            : placement == "top" &&
              pos.top - parentDim.scroll - actualHeight < 0
            ? "bottom"
            : placement == "right" && pos.right + actualWidth > parentDim.width
            ? "left"
            : placement == "left" && pos.left - actualWidth < parentDim.left
            ? "right"
            : placement;
        $tip.removeClass(orgPlacement).addClass(placement);
      }
      var calculatedOffset = this.getCalculatedOffset(
        placement,
        pos,
        actualWidth,
        actualHeight
      );
      this.applyPlacement(calculatedOffset, placement);
      var complete = function () {
        that.$element.trigger("shown.bs." + that.type);
        that.hoverState = null;
      };
      $.support.transition && this.$tip.hasClass("fade")
        ? $tip.one("bsTransitionEnd", complete).emulateTransitionEnd(150)
        : complete();
    }
  };
  Tooltip.prototype.applyPlacement = function (offset, placement) {
    var $tip = this.tip();
    var width = $tip[0].offsetWidth;
    var height = $tip[0].offsetHeight;
    var marginTop = parseInt($tip.css("margin-top"), 10);
    var marginLeft = parseInt($tip.css("margin-left"), 10);
    if (isNaN(marginTop)) marginTop = 0;
    if (isNaN(marginLeft)) marginLeft = 0;
    offset.top = offset.top + marginTop;
    offset.left = offset.left + marginLeft;
    $.offset.setOffset(
      $tip[0],
      $.extend(
        {
          using: function (props) {
            $tip.css({
              top: Math.round(props.top),
              left: Math.round(props.left)
            });
          }
        },
        offset
      ),
      0
    );
    $tip.addClass("in");
    var actualWidth = $tip[0].offsetWidth;
    var actualHeight = $tip[0].offsetHeight;
    if (placement == "top" && actualHeight != height) {
      offset.top = offset.top + height - actualHeight;
    }
    var delta = this.getViewportAdjustedDelta(
      placement,
      offset,
      actualWidth,
      actualHeight
    );
    if (delta.left) offset.left += delta.left;
    else offset.top += delta.top;
    var arrowDelta = delta.left
      ? delta.left * 2 - width + actualWidth
      : delta.top * 2 - height + actualHeight;
    var arrowPosition = delta.left ? "left" : "top";
    var arrowOffsetPosition = delta.left ? "offsetWidth" : "offsetHeight";
    $tip.offset(offset);
    this.replaceArrow(arrowDelta, $tip[0][arrowOffsetPosition], arrowPosition);
  };
  Tooltip.prototype.replaceArrow = function (delta, dimension, position) {
    this.arrow().css(position, delta ? 50 * (1 - delta / dimension) + "%" : "");
  };
  Tooltip.prototype.setContent = function () {
    var $tip = this.tip();
    var title = this.getTitle();
    $tip.find(".tooltip-inner")[this.options.html ? "html" : "text"](title);
    $tip.removeClass("fade in top bottom left right");
  };
  Tooltip.prototype.hide = function () {
    var that = this;
    var $tip = this.tip();
    var e = $.Event("hide.bs." + this.type);
    this.$element.removeAttr("aria-describedby");
    function complete() {
      if (that.hoverState != "in") $tip.detach();
      that.$element.trigger("hidden.bs." + that.type);
    }
    this.$element.trigger(e);
    if (e.isDefaultPrevented()) return;
    $tip.removeClass("in");
    $.support.transition && this.$tip.hasClass("fade")
      ? $tip.one("bsTransitionEnd", complete).emulateTransitionEnd(150)
      : complete();
    this.hoverState = null;
    return this;
  };
  Tooltip.prototype.fixTitle = function () {
    var $e = this.$element;
    if ($e.attr("title") || typeof $e.attr("data-original-title") != "string") {
      $e.attr("data-original-title", $e.attr("title") || "").attr("title", "");
    }
  };
  Tooltip.prototype.hasContent = function () {
    return this.getTitle();
  };
  Tooltip.prototype.getPosition = function ($element) {
    $element = $element || this.$element;
    var el = $element[0];
    var isBody = el.tagName == "BODY";
    return $.extend(
      {},
      typeof el.getBoundingClientRect == "function"
        ? el.getBoundingClientRect()
        : null,
      {
        scroll: isBody
          ? document.documentElement.scrollTop || document.body.scrollTop
          : $element.scrollTop(),
        width: isBody ? $(window).width() : $element.outerWidth(),
        height: isBody ? $(window).height() : $element.outerHeight()
      },
      isBody ? { top: 0, left: 0 } : $element.offset()
    );
  };
  Tooltip.prototype.getCalculatedOffset = function (
    placement,
    pos,
    actualWidth,
    actualHeight
  ) {
    return placement == "bottom"
      ? {
          top: pos.top + pos.height,
          left: pos.left + pos.width / 2 - actualWidth / 2
        }
      : placement == "top"
      ? {
          top: pos.top - actualHeight,
          left: pos.left + pos.width / 2 - actualWidth / 2
        }
      : placement == "left"
      ? {
          top: pos.top + pos.height / 2 - actualHeight / 2,
          left: pos.left - actualWidth
        }
      : {
          top: pos.top + pos.height / 2 - actualHeight / 2,
          left: pos.left + pos.width
        };
  };
  Tooltip.prototype.getViewportAdjustedDelta = function (
    placement,
    pos,
    actualWidth,
    actualHeight
  ) {
    var delta = { top: 0, left: 0 };
    if (!this.$viewport) return delta;
    var viewportPadding =
      (this.options.viewport && this.options.viewport.padding) || 0;
    var viewportDimensions = this.getPosition(this.$viewport);
    if (/right|left/.test(placement)) {
      var topEdgeOffset = pos.top - viewportPadding - viewportDimensions.scroll;
      var bottomEdgeOffset =
        pos.top + viewportPadding - viewportDimensions.scroll + actualHeight;
      if (topEdgeOffset < viewportDimensions.top) {
        delta.top = viewportDimensions.top - topEdgeOffset;
      } else if (
        bottomEdgeOffset >
        viewportDimensions.top + viewportDimensions.height
      ) {
        delta.top =
          viewportDimensions.top + viewportDimensions.height - bottomEdgeOffset;
      }
    } else {
      var leftEdgeOffset = pos.left - viewportPadding;
      var rightEdgeOffset = pos.left + viewportPadding + actualWidth;
      if (leftEdgeOffset < viewportDimensions.left) {
        delta.left = viewportDimensions.left - leftEdgeOffset;
      } else if (rightEdgeOffset > viewportDimensions.width) {
        delta.left =
          viewportDimensions.left + viewportDimensions.width - rightEdgeOffset;
      }
    }
    return delta;
  };
  Tooltip.prototype.getTitle = function () {
    var title;
    var $e = this.$element;
    var o = this.options;
    title =
      $e.attr("data-original-title") ||
      (typeof o.title == "function" ? o.title.call($e[0]) : o.title);
    return title;
  };
  Tooltip.prototype.getUID = function (prefix) {
    do prefix += ~~(Math.random() * 1000000);
    while (document.getElementById(prefix));
    return prefix;
  };
  Tooltip.prototype.tip = function () {
    return (this.$tip = this.$tip || $(this.options.template));
  };
  Tooltip.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find(".tooltip-arrow"));
  };
  Tooltip.prototype.validate = function () {
    if (!this.$element[0].parentNode) {
      this.hide();
      this.$element = null;
      this.options = null;
    }
  };
  Tooltip.prototype.enable = function () {
    this.enabled = true;
  };
  Tooltip.prototype.disable = function () {
    this.enabled = false;
  };
  Tooltip.prototype.toggleEnabled = function () {
    this.enabled = !this.enabled;
  };
  Tooltip.prototype.toggle = function (e) {
    var self = this;
    if (e) {
      self = $(e.currentTarget).data("bs." + this.type);
      if (!self) {
        self = new this.constructor(e.currentTarget, this.getDelegateOptions());
        $(e.currentTarget).data("bs." + this.type, self);
      }
    }
    self.tip().hasClass("in") ? self.leave(self) : self.enter(self);
  };
  Tooltip.prototype.destroy = function () {
    clearTimeout(this.timeout);
    this.hide()
      .$element.off("." + this.type)
      .removeData("bs." + this.type);
  };
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.tooltip");
      var options = typeof option == "object" && option;
      if (!data && option == "destroy") return;
      if (!data) $this.data("bs.tooltip", (data = new Tooltip(this, options)));
      if (typeof option == "string") data[option]();
    });
  }
  var old = $.fn.tooltip;
  $.fn.tooltip = Plugin;
  $.fn.tooltip.Constructor = Tooltip;
  $.fn.tooltip.noConflict = function () {
    $.fn.tooltip = old;
    return this;
  };
})(jQuery);
+(function ($) {
  "use strict";
  var Popover = function (element, options) {
    this.init("popover", element, options);
  };
  if (!$.fn.tooltip) throw new Error("Popover requires tooltip.js");
  Popover.VERSION = "3.2.0";
  Popover.DEFAULTS = $.extend({}, $.fn.tooltip.Constructor.DEFAULTS, {
    placement: "right",
    trigger: "click",
    content: "",
    template:
      '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
  });
  Popover.prototype = $.extend({}, $.fn.tooltip.Constructor.prototype);
  Popover.prototype.constructor = Popover;
  Popover.prototype.getDefaults = function () {
    return Popover.DEFAULTS;
  };
  Popover.prototype.setContent = function () {
    var $tip = this.tip();
    var title = this.getTitle();
    var content = this.getContent();
    $tip.find(".popover-title")[this.options.html ? "html" : "text"](title);
    $tip
      .find(".popover-content")
      .empty()
      [
        this.options.html
          ? typeof content == "string"
            ? "html"
            : "append"
          : "text"
      ](content);
    $tip.removeClass("fade top bottom left right in");
    if (!$tip.find(".popover-title").html()) $tip.find(".popover-title").hide();
  };
  Popover.prototype.hasContent = function () {
    return this.getTitle() || this.getContent();
  };
  Popover.prototype.getContent = function () {
    var $e = this.$element;
    var o = this.options;
    return (
      $e.attr("data-content") ||
      (typeof o.content == "function" ? o.content.call($e[0]) : o.content)
    );
  };
  Popover.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find(".arrow"));
  };
  Popover.prototype.tip = function () {
    if (!this.$tip) this.$tip = $(this.options.template);
    return this.$tip;
  };
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.popover");
      var options = typeof option == "object" && option;
      if (!data && option == "destroy") return;
      if (!data) $this.data("bs.popover", (data = new Popover(this, options)));
      if (typeof option == "string") data[option]();
    });
  }
  var old = $.fn.popover;
  $.fn.popover = Plugin;
  $.fn.popover.Constructor = Popover;
  $.fn.popover.noConflict = function () {
    $.fn.popover = old;
    return this;
  };
})(jQuery);
+(function ($) {
  "use strict";
  function ScrollSpy(element, options) {
    var process = $.proxy(this.process, this);
    this.$body = $("body");
    this.$scrollElement = $(element).is("body") ? $(window) : $(element);
    this.options = $.extend({}, ScrollSpy.DEFAULTS, options);
    this.selector = (this.options.target || "") + " .nav li > a";
    this.offsets = [];
    this.targets = [];
    this.activeTarget = null;
    this.scrollHeight = 0;
    this.$scrollElement.on("scroll.bs.scrollspy", process);
    this.refresh();
    this.process();
  }
  ScrollSpy.VERSION = "3.2.0";
  ScrollSpy.DEFAULTS = { offset: 10 };
  ScrollSpy.prototype.getScrollHeight = function () {
    return (
      this.$scrollElement[0].scrollHeight ||
      Math.max(
        this.$body[0].scrollHeight,
        document.documentElement.scrollHeight
      )
    );
  };
  ScrollSpy.prototype.refresh = function () {
    var offsetMethod = "offset";
    var offsetBase = 0;
    if (!$.isWindow(this.$scrollElement[0])) {
      offsetMethod = "position";
      offsetBase = this.$scrollElement.scrollTop();
    }
    this.offsets = [];
    this.targets = [];
    this.scrollHeight = this.getScrollHeight();
    var self = this;
    this.$body
      .find(this.selector)
      .map(function () {
        var $el = $(this);
        var href = $el.data("target") || $el.attr("href");
        var $href = /^#./.test(href) && $(href);
        return (
          ($href &&
            $href.length &&
            $href.is(":visible") && [
              [$href[offsetMethod]().top + offsetBase, href]
            ]) ||
          null
        );
      })
      .sort(function (a, b) {
        return a[0] - b[0];
      })
      .each(function () {
        self.offsets.push(this[0]);
        self.targets.push(this[1]);
      });
  };
  ScrollSpy.prototype.process = function () {
    var scrollTop = this.$scrollElement.scrollTop() + this.options.offset;
    var scrollHeight = this.getScrollHeight();
    var maxScroll =
      this.options.offset + scrollHeight - this.$scrollElement.height();
    var offsets = this.offsets;
    var targets = this.targets;
    var activeTarget = this.activeTarget;
    var i;
    if (this.scrollHeight != scrollHeight) {
      this.refresh();
    }
    if (scrollTop >= maxScroll) {
      return (
        activeTarget != (i = targets[targets.length - 1]) && this.activate(i)
      );
    }
    if (activeTarget && scrollTop <= offsets[0]) {
      return activeTarget != (i = targets[0]) && this.activate(i);
    }
    for (i = offsets.length; i--; ) {
      activeTarget != targets[i] &&
        scrollTop >= offsets[i] &&
        (!offsets[i + 1] || scrollTop <= offsets[i + 1]) &&
        this.activate(targets[i]);
    }
  };
  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target;
    $(this.selector)
      .parentsUntil(this.options.target, ".active")
      .removeClass("active");
    var selector =
      this.selector +
      '[data-target="' +
      target +
      '"],' +
      this.selector +
      '[href="' +
      target +
      '"]';
    var active = $(selector).parents("li").addClass("active");
    if (active.parent(".dropdown-menu").length) {
      active = active.closest("li.dropdown").addClass("active");
    }
    active.trigger("activate.bs.scrollspy");
  };
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.scrollspy");
      var options = typeof option == "object" && option;
      if (!data)
        $this.data("bs.scrollspy", (data = new ScrollSpy(this, options)));
      if (typeof option == "string") data[option]();
    });
  }
  var old = $.fn.scrollspy;
  $.fn.scrollspy = Plugin;
  $.fn.scrollspy.Constructor = ScrollSpy;
  $.fn.scrollspy.noConflict = function () {
    $.fn.scrollspy = old;
    return this;
  };
  $(window).on("load.bs.scrollspy.data-api", function () {
    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this);
      Plugin.call($spy, $spy.data());
    });
  });
})(jQuery);
+(function ($) {
  "use strict";
  var Tab = function (element) {
    this.element = $(element);
  };
  Tab.VERSION = "3.2.0";
  Tab.prototype.show = function () {
    var $this = this.element;
    var $ul = $this.closest("ul:not(.dropdown-menu)");
    var selector = $this.data("target");
    if (!selector) {
      selector = $this.attr("href");
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, "");
    }
    if ($this.parent("li").hasClass("active")) return;
    var previous = $ul.find(".active:last a")[0];
    var e = $.Event("show.bs.tab", { relatedTarget: previous });
    $this.trigger(e);
    if (e.isDefaultPrevented()) return;
    var $target = $(selector);
    this.activate($this.closest("li"), $ul);
    this.activate($target, $target.parent(), function () {
      $this.trigger({ type: "shown.bs.tab", relatedTarget: previous });
    });
  };
  Tab.prototype.activate = function (element, container, callback) {
    var $active = container.find("> .active");
    var transition =
      callback && $.support.transition && $active.hasClass("fade");
    function next() {
      $active
        .removeClass("active")
        .find("> .dropdown-menu > .active")
        .removeClass("active");
      element.addClass("active");
      if (transition) {
        element[0].offsetWidth;
        element.addClass("in");
      } else {
        element.removeClass("fade");
      }
      if (element.parent(".dropdown-menu")) {
        element.closest("li.dropdown").addClass("active");
      }
      callback && callback();
    }
    transition
      ? $active.one("bsTransitionEnd", next).emulateTransitionEnd(150)
      : next();
    $active.removeClass("in");
  };
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.tab");
      if (!data) $this.data("bs.tab", (data = new Tab(this)));
      if (typeof option == "string") data[option]();
    });
  }
  var old = $.fn.tab;
  $.fn.tab = Plugin;
  $.fn.tab.Constructor = Tab;
  $.fn.tab.noConflict = function () {
    $.fn.tab = old;
    return this;
  };
  $(document).on(
    "click.bs.tab.data-api",
    '[data-toggle="tab"], [data-toggle="pill"]',
    function (e) {
      e.preventDefault();
      Plugin.call($(this), "show");
    }
  );
})(jQuery);
+(function ($) {
  "use strict";
  var Affix = function (element, options) {
    this.options = $.extend({}, Affix.DEFAULTS, options);
    this.$target = $(this.options.target)
      .on("scroll.bs.affix.data-api", $.proxy(this.checkPosition, this))
      .on(
        "click.bs.affix.data-api",
        $.proxy(this.checkPositionWithEventLoop, this)
      );
    this.$element = $(element);
    this.affixed = this.unpin = this.pinnedOffset = null;
    this.checkPosition();
  };
  Affix.VERSION = "3.2.0";
  Affix.RESET = "affix affix-top affix-bottom";
  Affix.DEFAULTS = { offset: 0, target: window };
  Affix.prototype.getPinnedOffset = function () {
    if (this.pinnedOffset) return this.pinnedOffset;
    this.$element.removeClass(Affix.RESET).addClass("affix");
    var scrollTop = this.$target.scrollTop();
    var position = this.$element.offset();
    return (this.pinnedOffset = position.top - scrollTop);
  };
  Affix.prototype.checkPositionWithEventLoop = function () {
    setTimeout($.proxy(this.checkPosition, this), 1);
  };
  Affix.prototype.checkPosition = function () {
    if (!this.$element.is(":visible")) return;
    var scrollHeight = $(document).height();
    var scrollTop = this.$target.scrollTop();
    var position = this.$element.offset();
    var offset = this.options.offset;
    var offsetTop = offset.top;
    var offsetBottom = offset.bottom;
    if (typeof offset != "object") offsetBottom = offsetTop = offset;
    if (typeof offsetTop == "function") offsetTop = offset.top(this.$element);
    if (typeof offsetBottom == "function")
      offsetBottom = offset.bottom(this.$element);
    var affix =
      this.unpin != null && scrollTop + this.unpin <= position.top
        ? false
        : offsetBottom != null &&
          position.top + this.$element.height() >= scrollHeight - offsetBottom
        ? "bottom"
        : offsetTop != null && scrollTop <= offsetTop
        ? "top"
        : false;
    if (this.affixed === affix) return;
    if (this.unpin != null) this.$element.css("top", "");
    var affixType = "affix" + (affix ? "-" + affix : "");
    var e = $.Event(affixType + ".bs.affix");
    this.$element.trigger(e);
    if (e.isDefaultPrevented()) return;
    this.affixed = affix;
    this.unpin = affix == "bottom" ? this.getPinnedOffset() : null;
    this.$element
      .removeClass(Affix.RESET)
      .addClass(affixType)
      .trigger($.Event(affixType.replace("affix", "affixed")));
    if (affix == "bottom") {
      this.$element.offset({
        top: scrollHeight - this.$element.height() - offsetBottom
      });
    }
  };
  function Plugin(option) {
    return this.each(function () {
      var $this = $(this);
      var data = $this.data("bs.affix");
      var options = typeof option == "object" && option;
      if (!data) $this.data("bs.affix", (data = new Affix(this, options)));
      if (typeof option == "string") data[option]();
    });
  }
  var old = $.fn.affix;
  $.fn.affix = Plugin;
  $.fn.affix.Constructor = Affix;
  $.fn.affix.noConflict = function () {
    $.fn.affix = old;
    return this;
  };
  $(window).on("load", function () {
    $('[data-spy="affix"]').each(function () {
      var $spy = $(this);
      var data = $spy.data();
      data.offset = data.offset || {};
      if (data.offsetBottom) data.offset.bottom = data.offsetBottom;
      if (data.offsetTop) data.offset.top = data.offsetTop;
      Plugin.call($spy, data);
    });
  });
})(jQuery);
(function (h, j, e) {
  var a = "placeholder" in j.createElement("input");
  var f = "placeholder" in j.createElement("textarea");
  var k = e.fn;
  var d = e.valHooks;
  var b = e.propHooks;
  var m;
  var l;
  if (a && f) {
    l = k.placeholder = function () {
      return this;
    };
    l.input = l.textarea = true;
  } else {
    l = k.placeholder = function () {
      var n = this;
      n.filter((a ? "textarea" : ":input") + "[placeholder]")
        .not(".placeholder")
        .bind({ "focus.placeholder": c, "blur.placeholder": g })
        .data("placeholder-enabled", true)
        .trigger("blur.placeholder");
      return n;
    };
    l.input = a;
    l.textarea = f;
    m = {
      get: function (o) {
        var n = e(o);
        var p = n.data("placeholder-password");
        if (p) {
          return p[0].value;
        }
        return n.data("placeholder-enabled") && n.hasClass("placeholder")
          ? ""
          : o.value;
      },
      set: function (o, q) {
        var n = e(o);
        var p = n.data("placeholder-password");
        if (p) {
          return (p[0].value = q);
        }
        if (!n.data("placeholder-enabled")) {
          return (o.value = q);
        }
        if (q == "") {
          o.value = q;
          if (o != j.activeElement) {
            g.call(o);
          }
        } else {
          if (n.hasClass("placeholder")) {
            c.call(o, true, q) || (o.value = q);
          } else {
            o.value = q;
          }
        }
        return n;
      }
    };
    if (!a) {
      d.input = m;
      b.value = m;
    }
    if (!f) {
      d.textarea = m;
      b.value = m;
    }
    e(function () {
      e(j).delegate("form", "submit.placeholder", function () {
        var n = e(".placeholder", this).each(c);
        setTimeout(function () {
          n.each(g);
        }, 10);
      });
    });
    e(h).bind("beforeunload.placeholder", function () {
      e(".placeholder").each(function () {
        this.value = "";
      });
    });
  }
  function i(o) {
    var n = {};
    var p = /^jQuery\d+$/;
    e.each(o.attributes, function (r, q) {
      if (q.specified && !p.test(q.name)) {
        n[q.name] = q.value;
      }
    });
    return n;
  }
  function c(o, p) {
    var n = this;
    var q = e(n);
    if (n.value == q.attr("placeholder") && q.hasClass("placeholder")) {
      if (q.data("placeholder-password")) {
        q = q
          .hide()
          .next()
          .show()
          .attr("id", q.removeAttr("id").data("placeholder-id"));
        if (o === true) {
          return (q[0].value = p);
        }
        q.focus();
      } else {
        n.value = "";
        q.removeClass("placeholder");
        n == j.activeElement && n.select();
      }
    }
  }
  function g() {
    var r;
    var n = this;
    var q = e(n);
    var p = this.id;
    if (n.value == "") {
      if (n.type == "password") {
        if (!q.data("placeholder-textinput")) {
          try {
            r = q.clone().attr({ type: "text" });
          } catch (o) {
            r = e("<input>").attr(e.extend(i(this), { type: "text" }));
          }
          r.removeAttr("name")
            .data({ "placeholder-password": q, "placeholder-id": p })
            .bind("focus.placeholder", c);
          q.data({ "placeholder-textinput": r, "placeholder-id": p }).before(r);
        }
        q = q.removeAttr("id").hide().prev().attr("id", p).show();
      }
      q.addClass("placeholder");
      q[0].value = q.attr("placeholder");
    } else {
      q.removeClass("placeholder");
    }
  }
})(this, document, jQuery);
window.Modernizr = (function (a, b, c) {
  function w(a) {
    j.cssText = a;
  }
  function x(a, b) {
    return w(m.join(a + ";") + (b || ""));
  }
  function y(a, b) {
    return typeof a === b;
  }
  function z(a, b) {
    return !!~("" + a).indexOf(b);
  }
  function A(a, b, d) {
    for (var e in a) {
      var f = b[a[e]];
      if (f !== c)
        return d === !1 ? a[e] : y(f, "function") ? f.bind(d || b) : f;
    }
    return !1;
  }
  var d = "2.6.2",
    e = {},
    f = !0,
    g = b.documentElement,
    h = "modernizr",
    i = b.createElement(h),
    j = i.style,
    k,
    l = {}.toString,
    m = " -webkit- -moz- -o- -ms- ".split(" "),
    n = {},
    o = {},
    p = {},
    q = [],
    r = q.slice,
    s,
    t = function (a, c, d, e) {
      var f,
        i,
        j,
        k,
        l = b.createElement("div"),
        m = b.body,
        n = m || b.createElement("body");
      if (parseInt(d, 10))
        while (d--)
          (j = b.createElement("div")),
            (j.id = e ? e[d] : h + (d + 1)),
            l.appendChild(j);
      return (
        (f = ["&#173;", '<style id="s', h, '">', a, "</style>"].join("")),
        (l.id = h),
        ((m ? l : n).innerHTML += f),
        n.appendChild(l),
        m ||
          ((n.style.background = ""),
          (n.style.overflow = "hidden"),
          (k = g.style.overflow),
          (g.style.overflow = "hidden"),
          g.appendChild(n)),
        (i = c(l, a)),
        m
          ? l.parentNode.removeChild(l)
          : (n.parentNode.removeChild(n), (g.style.overflow = k)),
        !!i
      );
    },
    u = {}.hasOwnProperty,
    v;
  !y(u, "undefined") && !y(u.call, "undefined")
    ? (v = function (a, b) {
        return u.call(a, b);
      })
    : (v = function (a, b) {
        return b in a && y(a.constructor.prototype[b], "undefined");
      }),
    Function.prototype.bind ||
      (Function.prototype.bind = function (b) {
        var c = this;
        if (typeof c != "function") throw new TypeError();
        var d = r.call(arguments, 1),
          e = function () {
            if (this instanceof e) {
              var a = function () {};
              a.prototype = c.prototype;
              var f = new a(),
                g = c.apply(f, d.concat(r.call(arguments)));
              return Object(g) === g ? g : f;
            }
            return c.apply(b, d.concat(r.call(arguments)));
          };
        return e;
      }),
    (n.touch = function () {
      var c;
      return (
        "ontouchstart" in a || (a.DocumentTouch && b instanceof DocumentTouch)
          ? (c = !0)
          : t(
              [
                "@media (",
                m.join("touch-enabled),("),
                h,
                ")",
                "{#modernizr{top:9px;position:absolute}}"
              ].join(""),
              function (a) {
                c = a.offsetTop === 9;
              }
            ),
        c
      );
    });
  for (var B in n)
    v(n, B) &&
      ((s = B.toLowerCase()), (e[s] = n[B]()), q.push((e[s] ? "" : "no-") + s));
  return (
    (e.addTest = function (a, b) {
      if (typeof a == "object") for (var d in a) v(a, d) && e.addTest(d, a[d]);
      else {
        a = a.toLowerCase();
        if (e[a] !== c) return e;
        (b = typeof b == "function" ? b() : b),
          typeof f != "undefined" &&
            f &&
            (g.className += " " + (b ? "" : "no-") + a),
          (e[a] = b);
      }
      return e;
    }),
    w(""),
    (i = k = null),
    (e._version = d),
    (e._prefixes = m),
    (e.testStyles = t),
    (g.className =
      g.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") +
      (f ? " js " + q.join(" ") : "")),
    e
  );
})(this, this.document);
Modernizr.addTest("android", function () {
  return !!navigator.userAgent.match(/Android/i);
});
Modernizr.addTest("chrome", function () {
  return !!navigator.userAgent.match(/Chrome/i);
});
Modernizr.addTest("firefox", function () {
  return !!navigator.userAgent.match(/Firefox/i);
});
Modernizr.addTest("iemobile", function () {
  return !!navigator.userAgent.match(/IEMobile/i);
});
Modernizr.addTest("ie", function () {
  return !!navigator.userAgent.match(/MSIE/i);
});
Modernizr.addTest("ie10", function () {
  return !!navigator.userAgent.match(/MSIE 10/i);
});
Modernizr.addTest("ie11", function () {
  return !!navigator.userAgent.match(/Trident.*rv:11\./);
});
Modernizr.addTest("ios", function () {
  return !!navigator.userAgent.match(/iPhone|iPad|iPod/i);
});
Modernizr.addTest("ios7 ipad", function () {
  return !!navigator.userAgent.match(/iPad;.*CPU.*OS 7_\d/i);
});
(function (a, b) {
  "use strict";
  var c = "undefined" != typeof Element && "ALLOW_KEYBOARD_INPUT" in Element,
    d = (function () {
      for (
        var a,
          c,
          d = [
            [
              "requestFullscreen",
              "exitFullscreen",
              "fullscreenElement",
              "fullscreenEnabled",
              "fullscreenchange",
              "fullscreenerror"
            ],
            [
              "webkitRequestFullscreen",
              "webkitExitFullscreen",
              "webkitFullscreenElement",
              "webkitFullscreenEnabled",
              "webkitfullscreenchange",
              "webkitfullscreenerror"
            ],
            [
              "webkitRequestFullScreen",
              "webkitCancelFullScreen",
              "webkitCurrentFullScreenElement",
              "webkitCancelFullScreen",
              "webkitfullscreenchange",
              "webkitfullscreenerror"
            ],
            [
              "mozRequestFullScreen",
              "mozCancelFullScreen",
              "mozFullScreenElement",
              "mozFullScreenEnabled",
              "mozfullscreenchange",
              "mozfullscreenerror"
            ]
          ],
          e = 0,
          f = d.length,
          g = {};
        f > e;
        e++
      )
        if (((a = d[e]), a && a[1] in b)) {
          for (e = 0, c = a.length; c > e; e++) g[d[0][e]] = a[e];
          return g;
        }
      return !1;
    })(),
    e = {
      request: function (a) {
        var e = d.requestFullscreen;
        (a = a || b.documentElement),
          /5\.1[\.\d]* Safari/.test(navigator.userAgent)
            ? a[e]()
            : a[e](c && Element.ALLOW_KEYBOARD_INPUT);
      },
      exit: function () {
        b[d.exitFullscreen]();
      },
      toggle: function (a) {
        this.isFullscreen ? this.exit() : this.request(a);
      },
      onchange: function () {},
      onerror: function () {},
      raw: d
    };
  return d
    ? (Object.defineProperties(e, {
        isFullscreen: {
          get: function () {
            return !!b[d.fullscreenElement];
          }
        },
        element: {
          enumerable: !0,
          get: function () {
            return b[d.fullscreenElement];
          }
        },
        enabled: {
          enumerable: !0,
          get: function () {
            return !!b[d.fullscreenEnabled];
          }
        }
      }),
      b.addEventListener(d.fullscreenchange, function (a) {
        e.onchange.call(e, a);
      }),
      b.addEventListener(d.fullscreenerror, function (a) {
        e.onerror.call(e, a);
      }),
      (a.screenfull = e),
      void 0)
    : (a.screenfull = !1);
})(window, document);
+(function ($) {
  "use strict";
  var Shift = function (element) {
    this.$element = $(element);
    this.$prev = this.$element.prev();
    !this.$prev.length && (this.$parent = this.$element.parent());
  };
  Shift.prototype = {
    constructor: Shift,
    init: function () {
      var $el = this.$element,
        method = $el.data()["toggle"].split(":")[1],
        $target = $el.data("target");
      $el.hasClass("in") || $el[method]($target).addClass("in");
    },
    reset: function () {
      this.$parent && this.$parent["prepend"](this.$element);
      !this.$parent && this.$element["insertAfter"](this.$prev);
      this.$element.removeClass("in");
    }
  };
  $.fn.shift = function (option) {
    return this.each(function () {
      var $this = $(this),
        data = $this.data("shift");
      if (!data) $this.data("shift", (data = new Shift(this)));
      if (typeof option == "string") data[option]();
    });
  };
  $.fn.shift.Constructor = Shift;
})(jQuery);
Date.now =
  Date.now ||
  function () {
    return +new Date();
  };
+(function ($) {
  $(function () {
    $(document).on("click", "[data-toggle=fullscreen]", function (e) {
      if (screenfull.enabled) {
        screenfull.request();
      }
    });
    $("input[placeholder], textarea[placeholder]").placeholder();
    $("[data-toggle=popover]").popover();
    $(document).on("click", ".popover-title .close", function (e) {
      var $target = $(e.target),
        $popover = $target.closest(".popover").prev();
      $popover && $popover.popover("hide");
    });
    $(document).on("click", '[data-toggle="ajaxModal"]', function (e) {
      $("#ajaxModal").remove();
      e.preventDefault();
      var $this = $(this),
        $remote = $this.data("remote") || $this.attr("href"),
        $modal = $(
          '<div class="modal" id="ajaxModal"><div class="modal-body"></div></div>'
        );
      $("body").append($modal);
      $modal.modal();
      $modal.load($remote);
    });
    $.fn.dropdown.Constructor.prototype.change = function (e) {
      e.preventDefault();
      var $item = $(e.target),
        $select,
        $checked = false,
        $menu,
        $label;
      !$item.is("a") && ($item = $item.closest("a"));
      $menu = $item.closest(".dropdown-menu");
      $label = $menu.parent().find(".dropdown-label");
      $labelHolder = $label.text();
      $select = $item.find("input");
      $checked = $select.is(":checked");
      if ($select.is(":disabled")) return;
      if ($select.attr("type") == "radio" && $checked) return;
      if ($select.attr("type") == "radio")
        $menu.find("li").removeClass("active");
      $item.parent().removeClass("active");
      !$checked && $item.parent().addClass("active");
      $select.prop("checked", !$select.prop("checked"));
      $items = $menu.find("li > a > input:checked");
      if ($items.length) {
        $text = [];
        $items.each(function () {
          var $str = $(this).parent().text();
          $str && $text.push($.trim($str));
        });
        $text =
          $text.length < 4 ? $text.join(", ") : $text.length + " selected";
        $label.html($text);
      } else {
        $label.html($label.data("placeholder"));
      }
    };
    $(document).on(
      "click.dropdown-menu",
      ".dropdown-select > li > a",
      $.fn.dropdown.Constructor.prototype.change
    );
    $("[data-toggle=tooltip]").tooltip();
    $(document).on("click", '[data-toggle^="class"]', function (e) {
      e && e.preventDefault();
      var $this = $(e.target),
        $class,
        $target,
        $tmp,
        $classes,
        $targets;
      !$this.data("toggle") &&
        ($this = $this.closest('[data-toggle^="class"]'));
      $class = $this.data()["toggle"];
      $target = $this.data("target") || $this.attr("href");
      $class && ($tmp = $class.split(":")[1]) && ($classes = $tmp.split(","));
      $target && ($targets = $target.split(","));
      $targets &&
        $targets.length &&
        $.each($targets, function (index, value) {
          $targets[index] != "#" &&
            $($targets[index]).toggleClass($classes[index]);
        });
      $this.toggleClass("active");
    });
    $(document).on("click", ".panel-toggle", function (e) {
      e && e.preventDefault();
      var $this = $(e.target),
        $class = "collapse",
        $target;
      if (!$this.is("a")) $this = $this.closest("a");
      $target = $this.closest(".panel");
      $target.find(".panel-body").toggleClass($class);
      $this.toggleClass("active");
    });
    $(".carousel.auto").carousel();
    $(document).on(
      "click.button.data-api",
      "[data-loading-text]",
      function (e) {
        var $this = $(e.target);
        $this.is("i") && ($this = $this.parent());
        $this.button("loading");
      }
    );
    var $window = $(window);
    var mobile = function (option) {
      if (option == "reset") {
        $('[data-toggle^="shift"]').shift("reset");
        return true;
      }
      $('[data-toggle^="shift"]').shift("init");
      return true;
    };
    $window.width() < 768 && mobile();
    var $resize,
      $width = $window.width();
    $window.resize(function () {
      if ($width !== $window.width()) {
        clearTimeout($resize);
        $resize = setTimeout(function () {
          setHeight();
          $window.width() < 767 && mobile();
          $window.width() >= 768 && mobile("reset") && fixVbox();
          $width = $window.width();
        }, 500);
      }
    });
    var setHeight = function () {
      $(".app-fluid #nav > *").css("min-height", $(window).height());
      return true;
    };
    setHeight();
    var fixVbox = function () {
      $(".ie11 .vbox").each(function () {
        $(this).height($(this).parent().height());
      });
    };
    fixVbox();
    $(document).on("click", ".nav-primary a", function (e) {
      var $this = $(e.target),
        $active;
      $this.is("a") || ($this = $this.closest("a"));
      if ($(".nav-vertical").length) {
        return;
      }
      $active = $this.parent().siblings(".active");
      $active &&
        $active.find("> a").toggleClass("active") &&
        $active.toggleClass("active").find("> ul:visible").slideUp(200);
      ($this.hasClass("active") && $this.next().slideUp(200)) ||
        $this.next().slideDown(200);
      $this.toggleClass("active").parent().toggleClass("active");
      $this.next().is("ul") && e.preventDefault();
      setTimeout(function () {
        $(document).trigger("updateNav");
      }, 300);
    });
    $(document).on(
      "click.bs.dropdown.data-api",
      ".dropdown .on, .dropup .on",
      function (e) {
        e.stopPropagation();
      }
    );
  });
})(jQuery);
(function (f) {
  jQuery.fn.extend({
    slimScroll: function (h) {
      var a = f.extend(
        {
          width: "auto",
          height: "250px",
          size: "7px",
          color: "#000",
          position: "right",
          distance: "1px",
          start: "top",
          opacity: 0.4,
          alwaysVisible: !1,
          disableFadeOut: !1,
          railVisible: !1,
          railColor: "#333",
          railOpacity: 0.2,
          railDraggable: !0,
          railClass: "slimScrollRail",
          barClass: "slimScrollBar",
          wrapperClass: "slimScrollDiv",
          allowPageScroll: !1,
          wheelStep: 20,
          touchScrollStep: 200,
          borderRadius: "7px",
          railBorderRadius: "7px"
        },
        h
      );
      this.each(function () {
        function r(d) {
          if (s) {
            d = d || window.event;
            var c = 0;
            d.wheelDelta && (c = -d.wheelDelta / 120);
            d.detail && (c = d.detail / 3);
            f(d.target || d.srcTarget || d.srcElement)
              .closest("." + a.wrapperClass)
              .is(b.parent()) && m(c, !0);
            d.preventDefault && !k && d.preventDefault();
            k || (d.returnValue = !1);
          }
        }
        function m(d, f, h) {
          k = !1;
          var e = d,
            g = b.outerHeight() - c.outerHeight();
          f &&
            ((e =
              parseInt(c.css("top")) +
              ((d * parseInt(a.wheelStep)) / 100) * c.outerHeight()),
            (e = Math.min(Math.max(e, 0), g)),
            (e = 0 < d ? Math.ceil(e) : Math.floor(e)),
            c.css({ top: e + "px" }));
          l = parseInt(c.css("top")) / (b.outerHeight() - c.outerHeight());
          e = l * (b[0].scrollHeight - b.outerHeight());
          h &&
            ((e = d),
            (d = (e / b[0].scrollHeight) * b.outerHeight()),
            (d = Math.min(Math.max(d, 0), g)),
            c.css({ top: d + "px" }));
          b.scrollTop(e);
          b.trigger("slimscrolling", ~~e);
          v();
          p();
        }
        function C() {
          window.addEventListener
            ? (this.addEventListener("DOMMouseScroll", r, !1),
              this.addEventListener("mousewheel", r, !1),
              this.addEventListener("MozMousePixelScroll", r, !1))
            : document.attachEvent("onmousewheel", r);
        }
        function w() {
          u = Math.max(
            (b.outerHeight() / b[0].scrollHeight) * b.outerHeight(),
            D
          );
          c.css({ height: u + "px" });
          var a = u == b.outerHeight() ? "none" : "block";
          c.css({ display: a });
        }
        function v() {
          w();
          clearTimeout(A);
          l == ~~l
            ? ((k = a.allowPageScroll),
              B != l && b.trigger("slimscroll", 0 == ~~l ? "top" : "bottom"))
            : (k = !1);
          B = l;
          u >= b.outerHeight()
            ? (k = !0)
            : (c.stop(!0, !0).fadeIn("fast"),
              a.railVisible && g.stop(!0, !0).fadeIn("fast"));
        }
        function p() {
          a.alwaysVisible ||
            (A = setTimeout(function () {
              (a.disableFadeOut && s) ||
                x ||
                y ||
                (c.fadeOut("slow"), g.fadeOut("slow"));
            }, 1e3));
        }
        var s,
          x,
          y,
          A,
          z,
          u,
          l,
          B,
          D = 30,
          k = !1,
          b = f(this);
        if (b.parent().hasClass(a.wrapperClass)) {
          var n = b.scrollTop(),
            c = b.parent().find("." + a.barClass),
            g = b.parent().find("." + a.railClass);
          w();
          if (f.isPlainObject(h)) {
            if ("height" in h && "auto" == h.height) {
              b.parent().css("height", "auto");
              b.css("height", "auto");
              var q = b.parent().parent().height();
              b.parent().css("height", q);
              b.css("height", q);
            }
            if ("scrollTo" in h) n = parseInt(a.scrollTo);
            else if ("scrollBy" in h) n += parseInt(a.scrollBy);
            else if ("destroy" in h) {
              c.remove();
              g.remove();
              b.unwrap();
              return;
            }
            m(n, !1, !0);
          }
        } else {
          a.height = "auto" == a.height ? b.parent().height() : a.height;
          n = f("<div></div>")
            .addClass(a.wrapperClass)
            .css({
              position: "relative",
              overflow: "hidden",
              width: a.width,
              height: a.height
            });
          b.css({ overflow: "hidden", width: a.width, height: a.height });
          var g = f("<div></div>")
              .addClass(a.railClass)
              .css({
                width: a.size,
                height: "100%",
                position: "absolute",
                top: 0,
                display: a.alwaysVisible && a.railVisible ? "block" : "none",
                "border-radius": a.railBorderRadius,
                background: a.railColor,
                opacity: a.railOpacity,
                zIndex: 90
              }),
            c = f("<div></div>")
              .addClass(a.barClass)
              .css({
                background: a.color,
                width: a.size,
                position: "absolute",
                top: 0,
                opacity: a.opacity,
                display: a.alwaysVisible ? "block" : "none",
                "border-radius": a.borderRadius,
                BorderRadius: a.borderRadius,
                MozBorderRadius: a.borderRadius,
                WebkitBorderRadius: a.borderRadius,
                zIndex: 99
              }),
            q =
              "right" == a.position
                ? { right: a.distance }
                : { left: a.distance };
          g.css(q);
          c.css(q);
          b.wrap(n);
          b.parent().append(c);
          b.parent().append(g);
          a.railDraggable &&
            c
              .bind("mousedown", function (a) {
                var b = f(document);
                y = !0;
                t = parseFloat(c.css("top"));
                pageY = a.pageY;
                b.bind("mousemove.slimscroll", function (a) {
                  currTop = t + a.pageY - pageY;
                  c.css("top", currTop);
                  m(0, c.position().top, !1);
                });
                b.bind("mouseup.slimscroll", function (a) {
                  y = !1;
                  p();
                  b.unbind(".slimscroll");
                });
                return !1;
              })
              .bind("selectstart.slimscroll", function (a) {
                a.stopPropagation();
                a.preventDefault();
                return !1;
              });
          g.hover(
            function () {
              v();
            },
            function () {
              p();
            }
          );
          c.hover(
            function () {
              x = !0;
            },
            function () {
              x = !1;
            }
          );
          b.hover(
            function () {
              s = !0;
              v();
              p();
            },
            function () {
              s = !1;
              p();
            }
          );
          b.bind("touchstart", function (a, b) {
            a.originalEvent.touches.length &&
              (z = a.originalEvent.touches[0].pageY);
          });
          b.bind("touchmove", function (b) {
            k || b.originalEvent.preventDefault();
            b.originalEvent.touches.length &&
              (m(
                (z - b.originalEvent.touches[0].pageY) / a.touchScrollStep,
                !0
              ),
              (z = b.originalEvent.touches[0].pageY));
          });
          w();
          "bottom" === a.start
            ? (c.css({ top: b.outerHeight() - c.outerHeight() }), m(0, !0))
            : "top" !== a.start &&
              (m(f(a.start).position().top, null, !0),
              a.alwaysVisible || c.hide());
          C();
        }
      });
      return this;
    }
  });
  jQuery.fn.extend({ slimscroll: jQuery.fn.slimScroll });
})(jQuery);

</script>
</html>
