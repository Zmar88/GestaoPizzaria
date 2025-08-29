<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property int $id_cliente
 * @property int $nif
 * @property string $nome
 * @property string|null $rua
 * @property int $nporta
 * @property string|null $codpostal
 * @property string $telefone
 * @property string|null $email
 *
 * @property Codpostal $codpostal0
 * @property Encomenda[] $encomendas
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cliente', 'nif', 'nome', 'nporta', 'telefone'], 'required'],
            [['id_cliente', 'nif', 'nporta'], 'integer'],
            [['nome', 'rua'], 'string', 'max' => 100],
            [['codpostal'], 'string', 'max' => 10],
            [['telefone', 'email'], 'string', 'max' => 20],
            [['id_cliente'], 'unique'],
            [['codpostal'], 'exist', 'skipOnError' => true, 'targetClass' => Codpostal::className(), 'targetAttribute' => ['codpostal' => 'codpostal']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cliente' => 'Id Cliente',
            'nif' => 'Nif',
            'nome' => 'Nome',
            'rua' => 'Rua',
            'nporta' => 'Nporta',
            'codpostal' => 'Codpostal',
            'telefone' => 'Telefone',
            'email' => 'Email',
        ];
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
     * Gets query for [[Encomendas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEncomendas()
    {
        return $this->hasMany(Encomenda::className(), ['id_cliente' => 'id_cliente']);
    }
}
