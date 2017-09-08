<?php
class NewUserController extends Controller{

    public $model;
    public $view;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new ModelNewUser();

    }

    public function action_index()
    {
        $data = $this->model->get_data();
        $this->view->generate('user_registr.php','template2_view.php',$data);

    }
}