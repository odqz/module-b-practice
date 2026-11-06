@vite(['resources/css/login.css'])

<x-layout>
  <div class="login-page">
    <div class="login-container">
      <div class="login-card">
        <div class="login-header">
          <h2>Admin Login</h2>
          <p>Sign in to manage your events</p>
        </div>
        <form class="login-form" action="/login" method="post">
          <div class="form-group">
            <label for="email">
              Email
              <span class="required">*</span>
            </label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Enter your email"
              required
            />
          </div>
          <div class="form-group">
            <label for="password">
              Password
              <span class="required">*</span>
            </label>
            <input
              type="password"
              id="password"
              name="password"
              placeholder="Enter your password"
              required
            />
          </div>
          <button type="submit" class="login-button">
            <i class="fa fa-sign-in-alt"></i>
            Login to Admin Panel
          </button>
        </form>
      </div>
      <div class="login-card guest-card">
        <div class="login-header">
          <h2>Guest Access</h2>
          <p>View events without signing in</p>
        </div>
        <a href="public-events.html" class="guest-button">
          <i class="fa fa-calendar-alt"></i>
          <span>View Public Events</span>
        </a>
        <div class="divider"><span>OR</span></div>
        <form class="access-code-form">
          <div class="form-group">
            <label for="access_code">Have an Access Code?</label>
            <input
              type="text"
              id="access_code"
              name="access_code"
              placeholder="Enter your access code"
              required
            />
          </div>
          <button type="submit" class="guest-button">
            <i class="fa fa-unlock"></i>
            <span>Access Private Event</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</x-layout>