@vite(['resources/css/settings/categories/category.css', 'resources/js/modal.js', 'resources/css/form.css'])
<x-layout>
  <div class="dashboard-layout">
    <x-sidebar settings="active"></x-sidebar>
    <div id="content">
      <div class="back-link">
        <a href="{{ route('settings.index') }}">
          <i class="fa fa-arrow-left"></i>
          Back to Settings
        </a>
      </div>
      <div class="page-header">
        <h2>Categories</h2>
        <button class="btn-primary" onclick="openModal('createCategoryModal')">
          <i class="fa fa-plus"></i>
          Create Category
        </button>
      </div>
      <div class="table-responsive">
        <table class="themed-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Category Name</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
            <tr>
              <td>{{ $category->cat_id }}</td>
              <td>{{ $category->cat_name }}</td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit category">
                    <i class="fa fa-edit"></i>
                  </button>
                  <form action="/settings/categories/{{ $category->cat_id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn-icon btn-delete" title="Delete category">
                      <i class="fa fa-trash"></i>
                    </button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- Create Category Modal -->
      <div id="createCategoryModal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <h3>Add New Category</h3>
            <button
              type="button"
              class="modal-close"
              onclick="closeModal('createCategoryModal')"
              aria-label="Close modal">
              <i class="fa fa-times"></i>
            </button>
          </div>
          <form action="{{ route('categories.store') }}" method="post" class="modal-form">
            @csrf
            <div class="form-field">
              <label for="cat_name">Category Name</label>
              <input
                type="text"
                name="cat_name"
                id="cat_name"
                placeholder="e.g. Weddings, Sports, Events"
                required />
            </div>
            <div class="modal-actions">
              <button
                type="button"
                class="btn-secondary"
                onclick="closeModal('createCategoryModal')">
                <i class="fa fa-times"></i>
                Cancel
              </button>
              <button type="submit" class="btn-primary">
                <i class="fa fa-plus"></i>
                Create Category
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>