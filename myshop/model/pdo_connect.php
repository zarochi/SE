<?php

$user = 'brehmpj09';

$pass = 'pb0029';

$db_info = 'mysql:host=washington.uww.edu;dbname=cs482-2151_brehmpj09';


try {
    $db = new PDO($db_info, $user, $pass);

} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();

}
?>

