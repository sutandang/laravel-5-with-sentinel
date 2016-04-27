@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Home
@stop

{{-- Content --}}
@section('content')

	
		<div class="row">
			
			<!-- col-md-12 -->
			<div class="col-md-12">

				<h3 class="fw-thk">Available Groups</h3>
				
			</div>
			<!-- col-md-12 -->

		</div>
		

		<!-- row -->
		<div class="row">

			<!-- col-md-6 -->
			<div class="col-md-12">
			
				<!-- panel -->
				<div class="panel panel-default">

					<!-- panel-body -->
					<div class="panel-body">
						<div class="table-responsive">
							
							<table class="table">
								<thead>
									<th>User</th>
									<th>Status</th>
									<th>Options</th>
								</thead>
								<tbody>
									@foreach ($users as $user)
										<tr>
											<td><a href="{{ action('\\Sentinel\Controllers\UserController@show', array($user->hash)) }}">{{ $user->email }}</a></td>
											<td>{{ $user->status }} </td>
											<td>
												<button class="button small" type="button" onClick="location.href='{{ action('\\Sentinel\Controllers\UserController@edit', array($user->hash)) }}'">Edit</button>
												@if ($user->status != 'Suspended')
													<button class="button small" type="button" onClick="location.href='{{ action('\\Sentinel\Controllers\UserController@suspend', array($user->hash)) }}'">Suspend</button>
												@else
													<button class="button small" type="button" onClick="location.href='{{ action('\\Sentinel\Controllers\UserController@unsuspend', array($user->hash)) }}'">Un-Suspend</button>
												@endif
												@if ($user->status != 'Banned')
													<button class="button small" type="button" onClick="location.href='{{ action('\\Sentinel\Controllers\UserController@ban', array($user->hash)) }}'">Ban</button>
												@else
													<button class="button small" type="button" onClick="location.href='{{ action('\\Sentinel\Controllers\UserController@unban', array($user->hash)) }}'">Un-Ban</button>
												@endif
												<button class="button small alert action_confirm" href="{{ action('\\Sentinel\Controllers\UserController@destroy', array($user->hash)) }}" data-token="{{ Session::getToken() }}" data-method="delete">Delete</button>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>

						</div>
						
					</div>
					<!-- panel-body -->
					
				</div>
				<!-- panel -->
				
			</div>
			<!-- col-md-6 -->
		
		</div>
		<!-- row -->

@stop
