<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%catgeries_foydali_havolalar}}`.
 */
class m201109_071106_create_catgeries_foydali_havolalar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%catgeries_foydali_havolalar}}', [
            'id' => $this->primaryKey(),
            'title_ru' =>$this->string(),
            'title_uz' =>$this->string(),
            'title_en' =>$this->string(),
        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%catgeries_foydali_havolalar}}');
    }
}
