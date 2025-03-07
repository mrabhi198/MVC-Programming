

@switch($role)
    @case('admin')
        <p>full access</p>
        @break
    @case('teacher')
        <p>limited access</p>
        @break
    @case('viewer')
        <p>only view access</p>
        @break
    @default
        <p>Invalid role</p>
@endswitch
