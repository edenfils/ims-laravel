<div class="user-profile pull-right">
    <img class="avatar user-thumb" src="/images/author/avatar.png" alt="avatar">
    <h4 class="user-name dropdown-toggle" data-toggle="dropdown">{{ $user->name }} <i class="fa fa-angle-down"></i></h4>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Message</a>
        <a class="dropdown-item" href="#">Settings</a>
        <a class="dropdown-item" href="{{ route('logout')}}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
        >Log Out</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
        </form>
    </div>
</div>