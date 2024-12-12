@extends('layouts.app')
@section('content')
    <div class="container mt-3">
        <div class="container-fluid">
            <div class="coming-soon row">
                <div class="col-md-6">
                    <img alt="" height="300px" src="assets/images/working-desk.svg">
                </div>
                <div class=" col-md-6">
                    <div class="coming-soon-area h-100 d-flex flex-column justify-content-center">
                        <h1>খুব দ্রুতই আসবে ইনশাল্লাহ</h1>
                        <h6 class="lh-lg">
                            প্রিয় ব্যবহারকারী,

                            আমাদের ওয়েব পেজের কাজ চলমান রয়েছে। আমরা আপনাদের জন্য আরও উন্নত ও কার্যকর একটি প্ল্যাটফর্ম তৈরি করতে কঠোর পরিশ্রম করছি। ইনশাআল্লাহ, খুব শীঘ্রই আমরা এটি সবার জন্য উন্মুক্ত করব।

                            আপনাদের ধৈর্যের জন্য ধন্যবাদ। নতুন আপডেট পেতে আমাদের সাথে থাকুন!

                        </h6>

                        <div>
                            <a href="{{route('home')}}" class="btn btn-brand">কোর্স পেজ এ যেতে ক্লিক করুন</a>
                        </div>
                    </div>
                    <!--<div>
                        <h6>আপনারা আমাদের সাপোর্ট এবং শুভকামনা জানালে আমরা আরও অনুপ্রাণিত হব।</h6>
                        <h6>যোগাযোগে থাকুন:</h6>
                        <h6>📧 ইমেইল: support@nexerb.com</h6>
                        <h6>📞 ফোন: +৮৮০-01732691729</h6>
                        <h6>শুভেচ্ছান্তে,</h6>
                        <h6>নেক্সার্ব একাডেমি</h6>
                    </div>-->
                </div>
            </div>
        </div>
    </div>

@endsection
