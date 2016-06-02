<?php
$connect=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db("project");

session_start();

if ($_POST['mode']=="logout")
{
	session_unset();
	unset($_SESSION['user_id']);
	session_destroy();
	//header("Location: registration.php");
//exit();
}

if (isset($_POST['enter']))
{
	$entermail=$_POST['entermail'];
	$enterpass=md5($_POST['enterpass']);

	$query=mysql_query("SELECT * FROM user WHERE email='$entermail'");
	//echo "<br><br><br>  $query   <br><br><br>"; 
	//echo " $entermail  -  $enterpass --     ";
	$user_data = mysql_fetch_array($query);

	if ($user_data['password']==$enterpass)
	{
	//	echo "   OK    ";
		//echo "$user_data";
		$_SESSION['user_id'] = $user_data['id'];
	}
     //unset($_SESSION['user_id']);
}

if (isset($_POST['submit']))
{
	$username = $_POST['username'];
	$usersurname = $_POST['usersurname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$password = md5($password);

	$query = mysql_query("INSERT INTO user (id, name, surname, password, email) VALUES ('', '$username', '$usersurname', '$password', '$email')") or die (mysql_error());
}

mysql_close();

class Auth {
	private static $_user;
	private static $_userRetrieved = false;

	public static function user() {
		if (! self::$_userRetrieved) {
			if (! isset($_SESSION['user_id']))
				self::$_user = null;
			else {
				$user_id = $_SESSION['user_id'];
				if (empty($user_id))
					self::$_user = null;
				else {
					$connect = mysql_connect('localhost','root','') or die(mysql_error());
					mysql_select_db("project");
					$query = "SELECT * FROM user where id=$user_id;";
					$query_result = mysql_query($query) or die (mysql_error());
					$data = mysql_fetch_array($query_result);
					mysql_close();
					self::$_user = $data;
				}
			}
			self::$_userRetrieved = true;
		}
		return self::$_user;
	}

	public static function userFullname() {
		$user = self::user();
		if ($user)
			return $user['name'] . ' ' . $user['surname'];
		else
			return '';
	}

	
}


     //unset($_SESSION['user_id']);

