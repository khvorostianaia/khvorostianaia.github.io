<?php

include 'connection.php';

$query = "SELECT * FROM orderform";
$result = $pdo->query($query);

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['plant']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $plant = $_POST['plant'];
    $query = "INSERT INTO orderform(name, email, plant) VALUES ('$name', '$email', '$plant')";
    $result = $pdo->query($query);
} echo '<script>alert("Форма успешно отправлена")
window.location="index.php"</script>'

?>