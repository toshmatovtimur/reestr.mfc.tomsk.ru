<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\db_models\Privilegies;

/**
 * PrivilegieSearch represents the model behind the search form of `app\db_models\Privilegies`.
 */
class PrivilegieSearch extends Privilegies
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['privilege_id'], 'integer'],
            [['privilegename'], 'safe'],
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
        $query = Privilegies::find();

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
            'privilege_id' => $this->privilege_id,
        ]);

        $query->andFilterWhere(['ilike', 'privilegename', $this->privilegename]);

        return $dataProvider;
    }
}
