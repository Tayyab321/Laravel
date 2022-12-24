 @include('Layout.header')
<body>
    <div class="container">

        @if(session('status'))
                <script> alert("{{session('status')}}")</script>
        @endif
        <table class="table table-light">
            <thead>
                <th>Product Name</th>
                <th>Price</th>
                <th>Email</th>
                <th>Description</th>
                <th>Created at</th>
                <th>Updated at</th>

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
                     
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>



@include('Layout.footer')