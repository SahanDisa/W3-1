</main>
<!--Left Bar-->
 <nav class="navbar">
    <ul class="navbar-nav">
      <li class="logo">
        <a href="./../dashboard.php" class="nav-link">
          <span class="link-text logo-text">Dashboard</span>
          <svg 
            aria-hidden="true" 
            focusable="false"
            data-prefix="fas" 
            data-icon="angle-double-right" 
            class="svg-inline--fa fa-angle-double-right fa-w-14" 
            role="img" xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 448 512">
              <path 
                fill="currentColor" 
                d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34zm192-34l-136-136c-9.4-9.4-24.6-9.4-33.9 0l-22.6 22.6c-9.4 9.4-9.4 24.6 0 33.9l96.4 96.4-96.4 96.4c-9.4 9.4-9.4 24.6 0 33.9l22.6 22.6c9.4 9.4 24.6 9.4 33.9 0l136-136c9.4-9.2 9.4-24.4 0-33.8z">
              </path>
            </svg>
        </a>
      </li>
      <li class="nav-item">
        <div onclick="expandAdminMenu()" class="nav-link">
          <svg 
            aria-hidden="true" 
            focusable="false" 
            data-prefix="fas" 
            data-icon="users-cog" 
            class="svg-inline--fa fa-users-cog fa-w-20" 
            role="img" xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 640 512"
            >
            <path 
              fill="currentColor" 
              d="M610.5 341.3c2.6-14.1 2.6-28.5 0-42.6l25.8-14.9c3-1.7 4.3-5.2 3.3-8.5-6.7-21.6-18.2-41.2-33.2-57.4-2.3-2.5-6-3.1-9-1.4l-25.8 14.9c-10.9-9.3-23.4-16.5-36.9-21.3v-29.8c0-3.4-2.4-6.4-5.7-7.1-22.3-5-45-4.8-66.2 0-3.3.7-5.7 3.7-5.7 7.1v29.8c-13.5 4.8-26 12-36.9 21.3l-25.8-14.9c-2.9-1.7-6.7-1.1-9 1.4-15 16.2-26.5 35.8-33.2 57.4-1 3.3.4 6.8 3.3 8.5l25.8 14.9c-2.6 14.1-2.6 28.5 0 42.6l-25.8 14.9c-3 1.7-4.3 5.2-3.3 8.5 6.7 21.6 18.2 41.1 33.2 57.4 2.3 2.5 6 3.1 9 1.4l25.8-14.9c10.9 9.3 23.4 16.5 36.9 21.3v29.8c0 3.4 2.4 6.4 5.7 7.1 22.3 5 45 4.8 66.2 0 3.3-.7 5.7-3.7 5.7-7.1v-29.8c13.5-4.8 26-12 36.9-21.3l25.8 14.9c2.9 1.7 6.7 1.1 9-1.4 15-16.2 26.5-35.8 33.2-57.4 1-3.3-.4-6.8-3.3-8.5l-25.8-14.9zM496 368.5c-26.8 0-48.5-21.8-48.5-48.5s21.8-48.5 48.5-48.5 48.5 21.8 48.5 48.5-21.7 48.5-48.5 48.5zM96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64-64 28.7-64 64 28.7 64 64 64zm224 32c1.9 0 3.7-.5 5.6-.6 8.3-21.7 20.5-42.1 36.3-59.2 7.4-8 17.9-12.6 28.9-12.6 6.9 0 13.7 1.8 19.6 5.3l7.9 4.6c.8-.5 1.6-.9 2.4-1.4 7-14.6 11.2-30.8 11.2-48 0-61.9-50.1-112-112-112S208 82.1 208 144c0 61.9 50.1 112 112 112zm105.2 194.5c-2.3-1.2-4.6-2.6-6.8-3.9-8.2 4.8-15.3 9.8-27.5 9.8-10.9 0-21.4-4.6-28.9-12.6-18.3-19.8-32.3-43.9-40.2-69.6-10.7-34.5 24.9-49.7 25.8-50.3-.1-2.6-.1-5.2 0-7.8l-7.9-4.6c-3.8-2.2-7-5-9.8-8.1-3.3.2-6.5.6-9.8.6-24.6 0-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h255.4c-3.7-6-6.2-12.8-6.2-20.3v-9.2zM173.1 274.6C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4z">
            </path>
          </svg>
            <span class="link-text">Admin Panel</span>
            <span class="link-drop" id="admin-drop">▼</span>
        </div>
      </li>
      <ul class="navbar-sub-nav" id="admin-menu">
        <li class="nav-sub-item">
          <a href="../user/userHome.php" class="nav-sub-link">
            <span class="link-text">Home</span>
          </a>
        </li>
        <li class="nav-sub-item">
          <a href="../user/userView.php" class="nav-sub-link">
            <span class="link-text">Users</span>
          </a>
        </li>
        <li class="nav-sub-item">
          <a href="../user/employeeView.php" class="nav-sub-link">
            <span class="link-text">Employees</span>
          </a>
        </li>
        <li class="nav-sub-item">
          <a href="../user/userNotification.php" class="nav-sub-link">
            <span class="link-text">Notification</span>
          </a>
        </li>
        <li class="nav-sub-item">
          <a href="../user/userPermission.php" class="nav-sub-link">
            <span class="link-text">Permission</span>
          </a>
        </li>
      </ul>

      <li class="nav-item">
        <div onclick="expandContractMenu()" class="nav-link">
            <svg 
              aria-hidden="true" 
              focusable="false" 
              data-prefix="fas" 
              data-icon="file-signature" 
              class="svg-inline--fa fa-file-signature fa-w-18" 
              role="img" xmlns="http://www.w3.org/2000/svg" 
              viewBox="0 0 576 512"
              >
              <path 
                fill="currentColor" 
                d="M218.17 424.14c-2.95-5.92-8.09-6.52-10.17-6.52s-7.22.59-10.02 6.19l-7.67 15.34c-6.37 12.78-25.03 11.37-29.48-2.09L144 386.59l-10.61 31.88c-5.89 17.66-22.38 29.53-41 29.53H80c-8.84 0-16-7.16-16-16s7.16-16 16-16h12.39c4.83 0 9.11-3.08 10.64-7.66l18.19-54.64c3.3-9.81 12.44-16.41 22.78-16.41s19.48 6.59 22.77 16.41l13.88 41.64c19.75-16.19 54.06-9.7 66 14.16 1.89 3.78 5.49 5.95 9.36 6.26v-82.12l128-127.09V160H248c-13.2 0-24-10.8-24-24V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24v-40l-128-.11c-16.12-.31-30.58-9.28-37.83-23.75zM384 121.9c0-6.3-2.5-12.4-7-16.9L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1zm-96 225.06V416h68.99l161.68-162.78-67.88-67.88L288 346.96zm280.54-179.63l-31.87-31.87c-9.94-9.94-26.07-9.94-36.01 0l-27.25 27.25 67.88 67.88 27.25-27.25c9.95-9.94 9.95-26.07 0-36.01z">
              </path>
            </svg>           
            <span class="link-text">Contracts</span>
            <span class="link-drop" id="contract-drop">▼</span>
        </div>
      </li>
      <ul class="navbar-sub-nav" id="contracts-menu">
        <li class="nav-sub-item">
          <a href="contractDashboard.php" class="nav-sub-link">
            <span class="link-text">Overview</span>
          </a>
        </li>
        <li class="nav-sub-item">
          <a href="contractHome.php" class="nav-sub-link">
            <span class="link-text">Contract</span>
          </a>
        </li>
        <li class="nav-sub-item">
          <a href="activityHome.php" class="nav-sub-link">
            <span class="link-text">Activity</span>
          </a>
        </li>
        <li class="nav-sub-item">
          <a href="quotationAdd.php" class="nav-sub-link">
            <span class="link-text">Quotation</span>
          </a>
        </li>
        <li class="nav-sub-item">
          <a href="invoiceAdd.php" class="nav-sub-link">
            <span class="link-text">Invoice</span>
          </a>
        </li>
      </ul>
      <li class="nav-item">
        <a href="./../contract/reportHome.php" class="nav-link">
          <svg 
            aria-hidden="true" 
            focusable="false" 
            data-prefix="fas" 
            data-icon="chart-line" 
            class="svg-inline--fa fa-chart-line fa-w-16" 
            role="img" xmlns="http://www.w3.org/2000/svg" 
            viewBox="0 0 512 512"
          >
            <path 
              fill="currentColor" 
              d="M496 384H64V80c0-8.84-7.16-16-16-16H16C7.16 64 0 71.16 0 80v336c0 17.67 14.33 32 32 32h464c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16zM464 96H345.94c-21.38 0-32.09 25.85-16.97 40.97l32.4 32.4L288 242.75l-73.37-73.37c-12.5-12.5-32.76-12.5-45.25 0l-68.69 68.69c-6.25 6.25-6.25 16.38 0 22.63l22.62 22.62c6.25 6.25 16.38 6.25 22.63 0L192 237.25l73.37 73.37c12.5 12.5 32.76 12.5 45.25 0l96-96 32.4 32.4c15.12 15.12 40.97 4.41 40.97-16.97V112c.01-8.84-7.15-16-15.99-16z">
            </path>
          </svg>
          <span class="link-text report-menu">Reports</span>
        </a>
      </li>
  </ul>
</nav>
<!--End of Left Bar-->