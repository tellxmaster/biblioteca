{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('book') }}"><i class="nav-icon la la-question"></i> Books</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-question"></i> Categories</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('member') }}"><i class="nav-icon la la-question"></i> Members</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('borrow') }}"><i class="nav-icon la la-question"></i> Borrows</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('reservation') }}"><i class="nav-icon la la-question"></i> Reservations</a></li>