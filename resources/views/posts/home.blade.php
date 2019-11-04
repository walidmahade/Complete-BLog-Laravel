@extends('layouts.master')

@section('title')
    Home
@endsection

@section('content')

    <!-- Hero Section -->
    <div class="container space-2">
        <div class="w-md-80 w-lg-75 text-center mx-md-auto">
            <div class="mb-5">
                <h1 class="display-4 font-size-md-down-5 font-weight-semi-bold">News &amp; Articles</h1>
                <p class="lead font-weight-normal">#1 Blog on theme marketing by Front</p>
            </div>

            <!-- Form -->
            <form class="w-lg-75 mx-lg-auto">
                <div class="d-flex align-items-center">
                    <label class="sr-only" for="signupSrEmail">Search Front blog</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" id="signupSrEmail" placeholder="Search Front blog" aria-label="Search Front blog">
                    </div>
                    <button type="submit" class="btn btn-primary text-nowrap ml-3">
                        <span class="fas fa-search font-size-1 mr-2"></span> Search
                    </button>
                </div>
            </form>
            <!-- End Form -->
        </div>
    </div>
    <!-- End Hero Section -->

    <!-- Blog Card Section -->
    <div class="container space-2 space-bottom-lg-3">
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-5">
                <!-- Blog Card -->
                <article class="card shadow h-100">
                    <img class="card-img-top" src="{{ asset('images/img18.jpg') }}" alt="Image Description">
                    <div class="card-body p-5">
                        <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">Product</a>
                        <h2 class="h5 font-weight-medium">
                            <a href="https://htmlstream.com/preview/front-v2.9.2/html/blog/single-article.html">InVision design forward fund</a>
                        </h2>
                        <p>Clark Valberg is the founder and CEO of InVision.</p>
                    </div>

                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nataly Gaga">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img1.jpg') }}" alt="Image Description">
                            </div>
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Emily Milda">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img2.jpg') }}" alt="Image Description">
                            </div>
                            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                July 15
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Blog Card -->
            </div>

            <div class="col-md-6 col-lg-4 mb-5">
                <!-- Blog Card -->
                <article class="card shadow h-100">
                    <img class="card-img-top" src="{{ asset('images/img13.jpg') }}" alt="Image Description">
                    <div class="card-body p-5">
                        <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">Business</a>
                        <h3 class="h5 font-weight-medium">
                            <a href="https://htmlstream.com/preview/front-v2.9.2/html/blog/single-article.html">What CFR (Conversations, Feedback, Recognition) really is about</a>
                        </h3>
                        <p>For a lot of people these days, Measure What Matters.</p>
                    </div>

                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aaron Larsson">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img3.jpg') }}" alt="Image Description">
                            </div>
                            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                July 15
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Blog Card -->
            </div>

            <div class="col-md-6 col-lg-4 mb-5">
                <!-- Blog Card -->
                <article class="card shadow h-100">
                    <img class="card-img-top" src="{{ asset('images/img19.jpg') }}" alt="Image Description">
                    <div class="card-body p-5">
                        <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">Business</a>
                        <h3 class="h5 font-weight-medium">
                            <a href="https://htmlstream.com/preview/front-v2.9.2/html/blog/single-article.html">Enjoy $1,000 worth of perks with Front for Business</a>
                        </h3>
                        <p>There are many reasons people choose to join Front for Business.</p>
                    </div>

                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hanna Wolfe">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img11.jpg') }}" alt="Image Description">
                            </div>
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="" data-original-title="John O&#39;nolan">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img12.jpg') }}" alt="Image Description">
                            </div>
                            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                July 15
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Blog Card -->
            </div>

            <div class="col-md-6 mb-5">
                <!-- Blog Card -->
                <article class="card shadow h-100">
                    <img class="card-img-top" src="{{ asset('images/img24.jpg') }}" alt="Image Description">
                    <div class="card-body p-5">
                        <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">Business</a>
                        <h3 class="h5 font-weight-medium">
                            <a href="https://htmlstream.com/preview/front-v2.9.2/html/blog/single-article.html">Front accounts - let's work together</a>
                        </h3>
                        <p>Are you an accountant? Are you a company formation advisor? Would you like to partner with one of the world's most popular and fastest-growing Fintech startups?</p>
                    </div>

                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hanna Wolfe">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img11.jpg') }}" alt="Image Description">
                            </div>
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="" data-original-title="John O&#39;nolan">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img12.jpg') }}" alt="Image Description">
                            </div>
                            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                July 15
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Blog Card -->
            </div>

            <div class="col-md-6 mb-5">
                <!-- Blog Card -->
                <article class="card shadow h-100">
                    <img class="card-img-top" src="{{ asset('images/img25.jpg') }}" alt="Image Description">
                    <div class="card-body p-5">
                        <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">Community</a>
                        <h3 class="h5 font-weight-medium">
                            <a href="https://htmlstream.com/preview/front-v2.9.2/html/blog/single-article.html">Do millennials care about saving?</a>
                        </h3>
                        <p>Over the last few years, numerous studies have appeared to confirm a troubling pattern – millennials don't save, they don't care about their financial futures.</p>
                    </div>

                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Nataly Gaga">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img1.jpg') }}" alt="Image Description">
                            </div>
                            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                July 15
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Blog Card -->
            </div>

            <div class="col-md-6 col-lg-4 mb-5">
                <!-- Blog Card -->
                <article class="card shadow h-100">
                    <img class="card-img-top" src="{{ asset('images/img17.jpg') }}" alt="Image Description">
                    <div class="card-body p-5">
                        <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">Community</a>
                        <h3 class="h5 font-weight-medium">
                            <a href="https://htmlstream.com/preview/front-v2.9.2/html/blog/single-article.html">Let's revolutionise global payments. Together</a>
                        </h3>
                        <p>Front is changing the way money moves around the world.</p>
                    </div>

                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Aaron Larsson">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img3.jpg') }}" alt="Image Description">
                            </div>
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="" data-original-title="Hanna Wolfe">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img11.jpg') }}" alt="Image Description">
                            </div>
                            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                July 15
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Blog Card -->
            </div>

            <div class="col-md-6 col-lg-4 mb-5">
                <!-- Blog Card -->
                <article class="card shadow h-100">
                    <img class="card-img-top" src="{{ asset('images/img26.jpg') }}" alt="Image Description">
                    <div class="card-body p-5">
                        <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">Front insider</a>
                        <h3 class="h5 font-weight-medium">
                            <a href="https://htmlstream.com/preview/front-v2.9.2/html/blog/single-article.html">Should Product Owners think like entrepreneurs?</a>
                        </h3>
                        <p>Front is a financial technology company. We build products. We do it fast and we do it well..</p>
                    </div>

                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Emily Milda">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img2.jpg') }}" alt="Image Description">
                            </div>
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle ml-n2" data-toggle="tooltip" data-placement="top" title="" data-original-title="John O&#39;nolan">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img12.jpg') }}" alt="Image Description">
                            </div>
                            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                July 15
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Blog Card -->
            </div>

            <div class="col-md-6 col-lg-4 mb-5">
                <!-- Blog Card -->
                <article class="card shadow h-100">
                    <img class="card-img-top" src="{{ asset('images/img21.jpg') }}" alt="Image Description">
                    <div class="card-body p-5">
                        <a class="d-inline-block text-muted font-weight-medium text-uppercase small mb-2" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">Front academy</a>
                        <h3 class="h5 font-weight-medium">
                            <a href="https://htmlstream.com/preview/front-v2.9.2/html/blog/single-article.html">What is KYC and why do we need it</a>
                        </h3>
                        <p>You've read about our app, it came up on your news feed and your mate sent you an invite to sign up.</p>
                    </div>

                    <div class="card-footer border-0 pt-0 pb-5 px-0 mx-5">
                        <div class="media align-items-center">
                            <div class="u-sm-avatar u-sm-avatar--bordered rounded-circle" data-toggle="tooltip" data-placement="top" title="" data-original-title="Emily Milda">
                                <img class="img-fluid rounded-circle" src="{{ asset('images/img2.jpg') }}" alt="Image Description">
                            </div>
                            <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                July 15
                            </div>
                        </div>
                    </div>
                </article>
                <!-- End Blog Card -->
            </div>
        </div>

        <div class="space-bottom-2"></div>

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination mb-0">
                <li class="page-item mr-auto">
                    <a class="page-link" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="d-none d-sm-inline-block ml-1">Prev</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">1</a></li>
                <li class="page-item"><a class="page-link" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">2</a></li>
                <li class="page-item disabled"><a class="page-link" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">...</a></li>
                <li class="page-item"><a class="page-link" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#">5</a></li>
                <li class="page-item ml-auto">
                    <a class="page-link" href="https://htmlstream.com/preview/front-v2.9.2/html/blog/card-style.html#" aria-label="Next">
                        <span class="d-none d-sm-inline-block mr-1">Next</span>
                        <span aria-hidden="true">»</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Pagination -->
    </div>
    <!-- End Blog Card Section -->

    <!-- Subscribe Section -->
    <div class="space-1">
        <div class="bg-img-hero" style="background-image: url({{ asset('images/bg5.png') }});">
            <div class="container space-2 space-bottom-lg-3">
                <!-- Title -->
                <div class="w-md-60 text-center mx-auto mb-7">
                    <h2 class="font-weight-semi-bold">Stay in the know</h2>
                    <p>Get special offers on the latest developments from Front.</p>
                </div>
                <!-- End Title -->

                <!-- Form -->
                <form class="js-validate w-md-75 w-lg-50 mx-md-auto" novalidate="novalidate">
                    <div class="js-form-message">
                        <div class="d-flex align-items-center">
                            <label class="sr-only" for="subscribeSr">Subscribe</label>
                            <div class="input-group">
                                <input type="email" class="form-control" name="email" id="subscribeSr" placeholder="Your email" aria-label="Your email" required="" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                            </div>
                            <button type="submit" class="btn btn-primary btn-wide transition-3d-hover ml-3">Get Started</button>
                        </div>
                    </div>
                </form>
                <!-- End Form -->
            </div>
        </div>
    </div>
    <!-- End Subscribe Section -->

@endsection
