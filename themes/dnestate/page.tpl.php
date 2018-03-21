<?php include('page-header.tpl.php');?>

<div class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="page-title"><?php print $title;?></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <?php print render($page['content']); ?>
            </div>
        </div>
    </div>
</div>

<?php include('page-footer.tpl.php');?>
