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
    <div class="@if (Auth::check()) hidden @endif">
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
    <div class="@if (Auth::check()) grid grid-cols-6 gap-4 px-4 @else hidden  @endif  ">
        <div> 
            <button class="border text-red-500 border-red-500 rounded-full  py-3 px-4 cursor-pointer text-center "><i class="fa-solid fa-qrcode mx-2"></i>แสกน</button>
        </div>
        <div class="justify-items-center items-center grid">
            <i class="fa-solid fa-bag-shopping text-gray-500 m" style="font-size: 25px"></i>
        </div>
        <div class="justify-items-center items-center grid">
            <i class="fa-regular fa-heart text-gray-500" style="font-size: 25px"></i>
        </div>
        <div class="justify-items-center items-center grid">
            <i class="fa-solid fa-inbox text-gray-500" style="font-size: 25px"></i>
        </div>
        <div class="justify-items-center items-center grid">
            TH
        </div>
        <div class="justify-items-center items-center grid">
            <i class="fas fa-bars text-gray-500" style="font-size: 25px"></i>
        </div>
    </div>
    <div class="sm:flex md:hidden">
        <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
    </div> 
    
</nav>
