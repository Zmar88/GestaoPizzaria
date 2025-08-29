<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pizza".
 *
 * @property int $num_pizza
 * @property string $nome
 * @property string $precocusto
 * @property string $precovenda
 * @property int $qtde
 * @property string $validade
 *
 * @property EncomendaPizza[] $encomendaPizzas
 * @property IngredientePizza[] $ingredientePizzas
 */
class Pizza extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pizza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_pizza', 'nome', 'precocusto', 'precovenda', 'qtde', 'validade'], 'required'],
            [['num_pizza', 'qtde'], 'integer'],
            [['validade'], 'safe'],
            [['nome', 'precocusto', 'precovenda'], 'string', 'max' => 20],
            [['num_pizza'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_pizza' => 'Num Pizza',
            'nome' => 'Nome',
            'precocusto' => 'Precocusto',
            'precovenda' => 'Precovenda',
            'qtde' => 'Qtde',
            'validade' => 'Validade',
        ];
    }

    /**
     * Gets query for [[EncomendaPizzas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEncomendaPizzas()
    {
        return $this->hasMany(EncomendaPizza::className(), ['num_pizza' => 'num_pizza']);
    }

    /**
     * Gets query for [[IngredientePizzas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientePizzas()
    {
        return $this->hasMany(IngredientePizza::className(), ['num_pizza' => 'num_pizza']);
    }
}
