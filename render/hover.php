<?php if ($style == 'ihover') { ?>
	<div class="ih-item <?php echo $hover_effect; ?>"
		style="border: <?php echo $border_width; ?> solid <?php echo $border_color; ?>;">
		<?php if (isset($caption_url) && $caption_url != '') { ?>
			<a href="<?php echo $caption_url; ?>" target="<?php echo $caption_url_target; ?>">
		<?php } ?>
		<?php if (isset($caption_url) && $caption_url == NULL) { ?>
			<a>
		<?php } ?>
	      <div class="img">
	      	<span style="box-shadow: inset 0 0 0 <?php echo $border_width; ?> <?php echo $border_color; ?>, 0 1px 2px rgba(0, 0, 0, .3); opacity: 0.6;"></span>
	      	<img src="<?php echo $image_url; ?>">
	      </div>
	      <div class="info" style="background-color: <?php echo $caption_bg; ?>;">
	      	<h3 style="color: <?php echo $title_clr; ?>; background: <?php echo $title_bg; ?>; font-size: <?php echo $title_size; ?>;">
	      		<?php echo $title; ?>
	      	</h3>
	      	<p style="color: <?php echo $desc_clr; ?>; font-size: <?php echo $desc_size; ?>;">
	      		<?php echo $desc; ?>
	      	</p>
	      </div>
	    </a>
	</div>
<?php } ?>