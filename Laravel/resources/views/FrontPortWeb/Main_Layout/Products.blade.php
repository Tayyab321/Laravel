@include('FrontPortWeb.Layout.header') <br><br><br>

<div class="row container-fluid">
  @foreach($Prod as $key)
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