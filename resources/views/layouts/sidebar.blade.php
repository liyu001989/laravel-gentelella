<div class="col-md-3 left_col">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="{{ route('dashboard') }}" class="site_title">
        <i class="fa fa-credit-card"></i> <span>宜代收</span>
      </a>
    </div>
    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="{{ $currentUser->avatar }}" class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{ $currentUser->realname }}</h2>
      </div>
    </div>
    <!-- /menu profile quick info -->
    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <ul class="nav side-menu">
          <li>
            <a><i class="fa fa-file-text-o"></i> 代收单 <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="{{ route('collection_sheets.index') }}" data-module="collection_sheets">代收单</a></li>
              <li><a href="{{ route('discount.collection_sheets.index') }}" data-module="discount">折扣相关代收单</a></li>
              <li><a href="{{ route('collection_statistics.index') }}">月度统计</a></li>
              <li><a href="{{ route('allowance_parties.index') }}">第三方折扣</a></li>
            </ul>
          </li>
          <li>
            <a><i class="fa fa-credit-card-alt"></i> 提款记录</a>
          </li>
          <li><a><i class="fa fa-rmb"></i> 流水记录</a>
          </li>
          @if ($currentUser->can('admin_users.manager'))
            <li>
              <a><i class="fa fa-user-secret" aria-hidden="true"></i> 管理员账户 <span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li><a href="{{ route('admin_users.index') }}" data-module="admin_users">账户管理</a></li>
                <li><a href="{{ route('admin_roles.index') }}" data-module="admin_roles">角色管理</a></li>
              </ul>
            </li>
          @endif
          <li>
            <a><i class="fa fa-users"></i> 商户用户 <span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
              <li><a href="index.html">商户列表</a></li>
              <li><a href="index2.html">用户列表</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>