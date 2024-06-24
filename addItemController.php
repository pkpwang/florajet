<?php

	require("../Model/connecteur.php");
	$db = new MyConnect();

	$datasFromForm = $_POST;
	$conn = $db->kconnection();
	$db->insertkData($datasFromForm);
