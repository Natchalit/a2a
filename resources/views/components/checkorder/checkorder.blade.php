<div class="container">
    <div class="row">
        <div class="Content">
            <div class="card" style="margin: 0px 200px 0px 200px">
                <div class="card-header text-center">
                    <h2>Bill</h2>
                </div>

                <div class="card-body" style="text-align: center">

                    <form method="post" action="{{ route('bill') }}">
                        @csrf
                        <div style="text-align: center">
                            <div style="margin: 20px 20px 20px 0px;">
                                <img src="{{ asset('images') }}/{{ $product->p_image }}" class="thumbnail" width="200"
                                    alt="">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div style="text-align: center">
                                        <h4>Product Info</h4>
                                        <h5 class="card-title" style="margin-bottom:20px ">
                                            {{ $order->p_name }}
                                        </h5>
                                        <p> <b>Type:</b> {{ $product->type }}</p>
                                        <p> <b>Price:</b> {{ $product->value }}</p>
                                        <p> <b>Amount:</b> {{ $order->amount }} </p>
                                        <p> <b>Total: {{ $order->total }} ฿</b> </p>
                                        <br>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <h4 style="margin-bottom:20px">Customer Info</h4>
                                    <h5 class="card-title" style="margin-bottom:20px ">
                                        {{ $order->fname }} {{ $order->fname }}
                                    </h5>
                                    <p> <b>Address:</b> {{ $order->address }}</p>
                                    <p> <b>Phone number:</b> {{ $order->tel }}</p>
                                </div>
                            </div>

                        </div>
                        <div hidden>
                            <input type="text" name="p_id" id="p_id" value="{{ $product->id }}">
                            <input type="text" name="fname" id="name" value="{{ $order->fname }}">
                            <input type="text" name="lname" id="lname" value="{{ $order->lname }}">
                            <input type="text" name="tel" id="tel" value="{{ $order->tel }}">
                            <input type="text" name="address" id="address" value="{{ $order->address }}">
                            <input type="number" name="total" id="total" value="{{ $order->total }}">
                            <input type="number" name="amount" id="amount" value="{{ $order->amount }}">
                        </div>

                        <button type="submit" class="btn btn-primary">Confirm</button>
                        <a href="/product" class="btn btn-danger">Back</a>
                    </form>

                </div>

            </div>

        </div>
    </div>
</div>