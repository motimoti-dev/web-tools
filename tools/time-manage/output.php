<?include( dirname( __FILE__ , 3).'/data.php' );//設定
//タイムゾーンを日本に
date_default_timezone_set('Asia/Tokyo');
function options($button_list){
    foreach($button_list as $button_data){
        ?><input type='radio' name='kid' value="<?=$button_data[1]?>" id='<?=$button_data[1]?>'><label for='<?=$button_data[1]?>'><?=$button_data[0]?></label><?
    }
}

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
                            #kname{
                                width: calc(100% - 18px);
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
                            <?//ログイン処理だけ行った場合過去の履歴が表示される
                            //最初にログインする、下のフォームとこのフォームを別々にする
                            //ログイン中のユーザーが出るようにする?>
                            <hr>
                            <label>
                                <span>time</span>
                                <input type='time' value="<?=date('H:i')?>" required>
                            </label>
                            <h2>行動の種類(必須)</h2>
                            <script>
                                function shortcode(kop){
                                    var kid;
                                    if(kop != ''){
                                        if(kop.indexOf('-') != -1){//-が含まれているかどうか
                                            kid = kop.split('-');
                                            document.getElementById(kid[0]).checked = true;
                                            document.getElementById(kop).checked = true;
                                        }else{//該当ボタンをオンに
                                            document.getElementById(kop).checked = true;
                                        }
                                    }
                                }
                                
                            </script>
                            <style>
                                .shortcode{
                                    display:flex;
                                    margin-bottom:12px;
                                }
                                .shortcode label{
                                    margin-bottom:0;
                                }
                                .shortcode div{
                                    margin-left: 12px;
                                    user-select: none;
                                    padding: 9px 12px;
                                    font-size: 15px;
                                    font-weight: 700;
                                    color: #ffffff;
                                    border: none;
                                    border-radius: 14px;
                                    background: #ffd799;
                                }
                            </style>
                            <div class='shortcode'>
                                <label><input type='text' name='kname' placeholder="(短縮コード)auto fill" id="shortcode"></label>
                                <div onclick="shortcode(document.getElementById('shortcode').value);">コードの反映</div>
                            </div>
                            <?//トイレボタン?>
                            <?//行動履歴からオートフィル?>
                            <div class='button-column'>
                                <input type='radio' name='k' value='k1' id='k1'><label for='k1'>娯楽</label>
                                <input type='radio' name='k' value='k2' id='k2'><label for='k2'>人間関係</label>
                                <input type='radio' name='k' value='k3' id='k3'><label for='k3'>仕事</label>
                                <input type='radio' name='k' value='k4' id='k4'><label for='k4'>食事</label>
                                <input type='radio' name='k' value='k5' id='k5'><label for='k5'>睡眠</label>
                                <input type='radio' name='k' value='k6' id='k6'><label for='k6'>何もしない</label>
                                <input type='radio' name='k' value='k7' id='k7'><label for='k7'>その他</label>         
                                <section class='k1option options' id='k1op'>
                                    <?//TODO:この項目は使用頻度によって場所が入れ替わるように設定する?>
                                    <?$button_list = [
                                        ['ゲーム','k1-1'],
                                        ['スマホをいじる','k1-2'],
                                        ['SNS','k1-3'],
                                        ['動画を見る','k1-4'],
                                        ['音楽を聞く','k1-5'],
                                        ['瞑想','k1-6'],
                                        ['だらける','k1-7'],
                                        ['外出(移動を含む、移動時間を計測しない)','k1-8'],
                                        ['やりたいこと(作業)','k1-9'],
                                        ['カラオケ','k1-10'],
                                        ['ニュースやラジオの視聴','k1-11'],
                                        ['入浴','k1-12'],
                                        ['入浴(サウナを含む)','k1-13'],
                                        ['日用品以外の買い物','k1-14'],
                                        ['スキンシップ','k1-15'],
                                        ['自慰行為','k1-16'],
                                        ['性行為','k1-17'],
                                        ['たばこ','k1-18'],
                                        ['ギャンブル','k1-19'] 
                                    ];
                                    options($button_list);?>
                                </section>
                                <section class='k2option options' id='k2op'>
                                    <?$button_list = [
                                        ['普段会わない友人との連絡','k2-1'],
                                        ['報告目的の連絡、会話','k2-2'],
                                        ['家族との会話','k2-3'],
                                        ['プレゼント選び','k2-4'],
                                        ['サプライズ','k2-5'],
                                        ['交流を作るための発信','k2-6'],
                                        ['初対面の人との交流','k2-7'],
                                        ['接待','k2-8'],
                                        //['','k2-9'],
                                        ['パーティ','k2-10'],
                                        ['会食','k2-11'],
                                        ['サークル活動','k2-12'],
                                        ['趣味仲間との交流','k2-13'],
                                        ['会社の人との食事','k2-14'],
                                        ['恋人との会話、連絡','k2-15'],
                                        ['友人との通話','k2-16'],
                                        ['恋人との通話','k2-17'],
                                        ['家族との通話','k2-18'],
                                        ['その他の人との通話','k2-19']
                                    ];
                                    options($button_list);?>
                                </section>
                                <section class='k3option options' id='k3op'>
                                    <?$button_list = [
                                        ['会社での仕事','k3-1'],
                                        ['個人事業','k3-2'],
                                        ['利益を生み出していない必要作業','k3-3'],
                                        ['今後の仕事のための準備や勉強','k3-4'],
                                        ['事務手続き','k3-5'],
                                        ['アルバイト','k3-6'],
                                        ['派遣業','k3-7'],
                                        ['その他','k3-8']
                                    ];
                                    options($button_list);?>
                                </section>
                                <section class='k4option options' id='k4op'>
                                    <?$button_list = [
                                        ['間食(お菓子)','k4-1'],
                                        ['間食(その他)','k4-2'],
                                        ['水分補給','k4-3'],
                                        ['朝ごはん','k4-4'],
                                        ['昼ごはん','k4-5'],
                                        ['夜ごはん','k4-6'],
                                        ['食事(朝昼夜を定義しない)','k4-7'],
                                        ['夜食','k4-8']
                                    ];
                                    options($button_list);?>
                                </section>
                                <section class='k5option options' id='k5op'>
                                    <?$button_list = [
                                        ['仮眠','k5-1'],
                                        ['二度寝','k5-2'],
                                        ['三度寝','k5-3'],
                                        ['四度寝','k5-4'],
                                        ['五度寝','k5-5'],
                                        ['昼寝','k5-6'],
                                        ['睡眠','k5-7']
                                    ];
                                    options($button_list);?>
                                </section>
                                <section class='k6option options' id='k6op'>
                                    <?$button_list = [
                                        
                                    ];
                                    //options($button_list);?>
                                </section>
                                <section class='k7option options' id='k7op'>
                                    <?$button_list = [
                                        ['移動','k7-1'],
                                        ['日用品や消耗品の買い物','k7-2'],
                                        ['散髪','k7-3'],
                                        ['着替え','k7-4'],
                                        ['自己投資','k7-5'],
                                        ['日々の片付け','k7-6'],
                                        ['皿洗い','k7-7'],
                                        ['洗濯','k7-8'],
                                        ['洗濯物を干す','k7-9'],
                                        ['洗濯物の回収','k7-10'],
                                        ['洗濯物の収納','k7-11'],
                                        ['スキンケア','k7-12'],
                                        ['瞑想','k7-13'],
                                        ['歯磨き','k7-14'],
                                        ['体をきれいにする目的のシャワー','k7-15'],
                                        ['外出準備','k7-16']
                                    ];
                                    options($button_list);?>
                                </section>
                            </div>
                            <p>行動の詳細を書いてください([娯楽,ゲーム]の例.マリオカート)</p>
                            <p>行動一覧に存在しない場合は種類を選んで詳細を記録</p>
                            <input type='text' name='kname' placeholder="行動の(詳細)" id='kname'>
                            <?//ながら作業の場合?>
                            <?//ながら作業の項目を記録?>
                            <h2>その行動はプラスになるか</h2>
                            <p>直前に判断する自己評価を記録してください。</p>
                            <div class='button-column'>
                                <input type='radio' name='l' value='1' id='l1'><label for='l1'>++</label>
                                <input type='radio' name='l' value='2' id='l2'><label for='l2'>+</label>
                                <input type='radio' name='l' value='3' id='l3'><label for='l3'>+-0</label>
                                <input type='radio' name='l' value='4' id='l4'><label for='l4'>-</label>
                                <input type='radio' name='l' value='5' id='l5'><label for='l5'>--</label>
                            </div>

                            <h2>忙しさ</h2>
                            <style>
                                .button-column{
                                    display:flex;
                                    flex-wrap : wrap;
                                    user-select: none;
                                }
                                .button-column input[type=checkbox],
                                .button-column input[type=radio]
                                {/*display:none;.button-column input[type=checkbox]*/
                                    display:none;
                                }
                                
                                .button-column input[type=checkbox]:checked+label,
                                .button-column input[type=radio]:checked+label{
                                    color: #ffa653;
                                    background: #ffe6b7;
                                }
                                
                                .options{
                                    display:none;
                                    padding-top:8px;
                                    border-top:#cfcfcf 1px solid;
                                }
                                #k1:checked ~ .k1option,
                                #k2:checked ~ .k2option,
                                #k3:checked ~ .k3option,
                                #k4:checked ~ .k4option,
                                #k5:checked ~ .k5option,
                                #k6:checked ~ .k6option,
                                #k7:checked ~ .k7option{
                                    display:flex;flex-wrap : wrap;
                                    color:red;
                                }
                                .button-column label{
                                    padding: 4px 10px;
                                    margin-right: 5px;
                                    background: whitesmoke;
                                    border-radius: 14px;
                                }
                            </style>
                            <div class='button-column'>
                                <input type='radio' name='b' value='1' id='b1'><label for='b1'>対応不可</label>
                                <input type='radio' name='b' value='2' id='b2'><label for='b2'>忙しい</label>
                                <input type='radio' name='b' value='3' id='b3'><label for='b3'>普通</label>
                                <input type='radio' name='b' value='4' id='b4'><label for='b4'>暇</label>
                            </div>
                            <h2>体調</h2>
                            <div class='button-column'>
                                <input type='radio' name='c' value='1' id='c1'><label for='c1'>良い</label>
                                <input type='radio' name='c' value='2' id='c2'><label for='c2'>少し良い</label>
                                <input type='radio' name='c' value='3' id='c3'><label for='c3'>普通</label>
                                <input type='radio' name='c' value='4' id='c4'><label for='c4'>少し悪い</label>
                                <input type='radio' name='c' value='5' id='c5'><label for='c5'>悪い</label>
                            </div>
                            
                            <details>
                                <summary style='color: #3c3c3c91;font-weight:700;'>体調オプション</summary>
                                <div class='button-column'>
                                    <input type='checkbox' id='co1'><label for='co1'>生理中</label>
                                    <input type='checkbox' id='co2'><label for='co2'>頭痛(軽度)</label>
                                    <input type='checkbox' id='co3'><label for='co3'>頭痛</label>
                                    <input type='checkbox' id='co4'><label for='co4'>腹痛(軽度)</label>
                                    <input type='checkbox' id='co5'><label for='co5'>腹痛</label>
                                    <input type='checkbox' id='co6'><label for='co6'>倦怠感</label>
                                </div>
                            </details>
                            <h2>眠気</h2>
                            <p>開始時の眠気を入力</p>
                            <label>
                                    <span>眠気</span>
                                    <input name='sleepiness' type='number' placeholder="">
                            </label>
                            <h2>体力値</h2>
                            <p>mi watchなどで計測可能な体力の総量</p>
                            <label>
                                    <span>エネルギー</span>
                                    <input name='energy' type='number' placeholder="">
                            </label>
                            <?/*起きたときに体力に合わせて、今日できることしないほうが好ましいことの提案を行ってくれる*/?>
                            <h2>イラスト枠</h2>
                            <p>現在の枠数:2/4<br>変更がある場合だけ入力</p>
                            <label>
                                    <span>illust</span>
                                    <input name='illust' type='number' placeholder="">
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