<?php

const RECIPE_FILE = 'recipe_data.csv';

$recipe_data = array();

// レシピデータCSVを読み込む
$fp = fopen(RECIPE_FILE, 'r');
while ($line = fgetcsv($fp)) {
	$recipe_data[] = $line;
}
fclose($fp);
// 一行目はコメントなので捨てる
array_shift($recipe_data);

// レシピのタイトルを表示する
echo $recipe_data[0][0];

