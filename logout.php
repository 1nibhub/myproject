<?php
	session_start();
	unset($_SESSION["LOGIN_PERSON"]);
	unset($_SESSION["LOGIN_FAMILY"]);

	session_destroy();


				echo '<script>;
                  window.location="index.php";
			      </script>';

?>