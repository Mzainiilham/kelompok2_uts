<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-body-tertiary sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/category') ? 'active' : '' }}" href="/dashboard/category">
            <span data-feather="file" class="align-text-bottom"></span>
            Category
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/product') ? 'active' : '' }}" href="/dashboard/product">
            <span data-feather="shopping-bag" class="align-text-bottom"></span>
            Products
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/cart') ? 'active' : '' }}" href="/dashboard/cart">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Carts
          </a>
        </li>
      </ul>
    </div>
  </nav>