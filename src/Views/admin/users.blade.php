@extends(Jarvis::views('layouts.dashboard'))
@section("dashboard_name", "User Admin")
@section('content')

@include(jarvis_views("partials.messages"))

<section class="">

	<div class="columns">

		<div class="column dash-main">

			<div class="cards">
				<div class="card-content">
					<div class="header">
						<div class="subtitle is-5 is-uppercase">
							<i class="im im-radio-button-circle"></i> Users
						</div>
					</div>
					@include("framework::partials.users.users-collection")
				</div>
			</div>

			<div class="section"></div>
			<div class="cards">
				<div class="card-content">
					<div class="header">
						<div class="subtitle is-5 is-uppercase">
							<i class="im im-radio-button-circle"></i>
							Manage Abilities
						</div>

					</div>
					<p class="elm-color-gray"></p>
					@component('dashauth::components.privileges')
					@endcomponent
				</div>
			</div>



		</div>

		<div class="column is-3 sidebar-right">
			<div class="cards">

				<div class="card-content">
					<div class="header">
						<div class="subtitle is-6 is-uppercase">
							<i class="im im-radio-button-circle"></i>
							Add New User
						</div>
					</div>
					<hr>
					<div class="form-element">
						@include("framework::forms.add-users")
					</div>


				</div>
			</div>

		</div>

	</div>
</section>

@endsection
