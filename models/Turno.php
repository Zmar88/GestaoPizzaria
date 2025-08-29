<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "turno".
 *
 * @property int $id_turno
 * @property string $hinicio
 * @property string $hfim
 *
 * @property TurnoFuncionario[] $turnoFuncionarios
 */
class Turno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'turno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_turno', 'hinicio', 'hfim'], 'required'],
            [['id_turno'], 'integer'],
            [['hinicio', 'hfim'], 'string', 'max' => 20],
            [['id_turno'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_turno' => 'Id Turno',
            'hinicio' => 'Hinicio',
            'hfim' => 'Hfim',
        ];
    }

    /**
     * Gets query for [[TurnoFuncionarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTurnoFuncionarios()
    {
        return $this->hasMany(TurnoFuncionario::className(), ['id_turno' => 'id_turno']);
    }
}
