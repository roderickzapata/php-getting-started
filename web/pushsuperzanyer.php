<?PHP
$custom = $_GET["custom"];
if ($custom == null) {
     $ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"app_id\": \"f55e0ba5-3d08-4a0c-8a22-c7148ce4f66b\",\n\"contents\": {\"en\": \"Nuevo Pedido\"},\n\"included_segments\": [\"Subscribed Users\"]}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Content-Type: application/json; charset=utf-8";
$headers[] = "Authorization: Basic YmRiMDg3YTItMGM3MS00YjBjLTlkZDAtZDUzMDgxNjM2NzQ2";
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
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"app_id\": \"f55e0ba5-3d08-4a0c-8a22-c7148ce4f66b\",\n\"contents\": {\"en\": \"$custom\"},\n\"included_segments\": [\"Subscribed Users\"]}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Content-Type: application/json; charset=utf-8";
$headers[] = "Authorization: Basic YmRiMDg3YTItMGM3MS00YjBjLTlkZDAtZDUzMDgxNjM2NzQ2";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
}
?>
