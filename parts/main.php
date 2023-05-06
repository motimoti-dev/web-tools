<main>
    <?include( 'parts/share-pc.php' )?>
	<div class="pbox">
		<div style="grid-column: 1/3;">
			<h2 class='top-h2'><?=$blog_info['top-h2']?></h2>
		</div>
		<?$blocknum = count($tools);
		for($i =1;$i <= $blocknum;$i++){?>
			<?if($tools[$i - 1]['view']){?>
				<div class="post-b s1">
					<a href="<?=$tools[$i - 1]['url']?>" aria-label='<?=$tools[$i - 1]['title']?>'>
						<article>
							<div class="post-thumbnail" style="background-image:url(<?=$blog_info['base']?><?=$tools[$i - 1]['img']?>);"></div>
						</article>
					</a>
					<div class="post-t">
						<a href="<?=$tools[$i - 1]['url']?>" aria-label='<?=$tools[$i - 1]['title']?>'>
						<h2><?=$tools[$i- 1]['title']?></h2>
						<p><?=$tools[$i- 1]['description']?></p>
					</a>
					</div>
				</div>
			<?}?>
		<?}?>
	</div>
</main>