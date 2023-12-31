@extends('frontend.master')

@section('frontend_title', 'News And Updates')

@section('frontend_main_content')

    <section id="blog-page" class="bg-snow division"
        style="padding-top: 35px; padding-bottom: 70px; background-color: #f1f2f2;">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h5 style="border-bottom: 1px solid #ddd; padding-bottom: 25px; margin-top: 20px;">Latest News And
                        Updates</h5>
                </div>
            </div>

            <div class="row">
                @foreach ($results as $value)
                    <div class="col-md-6" style="margin-top: 30px">
                        <p class="p-md post-tag"> {{ date('F j, Y', strtotime($value->date)) }}
                        </p>
                        <h5>
                            <a href="{{ route('frontend.newsAndUpdatesDetails', $value->id) }}">
                                {{ $value->title }}
                            </a>
                        </h5>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
