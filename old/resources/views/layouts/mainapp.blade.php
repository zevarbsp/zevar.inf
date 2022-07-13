@include('layouts.header')
@include('layouts.topbar')
<main>
   <div class="main-section">
      <div class="container">
         <div class="main-section-data">
            <div class="row">
               <div class="col-lg-3">
                  @yield('leftcontent')
               </div>
               <div class="col-lg-6">
                  @yield('maincontent')
               </div>
               <div class="col-lg-3">
                  @yield('rightcontent')
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
@include('layouts.footer')
