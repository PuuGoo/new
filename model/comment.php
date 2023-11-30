<?php
function getAllcmt() {
    $sql = "SELECT * FROM comments ORDER BY id DESC";
    $conn = connect();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function addCmt($iduser, $idsp, $noidung) {
    $sql = "INSERT INTO `comments` (`user_id`,  `product_id`, `comment`) VALUES ('$iduser', '$idsp', '$noidung')";
    $conn = connect();
    $conn->exec($sql);
    return $conn->lastInsertId();
}
?>
