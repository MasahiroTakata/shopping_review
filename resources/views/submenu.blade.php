<div class = 'subMenu'>
  <div>
    カテゴリーから探す
  </div>
  <div>
    @if(isset ($categorys))
      <ul>
      @foreach ($categorys as $category)
        <li>{{ $category->name }}</li>
      @endforeach
      </ul>
    @endif
  </div>
</div>