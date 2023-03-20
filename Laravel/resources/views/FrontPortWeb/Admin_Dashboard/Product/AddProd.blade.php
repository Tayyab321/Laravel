@include('FrontPortWeb.Layout.Dashboard');

      <div class="container"> <br>
  <h3>Insert Data In DataBase</h3> <br>

      <form action="{{route('Admin-product.store')}}" method = "post" enctype="multipart/form-data">
        @csrf
         <!-- @php
    print_r($errors->all());
    @endphp -->
    
    <div class = "row">
      <div class = "col-sm-12 col-lg-6">

        <div class="form-group">
          <label for="name">Product Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name">
          <span class = 'text-danger'>
              @error('name')
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
        </div>

        <div class="form-group">
          <label for="pwd">Price:</label>
          <input type="number" class="form-control" id="edu" placeholder="Enter Price" name="price">
            <span class = 'text-danger'>
            @error('price')
               {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
          <label for="img">Product Image:</label><br>
          <input type="file" id="img" name="prodImage">
          <span class = 'text-danger'>
            @error('prodImage')
               {{$message}}
              @enderror
          </span>
        </div>

        <button type="submit" class="btn btn-primary" name = "ins">Submit</button>
       <a class="btn btn-secondary" href="{{route('Admin-product.index')}}"><i class="fa fa-list-alt"></i> View All</a>

      </div>
    </div>
  </form>
</div>

@include('FrontPortWeb.Layout.footer');




















