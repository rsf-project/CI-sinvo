<?php

function getIncome($income)
{
    $ci = &get_instance();
    $sql = $ci->db->query("SELECT order_great_total FROM tbl_order")->num_rows();
    return $sql;
}
