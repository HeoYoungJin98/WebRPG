<?php
$User = $_POST["User"];
$db_conn = @mysqli_connect("localhost","root","baechu143","WebRPG");
$sql = "SELECT U.STR_STATE, U.DEF_STATE, U.DEF_STATE, W.EQUIP_NAME, W.ATK, A.EQUIP_NAME, A.DEF, A.HP
        FROM USER AS U
        JOIN EQUIP_WP AS W
        ON U.EQUIPMENT_WP_NO = W.EQUIP_NO
        JOIN EQUIP_AM AS A
        ON U.EQUIPMENT_AR_NO = A.EQUIP_NO
        WHERE U.UID = $User";

$SemiResult = mysqli_query($db_conn, $sql);
$FinalResult = mysqli_fetch_array($SemiResult);

echo json_encode($FinalResult);
 ?>
