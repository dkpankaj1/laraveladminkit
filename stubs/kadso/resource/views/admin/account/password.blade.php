<x-app-layout>

    <form action="{{ route('admin.account.password') }}" method="post">
        @csrf
        @method('patch')

        <div class="card" style="font-weight:bold">

            <div class="card-body">

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Current Password</label>
                            <input type="password" name="current_password" placeholder="Current Password"
                                class="form-control">
                            @error('current_password')
                                <div class="invalid-feedback d-block text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Password</label>
                            <input type="password" name="password" placeholder="New Password" class="form-control">
                            @error('password')
                                <div class="invalid-feedback d-block text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Confirm Password</label>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                class="form-control">
                            @error('password_confirmation')
                                <div class="invalid-feedback d-block text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr>

                        <button class="btn btn-primary px-5">Update</button>

                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </form>

</x-app-layout>