<?php
/**
 * User dashboard CSS
 */
?>

<style>
    /* reset */
body, div, p, h1, h2, a, span, img, ul, li { margin: 0; padding: 10; }
ul { list-style: none; }

/* webfonts */
@font-face { font-family: 'OpenSansLight'; src: url('../webfonts/opensans-light-webfont.eot'); src: url('../webfonts/opensans-light-webfont.eot?#iefix') format('embedded-opentype'), url('../webfonts/opensans-light-webfont.woff') format('woff'), url('../webfonts/opensans-light-webfont.ttf') format('truetype'), url('../webfonts/opensans-light-webfont.svg#OpenSansLight') format('svg'); font-weight: normal; font-style: normal; }

/* general */
html, body { width: 100%; height: 100%;}
html { color: #fff; }
body {  }
a, a img { border: none; }
img, object, embed { max-width: 100%; height: auto; }
.clearfix:before, .clearfix:after { content: ""; display: table; }
.clearfix:after { clear: both; }
.clearfix { zoom: 1; }

/* metro layout */
.metro-layout { width: 100%; height: 100%; }
.metro-layout .header { height: 20%; position: relative; }
.metro-layout .header h1 { position: absolute; top: 50%; margin-top: -0.6em; left: 20px; padding-left: 0.1em; font-size: 3em; line-height: 1em; }
.metro-layout .header .controls { position: absolute; top: 50%; height: 48px; margin-top: -24px; right: 20px; }
.metro-layout .header .controls span { float: right; width: 48px; height: 48px; margin-left: 5px; opacity: 0.25; filter: alpha(opacity=25); cursor: pointer; background: url(../images/sprite.png) no-repeat -999px 0; }
.metro-layout .header .controls span:hover { opacity: 1; filter: none; }
.metro-layout .header .controls span.prev { background-position: 0 0; }
.metro-layout .header .controls span.next { background-position: -48px 0; }
.horizontal .header .controls span.toggle-view { background-position: -96px 0; }
.vertical .header .controls span.toggle-view { background-position: -144px 0; }
.metro-layout .header .controls span.up { background-position: -192px 0; }
.metro-layout .header .controls span.down { background-position: -240px 0; }
.horizontal .header .controls span.up, .horizontal .header .controls span.down, .vertical .header .controls span.prev, .vertical .header .controls span.next { display: none; }
.metro-layout .content { height: 80%; overflow: hidden; }
.metro-layout .content .items { padding: 0 20px; position: relative; overflow: hidden; }
.horizontal .content .items { height: 97%; }
.vertical .content .items { padding-bottom: 20px; }
.metro-layout .box { float: left; position: relative; margin: 0.5em; padding: 0.5em; background: #555; width: 15em; height: 8em; text-decoration: none; cursor: pointer; overflow: hidden; color: #fff; background: #00a8ec; z-index: 9; }
.metro-layout .box:hover { opacity: 0.85; filter: alpha(opacity=85); }

.metro-layout .box img.icon { position: absolute; left: 50%; top: 50%; margin-left: -32px; margin-top: -32px; z-index: 7; }
.metro-layout .box img.big { margin-left: -64px; margin-top: -64px; }
.metro-layout .box img.cover { position: absolute; left: 0; top: 0; width: 100%; z-index: 6; }
.metro-layout .width2 { width: 32em; }
.metro-layout .width3 { width: 49em; }
.metro-layout .width4 { width: 66em; }
.metro-layout .height2 { height: 18em; }
.metro-layout .height3 { height: 28em; }
.metro-layout .height4 { height: 38em; }

@media screen and (-webkit-min-device-pixel-ratio:0) {
	.metro-layout .content { overflow: auto; }
	::-webkit-scrollbar { width: 10px; height: 10px; }
	::-webkit-scrollbar-track:enabled { background-color: #0d0d0d; }
	::-webkit-scrollbar-thumb:vertical { background-color: #fff; }
	::-webkit-scrollbar-thumb:horizontal { background-color: #fff; }
}

::selection { background: #158ca0; color: #fff; }
::-moz-selection { background: #158ca0; color: #fff; }

/* mobile support */
@media handheld, only screen and (max-width: 1024px){
	.metro-layout .header h1 { font-size: 2.2em; margin-top: -0.5em; }
}
/* mobile support */
@media handheld, only screen and (max-width: 480px){
	.metro-layout .header { position: relative; text-align: center; }
	.metro-layout .header h1 { left: 5px; font-size: 1.5em; margin-top: -0.5em; }
	.metro-layout .header .controls { position: static; width: 100%; height: auto; margin-top: 0; }
	.metro-layout .header .controls span { display: none !important; }
	.metro-layout .content .items { padding: 0 5px; }
	.vertical .content .items { padding-bottom: 0; }
}
     
     
     
.metro-layout .box span { position: absolute; bottom: 0.5em; 
           font-weight: normal; z-index: 8; }
.super-dashboard-elgg-icon{

    position: absolute;
    left: 50%;
    top: 50%;
    margin-left: -32px;
    margin-top: -32px;
    z-index: 7;
    font-size:56px;
    
}
</style>