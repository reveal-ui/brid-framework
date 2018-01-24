<div class="cards">
	<div class="card-content">
		<div class="header">
			<div class="subtitle is-6 is-uppercase">
				<i class="im im-info"></i>
				Recent Content
			</div>
		</div>
		<hr>
		<aside class="links-element is-uppercase">
			@foreach ($recent as $item)

			<p class="links-element-link">
				<a href="{{ url("/admin/content/{$item->id}/edit") }}" class="has-text-grey">
				{{ $item->title }}
				</a>
			</p>

			@endforeach
		</aside>
	</div>
</div>
