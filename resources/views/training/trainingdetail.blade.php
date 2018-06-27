@extends('layout')

@section('content')

	<!-- Bootstrap Switch CSS -->
        <link rel="stylesheet" href="../css/radio-checkbox.css" type="text/css" />
        
        <style>
            .spost
            {
                margin-top:0px;
                margin-bottom: 0px;
                border-top: 0px;
                padding-top: 10px;
            }
        </style>
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Treino</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="nobottommargin col_last clearfix">

						<!-- Posts
						============================================= -->
						<div id="posts" class="small-thumbs">

							<div class="entry clearfix">
								<div class="entry-image">
									<img class="image_fade" src="../img/training/s/{{ $training->id }}.jpg">
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2>{{ $training->label }}</h2>
									</div>
								
                            
									<div class="entry-content">
										<p>{{ $training->description }}</p>
										
									</div>
                                                                        <ul class="portfolio-meta">
                                                                                <li><span><i class="icon-user"></i>Tempo:</span> {{ $training->time }} min</li>
                                                                                <li><span><i class="icon-home"></i>Seguro em casa:</span> @if($training->isHomeSafe) Sim @else Não @endif</li>
                                                                        </ul>
                                                                        <div>
                                                                            <form method="POST" action="/training/{{ $training->id }}">
                                                                            {{ csrf_field() }}
                                                                                @if( !$training->iswarming && !$training->isstretching )
										<input name="checkWarming" id="checkbox-1" class="checkbox-style" name="checkbox-1" type="checkbox" checked="">
										<label for="checkbox-1" class="checkbox-style-1-label" style="margin-left:0;">Incluir aquecimento</label>
                                                                                <input name="checkStretching" id="checkbox-2" class="checkbox-style" name="checkbox-2" type="checkbox" checked="">
										<label for="checkbox-2" class="checkbox-style-1-label">Incluir alongamento</label>
                                                                                @endif
                                                                                <button type="sumbit" class="button button-3d button-rounded button-red">Start</button>
                                                                            </form>
									</div>
                                                                        
								</div>
							</div>

						</div><!-- #posts end -->

					</div><!-- .postcontent end -->

					<div id="tab" class="clearfix">

								<div class="tabs nobottommargin clearfix ui-tabs ui-widget ui-widget-content ui-corner-all" id="sidebar-tabs">

									<div class="tab-container">

										<div class="tab-content clearfix ui-tabs-panel ui-widget-content ui-corner-bottom" id="tabs-1" aria-labelledby="ui-id-1" role="tabpanel" aria-hidden="false">
											<div id="popular-post-list-sidebar">
                                                                                                
                                                                                                @foreach ($exercisetrainings as $exercisetraining)
                                                                                                
                                                                                                @if ($exercisetraining->cycle <> "")
                                                                                                <h5 style="margin: 20px 0px 0px 0px;">Série {{ $exercisetraining->cycle }} de {{ $cyclecount }}</h5>
                                                                                                @endif
												<div class="spost clearfix">
                                                                                                    
													<div class="entry-image">
														<a href="../exercise/{{ $exercisetraining->exercise_id }}" class="nobg"><img class="img-circle" src="../img/exercise/s/{{ $exercisetraining->exercise_id }}.jpg" alt=""></a>
													</div>
													<div class="entry-c">
														<div class="entry-title">
                                                                                                                    <h4><a href="../exercise/{{ $exercisetraining->exercise_id }}">{{ $exercisetraining->count }}@if ($exercisetraining->isreps == false)s @endif {{ $exercisetraining->exercise }} {{ $exercisetraining->additionalinfo }}</a></h4>
														</div>
														<ul class="entry-meta">
															<li><span><i class="icon-circle" style="color:#{{ $exercisetraining->color }}"></i>&nbsp {{ $exercisetraining->exercisetype }} </span></li>
														</ul>
													</div>
												</div>
                                                                                                @endforeach
                                                                                                

											</div>
										</div>

									</div>

								</div>

							</div>

				</div>

			</div>

		</section><!-- #content end -->
                
@stop