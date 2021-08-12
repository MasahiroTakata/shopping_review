<div class = 'subMenu'>
  <div class="categorys">
    <div class="search-category">
      カテゴリーから探す
    </div>
    <ul>
    @if(isset ($categorys))
      @foreach ($categorys as $category)
        <li>
          <a href="{{ action('ShoppingController@categoryList', $category->id) }}">{{ $category->name }}</a>
        </li>
      @endforeach
    @endif
    </ul>
  </div>
  <div class="newInfos">
    <div class="search-category">
      New!
    </div>
    <ul>
      <li>
        <a href="{{ action('ShoppingController@newProductsList') }}">新商品！</a>
      </li>
    </ul>
  </div>
</div>