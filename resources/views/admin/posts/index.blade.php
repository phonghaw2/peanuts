@extends('layout-backside.master')
@section('content')


<div class="container-fluid p-0">
    <h1 class="h3 mb-3">User</h1>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex;">
                        <a href="{{ route('admin.posts.create') }}" class="btn btn-primary mb-3 me-3">Create</a>
                        <form action="">
                            <label for="csv" class="btn btn-outline-primary mb-3">Import CSV</label>
                            <input type="file" name="csv" id="csv" class="d-none" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                        </form>
                    </div>

                    <form class="form-inline" id="form-filter" style="display: flex;">
                        <div class="form-group me-3">
                            <label for="type">Type</label>
                            <div class="col-3">
                                <select class="form-control select-filter" name="type" id="type">
                                    <option selected>All</option>
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
                                    <option selected>All</option>
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
                        <table class="table table-bordered table-dark table-hover" id="table-data">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Type</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Info</th>
                                    <th>TORE</th>
                                    <th>Status</th>
                                    <th>Created at</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                        <nav aria-label="..." class="mb-3 float-end me-3">
                            <ul class="pagination">

                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.js"></script>

@endsection
@push('js')
    <script src="{{ asset('js/admin.js') }}"></script>
    <script>

        $(document).ready(function() {
            // crawl data
            var cPage;
            $.ajax({
                async: false,
                url: "{{ route('api.posts') }}",
                data: {page: {{ request()->get('page') ?? 1  }} },
                dataType: 'json',
                success: function (response) {
                    response.data.data.forEach(function (each){
                        let info = each.price + '</br>' + each.mobile_phone  + '</br>' + each.office_phone ;
                        let location = each.district + '-' + each.city ;
                        let created_at = GetNow(each.created_at);
                        $('#table-data').append($('<tr>')
                            .append($('<td>').append(each.id))
                            .append($('<td>').append(each.type))
                            .append($('<td>').append(each.title))
                            .append($('<td>').append(location))
                            .append($('<td>').append(info))
                            .append($('<td>').append(each.tore))
                            .append($('<td>').append(each.status))
                            .append($('<td>').append(created_at))
                        )
                    });
                    renderPagination(response.data.pagination);
                    cPage = response.data.currentPage;
                    if(cPage == 1) {
                        $(".pagination li:first-child").addClass("disabled");
                    }
                    if(cPage == response.data.lastPage) {
                        $(".pagination li:last-child").addClass("disabled");
                    }

                }
            });
            $(document).on('click','.pagination a', function (event) {
                event.preventDefault();
                var page;
                if($(this).text().trim() === 'Next »'){
                     page = cPage + 1;

                }else if ($(this).text().trim() === '« Previous') {
                     page = cPage - 1;
                }else {
                     page = $(this).text();
                };
                let urlParams = new URLSearchParams(window.location.search);

                    urlParams.set('page',page);

                    window.location.search = urlParams;

            });
            // import csv
            $("#csv").change(function (event) {
                var files = new FormData();
                files.append('file', $(this)[0].files[0])
                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.posts.import_csv') }}',
                    dataType: 'json',
                    async: false,
                    cache: false,
                    contentType: false,
                    processData: false,
                    enctype: 'multipart/form-data',
                    data: {file: $(this).val()},
                    success: function (response) {
                        Swal.fire({
                            // position: 'top-end',
                            icon: 'success',
                            title: 'Your file has been imported',
                            showConfirmButton: false,
                            timer: 1500
                        })
                    }
                });
            });
        })

    </script>
@endpush

