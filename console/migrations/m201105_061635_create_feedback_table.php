<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%feedback}}`.
 */
class m201105_061635_create_feedback_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%feedback}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string()->notNull(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'address' => $this->string(),
            'description' => $this->text(),
            'status' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%feedback}}');
    }
}
