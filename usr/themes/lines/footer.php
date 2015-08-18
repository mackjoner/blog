	<div class="clear"></div>

	<div id="footer">

	<?php $this->options->description() ?><br />&copy;<?php echo date('Y'); ?> <a href="<?php $this->options->siteurl(); ?>"><?php $this->options->title(); ?></a> - <a href="http://www.typecho.org" id="Powered_by">Typecho)))</a> - <a href="http://www.echojoy.com">Lines</a> - <a href="<?php $this->options->feedUrl(); ?>">Subscribe RSS</a></div><!-- end #footer -->

</div><!-- end #wrapper -->

<?php $this->footer(); ?>

<!-- <script type="text/javascript" src="<?php $this->options->themeUrl('js/st.js'); ?>"></script> -->

<script type="text/javascript">
// var downloadLink = document.getElementById('Powered_by');
// addListener(downloadLink, 'click', function() {
    ga('send', 'event', '/about.html', 'click', 'Right side menu');
// });


/**
 * Utility to wrap the different behaviors between W3C-compliant browsers
 * and IE when adding event handlers.
 *
 * @param {Object} element Object on which to attach the event listener.
 * @param {string} type A string representing the event type to listen for
 *     (e.g. load, click, etc.).
 * @param {function()} callback The function that receives the notification.
 */
// function addListener(element, type, callback) {
//  if (element.addEventListener) element.addEventListener(type, callback);
//  else if (element.attachEvent) element.attachEvent('on' + type, callback);
// }    
</script>

</body>

</html>

