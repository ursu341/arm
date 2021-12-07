<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Book;

/**
 * BookSearch represents the model behind the search form of `backend\models\Book`.
 */
class BookSearch extends Book
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['u_soni', 'list_uz', 'list_ru', 'list_en', 'o_soni', 'list1_uz', 'list1_ru', 'list1_en', 'b_soni', 'list2_uz', 'list2_ru', 'list2_en', 'i_soni', 'list3_uz', 'list3_ru', 'list3_en'], 'safe'],
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
        $query = Book::find();

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

        $query->andFilterWhere(['like', 'u_soni', $this->u_soni])
            ->andFilterWhere(['like', 'list_uz', $this->list_uz])
            ->andFilterWhere(['like', 'list_ru', $this->list_ru])
            ->andFilterWhere(['like', 'list_en', $this->list_en])
            ->andFilterWhere(['like', 'o_soni', $this->o_soni])
            ->andFilterWhere(['like', 'list1_uz', $this->list1_uz])
            ->andFilterWhere(['like', 'list1_ru', $this->list1_ru])
            ->andFilterWhere(['like', 'list1_en', $this->list1_en])
            ->andFilterWhere(['like', 'b_soni', $this->b_soni])
            ->andFilterWhere(['like', 'list2_uz', $this->list2_uz])
            ->andFilterWhere(['like', 'list2_ru', $this->list2_ru])
            ->andFilterWhere(['like', 'list2_en', $this->list2_en])
            ->andFilterWhere(['like', 'i_soni', $this->i_soni])
            ->andFilterWhere(['like', 'list3_uz', $this->list3_uz])
            ->andFilterWhere(['like', 'list3_ru', $this->list3_ru])
            ->andFilterWhere(['like', 'list3_en', $this->list3_en]);

        return $dataProvider;
    }
}
