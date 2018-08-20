@foreach($categories as $category)
    <option value={{ $category->id }}>{{ html_entity_decode($sub).' '.$category->name }}
        @if(!$category->children->isEmpty())
            @include('admin.categories.selectcats', ['categories' => $category->children, 'sub' => $sub.'&nbsp;&nbsp;&nbsp;'])
        @endif
    </option>
@endforeach