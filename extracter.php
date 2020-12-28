<?php
$zip = new ZipArchive;
try {
    $res = $zip->open('../agwis.zip');
    if ($res === true) {
        $extract = $zip->extractTo('../');
        if($extract) {
            'Extracted successfully.<br>';
        }
        else {
            'Not Extracted.<br>';
        }
        $zip->close();
        echo 'Closed<br>';
    }
    else {
        echo 'file not found or cant be opened.<br>';
    }
}
catch(Exception $e) {
    echo '<pre>';
    var_dump($e);
    exit;
}
