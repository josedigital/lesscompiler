<?php 
/* 
 * Required
 * $less_directory
 * $css_directory
 * $less_file
 */

$less_directory = 'less';
$css_directory 	= 'css';
$less_file 		= 'styles';


/* ======== /VARIABLES ======== */



// parse less
require('less.php/Less.php');

$parser = new Less_parser();
$parser->parseFile($less_directory.'/'.$less_file.'.less', '/');
$css = $parser->getCss();



// create/write to css file
$css_file = $css_directory.'/'.$less_file.'.css';
file_put_contents($css_file, $css) or die('nope');
echo 'done';

// get all parsed files
//$imported_files = $parser->allParsedFiles();


// for caching purposes
// $to_cache = array( 'less/styles.less' => '/crush/lessphp/' );
// Less_Cache::$cache_dir = 'css/';
// $css_file_name = Less_Cache::Get( $to_cache );
// $compiled = file_get_contents( 'css/'.$css_file_name );

