
<?php if (!defined('BASEPATH')) exit('No direct script access allowed');



if (!function_exists('nominal')) {
    function nominal($angka)
    {
        $jd = number_format($angka, 0, ',', '.');
        return $jd;
    }
}


function is_logged_in($role)
{
    $ci = get_instance();
    if (($ci->session->userdata('id_user') == "") || $ci->session->userdata('role') != $role) {
        redirect('home');
    }
}

function cek_notif_read($table, $field)
{
    $ci = get_instance();
    $id_user = $ci->session->userdata('id_user');

    $query = $ci->db->select('*')
        ->from($table)
        ->where($field, $id_user)
        ->where('is_read', '0')
        ->get();
    return $query->result();

    echo count($query);

    // $ci->Crud_model->cek($table, 'id_user', $id_user);
}

function is_read($table, $field, $where)
{
    $ci = get_instance();
    $ci->db->query("UPDATE $table SET is_read = '1' WHERE $table.$field = '$where'");
}

function post($param)
{
    $ci = get_instance();
    $ci->input->post($param);
}
