<?php

class SiteController implements Controller {

    public function actionIndex() {
        $posts = array();
        $posts = Post::getPostsList();

        require_once(ROOT . '/views/index.php');

        return true;
    }

    public function actionPost($id) {
        $post = Post::getPostItemById($id);

        require_once(ROOT . '/views/post.php');

        return true;
    }

}
