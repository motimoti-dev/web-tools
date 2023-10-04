<?
$blog_info = [
    'name' => 'もちツールズ',
    'description' => 'Webブラウザ上で動作するツールをまとめています。うおおおおおおおおおおおお！',
    'home' => 'tools.motisan.info',//top
    'base' => '//tools.motisan.info/',//base url
    'top-nav-txt' => 'もちもち便利Webツール',
    'header-img'=>'./i/header.png.webp',
    'author'=>'もちさん',
    'twitter'=>'@motisan_info',
    'theme-color'=>'#FFEAD8',
    'og:image'=>'https://tools.motisan.info/i/ogp.png',
    'top-h2'=>'うおおおおおおおおおおおお！',
    'privacy-policy'=>'./privacy-policy/'
];
if(isset($_GET['local'])){
    $blog_info['home'] = 'localhost/github/tools2';
}
$user = [
    'm'=>[
        'name' => 'もちさん',
        'icon' => '',
        'icon-min' => ''
    ]
    ];
$example = [
    [
        'title'=>'テストツール',
        'url'=>'./tools/example/',
        'canonical'=>'https://tools.motisan.info/tools/example/',
        'user'=>'',
        'description'=>'テストのツールです',
        'img'=>'i/example.png',
        'date'=>'2023/05/07',
        'var'=>'1.0',
        'id'=>'example',
        'view'=>true
    ]
];
$tools = [
    [
        'title'=>'テキストファイル内容確認ツール',
        'url'=>'./tools/show-text/',
        'canonical'=>'https://tools.motisan.info/tools/show-text/',
        'user'=>'',
        'description'=>'Web上でファイル内の文字列を確認するツールです！',
        'img'=>'i/show-text.png',
        'date'=>'2023/04/14',
        'var'=>'1.0',
        'id'=>'show-text',
        'view'=>true
    ],
    [
        'title'=>'文字置換ツール',
        'url'=>'./tools/text-replace/',
        'canonical'=>'https://tools.motisan.info/tools/text-replace/',
        'user'=>'',
        'description'=>'指定した文字を一括で置き換えるツールです！',
        'img'=>'i/text-replace.png',
        'date'=>'2023/04/14',
        'var'=>'1.0',
        'id'=>'text-replace',
        'view'=>true
    ],
    [
        'title'=>'予定入りカレンダー生成',
        'url'=>'./tools/calendar-generator/output.php',
        'canonical'=>'https://tools.motisan.info/tools/calendar-generator/output.php',
        'user'=>'',
        'description'=>'文字やアイコンの入ったカレンダーを生成できます！',
        'img'=>'i/calendar-generator.png',
        'date'=>'2023/04/30',
        'var'=>'1.0',
        'id'=>'calendar-generator',
        'view'=>true
    ],
    [
        'title'=>'もちイラスト博物館',
        'url'=>'./tools/src-illust/',
        'canonical'=>'https://tools.motisan.info/tools/src-illust/',
        'user'=>'',
        'description'=>'イラストが検索できます！',
        'img'=>'i/src-illust.png',
        'date'=>'2023/05/6',
        'var'=>'1.0',
        'id'=>'src-illust',
        'view'=>true
    ],
    [
        'title'=>'メタタグジェネレーター',
        'url'=>'./tools/meta-tag-generator/',
        'canonical'=>'https://tools.motisan.info/tools/meta-tag-generator/',
        'user'=>'',
        'description'=>'HTMLのメタタグを作成できます',
        'img'=>'i/meta-tag-generator.png',
        'date'=>'2023/06/9',
        'var'=>'1.0',
        'id'=>'meta-tag-generator',
        'view'=>true
    ],
    [
        'title'=>'もち的コピペ集',
        'url'=>'./tools/copy-paste/output.php',
        'canonical'=>'https://tools.motisan.info/tools/copy-paste/output.php',
        'user'=>'',
        'description'=>'もちが個人的によく使う文字列をコピペできます',
        'img'=>'i/copy-paste.png',
        'date'=>'2023/06/9',
        'var'=>'1.0',
        'id'=>'copy-paste',
        'view'=>true
    ],
    [
        'title'=>'よく使う正規表現',
        'url'=>'',
        'canonical'=>'',
        'user'=>'',
        'description'=>'まだ作っているところです！',
        'img'=>'i/no-letter.png',
        'date'=>'2023/06/21',
        'var'=>'1.0',
        'id'=>'regular-expression',
        'view'=>false
    ],
    [
        'title'=>'時間管理',
        'url'=>'./tools/time-manage/output.php',
        'canonical'=>'https://tools.motisan.info/tools/time-manage/output.php',
        'user'=>'',
        'description'=>'テスト運用中、新規登録不可、まだ作っているところです！',
        'img'=>'i/time-manage.png',
        'date'=>'2023/07/22',
        'var'=>'1.0',
        'id'=>'time-manage',
        'view'=>true
    ],
    [
        //8
        'title'=>'SVGを横幅3000pxのPNGに変換するツール',
        'url'=>'./tools/svg2img/output.php',
        'canonical'=>'https://tools.motisan.info/tools/svg2img/output.php',
        'user'=>'',
        'description'=>'もち用',
        'img'=>'i/svg2png.png',
        'date'=>'2023/09/22',
        'var'=>'1.0',
        'id'=>'svg2img',
        'view'=>true
    ],
    [
        //9
        'title'=>'文字暗号化ツール',
        'url'=>'./tools/crypter/encode.php',
        'canonical'=>'https://tools.motisan.info/tools/crypter/encode.php',
        'user'=>'m',
        'description'=>'テキストを暗号化するツールです(AES-256bit)！パスフレーズで復号できます！',
        'img'=>'i/cryoter-encoder.png',
        'date'=>'2023/10/03',
        'var'=>'1.0',
        'id'=>'cryoter',
        'view'=>true
    ],
    [
        //10
        'title'=>'暗号化文字復号ツール',
        'url'=>'./tools/crypter/decode.php',
        'canonical'=>'https://tools.motisan.info/tools/crypter/decode.php',
        'user'=>'m',
        'description'=>'暗号化した文字を復号するツールです(AES-256bit)！パスフレーズで復号できます！',
        'img'=>'i/cryoter-decoder.png',
        'date'=>'2023/10/03',
        'var'=>'1.0',
        'id'=>'cryoter-decode',
        'view'=>true
    ],
    /*
    [
        'title'=>'',
        'url'=>'',
        'canonical'=>'',
        'user'=>'',
        'description'=>'',
        'img'=>'',//base urlに続くurlを指定
        'date'=>'',
        'var'=>'',
    ]*/
];
?>