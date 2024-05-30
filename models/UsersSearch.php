<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\db_models\Users;

/**
 * UsersSearch represents the model behind the search form of `app\db_models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['firstname', 'middlename', 'lastname', 'login', 'password', 'role'], 'safe'],
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
        $query = Users::find();

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

        $query->andFilterWhere(['ilike', 'firstname', $this->firstname])
            ->andFilterWhere(['ilike', 'middlename', $this->middlename])
            ->andFilterWhere(['ilike', 'lastname', $this->lastname])
            ->andFilterWhere(['ilike', 'login', $this->login])
            ->andFilterWhere(['ilike', 'password', $this->password])
            ->andFilterWhere(['ilike', 'role', $this->role]);

        return $dataProvider;
    }
}
