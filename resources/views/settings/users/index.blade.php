@vite(['resources/css/settings/users/users.css', 'resources/js/modal.js', 'resources/css/form.css'])
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
        <h2>Users</h2>
        <button class="btn-primary" onclick="openModal('createUserModal')">
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
            @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <span class="badge badge-primary">Administrator</span>
              </td>
              <td class="hide-mobile">January 15, 2025</td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit user">
                    <i class="fa fa-edit"></i>
                  </button>
                  <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn-icon btn-delete" title="Delete user">
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
      <!-- Create User Modal -->
      <div id="createUserModal" class="modal">
        <div class="modal-content" style="max-width: 600px">
          <div class="modal-header">
            <h3>Create New User</h3>
            <button
              type="button"
              class="modal-close"
              onclick="closeModal('createUserModal')"
              aria-label="Close modal">
              <i class="fa fa-times"></i>
            </button>
          </div>
          <form class="modal-form">
            <div class="form-field">
              <label for="user_name">Name</label>
              <input
                type="text"
                name="name"
                id="user_name"
                placeholder="Full Name"
                required />
            </div>
            <div class="form-field">
              <label for="user_email">Email</label>
              <input
                type="email"
                name="email"
                id="user_email"
                placeholder="Email Address"
                required />
            </div>
            <div class="form-field">
              <label for="user_password">Password</label>
              <input
                type="password"
                name="password"
                id="user_password"
                placeholder="Password"
                pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$"
                title="Password must be at least 8 characters, include 1 uppercase, 1 lowercase, and 1 number."
                required />
              <small class="form-hint">
                Password must be at least 8 characters, include 1 uppercase, 1
                lowercase, and 1 number
              </small>
            </div>
            <div class="form-field">
              <label for="user_password_confirmation">Confirm Password</label>
              <input
                type="password"
                name="password_confirmation"
                id="user_password_confirmation"
                placeholder="Confirm Password"
                required />
            </div>
            <div class="modal-actions">
              <button
                type="button"
                class="btn-secondary"
                onclick="closeModal('createUserModal')">
                <i class="fa fa-times"></i>
                Cancel
              </button>
              <button type="submit" class="btn-primary">
                <i class="fa fa-user-plus"></i>
                Create User
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>