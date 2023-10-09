<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('backend_index.page')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-house"></i><span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse visible" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('home_hero.page')}}">
              <i class="bi bi-circle"></i><span>Hero section</span>
            </a>
          </li>
          <li>
            <a href="{{route('left_business.page')}}">
              <i class="bi bi-circle"></i><span>Left Business</span>
            </a>
          </li>
          <li>
            <a href="{{route('right_business.page')}}">
              <i class="bi bi-circle"></i><span>Right Business</span>
            </a>
          </li>
          <li>
            <a href="{{route('business_grid.page')}}">
              <i class="bi bi-circle"></i><span>Business grid</span>
            </a>
          </li>
          <li>
            <a href="{{route('left_culture.page')}}">
              <i class="bi bi-circle"></i><span>Culture Left</span>
            </a>
          </li>
          <li>
            <a href="{{route('right_culture.page')}}">
              <i class="bi bi-circle"></i><span>Culture Right</span>
            </a>
          </li>
          <li>
            <a href="{{route('home_politics.page')}}">
              <i class="bi bi-circle"></i><span>Politics</span>
            </a>
          </li>
          <li>
            <a href="{{route('home_travel.page')}}">
              <i class="bi bi-circle"></i><span>Travel</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Culture</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse visible" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('culture_left.page')}}">
              <i class="bi bi-circle"></i><span>Culture blog with picture</span>
            </a>
          </li>
          <li>
            <a href="{{route('culture_popular_post.page')}}">
              <i class="bi bi-circle"></i><span>Culture popular post</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Business</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse visible" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('business_left.page')}}">
              <i class="bi bi-circle"></i><span>Business page left</span>
            </a>
          </li>
          <li>
            <a href="{{route('business_popular_post.page')}}">
              <i class="bi bi-circle"></i><span>Business popular post</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Politics</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse visible" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('politics_left.page')}}">
              <i class="bi bi-circle"></i><span>Politics left page</span>
            </a>
          </li>
          <li>
            <a href="{{route('politics_popular_post.page')}}">
              <i class="bi bi-circle"></i><span>Politics popular post</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#about_us" data-bs-toggle="collapse" href="#">
            <i class="bi bi-file-earmark-person"></i><span>About Us</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="about_us" class="nav-content collapse visible" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('backend_top_about.page')}}">
              <i class="bi bi-circle"></i><span> Top section </span>
            </a>
          </li>
          <li>
            <a href="{{route('post_grid.page')}}">
              <i class="bi bi-circle"></i><span>Post grid</span>
            </a>
          </li>
          <li>
            <a href="{{route('about_team.page')}}">
              <i class="bi bi-circle"></i><span>Team Description</span>
            </a>
          </li>
          <li>
            <a href="{{route('bottom_left.page')}}">
              <i class="bi bi-circle"></i><span>Bottom Left</span>
            </a>
          </li>
          <li>
            <a href="{{route('bottom_right.page')}}">
              <i class="bi bi-circle"></i><span>Bottom Right</span>
            </a>
          </li>
          <li>
            <a href="{{route('team_heading.page')}}">
              <i class="bi bi-circle"></i><span>About Heading</span>
            </a>
          </li>

        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gem"></i><span>Footer</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse visible" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('recent_post.page')}}">
              <i class="bi bi-circle"></i><span>Recent Post</span>
            </a>
          </li>
          <li>
            <a href="icons-remix.html">
              <i class="bi bi-circle"></i><span>Remix Icons</span>
            </a>
          </li>
          <li>
            <a href="icons-boxicons.html">
              <i class="bi bi-circle"></i><span>Boxicons</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('backend_contact.page')}}">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('profile.show')}}">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
