<?
//javascriptファイルとして扱う
header("Content-type: application/x-javascript");
$json = file_get_contents("https://api.motisan.info/json/data.json");
$arr = json_decode($json,TRUE);
print_r($arr);
foreach($arr as $data){
    if($data['use'] != ''){
    ?><div>
        <h2><?=addslashes($data['title'])?></h2>
        <pre>
            <code><?=addslashes($data['html'])?></code>
        </pre>
      </div>
    <?
    }
}


echo "document.write('<p>aa".$json."</p>');";

?>
