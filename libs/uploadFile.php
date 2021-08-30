<?php
    include "db.php";
    $addRegister = function($date, $value, $conn){
        $date = date("Y-m-d", strtotime($date."/2021"));
        $value = str_replace("+", "", $value);
        $insert = "insert into st_transactions (idUser, date, amount, register_date) value (1, '$date', '$value', now())";
        $conn->query($insert);
    };


    $fileTemp = $_FILES['file']['tmp_name'];
    if (($gestor = fopen($fileTemp, "r")) !== FALSE) {

        $row = 0;
        while (($data = fgetcsv($gestor, 1000, ",")) !== FALSE) {
            if($row>0){
                $addRegister($data[1], $data[2], $conn);
            }
            $row++;
        }

    }
?>