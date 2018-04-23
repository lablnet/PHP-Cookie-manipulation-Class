<?php 
	 /**
	 * Create instence of class
	 *
	 * @return object
	 */	 

function cookie(){

	return new Cookies;

}

	 /**
	 * Set the cookie value
	 *
	 * @param $name of cookie
	 * $value of cookie
	 * $expire of cookie 
	 * $domain of cookie
	 * $secure of cookie
	 * $httponly of cookie
	 *
	 * @return boolean
	 */
function set_cookie($name,$value,$expire,$path,$domain,$secure,$httponly){

	return cookie()->set(['name'=>$name,'value'=>$value,'expire'=> time()+ $expire,'path'=> $path , 'domain'=>$domain,'secure'=>$secure,'httponly'=>$httponly]);

}

	 /**
	 * Get the cookie value if set
	 *
	 * @param $name of cookie
	 *
	 * @return string
	 */

function get_cookie($name){

	return cookie()->Get($name);

}

	 /**
	 * Delete the cookie if set
	 *
	 * @param $name of cookie
	 *
	 * @return boolean
	 */
function delete_cookie($name){

	return cookie()->Delete($name);

}

	 /**
	 * Check cookie is set or not
	 *
	 * @param $name of cookie
	 *
	 * @return boolean
	 */
function is_cookie($name){

	return cookie()->IsCookie($name);

}