<?php

// Sprachdefinitionen für häufig benötigte Zeichenketten
$lang_common = array(

// Textorientierung und Kodierung
'lang_direction'					=>	'ltr', // ltr (von links nach rechts) oder rtl (von rechts nach links)
'lang_identifier'					=>	'de',

// Zahlenformatierung
'lang_decimal_point'				=>	',',
'lang_thousands_sep'				=>	'.',

// Hinweise
'Bad request'						=>	'Ungültige Anfrage. Der Link, dem Sie gefolgt sind, ist ungültig oder veraltet.',
'No view'							=>	'Sie haben keine Berechtigung, diese Foren zu betrachten.',
'No permission'						=>	'Sie haben keine Berechtigung für den Zugriff auf diese Seite.',
'Bad referrer'						=>	'Ungültiger HTTP_REFERER. Sie wurden von einer ungültigen Quelle auf diese Seite weitergeleitet. Bitte gehen Sie zurück und versuchen Sie es noch einmal. Wenn dieses Problem weiterhin besteht, kontrollieren Sie bitte die \'Base URL\'-Variable unter Administration > Optionen und stellen Sie sicher, dass Sie dieses Forum tatsächlich über die eingestellte URL ansteuern. Weitere Informationen über den Referrer-Check entnehmen Sie bitte der FluxBB-Dokumentation.',
'No cookie'							=>	'Sie scheinen sich erfolgreich angemeldet zu haben, es konnte jedoch kein Cookie gesetzt werden. Bitte prüfen Sie die Einstellungen Ihres Browsers und aktivieren Sie die Verwendung von Cookies für diese Website (wenn möglich).',
'Pun include error'					=>	'Das benutzerdefinierte Include %s im Template %s konnte nicht verarbeitet werden. Die zu inkludierende Datei konnte weder im Template-Verzeichnis noch im User-Include-Verzeichnis gefunden werden.',

// Verschiedenes
'Announcement'						=>	'Ankündigung',
'Options'							=>	'Beitragsoptionen',
'Submit'							=>	'Absenden',	// Beschriftung des Submit-Buttons
'Ban message'						=>	'Sie wurden in diesem Forum gebannt.',
'Ban message 2'						=>	'Der Bann endet am',
'Ban message 3'						=>	'Der Administrator oder Moderator, der Sie gebannt hat, hat folgende Nachricht hinterlassen:',
'Ban message 4'						=>	'Bei Fragen kontaktieren Sie bitte den Foren-Administrator unter',
'Never'								=>	'Niemals',
'Today'								=>	'Heute',
'Yesterday'							=>	'Gestern',
'Info'								=>	'Info',	// Die allgemeine Tabellenkopfzeile
'Go back'							=>	'Zurück',
'Maintenance'						=>	'Wartung',
'Redirecting'						=>	'Weiterleitung',
'Click redirect'					=>	'Klicken Sie hier, wenn Sie nicht länger warten wollen (oder Ihr Browser Sie nicht automatisch weiterleitet)',
'on'								=>	'an', // erscheint z.Bsp. in "BBCode ist an"
'off'								=>	'aus',
'Invalid email'						=>	'Die angegebene E-Mail-Adresse ist ungültig.',
'Required'							=>	'(Pflichtfeld)',
'required field'					=>	'ist in diesem Formular ein Pflichtfeld.', // für die Formularprüfung via Javascript
'Last post'							=>	'Letzter Beitrag',
'by'								=>	'von',	// erscheint z.Bsp. in "Letzter Beitrag von" (irgend einem Mitglied)
'New posts'							=>	'Neuer Beitrag', // der Link, der zum neuen Thema/Beitrag führt
'New posts info'					=>	'Zum ersten neuen Beitrag dieses Themas gehen.', // der Popup-Text für die Links neuer Beiträge
'Username'							=>	'Benutzername',
'Password'							=>	'Passwort',
'Email'								=>	'E-Mail',
'Send email'						=>	'E-Mail senden',
'Moderated by'						=>	'Moderiert von',
'Registered'						=>	'Registriert',
'Subject'							=>	'Betreff',
'Message'							=>	'Beitrag',
'Topic'								=>	'Thema',
'Forum'								=>	'Forum',
'Posts'								=>	'Beiträge',
'Replies'							=>	'Antworten',
'Pages'								=>	'Seiten:',
'Page'								=>	'Seite %s',
'BBCode'							=>	'BBCode:', // Das sollten Sie möglichst nicht ändern
'img tag'							=>	'[img] Tag:',
'Smilies'							=>	'Smilies:',
'and'								=>	'und',
'Image link'						=>	'Bild',	// Dieses Bild wird angezeigt, wenn im Profil die Option "Bilder anzeigen" deaktiviert ist
'wrote'								=>	'schrieb:', // für Zitate (quote)
'Mailer'							=>	'Mailer', // Die Signatur der ausgehenden E-Mails des "MyForum-Mailers"
'Important information'				=>	'Wichtige Information',
'Write message legend'				=>	'Schreiben Sie Ihren Beitrag und versenden ihn',
'Previous'							=>	'Vorherige',
'Next'								=>	'Nächste',
'Spacer'							=>	'…', // Ellipse für den Seitentrenner

// Titel
'Title'								=>	'Titel',
'Member'							=>	'Mitglied',	// Voreingestellter Titel
'Moderator'							=>	'Moderator',
'Administrator'						=>	'Administrator',
'Banned'							=>	'Gebannt',
'Guest'								=>	'Gast',

// Sprachstrings für include/parser.php
'BBCode error no opening tag'		=>	'[/%1$s] wurde ohne den öffnenden Tag [%1$s] gefunden',
'BBCode error invalid nesting'		=>	'[%1$s] wurde innerhalb [%2$s] geöffnet, dies ist nicht erlaubt',
'BBCode error invalid self-nesting'	=>	'[%s] wurde innerhalb sich selbst geöffnet, dies ist nicht erlaubt',
'BBCode error no closing tag'		=>	'[%1$s] wurde ohne den schließenden Tag [/%1$s] gefunden',
'BBCode error empty attribute'		=>	'Der [%s]-Tag wurde ohne die erforderlichen Parameter verwendet',
'BBCode code problem'				=>	'Es gibt ein Problem innerhalb Ihrer [code]-Tags',
'BBCode list size error'			=>	'Ihre Liste ist für eine Verarbeitung zu lang, bitte kürzen Sie die Liste!',

// Links, die sich in der Navigation befinden (oben auf jeder Seite)
'Index'								=>	'Index',
'User list'							=>	'Mitglieder',
'Rules'								=>	'Nutzungsbedingungen',
'Search'							=>	'Suche',
'Register'							=>	'Registrieren',
'Login'								=>	'Anmelden',
'Not logged in'						=>	'Sie sind nicht angemeldet.',
'Profile'							=>	'Profil',
'Logout'							=>	'Abmelden',
'Logged in as'						=>	'Angemeldet als:',
'Admin'								=>	'Administration',
'Last visit'						=>	'Ihr letzter Besuch: %s',
'Show new posts'					=>	'Alle Beiträge seit dem letzten Besuch anzeigen',
'Mark all as read'					=>	'Alle Themen als gelesen markieren',
'Mark forum read'					=>	'Dieses Forum als gelesen markieren',
'Title separator'					=>	' / ',

// Links, die sich in der Fusszeile der Seite befinden
'Board footer'						=>	'Fußzeile des Forums',
'Search links'						=>	'Such-Links',
'Show recent posts'					=>	'Aktuelle Beiträge anzeigen',
'Show unanswered posts'				=>	'Unbeantwortete Beiträge anzeigen',
'Show your posts'					=>	'Meine Beiträge anzeigen',
'Show subscriptions'				=>	'Meine abonnierten Themen anzeigen',
'Jump to'							=>	'Wechseln zu',
'Go'								=>	' Los ', // Der Absende-Button zum Sprung ins Forum
'Moderate topic'					=>	'Thema moderieren',
'Move topic'						=>	'Thema verschieben',
'Open topic'						=>	'Thema öffnen',
'Close topic'						=>	'Thema schließen',
'Unstick topic'						=>	'Themenfixierung lösen',
'Stick topic'						=>	'Thema fixieren',
'Moderate forum'					=>	'Forum moderieren',
'Powered by'						=>	'Powered by %s', //Denglisch

// Informationen zur Fehlersuche
'Debug table'						=>	'Debug-Informationen',
'Querytime'							=>	'Erstellt in %1$s Sekunden, %2$s Datenbank-Abfragen ausgeführt',
'Memory usage'						=>	'Speichernutzung: %1$s',
'Peak usage'						=>	'(Maximum: %1$s)',
'Query times'						=>	'Zeit in Sekunden',
'Query'								=>	'Datenbank-Abfrage',
'Total query time'					=>	'Gesamtzeit der Datenbankabfragen: %s',

// E-Mail-bezogene Benachrichtigungen
'New user notification'				=>	'Achtung - neue Registrierung',
'New user message'					=>	'Das Mitglied \'%s\' wurde in den Foren als %s registriert',
'Banned email notification'			=>	'Achtung - Gebannte E-Mail-Adresse erkannt',
'Banned email register message'		=>	'Das Mitglied \'%s\' hat sich mit einer gebannten E-Mail-Adresse registriert: %s',
'Banned email change message'		=>	'Das Mitglied \'%s\' hat seine E-Mail-Adresse auf eine gebannte E-Mail-Adresse geändert: %s',
'Banned email post message'			=>	'Das Mitglied \'%s\' hat mit einer gebannten E-Mail-Adresse geantwortet: %s',
'Duplicate email notification'		=>	'Achtung - E-Mail-Duplikat erkannt',
'Duplicate email register message'	=>	'Das Mitglied \'%s\' hat sich mit einer E-Mail-Adresse registriert, die auch folgendem Mitglied zugeordnet ist: %s',
'Duplicate email change message'	=>	'Das Mitglied \'%s\' hat seine E-Mail-Adresse auf eine E-Mail-Adresse geändert, die auch folgendem Mitglied zugeordnet ist: %s',
'Report notification'				=>	'Meldung(%d) - \'%s\'',
'Report message 1'					=>	'Das Mitglied \'%s\' hat die folgende Nachricht gemeldet: %s',
'Report message 2'					=>	'Grund: %s',

'User profile'						=>	'Mitgliedsprofil: %s',
'Post URL'							=>	'Antwort-URL: %s',
'Email signature'					=>	'Forums-Mailer'."\n".'(Antworten Sie nicht auf diese Nachricht)',

// Für den RSS-Feed der extern.php
'RSS description'					=>	'Die aktuellsten Themen aus %s.',
'RSS description topic'				=>	'Die aktuellsten Beiträge in %s.',
'RSS reply'							=>	'Re: ', // Dem Betreff des Themas wird diese Zeichenkette vorangestellt (um eine Antwort zu kennzeichnen)
'RSS active topics feed'			=>	'RSS - aktiver Themen-Feed',
'Atom active topics feed'			=>	'Atom - aktiver Themen-Feed',
'RSS forum feed'					=>	'RSS-Forums-Feed',
'Atom forum feed'					=>	'Atom-Forums-Feed',
'RSS topic feed'					=>	'RSS-Themen-Feed',
'Atom topic feed'					=>	'Atom-Themen-Feed',

// Teile aus dem Kopfbereich der Administration
'New reports'						=>	'Es sind neue Berichte eingegangen',
'Maintenance mode enabled'			=>	'Der Wartungs-Modus wurde aktiviert!',

);