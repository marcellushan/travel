<div class="main container">
    <div class="well">
        {{--<div class="well">--}}
        {!! Form::open(['url' => 'update']) !!}
        {!! Form::hidden('service', $service) !!}
        {!! Form::hidden('services_id', $service_type->id) !!}
        {!! Form::hidden('clients_id', $service_type->clients_id) !!}
        {!! Form::hidden('view_folder', $view_folder) !!}
        {!! Form::hidden('service_name', $service_name) !!}
        <?php ($last_comment ? $comment = $last_comment->status : $comment = "Received") ?>
        <div class="row">
            <div class="col-sm-3 category">Status</div>
            <div class="col-sm-8 item">{!! Form::select('status', ['Received' => 'Received', 'In Progress' => 'In Progress', 'Awaiting Information' => 'Awaiting Information',
             'Awaiting Review' => 'Awaiting Review', 'Cancelled' => 'Cancelled', 'Complete' => 'Complete' , 'Customer Feedback' => 'Customer Feedback'], $comment) !!}</div>
        </div>
    </div>