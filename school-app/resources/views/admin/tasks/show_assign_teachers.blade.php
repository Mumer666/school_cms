<x-admin-master>

    @section('main_content')
        <div class="row">
            <div class="m-auto d-flex flex-column">
                <h3 class="mt-2 text-primary"><b>Select Teachers To Assign Them Courses</b></h3>
            </div>
        </div>
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
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($teachers as $teacher)
                            <tr>
                                <td>{{$teacher->id}}</td>
                                <td><a href="{{route('showAssignCourses' , $teacher->id)}}">{{$teacher->teacherName}}</a></td>
                                <td>{{$teacher->designation}}</td>
                                <td>{{$teacher->created_at}}</td>
                                <td>{{$teacher->updated_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

</x-admin-master>
