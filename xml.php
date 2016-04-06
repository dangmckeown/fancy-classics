<?php
$op = 0;
$renewals = array();
$xml = simplexml_load_file("http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N");
$market = $xml->response->williamhill->type[1]->market;

foreach($market as $mark){
  echo "<h1>" . $mark->attributes()->name . "</h1>\n";
 
 
# foreach ($market->participant as $part){
#    echo "<p>" . $part->attributes()->name . " " . $part->attributes()->odds "</p>\n\n";
#  }
 
 
}

#print_r($output);

?>
