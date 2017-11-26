<div class="panel panel-default">
  <div class="panel-heading">{{ trans('backend.dashboard.casting_resume.title_one') }} 
  	<a target="_blank" href="{{ route('dashboard.export.casting',['casting_id'=>'casting_1']) }}"  type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"> </i> PDF</a> </div>
  <div class="panel-body">
  	<table id="casting-1-datatable" class="table table-bordered">
  		<thead>
	  		<tr>
	  			<th>N°</th>
	  			<th>{{ trans('backend.dashboard.casting_resume.th_country') }}</th>
	  			<th>{{ trans('backend.dashboard.casting_resume.th_num_applies') }}</th>
	  			<th>{{ trans('backend.dashboard.casting_resume.th_num_preselected') }}</th>
	  			<th>{{ trans('backend.dashboard.casting_resume.th_num_no_preselected') }}</th>
	  			<th>{{ trans('backend.dashboard.casting_resume.th_num_missing') }}</th>
	  		</tr>
  		</thead>
  		<tbody>
  				@if (count($resumeCastingOne) > 0)
	  				@foreach ($resumeCastingOne as $index =>  $casting)
			  	 		<tr>
			  	 			<td>{{$index+1}}</td>
			  	 			<td class="country">
			  	 				@if ($casting->counter > 0)
			  	 				<a href="{{ route('applicants.index',['country_id'=>$casting->country_id,'casting_id'=>$casting->casting_id]) }}">{{$casting->country}}</a>
			  	 				@else
			  	 					{{$casting->country}}
			  	 				@endif
			  	 			</td>
			  	 			<td class="counter">
			  	 				{{$casting->counter}}
			  	 			</td>
			  	 			<td class="preselected">
			  	 				{{$casting->preselected}}
			  	 			</td>
			  	 			<td class="nopreselected">
			  	 				{{$casting->nopreselected}}
			  	 			</td class="missing">
			  	 			<td>
			  	 				{{$casting->missing}}
			  	 			</td>
			  	 		</tr>
			  		@endforeach
	  				<tr>
	  					<td></td>
	  					<td>Total:</td>
	  					<td id="total_casting_one_counter"></td>
	  					<td id="total_casting_one_preselected"></td>
	  					<td id="total_casting_one_no_preselected"></td>
	  					<td id="total_casting_one_missing"></td>
	  				</tr>
  				@else
  				<tr>
  					<td colspan="5">--No Data--</td>
  				</tr>
  				@endif
  		</tbody>
  	</table>
  </div>
</div>


<div class="panel panel-default">
  <div class="panel-heading">{{ trans('backend.dashboard.casting_resume.title_two') }}
  <a target="_blank" href="{{ route('dashboard.export.casting',['casting_id'=>'casting_2']) }}"  type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"> </i> PDF</a> </div>
</div>
  <div class="panel-body">
  	<table id="casting-2-datatable" class="table table-bordered">
  		<thead>
	  		<tr>
	  			<th>N°</th>
	  			<th>{{ trans('backend.dashboard.casting_resume.th_country') }}</th>
	  			<th>{{ trans('backend.dashboard.casting_resume.th_num_applies') }}</th>
	  			<th>{{ trans('backend.dashboard.casting_resume.th_num_preselected') }}</th>
	  			<th>{{ trans('backend.dashboard.casting_resume.th_num_no_preselected') }}</th>
	  			<th>{{ trans('backend.dashboard.casting_resume.th_num_missing') }}</th>
	  		</tr>
  		</thead>
  		<tbody>
  				@foreach ($resumeCastingTwo as $index =>  $casting)
		  	 		<tr>
		  	 			<td>{{$index+1}}</td>
		  	 			<td class="country">
		  	 				@if ($casting->counter > 0)
		  	 				<a href="{{ route('applicants.index',['country_id'=>$casting->country_id,'casting_id'=>$casting->casting_id]) }}">{{$casting->country}}</a>
		  	 				@else
		  	 					{{$casting->country}}
		  	 				@endif
		  	 			</td>
		  	 			<td class="counter">
		  	 				{{$casting->counter}}
		  	 			</td>
		  	 			<td class="preselected">
		  	 				{{$casting->preselected}}
		  	 			</td>
		  	 			<td class="nopreselected">
		  	 				{{$casting->nopreselected}}
		  	 			</td class="missing">
		  	 			<td>
		  	 				{{$casting->missing}}
		  	 			</td>
		  	 		</tr>
		  		@endforeach
  				<tr>
  					<td></td>
  					<td>Total:</td>
  					<td id="total_casting_two_counter"></td>
  					<td id="total_casting_two_preselected"></td>
  					<td id="total_casting_two_no_preselected"></td>
  					<td id="total_casting_two_missing"></td>
  				</tr>
  		</tbody>
  	</table>
  </div>
</div>
