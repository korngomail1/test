<x-app-layout>
    <div style="background-color: white">
        <div style="margin-bottom: 40px">
            <img src="/image/banner.png" alt="">
        </div>
        <div class="" style="margin: 0px 120px">
            @foreach ($category as $item)
                <a class="px-6 cursor-pointer"
                    onclick="showproduct({{ $item->id }}, '{{ $item->name }}')">{{ $item->name }}</a>
            @endforeach
        </div>
        <h1 class="text-2xl " style="padding: 64px 0 0px;margin: 0px 80px" id="category_name"></h1>
        <div id="product" class="grid grid-cols-4 gabp-4">
            
        </div>

    </div>
    <script>
        function showproduct(params, name) {
            $('#category_name').html(name)
            $.ajax({
                type: 'GET',
                url: '{{ url('/api/product') }}',
                data: {
                    category_id: params
                },
                success: function(response) {
                    var html = ''
                    $.each(response, function(i, val) {

                        html += `<div  style="padding: 64px 0 80px;margin: 0px 40px"> 
                    <div class="max-w-sm rounded overflow-hidden shadow-lg">
                        <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains">
                        <div class="px-6 py-4">
                            <div  id="price">` 
                                +val.name + `<br> <label class="font-bold text-xl text-red-600 mb-2">`
                                +val.price + ` บาท <\label>
                            </div>
                        </div>
                    </div> 
            </div>`
                    });
                    $('#product').html(html);
                }
            })
        }
    </script>
</x-app-layout>
