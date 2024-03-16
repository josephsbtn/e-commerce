<?php
  include "php/dbh.inc.php";
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
  <title>UNDERCOVER | LOGIN</title>
</head>

<body>
  <!-- login -->
  <section id="login" class="pt-36">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full flex flex-col justify-center text-center px-4">
          <span class="font-semibold text-dark font-montserrat text-2xl">LOG IN</span>
          <form action="./php/login.ins.php" method="post">
            <div class="py-4 text-start mt-5">
              <span class="mb-2 text-lg">Email</span>
              <input type="text"
                     class="w-full p-2 border border-gray-300 placeholder:font-light placeholder:text-gray-500"
                     name="email"
                     id="email">
            </div>
            <div class="py-2 text-start mt-5">
              <span class="mb-2 text-lg">Password</span>
              <input type="password" <!-- Changed type to "password" -->
                     class="w-full p-2 border border-gray-300 placeholder:font-light placeholder:text-gray-500"
                     name="password"
                     id="password"> <!-- Changed ID to "password" -->
            </div>

            <button name="login" class="w-36 bg-black text-white p-2 mb-6 hover:bg-white hover:text-black">
              LOGIN
            </button>
          </form>

          <div class="flex justify-between w-full py-4">
            <div class="mr-24">
              <a href="./signup.php"><span class="text-base font-montserrat">Create Account</span></a>
            </div>
            <div>
              <span class="text-base font-montserrat">Forgot Password</span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</body>

</html>
