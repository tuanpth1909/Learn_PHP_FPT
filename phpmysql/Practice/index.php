<?php
if (isset($_COOKIE['username'])) $fullname=$_COOKIE['fullname'];
echo "Welcome". $fullname;