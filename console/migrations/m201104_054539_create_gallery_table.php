<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%gallery}}`.
 */
class m201104_054539_create_gallery_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        $this->createTable('{{%gallery}}', [
            'id' => $this->primaryKey(),
            'status' => $this->integer()->notNull()->defaultValue(0),
            'photo' => $this->string(),

        ], $tableOptions);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%gallery}}');
    }
}
