<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class HomeController extends Controller
{
    public function home()
    {
        $projects = Project::limit(5)->get();
        return view('home',compact('projects'));
    }

    public function insert()
    {
        $project = new Project;
        $project->name = "โครงการบ้านเดี่ยว เชียงใหม่ นันทวัน ซีรีนเลค เชียงใหม่";
        $project->description = "โครงการบ้านเดี่ยว เชียงใหม่ นันทวัน ซีรีนเลค เชียงใหม่";
        $project->location = "เชียงใหม่";
        $project->customer_name = "นันทวัน ซีรีนเลค";
        $project->tag = '[{"tag":"pool"}]';
        $project->cover = "/img/003/01.jpg";
        $project->images = '[{"url":"/img/003/01.jpg"},{"url":"/img/003/02.jpg"},{"url":"/img/003/03.jpg"},{"url":"/img/003/04.jpg"} ]';
        $project->save();

        $project2 = new Project;
        $project2->name = "โครงการ ศุภาลัย ลำพูน";
        $project2->description = "โครงการ ศุภาลัย ลำพูน";
        $project2->location = "ลำพูน";
        $project2->customer_name = "ศุภาลัย";
        $project2->tag = '[{"tag":"pool"}]';
        $project2->cover = "/img/004/01.jpg";
        $project2->images = '[{"url":"/img/004/01.jpg"},{"url":"/img/004/02.jpg"},{"url":"/img/004/03.jpg"} ]';
        $project2->save();

        $project3 = new Project;
        $project3->name = "คุณฟ้า กรุงเทพฯ";
        $project3->description = "คุณฟ้า กรุงเทพฯ";
        $project3->location = "กรุงเทพมหานคร";
        $project3->customer_name = "คุณฟ้า กรุงเทพฯ";
        $project3->tag = '[{"tag":"pool"}]';
        $project3->cover = "/img/005/01.jpg";
        $project3->images = '[{"url":"/img/005/01.jpg"},{"url":"/img/005/02.jpg"},{"url":"/img/005/03.jpg"},{"url":"/img/005/04.jpg"} ]';
        $project3->save();
    }

    public function sendmail__(Request $request){
        dd($request);
    }
}

