<?php
$valueToExchange = 5; //test requested value
$from = 'GBP';
$to = 'USD';
$url = 'http://finance.yahoo.com/d/quotes.csv?f=l1d1t1&s='.$from.$to.'=X';
$handle = fopen($url, 'r');
 
if ($handle) {
    $result = fgetcsv($handle);
    fclose($handle);
}
 
echo '1 '.$from.' is worth '.$result[0].' '.$to.' Based on data on '.$result[1].' '.$result[2] . "\n";
echo $valueToExchange . " " . $from . " is equal to " . retXChange($result[0], $valueToExchange) . " " . $to;


function retXChange($returnVal, $val)
{
	if(isset($returnVal) && isset($val))
	{
		return $returnVal * $val;
	}else{
		return 0;
	}
	
}
?>