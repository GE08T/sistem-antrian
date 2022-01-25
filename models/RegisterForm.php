<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * RegisterForm is the model behind the register form.
 */
class RegisterForm extends Model
{
    public $username;
    public $password;
    public $name;
    public $jenis_kelamin;
    public $alamat;
    private $role_id = 3; //Regular User


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['username', 'password', 'name', 'jenis_kelamin'], 'required'],
            [['alamat'], 'string'],
        ];
    }

    /**
     * Logs in a user using the provided username and password.
     * @return boolean whether the user is logged in successfully
     */
    public function register()
    {
        if ($this->validate()) {
            $user = new User();
            $user->username = $this->username;
            $user->password = md5($this->password);
            $user->name = $this->name;
            $user->jenis_kelamin = $this->jenis_kelamin;
            $user->alamat = $this->alamat;
            $user->role_id = $this->role_id;
            if ($user->save()) {
                return true;
            } else {
                if ($user->errors) {
                    $this->addErrors($user->errors);
                }
                return false;
            }
        }
        return false;
    }
}
