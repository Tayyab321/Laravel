@include('FrontPortWeb.Layout.Dashboard');
<body>
    <div class="container">

        @if(session('status'))
                <script> alert("{{session('status')}}")</script>
        
        @elseif(session('statusDelete'))
                <script>alert("{{session('statusDelete')}}")</script>
        @endif
        <table class="table table-dark">
            <thead>
                <th>Product Name</th>
                <th>Category</th>
                <th>price</th>
                <th>Image</th>
                <th>Created at</th>
                <th>Updated at</th>
                <a href="">Form</a>
                <th></th>

            </thead>
            <tbody>
                @foreach($Prod as $key)
                    <tr>

                    <td>{{$key->prod_Name}}</td>
                    <td>{{$key->cat_Name}}</td>
                    <td>{{$key->prod_Price}}</td>
                    <td><img src="{{$key->prod_Image}}" width = "80px" height = "50px" alt=""></td>
                    <td>{{$key->created_at}}</td>
                    <td>{{$key->updated_at}}</td>  
                    <td><a href="{{route('Admin-product.edit',$key->Pid)}}" class = "btn btn-primary">Edit</a></td>
                    
                    <td>
                        <form action="" method = "post">
                            @csrf
                            @method('DELETE')
                            <button type = "submit" class = "btn btn-danger">Delete</button>
                        </form>
                    </td>
                     
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
 @include('FrontPortWeb.Layout.footer')