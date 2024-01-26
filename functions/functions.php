<?php
    function generaPassword($lunghezza) {
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.<>?';
        $password = '';
        for ($i = 0; $i < $lunghezza; $i++) {
            $index = rand(0, strlen($caratteri) - 1);
            $password .= $caratteri[$index];
            var_dump($index);
        }
        return $password;
    }
?>