<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Encomenda;

/**
 * EncomendaSearch represents the model behind the search form of `app\models\Encomenda`.
 */
class EncomendaSearch extends Encomenda
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_encomenda', 'num_entrega', 'id_cliente'], 'integer'],
            [['vtotal', 'iva', 'vfinal'], 'number'],
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
        $query = Encomenda::find();

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
            'id_encomenda' => $this->id_encomenda,
            'vtotal' => $this->vtotal,
            'iva' => $this->iva,
            'vfinal' => $this->vfinal,
            'num_entrega' => $this->num_entrega,
            'id_cliente' => $this->id_cliente,
        ]);

        return $dataProvider;
    }
}
