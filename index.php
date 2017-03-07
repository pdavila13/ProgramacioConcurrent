<?php

function b($callback) {
  echo "b\n";

  // Permet excutar una funcio pel seu nom
  call_user_func($callback);
}

function a() {
  echo "a";
}

b('a');

?>
