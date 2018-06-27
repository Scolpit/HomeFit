@extends('layout')

@section('content')

<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>{{ $exercise->label }}</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Single Image
					============================================= -->
					<div class="col_two_third portfolio-single-image nobottommargin">
                                                <video width="720" height="480" loop autoplay>
                                                    <source src="/vid/exercise/l/{{ $exercise->id }}.mp4" type="video/mp4">
                                                </video>
					</div><!-- .portfolio-single-image end -->

					<!-- Portfolio Single Content
					============================================= -->
					<div class="col_one_third portfolio-single-content col_last nobottommargin">

			

						<!-- Portfolio Single - Meta
						============================================= -->
						<ul class="portfolio-meta bottommargin">
							<li><span><i class="icon-user"></i>Parte do corpo:</span> {{ $exercise->exercisetype->label }}</li>
							<li><span><i class="icon-lightbulb"></i>Dificuldade:</span><i class="icon-circle" style="color:#{{ $exercise->difficulty->color }}"></i>&nbsp {{ $exercise->difficulty->label }} </li>
                                                        <li><span><i class="icon-home"></i>Seguro em casa:</span> @if($exercise->isHomeSafe) Sim @else Não @endif</li>
						</ul>
						<!-- Portfolio Single - Meta End -->

						<!-- Portfolio Single - Share
						============================================= -->
						<div class="clearfix si-share"></div>
						<!-- Portfolio Single - Share End -->
                                                <h3 style="margin:20px 0px;">Desafios </h3>
                                                <ul class="portfolio-meta bottommargin">
                                                    @foreach ($challenges as $challenge)
							<li><span>@if($exercise->isreps){{ $challenge->reps }} reps @else {{ $challenge->seconds }} seg @endif</span> Sem resultados</li>
                                                    @endforeach
                                                </ul>
					</div><!-- .portfolio-single-content end -->

					<div class="clear"></div>

					<div class="divider divider-center"><i class="icon-circle"></i></div>

					<!-- Related Portfolio Items
					============================================= -->
					<h4>Exercícios relacionados:</h4>

                                        
                                        <!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container clearfix">
 
                                                @foreach ($relatedexercises as $relatedexercise)
						<article class="portfolio-item et-{{ $relatedexercise->exercisetype_id }}">
							<div class="portfolio-image">
								<a href="/exercise/{{ $relatedexercise->id }}">
									<img src="../img/exercise/s/{{ $relatedexercise->id }}.jpg" alt="{{ $relatedexercise->label }}">
								</a>
								<div class="portfolio-overlay" >
									<a href="/exercise/{{ $relatedexercise->id }}" style="margin-left:-20px;" class="left-icon"><i class="icon-plus"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="/exercise/{{ $relatedexercise->id }}">{{ $relatedexercise->label }} </a></h3>
								<span><i class="icon-circle" style="color:#{{ $relatedexercise->difficulty->color }}"></i>&nbsp {{ $relatedexercise->exercisetype->label }} @if($relatedexercise->isHomeSafe) &nbsp <i class="icon-home" style="color:white;"></i> @endif </span>
							</div>
						</article>
                                                @endforeach
           
					</div><!-- #portfolio end -->
                                        

				</div>

			</div>

		</section><!-- #content end -->
                
@stop