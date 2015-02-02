body {
	background: #fff;
	margin: 0;
	padding: 0;
}
.row {
	width: 640px;
}
.column {
	text-align: left;
}
p {
  margin: 0 0 1em;
}
a.no-underline {
	text-decoration: none !important;
}

@media only screen and (max-width: 700px) {
	body {
		width: 100% !important;
		min-width: 100% !important;
	}
	.responsive-image {
		height: auto !important;
		width: 100% !important;
	}
	#wrapper,
	#inner,
	.item,
  td {
		width: 100% !important;
	}
  .banner {
		height: auto !important;
	}
  .pad {
		padding: 0 20px;
	}
}