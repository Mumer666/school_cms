<x-admin-master>

    @section('main_content')
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
                            <th>Reg_No</th>
                            <th>Name</th>
                            <th>DOB</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Reg_No</th>
                            <th>Name</th>
                            <th>DOB</th>
                            <th>Created_at</th>
                            <th>Updated_at</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$student->id}}</td>
                                <td>{{$student->Reg_No}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->birth}}</td>
                                <td>{{$student->created_at}}</td>
                                <td>{{$student->updated_at}}</td>
                                <td>
                                    <a href="{{route('editStudent' , $student->id)}}"><button class="btn btn-primary" type="button">Edit</button></a>
                                </td>
                                <td>
                                    <form method="Post"  action="{{route('deleteStudent' ,$student->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Delete</button>
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

        @section('scripts')
            <!-- Page level plugins -->
            <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

            <!-- Page level custom scripts -->
            <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
        @endsection

</x-admin-master>
