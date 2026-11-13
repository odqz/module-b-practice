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
        <button class="btn-primary">
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
            <tr>
              <td>1</td>
              <td>4x6</td>
              <td>4" x 6"</td>
              <td>£5.00</td>
              <td class="hide-mobile">Standard photo size</td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit size">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button class="btn-icon btn-delete" title="Delete size">
                    <i class="fa fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>5x7</td>
              <td>5" x 7"</td>
              <td>£8.00</td>
              <td class="hide-mobile">Medium print</td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit size">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button class="btn-icon btn-delete" title="Delete size">
                    <i class="fa fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>3</td>
              <td>8x10</td>
              <td>8" x 10"</td>
              <td>£12.00</td>
              <td class="hide-mobile">Large print</td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit size">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button class="btn-icon btn-delete" title="Delete size">
                    <i class="fa fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>11x14</td>
              <td>11" x 14"</td>
              <td>£20.00</td>
              <td class="hide-mobile">Extra large print</td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit size">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button class="btn-icon btn-delete" title="Delete size">
                    <i class="fa fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-layout>