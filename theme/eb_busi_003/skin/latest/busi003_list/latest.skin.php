<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>
<div class="latest-list">
	<ul class="list-unstyled">
		<?php for ($i=0; $i<count($list); $i++) { ?>
		<li><h5 class="ellipsis"><a href="<?php echo $list[$i]['href'] ?>"><i class="fa fa-angle-right"></i> <?php echo $list[$i]['subject']; ?></a></h5></li>
		<?php }  ?>
	</ul>
	<?php if (count($list) == 0) { //게시물이 없을 때  ?>
    <p class="text-center color-grey font-size-13 margin-top-30"><i class="fa fa-exclamation-circle"></i> 최신글이 없습니다.</p>
    <?php }  ?>
</div>