<div class="navbar-header">

    <!-- Collapsed Hamburger -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Branding Image -->
    <a class="navbar-brand" href="{{ url('/') }}">
       <span> {!! trans('dictionary.application_title') !!}</span>
    </a>
</div>

<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <!-- Left Side Of Navbar -->
    <ul class="nav navbar-nav">
        &nbsp;
    </ul>

    <!-- Right Side Of Navbar -->

    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @guest
        <li><a href="{{ route('login') }}"> {!! trans('dictionary.login') !!}</a></li>
        <li><a href="{{ route('register') }}"> {!! trans('dictionary.register') !!}</a></li>
        @else
            <li class="dropdown">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ route('logout') }}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          {!! trans('dictionary.logout') !!}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
    </ul>

    <!-- Rooms_Management -->
    <ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            {!! trans('dictionary.eskan_management') !!} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{ route('buildings.index') }}" >{!! trans('dictionary.buildings') !!}</a>
            </li>
                <li>
                    <a href="{{ route('suites.index') }}" >{!! trans('dictionary.suites') !!}</a>
                        </li>
                             <li>
                                 <a href="{{ route('rooms.index') }}" >{!! trans('dictionary.rooms') !!}</a>
                                     </li>
                                         </ul>
                                             </li>
                                                </ul>
    <!-- Booking_Management -->
    <ul class="nav navbar-nav navbar-right">
        <li class="">
            <a href="{{ route('booking.index') }}" class="" data-toggle="" role="button" aria-expanded="false" aria-haspopup="true">{!! trans('dictionary.booking') !!}</a>
                 </li>

    <!-- Students_Management -->
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {!! trans('dictionary.student_management') !!} <span class="caret"></span>
                    </a>
                      <ul class="dropdown-menu">
                        <li>
                            <a href="{{ route('students.index') }}" >{!! trans('dictionary.show_all_student') !!}</a>
                             </li>
                                 </ul>
                                     </li>
                  @endguest
            </ul>
    </ul>
</div>
