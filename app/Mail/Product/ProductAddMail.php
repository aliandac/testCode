<?php

namespace App\Mail\Product;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductAddMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var
     */
    public $subject;

    public $request;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $request , $subject)
    {
        $this->subject = $subject;
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $request = $this->request;

        return $this->view('frontend.mail.product.product_add',compact( 'request' ));
    }
}
