<?php
        
if (isset($_POST["first-name"])) {
  $firstName = $_POST["first-name"];
  $lastName = $_POST["last-name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $relationship = $_POST["relationship"];

  // echo "First Name: " . $firstName . "<br>";
  // echo "Last Name: " . $lastName . "<br>";
  // echo "Email: " . $email . "<br>";
  // echo "Phone: " . $phone . "<br>";
  // echo "Relationship: " . $relationship . "<br>";
}


  //import json data from file
  $jsonData = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/data.json');
  //convert json data to php array
  $existingData = json_decode($jsonData,TRUE);
  
  $largest_uid = 0;
  foreach ($existingData as $item) {
      if (isset($item['uid']) && $item['uid'] > $largest_uid) {
          $largest_uid = $item['uid'];
      }
  }

   // do if passed
    $newFormData = array(
      "date"=> date("m/d/Y"), 
      "fName"=> $firstName, 
      "lName"=> $lastName,
      "email"=> $email,
      "phone"=> $phone,
      "relationship"=> $relationship,
      "uid"=> $largest_uid+1
    );

  // add new form data to existing array.
  array_push($existingData, $newFormData);
  //turn php array back into JSON data
  $jsonData = json_encode($existingData);
  //send data to data.json
  file_put_contents($_SERVER['DOCUMENT_ROOT'].'/data.json', $jsonData);

  header('Location: /index.php');
?>