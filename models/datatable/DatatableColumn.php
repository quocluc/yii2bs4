<?php


namespace app\models\datatable;

use yii\base\Model;

/**
 * Class DatatableColumn
 * @package app\models\datatable
 *
 * @property string $data
 * @property string $name
 * @property bool $searchable
 * @property bool $orderable
 * @property DatatableColumnSearch $search
 */
class DatatableColumn extends Model
{
    public $data;
    public $name;
    public $searchable;
    public $orderable;
    public $search;

    public function rules(): array
    {
        return [
            [['data', 'name'], 'string'],
            [['searchable', 'orderable'], 'bool'],
            ['search', 'safe']
        ];
    }

    public function __construct($config = [])
    {
        parent::__construct($config);
        $this->search = new DatatableColumnSearch($this->search);
    }
}