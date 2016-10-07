<?php
include 'kccSingin.php';

 $host = 'localhost';
 $user = 'root';
 $pw = 'root';
 $dbName = 'myService';
 $mysqli = new mysqli($host, $user, $pw, $dbName);
 
 $Kname=$_POST['KoreanName'];
 $Ename=$_POST['EnglishName'];
 $birthday1=$_POST['BirthDay1'];
 $birthday2=$_POST['BirthDay2'];
 $birthday3=$_POST['BirthDay3'];
 $id=$_POST['ID'];
 $password=md5($_POST['Passward']);
 $password2=$_POST['pwd2'];
 $phoneNumber1=$_POST['PhoneNumber1'];
 $phoneNumber2=$_POST['PhoneNumber2'];
 $phoneNumber3=$_POST['PhoneNumber3'];
 $name=$_POST['name'];
 $address=$_POST['addr'];
 $sex=$_POST['sex'];
 $birthDay=$_POST['birthDay'];
 $email=$_POST['email'];
 
 $sql = "insert into account_info (id, pwd, name, addr, sex, birthDay, email)";
 $sql = $sql. "values('$id','$password','$name','$address','$sex','$birthDay','$email')";
 if($mysqli->query($sql)){
  echo 'success inserting';
 }else{
  echo 'fail to insert sql';
 }
?>