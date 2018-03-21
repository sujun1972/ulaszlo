<?php include('page-header.tpl.php');?>



<div class="content-main">
    <?php if ($page['highlighted']): ?>
        <div id="highlighted">
            <?php print render($page['highlighted']); ?>
        </div>
    <?php endif; ?>


    <div class="container pt-5 pb-5">

            <?php
                $block = block_load('block', 1);
                $render_array = _block_get_renderable_array(_block_render_blocks(array($block)));
                $output = render($render_array);
                print $output;
            ?>

            <div class="sc_content main  margin_bottom_mini sc_aligncenter text_styling" style="font-size:16px;line-height:24px;color:#979797;">
                <div class="wpb_text_column wpb_content_element ">
                    <div class="wpb_wrapper">
                        <!-- <p>You are welcome to check out our house gallery to make sure that this home<br>
                            is in prime condition which makes it a perfect living space.</p> -->
                    </div>
                    <?php print views_embed_view('gallery', 'page');?>
                </div>
            </div>
        </div>
</div>

<?php include('page-footer.tpl.php');?>