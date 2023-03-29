<?php

  $name = $_POST['name'];
  $matric = $_POST['matric'];
  $caddress = $_POST['caddress'];
  $haddress = $_POST['haddress'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $hphone = $_POST['hphone'];
  
  $snameRGEX = '/^[^0-9]*$/';
  $smatricRGEX = '/^[0-9]{6,6}$/'; 
  $scaddressRGEX = '/^.{0,50}$/';
  $shaddressRGEX = '/^.{0,50}$/';
  $semailRGEX = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
  $shphoneRGEX = '/^\+?[0-9]{1,3}[-. (]*([0-9]{1,3})[-. )]*([0-9]{2,4})[-. ]*([0-9]{4})$/';
  $shphoneRGEX = '/^\+?[0-9]{1,3}[-. (]*([0-9]{1,3})[-. )]*([0-9]{2,4})[-. ]*([0-9]{4})$/';

  if (!preg_match($snameRGEX, $name)) {
    echo 'Name must contain only letters';
  } elseif (!preg_match($smatricRGEX, $matric)) {
    echo 'Matric must contain 6 characters';
  } elseif (!preg_match($scaddressRGEX, $caddress)) {
    echo 'Please insert only 50 characters';
  } elseif (!preg_match($shaddressRGEX, $haddress)) {
    echo 'Please insert only 50 characters';
  } elseif (!preg_match($semailRGEX, $email)) {
    echo 'Invalid email format';
  } elseif (!preg_match($shphoneRGEX, $phone)) {
    echo 'Please input valid phone number';
  } elseif (!preg_match($shphoneRGEX, $hphone)) {
    echo 'Please input valid phone number';
  } else{
    echo 'Your details is stored! Thankyou';
  }

  
?>
