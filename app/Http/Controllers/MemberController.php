<?php
use App\User;
namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $member = User::where('is_admin', 0)->paginate(10);
        return view('admin.member',compact('member'));
    }
}
