<?php

class User {
    public function isAdmin()
    {
        return false;
    }

    public function getName()
    {
        return "User";
    }

    public function login()
    {
        return "{$this->getName()} выполнил вход";
    }
}

class Admin {

}