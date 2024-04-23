<?php

include_once 'core/bootstrap.php';

// create table
$db = new DBModel();
$fields = [
    'id' => 'INT(11) AUTO_INCREMENT PRIMARY KEY',
    'name' => 'VARCHAR(255)',
    'email' => 'VARCHAR(255)',
    'password' => 'VARCHAR(255)',
    'created_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
    'updated_at' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'
];
$db->createTable('users', $fields);
