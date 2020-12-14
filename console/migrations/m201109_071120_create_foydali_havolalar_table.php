<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%foydali_havolalar}}`.
 */
class m201109_071120_create_foydali_havolalar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%foydali_havolalar}}', [
            'id' => $this->primaryKey(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'photo' => $this->string(),
            'link' => $this->string(),
            'category_id' =>$this->integer()
        ], $tableOptions);
        $this->createIndex('index-foydali_havolalar-category_id', 'foydali_havolalar', 'category_id');
        $this->addForeignKey('fkey-foydali_havolalar-category_id', 'foydali_havolalar', 'category_id', 'categories_foydali_havolalar', 'id', 'RESTRICT', 'RESTRICT');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%foydali_havolalar}}');
    }
}
