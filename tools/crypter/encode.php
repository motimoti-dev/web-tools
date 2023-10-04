<?include( dirname( __FILE__ , 3).'/data.php' );//設定
$tool_id = 9;//最初にツールidを指定
//タイムゾーンを日本に
date_default_timezone_set('Asia/Tokyo');?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <?//共用部分?><meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$tools[$tool_id]['description']?>"> 
        <title><?=$tools[$tool_id]['title']?> | もちもちwebツール</title>
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
        <meta name="msapplication-TileImage" content="//motisan.info/i/ms.png"><?//END共用部分?>

        <link rel="stylesheet" href="https://tools.motisan.info/css/index-style.css" http-equiv="Cache-Control" content="no-cache">
        <style>
        h1{
            font-size: 26px;
            color: #ff8f40;
            border-bottom: dashed 2px #ff8f40;
            text-align: left;
        }
        h2{
            border-bottom: 6px solid #ffc860;
                text-align: left;
                color: #ff8f40;
                background: #fff3dd;
                margin-top: 17px;
                border-radius: 6px;
                padding: 9px;
        }
        html { font-size: 62.5%; } /* font-sizeは16pxの62.5%の10px 1rem*/
        main p{
            line-height: 2;
            font-size: 1.4rem;
    
            letter-spacing: .2rem;
        }
        P,a{
            font-size:1.6rem;
        }
        h2{
            font-size:2.2rem;
        }
        h3{
            font-size:1.8rem;
        }
        </style>
    </head>
    <body style="background:#fff3e8;margin:0">
        <iframe id="HeaderIframe" class="HeaderIframe" src="../../static/header.html" role="presentation" style="display: block;width: 100%;height: 60px;border: 0;"></iframe>
        <content>
            <nav class="wrapper center" style="margin-top:20px;"><p style="margin:0 auto;color:#75688a"><?=$blog_info['top-nav-txt']?></p></nav>
            <div class="wrapper center" style="margin-top:15px;padding-bottom:10px;max-width: 1350px;">
                <main>
                    <iframe id="ShareIframe" class="ShareIframe" src="../../static/share.html" role="presentation" style="position: relative;left:-15px;width:50px;height:100%;float:left"></iframe>
                    <section style="display: grid;max-width: 960px;background: white;padding: 20px;border-radius: 12px;" class="s1">
                        <h1>文字暗号化ツール</h1>
                        <p style="padding: 15px;border: #ffd07b dashed 2px;background: #fefff8;color: #a7721a;border-radius: 10px;">このツールはテキストをパスフレーズを使って暗号化できるツールです。<br>暗号化後に本サービスが終了したとしても同じライブラリを使うことによって復号が可能です。<br>ただしここで使用している方法が「AES 256bit」であり、反復回数が何回であったかとパスフレーズを覚えておく必要があります。</p>
                        <div style="display: table;margin-bottom: 2em;width: 100%;max-width:700px;">
                            <div style="max-height:170px;width:20%;border: none;min-width: 60px;display: table-cell;">
                                <img src="https://motisan-test.web.app/i/d-i1.png" style="width: 100%;" data-src="https://motisan-test.web.app/i/d-i1.png" decoding="async" class=" lazyloaded">
                                <noscript><img src="https://motisan-test.web.app/i/d-i1.png" style="width: 100%;" data-eio="l"></noscript>
                            </div>
                            <div style="width: 100%;display: table-cell;vertical-align:middle">
                                <p style="line-height: 1.5;box-shadow: 1px 3px 4px #3d5e781f;width:calc(100% - 5% - 6px);border: 3px solid #eee;background-color: #fff;color: #555;padding: 2.5%;border-radius:15px;margin:auto 0;">こんにちは！もちに機密情報を共有しようとしている場合に念のためと言われこのツールで暗号化することを頼まれる場合があると思います！<br>パスフレーズを事前に聞いていない場合はお手数おかけしますがメールなど他の媒体でパスフレーズを指定しますので少々お待ちください！<br>暗号化後には共有用のURLを送ってください！<br>うおおおおおおおおおおおお！</p>
                            </div>
                        </div>
                        
                        <h2>暗号化(AES 256bit)</h2>
                        <h3>暗号化したい文字</h3>
                        <textarea style='max-width: 1200px;width: 100%;min-height: 200px;' id='target'></textarea>
                        <h3>パスフレーズ(日本語可)</h3>
                        <input type='text' id='passphrase' name='passphrase'>
                        <h3>反復回数</h3>
                        <input type='number' value='100000' id='repetitions' name='repetitions' min="100000">
                        <div>
                            <button onclick="" style="margin-bottom: 20px;font-size: 20px;width: calc(100%);border-radius: 100px;padding: 13px 20px;background: #ffd799;font-weight: 700;color: white;border: none;box-shadow: 2px 3px 6px #ff441e26;">出力する</button>
                        </div>
                        

                        <p>パスフレーズは日本語を含むと総当たりでの突破を困難にします！反復回数は増やせば増やすほどセキュリティが上がりますが数を大きくしすぎると端末の処理速度に依存して処理が重くなります。デフォルトでは100000回です。</p>
                        
                        <h2>注意</h2>
                        <p>パスワードマネージャーなどを信用できない為にパスワードを登録時のURLなどを自分の本名などで暗号化している場合反復回数を忘れるとこのツールにアクセスできなくなると復号できなくなる可能性があります。<br>デフォルトでの反復回数は100000回です。10万回です、覚えておきましょう。</p>
                        <p>上記のような使用目的でパスワードなどをこのツールで暗号化する方は迂闊にその手段を人に伝えないようにしましょう！<br>似たような方法でパスワードを保管してくれるChrome拡張などにTrustというものもありますが大本のTrustにログインされてしまう暗号化されているパスワードは入力補完時に漏れてしまいます。<br>通常パスワード保管や通信に暗号化を含むものはこのような危険性があるため暗号化されたパスワードツールに復号前の情報をパスワードとして保存しておくというのも一つの手です。<br>すでに暗号化されている物を暗号化するくらいの気持ちでいるくらいが安全かもしれません！</p>
                    </section>
                </main>
                <iframe id="SidebarIframe" class="SidebarIframe" src="../../static/sidebar.html?date=2023/10/03" role="presentation" style="display:block"></iframe>
            </div>
        </content>
    <iframe id="FooterIframe" class="FooterIframe" src="../../static/footer.html" role="presentation"></iframe>
    <script src='./iframe.js' defer></script>
    </body>
</html>