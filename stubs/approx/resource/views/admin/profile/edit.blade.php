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
                            <x-input-label name="name" text="Name"/>
                            <x-input-field name="name" type="text" value="{{ old('name', $user->name) }}" placeholder="Enter name"/>
                        </div>

                        <div class="mb-3">
                            <x-input-label name="email" text="Email"/>
                            <x-input-field name="email" type="text" value="{{ old('email', $user->email) }}" placeholder="example@email.com"/>
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