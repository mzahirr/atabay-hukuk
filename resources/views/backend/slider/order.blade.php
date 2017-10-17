@extends('backend.layouts.master')
@section('content')
    <div class="col-md-12 ">
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-globe"></i> {{ucfirst(request()->segment(1))}}
                </div>
                <div class="tools"></div>
            </div>
            <div class="portlet-body">
                <div class="dd" id="nestable">
                    {!! $menu !!}
                </div>
                <div style="clear: both;"></div>
            </div>
        </div>
    </div>
@endsection
@push('styles')
<link href="/assets/global/plugins/jquery-nestable/jquery.nestable.css" rel="stylesheet" type="text/css"/>
@endpush
@push('scripts')
<script src="/assets/global/plugins/jquery-nestable/jquery.nestable.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function () {
        $('.dd').nestable({
            maxDepth: 1,
            dropCallback: function (details) {
                var order = [];
                $("li[data-id='" + details.destId + "']").find('ol:first').children().each(function (index, elem) {
                    order[index] = $(elem).attr('data-id');
                });
                if (order.length === 0) {
                    var rootOrder = [];
                    $("#nestable > ol > li").each(function (index, elem) {
                        rootOrder[index] = $(elem).attr('data-id');
                    });
                }
                $.post('{{route("sliders.reorder")}}',
                    {
                        source: details.sourceId,
                        destination: details.destId,
                        order: JSON.stringify(order),
                        rootOrder: JSON.stringify(rootOrder)
                    },
                    function (data) {
                        // console.log('data '+data);
                        new PNotify({
                            title: 'Başarılı',
                            text: data,
                            type: 'success'
                        });
                    })
                    .done(function () {
                    })
                    .fail(function () {
                    })
                    .always(function () {
                    });
            }
        });
    });
</script>

@endpush