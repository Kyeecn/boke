<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
      <center>
			  @2014-2015 <a href='http://www.weibo.com/ChenKaiyuuuu' target='_blank'>Kyee</a> | 
        <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">浙ICP备14033785号-1</a> |
        <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1254076149'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1254076149' type='text/javascript'%3E%3C/script%3E"));</script> <br>
        Powered by <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyfifteen' ) ); ?>" target="_blank">WordPress</a> | 
        Designed by <a href="https://wordpress.org/themes/twentyfifteen" target="_blank">Twentyfifteen</a> | 
        托管于<a href="http://www.aliyun.com/" target="_blank">阿里云</a>
      </center>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
