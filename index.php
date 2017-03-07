<?php

function myecho($callback) {
  if (is_callable($callback)) {
    // Permet excutar una funcio pel seu nom
    call_user_func($callback);
  } else {
    echo $callback;
  }

}

function other() {
  echo "a\n";
}

myecho('other');

$x = 5;
myecho($x)

?>
