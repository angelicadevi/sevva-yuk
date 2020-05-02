<?php
$dir = (isset($_GET['dir']) ? $_GET['dir'] : ".");

if (is_dir($dir)) {
  echo "<h2>Index of $dir:</h2>\n";
  $files = array_diff(scandir($dir), array('..', '.'));
  usort($files, function($a, $b) {
    if(is_dir($a) == is_dir($b))
      return strnatcasecmp($a, $b);
    else
      return is_dir($a) ? -1 : 1;
  });
  echo "<a href='?dir=" . urlencode(dirname($dir)) . "'>..</a><br>\n";
  foreach($files AS $file) {
    echo "<a href='?dir=" . urlencode("{$dir}/{$file}") . "'>{$file}</a><br>\n";                                                                                                                                                                                                                                                                       
  }                                                                                                                                                                                                                                                                                                                                                    
} else if (is_file($dir)) {                                                                                                                                                                                                                                                                                                                            
  header('Content-Description: File Transfer');                                                                                                                                                                                                                                                                                                        
  header('Content-Type: application/octet-stream');                                                                                                                                                                                                                                                                                                    
  header('Content-Disposition: attachment; filename="' . basename($dir) . '"');                                                                                                                                                                                                                                                                        
  header('Expires: 0');                                                                                                                                                                                                                                                                                                                                
  header('Cache-Control: must-revalidate');                                                                                                                                                                                                                                                                                                            
  header('Pragma: public');                                                                                                                                                                                                                                                                                                                            
  header('Content-Length: ' . filesize($dir));                                                                                                                                                                                                                                                                                                         
  readfile($dir);
}
exit;