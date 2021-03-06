<?php

class Language {

    private $UserLng;
    private $langSelected;
    public $lang = array();


    public function __construct($userLanguage){

        $this->UserLng = $userLanguage;
    }

    public function userLanguage(){

        switch($this->UserLng){
            /*
            ------------------
            Language: English
            ------------------
            */
            case "en":
                $lang['LBL_LOGIN'] = 'Login';
                $lang['LBL_USERNAME'] = 'Username';
                $lang['LBL_EMAILADDRESS'] = 'E-Mail Address';
                $lang['LBL_PASSWORD'] = 'Password';
                $lang['LBL_FORPASSWORD'] = 'Forgot Password';
                $lang['LBL_NEWUSER'] = 'New User';
                $lang['LBL_SAVELOGINDATA'] = 'Save login data';
                $lang['LBL_WELCOME'] = 'Welcome';
                $lang['LBL_LOADING'] = 'Loading ...';
                $lang['LBL_PAGE0'] = 'Home';
                $lang['LBL_PAGE1'] = 'Login';
                $lang['LBL_GERMAN'] = 'German';
                $lang['LBL_ENGLISH'] = 'English';
                $lang['LBL_LOGOUT'] = 'Logout';
                $lang['LBL_ADMINSETTINGS'] = 'Settings';
                $lang['LBL_BTTNOK'] = 'OK';
                $lang['LBL_BTTNSAVE'] = 'Save';
                $lang['LBL_BTTNCANCEL'] = 'Cancel';
                $lang['LBL_BTTNRESET'] = 'Reset';
                $lang['LBL_BTTNSEND'] = 'Send';
                $lang['LBL_BTTINBOX'] = 'Inbox';
                $lang['LBL_BTTNREPLY'] = 'Reply';
                $lang['LBL_BTTNDELETE'] = 'Delete';
                $lang['LBL_BTTNREAD'] = 'Read';
                $lang['LBL_BTTNCLOSE'] = 'Close';
				$lang['LBL_LOGOUTINFO'] = 'Due to the inactivity of this session, your account was temporarily locked.';
                $lang['LBL_LOGOUTINFO2'] = 'To unlock your account, simply slide the button and enter your password.';
                $lang['LBL_SLIDER'] = 'Slide to unlock';
                $lang['LBL_PASSWORDHINT'] = 'Enter your password here....';
                $lang['LBL_PASSWORDOK'] = 'Unlock';
                $lang['LBL_PASSWORDCANCEL'] = 'X';
                $lang['LBL_LOGSCREEN'] = 'Lock Screen';
                $lang['LBL_SCREENLOCKED'] = 'Screen locked';
                $lang['LBL_ACCOUNTSETTINGS'] = 'Account Settings';
                $lang['LBL_ACCNOTIFICATIONS'] = 'Notifications';
                $lang['LBL_ACCNEWPASSWORD'] = 'Password:';
                $lang['LBL_ACCNAME'] = 'Name:';
                $lang['LBL_ACCDESCRIPTION'] = 'Description:';
                $lang['LBL_ACCPASS'] = 'New Password:';
                $lang['LBL_ACCCHANGEPW'] = 'Change Password ...';
                $lang['LBL_ACCCHANGEPWOK'] = 'Password Changed';
                $lang['LBL_LOREMIPSUM'] = 'Lorem Ipsum Bla Bla Bla, Lorem Ipsum Bla Bla Bla, Lorem Ipsum Bla Bla Bla, Lorem Ipsum Bla Bla Bla';
				$lang['LBL_NAVHOME'] = 'Dashboard';
                $lang['LBL_NAV1'] = 'Orders';
                $lang['LBL_NAV11'] = 'To Ship';
                $lang['LBL_NAV12'] = 'Wait for payment';
                $lang['LBL_NAV13'] = 'Canceled';
                $lang['LBL_NAV14'] = 'Deferred delivery';
                $lang['LBL_NAV2'] = 'Stock';
                $lang['LBL_NAV21'] = 'Show all items';
                $lang['LBL_NAV22'] = 'New item';
                $lang['LBL_NAV23'] = 'Stock import';
                $lang['LBL_NAV24'] = 'Stok export';
                $lang['LBL_NAV3'] = 'Customer';
                $lang['LBL_NAV31'] = 'Customer overview';
                $lang['LBL_NAV32'] = 'New customer';
                $lang['LBL_NAV33'] = 'Customer import';
                $lang['LBL_NAV34'] = 'Customer export';
                $lang['LBL_NAV4'] = 'Modules';
                $lang['LBL_NAV41'] = 'Shop';
                $lang['LBL_NAV42'] = 'eBay';
                $lang['LBL_NAV43'] = 'PayPal';				
                $lang['LBL_NAV44'] = 'Amazon';
                $lang['LBL_NAV45'] = 'Twitter';
                $lang['LBL_NAV46'] = 'Google+';
                $lang['LBL_NAV47'] = 'Facebook';
                $lang['LBL_NAV48'] = 'Youtube';
                $lang['LBL_NAV49'] = 'E-Mail';
                $lang['LBL_NAV410'] = 'Banking';
                $lang['LBL_NAV411'] = 'Analytics';
                $lang['LBL_NAV5'] = 'System Setings';
                $lang['LBL_NAV51'] = 'Company profil';
                $lang['LBL_NAV52'] = 'Content management';
				$lang['LBL_CHART1'] = 'New Orders';
                $lang['LBL_CHART2'] = 'To ship';
                $lang['LBL_CHART3'] = 'Wait for payment';
                $lang['LBL_CHART4'] = 'Total sales / month';
                $lang['LBL_CHART5'] = 'New messages';
                $lang['LBL_MESSAGES'] = 'Messages';
                $lang['LBL_NEWMESSAGES'] = 'New messages';
                $lang['LBL_PERSONALDETAILS'] = 'Personal Details';
                $lang['LBL_INVOICEADRESS'] = 'Invoice Adress';
                $lang['LBL_SHIPPINGADRESS'] = 'Shipping Address';
                $lang['LBL_CONTACTDETAILS'] = 'Contact Details';
                $lang['LBL_GENDER'] = 'Gender:';
                $lang['LBL_GENDERMR'] = 'Mr.';
                $lang['LBL_GENDERMRS'] = 'Ms.';
                $lang['LBL_FIRSTNAME'] = 'First Name';
                $lang['LBL_SURNAME'] = 'Surname';
                $lang['LBL_BIRTHDAY'] = 'Date of birth';
                $lang['LBL_CUSTOMERNR'] = 'Customer Nr';
                $lang['LBL_STREET'] = 'Street';
                $lang['LBL_ZIPCODE'] = 'Zip Code';
                $lang['LBL_CITY'] = 'City';
                $lang['LBL_COUNTRY'] = 'Country';
                $lang['LBL_STATE'] = 'State';
                $lang['LBL_SHIPINGISINVOICE'] = 'Shipp to this adress';
                $lang['LBL_EBAYNAME'] = 'eBay Name';
                $lang['LBL_PAYPALEMAIL'] = 'PayPal E-Mail';
                $lang['LBL_CUSDTOMEREMAIL'] = 'Email';
                $lang['LBL_TEL'] = 'Telephone';
                $lang['LBL_FAX'] = 'Fax';
                $lang['LBL_SAVING'] = 'Saving...';
                $lang['LBL_CHANGE'] = 'Change';
                $lang['LBL_ORDERSTOTAL'] = 'Orders';
                $lang['LBL_ORDERSOPEN'] = 'To ship';
                $lang['LBL_ORDERSDONE'] = 'Shipped';
                $lang['LBL_OPENTICKETS'] = 'New tickets';
                $lang['LBL_CLOSEDTICKETS'] = 'Done tickets';				
                $lang['LBL_UPDATEDETAILS'] = 'Update Details';
                $lang['LBL_NEWSLETTER'] = 'Newsletter';
                $lang['LBL_ADDSUBSCRIPTION'] = 'Add Subscription';
                $lang['LBL_RMCSUBSCRIPTION'] = 'Remove Subscription';
                $lang['LBL_NOSUBSCRIPTION'] = 'No active subscription';
                $lang['LBL_LASTORDER'] = 'Last Orders';
                $lang['LBL_MORE'] = 'More';
                $lang['LBL_NEWORDER'] = 'New Order';
                $lang['LBL_PENDING'] = 'Pending';
                $lang['LBL_SHIPPED'] = 'Shipped';
                $lang['LBL_TICKETS'] = 'Tickets';
                $lang['LBL_LOGS'] = 'Logs';
                $lang['LBL_DELETCUSTOMER'] = 'Delete Customer';			
                $lang['LBL_USERSETTINGS'] = 'User settings';			
                $lang['LBL_USERSETTINGS_ACOUNT'] = 'Account Settings';			
                $lang['LBL_USERSETTINGS_NOTIFICATIONS'] = 'Notifications';			
                $lang['LBL_USERSETTINGS_PASSWORD'] = 'Password';			
                $lang['LBL_USERSETTINGS_NAME'] = 'Name';			
                $lang['LBL_USERSETTINGS_DESCRIPTION'] = 'Position';			
                $lang['LBL_USERSETTINGS_EMAIL'] = 'E-Mail';			
                $lang['LBL_USERSETTINGS_INTERVALL'] = 'Interval';			
                $lang['LBL_USERSETTINGS_CHOOSEINTERVAL'] = 'Choose Interval';			
                $lang['LBL_USERSETTINGS_PASSWORDREPEAT'] = 'Repeat Password';			
                $lang['LBL_VALIDATION_REQUIREDFILED'] = 'This field is required';			
                $lang['LBL_VALIDATION_VALIDEMAIL'] = 'Please enter a valid e-mail adress...';			
                $lang['LBL_PRODUCTVIEW_PRODUCT'] = 'Products';					
                $lang['LBL_PRODUCTVIEW_PRODUCTDETAILS'] = 'Product details';					
                $lang['LBL_PRODUCTVIEW_PRODUCTNAME'] = 'Name';					
                $lang['LBL_PRODUCTVIEW_STOCKNUMBER'] = 'Stock Nr.';					
                $lang['LBL_PRODUCTVIEW_PCS'] = 'Number of pieces';					
                $lang['LBL_PRODUCTVIEW_EAN'] = 'EAN';					
                $lang['LBL_PRODUCTVIEW_MANUFACTURER'] = 'Manufacturer';
                $lang['LBL_PRODUCTVIEW_DELIVERYDETAILS'] = 'Delivery details';					
                $lang['LBL_PRODUCTVIEW_WEIGHT'] = 'Weight';					
                $lang['LBL_PRODUCTVIEW_WEIGHTUNITY'] = '(in KG)';					
                $lang['LBL_PRODUCTVIEW_DELIVERYTIME'] = 'Delivery time';					
                $lang['LBL_PRODUCTVIEW_SHIPPINGCOASTS'] = 'Shipping coasts';					
                $lang['LBL_PRODUCTVIEW_PRODUCTCONDITION'] = 'Conditon';					
                $lang['LBL_PRODUCTVIEW_AVAILABILITY'] = 'Availability';
                $lang['LBL_PRODUCTVIEW_PRODUCTDESCRIPTION'] = 'Productdescription';					
                $lang['LBL_PRODUCTVIEW_SHORTDESCRIPTION'] = 'Shortdescription';					
                $lang['LBL_PRODUCTVIEW_LONGDESCRIPTION'] = 'Longdescriptiom';
                $lang['LBL_PRODUCTVIEW_SPECIFICATIONS'] = 'Product Attributs';					
                $lang['LBL_PRODUCTVIEW_NEWVALUE'] = 'New value';					
                $lang['LBL_PRODUCTVIEW_NEWPRODUCTVALUE'] = 'New product value';					
                $lang['LBL_PRODUCTVIEW_ATTRIBUTE'] = 'Attribute';					
                $lang['LBL_PRODUCTVIEW_VALUE'] = 'Value';					
                $lang['LBL_PRODUCTVIEW_DELETECHECKED'] = 'Delete';
                $lang['LBL_PRODUCTVIEW_PRODUCTIMAGES'] = 'Product images';					
                $lang['LBL_PRODUCTVIEW_IMAGEUPLOAD'] = 'Upload';					
                $lang['LBL_PRODUCTVIEW_NOTSELECTED'] = 'Please select file..';					
                $lang['LBL_PRODUCTVIEW_BROWSE'] = 'Browse';					
                $lang['LBL_PRODUCTVIEW_REMOVE'] = 'Delete';
                $lang['LBL_PRODUCTVIEW_CONDITIONS'] = 'Price & Tax & Categorie';					
                $lang['LBL_PRODUCTVIEW_BASEPRICE'] = 'Base price';					
                $lang['LBL_PRODUCTVIEW_PRICE'] = 'Price';
                $lang['LBL_PRODUCTVIEW_CATEGORIE'] = 'Categorie';					
                $lang['LBL_PRODUCTVIEW_TAX'] = 'Tax';				
                $lang['LBL_PRODUCTVIEW_SAVEPRODUCT'] = 'Save product';						
				



                return $lang;
                break;

                /*
                ------------------
                Language: German
                ------------------
                */

            case "ge":
                $lang['LBL_LOGIN'] = 'Anmelden';
                $lang['LBL_USERNAME'] = 'Benutzername';
                $lang['LBL_EMAILADDRESS'] = 'E-Mail-Adresse';
                $lang['LBL_PASSWORD'] = 'Passwort';
                $lang['LBL_FORPASSWORD'] = 'Passwort vergessen';
                $lang['LBL_NEWUSER'] = 'Neuer Benutzer';
                $lang['LBL_SAVELOGINDATA'] = 'Login-Daten speichern';
                $lang['LBL_WELCOME'] = 'willkommen';
                $lang['LBL_LOADING'] = 'Lade...';
				$lang['LBL_PAGE0'] = 'Home';
                $lang['LBL_PAGE1'] = 'Login';
				$lang['LBL_GERMAN'] = 'Deutsch';
                $lang['LBL_ENGLISH'] = 'Englisch';
				$lang['LBL_LOGOUT'] = 'Abmelden';
				$lang['LBL_ADMINSETTINGS'] = 'Einstellungen';
				$lang['LBL_BTTNOK'] = 'OK';
                $lang['LBL_BTTNSAVE'] = 'Speichern';
                $lang['LBL_BTTNCANCEL'] = 'Abbrechen';
                $lang['LBL_BTTNRESET'] = 'Zurücksetzen';
                $lang['LBL_BTTNSEND'] = 'Senden';
				$lang['LBL_BTTNSEND'] = 'Senden';
                $lang['LBL_BTTINBOX'] = 'Posteingang';
                $lang['LBL_BTTNREPLY'] = 'Antworten';
                $lang['LBL_BTTNDELETE'] = 'Löschen';
                $lang['LBL_BTTNREAD'] = 'Lesen';
				$lang['LBL_BTTNCLOSE'] = 'Schließen';
				$lang['LBL_LOGOUTINFO'] = 'Aufgrund von Inaktivität wurde Ihr Konto vorübergehend gesperrt.';
				$lang['LBL_LOGOUTINFO2'] = 'Um Ihr Konto zu entsperren, schieben Sie den Slider nach rechts und geben Sie Ihr Paswort ein.';
				$lang['LBL_SLIDER'] = 'Slide to unlock';
				$lang['LBL_PASSWORDHINT'] = 'Geben Sie Ihr Passwort hier ein....';
				$lang['LBL_PASSWORDOK'] = 'Entsperren';
				$lang['LBL_PASSWORDCANCEL'] = 'X';
				$lang['LBL_LOGSCREEN'] = 'Bildschirm sperren';
				$lang['LBL_SCREENLOCKED'] = 'Bildschirm gesperrt';
                $lang['LBL_ACCOUNTSETTINGS'] = 'Account Einstellungen';
                $lang['LBL_ACCNOTIFICATIONS'] = 'Benachrichtigungen';
                $lang['LBL_ACCNEWPASSWORD'] = 'Passwort';
                $lang['LBL_ACCNAME'] = 'Name';
                $lang['LBL_ACCDESCRIPTION'] = 'Position';
                $lang['LBL_ACCPASS'] = 'Neues Passwort';
                $lang['LBL_ACCCHANGEPW'] = 'Passwort ändern ...';
                $lang['LBL_ACCCHANGEPWOK'] = 'Passwort geändert';
                $lang['LBL_LOREMIPSUM'] = 'Lorem Ipsum Bla Bla Bla, Lorem Ipsum Bla Bla Bla, Lorem Ipsum Bla Bla Bla,Lorem Ipsum Bla Bla Bla,Lorem Ipsum Bla Bla Bla';
				$lang['LBL_NAVHOME'] = 'Übersicht';
                $lang['LBL_NAV1'] = 'Bestellungen';
                $lang['LBL_NAV11'] = 'Zu versenden';
                $lang['LBL_NAV12'] = 'Zahlung offen';
                $lang['LBL_NAV13'] = 'Storniert';
                $lang['LBL_NAV14'] = 'Zurückgestellt';
                $lang['LBL_NAV2'] = 'Artikel';
                $lang['LBL_NAV21'] = 'Artikel Anzeigen';
                $lang['LBL_NAV22'] = 'Artikel anlegen';
                $lang['LBL_NAV23'] = 'Artikel importieren';
                $lang['LBL_NAV24'] = 'Artikel exportieren';
                $lang['LBL_NAV3'] = 'Kunden';
                $lang['LBL_NAV31'] = 'Kunden anzeigen';
                $lang['LBL_NAV32'] = 'Neuer Kunde';
                $lang['LBL_NAV33'] = 'Kunden importieren';
                $lang['LBL_NAV34'] = 'Kunden exportieren';
                $lang['LBL_NAV4'] = 'Modulverwaltung';
                $lang['LBL_NAV41'] = 'Shop';
                $lang['LBL_NAV42'] = 'eBay';
                $lang['LBL_NAV43'] = 'PayPal';				
                $lang['LBL_NAV44'] = 'Amazon';
                $lang['LBL_NAV45'] = 'Twitter';
                $lang['LBL_NAV46'] = 'Google+';
                $lang['LBL_NAV47'] = 'Facebook';
                $lang['LBL_NAV48'] = 'Youtube';
                $lang['LBL_NAV49'] = 'E-Mail';
                $lang['LBL_NAV410'] = 'Banking';
                $lang['LBL_NAV411'] = 'Analytics';
                $lang['LBL_NAV5'] = 'System Einstellungen';
                $lang['LBL_NAV51'] = 'Firmen Profil';
                $lang['LBL_NAV52'] = 'Text Management';
                $lang['LBL_CHART1'] = 'Neue Bestellungen';
                $lang['LBL_CHART2'] = 'Zu versenden';
                $lang['LBL_CHART3'] = 'Warten auf Zahlung';
                $lang['LBL_CHART4'] = 'Umsatz / Monat';
                $lang['LBL_CHART5'] = 'Neue Nachrichten';
				$lang['LBL_MESSAGES'] = 'Nachrichten';
                $lang['LBL_NEWMESSAGES'] = 'Neu';
                $lang['LBL_PERSONALDETAILS'] = 'Persönliche Angaben';
                $lang['LBL_INVOICEADRESS'] = 'Rechnungsanschrift';
                $lang['LBL_SHIPPINGADRESS'] = 'Versandadresse';
                $lang['LBL_CONTACTDETAILS'] = 'Kontakt Details';
                $lang['LBL_GENDER'] = 'Anrede';
                $lang['LBL_GENDERMR'] = 'Herr';
                $lang['LBL_GENDERMRS'] = 'Frau';
                $lang['LBL_FIRSTNAME'] = 'Vorname';
                $lang['LBL_SURNAME'] = 'Nachname';
                $lang['LBL_BIRTHDAY'] = 'Geburtsdatum';
                $lang['LBL_CUSTOMERNR'] = 'Kundennummer';
                $lang['LBL_STREET'] = 'Straße';
                $lang['LBL_ZIPCODE'] = 'Postleitzahl';
                $lang['LBL_CITY'] = 'Ort';
                $lang['LBL_COUNTRY'] = 'Land';
                $lang['LBL_STATE'] = 'Bundesland';
                $lang['LBL_SHIPINGISINVOICE'] = 'An diese Adresse liefern';
                $lang['LBL_EBAYNAME'] = 'eBay Name';
                $lang['LBL_PAYPALEMAIL'] = 'PayPal E-Mail';
                $lang['LBL_CUSDTOMEREMAIL'] = 'E-Mail';
                $lang['LBL_TEL'] = 'Telefon';
                $lang['LBL_FAX'] = 'Fax';
                $lang['LBL_SAVING'] = 'Speichern...';
                $lang['LBL_CHANGE'] = 'Ändern';
                $lang['LBL_ORDERSTOTAL'] = 'Bestellungen';
                $lang['LBL_ORDERSOPEN'] = 'Zu versenden';
                $lang['LBL_ORDERSDONE'] = 'Versendet';
                $lang['LBL_OPENTICKETS'] = 'Neue Tickets';
                $lang['LBL_CLOSEDTICKETS'] = 'Erledigte Tickets';
                $lang['LBL_UPDATEDETAILS'] = 'Daten ändern';
                $lang['LBL_NEWSLETTER'] = 'Newsletter';
                $lang['LBL_ADDSUBSCRIPTION'] = 'Newsletter hinzufügen';
                $lang['LBL_RMCSUBSCRIPTION'] = 'Newsletter entfernen';
                $lang['LBL_NOSUBSCRIPTION'] = 'Kein Newsletter aboniert';
                $lang['LBL_LASTORDER'] = 'Bestellungen';
                $lang['LBL_MORE'] = 'Alle anzeigen';
                $lang['LBL_NEWORDER'] = 'NEU';
                $lang['LBL_PENDING'] = 'Warte auf Zahlung';
                $lang['LBL_SHIPPED'] = 'Versendet';
                $lang['LBL_TICKETS'] = 'Tickets';
                $lang['LBL_LOGS'] = 'Logs';
                $lang['LBL_DELETCUSTOMER'] = 'Benutzer löschen';	
                $lang['LBL_USERSETTINGS'] = 'Benutzereinstellungen';			
                $lang['LBL_USERSETTINGS_ACOUNT'] = 'Konto Einstellungen';			
                $lang['LBL_USERSETTINGS_NOTIFICATIONS'] = 'Benachrichtigungen';			
                $lang['LBL_USERSETTINGS_PASSWORD'] = 'Passwort';			
                $lang['LBL_USERSETTINGS_NAME'] = 'Name';			
                $lang['LBL_USERSETTINGS_DESCRIPTION'] = 'Position';			
                $lang['LBL_USERSETTINGS_EMAIL'] = 'E-Mail';			
                $lang['LBL_USERSETTINGS_INTERVALL'] = 'Intervall';			
                $lang['LBL_USERSETTINGS_CHOOSEINTERVAL'] = 'Wählen Sie ein Intervall';			
                $lang['LBL_USERSETTINGS_PASSWORDREPEAT'] = 'Passwort wiederholung';			
                $lang['LBL_VALIDATION_REQUIREDFILED'] = 'Dieses Feld ist erforderlich';
                $lang['LBL_PRODUCTVIEW_PRODUCT'] = 'Artikel Verwaltung';					
                $lang['LBL_PRODUCTVIEW_PRODUCTDETAILS'] = 'Artikel Details';					
                $lang['LBL_PRODUCTVIEW_PRODUCTNAME'] = 'Artikelname';					
                $lang['LBL_PRODUCTVIEW_STOCKNUMBER'] = 'Artikelnummer';					
                $lang['LBL_PRODUCTVIEW_PCS'] = 'Artikelanzahl';					
                $lang['LBL_PRODUCTVIEW_EAN'] = 'EAN';					
                $lang['LBL_PRODUCTVIEW_MANUFACTURER'] = 'Hersteller';
                $lang['LBL_PRODUCTVIEW_DELIVERYDETAILS'] = 'Lieferdetails';					
                $lang['LBL_PRODUCTVIEW_WEIGHT'] = 'Gewicht';					
                $lang['LBL_PRODUCTVIEW_WEIGHTUNITY'] = '(in KG)';					
                $lang['LBL_PRODUCTVIEW_DELIVERYTIME'] = 'Lieferzeit';					
                $lang['LBL_PRODUCTVIEW_SHIPPINGCOASTS'] = 'Versandkosten';					
                $lang['LBL_PRODUCTVIEW_PRODUCTCONDITION'] = 'Zustand';					
                $lang['LBL_PRODUCTVIEW_AVAILABILITY'] = 'Verfügbarkeit';
                $lang['LBL_PRODUCTVIEW_PRODUCTDESCRIPTION'] = 'Productbeschreibung';					
                $lang['LBL_PRODUCTVIEW_SHORTDESCRIPTION'] = 'Kurzbeschreibung';					
                $lang['LBL_PRODUCTVIEW_LONGDESCRIPTION'] = 'Artikelbeschreibung';
                $lang['LBL_PRODUCTVIEW_SPECIFICATIONS'] = 'Artikel Merkmale';					
                $lang['LBL_PRODUCTVIEW_NEWVALUE'] = 'Neuer Wert';					
                $lang['LBL_PRODUCTVIEW_NEWPRODUCTVALUE'] = 'Neue Produkt Eigenschaft';					
                $lang['LBL_PRODUCTVIEW_ATTRIBUTE'] = 'Eigenschaft';					
                $lang['LBL_PRODUCTVIEW_VALUE'] = 'Wert';					
                $lang['LBL_PRODUCTVIEW_DELETECHECKED'] = 'Löschen';
                $lang['LBL_PRODUCTVIEW_PRODUCTIMAGES'] = 'Produkt Bilder';					
                $lang['LBL_PRODUCTVIEW_IMAGEUPLOAD'] = 'Upload';					
                $lang['LBL_PRODUCTVIEW_NOTSELECTED'] = 'Keine Datei ausgewählt';					
                $lang['LBL_PRODUCTVIEW_BROWSE'] = 'Durchsuchen';					
                $lang['LBL_PRODUCTVIEW_REMOVE'] = 'Löschen';
                $lang['LBL_PRODUCTVIEW_CONDITIONS'] = 'Preise & Steuern & Kategorie';					
                $lang['LBL_PRODUCTVIEW_BASEPRICE'] = 'Preis EK';					
                $lang['LBL_PRODUCTVIEW_PRICE'] = 'Preis VK';
                $lang['LBL_PRODUCTVIEW_CATEGORIE'] = 'Kategorie';					
                $lang['LBL_PRODUCTVIEW_TAX'] = 'Steuerklasse';				
                $lang['LBL_PRODUCTVIEW_SAVEPRODUCT'] = 'Artikel speichern';					
				

				
				
                return $lang;
                break;

                /*
                ------------------
                Default Language
                ------------------
                */
                default:
                $lang['LBL_LOGIN'] = 'Anmelden';
                $lang['LBL_USERNAME'] = 'Benutzername';
                $lang['LBL_EMAILADDRESS'] = 'E-Mail-Adresse';
                $lang['LBL_PASSWORD'] = 'Passwort';
                $lang['LBL_FORPASSWORD'] = 'Passwort vergessen';
                $lang['LBL_NEWUSER'] = 'Neuer Benutzer';
                $lang['LBL_SAVELOGINDATA'] = 'Login-Daten speichern';
                $lang['LBL_WELCOME'] = 'willkommen';
                $lang['LBL_LOADING'] = 'Lade...';
				$lang['LBL_PAGE0'] = 'Home';
                $lang['LBL_PAGE1'] = 'Login';
				$lang['LBL_GERMAN'] = 'Deutsch';
                $lang['LBL_ENGLISH'] = 'Englisch';
				$lang['LBL_LOGOUT'] = 'Abmelden';
				$lang['LBL_ADMINSETTINGS'] = 'Einstellungen';
				$lang['LBL_BTTNOK'] = 'OK';
                $lang['LBL_BTTNSAVE'] = 'Speichern';
                $lang['LBL_BTTNCANCEL'] = 'Abbrechen';
                $lang['LBL_BTTNRESET'] = 'Zurücksetzen';
                $lang['LBL_BTTNSEND'] = 'Senden';
				$lang['LBL_BTTNSEND'] = 'Senden';
                $lang['LBL_BTTINBOX'] = 'Posteingang';
                $lang['LBL_BTTNREPLY'] = 'Antworten';
                $lang['LBL_BTTNDELETE'] = 'Löschen';
                $lang['LBL_BTTNREAD'] = 'Lesen';
				$lang['LBL_BTTNCLOSE'] = 'Schließen';
				$lang['LBL_LOGOUTINFO'] = 'Aufgrund von Inaktivität wurde Ihr Konto vorübergehend gesperrt.';
				$lang['LBL_LOGOUTINFO2'] = 'Um Ihr Konto zu entsperren, schieben Sie den Slider nach rechts und geben Sie Ihr Paswort ein.';
				$lang['LBL_SLIDER'] = 'Slide to unlock';
				$lang['LBL_PASSWORDHINT'] = 'Geben Sie Ihr Passwort hier ein....';
				$lang['LBL_PASSWORDOK'] = 'Entsperren';
				$lang['LBL_PASSWORDCANCEL'] = 'X';
				$lang['LBL_LOGSCREEN'] = 'Bildschirm sperren';
				$lang['LBL_SCREENLOCKED'] = 'Bildschirm gesperrt';
                $lang['LBL_ACCOUNTSETTINGS'] = 'Account Einstellungen';
                $lang['LBL_ACCNOTIFICATIONS'] = 'Benachrichtigungen';
                $lang['LBL_ACCNEWPASSWORD'] = 'Passwort';
                $lang['LBL_ACCNAME'] = 'Name';
                $lang['LBL_ACCDESCRIPTION'] = 'Position';
                $lang['LBL_ACCPASS'] = 'Neues Passwort';
                $lang['LBL_ACCCHANGEPW'] = 'Passwort ändern ...';
                $lang['LBL_ACCCHANGEPWOK'] = 'Passwort geändert';
                $lang['LBL_LOREMIPSUM'] = 'Lorem Ipsum Bla Bla Bla, Lorem Ipsum Bla Bla Bla, Lorem Ipsum Bla Bla Bla,Lorem Ipsum Bla Bla Bla,Lorem Ipsum Bla Bla Bla';
				$lang['LBL_NAVHOME'] = 'Übersicht';
                $lang['LBL_NAV1'] = 'Bestellungen';
                $lang['LBL_NAV11'] = 'Zu versenden';
                $lang['LBL_NAV12'] = 'Zahlung offen';
                $lang['LBL_NAV13'] = 'Storniert';
                $lang['LBL_NAV14'] = 'Zurückgestellt';
                $lang['LBL_NAV2'] = 'Artikel';
                $lang['LBL_NAV21'] = 'Artikel Anzeigen';
                $lang['LBL_NAV22'] = 'Artikel anlegen';
                $lang['LBL_NAV23'] = 'Artikel importieren';
                $lang['LBL_NAV24'] = 'Artikel exportieren';
                $lang['LBL_NAV3'] = 'Kunden';
                $lang['LBL_NAV31'] = 'Kunden anzeigen';
                $lang['LBL_NAV32'] = 'Neuer Kunde';
                $lang['LBL_NAV33'] = 'Kunden importieren';
                $lang['LBL_NAV34'] = 'Kunden exportieren';
                $lang['LBL_NAV4'] = 'Modulverwaltung';
                $lang['LBL_NAV41'] = 'Shop';
                $lang['LBL_NAV42'] = 'eBay';
                $lang['LBL_NAV43'] = 'PayPal';
                $lang['LBL_NAV44'] = 'Amazon';
                $lang['LBL_NAV45'] = 'Twitter';
                $lang['LBL_NAV46'] = 'Google+';
                $lang['LBL_NAV47'] = 'Facebook';
                $lang['LBL_NAV48'] = 'Youtube';
                $lang['LBL_NAV49'] = 'E-Mail';
                $lang['LBL_NAV410'] = 'Banking';
                $lang['LBL_NAV411'] = 'Analytics';
                $lang['LBL_NAV5'] = 'System Einstellungen';
                $lang['LBL_NAV51'] = 'Firmen Profil';
                $lang['LBL_NAV52'] = 'Text Management';
                $lang['LBL_CHART1'] = 'Neue Bestellungen';
                $lang['LBL_CHART2'] = 'Zu versenden';
                $lang['LBL_CHART3'] = 'Warten auf Zahlung';
                $lang['LBL_CHART4'] = 'Umsatz / Monat';
                $lang['LBL_CHART5'] = 'Neue Nachrichten';
				$lang['LBL_MESSAGES'] = 'Nachrichten';
                $lang['LBL_NEWMESSAGES'] = 'Neu';
                $lang['LBL_PERSONALDETAILS'] = 'Persönliche Angaben';
                $lang['LBL_INVOICEADRESS'] = 'Rechnungsanschrift';
                $lang['LBL_SHIPPINGADRESS'] = 'Versandadresse';
                $lang['LBL_CONTACTDETAILS'] = 'Kontakt Details';
                $lang['LBL_GENDER'] = 'Anrede';
                $lang['LBL_GENDERMR'] = 'Herr';
                $lang['LBL_GENDERMRS'] = 'Frau';
                $lang['LBL_FIRSTNAME'] = 'Vorname';
                $lang['LBL_SURNAME'] = 'Nachname';
                $lang['LBL_BIRTHDAY'] = 'Geburtsdatum';
                $lang['LBL_CUSTOMERNR'] = 'Kundennummer';
                $lang['LBL_STREET'] = 'Straße';
                $lang['LBL_ZIPCODE'] = 'Postleitzahl';
                $lang['LBL_CITY'] = 'Ort';
                $lang['LBL_COUNTRY'] = 'Land';
                $lang['LBL_STATE'] = 'Bundesland';
                $lang['LBL_SHIPINGISINVOICE'] = 'An diese Adresse liefern';
                $lang['LBL_EBAYNAME'] = 'eBay Name';
                $lang['LBL_PAYPALEMAIL'] = 'PayPal E-Mail';
                $lang['LBL_CUSDTOMEREMAIL'] = 'E-Mail';
                $lang['LBL_TEL'] = 'Telefon';
                $lang['LBL_FAX'] = 'Fax';
                $lang['LBL_SAVING'] = 'Speichern...';
                $lang['LBL_CHANGE'] = 'Ändern';
                $lang['LBL_ORDERSTOTAL'] = 'Bestellungen';
                $lang['LBL_ORDERSOPEN'] = 'Zu versenden';
                $lang['LBL_ORDERSDONE'] = 'Versendet';
                $lang['LBL_OPENTICKETS'] = 'Neue Tickets';
                $lang['LBL_CLOSEDTICKETS'] = 'Erledigte Tickets';
                $lang['LBL_UPDATEDETAILS'] = 'Daten ändern';
                $lang['LBL_NEWSLETTER'] = 'Newsletter';
                $lang['LBL_ADDSUBSCRIPTION'] = 'Newsletter hinzufügen';
                $lang['LBL_RMCSUBSCRIPTION'] = 'Newsletter entfernen';
                $lang['LBL_NOSUBSCRIPTION'] = 'Kein Newsletter aboniert';
                $lang['LBL_LASTORDER'] = 'Bestellungen';
                $lang['LBL_MORE'] = 'Alle anzeigen';
                $lang['LBL_NEWORDER'] = 'NEU';
                $lang['LBL_PENDING'] = 'Warte auf Zahlung';
                $lang['LBL_SHIPPED'] = 'Versendet';
                $lang['LBL_TICKETS'] = 'Tickets';
                $lang['LBL_LOGS'] = 'Logs';
                $lang['LBL_DELETCUSTOMER'] = 'Benutzer löschen';
                $lang['LBL_USERSETTINGS'] = 'Benutzereinstellungen';
                $lang['LBL_USERSETTINGS_ACOUNT'] = 'Konto Einstellungen';
                $lang['LBL_USERSETTINGS_NOTIFICATIONS'] = 'Benachrichtigungen';
                $lang['LBL_USERSETTINGS_PASSWORD'] = 'Passwort';
                $lang['LBL_USERSETTINGS_NAME'] = 'Name';
                $lang['LBL_USERSETTINGS_DESCRIPTION'] = 'Position';
                $lang['LBL_USERSETTINGS_EMAIL'] = 'E-Mail';
                $lang['LBL_USERSETTINGS_INTERVALL'] = 'Intervall';
                $lang['LBL_USERSETTINGS_CHOOSEINTERVAL'] = 'Wählen Sie ein Intervall';
                $lang['LBL_USERSETTINGS_PASSWORDREPEAT'] = 'Passwort wiederholung';
                $lang['LBL_VALIDATION_REQUIREDFILED'] = 'Dieses Feld ist erforderlich';
                $lang['LBL_VALIDATION_VALIDEMAIL'] = 'Bitte geben Sie eine gültige E-Mail Adresse ein...';
                $lang['LBL_PRODUCTVIEW_PRODUCT'] = 'Artikel Verwaltung';					
                $lang['LBL_PRODUCTVIEW_PRODUCTDETAILS'] = 'Artikel Details';					
                $lang['LBL_PRODUCTVIEW_PRODUCTNAME'] = 'Artikelname';					
                $lang['LBL_PRODUCTVIEW_STOCKNUMBER'] = 'Artikelnummer';					
                $lang['LBL_PRODUCTVIEW_PCS'] = 'Artikelanzahl';					
                $lang['LBL_PRODUCTVIEW_EAN'] = 'EAN';					
                $lang['LBL_PRODUCTVIEW_MANUFACTURER'] = 'Hersteller';
                $lang['LBL_PRODUCTVIEW_DELIVERYDETAILS'] = 'Lieferdetails';					
                $lang['LBL_PRODUCTVIEW_WEIGHT'] = 'Gewicht';					
                $lang['LBL_PRODUCTVIEW_WEIGHTUNITY'] = '(in KG)';					
                $lang['LBL_PRODUCTVIEW_DELIVERYTIME'] = 'Lieferzeit';					
                $lang['LBL_PRODUCTVIEW_SHIPPINGCOASTS'] = 'Versandkosten';					
                $lang['LBL_PRODUCTVIEW_PRODUCTCONDITION'] = 'Zustand';					
                $lang['LBL_PRODUCTVIEW_AVAILABILITY'] = 'Verfügbarkeit';
                $lang['LBL_PRODUCTVIEW_PRODUCTDESCRIPTION'] = 'Productbeschreibung';					
                $lang['LBL_PRODUCTVIEW_SHORTDESCRIPTION'] = 'Kurzbeschreibung';					
                $lang['LBL_PRODUCTVIEW_LONGDESCRIPTION'] = 'Artikelbeschreibung';
                $lang['LBL_PRODUCTVIEW_SPECIFICATIONS'] = 'Artikel Merkmale';					
                $lang['LBL_PRODUCTVIEW_NEWVALUE'] = 'Neuer Wert';					
                $lang['LBL_PRODUCTVIEW_NEWPRODUCTVALUE'] = 'Neue Produkt Eigenschaft';					
                $lang['LBL_PRODUCTVIEW_ATTRIBUTE'] = 'Eigenschaft';					
                $lang['LBL_PRODUCTVIEW_VALUE'] = 'Wert';					
                $lang['LBL_PRODUCTVIEW_DELETECHECKED'] = 'Löschen';
                $lang['LBL_PRODUCTVIEW_PRODUCTIMAGES'] = 'Produkt Bilder';					
                $lang['LBL_PRODUCTVIEW_IMAGEUPLOAD'] = 'Upload';					
                $lang['LBL_PRODUCTVIEW_NOTSELECTED'] = 'Keine Datei ausgewählt';					
                $lang['LBL_PRODUCTVIEW_BROWSE'] = 'Durchsuchen';					
                $lang['LBL_PRODUCTVIEW_REMOVE'] = 'Löschen';
                $lang['LBL_PRODUCTVIEW_CONDITIONS'] = 'Preise & Steuern & Kategorie';					
                $lang['LBL_PRODUCTVIEW_BASEPRICE'] = 'Preis EK';					
                $lang['LBL_PRODUCTVIEW_PRICE'] = 'Preis VK';
                $lang['LBL_PRODUCTVIEW_CATEGORIE'] = 'Kategorie';					
                $lang['LBL_PRODUCTVIEW_TAX'] = 'Steuerklasse';				
                $lang['LBL_PRODUCTVIEW_SAVEPRODUCT'] = 'Artikel speichern';		
                return $lang;
                break;

        }
    }
}
if(isset($_COOKIE['language']) && $_COOKIE['language'] != "") {
   $lang = $_COOKIE['language'];
} else {
   $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);//Detecting Default Browser language
}

$language = New Language($lang);
$langArray = array();
$langArray =  $language->userLanguage();
?>