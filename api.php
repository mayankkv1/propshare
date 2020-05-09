<?php

        include('dbConnect.php');
        // $this->pdo = $pdo;
        $sql = "select * FROM properties";

        $result = $pdo->query($sql);

        $data = [];

        while($row = $result->fetch()){
            $data[] = $row;            
        }

        echo json_encode($data);
