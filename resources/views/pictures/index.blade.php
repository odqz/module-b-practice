@vite(['resources/css/pictures.css'])
<x-layout>
  <div class="dashboard-layout">
    <x-sidebar pictures="active"></x-sidebar>
    <div id="content">
      <div class="page-header">
        <h2>Pictures</h2>
        <button class="btn-primary">
          <i class="fa fa-upload"></i>
          Upload Pictures
        </button>
      </div>
      <div class="table-responsive">
        <table class="themed-table">
          <thead>
            <tr>
              <th>Preview</th>
              <th>Event</th>
              <th>Event Category</th>
              <th>Upload Date</th>
              <th>File path</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="picture-preview">
                  <i class="fa fa-image"></i>
                </div>
              </td>
              <td>Portsmouth Graduation 2025</td>
              <td>Graduation</td>
              <td>July 1, 2025</td>
              <td><a href="#">private-eventIMG_1234.jpg</a></td>
              <td>
                <span class="status-badge status-active">Active</span>
              </td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit picture">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button
                    class="btn-icon btn-delete"
                    title="Delete picture"
                  >
                    <i class="fa fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="picture-preview">
                  <i class="fa fa-image"></i>
                </div>
              </td>
              <td>Summer Dog Show</td>
              <td>Dog Show</td>
              <td>August 15, 2025</td>
              <td><a href="#">public-event/IMG_5678.jpg</a></td>
              <td>
                <span class="status-badge status-active">Active</span>
              </td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit picture">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button
                    class="btn-icon btn-delete"
                    title="Delete picture"
                  >
                    <i class="fa fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="picture-preview">
                  <i class="fa fa-image"></i>
                </div>
              </td>
              <td>Portsmouth Graduation 2025</td>
              <td>Graduation</td>
              <td>July 1, 2025</td>
              <td><a href="#">private-event/IMG_9012.jpg</a></td>
              <td>
                <span class="status-badge status-inactive">Inactive</span>
              </td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit picture">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button
                    class="btn-icon btn-delete"
                    title="Delete picture"
                  >
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