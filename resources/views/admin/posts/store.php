$(document).ready(function() {
            // craw data

            var cPage;
            $.ajax({
                async: false,
                url: "{{ route('api.posts') }}",
                data: {page: {{ request()->get('page') ?? 1  }} },
                dataType: 'json',
                success: function (response) {
                    response.data.data.forEach(function (each){
                        let info = each.tore + '</br>' + each.mobile_phone  + '</br>' + each.office_phone ;
                        let location = each.district + '-' + each.city ;
                        let created_at = GetNow(each.created_at);
                        $('#table-data').append($('<tr>')
                            .append($('<td>').append(each.id))
                            .append($('<td>').append(each.type))
                            .append($('<td>').append(each.title))
                            .append($('<td>').append(location))
                            .append($('<td>').append(info))
                            .append($('<td>').append(each.status))
                            .append($('<td>').append("<a target='_blank' class='btn btn-success show-btn' data-id='" + each.id + "'><i class='bx bx-detail'></i>View</a>"))
                            .append($('<td>').append(created_at))
                        );
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

