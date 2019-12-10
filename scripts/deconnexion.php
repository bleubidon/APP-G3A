<?php
include "../views/header.php";
session_start();
session_destroy();
redirection("/");
