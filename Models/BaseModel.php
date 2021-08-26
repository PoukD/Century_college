<?php

class BaseModel extends Database {

    protected $conn;

    public function __construct() {
        $this->conn = $this->connect();
    }

    public function _query($sql) {
        return mysqli_query($this->conn, $sql);
    }

    //Lấy ra tất cả
    public function all($table) {
        $sql = "SELECT * FROM ${table}";
        $query = $this->_query($sql);
        
        $data = [];

        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }

        return $data;
    }

    public function whereCondition($table, $column, $operator='=', $value, $limit = 15) {
        $sql = "SELECT * FROM ${table} WHERE ${column} ${operator} '".$value."' LIMIT ${limit}";
        $query = $this->_query($sql);
        if($limit=1) {
            return mysqli_fetch_assoc($query);
        }
        
        $data = [];
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($data, $row);
        }
        return $data;
    }

    //Tìm theo id
    public function find($table, $id) {
        $sql = "SELECT * FROM ${table} WHERE id = ${id} LIMIT 1";
        $query = $this->_query($sql);
        return mysqli_fetch_assoc($query);
    }

    //Tạo mới
    public function create($table, $data=[]) {
        $columns = implode(',', array_keys($data));
        
        $newValues = array_map(function($value) {
            return "'".$value."'";
        }, array_values($data));
        $newValues = implode(',', $newValues);

        $sql = "INSERT INTO ${table}(${columns}) VALUES(${newValues})";
        $this->_query($sql);
    }

    //Cập nhật
    public function update($table, $id, $data=[]) {

        $dataSets = [];
        foreach ($data as $key => $val) {
            array_push($dataSets, "${key} = '".$val."'");
        }

        $dataSetString = implode(',', $dataSets);

        $sql = "UPDATE ${table} SET ${dataSetString} WHERE id = ${id}";
        $this->_query($sql);

        $this->_query($sql);
    }

    //Xoá theo id
    public function delete($table, $id) {
        $sql = "DELETE FROM ${table} WHERE id = ${id}";
        $this->_query($sql);
    }


}