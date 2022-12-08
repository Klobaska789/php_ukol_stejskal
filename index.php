<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prevod</title>
</head>
<style>
form {
    display: inline-block;
  max-width: 600px;
  margin: auto;
  padding: 20px;
  background-color: #f2f2f2;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

form h1 {
  text-align: center;
  margin-bottom: 20px;
}

form input[type="text"],
form input[type="email"],
form textarea {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  resize: vertical;
}

form input[type="submit"] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}


form input[type="submit"]:hover {
  background-color: #45a049;
}
body{
color: blue;
        font-size: 50px;
        display: absolute;
        text-align: center;}
    </style>
<body>
    <div style="text-align:center">
        <form method="POST">
            <input type="text" name="text1" placeholder="192.168.1.3">
            <input type="submit" name="prvni" value="Prevod">
        </form>  
        <form method="POST">
            <input type="text" name="text2" placeholder="11100011,11001100,00000010,00000001">
            <input type="submit" name="druhy" value="Prevod">
        </form>
        <form method="POST">
            <input type="text" name="text3" placeholder="a1,a2,a3,bc">
            <input type="submit" name="treti" value="Prevod">
        </form>
</div>
     <?php
       if(isset($_POST['prvni'])){$ipnumber = $_POST['text1'];
      list($ip1, $ip2, $ip3, $ip4) = explode(".", "$ipnumber");
      print(decbin("$ip1")); echo ",";
      print(decbin("$ip2")); echo ",";
      print(decbin("$ip3")); echo ",";
      print(decbin("$ip4")); echo "<br>";
      print(dechex("$ip1"));echo ":";
      print(dechex("$ip2"));echo ":";
      print(dechex("$ip3"));echo ":";
      print(dechex("$ip4"));}
      if(isset($_POST['druhy'])){$binnum = $_POST['text2'];
      list($bin1, $bin2, $bin3, $bin4) = explode(",", "$binnum");
      print(bindec("$bin1"));echo ".";
      print(bindec("$bin2"));echo ".";
      print(bindec("$bin3"));echo ".";
      print(bindec("$bin4"));echo "<br>";
      printf(dechex(bindec($bin1)));echo ":";
      printf(dechex(bindec($bin2)));echo ":";
      printf(dechex(bindec($bin3)));echo ":";
      printf(dechex(bindec($bin4)));}
      if(isset($_POST['treti'])){$hexnum = $_POST['text3'];
      list($hex1, $hex2, $hex3, $hex4) = explode(":", "$hexnum");
      print(hexdec("$hex1"));echo ".";
      print(hexdec("$hex2"));echo ".";
      print(hexdec("$hex3"));echo ".";
      print(hexdec("$hex4"));echo "<br>";
      printf(decbin(hexdec($hex1)));echo ",";
      printf(decbin(hexdec($hex2)));echo ",";
      printf(decbin(hexdec($hex3)));echo ",";
      printf(decbin(hexdec($hex4)));}?> 
</body>
</html>