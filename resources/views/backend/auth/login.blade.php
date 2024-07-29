@extends('layouts.app')

@section('content')
<section class="contact-section" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6 order-2  order-md-1">
                <div class="contact-form-box wow fadeInLeft" data-wow-delay=".3s" style="visibility: hidden; animation-delay: 0.3s; animation-name: none;">
                    <div class="section-header">
                        <h2 class="section-title">Admin Login</h2>
                    </div>

                    <div class="tj-contact-form">
                        <form  action="{{url('login')}}" method="POST">
                            @csrf
                            <div class="row gx-3">

                                <div class="col-sm-12">
                                    <div class="form_group">
                                        <input type="email" name="email" id="conEmail" placeholder="Email" autocomplete="off">
                                    </div>
                                    @error('email')
                                      <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <div class="form_group">
                                        <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">
                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                  @enderror
                                </div>
                                <div class="col-12">
                                    <div class="form_btn">
                                        <button type="submit" class="btn tj-btn-primary"> Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection