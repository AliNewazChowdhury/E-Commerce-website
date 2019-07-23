@component('mail::message')


Hello Ishmam,<br>
{{$data->info_msg}}

<br>
<br>
Sent by,<br>
{{$data->info_name}}<br>
{{$data->info_email}}<br>
{{$data->info_phone}}<br>

@endcomponent
