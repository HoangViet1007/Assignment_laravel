<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailCheckOut extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $cart ;
    public $name ;
    public $address ;
    public $phone ;
    public $email ;
    public $created_at ;
    public $total ;
    public function __construct($cart,$name,$address,$phone,$email,$created_at,$total)
    {
        $this->cart = $cart;
        $this->name = $name ;
        $this->address = $address ;
        $this->phone = $phone ;
        $this->email = $email ;
        $this->created_at = $created_at ;
        $this->total = $total ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('viettuyet10072001@gmail.com', 'Electro')->subject('Đơn hàng thành công !')->view('mail.sendEmail');
    }
}
