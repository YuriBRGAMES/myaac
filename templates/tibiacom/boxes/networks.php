<div id="NetworksBox" class="Themebox" style="background-image:url(<?php echo $template_path; ?>/images/themeboxes/networks/networksbox.png);">
	<?php if(!empty($config['network_facebook'])) {?>
	<div id="FacebookBlock">
		<div id="FacebookLikeBox">
			<div class="fb-like-box fb_iframe_widget" data-href="https://www.facebook.com/<?php echo $config['network_facebook']; ?>" data-width="175" data-height="180" data-show-faces="true" data-stream="false" data-border-color="none" data-header="false" fb-xfbml-state="rendered">
										<span style="vertical-align: bottom; width: 181px; height: 180px;">
										</span>
			</div>
		</div>
		<div id="FacebookSendBox">
			<div class="fb-send fb_iframe_widget" data-href="https://www.facebook.com/<?php echo $config['network_facebook']; ?>" data-width="50" data-height="20" fb-xfbml-state="rendered">
										<span style="vertical-align: bottom; width: 50px; height: 20px;">
										</span>
			</div>
		</div>
		<div id="FacebookLikes">
			<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="https://www.facebook.com/<?php echo $config['network_facebook']; ?>" data-send="false" data-width="225" data-show-faces="false" fb-xfbml-state="rendered">
										<span style="height: 28px; width: 225px;">
										</span>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php if(!empty($config['network_twitter'])){ ?>
		<div id="TwitterBlock">
			<a href="https://twitter.com/<?php echo $config['network_twitter']; ?>" class="twitter-follow-button" data-show-count="false">Follow @<?php echo $config['network_twitter']; ?></a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
	<?php } ?>
	<div class="Bottom" style="background-image:url(<?php echo $template_path; ?>/images/general/box-bottom.gif);"></div>
</div>