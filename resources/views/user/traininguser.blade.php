@extends('layout')

@section('content')

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Histórico</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Histórico</a></li>
				</ol>
			</div>

		</section><!-- #page-title end -->

                <!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">


						  <table class="table">
							  <thead>
								<tr>
                                                                  <th></th>
								  <th>Treino</th>
								  <th>Data</th>
								  <th>Duração</th>
								</tr>
							  </thead>
							  <tbody>
                                                                @foreach ($trainingusers as $traininguser)
                                                                    <tr>
                                                                      <td><i class="icon-circle" style="color:{{ $traininguser->feedback->color }}"></i></td>
                                                                      <td>{{ $traininguser->training->label }}</td>
                                                                      <td>{{ $traininguser->created_at }}</td>
                                                                      <td>{{ $traininguser->duration }}</td>
                                                                    </tr>
                                                                @endforeach
							  </tbody>
							</table>

                                    </div>
                                </div>
			</div>

		</section><!-- #content end -->
		
@endsection