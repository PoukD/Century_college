<?php

class UserModel extends BaseModel {
    
    const TABLE_NAME = 'users';

    //Lấy toàn bộ dữ liệu
    public function getAll() {
        return $this->all(self::TABLE_NAME);
    }

    //Câu lệnh điều kiện
    public function where($column, $operator, $value, $limit=10000) {
        return $this->whereCondition(self::TABLE_NAME, $column, $operator, $value, $limit);
    }

    //Tìm theo id
    public function findById($id) {
        return $this->find(self::TABLE_NAME, $id);
    }

    //Thêm mới dữ liệu
    public function store($data) {
        return $this->create(self::TABLE_NAME, $data);
    }

    //Cập nhật dữ liệu theo id
    public function updateData($id, $data) {
        return $this->update(self::TABLE_NAME, $id, $data);
    }

    //Xoá dữ liệu theo id
    public function destroy($id) {
        return $this->delete(self::TABLE_NAME, $id);
    }

}