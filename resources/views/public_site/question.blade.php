@extends('public_site.layout.master')
@section('content')

<div style="width:55%;height:180vh;background-color:lightsteelblue;margin:150px auto;border-radius:20px;padding:15px 25px 0 25px;">
<form action="{{ route('result.store')}}" method="post">
    @csrf
@php
$count=0;
@endphp

    @foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 4  )
        {{ $val-> question }}
        </h3>

    @foreach($choice as $val )

        @if($val->question_id == 1 )
        <input type="hidden" name="exam_name" value="{{ $val->exam_title  }} ">
        <input type="radio" id="one" name="answer1" value='{{ $val->choice . " => " .  $val->answer_status }}' >

        <label for="one">  <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>


        @if($val->answer_status ==='true')
       <input type="hidden" name="result"  value= " {{ $count++}}">
       @else

       <input type="hidden" name="result"  value= " {{ $count}}">
       @endif


        @endif
     @endforeach
        @endif
        @endforeach
<!-- _______________________________________________________  -->

    @foreach($choice as $val )

        <h3 style="font-weight: bold;">
        @if($val->id == 8 )
        {{ $val-> question }}
        </h3>

     @foreach($choice as $val )

        @if($val->question_id == 2 )
        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="two" name="answer2" value='{{ $val->choice . " => " .  $val->answer_status}}'>
       <label for="two">  <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>

       @if($val->answer_status === 'true')
       <input type="hidden" name="result"  value= " {{ $count++}}">
       @else
       <input type="hidden" name="result"  value= " {{ $count}}">
       @endif

       @endif
     @endforeach
        @endif
        @endforeach
<!-- _______________________________________________________  -->


        @foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 12 )
        {{ $val-> question }}
        </h3>
     @foreach($choice as $val )

        @if($val->question_id == 3 )
        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="three" name="answer3" value='{{ $val->choice . " => " .  $val->answer_status}}'>
       <label for="three">  <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>

       @if($val->answer_status === 'true')
       <input type="hidden" name="result"  value= " {{ $count++}}">
       @else
       <input type="hidden" name="result"  value= " {{ $count}}">
       @endif

        @endif
    @endforeach
        @endif
        @endforeach

<!-- _______________________________________________________  -->

        @foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 16 )
        {{ $val-> question }}
        </h3>
     @foreach($choice as $val )

        @if($val->question_id === 4 )
        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="four" name="answer4" value='{{ $val->choice . " => " .  $val->answer_status}}'>
       <label for="four"> <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>


       @if($val->answer_status === 'true')
       <input type="hidden" name="result"  value= " {{ $count++}}">
       @else
       <input type="hidden" name="result"  value= " {{ $count}}">
       @endif

       @endif
     @endforeach
        @endif
        @endforeach


<!-- _______________________________________________________  -->

        @foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 18 )
        {{ $val-> question }}
        </h3>
    @foreach($choice as $val )

        @if($val->question_id === 5 )
        <input type="hidden" name="exam_name" value="{{ $val->exam_title  }} ">
        <input type="radio" id="five" name="answer5" value='{{ $val->choice  . " => " .  $val->answer_status}}'>
       <label for="five"> <h5 style="font-weight: bold;" >{{ $val->choice }}</h5> </label> <br>


        @if($val->answer_status === 'true')
       <input type="hidden" name="result"  value= " {{ $count++}}">
       @else

       <input type="hidden" name="result"  value= " {{ $count}}">
       @endif
        @endif

     @endforeach
        @endif
        @endforeach

<!-- _______________________________________________________  -->


@foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 22 )
        {{ $val-> question }}
        </h3>
    @foreach($choice as $val )

        @if($val->question_id == 6 )
         <input type="hidden" name="exam_name" value="{{ $val->exam_title  }} ">
        <input type="radio" id="one" name="answer1" value='{{ $val->choice . " => " .  $val->answer_status}}'>
       <label for="one"> <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>
        @endif

     @endforeach
        @endif
        @endforeach

