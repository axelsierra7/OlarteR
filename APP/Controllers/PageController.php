<?php
class PageController extends Controller
{


    # code...

    public function home()
    {
        //require_once(__DIR__ . '/../Views/dashboard.view.php');
        $this->render('home', [], 'site');
    }
}
