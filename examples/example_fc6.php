<?php

use PHPModbus\ModbusMaster;

// Create Modbus object
$modbus = new ModbusMaster("192.192.15.51", "UDP");

// Data to be writen
$data = array(-1000);

try {
	// FC6
	$modbus->writeSingleRegister(0, 12288, $data);
} catch (Exception $e) {
	// Print error information if any
	echo $modbus;
	echo $e;
	exit;
}

// Print status information
echo $modbus;
