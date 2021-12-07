<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Hodim;

/**
 * HodimSearch represents the model behind the search form of `backend\models\Hodim`.
 */
class HodimSearch extends Hodim
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'bulim_id'], 'integer'],
            [['img', 'fio_uz', 'lavozim_uz', 'pochta', 'tel', 'fio_ru', 'fio_en', 'lavozim_ru', 'lavozim_en', 'malumoti_uz', 'malumoti_ru', 'malumoti_en'], 'safe'],
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
        $query = Hodim::find();

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
            'bulim_id' => $this->bulim_id,
        ]);

        $query->andFilterWhere(['like', 'img', $this->img])
            ->andFilterWhere(['like', 'fio_uz', $this->fio_uz])
            ->andFilterWhere(['like', 'lavozim_uz', $this->lavozim_uz])
            ->andFilterWhere(['like', 'pochta', $this->pochta])
            ->andFilterWhere(['like', 'tel', $this->tel])
            ->andFilterWhere(['like', 'fio_ru', $this->fio_ru])
            ->andFilterWhere(['like', 'fio_en', $this->fio_en])
            ->andFilterWhere(['like', 'lavozim_ru', $this->lavozim_ru])
            ->andFilterWhere(['like', 'lavozim_en', $this->lavozim_en])
            ->andFilterWhere(['like', 'malumoti_uz', $this->malumoti_uz])
            ->andFilterWhere(['like', 'malumoti_ru', $this->malumoti_ru])
            ->andFilterWhere(['like', 'malumoti_en', $this->malumoti_en]);

        return $dataProvider;
    }
}
