@extends('layouts.app')

@section('content')
<center><form action="{{url('setting-store')}}" method="post">
@csrf
    <div class="form-group col-md-6">
        <label for=""> SERVER NAME </label>
        <input type="text" class="form-control" name="setting[APP_NAME]" value="{{App\Models\Setting::option('APP_NAME')}}" >
    <span class="material-input"></span></div>

    <div class="form-group col-md-6">
        <label for=""> MAIL HOST </label>
        <input type="text" class="form-control" name="setting[MAIL_HOST]" value="{{App\Models\Setting::option('MAIL_HOST')}}" >
    <span class="material-input"></span></div>

    <div class="form-group col-md-6">
        <label for=""> MAIL PORT </label>
        <input type="text" class="form-control" name="setting[MAIL_PORT]" value="{{App\Models\Setting::option('MAIL_PORT')}}" >
    <span class="material-input"></span></div>

    <div class="form-group col-md-6">
        <label for="">MAIL USERNAME </label>
        <input type="text" class="form-control" name="setting[MAIL_USERNAME]" value="{{App\Models\Setting::option('MAIL_USERNAME')}}" >
    <span class="material-input"></span></div>

    <div class="form-group col-md-6">
        <label for="">MAIL PASSWORD </label>
        <input type="text" class="form-control" name="setting[MAIL_PASSWORD]" value="{{App\Models\Setting::option('MAIL_PASSWORD')}}" >
    <span class="material-input"></span></div>

    <div class="form-group col-md-6">
        <label for=""> MAIL ENCRYPTION </label>
        <input type="text" class="form-control" name="setting[MAIL_ENCRYPTION]" value="{{App\Models\Setting::option('MAIL_ENCRYPTION')}}" >
    <span class="material-input"></span></div>
    <div class="form-group col-md-6">
        <label for="">MAIL FROM ADDRESS </label>
        <input type="text" class="form-control" name="setting[MAIL_FROM_ADDRESS]" value="{{App\Models\Setting::option('MAIL_FROM_ADDRESS')}}" >
    <span class="material-input"></span></div>

    <div class="form-group col-md-6">
        <label for=""> MAIL FROM NAME</label>
        <input type="text" class="form-control" name="setting[MAIL_FROM_NAME]" value="{{App\Models\Setting::option('MAIL_FROM_NAME')}}" >
    <span class="material-input"></span></div>

    <span class="material-input"></span></div>
    <div class="clearfix"></div>
   <center> <button type="submit" class="btn btn-success"> Update Setting <div class="ripple-container"></div></button></center>
</form></center>
@endsection