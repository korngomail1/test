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
        <form action="{{ route('register') }}" method="POST">
            @csrf
            @method('POST')
            <div class="grid justify-items-center" style="padding: 40px 0px">
                <div class="max-w-lg rounded-xl overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="/image/card.png" alt="Sunset in the mountains">
                    <div class="grid grid-cols-1" style="padding: 40px">
                        <div class="grid grid-cols-2 gap-5 mb-4">
                            <div>
                                <label>ชื่อ</label>
                                <input class="w-full" type="text" style="margin-top: 8px" placeholder="กรอกชื่อ"
                                    id="Fname" name="Fname">
                            </div>
                            <div>
                                <label>นามสกุล</label>
                                <input class="w-full" type="text" style="margin-top: 8px" placeholder="กรอกนามสกุล"
                                    id="Lname" name="Lname">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label>เบอร์โทรศัพท์</label>
                            <input class="w-full" type="number" style="margin-top: 8px" placeholder="กรอกเบอร์โทรศัพท์"
                                name="Tel" pattern="[0-9]{10}" required>
                        </div>
                        <div class="mb-4">
                            <label>อีเมล</label>
                            <input class="w-full" type="email" style="margin-top: 8px" placeholder="กรอกอีเมล"
                                name="Email">
                        </div>
                        <div class="mb-4">
                            <label>รหัสผ่าน</label>
                            <input class="w-full" type="password" style="margin-top: 8px" placeholder="กรอกรหัสผ่าน"
                                name="Password">
                        </div>
                        <div class="grid grid-cols-4 gap-4 mb-4" style="font-size: 14px">
                            <div class="hidden">
                                <div>
                                    <input type="radio" id="man" name="Gender" value="1" />
                                </div>

                                <div>
                                    <input type="radio" id="woman" name="Gender" value="2" />
                                </div>

                                <div>
                                    <input type="radio" id="none" name="Gender" value="0" checked />
                                </div>
                            </div>
                            <div>
                                <label for="">เพศ (ไม่ระบุได้)</label><br>
                                <button type="button" id="1"
                                    class="mt-4  rounded-full text-red-500 border  py-3 px-4 cursor-pointer text-center w-full"
                                    style="margin-top: 8px">ชาย</button>
                            </div>
                            <div class="flex items-end">
                                <button type="button" id="2"
                                    class="mt-4  rounded-full text-red-500 border  py-3 px-4 cursor-pointer text-center w-full"
                                    style="margin-top: 8px">หญิง</button>
                            </div>
                            <div class="flex items-end">
                                <button type="button" id="0"
                                    class="mt-4 rounded-full text-red-500 border  py-3 px-4 cursor-pointer text-center w-full"
                                    style="margin-top: 8px">ไม่ระบุ</button>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="">ของขวัญวันเกิดรอคุณอยู่</label>
                            <input class="w-full" type="date" style="margin-top: 8px" name="Birthday">
                        </div>
                        <div class="mb-4">
                            <label for="checkbox1" class="cursor-pointer">
                                <input class="checkbox" id="checkbox1" type="checkbox" style="border-radius: 50%">
                                ฉันได้อ่านและยอมรับ
                                <a href="" class="text-red-500">ข้อกำหนดการใช้งาน</a> และ <a href=""
                                    class="text-red-500">นโยบายความเป็นส่วนตัว</a> ของสเวนเซ่นส์
                            </label>
                            <br><br>
                            <label for="checkbox2" class="cursor-pointer">
                                <input class="checkbox" id="checkbox2" type="checkbox" style="border-radius: 50%">
                                ฉันยินยอมรับข้อมูลข่าวสาร กิจกรรมส่งเสริมการขายต่างๆ จากสเวนเซ่นส์และ <a href=""
                                    class="text-red-500">บริษัทในเครือ</a>
                                โดยเราจะเก็บข้อมูลของท่านไว้เป็นความลับ สามารถศึกษาเงื่อนไขหรือข้อตกลง
                                <a href="" class="text-red-500">นโยบายความเป็นส่วนตัว</a>
                                เพิ่มเติมได้ที่เว็บไซต์ของบริษัทฯ
                            </label>
                        </div>
                        <div>
                            <button
                                id="submit"
                                class="bg-red-600 hover:bg-red-500 rounded-full w-full py-3 px-4 text-white cursor-pointer text-center"
                                style="min-width: 140px" >
                                สมัครสมาชิก
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </section>
    <script>
        $(document).ready(function() {

            $('#0').click(function() {
                $('#none').prop('checked', 'true');
                $('#0').addClass('bg-red-500 text-white');
                $('#1').removeClass('bg-red-500 text-white');
                $('#2').removeClass('bg-red-500 text-white');
            });
            $('#1').click(function() {
                $('#man').prop('checked', 'true');
                $('#1').addClass('bg-red-500 text-white');
                $('#2').removeClass('bg-red-500 text-white');
                $('#0').removeClass('bg-red-500 text-white');
            });
            $('#2').click(function() {
                $('#woman').prop('checked', 'true')
                $('#2').addClass('bg-red-500 text-white');
                $('#1').removeClass('bg-red-500 text-white');
                $('#0').removeClass('bg-red-500 text-white');
            });

            if ($('#none').is(':checked')) {
                $('#0').addClass('bg-red-500 text-white');
            }
        });
    </script>
</x-app-layout>
