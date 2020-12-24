<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"  type="text/javascript"></script>
<?php
session_start();

 $data = $_POST['data'];

 foreach ($data['skor'] as $key => $value) {
    echo "$key => $value";
 }

?>
