<?php

function sp_all(){
    $sql = "SELECT * FROM products";
    return pd_query($sql);
}
function addProduct($category_id, $name, $description, $price , $quantity, $image){
  $conn=connect();
  $sql = "INSERT INTO products (`category_id`, `name`, `description`, `price`, `quantity`, `image`) 
  VALUES ('".$category_id."','".$name."','".$description."','".$price."','".$quantity."','".$image."')";
  // use exec() because no results are returned
  $conn->exec($sql);
}
  function get_all_sp()  {
    $conn =connect();
    $sql="SELECT * FROM products ";
    $stmt = $conn->prepare($sql); // chuẩn bị thực thi câu lệnh
    $stmt->execute(); // thực thi câu lệnh Sql
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
  }
  
  function deleteProduct($id) {
    $conn=connect();
    $sql = "DELETE FROM `products` WHERE id = " . $id;
    $conn->exec($sql);
  }

  function updateProduct($id, $category_id, $name, $description, $price , $quantity, $image) {
    $conn=connect();
      $sql = "UPDATE products SET `category_id`='".$category_id."', 
      `name` = '".$name."',
      `description` = '".$description."',
      `price` = '".$price."',
      `quantity` = '".$quantity."',
      `image` = '".$image."'
       WHERE id=".$id;
      // Prepare statement
      $stmt = $conn->prepare($sql);
      // execute the query
      $stmt->execute();
  }
  

  function getOneProduct($id) {
    $conn=connect();
    $sql = "SELECT * FROM `products` WHERE id = " . $id;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch(); // Lấy 1 dòng
    return $result;
    }
   
    function get_all_dm_sp($kyw,$iddm,$limi)  {
      $conn =connect();
      $sql="SELECT * FROM products WHERE 1";
      if($iddm>0){
        $sql .=" AND category_id=".$iddm;
      }
      if($kyw!=""){
        $sql .=" AND name like '%".$kyw."%'";
      }
      $sql .=" ORDER BY id DESC limit ".$limi;
      $stmt = $conn->prepare($sql); // chuẩn bị thực thi câu lệnh
      $stmt->execute(); // thực thi câu lệnh Sql
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $kq = $stmt->fetchAll();
      return $kq;
    }
  function deleteCart($id) {
    //xoá 1 sản phẩm trong giỏ hàng
    if (isset($_SESSION['cart'][$id])) {
      unset($_SESSION['cart'][$id]);
    }
  }
?>