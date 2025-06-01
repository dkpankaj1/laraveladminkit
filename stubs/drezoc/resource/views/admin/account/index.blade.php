<x-app-layout>

    <div class="card">
        <div class="card-body">

            <div class="align-items-center">
                <div class="d-flex align-items-center">
                    <div class="overflow-hidden ms-4">
                        <h4 class="m-0 text-dark fs-20">{{ $user->name }}</h4>
                        <p class="my-1 text-muted fs-16">{{ $user->email }}</p>
                    </div>
                </div>
                <hr>
                <a class="btn btn-primary" href="{{ route('admin.account.update') }}">Edit Profile</a>
            </div>


        </div>
    </div>

</x-app-layout>