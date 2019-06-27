<?PHP
$custom = $_GET["custom"];
if ($custom == null) {
     $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"app_id\": \"4361a69f-8d33-48f5-9dd0-847e4e7e363f\",\n\"contents\": {\"en\": \"Moviemiento en Delivery\"},\n\"included_segments\": [\"Subscribed Users\"]}");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = "Content-Type: application/json; charset=utf-8";
$headers[] = "Authorization: Basic OWVmNWUzMjktZjYzMC00OWExLTg1MGQtNWI3MTQzYjQ4MDQ4";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
}
else{
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"app_id\": \"4361a69f-8d33-48f5-9dd0-847e4e7e363f\",\n\"contents\": {\"en\": \"$custom\"},\n\"included_segments\": [\"Subscribed Users\"]}");
curl_setopt($ch, CURLOPT_POST, 1);
$headers = array();
$headers[] = "Content-Type: application/json; charset=utf-8";
$headers[] = "Authorization: Basic OWVmNWUzMjktZjYzMC00OWExLTg1MGQtNWI3MTQzYjQ4MDQ4";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
}
?>
