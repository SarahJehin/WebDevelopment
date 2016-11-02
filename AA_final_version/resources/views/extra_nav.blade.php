@if(!Auth::user()->is_admin)
<div class="panel panel-default">
     <ul class="nav_extra">
         <li><a {{ Request::segment(1) == 'home' ? 'class=active' : '' }} href="{{ url('home') }}">Dashboard</a></li>
         <li><a {{ Request::segment(2) == 'play_game' ? 'class=active' : '' }} href="{{ url('user/play_game') }}">Speel het spel</a></li>
         <li><a {{ Request::segment(2) == 'rules' ? 'class=active' : '' }} href="{{ url('user/rules') }}">Spelregels</a></li>
         <li><a {{ Request::segment(2) == 'account_info' ? 'class=active' : '' }} href="{{ url('user/account_info') }}">Mijn account</a></li>
     </ul>
 </div>
 @else
 <div class="panel panel-default">
     <ul class="nav_extra admin">
         <li><a {{ Request::segment(1) == 'home' ? 'class=active' : '' }} href="{{ url('home') }}">Dashboard</a></li>
         <li><a {{ Request::segment(2) == 'set_periods' ? 'class=active' : '' }} href="{{ url('admin/set_periods') }}">Periodes</a></li>
         <li><a {{ Request::segment(2) == 'participants' ? 'class=active' : '' }} href="{{ url('admin/participants') }}">Deelnemerslijst</a></li>
         <li><a {{ Request::segment(2) == 'questions' ? 'class=active' : '' }} href="{{ url('admin/questions') }}">Vragenoverzicht</a></li>
         <li><a {{ Request::segment(2) == 'account_info' ? 'class=active' : '' }} href="{{ url('user/account_info') }}">Mijn account</a></li>
     </ul>
 </div>
 @endif