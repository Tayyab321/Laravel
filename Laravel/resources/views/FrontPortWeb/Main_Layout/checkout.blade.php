@include('FrontPortWeb.Layout.header') <br><br><br>
<style>
.order-form .container {
      color: #4c4c4c;
      padding: 20px;
      box-shadow: 0 0 10px 0 rgba(0, 0, 0, .1);
      max-width: 650px;
    }

    .order-form-label {
      margin: 8px 0 0 0;
      font-size: 14px;
      font-weight: bold;
    }

.order-form-input,
.form-label,
.form-check-label {
      font-family: 'Open Sans', sans-serif;
      font-size: 14px;

    }

    .btn-submit:hover {
      background-color: #0D47A1 !important;
    }
</style>
<form action=""></form>
<section class="order-form m-4">
 <div class = "d-flex">
  <div class="container pt-4">
      <div class="row">
          <div class="col-12 px-4">
              <h1>You can see my Order Form</h1>
              <span>with some explanation below</span>
              <hr class="mt-1" />
          </div>

          <div class="col-12">
              <div class="row mx-4">
                  <div class="col-12">
                      <label class="order-form-label">Name</label>
                  </div>
                  <div class="col-sm-6">
                      <div class="form-outline">
                          <input type="text" id="form1" class="form-control order-form-input" />
                          <label class="form-label" for="form1">First</label>
                      </div>
                  </div>
                  <div class="col-sm-6 mt-2 mt-sm-0">
                      <div class="form-outline">
                          <input type="text" id="form2" class="form-control order-form-input" />
                          <label class="form-label" for="form2">Last</label>
                      </div>
                  </div>
              </div>

              <div class="row mt-3 mx-4">
                  <div class="col-12">
                      <label class="order-form-label">Email Address</label>
                  </div>
                  <div class="col-12">
                      <div class="form-outline">
                          <input type="email" id="form3" class="form-control order-form-input" />
                      </div>
                  </div>
              </div>

              <div class="row mt-3 mx-4">
                  <div class="col-12">
                      <label class="order-form-label">Phone Number</label>
                  </div>
                  <div class="col-12">
                      <div class="form-outline">
                          <input type="text" id="form4" class="form-control order-form-input" />
                      </div>
                  </div>
              </div>

              <div class="row mt-3 mx-4">
                  <div class="col-12">
                      <label class="order-form-label" for="date-picker-example">Date</label>
                  </div>
                  <div class="col-12">
                      <div class="form-outline datepicker" data-mdb-toggle-button="false">
                          <input
                          type="text" class="form-control order-form-input" id="datepicker1" data-mdb-toggle="datepicker" />
                          <label for="datepicker1" class="form-label">Select a date</label>
                      </div>
                  </div>
              </div>

              <div class="row mt-3 mx-4">
                  <div class="col-12">
                      <label class="order-form-label">Adress</label>
                  </div>
                  <div class="col-12">
                      <div class="form-outline">
                          <input type="text" id="form5" class="form-control order-form-input" />
                          <label class="form-label" for="form5">Street Address</label>
                      </div>
                  </div>
                  <div class="col-12 mt-2">
                      <div class="form-outline">
                          <input type="text" id="form6" class="form-control order-form-input" />
                          <label class="form-label" for="form6">Street Address Line 2</label>
                      </div>
                  </div>
                  <div class="col-sm-6 mt-2 pe-sm-2">
                      <div class="form-outline">
                          <input type="text" id="form7" class="form-control order-form-input" />
                          <label class="form-label" for="form7">City</label>
                      </div>
                  </div>
                  
                  <div class="col-sm-6 mt-2 pe-sm-2">
                      <div class="form-outline">
                          <input type="text" id="form9" class="form-control order-form-input" />
                          <label class="form-label" for="form9">Postal / Zip Code</label>
                      </div>
                  </div>
                  <div class="col-sm-6 mt-2 ps-sm-0">
                      <div class="form-outline">
                          <input type="text" id="form10" class="form-control order-form-input" />
                          <label class="form-label" for="form10">Country</label>
                      </div>
                  </div>
              </div>

              <div class="row mt-3 mx-4">
                  <div class="col-12">
                      <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                          <label class="form-check-label" for="flexCheckDefault">I know what I need to know</label>
                      </div>
                  </div>
              </div>

              <div class="row mt-3">
                  <div class="col-12">
                      <button type="button" id="btnSubmit" class="btn btn-primary d-block mx-auto btn-submit">Submit</button>
                  </div>
              </div>
          </div>
      </div>
  </div>

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
                
                
              
              <div class="col-md-4 col-lg-4 col-xl-4">
                <p class="lead fw-normal mb-2">{{$key->prod_Name}}</p>
                <!-- <p><span class="text-muted">Size: </span>M <span class="text-muted">Color: </span>Grey</p> -->
              </div>
              <div class="col-md-4 col-lg-4 col-xl-4 d-flex">
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
              <form action="{{route('cart.destroy',$key->Cart_id)}}" method = "post">
                     @csrf
                     @method('DELETE')
                    <button type = "submit" class = "btn btn-danger btn-sm">Remove</button>
                </form>
              <div class="col-md-4 col-lg-4 col-xl-4 offset-lg-1">
                <h5 class="mb-0">Rs {{$key->prod_Price * $key->Prod_qty}}</h5>
              </div>
            </div>
            <hr>
            @endforeach
          </div>
        </div>

        <!-- <div class="card mb-4">
          <div class="card-body p-4 d-flex flex-row">
            <div class="form-outline flex-fill">
              <input type="text" id="form1" class="form-control form-control-lg" />
              <label class="form-label" for="form1">Discound code</label>
            </div>
            <button type="button" class="btn btn-outline-warning btn-lg ms-3">Apply</button>
          </div>
        </div> -->

        <div class="card">
          <div class="card-body">
            <button type="button" class="btn btn-warning btn-block btn-lg">Place an order</button>
          </div>
        </div>

      </div>
    </div>
    </div>
  </div>
</section>
</form>

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