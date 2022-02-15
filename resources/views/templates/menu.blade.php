@foreach ($items as $menu_item)
<li class="@if($menu_item->route == Route::getCurrentRoute()->getName() ) active @endif"><a href="{{ $menu_item->link() }}">{{ $menu_item->title }}</a></li>
@endforeach