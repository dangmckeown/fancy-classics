<?php

$source = "http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N";

$xml = xmlrpc_decode($source);

var_dump($xml);

?>
