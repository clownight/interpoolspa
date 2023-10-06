<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('active',1)->get();
        return view('project',compact('projects'));
    }

    public function detail($id)
    {
        $project_detail = Project::find($id);
        return view('project_detail',compact('project_detail'));
    }

    public function  form()
    {
        $project = null;
        return view('project_form',compact('project'));
    }

    public function project_list()
    {
        $projects = Project::where('active',1)->paginate(15);
        return view('project_list',compact('projects'));
    }

    
    public function  saveproject(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'cover' => ['required'],
            'images' => ['required'],
        ]);
        
        
        $tags = [];

        if (isset($request->tag_pool)){
            $pool = ["tag"=>$request->tag_pool];
            array_push($tags, $pool);
        }
        if (isset($request->tag_sauna)){
            $pool = ["tag"=>$request->tag_sauna];
            array_push($tags, $pool);
        }
        if (isset($request->tag_steam)){
            $pool = ["tag"=>$request->tag_steam];
            array_push($tags, $pool);
        }
        if (isset($request->tag_onsen)){
            $pool = ["tag"=>$request->tag_onsen];
            array_push($tags, $pool);
        }
        if (isset($request->tag_hydrotherapy)){
            $pool = ["tag"=>$request->tag_hydrotherapy];
            array_push($tags, $pool);
        }


        $files = [];
        if ($request->file('images')){
            foreach($request->file('images') as $key => $file)
            {
                $file_name = "image_".time().rand(1,99).'.'.$file->extension();  
                $file->move(public_path('img/projects/'), $file_name);
                $files[]['url'] = "img/projects/".$file_name;
            }
        }
        $cover = "";
        if ($request->file('cover')){
            $file= $request->file('cover');
            $file_name = "cover_".time().rand(1,99).'.'.$file->extension();  
             $file->move(public_path('img/projects/'), $file_name);
            $cover = "img/projects/".$file_name;
        }

        $description =  "-";
        if($request->description != null){
            $description =$request->description;
        }


        $project = new Project;
        $project->name = $request->name;
        $project->size = $request->size;
        $project->description = $request->description;
        $project->location = $request->location;
        $project->customer_name = $request->customer_name;
        $project->tag = json_encode($tags);
        $project->cover = $cover;
        $project->images = json_encode($files);
        $project->save();


        return redirect('adminips/project_list');
    }

    function delproject($id){
        $project = Project::find($id);
        $project->active = 0;
        $project->save();
        return redirect('adminips/project_list');
    }

    function edit($id){
        $project = Project::find($id);
        return view('project_form_edit',compact('project'));
    }

    function update(Request $request,$id){

             
        $tags = [];

        if (isset($request->tag_pool)){
            $pool = ["tag"=>$request->tag_pool];
            array_push($tags, $pool);
        }
        if (isset($request->tag_sauna)){
            $pool = ["tag"=>$request->tag_sauna];
            array_push($tags, $pool);
        }
        if (isset($request->tag_steam)){
            $pool = ["tag"=>$request->tag_steam];
            array_push($tags, $pool);
        }
        if (isset($request->tag_onsen)){
            $pool = ["tag"=>$request->tag_onsen];
            array_push($tags, $pool);
        }
        if (isset($request->tag_hydrotherapy)){
            $pool = ["tag"=>$request->tag_hydrotherapy];
            array_push($tags, $pool);
        }


        $files = [];
        if ($request->file('images')){
            foreach($request->file('images') as $key => $file)
            {
                $file_name = "image_".time().rand(1,99).'.'.$file->extension();  
                $file->move(public_path('img/projects/'), $file_name);
                $files[]['url'] = "img/projects/".$file_name;
            }
        }
        $cover = "";
        if ($request->file('cover')){
            $file= $request->file('cover');
            $file_name = "cover_".time().rand(1,99).'.'.$file->extension();  
             $file->move(public_path('img/projects/'), $file_name);
            $cover = "img/projects/".$file_name;
        }

        $description =  "-";
        if($request->description != null){
            $description =$request->description;
        }

        $project = Project::find($id);
        $project->name = $request->name;
        $project->size = $request->size;
        $project->description = $request->description;
        $project->location = $request->location;
        $project->customer_name = $request->customer_name;
        $project->tag = json_encode($tags);
        if ($request->file('cover')){

            $project->cover = $cover;
        }
        if ($request->file('images')){

            $project->images = json_encode($files);
        }
        $project->save();
        return redirect('adminips/project_list');

    }
}
