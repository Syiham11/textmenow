<?php



	include ( "lib/NexmoMessage.php" );


    $phone_number = $_GET['phone_number'];
    $message = $_GET['message'];

    // [DEBUG]
    // echo $phone_number;
    // echo $message;
    // exit;

	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('4d17a6dc', '2655a69b');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( $phone_number, 'Joven&Mia', $message );

	// Step 3: Display an overview of the message
	echo "<script>alert('Success'); document.location = 'index.html';</script>";

	// Done!

?>