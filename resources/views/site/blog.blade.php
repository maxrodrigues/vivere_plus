@extends('site.page', ['active' => 'blog'])

@section('title', 'Vivere Plus - Blog')

@section('content')
    <section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url(img/page-header/page-header-services.jpg);">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10"><strong>Blog</strong></h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="#">Home</a></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">

        <div class="row">
            <div class="col">
                <div class="blog-posts">

                    <div class="masonry-loader masonry-loader-showing">
                        <div class="masonry row" data-plugin-masonry data-plugin-options="{'itemSelector': '.masonry-item'}">

                            <div class="masonry-item no-default-style col-md-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="blog-post.html">
                                            <img src="img/blog/square/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Amazing Mountain</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">Bob Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="masonry-item no-default-style col-md-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="blog-post.html">
                                            <img src="img/blog/medium/blog-2.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Creative Business</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="masonry-item no-default-style col-md-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="blog-post.html">
                                            <img src="img/blog/large/blog-3.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Unlimited Ways</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="masonry-item no-default-style col-md-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="blog-post.html">
                                            <img src="img/blog/medium/blog-4.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Developer Life</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">Jessica Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="masonry-item no-default-style col-md-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="blog-post.html">
                                            <img src="img/blog/square/blog-5.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">The Blue Sky</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="masonry-item no-default-style col-md-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="blog-post.html">
                                            <img src="img/blog/wide/blog-6.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Night Life</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="masonry-item no-default-style col-md-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="blog-post.html">
                                            <img src="img/blog/large/blog-7.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Another World Perspective</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="masonry-item no-default-style col-md-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="blog-post.html">
                                            <img src="img/blog/medium/blog-8.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">The Creative Team</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>

                            <div class="masonry-item no-default-style col-md-4">
                                <article class="post post-medium border-0 pb-0 mb-5">
                                    <div class="post-image">
                                        <a href="blog-post.html">
                                            <img src="img/blog/square/blog-9.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                        </a>
                                    </div>

                                    <div class="post-content">

                                        <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Alone on the Forest</a></h2>
                                        <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                        <div class="post-meta">
                                            <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                            <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                            <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                        </div>

                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <ul class="pagination float-right">
                                <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
