<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ingrediente".
 *
 * @property int $id_ingrediente
 * @property string $preco
 * @property int $qtd
 * @property string $nome
 * @property string $validade
 * @property int $num_fornecedor
 *
 * @property Fornecedor $numFornecedor
 * @property IngredientePizza[] $ingredientePizzas
 */
class Ingrediente extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ingrediente';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_ingrediente', 'preco', 'qtd', 'nome', 'validade', 'num_fornecedor'], 'required'],
            [['id_ingrediente', 'qtd', 'num_fornecedor'], 'integer'],
            [['validade'], 'safe'],
            [['preco'], 'string', 'max' => 20],
            [['nome'], 'string', 'max' => 10],
            [['id_ingrediente'], 'unique'],
            [['num_fornecedor'], 'exist', 'skipOnError' => true, 'targetClass' => Fornecedor::className(), 'targetAttribute' => ['num_fornecedor' => 'num_fornecedor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_ingrediente' => 'Id Ingrediente',
            'preco' => 'Preco',
            'qtd' => 'Qtd',
            'nome' => 'Nome',
            'validade' => 'Validade',
            'num_fornecedor' => 'Num Fornecedor',
        ];
    }

    /**
     * Gets query for [[NumFornecedor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNumFornecedor()
    {
        return $this->hasOne(Fornecedor::className(), ['num_fornecedor' => 'num_fornecedor']);
    }

    /**
     * Gets query for [[IngredientePizzas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIngredientePizzas()
    {
        return $this->hasMany(IngredientePizza::className(), ['id_ingrediente' => 'id_ingrediente']);
    }
}
