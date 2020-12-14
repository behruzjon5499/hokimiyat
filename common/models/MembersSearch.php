<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Members;

/**
 * MembersSearch represents the model behind the search form of `common\models\Members`.
 */
class MembersSearch extends Members
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'hudud_id'], 'integer'],
            [['full_name', 'phone', 'email', 'lavozimi', 'photo', 'qabul_kunlari', 'description_ru', 'description_uz', 'description_en', 'majburiyat_ru', 'majburiyat_uz', 'majburiyat_en'], 'safe'],
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
        $query = Members::find();

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
            'hudud_id' => $this->hudud_id,
        ]);

        $query->andFilterWhere(['like', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'lavozimi', $this->lavozimi])
            ->andFilterWhere(['like', 'photo', $this->photo])
            ->andFilterWhere(['like', 'qabul_kunlari', $this->qabul_kunlari])
            ->andFilterWhere(['like', 'description_ru', $this->description_ru])
            ->andFilterWhere(['like', 'description_uz', $this->description_uz])
            ->andFilterWhere(['like', 'description_en', $this->description_en])
            ->andFilterWhere(['like', 'majburiyat_ru', $this->majburiyat_ru])
            ->andFilterWhere(['like', 'majburiyat_uz', $this->majburiyat_uz])
            ->andFilterWhere(['like', 'majburiyat_en', $this->majburiyat_en]);

        return $dataProvider;
    }
}
