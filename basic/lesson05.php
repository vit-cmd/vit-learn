<?php
  /** declare - ticks */
  // $count = 0;
  // function example() {
  //   global $count;
  //   $count++;
  //   echo "$count instructions executed<br>";
  // }

  // register_tick_function('example');

  // declare(ticks=1) {
  //   $cars = ["Ford", "Volvo", "BMW"];
    
  //   foreach ($cars as $key => $car) {
  //     echo $car."<br>";
  //   }
  // }

  // echo '<hr>';


  // declare - strict

  declare(strict_types=1); // declare phai khai bao 1 lan

  function sum(int $x, int $y) {
    return $x + $y;
  }

  // echo sum(5, 10);
  echo '<br>';
  echo sum('5', 10); // error