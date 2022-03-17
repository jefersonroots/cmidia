<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class MagicLoginLink extends Mailable
{
  use Queueable, SerializesModels;

  public $plaintextToken;
  public $expiresAt;

  public function __construct($plaintextToken, $expiresAt)
  {
    $this->plaintextToken = $plaintextToken;
    $this->expiresAt = $expiresAt;
  }

  public function build()
  {
    return $this->view('chat2',[
      'url' => URL::temporarySignedRoute('verify-login', $this->expiresAt, [
        'token' => $this->plaintextToken,
      ]),
    ]);
    
  }
}

?>