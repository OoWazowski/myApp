<?php

namespace app\models;

use Yii;
// เรียกใช้งาน Method ActiveRecodrd& IdentityInterface ให้เขียนเพิ่ม
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use app\models\User;

// ***** จบ *****

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $role
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface {
    
//  *****  เพิ่มสิทธิ การเข้าใช้งานโดยเขียนเพิ่มดังนี้  *****
    const STATUS_NOTACTIVE = 0;
    const STATUS_ACTIVE = 1;
    
    const ROLE_USER = 1;
    const ROLE_MANAGER = 5;
    const ROLE_ADMIN = 10;
//      ******จบ******
    
    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
//            ***** เขียนเพิ่ม *****
//            ['status','default','value'=>  self::STATUS_ACTIVE],
//            ['status','in','range'=>[
//            self::STATUS_ACTIVE, self::STATUS_NOTACTIVE 
//            ]],
//            ['role','defult','value'=>  self::ROLE_USER],
//            ['role','in','range'=>[
//            self::ROLE_USER,  self::ROLE_MANAGER, self::ROLE_ADMIN
//            ]],
//            ***** จบ *****
            [['username', 'auth_key', 'password_hash', 'email', 'role', 'status'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['username', 'password_hash', 'password_reset_token', 'email', 'role'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['status'], 'string', 'max' => 10],
            [['username'], 'unique'],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'id' => 'ID',
            'username' => 'ชื่อผู้ใช้',
            'auth_key' => 'Auth Key',
            'password_hash' => 'รหัสผ่าน',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'อีเมล์',
            'role' => 'สิทธิ์',
            'status' => 'สถานะ',
            'created_at' => 'สร้างวันที่',
            'updated_at' => 'แก้ไขวันที่',
        ];
    }
// ***** สร้าง function ขี้นมา ******
    public static function findByUsername($username){
        return static::findOne(['username'=>$username,'status'=>  self::STATUS_ACTIVE]);
    }
    
    public function validatePassword($password){
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }
// *****  จบ  *****
    public function getAuthKey() {
        
    }

    public function getId() {
// เขียนเพิ่ม
        return $this->getPrimaryKey();
        
    }

    public function validateAuthKey($authKey) {
        
    }

    public static function findIdentity($id) {
//        **** เขียนเพิ่ม  ใช้ในการเช็คค่าสิทธิ์ว่าสถานะเป็นอะไร*****
        return static::findOne(['id'=>$id, 'status'=>  self::STATUS_ACTIVE]);
        
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        
    }

}
