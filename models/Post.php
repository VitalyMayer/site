<?php

class Post implements Model {

    private $id;
    private $title;
    private $content;

    public function setID($aID) {
        $this->id = $aID;
    }

    public function getID() {
        return $this->id;
    }

    public function setTitle($aTitle) {
        $this->title = $aTitle;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setContent($aContent) {
        $this->content = $aContent;
    }

    public function getContent() {
        return $this->content;
    }

    public function Read() {
        $id = $this->getID();

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM posts WHERE id=' . $id);

            $post = $result->fetch(PDO::FETCH_OBJ);

            $this->setTitle($post->title);
            $this->setContent($post->content);
        }
    }

    public static function getArrayID() {
        $db = Db::getConnection();

        $arrayID = array();

        $result = $db->query('SELECT id FROM posts ');

        $i = 0;

        while ($row = $result->fetch()) {
            $arrayID[$i] = $row['id'];
            $i++;
        }

        return $arrayID;
    }

}