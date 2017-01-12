<?php 
$x = 0; 

while($x <= 22) {
    if($x % 5 != 0 || $x == 0){

    echo "The number is: $x <br>";}
    $x+= 2;
} 

while(false){
    echo "Natalie";
}

do{
    echo "Solorio";
}while(false);

echo "<br>";

$fruit = array("cherry", "apple", "peach", "plum"); 
$count = count($fruit);

for($i =1; $i <= $count; $i++){
    echo "$i)" . $fruit[$i-1] . "<br>";
}

?>