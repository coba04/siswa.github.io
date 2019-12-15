     <section>
      <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('adminlte/images/user.png')}}" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                    <div class="email">{{Auth::user()->email}}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="material-icons">input</i>Keluar</a>
                                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                       <li>
                        <a href="index.html">
                            <i class="material-icons">menu</i>
                            <span>BERANDA</span>
                        </a>
                    </li>
                     <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                 <i class="material-icons">dashboard</i>
                                    <span>INVENTARIS</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="{{route('inventaris.index')}}">Inventaris</a>
                                    </li>
                                    <li>
                                        <a href="{{route('jenis.index')}}">Jenis</a>
                                    </li>
                                    <li>
                                        <a href="{{route('ruang.index')}}">Ruang</a>
                                    </li>
                                </ul>
                            </li>
                    <li>
                        <a href="pages/typography.html">
                            <i class="material-icons">account_box</i>
                            <span>PEGAWAI</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">money</i>
                            <span>PEMINJAMAN</span>
                        </a>
                    </li>
      
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 - 2020 <a href="javascript:void(0);">HINATAZAKA46</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 4.6.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    

 
    </section>