<!-- _______________________________________________________  -->

        @foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 26 )
        {{ $val-> question }}
        </h3>

        @foreach($choice as $val )

        @if($val->question_id == 7 )

        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="two" name="answer2" value='{{ $val->choice  . " => " .  $val->answer_status}}' >
       <label for="two"> <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>
         @endif
     @endforeach
        @endif

        @endforeach
<!-- _______________________________________________________  -->

  @foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 30 )
        {{ $val-> question }}
        </h3>


        @foreach($choice as $val )

        @if($val->question_id == 8)

        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="three" name="answer3" value='{{ $val->choice . " => " .  $val->answer_status}}'>
       <label for="three">  <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>
           @endif
     @endforeach
        @endif
        @endforeach

<!-- _______________________________________________________  -->

@foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 34 )
        {{ $val-> question }}
        </h3>


        @foreach($choice as $val )

        @if($val->question_id == 9)
        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="four" name="answer4" value='{{ $val->choice  . " => " .  $val->answer_status}}'>
       <label for="four"> <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>
          @endif
     @endforeach
        @endif
        @endforeach

<!-- _______________________________________________________  -->

@foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 38 )
        {{ $val-> question }}
        </h3>

        @foreach($choice as $val )

        @if($val->question_id == 10)
        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="five" name="answer5" value='{{ $val->choice . " => " .  $val->answer_status}}'>
       <label for="five"> <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>
         @endif
     @endforeach
        @endif

        @endforeach



<!-- _______________________________________________________  -->




@foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 42  )
        {{ $val-> question }}
        </h3>

    @foreach($choice as $val )

        @if($val->question_id == 11 )
        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="one" name="answer1" value='{{ $val->choice . " => " .  $val->answer_status}}' >
        <label for="one">  <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>
        @endif

     @endforeach
        @endif
        @endforeach
<!-- _______________________________________________________  -->

    @foreach($choice as $val )

        <h3 style="font-weight: bold;">
        @if($val->id == 46 )
        {{ $val-> question }}
        </h3>

     @foreach($choice as $val )

        @if($val->question_id == 12 )
        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="two" name="answer2" value='{{ $val->choice . " => " .  $val->answer_status}}'>
       <label for="two">  <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>
        @endif

     @endforeach
        @endif
        @endforeach
<!-- _______________________________________________________  -->


        @foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 50 )
        {{ $val-> question }}
        </h3>
     @foreach($choice as $val )

        @if($val->question_id == 13 )
        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="three" name="answer3" value='{{ $val->choice . " => " .  $val->answer_status}}'>

       <label for="three">  <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>
        @endif

    @endforeach
        @endif
        @endforeach

<!-- _______________________________________________________  -->

        @foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 54 )
        {{ $val-> question }}
        </h3>
     @foreach($choice as $val )

        @if($val->question_id == 14 )
        <input type="hidden" name="exam_name" value="{{ $val->exam_title }} ">
        <input type="radio" id="four" name="answer4" value='{{ $val->choice . " => " .  $val->answer_status}}'>
       <label for="four"> <h5 style="font-weight: bold;" >{{ $val->choice }}</h5></label> </br>
       @endif

     @endforeach
        @endif
        @endforeach


<!-- _______________________________________________________  -->

        @foreach($choice as $val )
        <h3 style="font-weight: bold;">
        @if($val->id == 58 )
        {{ $val-> question }}
        </h3>
    @foreach($choice as $val )

        @if($val->question_id == 15 )
        <input type="hidden" name="exam_name" value="{{ $val->exam_title  }} ">
        <input type="radio" id="five" name="answer5" value='{{ $val->choice  . " => " .  $val->answer_status}}'>
       <label for="five"> <h5 style="font-weight: bold;" >{{ $val->choice }}</h5> </label> <br>
        @endif

     @endforeach
        @endif
        @endforeach


        <input class="btn btn-primary " type="submit" value="Submit">


</form>

</div>



