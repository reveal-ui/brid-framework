@extends('framework::layouts.dashboard')
@section('dashboard_name', "Env Options")
@section('content')
<div class="section"></div>
<section class="">

	<div class="columns">

		<div class="column dash-main">

			<div class="cards">
				<div class="card-content">
					<div class="header">
						<div class="subtitle is-5 is-uppercase">
							 <i class="im im-control-panel"></i> System Logs
						</div>
					</div>

					<div class="collections-elm">
						<div class="collection-elm">
							<div class="columns is-uppercase is-size-6">
								<div class="column is-1">
									Level
								</div>
								<div class="column">
									Message
								</div>
								<div class="column is-2">
									Date
								</div>
								<div class="column is-1">
									View
								</div>
							</div>
						</div>
						@foreach ($logs as $item => $log)
							<div class="collection-elm">
								<div class="columns">
									<div class="column is-1 is-capitalized">{{ $log['level'] }}</div>
									<div class="column is-size-7">
												{{ str_limit($log['text'], 200) }}
									</div>
									<div class="column is-size-7 is-2">
										{{ $log['date'] }}
									</div>
									<div class="column is-1">
									<a href="" class="button is-small">View</a>
									</div>
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
