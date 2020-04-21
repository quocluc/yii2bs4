<?php


namespace app\models;

use app\models\datatable\Datatable;
use yii\data\ActiveDataProvider;

class NotesDatatable extends Datatable
{
    private function process(): void
    {
        $count = Notes::find();
        $query = Notes::find();
        $query->andFilterWhere([
            'id' => $this->columns[0]->search->value
        ]);
        $query->andFilterWhere(['like', 'note', $this->columns[1]->search->value]);
        $activeDataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'page' => $this->page,
                'pageSize' => $this->pageSize
            ]
        ]);
        $this->data = $activeDataProvider->getModels();
        $this->recordsTotal = $count->count();
        $this->recordsFiltered = $activeDataProvider->getTotalCount();
    }

    public function returnData(): array
    {
        $this->process();
        return parent::returnData();
    }
}