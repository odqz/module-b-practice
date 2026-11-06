@vite(['resources/css/orders.css'])
<x-layout>
  <div class="dashboard-layout">
    <x-sidebar orders="active"></x-sidebar>
    <div id="content">
      <div class="page-header">
        <h2>Orders</h2>
      </div>
      <div class="table-responsive">
        <table class="themed-table">
          <thead>
            <tr>
              <th>Order #</th>
              <th>Customer</th>
              <th>Order Date</th>
              <th>Completed Date</th>
              <th class="hide-mobile">Note</th>
              <th>Order Total</th>
              <th>Status</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="order-show.html">#ORD-001</a></td>
              <td>John Smith</td>
              <td>2025-01-15</td>
              <td>N/A</td>
              <td class="hide-mobile">Rush delivery</td>
              <td>£45.00</td>
              <td>
                <span class="status-badge status-pending">
                  <i class="fa fa-clock"></i>
                  <span class="hide-mobile-text">Pending</span>
                </span>
              </td>
              <td>
                <div class="actions">
                  <button
                    class="btn-icon btn-complete"
                    title="Complete order"
                  >
                    <i class="fa fa-check"></i>
                  </button>
                  <button class="btn-icon btn-cancel" title="Cancel order">
                    <i class="fa fa-times-circle"></i>
                  </button>
                  <button class="btn-icon btn-delete" title="Delete order">
                    <i class="fa fa-trash"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="order-show.html">#ORD-002</a></td>
              <td>Sarah Johnson</td>
              <td>2025-01-12</td>
              <td>2025-01-18</td>
              <td class="hide-mobile">Standard delivery</td>
              <td>£32.50</td>
              <td>
                <span class="status-badge status-completed">
                  <i class="fa fa-check-circle"></i>
                  <span class="hide-mobile-text">Completed</span>
                </span>
              </td>
              <td>
                <div class="actions">
                  <button
                    class="btn-icon btn-pending"
                    title="Mark as Pending"
                  >
                    <i class="fa fa-undo"></i>
                  </button>
                  <button class="btn-icon btn-cancel" title="Cancel order">
                    <i class="fa fa-times-circle"></i>
                  </button>
                </div>
              </td>
            </tr>
            <tr>
              <td><a href="order-show.html">#ORD-003</a></td>
              <td>Michael Brown</td>
              <td>2025-01-10</td>
              <td>N/A</td>
              <td class="hide-mobile">Canvas print</td>
              <td>£58.00</td>
              <td>
                <span class="status-badge status-cancelled">
                  <i class="fa fa-ban"></i>
                  <span class="hide-mobile-text">Cancelled</span>
                </span>
              </td>
              <td>
                <div class="actions">
                  <button
                    class="btn-icon btn-pending"
                    title="Mark as Pending"
                  >
                    <i class="fa fa-undo"></i>
                  </button>
                  <button class="btn-icon btn-delete" title="Delete order">
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