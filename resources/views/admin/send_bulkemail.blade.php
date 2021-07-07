
@extends('admin.partials.layout')
@section('content')

<div class="container-fluid" id="pcont">
        <div class="page-head">
            <h2>Send Bulk Email</h2>
            <ol class="breadcrumb">
                <li><a href="index.pp">Home</a></li>
                <li class="active">Send Bulk Email</li>
            </ol>
        </div>
        <div class="cl-mcont">
                <div class="row wizard-row">
                <div class="col-md-12 fuelux">
                    <div class="block-wizard">
                        <div id="wizard1" class="wizard wizard-ux">
                            <ul class="steps">
                                <li data-target="#step1" class="active">Choose Clients<span class="chevron"></span></li>
                                <li data-target="#step2">Compose Email<span class="chevron"></span></li>
                                <li data-target="#step3">Confirm And Send<span class="chevron"></span></li>
                            </ul>
                            <div class="actions">
                                <button type="button" class="btn btn-xs btn-prev btn-default"> <i class="icon-arrow-left"></i>Prev</button>
                                <button type="button" class="btn btn-xs btn-next btn-default" data-last="Finish">Next<i class="icon-arrow-right"></i></button>
                            </div>
                        </div>
                        <div class="step-content">
          <form class="form-horizontal group-border-dashed" action="" method="" data-parsley-namespace="data-parsley-" data-parsley-validate novalidate>
                                <div class="step-pane active" id="step1">
                                    <div class="form-group no-padding">
                                        <div class="col-sm-7">
                                            <h3 class="hthin">Client Group</h3>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Select Client Groups</label>
                                        <div class="col-sm-6">
                                         

    					@php
                         $groups = App\Models\Dashboard::get();
                        @endphp
              <select class="select2" multiple name="group[]">
                         @foreach($groups as $group)
                          <option value="{{$group->id}}">{{$group->group}}</option>
                         @endforeach
            </select>
 
     </div>
</div>
				<div class="form-group">
				<label class="col-sm-3 control-label">Select Email Provider</label>
				<div class="col-sm-6">
    			                @php
                                        $providers = App\Models\Provider::get();
                                @endphp
                                        <select class="select2" name="provider">
                                @foreach($providers as $provider)
                                            <option value="{{$provider->id}}">{{$provider->provider}}</option>
                                @endforeach
                                        </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button class="btn btn-default">Cancel</button>
                                            <button data-wizard="#wizard1" class="btn btn-primary wizard-next">Next Step <i class="fa fa-caret-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-pane" id="step2">
                                    <div class="form-group no-padding">
                                        <div class="col-sm-7">
                                            <h3 class="hthin">Compose Email</h3>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="esubject" class="col-sm-2 control-label">Email Subject</label>
                                        <div class="col-sm-8">
                                            <input type="text" required  class="form-control"  placeholder="Email Subject" name="subject" id="subject">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email Message</label>
                                        <div class="col-sm-8">
                                            <textarea rows="4" class="form-control" id="content" name="message"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button data-wizard="#wizard1" class="btn btn-default wizard-previous"><i class="fa fa-caret-left"></i> Previous</button>
                                            <button data-wizard="#wizard1" class="btn btn-primary wizard-next">Next Step <i class="fa fa-caret-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-pane" id="step3">
                                    <div class="form-group no-padding">
                                        <div class="col-sm-7">
                                            <h3 class="hthin">Confirm And Send</h3>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <button type="submit" class="btn btn-info btn-block " name="submit"><i class="fa fa-mail-forward"></i> Confirm And Send</button>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button data-wizard="#wizard1" class="btn btn-default wizard-previous"><i class="fa fa-caret-left"></i> Previous</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection