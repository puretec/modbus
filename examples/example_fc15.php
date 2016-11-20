<?php

use PHPModbus\ModbusMaster;

// Create Modbus object
$modbus = new ModbusMaster("192.192.15.51", "UDP");

// Data to be written - supports both 0/1 and booleans (true, false)
$data = array(
	1, 0, 1, 1, 0, 1, 1, 1,
	1, 1, 1, 1, 0, 0, 0, 0,
	0, 0, 0, 0, 1, 1, 1, 1,
	1, 1, 1, 1, 1, 1, 1, 1,
);

try {
	// FC15
	$modbus->writeMultipleCoils(0, 12288, $data);
} catch (Exception $e) {
	// Print error information if any
	echo $modbus;
	echo $e;
	exit;
}

// Print status information
echo $modbus;
