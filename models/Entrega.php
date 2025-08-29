<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "entrega".
 *
 * @property int $num_entrega
 * @property string $data
 * @property string|null $hora
 * @property int $cod_funcionario
 *
 * @property Encomenda[] $encomendas
 * @property Funcionario $codFuncionario
 */
class Entrega extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'entrega';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_entrega', 'data', 'cod_funcionario'], 'required'],
            [['num_entrega', 'cod_funcionario'], 'integer'],
            [['data'], 'safe'],
            [['hora'], 'string', 'max' => 20],
            [['num_entrega'], 'unique'],
            [['cod_funcionario'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionario::className(), 'targetAttribute' => ['cod_funcionario' => 'cod_funcionario']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_entrega' => 'Num Entrega',
            'data' => 'Data',
            'hora' => 'Hora',
            'cod_funcionario' => 'Cod Funcionario',
        ];
    }

    /**
     * Gets query for [[Encomendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEncomendas()
    {
        return $this->hasMany(Encomenda::className(), ['num_entrega' => 'num_entrega']);
    }

    /**
     * Gets query for [[CodFuncionario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodFuncionario()
    {
        return $this->hasOne(Funcionario::className(), ['cod_funcionario' => 'cod_funcionario']);
    }
}
