<?php
$op = 0;
$renewals = array();
$xml = simplexml_load_file("http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N");
$output = $xml->response->williamhill->class->type;

foreach ($type as $ty){
  foreach ($ty->market as $mar){
    $op++;
    echo "Operation $op";
    $renewals[] = $mar;
  }
}

print_r($renewals);

?>
