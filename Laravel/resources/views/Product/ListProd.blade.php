 @include('Layout.header')
<body>
    <div class="container">

        @if(session('status'))
                <script> alert("{{session('status')}}")</script>
        
        @elseif(session('statusDelete'))
                <script>alert("{{session('statusDelete')}}")</script>
        @endif
        <table class="table table-light">
            <thead>
                <th>Product Name</th>
                <th>Price</th>
                <th>Email</th>
                <th>Description</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Image</th>
                <a href="{{route('add')}}">Form</a>
                <th></th>

            </thead>
            <tbody>
                @foreach($Prod as $key)
                    <tr>

                    <td>{{$key->Pname}}</td>
                    <td>{{$key->Price}}</td>
                    <td>{{$key->Email}}</td>
                    <td>{{$key->Description}}</td>
                    <td>{{$key->created_at}}</td>
                    <td>{{$key->updated_at}}</td>
                    <td><img src="{{$key->ProdImage}}" width = "100px" height = "100px" alt=""></td>
                    <td><a href="{{route('products.edit',$key->id)}}" class = "btn btn-primary">Edit</a></td>
                    
                    <td>
                        <form action="{{route('products.destroy',$key->id)}}" method = "post">
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



@include('Layout.footer')