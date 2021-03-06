<?php
/**
 * english language file for timesub plugin
 *
 * @author Frank Schiebel <frank@linuxmuster.net>
 */

// keys need to match the langig setting name
// $lang['fixme'] = 'FIXME';
$lang['headertable_aula'] = "Name der Datenbanktabelle, welche die statischen Infos im Kopf des Plans für die Anzeige in der Aula enthält.";
$lang['headertable_lehrer'] = "Name der Datenbanktabelle, welche die statischen Infos im Kopf des Plans für die Anzeige im Lehrerzimmer enthält.";
$lang['substtable_lehrer'] = "Name der Datenbanktabelle, welche die Informationen zu den Vertretungen für die Anzeige im Lehrerzimmer enthält.";
$lang['substtable_aula'] = "Name der Datenbanktabelle, welche die Informationen zu den Vertretungen für die Anzeige in der Aula enthält.";
$lang['curl_uploadsecret'] = 'Passwort, das zum Hochladen der Vertretungspläne per CURL nötig ist.<br />curl -k -F secret="geheim" -F filedata=@plans.zip https://SERVER/portfolio/curlupload.php';
$lang['upload_filename'] = 'Der Dateiname mit vollständigen DokuWiki Pfad, als der der Plan hochgeladen werden soll.';
$lang['extract_target'] = 'DokuWiki Namespace, in den das hochgeladene Archiv ausgepackt werden soll.';
$lang['debug'] = 'Ausgaben zur Fehlersuche an/ausschalten';
$lang['dbfields_order_lehrer'] = "Reihenfolge der Datenbankfelder in der Lehrerzimer-Tabelle, so dass sie zur Kopfzeile der Anzeigetabelle passt: <em>Lehrer, Std., Klasse, Fach, Raum, für, Bemerkung</em>";
$lang['dbfields_order_aula'] = "Reihenfolge der Datenbankfelder in der Aula-Tabelle, so dass sie zur Kopfzeile der Anzeigetabelle passt: <em>Klasse, Std., Lehrer/Fach, vertr. durch, Fach, Raum, Bemerkung</em>";
$lang['tsinternet_filename'] = "Name der Datenbankdatei mit den Vertretungen (Groß/Kleinschreibung beachten!)";
$lang['saveconftocachedir'] = "Ersetzugsliste im Cache-Verzeichnis speichern?";



//Setup VIM: ex: et ts=4 :
