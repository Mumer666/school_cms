<x-admin-master>
    @section('main_content')
        <div style="height: 80vh" class="row">
            <div style="background: #9fcdff" class="col-lg-8 m-auto">
                <form class="m-5" method="POST" action="{{route('updateTeacher' , $teacher->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="teacherName" value="{{$teacher->teacherName}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDesig" class="col-sm-3 col-form-label">Designation</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputDesig" placeholder="Designation" name="designation" value="{{$teacher->designation}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection
</x-admin-master>
