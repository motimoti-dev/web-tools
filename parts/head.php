
<head prefix="og: https://ogp.me/ns#">
    <?// http-equiv="Cache-Control" content="no-cache"キャッシュさせない?>
    <meta name="viewport" content="width=width=480,initial-scale=1">
	<title><?=$blog_info( 'name' )?></title>
	<meta name="description" content="<?=$blog_info('description')?>">
	<meta name="robots" content="index, follow">

	<meta property="og:title" content="<?=$blog_info( 'name' )?>">
	<meta property="og:type" content="blog"><?//blog https://webdesign-trends.net/entry/12993#ogtype?>
	<meta property="og:description" content="<?=$bloginfo( 'description' )?>">
	<meta property="og:url" content="<?=$blog_info( 'home' )?>"><?//ページのURL?>
	<meta property="og:image" content="//motisan.info/i/ogp.png">
	<meta property="og:locale" content="ja_JP">
	<meta property="og:site_name" content="<?=$blog_info['name']?>"><?//<meta property="og:admins" content="">?>
	
	<link rel="stylesheet" href="//motisan.info/assets/themes/moti/css/index-style.css" http-equiv="Cache-Control" content="no-cache">
	<link rel="stylesheet" type="text/css" href="//unpkg.com/hint.css@2.7.0/hint.min.css" media="print" onload="this.media='all'">
	<link rel="canonical" href="<?=$blog_info['home']?>">
	<meta name="author" content="もちさん">

	<meta name="theme-color" content="#FFEAD8">

	<meta name="twitter:card" content="summary_large_image" ><?//(1)カードの種類?>
	<meta name="twitter:site" content="@motimoti_dev"><?//(2)Twitterのユーザー名?>
	<meta name="twitter:title" content="<?bloginfo( 'name' )?>">
	<meta name="twitter:description" content="<?bloginfo( 'description' )?>">
	<meta name="twitter:image" content="//motisan.info/i/ogp.png">

	<link rel="icon" href="//motisan.info/i/32.png" sizes="32x32">
	<link rel="icon" href="//motisan.info/i/192.png" sizes="192x192">
	<link rel="apple-touch-icon-precomposed" href="//motisan.info/i/apple.png"><?//appleホームページショートカット 180x180?>
	<meta name="msapplication-TileImage" content="//motisan.info/i/ms.png">
</head>