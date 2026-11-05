@vite(['resources/css/dashboard.css'])

<x-layout>
  <div class="dashboard-layout">
    <nav class="navigation" id="side-navigation">
      <ul class="links">
        <li class="active">
          <a href="dashboard.html">
            <i class="fa fa-tachometer-alt"></i>
            Dashboard
          </a>
        </li>
        <li>
          <a href="events.html">
            <i class="fa fa-calendar"></i>
            Events
          </a>
        </li>
        <li>
          <a href="pictures.html">
            <i class="fa fa-image"></i>
            Pictures
          </a>
        </li>
        <li>
          <a href="orders.html">
            <i class="fa fa-shopping-cart"></i>
            Orders
          </a>
        </li>
        <li>
          <a href="settings.html">
            <i class="fa fa-cog"></i>
            Settings
          </a>
        </li>
      </ul>
    </nav>
    <div id="content">
      <div class="page-header">
        <h2>Dashboard</h2>
        <button class="btn-primary">
          <i class="fa fa-plus"></i>
          Create Event
        </button>
      </div>
      <section id="statistics">
        <h3>At a Glance</h3>
        <div class="statistics-row">
          <article class="statistic">
            <header>
              <h4>Orders</h4>
            </header>
            <div class="statistic-progress">
              <div class="statistic-progress-label">
                <span class="statistic-value">45</span>
                <span class="statistic-additional">of 57 completed</span>
              </div>
              <progress
                class="statistic-progress-bar"
                value="45"
                max="57"
              ></progress>
            </div>
            <span class="statistic-additional">12 new this week</span>
          </article>
          <article class="statistic">
            <header>
              <h4>Avg. Order Picture Count</h4>
            </header>
            <span class="statistic-value">3.2</span>
            <span class="statistic-additional">2.8 this week</span>
          </article>
          <article class="statistic">
            <header>
              <h4>Popular Picture Sizes</h4>
            </header>
            <ul class="statistic-list">
              <li>
                <span class="statistic-value">8x10</span>
                <span class="statistic-additional">24 orders</span>
                <progress
                  class="statistic-progress-bar"
                  value="24"
                  max="24"
                ></progress>
              </li>
              <li>
                <span class="statistic-value">5x7</span>
                <span class="statistic-additional">18 orders</span>
                <progress
                  class="statistic-progress-bar"
                  value="18"
                  max="24"
                ></progress>
              </li>
              <li>
                <span class="statistic-value">11x14</span>
                <span class="statistic-additional">12 orders</span>
                <progress
                  class="statistic-progress-bar"
                  value="12"
                  max="24"
                ></progress>
              </li>
            </ul>
          </article>
          <article class="statistic">
            <header>
              <h4>Income by Picture Size</h4>
            </header>
            <ul class="statistic-list">
              <li>
                <span class="statistic-value">8x10</span>
                <span class="statistic-additional">£420.00</span>
              </li>
              <li>
                <span class="statistic-value">5x7</span>
                <span class="statistic-additional">£270.00</span>
              </li>
              <li>
                <span class="statistic-value">11x14</span>
                <span class="statistic-additional">£360.00</span>
              </li>
            </ul>
          </article>
        </div>
      </section>
    </div>
  </div>
</x-layout>