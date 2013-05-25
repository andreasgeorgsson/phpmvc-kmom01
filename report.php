 <?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisningstexted";
$data['meta_description'] = "Alla redovisningstexter samlade på en sida.";
$data['main'] = <<<EOD
<h1>Redovisning</h1>

<h2>Kmom01: En boilerplate</h2>
<div id="report">
<p>
Jag har snabbsbolat igenom det här kursmomementet pga brist av tid. 
Html5 boilerplate är helt nytt för mig, inte hört talas om det tidigare. Skummade igenom Paul Irishs video,
verkar vara mycket schyst funktionalitet och massor av fixes som man får gratis. 
</p>

<p>
Kursmomentet utförde jag på det stora hela genom att kopiera mos exempel och sen redigera lite lätt.
</p>

<p>
La upp projektet på Github, har konto sen tidigare och kör med klienten Tower så jag slipper allt terminalhackande.
Versionshantering är guld.
</p>

<p>
<b>Utvecklingsmiljö:</b><br>
MAC OS X Lion, Aptana Studio, FileZilla, MAMP, Firefox, Tower.
</p>

<h2>Kmom02: Grunden till ett MVC ramverk</h2>
<p>
</p>
</div>

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php");