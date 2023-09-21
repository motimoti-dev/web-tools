<?include( dirname( __FILE__ , 3).'/data.php' );//設定
$tool_id = 8;
header("Access-Control-Allow-Origin: *");?>
<?date_default_timezone_set('Asia/Tokyo');?>
<!DOCTYPE html>
<html lang="ja">
    <head>    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$tools[$tool_id]['description']?>"> 
        <title><?=$tools[$tool_id]['title']?></title>
        <link rel="stylesheet" href="../../css/index-style-wide-main.css" http-equiv="Cache-Control" content="no-cache">
        <meta name='robots' content='index,follow'>
        <meta property="og:title" content="<?=$tools[$tool_id]['title']?> | <?=$blog_info['name']?>">
        <meta property="og:type" content="blog">
        <meta property="og:description" content="<?=$tools[$tool_id]['description']?>">
        <meta property="og:url" content="//tools.motisan.info/tools/calendar-generator/output.php">
        <meta property="og:image" content="//tools.motisan.info/i/calendar-generator.png">
        <meta property="og:locale" content="ja_JP">
        <meta property="og:site_name" content="<?=$blog_info['name']?>">
        <link rel="canonical" href="//tools.motisan.info/tools/calendar-generator/output.php">
        <meta name="author" content="<?=$blog_info['author']?>">
        <meta name="theme-color" content="<?=$blog_info['theme-color']?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="<?=$blog_info['twitter']?>">
        <meta name="twitter:title" content="<?=$tools[$tool_id]['title']?>< | <?=$blog_info['name']?>">
        <meta name="twitter:description" content="">
        <meta name="twitter:image" content="<?=$tools[$tool_id]['img']?>">
        <link rel="icon" href="//motisan.info/i/32.png" sizes="32x32">
        <link rel="icon" href="//motisan.info/i/192.png" sizes="192x192">
        <link rel="apple-touch-icon-precomposed" href="//motisan.info/i/apple.png">
        <meta name="msapplication-TileImage" content="//motisan.info/i/ms.png">
        <script src="./js/html2canvas.js"></script>
        <script src="./js/html2canvas.svg.js"></script>
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
                overflow-y: scroll;
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
                    <div class="main-container"><!--ぱんくず-->
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
                                    <span property="name" class="post post-page current-item">SVG to PNG</span>
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
                        </style>
                    </div><!--//ぱんくず-->
                    <h1>SVGを横幅3000pxのPNGにするツール</h1>
                    <p style='padding: 15px;border: #ffd07b dashed 2px;background: #fefff8;color: #a7721a;border-radius: 10px;'>
                    SVG画像を横幅3000pxくらいでレンダリングするために作ったツールです。<br>デフォルトでの設定では横幅が3000pxになるようにします。<br>アップロードするsvgは事前にwitdhが3000pxであることを記述しないと正しく動作しません。</p>
                    <input type='file' accept=".svg" id="file" onchange="OutputImage(this);">
                    <p>疑似的なキャンバスにsvgをレンダリングしてキャプチャを行うことで画像化するツールです。<br>
                    ブラウザにsvgを表示してスクショが簡単に行えるサイズでの使用を想定していません。<br>
                    使用するsvgではsvgタグ自体にwidthが3000pxであることを明示する必要があります。<br>
                    svgタグに直接 width='3000px'と描きこんだ状態のファイルを選択してください。<br>
                    そうでない場合組み込みサイズで指定した部分を横幅3000pxになるように拡大してしまうので画像の左上が極端にでかくなった画像などが生成されてしまいます。
                </p>
                    <script>
                        function OutputImage(target)
                        {
                            //https://nyanblog2222.com/programming/javascript/1132/
                            // 2. ファイル読み込みクラス
                            var reader = new FileReader();

                            // 3. 読み込みクラスの準備が終わった後、画像の情報を設定
                            reader.onload = function () {
                                $svg = $("#svg");

                                // 4. Imageクラスを使ってdiv要素に画像のheightとwidthのサイズを設定
                                img = new Image();
                                img.src = this.result;
                                img.onload = function() {
                                    //$svg.css("width", 3000);
                                }
                            
                                let img_element = document.createElement('img');
                                img_element.src = this.result; // 画像パス
                                img_element.alt = 'svg2iimg'; // 代替テキスト
                                img_element.width = 3000; // 横サイズ（px）

                                // 指定した要素にimg要素を挿入
                                let content_area = document.getElementById("svg");
                                content_area.appendChild(img_element);
                            }
                            // 6. 読み込んだ画像ファイルをURLに変換
                            reader.readAsDataURL(target.files[0]);
                        }
                    </script>
                    <div onclick="html2image('#target', '#image');" style='margin-bottom: 20px;font-size: 20px;width: calc(100% - 40px);border-radius: 100px;padding: 13px 20px;background: #ffd799;font-weight: 700;color: white;border: none;box-shadow: 2px 3px 6px #ff441e26;'>画像化してダウンロード</div>
                    <div id="target">
                        <div id='svg'></div>
                    </div>
                    <a id="download" href="#" download="svg.png"></a>
                    <script>
                        function html2image(html) {
                            $('#target').attr('style','overflow-y:visible');
                            var capture = document.querySelector(html);
                            html2canvas(
                                capture, 
                                {
                                    backgroundColor:null,
                                    allowTaint: true,
                                    width: 3000,
                                    windowWidth:3000,
                                    useCORS: true
                                }
                            ).then(
                                canvas => {
                                    var base64 = canvas.toDataURL('image/png');
                                    $('#download').attr('href', base64);
                                    $('#download')[0].click();				//自動ダウンロード
                                }
                            );
                            $('#target').removeAttr('style');
                            }
                    </script>
                    </section>
                </main>
                <iframe id="SidebarIframe" class="SidebarIframe" src="../../static/sidebar.html?date=2023/9/22" role="presentation" style="display:block"></iframe>
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