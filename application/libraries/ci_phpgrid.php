<?php
require_once('phpGrid/conf.php');

class CI_phpgrid {

    public function example_method($val = '')
    {
        $dg = new C_DataGrid("SELECT * FROM Orders", $val, "Orders");
        return $dg;
    }
}