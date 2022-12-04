@extends('website/layout')

@section('content')
<!-- About Me (Left Sidebar) Start -->
                  <!-- Blog Post (Right Sidebar) Start -->
                  <div class="col-md-9">
                     <div class="col-md-12 page-body">
                         <div class="row">
                             
                             
                             <div class="sub-title">
                                    <a href="/" title="Go to Home Page"><h2>Back Home</h2></a>
                                 <a href="#comment" class="smoth-scroll"><i class="icon-bubbles"></i></a>
                              </div>
                             
                             
                             <div class="col-md-12 content-page">
                               <div class="col-md-12 blog-post">
                                 
                                 
                                 <!-- Post Headline Start -->
                                 <div class="post-title">
                                     <h1>{{$post->title}}</h1> 
                                    </div>
                                    <!-- Post Headline End -->
                                     
                                     
                                 <!-- Post Detail Start -->
                                 <div class="post-info">
                                     <span>{{ $post->created_at}}  / by <a href="#" target="_blank">{{$post->user->name}}</a></span>
                                    </div>
                                    <!-- Post Detail End -->
                                     
                                     
                                     <p>{!! $post->details !!}</p>
                                     
                                 
                                 <!-- Post Image Start -->
                                 <div class="post-image margin-top-40 margin-bottom-40">
                                    <img src="{{ $post->image}} " alt="">
                                   </div>
                                   <!-- Post Image End -->
                                   
                                   {{-- {{$related}} --}}
                                   <!-- Post Image Gallery Start -->
                                   <div class="row margin-top-40 margin-bottom-40">
                                    @forelse($related as $repost)
                   
                                     <div class="col-md-4 col-sm-6 col-xs-12">
                                       <a href="images/blog/7.jpg" title="image Title">
                                       <img src="{{asset('uploads/'.$repost->image)}}" class="img-responsive" alt="">
                                      </a>
                                      <p>{{asset($repost->title)}}</p>

                                     </div>
                                     @empty
                                     <p>No Related Posts To Show</p>
                                     @endforelse

                                  </div>
                                  <!-- Post Image Gallery End -->
                                 </div>    
                              </div>
                               
                          </div>
                          
                           <div id="fbcomment">
                              <div class="header_comment">
                                 <div class="row">
                                    <div class="col-md-6 text-left">
                                      <span class="count_comment">Comments ({{count($comments)}})</span>
                                    </div>
                                    <div class="col-md-6 text-right">
                                      <span class="sort_title">Sort by</span>
                                      <select class="sort_by">
                                       <option>Top</option>
                                       <option>Newest</option>
                                       <option>Oldest</option>
                                      </select>
                                    </div>
                                 </div>
                              </div>
                     
                              <div class="body_comment">
                                 <div class="row">
                                    <div class="avatar_comment col-md-1">
                                       <img src="{{asset('assets\images\blog\avatar.jpg')}}" alt="avatar" />
                                    </div>
                                    <div class="col-md-11">
                                   

                                    <form action="{{route("comment",$post->id)}}" method="post">
                                       @csrf
                                    <input type="text" name="name" >
                                    <div class="box_comment">
                                      <textarea class="commentar" placeholder="Add a comment..." name="comment"></textarea>
                                      <div class="box_post">
                                       <div class="pull-left">
                                         <input type="checkbox" id="post_fb"/>
                                         <label for="post_fb">Also post on Facebook</label>
                                       </div>
                                       <div class="pull-right">
                                         <span>
                                          <img src="{{asset('assets\images\blog\avatar.jpg')}}" alt="avatar" />
                                          <i class="fa fa-caret-down"></i>
                                         </span>
                                         <button type="submit">Post</button>
                                       </div>
                                      </div>
                                    </div>
                                    </div>
                                 </form>
                                 </div>
                                 <div class="row">
                                    <ul id="list_comment" class="col-md-12">
                                       
                                       <!-- Start List Comment 2 -->
                                       @forelse($comments as $comment)
                                       <li class="box_result row">
                                          <div class="avatar_comment col-md-1">
                                             <img src="{{asset('assets\images\blog\avatar.jpg')}}" alt="avatar" />
                                          </div>
                                          <div class="result_comment col-md-11">
                                             <h4>{{$comment->name}}</h4>
                                             <p>{{$comment->comment}}</p>
                                             <div class="tools_comment">
                                                {{-- <a class="like" href="#">Like</a>
                                                <span aria-hidden="true"> · </span>
                                                <a class="replay" href="#">Reply</a>
                                                <span aria-hidden="true"> · </span>
                                                <i class="fa fa-thumbs-o-up"></i> <span class="count">1</span>  --}}
                                                <span aria-hidden="true"> · </span>
                                                <span><i class="fa fa-calendar"></i>{{$comment->created_at}}</span>
                                             </div>
                                             <ul class="child_replay"></ul>
                                          </div>
                                       </li>
                                       @empty
                                       <p>No Comments To Show</p>
                                       @endforelse
                                    </ul>
                                 </div>
                              </div>
                           </div>

                         
                         <!-- Subscribe Form Start -->
                         <div class="col-md-8 col-md-offset-2">
                            <form id="mc-form" method="post" action="">
                                 
                           <div class="subscribe-form margin-top-20">
                              <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
                               <button class="submit-btn" type="submit">Submit</button>
                                 </div>
                                 <p>Subscribe to my weekly newsletter</p>
                                 <label for="mc-email" class="mc-label"></label>
                               </form>
                              
                            </div>
                            <!-- Subscribe Form End -->
                          </div>
                   </div>
                   <!-- Blog Post (Right Sidebar) End -->
                   @endsection