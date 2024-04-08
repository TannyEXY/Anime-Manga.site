<?php
    // setting an error report
    function setError(string $errorMessage){
        $_SESSION["error-report"] == true;
        $_SESSION["error-message"] == $errorMessage;
    }


    // data validation
    function validate(string $data){
        $data =trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }