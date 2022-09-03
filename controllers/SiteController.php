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

    // Create a post
    public function actionCreate() {
        $title = '';
        $content = '';

        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];

            $post = new Post();
            $post->setTitle($title);
            $post->setContent($content);
            $post->Create();
        }

        require_once(ROOT . '/views/create.php');
        
        return true;
    }

    // Update a post
    public function actionUpdate($id) {
        $post = new Post;
        $post->setID($id);
        $post->Read();

        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            
            $post = new Post;
            $post->setID($id);
            $post->setTitle($title);
            $post->setContent($content);
            $post->Update();
        }
        
        require_once(ROOT . '/views/update.php');
        
        return true;
    }

    // Delete a post
    public function actionDelete($id) {
        $post = new Post;
        $post->setID($id);
        $post->Delete();

        header("Location: /");
        return true;
    }

}
