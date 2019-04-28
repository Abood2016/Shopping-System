<div class="sidebar" data-background-color="white" data-active-color="danger">

<div class="sidebar-wrapper">
    <div class="logo">
        <a href="{{route('index')}}" class="simple-text">
            Shop Admin
        </a>
    </div>

    <ul class="nav">
        <li>
            <a href="{{route('index')}}">
                <i class="ti-panel"></i>
                <p>Dashboard</p>
            </a>
        </li>
        <li>
            <a href="{{route('product.create')}}">
                <i class="ti-archive"></i>
                <p>Add Product</p>
            </a>
        </li>
        <li>
            <a href="{{route('product.index')}}">
                <i class="ti-view-list-alt"></i>
                <p>View Products</p>
            </a>
        </li>
        <li>
            <a href="">
                <i class="ti-calendar"></i>
                <p>Orders</p>
            </a>
        </li>
        <li>
            <a href="">
                <i class="fa fa-users"></i>
                <p>Users</p>
            </a>
        </li>
    </ul>
</div>
</div>