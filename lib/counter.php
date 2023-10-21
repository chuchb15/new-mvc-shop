<?php
require_once('lib/statistics.php');
$session = session_id();
$time = time();

function get_client_ip_env()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

$ip = get_client_ip_env();
$browser = $_SERVER['HTTP_USER_AGENT'];

global $linkconnectDB;
$date =  gmdate('Y-m-d H:i:s', time() + 7 * 3600);
$sql = "SELECT * FROM users_online WHERE session='$session'";
$result = mysqli_query($linkconnectDB, $sql);
$count = mysqli_num_rows($result);
if ($count == "0") { //Truy cập lần đầu
    // //sql2
    insert_user_online($session, $time, $ip, $browser, $date);
} else { //Truy cập lần 2
    update_user_online($session, $time, $ip, $browser, $date);
}

