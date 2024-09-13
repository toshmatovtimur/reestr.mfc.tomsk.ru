<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\db_models\Payamounts;

/**
 * PayamountSearch represents the model behind the search form of `app\db_models\Payamounts`.
 */
class PayamountSearch extends Payamounts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payamount_id'], 'integer'],
            [['pay'], 'number'],
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
        $query = Payamounts::find();

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
            'payamount_id' => $this->payamount_id,
            'pay' => $this->pay,
        ]);

        return $dataProvider;
    }
}
