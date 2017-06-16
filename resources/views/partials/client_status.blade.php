<div class="main container">
    <div class="well">
        {!! Form::open(['url' => 'update']) !!}
        {!! Form::hidden('service', $service) !!}
        {!! Form::hidden('user', 'customer') !!}
        {!! Form::hidden('status', 'Customer Feedback') !!}
        {!! Form::hidden('services_id', $service_type->id) !!}
        {!! Form::hidden('clients_id', $service_type->clients_id) !!}
        {!! Form::hidden('view_folder', $view_folder) !!}
        {!! Form::hidden('service_name', $service_name) !!}
        <div class="row">
            <div class="col-sm-3 category">Status</div>
            <div class="col-sm-7 item">{{$service_type->status}}</div>
        </div><p></p>
    </div>
