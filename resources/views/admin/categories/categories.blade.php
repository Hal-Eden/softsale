<ul>
    @foreach($categories as $category)
        <li>{{ $category->name }}
            @if(!$category->children->isEmpty())
                @include('admin.categories.categories', ['categories' => $category->children])
            @endif
        </li>
    @endforeach
</ul>