<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\db_models\Areas;

/**
 * AreaSearch represents the model behind the search form of `app\db_models\Areas`.
 */
class AreaSearch extends Areas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['area_id'], 'integer'],
            [['areaname'], 'safe'],
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
        $query = Areas::find();

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
            'area_id' => $this->area_id,
        ]);

        $query->andFilterWhere(['ilike', 'areaname', $this->areaname]);

        return $dataProvider;
    }
}
