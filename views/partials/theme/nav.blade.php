            <li{{ Route::is('pxcms.pages.home') ? ' class="active"' : '' }}><a href="{{ URL::route('pxcms.pages.home') }}">Home</a></li>
            <li{{ Route::is('darchoods.pages.heartbeat') ? ' class="active"' : '' }}><a href="{{ URL::route('darchoods.pages.heartbeat') }}">Heartbeat</a></li>
            <li{{ Route::is('darchoods.pages.channels') ? ' class="active"' : '' }}><a href="{{ URL::route('darchoods.pages.channels') }}">Channels</a></li>
            {{-- <li{{ Route::is('darchoods.qdb.index') ? ' class="active"' : '' }}><a href="{{ URL::route('darchoods.qdb.index') }}">QuoteDB</a></li> --}}
            {{-- <li><a href="http://s.drk.sc/" target="_blank">Pastebin</a></li> --}}
            {{-- <li><a href="http://darchoods.net:9090/?nick={{ Session::get('nickname') }}&amp;channels=darchoods" target="_blank">WebChat</a></li> --}}
            <li class="dropdown {{ Route::is('darchoods.irpg.*') ? ' active' : '' }}">
                <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="#">
                    IdleRPG <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li{{ Route::is('darchoods.irpg.stats') ? ' class="active"' : '' }}><a href="{{ URL::route('darchoods.irpg.stats') }}">Stats</a></li>
                    <li{{ Route::is('darchoods.irpg.leaderboard') ? ' class="active"' : '' }}><a href="{{ URL::route('darchoods.irpg.leaderboard') }}">Leader Board</a></li>
                </ul>
            </li>
            <li class="dropdown {{ Route::is('darchoods.*.apidoc') ? ' active' : '' }}">
                <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="{{ URL::route('pxcms.user.dashboard') }}">
                    APIs <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li{{ Route::is('darchoods.pages.apidoc') ? ' class="active"' : '' }}><a href="{{ URL::route('darchoods.pages.apidoc') }}">IRC API</a></li>
                    <li{{ Route::is('darchoods.qdb.apidoc') ? ' class="active"' : '' }}><a href="{{ URL::route('darchoods.qdb.apidoc') }}">QuoteDB API</a></li>
                </ul>
            </li>
            <li class="divider"></li>

            @if (!Auth::guest())
            <?php $uI = Auth::user(); ?>
            <li class="dropdown pull-right{{ Route::is('pxcms.user.dashboard') ? ' active' : '' }}">
                <a class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="{{ URL::route('pxcms.user.dashboard') }}">
                    <i class="fa fa-user"></i> {{{ $uI->name }}} <b class="caret"></b>
                </a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                    <li><a tabindex="-1" href="{{ URL::route('darchoods.settings.user') }}"><i class="glyphicon glyphicon-wrench"></i> Settings</a></li>
                    <li><a tabindex="-1" href="{{ URL::route('pxcms.user.logout') }}"><i class="fa fa-sign-out"></i> Signout </a></li>
                </ul>
            </li>
            <li class="pull-right"><img src="{{ $uI->avatar }}?s=40&d=mm&rating=g" title="{{{ $uI->name }}}'s Avatar" /></li>
            @if(Auth::user()->isAdmin())
            <li class="pull-right"><a href="{{ URL::route('pxcms.admin.index') }}">Admin</a></li>
            @endif

            @else

            <li class="pull-right{{ Route::is('pxcms.user.login') ? ' active' : '' }}"><a href="{{ URL::route('pxcms.user.login') }}"><i class="icon-signin"></i> Sign In</a></li>
            {{--  <li class="pull-right{{ Route::is('pxcms.user.register') ? ' active' : '' }}"><a href="{{ URL::route('pxcms.user.register') }}"><i class="icon-signin"></i> Register</a></li> --}}
            @endif
