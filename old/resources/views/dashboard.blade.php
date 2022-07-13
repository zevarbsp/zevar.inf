@extends('layouts.mainapp')

@section('leftcontent')

@endsection


@section('maincontent')

<div class="main-ws-sec">
   <div class="post-project">
               <h3>Your Profile</h3>
               <div class="post-project-fields">
                  <form>
                     <div class="row">
                        <div class="col-lg-12">
                           <input type="text" name="title" placeholder="Title">
                        </div>
                        <div class="col-lg-12">
                           <div class="inp-field">
                              <select>
                                 <option>Category</option>
                                 <option>Category 1</option>
                                 <option>Category 2</option>
                                 <option>Category 3</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <input type="text" name="skills" placeholder="Skills">
                        </div>
                        <div class="col-lg-12">
                           <div class="price-sec">
                              <div class="price-br">
                                 <input type="text" name="price1" placeholder="Price">
                                 <i class="la la-dollar"></i>
                              </div>
                              <span>To</span>
                              <div class="price-br">
                                 <input type="text" name="price1" placeholder="Price">
                                 <i class="la la-dollar"></i>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <textarea name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="col-lg-12">
                           <ul>
                              <li><button class="active" type="submit" value="post">Post</button></li>
                              <li><a href="#" title="">Cancel</a></li>
                           </ul>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
            <br>
<div class="post-topbar">
<div class="user-picy">
<img src="{{asset('frtheme/images/resources/user-pic.png')}}" alt="">
</div>
<div class="post-st">
<ul>
<li><a class="post_project" href="#" title="">Post a Project</a></li>
<li><a class="post-jb active" href="#" title="">Post a Job</a></li>
</ul>
</div>
</div>
<div class="posts-section">
<div class="post-bar">
<div class="post_topbar">
<div class="usy-dt">
<img src="images/resources/us-pic.png" alt="">
<div class="usy-name">
<h3>John Doe</h3>
<span><img src="images/clock.png" alt="">3 min ago</span>
</div>
</div>
<div class="ed-opts">
<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
<ul class="ed-options">
<li><a href="#" title="">Edit Post</a></li>
<li><a href="#" title="">Unsaved</a></li>
<li><a href="#" title="">Unbid</a></li>
<li><a href="#" title="">Close</a></li>
<li><a href="#" title="">Hide</a></li>
</ul>
</div>
</div>
<div class="epi-sec">
<ul class="descp">
<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
<li><img src="images/icon9.png" alt=""><span>India</span></li>
</ul>
<ul class="bk-links">
<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
</ul>
</div>
<div class="job_descp">
<h3>Senior Wordpress Developer</h3>
<ul class="job-dt">
<li><a href="#" title="">Full Time</a></li>
<li><span>$30 / hr</span></li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
<ul class="skill-tags">
<li><a href="#" title="">HTML</a></li>
<li><a href="#" title="">PHP</a></li>
<li><a href="#" title="">CSS</a></li>
<li><a href="#" title="">Javascript</a></li>
<li><a href="#" title="">Wordpress</a></li>
</ul>
</div>
<div class="job-status-bar">
<ul class="like-com">
<li>
<a href="#"><i class="fas fa-heart"></i> Like</a>
<img src="images/liked-img.png" alt="">
<span>25</span>
</li>
<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
</ul>
<a href="#"><i class="fas fa-eye"></i>Views 50</a>
</div>
</div>
<div class="top-profiles">
<div class="pf-hd">
<h3>Top Profiles</h3>
<i class="la la-ellipsis-v"></i>
</div>
<div class="profiles-slider slick-initialized slick-slider"><span class="slick-previous slick-arrow" style="display: inline;"></span>
<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2415px; transform: translate3d(-644px, 0px, 0px);"><div class="user-profy slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true" tabindex="-1" style="width: 153px;">
<img src="images/resources/user1.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true" tabindex="-1" style="width: 153px;">
<img src="images/resources/user2.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" tabindex="-1" style="width: 153px;">
<img src="images/resources/user3.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" style="width: 153px;">
 <img src="images/resources/user1.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false" tabindex="0" style="width: 153px;">
<img src="images/resources/user2.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="0">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="0"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="0">hire</a></li>
</ul>
<a href="#" title="" tabindex="0">View Profile</a>
</div><div class="user-profy slick-slide slick-active" data-slick-index="2" aria-hidden="false" tabindex="0" style="width: 153px;">
<img src="images/resources/user3.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="0">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="0"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="0">hire</a></li>
</ul>
<a href="#" title="" tabindex="0">View Profile</a>
</div><div class="user-profy slick-slide slick-active" data-slick-index="3" aria-hidden="false" tabindex="0" style="width: 153px;">
<img src="images/resources/user1.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="0">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="0"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="0">hire</a></li>
</ul>
<a href="#" title="" tabindex="0">View Profile</a>
</div><div class="user-profy slick-slide" data-slick-index="4" aria-hidden="true" tabindex="-1" style="width: 153px;">
<img src="images/resources/user2.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide" data-slick-index="5" aria-hidden="true" tabindex="-1" style="width: 153px;">
<img src="images/resources/user3.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide slick-cloned" data-slick-index="6" aria-hidden="true" tabindex="-1" style="width: 153px;">
 <img src="images/resources/user1.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide slick-cloned" data-slick-index="7" aria-hidden="true" tabindex="-1" style="width: 153px;">
