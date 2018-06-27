@extends('layout')

@section('content')


<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Treinos</h1>
				<span>Lista de treinos.</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Treinos</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container clearfix">
                                                @foreach ($trainings as $training)
						<article class="portfolio-item">
							<div class="portfolio-image">
								<a href="/training/{{ $training->id }}">
									<img src="../img/training/s/{{ $training->id }}.jpg" alt="{{ $training->label }}">
								</a>
								<div class="portfolio-overlay" >
									<a href="/training/{{ $training->id }}" style="margin-left:-20px;" class="left-icon"><i class="icon-plus"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a href="/training/{{ $training->id }}">{{ $training->label }} </a></h3>
								<span> {{ $training->time }}min @if($training->isHomeSafe) &nbsp <i class="icon-home" style="color:white;"></i> @endif </span>
							</div>
						</article>
                                                @endforeach                
					</div><!-- #portfolio end -->

				</div>

			</div>

		</section><!-- #content end -->

@endsection