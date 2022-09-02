<?php

class Post implements Model
{
    public static function getPostsList()
    {
        include_once 'posts.php';
        
        return $posts;
    }
    
    public static function getPostItemById($id)
    {
         include_once 'posts.php';
         
         return $posts[$id];
    }
}