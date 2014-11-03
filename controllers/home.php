<?php

if (isset($_POST['data'])) {
    mysql_connect('localhost', 'root', '') or exit(mysql_error());
    mysql_select_db('atomic2') or exit(mysql_error());
    foreach ($_POST['data'] as $field => $value) {
        $data[$field] = mysql_real_escape_string($value);
    }
    extract($data);
    $sql = "INSERT INTO feedback
                 SET
                    feedback_first_name='$feedback_first_name',
                    feedback_last_name='$feedback_last_name',
                    feedback_phone='$feedback_phone',
                    feedback_text='$feedback_text'";
    echo "<pre>$sql</pre>";
    mysql_query($sql) or exit(mysql_error());
    mail('meriliasu@gmail.com','Kiri Atomic OÜ veebilehe kontaktvormi kaudu', $sql) or exit('Meili saatmine ebaõnnestus.');
    echo "Täname!";
}

class home extends Controller{

	function index(){
		$this->users = get_all("SELECT * FROM user");
	}

    function index_ajax(){
		echo "\$_POST:<br>";
        var_dump($_POST);
    }

	function index_post(){
		echo "\$_POST:<br>";
		var_dump($_POST);
	}
}

?>