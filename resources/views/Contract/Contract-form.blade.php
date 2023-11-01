@component('mail::message')

<h3>New Message from {{$contract_form_data['email']}}</h3>

<p>Name: {{$contract_form_data['name']}}</p>

<p>Phone: {{$contract_form_data['phone']}}</p>

<p>Message: {{$contract_form_data['message']}}</p>

@endcomponent