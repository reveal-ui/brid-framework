@extends(Jarvis::views('layouts.dashboard'))
@section('content')
<div class="section"></div>
    <div class="widgets">
	<div class="columns">
		<div class="column">

			<div class="box">
					<div class="subtitle is-5 is-uppercase flex-elm elm-color-lightgrey"> <i class="im im-note-o elm-color-blue"></i> Content</div>
					<hr class="elm-bg-whitesmoke">
					<p class="is-uppercase">
						<span class="elm-color-blue">{{ countStories() }} Articles Posted</span>
					</p>
			</div>

		</div>

		<div class="column">
			<div class="box">
					<div class="subtitle is-5 is-uppercase flex-elm"> <i class="im im-users"></i> Users</div>
					<hr class="elm-bg-whitesmoke">
					<p class="is-uppercase">
						<span class="elm-color-green">
							{{ countUsers() }} Registered Users
						</span>
					</p>
			</div>
		</div>

		<div class="column">
			<div class="box">
				<div class="subtitle is-5 is-uppercase flex-elm"> <i class="im im-control-panel"></i> Options</div>
				<hr class="elm-bg-whitesmoke">
				<p class="is-uppercase">
						<span class="elm-color-orange">{{ count(envSettings()->getContent()) }} Env Options</span>
					</p>
			</div>
		</div>

		<div class="column">
			<div class="box">
				<div class="subtitle is-5 is-uppercase flex-elm"> <i class="im im-gear"></i> System Logs</div>
				<hr class="elm-bg-whitesmoke">
				<p class="is-uppercase">
					<span class="elm-color-red" >{{ count(errorLogs()->all()) }} System Errors Logged</span>
				</p>
			</div>
		</div>

	</div>

</div>
<div class="section"> </div>

<section class="">

	<div class="columns">

		<div class="column dash-main">

			<div class="cards">
				<div class="card-content">
					<div class="header">
						<div class="subtitle is-5 is-uppercase"> <i class="im im-bar-chart"></i> Analytics</div>
					</div>
					<p class="">
						Quia ex et reprehenderit cum sit maxime. Lorem ipsum dolor sit amet consectetur
					</p>
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
