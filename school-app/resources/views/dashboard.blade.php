<x-admin-master>
    @section('main_content')
        <div style="height: 80vh" class="row">
            <div class="m-auto d-flex flex-column">
                <img class="m-auto" style="width: 200px; height: 200px" src="{{asset("images/admin.jpg")}}" alt="admin"/>
                <h3 class="mt-2">Welcome {{auth()->user()->name}} to Admin Section</h3>
            </div>
        </div>
    @endsection
</x-admin-master>
