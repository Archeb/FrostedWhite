<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

		<?php if(!isset($_GET['_pjax'])){
		$this->need('sidebar.php'); 
		?>
		
	</div>
</div>


<?php $this->footer(); ?>
	<script src="<?php $this->options->themeUrl('./js/waypoint.js'); ?>" type="text/javascript" charset="utf-8"></script>
    <script src="<?php $this->options->themeUrl('./js/main.js.php'); ?>" type="text/javascript" charset="utf-8"></script>
    <div class="footbar">
        <div class="footbar-content">
            <p>© 2014 - 2016 Archeb's Blog. Powered by Typecho. Speedup by CloudXNS / Anodelic CDN.</p>
            <p>Host in Anodelic Cloud. Theme is ForstedWhite By Archeb. 备案是什么，能吃嘛 ╮(๑•́ ₃•̀๑)╭ </p>
        </div>
    </div>
</body>
</html>
<?php } ?>
