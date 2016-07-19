@extends('template.header_footer')

@section('title')
Announcement - FiveJack
@stop

@section('meta_tag')
@stop

@section('css_import')
@parent
<link rel="stylesheet" type="text/css" href='{{{ Config::get("constant.RESOURCE_URL") . "css/career.css" }}}'>
@stop

@section('contents')
	<div class="content">
		<h2 class="job-title">Announcement for shareholders</h2>
		<p class="job-detail">
			주식분할로 인한 주권제출공고<br><br>

			본 회사는 2016년 5월 7일 임시주주총회의 결의로 1주의 금액 금5,000원의 주식 1주를 분할하여 1주의 금액 금100원의 주식 50주로 하기로 하였으므로 구주권을 가진 사람은 이 공고의 게재일로부터 1월 내에 구주권을 본 회사에 제출하시기 바랍니다.<br><br>

			주식회사 파이브잭<br>
			경기도 하남시 덕풍동로 111, 701호 (덕풍동, 풍산캐슬빌딩)<br>
			대표이사 김 성 진<br><br>
			
			공지일: 2016년 7월 4일
		</p>
	</div>
@stop