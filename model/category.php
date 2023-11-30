<?php
function get_all_dm()
{
    $conn = connect();
    $sql = "SELECT * FROM categories ORDER BY position DESC ";
    $stmt = $conn->prepare($sql); // chuẩn bị thực thi câu lệnh
    $stmt->execute(); // thực thi câu lệnh Sql
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}
function getAllcategories()
{
    $conn = connect();
    $sql = "SELECT * FROM `categories`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); // Lấy nhiều dòng 
    return $kq;
}
function addCategories($name, $description, $position)
{
    $conn = connect();
    $sql = "INSERT INTO `categories` (`name`,`description`,`position`)
        VALUES ('" . $name . "','" . $description . "','" . $position . "')";
    $conn->exec($sql);
    return $conn->lastInsertId();
}
function delCat($id){
    $conn =connect();
    $sql = "DELETE FROM categories WHERE id =".$id;
    $conn->exec($sql);
  }
function getOneCategory($id)
{
    $conn = connect();
    $sql = "SELECT * FROM `categories` WHERE id ='" . $id . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetch(); // lấy nhiều dòng
    return $kq;
}
function updateCategory($id, $name, $description, $position)
{
    $conn = connect();
    $sql = "UPDATE `categories` SET `name` = '" . $name . "', `description` = '" . $description . "', `position` = '" . $position . "' WHERE `id` = " . $id;
    $conn->exec($sql);
}
