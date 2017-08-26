<?php
class LoginController extends Controller{

    function action_index()
    {
        $this->view->generate('login_view.php', 'template_view.php');
    }
}