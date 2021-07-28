<div class = 'subMenu'>
  <div class="search-category">
    カテゴリーから探す
  </div>
  <div>
    <ul>
    @if(isset ($categorys))
      @foreach ($categorys as $category)
        <li>
          <a href="{{ action('ShoppingController@categoryList', $category->id) }}">{{ $category->name }}</a>
        </li>
      @endforeach
    @endif
      <li>
        <a href="{{ action('ShoppingController@newProductsList') }}">新商品！</a>
      </li>
    </ul>
  </div>
</div>