<?php

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function debug($s) {
  echo ('<font color="red">DEBUG: ' . isset($s) ? $s : '' . '</font>');
}

?>
