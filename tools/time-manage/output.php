<?include( dirname( __FILE__ , 3).'/data.php' );//設定
date_default_timezone_set('Asia/Tokyo');//タイムゾーンを日本に
?><!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$example[0]['title']?>">
        <script>document.documentElement.classList.remove('no-js')</script> 
        <title><?=$example[0]['title']?></title>
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
                    <section style="display: grid;max-width: 960px;padding: 1.3rem;border-radius: 12px;" class="n1">
                        <style>
                            .n1{
                                background:#ffffff;
                                box-shadow: 15px 15px 28px #ffbba536, -15px -15px 28px #ffecdf99;
                            }
                            .time-manage h2{
                                color:#3c3c3c91;
                                margin: 0;
                            }
                            .time-manage p,.time-manage h3{
                                color: #40404085;
                                margin: 6px 0;
                            }
                            .time-manage label{
                                font-size: 18px;
                                font-weight: 600;
                                color:#40404085;
                                display: flex;
                                margin-bottom:14px;
                            }
                            .time-manage input[type=text],
                            .time-manage input[type=number],
                            .time-manage input[type=password]{
                                padding: 9px 12px;
                                font-size: 15px;
                                font-weight: 700;
                                color:#5252529c;
                                border: none;
                                border-radius: 14px;
                                background: #f5f5f5;
                            }
                            .time-manage input[type=text]:focus,
                            .time-manage input[type=time]:focus,
                            .time-manage input[type=number]:focus,
                            .time-manage input[type=password]:focus{
                                outline: none;
                            }
                            .time-manage label span{
                                line-height: 35px;
                                height: 35px;
                                padding-right:14px;
                            }
                            .time-manage input[type=text]::placeholder,
                            .time-manage input[type=password]::placeholder,
                            .time-manage input[type=password]::placeholder{
                                color:#8c8c8c8a;
                            }
                            input[type="time"] {
                            position: relative;
                            border-radius: 14px;
                            padding: 0 10px;
                            width: 200px;
                            height: 36px;
                            border: 0;
                            background:whitesmoke;
                            box-sizing: border-box;
                            font-size: 14px;
                            color: #999;
                            }
                        </style>
                        <form class='time-manage'>
                            <h2>時間管理ツール</h2>
                            <p>時間は全て管理しましょう！</p>
                            <div>
                                <label>
                                    <span>user</span>
                                    <input type='text' name='user' placeholder="ユーザー名" autocomplete='user' required>
                                </label>
                                <label>
                                    <span>pass</span>
                                    <input type='password' name='pass' placeholder="パスワード" required>
                                </label>
                                <label>
                                    <span>type</span>
                                    <input type='text' name='type' placeholder="type" required>
                                </label>
                            </div>
                            <hr>
                            <label>
                                <span>time</span>
                                <input type='time' value="<?=date('H:i')?>" required>
                            </label>
                            <h2>種類</h2>
                            <label><input type='checkbox'>娯楽</label>
                            <label><input type='checkbox'>人間関係</label>
                            <label><input type='checkbox'>仕事</label>
                            <label><input type='checkbox'>やりたいこと(作業)</label>
                            <h2>実際にプラスになっているか</h2>
                            <label><input type='checkbox'>かなりプラスになった</label>
                            <label><input type='checkbox'>プラスになった</label>
                            <label><input type='checkbox'>マイナスになった</label>
                            <label><input type='checkbox'>かなりマイナスになった</label>
                            <label><input type='checkbox'>プラスでもマイナスでもない</label>
                            <h2>忙しさ</h2>
                            <style>
                                .button-column{
                                    display:flex;
                                }
                                .button-column input[type=checkbox]{/*display:none;.button-column input[type=checkbox]*/
                                    display:none;
                                }
                                
                                #non1:checked+label{
                                    color:red;
                                }
                                
                            </style>
                                                        <div class="wp-block-group__inner-container">
                            <style>
                            .example2{
                                display: none;
                            }
                            .example2:checked+label{
                                color: red;
                            }
                            </style>
                            <input type="checkbox" class="example2" id="3">
                            <label for="3">チェックボックス</label>
</div>
                            <div class='button-column'>
                                <label id='non'><input type='checkbox' id='non1'>対応不可</label>
                                <label><input type='checkbox'>忙しい</label>
                                <label><input type='checkbox'>普通</label>
                                <label><input type='checkbox'>暇</label>
                            </div>
                            <h2>体調</h2>
                            <label><input type='checkbox'>良い</label>
                            <label><input type='checkbox'>少し良い</label>
                            <label><input type='checkbox'>普通</label>
                            <label><input type='checkbox'>少し悪い</label>
                            <label><input type='checkbox'>悪い</label>
                            <h2>イラスト枠</h2>
                            <p>現在の枠数:2/4<br>変更がある場合だけ入力</p>
                            <label>
                                    <span>illust</span>
                                    <input type='number' placeholder="">
                            </label>
                        </form>

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