<?php

interface Router_interface
{
    public function run();
}

interface Model
{
    public function Create();    
    public function Read();
}

interface Controller
{
    public function actionIndex();

}