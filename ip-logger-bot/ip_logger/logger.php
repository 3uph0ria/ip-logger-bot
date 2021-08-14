<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/ip_logger/vk.php');
$vk = new VK();

include_once($_SERVER['DOCUMENT_ROOT'] . '/ip_logger/SxGeo.php');
$SxGeo = new SxGeo($_SERVER['DOCUMENT_ROOT'] . '/ip_logger/SxGeoCity.dat');
$city = $SxGeo->get($_SERVER['REMOTE_ADDR']);

$vk->send(PEER_ID, 'Заметил актив '.
    "IP: ".$_SERVER['REMOTE_ADDR']."\n".
    "Страна: ".$city['country']['iso']."\n".
    "Город: ".$city['city']['name_ru']."\n".
    "Доп. инфа: ".$_SERVER['HTTP_USER_AGENT']."\n".
    "Время ".date('Y-m-d H:i:s')."\n"
);
