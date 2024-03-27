<x-admin-master>

    @section('main_content')
        <div style="height: 80vh" class="row">
            <div style="background: #9fcdff" class="col-lg-8 m-auto">
                <form class="m-5" method="POST" action="{{route('updateStudent' , $student->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="inputReg" class="col-sm-3 col-form-label">Registration No.</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputReg" placeholder="Reg_No" name="Reg_No" value="{{$student->Reg_No}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{$student->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthdaytime" class="col-sm-3 col-form-label">Date Of Birth:</label>
                        <div class="col-sm-9">
                            <input type="datetime-local" class="form-control" id="birthdaytime" name="birth" placeholder="D.O.B" value="{{$student->birth}}">
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
