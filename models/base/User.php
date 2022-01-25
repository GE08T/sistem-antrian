<?php

namespace app\models\base;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $jenis_kelamin
 * @property string|null $alamat
 * @property int $role_id
 * @property string|null $photo_url
 * @property string|null $last_login
 * @property string|null $last_logout
 *
 * @property Role $role
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
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
            [['username', 'password', 'name', 'jenis_kelamin', 'role_id'], 'required'],
            [['jenis_kelamin', 'alamat'], 'string'],
            [['role_id'], 'integer'],
            [['last_login', 'last_logout'], 'safe'],
            [['username', 'password', 'name'], 'string', 'max' => 50],
            [['photo_url'], 'string', 'max' => 255],
            [['username'], 'unique'],
            // [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => Role::className(), 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'name' => 'Name',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'role_id' => 'Role ID',
            'photo_url' => 'Photo Url',
            'last_login' => 'Last Login',
            'last_logout' => 'Last Logout',
        ];
    }

    /**
     * Gets query for [[Role]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(app\models\Role::className(), ['id' => 'role_id']);
    }
}
