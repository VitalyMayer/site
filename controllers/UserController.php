<?php

class UserController {

    public function actionRegister() {
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        $errors = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = new User();
            $user->setName($name);
            $user->setEmail($email);
            $user->setPassword($password);

            if ($user->checkEmailExists()) {
                $errors[] = 'This email is exists';
            }

            if ($errors == false) {
                $result = $user->Register();
            }
        }


        require_once(ROOT . '/views/user/register.php');

        return true;
    }

}
