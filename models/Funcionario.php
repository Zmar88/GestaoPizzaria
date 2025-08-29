<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property int $cod_funcionario
 * @property int $nif
 * @property string $nome
 * @property string|null $rua
 * @property string|null $nporta
 * @property string|null $codpostal
 * @property string $telefone
 * @property string|null $email
 * @property int|null $salario
 *
 * @property Entrega[] $entregas
 * @property Codpostal $codpostal0
 * @property TurnoFuncionario[] $turnoFuncionarios
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cod_funcionario', 'nif', 'nome', 'telefone'], 'required'],
            [['cod_funcionario', 'nif', 'salario'], 'integer'],
            [['nome'], 'string', 'max' => 100],
            [['rua', 'nporta', 'telefone', 'email'], 'string', 'max' => 20],
            [['codpostal'], 'string', 'max' => 10],
            [['cod_funcionario'], 'unique'],
            [['codpostal'], 'exist', 'skipOnError' => true, 'targetClass' => Codpostal::className(), 'targetAttribute' => ['codpostal' => 'codpostal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cod_funcionario' => 'Cod Funcionario',
            'nif' => 'Nif',
            'nome' => 'Nome',
            'rua' => 'Rua',
            'nporta' => 'Nporta',
            'codpostal' => 'Codpostal',
            'telefone' => 'Telefone',
            'email' => 'Email',
            'salario' => 'Salario',
        ];
    }

    /**
     * Gets query for [[Entregas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEntregas()
    {
        return $this->hasMany(Entrega::className(), ['cod_funcionario' => 'cod_funcionario']);
    }

    /**
     * Gets query for [[Codpostal0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCodpostal0()
    {
        return $this->hasOne(Codpostal::className(), ['codpostal' => 'codpostal']);
    }

    /**
     * Gets query for [[TurnoFuncionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTurnoFuncionarios()
    {
        return $this->hasMany(TurnoFuncionario::className(), ['cod_funcionario' => 'cod_funcionario']);
    }
}
