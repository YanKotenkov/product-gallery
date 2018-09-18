<?php
namespace app\models\query;

use app\models\ar\Product;
use yii\db\ActiveQuery;

class ProductQuery extends ActiveQuery
{
    /** @inheritdoc */
    public static function find()
    {
        return Product::find();
    }
}