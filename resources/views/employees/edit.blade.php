
    <h1 class="text-center">Modifier Employee</h1>
    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control" value="{{ $employee->nom }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $employee->prenom }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="cin" class="form-label">Cin</label>
                        <input type="text" name="cin" id="cin" class="form-control" value="{{ $employee->cin }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $employee->email }}" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="hire_date" class="form-label">Hire Date</label>
                        <input type="date" name="hire_date" class="form-control" value="{{ $employee->hire_date }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="employee_type" class="form-label">Employee Type</label>
                        <input type="text" name="employee_type" class="form-control" value="{{ $employee->employee_type }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="salaire" class="form-label">Salaire</label>
                        <input type="number" name="salaire" id="salaire" class="form-control" value="{{ $employee->salaire }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Service</label>
                        <input type="text" name="service" id="service" class="form-control" value="{{ $employee->service }}" required>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
