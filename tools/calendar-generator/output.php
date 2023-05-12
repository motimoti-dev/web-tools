<?include( dirname( __FILE__ , 3).'/data.php' )//設定?>
<?date_default_timezone_set('Asia/Tokyo');?>
<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$tools[2]['description']?>"> 
        <title><?=$tools[2]['title']?></title>
        <link rel="stylesheet" href="https://tools.motisan.info/css/index-style.css" http-equiv="Cache-Control" content="no-cache">
        <style>
            @font-face {
                font-family: 'MyFont';
                src: url(./font/anz.ttf);
            }
            .black{
                color:#444
            }
            .blue{
                color:blue
            }
            .red{
                color: red;
            }
            num,.empty{
                user-select: none;
                font-weight: 600;
                font-size: 25px;
                display: block;
            }
            .cal td{
                height: 100px;
                vertical-align: top;
                border-bottom: 1px #eee solid;
                font-family: MyFont;
                color:#444
            }
            .cal th{
                border-bottom: 1px #eee solid;
                padding: 12px 1px;
                font-size: 25px;
                font-family: MyFont;
                color:#444
            }
            <?
            $img = 'https://motisan.info/i/れいむもち.png';
            if(isset($_GET['bg'])){
                $img = htmlspecialchars($_GET['bg']);
            }
            ?>
            .cal{
                background-image: url(<?=$img?>);
                background-repeat: no-repeat;
                background-size:100% auto;
                background-color:rgba(255,255,255,0.8);
                background-blend-mode:lighten;
            }
        </style>
        <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    </head>
    <body style="background:#fff3e8;margin:0">
        <iframe id="HeaderIframe" class="HeaderIframe" src="../../static/header.html" role="presentation" style="display: block;width: 100%;height: 60px;border: 0;"></iframe>
        <content>
            <nav class="wrapper center" style="margin-top:20px;"><p style="margin:0 auto;color:#75688a">もちもち便利ツール</p></nav>
            <div class="wrapper center" style="margin-top:15px;padding-bottom:10px;max-width: 1350px;">
                <main>
                    <iframe id="ShareIframe" class="ShareIframe" src="../../static/share.html" role="presentation" style="position: relative;left:-15px;width:50px;height:100%;float:left"></iframe>
                    <section style="display: grid;max-width: 960px;background: white;padding: 1.3rem;border-radius: 12px;" class="s1">
                    <div class="main-container">
                        <?
                        $week = [
                            '日', //0
                            '月', //1
                            '火', //2
                            '水', //3
                            '木', //4
                            '金', //5
                            '土', //6
                          ];
                        ?>
                        <h1><?=$tools[2]['title']?></h1>
                        <h2><?=date("Y年m月")?>の情報</h2>
                        <p>今月の日数:<?=date('t', strtotime(date("Y-m-01")))?>日</p>
                        <p>月の開始:<?=$week[date('w', strtotime(date("Y-m-01")))] . '曜日';?></p>
                        <p>今日の日付:<?=date('Y/m/d')?></p>
                        <p>使用中のタイムゾーン<?=date_default_timezone_get()?></p>
                    </div>
                    <p>数字をクリックで青、赤、黒に変化</p>
                    <p>数字をクリックで青、赤、黒に変化</p>
                    <h2><?=date("Y m")?></h2>
                    <div>
                        <table style='width:100%;table-layout: fixed;' class='cal'>
                            <?$day_counter = date('w', strtotime(date("Y-m-01")));//最初の1日の曜日?>
                            <tr>
                                <th style='color:#fa2a31'>日</th>
                                <th>月</th>
                                <th>火</th>
                                <th>水</th>
                                <th>木</th>
                                <th>金</th>
                                <th style='color:#0191ff'>土</th>
                            </tr>
                            <div>
                            </div>

                            <script>
                            window.addEventListener('DOMContentLoaded',function(){
                            const btn = document.getElementsByTagName('num'); // ①
                            
                            for(let i = 0; i < btn.length; i++){ // ②
                                btn[i].addEventListener('click',function(){ // ②
                                console.log(`${btn[i].textContent}がクリックされました！`); // ③
                                
                                if( btn[i].classList.contains("red") == true ){
                                    $("#d" + btn[i].textContent).toggleClass("black");
                                    $("#d" + btn[i].textContent).removeClass("red");
                                }else if(btn[i].classList.contains("blue") == true ) {
                                    $("#d" + btn[i].textContent).toggleClass("red");
                                    $("#d" + btn[i].textContent).removeClass("blue");
                                }else if(btn[i].classList.contains("black") == true ){
                                    $("#d" + btn[i].textContent).toggleClass("blue");
                                    $("#d" + btn[i].textContent).removeClass("black");
                                } else {
                                    $("#d" + btn[i].textContent).toggleClass("blue");
                                }
                                });
                            }
                            });
                            </script>
                            <tr>
                                <?
                                $onetime = false;
                                $current_day = 1;
                                for($i = 1;$i <= 7;$i++){
                                    if(($i - 1) == $day_counter ){
                                        ?><td><num id='d<?=($current_day)?>'><?=($i - $day_counter)?></num></td><?
                                        $onetime = true;
                                    }else{
                                        if(!$onetime){
                                            ?><td><span class='empty'>/</span></td><?
                                        }else{
                                            $current_day = $i - $day_counter;
                                            ?><td><num id='d<?=($current_day)?>'><?=($current_day)?></num></td><?
                                        }
                                    }
                                }?>
                            </tr>
                            <?
                            $onetime = false;
                            for($n = 1;$n <= 5 and !$onetime;$n++){?>
                                <tr>
                                    <?
                                    for($i = 1;$i <= 7;$i++){
                                        $current_day++;
                                        if(date('t', strtotime(date("Y-m-01"))) < $current_day){
                                            $onetime = true;
                                            ?><td><span class='empty'>/</span></td><?
                                        }else{
                                            ?><td><num id='d<?=($current_day)?>'><?=$current_day?></num></td><?
                                        }
                                    }?>
                                </tr>
                            <?}?>
                        </table>
                    </div>
                    </section>
                </main>
                <iframe id="SidebarIframe" class="SidebarIframe" src="../../static/sidebar.html" role="presentation" style="display:block"></iframe>
            </div>
        </content>
    <iframe id="FooterIframe" class="FooterIframe" src="../../static/footer.html" role="presentation"></iframe>
    <script>
    function inlineIframe(iframe) {
        var onLoad = function () {
            iframe.insertAdjacentHTML('afterend', iframe.contentDocument.body.innerHTML)
            iframe.parentNode.removeChild(iframe)
            iframe.onload = null
        }
        if (iframe.contentWindow.location.href === 'about:blank' || iframe.contentDocument.readyState === 'loading') {
            iframe.onload = onLoad
        } else {
            onLoad()
        }
        }
        inlineIframe(document.querySelector('#HeaderIframe'))
        inlineIframe(document.querySelector('#ShareIframe'))
        inlineIframe(document.querySelector('#SidebarIframe'))
        inlineIframe(document.querySelector('#FooterIframe'))
    </script>
    </body>
</html>