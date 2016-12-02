<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $user_id
 * @property string $fullname
 * @property string $nickname
 * @property string $email
 * @property string $address
 * @property string $gender
 * @property string $phoneNum
 * @property string $comment
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullname', 'nickname', 'email', 'address', 'gender', 'phoneNum'], 'required'],
            [['fullname', 'nickname', 'phoneNum', 'comment'], 'string', 'max' => 25],
            [['email', 'address'], 'string', 'max' => 45],
            [['gender'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'fullname' => 'Fullname',
            'nickname' => 'Nickname',
            'email' => 'Email',
            'address' => 'Address',
            'gender' => 'Gender',
            'phoneNum' => 'Phone Num',
            'comment' => 'Comment',
        ];
    }
}
