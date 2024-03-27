<x-admin-master>

    @section('main_content')
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Teachers Report</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Teacher Name</th>
                            <th>Total Course Teaching</th>
                            <th>Total Students Enrolled</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sr.No</th>
                            <th>Teacher Name</th>
                            <th>Total Course Teaching</th>
                            <th>Total Students Enrolled</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @for($i=0; $i<count($students); $i++)
                            <tr>
                                <td>{{$i + 1}}</td>
                                <td>{{$students[$i]->teacherName}}</td>
                                <td>{{count($teachers[$i]->courses)}}</td>
                                <td>{{$students[$i]->totalStudents}}</td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

</x-admin-master>
