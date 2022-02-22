@component('mail::message')
# Olá, um novo contato foi feito através do site.

### Nome: {{ $name }}
@if($phone)

### Telefone: {{ $phone }}

@endif
### E-mail: {{ $email }}

### Assunto: {{ $subject }}

### Mensagem:

{{ $mail_message }}

@endcomponent
