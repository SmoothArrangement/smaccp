/*
Navicat MySQL Data Transfer

Source Server         : Smooth Arrangement
Source Server Version : 50543
Source Host           : smootharrangement.de:3306
Source Database       : smaccp

Target Server Type    : MYSQL
Target Server Version : 50543
File Encoding         : 65001

Date: 2015-07-11 20:11:06
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for country_mst
-- ----------------------------
DROP TABLE IF EXISTS `country_mst`;
CREATE TABLE `country_mst` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `vCountry` varchar(250) DEFAULT NULL,
  `iAddedBy` int(11) DEFAULT NULL,
  `iUpdatedBy` int(11) DEFAULT NULL,
  `dAddedDate` datetime DEFAULT NULL,
  `dUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iId`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of country_mst
-- ----------------------------
INSERT INTO `country_mst` VALUES ('1', 'Deutschland', '4', '4', '2015-07-02 13:14:29', '2015-07-02 16:37:27');
INSERT INTO `country_mst` VALUES ('5', 'Ã–sterreich', '4', '4', '2015-07-02 16:37:30', '2015-07-02 16:40:40');
INSERT INTO `country_mst` VALUES ('6', 'Schweiz', '4', '4', '2015-07-02 16:37:36', '2015-07-02 16:37:45');

-- ----------------------------
-- Table structure for email_template
-- ----------------------------
DROP TABLE IF EXISTS `email_template`;
CREATE TABLE `email_template` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `vTemplate` varchar(750) DEFAULT NULL,
  `vSubject` varchar(1500) DEFAULT NULL,
  `tMessage` text,
  `vSender` varchar(750) DEFAULT NULL,
  `vname` varchar(750) DEFAULT NULL,
  `copy` int(2) DEFAULT NULL,
  PRIMARY KEY (`iId`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of email_template
-- ----------------------------
INSERT INTO `email_template` VALUES ('1', 'Create new account', 'Bike Arena Benneker CPP | Your Account has been created {benutzername}', 'Hallo {benutzername},<br><br>Just your user account has been unlocked.<br>Please log on with the following data:<br><br>CPP = {ticketlogin}<br>Username = {benutzeremail}<br>Password = {passwort}&nbsp;<br><br>If you have forgotten it, you can RESET it: {ticketlogin}<br>Simply click on the link Forgot Password?&nbsp;<br><br>Have fun. If you need help, please contact your authorized superiors.<br><br>Other span Bike Arena Benneker | CPP', 'ticketsystem@bikearena-benneker.de', null, '1');
INSERT INTO `email_template` VALUES ('2', 'New Ticket', 'New Ticket from {absender} | {ticketbeschreibung}', 'Hallo {benutzername},&nbsp;<br><br>{absender} hat ein Ticket fÃ¼r Dich erstelt.<br><br>Das Ticket hat folgenden Inhalt:<br><br>{tickettext}&nbsp;<br><br>Um zu antworten melde Dich bitte am Ticketsystem an.<br><br>{ticketlogin}<br><br>Beste GrÃ¼ÃŸe<br>Bikearena Benneker | Ticket System', 'ticketmailer@ticketsystem.de', 'Admin', '1');
INSERT INTO `email_template` VALUES ('3', 'In response to a ticket', '{absender} replied on {zeitstempel} to the following ticket: {ticketbeschreibung} ', 'Hallo {benutzername},\r\n<br>\r\n<br>\r\n{absender} hat auf Dein Ticket geantwortet.<br>\r\nDas Ticket hat folgenden Inhalt:<br>\r\n<br>\r\n{tickettext}\r\n<br>\r\n<br>Um zu antworten melde Dich bitte am Ticketsystem an.<br><br>{ticketlogin}<br><br>\r\nBeste GrÃ¼ÃŸe<br>Bikearena Benneker | Ticket System', 'ticketsystem@bikearena-benneker.de', 'Admin', '1');
INSERT INTO `email_template` VALUES ('4', 'Ticket status changed', 'Status for the ticket: {ticketbeschreibung} was of {absender} changed', 'Dear {benutzername},\\r\\n<br>\\r\\n<br>\\r\\n{absender} has changed ticketstatus to: {ticketstatus}.\\r\\n<br>\\r\\n<br>\\r\\nThis is ticket content:\\r\\n<br>\\r\\n<br>\\r\\n{tickettext}\\r\\n<br>\\r\\n<br>\\r\\nBest Reagrds\\r\\n<br>\\r\\n<br>\\r\\nAdmin', 'status@ticketsystem.de', 'Admin', '1');
INSERT INTO `email_template` VALUES ('5', 'Forgot Password', 'Your new password for the CCP {benutzername}', '<span style=\"font-weight: normal;\">Hallo {benutzername},\r\n<br>\r\ndu hast Dein Passwort vergessen?<br>Gar kein Problem. Hier ist ein neues Passwort fÃ¼r Dich.<br><br>Bitte logge Dich beim nÃ¤chsten mal mit diesem Passwort ein: </span><span style=\"font-weight: bold;\">{passwort}</span><br>\r\n<br>\r\nLogin:\r\n<br>\r\n<br>CCP = {ticketlogin}&nbsp;<br>Benutzername = {benutzeremail}&nbsp;<br>Passwort = {passwort}<br>\r\n<br><span style=\"font-weight: bold; text-decoration: underline; color: rgb(255, 0, 0);\">\r\nBitte Ã¤ndere Dein Passwort nach dem 1. Login.</span><br>\r\n<br>Solltest Du kein Passwort angefordert haben, wende Dich bitte an Deinen Vorgesetzten.<br><br>Beste GrÃ¼ÃŸe<div style=\"font-weight: normal;\">Bike Arena Benneker | CCP</div>', 'ticketsystem@bikearena-benneker.de', 'Admin', '1');
INSERT INTO `email_template` VALUES ('6', 'New User', '{newuser} has for the CPP admin', 'Hallo Admin,\r\n<br>{neuerbenutzername}&nbsp;hat sich fÃ¼r das Ticketsystem regestriert.&nbsp;&nbsp;<br><br>\r\nEr kann nun Tickets verfassen und beantworten.<br><br>\r\nName = {neuerbenutzername}<br>\r\nE-Mail &nbsp;= {neuebenutzeremail}<br>\r\nRechte = {benutzerstatus}\r\n<br><br>Beste GrÃ¼ÃŸe<div>Bikearena Benneker | Ticket System</div>', 'ticketsystem@bikearena-benneker.de', 'Admin', '1');
INSERT INTO `email_template` VALUES ('7', 'Customer New Password', 'Your new password for the CCP {benutzername}', '<span style=\"font-weight: normal;\">Hallo {benutzername},\r\n<br>\r\ndu hast Dein Passwort vergessen?<br>Gar kein Problem. Hier ist ein neues Passwort fÃ¼r Dich.<br><br>Bitte logge Dich beim nÃ¤chsten mal mit diesem Passwort ein: </span><span style=\"font-weight: bold;\">{passwort}</span><br>\r\n<br>\r\nLogin:\r\n<br>\r\n<br>CCP = {ticketlogin}&nbsp;<br>Benutzername = {benutzeremail}&nbsp;<br>Passwort = {passwort}<br>\r\n<br><span style=\"font-weight: bold; text-decoration: underline; color: rgb(255, 0, 0);\">\r\nBitte Ã¤ndere Dein Passwort nach dem 1. Login.</span><br>\r\n<br>Solltest Du kein Passwort angefordert haben, wende Dich bitte an Deinen Vorgesetzten.<br><br>Beste GrÃ¼ÃŸe<div style=\"font-weight: normal;\">Bike Arena Benneker | CCP</div>', 'ticketsystem@bikearena-benneker.de', 'Admin', '1');
INSERT INTO `email_template` VALUES ('8', 'Neues Kundenkonto', 'Test E-Mail Sending', '123456', 'email@system.tld', 'Max Tester', '0');
INSERT INTO `email_template` VALUES ('9', 'Passwort vergessen', 'Test is important', '1234', 'email@system.tld', 'Admin is here', '1');
INSERT INTO `email_template` VALUES ('10', 'Informationen zum Kundenkonto', 'mugu jkbugy uyggi uyg', 'qwertz', 'email@mastersystem.tld1', 'm b', '1');
INSERT INTO `email_template` VALUES ('11', 'Neue Rechnung', 'Test', 'Test Subject', 'email@system.tld', 'Admin', '1');
INSERT INTO `email_template` VALUES ('12', 'Zahlungserinnerung', 'Test1', 'Test Subject', 'email@system.tld1', 'Admin1', '1');
INSERT INTO `email_template` VALUES ('13', '1. Mahnung', 'Test1', 'Test Subject', 'email@system.tld1', 'Admin1', '1');
INSERT INTO `email_template` VALUES ('14', '2. Mahnung', 'test2', '', 'email@system.tld1', 'Admin1', '1');
INSERT INTO `email_template` VALUES ('15', '3. Mahnung', 'Test111', 'lkljkljk;j;jk;', 'email@system.tld11', 'Admin111', '1');
INSERT INTO `email_template` VALUES ('16', 'Neues Angebot', 'Test1', 'Test Subject', 'email@system.tld1', 'Admin1', '1');
INSERT INTO `email_template` VALUES ('17', 'Angebot Akzeptiert', 'Test1', 'Test Subject', 'email@system.tld1', 'Admin1', '1');
INSERT INTO `email_template` VALUES ('18', 'Angebot Abgelehnt', 'Test1', 'Test Subject', 'email@system.tld1', 'Admin1', '1');
INSERT INTO `email_template` VALUES ('19', 'Erinnerung an Angebot', 'Test1', ' Test Subject ', 'email@system.tld1', 'Admin1', '1');

-- ----------------------------
-- Table structure for invoice_items
-- ----------------------------
DROP TABLE IF EXISTS `invoice_items`;
CREATE TABLE `invoice_items` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `iInvoiceId` int(11) DEFAULT NULL,
  `iItemOrder` int(11) DEFAULT NULL,
  `vQTY` varchar(250) DEFAULT NULL,
  `tDescription` text,
  `vPrice` varchar(250) DEFAULT NULL,
  `iAddedBy` int(11) DEFAULT NULL,
  `iUpdatedBy` int(11) DEFAULT NULL,
  `dAddedDate` datetime DEFAULT NULL,
  `dUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of invoice_items
-- ----------------------------
INSERT INTO `invoice_items` VALUES ('1', '1', '1', '1', 'Artikel Nummer 1', '5.99', '1', null, '2015-07-11 09:23:21', '2015-07-11 09:23:21');
INSERT INTO `invoice_items` VALUES ('2', '1', '2', '1', 'Artikel Nummer 2', '9.95', '1', null, '2015-07-11 09:23:21', '2015-07-11 09:23:21');

-- ----------------------------
-- Table structure for invoice_mst
-- ----------------------------
DROP TABLE IF EXISTS `invoice_mst`;
CREATE TABLE `invoice_mst` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `iCustomerId` int(11) DEFAULT NULL,
  `vInvoiceNumber` varchar(250) DEFAULT NULL,
  `dInvoiceDate` datetime DEFAULT NULL,
  `iTermOfPayment` int(11) DEFAULT NULL,
  `iPayment` int(11) DEFAULT NULL,
  `vShipping` varchar(250) DEFAULT NULL,
  `iTex` int(11) DEFAULT NULL,
  `tComment` text,
  `iStatus` int(11) DEFAULT '0',
  `iAddedBy` int(11) DEFAULT NULL,
  `iUpdatedBy` int(11) DEFAULT NULL,
  `dAddedDate` datetime DEFAULT NULL,
  `dUpdatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `invoicehtml` varchar(20000) DEFAULT NULL,
  PRIMARY KEY (`iId`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of invoice_mst
-- ----------------------------
INSERT INTO `invoice_mst` VALUES ('1', '2', 'SMA-R4980-1', '2015-07-11 00:00:00', '10', '8', '0.00', '0', 'Test', '0', '1', null, '2015-07-11 09:23:21', '2015-07-11 09:23:21', '');

-- ----------------------------
-- Table structure for invoice_template
-- ----------------------------
DROP TABLE IF EXISTS `invoice_template`;
CREATE TABLE `invoice_template` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `templatename` varchar(1500) DEFAULT NULL,
  `html` varchar(10000) DEFAULT NULL,
  `dynamic` varchar(1500) DEFAULT NULL,
  `css` varchar(1500) DEFAULT NULL,
  PRIMARY KEY (`iId`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of invoice_template
-- ----------------------------
INSERT INTO `invoice_template` VALUES ('1', 'Rechnungsvorlage', ' \n\n  \n    <meta charset=\"utf-8\">\n    <title>Rechnungsvorlage Smooth Arrangement</title>\n    <link rel=\"stylesheet\" href=\"style.css\" media=\"all\">\n<style type=\"text/css\">\n@font-face {\n  font-family: SourceSansPro;\n  src: url(SourceSansPro-Regular.ttf);\n}\n\n.clearfix:after {\n  content: \"\";\n  display: table;\n  clear: both;\n}\n\na {\n  color: #0087C3;\n  text-decoration: none;\n}\n\nbody {\n  position: relative;\n  width: 20cm;  \n  height: 26.4cm; \n  margin: 0 auto; \n  color: #555555;\n  background: #FFFFFF; \n  font-family: Arial, sans-serif; \n  font-size: 14px; \n  font-family: SourceSansPro;\n}\n\nheader {\n  padding: 10px 0;\n  margin-bottom: 20px;\n  border-bottom: 1px solid #AAAAAA;\n}\n\n#logo {\n  float: left;\n  margin-top: 8px;\n}\n\n#logo img {\n  height: 120px;\n}\n\n#company {\n  float: right;\n  text-align: right;\n}\n\n\n#details {\n  margin-bottom: 50px;\n}\n\n#client {\n  padding-left: 6px;\n  border-left: 6px solid #73BE0A;\n  float: left;\n margin-left:35px;\n}\n\n#client .to {\n  color: #777777;\n}\n\nh2.name {\n  font-size: 1.4em;\n  font-weight: normal;\n  margin: 0;\n}\n\n#invoice {\n  float: right;\n  text-align: right;\n}\n\n#invoice h1 {\n  color: #0087C3;\n  font-size: 1.7em;\n  line-height: 1em;\n  font-weight: normal;\n  margin: 0  0 10px 0;\n}\n\n#invoice .date {\n  font-size: 1.1em;\n  color: #777777;\n}\n\ntable {\n  width: 100%;\n  border-collapse: collapse;\n  border-spacing: 0;\n  margin-bottom: 20px;\n}\n\ntable th,\ntable td {\n  padding: 5px;\n  background: #EEEEEE;\n  text-align: center;\n  border-bottom: 1px solid #FFFFFF;\n}\n\ntable th {\n  white-space: nowrap;        \n  font-weight: normal;\n}\n\ntable td {\n  text-align: right;\n}\n\ntable td h3{\n  color: #57B223;\n  font-size: 1.2em;\n  font-weight: normal;\n  margin: 0 0 0.2em 0;\n}\n\ntable .no {\n  color: #FFFFFF;\n  font-size: 1.6em;\n  background: #57B223;\n}\n\ntable .desc {\n  text-align: left;\n}\n\ntable .unit {\n  background: #DDDDDD;\n}\n\ntable .qty {\n}\n\ntable .total {\n  background: #57B223;\n  color: #FFFFFF;\n}\n\ntable td.unit,\ntable td.qty,\ntable td.total {\n  font-size: 1.2em;\n}\n\ntable tbody tr:last-child td {\n  border: none;\n}\n\ntable tfoot td {\n  padding: 5px 5px;\n  background: #FFFFFF;\n  border-bottom: none;\n  font-size: 1em;\n  white-space: nowrap; \n  border-top: 1px solid #AAAAAA; \n}\n\ntable tfoot tr:first-child td {\n  border-top: none; \n}\n\ntable tfoot tr:last-child td {\n  color: #57B223;\n  font-size: 1.4em;\n  border-top: 1px solid #57B223; \n\n}\n\ntable tfoot tr td:first-child {\n  border: none;\n}\n\n#thanks{\n  font-size: 1.2em;\n  margin-bottom: 50px;\n}\n\n#notices{\n  padding-left: 6px;\n  border-left: 6px solid #73BE0A;\n  position:absolute;\n  bottom:60px;  \n}\n\n#notices .notice {\n  font-size: 1.2em;\n}\n\nfooter {\n  color: #777777;\n  width: 100%;\n  height: 30px;\n  position: absolute;\n  bottom: 0;\n  border-top: 1px solid #AAAAAA;\n  padding: 8px 0;\n  text-align: center;\n}\n\nfooter table td {\nbackground-color:white;\n}\n\n.bank td {\npadding:0;\n}\n\n.left {\nfloat:left;\nmargin-left:10px;\n}\n</style>	\n  \n  \n    <header class=\"clearfix\">\n      <div id=\"logo\">\n        <img src=\"http://ccp.smootharrangement.de/img/SmoothArrangement.png\">\n      </div>\n      <div id=\"company\">\n        <h2 class=\"name\">Smooth Arrangement<br><small>Cordula Wulfert</small></h2>\n        <div>Zum JÃ¤gerplatz 93</div>\n        <div>32549 Bad Oeynhausen</div>\n		<div>&nbsp;</div>\n        <div><a href=\"http://smootharrangement.de\">http://smootharrangement.de</a></div>\n        <div><a href=\"mailto:info@smootharrangement.de\">info@smootharrangement.de</a></div>\n      </div>\n      \n    </header>\n    <main>\n      <div id=\"details\" class=\"clearfix\">\n        <div style=\"margin-left:35px;\"><p style=\"font-size:12px;\"><u>Smooth Arrangement Â· Zum JÃ¤gerplatz 93 Â· 32549 Bad Oeynhausen</u></p></div>\n		<div id=\"client\">\n		          <div class=\"to\">Rechnung an:</div>\n          <h2 class=\"name\">{firstname} {surname}</h2>\n          <div class=\"address\">{street} {nr}</div>\n          <div class=\"address\">{zipcode} {city}<br>{country}</div>\n		  <div>&nbsp;</div>\n          <div class=\"email\"><a href=\"mailto:{useremail}\">{useremail}</a></div>\n        </div>\n        <div id=\"invoice\">\n          <h1>Rechnung Nr.: {invoicenumber}</h1>\n          <div class=\"date\">Rechnungsdatum: {invoicedate}</div>\n		  <div>&nbsp;</div>\n          <div class=\"date\">Zahlungsziel: {paymentterms}</div>\n          <div class=\"date\">Zahlungsart: {paymentgateway}</div>\n        </div>\n      </div>\n      \n{dynamicarea}\n        <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\">\n        <thead>\n          <tr>\n            <th class=\"no\">#</th>\n            <th class=\"desc\">Beschreibung</th>\n            <th class=\"unit\">Einzelpreis</th>\n            <th class=\"qty\">StÃ¼ckzahl</th>\n            <th class=\"total\">Gesamt</th>\n          </tr>\n        </thead>\n        <tbody></tbody>\n        <tfoot>\n          <tr>\n            <td colspan=\"2\"><br></td>\n            <td colspan=\"2\">Zwischensumme</td>\n            <td>{subtotal}â‚¬</td>\n          </tr>\n          <tr>\n            <td colspan=\"2\"><br></td>\n            <td colspan=\"2\">Versandkosten</td>\n            <td>{shiping}â‚¬</td>\n          </tr>\n          <tr>\n            <td colspan=\"2\"><br></td>\n            <td colspan=\"2\">Gesamtsumme</td>\n            <td>{grandtotal}â‚¬</td>\n          </tr>\n        </tfoot>\n      </table>\n	  	  	      <div id=\"thanks\">Vielen Dank fÃ¼r Ihren Auftrag. Wir sind gem. Â§ 19 Abs. 1 UStG. nicht Umsatzsteuerpflichtig</div>\n	        <div id=\"notices\">\n        <div>Bemerkung:</div>\n        <div class=\"notice\">{notice}</div>\n      </div>\n\n    </main>\n    <footer>\n\n      <table>\n	  <tbody><tr>\n	  <td style=\"text-align:left;\">Smooth Arrangement | Cordula Wulfert<br>Zum JÃ¤gerplatz 93<br>32549 Bad Oeynhausen<br><br>Tel.:+49 (0) 5734 - 51993 - 20<br>Fax:+49 (0) 5734 - 51993 - 19</td>\n	  <td style=\"width:150px;\">&nbsp;</td>\n	  <td><table class=\"bank\">\n	  <tbody><tr>\n<td><b>Kontoinhaber</b></td><td>:</td><td class=\"left\">Cordula Wulfert</td>\n</tr>\n<tr>\n<td><b>IBAN</b></td><td>:</td><td class=\"left\">DE60 4905 1285 0000 8874 89</td>\n</tr>\n<tr>\n<td><b>BIC</b></td><td>:</td><td class=\"left\">WELADED1OEH</td>\n</tr>\n<tr>\n<td><b>Institut</b></td><td>:</td><td class=\"left\">Sparkasse Bad Oeynhausen</td>\n</tr>\n<tr>\n<td><b>Verwendungszweck</b></td><td>:</td><td class=\"left\">{invoicenumber}</td>\n</tr>\n</tbody></table></td>\n	  </tr>\n	  </tbody></table>\n	  <p>Seite {page} von {pagetotal}</p>\n    </footer>\n  \n ', '            <tr>\n            <td class=\"no\">{position}</td>\n            <td class=\"desc\">{description}</td>\n            <td class=\"unit\">{unitprice}â‚¬</td>\n            <td class=\"qty\">{qty}</td>\n            <td class=\"total\">{total}â‚¬</td>\n          </tr>  ', '    none');
INSERT INTO `invoice_template` VALUES ('2', 'Angebotsvorlage', 'qwertz', 'qwertz', 'qwertz');

-- ----------------------------
-- Table structure for number_range
-- ----------------------------
DROP TABLE IF EXISTS `number_range`;
CREATE TABLE `number_range` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `vGroup` varchar(200) DEFAULT NULL,
  `vPrefix` varchar(200) DEFAULT NULL,
  `vSufix` varchar(200) DEFAULT NULL,
  `vNextNumber` varchar(51) DEFAULT NULL,
  `iAddedBy` int(11) DEFAULT NULL,
  `iUpdatedBy` int(11) DEFAULT NULL,
  `dAddedDate` datetime DEFAULT NULL,
  `dUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of number_range
-- ----------------------------
INSERT INTO `number_range` VALUES ('1', 'Kundennummernkreis', 'SMA-K4980-', '', '3', '0', '4', '2015-07-02 16:42:44', '2015-07-02 16:41:23');
INSERT INTO `number_range` VALUES ('2', 'Angebotsnummernkreis', 'SMA-A4980-', '', '6', '0', '4', '2015-07-02 16:42:43', '2015-07-02 16:41:25');
INSERT INTO `number_range` VALUES ('3', 'Rechnungsnummernkreis', 'SMA-R4980-', '', '9', '0', '4', '2015-07-02 16:43:10', '2015-07-02 16:41:26');

-- ----------------------------
-- Table structure for payment_mst
-- ----------------------------
DROP TABLE IF EXISTS `payment_mst`;
CREATE TABLE `payment_mst` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `vPayment` varchar(250) DEFAULT NULL,
  `iAddedBy` int(11) DEFAULT NULL,
  `iUpdatedBy` int(11) DEFAULT NULL,
  `dAddedDate` datetime DEFAULT NULL,
  `dUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iId`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of payment_mst
-- ----------------------------
INSERT INTO `payment_mst` VALUES ('1', 'PayPal', '4', '4', '2015-07-02 13:21:03', '2015-07-02 16:39:13');
INSERT INTO `payment_mst` VALUES ('6', 'Sepa Lastschrift', '4', '4', '2015-07-02 16:39:15', '2015-07-02 16:40:50');
INSERT INTO `payment_mst` VALUES ('7', 'Sepa Ãœberweisung', '4', '4', '2015-07-02 16:39:15', '2015-07-02 16:41:40');
INSERT INTO `payment_mst` VALUES ('8', 'Barverkauf', '4', '4', '2015-07-02 16:39:16', '2015-07-02 16:40:26');

-- ----------------------------
-- Table structure for payment_term_mst
-- ----------------------------
DROP TABLE IF EXISTS `payment_term_mst`;
CREATE TABLE `payment_term_mst` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `vName` varchar(250) DEFAULT NULL,
  `vTerm` int(11) DEFAULT NULL,
  `iAddedBy` int(11) DEFAULT NULL,
  `iUpdatedBy` int(11) DEFAULT NULL,
  `dAddedDate` datetime DEFAULT NULL,
  `dUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of payment_term_mst
-- ----------------------------
INSERT INTO `payment_term_mst` VALUES ('8', 'Bar<br>', '0', '4', '4', '2015-07-02 16:38:06', '2015-07-02 16:44:58');
INSERT INTO `payment_term_mst` VALUES ('9', 'Lastschrift<br>', '0', '4', '4', '2015-07-02 16:38:26', '2015-07-02 16:45:05');
INSERT INTO `payment_term_mst` VALUES ('10', 'Ãœberweisung', '5', '4', '4', '2015-07-02 16:38:53', '2015-07-02 16:39:09');

-- ----------------------------
-- Table structure for salutation
-- ----------------------------
DROP TABLE IF EXISTS `salutation`;
CREATE TABLE `salutation` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `vSalutation` varchar(250) DEFAULT NULL,
  `iAddedBy` int(11) DEFAULT NULL,
  `iUpdatedBy` int(11) DEFAULT NULL,
  `dAddedDate` datetime DEFAULT NULL,
  `dUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iId`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of salutation
-- ----------------------------
INSERT INTO `salutation` VALUES ('1', 'Herr', '0', '4', null, '2015-07-07 13:21:55');
INSERT INTO `salutation` VALUES ('2', 'Frau', '0', null, null, '2015-07-02 16:46:17');
INSERT INTO `salutation` VALUES ('8', 'Herr Dr.', '4', '4', '2015-07-02 16:36:01', '2015-07-07 13:24:12');

-- ----------------------------
-- Table structure for tax_rate
-- ----------------------------
DROP TABLE IF EXISTS `tax_rate`;
CREATE TABLE `tax_rate` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `vVat` varchar(250) DEFAULT NULL,
  `iAddedBy` int(11) DEFAULT NULL,
  `iUpdatedBy` int(11) DEFAULT NULL,
  `dAddedDate` datetime DEFAULT NULL,
  `dUpdatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iId`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tax_rate
-- ----------------------------
INSERT INTO `tax_rate` VALUES ('1', '7', null, '4', null, '2015-07-07 13:22:20');
INSERT INTO `tax_rate` VALUES ('2', '19', null, null, null, '2015-07-02 16:47:55');

-- ----------------------------
-- Table structure for user_mst
-- ----------------------------
DROP TABLE IF EXISTS `user_mst`;
CREATE TABLE `user_mst` (
  `iId` int(11) NOT NULL AUTO_INCREMENT,
  `vFname` varchar(250) DEFAULT NULL,
  `vLname` varchar(250) DEFAULT NULL,
  `vEmail` varchar(250) DEFAULT NULL,
  `vPassword` varchar(250) DEFAULT NULL,
  `vUserType` varchar(11) DEFAULT NULL,
  `vPosition` varchar(200) NOT NULL,
  `vSolution` varchar(51) DEFAULT NULL,
  `vCustomerNumber` varchar(100) DEFAULT NULL,
  `vCompany` varchar(250) DEFAULT NULL,
  `vUstid` varchar(100) DEFAULT NULL,
  `vRoad` varchar(500) DEFAULT NULL,
  `vHouseNumber` varchar(100) DEFAULT NULL,
  `vZip` varchar(100) DEFAULT NULL,
  `vPlace` varchar(100) DEFAULT NULL,
  `vCountry` varchar(100) DEFAULT NULL,
  `vPhone` varchar(100) DEFAULT NULL,
  `vFax` varchar(100) DEFAULT NULL,
  `vInternet` varchar(100) DEFAULT NULL,
  `vAccountHolder` varchar(100) DEFAULT NULL,
  `vSepa` varchar(100) DEFAULT NULL,
  `dSepaDate` datetime DEFAULT NULL,
  `vIBan` varchar(100) DEFAULT NULL,
  `vBic` varchar(100) DEFAULT NULL,
  `tDescription` text,
  `vStatus` varchar(11) DEFAULT '1',
  `dLastLogin` datetime NOT NULL,
  PRIMARY KEY (`iId`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_mst
-- ----------------------------
INSERT INTO `user_mst` VALUES ('1', 'Philipp', '', 'mysticdefiance@gmail.com', 'c3VwcG9ydA==', '1', 'Administrator', '1', 'SMA-K4980-4', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '1', '2015-07-11 19:01:38');
INSERT INTO `user_mst` VALUES ('2', 'Max', 'Mustermann', 'info@smootharrangement.de', 'anFiR0Vs', '2', 'Customer', '1', 'SMA-K4980-2', '', '', 'Musterstr.', '1', '123451', 'Musterstadt', '1', '0190123456', '0190123456', 'http://smootharrangement.de', 'Max Mustermann', 'Ja', '2015-07-11 00:00:00', 'DE123 456 789 0000 123456', 'WELADEVXXX', 'Max Halt', '1', '0000-00-00 00:00:00');
