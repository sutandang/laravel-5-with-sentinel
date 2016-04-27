@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Groups
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
									<th>Name</th>
									<th>Permissions</th>
									<th>Options</th>
								</thead>
								<tbody>
								@foreach ($groups as $group)
									<tr>
										<td>
											<a href="groups/{{ $group->hash }}">{{ $group->name }}</a>
										</td>
										<td>
											<?php
												$permissions = $group->getPermissions();
												$keys = array_keys($permissions);
												$last_key = end($keys);
											?>
											@foreach ($permissions as $key => $value)
												{{ ucfirst($key) . ($key == $last_key ? '' : ', ') }}
											@endforeach
										</td>
										<td>
											<button class="button small" onClick="location.href='{{ action('\\Sentinel\Controllers\GroupController@edit', array($group->hash)) }}'">Edit</button>
										 	<button class="button small action_confirm {{ ($group->hash == 2) ? 'disabled' : '' }}" type="button" data-token="{{ Session::getToken() }}" data-method="delete" href="{{ route('sentinel.groups.destroy', [$group->hash]) }}">Delete</button>
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

