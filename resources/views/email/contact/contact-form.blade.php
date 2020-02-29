@component('mail::message')
# Introduction

The body of your message.
Name :{{ $data['name'] }}
Email :{{ $data['email'] }}
Description :{{ $data['description'] }}

Thanks,<br>
@endcomponent
