<?php

class Database {
    const DB_HOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '12345678';
    const DB_NAME = 'century';

    public function connect() {
        $connect = mysqli_connect(self::DB_HOST, self::DB_USERNAME,self::DB_PASSWORD,self::DB_NAME);

        mysqli_set_charset($connect,'utf8');

        if(mysqli_connect_errno() === 0) {
            return $connect;
        }

        return false;
    }

}