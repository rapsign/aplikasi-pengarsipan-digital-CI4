<?php

use App\Models\AuthModel;

function allow($id_tingkatan)
{
    $session = \Config\Services::session();
    $user = $session->get('email');
    $tabel = 'users';
    $model = new AuthModel;
    $row = $model->get_data_login($user, $tabel);
    if ($row != NULL) {
        if ($row->id_tingkatan == $id_tingkatan) {
            return true;
        } else {
            return false;
        }
    }
}
