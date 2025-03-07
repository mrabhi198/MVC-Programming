

@php
    $status = 'approved';
@endphp

@switch($status)
    @case('pending')
        <p>Your request is pending.</p>
        @break
    @case('approved')
        <p>Your request is approved.</p>
        @break
    @case('rejected')
        <p>Your request was rejected.</p>
        @break
    @default
        <p>Invalid status.</p>
@endswitch
