<div class="modal-header">
    <a href="{{ URL::previous() }}" class="close" type="button" title="click x button for close this entry form"> × </a>
    <h4 class="modal-title" id="myModalLabel">{{$pageTitle}}</h4>
</div>

<div class="modal-body">
    <div style="padding: 30px;">
        <table id="" class="table table-bordered table-hover table-striped">
            <tr>
                <th class="col-lg-4">Title</th>
                <td>{{ isset($model->title)?ucfirst($model->title):''}}</td>
            </tr>
            <tr>
                <th class="col-lg-4">Code</th>
                <td>{{ isset($model->code)?ucfirst($model->code):''}}</td>
            </tr>
            <tr>
                <th class="col-lg-4">Country</th>
                <td>{{isset($model->relCountry->title)?ucfirst($model->relCountry->title):'' }}</td>
            </tr>
            <tr>
                <th class="col-lg-4">Description</th>
                <td>{{ isset($model->description)?$model->description:'' }}</td>
            </tr>

        </table>
    </div>
</div>

<div class="modal-footer">
    <a href="{{ URL::previous()}}" class="btn btn-default" type="button" data-placement="top" data-content="click close button for close this entry form"> Close </a>
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
</script>




