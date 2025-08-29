<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encomenda_pizza".
 *
 * @property int $num_pizza
 * @property int $id_encomenda
 *
 * @property Encomenda $encomenda
 * @property Pizza $numPizza
 */
class EncomendaPizza extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'encomenda_pizza';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_pizza', 'id_encomenda'], 'required'],
            [['num_pizza', 'id_encomenda'], 'integer'],
            [['id_encomenda'], 'unique'],
            [['id_encomenda'], 'exist', 'skipOnError' => true, 'targetClass' => Encomenda::className(), 'targetAttribute' => ['id_encomenda' => 'id_encomenda']],
            [['num_pizza'], 'exist', 'skipOnError' => true, 'targetClass' => Pizza::className(), 'targetAttribute' => ['num_pizza' => 'num_pizza']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_pizza' => 'Num Pizza',
            'id_encomenda' => 'Id Encomenda',
        ];
    }

    /**
     * Gets query for [[Encomenda]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEncomenda()
    {
        return $this->hasOne(Encomenda::className(), ['id_encomenda' => 'id_encomenda']);
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
