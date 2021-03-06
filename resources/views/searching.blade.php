@extends('layouts.layout_basic')

@section('title')
Searching
@stop

@section('csslinks')
<link href="/bootstrap-3.3.6-dist/slider2/bootstrap-slider.css" rel="stylesheet">
<link href="/bootstrap-3.3.6-dist/slider2/bootstrap-slider.min.css" rel="stylesheet">
<link href="/bootstrap-3.3.6-dist/css/homepage.css" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
@stop

@section('javascriptlinks')
<script src="/bootstrap-3.3.6-dist/slider2/bootstrap-slider.js"></script>
<script src="/bootstrap-3.3.6-dist/slider2/bootstrap-slider.min.js"></script>
<script src="/bootstrap-3.3.6-dist/js/sliderproba.js"></script>
<script src="/bootstrap-3.3.6-dist/js/promenaProfila.js"></script>
<script src="/bootstrap-3.3.6-dist/js/openSettings.js"></script>
@stop


@section('sewingBut')
@parent
@stop

@section('javascriptFunctions')
	<script>
		$(document).ready(function(){
    		$("#readMore").click(function(){
        		$("#ostatak").slideToggle();
        		if ($("#readMore").html() == "Read more")
        			$("#readMore").html("Show less");
        		else
        			$("#readMore").html("Read more");
    		});
		});
	</script>
@stop

@section('onloadfunction') onload="ucitaj();" @stop

@section('settingsBoxContainer')
@parent
<table id="dijalog">
	<tr>
		<td align="center" valign="middle" id="alertMessage">
		</td>
	</tr>
</table>
@stop


@section('navbar')
@parent
@stop


@section('content')
<div class="container">

	<div class="row" id="content" style="padding-top: 3%;">

		<div class="col-md-3"></div>
		<div class="col-md-6" align="center" style="padding-left: 10px; padding-right: 10px">

			<div style="display: table; width: 100%; border-radius: 5px; background: rgba(170,170,170, 0.8); padding-left: 20px; padding-right: 20px; padding-top: 20px; padding-bottom:20px">

				<div class="row">
					<div class="col-md-12">
						<div class="jumbotronProfile">
							<div class="row" style="font-weight: bold; color: white; font-size: 16px">
								<div class="col-md-6" align="left" id="levoIme"><a href="/profile_1" class="linkToProfile">Thomas Appleby, 23, <i class="fa fa-mars"></i></a></div>
								<div class="col-md-6" align="right" id="desnoUsername"><a href="/profile_1" class="linkToProfile">@ThomasA</a></div>
							</div>
						</div>

						<div class="jumbotronProfile" style="margin-top: 20px; color: white; font-size: 16px; font-weight: bold" align="center" id="UserBio">
							I'm an exchange student from UK and I came to Belgrade this year. I have a girlfriend, and I'm here to make friends.
						</div>

						<div class="jumbotronProfile" style="margin-top: 20px; color: white" align="center">
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Relationship status: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserRelStatusCol">In a relationship</div>
							</div>
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Education: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserEduStatusCol">High School</div>
							</div>
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Likes: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserLikesCol">Parties, electronic music, music festivals.</div>
							</div>
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Dislikes: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserDislikesCol">I don't like shy people.</div>
							</div>
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Hobbies: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserHobbiesCol">Sleeping and eating.</div>
							</div>

							<hr style="margin-top: 10px; margin-bottom: 10px;"/>

							<div width="100%" id="ostatak">

							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Field of work: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserWorkCol">Student</div>
							</div>
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Perfect first date: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserFirstDateCol">/</div>
							</div>
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Favorite quote: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserFavQuoteCol">"Don't worry, be happy"</div>
							</div>
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Favorite song: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserFavSongCol">Chris Brown - Beautiful People</div>
							</div>
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Longest relationship: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserLongestRelCol">2 months</div>
							</div>
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Best quality: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserBestQualCol">I'm kind and I'm very adventurous.</div>
							</div>
							<div class="row UserInfoRows">
								<div class="col-md-5 UserInfoRowsCol1" style="font-weight: bold; color: #AE0000">Worst quality: </div>
								<div class="col-md-7 UserInfoRowsCol2" style="color: white; font-weight: normal;" id="UserWorstQualCol">I'm lazy.</div>
							</div>

							<hr style="margin-top: 10px; margin-bottom: 10px;"/>

							</div>

							<span style="cursor: pointer; color: #AE0000; font-weight: bold" id="readMore">Read more</span>
						</div>

						<div class="jumbotronProfile" style="margin-top: 20px">
							<table width="100%">
								<tr>
									<td><span class="glyphicon glyphicon-remove LikeRemove" onclick="promeniRemove()"></span></td>
									<td width="100%" align="center" style="color: #AE0000"><span id="areYou">Are you interested in this user?</span></td>
									<td><span class="glyphicon glyphicon-ok LikeOk" onclick="promeniOk()"></span></td>
								</tr>
							</table>
						</div>

					</div>
				</div>

			</div>

		</div>
		<div class="col-md-3"></div>

	</div>

</div>
@stop


@section('footer')
<div style="height: 80px;" id="divche"></div>
@parent
@stop
