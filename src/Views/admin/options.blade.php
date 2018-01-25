@extends(Jarvis::views('layouts.dashboard'))
@section('dashboard_name', "Env Options")
@section('content')

<section class="">

	<div class="columns">

		<div class="column dash-main">

			<div class="cards">
				<div class="card-content">
					<div class="header">
						<div class="subtitle is-5 is-uppercase">
							 <i class="im im-control-panel"></i>{{ count($options )}} Env Options
						</div>
					</div>

					<hr>

					<div class="collections-elm">
						@foreach ($options as $item => $value)
							<div class="collection-elm">
								<div class="columns">
									<div class="column is-3">{{ $item }}</div>
									<div class="column">{{ $value }}</div>
								</div>

							</div>
						@endforeach
					</div>

				</div>
			</div>

			<div class="section"></div>

		</div>

		<div class="column is-3 sidebar-right">
			<div class="cards">




	<div class="card-content">
		<div class="header">
			<div class="subtitle is-5">
			<i class="im im-info"></i>
			 Dashboard Sidebar
			 </div>
		</div>
		<hr>

		<p class="class">
			Quia ex et reprehenderit cum sit maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam temporibus deleniti
			ex ut sint eveniet dicta similique aut neque unde dolorum nobis, quidem blanditiis impedit reiciendis consectetur eligendi
			quibusdam, saepe quam, laboriosam ducimus atque id! Nesciunt porro dolores mollitia inventore exercitationem, quae fugit
			fuga quidem autem accusantium quo dolor et esse consectetur ad eius. Ab nesciunt alias deserunt magni ullam asperiores
			quos corrupti velit inventore tempore iure, unde similique nihil voluptas magnam cum esse dignissimos at eveniet repudiandae.
			Praesentium temporibus nesciunt maxime aliquam architecto sed doloremque, id libero, placeat esse totam repellendus fugiat
			consequatur blanditiis nulla ullam similique unde accusamus?
		</p>
	</div>
</div>

		</div>

	</div>
</section>

@endsection
