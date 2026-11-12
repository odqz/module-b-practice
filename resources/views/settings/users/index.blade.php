<x-layout>
  <div class="dashboard-layout">
    <x-sidebar settings="active"></x-sidebar>
    <div id="content">
      <div class="back-link">
        <a href="settings.html">
          <i class="fa fa-arrow-left"></i>
          Back to Settings
        </a>
      </div>
      <div class="page-header">
        <h2>Users</h2>
        <button class="btn-primary">
          <i class="fa fa-plus"></i>
          Create User
        </button>
      </div>
      <div class="table-responsive">
        <table class="themed-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th class="hide-mobile">Created</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Admin User</td>
              <td>admin@example.com</td>
              <td>
                <span class="badge badge-primary">Administrator</span>
              </td>
              <td class="hide-mobile">January 15, 2025</td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit user">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button class="btn-icon btn-delete" title="Delete user">
                    <i class="fa fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Staff Member</td>
              <td>staff@example.com</td>
              <td>
                <span class="badge badge-info">Staff</span>
              </td>
              <td class="hide-mobile">March 10, 2025</td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit user">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button class="btn-icon btn-delete" title="Delete user">
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