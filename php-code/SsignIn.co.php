<?php
    function headtoHome(){
        header('Location: ../index.php?');
        session_unset();
        session_destroy();
    }

    headtoHome();
    