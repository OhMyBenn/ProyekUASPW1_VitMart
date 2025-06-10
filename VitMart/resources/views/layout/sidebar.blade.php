 <!--begin::Sidebar-->
      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="../index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="{{ asset("/assets/assets/img/VitMartLogo.png") }}"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
              style="width: 45px; height: 190px; border-radius: 50%;"
              data-lte-toggle="sidebar-brand-image"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">VitMart</span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >

              <li class="nav-item">
                <a href="{{ url("/") }}" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
               
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Kategori
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url("/fakultas") }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i> 
                      <p>Makanan</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url("/fakultas/create") }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Minuman</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url("/fakultas") }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i> 
                      <p>Kesehatan</p>
                    </a>
                  </li>
                </ul>
              </li>
             
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Poin Member
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url("/prodi") }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i> 
                      <p>List Member</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url("/prodi/create") }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Create Member</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>
      <!--end::Sidebar-->