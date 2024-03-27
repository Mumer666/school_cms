<x-admin-master>

    @section('main_content')
        <div class="row">
            <div class="m-auto d-flex flex-column">
                <h3 class="mt-2 text-primary"><b>Assign Courses For {{$teacher->teacherName}}</b></h3>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Courses Data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Assigned</th>
                            <th>Id</th>
                            <th>CourseCode</th>
                            <th>CreditHours</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Attach</th>
                            <th>Detach</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Assigned</th>
                            <th>Id</th>
                            <th>CourseCode</th>
                            <th>CreditHours</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Attach</th>
                            <th>Detach</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>
                                    <input type="checkbox"
                                        @foreach($teacher->courses as $tea_course)
                                            @if($tea_course->courseCode == $course->courseCode)
                                                checked
                                            @endif
                                        @endforeach
                                    >
                                </td>
                                <td>{{$course->id}}</td>
                                <td>{{$course->courseCode}}</td>
                                <td>{{$course->creditHours}}</td>
                                <td>{{$course->created_at}}</td>
                                <td>{{$course->updated_at}}</td>
                                <td>
                                    <form method="POST" action="{{route('attachTeacherCourse' , $teacher->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                        <button class="btn btn-primary"
                                            @foreach($teacher->courses as $teacher_course)
                                                    @if($teacher_course->courseCode == $course->courseCode)
                                                        disabled
                                                    @endif
                                            @endforeach
                                        >
                                            Attach
                                        </button>
                                    </form>
                                </td>
                                <td>
                                    <form method="POST" action="{{route('detachTeacherCourse' , $teacher->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="course_id" value="{{$course->id}}">
                                        <button class="btn btn-danger">Detach</button>
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
