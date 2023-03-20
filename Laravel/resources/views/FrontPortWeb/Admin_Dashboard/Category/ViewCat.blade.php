@include('FrontPortWeb.Layout.Dashboard');

<div class="container">
    @if(session('status'))
       <script>alert("{{session('status')}}")</script>
       @elseif(session('trash'))
       <script>alert("{{session('trash')}}")</script>
       @elseif(session('restore'))
       <script>alert("{{session('restore')}}")</script>
       @elseif(session('delete'))
       <script>alert("{{session('delete')}}")</script>
    @endif
    <form action="">
    @csrf
        <div class = "row">
            <div class = "col-lg-8">
                <input type="search" name = "search" placeholder = "Search here" class ="form-control">
                
            </div>
            <div class = "col-lg-4">
            <button type = "submit" class = "btn btn-primary">Search</button>
            </div>
        </div>
     </form><br>
    <a href="" class="btn btn-danger">GO to Trash</a>

    <table class = "table table-dark">
        <thead>
            <th>CATEGORY NAME</th>
            <th>DESCRIPTION</th>
            <th>Image</th>
            <th>CREATED AT</th>
            <th>UPDATED AT</th>
        </thead>
        <tbody>
            @foreach($Cat as $key)
             <tr>
                <td>{{$key->cat_Name}}</td>
                <td>{{$key->cat_Desc}}</td>
                <td><img src="{{$key->CatImg}}" width = "80px" height = "50px" alt=""></td>
                <td>{{$key->created_at}}</td>
                <td>{{$key->updated_at}}</td>
                <td> <a href="{{route('Admin-category.edit',$key->Cid)}}" class = "btn btn-primary">Edit</a> </td>
                <td>
                <form action="" method = "post">
                  
                    <!-- <a href="{{route('category.destroy',$key->Cid)}}" class = "btn btn-danger">Trash</a> -->
                <button type = "submit" class ="btn btn-danger">Trash</button>
                </form>
                </td>
             </tr>
            @endforeach
        </tbody>
    </table>

@include('FrontPortWeb.Layout.footer');