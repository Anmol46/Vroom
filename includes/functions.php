<?php
require_once("connection.php");
/*************CHECK QUERY FUNC************/
function checkQueryResult($result){
    global $connection;
    if(!$result){
        die("Query Failed.".mysqli_error($connection));
    }
}

/***************INSERT QUERY*************/
function insert($tableName,$columns,$values){
    global $connection;
    $query = "INSERT INTO $tableName($columns)VALUES($values)";
    $resultSet = mysqli_query($connection,$query);
    checkQueryResult($resultSet);
    return $resultSet;
    
}
/***************SELECT QUERY*************/
function select($tableName, $columns){
    global $connection;
    $query = "SELECT $columns FROM $tableName";
    
    $resultset = mysqli_query($connection, $query);
    checkQueryResult($resultset);
    return $resultset;
}

function selectFromID($tableName, $columns, $id_column, $id){
    global $connection;
    $query = "SELECT $columns FROM $tableName WHERE $id_column=$id";
    
    $resultset = mysqli_query($connection, $query);
    checkQueryResult($resultset);
    return $resultset;
}


function deleteRecord($tableName, $primaryKeyColumnName, $product_id, $employee_id){
    global $connection;
    $query = "UPDATE $tableName SET deleted = 1, deleted_by = $employee_id, deleted_at = now() WHERE $primaryKeyColumnName = $product_id";
    $resultset = mysqli_query($connection, $query);
    checkQueryResult($resultset);
}
function selectAll($tableName){
    global $connection;
    $query = "SELECT * FROM $tableName";
    $resultset = mysqli_query($connection, $query);
    checkQueryResult($resultset);
    return $resultset;
}

?>