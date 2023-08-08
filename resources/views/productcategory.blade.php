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
        <form action="{{ route('store_product_category') }}" method="POST">
            @csrf
            @method('POST')
            <div class="grid justify-items-center" style="padding: 40px 0px">
                <div class="max-w-lg rounded-xl overflow-hidden shadow-lg bg-white">
                    <img class="w-full" src="/image/login.png" alt="Sunset in the mountains">
                    <div class="grid grid-cols-1" style="padding: 40px">
                        <div>
                            <label>ชื่อหมวดหมู่สินค้า</label>
                            <select class="w-full" type="text" style="margin-top: 8px"  name="category_id">
                                @foreach ($category as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select> 
                        </div>
                        <div class="mt-4 relative">
                            <label>ชื่อสินค้า</label>
                            <input class="w-full" type="text" style="margin-top: 8px" placeholder="กรอกชื่อสินค้า"
                                id="name" name="name" >
                            
                        </div>
                        <div class="mt-4 relative">
                            <label>ราคา(ราคา)</label>
                            <input class="w-full" type="text" style="margin-top: 8px" placeholder="กรอกราคา"
                                id="price" name="price" >
                            
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
        
    </script>
</x-app-layout>
