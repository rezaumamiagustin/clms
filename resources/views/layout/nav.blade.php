@if(auth()->check() && auth()->user()->is_admin == 1)  
    <li class="active has-sub">
        <a class="js-arrow" href="/s_home">
            <i class="fas fa-home"></i>Beranda</a>
    </li>
    <li>
        <a href="/Admin/a_siswa">
            <i class="fas fa-user"></i></i>CRUD Siswa</a>
    </li>
    <li>
        <a href="/Admin/a_guru">
        <i class="fas fa-user"></i>CRUD Guru</a>
    </li>
    <li>
        <a href="/Admin/a_mapel">
        <i class="fas fa-book"></i>CRUD Mapel</a>
    </li>
    <li>
        <a href="/Admin/a_tugas">
        <i class="fas fa-book"></i>CRUD Kelas</a>
    </li>
@elseif(auth()->check() && auth()->user()->is_admin == 2)
    <li class="active has-sub">
        <a class="js-arrow" href="/s_home">
        <i class="fas fa-tachometer-alt"></i>Beranda</a>
    </li>
    <li class="has-sub">
        <a class="js-arrow" href="#">
        <i class="fas fa-calendar-alt"></i>Absen</a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="/s_home">Laporan Absensi</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="/materi">
        <i class="fas fa-book"></i>Materi</a>
    </li>
    <li>
        <a href="{{ url('/s_tugas') }}">
        <i class="far fa-check-square"></i>Tugas</a>
    </li>
    <li>
        <a href="/ulangan">
        <i class="fas fa-pen-square"></i>Ulangan</a>
    </li>
    <li>
        <a href="/nilai">
        <i class="fas fa-calculator"></i>Nilai</a>
    </li>
@else         
    <li class="active has-sub">
        <a class="js-arrow" href="/s_home">
        <i class="fas fa-tachometer-alt"></i>Beranda</a>
    </li>
    <li class="has-sub">
        <a class="js-arrow" href="#">
        <i class="fas fa-calendar-alt"></i>Absen</a>
        <ul class="list-unstyled navbar__sub-list js-sub-list">
            <li>
                <a href="{{ route('presensi-masuk') }}">Absen Masuk</a>
            </li>
            <li>
                <a href="{{ route('presensi-keluar') }}">Absen Pulang</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="/materi">
        <i class="fas fa-book"></i>Materi</a>
    </li>
    <li>
        <a href="{{ url('/s_tugas') }}">
        <i class="far fa-check-square"></i>Tugas</a>
    </li>
    <li>
        <a href="/ulangan">
        <i class="fas fa-pen-square"></i>Ulangan</a>
    </li>
    <li>
        <a href="/nilai">
        <i class="fas fa-calculator"></i>Nilai</a>
    </li>
@endif
                {{-- <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li> --}}
        
<!-- END MENU SIDEBAR-->