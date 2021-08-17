<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- controller에서 head.php를 부르기 때문에 $this는 controller임. -->
    <title><?php echo $this->title?></title>
    <nav>
        <ul>
            <li><a href="<?php echo _URL?>">Home</a></li>
            <li><a href="<?php echo _URL?>board">게시판</a></li>
            <li><a href="<?php echo _URL?>login">로그인</a></li>
        </ul>
    </nav>
</head>

