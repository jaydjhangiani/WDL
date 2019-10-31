<?php

$name = $_POST["N"];
$no = $_POST["P"];
$mail = $_POST["E"];
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

echo "Name : ".$name;
echo "<br><br>";
echo "Phone Number : ".$no;
echo "<br><br>";
echo "Email : ".$mail;
echo "<br><br>";
echo $n1;
echo "<br><br>";
echo $n2;
echo "<br><br>";


while($n1<$n2)
{
$div_count=0;
for($i=1;$i<=$n1;$i++)
{
if(($n1%$i)==0)
{$div_count++;
}
}
if($div_count<3)
{echo(" ").$n1;
}
$n1++;
}
echo "<br><br>";

echo "Thanks for submitting!!!";
?>
