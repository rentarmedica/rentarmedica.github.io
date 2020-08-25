<?php
$parsed_array = $argv[1];
$fields = explode(",", $parsed_array);
$data = sprintf("Name: %s \r\nPhone#: %s \r\nEmail: %s\r\nAddresses: %s\r\nPets: %s\r\nSmoker: %s\r\nMove-in: %s\r\n", $fields[0], $fields[1], $fields[2], $fields[3], $fields[4], $fields[5], $fields[6]);

$headers = 'From:'.$fields[2];
if (mail("rent.armedica.oh@gmail.com", "Apartment Listing Form Data", $data, $headers))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}

//STOP_Parker,859-475-3877,victor.arsenescu@tufts.edu,1439_Goldie_Lane,has_pets,not_a_smoker,08/28/2020
?>
