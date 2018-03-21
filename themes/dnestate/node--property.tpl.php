<?php // dpm($content);?>

<div class="row">
    <div class="col-12 col-lg-6">
        <div class="mb-2">
            <?php print render($content['field_house_plan']); ?>
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div class="mb-2">
            <?php dsm($content);?>
            <!-- <a href="<?php //print '/' . drupal_get_path_alias($content['field_floor'][0]['#href']);?>"> -->
                <?php // print $content['field_floor'][0]['#title']; ?>
            <!-- </a> -->

            <?php print render($content['field_floor']);?>
            <span class="float-right">
                <?php //print $content['field_size'][0]['#markup'] . " ㎡"; ?>
            </span>

            <div class="mb-2">
                <?php print render($content['body']);?>
            </div>

        </div>
    </div>
</div>

