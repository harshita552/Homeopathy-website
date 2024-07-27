<?php

session_start();
session_destroy();
//  setToast('Logout');

echo "<script>window.location.href = '../index.php';</script>"
?>