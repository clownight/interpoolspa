<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ArticleController extends Controller
{
    public function create()
    {
        return view('article.create');
        
    }
    public function store(Request $request)
    {
        
        $requestData = $request;
        $article = new Article;
        $article->name = $requestData->name;
        $article->email = $requestData->email;
        $article->phonenumber = $requestData->phone;
        $article->message = $requestData->message;
        $article->save();

        //ส่งเมล์หลังจากสร้าง Article 
        $this->testmail($article->id);
        return redirect('thankyou');
    }

    public function testmail($id)
    {
        $article = Article::findOrFail($id);
        $email = "watcharagiat.bo@gmail.com";
        //หรือ ใช้ relationship เรียกจากตาราง user
        //$email = $article->user->email; 
         
        Mail::to($email)->send(new ContactMail($article));
    }
}