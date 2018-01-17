@if(count($user->social()) > 1)
<ul>
@foreach($user->social() as $social)

	<li>{{ config("social.services.{$social->service}.name") }}</li>

@endforeach
</ul>
@endif 