<div class="Content"><br>

    <div class="subcontent-p">

        <table class="products" width="100%" border="1" cellspacing="0" cellpadding="0">
            <tbody>
                <tr>
                    <th scope="col">ProductCode&nbsp;</th>
                    <th scope="col">ProductName&nbsp;</th>
                    <th scope="col">Price&nbsp;</th>
                    <th scope="col">Type&nbsp;</th>
                    <th scope="col">ProductPics&nbsp;</th>
                    <th scope="col"></th>
                </tr>
                @foreach ( $products as $item)    
                <tr>
                    <td align="center">{{ $item->p_code }}&nbsp;</td>
                    <td align="center">{{ $item->p_name }}&nbsp;</td>
                    <td align="center">{{ $item->value }}&nbsp;</td>
                    <td align="center">{{ $item->type }}&nbsp;</td>
                    <td align="center"><img src="{{ asset('images') }}/{{ $item->p_image }}" width="200" height="200" alt="" /></td>
                    <td align="center"><a href="{{ route('order',$item->id) }}" class="button-buy">Buy</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</div>