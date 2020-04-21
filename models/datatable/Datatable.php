<?php

namespace app\models\datatable;

use yii\base\Model;

/**
 * Class DatatableSearch
 * @package app\models\search
 *
 * @property int $draw
 * @property int $start
 * @property int $length
 * @property array $search
 * @property array $order
 * @property DatatableColumn[] $columns
 */
class Datatable extends Model
{
    public $draw;
    public $start;
    public $length;
    public $search;
    public $order;
    public $columns;

    protected $recordsTotal;
    protected $recordsFiltered;
    protected $data;
    protected $error;

    protected $page;
    protected $pageSize;

    public function rules(): array
    {
        return [
            [['draw', 'start', 'length'], 'integer'],
            [['search', 'order', 'columns'], 'safe'],
        ];
    }

    public function returnData(): array
    {
        return [
            'draw' => $this->draw,
            'recordsTotal' => $this->recordsTotal,
            'recordsFiltered' => $this->recordsFiltered,
            'data' => $this->data,
            'error' => $this->error,
        ];
    }

    protected function loadData(): void
    {
        $this->pageSize = $this->length;
        $this->page = intdiv($this->start, $this->length);
        $columns = [];
        foreach ($this->columns as $column) {
            $datatableColumn = new DatatableColumn($column);
            var_dump($datatableColumn);
            exit();
        }
    }

    public function __construct($config = [])
    {
        parent::__construct($config);
        $this->pageSize = $this->length;
        $this->page = intdiv($this->start, $this->length);
        $columns = [];
        foreach ($this->columns as $column) {
            $datatableColumn = new DatatableColumn($column);
            $columns[] = $datatableColumn;
        }
        $this->columns = $columns;
    }
}