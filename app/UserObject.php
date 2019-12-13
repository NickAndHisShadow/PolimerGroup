<?php
namespace app;
use mysql;
class UserObject{
    private $table = '`users`';
    //Запрос к БД.
    function query($sql)
    {
        return Connection::getInstance()->query($sql);
    }


    public function getElementsTable($row_table,$id)
    {
        $getGroup =  $this->query("SELECT `$row_table` FROM `users` WHERE id='$id'");
        $row_ass = $getGroup->fetch_assoc();
        return $row_ass[$row_table];
    }
}

