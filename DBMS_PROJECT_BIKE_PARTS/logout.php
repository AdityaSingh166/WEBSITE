<?php
session_start();
if(session_destroy()){
    header("location:index_login.html");
}
?>