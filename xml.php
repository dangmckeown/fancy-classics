<?php

$xml = simplexml_load_file("http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N");

$classics = $xml->response->williamhill->class->type->getElementById("749");

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
