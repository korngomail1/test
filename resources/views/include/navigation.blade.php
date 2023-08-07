<style>
    nav {
        padding-left: 24px;
        height: 72px
    }
</style>
<nav class="flex justify-between items-center bg-white">
    <div>
        <img src="/image/logo.png" style="height: 105px">
    </div>
    <div class="@if (Auth::check()) hidden @else sm:hide @endif">
        <div></div>
        <div class="grid grid-cols-2 gap-6 px-4 " style="font-size: 14px">
            <a href="{{ route('register') }}"
                class="border text-red-500 border-red-500 rounded-full  py-3 px-4 cursor-pointer text-center "
                style="min-widht:140px">สมัครสมาชิก</a>
            <a href="{{ route('login') }}"
                class="bg-red-600 hover:bg-red-500 rounded-full py-3 px-4 text-white cursor-pointer text-center"
                style="min-width: 140px">เข้าสู่ระบบ</a>
        </div>
        <div>
        </div>
    </div>
    <div class="@if (Auth::check()) flex px-2 @else hidden @endif  cursor-pointer">
        <div>
            <button class="border text-red-500 border-red-500 rounded-full  py-3 px-4 cursor-pointer text-center "><i
                    class="fa-solid fa-qrcode mx-2"></i>แสกน</button>
        </div>
        <div class="justify-items-center items-center grid  px-7">
            <i class="fa-solid fa-bag-shopping text-gray-500 m" style="font-size: 20px"></i>
        </div>
        <div class="justify-items-center items-center grid px-7">
            <i class="fa-regular fa-heart text-gray-500" style="font-size: 20px"></i>
        </div>
        <div class="justify-items-center items-center grid px-7">
            <i class="fa-solid fa-inbox text-gray-500" style="font-size: 20px"></i>
        </div>
        <div class="justify-items-center items-center flex px-7 navbar">
            <div class="dropdown">
                <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user text-gray-500">
                    <div class="d-sm-none d-lg-inline-block"></div>TH <i class="fa-solid fa-caret-down"></i>
                </a>
                {{-- <div class="dropdown-menu dropdown-menu-right">
                    <ul class="px-4">
                        <li><label>TH</label></li>
                        <li><label>EN</label></li>
                    </ul>
                </div> --}}

            </div>
        </div>
        <div class="justify-items-center items-center grid px-7"> 
                    <a href="#" class=" js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                        <i class="fas fa-bars text-gray-500" style="font-size: 20px"></i>
                    </a>

            <aside class="sidebar">
                
                <div class="side-inner">

                    <div class="profile">
                        <img src="images/person_profile.jpg" alt="Image" class="img-fluid">
                        <h3 class="name">Debby Williams</h3>
                        <span class="country">New York, USA</span>
                    </div>

                    <div class="counter d-flex justify-content-center">
                        <!-- <div class="row justify-content-center"> -->
                        <div class="col">
                            <strong class="number">892</strong>
                            <span class="number-label">Posts</span>
                        </div>
                        <div class="col">
                            <strong class="number">22.5k</strong>
                            <span class="number-label">Followers</span>
                        </div>
                        <div class="col">
                            <strong class="number">150</strong>
                            <span class="number-label">Following</span>
                        </div>
                        <!-- </div> -->
                    </div>

                    <div class="nav-menu">
                        <ul>
                            <li class="active"><a href="#"><span class="icon-home mr-3"></span>Feed</a></li>
                            <li><a href="#"><span class="icon-search2 mr-3"></span>Explore</a></li>
                            <li><a href="#"><span class="icon-notifications mr-3"></span>Notifications</a></li>
                            <li><a href="#"><span class="icon-location-arrow mr-3"></span>Direct</a></li>
                            <li><a href="#"><span class="icon-pie-chart mr-3"></span>Stats</a></li>
                            <li><a href="#"><span class="icon-sign-out mr-3"></span>Sign out</a></li>
                        </ul>
                    </div>
                </div>

            </aside>
        </div>
    </div>
    <div class="sm:flex md:hidden">
        <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
    </div>

</nav>
