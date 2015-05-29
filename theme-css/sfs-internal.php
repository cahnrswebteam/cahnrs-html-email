/* template */
body {
	bacgkround-color: #000;
	margin: 0;
	padding: 0;
}
/* builder - layout */
.row {
	width: 100% !important;
}
.column-1 {
	padding: 0 10px 0 0;
	text-align: left;
	width: 485px;
}
.column-1 table td {
	padding: 10px 10px 10px 20px;
}
.column-2 {
	background: #e5e7e9;
	padding: 10px;
	text-align: left;
	width: 235px;
}
.gold {
	background-color: #f0e7d3;
}
#row-200 {
	display: none;
}
/* fonts */
h2 {
	color: #a8905f;
	font-weight: normal;
	text-transform: uppercase;
}
.gold h2 {
	color: #981e32;
}
p {
	color: #5e6a71;
	font-size: 14px;
	line-height: 20px;
}
.row a {
	color: #981e32;
	font-weight: bold;
	outline: none;
	text-decoration: none;
}
.row .gold a {
	color: #8d7442;
}
.row a.more {
	background-color: #4e5153;
	color: #fff;
	font-weight: normal;
	outline: none;
	padding: 5px 10px;
	text-decoration: none;
	text-transform: uppercase;
}
.column-2 hr {
	border: 1px solid #b9bec2;
	height: 0;
	width: 60%;
}
@media only screen and (max-width: 480px) {
	/* template */
	img {
		height: auto !important;
		width: 100% !important;
	}
	.full-width {
		display: block !important;
		height: auto !important;
		width: 100% !important;
	}
	.hide {
		display: none;
	}
	/* builder */
	.column-1 {
		display: block !important;
		padding: 0 !important;
		width: 100% !important;
	}
	.column-2 {
		display: block !important;
		padding: 0 20px 0 20px !important;
		width: auto !important;
	}
}
