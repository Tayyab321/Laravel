@include('Layout.header');

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
    <a href="{{url('/category_trash')}}" class="btn btn-danger">GO to Trash</a>

    <table class = "table table-dark">
        <thead>
            <th>CATEGORY NAME</th>
            <th>PRODUCT NAME</th>
            <th>DESCRIPTION</th>
            <th>CREATED AT</th>
            <th>UPDATED AT</th>
        </thead>
        <tbody>
            @foreach($Cat as $key)
            <tr>
                <td>{{$key->cat_Name}}</td>
                <td>{{$key->Pname}}</td>
                <td>{{$key->des}}</td>
                <td>{{getformatdata($key->created_at,"d-M-Y")}}</td>
                <td>{{$key->updated_at}}</td>
                <td> <a href="{{route('category.edit',$key->Cid)}}" class = "btn btn-primary">Edit</a> </td>
                <td>
                <form action="{{route('category.destroy',$key->Cid)}}" method = "post">
                    @csrf
                    @method('DELETE')
                    <!-- <a href="{{route('category.destroy',$key->Cid)}}" class = "btn btn-danger">Trash</a> -->
                <button type = "submit" class ="btn btn-danger">Trash</button>
                </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row">
        <div class = "col-lg-4" width = "50px">
        {{$Cat->links()}}
        </div>
       
    </div>
</div>

