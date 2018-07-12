<?php
//ini_set("display_errors",true);
date_default_timezone_set( "Asia/Kolkata" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=simpleidb" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "root" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
require( CLASS_PATH . "/Article.php" );

//require( "exc_handler.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  var_dump($exception);die;
  echo $exception->getMessage();	
  error_log($exception->getMessage());
}

set_exception_handler( 'handleException' );
?>
