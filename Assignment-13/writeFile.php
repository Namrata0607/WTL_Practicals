<!-- Writing to a file -->
<?php
    $filename = 'Demo.txt';
    $content = "\nThis is a new line of text.\n";

    $file = fopen($filename, 'a');

    if ($file) {
        fwrite($file, $content);
        fclose($file);
        echo "File written successfully!<br>";

        $file = fopen($filename, 'r');
        if ($file) {
            $content = fread($file, filesize($filename));
            fclose($file);
            echo "Content of the file:<br><br>";
            echo ($content); 
        } else {
            echo "Failed to open the file for reading.";
        }
    } else {
        echo "Failed to open the file for writing.";
    }
?>