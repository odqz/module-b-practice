@vite(['resources/css/orders/orders.css'])
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
            @foreach($orders as $order)
            <tr>
              <td><a href="order-show.html">#ORD-0{{ $order->order_id }}</a></td>
              <td>{{ $order->order_id }}</td>
              <td>{{ $order->order_date }}</td>
              <td></td>
              <td class="hide-mobile">{{ $order->order_note }}</td>
              <td></td>
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
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-layout>