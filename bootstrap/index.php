<?php
echo "просто текст";
$t = <<<t
просто текст 
многослойный
t;
$t2 = <<<t
просто текст 
многослойный
t;
echo "<br>".$t;
echo "<br>".$t2;
//111