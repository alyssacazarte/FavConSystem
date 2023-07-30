<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConfirmationEmail extends Notification
{
    use Queueable;

    protected $message;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($message)
    {
        $this->data = $data;

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
//     public function toMail($notifiable)
//     {
//         $email = new \SendGrid\Mail\Mail(); 
//         $email->setFrom("jesamae.salado@student.passerellesnumeriques.org", "Example User");
//         $email->setSubject("Sending with SendGrid is Fun");
//         $email->addTo("leenunuyaa@gmail.com", "Example User");
//         $email->addContent("text/plain", "and easy to do anywhere, even with PHP");
//         $email->addContent("text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
// );
//         $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
//         try {
//         $response = $sendgrid->send($email);
//         print $response->statusCode() . "\n";
//         print_r($response->headers());
//         print $response->body() . "\n";
//         } catch (Exception $e) {
//          echo 'Caught exception: '. $e->getMessage() ."\n";
// }
    
//     }
    public function build()
    {
        $address = 'jesamae.salado@student.passerellesnumeriques.org';
        $subject = 'This is a demo!';
        $name = 'Jane Doe';

        return $this->view('emails.test')
                    ->from($address, $name)
                    ->cc($address, $name)
                    ->bcc($address, $name)
                    ->replyTo($address, $name)
                    ->subject($subject)
                    ->with([ 'test_message' => $this->data['message'] ]);
    
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