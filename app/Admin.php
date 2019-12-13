<?php
namespace app;
use mysql;
class Admin extends UserObject {
    public function select_products() {
        return $this->query("SELECT * FROM `products`");
    }
}

