@extends('public_site.layout.master')
@section('content')
       <div class="home-sec" id="home" >
           <div class="overlay">
 <div class="container">
           <div class="row text-center " >

               <div class="col-lg-12  col-md-12 col-sm-12">

                <div class="flexslider set-flexi" id="main-section" >
                    <ul class="slides move-me">
                        <!-- Slider 01 -->
                        <li>
                              <h3>Delivering Quality Education</h3>
                           <h1 style="color: tomato;">THE UNIQUE METHOD</h1>
                        <h3>The 100% engagement platform
                        Find and create free gamified quizzes and interactive lessons
                        to engage any learner.</h3>
                        </li>

                    </ul>
                </div>
            </div>

               </div>
                </div>
           </div>

       </div>
       <!--HOME SECTION END-->
    <div  class="tag-line" >
         <div class="container">
           <div class="row  text-center" >

               <div class="col-lg-12  col-md-12 col-sm-12">

        <h2 data-scroll-reveal="enter from the bottom after 0.1s" ><i class="fa fa-circle-o-notch"></i> WELCOME TO THE EDU-CENTER <i class="fa fa-circle-o-notch"></i> </h2>
                   </div>
               </div>
             </div>

    </div>
    <!--HOME SECTION TAG LINE END-->
         <div id="features-sec" class="container set-pad" >
             <div class="row text-center">
                 <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                     <h1 data-scroll-reveal="enter from the bottom after 0.2s"  class="header-line">Exams List </h1>

                 </div>

             </div>
             <!--/.HEADER LINE END-->


           <div class="row" >

                @foreach($exam as $val)

                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s" >
                                <div class="about-div card" style="text-align: center; border: 0.1rem solid #c0c0c0;
                                    background: #f8f8f8;
                                    border-radius: 0.5rem;
                                    text-align: center;
                                    box-shadow: 6px 6px 10px -4px rgb(0 0 0 / 75%);
                                    cursor: pointer;
                                    margin: 20px 0 100px; width:35rem">
                         <div style="text-align: center;"><img src="{{ asset('uploads/'. $val->exam_img) }}" alt="" width="200px" height= "150px"; ></div>
                <h3  style="text-align: center;">{{ $val-> exam_title  }}</h3>
                 <hr />
                 <hr />
                <p style="font-weight: bold;text-align:center">
                {{$val-> exam_desc}}
                </p>

               <!-- <a href="#" class="btn btn-info btn-set"  >ASK THE EXPERT</a> -->

                            @guest
                                @if ((Route::has('login')) ||  (Route::has('register') ))
                    <a href="{{ route('login')}}" class="btn btn-info btn-set"  >You Have to login to statrt the exam </a>

                                @endif
                                @else
                               <a href="{{route('choice.show',$val->id  )}}" class="btn btn-info btn-set" > START EXAM</a>

                            @endguest

                   </div>
               </div>

                @endforeach
               </div>

                    </div>
        <!-- FEATURES SECTION END-->
            <div id="faculty-sec" >
            <div class="container set-pad">
                    <div class="row text-center">
                        <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                            <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">OUR FACULTY </h1>
                            <p data-scroll-reveal="enter from the bottom after 0.3s">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo.
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                Aenean commodo.
                                </p>
                        </div>

             </div>
             <!--/.HEADER LINE END-->

           <div class="row" >


                 <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <img src="site/img/faculty/3.png"  class="img-rounded" style="width:80%;height:20vh"  />
                   <h3 >ROXI CHI LUENA </h3>
                 <hr />
                         <h4>Desigining <br /> Department</h4>
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo .

                   </p>
                </div>
                   </div>
                   <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.4s">
                     <div class="faculty-div">
                     <img src="site/img/faculty/1.png"  class="img-rounded" style="width:80%;height:20vh"  />
                   <h3 >ROXI CHI LUENA </h3>
                 <hr />
                         <h4>Desigining <br /> Department</h4>
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo .

                   </p>
                </div>
                   </div>
               <div class="col-lg-4  col-md-4 col-sm-4" data-scroll-reveal="enter from the bottom after 0.6s">
                     <div class="faculty-div">
                     <img src="site/img/faculty/2.png" class="img-rounded" style="width:80%;height:20vh" />
                   <h3 >RUBY DECORSA</h3>
                 <hr />
                         <h4>Management <br /> Department</h4>
                   <p >
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                        Aenean commodo .

                   </p>
                </div>
                   </div>

               </div>
             </div>
        </div>
        <div class="container"id='contact'style="margin-bottom:100px" >
             <div class="row set-row-pad" >
    <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 " data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Our Location </strong></h2>
        <hr />
                    <div ">
                        <h4>234/80 -UFG , New Street,</h4>
                        <h4>Switzerland.</h4>
                        <h4><strong>Call:</strong>  + 67-098-907-1269 / 70 / 71 </h4>
                        <h4><strong>Email: </strong>info@yourdomain.com</h4>
                    </div>


                </div>
                 <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1" data-scroll-reveal="enter from the bottom after 0.4s">

                    <h2 ><strong>Social Conectivity </strong></h2>
        <hr />
                    <div >
                        <a href="#">  <img src="site/img/Social/facebook.png" alt="" /> </a>
                     <a href="#"> <img src="site/img/Social/google-plus.png" alt="" /></a>
                     <a href="#"> <img src="site/img/Social/twitter.png" alt="" /></a>
                    </div>
                    </div>


                </div>
                 </div>
     <!-- CONTACT SECTION END-->





   @endsection
