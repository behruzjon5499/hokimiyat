<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m201105_152210_create_categories_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
