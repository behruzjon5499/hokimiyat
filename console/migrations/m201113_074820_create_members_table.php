<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%members}}`.
 */
class m201113_074820_create_members_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%members}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'lavozimi' => $this->string(),
            'hudud_id' => $this->integer(),
            'photo' => $this->string(),
            'qabul_kunlari' => $this->string(),
            'description_ru' => $this->text(),
            'description_uz' => $this->text(),
            'description_en' => $this->text(),
            'majburiyat_ru' => $this->text(),
            'majburiyat_uz' => $this->text(),
            'majburiyat_en' => $this->text(),
        ], $tableOptions);
        $this->createIndex('index-members-hudud_id', 'members', 'hudud_id');
        $this->addForeignKey('fkey-members-hudud_id', 'members', 'hudud_id', 'hudud', 'id', 'RESTRICT', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%members}}');
    }
}
