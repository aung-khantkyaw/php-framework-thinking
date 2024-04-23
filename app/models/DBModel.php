<?php
include_once 'core/config.php';
class DBModel
{
    private $db;
    public function __construct()
    {
        $this->db = connect();
    }

    // create table
    public function createTable($table, $fields)
    {
        $sql = "CREATE TABLE $table (";
        foreach ($fields as $key => $value) {
            $sql .= $key . ' ' . $value . ', ';
        }
        $sql = rtrim($sql, ', ');
        $sql .= ')';
        return executeQuery($sql);
    }
    public function selectAll($table)
    {
        return executeQuery("SELECT * FROM $table");
    }

    public function selectWhere($table, $where)
    {
        return executeQuery("SELECT * FROM $table WHERE $where");
    }

    public function selectWhereLike($table, $column, $like)
    {
        $sql = "SELECT * FROM $table WHERE $column LIKE '%$like%'";
        return executeQuery($sql);
    }

    public function selectWhereNotLike($table, $column, $like)
    {
        $sql = "SELECT * FROM $table WHERE $column NOT LIKE '%$like%'";
        return executeQuery($sql);
    }

    public function selectWhereOrderBy($table, $where, $order)
    {
        $sql = "SELECT * FROM $table WHERE $where ORDER BY $order";
        return executeQuery($sql);
    }

    public function selectWhereLimit($table, $where, $limit)
    {
        $sql = "SELECT * FROM $table WHERE $where LIMIT $limit";
        return executeQuery($sql);
    }

    public function insert($table, $data)
    {
        $sql = "INSERT INTO $table (";
        foreach ($data as $key => $value) {
            $sql .= $key . ', ';
        }
        $sql = rtrim($sql, ', ');
        $sql .= ') VALUES (';
        foreach ($data as $key => $value) {
            $sql .= "'$value'" . ', ';
        }
        $sql = rtrim($sql, ', ');
        $sql .= ')';
        return executeQuery($sql);
    }

    public function update($table, $data, $where)
    {
        $sql = "UPDATE $table SET ";
        foreach ($data as $key => $value) {
            $sql .= $key . " = '$value'" . ', ';
        }
        $sql = rtrim($sql, ', ');
        $sql .= " WHERE $where";
        return executeQuery($sql);
    }

    public function delete($table, $where)
    {
        $sql = "DELETE FROM $table WHERE $where";
        return executeQuery($sql);
    }
}