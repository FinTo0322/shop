<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $made = DB::select('SELECT * FROM orders WHERE status = "completed"');
        $made = count($made);
        $ongoing = DB::select('SELECT * FROM orders WHERE status != "completed" AND status != "cancelled"');
        $ongoing = count($ongoing);
        $sale = DB::select('SELECT * FROM products WHERE stock != 0');
        $sale = count($sale);
        $users = DB::select('SELECT * FROM users WHERE role != "admin"');
        $users = count($users);
        $recents = DB::select('SELECT o.order_id, u.first_name, u.last_name, o.time_placed, o.status FROM orders AS o INNER JOIN users AS u WHERE u.user_id = o.user_id ORDER BY time_placed desc LIMIT 5');

        return view("admin_dashboard", compact('made', 'ongoing', 'sale', 'users', 'recents'));
    }
    
}
