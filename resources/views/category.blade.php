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
        <form action="{{ route('store_category') }}" method="POST">
            @csrf
            @method('POST')
            <div class="grid justify-items-center" style="padding: 40px 0px">
                <div class="max-w-lg rounded-xl overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="/image/login.png" alt="Sunset in the mountains">
                    <div class="grid grid-cols-1" style="padding: 40px">
                        <div>
                            <label>ชื่อหมวดหมู่</label>
                            <input class="w-full" type="text" style="margin-top: 8px" placeholder="กรอกชื่อหมวดหมู่"
                                name="name">
                        </div> 
                        <div class="mt-4">
                            <button id="submit"
                                class="bg-red-600 hover:bg-red-500 rounded-full w-full py-3 px-4 text-white cursor-pointer text-center"
                                style="min-width: 140px" >
                                SAVE
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
