@extends('layout')

@section('content')


<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container center clearfix">

					<div class="heading-block center">
						<h1>Parabéns</h1>
						<span>Completou o treino {{ $trainingname }} com sucesso</span>
					</div>
                                        
					<p style="font-size:84px;">{{ $timestring }}</p>
                                            <div>
                                                <form method="POST" action="/training/{{ $trainingid }}/complete">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="duration" value="{{ $timestring }}">
                                                @foreach ($feedbacks as $feedback)
                                                    <button type="sumbit" name="feedback" value="{{ $feedback->id }}" class="button button-3d button-rounded button-{{ $feedback->color }}">{{ $feedback->label }}</button>
                                                @endforeach
                                                </form>
                                            </div>
                                        
				</div>

			</div>

		</section><!-- #content end -->
                <script>
                    var goodjob = new Audio('/snd/goodjob.mp3');
                    goodjob.play();
                </script>
@endsection