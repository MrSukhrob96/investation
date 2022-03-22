<?php

namespace App\Http\Controllers;

use App\Services\CodeGenerator;
use Illuminate\Http\Request;

class CabinetController extends Controller
{

    public function __construct()
    {
        $this->middleware("auth");
    }

    public function index()
    {

        return view("cabinet")->with(["code" => CodeGenerator::generate()]);
    }

    public function store()
    {
    }

    public function openAcctForm()
    {
        return view("admin.pages.open_acct");
    }

    public function openUsersList()
    {
        return view("admin.pages.users");
    }

    public function investationsPage()
    {
        
    }

}
