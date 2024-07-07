<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use app\Models\Article;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
 
    public function __construct(Article $article)
    {
        //เราสามารถส่ง Parameter มาจากที่อื่นได้โดยใช้ Constructor รับค่า
        $this->article = $article;
    }
 
    public function build()
    {
        //เวลาใช้งานดึงการแสดงผลจาก View เหมือนกับ Controller ทั่วไป
        $article = $this->article;
        return $this->subject('ลูกค้าติดต่อจากเว็บไซต์')
                    ->view('article.mail', compact('article') );
    }
}
