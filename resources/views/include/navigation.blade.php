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
    <div class="@if (Auth::check()) hidden @else md:hidden lg:flex @endif">
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
                <a href="#" data-toggle="dropdown"
                    class="nav-link dropdown-toggle nav-link-lg nav-link-user text-gray-500">
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
                        @if (Auth::check())
                            <h3 class="name">{{ Auth::user()->Fname }} {{ Auth::user()->Lname }}</h3>
                        @endif

                    </div>

                    <div class="nav-menu  border-b border-gray-100">
                        <ul>
                            <li><a href="{{ route('product_category') }}"><i
                                        class="fa-regular fa-file mr-3"></i>จัดการหมวดหมู่สินค้า</a></li>
                            <li><a href="{{ route('setting_category') }}"><i
                                        class="fa-solid fa-gear mr-3"></i></i>ตั้งค่าหมวดหมู่สินค้า</a></li>
                        </ul>
                    </div>

                    <div class="foot" style="height: 100%;position: absolute; ">
                        <div>
                            <ul>
                                <li><a href="{{ route('logout') }}"><i
                                            class="fa-solid fa-power-off mr-3 mt-1"></i>ออกจากระบบ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </aside>
        </div>
    </div>
    <div class="lg:hidden md:flex">
        <div class="justify-items-center items-center grid px-7">
            <a href="#" class=" js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
                <i class="fas fa-bars text-gray-500" style="font-size: 20px"></i>
            </a>

            <aside class="sidebar">

                <div class="side-inner">

                        <div class="grid grid-cols-1 gap-6 px-4 " style="font-size: 14px">
                            <div>
                                 <a href="{{ route('register') }}" id="regis"></a>
                                <button href="{{ route('register') }}"
                                class="border text-red-500 border-red-500 rounded-full  py-3 px-4 cursor-pointer text-center w-full"
                                style="min-widht:140px" id="regisbutton">สมัครสมาชิก</button>
                            </div>
                            <br>
                            <div >
                                <a href="{{ route('login') }}" id="login" class="bg-red-600 "></a>
                                <button
                                class="bg-red-600 hover:bg-red-500 rounded-full py-3 px-4 text-white cursor-pointer text-center w-full"
                                style="min-width: 140px" id="loginbutton">เข้าสู่ระบบ</button>
                            </div>
                        </div>
                </div>

            </aside>
        </div>
    </div>
<script>
    $(document).ready(function() {
        $('#loginbutton').click(function () { 
            document.getElementById('login').click();
        })
        $('#regisbutton').click(function () { 
            document.getElementById('regis').click();
        })
    })
</script>
</nav>
