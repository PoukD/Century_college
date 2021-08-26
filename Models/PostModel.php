<?php

class PostModel extends BaseModel {
    
    const TABLE_NAME = 'posts';

    public function getAll() {
        return $this->all(self::TABLE_NAME);
    }

    public function where($column, $operator, $value, $limit=10000) {
        return $this->whereCondition(self::TABLE_NAME, $column, $operator, $value, $limit);
    }

    public function findById($id) {
        return $this->find(self::TABLE_NAME, $id);
    }

    public function store($data) {
        return $this->create(self::TABLE_NAME, $data);
    }

    public function updateData($id, $data) {
        return $this->update(self::TABLE_NAME, $id, $data);
    }

    public function destroy($id) {
        return $this->delete(self::TABLE_NAME, $id);
    }

}