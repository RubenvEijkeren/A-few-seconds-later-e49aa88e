<?php

//echo strpos($argv[1], "s");
	
if (strpos($argv[1], "s"))
	echo str_replace("s", " seconden", $argv[1]);
else
	echo "Geen tijd gevonden\n";
?>