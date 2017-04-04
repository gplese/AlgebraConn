<?php
	require_once 'Core/init.php';
	
	Helper::getHeader('Algebra Contacts');
	$db = DB::getInstance()->get('*', 'users');
	//$db = DB::getInstance()
	
	echo '<pre>';
	var_dump($db);
	/*
	if($db->count() > 0) {
	foreach ($db->results() as $results){
		echo $results->name;
	}
	} else {
		echo 'Trenutno nema podataka u bazi!!!';
	}
	
	DB::getInstance()->get('*','users',array('id','=',3));
	*/
	 DB::getInstance()->insert('users', array('name'=>'Marko Markic','username'=>'Marko','pasword'=>''123456789,'salt'=>'65+464sdfg','role_id'=>1));
	"INSERT INTO users (name,username,password,salt)VALUES(?,?,?,?)"
?>
	<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <div class="container">
                    <h1>Algebra Contacts</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et dolor sapien. Morbi faucibus, lacus a ornare finibus, justo nisl interdum turpis, et ornare diam libero eget leo.</p>
                    <p>
                        <a class="btn btn-primary btn-lg" href="login.php" role="button">Sign In</a>
                        or
                        <a class="btn btn-primary btn-lg" href="register.php" role="button">Create an account</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

<?php
	Helper::getFooter();
?>

   