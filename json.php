<?php
function jsoncoder($data) {
  $j = json_decode($data);
  $result = [];
  foreach ($j as $item) {
      array_push($result,[
          'total_value' => $item->control->total_value,
          'car_id' => $item->control->car_id
      ]);
  }
}
?>
