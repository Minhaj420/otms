@extends('website.master')


@section('title')
    About US
@endsection


@section('body')
   <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col">
                   <div class="card card-body border-0 shadow">
                       <h3>Our Mission</h3>
                       <hr/>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur distinctio fuga inventore, minima obcaecati saepe! A at culpa dignissimos earum, iste nostrum, optio porro quia ratione velit, voluptate voluptatibus.</p>
                       <p>lorem</p>
                   </div>
               </div>
           </div>
       </div>
   </section>

   <section class="py-5 bg-light">
       <div class="container">
           <div class="row">
               <div class="col">
                   <div class="card card-body border-0 shadow">
                       <h3>Our Vission</h3>
                       <hr/>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi consequuntur distinctio fuga inventore, minima obcaecati saepe! A at culpa dignissimos earum, iste nostrum, optio porro quia ratione velit, voluptate voluptatibus.</p>
                       <p>lorem</p>
                   </div>
               </div>
           </div>
       </div>
   </section>

   <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col">
                   <div class="card card-body border-0">
                       <h3 class="text-center">Our Instructor</h3>
                   </div>
               </div>
           </div>
           <div class="row mt-3">
               <div class="col-md-4">
                   <div class="card">
                       <img src="{{asset('/')}}website/image/team-3.jpg" alt="" class=""/>
                       <div class="card-body">
                           <h4>Instructor Name</h4>
                           <p>Instructor Description</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
@endsection
