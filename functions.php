<?php

function myTest($incoming_string) {

  echo $incoming_string;
}



myTest("PHP Day");

$my_param = True; 

function checkParam($my_param) {
  if ($my_param === True){
    echo "Foo";
  } else {
    echo "Bar";
  }

}

checkParam($my_param);
