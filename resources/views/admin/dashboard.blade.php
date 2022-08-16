@extends('layout-backside.master')
@section('content')


<div class="container-fluid p-0">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="dashboard_header mb_50">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="dashboard_header_title">
                            <h3> Dashboard</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="{{ route('admin.posts.check') }}">
                <div class="card mb-3 widget-chart">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg bg-primary"></div>
                        <i class="ti-settings text-primary"></i>
                    </div>
                    <div class="widget-numbers"><span> {{ $countPosts->count_posts }} (posts)</span></div>
                    <div class="widget-subheading">Need to approve</div>
                    <div class="widget-description text-success">
                        <i class="fa fa-angle-up ">
                        </i>
                        <span class="ps-1"><span>176%</span></span>
                    </div>
                    <label class="badge bg-secondary" for="">TO DO</label>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <div class="card mb-3 widget-chart">
                <div class="icon-wrapper rounded-circle">
                    <div class="icon-wrapper-bg bg-danger"></div>
                    <i class="ti-settings text-danger"></i></div>
                    <div class="widget-numbers"><span>Reported</span></div>
                    <div class="widget-subheading">Unreleased feature</div>
                    <div class="widget-description text-primary"><span class="pe-1">54.1%</span>
                        <i class="fa fa-angle-up ">
                        </i>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 widget-chart">
                    <div class="icon-wrapper rounded-circle">
                        <div class="icon-wrapper-bg bg-info"></div>
                        <i class="ti-settings text-info"></i></div>
                        <div class="widget-numbers"><span>62k</span></div>
                        <div class="widget-subheading">Bugs Fixed</div>
                        <div class="widget-description text-info">
                            <i class="fa fa-arrow-right ">
                            </i>
                            <span class="ps-1">175.5%</span></div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded-circle">
                                <div class="icon-wrapper-bg bg-primary"></div>
                                <i class="ti-settings text-primary"></i>
                            </div>
                            <div class="widget-numbers"><span>46K</span></div>
                            <div class="widget-subheading">Total Views</div>
                            <div class="widget-description text-success">
                                <i class="fa fa-angle-up ">
                                </i>
                                <span class="ps-1"><span>176%</span></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3 widget-chart">
                            <div class="icon-wrapper rounded">
                                <div class="icon-wrapper-bg bg-primary"></div>
                                <div class="center-svg">
                                    <i class="fa fa-angle-down ">
                                    </i>
                                </div>
                            </div>
                            <div class="widget-numbers"><span>32k</span></div>
                            <div class="widget-subheading">Follow-ups</div>
                            <div class="widget-description text-focus">
                                <i class="fa fa-arrow-left ">
                                </i>
                                <span class="ps-1">115.5%</span></div>
                            </div>
                        </div>

                            <div class="col-md-4">
                                <div class="card mb-3 widget-chart">
                                    <div class="widget-numbers">{{ $countUsers->count_hosts }}</div>
                                    <div class="widget-subheading">Hosts Generated</div>
                                    <div class="widget-description text-info">
                                        <i class="fa fa-ellipsis-h">
                                        </i>
                                        <span class="ps-1">115.5%</span></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card mb-3 widget-chart">
                                        <div class="widget-numbers">{{ $countUsers->count_users }}</div>
                                        <div class="widget-subheading">Users Active</div>
                                        <div class="widget-description text-danger"><span class="pe-1">31.2%</span>
                                            <i class="fa fa-angle-down ">
                                            </i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endsection
