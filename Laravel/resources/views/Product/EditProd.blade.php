@include('Layout.header')

  
<div class="container"> <br>
<h3>Insert Data In DataBase</h3> <br>

<form action="{{route('products.update',$Prod->id)}}" method = "post" enctype="multipart/form-data">
    @method('put')
@csrf
<div class = "row">


<div class = "col-sm-12 col-lg-6">

  <div class="form-group">
    <label for="name">Product Name:</label>
    <input type="text" class="form-control" id="name" placeholder="Enter Product Name" name="name" value = "{{$Prod->Pname}}">
    <span class = 'text-danger'>
        
    </span>
  </div>    

  <div class="form-group">
    <label for="pwd">Company Email:</label>
    <input type="email" class="form-control" id="edu" placeholder="Enter Email" name="email" value = "{{$Prod->Email}}">
      <span class = 'text-danger'>
        
    </span>
  </div>

  <div class="form-group">
    <label for="pwd">Price:</label>
    <input type="number" class="form-control" id="edu" placeholder="Enter Price" name="price" value = "{{$Prod->Price}}">
      <span class = 'text-danger'>
        
    </span>
  </div>

  <div class="form-group">
    <label for="pwd">Description:</label>
    <input type="text" class="form-control" id="edu" placeholder="Enter Description" name="desc" value = "{{$Prod->Description}}">
      <span class = 'text-danger'>
         
    </span>
  </div>


  

  <button type="submit" class="btn btn-primary" name = "ins">Update</button>

<a class="btn btn-secondary" href=""><i class="fa fa-list-alt"></i> View All</a>


</div>
</div>


</form>
</div>


@include('Layout.footer')