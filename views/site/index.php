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

    <table id="table_id" class="display">
        <thead>
        <tr>
            <th>ID</th>
            <th>Note</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
