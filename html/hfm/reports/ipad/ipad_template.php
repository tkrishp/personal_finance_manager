<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>iPad/iPhone/mobile HTML/CSS template for web apps</TITLE><!--
iPad minimal web app HTML/CSS template (Responsive Web Design, no JS required)

@author Xavi Esteve
@website http://xaviesteve.com/2899/ipad-iphone-mobile-html-css-template-for-web-apps/
@version 1.0
@Last Updated: 31 January 2012
@license Public Domain (free + no need to attribute, I'd be glad if you send me a link to your creation)


Notes:
- Header position bug when scrolling: When you scroll down, the header may move to the middle of the screen. Fix it by removing the # from the URL.

-->
<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
<META name=viewport
content="width=device-width, initial-scale=1.0, maximum-scale=1.0"><LINK
rel=apple-touch-icon href="favicon-114.png">
<META name=apple-mobile-web-app-capable content=yes><!-- hide top bar in mobile safari--><!--<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" /> translucent top bar --><!--<link rel="stylesheet" type="text/css" media="screen" href="style.css" />--><LINK
rel="shortcut icon" href="/favicon.ico">
<STYLE type=text/css>
HTML {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
BODY {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
DIV {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
SPAN {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
APPLET {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
OBJECT {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
IFRAME {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
H1 {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
H2 {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
H3 {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
H4 {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
H5 {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
H6 {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
P {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
BLOCKQUOTE {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
PRE {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
A {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
ABBR {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
ACRONYM {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
ADDRESS {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
BIG {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
CITE {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
CODE {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
DEL {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
DFN {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
EM {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
IMG {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
INS {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
KBD {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
Q {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
S {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
SAMP {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
SMALL {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
STRIKE {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
STRONG {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
SUB {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
SUP {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
TT {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
VAR {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
B {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
U {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
I {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
CENTER {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
DL {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
DT {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
DD {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
OL {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
UL {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
LI {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
FIELDSET {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
FORM {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
LABEL {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
LEGEND {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
TABLE {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
CAPTION {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
TBODY {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
TFOOT {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
THEAD {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
TR {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
TH {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
TD {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
article {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
aside {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
canvas {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
details {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
EMBED {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
figure {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
figcaption {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
footer {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
header {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
hgroup {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
MENU {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
nav {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
output {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
RUBY {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
section {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
summary {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
time {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
mark {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
audio {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
video {
	BORDER-BOTTOM: 0px;
	BORDER-LEFT: 0px;
	PADDING-BOTTOM: 0px;
	MARGIN: 0px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	FONT: inherit;
	VERTICAL-ALIGN: baseline;
	BORDER-TOP: 0px;
	BORDER-RIGHT: 0px;
	PADDING-TOP: 0px
}
article {
	DISPLAY: block
}
aside {
	DISPLAY: block
}
details {
	DISPLAY: block
}
figcaption {
	DISPLAY: block
}
figure {
	DISPLAY: block
}
footer {
	DISPLAY: block
}
header {
	DISPLAY: block
}
hgroup {
	DISPLAY: block
}
MENU {
	DISPLAY: block
}
nav {
	DISPLAY: block
}
section {
	DISPLAY: block
}
BODY {
	LINE-HEIGHT: 1
}
OL {
	LIST-STYLE-TYPE: none;
	LIST-STYLE-IMAGE: none
}
UL {
	LIST-STYLE-TYPE: none;
	LIST-STYLE-IMAGE: none
}
BLOCKQUOTE {
	QUOTES: none
}
Q {
	QUOTES: none
}
BLOCKQUOTE:before {
	CONTENT: none
}
BLOCKQUOTE:after {
	CONTENT: none
}
Q:before {
	CONTENT: none
}
Q:after {
	CONTENT: none
}
TABLE {
	BORDER-SPACING: 0;
	BORDER-COLLAPSE: collapse
}
STRONG {
	FONT-WEIGHT: bold
}
.strong {
	FONT-WEIGHT: bold
}
.center {
	TEXT-ALIGN: center
}
.header {
	BORDER-BOTTOM: #000 1px solid;
	POSITION: fixed;
	TEXT-ALIGN: center;
	FILTER: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#aeb2be',GradientType=0 );
	BACKGROUND: #aeb2be;
	HEIGHT: 43px;
	TOP: 0px;
	LEFT: 0px
}
.header .title {
	MARGIN-TOP: 10px;
	COLOR: #71787f;
	FONT-SIZE: 18px;
	FONT-WEIGHT: bold;
	text-shadow: 0 1px 1px #fff
}
HTML {
	FONT: 16px normal Helvetica, sans-serif;
	BACKGROUND: #d8dae0;
	-webkit-user-select: none
}
#wrap {
	FONT: 16px normal Helvetica, sans-serif;
	BACKGROUND: #d8dae0;
	-webkit-user-select: none
}
#main {
	POSITION: relative;
	PADDING-BOTTOM: 20px;
	PADDING-LEFT: 320px;
	PADDING-RIGHT: 20px;
	BACKGROUND: #d8dae0;
	HEIGHT: 100%;
	VERTICAL-ALIGN: top;
	PADDING-TOP: 63px
}
#main .header {
	PADDING-LEFT: 155px;
	WIDTH: 100%
}
#main .header .left {
	BORDER-BOTTOM: #6d6d6d 1px solid;
	POSITION: fixed;
	FILTER: progid:DXImageTransform.Microsoft.gradient( startColorstr='#999999', endColorstr='#333333',GradientType=0 );
	BORDER-LEFT: #6d6d6d 1px solid;
	PADDING-BOTTOM: 5px;
	PADDING-LEFT: 8px;
	PADDING-RIGHT: 8px;
	BACKGROUND: #7a8091;
	COLOR: #fff;
	FONT-SIZE: 12px;
	BORDER-TOP: #6d6d6d 1px solid;
	TOP: 9px;
	BORDER-RIGHT: #6d6d6d 1px solid;
	TEXT-DECORATION: none;
	PADDING-TOP: 5px;
	LEFT: 310px;
	border-radius: 5px
}
#main .header .right {
	BORDER-BOTTOM: #6d6d6d 1px solid;
	POSITION: fixed;
	FILTER: progid:DXImageTransform.Microsoft.gradient( startColorstr='#999999', endColorstr='#333333',GradientType=0 );
	BORDER-LEFT: #6d6d6d 1px solid;
	PADDING-BOTTOM: 5px;
	PADDING-LEFT: 8px;
	PADDING-RIGHT: 8px;
	BACKGROUND: #7a8091;
	COLOR: #fff;
	FONT-SIZE: 12px;
	BORDER-TOP: #6d6d6d 1px solid;
	TOP: 9px;
	BORDER-RIGHT: #6d6d6d 1px solid;
	TEXT-DECORATION: none;
	PADDING-TOP: 5px;
	LEFT: 310px;
	border-radius: 5px
}
#main .header .title {

}
#main .header .right {
	RIGHT: 10px;
	LEFT: auto
}
#main .content {

}
#main .content > :first-child {
	MARGIN-TOP: 0px !important
}
#main .content .title {
	MARGIN: 20px 0px 10px;
	FONT-SIZE: 18px;
	FONT-WEIGHT: bold
}
#main .content .title2 {
	MARGIN: 20px 0px 10px;
	COLOR: #4c536c;
	FONT-SIZE: 16px;
	FONT-WEIGHT: bold
}
#main .content .title3 {

}
#main .content .title4 {

}
#main .content .title5 {

}
#main .content > P {
	MARGIN: 10px 0px;
	COLOR: #4c536c;
	text-shadow: 0 1px 1px #ccc
}
#main .content P.note {
	TEXT-ALIGN: center;
	COLOR: #4c536c;
	FONT-SIZE: 12px;
	text-shadow: 0 1px 1px #ccc
}
#main .content .box-white {
	BORDER-BOTTOM: #b4b7bb 1px solid;
	BORDER-LEFT: #b4b7bb 1px solid;
	BACKGROUND: #fff;
	BORDER-TOP: #b4b7bb 1px solid;
	BORDER-RIGHT: #b4b7bb 1px solid;
	border-radius: 10px
}
#main .content .box-white P {
	BORDER-BOTTOM: #b4b7bb 1px solid;
	PADDING-BOTTOM: 10px;
	MARGIN: 0px;
	PADDING-LEFT: 10px;
	PADDING-RIGHT: 10px;
	COLOR: #000;
	FONT-WEIGHT: bold;
	PADDING-TOP: 10px
}
#main .content .box-white P SPAN {
	FLOAT: right;
	COLOR: #4c556c;
	FONT-WEIGHT: normal
}
#main .content .box-white P SPAN.detail {
	FLOAT: none;
	COLOR: #999;
	MARGIN-LEFT: 5px;
	FONT-SIZE: 12px
}
#main .content .box-white P SPAN.arrow {
	FONT-FAMILY: monospace;
	FLOAT: none;
	COLOR: #666;
	MARGIN-LEFT: 5px;
	FONT-WEIGHT: bold;
	text-shadow: 0 1px 1px #666
}
#main TABLE {
	MARGIN: 20px 0px 10px;
	WIDTH: 100%
}
#main TABLE THEAD TH {
	TEXT-ALIGN: left;
	PADDING-BOTTOM: 10px;
	MARGIN: 20px 0px 10px;
	COLOR: #848b9a;
	FONT-SIZE: 90%;
	FONT-WEIGHT: normal
}
#main TABLE THEAD TH:first-child {
	COLOR: #000;
	FONT-SIZE: 16px;
	FONT-WEIGHT: bold
}
#main TABLE TBODY {
	BORDER-BOTTOM: #b4b7bb 1px solid;
	BORDER-LEFT: #b4b7bb 1px solid;
	BACKGROUND: #fff;
	BORDER-TOP: #b4b7bb 1px solid;
	BORDER-RIGHT: #b4b7bb 1px solid;
	border-radius: 10px
}
#main TABLE TBODY TR {
	BORDER-BOTTOM: #b4b7bb 1px solid
}
#main TABLE TBODY TR TD {
	PADDING-BOTTOM: 10px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	COLOR: #4c556c;
	PADDING-TOP: 10px
}
#main TABLE TBODY TR TD:first-child {
	PADDING-LEFT: 10px;
	COLOR: #000
}
#main TABLE TBODY {
	BORDER-SPACING: 0
}
#main TABLE TBODY TR {
	BORDER-BOTTOM: #b4b7bb 1px solid;
	BORDER-LEFT: #b4b7bb 1px solid;
	BORDER-TOP: #b4b7bb 1px solid;
	BORDER-RIGHT: #b4b7bb 1px solid;
	border-radius: 10px
}
#main TABLE TBODY TR:first-child TD:first-child {
	border-top-left-radius: 10px
}
A {
	COLOR: #0085d5;
	TEXT-DECORATION: none;
	-webkit-touch-callout: none
}
#main .content .box-white P A {
	PADDING-BOTTOM: 10px;
	MARGIN: -10px;
	PADDING-LEFT: 10px;
	PADDING-RIGHT: 10px;
	DISPLAY: block;
	PADDING-TOP: 10px
}
#main .content TABLE A {
	PADDING-BOTTOM: 10px;
	MARGIN: -10px;
	PADDING-LEFT: 10px;
	PADDING-RIGHT: 10px;
	DISPLAY: block;
	PADDING-TOP: 10px
}
#main .content P LABEL {
	WIDTH: 15%
}
#main .content P INPUT[type=text] {
	BORDER-BOTTOM: medium none;
	BORDER-LEFT: medium none;
	MARGIN-TOP: -1px;
	WIDTH: 84%;
	BACKGROUND: none transparent scroll repeat 0% 0%;
	FLOAT: right;
	COLOR: #4c556c;
	FONT-SIZE: 14px;
	BORDER-TOP: medium none;
	BORDER-RIGHT: medium none
}
#main .content P INPUT[type=password] {
	BORDER-BOTTOM: medium none;
	BORDER-LEFT: medium none;
	MARGIN-TOP: -1px;
	WIDTH: 84%;
	BACKGROUND: none transparent scroll repeat 0% 0%;
	FLOAT: right;
	COLOR: #4c556c;
	FONT-SIZE: 14px;
	BORDER-TOP: medium none;
	BORDER-RIGHT: medium none
}
#main .content P SELECT {
	BORDER-BOTTOM: medium none;
	BORDER-LEFT: medium none;
	MARGIN-TOP: -1px;
	WIDTH: 84%;
	BACKGROUND: none transparent scroll repeat 0% 0%;
	FLOAT: right;
	COLOR: #4c556c;
	FONT-SIZE: 14px;
	BORDER-TOP: medium none;
	BORDER-RIGHT: medium none
}
#main .content P SELECT {
	MARGIN-RIGHT: 15px
}
#main .content .button {
	BORDER-BOTTOM: #999 1px solid;
	BORDER-LEFT: #999 1px solid;
	PADDING-BOTTOM: 8px;
	PADDING-LEFT: 8px;
	WIDTH: 100%;
	PADDING-RIGHT: 8px;
	COLOR: #fff;
	FONT-SIZE: 16px;
	BORDER-TOP: #999 1px solid;
	CURSOR: pointer;
	FONT-WEIGHT: bold;
	BORDER-RIGHT: #999 1px solid;
	PADDING-TOP: 8px;
	border-radius: 5px
}
#main .content .red.button {
	BORDER-BOTTOM-COLOR: #9a8185;
	FILTER: progid:DXImageTransform.Microsoft.gradient( startColorstr='#d58e94', endColorstr='#90191b',GradientType=0 );
	BORDER-TOP-COLOR: #9a8185;
	BACKGROUND: #d42e32;
	BORDER-RIGHT-COLOR: #9a8185;
	BORDER-LEFT-COLOR: #9a8185
}
#sidebar {
	Z-INDEX: 1;
	POSITION: fixed;
	WIDTH: 300px;
	BACKGROUND: #bcbec4;
	HEIGHT: 100%;
	VERTICAL-ALIGN: top;
	TOP: 0px;
	BORDER-RIGHT: #000 1px solid;
	LEFT: 0px
}
#sidebar .header {
	WIDTH: 300px
}
#sidebar .header .title {

}
#sidebar .content {
	PADDING-BOTTOM: 20px;
	PADDING-LEFT: 0px;
	PADDING-RIGHT: 0px;
	PADDING-TOP: 43px
}
#sidebar .content .nav {

}
#sidebar .content .nav A {
	BORDER-BOTTOM: #d0d3d7 1px solid;
	PADDING-BOTTOM: 16px;
	PADDING-LEFT: 10px;
	PADDING-RIGHT: 10px;
	DISPLAY: block;
	BACKGROUND: #d9dce0;
	HEIGHT: 17px;
	COLOR: #000;
	BORDER-TOP: #e7eaed 1px solid;
	FONT-WEIGHT: 900;
	TEXT-DECORATION: none;
	PADDING-TOP: 12px
}
#sidebar .content .nav A.active {
	FILTER: progid:DXImageTransform.Microsoft.gradient( startColorstr='#058CF5', endColorstr='#015DE6',GradientType=0 );
	BACKGROUND: #0375ee;
	COLOR: #fff;
	BORDER-TOP: #015de6 1px solid;
	text-shadow: 0 1px 1px #333
}
#sidebar .content .nav A SPAN {
	FLOAT: right;
	COLOR: #4c556c;
	FONT-WEIGHT: normal
}
#sidebar .content .nav A.active SPAN {
	COLOR: #fff
}
#sidebar .content .nav A .ico {
	MARGIN: -5px 10px 0px 0px;
	WIDTH: 28px;
	DISPLAY: inline-block;
	BACKGROUND: #999;
	FLOAT: none;
	HEIGHT: 28px;
	VERTICAL-ALIGN: middle;
	border-radius: 5px
}
#sidebar .content .nav A .info {
	BORDER-BOTTOM: #c00 1px solid;
	BORDER-LEFT: #c00 1px solid;
	PADDING-BOTTOM: 1px;
	PADDING-LEFT: 5px;
	PADDING-RIGHT: 5px;
	DISPLAY: block;
	BACKGROUND: #e20000;
	COLOR: white;
	FONT-SIZE: 12px;
	BORDER-TOP: #c00 1px solid;
	BORDER-RIGHT: #c00 1px solid;
	PADDING-TOP: 1px;
	border-radius: 100%;
	box-shadow: 0 1px 1px #999
}
#sidebar .content P {
	PADDING-BOTTOM: 10px;
	PADDING-LEFT: 10px;
	PADDING-RIGHT: 10px;
	COLOR: #4c536c;
	FONT-SIZE: 14px;
	PADDING-TOP: 10px;
	text-shadow: 0 1px 1px #ccc
}
</STYLE>

<META name=GENERATOR content="MSHTML 8.00.6001.19222"></HEAD>
<BODY>
<DIV id=wrap>
<DIV id=main>
<DIV class=header><A class=left
href="http://xaviesteve.com/pro/ipad-template/?">Back</A>
<H1 class=title>Section title</H1><A class=right
href="http://xaviesteve.com/pro/ipad-template/?">Edit</A> </DIV><!--header-->
<DIV class=content>
<H2 class=title>Heading first</H2>
<DIV class=box-white>
<P>Lorem ipsum <SPAN class=detail>Details
here</SPAN><SPAN>Dolor</SPAN></P></DIV><!--box-white-->
<H2 class=title2>Heading second</H2>
<P>This is a normal paragraph to add any text you like.</P>
<DIV class=box-white>
<P>Parameter <SPAN>Value</SPAN></P>
<P><A href="http://xaviesteve.com/pro/ipad-template/?">Clickable row<SPAN>Click
me <SPAN class=arrow>&gt;</SPAN></SPAN></A></P>
<P>Foo <SPAN>Bar</SPAN></P>
<P>Lorem ipsum <SPAN><A href="http://xaviesteve.com/pro/ipad-template/?">Click
only this</A></SPAN></P></DIV><!--box-white-->
<TABLE>
  <THEAD>
  <TR>
    <TH>Table heading</TH>
    <TH>Tweets</TH>
    <TH>Following</TH>
    <TH>Followers</TH></TR></THEAD>
  <TBODY>
  <TR>
    <TD><A href="http://xaviesteve.com/pro/ipad-template/?">@xaviesteve</A></TD>
    <TD><A href="http://xaviesteve.com/pro/ipad-template/?">Click</A></TD>
    <TD>131</TD>
    <TD>195</TD></TR>
  <TR>
    <TD>@xaviesteve</TD>
    <TD>622</TD>
    <TD><A href="http://xaviesteve.com/pro/ipad-template/?">Click</A></TD>
    <TD>195</TD></TR>
  <TR>
    <TD>@xaviesteve</TD>
    <TD>622</TD>
    <TD>131</TD>
    <TD><A
  href="http://xaviesteve.com/pro/ipad-template/?">Click</A></TD></TR></TBODY></TABLE>
<P class=note>You can follow me on Twitter for updates on this template at <A
href="http://www.twitter.com/xaviesteve">@xaviesteve</A>.</P>
<H2 class=title>Heading first</H2>
<DIV class=box-white>
<P class=center>Centered text in a white box</P></DIV><!--box-white-->
<H2 class=title2>Account details</H2>
<P>Me got forms too:</P>
<DIV class=box-white>
<P><LABEL for=field1>Apple ID</LABEL><INPUT id=field1 value=xavi@example.com
type=text></P>
<P><LABEL for=field2>Password</LABEL><INPUT id=field2 value=xavixavi
type=password></P>
<P><LABEL for=field3>Country</LABEL><SELECT id=field3><OPTION
  selected>Spain</OPTION><OPTION>United Kingdom</OPTION></SELECT></P></DIV>
<P><INPUT class="button red" value="Delete Account" type=submit></P></DIV><!--content--></DIV><!--main-->
<DIV id=sidebar>
<DIV class=header>
<P class=title>iOS web app template</P></DIV><!--header-->
<DIV class=content>
<UL class=nav>
  <LI><A href="http://xaviesteve.com/pro/ipad-template/?"><SPAN
  class="ico msg"></SPAN>Normal item</A></LI>
  <LI><A class=active href="http://xaviesteve.com/pro/ipad-template/?"><SPAN
  class="ico msg"></SPAN>Active section</A></LI>
  <LI><A href="http://xaviesteve.com/pro/ipad-template/?"><SPAN
  class="ico msg"></SPAN>Red circle<SPAN class=info>5</SPAN></A></LI>
  <LI><A href="http://xaviesteve.com/pro/ipad-template/?"><SPAN
  class="ico msg"></SPAN>Status indicator <SPAN>On</SPAN></A></LI></UL>
<P>iPad/iPhone template by <A class=strong href="http://xaviesteve.com/">Xavi
Esteve</A> made in pure HTML and CSS (without requiring JavaScript) that works
perfectly on any modern browser. It uses responsive queries to hide the sidebar
in iPad portrait mode and in the iPhone (you can disable that easily if you want
to).</P>
<P>The code has been developed so that there is no "divitis", completely
optimized and minimal HTML code. There are no images or animations at all,
everything has been coded using the latest CSS3 available features. Ready to
download and start developing. These are some of the template's features:</P>
<P><STRONG>App-ready:</STRONG> You can install this template as a normal app,
removing the Safari top navigation bar and enjoying the full screen.</P>
<P><STRONG>Responsive:</STRONG> Hides the sidebar in iPhone, mobiles and iPad
portrait mode.</P>
<P><STRONG>Heading styles:</STRONG> Two different heading styles: the main black
one and the smaller blueish.</P>
<P><STRONG>Anchor texts (links):</STRONG> The whole clickable area is active so
that even fat fingers can click comfortably.</P>
<P><STRONG>Scrollable:</STRONG> Both the sidebar and the main content can be
scrolled separately.</P>
<P><STRONG>Tables:</STRONG> Fully flexible and liquid tables that allow you to
include more information while keeping the same look and feel as in any Apple
app.</P>
<P><STRONG>Forms:</STRONG> Fillable text and password fields, select dropdowns
and buttons.</P>
<P><STRONG>Tested in:</STRONG> iPhone 4, iPhone 3GS, iPad 2, Safari 5, Chrome 16
and Firefox 9.</P>
<P><STRONG>License:</STRONG> Public Domain. It is free to use (commercially too)
and you do not need to give me credits although I would appreciate them. It'll
make my day if you send me a link to your creation.</P>
<P>To download the most recent version of this template visit <A class=strong
href="http://xaviesteve.com/2899/ipad-iphone-mobile-html-css-template-for-web-apps/">xaviesteve.com</A>.</P></DIV><!--content--></DIV><!--sidebar--></DIV><!--wrap--><!--<script type="text/javascript" src="script.js">--></BODY></HTML>

