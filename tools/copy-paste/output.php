<?include( dirname( __FILE__ , 3).'/data.php' );//設定
$tool_id = 5;
?><!DOCTYPE html>
<html lang="ja">
    <head>
        <?//共用部分?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$tools[$tool_id]['description']?>"> 
        <title><?=$tools[$tool_id]['title']?></title>
        <meta name='robots' content='index,follow'>
        <meta property="og:title" content="<?=$tools[$tool_id]['title']?> | <?=$blog_info['name']?>">
        <meta property="og:type" content="blog">
        <meta property="og:description" content="<?=$tools[$tool_id]['description']?>">
        <meta property="og:url" content="<?=$tools[$tool_id]['canonical']?>">
        <meta property="og:image" content="//tools.motisan.info/<?=$tools[$tool_id]['img']?>">
        <meta property="og:locale" content="ja_JP">
        <meta property="og:site_name" content="<?=$blog_info['name']?>">
        <link rel="canonical" href="<?=$tools[$tool_id]['canonical']?>">
        <meta name="author" content="<?=$blog_info['author']?>">
        <meta name="theme-color" content="<?=$blog_info['theme-color']?>">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="<?=$blog_info['twitter']?>">
        <meta name="twitter:title" content="<?=$tools[$tool_id]['title']?> | <?=$blog_info['name']?>">
        <meta name="twitter:description" content="<?=$tools[$tool_id]['description']?>">
        <meta name="twitter:image" content="//tools.motisan.info/<?=$tools[$tool_id]['img']?>">
        <link rel="icon" href="//motisan.info/i/32.png" sizes="32x32">
        <link rel="icon" href="//motisan.info/i/192.png" sizes="192x192">
        <link rel="apple-touch-icon-precomposed" href="//motisan.info/i/apple.png">
        <meta name="msapplication-TileImage" content="//motisan.info/i/ms.png">
        <?//END共用部分?>
        <script>document.documentElement.classList.remove('no-js')</script> 
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://tools.motisan.info/css/index-style.css" http-equiv="Cache-Control" content="no-cache">
        <link rel="stylesheet" href="css/moti.css">
        <script src="js/read_data.js"></script>
    </head>
    <body style="background:#fff3e8;margin:0">
        <iframe id="HeaderIframe" class="HeaderIframe" src="../../static/header.html" role="presentation" style="display: block;width: 100%;height: 60px;border: 0;"></iframe>
        <content>
            <nav class="wrapper center" style="margin-top:20px;"><p style="margin:0 auto;color:#75688a">もちもち便利ツール</p></nav>
            <div class="wrapper center" style="margin-top:15px;padding-bottom:10px;max-width: 1350px;">
                <main>
                    <iframe id="ShareIframe" class="ShareIframe" src="../../static/share.html" role="presentation" style="position: relative;left:-15px;width:50px;height:100%;float:left"></iframe>
                    <section style="display: grid;max-width: 960px;background: white;padding: 1.3rem;border-radius: 12px;" class="s1">
                        <!--使いまわすsvg-->
                        <svg style='display:none'>
                            <symbol id="copy" viewBox="0 0 24 24">
                                <rect width="12" height="14" x="8" y="7"></rect>
                                <polyline points="16 3 4 3 4 17"></polyline>
                            </symbol>
                        </svg>
                        <copy-paste>
                            <h1>もちコピペ</h1>
                            <h2>日常系</h2>
                        
                            <h3>もちパワー<svg class='copy'><use xlink:href="#copy"></use></svg></h3>
                            <details>
                                <summary>例)もちパワーを送ります！</summary>
                                <p>もちパワーは個数で表記している場合もちの元気を指し、g(グラム)表記の場合もちのグッズなどを指します！</p>
                            </details>
                            <p>スプレッドシートから取得しています！<br>簡単に追加できるようにしてますので追加して欲しいものがあればいってください！<br>うおおおおおおおおおおおお！</p>
                        </copy-paste>
                        <!--phpをjsとして読み込み-->
                        <script type="text/javascript" src="json.php"></script>
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