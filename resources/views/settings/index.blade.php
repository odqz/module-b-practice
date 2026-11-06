@vite(['resources/css/settings.css'])
<x-layout>
  <div class="dashboard-layout">
    <x-sidebar settings="active"></x-sidebar>
    <div id="content">
      <div class="page-header">
        <h2>Settings</h2>
      </div>
      <div class="settings-grid">
        <a href="categories.html" class="setting-card">
          <div class="setting-icon">
            <i class="fa fa-tags"></i>
          </div>
          <div class="setting-content">
            <h3>Categories</h3>
            <p>Manage event categories</p>
          </div>
          <div class="setting-arrow">
            <i class="fa fa-chevron-right"></i>
          </div>
        </a>
        <a href="picture-sizes.html" class="setting-card">
          <div class="setting-icon">
            <i class="fa fa-ruler"></i>
          </div>
          <div class="setting-content">
            <h3>Picture Sizes</h3>
            <p>Configure available print sizes and pricing</p>
          </div>
          <div class="setting-arrow">
            <i class="fa fa-chevron-right"></i>
          </div>
        </a>
        <a href="users.html" class="setting-card">
          <div class="setting-icon">
            <i class="fa fa-users"></i>
          </div>
          <div class="setting-content">
            <h3>Users</h3>
            <p>Manage system users and permissions</p>
          </div>
          <div class="setting-arrow">
            <i class="fa fa-chevron-right"></i>
          </div>
        </a>
      </div>
    </div>
  </div>
</x-layout>