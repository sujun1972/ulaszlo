<?php if ($main_menu || $secondary_menu): ?>
    <div id="navigation">
        <div class="section">
            <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
        </div>
    </div> <!-- /.section, /#navigation -->
<?php endif; ?>

<?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
<?php endif; ?>

<?php print $messages; ?>
<div id="main-wrapper" class="container">
    <div id="main" class="clearfix">

        <div id="content" class="column">
            <div class="section">
                <?php if ($page['highlighted']): ?>
                    <div id="highlighted">
                        <?php print render($page['highlighted']); ?>
                    </div>
                <?php endif; ?>
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?><h1 class="title"
                                         id="page-title"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?>
                    <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
            </div>
        </div> <!-- /.section, /#content -->

        <?php if ($page['sidebar_first']): ?>
            <div id="sidebar-first" class="column sidebar">
                <div class="section">
                    <?php print render($page['sidebar_first']); ?>
                </div>
            </div> <!-- /.section, /#sidebar-first -->
        <?php endif; ?>

        <?php if ($page['sidebar_second']): ?>
            <div id="sidebar-second" class="column sidebar">
                <div class="section">
                    <?php print render($page['sidebar_second']); ?>
                </div>
            </div> <!-- /.section, /#sidebar-second -->
        <?php endif; ?>

    </div>
</div> <!-- /#main, /#main-wrapper -->