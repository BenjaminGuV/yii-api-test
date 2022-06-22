<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m220612_033947_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(512),
            'body' => $this->text(),
            'post_id' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->addForeignKey('FK_comment_user_created_by', '{{%comment}}', 'created_by', '{{%user}}', 'id');
        $this->addForeignKey('FK_comment_post_post_id', '{{%comment}}', 'post_id', '{{%post}}', 'id');
        $this->dropTable('{{%comments}}');
    }
}
