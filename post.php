<?php if (!defined( '__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<?php if(!isset($_GET['_pjax'])){ ?> <div class="row col-9" style="margin-top:30px" id="pjax-container"> <?php } ?>
            <div class="hide" id="articlemain" name="articlemain">
                <div class="article-item" style="float:none;height:auto;">
                    <div class="article-title">
                        <h2><?php $this->title() ?></h2>
                        <i class="fa fa-clock-o" aria-hidden="true"></i> 2016年10月24日12:02:45 &nbsp;&nbsp;&nbsp;
				        <a href="<?php $this->author->permalink(); ?>"><i class="fa fa-user" aria-hidden="true"></i> <?php $this->author(); ?></a> &nbsp;&nbsp;&nbsp;
				        <i class="fa fa-tag" aria-hidden="true"></i> <?php $this->category(' '); ?> &nbsp;&nbsp;&nbsp;
                    </div>
                    
                    <div class="article-content">
                        <?php $this->content(); ?>
                    </div>
                </div>
            </div>
            <div class="article-item" style="float:none;height:auto;margin:20px 0 20px 0">
                <div class="article-content" id="comment-box">
                    
                </div>
                
                <script>
                function toggleDuoshuoComments(container){
                    var el = document.createElement('div');//该div不需要设置class="ds-thread"
                    el.setAttribute('data-thread-key', '<?php $this->theId(); ?>');//必选参数
                    el.setAttribute('data-url', '<?php $this->permalink(); ?>');//必选参数
                    DUOSHUO.EmbedThread(el);
                    jQuery(container).append(el);
                }
                $(document).ready(function(){toggleDuoshuoComments('#comment-box');});
                </script>
                
            </div>
        </div>
        <script>artz = document.getElementById('articlemain');
            artz.className = "animated fadeInRight";</script>
        <?php $this->need('footer.php'); ?>