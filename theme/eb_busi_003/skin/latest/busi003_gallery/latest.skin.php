<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
@include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>
<div class="latest-gallery-wrap">
	<div class="latest-gallery clear-after">
		<?php
        for ($i=0; $i<count($list); $i++) {
			$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $options['thumb_width'], $options['thumb_height'], false, true);
    
            if($thumb['src']) {
                $img_content = '<img src="'.$thumb['src'].'" class="img-responsive">';
            } else {
                $img_content = '<span class="no-image">No Image</span>';
            }

            $href_id = 'p_player_btn'.$i;
        ?>
		<div class="item">
			<div class="latest-gallery-image">
				<a href="<?php echo $list[$i]['href'] ?>">
					<div class="img-box">
						<?php echo $img_content; ?>
					</div>
				</a>
			</div>
			<div class="latest-gallery-content">
				<h5 class="ellipsis"><a href="<?php echo $list[$i]['href'] ?>"><?php echo $list[$i]['subject']; ?></a></h5>
				<p class="ellipsis"><?php echo get_text(cut_str(strip_tags($list[$i]['wr_content']), $options['content_length']), 1); ?></p>
			</div>
		</div>
		<?php }  ?>
		
		<?php if (count($list) == 0) { //게시물이 없을 때  ?>
        <p class="text-center color-grey font-size-13 margin-top-30"><i class="fa fa-exclamation-circle"></i> 최신글이 없습니다.</p>
        <?php }  ?>
	</div>
</div>