<?php

class Post implements Model {

    public static function getPostsList() {
        $db = Db::getConnection();

        $postsList = array();

        $result = $db->query('SELECT id, title, content FROM posts ');

        $i = 0;

        while ($row = $result->fetch()) {
            $postsList[$i]['id'] = $row['id'];
            $postsList[$i]['title'] = $row['title'];
            $postsList[$i]['content'] = $row['content'];
            $i++;
        }

        return $postsList;
    }

    public static function getPostItemById($id) {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();

            $result = $db->query('SELECT * FROM posts WHERE id=' . $id);

            $post = $result->fetch();

            return $post;
        }
    }

}
