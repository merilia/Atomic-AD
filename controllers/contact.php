<?php


class contact extends Controller
{
    function index_post()
    {
        $data = $_POST['data'];
        $message = '<pre>' . print_r($data, 1) . '<pre>';
        $message .= $data['email_message'];
        echo "<pre>";
        send_mail(EMAIL_EMAIL, EMAIL_NAME, $data['email_email'], $data['email_name'], "Uus sõnum veebilehelt", $message);
        echo "</pre>";
    }

    function index()
    {

    }


}