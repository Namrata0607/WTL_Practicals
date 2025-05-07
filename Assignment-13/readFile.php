<!-- Reading a file -->
<?php
    $filename = 'Demo.txt';

    if (file_exists($filename)) {

        $file = fopen($filename, "r"); 

        $content = fread($file, filesize($filename)); 
        fclose($file);

        echo "File read successfully!<br>";
        echo "Content of the file:<br><br>";
        echo ($content);

    } else {
        echo "File does not exist.";
    }
?>