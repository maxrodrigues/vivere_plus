@component('mail::message')
# Olá, um novo contato foi feito através do site.

### Nome: {{ $name }}

### E-mail: {{ $email }}

### Assunto: {{ $subject }}

### Mensagem:

{{ $mail_message }}

@endcomponent
