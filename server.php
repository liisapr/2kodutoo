<?php
  if(isset($_POST["save"]) && !empty($_POST["save"])){
    saveToFile($_POST["save"]);
  }

  function saveToFile($stringToSave){
    echo "funk";
    $object = new StdClass();
    $object->date_modified = time();
    $object->content = $stringToSave;
    $jsonString = json_encode($object);
    if(file_put_contents("database.txt", $jsonString)){
      echo "success";
    }
  }

?>
