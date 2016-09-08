<?php

use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
?>
<div class="content-wrapper">
    <section class="content">
        <div class="box box-default">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
                <i class="fa fa-envelope"></i>

                <h3 class="box-title">ZooZa Clubs</h3>
                <!-- tools box -->
                <div class="pull-right box-tools">
                    <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="" data-original-title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
                <!-- /. tools -->
            </div>
            <div class="box-body">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= $content ?>
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>