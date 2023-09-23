<h1 class="text-center">Create Employee</h1>
    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" id="nom" class="form-control">
                        @error('nom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" name="prenom" id="prenom" class="form-control">
                        @error('prenom')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cin" class="form-label">Cin</label>
                        <input type="text" name="cin" id="cin" class="form-control">
                        @error('cin')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="employee_type" class="form-label">Employee_type</label>
                        <input type="text" name="employee_type" class="form-control">
                        @error('employee_type')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="hire_date" class="form-label">Hire_date</label>
                        <input type="date" name="hire_date" class="form-control">
                        @error('hire_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="salaire" class="form-label">Salaire</label>
                        <input type="number" name="salaire" id="salaire" class="form-control">
                        @error('salaire')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="service" class="form-label">Service</label>
                        <input type="text" name="service" id="service" class="form-control">
                        @error('service')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
