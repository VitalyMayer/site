<?php

interface Router_interface
{
    public function run();
}

interface Model
{
    public static function getPostItemById($id);
    public static function getPostsList();
}

interface Controller
{
    public function actionIndex();

}