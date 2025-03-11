<?php
//require_once(realpath(MODEL_PATH . '/User.php'));
//Better way to do this below
loadModel('User');

class Login extends Model{

    public function validate(){
        $errors = [];

        if(!$this->email){
            $errors['email'] = 'E-mail é um capo obrigatório!';
        }

        if(!$this->password){
            $errors['password'] = 'Por favor, informe a senha!';
        }

        if(count($errors) > 0){
            throw new ValidationException($errors);
        }
    }

    public function checkLogin(){
        $this->validate();
        $user = User::getOne(['email' => $this->email]);

        if($user) {
            if($user->end_date){
                throw new AppException("Usuário está desligado da empresa!");
            }
            $senhaDigitada = '1234';
$hashNoBanco = '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o';

var_dump(password_verify($senhaDigitada, $hashNoBanco));
            if(password_verify($this->password, $user->password)){
                return $user;
            }
        }
        throw new AppException("Usuário e Senha inválidos!");
    }

}