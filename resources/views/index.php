<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/util/SessionUtil.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/deploy/classes/util/CommonUtil.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/deploy/classes/model/ProductsModel.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/deploy/classes/model/ConditionsModel.php');

    print $_SERVER['DOCUMENT_ROOT'];

    header('Location: ./home/');
    phpinfo();
?>