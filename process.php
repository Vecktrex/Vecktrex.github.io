<?php

$sku = $_POST["sku"];
$itemName = $_POST["itemName"];
$itemQuantity = $_POST["itemQuantity"];
$itemCost = $_POST["itemCost"];
$sellPrice = $_POST["sellPrice"];

$dsn = "mysql:host=sql113.infinityfree.com;dbname=if0_38721731_cis224inventory";
$username = "if0_38721731";
$password = "0L2slKW8df";
$pdo = new PDO($dsn, $username, $password);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
$sql = "INSERT INTO Inventory VALUES(?, ?, ?, ?, ?)";
$statement = $pdo->prepare($sql);
$params = [$sku, $itemName, $itemQuantity, $itemCost, $sellPrice];
$statement->execute($params);
echo "$itemName was entered into the system.<br>\n";
echo "<br>\n";

$sql = "SELECT * FROM Inventory";
$statement = $pdo->query($sql);
echo "Current items logged into inventory database<br>\n";
foreach ($statement as $row) {
echo "SKU Number: $row[sku] <br>\n Item name: $row[Item] <br>\n Quantity: $row[Quantity]
<br>\n Purchase cost: $row[Cost]<br>\n Sell price: $row[Price]<br>\n";
echo "<br>\n";
}

} catch (PDOException $e) {
echo $e;
}

?>