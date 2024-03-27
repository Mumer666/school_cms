<x-admin-master>

    @section('main_content')
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Classroom Data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>className</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>className</th>
                            <th>Updated_at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($classes as $class)
                            <tr>
                                <td>{{$class->id}}</td>
                                <td>{{$class->className}}</td>
                                <td>{{$class->created_at}}</td>
                                <td>{{$class->updated_at}}</td>
                                <td>
                                    <a href="{{route('editClass' , $class->id)}}"><button class="btn btn-primary">Edit</button></a>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('deleteClass' , $class->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

</x-admin-master>
