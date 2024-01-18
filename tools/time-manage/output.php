<?include( dirname( __FILE__ , 3).'/data.php' );//設定
$tool_id = 7;
//データはsqliteに入れたいけど、スマホアプリ版とかはローカルで持たせたいので今はjsonで保存
//タイムゾーンを日本に
date_default_timezone_set('Asia/Tokyo');

/*
''=>[//kidの個体番号
    'name'=>'',//行動名
    'hook'=>'',//一緒に実行されるフック
    'nexthook'=>'',
    'defalt'=>[
        'public'=>true,
    ]
],               
*/
$hook_sync = [
    'k1'=>[
        '1'=>[//k1-1が行動IDになる
            'name'=>'ゲーム',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '2'=>[
            'name'=>'スマホをいじる',
            'default'=>[
                'public'=>true,
            ]
        ],
        '3'=>[
            'name'=>'SNS',
            'default'=>[
                'public'=>true,
            ]
        ],
        '4'=>[
            'name'=>'動画を見る',
            'default'=>[
                'public'=>true,
            ]
        ],
        '5'=>[
            'name'=>'音楽を聞く',
            'defaut'=>[
                'public'=>true,
            ]
        ],
        '6'=>[
            'name'=>'瞑想',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>false,
            ]
        ],
        '7'=>[
            'name'=>'だらける',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '8'=>[
            'name'=>'外出(移動を含む、移動時間を計測しない)',
            'hook'=>'busy-status:2,local-status:1',//
            'default'=>[
                'public'=>true,
            ]
        ],
        '9'=>[
            'name'=>'やりたいこと(作業)',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '10'=>[
            'name'=>'カラオケ',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '11'=>[
            'name'=>'ニュースやラジオの視聴',
            'default'=>[
                'public'=>true,
            ]
        ],
        '12'=>[
            'name'=>'入浴',//ofuro in
            'hook'=>'busy-status:2,ofuro-status:2',
            'nexthook'=>'ofuro-status:1',
            'default'=>[
                'public'=>true,
            ]
        ],
        '13'=>[
            'name'=>'入浴(サウナを含む)',
            'hook'=>'busy-status:2,ofuro-status:2',
            'nexthook'=>'ofuro-status:1',
            'default'=>[
                'public'=>true,
            ]
        ],
        '14'=>[
            'name'=>'日用品以外の買い物',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '15'=>[
            'name'=>'スキンシップ',
            'default'=>[
                'public'=>true,
            ]
        ],
        '16'=>[
            'name'=>'自慰行為',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>false,
            ]
        ],
        '17'=>[
            'name'=>'性行為',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>false,
            ]
        ],
        '18'=>[
            'name'=>'たばこ',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>false,
            ]
        ],
        '19'=>[
            'name'=>'ギャンブル',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '20'=>[
            'name'=>'X スペース',
            'hook'=>'busy-status:2,',
            'default'=>[
                'public'=>true,
            ]
        ],
        '21'=>[
            'name'=>'イラスト制作',
            'hook'=>'busy-status:2,',
            'default'=>[
                'public'=>true,
            ]
        ],
        '22'=>[
            'name'=>'歌う、ボイトレ、声出し',
            'hook'=>'busy-status:2,',
            'default'=>[
                'public'=>true,
            ]
        ],
        '100'=>[
            'name'=>'その他の娯楽',
            'default'=>[
                'public'=>true,
            ]
        ],
    ],
    'k2'=>[
        '1'=>[
            'name'=>'普段会わない友人との連絡',
            'hook'=>'busy-status:1',
            'default'=>[
                'public'=>true,
            ]
        ],
        '2'=>[
            'name'=>'報告目的の連絡、会話',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '3'=>[
            'name'=>'家族との会話',
            'hook'=>'busy-status:1',
            'default'=>[
                'public'=>true,
            ]
        ],
        '4'=>[
            'name'=>'プレゼント選び',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '5'=>[
            'name'=>'サプライズ',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '6'=>[
            'name'=>'交流を作るための発信',
            'default'=>[
                'public'=>true,
            ]
        ],
        '7'=>[
            'name'=>'初対面の人との交流',
            'hook'=>'busy-status:1',
            'default'=>[
                'public'=>true,
            ]
        ],
        '8'=>[
            'name'=>'接待',
            'hook'=>'busy-status:1',
            'default'=>[
                'public'=>true,
            ]
        ],
        '9'=>[
            'name'=>'デート',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '10'=>[
            'name'=>'パーティ',
            'hook'=>'busy-status:1',
            'default'=>[
                'public'=>true,
            ]
        ],
        '11'=>[
            'name'=>'会食',
            'hook'=>'busy-status:1',
            'nexthook'=>'',
            'default'=>[
                'public'=>true,
            ]
        ],
        '12'=>[
            'name'=>'サークル活動',
            'default'=>[
                'public'=>true,
            ]
        ],
        '13'=>[
            'name'=>'趣味仲間との交流',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '14'=>[
            'name'=>'会社の人との食事',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '15'=>[
            'name'=>'恋人との会話、連絡',
            'hook'=>'busy-status:1',
            'default'=>[
                'public'=>true,
            ]
        ],
        '16'=>[
            'name'=>'友人との通話',
            'hook'=>'busy-status:1',
            'default'=>[
                'public'=>true,
            ]
        ],
        '17'=>[
            'name'=>'恋人との通話',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '18'=>[
            'name'=>'家族との通話',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '19'=>[
            'name'=>'その他の人との通話',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '100'=>[
            'name'=>'その他の人間関係',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
    ],
    'k3'=>[
        '1'=>[
            'name'=>'会社での仕事',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '2'=>[
            'name'=>'個人事業',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '3'=>[
            'name'=>'利益を生み出していない必要作業',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '4'=>[
            'name'=>'今後の仕事のための準備や勉強',
            'default'=>[
                'public'=>true,
            ]
        ],
        '5'=>[
            'name'=>'事務手続き',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '6'=>[
            'name'=>'アルバイト',
            'hook'=>'busy-status:1',
            'default'=>[
                'public'=>true,
            ]
        ],
        '7'=>[
            'name'=>'派遣業',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '8'=>[
            'name'=>'動画編集',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '9'=>[
            'name'=>'イラスト依頼',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '10'=>[
            'name'=>'web制作',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '11'=>[
            'name'=>'サーバー保守やweb系',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '12'=>[
            'name'=>'記事編集',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '100'=>[
            'name'=>'その他',
            'default'=>[
                'public'=>true,
            ]
        ],
    ],
    'k4'=>[
        '1'=>[
            'name'=>'間食(お菓子)',
            'hook'=>'meal-status:1,busy-status:1',
            'nexthook'=>'meal-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '2'=>[
            'name'=>'間食(その他)',
            'hook'=>'meal-status:1,busy-status:1',
            'nexthook'=>'meal-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '3'=>[
            'name'=>'水分補給',
            'default'=>[
                'public'=>true,
            ]
        ],
        '4'=>[
            'name'=>'朝ごはん',
            'hook'=>'meal-status:1,busy-status:2',
            'nexthook'=>'meal-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '5'=>[
            'name'=>'昼ごはん',
            'hook'=>'meal-status:1,busy-status:2',
            'nexthook'=>'meal-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '6'=>[
            'name'=>'夜ごはん',
            'hook'=>'meal-status:1,busy-status:2',
            'nexthook'=>'meal-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '7'=>[
            'name'=>'食事(朝昼夜を定義しない)',
            'hook'=>'meal-status:1,busy-status:2',
            'nexthook'=>'meal-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '8'=>[
            'name'=>'夜食',
            'hook'=>'meal-status:1,busy-status:2',
            'nexthook'=>'meal-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
        '9'=>[
            'name'=>'料理',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ]
        ],
    ],
    'k5'=>[
        '1'=>[
            'name'=>'仮眠',
            'hook'=>'sleep-status:2,busy-status:2,sleep-op1:仮眠中',
            'nexthook'=>'sleep-status:0,sleep-op1:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '2'=>[
            'name'=>'二度寝',
            'hook'=>'sleep-status:2,busy-status:2,sleep-op1:二度寝中',
            'nexthook'=>'sleep-status:0,sleep-op1:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '3'=>[
            'name'=>'三度寝',
            'hook'=>'sleep-status:2,busy-status:2,sleep-op1:三度寝中',
            'nexthook'=>'sleep-status:0,sleep-op1:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '4'=>[
            'name'=>'四度寝',
            'hook'=>'sleep-status:2,busy-status:2,sleep-op1:四度寝中',
            'nexthook'=>'sleep-status:0,sleep-op1:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '5'=>[
            'name'=>'五度寝',
            'hook'=>'sleep-status:2,busy-status:2,sleep-op1:五度寝中',
            'nexthook'=>'sleep-status:0,sleep-op1:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '6'=>[
            'name'=>'昼寝',
            'hook'=>'sleep-status:2,busy-status:2,sleep-op1:昼寝中',
            'nexthook'=>'sleep-status:0,sleep-op1:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '7'=>[
            'name'=>'睡眠(中途覚醒)',
            'hook'=>'',
            'nexthook'=>'',
            'default'=>[
                'public'=>true,
            ]
        ],
        '8'=>[
            'name'=>'睡眠',
            'hook'=>'sleep-status:2,busy-status:2,sleep-op1:就寝中',
            'nexthook'=>'sleep-status:0,sleep-op1:',
            'default'=>[
                'public'=>true,
            ]
        ]
    ],
    'k6'=>[
        '1'=>[
            'name'=>'何もしない',
            'hook'=>'busy-status:0',
            'default'=>[
                'public'=>true,
            ]
        ],
        '2'=>[
            'name'=>'マイクロブレイク',
            'default'=>[
                'public'=>true,
            ]
        ],
        '3'=>[
            'name'=>'マイクロブレイク(深呼吸)',
            'default'=>[
                'public'=>true,
            ]
        ],
        '4'=>[
            'name'=>'マイクロブレイク(無)',
            'default'=>[
                'public'=>true,
            ]
        ],
        '5'=>[
            'name'=>'マイクロブレイク(潜水反射)',
            'default'=>[
                'public'=>true,
            ]
        ],
        '6'=>[
            'name'=>'マイクロブレイク(運動)',
            'default'=>[
                'public'=>true,
            ]
        ],
        '7'=>[
            'name'=>'マイクロブレイク(歩く)',
            'default'=>[
                'public'=>true,
            ]
        ],
        '8'=>[
            'name'=>'マイクロブレイク(軽食)',
            'default'=>[
                'public'=>true,
            ]
        ],
        '9'=>[
            'name'=>'マイクロブレイク(コンビニ)',
            'default'=>[
                'public'=>true,
            ]
        ],
        '10'=>[
            'name'=>'食休み',
            'default'=>[
                'public'=>true,
            ]
        ],
    ],
    'k7'=>[
        '1'=>[
            'name'=>'移動',
            'hook'=>'local-status:1,local-memo:移動中です！,busy-status:2',
            'nexthook'=>'local-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '2'=>[
            'name'=>'日用品や消耗品の買い物',
            'hook'=>'local-memo:買い物中です！,busy-status:2',
            'nexthook'=>'local-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '3'=>[
            'name'=>'散髪',
            'hook'=>'local-memo:髪をちょきちょきしています！,busy-status:2',
            'nexthook'=>'local-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '4'=>[
            'name'=>'着替え',
            'hook'=>'busy-memo:着替えています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '5'=>[
            'name'=>'自己投資',
            'hook'=>'busy-memo:なにかしらの自己投資に時間を使っています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '6'=>[
            'name'=>'日々の片付け',
            'hook'=>'busy-memo:片付けをしています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '7'=>[
            'name'=>'皿洗い',
            'hook'=>'busy-memo:皿洗いをしています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '8'=>[
            'name'=>'洗濯',
            'hook'=>'busy-memo:洗濯をしています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '9'=>[
            'name'=>'洗濯物を干す',
            'hook'=>'busy-memo:洗濯ものを干しています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '10'=>[
            'name'=>'洗濯物の回収',
            'hook'=>'busy-memo:洗濯物の回収をしています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '11'=>[
            'name'=>'洗濯物の収納',
            'hook'=>'busy-memo:洗濯した物をしまっています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '12'=>[
            'name'=>'スキンケア',
            'hook'=>'busy-memo:顔を良くしています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '13'=>[
            'name'=>'瞑想',
            'hook'=>'busy-memo:瞑想しています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '14'=>[
            'name'=>'歯磨き',
            'hook'=>'busy-memo:歯を磨いています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '15'=>[
            'name'=>'体をきれいにする目的のシャワー',
            'hook'=>'busy-memo:シャワー中です！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '16'=>[
            'name'=>'外出準備',
            'hook'=>'busy-memo:出かける準備をしています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '17'=>[
            'name'=>'筋トレ',
            'hook'=>'busy-memo:筋トレをしています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '18'=>[
            'name'=>'宿題や課題などの勉強',
            'hook'=>'busy-memo:宿題や課題などを消化しています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ]
        ],
        '19'=>[
            'name'=>'自己投資目的の勉強',
            'hook'=>'busy-memo:自己投資目的の勉強をしています！,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ],
        ],
        '20'=>[
            'name'=>'脱毛',
            'hook'=>'busy-memo:ぱちぱち中,busy-status:2',
            'nexthook'=>'busy-memo:',
            'default'=>[
                'public'=>true,
            ],
        ],
        '100'=>[
            'name'=>'その他',
            'hook'=>'busy-status:2',
            'default'=>[
                'public'=>true,
            ],
        ]
    ],
];

//送信されたデータに指定されたパラメータがなければfalseを返し、あればその値を出力する
function post_value_check($key){
    if(isset($_POST[$key])){
        return $_POST[$key];
    }else{
        return false;
    }
}

$login = false;
$status = "init";//ログイン常態とか全体のステータス、今はログインに関することしか出力しない
$form_status = 'init';
$json = "";
$userdata = [
    "type"=>post_value_check("type"),
    "usernickname"=>"",
    "uid"=>"",
    "username"=>post_value_check("user"),
    "gender"=>"",
    "birth"=>"",
    "userlevel"=>"",
    "lastupdate"=>""//最終更新日、時刻
];
$password = "";
//ログインフォームが送信された場合
if(isset($_POST["login"])){
    $status = "ログインフォームが送信された場合";
    if($userdata["type"] == "json"){//typeが有効かをチェックする 今はjsonのみ
        $status = "ログインフォームが送信されjsonは有効";
        if($userdata["username"]){//userの値があるかチェックする
            $status = "ログインフォームが送信されjsonは有効、userの値も存在する";
            if(file_exists("./data/".$_POST["user"].".json")){//userが存在するかをチェックする
                $status = "ログインフォームが送信されjsonは有効、userの値も存在し、該当ユーザーも存在";
                $json = file_get_contents("./data/".$_POST["user"].".json");
                $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
                $json = json_decode($json,true);
                if(post_value_check("password")){//パスワードが入力されているかチェック
                    $status = "ログインフォームが送信されjsonは有効、userの値も存在し、該当ユーザーも存在。パスワードも送信されている";
                    if($_POST["password"] == $json["pass"]){
                        $status = "ログインフォームに必要な情報はすべて送信されログインユーザーのパスワードの照合も完了";
                        $login = true;
                    }else{
                        $status = "ログインフォームに必要な情報はすべて送信されているがパスワードが間違っている";
                    }
                }else{
                    $status = "ログインフォームが送信されjsonは有効、userの値も存在し、該当ユーザーも存在。しかしパスワードが未送信";
                }
            }else{
                $status = "ログインフォームが送信されjsonは有効、userの値も存在するが該当ユーザーは存在しない";
            }
        }
    }else{
        $status = "ログインフォームが送信されtypeが無効";
    }
}elseif(isset($_POST["logout"])){//ログアウトボタンが押された場合
    $status = "ログアウトボタンが押された場合";
    // ログアウト（セッションデータを削除）する
    session_start();
    unset($_SESSION["user_id"]);
    header('Location: ./output');
    exit;
}else{
    $status = "ログインフォームが送信されていない場合(すでにログイン中の場合、ログインに成功しリダイレクトされた場合も含む)";
}

//セッション処理
session_start();
if($login){// 入力されたIDとパスワードに一致するユーザーが存在する場合
    $status = "ログインに成功しセッション開始している状態";
    // セッションにユーザーIDを保存しておく
    $_SESSION ["user_id"] = $userdata["username"];

    // ログイン中？（セッションにユーザーIDがある？）
    if (array_key_exists("user_id", $_SESSION)) {
        //header関数を使用し、リダイレクトされる、リロードでフォームをどうするか聞かれないために
        header('Location: ./output');
        exit;
    }else{// ログアウト中？（セッションにユーザーIDがない？） 
        $login = false;
    }
}else{
    if(isset($_SESSION ["user_id"])){//そもそもセッションにuser idがあるか
        if(file_exists("./data/".$_SESSION ["user_id"].".json")){//セッションがあり存在するユーザーの場合ログイン状態に変更する
            $status = "【ログイン中】".$status;
            $login = true;
            //個別ユーザーのjson取得
            $json = file_get_contents("./data/".$_SESSION ["user_id"].".json");
            $json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
            $json = json_decode($json,true);
            // ログイン中ユーザーなのでユーザーデータを$userdataにセットする
            $userdata["username"] = $_SESSION ["user_id"];
            $userdata["usernickname"] = $json["nickname"];
            $userdata["uid"] = $json["uid"];
            $userdata["gender"] = $json["gender"];
            $userdata["birth"] = $json["birth"];
            $userdata["userlevel"] = $json["userlevel"];
            $userdata["lastupdate"] = $json["lastupdate"];
        }else{
            $login = false;
        }
    }else{
        $status = "【未ログイン】".$status;
        $login = false;
    }
}

function parm_data_add($formdata, $parameter, $parmname, $formdataname){
    if(isset($formdata[$formdataname])){//送信されている
        if($formdata[$formdataname] != ''){//空ではない
            $parameter[$parmname] = $formdata[$formdataname];
        }
    }
    return $parameter;
}
function do_get($formdata, $doget_url, $username){
    $doget_status = '';
    if(isset($formdata['time'])){
        if(preg_match('/^[0-9]{2}:[0-9]{2}$/', $formdata['time'])){
            //値がnullのまま維持されていたら送信されません、変更がある場合のみ書き換えが行われ最終的に送信されます！
            $parameter = [
                //'user' => ''
                'time' => date('Y-m-d ').$formdata['time'],//date('yyyy-mm-dd ') + 
                'actionid' => null,
                'public' => true,
                'action' => null,
                'actiondetail' => null,
                'selfevaluation' => null,
                'wantdo' => null,
                'memo' => null,
                'whileaction' => null,
                'hook' => null,
                'nexthook' => null,
                'busyness' => null,
                'physicalcondition' => null,
                'sleepiness' => null,
                'physicaloption' => null,
            ];
            
            /*
            parameter:{
                //'time':'2023-12-14',//間違っているとdafaltへ、指定しないと今を設定する例:2023-12-10 22:51
                'actionid':'k1-10',
                'actiondetail':'カラオケ館,フリータイム',
                'actiondescription':'いつもよりも声が出なかった',
                'user':'moti',
                //'public':false,
                //physicaloption
                'selfevaluation':3,
                'wantdo':'2',
                'memo':'これはテスト',
                'whileaction':'a1,a2',
                'hook':'sleep-on'
                'nexthook':
            }
            */
            if(isset($formdata['kid'])){
                $parameter['actionid'] = $formdata['kid'];
            }elseif(isset($formdata['k'])){
                //kidが明示されていない場合行動の種類だけを送信する
                $parameter['actionid'] = $formdata['k'];
                $doget_status .= '| kidが明示されていない場合行動の種類だけ保存します'; 
            }else{
                return '| kidも行動の種類も送信されていない'; 
            }

            if(isset($formdata['public'])){
                if($formdata['public'] == 'on'){
                    $doget_status .= '| 非公開として保存'; 
                    $parameter['public'] = false;
                }
            }  
            $add_data_list = [
                ['actiondetail', 'actiondetail'],//行動の詳細//$paramname, $formdataname
                ['memo','memo'],//memo
                ['selfevaluation','se'],//その行動はプラスになるか
                ['wantdo','wd'],//その行動はやりたいことか
                ['busyness','b'],//忙しさ
                ['whileaction','c'],//体調
                ['sleepiness','sleepiness'],//眠気
                ['energy','energy'],//エネルギー
                ['hook','hook'],//hook
                ['nexthook','nexthook'],//次の行動が実行されたときに実行されるフック
            ];
            foreach($add_data_list as $add_data){
                //データが送信されてて空じゃなければその値を上書きする
                $parameter = parm_data_add($formdata, $parameter, $add_data[0], $add_data[1]);
            }

            //-体調オプション//physicaloption
            //生理痛0(なし),1(あり)//頭痛1(軽度)2(中程度)3(重度)//腹痛1(軽度)2(中程度)3(重度)//倦怠感
            foreach(['co1','co2','co3','co4'] as $co){
                if(isset($formdata[$co])){
                    if($formdata[$co] != ''){//送信されていて値が空じゃない場合
                        if($parameter['physicaloption'] != null){//すでに何かしらのオプションがある場合
                            $parameter['physicaloption'] .= ','.$co.'-'.$formdata[$co];
                        }else{
                            $parameter['physicaloption'] = $co.'-'.$formdata[$co];
                        }
                    }
                } 
            }

            foreach(['a1','a2','a3','a4','a5','a6','a7'] as $whileaction){ 
                if(isset($formdata[$whileaction])){
                    if($formdata[$whileaction] != ''){//送信されていて値が空じゃない場合
                        if($parameter['whileaction'] != null){//すでに何かしらのオプションがある場合
                            if($parameter['whileaction'] == 'on'){
                                $parameter['whileaction'] .= ','.$whileaction;
                            }
                        }else{
                            $parameter['whileaction'] = $whileaction;
                        }
                    }
                }
            }
            //イラスト枠
            if(isset($formdata['illust'])){
                //hookにillust-count:数値
                if(is_numeric($formdata['illust'])){
                    if($parameter['hook'] != null){
                        $parameter['hook'] .= ',illust-count:'.$formdata['illust'];
                    }else{
                        $parameter['hook'] = 'illust-count:'.$formdata['illust'];
                    }   
                }else{
                    $doget_status = 'illust部分で数値以外を送信しているためillustの項目を変更するhookは追加していません。';         
                }
            }

            //$doget_url .= ;
            $parm_str = '?';
            foreach($parameter as $key => $value){
                if($value != null){
                    $parm_str .= $key.'='.urlencode($value);
                    if ($key === array_key_last($parameter)) {
                        //最後だけの処理
                    }else{
                        $parm_str .= '&';
                    }
                }
            }
            $result = file_get_contents($doget_url.$parm_str);
            //echo($result);
            //echo($doget_url.$parm_str);
        }else{
            return '| timeの形式が正しくない為保存されませんでした。';    
        }
    }else{
        return '| timeが未設定のため保存されませんでした。';
    }
    return $doget_status;
}

//ログイン中のデータ追加フォームが送信されたときの処理
if(isset($_POST["add"])){
    //まずログインチェック
    $add_data =[];
    $update = '';//今日の日付と送られた分数
    if($login){
        $form_status = 'フォームを送信した状態で、ログインは行われている';
        //今日のデータがあるかチェック
        //lastupdate
        /*
        jsonのデータはユーザーのuidの名前のフォルダに年別に格納されている
        */
        if($userdata["uid"] != '')
        //uidがあるかチェック
        {
            $form_status = 'フォームを送信した状態で、ログイン済み、uidも存在する';
            if(file_exists("./data/".$userdata["uid"]))
            //そもそもuidのフォルダがあるかチェック
            {
                //ある場合
                $form_status = 'フォームを送信した状態で、ログイン済み、uidも存在し対応するディレクトリの作成も済んでいる';
                $form_status .= '| urlを読み込んだ';
                require( './data/'.$userdata["uid"].'/config.php' );
                global $url;
                //echo $url;
                //print_r($_POST);

                //時間がなければ送信をしない
                $form_status .= do_get($_POST,$url,$userdata["usernickname"]);
                header('Location: ./output.php');
                exit;

                if($userdata["lastupdate"] != '')
                //前回のデータがあるかチェック
                {
                    //あった場合
                    //取得処理
                    //直近のデータをいくつか取得

                    if(true)//TODO
                    //取得がうまくいった場合
                    {
                        
                        /*ここは使わない
                        //取得した最後のデータより今回の入力データがが後にあるかをチェック
                            //後にあった場合
                                //送信されたデータに問題がないかチェックする
                                    //問題がある場合
                                        //システム的なエラーの場合はエラーログに
                                        //不足のあるデータの場合は一応エラーログを書き出すが、シンプルなエラーの組み合わせがあるならissueにフォームの書き換えや送信データの不正な書き換えの可能性もある
                                        //データが問題ない場合最後のjsonに追加する
                                    //問題がない場合
                                        //そのまま保存し履歴として表示する

                            //同じ分数だった場合
                                //送信されたデータに問題がないかチェックする
                                //あとで考える
                            //前だった場合
                                //そもそも前回のデータが未来だった場合
                                    //エラーログを出力する  
                                //前回のデータが未来ではないが、フォームで送信されたデータが前回のデータよりも前の時
                                    //ブラウザのタブを残してた時とかにそのまま入力するとなっちゃうので、難かしらのエラーメッセージをだし、保存されていないことをアラートする、フォームには送信したデータをそのまま入力した状態にしてあげる
                                    //エラーをだす、フォームをそのままの状態で今の時間でページを表示させる
                        */
                    }else
                    //取得がうまくいかなかった場合
                    {
                        /*ここは使わない
                        //状態をエラーログに出力
                        */
                    }
                }else
                //前回のデータがなかった場合
                {
                    //lastupdateを更新

                    //新規のデータを作成
                    //今回送信のデータを初データとして登録
                }
            }else
            //ディレクトリは作成せずにユーザーデータの保存先がありませんとエラーを出す
            {
                $form_status = 'フォームを送信した状態で、ログイン済み、uidも存在するがディレクトリがない';
                //ディレクトリは作成せずにユーザーデータの保存先がありませんとエラーを出す、
                //フォルダはアカウント作成時に作成するはずなので何かしら想定外の事が起こっている
            }
        }
        //uidがない場合
        else{
            $form_status = 'フォームを送信した状態で、ログイン済み、uidが存在しない';
            //uidの取得でエラーが出てるのは何かおかしいので
            //エラーログを出す
        }   
    }else{
        //ログインしていないのでログアウト処理を行う
        //通常ここにはたどりつかないけど念のため
        session_start();
        unset($_SESSION["user_id"]);
        header('Location: ./output');
        exit;
    }
}else{
    //$status = "";
}
//echo $form_status;
function options($id_name,$hook_sync){
    $i = 1;
    foreach($hook_sync[$id_name] as $k_data){
        if(isset($k_data['name'])){
            $input = "<input type='radio' name='kid' value='{$id_name}-{$i}' id='{$id_name}-{$i}'";
            if(isset($k_data['hook'])){
                $input .= " hook='{$k_data['hook']}'";
            }
            if(isset($k_data['nexthook'])){
                $input .= " nexthook='{$k_data['nexthook']}'";
            }
            if(isset($k_data['default'])){
                if(isset($k_data['default']['public'])){
                    if(!$k_data['default']['public']){
                        $input .= " public='false'";
                    }
                }
            }
            $input .= "><label for='{$id_name}-{$i}'>{$k_data['name']}</label>";
            echo $input;
        }
        $i++;
    }
}
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
        <link rel="stylesheet" href="https://tools.motisan.info/css/index-style.css" http-equiv="Cache-Control" content="no-cache">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
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
                                border-top: #cfcfcf 1px solid;
                                color: #3c3c3c91;
                                padding-top: 6px;
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
                                margin-bottom:14px;
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
                            #login,#logout{
                                padding: 9px 12px;
                                font-size: 15px;
                                font-weight: 700;
                                color: #ffffff;
                                border: none;
                                border-radius: 14px;
                                background: #ffd799;
                            }
                            .submit{
                                font-size: 16px;
                                width: 100%;
                                border-radius: 100px;
                                padding: 9px 20px;
                                background: #ffd799;
                                font-weight: 700;
                                color: white;
                                border: none;
                                box-shadow: 2px 3px 6px #ff441e26;
                            }
                        </style>
                        <?
                        if(!$login){
                            ?>
                            <form class='time-manage' method="post" action="./output">
                                <h2 style='border:none;padding:0'>時間管理ツール</h2>
                                <p>時間は全て管理しましょう！</p>
                                <div>
                                    <label>
                                        <span>user</span>
                                        <input type='text' name='user' placeholder="ユーザー名" autocomplete='"username' required>
                                    </label>
                                    <label>
                                        <span>pass</span>
                                        <input type='password' name='password' placeholder="パスワード" required>
                                    </label>
                                    <label>
                                        <span>type</span>
                                        <input type='text' name='type' placeholder="type" required>
                                    </label>
                                    <input type='hidden' name='login'>
                                    <input type="submit" value='ログイン' id='login'>
                                </div>
                                <p>ログイン完了後に入力候補と、行動履歴や分析ページへのリンクが現れます！</p>
                            </form>
                        <?}else{?>
                            <form class='time-manage' method="post" action="./output">
                                <h2 style='border:none;padding:0'>時間管理ツール</h2>
                                <p>時間は全て管理しましょう！</p>
                                <p><?=$userdata["usernickname"]?>としてログイン中です！</p>
                                <input type='hidden' name='logout'>
                                <input type="submit" value='ログアウトする' id='logout'>
                            </form>
                        
                        
                            <form class='time-manage' method="post" action="./output" onsubmit="CheckData()" id='timeform'>
                                <input type='hidden' name='add'>
                                <input type='submit' value='送信' style='position: fixed;bottom: 20px;right:20px;border-radius:100px;padding:20px;background:#ffd799;font-weight:700;color: white;border:none;box-shadow:2px 3px 6px #ff441e26;'>
                                <?//ログイン処理だけ行った場合過去の履歴が表示される
                                //最初にログインする、下のフォームとこのフォームを別々にする
                                //ログイン中のユーザーが出るようにする?>
                                <hr>
                                <p>日にちは必ず今日(Asia/Tokyo)で記録されます、過去の入力をここから修正することはできません。</p>
                                <label>
                                    <span>time</span>
                                    <input type='time' value="<?=date('H:i')?>" name='time' id='time' required><div class='orange-button' onclick='$("#time").val(new Date().getHours().toString().padStart(2, "0") +":"+ new Date().getMinutes().toString().padStart(2, "0"));'>現在時刻</div><br>
                                </label>
                                <h2>行動の種類(必須)</h2>
                                <div>
                                    <label for='public'>
                                        <input type='checkbox' name='public' value="on" id='public'>
                                        非公開で保存する
                                    </label>
                                </div>
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
                                    .orange-button{
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
                                    <div onclick="shortcode(document.getElementById('shortcode').value);" class='orange-button'>コードの反映</div>
                                </div>
                                <?//トイレボタン?>
                                <?//行動履歴からオートフィル?>
                                <div class='button-column'>
                                    <input type='radio' name='k' value='k1' id='k1' required><label for='k1'>娯楽</label>
                                    <input type='radio' name='k' value='k2' id='k2'><label for='k2'>人間関係</label>
                                    <input type='radio' name='k' value='k3' id='k3'><label for='k3'>仕事＆作業</label>
                                    <input type='radio' name='k' value='k4' id='k4'><label for='k4'>食事</label>
                                    <input type='radio' name='k' value='k5' id='k5'><label for='k5'>睡眠</label>
                                    <input type='radio' name='k' value='k6' id='k6'><label for='k6'>休憩</label>
                                    <input type='radio' name='k' value='k7' id='k7'><label for='k7'>その他</label>
                                    <section class='k1option options' id='k1op'>
                                        <?//TODO:この項目は使用頻度によって場所が入れ替わるように設定する?>
                                        <?options('k1',$hook_sync)?>
                                    </section>
                                    <section class='k2option options' id='k2op'>
                                        <?options('k2',$hook_sync)?>
                                    </section>
                                    <section class='k3option options' id='k3op'>
                                        <?options('k3',$hook_sync)?>
                                    </section>
                                    <section class='k4option options' id='k4op'>
                                        <?options('k4',$hook_sync)?>
                                    </section>
                                    <section class='k5option options' id='k5op'>
                                        <?options('k5',$hook_sync)?>
                                    </section>
                                    <section class='k6option options' id='k6op'>
                                        <?options('k6',$hook_sync)?>
                                    </section>
                                    <section class='k7option options' id='k7op'>
                                        <?options('k7',$hook_sync)?>
                                    </section>
                                </div>
                                <p>行動の詳細を書いてください([娯楽,ゲーム]の例.マリオカート)</p>
                                <p>行動一覧に存在しない場合は種類を選んで詳細を記録</p>
                                <input type='text' name='actiondetail' placeholder="行動の(詳細)" id='actiondetail' style='margin-bottom:12px;width: calc(100% - 18px);'>
                                <input type='text' name='memo' placeholder="メモ" id='memo' style='margin-bottom: 12px;width: calc(100% - 18px);'>
                                <div class='button-column' id='a'>
                                    <?
                                    $button_list = [
                                        ['食べながら','a1'],
                                        ['会話しながら','a2'],
                                        ['動画を見ながら','a3'],
                                        ['運動をしながら','a4'],
                                        ['通話をしながら','a5'],
                                        ['片付けをしながら','a6'],
                                        ['PC作業をしながら','a7']
                                    ];
                                    foreach($button_list as $button_data){
                                        ?><input type='checkbox' name='<?=$button_data[1]?>' id='<?=$button_data[1]?>'><label for='<?=$button_data[1]?>'><?=$button_data[0]?></label><?
                                    }?>
                                </div>
                                <input type='submit' value='送信' class='submit'>
                                <p>以下はオプションです、上記の送信ボタンとページ下部の送信ボタンは全く同じ挙動です。</p>
                                <?//TODO:ながら作業の場合?>
                                <?//TODO:連絡フォーム?>
                                <?//ながら作業の項目を記録?>
                                <h2>その行動はプラスになるか</h2>
                                <p>直前に判断する自己評価を記録してください。</p>
                                <div class='button-column'>
                                    <input type='radio' name='se' value='1' id='se1'><label for='se1'>++</label>
                                    <input type='radio' name='se' value='2' id='se2'><label for='se2'>&nbsp;+&nbsp;</label>
                                    <input type='radio' name='se' value='3' id='se3'><label for='se3'>±0</label>
                                    <input type='radio' name='se' value='4' id='se4'><label for='se4'>&nbsp;-&nbsp;</label>
                                    <input type='radio' name='se' value='5' id='se5'><label for='se5'>--</label>
                                </div>
                                <h2>その行動はやりたいことか</h2>
                                <p>やりたい事がどのぐらい続くか、どのくらいの割合あったかを見るためデータです！</p>
                                <div class='button-column'>
                                    
                                    <input type='radio' name='wd' value='1' id='wd1'><label for='wd1'>かなりやりたくないこと</label>
                                    <input type='radio' name='wd' value='2' id='wd2'><label for='wd2'>できればやりたくないこと</label>
                                    <input type='radio' name='wd' value='3' id='wd3'><label for='wd3'>今やりたい事</label>
                                    <input type='radio' name='wd' value='4' id='wd4'><label for='wd4'>今日やりたい事</label>
                                    <input type='radio' name='wd' value='5' id='wd5'><label for='wd5'>いつかやりたかった事</label>
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
                                    #a.button-column input[type=checkbox]:checked+label{
                                        color:#f9fff8;
                                        background:#90d09f;
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
                                        display:flex;
                                        flex-wrap:wrap;
                                        color:red;
                                    }
                                    .button-column label{
                                        padding:4px 10px;
                                        margin-right:5px;
                                        background:whitesmoke;
                                        border-radius:14px;
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
                                        <input type='checkbox' id='co1' name='co1' value='1' ><label for='co1'>生理中</label>

                                        <input type='radio' name='co2' value='1' id='co2-1'><label for='co2-1'>頭痛(軽度)</label>
                                        <input type='radio' name='co2' value='2' id='co2-2'><label for='co2-2'>頭痛</label>
                                        <input type='radio' name='co2' value='3' id='co2-3'><label for='co2-3'>頭痛(重度)</label>

                                        <input type='radio' name='co3' value='1' id='co3-1'><label for='co3-1'>腹痛(軽度)</label>
                                        <input type='radio' name='co3' value='2' id='co3-2'><label for='co3-2'>腹痛</label>
                                        <input type='radio' name='co3' value='3' id='co3-3'><label for='co3-3'>腹痛(重度)</label>

                                        <input type='checkbox' id='co4'><label for='co4'>倦怠感</label>
                                    </div>
                                </details>
                                <h2>眠気</h2>
                                <p>開始時の眠気を入力</p>
                                <label>
                                    <div class='button-column'>
                                        <input type='radio' name='sleepiness' value='1' id='sleepiness1'><label for='sleepiness1'>眠くない</label>
                                        <input type='radio' name='sleepiness' value='2' id='sleepiness2'><label for='sleepiness2'>少し眠い</label>
                                        <input type='radio' name='sleepiness' value='3' id='sleepiness3'><label for='sleepiness3'>眠い</label>
                                        <input type='radio' name='sleepiness' value='4' id='sleepiness4'><label for='sleepiness4'>かなり眠い</label>
                                    </div>
                                </label>
                                <h2>体力値</h2>
                                <p>mi watchなどで計測可能な体力の総量</p>
                                <label>
                                    <span>エネルギー</span>
                                    <input name='energy' type='number' placeholder="" id='energy'>
                                </label>
                                <?/*起きたときに体力に合わせて、今日できることしないほうが好ましいことの提案を行ってくれる*/?>
                                <details>
                                    <summary style='color: #3c3c3c91;font-weight:700;'>hookとその他の項目</summary>
                                    <h2>hook</h2>
                                    <input type='text' name='hook' id='hook'>
                                    <h2>nexthook</h2>
                                    <input type='text' name='nexthook' id='nexthook'>
                                    <h2>イラスト枠</h2>
                                    <p>現在の枠数:2/4<br>変更がある場合だけ入力</p>
                                    <label>
                                        <span>illust</span>
                                        <input name='illust' type='number' placeholder="">
                                    </label>
                                </details>
                                <input type='submit' value='送信' class='submit'>
                            </form>
                        <?}?>
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
                if($(this).attr('name') == 'kid'){
                    $('#public').attr('checked', false).prop('checked', false).change();
                    $('#hook').val('');
                    $('#nexthook').val('');
                }
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
        //radioが変更されたらhookのところを書き換える
        $(function(){
            $( 'input[name="kid"]:radio' ).change( function() {
                var radioval = $(this).val();
                
                //hook書き換え
                if($('#' + radioval).attr('hook') != undefined){
                    $('#hook').val($('#' + radioval).attr('hook'));
                }else{
                    $('#hook').val('');
                }
                if($('#' + radioval).attr('nexthook') != undefined){
                    $('#nexthook').val($('#' + radioval).attr('nexthook'));
                }else{
                    $('#nexthook').val('');
                }
                //hook書き換え
                if($('#' + radioval).attr('public') != undefined){
                    if($('#' + radioval).attr('public') == 'false'){
                        $('#public').attr('checked', true).prop('checked', true).change();
                    }
                }else{
                    $('#public').attr('checked', false).prop('checked', false).change();
                }
            }); 
        });

        //kidの送信前にhook nexthook publicの値を含めてpostする
        function CheckData(){
            var element = document.getElementById( "timeform" ) ;

            // form要素内のラジオボタングループ(name="kid")を取得
            var radioNodeList = element.kid ;
            var kid = radioNodeList.value ;

            if ( kid === "" ) {
                // 未選択状態
            } else {
                if($('#' + kid).attr('hook') != undefined){
                    if(confirm('hookを設定しますか？' + $('#' + kid).attr('hook'))){                       
                        return true; 
                    }else{
                        alert('キャンセルされました'); 
                        return false; 
                    }
                }
            }
        }
    </script>
    </body>
</html>