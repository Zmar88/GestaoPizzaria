<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encomenda".
 *
 * @property int $id_encomenda
 * @property float $vtotal
 * @property float $iva
 * @property float $vfinal
 * @property int $num_entrega
 * @property int $id_cliente
 *
 * @property Cliente $cliente
 * @property Entrega $numEntrega
 * @property EncomendaPizza[] $encomendaPizzas
 */
class Encomenda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'encomenda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_encomenda', 'vtotal', 'iva', 'vfinal', 'num_entrega', 'id_cliente'], 'required'],
            [['id_encomenda', 'num_entrega', 'id_cliente'], 'integer'],
            [['vtotal', 'iva', 'vfinal'], 'number'],
            [['id_encomenda'], 'unique'],
            [['id_cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['id_cliente' => 'id_cliente']],
            [['num_entrega'], 'exist', 'skipOnError' => true, 'targetClass' => Entrega::className(), 'targetAttribute' => ['num_entrega' => 'num_entrega']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_encomenda' => 'Id Encomenda',
            'vtotal' => 'Vtotal',
            'iva' => 'Iva',
            'vfinal' => 'Vfinal',
            'num_entrega' => 'Num Entrega',
            'id_cliente' => 'Id Cliente',
        ];
    }

    /**
     * Gets query for [[Cliente]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCliente()
    {
        return $this->hasOne(Cliente::className(), ['id_cliente' => 'id_cliente']);
    }

    /**
     * Gets query for [[NumEntrega]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumEntrega()
    {
        return $this->hasOne(Entrega::className(), ['num_entrega' => 'num_entrega']);
    }

    /**
     * Gets query for [[EncomendaPizzas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEncomendaPizzas()
    {
        return $this->hasMany(EncomendaPizza::className(), ['id_encomenda' => 'id_encomenda']);
    }
}
