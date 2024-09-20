<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\db_models\Registryes;

/**
 * RegistriesSearch represents the model behind the search form of `app\db_models\Registryes`.
 */
class RegistriesSearch extends Registryes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['registry_id', 'applicant_fk', 'payamount_fk', 'solution_fk', 'usercreate_fk'], 'integer'],
            [['serialandnumbersert', 'dategetsert', 'dateandnumbsolutionsert', 'comment', 'trek', 'mailingdate', 'dateoftheapp'], 'safe'],
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
        $query = Registryes::find();

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
            'registry_id' => $this->registry_id,
            'applicant_fk' => $this->applicant_fk,
            'dategetsert' => $this->dategetsert,
            'payamount_fk' => $this->payamount_fk,
            'solution_fk' => $this->solution_fk,
            'mailingdate' => $this->mailingdate,
            'dateoftheapp' => $this->dateoftheapp,
            'usercreate_fk' => $this->usercreate_fk,
        ]);

        $query->andFilterWhere(['ilike', 'serialandnumbersert', $this->serialandnumbersert])
            ->andFilterWhere(['ilike', 'dateandnumbsolutionsert', $this->dateandnumbsolutionsert])
            ->andFilterWhere(['ilike', 'comment', $this->comment])
            ->andFilterWhere(['ilike', 'trek', $this->trek]);

        return $dataProvider;
    }
}
