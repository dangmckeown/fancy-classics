<?php
$op = 0;
$renewals = array();
$xml = simplexml_load_file("http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N");
$output = $xml->response->williamhill->class;

foreach($output->type[1]->market as $market){
  echo "<h1>" . $market->attributes()->name . "</h1>\n";
 
 
# foreach ($market->participant as $part){
#    echo "<p>" . $part->attributes()->name . " " . $part->attributes()->odds "</p>\n\n";
#  }
 
 
}

#print_r($output);

?>
