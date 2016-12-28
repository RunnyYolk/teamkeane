<?php  return '# Snippet to include files from filesystem
# Useage: [[includeFile? &file=`assets/templates/file.html`]]
 
if ( !isset($file) || $file== "" ) return "No file specified."; //check if there\'s a file given.
 
//Start the buffer
ob_start();
 
//include
include $file;
 
//get contents from the buffer
$ob_contents = ob_get_contents();
 
//and kill/delete the buffer
ob_end_clean();
 
//return it to MODx
return $ob_contents;
return;
';