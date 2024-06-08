<?php

namespace Acer\BasePhp2\Controllers\Admin;

use Acer\BasePhp2\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}