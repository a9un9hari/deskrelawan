<li class="nav-item">
  <a class="nav-link {{ empty(Request::segment(2)) ? 'active' : '' }}" href="{{ route('dashboard.home') }}">
    <span data-feather="home"></span>
    Dashboard <span class="sr-only">(current)</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link  {{ (Request::segment(2) == 'asset-category') ? 'active' : '' }}" href="{{ route('dashboard.asset-category.index') }}">
    <span data-feather="tag"></span>
    Asset Categories
  </a>
</li>