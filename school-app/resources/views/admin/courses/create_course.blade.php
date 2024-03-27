<x-admin-master>

    @section('main_content')
        <div style="height: 80vh" class="row">
            <div style="background: #9fcdff" class="col-lg-8 m-auto">
                <form class="m-5" method="POST" action="{{route('addCourse')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputCode" class="col-sm-3 col-form-label">Course Code</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputCode" placeholder="Course Code" name="courseCode">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHours" class="col-sm-3 col-form-label">Credit Hours</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="inputHours" placeholder="Credit Hours" name="creditHours">
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
