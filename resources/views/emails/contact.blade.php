@component('mail::message')
    # New Message From E-News

    Name: {{ $data['name'] }}
    Email: {{ $data['email'] }}
    Phone Number: {{ $data['phone'] }}
    Message: {{ $data['message'] }}


    @component('mail::button', ['url' => '/welcome'])

    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
