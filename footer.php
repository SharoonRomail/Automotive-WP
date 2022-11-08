<?php include_once( "section-map.php" ); ?>
<section class="social_media">
<ul class="list-inline text-center">
	<?php if(get_theme_mod( 'git_link' ) != ""){?>
		<li><a href="<?php echo get_theme_mod( 'git_link' ); ?>" class="fa fa-github" title="Git"></a></li>
	<?php } ?>

	<?php if(get_theme_mod( 'insta_link' ) != ""){?>
		<li> <a href="<?php echo get_theme_mod( 'insta_link' ); ?>" class="fa fa-instagram" title="Instagram"></a> </li>
	<?php }?>

	<?php if(get_theme_mod( 'fb_link' ) != ""){?>
		<li> <a href="<?php echo get_theme_mod( 'fb_link' ); ?>" class="fa fa-facebook" title="Facebook"></a> </li>
	<?php } ?>

	<?php if(get_theme_mod( 'tw_link' ) != ""){?>
		<li> <a href="<?php echo get_theme_mod( 'tw_link' ); ?>" class="fa fa-twitter" title="Twitter"></a> </li>
	<?php } ?>

	<?php if(get_theme_mod( 'yt_link' ) != ""){?>
		<li> <a href="<?php echo get_theme_mod( 'yt_link' ); ?>" class="fa fa-youtube-play" title="Youtube"></a> </li>
	<?php } ?>

	<?php if(get_theme_mod( 'email_link' ) != ""){?>
		<li> <a href="mailto:<?php echo get_theme_mod( 'email_link' ); ?>" class="fa fa-envelope-o" title="Email"></a> </li>
	<?php } ?>

</ul>
</section>
<section class="copyright">
	<?php $copyright = get_theme_mod( 'footer_copy' );
	echo '<p>' . $copyright . '</p>'; ?>
</section>
<?php wp_footer(); ?>
</body>
</html>