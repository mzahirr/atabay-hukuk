@component('mail::message')
# {{trans('frontend.contact_request')}}

@component('mail::table')
| Name       | Email         | Phone  |
| ------------- |:-------------:| --------:|
| {{$data['name']}}      | {{$data['email']}}      | {{$data['phone']}}      |
@endcomponent

@component('mail::panel')
{{$data['message']}}
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent