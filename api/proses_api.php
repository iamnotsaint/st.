<?php

    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Credentials: true");
    header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTION");
    header("Access-Control-Allow-Headers: Origin, Content-Type, Authoriztion, Accept, X-Requested-With, x-xsrf-token");
    header("Content-Type: application/jason; charset=utf-8");
    
    include "config.php";

    $position = json_decode(file_get_contents('php://input'), true);

    $today = date("Y-m-d H:i:s");

    if ($position['aksi']=="proses_register") {
        $insert = mysqli_query($mysqli, "INSERT INTO wheretogo SET
            Aid          = '$postjson[aid]',
            Aname        = '$postjson[aname]',
            GoogleClass  = '$postjson[googleclass]',
            Ohours       = '$postjson[ohours]',
            Cdate        = '$postjson[cdate]',
            Phone        = '$postjson[phone]',
            Address      = '$postjson[address]',
            Rate         = '$postjson[rate]',
            Adescription = '$postjson[adescription]',
            Ttospend     = '$postjson[ttospend]',
        ");

        if ($insert) {
            $result = json_encode(array('success'=>true, 'msg'=>'Add successfuly'));
        }else {
            $result = json_encode(array('success'=>false, 'msg'=>'Add error'));
        }

        echo $result;
    }

?>