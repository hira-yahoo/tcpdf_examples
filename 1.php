<?php

$rows = file('newfile.php');

$i = 0;
foreach ($rows as $row) {
	echo ($i++)."\t$row";
}
