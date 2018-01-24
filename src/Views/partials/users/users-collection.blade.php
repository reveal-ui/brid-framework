<div class="collection-elm flex-elm-left is-uppercase" data-module="">
	<div class="elm-wrapper">
		<div class="columns elm-color-gray">
			<div class="column is-1">#ID</div>
			<div class="column">Name</div>
			<div class="column is-3">Start Date</div>
			<div class="column is-1">View</div>
		</div>
	</div>
</div>
@foreach ($users as $item)

<div class="collection-elm flex-elm-left is-uppercase" data-module="">
	<div class="elm-wrapper">
		<div class="columns ">
			<div class="column is-1">
				{{ $item->id }}
			</div>
			<div class="column">
				{{ $item->name }}
			</div>
			<div class="column is-3">
				<span class="elm-color-gray">Created</span>: {{ $item->created_at->diffForHumans() }}
			</div>
			<div class="column is-1">
				<a href="{{ url("/admin/users/$item->id/edit") }}" class="button is-small"> View
				</a>
			</div>
		</div>
	</div>
</div>

@endforeach
