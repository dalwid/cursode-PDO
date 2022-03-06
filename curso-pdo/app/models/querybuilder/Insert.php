<?php

namespace app\models\querybuilder;

class Insert{

    public static function sql($table, $attributes){
        $sql = "INSERT INTO {$table}(";

        $sql.= implode(',', array_keys($attributes)).') values (';
        $sql.= ':' . implode(', :', array_keys($attributes)) . ')';

        return $sql;
    }

}