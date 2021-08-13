<?php
echo"こんにちは<br>";

?>

<?php
echo "おはよう！<br>";
print "こんにちは";
echo"<br>";
$name = "大橋太郎";
echo "hello $name <br/>";
echo 'hello $name';
echo"<br>";

?>

<?php
$username = "root";
echo $username; 
echo"<br>";

$moji = "あいう";
echo $moji;
echo"<br>";

$number = "12";
echo $number;
echo"<br>";
?>


<?php
$ageA = 19;

if($ageA >= 20){
    echo"成人です";
}
echo"<br>";
?>

<?php
if($ageA >= 20){
    echo"成人です";
}else{
    echo"成人ではありません";
}
echo"<br>"
?>

<?php
if($ageA < 20){
    echo"未成年です";
}elseif($ageA < 60){
    echo"成人です";
}else{
    echo"高齢者です";
}
echo"<br>";
?>

<?php
for($i = 2000; $i <= 2020; $i++){
    echo"$i"."年";
    echo"<br>";
}
echo"<br>";
?>

<?php
for($i = 0; $i < 10; $i++){
    echo"$i";
}

echo"<br>";
echo"----------";
echo"<br>";

for($i = 0; $i < 10; $i++){
    if($i > 5){
        break;
    }
 echo"$i";
}
echo"<br>";
echo"----------";
echo"<br>";

for($i = 0; $i < 10; $i++){
    if($i % 2 == 0){
        continue;
    }
     echo"$i";
}
echo"<br>";
echo"----------";

?>



<?php
$answer = 0;

for($i =0; $i <= 100; $i++){
    if($i % 5 == 0){
        $answer = $answer+$i;
    }
}
echo"$answer";

?>

<?php
$i = 2;

while($i < 10){
   echo"$i";
   $i++;
   echo"<br>";
}
?>

<?php
$i = 50;
do{
    echo $i."<br>";
    $i++;
}while($i < 10);
echo"<br>";
?>


<?php
$i = 1;
while ($i <= 50){
    if($i % 5 == 0){
     echo $i ."<br>";
    }
   $i++;
}
?>

<?php
$name =["太郎","次郎","三朗"];

echo $name[0];
echo"<br>";

echo $name[1];
echo"<br>";

echo $name[2];
echo"<br>";

?>

<?php
$data = [
  'name' => "大橋太郎",
  'apa' => "32歳",
  'add' => "目黒区大橋1-2-5",
  'job' =>"公務員",
  "hobby" =>"キャンプ"
];
echo $data['hobby'];
echo"<br>"
?>

<?php
$data=[];

$data = [
  ["1","太朗","35歳","東京"],
  ["2","次郎","28歳","大阪"],
  ["3","三朗","19歳","福岡"]
];
echo $data[0][3];
echo"<br>";
?>

<?php
$name = ["太朗","次郎","三朗"];
foreach($name as $val){
    echo $val."<br>";
}
echo"------------<br>";

$data =[
    "name" => "taro",
    "job" => "事務員",
    "age" => "32歳"
];
foreach($data as $kye => $val){
    echo $kye. ":" .$val;
    echo"<br>";
}
?>

<?php
$data =[
["1","太朗","32歳","東京","公務員","キャンプ"],
["2","次郎","28歳","大阪","家事手伝い","映画鑑賞"],
["3","三朗","25歳","福岡","デザイナー","ドライブ"]
];
  foreach ($data as $val){
    echo $val[0]."\n";
    echo $val[1]."\n";
    echo $val[2]."\n";
    echo $val[3]."\n";
    echo $val[4]."\n";
    echo $val[5];
    echo"<br>";
  }
 echo $data[0][4];
?>

<?php
$a = 2;
$b = 5;

echo($b + $a)."<br>";
echo($b - $a)."<br>";
echo($b * $a)."<br>";
echo($b / $a)."<br>";
echo($b % $a)."<br>";
echo($a ** $b)."<br>";
echo"<br>";
?>

<?php
$a = 5;
echo ++$a;
echo"<br>";
?>

<?php
$y = 5;
$t = 8;
$y += $t;
echo $y;
?>