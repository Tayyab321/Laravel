@include('FrontPortWeb.Layout.Dashboard');

<div class="container"> <br>
  <h3>Insert Data In DataBase</h3> <br>

<form action="{{route('Admin-category.store')}}" method = "post" enctype="multipart/form-data">
  @csrf
    @php
    print_r($errors->all());
    @endphp
    <div class = "row">  
      <div class = "col-sm-12 col-lg-6">

        <div class="form-group">
          <label for="name">Category Name:</label>
          <input type="text" class="form-control" id="name" placeholder="Enter Category Name" name="name">
          <span class = 'text-danger'>
            @error('name')
            {{"$message"}}
            @enderror
          </span>
        </div>
        
        <div class="form-group">
          <label for="img">Image:</label><br>
          <input type="file" id="img" name="image">
          <span class = "text-danger">
            @error('image')
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
 
        <button type="submit" class="btn btn-danger" name = "sub">Submit</button>

        <a class="btn btn-secondary" href="{{route('Admin-category.index')}}"><i class="fa fa-list-alt"></i> View Category</a>

  
      </div>
    </div>


  </form>
</div>

@include('FrontPortWeb.Layout.footer');