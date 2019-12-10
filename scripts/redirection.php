<?php
function redirection($url)
{
    if (!headers_sent()) {
        header('location: ' . $url);  // Redirection PHP
    } else {
        echo "<script>window.location.href=\"" . $url . "\"" . "</script>";  // Redirection JS
        echo "<noscript><meta http-equiv=\"refresh\" content=\"0;url=" . $url . "\"/></noscript>";  // Redirection HTML
    }
    exit;
}
