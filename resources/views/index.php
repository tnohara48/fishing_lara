<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/util/SessionUtil.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/util/CommonUtil.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/model/ProductsModel.php');
    require_once($_SERVER['DOCUMENT_ROOT'] . '/fishing_lara/resources/views/classes/model/ConditionsModel.php');

    print $_SERVER['DOCUMENT_ROOT'];

    header('Location: ./home/');
    phpinfo();
?>