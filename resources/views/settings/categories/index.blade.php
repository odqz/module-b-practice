<x-layout>
  @foreach($categories as $category)
    <div>
      <p>{{ $category->cat_name }}</p>
    </div>
  @endforeach
</x-layout>