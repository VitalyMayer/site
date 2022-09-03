<?php

interface Router_interface
{
    public function run();
}

interface Model
{
    public function Read();
}

interface Controller
{
    public function actionIndex();

}