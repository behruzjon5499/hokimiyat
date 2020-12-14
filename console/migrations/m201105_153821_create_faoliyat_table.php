<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%faoliyat}}`.
 */
class m201105_153821_create_faoliyat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%faoliyat}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'photo' => $this->string(),
            'file' => $this->string(),
            'category_id' => $this->integer(),
            'description_ru' => $this->text(),
            'description_uz' => $this->text(),
            'description_en' => $this->text(),
            'status' => $this->integer()->notNull()->defaultValue(0),
        ], $tableOptions);
        $this->createIndex('index-faoliyat-category_id', 'faoliyat', 'category_id');
        $this->addForeignKey('fkey-faoliyat-category_id', 'faoliyat', 'category_id', 'categories', 'id', 'RESTRICT', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%faoliyat}}');
    }
}
