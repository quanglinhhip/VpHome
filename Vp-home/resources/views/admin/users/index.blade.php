@extends('admin.layouts.master')

@section('title')
    Management Member
@endsection
@section('content')
    <!-- BREADCRUMB -->
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>{{ config('apps.user.title') }}</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin.dashboard') }}">Home</a>
                </li>
                <li>
                    <a>Management Member</a>
                </li>
                <li class="active">
                    <strong>Manage user</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2"></div>
    </div>

    <!-- CONTENT -->
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">

                    <div class="ibox-title">
                        <h5>{{ config('apps.user.tableHeading') }}</h5>

                        @include('admin.users.components.toolbox')
                    </div>

                    <div class="ibox-content">

                        @include('admin.users.components.filter')


                        <div class="mb20">
                            <a href="" class="btn btn-primary"><i class="fa fa-plus ">  Add new Member</i></a>

                            <!-- Dropdown for member group -->
                            <select class="form-select ">
                                <option selected>Chọn Nhóm Thành Viên</option>
                                <option value="1">Nhóm 1</option>
                                <option value="2">Nhóm 2</option>
                                <option value="3">Nhóm 3</option>
                            </select>
                        </div>

                        @include('admin.users.components.table')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .mb20 {
            margin-bottom: 20px;
        }

        .mt20 {
            margin-top: 20px;
        }

        .mt20 {
            margin-left: 20px;
        }

        .uk-flex-space-between {
            -ms-flex-pack: justify;
            -webkit-justify-content: space-between;
            justify-content: space-between;
        }

        .uk-flex-middle {
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .uk-flex {
            display: -ms-flexbox;
            display: -webkit-flex;
            I display: flex;
        }

        .filter-wrapper {
            margin-bottom: 20px;
        }

        .filter-wrapper .perpage {
            display: inline-block;
        }

        .btn {
            margin-bottom: 0 !important;
            font-size: 13px;
            border-radius: 0;
            height: 32px;
        }

        .filter-wrapper .form-control {
            height: 32px;
            max-width: 200px;
            font-size: 13px;
        }

        .mr10 {
            margin-right: 10px;
        }

        .mr5 {
            margin-right: 5px;
        }
    </style>
@endsection

@section('style-libs')
    <!-- Switchery -->
    <link href="{{ asset('theme/admin/css/plugins/switchery/switchery.css') }}" rel="stylesheet">
    <link href="{{ asset('theme/admin/css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
@endsection
@section('script-libs')
    <!-- Script libs -->
    <!-- Switchery -->
    <script src="{{ asset('theme/admin/js/plugins/switchery/switchery.js') }}"></script>
    <script src="{{ asset('theme/admin/js/plugins/dataTables/datatables.min.js') }} "></script>
@endsection

@section('scripts')
    <script>
        // $(document).ready(function() {
        //     var elem = document.querySelector('.js-switch');
        //     var switchery = new Switchery(elem, {
        //         color: '#1AB394'
        //     });
        // });

        $(document).ready(function() {
            // Lấy tất cả các phần tử có class .js-switch
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

            // Duyệt qua từng phần tử và áp dụng Switchery
            elems.forEach(function(elem) {
                var switchery = new Switchery(elem, {
                    color: '#1AB394'
                });
            });
        });


        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'ExampleFile'
                    },
                    {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });
    </script>
@endsection
