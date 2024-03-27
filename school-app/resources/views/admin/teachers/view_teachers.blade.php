<x-admin-master>

    @section('main_content')
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Teachers Data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Designation</th>
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
                            <th>Designation</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{$teacher->id}}</td>
                                    <td>{{$teacher->teacherName}}</td>
                                    <td>{{$teacher->designation}}</td>
                                    <td>{{$teacher->created_at}}</td>
                                    <td>{{$teacher->updated_at}}</td>
                                    <td>
                                        <a href="{{route('editTeacher' , $teacher->id)}}"><button class="btn btn-primary">Edit</button></a>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{route('deleteTeacher' , $teacher->id)}}" enctype="multipart/form-data">
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
