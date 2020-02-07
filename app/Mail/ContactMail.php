<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * @var array|Array
     */
    private $formData;

    public $to = [
        [
            'address' => 'codeceyhun@gmail.com',
            'name' => 'Ceyhun Yücel'
        ]
    ];

    /**
     * Create a new message instance.
     * @param Array $formData
     * @return void
     */
    public function __construct(Array $formData)
    {

        $this->formData = $formData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Firstcode İletişim')
            ->from($this->formData['email'], $this->formData['name'])
            ->to('codeceyhun@gmail.com', 'Ceyhun Yücel')
            ->markdown('main/contact/mail', ['formData' => $this->formData]);
    }
}
