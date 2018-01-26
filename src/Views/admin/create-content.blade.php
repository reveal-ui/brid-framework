@extends('framework::layouts.dashboard')
@section('content')

<div class="widgets">
	@include(jarvis_views("partials.messages"))
</div>

<div class="section"></div>

<section class="">

	<div class="columns">

		<div class="column dash-main">

			<div class="cards">
				<div class="card-content">
					<div class="subtitle is-5 is-uppercase">
						<i class="im im-note-o"></i> Create Content
					</div>
					@include('backstory::forms.create')
				</div>
			</div>

			<div class="section"></div>

		</div>

		<div class="column is-3 sidebar-right">
			@include("framework::partials.cards.recent-content")
		</div>

	</div>
</section>

@endsection @include("backstory::partials.scripts")
