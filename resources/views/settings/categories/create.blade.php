<x-layout>
  <form action="/settings/categories" method="post">
    @csrf
    <div class="field">
      <label for="cat-name">Category name</label>
      <input type="text" id="cat-name" name="cat_name" required>
    </div>
    <div class="action"><button type="submit">Create category</button></div>
  </form>
</x-layout>