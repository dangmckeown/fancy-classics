<?php

$xml = simplexml_load_file("http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N");
foreach ($xml as $xm){
  foreach ($xm as $xl){
    foreach ($xl as $x){
      echo "<hr />"; 
      var_dump($x);
    }
  }
}
?>
