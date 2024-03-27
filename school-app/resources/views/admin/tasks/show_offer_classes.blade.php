<x-admin-master>

    @section('main_content')
        <div class="row">
            <div class="m-auto d-flex flex-column">
                <h3 class="mt-2 text-primary"><b>Select Classes To Offer Their Courses</b></h3>
            </div>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Classes Data</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Class Name</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Class Name</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($classes as $class)
                            <tr>
                                <td>{{$class->id}}</td>
                                <td><a href="{{route('showOfferCourses' , $class->id)}}">{{$class->className}}</a></td>
                                <td>{{$class->created_at}}</td>
                                <td>{{$class->updated_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endsection

</x-admin-master>
