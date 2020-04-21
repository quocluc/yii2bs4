<?php


namespace app\models\datatable;


use yii\base\Model;

/**
 * Class DatatableColumnSearch
 * @package app\models\datatable
 *
 * @property string $value
 * @property bool $regex
 */
class DatatableColumnSearch extends Model
{
    public $value;
    public $regex;

    public function rules(): array
    {
        return [
            ['value', 'string'],
            ['regex', 'boolean']
        ];
    }
}