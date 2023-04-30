<?include( dirname( __FILE__ , 3).'/data.php' )//設定?>
<?date_default_timezone_set('Asia/Tokyo');?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$tools[2]['description']?>"> 
        <title><?=$tools[2]['title']?></title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="main-container">
            <h1><?=$tools[2]['title']?></h1>
            <p><?=date('t', strtotime(date("Y-m-01")))?></p>
            <p>使用中のタイムゾーン<?=date_default_timezone_get()?></p>
        </div>
    </body>
</html>