<img src="images/resources/user2.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide slick-cloned" data-slick-index="8" aria-hidden="true" tabindex="-1" style="width: 153px;">
<img src="images/resources/user3.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide slick-cloned" data-slick-index="9" aria-hidden="true" tabindex="-1" style="width: 153px;">
<img src="images/resources/user1.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide slick-cloned" data-slick-index="10" aria-hidden="true" tabindex="-1" style="width: 153px;">
<img src="images/resources/user2.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div><div class="user-profy slick-slide slick-cloned" data-slick-index="11" aria-hidden="true" tabindex="-1" style="width: 153px;">
<img src="images/resources/user3.png" alt="">
<h3>John Doe</h3>
<span>Graphic Designer</span>
<ul>
<li><a href="#" title="" class="followw" tabindex="-1">Follow</a></li>
<li><a href="#" title="" class="envlp" tabindex="-1"><img src="images/envelop.png" alt=""></a></li>
<li><a href="#" title="" class="hire" tabindex="-1">hire</a></li>
</ul>
<a href="#" title="" tabindex="-1">View Profile</a>
</div></div></div>





<span class="slick-nexti slick-arrow" style="display: inline;"></span></div>
</div>
<div class="post-bar">
<div class="post_topbar">
<div class="usy-dt">
<img src="images/resources/us-pic.png" alt="">
<div class="usy-name">
<h3>John Doe</h3>
<span><img src="images/clock.png" alt="">3 min ago</span>
</div>
</div>
<div class="ed-opts">
<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
<ul class="ed-options">
<li><a href="#" title="">Edit Post</a></li>
<li><a href="#" title="">Unsaved</a></li>
<li><a href="#" title="">Unbid</a></li>
<li><a href="#" title="">Close</a></li>
<li><a href="#" title="">Hide</a></li>
</ul>
</div>
</div>
<div class="epi-sec">
<ul class="descp">
<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
<li><img src="images/icon9.png" alt=""><span>India</span></li>
</ul>
<ul class="bk-links">
<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
<li><a href="#" title="" class="bid_now">Bid Now</a></li>
</ul>
</div>
<div class="job_descp">
<h3>Senior Wordpress Developer</h3>
<ul class="job-dt">
<li><a href="#" title="">Full Time</a></li>
<li><span>$30 / hr</span></li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
<ul class="skill-tags">
<li><a href="#" title="">HTML</a></li>
<li><a href="#" title="">PHP</a></li>
<li><a href="#" title="">CSS</a></li>
<li><a href="#" title="">Javascript</a></li>
<li><a href="#" title="">Wordpress</a></li>
</ul>
</div>
<div class="job-status-bar">
<ul class="like-com">
<li>
<a href="#"><i class="fas fa-heart"></i> Like</a>
<img src="images/liked-img.png" alt="">
<span>25</span>
</li>
<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
</ul>
<a href="#"><i class="fas fa-eye"></i>Views 50</a>
</div>
</div>
<div class="posty">
<div class="post-bar no-margin">
<div class="post_topbar">
<div class="usy-dt">
<img src="images/resources/us-pc2.png" alt="">
<div class="usy-name">
<h3>John Doe</h3>
<span><img src="images/clock.png" alt="">3 min ago</span>
</div>
</div>
<div class="ed-opts">
<a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
<ul class="ed-options">
<li><a href="#" title="">Edit Post</a></li>
<li><a href="#" title="">Unsaved</a></li>
<li><a href="#" title="">Unbid</a></li>
<li><a href="#" title="">Close</a></li>
<li><a href="#" title="">Hide</a></li>
</ul>
</div>
</div>
<div class="epi-sec">
<ul class="descp">
<li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
<li><img src="images/icon9.png" alt=""><span>India</span></li>
</ul>
<ul class="bk-links">
<li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
<li><a href="#" title=""><i class="la la-envelope"></i></a></li>
</ul>
</div>
<div class="job_descp">
<h3>Senior Wordpress Developer</h3>
<ul class="job-dt">
<li><a href="#" title="">Full Time</a></li>
<li><span>$30 / hr</span></li>
</ul>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
<ul class="skill-tags">
<li><a href="#" title="">HTML</a></li>
<li><a href="#" title="">PHP</a></li>
<li><a href="#" title="">CSS</a></li>
<li><a href="#" title="">Javascript</a></li>
<li><a href="#" title="">Wordpress</a></li>
 </ul>
