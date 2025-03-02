<?php
//require_once(realpath(MODEL_PATH . '/User.php'));
//Better way to do this below
loadModel('User');

class Login extends Model{
    public function checkLogin(){
        $user = User::getOne(['email' => $this->email]);

        if($user) {
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
        throw new Exception();
    }

}