<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "turno_funcionario".
 *
 * @property int $id_turno
 * @property int $cod_funcionario
 *
 * @property Funcionario $codFuncionario
 * @property Turno $turno
 */
class TurnoFuncionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'turno_funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_turno', 'cod_funcionario'], 'required'],
            [['id_turno', 'cod_funcionario'], 'integer'],
            [['cod_funcionario'], 'exist', 'skipOnError' => true, 'targetClass' => Funcionario::className(), 'targetAttribute' => ['cod_funcionario' => 'cod_funcionario']],
            [['id_turno'], 'exist', 'skipOnError' => true, 'targetClass' => Turno::className(), 'targetAttribute' => ['id_turno' => 'id_turno']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_turno' => 'Id Turno',
            'cod_funcionario' => 'Cod Funcionario',
        ];
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

    /**
     * Gets query for [[Turno]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTurno()
    {
        return $this->hasOne(Turno::className(), ['id_turno' => 'id_turno']);
    }
}