</div>
<div class="job-status-bar">
<ul class="like-com">
<li>
<a href="#"><i class="fas fa-heart"></i> Like</a>
<img src="images/liked-img.png" alt="">
<span>25</span>
</li>
<li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
</ul>
<a href="#"><i class="fas fa-eye"></i>Views 50</a>
</div>
</div>
<div class="comment-section">
<a href="#" class="plus-ic">
<i class="la la-plus"></i>
</a>
<div class="comment-sec">
<ul>
<li>
<div class="comment-list">
<div class="bg-img">
<img src="images/resources/bg-img1.png" alt="">
</div>
<div class="comment">
<h3>John Doe</h3>
<span><img src="images/clock.png" alt=""> 3 min ago</span>
<p>Lorem ipsum dolor sit amet, </p>
<a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
</div>
</div>
<ul>
<li>
<div class="comment-list">
<div class="bg-img">
<img src="images/resources/bg-img2.png" alt="">
</div>
<div class="comment">
<h3>John Doe</h3>
<span><img src="images/clock.png" alt=""> 3 min ago</span>
<p>Hi John </p>
<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
</div>
</div>
</li>
</ul>
</li>
<li>
<div class="comment-list">
<div class="bg-img">
<img src="images/resources/bg-img3.png" alt="">
</div>
<div class="comment">
<h3>John Doe</h3>
<span><img src="images/clock.png" alt=""> 3 min ago</span>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
<a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
</div>
</div>
</li>
</ul>
</div>
<div class="post-comment">
<div class="cm_img">
<img src="images/resources/bg-img4.png" alt="">
</div>
<div class="comment_box">
<form>
<input type="text" placeholder="Post a comment">
<button type="submit">Send</button>
</form>
</div>
</div>
</div>
</div>
<div class="process-comm">
<div class="spinner">
<div class="bounce1"></div>
<div class="bounce2"></div>
<div class="bounce3"></div>
</div>
</div>
</div>
</div>


<!----Models--->


         <div class="post-popup pst-pj">
            <div class="post-project">
               <h3>Post a project</h3>
               <div class="post-project-fields">
                  <form>
                     <div class="row">
                        <div class="col-lg-12">
                           <input type="text" name="title" placeholder="Title">
                        </div>
                        <div class="col-lg-12">
                           <div class="inp-field">
                              <select>
                                 <option>Category</option>
                                 <option>Category 1</option>
                                 <option>Category 2</option>
                                 <option>Category 3</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <input type="text" name="skills" placeholder="Skills">
                        </div>
                        <div class="col-lg-12">
                           <div class="price-sec">
                              <div class="price-br">
                                 <input type="text" name="price1" placeholder="Price">
                                 <i class="la la-dollar"></i>
                              </div>
                              <span>To</span>
                              <div class="price-br">
                                 <input type="text" name="price1" placeholder="Price">
                                 <i class="la la-dollar"></i>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <textarea name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="col-lg-12">
                           <ul>
                              <li><button class="active" type="submit" value="post">Post</button></li>
                              <li><a href="#" title="">Cancel</a></li>
                           </ul>
                        </div>
                     </div>
                  </form>
               </div>
               <a href="#" title=""><i class="la la-times-circle-o"></i></a>
            </div>
         </div>
         <div class="post-popup job_post">
            <div class="post-project">
               <h3>Edit Profile</h3>
               <div class="post-project-fields">
                  <form method="post" action="{{ route('updateProfile') }}">
                     <div class="row">
                        <div class="col-lg-12">
                           <input type="text" name="title" placeholder="Title">
                        </div>
                        <div class="col-lg-12">
                           <div class="inp-field">
                              <select>
                                 <option>Category</option>
                                 <option>Category 1</option>
                                 <option>Category 2</option>
                                 <option>Category 3</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <input type="text" name="skills" placeholder="Skills">
                        </div>
                        <div class="col-lg-6">
                           <div class="price-br">
                              <input type="text" name="price1" placeholder="Price">
                              <i class="la la-dollar"></i>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="inp-field">
                              <select>
                                 <option>Full Time</option>
                                 <option>Half time</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-lg-12">
                           <textarea name="description" placeholder="Description"></textarea>
                        </div>
                        <div class="col-lg-12">
                           <ul>
                              <li><button class="active" type="submit" value="post">Post</button></li>
                              <li><a href="#" title="">Cancel</a></li>
                           </ul>
                        </div>
                     </div>
                  </form>
               </div>
               <a href="#" title=""><i class="la la-times-circle-o"></i></a>
            </div>
         </div>
@endsection

@section('rightcontent')
<div class="post-topbar" style="height:440px;width:340px;">
<iframe src="https://thezevar.com/zevarinf/public/chatify" style="height:400px;width:300px;" title="Chats"></iframe>

</div>
@endsection