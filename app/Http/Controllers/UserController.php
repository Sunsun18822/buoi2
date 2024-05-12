<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
{
	echo "index";
    return view("user.index");
}
public function show()
{
	echo "show";
    return view("user.show");
}
public function edit($id)
{
	echo "edit-".$id;
    return view("user.edit",["userid"=>$id]);
}
public function list($page=1)
{
	echo "page-".$page;
    $title="Danh sách";
	$data = ["name"=>"Nguyễn Thị Thảo Xuân","lop"=>"CCQ2211I"];
	return view("user.list",compact("title","data"));

}

}
