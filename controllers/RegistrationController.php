<?php
class RegistrationController extends Controller{

    function action_index()
    {
        $this->view->generate('registration_view.php', 'template2_view.php');
    }
}