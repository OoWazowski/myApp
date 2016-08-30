<?php

use yii\db\Migration;

/**
 * Handles the creation for table `users`.
 */
class m160830_045758_create_Users_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),
            'email' => $this->string()->notNull(),
            'role' => $this->string()->notNull(),
            'status' => $this->string(10)->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
        $this->createIndex('username', 'user', 'username', TRUE);
        $this->createIndex('email', 'user', 'email', TRUE);
        
        $this->createTable('profile', [
            'id' => $this->primaryKey(),
            'user_id' => $this->string()->notNull(),
            'fullname' => $this->string()->notNull(),
            'created_at' => $this->dateTime(),
        ]);
        
        $security = Yii::$app->security;
        $this->batchInsert('user', ['username', 'auth_key', 'password_hash', 'email', 'role', 'status', 'created_at', 'updated_at'],[
                ['admin',$security->generateRandomString(),$security->generatePasswordHash('admin'),'admin@admin.com',10,1,date("Y-m-d H:i:s"),date("Y-m-d H:i:s")],
                ['demo',$security->generateRandomString(),$security->generatePasswordHash('demo'),'demo@octagon.co.th',1,1,date("Y-m-d H:i:s"),date("Y-m-d H:i:s")],
            ]);
            $this->batchInsert('profile', ['user_id','fullname','created_at'], [
                [1,'Administrator',  date("Y-m-d H:i:s")],
                [2,'Demostration',  date("Y-m-d H:i:s")],
            ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('profile');
        $this->dropTable('user');
    }
}
