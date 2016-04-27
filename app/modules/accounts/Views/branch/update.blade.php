<script type="text/javascript" src="{{ URL::asset('assets/admin/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/admin/js/jquery-ui.min.js') }}"></script>

<div class="modal-header">
    <a href="{{ URL::previous() }}" class="close" type="button" title="click x button for close this entry form" onclick="close_modal();"> × </a>
    <h4 class="modal-title" id="myModalLabel">{{$pageTitle}}</h4>
</div>


<div class="modal-body">
    @section('content_update')
    {!! Form::model($data, ['method' => 'PATCH', 'route'=> ['update-branch', $data->id]]) !!}
      {{--@include('accounts::branch._form')--}}
        <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::label('code', 'Code:', ['class' => 'control-label']) !!}
                    <small class="required">(Required)</small>
                    {!! Form::text('code', Input::old('code'), ['id'=>'code', 'class' => 'form-control', 'style'=>'text-transform:uppercase','required','autofocus','title'=>'enter branch code, example :: main']) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                    <small class="required">(Required)</small>
                    {!! Form::text('title', Input::old('title'), ['id'=>'title', 'class' => 'form-control','required','required', 'style'=>'text-transform:capitalize','required','title'=>'enter branch title, example :: Main Branch']) !!}
                </div>
            </div>
        </div>

        <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
            <div class="row">
                <div class="col-sm-12">
                    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('description', Input::old('description'), ['id'=>'description', 'class' => 'form-control','size' => '12x3','title'=>'enter descriptions about branch code']) !!}
                </div>
            </div>
        </div>

        <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::label('currency_id', 'Currency:', ['class' => 'control-label']) !!}
                    <small class="required">(Required)</small>
                    @if(count($currency_id)>0)
                        {!! Form::select('currency_id', $currency_id,Input::old('currency_id'),['id'=>'curr_id','class' => 'form-control','required','title'=>'select branch currency, example :: Bangladeshi Taka','onclick'=>'myFunction();']) !!}
                    @else
                        {!! Form::text('currency_id', 'No Currency ID available',['id'=>'currency_id','class' => 'form-control','required','disabled']) !!}
                    @endif
                </div>
                <div class="col-sm-6">
                    {!! Form::label('exchange_rate', 'Exchange Rate:', ['class' => 'control-label']) !!}
                    <small class="required">(Required)</small>
                    {!! Form::input('number', 'exchange_rate', Input::old('exchange_rate'), ['id'=>'change-exchange_rate', 'class' => 'form-control', 'step'=>'any','required','title'=>'enter exchange rate for selected currency']) !!}
                </div>
            </div>
        </div>

        <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
            <div class="row">
                <div class="col-sm-12">
                    {!! Form::label('billing_address', 'Billing Address:', ['class' => 'control-label']) !!}
                    {!! Form::textarea('billing_address', Input::old('billing_address'), ['id'=>'billing_address', 'class' => 'form-control','size' => '12x3','title'=>'enter billing address of branch']) !!}
                </div>
            </div>
        </div>

        <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::label('contact_person', 'Contact Person:', ['class' => 'control-label']) !!}
                    {!! Form::text('contact_person', Input::old('contact_person'), ['id'=>'contact_person', 'class' => 'form-control','required','title'=>'enter contact person of branch']) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!}
                    {!! Form::input('number','phone', Input::old('phone'), ['id'=>'phone', 'class' => 'form-control','required','title'=>'enter phone number of branch']) !!}
                </div>
            </div>
        </div>

        <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::label('mobile', 'Mobile:', ['class' => 'control-label']) !!}
                    {!! Form::input('number','mobile', Input::old('mobile'), ['id'=>'mobile', 'class' => 'form-control','title'=>'enter mobile number of branch']) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::label('fax', 'Fax:', ['class' => 'control-label']) !!}
                    {!! Form::text('fax', Input::old('fax'), ['id'=>'fax', 'class' => 'form-control','title'=>'enter fax number of branch']) !!}
                </div>
            </div>
        </div>

        <div class="form-group no-margin-hr panel-padding-h no-padding-t no-border-t">
            <div class="row">
                <div class="col-sm-6">
                    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
                    {!! Form::email('email', Input::old('email'), ['id'=>'email', 'class' => 'form-control','required','title'=>'enter email address of branch']) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::label('status', 'Status:', ['class' => 'control-label']) !!}
                    <small class="required">(Required)</small>
                    {!! Form::select('status', array('active'=>'Active','inactive'=>'Inactive','cancel'=>'Cancel'),Input::old('status'),['class' => 'form-control','required','title'=>'select status of branch']) !!}
                </div>
            </div>
        </div>

        <p> &nbsp; </p>

        <div class="form-margin-btn">
            {!! Form::submit('Save changes', ['class' => 'btn btn-primary','data-placement'=>'top','data-content'=>'click save changes button for save branch information']) !!}
            <a href="{{route('branch')}}" class=" btn btn-default" data-placement="top" data-content="click close button for close this entry form" onclick="close_modal();">Close</a>
        </div>
    {!! Form::close() !!}
</div>

<script>
    $(".btn").popover({ trigger: "manual" , html: true, animation:false})
            .on("mouseenter", function () {
                var _this = this;
                $(this).popover("show");
                $(".popover").on("mouseleave", function () {
                    $(_this).popover('hide');
                });
            }).on("mouseleave", function () {
                var _this = this;
                setTimeout(function () {
                    if (!$(".popover:hover").length) {
                        $(_this).popover("hide");
                    }
                }, 300);
            });


    $(".form-control").tooltip();
    $('input:disabled, button:disabled').after(function (e) {
        d = $("<div>");
        i = $(this);
        d.css({
            height: i.outerHeight(),
            width: i.outerWidth(),
            position: "absolute",
        })
        d.css(i.offset());
        d.attr("title", i.attr("title"));
        d.tooltip();
        return d;
    });


    function close_modal(){
        document.getElementById('addData').style.visibility="hidden";
        document.getElementById('etsbModal').style.visibility="hidden";
        document.getElementById('load').style.visibility="visible";
    }

</script>

<script>
    function myFunction() {

        var curr_id = $('select[id=curr_id]').val();
        $.ajax({
            url: "{{Route('exchange-rate')}}",
            type: 'POST',
            data: {_token: '{!! csrf_token() !!}',currency_id: curr_id },
            success: function(data){
                $('#change-exchange_rate').val(data);
            }
        });
    }
</script>