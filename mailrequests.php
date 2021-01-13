<?php
session_start();
require_once("./db.php");
$mailsent[]=array();
$_SESSION["reqquantity"]= $_REQUEST["quantity"];
$_SESSION["reqcolor"]= $_REQUEST["color"];
$_SESSION["reqsize"]= $_REQUEST["size"];
$_SESSION["reqdescription"]= $_REQUEST["description"];
$query="INSERT INTO club_requests(sports, category_id, product_id, quantity, color, size, description,club_id) VALUES (\"{$_SESSION["sport"]}\",\"{$_SESSION["cid"]}\",\"{$_SESSION["pid"]}\",\"{$_REQUEST["quantity"]}\",\"{$_REQUEST["color"]}\",\"{$_REQUEST["size"]}\",\"{$_REQUEST["description"]}\",\"{$_SESSION["userdata"]["club_id"]}\");";
db::getInstance()->dbquery($query);
// if (array_key_exists("clubloggedin", $_SESSION)) {

//     $mailquery = "Select * from business_products where product_id = \"{$_SESSION["pid"]}\";";
//     $businessdata = db::getInstance()->get_result($mailquery);
//     if ($businessdata) {
     
//         while($row = mysqli_fetch_assoc($businessdata)){
//             $mailquery = "Select email from business_info where business_id = \"{$row["business_id"]}\";";
//             $maildata = db::getInstance()->get_result($mailquery);
//             $emailrow = mysqli_fetch_assoc($maildata);
//             $to_email = $emailrow["email"];
//             echo($to_email);

//             $clubname = $_SESSION["userdata"]["club_name"];
//             $subject = "Request from $clubname";
//             $body = "Hi, $clubname has made following request: 
//             Sports: {$_SESSION["sport"]}
//             Category: {$_SESSION["cname"]}
//             Product: {$_SESSION["pname"]}
//             Quantity: {$_SESSION["reqquantity"]}
//             Size: {$_SESSION["reqsize"]}
//             Additional Information: {$_SESSION["reqdescription"]}";
//             $headers = "From: SportsReg";
//             $mailsent[] = [];
//             if (mail($to_email, $subject, $body, $headers)) {
//                 $mailsent[]=array(
//                     '$to_email' => "1"
//                 );
//             }
//             else 
//             {
//                 $mailsent[]=array(
//                     '$to_email' => "0"
//                 );
//             }
//         }
//     }
// }

header("Location: ./userhome.php");

?>
