@extends('templates.admin-main')
@section('background-image', 'animex-banner.jpg')
@section('main-title', 'Dashboard')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Dragon Ball Super</h3>

        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cum dolore, eum excepturi harum iste libero, maxime necessitatibus nihil nostrum odio quod ratione recusandae repellendus sapiente sed vitae voluptatibus voluptatum!
    </div>
    <!-- /.box-body -->
    <div class="box-footer"></div>
    <!-- /.box-footer-->
</div><!-- /.box -->
@endsection