 <?php
$city = 'london';
$api_key = '9a47a85d8b9114c90643c5dde34d9b79';
$url = 'https://api.openweathermap.org/data/2.5/weather?q='.$city.'&appid='.$api_key;
$weather_data = json_decode(file_get_contents($url),true);
echo "<pre>";
print_r($weather_data)
?>