body {
	margin: 0;
	padding: 0;
    color: #555555;
    font-family: verdana;
}
img {
	max-width: 100%;
    height: auto;
}
p {
	margin: 0 0 14px;
    font-size: 12px;
}

h2 {
	margin: 0 0 8px;
}

h3,
h3 a {
	font-size: 14px;
    margin: 0;
    padding: 0;
    line-height: 18px;
    color: #b45400;
    text-decoration: none;
}
h4, h4 a {
	color: #b45400;
    margin: 0 0 8px;
}

#row-1-column-1 {
    border-right: 1px solid #cccccc;
    padding: 0 20px;
}
.column-1 {
	width: 540px;
}
.column-2 {
	width: 190px;
    padding: 0 10px;
}
table.item {
	table-layout:fixed;
    font-size: 12px;
}

td.read-more {
 border-bottom: 1px solid #363636;
}
td.read-more table {
 	background: #363636;
}

td.read-more table td{
 	padding: 8px 15px;
}

td.read-more a {
    text-decoration: none;
    color: #f3b91e;
    font-size: 12px;
    text-transform: uppercase;
}
td.promo.image {
    width: 150px;
}

td.promo.content {
	padding-left: 15px;
    vertical-align: top;
    width: 346px;
    font-size: 13px;
}
td.promo.content,
td.promo.image {
   padding-top: 15px;
}
 
table.row {
	table-layout: fixed;
}

.banner-text {
	color: #fff;
}

@media only screen and ( max-width: 750px) {
  .email-wrapper {
  	width: 96% !important;
    margin: 0 2%;
  }
  tr.header td {
  width: auto !important;
  }
  
  td.promo.image {
        width: 20%;
    }
    
    td.promo.content {
        width: 80%;
    }
}

@media only screen and ( max-width: 600px) {
  td.column {
  	display: block !important;
  }
  .column-2,
  .column-1 {
	width: 95% !important;
    }
}




