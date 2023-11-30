<?php

function addUser($email, $username, $password, $full_name, $phone, $shipping_address, $shipping_city, $billing_address, $billing_city)
{
    $conn = connect();
    $sql = "INSERT INTO `users` (`email`, `username`, `password`, `full_name`, `phone`, `shipping_address`, `shipping_city`, `billing_address`, `billing_city`, `is_admin`) 
        VALUES ('" . $email . "', '" . $username . "', '" . $password . "', '" . $full_name . "', '" . $phone . "', '" . $shipping_address . "', '" . $shipping_city . "', '" . $billing_address . "', '" . $billing_city . "', '0')";
    $conn->exec($sql);
    return $conn->lastInsertId();
}

function updateUser($email, $username, $password,  $fullname, $phone, $billing_address, $billing_city, $id)
{
    $conn = connect();

    $sql = "UPDATE users SET email='" . $email . "', username='" . $username . "', password='" . $password . "', full_name='" . $fullname . "', phone='" . $phone . "', billing_address='" . $billing_address . "', billing_city='" . $billing_city . "' WHERE id = " . $id;

    $conn->exec($sql);
    return $conn->lastInsertId();
}
function login($username, $password)
{
    $conn = connect();
    $sql = "SELECT * FROM `users` WHERE username = '" . $username . "' AND password = '" . $password . "'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch(); // Lấy 1 dòng
    return $result;
}

function getUser($id)
{
    $conn = connect();
    $sql = "SELECT * FROM `users` WHERE id = " . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch(); // Lấy 1 dòng
    return $result;
}

function getAllUser()
{
    $conn = connect();
    $sql = "SELECT * FROM `users`";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll(); // lấy nhiều dòng
    return $kq;
}

function getOneUser($id)
{
    $conn = connect();
    $sql = "SELECT * FROM `users` WHERE id = " . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch(); // Lấy 1 dòng
    return $result;
}

function delUser($id)
{
    $conn = connect();
    $sql = " DELETE FROM users Where id =" . $id;
    $conn->exec($sql);
}

function checkemail($email)
{
    $sql = "Select * from users WHERE email='" . $email . "'";
    $sp = pd_query_one($sql);
    return $sp;
}
