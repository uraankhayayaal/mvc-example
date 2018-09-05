<?php

namespace components;

/**
 * 
 */
class Model
{
	public $tableName = 'user';
	public $connection = 'mysql';

	public static function find()
    {
        return new Model();
    }

	public function all()
    {
    	$model = new EModel($this->tableName, $this->connection);
        return $model->queryAll();
    }

    public function one($id)
    {
    	$model = new EModel($this->tableName, $this->connection);
        return $model->queryOne($id);
    }
}