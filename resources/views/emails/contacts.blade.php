@component('mail::message')
# Email

From: {{ $msg["name"] }} \
Email: {{ $msg["email"] }} \
Subject: {{ $msg["subject"] }}

@component('mail::button', ['url' => 'https://www.google.com/'])
Visit Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
