<?php

$xml = simplexml_load_file("http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N");

$market = $xml->response->williamhill->class->type->market;

foreach ($market as $mark)
{
    
$ps = $mark->participant;

foreach($ps as $p)
{
    echo $p['name']." - ".$p['odds']."<br />";
}

} //end foreach market

?>
