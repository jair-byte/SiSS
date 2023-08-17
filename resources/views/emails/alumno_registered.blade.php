{{-- resources/views/emails/alumno_registered.blade.php --}}

<h1>Bienvenido a la plataforma</h1>

<p>Hola {{ $alumno->correo }},</p>

<p>Te has registrado correctamente en nuestra plataforma. A continuación, encontrarás los detalles de tu cuenta:</p>

<p>Correo electrónico: {{ $alumno->correo }}</p>
<p>Contraseña: {{ $alumno->pass }}</p>

<p>Con estos datos, ahora puedes acceder a la plataforma.</p>

<p>¡Gracias por unirte!</p>
