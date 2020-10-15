<?php

namespace App\Mail;

use App\Artikle;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\User;

class ArtiklePublishMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $userEditor;
    protected $userArtikle;
    protected $artikle;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $userEditor, $userArtikle, $artikle)
    {
        $this->userEditor = $userEditor;
        $this->userArtikle = $userArtikle;
        $this->artikle = $artikle;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')
                ->view('mail.artiklePublishMail')
                ->with([
                    'userEditor' => $this->userEditor->name,
                    'userArtikle' => $this->userArtikle,
                    'artikle' => $this->artikle
                ]);
    }
}
