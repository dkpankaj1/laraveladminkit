<x-app-layout>

    <form action="{{ route('admin.account.update') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card" style="font-weight:bold">

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}"
                                placeholder="Enter name" class="form-control">
                            @error('name')
                                <div class="invalid-feedback text-danger d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}"
                                placeholder="Enter email" class="form-control">
                            @error('email')
                                <div class="invalid-feedback text-danger d-block">{{ $message }}</div>
                            @enderror
                        </div>

                        <hr>

                        <button class="btn btn-primary px-5">{{"Update"}}</button>

                    </div>
                    <div class="col-md-4"></div>

                </div>
            </div>
        </div>
    </form>

</x-app-layout>