<?php

/* @var $this yii\web\View */

use app\assets\AppAsset;

$this->title = 'My Yii Application';
$this->registerJsFile(
    '@web/js/main.js',
    ['depends' => [AppAsset::class]]
);
?>
<div class="site-index">

    <table id="table_id" class="table table-hover table-striped table-bordered table-condensed">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Note</th>
        </tr>

        </thead>
        <tbody>
        </tbody>
        <tfoot>
        <tr>
            <th>ID</th>
            <th>Note</th>
        </tr>
        </tfoot>
    </table>
</div>
