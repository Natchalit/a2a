<div class="container">

    
    <div class="Content"><br>
        <a href="/product" class="btn btn-danger" style="margin-left: 60px;" >Back</a>
        <br>
            <div class="A2Aform"><br>
                <h2>ORDER FORM</h2>
                <div>
                </div>
                <div style="margin-bottom: 20px;">
                    <img src="{{ asset('images') }}/{{ $product->p_image }}" class="thumbnail" width="200" alt="">
                </div>
        
                <form method="post" action="{{ Route('sentorder') }}">
                    @csrf
                    <div class="form-group">
                        <label for="inputFname">First Name:</label>
                        <input type="text" class="form-control" style="margin-bottom: 0px" name="fname" id="inputFname" autocomplete="fname" autofocus
                            style="text-align: center;" required>
                        <span class="text-danger"><br>@error('fname'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="inputLname">Last Name:</label>
                        <input type="text" class="form-control" style="margin-bottom: 0px" name="lname" id="inputLname" autocomplete="lname" autofocus style="
                        text-align: center;" required>
                        <span class="text-danger"><br>@error('lname'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address:</label>
                        <input type="text" class="form-control" style="margin-bottom: 0px" name="address" id="inputAddress" autocomplete="address" autofocus style="
                        text-align: center;" required>
                        <span class="text-danger"><br>@error('address'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="inputTel">Phone Number:</label>
                        <input type="text" class="form-control" style="margin-bottom: 0px" name="tel" id="inputTel" autocomplete="tel" autofocus style="
                        text-align: center;" required>
                        <span class="text-danger"><br>@error('tel'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group" hidden>
                        <label for="inputProduct">Product ID:</label>
                        <input type="text" class="form-control" style="margin-bottom: 0px" name="id" id="id" autocomplete="id" style="
                        text-align: center;" value="{{ $product->id }}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputProduct">Product Name:</label>
                        <input type="text" class="form-control" style="margin-bottom: 0px" name="p_name" id="p_name" autocomplete="p_name" style="
                        text-align: center;" value="{{ $product->p_name }}"
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="inputProduct">Price:</label>
                        <input type="text" class="form-control" style="margin-bottom: 0px" name="value" id="value" autocomplete="value" style="
                        text-align: center;" value="{{ $product->value }}"
                            readonly>
                        <span class="text-danger"><br>@error('p_name'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="inputAmount">Amount:</label>
                        <input type="number" class="form-control" style="margin-bottom: 0px" name="amount" id="amount" autocomplete="amount"
                        style="text-align: center;" >
                        <span class="text-danger"><br>@error('value'){{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="inputType">Type:</label>
                        <input type="text" class="form-control" style="margin-bottom: 0px" name="type" id="type" autocomplete="type" 
                        style="text-align: center;" value="{{ $product->type }}" readonly>
                        <span class="text-danger"><br>@error('type'){{ $message }} @enderror</span>
                    </div>
        
                    <input type="submit" class="button-g" value="Confirm">
                    <input type="reset" class="button-r" value="Cancel">
        
                </form>
        
            </div>
    </div>
</div>
