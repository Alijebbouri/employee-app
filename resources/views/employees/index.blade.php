@extends('layouts.app')


<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
@section('content')
    <h1 class="text-center">Employee management interface</h1>
    <hr class="w-50 mb-2">
    <div class="container mt-4">
        <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#createEmployeeModal">
            <i class="fa-solid fa-plus"></i> Create Employee
        </button>
        <div class="modal fade" id="createEmployeeModal" tabindex="-1" role="dialog" aria-labelledby="createEmployeeModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createEmployeeModalLabel">Create Employee</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @include('employees.create')
                    </div>
                </div>
            </div>
        </div>

        @foreach ($employees as $employee)
            <div class="modal fade" id="updateEmployeeModal{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="updateEmployeeModalLabel{{$employee->id}}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="updateEmployeeModalLabel{{$employee->id}}">Update Employee</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @include('employees.edit')
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach ($employees as $employee)
            <div class="modal fade" id="showEmployeeModal{{$employee->id}}" tabindex="-1" role="dialog" aria-labelledby="showEmployeeModal{{$employee->id}}" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="showEmployeeModal{{$employee->id}}">Update Employee</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @include('employees.show')
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <table id="myTable" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>CIN</th>
                    <th>Email</th>
                    <th>Service</th>
                    <th>Salaire</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>{{$employee->id}}</td>
                        <td>{{$employee->nom}}</td>
                        <td>{{$employee->prenom}}</td>
                        <td>{{$employee->cin}}</td>
                        <td>{{$employee->email}}</td>
                        <td>{{$employee->service}}</td>
                        <td>{{$employee->salaire}}</td>
                        <td class="d-flex">
                            <a href="#" class="btn btn-info mr-2" data-toggle="modal" data-target="#showEmployeeModal{{$employee->id}}"><i class="fa-solid fa-eye"></i></a>
                            <a href="#" class="btn btn-warning mr-2" data-toggle="modal" data-target="#updateEmployeeModal{{$employee->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <button class="btn btn-danger delete-employee" data-id="{{ $employee->id }}" onclick="deleteEmployee({{ $employee->id }})"><i class="fa-solid fa-trash"></i></button>
                            <form id="deleteForm{{$employee->id}}" action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function deleteEmployee(id) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger mr-2'
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('deleteForm' + id).submit();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your employee is safe :)',
                        'error'
                    )
                }
            });
        }
    </script>
    @if(session()->has("success"))
        <script>
            Swal.fire({
                position: 'center-center',
                icon: 'success',
                title: "{{session()->get('success')}}",
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif
@endsection

