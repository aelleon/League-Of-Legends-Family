<?php

include_once '../global.php';

// get the identifier for the page we want to load
$action = $_GET['action'];

// instantiate a memberController and route it
$mc = new MemberController();
$mc->route($action);

class MemberController {

	// route us to the appropriate class method for this action
	public function route($action) {
		switch($action) {

			case 'view':
        		//$name = $_GET['name']; // get the member name
				$id = $_GET['id'];
        		$this->view($id);
        		break;

        		case 'index':
        		$this->index();
        		break;

        		case 'add':
        		$this->add();
        		break;

        		case 'addProcess':
        		$this->addProcess();
        		break;
        	}

        }

        public function view($id) {	
        	$pageTitle = 'Member';
        	include_once SYSTEM_PATH.'/view/header.tpl';

        	$member = Member::loadById($id);
			   
		    if($member != null) {
		    	//$lifeEvents = LifeEvent::getBymemberId($id);
		    	include_once SYSTEM_PATH.'/view/profile.tpl';
		    } else {
		    	die('Invalid member ID');
		    }


	    include_once SYSTEM_PATH.'/view/footer.tpl';
}


}
