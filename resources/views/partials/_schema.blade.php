@inject('rankMath', 'App\Services\RankMathService')

@php
  $rankMathHead = $rankMath->getHead(url()->current());
@endphp

@if($rankMathHead)
  {!! $rankMathHead !!}
@endif