<x-app-layout>
    @section('title', 'Dashboard')
    @section('page_title', 'Dashboard')

    <div class="row justify-content-center">
        <div class="col-md-3 col-lg-3">
            <div class="card bg-corner-img">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-9">
                            <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Total Revenue</p>
                            <h4 class="mt-1 mb-0 fw-medium">$8365.00</h4>
                        </div>

                        <div class="col-3 align-self-center">
                            <div
                                class="d-flex justify-content-center align-items-center thumb-md border-dashed border-primary rounded mx-auto">
                                <i class="iconoir-dollar-circle fs-22 align-self-center mb-0 text-primary"></i>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3 col-lg-3">
            <div class="card bg-corner-img">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-9">
                            <p class="text-muted text-uppercase mb-0 fw-normal fs-13">New Order</p>
                            <h4 class="mt-1 mb-0 fw-medium">722</h4>
                        </div>

                        <div class="col-3 align-self-center">
                            <div
                                class="d-flex justify-content-center align-items-center thumb-md border-dashed border-info rounded mx-auto">
                                <i class="iconoir-cart fs-22 align-self-center mb-0 text-info"></i>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="col-md-3 col-lg-3">
            <div class="card bg-corner-img">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-9">
                            <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Sessions</p>
                            <h4 class="mt-1 mb-0 fw-medium">181</h4>
                        </div>

                        <div class="col-3 align-self-center">
                            <div
                                class="d-flex justify-content-center align-items-center thumb-md border-dashed border-warning rounded mx-auto">
                                <i class="iconoir-percentage-circle fs-22 align-self-center mb-0 text-warning"></i>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="col-md-3 col-lg-3">
            <div class="card bg-corner-img">
                <div class="card-body">
                    <div class="row d-flex justify-content-center">
                        <div class="col-9">
                            <p class="text-muted text-uppercase mb-0 fw-normal fs-13">Avg. Order value</p>
                            <h4 class="mt-1 mb-0 fw-medium">$1025.50</h4>
                        </div>

                        <div class="col-3 align-self-center">
                            <div
                                class="d-flex justify-content-center align-items-center thumb-md border-dashed border-danger rounded mx-auto">
                                <i class="iconoir-hexagon-dice fs-22 align-self-center mb-0 text-danger"></i>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>

</x-app-layout>
