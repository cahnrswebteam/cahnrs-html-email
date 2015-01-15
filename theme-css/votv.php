body {
	background-color: #363637;
	margin: 0;
	padding: 0;
}
.header img {
	display: block;
}
#social a {
	color: #fff;
	float: left;
	width: 50%;
	text-align: center;
}
#social img {
	display: block;
	margin: 0 auto;
}
#description {
	font-size: 17px;
	font-weight: normal;
	text-transform: uppercase;
}
#issue-links a {
	border-bottom: none;
	color: #a3a8ac;
	text-decoration: none;
}
#footer span {
	display: block;
}
#global-links a {
	border-bottom: none;
	color: #b5babe;
	text-decoration: none;
}
img {
	display: block;
	max-width: 100%;
}

.row {
	font-size: 14px;
	margin-bottom: 20px;
	width: 750px;
}

.column-1 {
	border-right: 1px solid #b5babe;
}
.column-1 > table {
	width: 543px;
}
.column-1 .image {
	padding: 0 20px 0 20px;
}
.column-1 .content {
	padding: 0 15px 0 20px;
}
.column-1 .content.has-image {
	padding: 0 15px 0 0;
}
.column-1 .read-more {
	padding: 0 15px 20px 20px;
}
.column-1 .read-more span {
	border-bottom: 1px solid #bec2c5;
	display: block;
}
.column-1 .read-more a {
	background: #363637;
	color: #bec2c5;
	display: inline-block;
	padding: 5px 10px;
	text-decoration: none;
}


.column-2 table {
	width: 207px;
}
.column-2 table td {
	padding: 0 15px 0 15px;
}
h1, p {
	margin: 0 0 1em;
}
h2, h3, h4, h5 {
	margin: 0 0 0.2em;
}
h1 {
	color: #5e6a71;
	font-size: 20px;
}
h2,
.column-1 h3 {
	color: #981e32;
	font-size: 18px;
	font-weight: normal;
	text-transform: uppercase;
}
h2 a,
.column-1 h3 a {
	color: #981e32;
	text-decoration: none;
}
h3 {
	font-size: 16px;
}
h4 {
	color: #981e32;
	font-size: 15px;
}

#row-200 {
	display: none;
}

@media only screen and (max-width: 480px) {
	body {
		width: 100% !important;
		min-width: 100% !important;
	}
	img {
		height: auto !important;
		width: 100% !important;
	}
	#cahnrs-logo {
		display: block;
		margin: 0 20px;
	}
	.column-1 {
		border-right: none;
	}
	.full-width,
	.column,
	.column-1 table,
	.column-2 table {
		display: block;
		height: auto !important;
		width: 100% !important;
	}
	.height-fix {
		height: auto !important;
	}
	.shadow {
		display: none;
	}
	.column-1 .image,
	.column-1 .content,
	.column-1 .read-more {
		display: block;
		height: auto !important;
		padding: 0 15px 0 15px;
		width: auto !important;
	}
	.column-1 .image,
	.column-1 .read-more {
		padding: 0 15px 20px 15px;
	}
	.column-1 .image img {
		max-width: 150px !important;
	}
	.column-2 table {
		border-top: 1px solid #981e32;
	}
	.column-2 table td {
		padding: 20px 15px 0 15px;
	}
}