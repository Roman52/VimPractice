<?php
/**
 * Module: About
 */

$about_first_title  = get_post_meta( $post->ID, 'page_modules_' . $module_sequence . '_about_first_title', true );
$about_second_title = get_post_meta( $post->ID, 'page_modules_' . $module_sequence . '_about_second_title', true );
$about_text         = get_post_meta( $post->ID, 'page_modules_' . $module_sequence . '_about_text', true );
$about_link_text    = get_post_meta( $post->ID, 'page_modules_' . $module_sequence . '_about_link_text', true );
$about_link_url     = get_post_meta( $post->ID, 'page_modules_' . $module_sequence . '_about_link_url', true );
$about_img          = get_field( 'page_modules_' . $module_sequence . '_about_img' );

$about_first_title  = ($about_first_title) ? $about_first_title : null;
$about_second_title = ($about_second_title) ? $about_second_title : null;
$about_text         = ($about_text) ? $about_text : null;
$about_link_text    = ($about_link_text) ? $about_link_text : null;
$about_link_url     = ($about_link_url) ? $about_link_url : null;
$about_img          = ($about_img ) ? $about_img  : null; 
?>
<div class="container container--about">
	<div class="about-box">
		<div class="about-box__item about-box__item--1 animate">
			<?php
			if ($about_first_title) echo '<div class="about-box__title-2">' . $about_first_title . '</div>';
			if ($about_second_title) echo '<div class="about-box__title-3">' . $about_second_title . '</div>';
			if ($about_text) echo '<div class="about-box__text">' . do_shortcode( wpautop( $about_text ) ) . '</div>';
			if ($a = 1) :
                ?>
                    <div class="hello">Hello, world!</div>
                <?php
            else :
                ?>
                <div class="hello-1">Hello world-1!</div>
                <?php
            endif;


			if ($about_link_text && $about_link_url) :
				?>
				<a href="<?php echo $about_link_url ?>" class="button button--about button--chevron-right">
					<?php echo $about_link_text ?>
					<i data-feather="chevron-right"></i>		
				</a>
				<?php
			endif;
			?>
		</div>
		<div class="about-box__item about-box__item--2">




            i

            <?php
			if ($about_img) :
				?>
				<div class="about-box__item-img-wrap animate">
					<img src="<?php echo $about_img; ?>" class="about-box__img" alt="<?php echo $about_second_title; ?>">
				</div>
				<?php
			endif;
			?>
		</div>
	</div>
</div>