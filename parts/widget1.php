<?
date_default_timezone_set('Asia/Tokyo');//タイムゾーンを日本に
//twitter初期みたいなsvgアイコン
//$svg1 = '<svg viewBox="0 0 1024 1024" width="15" height="15"><path fill="currentColor" d="M964.37 981.87A457.62 457.62 0 00692 573.72a302.25 302.25 0 00118.57-240.34 303 303 0 10-571.71 140.07 305.91 305.91 0 0084.32 100.38A458.88 458.88 0 0086.65 814.09 449.62 449.62 0 0050.8 981.85a14.64 14.64 0 0014.25 15h72.46a14.51 14.51 0 0014.61-14.24 355.59 355.59 0 01710.93 0 14.52 14.52 0 0014.62 14.26h72.09a14.63 14.63 0 0014.62-14.61zM709.25 333.38a201.76 201.76 0 11-59.09-142.57 200.3 200.3 0 0159.09 142.57z" /></svg>';
$svg1 = '<svg style="top:4px" width="18" height="18" viewBox="0 0 24 24" stroke="#6e7b85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" color="#6e7b85"> <path stroke-linecap="round" d="M5.5,19.5 C7.83333333,18.5 9.33333333,17.6666667 10,17 C11,16 8,16 8,11 C8,7.66666667 9.33333333,6 12,6 C14.6666667,6 16,7.66666667 16,11 C16,16 13,16 14,17 C14.6666667,17.6666667 16.1666667,18.5 18.5,19.5"/><circle cx="12" cy="12" r="10"/></svg>';
$svg2 = '<svg width="16" height="16" viewBox="0 0 24 24"stroke="#6e7b85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none" color="#6e7b85"><path d="M3 5H21V21H3V5Z"/> <path d="M21 9H3"/><path d="M7 5V3"/><path d="M17 5V3"/></svg>';
$ajust = '&nbsp;&nbsp;';
?>
<div class="summary s1" contenteditable="true">
	<dl class='side-block m0'>
		<dt>
			<span><?=$svg1?></span>
			<span><?=$ajust?>作成者</span>
		</dt>
		<dd>
			<span class="sb">
				<a area-lavel='もちさん' href='https://motisan.info'>もちさん</a>
			</span>
		</dd>
	</dl>
	<dl class='side-block m0' style='border:none'>
		<dt>
			<span><?=$svg2?></span>
			<span><?=$ajust?>最終更新日</span>
		</dt>
		<dd>
			<span class="sb"><time><?=date( 'Y/m/d' )?></time></span>
		</dd>
	</dl>
</div>