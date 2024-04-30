@extends("master.master")

@section("slice")

<div class="row d-flex align-item-center justify-content-center">
    <div class="col-4 ">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('login.submit') }}" method="post">

                <div class="mb-2">
                    <label for="name" class="from-label">name*</label>
                    <input type="text" name="name" class="form-control">
                </div>

                <div class="mb-2">
                    <label for="email" class="from-label">Email*</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

