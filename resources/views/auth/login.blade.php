<x-app-layout>
    <style>
        label {
            font-size: 14px;
        }

        ::placeholder {
            font-size: 14px
        }

        .checkbox input[type="checkbox"]:checked {
            background-color: #66bb6a;
            border-color: #66bb6a;
        }
    </style>
    <section>
        <form action="{{ route('postlogin') }}" method="POST">
            @csrf
            @method('POST')
            <div class="grid justify-items-center" style="padding: 40px 0px">
                <div class="max-w-lg rounded-xl overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="/image/login.png" alt="Sunset in the mountains">
                    <div class="grid grid-cols-1" style="padding: 40px">
                        <div>
                            <label>อีเมล</label>
                            <input class="w-full" type="text" style="margin-top: 8px" placeholder="กรอกอีเมล"
                                name="Email">
                        </div>
                        <div class="mt-4 relative">
                            <label>รหัสผ่าน</label>
                            <input class="w-full" type="password" style="margin-top: 8px" placeholder="กรอกรหัสผ่าน"
                                id="password" name="Password" >
                            <i id="togglePasswordVisibility"
                                class="fa-regular fa-eye-slash absolute text-gray-400 cursor-pointer -translate-y-1/2 right-3 top-2/3 mt-1"></i>

                        </div>
                        <div class="mt-4">
                            <button id="submit"
                                class="bg-red-600 hover:bg-red-500 rounded-full w-full py-3 px-4 text-white cursor-pointer text-center"
                                style="min-width: 140px" >
                                เข้าสู่ระบบ
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </section>
    <script>
        $(document).ready(function() {
            $("#togglePasswordVisibility").click(function() {
                console.log('test');
                var passwordInput = $("#password");
                var passwordFieldType = passwordInput.attr("type");

                if (passwordFieldType === "password") {
                    passwordInput.attr("type", "text");
                    $(this).removeClass("fa-eye-slash").addClass("fa-eye");
                } else {
                    passwordInput.attr("type", "password");
                    $(this).removeClass("fa-eye").addClass("fa-eye-slash");
                }
            });
        });
    </script>
</x-app-layout>
