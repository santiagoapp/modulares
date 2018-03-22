<ul class="stack-link">
	@foreach($items as $menu_item)
	<li><a href="{{ $menu_item->link() }}">{{ $menu_item->title }} <small>(320 productos)</small></a></li>
	@endforeach
</ul>
