<?php
  include "php/dbh.inc.php";

  if (isset($_POST["signup"])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $No_HP = $_POST['phoneNum'];
    $Tanggal_Lahir = $_POST['birthDate'];

    $sql = "INSERT INTO users (fullName,email,password,No_HP,Tanggal_Lahir)
    VALUES ('$fullname','$email', '$password', '$No_HP', $Tanggal_Lahir)";

    if($db->query($sql)){
        echo "Account has created";
    }else {
        echo "dekimasen";
    }
  }
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="output.css" rel="stylesheet">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
    rel="stylesheet">
  <title>UNDERCOVER | SIGN UP</title>
</head>
<body>
<section id="signup" class="pt-36">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full flex flex-col justify-center text-center px-4">
          <span class="text-base font-semibold text-dark font-montserrat text-2xl">SIGN UP</span>
        <form action="signup.php" method="post">
            <div class="py-4 text-start mt-5">
                <span class="mb-2 text-lg">Email</span>
                <input type="text"
                   class="w-full p-2 border border-gray-300 placeholder:font-light placeholder:text-gray-500"
                   name="email"
                   id="email">
            <div class="py-4 text-start mt-5">
                <span class="mb-2 text-lg">Full Name</span>
                <input type="text"
                   class="w-full p-2 border border-gray-300 placeholder:font-light placeholder:text-gray-500"
                   name="fullname"
                   id="fullname">
            <div class="py-4 text-start mt-5">
                <span class="mb-2 text-lg">Birth Date</span>
                <input type="date"
                   class="w-full p-2 border border-gray-300 placeholder:font-light placeholder:text-gray-500"
                   name="birthDate"
                   id="birthDate">
            <div class="py-4 text-start mt-5">
                <span class="mb-2 text-lg">Phone Number</span>
                <input type="text"
                   class="w-full p-2 border border-gray-300 placeholder:font-light placeholder:text-gray-500"
                   name="phoneNum"
                   id="phoneNum">
            <div class="py-2 text-start mt-5">
            <span class="mb-2 text-lg">Password</span>
            <input type="text"
                   class="w-full p-2 border border-gray-300 placeholder:font-light placeholder:text-gray-500"
                   name="password"
                   id="password">
            <div class="py-4 text-start mt-5">
                <span class="mb-2 text-lg">Confrim Password</span>
                <input type="text"
                   class="w-full p-2 border border-gray-300 placeholder:font-light placeholder:text-gray-500"
                   name="ConfrimPass"
                   id="ConfrimPass">
            
            </div>

          <button name="signup" class="w-36 bg-black text-white p-2 mb-6 hover:bg-white hover:text-black">
          SIGN UP
          </button>
        </form>
</body>
</html>