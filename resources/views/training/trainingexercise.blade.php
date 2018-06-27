@extends('layout')

@section('content')

<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_one_third portfolio-single-content nobottommargin">

						<!-- Portfolio Single - Description
						============================================= -->
						<div class="fancy-title title-bottom-border">
							<h2>{{ $trainingname }} - {{ $exercise->label }} {{ $exercise->additionalinfo }}</h2>
						</div>
                                                <h1 id="startin" style="font-size:42px;">Começa em 5s</h1>
                                                <h1 id="counter" style="font-size:64px;">{{ $exercise->count }} @if ($exercise->isreps) reps @else seg @endif </h1>
                                                <a id="btnNext" href="/training/{{ $trainingid }}/{{ $order+1 }}" class="button button-3d button-large button-rounded button-red">@if ($exercise->isreps) Seguinte @else Saltar @endif</a>
                                                
						<!-- Portfolio Single - Meta End -->

					</div><!-- .portfolio-single-content end -->

					<!-- Portfolio Single Video
					============================================= -->
					<div class="col_two_third portfolio-single-image nobottommargin col_last">
                                            <video width="500" height="400" autoplay loop>
                                                <source src="/vid/exercise/s/{{ $exercise->exercise_id }}.mp4" type="video/mp4">
                                            </video>
<!--					
					</div><!-- .portfolio-single-image end -->


					<div class="clear"></div>


				</div>

			</div>

		</section><!-- #content end -->
                <script>
                    var secondstext = "@if ($exercise->isreps) repetitions @else seconds @endif";
                    secondstext = secondstext.trim();
                    var a1 = new Audio('/snd/exercise/'+{{ $exercise->exercise_id }}+'.mp3');                
                    var a2 = new Audio('/snd/'+{{ $exercise->count }}+'.mp3');
                    var a3 = new Audio('/snd/'+secondstext+'.mp3');
                    var go = new Audio('/snd/go.mp3');
                    
                    @if ($exercise->additionalinfo <> "")
                        var leftrightsound = new Audio('/snd/{{ $exercise->additionalinfo }}.mp3');
                        a3.addEventListener('ended', function(){
                            leftrightsound.play();
                        });
                    @endif

                    a1.addEventListener('ended', function(){
                        a2.play();
                    });
                    a2.addEventListener('ended', function(){
                        a3.play();
                    });
                    a1.play();
                    
                    function playgo(n)
                    {
                        if(n==0)
                        {
                            go.play();
                        }
                    }
                    
                    function countdown(n)
                    {
                        if(n >= 0 && n<=5)
                        {
                            var audio = new Audio('/snd/'+n+'.mp3');
                            audio.play();
                        }
                    }
                    
                    setInterval(refreshMe,1000);
                    var starts = 6;
                    @if (!$exercise->isreps)
                        //Seconds
                        var i = {{ $exercise->count }};
                        function refreshMe()
                        {
                            starts--;
                            if(starts>0)
                            {
                                $('#startin').text("Começa em "+starts+"s");
                            }
                            else{
                                playgo(starts);
                                countdown(i);
                                if(i<0)
                                {
                                    window.location.href = "/training/{{ $trainingid }}/{{ $order+1 }}";
                                } else {
                                    $('#startin').text("");
                                    $('#counter').text(i+" seg");
                                }
                                i--;
                            }
                        }
                    @else
                        //reps
                        function refreshMe()
                        {
                            starts--;
                            if(starts>0)
                            {
                                $('#startin').text("Começa em "+starts+"s");
                            }
                            else{
                                playgo(starts);
                                $('#startin').text("");
                            }
                        }
                    @endif
                </script>
@stop