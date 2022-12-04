     @extends('website/layout')

    @section('content')

                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
     
      
          
                            
                            <div class="sub-title">
                           		{{-- <h2>My Blog</h2> --}}
                               <form action="{{route('websitesearch')}}" class="website-search search-form form-inline" method="get">
                                <input name="search" type="search" class="form-control" placeholder="Search" />
                                <button type="submit">
                                  <i class="fa fa-search"></i>
                                </span>
                              </form>
                             </div>
                            
                          
                            <div class="col-md-12 content-page">
                              @forelse ($posts as $post)
                      
                                <!-- Blog Post Start -->
                                <div class="col-md-12 blog-post">
                                  <div class="post-image">
                                  <img class="dash-post-img" src="{{asset('uploads/'.$post->image)}}" alt="">
                                </div> 
                                    <div class="post-title">
                                      <a href="single.html"><h1>{{ $post->title }}</h1></a>
                                    </div>  
                                    <div class="post-info">
                                    	<span><i class="fa fa-calendar"></i><span>{{ $post->created_at}}</span> </span>|<span class="post-info-writter"><i class="fa fa-user-o"></i> <span>{{$post->user->name}}</span></span>
                                      @if($post->category)
                                      <a href="{{ route('showcategory',$post->category->id) }}"><i class="fa fa-book"></i>{{ $post->category->category}}</a>   
                                      @endif 
                                    </div>  
                                    <p> {!! substr($post->details, 0,  300) !!} ...</p>
                                    <a href="{{ route('showpost',$post->id) }}" class="button button-style button-anim"><span>Read More</span></a>
                                </div>
                                <!-- Blog Post End -->
                                @empty
                                  <p>No Posts To Show</p>
                                @endforelse
                                
                                
                                
                                


                              
                                
                                
                                <div class="col-md-12 text-center">
                                 <a href="javascript:void(0)" id="load-more-post" class="load-more-button">Load</a>
                                 <div id="post-end-message"></div>
                                </div>
                                
                             </div>
                              
                         </div>
                         
                         @if (session()->has('message'))
                         <div class="alert alert-warning alert-dismissible fade show" role="alert">
                             <strong>Message :</strong> {{session()->get('message')}}.
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                             </button>
                           </div>
                         @endif
                        
                        <!-- Subscribe Form Start -->
                        <div class="col-md-8 col-md-offset-2">
              <form method="post" action="{{route('storemailinglist')}}">
								@csrf
						  <div class="subscribe-form margin-top-20">
							 <input id="mc-email" type="email" placeholder="Email Address" class="text-input" name="email">
							  <button class="submit-btn" type="submit">Submit</button>
								</div>
                                <p>Subscribe to my weekly newsletter</p>
								<label for="mc-email" class="mc-label"></label>
							  </form>
  
                             
                           </div>
                           <!-- Subscribe Form End -->
                           
                         

   @endsection    
    