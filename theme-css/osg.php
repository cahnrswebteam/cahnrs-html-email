body {
	font-family: Lucida Grande, Lucida Sans Unicode, Arial, san-serif;
	margin: 0;
	padding: 0;
}
a {
	color: #c27625;
	outline: none;
	text-decoration: none;
}
h1 {
	color: #555555;
	font-size: 20px;
	margin: 0 0 10px;
}
h2 {
	color: #c27625;
}
h3 {
	color: #555555;
	font-size: 16px;
	margin: 0 0 10px;
}
h2, .column-1 h3 {
	font-size: 18px;
	font-weight: normal;
	margin: 0 0 10px;
	text-transform: uppercase;
}
h4 {
	color: #808080;
	font-size: 14px;
	margin: 0 0 10px;
}
p {
	color: #5e6a71;
	font-size: 14px;
	line-height: 20px;
	margin: 14px 0;
	padding: 0;
}
.column-1 {
	padding: 0 20px 20px 20px;
	width: 503px !important;
}
#row-1-column-1 {
	border-right: 1px solid #b5babe;
}
.column-2 {
	padding: 0 20px 20px 20px;
	width: 166px !important;
}
td.promo.content,
td.promo.image {
	padding-top: 20px;
}
.column-1 > .item:first-of-type > tbody > tr:first-child > td.promo.content,
.column-1 > .item:first-of-type > tbody > tr:first-child > td.promo.image,
.column-1 > .item:first-of-type > tbody > tr > td > .item:first-of-type > tbody > tr:first-child > td.promo.content,
.column-1 > .item:first-of-type > tbody > tr > td > .item:first-of-type > tbody > tr:first-child > td.promo.image {
	padding-top: 0;
}
td.feed.promo.image img {
	max-width: 150px !important;
}
#row-200 {
	display: none;
}
td.read-more {
	border-bottom: 1px solid #b5babe;
}
td.read-more table {
	background: #363637;
}
td.read-more table td {
	font-size: 14px;
	padding: 5px 10px;
}
td.read-more a {
	color: #e9b420;
	outline: none;
	text-decoration: none;
	text-transform: uppercase;
}
@media only screen and (max-width: 750px) {
	#logo {
		padding: 0 20px;
	}
  #content-container {
		width: 750px;
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
	#header {
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
		padding: 0 20px 20px 20px !important;
		width: auto !important;
	}
	td.feed.promo.image,
	td.feed.promo.content {
		display: block;
		padding: 20px 0 0 !important;
		width: 100%;
	}
	td.feed.promo.content {
		padding: 10px 0 0 !important;
	}
}
