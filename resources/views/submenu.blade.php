<div class = 'subMenu'>
  <div class="search-category">
    カテゴリーから探す
  </div>
  <div>
    @if(isset ($categorys))
      <ul>
      @foreach ($categorys as $category)
        <li>
          <a href="{{ action('ShoppingController@categoryList', $category->id) }}">{{ $category->name }}</a>
        </li>
      @endforeach
      </ul>
    @endif
  </div>
</div>