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
    
    public function actionLogin() {
        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            $user = new User;
            $user->setEmail($email);
            $user->setPassword($password);

            $user->checkUserData();

            if ($user->getID() == false) {
                $errors[] = 'Incorrect login details';
            } else {
                $user->auth();

                header("Location: /");
            }
        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }

    public function actionLogout() {
        unset($_SESSION["user"]);
        header("Location: /");
    }
}
