h1 {
	color: #5e6a71;
  margin: 0 0 12px;
}
p {
	font-size: 14px;
}
.column-1 {
  padding: 10px 15px 15px 15px;
  text-align: left;
  vertical-align: top;
  width: 516px;
}
.column-1 h2 {
	color: #981e32;
  margin: 0 0 12px;
}
.column-2 {
	background: #d7dadb;
  border-bottom: 2px solid #ffffff;
  text-align: left;
  vertical-align: top;
  width: 154px;
}
.column-2 table {
	width: 154px;
}
.column-2 h2 {
  color: #000;
  font-size: 16px;
  font-weight: normal;
  margin: 0 0 12px;
  text-transform: uppercase;
}
.column-2 p,
.column-2 a {
	color: #fff;
  text-decoration: none;
}
.column-2 a:hover {
	color: #000;
}
.column-2 table:first-of-type {
	background: #5e6a71;
  border-bottom: 2px solid #ffffff;
}
.column-2 table:nth-of-type(2) {
	background: #8d959a;
  border-bottom: 2px solid #ffffff;
}
.column-2 table:nth-of-type(3) {
	background: #b5babe;
  border-bottom: 2px solid #ffffff;
}
.column-2 table td {
  padding: 12px 12px 20px 12px;
  width: 131px;
}
.column-2 table:nth-of-type(4) p,
.column-2 table:nth-of-type(4) a {
	color: #5e6a71;
  text-decoration: none;
}
.column-2 table:nth-of-type(4) a:hover {
	color: #000;
}
.column-2 table:nth-of-type(4) strong {
	color: #981e32;
}
img {
	max-width: 100%;
}
img.alignleft {
	margin: 0 15px 0 0;
}
.column-1 td br:first-of-type,
table#row-200 {
	display: none;
}

@media only screen and (max-width: 480px) {
  body, table, td, p, a, li, blockquote {
    -webkit-text-size-adjust: none !important;
  }
  body {
    width: 100% !important;
    min-width: 100% !important;
  }
  img {
    height: auto;
    width: 100% !important;
  }
  .full-width,
  .column-2 table {
  	width: 100% !important;
	}
  .column-2 table td {
    width: auto !important;
  }
  .container {
    padding: 0 !important;
  }
  .column {
    display: block !important;
    width: auto !important;
  }
  .share {
    padding-left: 12px !important;
  }
}