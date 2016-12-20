
	@extends('admin.layouts.master')
	@section('title', 'Venus Corporation | Dashboard ')

	@section('content')
		    <!-- Content Header (Page header) -->
		    <section class="content-header">
				<h1>All Contact Page</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i>Dashbarad</a></li>
					<li><a href="#">Settings</a></li>
					<li class="active">General Settings</li>
				</ol>
		    </section>

	<!-- Main content -->
	<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Company</th>
                  <th>Location</th>
                  <th>Subject</th>
                  <th>Reference</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1; ?>
                @foreach ($allContacts as $contact)
				         <tr>
                <td>{{$i++}}</td>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->company}}</td>
                <td>{{$contact->location}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->reference}}</td>
                  <td>
                    	<div class="btn-group">
  		                  <button type="button" class="btn btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Action<span class="fa fa-caret-down"></span></button>
  		                  <ul class="dropdown-menu">
  		                    <li>
                            <!-- Edit button -->
                            {!! Form::open(array('route'=>['contacts.edit', $contact->id], 'method'=>'GET')) !!}
                                <!-- Delete Button -->
                                {!! Form::submit('Edit', $attributes = ['class'=>'']) !!}        
                            {!! Form::close() !!}
                          </li>
  		                    <li>
                            <!-- delete button -->
                            {!! Form::open(array('route'=>['contacts.destroy', $contact->id], 'method'=>'delete')) !!}
                                <!-- Delete Button -->
                                {!! Form::hidden('id', $contact->id) !!}
                                {!! Form::submit('Delete', $attributes = ['class'=>'']) !!}        
                            {!! Form::close() !!}
                          </li>
  		                  </ul>
  		                </div>
                  </td>
				        @endforeach

                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
		    <!-- /.content -->
		</div>	
	@endsection


                