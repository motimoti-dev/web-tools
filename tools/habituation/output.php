<?include( dirname( __FILE__ , 3).'/data.php' )//設定?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?=$example[0]['title']?>">
        <script>document.documentElement.classList.remove('no-js')</script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <title><?=$example[0]['title']?></title>
        <link rel="stylesheet" href="https://tools.motisan.info/css/index-style.css" http-equiv="Cache-Control" content="no-cache">
    </head>
    <body style="background:#fff3e8;margin:0">
        <iframe id="HeaderIframe" class="HeaderIframe" src="../../static/header.html" role="presentation" style="display: block;width: 100%;height: 60px;border: 0;"></iframe>
        <content>
            <nav class="wrapper center" style="margin-top:20px;"><p style="margin:0 auto;color:#75688a">もちもち便利ツール</p></nav>
            <div class="wrapper center" style="margin-top:15px;padding-bottom:10px;max-width: 1350px;">
                <main>
                    <iframe id="ShareIframe" class="ShareIframe" src="../../static/share.html" role="presentation" style="position: relative;left:-15px;width:50px;height:100%;float:left"></iframe>
                    <section id='tool' style="display: grid;max-width: 960px;background: white;padding: 1.3rem;border-radius: 12px;" class="s1">
                        <h1>良くない習慣を絶つ為のツール</h1>
                        <style>
                            #tool li{
                                position: relative;
                                padding-left: 30px;
                                margin-top: 0;
                                line-height: 1.5;
                                padding: 0.8em 0.5em 0.8em 35px;
                            }
                            #tool ol{
                                counter-reset: number;
                                list-style-type: none!important;
                                counter-reset: number;
                                list-style-type: none;
                                padding: 0.5em 0.2em 0.5em 0.8em;
                                background: #fefff2;
                                border: solid 2px #ffd07b;
                            }
                            #tool ol li:before{
                                position: absolute;
                                counter-increment: number;
                                content: counter(number);
                                display: inline-block;
                                background: #ffc36e;
                                color: #fff;
                                font-family: "Arial",sans-serif;
                                font-weight: 700;
                                font-size: 15px;
                                border-radius: 50%;
                                top: 50%;
                                -moz-transform: translateY(-50%);
                                -webkit-transform: translateY(-50%);
                                -o-transform: translateY(-50%);
                                -ms-transform: translateY(-50%);
                                transform: translateY(-50%);
                                left: 0;
                                width: 25px;
                                height: 25px;
                                line-height: 25px;
                                text-align: center;
                            }
                            #link_pc{
                                text-decoration:none;
                                font-size: 20px;
                                width: calc(100% - 40px);
                                border-radius: 100px;
                                padding: 13px 20px;
                                background: #ffd799;
                                font-weight: 700;
                                color: white;
                                border: none;
                                box-shadow: 2px 3px 6px #ff441e26;
                            }
                            .button-column{
                                display: flex;
                                flex-wrap: wrap;
                                user-select: none;
                            }
                            .button-column input[type=radio] {
                                display: none;
                            }
                            .button-column label{
                                padding: 4px 10px;
                                margin-right: 5px;
                                background: whitesmoke;
                                border-radius: 14px;
                                font-size: 18px;
                                font-weight: 600;
                                color: #40404085;
                                display: flex;
                                margin-bottom: 14px;
                            }
                            .button-column input[type=radio]:checked+label {
                                color: #ffa653;
                                background: #ffe6b7;
                            }
                            #tool h2{
                                border-bottom: 6px solid #ffc860;
                                text-align: left;
                                color: #ff8f40;
                                background: #fff3dd;
                                margin-top: 17px;
                                border-radius: 6px;
                                padding: 9px;
                            }
                            #tool input{
                                padding: 9px 12px;
                                font-size: 15px;
                                font-weight: 700;
                                color: #5252529c;
                                border: none;
                                border-radius: 14px;
                                background: #f5f5f5;
                            }
                            #tool input[type='text'],textarea{
                                padding: 9px 12px;
                                font-size: 15px;
                                font-weight: 700;
                                color: #5252529c;
                                border: none;
                                border-radius: 14px;
                                background: #f5f5f5;
                            }
                        </style>
                        <div style="display: table;margin-bottom: 10px;width: 100%;max-width:700px;">
                            <div style="max-height:170px;width:20%;border: none;min-width: 60px;display: table-cell;">
                                <img src="https://motisan-test.web.app/i/d-i1.png" style="width: 100%;" data-src="https://motisan-test.web.app/i/d-i1.png" decoding="async" class=" lazyloaded">
                                <noscript><img src="https://motisan-test.web.app/i/d-i1.png" style="width: 100%;" data-eio="l"></noscript>
                            </div>
                            <div style="width:60%;display: table-cell;vertical-align:middle">
                                <p style="box-shadow: 1px 3px 4px #3d5e781f;width:calc(100% - 5% - 6px);border: 3px solid #eee;background-color: #fff;color: #555;padding: 2.5%;border-radius:15px;margin:auto 0;">使い方のルールです！<br>うおおおおおおおおおおおお！<br>データはgoogleカレンダーに追加されます！</p>
                            </div>
                        </div>
                        <ol>
                            <li>先延ばしにしたら次にやるタイミングまでその行動を意識しない</li>
                            <li>期間が終わったことをリマインドする予定を追加する(その日、その時間になるまではやってはいけない)</li>
                            <li>本来やるべきことなどのタスクは先延ばしにしない</li>
                            <li>使用する物自体を物理的に見えない場所に配置する場合は詳細に隠した場所を記録する</li>
                            <li>○○日間のように定量的に測れない、次の○○のタイミングまでみたいな入力はしないで必ず日数や時間を設定する</li>
                        </ol>
                        <h2>先延ばししたい事</h2>
                        <input type='text'>
                        <h2>詳細</h2>
                        <textarea style='line-height: 1.5;height: 9.5em;'></textarea>
                        <h2>先延ばしにする期間(=次に実行していいタイミング)</h2>
                        <p style='margin-top: 0;'>デフォルトでは一週間先延ばしにします！</p>
                        <p style='margin-top: 0;'>細かい入力はgoogleカレンダー上でやったほうがいいので近いボタンを押しておいてカレンダー側で変更してください！<br>すでに過ぎている時刻も入力できてしまいます。</p>
                        <section class='button-column'>
                        <?$button_list = [
                            ['朝(6時)まで','start1'],
                            ['昼(12時)まで','start2'],
                            ['夜(18時)まで','start3'],
                            ['翌日(0時)まで','start4'],//次の日の0時に設定
                            ['翌日朝(6時)まで','start5'],//次の日の6時に設定
                            ['翌日昼(12時)まで','start6'],//次の日の0時に設定
                            ['翌日夜(18時)まで','start7'],//次の日の0時に設定
                            ['1週間後まで','start7'],
                            ['10日間後まで','start8'],
                            ['2週間後まで','start9'],
                            ['次の月の1日まで','start10'],
                            ['1ヵ月後まで','start11'],
                            ['2ヵ月後まで','start12'],
                            ['3ヵ月後まで','start13'],
                            ['半年後まで','start14'],
                            ['1年後まで','start15'],
                            ['10年後まで','start16'],
                            ['50年後まで','start17'],
                            ['100年後まで','start18'],
                        ];
                        foreach($button_list as $button_data){
                            ?><input type='radio' name='dates_start' value="<?=$button_data[1]?>" id='<?=$button_data[1]?>'><label for='<?=$button_data[1]?>'><?=$button_data[0]?></label><?
                        }?>
                        </section>
                        <h2>カレンダーに追加される予定の期間</h2>
                        <p style='margin-top: 0;'>デフォルトでは6時間の範囲で予定が追加されます、リマインド用なので長い期間で設定する必要はありません。</p>
                        <section class='button-column'>
                        <?$button_list = [
                            ['1分','range1'],
                            ['5分','range2'],
                            ['10分','range3'],
                            ['30分','range4'],
                            ['1時間','range5'],
                            ['3時間','range6'],
                            ['6時間','range7'],
                            ['12時間','range8'],
                            ['1日','range9'],
                            ['2日','range10'],
                            ['1週間','range11'],
                            ['2週間','range12'],
                            ['1ヵ月','range13'],
                            ['2ヵ月','range14'],
                            ['3ヵ月','range15'],
                            ['半年','range16'],
                            ['1年','range17'],
                        ];
                        foreach($button_list as $button_data){
                            ?><input type='radio' name='range' value="<?=$button_data[1]?>" id='<?=$button_data[1]?>'><label for='<?=$button_data[1]?>'><?=$button_data[0]?></label><?
                        }?>
                        </section>
                        <div>Googleカレンダーに追加ボタン↓</div>
                        <a id="link_pc" target="_blank" rel="noopener noreferrer" href="">Googleカレンダーを開く！</a>
                        <script type="text/javascript">
                        jQuery(function( $ ) {
                        $(function() {

                            var pram = ['text', 'dates_start', 'dates_end', 'location', 'details', 'trp', 'sprop', 'add'];

                            var $domain_pc = 'https://www.google.com/calendar/render?';

                            generate();

                            function generate() {
                            var $code = 'action=TEMPLATE'; // 'action=TEMPLATE'は固定

                            // 配列の値と同じID名のinput要素のvalue値を連結する
                            $.each(pram, function(i, val) {

                                // 日付の場合は「T」を挿入する
                                if(val == 'dates_start' || val == 'dates_end') 
                                //時間の設定をする
                                {
                                    if(val == 'dates_start')
                                    //開始時間の設定
                                    {
                                        //パラメーターの挿入
                                        $code += '&dates' + '=';

                                        //時間が選択されているかの確認されていない場合は一週間後

                                    }
                                    
                                    $code += $('#' + val).val().slice(0, 8) + 'T' + $('#' + val).val().slice(8);
                                    
                                    if(val == 'dates_start') {
                                        $code += '/';
                                    }

                                // 日付以外の必須項目
                                } else if (val == 'text' || val == 'sprop') {
                                $code += '&' + val + '=' + $('#' + val).val();

                                // 任意項目
                                } else {
                                if($('#' + val).val() !== '') {

                                    // 詳細文に改行が含まれている場合は「%0D%0A」に変換する
                                    if(val == 'details') {
                                        var txtVal = $('#' + val).val();
                                        txtVal = txtVal.replace(/\r\n/g, "%0D%0A");
                                        txtVal = txtVal.replace(/(\n|\r)/g, "%0D%0A");
                                        $code += '&' + val + '=' + txtVal;

                                    // 上記以外の任意項目
                                    } else {
                                    $code += '&' + val + '=' + $('#' + val).val();
                                    $code += '&trp=true';
                                    }
                                }
                                }
                            });

                            $('#code_pc').val($domain_pc + $code);
                            $('#link_pc').attr('href', $domain_pc + $code);
                            return false;
                            }

                            // 入力したら書き出す
                            $("input:text, input:radio, textarea").on('keypress change', function(){
                            generate();
                            });

                            // textareaをクリックでテキストを全選択
                            $("#code_pc").mousedown(function() {
                            if(!$(this).is(":focus")) {
                                $(this).select().focus();
                                return false;
                            }
                            });
                        });
                        });/* ]]> */
                        </script>
                        <p>このツールはやめたいけどやめれないことをやめるのではなく、先延ばしにして頻度を下げていこう！というコンセプトのツールです！(自分用)</p>
                        <p>例えばYoutubeを見てしまうせいで作業が進まないと考えている人が、Youtubeを見ることを以降の人生で完全にやめようとするのは結構無理があります。<br>ですが、1日だけ見ないようにする！というのであれば、完全にやめるよりも再現性があり成功率が高いと思います。</p>
                        <p>最初はその方法でいいと思っていましたが、実際にそうやったときと全く制限しなかったときを比較して時間を集計してみたところ、その方法で1日だけやめて行動の抑制につながったものの短期的に少しの抑制効果があるだけした。<br>それなのに余計に他の自由時間を制限したことに使ってしまっていて結果的に大きな効果は得られていないことがわかりました。</p>
                        <p>自分に制限をかけるという心理的な負荷があるのに効果が薄いのであればやらないほうがいい可能性もあります。</p>
                        <p>スマホが机にある状態で作業をしようとすると、スマホを触ってはいけないと思うこと、スマホを無視して作業をしようとすることに使う脳の処理力が実際の作業に使う脳のメモリの10％くらいを持っていかれてしまうので作業の質を下げたりします。<br>そのため、発想を転換して「Youtubeはいつでも見れるから明日まとめてみればいいかな」のようにただ先延ばしにして実質的にその行動自体の頻度を下げて習慣だった行為を減らしていくというアプローチを行おうと思いこの形式のツールを作っています。</p>
                        <p>本当はやりたくないやってしまうことを辞めようとすると続けている状態よりも2倍やりたくなるそうです(参考文献は忘れましたが、、、)。</p>
                        <p>なので、この方法でこれをやらないようにしよう！と意識してしまうとむしろ質が悪い作業になったり本来やりたい事にわずかな支障が出ていたりする場合があるので後でまとめて一回分やろうと決めてそれ以降そのタイミングが来るまで一切考えない癖をつけることが重要になるかと思います！</p>
                        <p>ただ、同じ方法でタスクを先延ばしにしないようにしてください！タスクを行なうことへの不安(タスクが後に控えている後でやらないといけないという感覚)は、タスクの実行そのものより、多くの時間とエネルギーを消耗します！</p>
                        <p>面倒なことほど先にやるようにしましょう！</p>
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
        
        // 予めチェックされているもの
        var nowchecked = [];
        $('input[type="radio"]:checked').each(function(){
        nowchecked.push( $(this).attr('id') );
        });

        $('input[type="radio"]').click(function(){
        var idx = $.inArray( $(this).attr('id'), nowchecked ); // nowcheckedにクリックされたボタンのidが含まれるか判定。なければ-1が返る。
            if( idx >= 0 ) { // クリックしたボタンにチェックが入っていた場合
                $(this).prop('checked', false); // チェックを外す
                nowchecked.splice(idx,1); // nowcheckedからこのボタンのidを削除
            } else { // チェックが入っていなかった場合
            // 同じname属性のラジオボタンをnowcheckedから削除する
            var name = $(this).attr('name');
            $('input[name="' + name + '"]').each(function(){
            var idx2 = $.inArray( $(this).attr('id'), nowchecked);
            if( idx2 >= 0 ){
                nowchecked.splice(idx2,1);
            }
            });
            // チェックしたものをnowcheckedに追加
                nowchecked.push( $(this).attr('id') );
            }
        });
        
    </script>
    </body>
</html>