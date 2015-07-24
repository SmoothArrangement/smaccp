-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2015 at 02:26 PM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ccp`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice_template`
--

CREATE TABLE IF NOT EXISTS `invoice_template` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `templatename` varchar(1500) DEFAULT NULL,
  `html` varchar(10000) DEFAULT NULL,
  `dynamic` varchar(1500) DEFAULT NULL,
  `css` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`iId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `invoice_template`
--

INSERT INTO `invoice_template` (`iId`, `templatename`, `html`, `dynamic`, `css`) VALUES
(1, 'Rechnungsvorlage', '   \n<html>\n<head>\n   <meta charset="utf-8">\n<title>Rechnungsvorlage Smooth Arrangement</title>\n<link rel="stylesheet" href="style.css" media="all">\n<style type="text/css">\n@font-face {\n  font-family: SourceSansPro;\n  src: url(SourceSansPro-Regular.ttf);\n}\n@page { margin-top: 0px; }\n.clearfix:after {\n  content: "";\n  display: table;\n  clear: both;\n}\n\na {\n  color: #0087C3;\n  text-decoration: none;\n}\n\nbody {\n  position: relative;\n  width: 20cm;  \n  height: 26.4cm; \n  margin: 0px; \n  color: #555555;\n  background: #FFFFFF; \n  font-family: Arial, sans-serif; \n  font-size: 14px; \n  font-family: SourceSansPro;\n}\n\nheader {\n  \n  border-bottom: 1px solid #AAAAAA;\n}\n\n#logo {\n  float: left;\n  margin-top: 8px;\n}\n\n#logo img {\n  height: 120px;\n}\n\n#company {\n  float: right;\n  text-align: right;\n}\n\n\n#details {\n  margin-bottom: 30px;\n}\n\n#client {\n  padding-left: 6px;\n  border-left: 6px solid #73BE0A;\n  float: left;\n margin-left:35px;\n}\n\n#client .to {\n  color: #777777;\n}\n\nh2.name {\n  font-size: 1.4em;\n  font-weight: normal;\n  margin: 0;\n}\n\n#invoice {\n  float: right;\n  text-align: right;\n}\n\n#invoice h1 {\n  color: #0087C3;\n  font-size: 1.7em;\n  line-height: 1em;\n  font-weight: normal;\n  margin: 0  0 10px 0;\n}\n\n#invoice .date {\n  font-size: 1.1em;\n  color: #777777;\n}\n\ntable.applyCss {\n  width: 100%;\n  border-collapse: collapse;\n  border-spacing: 0;\n  margin-bottom: 10px;\n}\n\ntable.applyFooterCss {\n  width: 100%;\n  border-collapse: collapse;\n  border-spacing: 0;\n}\n\n table.applyCss th,\n table.applyCss td {\n  padding: 5px;\n  background: #EEEEEE;\n  text-align: center;\n  border-bottom: 1px solid #FFFFFF;\n}\n\n table.applyCss th {\n  white-space: nowrap;        \n  font-weight: normal;\n}\n\n table.applyCss td {\n  text-align: right;\n}\n\n table.applyCss td h3{\n  color: #57B223;\n  font-size: 1.2em;\n  font-weight: normal;\n  margin: 0 0 0.2em 0;\n}\n\n table.applyCss .no {\n  color: #FFFFFF;\n  font-size: 1.6em;\n  background: #57B223;\n}\n\n table.applyCss .desc {\n  text-align: left;\n}\n\n table.applyCss .unit {\n  background: #DDDDDD;\n}\n\n table.applyCss .qty {\n}\n\n table.applyCss .total {\n  background: #57B223;\n  color: #FFFFFF;\n}\n\n table.applyCss td.unit,\n table.applyCss td.qty,\n table.applyCss td.total {\n  font-size: 1.2em;\n}\n\n table.applyCss tbody tr:last-child td {\n  border: none;\n}\n\n table.applyCss tfoot td {\n  padding: 5px 5px;\n  background: #FFFFFF;\n  border-bottom: none;\n  font-size: 1em;\n  white-space: nowrap; \n  border-top: 1px solid #AAAAAA; \n}\n\n table.applyCss tfoot tr:first-child td {\n  border-top: none; \n}\n\n table.applyCss tfoot tr:last-child td {\n  color: #57B223;\n  font-size: 1.4em;\n  border-top: 1px solid #57B223; \n\n}\n\n table.applyCss tfoot tr td:first-child {\n  border: none;\n}\n\n#thanks{\n  font-size: 1.2em;\n  margin-bottom: 50px;\n}\n\n#notices{\n  padding-left: 6px;\n  border-left: 6px solid #73BE0A;\n  position:absolute;\n  bottom:150px;  \n}\n\n#notices .notice {\n  font-size: 1.2em;\n}\n\nfooter {\n  color: #777777;\n  width: 100%;\n  height: 50px;\n  position: absolute;\n  bottom: 50;\n  border-top: 1px solid #AAAAAA;\n  padding: 8px 0;\n  text-align: center;\n}\n\nfooter table td {\nbackground-color:white;\n}\n\n.bank td {\npadding:0;\n}\n\n.left {\nfloat:left;\nmargin-left:10px;\n}\n</style>	\n  </head>\n  <body>\n  \n    <header class="clearfix">\n<table width="100%">\n        <tbody><tr>\n          <td width="50%">\n      <div id="logo">\n        <img src="./img/SmoothArrangement.png">\n      </div>\n</td>\n        <td>\n      <div id="company">\n        <h2 class="name">Smooth Arrangement<br><small>Cordula Wulfert</small></h2>\n        <div>Zum JÃ¤gerplatz 93</div>\n        <div>32549 Bad Oeynhausen</div>\n		<div>Â </div>\n        <div><a href="http://smootharrangement.de">http://smootharrangement.de</a></div>\n        <div><a href="mailto:info@smootharrangement.de">info@smootharrangement.de</a></div>\n      </div>\n      </td>\n     </tr>\n     </tbody></table>\n    </header>\n    <main>\n      <div id="details" class="clearfix">\n<table width="100%">\n          <tbody><tr>\n            <td colspan="2">\n        <div style="margin-left:35px;"><p style="font-size:12px;"><u>Smooth Arrangement Â· Zum JÃ¤gerplatz 93 Â· 32549 Bad Oeynhausen</u></p></div>\n</td>\n          </tr>\n\n          <tr>\n            <td width="50%">\n		<div id="client">\n		          <div class="to">Rechnung an:</div>\n          <h2 class="name">{firstname} {surname}</h2>\n          <div class="address">{street} {nr}</div>\n          <div class="address">{zipcode} {city}<br>{country}</div>\n		  <div>Â </div>\n          <div class="email"><a href="mailto:{useremail}">{useremail}</a></div>\n        </div>\n</td>\n            <td>\n        <div id="invoice">\n          <h1>Rechnung Nr.: {invoicenumber}</h1>\n          <div class="date">Rechnungsdatum: {invoicedate}</div>\n		  <div>Â </div>\n          <div class="date">Zahlungsziel: {paymentterms}</div>\n          <div class="date">Zahlungsart: {paymentgateway}</div>\n        </div>\n</td>\n          </tr>\n          </tbody></table>\n      </div>\n      \n\n          <table class="applyCss" border="0" cellpadding="0" cellspacing="0">\n        <thead>\n          <tr>\n            <th class="no">#</th>\n            <th class="desc">Beschreibung</th>\n            <th class="unit">Einzelpreis</th>\n            <th class="qty">StÃ¼ckzahl</th>\n            <th class="total">Gesamt</th>\n          </tr>\n        </thead>\n        <tbody>{dynamicarea}</tbody>\n        <tfoot>\n          <tr>\n            <td colspan="2"><br></td>\n            <td colspan="2">Zwischensumme</td>\n            <td>{subtotal}â‚¬</td>\n          </tr>\n          <tr>\n            <td colspan="2"><br></td>\n            <td colspan="2">Versandkosten</td>\n            <td>{shiping}â‚¬</td>\n          </tr>\n          <tr>\n            <td colspan="2"><br></td>\n            <td colspan="2">Gesamtsumme</td>\n            <td>{grandtotal}â‚¬</td>\n          </tr>\n        </tfoot>\n      </table>\n	  	  	      <div id="thanks">Vielen Dank fÃ¼r Ihren Auftrag. Wir sind gem. Â§ 19 Abs. 1 UStG. nicht Umsatzsteuerpflichtig</div>\n	        <div id="notices">\n        <div>Bemerkung:</div>\n        <div class="notice">{notice}</div>\n      </div>\n\n    </main>\n    <footer>\n\n      <table class="applyFooterCss" >\n	  <tbody><tr>\n	  <td style="text-align:left;">Smooth Arrangement | Cordula Wulfert<br>Zum JÃ¤gerplatz 93<br>32549 Bad Oeynhausen<br><br>Tel.:+49 (0) 5734 - 51993 - 20<br>Fax:+49 (0) 5734 - 51993 - 19</td>\n	  <td style="width:150px;">Â </td>\n	  <td><table style="left: 393px; width: 358px;" class="bank">\n	  <tbody><tr>\n<td width="50" align="right"><b>Kontoinhaber</b></td><td width="10">:</td><td align="left" class="left">Cordula Wulfert</td>\n</tr>\n<tr>\n<td align="right"><b>IBAN</b></td><td>:</td><td class="left">DE60 4905 1285 0000 8874 89</td>\n</tr>\n<tr>\n<td align="right"><b>BIC</b></td><td>:</td><td class="left">WELADED1OEH</td>\n</tr>\n<tr>\n<td align="right"><b>Institut</b></td><td>:</td><td class="left">Sparkasse Bad Oeynhausen</td>\n</tr>\n<tr>\n<td align="right"><b>Verwendungszweck</b></td><td>:</td><td class="left">{invoicenumber}</td>\n</tr>\n</tbody></table></td>\n	  </tr>\n	  </tbody></table>\n	  <p>Seite {page} von {pagetotal}</p>\n    </footer>  \n</body>\n</html>\n    ', '                  <tr>\n            <td class="no">{position}</td>\n            <td class="desc">{description}</td>\n            <td class="unit">{unitprice}â‚¬</td>\n            <td class="qty">{qty}</td>\n            <td class="total">{total}â‚¬</td>\n          </tr>        ', '          none      '),
(2, 'Angebotsvorlage', '   <meta charset="utf-8">\n<title>Rechnungsvorlage Smooth Arrangement</title>\n<link rel="stylesheet" href="style.css" media="all">\n<style type="text/css">\n@font-face {\n  font-family: SourceSansPro;\n  src: url(SourceSansPro-Regular.ttf);\n}\n\n.clearfix:after {\n  content: "";\n  display: table;\n  clear: both;\n}\n\na {\n  color: #0087C3;\n  text-decoration: none;\n}\n\nbody {\n  position: relative;\n  width: 20cm;  \n  height: 26.4cm; \n  margin: 0 auto; \n  color: #555555;\n  background: #FFFFFF; \n  font-family: Arial, sans-serif; \n  font-size: 14px; \n  font-family: SourceSansPro;\n}\n\nheader {\n  padding: 10px 0;\n  margin-bottom: 20px;\n  border-bottom: 1px solid #AAAAAA;\n}\n\n#logo {\n  float: left;\n  margin-top: 8px;\n}\n\n#logo img {\n  height: 120px;\n}\n\n#company {\n  float: right;\n  text-align: right;\n}\n\n\n#details {\n  margin-bottom: 50px;\n}\n\n#client {\n  padding-left: 6px;\n  border-left: 6px solid #73BE0A;\n  float: left;\n margin-left:35px;\n}\n\n#client .to {\n  color: #777777;\n}\n\nh2.name {\n  font-size: 1.4em;\n  font-weight: normal;\n  margin: 0;\n}\n\n#invoice {\n  float: right;\n  text-align: right;\n}\n\n#invoice h1 {\n  color: #0087C3;\n  font-size: 1.7em;\n  line-height: 1em;\n  font-weight: normal;\n  margin: 0  0 10px 0;\n}\n\n#invoice .date {\n  font-size: 1.1em;\n  color: #777777;\n}\n\ntable {\n  width: 100%;\n  border-collapse: collapse;\n  border-spacing: 0;\n  margin-bottom: 20px;\n}\n\ntable th,\ntable td {\n  padding: 5px;\n  background: #EEEEEE;\n  text-align: center;\n  border-bottom: 1px solid #FFFFFF;\n}\n\ntable th {\n  white-space: nowrap;        \n  font-weight: normal;\n}\n\ntable td {\n  text-align: right;\n}\n\ntable td h3{\n  color: #57B223;\n  font-size: 1.2em;\n  font-weight: normal;\n  margin: 0 0 0.2em 0;\n}\n\ntable .no {\n  color: #FFFFFF;\n  font-size: 1.6em;\n  background: #57B223;\n}\n\ntable .desc {\n  text-align: left;\n}\n\ntable .unit {\n  background: #DDDDDD;\n}\n\ntable .qty {\n}\n\ntable .total {\n  background: #57B223;\n  color: #FFFFFF;\n}\n\ntable td.unit,\ntable td.qty,\ntable td.total {\n  font-size: 1.2em;\n}\n\ntable tbody tr:last-child td {\n  border: none;\n}\n\ntable tfoot td {\n  padding: 5px 5px;\n  background: #FFFFFF;\n  border-bottom: none;\n  font-size: 1em;\n  white-space: nowrap; \n  border-top: 1px solid #AAAAAA; \n}\n\ntable tfoot tr:first-child td {\n  border-top: none; \n}\n\ntable tfoot tr:last-child td {\n  color: #57B223;\n  font-size: 1.4em;\n  border-top: 1px solid #57B223; \n\n}\n\ntable tfoot tr td:first-child {\n  border: none;\n}\n\n#thanks{\n  font-size: 1.2em;\n  margin-bottom: 50px;\n}\n\n#notices{\n  padding-left: 6px;\n  border-left: 6px solid #73BE0A;\n  position:absolute;\n  bottom:60px;  \n}\n\n#notices .notice {\n  font-size: 1.2em;\n}\n\nfooter {\n  color: #777777;\n  width: 100%;\n  height: 30px;\n  position: absolute;\n  bottom: 0;\n  border-top: 1px solid #AAAAAA;\n  padding: 8px 0;\n  text-align: center;\n}\n\nfooter table td {\nbackground-color:white;\n}\n\n.bank td {\npadding:0;\n}\n\n.left {\nfloat:left;\nmargin-left:10px;\n}\n</style>	\n  \n  \n    <header class="clearfix">\n      <div id="logo">\n        <img src="http://ccp.smootharrangement.de/img/SmoothArrangement.png">\n      </div>\n      <div id="company">\n        <h2 class="name">Smooth Arrangement<br><small>Cordula Wulfert</small></h2>\n        <div>Zum JÃ¤gerplatz 93</div>\n        <div>32549 Bad Oeynhausen</div>\n		<div> </div>\n        <div><a href="http://smootharrangement.de">http://smootharrangement.de</a></div>\n        <div><a href="mailto:info@smootharrangement.de">info@smootharrangement.de</a></div>\n      </div>\n      \n    </header>\n    <main>\n      <div id="details" class="clearfix">\n        <div style="margin-left:35px;"><p style="font-size:12px;"><u>Smooth Arrangement Â· Zum JÃ¤gerplatz 93 Â· 32549 Bad Oeynhausen</u></p></div>\n		<div id="client">\n		          <div class="to">Angebot an:</div>\n          <h2 class="name">{firstname} {surname}</h2>\n          <div class="address">{street} {nr}</div>\n          <div class="address">{zipcode} {city}<br>{country}</div>\n		  <div> </div>\n          <div class="email"><a href="mailto:{useremail}">{useremail}</a></div>\n        </div>\n        <div id="invoice">\n          <h1>Angebot Nr.: {invoicenumber}</h1>\n          <div class="date">Angebotsdatum: {invoicedate}</div>\n		  <div> </div>\n          <div class="date">Zahlungsziel: {paymentterms}</div>\n          <div class="date">Zahlungsart: {paymentgateway}</div>\n        </div>\n      </div>\n      \n\n         {dynamicarea} <table border="0" cellpadding="0" cellspacing="0">\n        <thead>\n          <tr>\n            <th class="no">#</th>\n            <th class="desc">Beschreibung</th>\n            <th class="unit">Einzelpreis</th>\n            <th class="qty">StÃ¼ckzahl</th>\n            <th class="total">Gesamt</th>\n          </tr>\n        </thead>\n        <tbody></tbody>\n        <tfoot>\n          <tr>\n            <td colspan="2"><br></td>\n            <td colspan="2">Zwischensumme</td>\n            <td>{subtotal}â‚¬</td>\n          </tr>\n          <tr>\n            <td colspan="2"><br></td>\n            <td colspan="2">Versandkosten</td>\n            <td>{shiping}â‚¬</td>\n          </tr>\n          <tr>\n            <td colspan="2"><br></td>\n            <td colspan="2">Gesamtsumme</td>\n            <td>{grandtotal}â‚¬</td>\n          </tr>\n        </tfoot>\n      </table>\n	  	  	      <div id="thanks">Vielen Dank fÃ¼r Ihren Auftrag. Wir sind gem. Â§ 19 Abs. 1 UStG. nicht Umsatzsteuerpflichtig</div>\n	        <div id="notices">\n        <div>Bemerkung:</div>\n        <div class="notice">{notice}</div>\n      </div>\n\n    </main>\n    <footer>\n\n      <table>\n	  <tbody><tr>\n	  <td style="text-align:left;">Smooth Arrangement | Cordula Wulfert<br>Zum JÃ¤gerplatz 93<br>32549 Bad Oeynhausen<br><br>Tel.:+49 (0) 5734 - 51993 - 20<br>Fax:+49 (0) 5734 - 51993 - 19</td>\n	  <td style="width:150px;"> <br></td>\n	  <td><table style="left: 393px; width: 358px;" class="bank">\n	  <tbody><tr>\n<td><b>Kontoinhaber</b></td><td>:</td><td class="left">Cordula Wulfert</td>\n</tr>\n<tr>\n<td><b>IBAN</b></td><td>:</td><td class="left">DE60 4905 1285 0000 8874 89</td>\n</tr>\n<tr>\n<td><b>BIC</b></td><td>:</td><td class="left">WELADED1OEH</td>\n</tr>\n<tr>\n<td><b>Institut</b></td><td>:</td><td class="left">Sparkasse Bad Oeynhausen</td>\n</tr>\n<tr>\n<td><b>Verwendungszweck</b></td><td>:</td><td class="left">{invoicenumber}</td>\n</tr>\n</tbody></table></td>\n	  </tr>\n	  </tbody></table>\n	  <p>Seite {page} von {pagetotal}</p>\n    </footer>   ', '                <tr>\n            <td class="no">{position}</td>\n            <td class="desc">{description}</td>\n            <td class="unit">{unitprice}â‚¬</td>\n            <td class="qty">{qty}</td>\n            <td class="total">{total}â‚¬</td>\n          </tr>      ', '   qwertz   ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
