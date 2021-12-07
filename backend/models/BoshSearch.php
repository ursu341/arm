<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Bosh;

/**
 * BoshSearch represents the model behind the search form of `backend\models\Bosh`.
 */
class BoshSearch extends Bosh
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['about_uz', 'about_ru', 'about_en', 'list_uz', 'list_ru', 'list_en', 'list1_uz', 'list1_ru', 'list1_en', 'list2_uz', 'list2_ru', 'list2_en'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Bosh::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'about_uz', $this->about_uz])
            ->andFilterWhere(['like', 'about_ru', $this->about_ru])
            ->andFilterWhere(['like', 'about_en', $this->about_en])
            ->andFilterWhere(['like', 'list_uz', $this->list_uz])
            ->andFilterWhere(['like', 'list_ru', $this->list_ru])
            ->andFilterWhere(['like', 'list_en', $this->list_en])
            ->andFilterWhere(['like', 'list1_uz', $this->list1_uz])
            ->andFilterWhere(['like', 'list1_ru', $this->list1_ru])
            ->andFilterWhere(['like', 'list1_en', $this->list1_en])
            ->andFilterWhere(['like', 'list2_uz', $this->list2_uz])
            ->andFilterWhere(['like', 'list2_ru', $this->list2_ru])
            ->andFilterWhere(['like', 'list2_en', $this->list2_en]);

        return $dataProvider;
    }
}
