 <?php
/**
 * My own me-page to start with.
 */
include("config.php");

// Get small bits and pieces from various views.
$anteImage   = file_get_contents(__DIR__."/incl/ante_as_small_image.html");
$anteByline  = file_get_contents(__DIR__."/incl/byline.html");

// Create the data array which is to be used in the template file.
$data['title'] = "Min me-sida med HTML5Boilerplate";
$data['meta_description'] = "Min egna me-sida, skapad för kursen phpmvc med HTML5Boilerplate.";
$data['main'] = <<<EOD
<h1>Om mig själv</h1>

<a href="https://www.facebook.com/andreas.georgsson.75">
<figure class="right top">
{$anteImage}
</figure>
</a>

<p>
Jag heter Andréas och är 27 år, bor i Malmö med tjej och 2 hundar. Kommer ursprungligen från Ystad, är Malmöbo sen 2005.
Jobbat inom logistik 2006-2011. Fr.om. HT 2010 har jag nästan uteslutande studerat. 
</p>
<p>
Blev mest diverse kurser men HT2011->VT2012 gick jag YH-utbildningen Programmerare Mobila Applikationer hos 
JB Kompetens i Halmstad, vilket resulterade i att jag idag är jag Androidutvecklare i Helsingborg 
och kör med enskild firma vid sidan om.
</p>

<p>
Just nu är det fullt upp, hoppas hinna med allt som göras!
</p>

{$anteByline}

EOD;

// Hand over to the template engine.
include(__DIR__."/theme/template.php"); 