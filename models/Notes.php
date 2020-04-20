<?php


namespace app\models;

use Yii;

class Notes extends \app\models\dataModels\Notes
{
    public function dataForDatatable(): array
    {
        return [
            $this->id,
            $this->note
        ];
    }
}