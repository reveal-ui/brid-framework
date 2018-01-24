@extends(Jarvis::views('layouts.dashboard'))
@section('dashboard_name', "Content Admin")
@section('content')
<div class="section"></div>
<div class="widgets">

</div>

<section class="">

	<div class="columns">

		<div class="column dash-main elm-border-color-whitesmoke">

			<div class="cards">
				<div class="card-content">

					<div class="header">
						<div class="subtitle is-5 is-uppercase">
							<i class="im im-note-o elm-color-lightgray"></i>
							Content
						</div>
					</div>
					<hr>
					<a href="/admin/content/create" class="button is-info">Add Content</a>
					 {{--  @include('backstory::components.modals-categories')  --}}

					<div class="collections-elm">
						<div class="collection-elm flex-elm-left is-uppercase" data-module="">
							<div class="elm-wrapper">
								<div class="columns ">
									<div class="column">Title</div>
									<div class="column is-2">Author</div>
									<div class="column is-2">Actions</div>
								</div>
							</div>
						</div>
						@foreach ($content as $item)
							<div class="collection-elm flex-elm-left" data-module="">
							<div class="elm-wrapper">
								<div class="columns">
									<div class="column">{{ $item->title }}</div>
									<div class="column is-2">{{ $item->by }}</div>
									<div class="column is-2">
										<a href="/admin/content/{{ $item->id }}/edit" class="button is-info is-small elm-rounded">Edit</a>
										<a href="/content/delete" class="button is-small">Delete</a>
									</div>
								</div>
							</div>
							</div>
						@endforeach
					</div>

					{{ $content->links('backstory::components.paginate') }}
				</div>
			</div>

		</div>

		<div class="column is-3 sidebar-right">

			<div class="cards">
				<div class="card-content">
					<div class="header">
						<div class="subtitle is-6 is-uppercase flex-elm"><i class="im im-radio-button-circle"></i>Add Category</div>
					</div>
					<hr>
					@include('backstory::forms.categories')

					<hr>
					<div class="subtitle is-6 is-uppercase flex-elm"><i class="im im-radio-button-circle"></i> Categories</div>
					@foreach ($categories as $item)
					 <button type="button" class="button">{{ $item->name }}</button:type>
					@endforeach

				</div>
			</div>

		</div>

	</div>
</section>

@endsection
