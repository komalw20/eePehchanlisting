<?php

  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Credentials: true");
  header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
  header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With");
  header("Content-Type: application/json; charset=utf-8");

  include "library/config.php";
  
  $postjson = json_decode(file_get_contents('php://input'), true);
  $today    = date('Y-m-d');

if($postjson['custom_type']=='getdata'){
    $data = array();
    $query = mysqli_query($mysqli, "SELECT id,ip,card_id, user_email,d_comp_name, d_about_us,password ,d_logo, d_title , d_f_name, d_l_name,category_business,d_address,d_css,f_user_email,d_position,d_contact,d_contact2,d_whatsapp,d_email,d_website,d_location,d_fb,d_twitter,d_instagram,d_linkedin,d_youtube,d_pinterest,d_website2,d_comp_est_date,d_nature_of_business,d_speciality,d_paytm,d_google_pay,d_phone_pay,d_account_no,d_ifsc,d_ac_name,d_bank_name,d_ac_type,d_qr_paytm,d_qr_google_pay,d_qr_phone_pay,d_youtube1,d_youtube2,d_youtube3,d_pro_name1,d_pro_name2,d_pro_name3,d_pro_name4,d_pro_name5,d_pro_name6,d_pro_name7,d_pro_name8,d_pro_name9,d_pro_name10,d_payment_status,
      d_card_status,d_payment_amount,d_order_id,d_logo_location,uploaded_date,d_payment_date  FROM digi_card ");

    while($row = mysqli_fetch_array($query)){

      $data[] = array(
        'id' => $row['id'],
        'ip' => $row['ip'],
        'card_id' => $row['card_id'],
        'd_css' => $row['d_css'],
        'email' => $row['user_email'],
        'd_comp_name' => $row['d_comp_name'],
        'd_about_us' => $row['d_about_us'],
        'password' => $row['password'], 
        'd_l_name' => $row['d_l_name'],
        'category_business' => $row['category_business'],
        'd_title' => $row['d_title'],
        'd_address' => $row['d_address'],
       'd_website' =>$row['d_website'],
      //  'd_logo' =>$row['d_logo'],
        'd_f_name' => $row['d_f_name']
       

      );
    }

    if($query) $result = json_encode(array('success'=>true, 'result'=>$data));
    else $result = json_encode(array('success'=>false));

    echo $result;
  }
  
?>