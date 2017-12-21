<?php
require_once("service\parser.php");

if ($_POST) {
    $invertedParserObj = new parser($_POST);
    echo "<pre>"; print_r($invertedParserObj->getResult()); echo "</pre>";
}