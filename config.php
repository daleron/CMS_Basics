<?php
/**
 * Created by JetBrains PhpStorm.
 * User: DScorp
 * Date: 11.03.12
 * Time: 11:27
 * To change this template use File | Settings | File Templates.
 */
 
ini_set( "display_errors", true );
date_default_timezone_set( "Asia/Dushanbe" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=cms" );
define( "DB_USERNAME", "root" );
define( "DB_PASSWORD", "vertrigo" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH","templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "daleron" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );

?>