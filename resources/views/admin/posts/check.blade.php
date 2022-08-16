@extends('layout-backside.master')
@section('content')

<div class="container-fluid p-0">
    <h1 class="h3 mb-3">{{ $title }}/Check</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <form class="form-inline" id="form-filter" style="display: flex;">
                        <div class="form-group me-3">
                            <label for="type">Type</label>
                            <div class="col-3">
                                <select class="form-control select-filter" name="type" id="type">
                                    <option selected value="0">All</option>
                                    @foreach ($types as $type => $value)
                                        <option value="{{ $value }}"
                                        @if ((string)$value == $selectedType)
                                            selected
                                        @endif>
                                            {{ $type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group me-3">
                            <label for="role">Tore</label>
                            <div class="col-3">
                                <select class="form-control select-filter" name="tore" id="tore">
                                    <option value="0" selected >All</option>
                                    @foreach ($tores as $tore => $value)
                                        <option value="{{ $value }}"
                                        @if ((string)$value == $selectedTore)
                                            selected
                                        @endif>
                                            {{ $tore }}
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
                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Info</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $each)
                                    <tr>
                                        <td>{{ $each->id }}</td>
                                        <td>{{ $each->type_name }}</td>
                                        <td>{{ $each->title }}</td>
                                        <td>{{ $each->district }} - {{ $each->city }}</td>
                                        <td>{{ $each->tore_name }} <br>  {{ $each->mobile_phone }}  <br> {{ $each->office_phone }}</td>
                                        <td>{{ $each->status }}</td>
                                        <td>
                                            <a href="{{ route('admin.posts.show', $each )}}" class='btn btn-success show-btn'>
                                                <i class='bx bx-detail'></i>
                                                View
                                            </a>
                                        </td>
                                        <td>{{ $each->created_at }}</td>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.js"></script>
<script>

    $(document).ready(function(){
        $(".select-filter").change(function(){
            $("#form-filter").submit();
        });

    });
</script>
@endpush
