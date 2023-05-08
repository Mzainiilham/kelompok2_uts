<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            <font color="white">Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/category') ? 'active' : '' }}" href="/dashboard/category">
            <span data-feather="file" class="align-text-bottom"></span>
            <font color="white">Category
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/product') ? 'active' : '' }}" href="/dashboard/product">
            <span data-feather="shopping-bag" class="align-text-bottom"></span>
            <font color="white">Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/cart') ? 'active' : '' }}" href="/dashboard/cart">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            <font color="white">Carts
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/transaction') ? 'active' : '' }}" href="/dashboard/transaction">
            <span data-feather="dollar-sign" class="align-text-bottom"></span>
            <font color="white">Transaction
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/about') ? 'active' : '' }}" href="/dashboard/about">
            <span data-feather="info" class="align-text-bottom"></span>
            <font color="white">About Us
          </a>
        </li>
      </ul>
    </div>
  </nav>