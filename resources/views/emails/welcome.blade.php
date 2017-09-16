@component('mail::message')
    # Introduction

    Thank you so much for registering with us at GIT-HRMA, {{ $user->full_name }}
    Find below your login credentials
    Email: {{ $user->email  }}
    Password: {{ $user->password }}

    Please endeavour to change your password as soon as you get this mail

    @component('mail::button', ['url' => 'http://localhost/hrms/signin'])
        Return to Site
    @endcomponent

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
