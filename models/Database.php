<?php
// app/models/Database.php

class Database {
    private static instance = null;
    private pdo;

    private function __construct() {
        config = include(_DIR_ . '/../config/database.php');dsn = 'mysql:host=' . config['host'] . ';dbname=' .config['db'];
        this->pdo = new PDO(dsn, config['user'],config['password']);
        this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    public static function getInstance() 
        if (self::instance === null) {
            self::instance = new Database();
         return self::instance->pdo;
    }
}