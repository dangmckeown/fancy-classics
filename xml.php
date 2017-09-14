<?php
$op = 0;
$renewals = array();
$xml = simplexml_load_file("http://cachepricefeeds.williamhill.com/openbet_cdn?action=template&template=getHierarchyByMarketType&classId=13&marketSort=--&filterBIR=N");

$market = $xml->response->williamhill->class->type[0]->market;
//type[0] = Chelts
//type[1] = Classics

var_dump($market);

foreach($market as $mark){
  
  $bull = preg_match("/\s(win\sany\srace|&)\s/i",$mark->attributes()->name);
  
  if($bull){
    continue;
  }else{
    echo "<h1>" . $mark->attributes()->name . "</h1>\n";
  echo "<table>\n<thead>\n<th>Horse</th> <th>Price</th>\n</thead>\n<tbody>\n";
 
 
foreach ($mark->participant as $part){
    echo "\n<tr>\n<td>" . $part->attributes()->name . "</td> <td>" . ceil(sqrt(100/($part->attributes()->oddsDecimal))) . "</td>\n</tr>\n";
  }
 echo "</tbody>\n</table>";
}

}
#var_dump($market);

?>
