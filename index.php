<!--出力する内容は変わらないので②のコードの実行結果をそのままhtmlとして書き出して使用-->
<? ob_start();//バッファリング?>
<!DOCTYPE html>
<html lang="ja">
	<?include( 'parts/head.php' );?>
	<body style="background:#fff3e8;margin:0">
		<?include( 'parts/header.php' )?>
		<content>
			<?include( 'parts/nav.php' )?>
			<div class="wrapper center" style="margin-top:15px;padding-bottom:10px;">
				<?
					include( 'parts/main.php' );
					include( 'parts/sidebar.php' );
				?>
			</div>
		</content>
		<?include( 'parts/footer.php' )?>
	</body>
</html>
<?
    $compress = ob_get_clean();
    $compress = str_replace("\t", '', $compress);
    $compress = str_replace("\r", '', $compress);
    $compress = str_replace("\n", '', $compress);
    $compress = preg_replace('/<!--[\s\S]*?-->/', '', $compress);
    echo $compress;
?>
