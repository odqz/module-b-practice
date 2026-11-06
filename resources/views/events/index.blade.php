@vite(['resources/css/events.css'])
<x-layout>
 <div class="dashboard-layout">
    <x-sidebar events="active"></x-sidebar>
    <div id="content">
      <div class="page-header">
        <h2>Events</h2>
        <button class="btn-primary">
          <i class="fa fa-plus"></i>
          Create Event
        </button>
      </div>
      <div class="table-responsive">
        <table class="themed-table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Category</th>
              <th>Type</th>
              <th>City</th>
              <th>Date & Time</th>
              <th class="hide-mobile">Note</th>
              <th class="hide-mobile">Path</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a href="event-show.html">Portsmouth Graduation 2025</a>
              </td>
              <td>Graduation</td>
              <td>Public</td>
              <td>Portsmouth</td>
              <td>July 1, 2025 2:00 PM</td>
              <td class="hide-mobile">Open to public</td>
              <td class="hide-mobile">public_events/portsmouth</td>
              <td>
                <span class="status-active">
                  <i class="fa fa-check-circle"></i>
                  <span class="hide-mobile-text">Active</span>
                </span>
              </td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit event">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button
                    class="btn-icon btn-cancel"
                    title="Deactivate event"
                  >
                    <i class="fa fa-eye-slash"></i>
                  </button>
                  <button class="btn-icon btn-delete" title="Delete event">
                    <i class="fa fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="event-show.html">Summer Dog Show</a></td>
              <td>Pet Events</td>
              <td>Private</td>
              <td>London</td>
              <td>August 15, 2025 10:00 AM</td>
              <td class="hide-mobile">Private event</td>
              <td class="hide-mobile">private_events/summer_dog</td>
              <td>
                <span class="status-active">
                  <i class="fa fa-check-circle"></i>
                  <span class="hide-mobile-text">Active</span>
                </span>
              </td>
              <td>
                <div class="actions">
                  <button class="btn-icon btn-edit" title="Edit event">
                    <i class="fa fa-edit"></i>
                  </button>
                  <button
                    class="btn-icon btn-cancel"
                    title="Deactivate event"
                  >
                    <i class="fa fa-eye-slash"></i>
                  </button>
                  <button class="btn-icon btn-delete" title="Delete event">
                    <i class="fa fa-trash"></i>
                  </button>
                  <a
                    href="event-access.html"
                    class="btn-icon btn-access"
                    title="Manage access codes"
                  >
                    <i class="fa fa-lock"></i>
                  </a>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-layout>