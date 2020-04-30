@component('mail::message')
#{{ $user->name ? $user->name : '' }}さん
@component('mail::panel')
{!! nl2br( $posted->content ) !!}
@endcomponent
@endcomponent
