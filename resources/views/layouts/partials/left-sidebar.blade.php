<div class="sidebar-header">
    <div class="logo">
        <a href="index.html"><img src="/images/icon/logo.png" alt="logo"></a>
    </div>
</div>
<div class="main-menu">
    <div class="menu-inner">
        <nav>
            <ul class="metismenu" id="menu">
                <li class="active">
                    <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-dropbox"></i><span>Products</span></a>
                    <ul class="collapse">
                        <li class="active">
                            <a href="{{url('/admin/products')}}">All Products</a>
                        </li>
                        <li class="">
                                <a href="{{url('/admin/products/create')}}">Add New Product</a>
                        </li>
                    </ul>
                </li>
                <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-star"></i><span>Brands</span></a>
                        <ul>
                            <li class="">
                                <a href="{{url('/admin/brands')}}">All Brands</a>
                            </li>
                            <li class="">
                                    <a href="{{url('/admin/brands/create')}}">Add New Brand</a>
                            </li>
                        </ul>
                    </li>

                    <li class="">
                        <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-cart-plus"></i><span>Orders</span></a>
                        <ul>
                            <li class="">
                                <a href="{{url('/admin/orders')}}">All Orders</a>
                            </li>
                            <li class="">
                                    <a href="{{url('/admin/orders/create')}}">Add New Order</a>
                            </li>
                        </ul>
                    </li>
            </ul>
        </nav>
    </div>
</div>