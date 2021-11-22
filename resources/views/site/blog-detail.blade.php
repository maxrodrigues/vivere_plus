@extends('site.page', ['active' => 'blog'])

@section('title', 'Vivere Plus - Blog')

@section('content')
    <section
        class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-12 align-self-center p-static order-2 text-center">
                    <h1 class="text-10">
                        <strong>
                            {{ $post->title }}
                        </strong>
                    </h1>
                </div>
                <div class="col-md-12 align-self-center order-1">
                    <ul class="breadcrumb breadcrumb-light d-block text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="container py-4">
        <div class="row">
            <div class="col">
                <div class="blog-posts single-post">
                    <article class="post post-large blog-single-post border-0 m-0 p-0">
                        {{-- <div class="post-image ml-0">
                            <a href="blog-post.html">
                                <img src="img/blog/wide/blog-11.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div> --}}
                        <div class="post-date ml-0">
                            <span class="day">{{ date('d', $post->created_at->timestamp) }}</span>
                            <span class="month">{{ date('M', $post->created_at->timestamp) }}</span>
                        </div>

                        <div class="post-content ml-0">
                            <h2 class="font-weight-bold">
                                <a href="blog-post.html">
                                    {{ $post->title }}
                                </a>
                            </h2>

                            <div class="post-meta">
                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a>
                                </span>
                                <span>
                                    <i class="far fa-comments"></i>
                                    <a href="#">
                                        @if($comments->isEmpty())
                                            Seja o primeiro a comentar
                                        @else
                                            {{ count($comments) }} Comentários
                                        @endif
                                    </a>
                                </span>
                            </div>

                            {!! $post->text !!}

                            @if($comments->isNotEmpty())
                            <div id="comments" class="post-block mt-5 post-comments">
                                <h4 class="mb-3">Comentários ({{ count($comments) }})</h4>
                                <ul class="comments">
                                    @foreach ($comments as $comment)
                                        <li class="p-0">
                                            <div class="comment">
                                                <div class="comment-block">
                                                    <span class="comment-by">
                                                        <strong>{{ $comment->name }}</strong>
                                                        {{-- <span class="float-right">
                                                            <span>
                                                                <a href="#">
                                                                    <i class="fas fa-reply"></i>
                                                                    Reply
                                                                </a>
                                                            </span>
                                                        </span> --}}
                                                    </span>
                                                    <p>{{ $comment->message }}</p>
                                                    <span class="date float-right">{{ date('j M Y - G:i', $comment->created_at->timestamp) }}</span>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <div class="post-block mt-5 post-leave-comment">
                                <h4 class="mb-3">Deixe seu comentário</h4>
                                <form class="contact-form p-4 rounded bg-color-grey" action="{{ route('blog.comment', ['id' => $post->id]) }}" method="POST">
                                    @csrf
                                    @method('post')
                                    <div class="p-2">
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <label class="required font-weight-bold text-dark">Nome</label>
                                                <input type="text" value="" data-msg-required="Por favor preencha o seu nome" maxlength="100" class="form-control" name="name" required>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label class="required font-weight-bold text-dark">Email</label>
                                                <input type="email" value="" data-msg-required="Por favor preencha o seu email" data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label class="required font-weight-bold text-dark">Comentário</label>
                                                <textarea maxlength="5000" data-msg-required="Por favor digite sua mensagem" rows="8" class="form-control" name="message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col mb-0">
                                                <input type="submit" value="Post Comment"
                                                    class="btn btn-primary btn-modern" data-loading-text="Loading...">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
@endsection
