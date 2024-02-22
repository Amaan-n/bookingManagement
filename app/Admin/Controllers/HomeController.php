<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use OpenAdmin\Admin\Admin;
use OpenAdmin\Admin\Controllers\Dashboard;
use OpenAdmin\Admin\Layout\Column;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Layout\Row;
use App\Models\Worker;
use App\Models\Services;
use App\Models\Customer;
use App\Models\Bookings;

class HomeController extends Controller
{
    public function index(Content $content)
    {
        $worker = Worker::all();
        $Booking = Bookings::all(); 
        $content->header('View...');        
        return $content->view('view',[
            'worker' => $worker ,
            'Booking' => $Booking ,
        ]);
        
    }
}
