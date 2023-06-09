<?
//javascriptファイルとして扱う
header("Content-type: application/x-javascript");
$json = file_get_contents("https://api.motisan.info/json/data.json");
$arr = json_decode($json,TRUE);
echo "document.write('<p>aa".$json."</p>');";

?>
