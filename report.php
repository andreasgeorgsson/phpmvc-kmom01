<?php
/**
 * An empty page to show off how it looks.
 */
include("config.php");

// Create the data array which is to be used in the template file.
$data['title'] = "Redovisningstexter";
$data['meta_description'] = "Alla redovisningstexter samlade på en sida.";
$data['main'] = <<<EOD
<h1>Redovisning</h1>

<!-- KMOM 01 -->
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
<b>Utvecklingsmiljö:</b><br/>
MAC OS X Lion, Aptana Studio, FileZilla, MAMP, Firefox, Tower.
</p>
<hr/>

<!-- KMOM 02 -->
<h2>Kmom02: Grunden till ett MVC ramverk</h2>
<p>
Jag döpte mitt ramverk till Paw. Tänkte först köra på något "Orcish" namn eftersom ramverket ska vara brutalt effektivt som en Orc. Men då deras namn är omöjliga att komma ihåg så blev det Paw. Ramverket ska inte vara större än nödvändigt men ändå ge ett avtryck.
</p>
<p>Det blev inga avsteg från tutorialen för min del, den var massiv.</p>
<p>
Jag klonade ner senaste Lydia och drog en span, jag tycker att strukturen verkar riktigt schyst!
</p>
<p>
MVC hade jag ingen större koll på innan, har hört talas om det men bara fått det löst förklarat,  så fann "MVC & Ramverk"-pdf'en mycket intressant.
</p>
<p>
Gjorde inte extrauppgiften. Jag har nog inte riktigt pluggat så mycket på den här uppgiften som jag borde men jag föredrar att hugga i när det behövs och lär mig då. Vid behov går jag tillbaks.
</p>

<p>
<a href="http://www.student.bth.se/~lage12/phpmvc/kmom02/developer">Testa Paw</a>
<a href="https://github.com/andreasgeorgsson/phpmvc-kmom02.git">Paw på Github</a>
</p>

<!-- KMOM 03 -->
</div>
EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php");