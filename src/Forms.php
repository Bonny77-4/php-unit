<?php

namespace App;

final class Forms
{
    public function verifier($nom, $prenom, $email)
    {
        if (empty($nom) || !preg_match('/^[a-zA-Z- ]+$/', $nom)) {
            return false;
        }

        if (empty($prenom) || !preg_match('/^[a-zA-Z- ]+$/', $prenom)) {
            return false;
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }
}
