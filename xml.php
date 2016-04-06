<?php

$dom = new DOMDocument();
$dom->simplexml_load_file("http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N");
#$dom->loadHTMLfile('http://remoteDomain/thispage.html');
$classics=$dom->getElementById('749');

$market = $classics->market;

foreach ($market as $mark)
{

  
$ps = $mark->participant;

foreach($ps as $p)
{
    echo $p['name']." - ".$p['odds']."<br />";
}

} //end foreach market

?>
