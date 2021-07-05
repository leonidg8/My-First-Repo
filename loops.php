<?php


for ($x=0; $x < 101; $x ++) {
  echo $x;
  if ($x % 3 === 0 && $x % 5 === 0) {
    echo "FooBar";
  }
  if ($x % 3 === 0) {
  echo "Foo";
  }
  if ($x % 5 === 0) {
  echo "Bar";
  }

}
