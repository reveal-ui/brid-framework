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
					<a href="/admin/content/{{ $item->id }}/edit" class="button is-info is-small">Edit</a>
					<a href="/content/delete" class="button is-small">Delete</a>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
