@include('FrontPortWeb.Layout.header') <br><br><br>

<style>
    .bg-appointment {
  background: linear-gradient(rgba(55, 55, 63, 0.7), rgba(55, 55, 63, 0.7)), url(assets/images/appointment.jpg), no-repeat center center;
  background-size: cover;
}
.form-group {
  margin-bottom: 1rem;
}
.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + 0.75rem + 2px);
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 5px;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

@media (prefers-reduced-motion: reduce) {
  .form-control {
    transition: none;
  }
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0;
}

.form-control:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #495057;
}

.form-control:focus {
  color: #495057;
  background-color: #fff;
  border-color: #e0d7c6;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(180, 156, 115, 0.25);
}

.form-control::placeholder {
  color: #6c757d;
  opacity: 1;
}

.form-control:disabled, .form-control[readonly] {
  background-color: #e9ecef;
  opacity: 1;
}

input[type="date"].form-control,
input[type="time"].form-control,
input[type="datetime-local"].form-control,
input[type="month"].form-control {
  appearance: none;
}

select.form-control:focus::-ms-value {
  color: #495057;
  background-color: #fff;
}

.form-control-file,
.form-control-range {
  display: block;
  width: 100%;
}

.col-form-label {
  padding-top: calc(0.375rem + 1px);
  padding-bottom: calc(0.375rem + 1px);
  margin-bottom: 0;
  font-size: inherit;
  line-height: 1.5;
}

.col-form-label-lg {
  padding-top: calc(0.5rem + 1px);
  padding-bottom: calc(0.5rem + 1px);
  font-size: 1.25rem;
  line-height: 1.5;
}

.col-form-label-sm {
  padding-top: calc(0.25rem + 1px);
  padding-bottom: calc(0.25rem + 1px);
  font-size: 0.875rem;
  line-height: 1.5;
}

.form-control-plaintext {
  display: block;
  width: 100%;
  padding: 0.375rem 0;
  margin-bottom: 0;
  font-size: 1rem;
  line-height: 1.5;
  color: #757575;
  background-color: transparent;
  border: solid transparent;
  border-width: 1px 0;
}

.form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
  padding-right: 0;
  padding-left: 0;
}

.form-control-sm {
  height: calc(1.5em + 0.5rem + 2px);
  padding: 0.25rem 0.5rem;
  font-size: 0.875rem;
  line-height: 1.5;
  border-radius: 0.2rem;
}

.form-control-lg {
  height: calc(1.5em + 1rem + 2px);
  padding: 0.5rem 1rem;
  font-size: 1.25rem;
  line-height: 1.5;
  border-radius: 0.3rem;
}

select.form-control[size], select.form-control[multiple] {
  height: auto;
}

textarea.form-control {
  height: auto;
}

.form-group {
  margin-bottom: 1rem;
}

.form-text {
  display: block;
  margin-top: 0.25rem;
}

.form-row {
  display: flex;
  flex-wrap: wrap;
  margin-right: -5px;
  margin-left: -5px;
}

.form-row > .col,
.form-row > [class*="col-"] {
  padding-right: 5px;
  padding-left: 5px;
}

.form-check {
  position: relative;
  display: block;
  padding-left: 1.25rem;
}

.form-check-input {
  position: absolute;
  margin-top: 0.3rem;
  margin-left: -1.25rem;
}

.form-check-input[disabled] ~ .form-check-label,
.form-check-input:disabled ~ .form-check-label {
  color: #6c757d;
}

.form-check-label {
  margin-bottom: 0;
}

.form-check-inline {
  display: inline-flex;
  align-items: center;
  padding-left: 0;
  margin-right: 0.75rem;
}

.form-check-inline .form-check-input {
  position: static;
  margin-top: 0;
  margin-right: 0.3125rem;
  margin-left: 0;
}
.form-inline {
  display: flex;
  flex-flow: row wrap;
  align-items: center;
}

.form-inline .form-check {
  width: 100%;
}

