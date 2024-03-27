<x-admin-master>

    @section('main_content')
        <div class="row">
            <div class="m-auto d-flex flex-column">
                <h3 class="mt-2 text-primary"><b>Select Student To Enroll His Courses</b></h3>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Students Data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Registration No</th>
                            <th>Name</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Registration No</th>
                            <th>Name</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->Reg_No}}</td>
                                <td><a href="{{route('showEnrollCourses', $student->id)}}">{{$student->name}}</a></td>
                                <td>{{$student->created_at}}</td>
                                <td>{{$student->updated_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection


</x-admin-master>
