<div class="Content">
    <div class="subcontent">

        @foreach ($products as $item)

        <div class="gallery">
            <a target="_blank" href="{{ asset('images') }}/{{ $item->p_image }}">
                <img src="{{ asset('images') }}/{{ $item->p_image }}" title="รายการที่ 1" width="300" height="300">
            </a>
            <div class="desc"> <span style="font-size: 10px">{{ $item->p_code }}</span><br>
                {{ $item->value }} ฿ </div>
        </div>

        @endforeach

    </div>
</div>