@include('Layout.header');

<div class="container">
    @if(session('status'))
       <script>alert("{{session('status')}}")</script>
       @elseif(session('restore'))
       <script>alert("{{session('restore')}}")</script>
       @elseif(session('delete'))
       <script>alert("{{session('delete')}}")</script>
        
    @endif
    <a href="{{route('category.index')}}" class="btn btn-danger">Category View</a>
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
                <td> <a href="{{url('/category_restore',$key->Cid)}}" class = "btn btn-primary">Restore</a> </td>
                <td>
                <form action="{{url('/category/delete',$key->Cid)}}" method = "post">
                    @csrf
                    @method('get')
                <button type = "submit" class ="btn btn-danger">Delete</button>
                </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

