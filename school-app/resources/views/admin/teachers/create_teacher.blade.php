<x-admin-master>

    @section('main_content')
        <div style="height: 80vh" class="row">
            <div style="background: #9fcdff" class="col-lg-8 m-auto">
                <form class="m-5" method="POST" action="{{route('addTeacher')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="teacherName">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDesig" class="col-sm-3 col-form-label">Designation</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputDesig" placeholder="Designation" name="designation">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection

</x-admin-master>
