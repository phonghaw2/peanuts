@extends('layout-backside.master')
@section('content')

<div class="container-fluid p-0">
    <h1 class="h3 mb-3">User</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-inline" id="form-filter">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <div class="col-3">
                                <select class="form-control select-filter" name="role" id="role">
                                    <option selected>All</option>
                                    @foreach ($roles as $role => $value)
                                        <option value="{{ $value }}"
                                        @if ((string)$value == $selectedRole)
                                            selected
                                        @endif>
                                            {{ $role }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <div class="col-3">
                                <select class="form-control select-filter" name="city" id="city">
                                    <option selected>All</option>
                                    @foreach ($cities as $city)
                                        <option
                                        @if ($city === $selectedCity)
                                            selected
                                        @endif>
                                            {{ $city }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-bordered table-dark table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Info</th>
                                    <th>Role</th>
                                    <th>Gender</th>
                                    <th>City</th>
                                    <th>delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $each)
                                    <tr>
                                        <th scope="row" >
                                            <a  style="color: #fff !important;" href="{{ route('admin.users.show', $each) }}">
                                                {{ $each->id }}
                                            </a>

                                        </th>
                                        <td>
                                            {{ $each->name }}
                                            <br>
                                            <a href="mailto:{{ $each->email }}">{{ $each->email }}</a>
                                        </td>
                                        <td>{{ $each->role_name }}</td>
                                        <td>{{ $each->gender_name }}</td>
                                        <td>{{ $each->city }}</td>
                                        <td>
                                            <form action="{{ route('admin.users.destroy', $each) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination pagination-rounded md-0">
                                {{ $data->links() }}
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
@push('js')
<script>
    $(document).ready(function(){
        $(".select-filter").change(function(){
            $("#form-filter").submit();
        });
    });
</script>
@endpush
