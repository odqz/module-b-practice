@props(['dashboard' => '', 'events' => '', 'pictures' => '', 'orders' => '', 'settings' => '',])

<nav class="navigation">
  <ul class="links">
    <li class="{{ $dashboard }}">
      <a href="{{ route('dashboard') }}">
        <i class="fa fa-tachometer-alt"></i>
        Dashboard
      </a>
    </li>
    <li class="{{ $events }}">
      <a href="{{ route('events.index') }}">
        <i class="fa fa-calendar"></i>
        Events
      </a>
    </li>
    <li class="{{ $pictures }}">
      <a href="{{ route('pictures.index') }}">
        <i class="fa fa-image"></i>
        Pictures
      </a>
    </li>
    <li class="{{ $orders }}">
      <a href="{{ route('orders.index') }}">
        <i class="fa fa-shopping-cart"></i>
        Orders
      </a>
    </li>
    <li class="{{ $settings }}">
      <a href="{{ route('settings.index') }}">
        <i class="fa fa-cog"></i>
        Settings
      </a>
    </li>
  </ul>
</nav>