<?php

// include bootstrapping
include '../bootstrap/bootstrap.php';


var_dump(PUBLIC_DIR); 

//as it is staic we are calling with the static operator
//use FQN as it is a different namespace
$route = request('route', 404);

// we rewrote the above after creating the helper functions, from:
// $route = \codingbootcamp\tinymvc\request::get('route', 404); to the above

//or use \codingbootcamp\tinymvc\request as request

echo $route;





