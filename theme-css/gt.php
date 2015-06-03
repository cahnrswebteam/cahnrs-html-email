/* CLIENT-SPECIFIC STYLES */
.ReadMsgBody {/* Force Hotmail to display emails at full width */
	width: 100%;
}
.ExternalClass {/* Force Hotmail to display emails at full width */
	width: 100%;
}
.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {/* Force Hotmail to display normal line spacing */
	line-height: 100%;
}
body, table, td, p, a, li, blockquote {/* Prevent WebKit and Windows mobile changing default text sizes */
	-webkit-text-size-adjust: 100%; 
	-ms-text-size-adjust: 100%;
}
table, td {/* Remove spacing between tables in Outlook 2007 and up */
	mso-table-lspace: 0pt;
	mso-table-rspace: 0pt;
}
img {/* Allow smoother rendering of resized image in Internet Explorer */
	-ms-interpolation-mode: bicubic;
}
/* RESET STYLES */
img {
	border: 0;
	height: auto;
	line-height: 100%;
	outline: none;
	text-decoration: none;
}
table {
	border-collapse: collapse !important;
}
/* LAYOUT */
body {
	background-color: #363637;
	margin: 0;
	padding: 0;
}
.row {
	width: 100% !important;
}
.column-1 {
	border-right: 1px solid #b5babe;
	padding: 0 20px 20px 0;
	vertical-align: top;
	width: 503px !important;
}
.column-2 {
	padding: 0 0 20px 20px;
	vertical-align: top;
	width: 166px !important;
}
td.promo.content,
td.promo.image {
	padding-top: 20px;
	text-align: left;
}
.column-1 .item:first-of-type > tbody > tr:first-child > td.promo.content,
.column-1 .item:first-of-type > tbody > tr:first-child > td.promo.image {
	padding-top: 0;
}
td.promo.image {
  padding-right: 20px;
  width: 150px;
}
td.feed.promo.image img {
	max-width: 150px !important;
}
#row-200 {
	display: none;
}
/* TYPE STYLES */
.column-1 a,
.column-2 a {
	color: #b0aa1f;
	outline: none;
	text-decoration: none;
}
h1 {
	color: #555555;
	font-size: 20px;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 10px;
	margin-left: 0;
	text-align: left;
}
h2, .column-1 h3 {
	color: #b0aa1f;
	font-size: 18px;
	font-weight: normal;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 10px;
	margin-left: 0;
	text-align: left;
	text-transform: uppercase;
}
h2 a,
.column-1 h3 a,
.column-2 a {
	color: #b0aa1f;
}
h3 {
	color: #555555;
	font-size: 16px;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 10px;
	margin-left: 0;
	text-align: left;
}
h4 {
	color: #808080;
	font-size: 14px;
	margin-top: 0;
	margin-right: 0;
	margin-bottom: 10px;
	margin-left: 0;
	text-align: left;
}
p {
	color: #5e6a71;
	font-size: 14px;
	line-height: 20px;
	text-align: left;
}
/* MORE LINK */
td.read-more {
	border-bottom: 1px solid #b5babe;
}
td.read-more table {
	background: #363637;
}
td.read-more table td {
	padding: 5px 10px;
}
td.read-more a {
	color: #b0aa1f;
	font-size: 14px;
	outline: none;
	text-decoration: none;
	text-transform: uppercase;
}
@media only screen and (max-width: 750px) {
  #logo {
		padding: 0 20px;
	}
  #content-container {
		width: 750px !important;
	}
  .shadow {
		display: none !important;
	}
}
@media only screen and (max-width: 480px) {
	body, table, td, p, a, li, blockquote {
		-webkit-text-size-adjust: none !important;
	}
	body {
		min-width: 100% !important;
		width: 100% !important;
	}
	.full-width,
	#logo img,
	#header,
	#content-container {
		display: block !important;
		height: auto !important;
		width: 100% !important;
	}
	#header {
		font-size: 20px !important;
		margin-bottom: 10px;
	}
  #social {
		height: auto !important;
		width: 100% !important;
	}
	.column-1,
	.column-2 {
		border: none !important;
		display: block !important;
		padding: 0 0 20px 0 !important;
		width: 100% !important;
	}
	td.feed.promo.image,
	td.feed.promo.content {
		display: block;
		width: 100%;
	}
	td.feed.promo.image,
	td.feed.promo.content {
    padding: 20px 0 0 !important;
	}
	td.feed.promo.content,
	td.feed.promo.content.has-image {
		padding: 10px 0 0 !important;
	}
}