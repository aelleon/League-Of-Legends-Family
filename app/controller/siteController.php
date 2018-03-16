<?php

include_once '../global.php';

// get the identifier for the page we want to load
$action = $_GET['action'];

// instantiate a SiteController and route it
$sc = new SiteController();
$sc->route($action);

class SiteController {

	// route us to the appropriate class method for this action
	public function route($action) {
		switch($action) {
			case 'home':
			$this->home();
			break;
			case 'login':
			$this->login();
			break;
			case 'loginProcess':
			$username = $_POST['username'];
			$password = $_POST['pw'];
				//$username = 'asdf';
				//$password = 'foobar';
			$this->loginProcess($username, $password);
			break;
			case 'dashboard':
			$this->dashboard();
			break;

			case 'logout':
			$this->logout();
			break;

			case 'registerProcess':
			$username = $_POST['username'];
			$password = $_POST['pw'];
			$this->registerProcess($username, $password);
			break;

			case 'register':
			$this->register();
			break;

			case 'addFamilyMember':
			$this->addFamilyMember();
			break;

			case 'search':
			$this->search();
			break;

			case 'addProcess':
			

			//$this->postDB($first_name, $middle_name, $last_name, $date_birth, $date_death, $notable, $notable_date);
			$this->postDB();
			break;

		}

	}

	public function home() {
		$pageTitle = 'Home';
		include_once SYSTEM_PATH.'/view/header.tpl';
		include_once SYSTEM_PATH.'/view/index.tpl';
		include_once SYSTEM_PATH.'/view/footer.tpl';

	}

	public function login() {
		$pageTitle = 'Login';
		include_once SYSTEM_PATH.'/view/header.tpl';
		include_once SYSTEM_PATH.'/view/login.tpl';
		include_once SYSTEM_PATH.'/view/footer.tpl';

	}

	public function loginProcess($un, $pw) {
		$correctUsername = 'admin';
		$correctPassword = '123';

		if($un != $correctUsername || $pw != $correctPassword){
			//header('Location: '.BASE_URL);
			$message = "wrong answer";
			
		}
		else {
			$_SESSION['username'] = $un;
			header('Location: '.BASE_URL.'/dashboard'); exit();
		}

		//echo 'username: '.$un.'<br>';
		//echo 'password: '.$pw;

	}

	public function dashboard() {
		// redirect if not logged in
		if(!isset($_SESSION['username'])) {
			header('Location: '.BASE_URL); exit();
		}

		$pageTitle = 'Dashboard';
		include_once SYSTEM_PATH.'/view/header.tpl';
		include_once SYSTEM_PATH.'/view/home.tpl';
		include_once SYSTEM_PATH.'/view/footer.tpl';
	}

	public function logout() {
		unset($_SESSION['username']);
		session_destroy();
		header('Location: '.BASE_URL); exit(); // send us to home page
	}

	public function addFamilyMember() {
		include_once SYSTEM_PATH.'/view/header.tpl';
		include_once SYSTEM_PATH.'/view/addfamilymember.tpl';
		include_once SYSTEM_PATH.'/view/footer.tpl';

	}


	public function register() {
		$pageTitle = 'Login';
		include_once SYSTEM_PATH.'/view/header.tpl';
		include_once SYSTEM_PATH.'/view/register.tpl';
		include_once SYSTEM_PATH.'/view/footer.tpl';
	}

	public function registerProcess($un, $pw) {
		
		$_SESSION['username'] = $un;
		$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

		$sql = "INSERT INTO user_info (id, password, username) VALUES ('1', '$pw', '$un')";
		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		header('Location: '.BASE_URL.'/dashboard'); exit();
	}

		//echo 'username: '.$un.'<br>';
		//echo 'password: '.$pw;
//public function postDB($firstname, $middlename, $lastname, $datebirth, $datedeath, $notableInfo, $notabledate) {
	public function postDB(){
		$first_name = $_POST['first_name'];
			$middle_name = $_POST['middle_name'];
			$last_name = $_POST['last_name'];
			$date_birth = $_POST['date_birth'];
			$date_death = $_POST['date_death'];
			$biography = $_POST['biography'];
			$notable = $_POST['notable'];
			$notable_date = $_POST['notable_date'];
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);
	if (empty($first_name) || empty($last_name)) {
		header('Location: '.BASE_URL.'/addFamilyMemsber');
	}




	$sql = "INSERT INTO familyinfo (first_name, middle_name, last_name, date_birth, date_death, date_notable, notable_event) VALUES ('".$first_name."', '".$middle_name."', '".$last_name."', '".$date_birth."', '".$date_death."', '".$notable_date."', '".$notable."')";

	if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

}

	public function search() {
		include_once SYSTEM_PATH.'/view/header.tpl';
		include_once SYSTEM_PATH.'/view/search.tpl';
		include_once SYSTEM_PATH.'/view/footer.tpl';
	}


}





