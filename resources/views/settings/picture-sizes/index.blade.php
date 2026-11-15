@vite(['resources/css/settings/picture-sizes/picture-sizes.css', 'resources/js/modal.js', 'resources/css/form.css'])
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
        <h2>Picture Sizes</h2>
        <button class="btn-primary" onclick="openModal('createSizeModal')">
          <i class="fa fa-plus"></i>
          Create Size
        </button>
      </div>
      <div class="table-responsive">
        <table class="themed-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Size Name</th>
              <th>Dimensions</th>
              <th>Price</th>
              <th class="hide-mobile">Description</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($picture_sizes as $picture_size)
            <tr>
              <td>{{ $picture_size->pic_size_id }}</td>
              <form action="{{ route('picture-sizes.update', ['picture_size' => $picture_size]) }}" method="post" id="edit-picture-size-{{ $picture_size->pic_size_id }}">
                @csrf
                @method('PATCH')
                <td>
                  <input type="text" name="pic_size_label" value="{{ $picture_size->pic_size_label }}" required>
                </td>
                <td>{{ $picture_size->pic_size_width }} * {{ $picture_size->pic_size_height }}</td>
                <td class="hide-mobile">
                  <input type="number" name="pic_size_price" value="{{ $picture_size->pic_size_price }}" step="0.01" class="price-input" required>
                </td>
              </form>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit size" id="edit-category" form="edit-picture-size-{{ $picture_size->pic_size_id }}">
                    <i class="fa fa-edit"></i>
                  </button>
                  <form action="{{ route('picture-sizes.destroy', ['picture_size' => $picture_size]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn-icon btn-delete" title="Delete size">
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
      <!-- Create Picture Size Modal -->
      <div id="createSizeModal" class="modal">
        <div class="modal-content">
          <div class="modal-header">
            <h3>Add New Picture Size</h3>
            <button
              type="button"
              class="modal-close"
              onclick="closeModal('createSizeModal')"
              aria-label="Close modal">
              <i class="fa fa-times"></i>
            </button>
          </div>

          <form action="{{ route('picture-sizes.store') }}" method="post" class="modal-form">
            @csrf
            <div class="form-field">
              <label for="pic_size_label">Label</label>
              <input
                type="text"
                name="pic_size_label"
                id="pic_size_label"
                placeholder="e.g. 4x6, 8x10"
                required />
            </div>

            <div class="form-field">
              <label for="pic_size_width">Width (inches)</label>
              <input
                type="number"
                name="pic_size_width"
                id="pic_size_width"
                placeholder="Width"
                min="0.1"
                step="0.1"
                required />
            </div>

            <div class="form-field">
              <label for="pic_size_height">Height (inches)</label>
              <input
                type="number"
                name="pic_size_height"
                id="pic_size_height"
                placeholder="Height"
                min="0.1"
                step="0.1"
                required />
            </div>

            <div class="form-field">
              <label for="pic_size_price">Price</label>
              <div class="price-input-wrapper">
                <!-- <span class="currency-symbol">£</span> -->
                <input
                  type="number"
                  name="pic_size_price"
                  id="pic_size_price"
                  value="0.01"
                  min="0.01"
                  step="0.01"
                  placeholder="0.00"
                  required />
              </div>
            </div>

            <div class="modal-actions">
              <button
                type="button"
                class="btn-secondary"
                onclick="closeModal('createSizeModal')">
                <i class="fa fa-times"></i>
                Cancel
              </button>
              <button type="submit" class="btn-primary">
                <i class="fa fa-plus"></i>
                Create Size
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>