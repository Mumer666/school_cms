<x-admin-master>

    @section('main_content')
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Classes Report</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Class Name</th>
                            <th>Total Offered Courses</th>
                            <th>Name of Courses</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Sr.No</th>
                            <th>Class Name</th>
                            <th>Total Offered Courses</th>
                            <th>Name of Courses</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @for($i=0; $i<count($classes); $i++)
                            <tr>
                                <td>{{$i + 1}}</td>
                                <td>{{$classes[$i]->className}}</td>
                                <td>{{count($classes[$i]->courses)}}</td>
                                <td>
                                    @foreach($classes[$i]->courses as $course)
                                        <ul>
                                            <li>{{$course->courseCode}}</li>
                                        </ul>
                                    @endforeach
                                </td>
                            </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

</x-admin-master>
