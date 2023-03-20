@include('FrontPortWeb.Layout.Dashboard');

      <div class="container"> <br>
  <h3>Add Product Info</h3> <br>

      <form action="{{route('ProdInfoStore')}}" method = "post" enctype="multipart/form-data">
        @method('Get')
        @csrf
         <!-- @php
    print_r($errors->all());
    @endphp -->
    
    <div class = "row">
      <div class = "col-sm-12 col-lg-6">

        <div class="form-group wrap-input1">
                        <label for="name">Product Name</label>
                        <select class="form-control wrap-input1" id="cat" name="ProdName">
                        <option value="">--Select--</option>
                            <!-- Get dropdown data code -->
                          @foreach($Prod as $key)
                                  <option value="{{$key->Pid}}">{{$key->prod_Name}}</option>   
                           @endforeach
                        </select>
                        <span class = "text-danger">
           @error('ProdName')
            {{$message}}
            @enderror
            </span>
        </div>

        <div class="form-group wrap-input1">
                        <label for="name">Category Name</label>
                        <select class="form-control wrap-input1" id="cat" name="catName">
                        <option value="">--Select--</option>
                            <!-- Get dropdown data code -->
                          @foreach($Cat as $key)
                                  <option value="{{$key->Cid}}">{{$key->cat_Name}}</option>   
                           @endforeach
                        </select>
                        <span class = "text-danger">
            @error('catName')
            {{$message}}
            @enderror
            </span>
                        
        </div>

        <div class = "form-group">
            <label for="description">Description: </label>
            <input type="text" class="form-control" id ="descript" placeholder = "Enter your description" name = "desc">
            <span class = "text-danger">
            @error('desc')
            {{$message}}
            @enderror
            </span>
        </div>

        <button type="submit" class="btn btn-primary" name = "ins">Submit</button>
       <a class="btn btn-secondary" href=""><i class="fa fa-list-alt"></i> View All</a>

      </div>
    </div>
  </form>
</div>

@include('FrontPortWeb.Layout.footer');




















