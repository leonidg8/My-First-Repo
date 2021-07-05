<?php


for ($x=0; $x < 101; $x ++) {
  if ($x % 3 === 0 && $x % 5 === 0) {
    echo $x;
    echo "FooBar";
    echo "<br>"
  }
  if ($x % 3 === 0) {
    echo $x;
  echo "Foo";
  echo "<br>"
  }
  if ($x % 5 === 0) {
    echo $x;
  echo "Bar";
  echo "<br>"
  }

}
