<?php

class User {

    private $id;
    private $name;
    private $email;
    private $password;

    public function setID($aID) {
        $this->id = $aID;
    }

    public function getID() {
        return $this->id;
    }

    public function setName($aName) {
        $this->name = $aName;
    }

    public function getName() {
        return $this->name;
    }

    public function setEmail($aEmail) {
        $this->email = $aEmail;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPassword($aPassword) {
        $this->password = $aPassword;
    }

    public function getPassword() {
        return $this->password;
    }

    public function Register() {
        $name = $this->getName();
        $email = $this->getEmail();
        $password = $this->getPassword();

        $db = Db::getConnection();

        $sql = 'INSERT INTO user (name, email, password) '
                . 'VALUES (:name, :email, :password)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }

    public function checkUserData() {
        $email = $this->getEmail();
        $password = $this->getPassword();

        $db = Db::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if ($user) {
            $this->setID($user['id']);
            $this->setName($user['name']);
        }

        return false;
    }

    public function auth() {
        $_SESSION['user'] = $this->getID();
        $_SESSION['name'] = $this->getName();
    }

    public static function isGuest() {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public function checkEmailExists() {
        $email = $this->getEmail();

        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn())
            return true;
        return false;
    }

    public function getUserById() {
        $id = $this->getID();

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM user WHERE id=' . $id);

            $user = $result->fetch(PDO::FETCH_OBJ);

            $this->setName($user->name);
            $this->setEmail($user->email);
            $this->setPassword($user->password);
        }
    }

}
