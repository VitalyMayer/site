<?php

class SiteController implements Controller {

    // Displaying a list of posts
    public function actionIndex() {
        $posts = array();
        $id = array();
        $arrayID = Post::getArrayID();

        foreach ($arrayID as $id) {
            $posts[$id] = new Post;
            $posts[$id]->setID($id);
            $posts[$id]->Read();
        }
        require_once(ROOT . '/views/index.php');

        return true;
    }

    // Displaying a single post
    public function actionPost($id) {
        $post = new Post;
        $post->setID($id);
        $post->Read();

        require_once(ROOT . '/views/post.php');

        return true;
    }

}
