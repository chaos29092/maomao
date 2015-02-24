<?php

//队列任务 函数设置
class SendEmail {

    public function sendPrice()
    {
        $date = Input::all();

        Mail::send('emails.price', array('email'=>$date['email']),function($message){
            $message->to(Input::get('email'), 'inquiry')->subject('ZENO产品价格表');
        });

        Mail::send('emails.notice', array('email'=>$date['email']),function($message){
            $message->to('178399731@qq.com', 'inquiry')->subject('ZENO - 英语 - 价格表索取提醒');
        });
    }

    public function contactForm()
    {
        $date = Input::all();

        Mail::send('emails.inquiry', array('name'=>$date['contactname'],'email'=>$date['email'],'product'=>$date['product'],'country'=>$date['country'],'phone'=>$date['phone'],'mes'=>$date['mes']),function($message){
            $message->to(array('178399731@qq.com'), 'inquiry')->subject('ZENO - 英语 - 网站询盘');
        });
    }
}

//控制器本体
class PageController extends BaseController {

	public function index()
	{
		return View::make('page.index');
	}

	public function about()
	{
		return View::make('page.about');
	}

    public function contact()
	{
		return View::make('page.contact');
	}

    public function service()
	{
		return View::make('page.service');
	}

    public function colorDevice()
	{
		return View::make('products.color_device');
	}

    public function nocolorDevice()
	{
		return View::make('products.nocolor_device');
	}

    public function contactForm()
    {
        Queue::push('SendEmail@contactForm');

        return Redirect::to('/');
    }

    public function getPrice()
    {
        Queue::push('SendEmail@sendPrice');

        return Redirect::to('/');
    }
}
