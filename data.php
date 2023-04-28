<?
$blog_info = [
    'name' => 'もちツールズ',
    'description' => '',
    'home' => 'tools.motisan.info',//top
    'base' => '//tools.motisan.info/',//base url
    'top-nav-txt' => 'もちもち便利ツール',
    'header-img'=>'./i/header.png.webp',
    'author'=>'もちさん',
    'twitter'=>'@motimoti_dev',
    'theme-color'=>'#FFEAD8',
    'og:image'=>'./i/ogp.png',
    'top-h2'=>'うおおおおおおおおおおおお！',
    'privacy-policy'=>'./privacy-policy/'
];
if(isset($_GET['local'])){
    $blog_info['home'] = 'localhost/github/tools2';
}
$tools = [
    [
        'title'=>'テキストファイル内容確認ツール',
        'url'=>'./tools/show-text/',
        'user'=>'',
        'description'=>'Web上でファイル内の文字列を確認するツールです！',
        'img'=>'i/show-text.png',
        'date'=>'2023/04/14',
        'var'=>'1.0',
        'id'=>'show-text'
    ],
    [
        'title'=>'文字置換ツール',
        'url'=>'./tools/text-replace/',
        'user'=>'',
        'description'=>'指定した文字を一括で置き換えるツールです！',
        'img'=>'i/text-replace.png',
        'date'=>'2023/04/14',
        'var'=>'1.0',
        'id'=>'text-replace',
    ],
    /*[
        'title'=>'',
        'url'=>'',
        'user'=>'',
        'description'=>'',
        'img'=>'',//base urlに続くurlを指定
        'date'=>'',
        'var'=>'',
    ]*/
];
?>