<?php
function nom_jour($date) {
    $jour_semaine = array(1=>"Lundi", 2=>"Mardi", 3=>"Mercredi", 4=>"Jeudi", 5=>"Vendredi", 6=>"Samedi", 7=>"Dimanche");

    list($annee, $mois, $jour) = explode ("-", $date);

    $timestamp = mktime(0,0,0, date($mois), date($jour), date($annee));
    $njour = date("N",$timestamp);

    return $jour_semaine[$njour];
}
function annee($date) {
    list($annee, $mois, $jour) = explode ("-", $date);
    return $annee;
}
function nom_mois($date) {
    $nom_mois = array(1=>"janvier", 2=>"fevrier", 3=>"mars", 4=>"avril", 5=>"mai", 6=>"juin", 7=>"juillet", 8=>"aout", 9=>"septembre", 10=>"octobre", 11=>"novembre", 12=>"decembre");

    list($annee, $mois, $jour) = explode ("-", $date);

    $timestamp = mktime(0,0,0, date($mois), date($jour), date($annee));
    $nmois = date("n",$timestamp);

    return $nom_mois[$nmois];
}
function numeros_jour($date) {
    list($annee, $mois, $jour) = explode ("-", $date);
    return $jour;
}
function encrypt($pure_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
    return $encrypted_string;
}
function decrypt($encrypted_string, $encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_string;
}
if(!function_exists('hash_equals')) {
  function hash_equals($str1, $str2) {
    if(strlen($str1) != strlen($str2)) {
      return false;
    } else {
      $res = $str1 ^ $str2;
      $ret = 0;
      for($i = strlen($res) - 1; $i >= 0; $i--) $ret |= ord($res[$i]);
      return !$ret;
    }
  }
}
