<?php
$connection = mysqli_connect('localhost', 'root', 'root');
if($connection) {
    $result = mysqli_query($connection, 'SHOW DATABASES');
    $databases = mysqli_fetch_all($result, MYSQLI_ASSOC);

    var_dump($databases);

    mysqli_close($connection);
}
