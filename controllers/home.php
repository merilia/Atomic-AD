<?php

if (isset($_POST['data'])) {
    $data = $_POST['data'];
    ob_start();
    require 'templates/email_template.php';
    $message = ob_get_contents();
    ob_end_clean();
    send_mail(EMAIL_EMAIL, 'veebiserver', 'noreply@atomic.ee', 'Sellele emailile ei ole võimalik vastata', 'Kiri Atomic OÜ veebilehe kontaktvormi kaudu', $message) or exit('Meili saatmine ebaõnnestus.');
    echo "Täname!";
}

class home extends Controller
{

    function index()
    {
        $this->users = get_all("SELECT * FROM user");
    }

    function index_ajax()
    {
        echo "\$_POST:<br>";
    }

    function index_post()
    {
        echo "\$_POST:<br>";
    }
}

?>