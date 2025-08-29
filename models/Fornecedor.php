<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fornecedor".
 *
 * @property int $num_fornecedor
 * @property string $nome
 * @property string|null $rua
 * @property int $nporta
 * @property string|null $codpostal
 * @property string $telefone
 *
 * @property Ingrediente[] $ingredientes
 */
class Fornecedor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fornecedor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_fornecedor', 'nome', 'nporta', 'telefone'], 'required'],
            [['num_fornecedor', 'nporta'], 'integer'],
            [['nome', 'telefone'], 'string', 'max' => 20],
            [['rua'], 'string', 'max' => 100],
            [['codpostal'], 'string', 'max' => 10],
            [['num_fornecedor'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num_fornecedor' => 'Num Fornecedor',
            'nome' => 'Nome',
            'rua' => 'Rua',
            'nporta' => 'Nporta',
            'codpostal' => 'Codpostal',
            'telefone' => 'Telefone',
        ];
    }

    /**
     * Gets query for [[Ingredientes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientes()
    {
        return $this->hasMany(Ingrediente::className(), ['num_fornecedor' => 'num_fornecedor']);
    }
}
