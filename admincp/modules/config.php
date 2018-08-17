<?php 
 include '../config.php';
 $id=$_GET['id'];
   $tenloaisp=$_POST['tenloaisp'];
   $thutu=$_POST['thutu'];
   if (isset($_POST['them'])) {  
     $sql= "INSERT INTO loaisp (tenloaisp,thutu) values ('$tenloaisp','$thutu') ";
    if (!mysql_query($conn,$sql)) {
      die('Lỗi sql: '.mysql_error($conn));
    }
    header('location:../../index.php?quanly=quanlyloaisp&ac=them');
   }
   elseif (isset($_POST['sua'])) {
     $sql="update loaisp set tenloaisp='$tenloaisp', thutu='$thutu' where id_loaisp='$id'";
    mysql_query($conn, $sql);
  header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$id);
 }
   else{
  $sql="delete from loaisp where id_loaisp=$id";
  mysql_query($conn, $sql);
  header('location:../../index.php?quanly=quanlyloaisp&ac=them');
   }
?>