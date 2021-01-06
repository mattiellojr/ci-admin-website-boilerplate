<div class="clearfix">
    <div class="page-header">
        <h1><?php echo isset($page_title) ? $page_title : ''; ?></h1>
        <div class="top-navigation">
            <ol class="breadcrumb">
                <li><a href="<?php echo site_url('admin/dashboard'); ?>">Home</a></li>
                <li class="active"><?php echo isset($page_title) ? $page_title : ''; ?></li>
            </ol>
        </div>
    </div>

    <div class="page-content clearfix">
        <div class="row">
            <?php
                # var_dump($stats);

                stat_box($stats->users, 'Properties');
            ?>
        </div>
    </div>
</div>