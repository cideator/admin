<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">@lang('menu.title.navigation')</li>

                <li>
                    <a href="{{ url('/home') }}">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">@lang('menu.dashboard')</span>
                    </a>
                </li>

                <li class="nav-small-cap">Modules</li>

                <li>
                    <a href="{{ url('account/customers') }}">
                        <i class="mdi mdi-account-check"></i>
                        <span class="hide-menu">@lang('menu.customers')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('account/balance/purchase') }}">
                        <i class="mdi mdi-credit-card"></i>
                        <span class="hide-menu">@lang('menu.purchase_balance')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('transfer/bank') }}">
                        <i class="mdi mdi-bank"></i>
                        <span class="hide-menu">@lang('menu.bank')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('transfer/todomundo') }}">
                        <i class="mdi mdi-account-convert"></i>
                        <span class="hide-menu">@lang('menu.todomundo')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('transfer/airtime') }}">
                        <i class="mdi mdi-access-point"></i>
                        <span class="hide-menu">@lang('menu.airtime')</span>
                    </a>
                </li>

                <li>
                    <a href="{{ url('mart/orders') }}">
                        <i class="mdi mdi-shopping"></i>
                        <span class="hide-menu">@lang('menu.cart.orders')</span>
                    </a>
                </li>

                {{--<li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-briefcase-check"></i>
                        <span class="hide-menu">@lang('menu.distributors')</span>
                    </a>
                </li>--}}


                <!-- Administration -->
                <li class="nav-small-cap">@lang('menu.title.administration')</li>

                <li>
                    <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-account-key"></i>
                        <span class="hide-menu">@lang('menu.admins')</span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="{{ url('user/admin/create') }}">Register system user</a></li>
                        <li><a href="{{ url('user/admins') }}">@lang('menu.admin_users')</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('exchange/rates') }}">
                        <i class="mdi mdi-currency-usd"></i>
                        <span class="hide-menu">@lang('menu.exchange_rate')</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Sidebar menu -->
    </div>
</aside>