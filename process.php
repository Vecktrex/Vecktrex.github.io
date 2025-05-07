<?php

$sku = $_POST["sku"];
$itemName = $_POST["itemName"];
$itemQuantity = $_POST["quantity"];
$itemCost = $_POST["itemCost"];
$sellPrice = $_POST["sellPrice"];

$dsn = "mysql:host=sql113.infinityfree.com;dbname=if0_38721731_cis224";
$username = "if0_38721731";
$password = "0L2slKW8df";
$pdo = new PDO($dsn, $username, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
$sql = "INSERT INTO Inventory VALUES ('$sku', '$itemName', '$itemQuantity', '$itemCost', '$sellPrice')";
$statement = $pdo->prepare($sql);
$params = [$sku, $itemName, $itemQuantity, $itemCost, $sellPrice];
$statement->execute($params);
echo "$itemName was entered into the system.";

} catch (PDOException $e) {
echo $e;
}

?>