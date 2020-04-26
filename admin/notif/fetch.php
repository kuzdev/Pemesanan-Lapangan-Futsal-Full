<?php
include('conn.php');
if(isset($_POST['view'])){
$con = mysqli_connect("localhost", "root", "", "db_paragon");
// if($_POST["view"] != '')
// {
//    $update_query = "UPDATE comments SET comment_status = 1 WHERE comment_status=0";
//    mysql_query( $update_query);
// }
$query = "SELECT * FROM tboking ";
$result = mysql_query($query);
$output = '&nbsp; <b>Notifikasi Masuk :</b><hr/>';
if(mysql_num_rows($result) > 0)
{
while($row = mysql_fetch_array($result))
{
  $output .= '
  
  <li>
  <a href="#">Pesanan baru dgn Kode : 
  <strong>'.$row["noInvoice"].'</strong>,&nbsp;atas nama : 
  <i>'.$row["an"].'</i>
  </a>
  </li>
  
 
  ';
}
}
else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Notif Found</a></li>';
}

$data = array(
   'notification' => $output,
   'unseen_notification'  => "1"
);
echo json_encode($data);
}
?>