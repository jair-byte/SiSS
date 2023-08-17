<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\RegAlumno;

class AlumnoRegisteredMail extends Mailable
{
    use Queueable, SerializesModels;

    public $alumno;

    /**
     * Create a new message instance.
     *
     * @param  RegAlumno  $alumno
     * @return void
     */
    public function __construct(RegAlumno $alumno)
    {
        $this->alumno = $alumno;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('¡Bienvenido a la plataforma!')->view('emails.alumno_registered');
    }
}