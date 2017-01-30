<?php

namespace App\Http\Middleware;

use Closure;
use Nette\Mail\Message;
use Nette\Mail\SmtpMailer;
class EmailMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
    {
        $rs =  $next($request);

        

        $mail = new Message;
        $mail->setFrom('18502128081@163.com')
            ->addTo($request->input('email'))
            ->setSubject('Test Dj8')
            ->setBody("Hello, My Dj8 is ");

        $mailer = new SmtpMailer([
            'host' => 'smtp.163.com',
            'username' => '18502128081@163.com',
            'password' => 'a3424252',
            /*'secure' => 'ssl',
            'context' =>  [
                'ssl' => [
                    'capath' => '/path/to/my/trusted/ca/folder',
                 ],
            ],*/
        ]);
        $mailer->send($mail);
        return $rs;
    }
}
