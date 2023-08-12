<?include( dirname( __FILE__ , 3).'/data.php' );//設定
header("Access-Control-Allow-Origin: *");?>
<?date_default_timezone_set('Asia/Tokyo');?>
<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$tools[2]['description']?>"> 
        <title><?=$tools[2]['title']?></title>
        <link rel="stylesheet" href="../../css/index-style-wide-main.css" http-equiv="Cache-Control" content="no-cache">
        <script src="./js/html2canvas.js"></script>
        <script>
        (function(d) {
            var config = {
            kitId: 'yvd3uol',
            scriptTimeout: 3000,
            async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
        </script>
        <style>
            h1{
                font-size: 26px;
                color: #ff8f40;
                border-bottom: dashed 2px #ff8f40;
                text-align: left;
            }
            @font-face {
                font-family: 'MyFont';
                src: url(./font/anz.ttf);
            }
            .black{
                color:#444
            }
            .blue{
                color:#0191ff
            }
            .red{
                color:#fa2a31;
            }
            num,.empty{
                user-select: none;
                font-weight: 600;
                font-size: 31px;
                display: block;
            }
            table td{
                height: 120px;
                vertical-align: top;
                border-bottom: 1px #eee solid;
                font-family: MyFont;
                color:#444
            }
            table th{
                border-bottom: 1px #eee solid;
                padding: 12px 1px;
                font-size: 31px;
                font-family: MyFont;
                color:#444
            }
            
            <?//linear-gradient(45deg, #B67B03 0%, #DAAF08 45%, #FEE9A0 70%, #DAAF08 85%, #B67B03 90% 100%);金https://wk-partners.co.jp/homepage/blog/hpseisaku/htmlcss/huchidorimoji/?>
            
            table p{
                margin:2px 0;
                font-size:21px;
            }
            :root{
                --stroke-width:6px;
                --stroke-color:white;
            }
            .stroke-text{
            color:#a58165;
            font-size: 50px;
            font-family: MyFont, sans-serif;
            font-weight: 700;
            font-style: normal;
            }
            <?

            $img = './i/'.rand(1, 20).'.png';
            if(isset($_GET['bg'])){
                $img = htmlspecialchars($_GET['bg']);
            }
            ?>
            .canvas-renderer-bg{
                background-image: url(<?=$img?>);
                background-repeat: no-repeat;
                background-size: 100% auto;
                border-radius: 20px;
            }
            .pu{
                background:#fd292914;
                height: 17px;
                line-height: 17px;
                margin: 0!important;
            }
            .pu2{
                background:#29e6fd14;
                height: 17px;
                line-height: 17px;
                margin: 0!important;
            }
            .pululu{
                background:#fd2929db;
            }
            .pululu2{
                background:#29e6fddb;
            }
            .h2-info{
                border-bottom: 6px solid #ffc860;
                text-align: left;
                color: #ff8f40;
                background: #fff3dd;
                margin-top: 17px;
                border-radius: 6px;
                padding: 9px;
            }
            #target{
                padding-bottom:20px;
                /*overflow-y: scroll;*/
                width: 100%;
            }
            p{color:#717171;}
        </style>
        <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    </head>
    <body style="background:#fff3e8;margin:0">
        <iframe id="HeaderIframe" class="HeaderIframe" src="../../static/header.html" role="presentation" style="display: block;width: 100%;height: 60px;border: 0;"></iframe>
        <content>
            <nav class="wrapper center" style="margin-top:20px;"><p style="text-align:center;margin:0 auto;color:#75688a">もちもち便利ツール</p></nav>
            <div class="wrapper center" style="margin-top:15px;padding-bottom:10px;max-width: 1200px;">
                <main>
                    <iframe id="ShareIframe" class="ShareIframe" src="../../static/share.html" role="presentation" style="position: relative;left:-15px;width:50px;height:100%;float:left"></iframe>
                    <section style="display: grid;background: white;padding: 1.3rem;border-radius: 12px;" class="s1">
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
                        $default = date("Y-m-01");
                        if(isset($_GET['date'])){
                            $default = htmlspecialchars($_GET['date']);?>
                            <h1><?=$tools[2]['title']?></h1>
                            <h2 style='color:#717171'><?=date("Y年m月", strtotime($default))?>の情報</h2>
                            <p>指定された月の日数:<?=date('t', strtotime(date("Y-m-01", strtotime($default))))?>日<br>
                            指定された月の開始:<?=$week[date('w', strtotime(date("Y-m-01", strtotime($default))))] . '曜日';?><br>
                            指定された日付:<?=date('Y/m/d', strtotime($default))?><br>
                            使用中のタイムゾーン<?=date_default_timezone_get()?></p>  
                        <?}else{?>
                            <?//パンくずいれる?>
                            <div style="display:flex;justify-content:start;align-items: center;">
                                <svg class="home-svg" viewBox="0 0 16 16" fill="silver" style="line-height:24px;float:left;padding: 0 0.5em 0 .2em;position:">
                                    <path d="M15.45,7L14,5.551V2c0-0.55-0.45-1-1-1h-1c-0.55,0-1,0.45-1,1v0.553L9,0.555C8.727,0.297,8.477,0,8,0S7.273,0.297,7,0.555  L0.55,7C0.238,7.325,0,7.562,0,8c0,0.563,0.432,1,1,1h1v6c0,0.55,0.45,1,1,1h3v-5c0-0.55,0.45-1,1-1h2c0.55,0,1,0.45,1,1v5h3  c0.55,0,1-0.45,1-1V9h1c0.568,0,1-0.437,1-1C16,7.562,15.762,7.325,15.45,7z">

                                    </path>
                                </svg>
                                <ol class="breadcrumb" typeof="BreadcrumbList" vocab="https://schema.org/" style="background:transparent;box-shadow:none;border:none">
                                    <li>
                                        <a property="item" typeof="WebPage" title="もちtools | もちが得するwebツール" href="https://tools.motisan.info" class="home">
                                        <span property="name">ツール一覧</span>
                                        </a>
                                        <meta property="position" content="1">
                                    </li>
                                    <li>
                                        <span property="name" class="post post-page current-item">ツール</span>
                                        <meta property="url" content="https://tools.motisan.info/calendar-generator/output.php">
                                        <meta property="position" content="2">
                                    </li>
                                </ol>
                            </div>
                            <style>
                                .home-svg{
                                    height: 17px;
                                    width: 17px;
                                }
                                .breadcrumb li a {
                                    text-decoration: none;
                                    color: #888;
                                }
                                .breadcrumb li {
                                    display: inline;
                                    list-style: none;
                                    font-weight: bold;
                                }
                                .breadcrumb li:after {
                                    content: '▶';
                                    padding: 0 0.2em;
                                    color: silver;
                                }
                                .breadcrumb {
                                    margin: 0;
                                    padding: 0;
                                    list-style: none;
                                }
                                .current-item {
                                    color: #888;
                                }
                                .button-a a{
                                    text-decoration: none;
                                    border-radius: 63px;
                                    padding: 10px 20px;
                                    color: white;
                                    font-weight: 700;
                                    background: #ffd78b;
                                    display: inline-block;
                                    margin-bottom: 10px;
                                }
                            </style>
                            <h1><?=$tools[2]['title']?></h1>
                            <p>日付が指定されていないため今月の情報を取得しています。<br>urlにdate=2023-06-01のような指定を含むと取得する月を変えることができます</p>
                            <p>↓↓↓他の月のカレンダーのボタンです！↓↓↓</p>
                            <div class='button-a'>
                                <a href='<?=(empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>?date=<?=date('Y-m-d', strtotime('-2 month'))?>'><?=date('Y/m', strtotime('-2 month'))?></a>
                                <a href='<?=(empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>?date=<?=date('Y-m-d', strtotime('-1 month'))?>'><?=date('Y/m', strtotime('-1 month'))?></a>
                                <a href='<?=(empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>?date=<?=date('Y-m-d', strtotime('+1 month'))?>'><?=date('Y/m', strtotime('+1 month'))?></a>
                                <a href='<?=(empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>?date=<?=date('Y-m-d', strtotime('+2 month'))?>'><?=date('Y/m', strtotime('+2 month'))?></a>
                                <a href='<?=(empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>?date=<?=date('Y-m-d', strtotime('+3 month'))?>'><?=date('Y/m', strtotime('+3 month'))?></a>
                                <a href='<?=(empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>?date=<?=date('Y-m-d', strtotime('+4 month'))?>'><?=date('Y/m', strtotime('+4 month'))?></a>
                                <a href='<?=(empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']?>?date=<?=date('Y-m-d', strtotime('+5 month'))?>'><?=date('Y/m', strtotime('+5 month'))?></a>
                            </div>
                            <h2 class='h2-info'><?=date("Y年m月")?>の情報</h2>
                            <p>今月の日数:<?=date('t', strtotime(date("Y-m-01")))?>日</p>
                            <p>月の開始:<?=$week[date('w', strtotime(date("Y-m-01")))] . '曜日';?></p>
                            <p>今日の日付:<?=date('Y/m/d')?></p>
                            <p>使用中のタイムゾーン<?=date_default_timezone_get()?></p>
                        <?}?>
                    </div>
                    <p style='padding: 15px;border: #ffd07b dashed 2px;background: #fefff8;color: #a7721a;border-radius: 10px;'>数字をクリックで青、赤、黒に変化<br>数字下をクリックで文字を入力可能<br>文字入力欄下の薄い色部分をクリックで色を濃くできます！</p>
                    <p>PC表示推奨、スマホ版ではカレンダーが横スクロールになっています！</p>
                    <div id="target">
                        <div style='background: white;border: 1px solid whitesmoke;border-radius: 20px;min-width: 1156px;'>
                            <div class='canvas-renderer-bg'><?//background whiteがキャンバスに映らないのでdivでラップ?> 
                                <div style='background-color: rgba(255,255,255,0.8);padding: 20px;border-radius: 20px;background-blend-mode: lighten;'>  
                                    <span class="stroke-text"><?=date("Y m", strtotime($default))?></span>    
                                    <table style='width:100%;table-layout: fixed;'>
                                        <?$day_counter = date('w', strtotime(date("Y-m-01", strtotime($default))));//最初の1日の曜日?>
                                        <tr>
                                            <th style='color:#fa2a31'>日</th>
                                            <th>月</th>
                                            <th>火</th>
                                            <th>水</th>
                                            <th>木</th>
                                            <th>金</th>
                                            <th style='color:#0191ff'>土</th>
                                        </tr>
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
                                                    ?><td>
                                                            <div style='height:calc(120px - 34px);'>
                                                                <num id='d<?=($current_day)?>'><?=$current_day?></num><p contenteditable="true"> </p>
                                                            </div>
                                                            <p class='pu' id='p<?=($current_day)?>' onclick="$('#p<?=($current_day)?>').toggleClass('pululu')"></p>
                                                            <p class='pu2' id='pp<?=($current_day)?>' onclick="$('#pp<?=($current_day)?>').toggleClass('pululu2')"></p>
                                                        </td><?
                                                    $onetime = true;
                                                }else{
                                                    if(!$onetime){
                                                        ?><td><span class='empty'>/</span></td><?
                                                    }else{
                                                        $current_day = $i - $day_counter;
                                                        ?><td>
                                                            <div style='height:calc(120px - 34px);'>
                                                                <num id='d<?=($current_day)?>'><?=$current_day?></num><p contenteditable="true"> </p>
                                                            </div>
                                                            <p class='pu' id='p<?=($current_day)?>' onclick="$('#p<?=($current_day)?>').toggleClass('pululu')"></p>
                                                            <p class='pu2' id='pp<?=($current_day)?>' onclick="$('#pp<?=($current_day)?>').toggleClass('pululu2')"></p>
                                                        </td><?
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
                                                    if(date('t', strtotime(date("Y-m-01", strtotime($default)))) < $current_day){
                                                        $onetime = true;
                                                        ?><td><span class='empty'>/</span></td><?
                                                    }else{
                                                        ?><td>
                                                            <div style='height:calc(120px - 34px);'>
                                                                <num id='d<?=($current_day)?>'><?=$current_day?></num><p contenteditable="true"> </p>
                                                            </div>
                                                            <p class='pu' id='p<?=($current_day)?>' onclick="$('#p<?=($current_day)?>').toggleClass('pululu')"></p>
                                                            <p class='pu2' id='pp<?=($current_day)?>' onclick="$('#pp<?=($current_day)?>').toggleClass('pululu2')"></p>
                                                        </td><?
                                                    }
                                                }?>
                                            </tr>
                                        <?}?>
                                    </table>
                                    <span style='white-space: nowrap;'><div style='position: relative;top: 3px;display: inline-block;width:17px;height:17px;' class='pululu'></div>&nbsp;&nbsp;<p style='display:inline-block;margin-bottom:0' contenteditable="true">は予定1</p>&nbsp;&nbsp;&nbsp;<div style='position: relative;top: 3px;display: inline-block;width:17px;height:17px;' class='pululu2'></div>&nbsp;&nbsp;<p style='display:inline-block;margin-bottom:0' contenteditable="true">は予定2</p></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <!-- 画像変換 -->
                    <div onclick="html2image('#target', '#image');" style='font-size: 20px;width: calc(100% - 40px);border-radius: 100px;padding: 13px 20px;background: #ffd799;font-weight: 700;color: white;border: none;box-shadow: 2px 3px 6px #ff441e26;'>画像化してダウンロード</div>
                    <img id="image" name="image" src="" />
                    <a id="download" href="#" download="<?=date("Y-m", strtotime($default))?>.png"></a>
                    <script>
                        function html2image(html) {
                            var capture = document.querySelector(html);
                            html2canvas(
                                capture, 
                                {
                                    backgroundColor:null,
                                    allowTaint: true,
                                    width: 1156,
                                    windowWidth: 1156,
                                    useCORS: true
                                }
                            ).then(
                                canvas => {
                                    var base64 = canvas.toDataURL('image/png');
                                    //$('#image').attr("src", base64);		//画面に画像表示
                                    $('#download').attr('href', base64);
                                    $('#download')[0].click();				//自動ダウンロード
                                }
                            );
}
                    </script>
                    <?// allowTaint: true,
                            //    useCORS: true,  
                            /*window.onload = function(){

                            //ボタンを押下した際にダウンロードする画像を作る
                            html2canvas(document.getElementById("target"),
                            {
                               
                                onrendered: function(canvas){
                                //aタグのhrefにキャプチャ画像のURLを設定
                                var imgData = canvas.toDataURL();
                                document.getElementById("ss").href = imgData;
                                }
                            });

                        }*/?>
                    </section>
                </main>
                <iframe id="SidebarIframe" class="SidebarIframe" src="../../static/sidebar.html?date=2023/8/12" role="presentation" style="display:block"></iframe>
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