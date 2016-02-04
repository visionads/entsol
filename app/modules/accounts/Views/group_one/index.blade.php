@extends('admin::layouts.master')
@section('sidebar')
@include('admin::layouts.sidebar')
@stop

@section('content')

        <!-- page start-->
<div class="row">
    <div class="col-sm-12">
        <div class="panel">
            <div class="panel-heading">
                <span class="panel-title">{{ $pageTitle }}</span>
                <a class="btn btn-primary btn-xs pull-right pop" data-toggle="modal" href="#addData" data-placement="left" data-content="Click Add Group One button for new group one entry">
                    <strong>Add Group One</strong>
                </a>
            </div>

            <div class="panel-heading help-text-color">
                <div class="help-text-top">
                    <em>Group One Informations are <b>Chart of Accounts</b> Main Group .</em>
                </div>
            </div>

            <div class="panel-body">
                {{-------------- Filter :Starts -------------------------------------------}}
                {!! Form::open(['route' => 'group-one']) !!}
                <div class="col-sm-11">
                    <div class="col-sm-3">
                        {!! Form::text('code',Input::old('code'),['class' => 'form-control','placeholder'=>'Type Code', 'title'=>'Type your required Group One "Code", Example :: 101, Then Click "Search" Button']) !!}
                    </div>
                    <div class="col-sm-3">
                        {!! Form::text('title',Input::old('title'),['class' => 'form-control','placeholder'=>'Type Title', 'title'=>'Type your required Group One "Title", Example :: DEPRECIATION or Partial Text :: DEPR, Then Click "Search" Button']) !!}
                    </div>
                    <div class="col-sm-5 filter-btn">
                        {!! Form::submit('Search', array('class'=>'btn btn-primary btn-xs pull-left pop','id'=>'button', 'data-placement'=>'right', 'data-content'=>'Type code or title or both in specific field then click search button for required information')) !!}
                    </div>
                </div>
                {!! Form::close() !!}
                <p> &nbsp;</p>
                <p> &nbsp;</p>

                {{-------------- Filter :Ends -------------------------------------------}}
                <div class="table-primary">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                        <thead>
                        <tr>
                            <th> Code </th>
                            <th> Title </th>
                            <th> Status </th>
                            <th> Action </th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($data))
                            @foreach($data as $values)
                                <tr class="gradeX">
                                    <td>{{$values->code}}</td>
                                    <td>{{$values->title}}</td>
                                    <td>{{ucfirst($values->status)}}</td>
                                    <td>
                                        <a href="{{ route('view-group-one', $values->id) }}" class="btn btn-info btn-xs" data-placement="top" data-toggle="modal" data-target="#etsbModal" title="View details Code : {{$values->code}} informations"><i class="fa fa-eye"></i></a>
                                        <a href="{{ route('edit-group-one', $values->id) }}" class="btn btn-primary btn-xs" data-placement="top" data-toggle="modal" data-target="#etsbModal" title="Update Code : {{$values->code}} informations"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('delete-group-one', $values->id) }}" class="btn btn-danger btn-xs" data-placement="top" onclick="return confirm('Are you sure to Delete?')" title="Delete Code : {{$values->code}} informations"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- page end-->


<div id="addData" class="modal fade" tabindex="" role="dialog" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true" title="Click X button for close this entry form">×</button>
                <h4 class="modal-title" id="myModalLabel">Add Group One Information</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'store-group-one','class' => 'form-horizontal','id' => 'jq-validation-form']) !!}
                @include('accounts::group_one._form')
                {!! Form::close() !!}
            </div> <!-- / .modal-body -->
        </div> <!-- / .modal-content -->
    </div> <!-- / .modal-dialog -->
</div>
<!-- modal -->


<!-- Modal  -->

<div class="modal fade" id="etsbModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">


        </div>
    </div>
</div>
<!-- modal -->


<!--script for this page only-->
@if($errors->any())
    <script type="text/javascript">
        $(function(){
            $("#addData").modal('show');
        });
    </script>
@endif


@stop