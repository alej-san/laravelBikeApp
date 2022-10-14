@extends ('body.base')

@section('content')
    {{-- @parent --}}
    <div class="row" style="margin-top: 8px;">
        @if(session()->has('user'))
            User is logged in.
        @else
            User is not looged in.
        @endif
        &nbsp;
    </div>
    <div class="row" style="margin-top: 8px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"># id</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">delete</th>
                    <th scope="col">edit</th>
                    <th scope="col">show</th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td>
                           1
                        </td>
                        <td>
                            Kymco
                        </td>
                        <td>
                            500
                        </td>
                       
                            <td>
                                <a href"{{ url('bike/' . '1') }}">delete</a>
                            </td>
                            <td>
                                <a href="{{ url('bike/' . 1 . '/edit') }}">edit</a>
                            </td>
                      
                        <td>
                            <a href="{{ url('bike/' . 1 )}}">show</a>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                           2
                        </td>
                        <td>
                            Vroom
                        </td>
                        <td>
                            1000
                        </td>
                       
                            <td>
                                <a href"{{ url('bike/' . '2') }}">delete</a>
                            </td>
                            <td>
                                <a href="{{ url('bike/' . 2 . '/edit') }}">edit</a>
                            </td>
                      
                        <td>
                            <a href="{{ url('bike/' . 2 )}}">show</a>
                        </td>
                    </tr>
            
            </tbody>
        </table>
    </div>
    
    <div class="row">
        <a href="{{ url('bike/create') }}" class="btn btn-success">add product</a>
    </div>
    
@endsection
