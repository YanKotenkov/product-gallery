<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m180918_151805_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'description' => $this->string()->defaultValue(''),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('product');
    }
}
