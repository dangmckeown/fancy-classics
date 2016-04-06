<?php


//invalid xml file
$xmlparser = xml_parser_create();

// open a file and read data
$fp = fopen("http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N", 'r');
$xmldata = fread($fp, 4096);

xml_parse_into_struct($xmlparser,$xmldata,$values);

xml_parser_free($xmlparser);
print_r($values);


/*
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
*/

?>
