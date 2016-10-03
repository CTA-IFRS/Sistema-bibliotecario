<?php

class Executor {

	public static function doit($sql){
		$con = Database::getCon();
		// TODO: return mysql error
		// $return = array($con->query($sql),$con->insert_id);

		if (!$return = $con->query($sql))
		{
			echo '<script>alert("olá");</script>';
			printf("Errormessage: %s\n", $con->error);
			die;
		}
		return array($return, $con->insert_id);
	}
}
?>
