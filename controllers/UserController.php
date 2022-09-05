<?php

class UserController {

    public function actionRegister() {
        $name = '';
        $email = '';
        $password = '';
        $image = '';
        $result = false;

        $errors = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $image = $_FILES["image"]["name"];

            $user = new User();
            $user->setName($name);
            $user->setEmail($email);
            $user->setPassword($password);
            $user->setImage($image);

            if ($user->checkEmailExists()) {
                $errors[] = 'This email is exists';
            }

            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/" . $_FILES["image"]["name"]);
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

    public function actionEdit() {
        if (!$_SESSION['user']) {
            header("Location: /user/login");
        }

        $user = new User();
        $user->setID($_SESSION['user']);
        $user->getUserById();

        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $image = $_FILES["image"]["name"];

            if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/" . $_FILES["image"]["name"]);
            }

            $user->setName($name);
            $user->setPassword($password);
            $user->setImage($image);

            $user->Edit();
        }


        require_once(ROOT . '/views/user/edit.php');

        return true;
    }

}
