<!DOCTYPE html>
<!-- 
   File Name: Assignment 5
   Date: 2/28/2021
-->
<html>
  <head>
   <title>A5</title>
    <link href="AF_STYLES.css" type="text/css" rel="stylesheet">      
  </head>
  <body>
    <header>
        <h1> Alexies Farinas</h1>
        <h2>Welcome to my web page</h2>
      </header>
      <section>
          <h3> Assigment 5 </h3>
      <form action="AF_PHP_A5.php" method="post">
      <label for="nameinput">
        Please enter your name:
          <input type="text" name="name" id="name input" required>
      </label>
          <br>
          <br>
        <label for ="number">Enter a number: 
        <input type="number" name="number">
        </label>
      <br>
    <br>
    <label for ="number">Find the difference between these two numbers:
        <input type="number" name="num1"> and <input type="number" name="num2">
          </label>
          <br>
          <br>
     <input type="submit" value="Submit" />
    </form>
