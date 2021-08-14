<?php
include("SxGeo.php");
$SxGeo = new SxGeo('SxGeoCity.dat');
$city = $SxGeo->get($_SERVER['REMOTE_ADDR']);
?>
<pre>

    <?
    print_r($city)
    ?>
</pre>
<pre>

    <?
    print_r($_SERVER)
    ?>
</pre>
