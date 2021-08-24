<?php
session_start();
require '../config/connection.php';
if (isset($_POST['price']))
{
	$username = $_SESSION['username'];
	$hectares = mysqli_real_escape_string($connect, $_POST['hectares']);

	$currentPrice = mysqli_query($connect, "SELECT price FROM land_price ORDER BY time_updated DESC");
	$fetchPriceFromDb = mysqli_fetch_assoc($currentPrice);
	$cost = $fetchPriceFromDb['price'];
	$totalAmount = $hectares * $cost;

	$_SESSION['price'] = $cost;
	$_SESSION['total_amount'] = $totalAmount;
	$_SESSION['hectares'] = $hectares;

	$hectareQuery = mysqli_query($connect, "INSERT INTO hectares (number_of_hectares, amount, username, date_inserted, time_inserted) VALUES ('$hectares', '$totalAmount', '$username', CURDATE(), CURTIME())");

	$budgetQuery = mysqli_query($connect, "SELECT * FROM hectares ORDER BY time_inserted DESC");
	$fetchBudgetFromDb = mysqli_fetch_assoc($budgetQuery);
	$_SESSION['date_of_budget'] = $fetchBudgetFromDb['date_inserted'];
	$_SESSION['time_of_budget'] = $fetchBudgetFromDb['time_inserted'];

	header("Location: ../budget_summary.php?budget=success");	
		  exit();
}
mysqli_close($connect);
?>