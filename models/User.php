<?php

namespace app\models;

class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    const ADMIN = 'admin';
    const DOKTER = 'dokter';
    const PERAWAT = 'perawat';
    const KASIR = 'kasir';
    const APOTEKER = 'apoteker';


    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at', 'authKey', 'accessToken'], 'safe'],
            [['username'], 'string', 'max' => 20],
            [['password', 'authKey', 'accessToken'], 'string', 'max' => 250],
            [['role_user'], 'string', 'max' => 30],
            ['role_user', 'default', 'value' => 'Perawat'],
            ['role_user', 'in', 'range' => [self::ADMIN, self::PERAWAT, self::DOKTER, self::KASIR]],
            ['status_active', 'default', 'value' => '1'],
        ];
    }

    public static function isUserAdmin($username)
    {
        if (static::findOne(['username' => $username, 'role_user' => self::ADMIN])) {

            return true;
        } else {

            return false;
        }
    }

    public static function isUserDokter($username)
    {
        if (static::findOne(['username' => $username, 'role_user' => self::DOKTER])) {

            return true;
        } else {

            return false;
        }
    }

    public static function isUserPerawat($username)
    {
        if (static::findOne(['username' => $username, 'role_user' => self::PERAWAT])) {

            return true;
        } else {

            return false;
        }
    }

    public static function isUserKasir($username)
    {
        if (static::findOne(['username' => $username, 'role_user' => self::KASIR])) {

            return true;
        } else {

            return false;
        }
    }

    public static function isUserApoteker($username)
    {
        if (static::findOne(['username' => $username, 'role_user' => self::APOTEKER])) {

            return true;
        } else {

            return false;
        }
    }


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status_active' => '1']);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        $users = self::find()->where(['accessToken' => $token])->all();
        foreach ($users as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username, 'status_active' => '1']);
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public function validateUsername($username)
    {
        return $this->username === $username;
    }

    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'username' => 'Username',
            'password' => 'Password',
            'authKey' => 'AuthKey',
            'accessToken' => 'AccessToken',
            'status_aktif' => 'Status Aktif',
            'role_user' => 'Role User',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
