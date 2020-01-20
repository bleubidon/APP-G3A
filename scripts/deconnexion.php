<?php
session_start();
include "../views/header.php";
session_destroy();
redirection("/");
