<x-admin-master>

    @section('main_content')
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Courses Report</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Course Name</th>
                            <th>Instructor</th>
                            <th>Offered By</th>
                            <th>No. Of Enrollments</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sr.No</th>
                            <th>Course Name</th>
                            <th>Instructor</th>
                            <th>Offered By</th>
                            <th>No. Of Enrollments</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @for($i=0; $i<count($courses); $i++)
                            <tr>
                                <td>{{$i + 1}}</td>
                                <td>{{$courses[$i]->courseCode}}</td>
                                <td>{{$courses[$i]->teacherName}}</td>
                                <td>{{$courses[$i]->className}}</td>
                                <td>{{$courses[$i]->noOfStudents}}</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

</x-admin-master>
