<?php

namespace Acer\BasePhp2\Controllers\Admin;

use Acer\BasePhp2\Commons\Controller;
use Acer\BasePhp2\Commons\Helper;
use Acer\BasePhp2\Models\Statistical;

class DashboardController extends Controller
{
    
    private Statistical $statistical;
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
        // $statisticals = $this->statistical->countProductsByCategory()
        // Helper::debug($this->statistical->countProductsByCategory());
        //     die;
        // $this->renderViewAdmin('dashboard', [
        //     'statistical' => $statisticals
        // ]);
    }

}