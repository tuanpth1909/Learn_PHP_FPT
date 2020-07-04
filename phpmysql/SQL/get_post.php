<?php
function get_post($conn, $var)
{
    return $conn->real_escape_string($_POST[$var]);
}
?>