@extends('framework::layouts.dashboard')
@section("dashboard_name", "User Admin - Edit")
@section('content')
<div class="section">
	@include(jarvis_views("partials.messages"))
</div>

<section class="">

	<div class="columns">

		<div class="column dash-main">

			<div class="cards">
				<div class="card-content">
					<div class="header">
						<div class="subtitle is-5 is-uppercase">
							<i class="im im-users"></i> User : {{ $user->name }}
						</div>
					</div>
					<div class="collections-elm">
						<div class="collection-elm">
							Name : {{ $user->name }}
						</div>
						<div class="collection-elm">
							Email : {{ $user->email }}
						</div>
						<div class="collection-elm">
							Created : {{ $user->created_at->diffForHumans() }}
						</div>
					</div>
				</div>
			</div>

			<div class="section"></div>

			<div class="cards">
				<div class="card-content">

					@if ( count($user->stories) > 0)
					<div class="header">
						<div class="subtitle is-5 is-uppercase">
							<i class="im im-note-o"></i> Articles Posted {{ count($user->stories )}}
						</div>
					</div>
					@include('framework::partials.content.collection', ['content' => $user->stories ])
					@else

					<div class="section elm-color-gray has-text-centered is-uppercase is-3">
						<p>
							{{ $user->name }} has not posted any content
						</p>
					</div>
					@endif

				</div>
			</div>

			<div class="section"></div>

		</div>

		<div class="column is-3 sidebar-right">


			<div class="cards">
				<div class="card-content">
					<div class="subtitle is-6 is-uppercase flex-elm">
						<i class="im im-radio-button-circle"></i>
						Roles
					</div>
					<hr>
					@component("dashauth::forms.roles", [ "user" => $user ]) @slot('btn_class') button is-link is-outlined is-uppercase
					elm-rounded @endslot @endcomponent

				</div>
			</div>

		</div>

	</div>
</section>

@endsection
