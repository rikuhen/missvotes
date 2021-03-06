<div class="vote-section text-center @if(Auth::user()) ready-vote @else no-ready-vote  @endif">
	@if (Auth::user())

		@if (!Auth::user()->is_admin)
			@cannot('vote_today', $miss)
				<p class="message-bg text-center">
					{!! trans('miss-vote.thanks_vote') !!}
				</p>
			@endcannot
		@else
			@cannot('vote', Auth::user())
				<p class="message-bg text-center text-danger">
					<b>{{ trans('miss-vote.you_cant') }}.</b> 
				</p>
			@endcannot
		@endif

		{{-- js --}}
		<p class="message-bg text-center thanks-vote-js"  style="display: none">
			{!! trans('miss-vote.thanks_vote') !!}
		</p>
		<p class="message-bg text-center" id="thanks-vote-ticket-js" style="display: none">
			{!! trans('miss-vote.thanks_vote_ticket') !!}
		</p>
		{{-- js --}}

		@can('vote',Auth::user())
			@can('vote_today', $miss)
				<p class="message-bg text-center thanks-vote-js"  style="display: none">
					{!! trans('miss-vote.thanks_vote') !!}
				</p>
				<form action="{{ route('website.miss.vote.store') }}" method="POST"  style="display: inline"  >
					{{ csrf_field() }}
					<input type="hidden" name="miss_id" value="{{$miss->id}}">
					<input type="hidden" name="client_id" value="{{Auth::user()->id}}">
					<button  type="submit" class="btn btn-link btn-lg btn-vote-default" @cannot('vote', Auth::user()) disabled @endcannot>
						<img src="{{ asset('public/images/btn_like.png') }}" alt="">
					</button>
				</form>
			@endcan()
		@endcan
	@else
		{{-- <p class="message-bg text-center"> --}}
			{{-- {{ trans('miss-vote.for_vote') }},  --}}
			{{-- <a href="{{ route('client.show.login') }}"  title="{{ trans('miss-vote.login') }}"><span>{{ trans('miss-vote.login') }}</span></a>  --}}
			{{-- {{ trans('miss-vote.or') }}   --}}
			{{-- <a href="{{ route('client.show.register') }}" title="{{ trans('miss-vote.register') }}"><span>{{ trans('miss-vote.register') }}</span></a> --}}
		{{-- </p>  --}}
		<form action="{{ route('website.miss.vote.store') }}" method="POST"  style="display: inline"  >
					{{ csrf_field() }}
					<input type="hidden" name="miss_id" value="{{$miss->id}}">
					{{-- <input type="hidden" name="client_id" value="{{Auth::user()->id}}"> --}}
					<button id="btn-vote-default" type="button" class="open-login btn btn-link btn-lg open-modal">
						<img src="{{ asset('public/images/btn_like.png') }}" alt="">
					</button>
		</form>
	@endif
</div>