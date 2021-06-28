<?php

namespace App\Notifications\Product;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class Product extends Notification
{
    private $product;

    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @param \App\Models\Product\Product $product
     */
    public function __construct(\App\Models\Product\Product $product)
    {
        $this->product = $product;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $product = $this->product;
        return (new MailMessage)
            ->from('info@tradeey.com', 'Tradeey')
            ->greeting('Merhaba')
            ->subject("{$this->product->name} adlı Ürününüz onaylanmistir")
            ->line("{$this->product->name} adlı Ürününüz onaylanmistir.")
            ->view('frontend.mail.confirm.product' , compact('product'))
            ->line('Bizi tercih ettiğiniz için teşekkürler!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
