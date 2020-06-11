@extends('master')
@section('content')
<div class="main-content">

     
    <!-- Mobile Menu Area End -->

<!-- Inner Page Banner Area Start Here -->
 <div class="inner-page-banner-area">
     <div class="container">
         <div class="pagination-area">
             <h1 style="text-align: center;">Admission Procedure</h1>
         </div>
     </div>
 </div>
 <!-- Inner Page Banner Area End Here -->
 <!-- About Page 1 Area Start Here -->
 <div class="about-page1-area">
     <div class="container">
         <div class="row about-page1-inner">
             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                 <div class="about-page-content-holder m-m-0">
                     <div class="content-box">
                         <p id="registrationidpageprincipal">
                            <strong>Admission:</strong> Admission to the Academy will be made strictly on the basis of merit. Selected candidates shall have to produce the following origin.</p>

                           <p>a)	Attested copy of HSLC passed Certificate</p>
                           <p>b)	Mark Sheet</p>
                           <p>c)	Admit Card of HSLC Examination.</p>
                           <p>d)	For ST/SC candidate attested copy of cast certificate.</p>
                           <p>e)	Three copies of pass port size photograph (Coloured)</p>
                           <p>
                            <strong>Identity Card:</strong> Identity card shall be issued to every student of the Academy. The identity card is mandatory during Academic hours, any function or meeting of the Accademy.
                           </p>

                           <strong>Uniform:</strong>
                           <table class="table">
                               <tr>
                                   <th>Girls Trouser</th>
                                   <th>Boys</th>
                               </tr>
                               <tr>
                                   <td>Kameez</td>
                                   <td>Trouser</td>
                               </tr>
                               <tr>
                                   <td>Dopatta</td>
                                   <td>Shirt</td>
                               </tr>
                               <tr>
                                   <td>Footwear</td>
                                   <td>Footwear</td>
                               </tr>
                           </table>
                           <strong>Attendance:</strong>  Students shall be required to attend at least 85% of classes held for theoretical & practical classes separately to come eligible to sit for the Final examination, otherwise disqualified for the same.

                           <table class="table">
                               <tr>
                                   <th>Fees Structure</th>
                               </tr>
                               <tr>
                                   <td>
                                    <strong>From Science:</strong>
                                    <ul>
                                        <li>
                                            ✓ Admission : <br>
                                            H.S. 1st year:          10,500/- <br>
                                            H.S. 2nd Year :       11,000/- <br>
                                        </li>
                                        <li>
                                            ✓ Monthly : <br>
                                            H.S. 1st year:          1,200/- <br>
                                            H.S. 2nd Year :       1,200/-       <br>              
                                        </li>
                                    </ul>
                                    
                                   </td>
                                   <td>
                                    <strong>From Arts:</strong>
                                    <ul>
                                        <li>
                                            ✓ Admission : <br>
                                            H.S. 1st year:          6,000/- <br>
                                            H.S. 2nd Year :       6,500/- <br>
                                        </li>
                                        <li>
                                            ✓ Monthly : <br>
                                            H.S. 1st year:          700/- <br>
                                            H.S. 2nd Year :       700/-       <br>                             
                                        </li>
                                    </ul>
                                   </td>
                               </tr>
                           </table>
                           <strong>Scholarship:</strong>  Academy provides the following scholarship opportunities
                               <ol>
                                   <li>
                                       Minority scholarship
                                   </li>
                                   <li>
                                       Maulana Azad Foundation
                                   </li>
                                   <li>
                                       Ajmal Foundation
                                   </li>
                                   <li>
                                       Scholarship from the Academy for outstanding result in H.S. 1st Year.
                                   </li>
                               </ol>

                     </div>
                 </div>
             </div>
             {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                 <div class="about-page-img-holder m-m-auto">
                     <img src="{{asset('frontend/allPhotos/photos/admission_procedure.gif')}}" class="img-responsive" alt="about">
                 </div>
             </div> --}}
         </div>

{{-- 
         <div class="row about-page1-inner">

           <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <div class="about-page-img-holder">
                   <img src="{{asset('frontend/allPhotos/photos/2.jpg')}}" class="img-responsive" alt="about">
               </div>
           </div>

             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                 <div class="about-page-content-holder">
                     <div class="content-box">
                         <h2 style="font-family: Times New Roman; font-style: italic;">DIRECT ADMISSION</h2>
                         <p id="registrationidpage">The school may offer direct admission to meritorious student based on their academics records in their current school with special educational scholarships.
                         </p>
                     </div>
                 </div>
             </div>

         </div> --}}
     </div>

 </div>
 <div class="counter-area bg-primary-deep" style="background-image: url('img/banner/4.jpg');">
     <div class="container">
         <div class="row">
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".20s">
                 <h2 class="about-counter title-bar-counter" data-num="36">36</h2>
                 <p>FACULTY MEMBERS</p>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".40s">
                 <h2 class="about-counter title-bar-counter" data-num="21">21</h2>
                 <p>YEARS OF ESTABLISHMENT</p>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".60s">
                 <h2 class="about-counter title-bar-counter" data-num="47">47</h2>
                 <p>CLASS ROOM</p>
             </div>
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 counter1-box wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".80s">
                 <h2 class="about-counter title-bar-counter" data-num="432">432</h2>
                 <p>TOTAL STUDENTS</p>
             </div>
         </div>
     </div>
 </div>  
 <!-- Counter Area End Here -->
 <!-- Students Say Area Start Here -->

 <!-- Students Say Area End Here -->
 <div class="section-divider"></div>
 <!-- Brand Area Start Here -->

 <!-- Brand Area End Here -->

</div>
@endsection
