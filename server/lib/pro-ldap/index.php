<?php 

echo ".................................................";
echo "<pre>";

use adLDAP\adLDAP;
use adLDAP\Exceptions\adLDAPException;
include (dirname(__FILE__) . "/lib/adLDAP/adLDAP.php");
$options = include (dirname(__FILE__) . "/cfg.php");
//print_r($options);
echo ".................................................";

try {
    $adldap = new adLDAP($options);
}
catch (adLDAPException $e) {
    echo $e;
    exit();   
}
// authenticate a username/password
echo "................................................. authenticate <br>";
$user1 = "informatico";
$pass1 = "abcd-1234A";
$result = $adldap->authenticate($user1, $pass1);

if ($result == true) {
  echo "User authenticated successfully";
}
else {
  // getLastError is not needed, but may be helpful for finding out why:
  var_dump($result);
  echo $adldap->getLastError();
  echo "<br> User authentication unsuccessful <br>";
}
echo ".................................................";

// list the contents of the Users OU
echo "................................................. list the contents of the Users OU <br>";
$result=$adldap->folder()->listing(array('user'), adLDAP::ADLDAP_FOLDER, false);
//print_r ($result);   
echo ".................................................";

// create a group
echo "................................................. create a group <br>";
$attributes=array(
  "group_name"=>"U_USER_TEST",
  "description"=>"Just Testing Groups",
  "container"=>array("group")
);
//$result = $adldap->group()->create($attributes);
//var_dump($result);
echo ".................................................";

// add a user to a group
echo "................................................. add a user to a group <br>";
$result = $adldap->group()->addUser("U_USER_TEST", $user1);
var_dump($result);
echo ".................................................";
// retrieve the group membership for a user
echo "................................................. groups <br>";
$result = $adldap->user()->groups($user1);
print_r($result);
echo ".................................................";

// check if a user is a member of a group
echo "................................................. check if a user is a member of a group <br>";
$result = $adldap->user()->inGroup($user1,"U_USER_YOUTUBE_FC");
var_dump($result);
echo ".................................................";

// modify a user account (this example will set "user must change password at next logon")
echo "................................................. modify a user account <br>";
$attributes=array(
	"displayName"=> "Tony Test",
   "url" => "www.tony.acopio.cu"
);
$result = $adldap->user()->modify("antonio.membrides", $attributes);
var_dump($result);
echo ".................................................";
// retrieve information about a user
echo "................................................. information <br>";
$result = $adldap->user()->info("antonio.membrides");
print_r($result);
echo ".................................................";



// create a user account
echo "................................................. create a user account <br>";
$attributes = array(
  "username"=>"tmp.fred",
  "logon_name"=>"tmp.fred@acopio.cfg.minag.cu",
  "firstname"=>"Fred",
  "surname"=>"Smith",
  "company"=>"My Company",
  "department"=>"My Department",
  "email"=>"freds@mydomain.local",
  "container"=> array("user","nodo"),
  "enabled"=>true,
  "password"=>"Password123",
);

try {
	//$result = $adldap->user()->create($attributes);
  //var_dump($result);
}
catch (adLDAPException $e) {
    echo $e;
    exit();   
}
echo ".................................................";