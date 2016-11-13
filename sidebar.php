<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div class="sidebar col-3" id="sideba">
        <div class="widget" style="padding:10px">
            <h3 class="widget-title" style="margin:-10px 0 0 -11px">姬友们</h3>
            <ul class="blogroll row">
              <li class="col-6"><a href="https://moe.sh">太太</a></li>
              <li class="col-6"><a href="https://www.angelic47.com">天使姐姐</a></li>
              <li class="bottom col-6"><a href="https://satori.moe/">鸟姐</a></li>
              <li class="bottom col-6"><a href="https://qwq.moe/">更多</a></li>
            </ul>
        </div>
        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
        <div class="widget">
    		<h3 class="widget-title"><?php _e('最新文章'); ?></h3>
            <ul class="widget-list">
                <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
            </ul>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
        <div class="widget">
		<h3 class="widget-title"><?php _e('分类'); ?></h3>
            <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
        </div>
        <?php endif; ?>
        
        <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
        <div class="widget">
		<h3 class="widget-title">归档</h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
	    </div>
	<?php endif; ?>
	
    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
    	<div class="widget">
		<h3 class="widget-title"><?php _e('其它'); ?></h3>
        <ul class="widget-list">
            <?php if($this->user->hasLogin()): ?>
				<li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
        </ul>
	</div>
    <?php endif; ?>
</div>