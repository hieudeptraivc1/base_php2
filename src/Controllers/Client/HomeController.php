<?php 

namespace Acer\BasePhp2\Controllers\Client;

use Acer\BasePhp2\Commons\Controller;


class HomeController extends Controller
{
    public function index() {
        $name = 'Acer';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}