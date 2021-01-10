@extends('admin.layout.layout')
@section('content')
<!-- blog content part start -->
<section id="blogcontent">


                    <div class="blog__postcomment mb-50">
                        <h2>Contact Us</h2>
                        @if (Session::has('message_sent'))
                        <div class="alert alert-success" roll="alert">
                            {{ Session::get('message_sent') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data"
                            class="comment-form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group comment___here col-md-6 col-lg-6 col-xl-6 mb-10">
                                    <input type="text" class="input__data" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group comment__here col-md-6 col-lg-6 col-xl-6 mb-10">
                                    <input type="email" class="input__data" name="email" placeholder="Email" required>
                                </div>

                                <div class="form-group comment__here col-md-12 col-sm-12 mb-10">
                                    <input type="text" id="website" class="input__data" name="website"
                                        placeholder="Website">
                                </div>
                                <div class="input-wrap comment__here col-md-12 mb-10">
                                    <textarea class="comment__box" name="message" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <input type="submit" class="sub__btn" name="send" value="Send">
                        </form>
                    </div>
            
</section>

<!-- blog content part start -->
@endsection