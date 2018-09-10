<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m180910_173421_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'password' => $this->string()->notNull(),
            'role' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }
}
