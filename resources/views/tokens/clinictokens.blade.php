@extends('layouts.master')
@section('title')
| Token Management
@stop
@section('pageheading')
Token Management
@stop
@section('subpageheading')
Manage tokens to create new Doctors & Clinics
@stop
@section('content')
<div class="row">
	

  <div class="col-md-3 col-xs-12 col-md-offset-2">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Generate ClinicTokens</h3><br><small class="text-green">(Required for Clinic Registration)</small>
      </div>
      <!-- /.box-header -->
      
      <div class="box-body">
        <div class="row">
          <div class="col-xs-12">
            <form action="" method="POST">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group {{ $errors->has('clinictoken')?'has-error':''}}">
                <label class="control-label" for="passkey">Custom Clinic Token</label>
                <input autofocus="" type="text" class="form-control" id="clinictoken" name="clinictoken" placeholder="Create your own clinictoken">
                <span class="help-block">{{$errors->first('clinictoken')}}</span>
              </div>
              <button type="submit" class="btn btn-default btn-block btn-sm">Generate Clinictoken</button>
              <br>
            </form>
          </div>

        </div>
        <table class="table table-bordered">
          <thead style="background-color: #C0C0C0;">
            <th class="text-center">ClinicToken</th>
            <th class="text-center">Copy</th>
          </thead>
          <tbody>
            @foreach ($clinictokens as $clinictoken)
            <tr>
              <td class="text-center">{{$clinictoken->clinictoken}}</td>
              <td></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <div class="box-footer clearfix text-center">
        {{--  <ul class="pagination pagination-sm no-margin text-center"> --}}
        {{$clinictokens->links()}}
        {{--  </ul> --}} 
        
      </div>
    </div>
    <!-- /.box -->
  </div>{{-- .col-md-6 --}}
</div>{{-- .row --}}
@stop


