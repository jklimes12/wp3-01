<?php
$truck_now = 0;
$truck_max = 20;
$truck_now_virtual = 0;

while ($truck_now < $truck_max) {
  $truck_box = rand(1,5);
  $truck_now_virtual = $truck_now + $truck_box;

if ($truck_now_virtual <= $truck_max) {
  $truck_now = $truck_now + $truck_box;
 }
 for ($index=0; $index <= $truck_now; $index++) {
   echo "x";
 }
 echo $truck_box;
   ?><br/><?php
}
echo $truck_now;
echo "m³";
?>
