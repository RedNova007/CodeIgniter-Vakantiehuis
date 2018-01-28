<?php
try
{
	/*
	 * Initialize the Mollie API library with your API key.
	 */
	require "Mollie/API/Autoloader.php";

	$mollie = new Mollie_API_Client;
    $mollie->setApiKey('test_yRMrQr8uhsexB49rDgQa8dqvv9bbAV');

	/*
	 * Retrieve the payment's current state.
	 */
	$payment  = $mollie->payments->get($_POST["id"]);
	$order_id = $payment->metadata->order_id;

	/*
	 * Update the order in the database.
	 */
	database_write($order_id, $payment->status);

	if ($payment->isPaid() == TRUE)
	{
		/*
		 * At this point you'd probably want to start the process of delivering the product to the customer.
		 */
		echo "Payment received.";
	}
	elseif ($payment->isOpen() == FALSE)
	{
		/*
		 * The payment isn't paid and isn't open anymore. We can assume it was aborted.
		 */
		echo "Payment failed.";
	}
}
catch (Mollie_API_Exception $e)
{
	echo "API call failed: " . htmlspecialchars($e->getMessage());
}


/*
 * NOTE: This example uses a text file as a database. Please use a real database like MySQL in production code.
 */
function database_write ($order_id, $status)
{
	$order_id = intval($order_id);
	$database = dirname(__FILE__) . "/orders/order-{$order_id}.txt";

	file_put_contents($database, $status);
}
