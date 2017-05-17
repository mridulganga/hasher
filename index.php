<?php

$str = "";

if (isset($_GET["algo"])){

  if (isset($_GET["all"])){
      $data = $_GET["data"];
      foreach (hash_algos() as $v) {
        $r = hash($v, $data, false);
        $str .= "<b>".$v."</b>   ".$r."<br>";//("%-12s %3d %s\n", $v, strlen($r), $r);
      }
  }
  else {
    $algo = $_GET["algo"];
    $data = $_GET["data"];
    $str = hash($algo,$data);
  }



}

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>HASH String</title>
  </head>
  <body>
    <style media="screen">
      input{padding:10px;}
      select{padding:10px;}
    </style>
    <center>
    <h2>Hash String</h2>
    <form class="" action="hash.php" method="get">
      Data : <br><input type="text" name="data" value=""><br><br>
      Hashing Algorithm :<br>
      <select class="" name="algo">
        <option value="md2">MD2</<option>
        <option value="md4">MD4</option>
        <option value="md5">MD5</option>
        <option value="sha1">SHA1</option>
        <option value="sha256">SHA256</option>
        <option value="sha384">SHA384</option>
        <option value="sha512">SHA512</option>
        <option value="ripemd128">Ripemd128</option>
        <option value="ripemd160">Ripemd160</option>
        <option value="ripemd256">Ripemd256</option>
        <option value="ripemd320">Ripemd320</option>
        <option value="whirlpool">Whirlpool</option>
        <option value="tiger128,3">Tiger128,3</option>
        <option value="tiger160,3">Tiger160,3</option>
        <option value="tiger192,3">Tiger192,3</option>
        <option value="tiger128,4">Tiger128,4</option>
        <option value="tiger160,4">Tiger160,4</option>
        <option value="tiger192,4">Tiger192,4</option>
        <option value="snefru">Snefru</option>
        <option value="gost">Gost</option>
        <option value="adler32">Adler32</option>
        <option value="crc32">Crc32</option>
        <option value="crc32b">Crc32b</option>
        <option value="haval128,3">Haval128,3</option>
        <option value="haval160,3">Haval160,3</option>
        <option value="haval192,3">Haval192,3</option>
        <option value="haval224,3">Haval224,3</option>
        <option value="haval256,3">Haval256,3</option>
        <option value="haval128,4">Haval128,4</option>
        <option value="haval160,4">Haval160,4</option>
        <option value="haval192,4">Haval192,4</option>
        <option value="haval224,4">Haval224,4</option>
        <option value="haval256,4">Haval256,4</option>
        <option value="haval128,5">Haval128,5</option>
        <option value="haval160,5">Haval160,5</option>
        <option value="haval192,5">Haval192,5</option>
        <option value="haval224,5">Haval224,5</option>
        <option value="haval256,5">Haval256,5</option>
      </select><br><br>
      <input type="submit" name="submit" value="Hash">
      <input type="submit" name="all" value="All Algorithms"><br>
    </form>
</center>
    <p style="margin:40px 100px;"><?php echo $str; ?></p>

  </body>
</html>
