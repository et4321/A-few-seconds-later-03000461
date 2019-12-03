<?php



if (strpos($argv[1], 's')){
    $sec = (int)$argv[1];
}

else{
    echo "werkt niet".PHP_EOL;
    exit;
}

echo "$sec seconden".PHP_EOL;
