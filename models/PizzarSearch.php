<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pizza;

/**
 * PizzarSearch represents the model behind the search form of `app\models\Pizza`.
 */
class PizzarSearch extends Pizza
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_pizza', 'qtde'], 'integer'],
            [['nome', 'precocusto', 'precovenda', 'validade'], 'safe'],
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
        $query = Pizza::find();

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
            'num_pizza' => $this->num_pizza,
            'qtde' => $this->qtde,
            'validade' => $this->validade,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'precocusto', $this->precocusto])
            ->andFilterWhere(['like', 'precovenda', $this->precovenda]);

        return $dataProvider;
    }
}
