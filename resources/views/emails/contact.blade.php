@component('mail::message')
# Nouveau message de contact

**Nom et Prénom :** {{ $details['name'] }}  
**Email :** {{ $details['email'] }}  
**Téléphone :** {{ $details['phone'] }}

{{ $details['message'] }}

@endcomponent
