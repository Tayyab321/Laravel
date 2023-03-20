

    @include('Layout.header')


  
      <div class="container"> <br>
  <h3>Insert Data In DataBase</h3> <br>

      <form action="{{route('products.store')}}" method = "post" enctype="multipart/form-data">
    @csrf
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

        <div class="form-group">
          <label for="pwd">Company Email:</label>
          <input type="email" class="form-control" id="edu" placeholder="Enter Email" name="email">
            <span class = 'text-danger'>
            @error('email')
               {{$message}}
              @enderror
          </span>
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
          <label for="img">Image:</label><br>
          <input type="file" id="img" name="image">
        </div>

        <div class="form-group">
          <label for="pwd">Description:</label>
          <input type="text" class="form-control" id="edu" placeholder="Enter Description" name="desc">
            <span class = 'text-danger'>
            @error('desc')
               {{$message}}
              @enderror
          </span>
        </div>

        <div class="form-group">
         <div class="captcha">
            <span>{!! captcha_img() !!}</span>
            <button type = "button" class = "btn btn-danger reload" id = "reload">Reload</button>
            <a href="{{route('add')}}" class = "btn btn-danger">Reload2</a>
         </div>
        </div>

        <div class="form-group">
          <label for="captcha"></label>
          <input type="text" class= "form-control" placeholder="Enter Your captcha here" name ="captcha">
        </div>
        <span class = "text-danger">
        @error('captcha')
           {{$message}}
          @enderror
        </span>
        
        <button type="submit" class="btn btn-primary" name = "ins">Submit</button>

    <a class="btn btn-secondary" href="{{route('products.index')}}"><i class="fa fa-list-alt"></i> View All</a>

  
      </div>
    </div>


  </form>
</div><br>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
  $('#reload').click(function(){
    $.ajax({
       type: 'GET';
       Url: 'ab',
      success:function(data){
        $('.captcha span').html(data.captcha)
      }
    });
  });
</script>


@include('Layout.footer')




















