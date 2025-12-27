<style>
  .layout-menu{
    background: linear-gradient(180deg, #99abfc, #64fde9)
  }
</style>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-logo demo">
                <svg
                  width="25"
                  viewBox="0 0 25 42"
                  version="1.1"
                >
                  <defs>
                   
                  </defs>
                  <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                      <g id="Icon" transform="translate(27.000000, 15.000000)">
                        <g id="Mask" transform="translate(0.000000, 8.000000)">
                          <mask id="mask-2" fill="white">
                            <use xlink:href="#path-1"></use>
                          </mask>
                          <use fill="#696cff" xlink:href="#path-1"></use>
                          <g id="Path-3" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-3"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                          </g>
                          <g id="Path-4" mask="url(#mask-2)">
                            <use fill="#696cff" xlink:href="#path-4"></use>
                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                          </g>
                        </g>
                        <g
                          id="Triangle"
                          transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                        >
                          <use fill="#696cff" xlink:href="#path-5"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2 text-dark">Admin</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item active">
              <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle text-dark"></i>
                <div data-i18n="Analytics" class="text-dark">Dashboard</div>
              </a>
            </li>

            <!-- Layouts -->
            <!-- Components -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text text-dark">Components</span></li>
            <!-- Cards -->
            <li class="menu-item">
              <a href="{{route('admin.products.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-box text-dark"></i>
                <div data-i18n="Basic" class="text-dark">Products</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="{{route('admin.categories.index')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-clipboard text-dark"></i>
                <div data-i18n="Basic" class="text-dark">Kategori</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/admin/orders" class="menu-link">
                <i class="menu-icon tf-icons bx bx-clipboard text-dark"></i>
                <div data-i18n="Basic" class="text-dark">Pesanan</div>
              </a>
            </li>
          </ul>
        </aside>