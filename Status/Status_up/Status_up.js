$(document).ready(function(){
  let UID = 1;//Simple Data For Test. Have to Fix

  $.post(//Bring Data From DataBase
    "Status_up_Bring_Data.php",
    {
      User: UID,
    },
    function(data){
      let Saved_Data = JSON.parse(data);
      $("#Status_STR").val(Saved_Data[0]);
      $("#Status_DEF").val(Saved_Data[1]);
      $("#Status_HP").val(Saved_Data[2]);
      $("#Equip_WP").text(Saved_Data[3]);
      $("#WP_ATK").text(Saved_Data[4]);
      $("#Equip_Am").text(Saved_Data[5]);
      $("#Am_DEF").text(Saved_Data[6]);
      $("#Am_HP").text(Saved_Data[7]);
    }
  )
})
