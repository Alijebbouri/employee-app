<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header bg-white text-center p-3">
                    <h3 class="text-dark">
                        Profile: {{ $employee->prenom }}
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="fullname" class="form-label fw-bold">Full Name</label>
                                <div class="border border-secondary rounded p-2">
                                    {{ $employee->nom }} {{ $employee->prenom }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="email" class="form-label fw-bold">Email</label>
                                <div class="border border-secondary rounded p-2">
                                    {{ $employee->email }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="service" class="form-label fw-bold">Service</label>
                                <div class="border border-secondary rounded p-2">
                                    {{ $employee->service }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="hire_date" class="form-label fw-bold">Hired Since</label>
                                <div class="border border-secondary rounded p-2">
                                    {{ $employee->hire_date }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="cin" class="form-label fw-bold">Cin</label>
                                <div class="border border-secondary rounded p-2">
                                    {{ $employee->cin }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="salaire" class="form-label fw-bold">Salaire</label>
                                <div class="border border-secondary rounded p-2">
                                    {{ $employee->salaire }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="employee_type" class="form-label fw-bold">Employee Type</label>
                                <div class="border border-secondary rounded p-2">
                                    {{ $employee->employee_type }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
