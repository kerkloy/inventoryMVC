<div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="{{url('/home')}}" class="logo">
                <div class="px-4 pt-2">
                <img
                src="../img/logo.png"
                alt="navbar brand"
                class="navbar-brand"
                height="150px"
                width="150px"
              />
                </div>
              
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item active">
                <a
                  href="{{url('/home')}}"
                  aria-expanded="false"
                >
                  <i class="fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-section">
                <span class="sidebar-mini-icon">
                  <i class="fa fa-ellipsis-h"></i>
                </span>
                <h4 class="text-section">Components</h4>
              </li>
    
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                  <i class="fas fa-cart-plus"></i>
                  <p>Products</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="{{route('products.index')}}">
                        <span class="sub-item">Product List</span>
                      </a>
                    </li>
                    <li>
                      <a href="{{route('product-enrollment.index')}}">
                        <span class="sub-item">Product Enrollment</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="{{route('customers.index')}}">
                  <i class="fas fa-users"></i>
                  <p>Customers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('suppliers.index')}}">
                  <i class="fas fa-truck"></i>
                  <p>Suppliers</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('purchase-orders.index')}}">
                  <i class="fas fa-tags"></i>
                  <p>Purchase Order</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('purchase-history.index')}}">
                  <i class="fas fa-history"></i>
                  <p>Purchase History</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>