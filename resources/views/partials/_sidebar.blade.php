
@inject('auth', 'Auth')

<div class="navbar nav_title" style="border: 0;">
    <a href="{{ URL::route('products.index') }}" class="site_title"><i class="fa fa-globe"></i> <span>VectorMode<span id="reg">&reg;</span></span></a>
</div>
<div class="clearfix"></div>

<!-- menu prile quick info -->
<div class="profile">
    <div class="profile_info">
        <span>Welcome,</span>
        <h2>{{Auth::user()->name}}</h2>
    </div>
</div>
<!-- /menu profile quick info -->

<br />
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

    <div class="menu_section">
        <h3>General</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li>
                        <a href="{{ route('orders.index') }}">Orders</a>
                    </li>
                    <li>
                        <a href="{{ route('refunds.index') }}">Refunds</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="menu_section">
        <h3>Other Inputs</h3>
        <ul class="nav side-menu">
            <li><a><i class="fa fa-home"></i> Generic Items <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu" style="display: none">
                    <li>
                        <a href="{{ route('products.index') }}">Products</a>
                    </li>
                    <li>
                        <a href="{{ route('customers.index') }}">Customers</a>
                    </li>
                    <li>
                        <a href="{{ route('suppliers.index') }}">Suppliers</a>
                    </li>
                    <li>
                        <a href="{{ route('stocks.index') }}">Stocks</a>
                    </li>
                    <li>
                        <a href="{{ route('stores.index') }}">Stores</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>

</div>
