@extends('layout')

@section('content')

<style>
    .truncate {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
</style>
<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Exercícios</h1>
				<span>Lista de Exercícios.</span>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li class="active">Exercícios</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Portfolio Filter
					============================================= -->
					<ul class="portfolio-filter clearfix" data-container="#portfolio">

						<li class="activeFilter"><a href="#" data-filter="*">Todos</a></li>
						<li><a href="#" data-filter=".et-1">Parte superior do corpo</a></li>
						<li><a href="#" data-filter=".et-2">Parte inferior do corpo</a></li>
						<li><a href="#" data-filter=".et-3">Corpo Inteiro</a></li>
                                                <li><a href="#" data-filter=".et-4">Cardio</a></li>
						<li><a href="#" data-filter=".et-5">Abdominais e núcleo</a></li>
						<li><a href="#" data-filter=".et-6">Flexibilidade</a></li>

					</ul><!-- #portfolio-filter end -->

					<div class="portfolio-shuffle" data-container="#portfolio">
						<i class="icon-random"></i>
					</div>

					<div class="clear"></div>

					<!-- Portfolio Items
					============================================= -->
					<div id="portfolio" class="portfolio grid-container clearfix">
                                                @foreach ($exercises as $exercise)
						<article class="portfolio-item et-{{ $exercise->exercisetype_id }}">
							<div class="portfolio-image">
								<a href="/exercise/{{ $exercise->id }}">
									<img src="../img/exercise/s/{{ $exercise->id }}.jpg" alt="{{ $exercise->label }}">
								</a>
								<div class="portfolio-overlay" >
									<a href="/exercise/{{ $exercise->id }}" style="margin-left:-20px;" class="left-icon"><i class="icon-plus"></i></a>
								</div>
							</div>
							<div class="portfolio-desc">
								<h3><a class="truncate" href="/exercise/{{ $exercise->id }}">{{ $exercise->label }} </a></h3>
								<span><i class="icon-circle" style="color:#{{ $exercise->difficulty->color }}"></i>&nbsp {{ $exercise->exercisetype->label }} @if($exercise->isHomeSafe) &nbsp <i class="icon-home" style="color:white;"></i> @endif </span>
							</div>
						</article>
                                                @endforeach                
					</div><!-- #portfolio end -->

				</div>

			</div>

		</section><!-- #content end -->

@endsection