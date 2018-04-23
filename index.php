<?php
//include the required file
require_once "init.php";

//set_cookie('user','Malik Umer Farooq',3700,'/','localhost',false,false);

//check if cookie set
if(is_cookie('user')){

	//get the cookie value
	echo get_cookie('user');

}else{

	//set the cookie
	set_cookie('user','Malik Umer Farooq',3700,'/','localhost',false,false);

}

//delete the cookie value
//delete_cookie('user');