@media (min-width: 576px) {
  .form-inline label {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 0;
  }
  .form-inline .form-group {
    display: flex;
    flex: 0 0 auto;
    flex-flow: row wrap;
    align-items: center;
    margin-bottom: 0;
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle;
  }
  .form-inline .form-control-plaintext {
    display: inline-block;
  }
  .form-inline .input-group,
  .form-inline .custom-select {
    width: auto;
  }
  .form-inline .form-check {
    display: flex;
    align-items: center;
    justify-content: center;
    width: auto;
    padding-left: 0;
  }
  .form-inline .form-check-input {
    position: relative;
    flex-shrink: 0;
    margin-top: 0;
    margin-right: 0.25rem;
    margin-left: 0;
  }
  .form-inline .custom-control {
    align-items: center;
    justify-content: center;
  }
  .form-inline .custom-control-label {
    margin-bottom: 0;
  }
}
.btn-warning{
    font-weight: bold;
    font-size: 18px;
}
.btn-warning:hover{
    color: white;
    font-weight: bold;
    background-color:black;
    
}
.des{
    font-size:20px;
    font-style:italic;
}
.detail{
    font-size:20px;
}
</style>


 <div class="container-fluid py-5">
  <h3>Home/{{$ProdInfo->cat_Name}} /{{$ProdInfo->prod_Name}}</h3>
        <div class="row -xl-5 product_data">
        
            <div class="col-lg-5 pb-5">
                <img class="w-100 h-100" src="{{$ProdInfo->prod_Image}}" alt="Image">
            </div>
            <div class="col-lg-7 pb-5">
                <h1 class="font-weight-bold"></h1>
                <div class="d-flex mb-3">
                    <div class="text-warning mr-2">
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star"></small>
                        <small class="fas fa-star-half-alt"></small>
                    </div>
                    <small class="pt-1"> <span></span>(50 Reviews)</small>
                </div>
                <h2 class="font-weight-semi-bold mb-4"></h4>
                
                <p class="mb-4 des"></p>
               
                <div class="d-flex mb-3 detail">
                    <p class="text-dark font-weight-medium mb-0 mr-3"><b>Product Name: </b>{{$ProdInfo->prod_Name}}</p>
                </div>
                <div class="d-flex mb-4 detail">
                    <p class="text-dark font-weight-medium mb-0 mr-3"> <b>Price: </b>{{$ProdInfo->prod_Price}}</p>
                </div>
                <div class="d-flex mb-4 detail">
                    <p class="text-dark font-weight-medium mb-0 mr-3"> <b>Category: </b>{{$ProdInfo->cat_Name}}</p>
                </div>
                <div class="d-flex mb-4 detail">
                    <p class="text-dark font-weight-medium mb-0 mr-3"> <b>Description: </b>{{$ProdInfo->prod_desc}}</p>
                </div>
                <div class = "input-group">
                  <input type="hidden" value = "{{$ProdInfo->Pid}}" class = "prod_id">
                <button class = "decrement-btn btn-danger">-</button>
                 <input type="text" class = "qty" value = "1">
                 <button class = "increment-btn btn-success" >+</button>  
                </div>
                <div class="d-flex align-items-center mb-4 pt-2">
                    <button class="btn btn-warning text-white px-3 add_to_cart"><i class="fa fa-shopping-cart mr-1"></i> Add To Cart</button>
                </div> 
            </div>
           
        </div>
        
      </div>

  


     <h2>Related Products</h2>
  <div class="row container-fluid mt-5">
  @foreach($Prods as $key)
    <div class = "col-lg-4 col-md-6 col-sm-12 mt-3">
         <div class="card" >
         <img class="card-img-top" src="{{$key->prod_Image}}" alt="Card image" style="height:250px">
            <div class="card-body">
            <h6>{{$key->cat_Name}}</h6>
            <h4 class="card-title text-dark">{{$key->prod_Name}}</h4>
            <p class="card-text text-dark">Rs {{$key->prod_Price}}</p>
            <a href="{{url('product-info/'.$key->cat_Name.'/'.$key->Pid)}}" class="btn btn-danger">See Collection</a>
            </div>
          </div>
    </div>
    @endforeach
    </div>

    <script>

      $(document).ready(function(){
        $(".add_to_cart").click(function(){

        var prod_id = $(this).closest(".product_data").find(".prod_id").val();
        var prod_qty = $(this).closest(".product_data").find(".qty").val();

        $.ajaxSetup({
        headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        });

      $.ajax({
          method: "POST",
          url: "/add-to-cart",
          data: {
            "prod_id" : prod_id,
            "prod_qty" : prod_qty,
          },
          success: function(response){
            alert(response.status);
          }
        });
        });

        $(".increment-btn").click(function(){
          var qty = $(".qty").val();
          var value = parseInt(qty,10);
          value = isNaN(value) ? 0 : value;
          if(value < 10){
            value++;
            $(".qty").val(value);
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