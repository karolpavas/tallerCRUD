<?php

class Authentication {

    static function getSession() {
        if(isset( $_SESSION["user"])) {
            return  $_SESSION["user"];
        }

        return null;
    }

    private static function newSession($user) {
        $_SESSION["user"] = $user;
    }

    static function removeSession() {
        if(isset($_SESSION["user"])){

            unset($_SESSION["user"]);
            header("Refresh:0");
        }
    }

    static function login($email, $password){
        $pdo = Database::getPDO();
        
        $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute([
            "email" => $email
        ]);

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if(!$user){
            return false;
        }

        if (!password_verify($password, $user["password"])) {
            return false;
        } 

        self::newSession($user);

        return true;
    }

    static function register($form) {
        $pdo = Database::getPDO();
        
        $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $query->execute([
            "email" => $form["email"]
        ]);

        $user = $query->fetch(PDO::FETCH_ASSOC);

        if($user){
            return false;
        }

        $query = $pdo->prepare("INSERT INTO users (name, email, password) VALUES(:name, :email, :password)");
        
        return $query->execute([
            "name" => $form["name"],
            "email" => $form["email"],
            "password" => password_hash($form["password"], PASSWORD_DEFAULT)
        ]);

        
    }
}


?>