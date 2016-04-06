<?php

$xml = simplexml_load_file("http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N");

$data = $xml->response->williamhill->class->type;

$classics = $data->getElementById('749');

echo $classics;

/*
foreach($classics as $classic)
echo "<h1>" . $classic->name . "</h1>";
{
    
$ps = $classic->participant;

foreach($ps as $p)
{
    echo $p['name']." - ".$p['odds']."<br />";
}

} //end foreach classics

*/

?>
