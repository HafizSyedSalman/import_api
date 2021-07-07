@extends('admin.partials.layout')
@section('content')
<div class="container-fluid" id="pcont">

        <div class="page-head">
            <h2>DASHBOARD</h2>
        </div>

        <div class="cl-mcont">

        
            <div class="row dash-cols">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="block">
                        <div class="header">
                            <h2><i class="fa fa-user"></i>CLIENT INFO</h2>
                        </div>
                        <div class="content no-padding">
                            <div class="fact-data text-center">
                                <h3>Clients</h3>
                                <h2>
                                    @foreach ($transactions as $transactions)
                         
                                         @endforeach
                            @php
                            $count = App\Models\Transaction::where('id', $transactions->id)->count();
                            @endphp
                            {{ $count}}
                                </h2>
                                <h4><a href="all-clients.php"> View All</a></h4>
                            </div>
                            <div class="fact-data text-center">
                                <h3>Groups</h3>
                                <h2>
                                      
                                </h2>
                                <h4><a href="all-groups.php"> View All</a></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-4">
                    <div class="block">
                        <div class="header">
                            <h2><i class="fa fa-tasks"></i>BULK INFO</h2>
                        </div>
                        <div class="content no-padding">
                            <div class="fact-data text-center">
                                <h3>Email Send</h3>
                                <h2>0</h2>
                                <h4><a href="email-history.php"> View All </a></h4>
                            </div>
                            <div class="fact-data text-center">
                                <h3>SMS Send</h3>
                                <h2>0</h2>
                                <h4><a href="sms-history.php">View All </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row dash-cols">
                <div class="col-sm-6 col-md-6">
                    <div class="widget-block  white-box calendar-box">
                        <div class="col-md-6 blue-box calendar no-padding">
                            <div class="padding ui-datepicker"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="padding">
                                <h2 class="text-center">Monday</h2>
                                <h1 class="day">28</h1>
                            </div>
                        </div>
                    </div>


                </div>
                
                </div>

            </div>

        </div>
    </div>  

@endsection    