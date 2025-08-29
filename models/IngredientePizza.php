<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingrediente_pizza".
 *
 * @property int $id_ingrediente
 * @property int $num_pizza
 *
 * @property Ingrediente $ingrediente
 * @property Pizza $numPizza
 */
class IngredientePizza extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingrediente_pizza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ingrediente', 'num_pizza'], 'required'],
            [['id_ingrediente', 'num_pizza'], 'integer'],
            [['id_ingrediente'], 'exist', 'skipOnError' => true, 'targetClass' => Ingrediente::className(), 'targetAttribute' => ['id_ingrediente' => 'id_ingrediente']],
            [['num_pizza'], 'exist', 'skipOnError' => true, 'targetClass' => Pizza::className(), 'targetAttribute' => ['num_pizza' => 'num_pizza']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ingrediente' => 'Id Ingrediente',
            'num_pizza' => 'Num Pizza',
        ];
    }

    /**
     * Gets query for [[Ingrediente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngrediente()
    {
        return $this->hasOne(Ingrediente::className(), ['id_ingrediente' => 'id_ingrediente']);
    }

    /**
     * Gets query for [[NumPizza]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumPizza()
    {
        return $this->hasOne(Pizza::className(), ['num_pizza' => 'num_pizza']);
    }
}
