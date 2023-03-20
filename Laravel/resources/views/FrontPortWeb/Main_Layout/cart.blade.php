@include('FrontPortWeb.Layout.header') <br><br><br>

@if(session('statusDelete'))
                <script>alert("{{session('statusDelete')}}")</script>
        @endif

<section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
          <div>
            <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                  class="fas fa-angle-down mt-1"></i></a></p>
          </div>
        </div>

        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
          @foreach($Cart as $key)
            <div class="row d-flex justify-content-between align-items-center product_data">
                
                
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img
                  src="{{$key->prod_Image}}" alt="Cotton T-shirt" width = "100px">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2">{{$key->prod_Name}}</p>
                <!-- <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p> -->
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-danger"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                  <i class="fas fa-minus">-</i>
                </button>

                <input id="form1" min="1" name="quantity" value="{{$key->Prod_qty}}" type="number"
                  class="qty form-control form-control-sm " max = "9"/>

                <button class="increment-btn btn btn-info px-2" >
                  <i class="fas fa-plus"></i>+
                </button>
                <!-- <a href="" class = "btn btn-success px-2" 
                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">+
                </a> -->
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0">Rs {{$key->prod_Price * $key->Prod_qty}}</h5>
              </div>
              <div class="col-md-2 col-lg-2 col-xl-2">
                <!-- <a href="" class="text-danger">Remove<i class="fas fa-trash fa-lg"></i></a> -->
                <form action="{{route('cart.destroy',$key->Cart_id)}}" method = "post">
                     @csrf
                     @method('DELETE')
                    <button type = "submit" class = "btn btn-danger">Remove</button>
                </form>
              </div>
             
              
           
                  
             
            </div>
            @endforeach
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-body p-4 d-flex flex-row">
            <div class="form-outline flex-fill">
              <input type="text" id="form1" class="form-control form-control-lg" />
              <label class="form-label" for="form1">Discound code</label>
            </div>
            <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<script>

$(document).ready(function(){

  $(".increment-btn").click(function(){
    var inc_value = $(this).closest(".product_data").find(".qty").val();
    var value = parseInt(inc_value,10);
    value = isNaN(value) ? 0 : value;
    if(value < 10){
      value++;
      $(this).closest(".product_data").find(".qty").val(value);
    }
  });
  $(".decrement-btn").click(function(){
    var qty = $(".qty").val();
    var value = parseInt(qty,10);
    value = isNaN(value) ? 0 : value;
    if(value > 1){
      value--;
      $(".qty").val(value);
    }
  });


});

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

@include('FrontPortWeb.Layout.footer')