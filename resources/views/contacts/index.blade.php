@extends('layouts.app')

@section('title', "Inquiry Index")

@section('content')
<div class="container-fluid position-relative m-0 p-0">
    <img src="images/bg_img_aboutUs_faq_inquiry.jpg" alt="background_Inquiry" class="w-100" style="height: 60px;">

    <img src="images/balloon.png" alt="balloon" class="opacity-75 position-absolute top-50 end-0 translate-middle" style="height: 60px;">
</div>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="row mb-2">
            <p class="h5 text-secondary text-center border border-3 rounded-3 shadow bg-white bg-opacity-50 mx-3 px-3 py-2" style="max-width: 160px; border: solid 3px #F7A072 !important;">{{ __('Inquiry Index') }}</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="row row-cols-1 row-cols-lg-2 row-cols-1">
            @foreach ($reports as $report)
            <div class="col mb-2">
                <div class="col text-secondary border rounded-3 bg-white bg-opacity-50 w-100 mb-2 px-5 py-3">
                    <p class="mb-1">
                        <span class="fw-semibold">Name: </span>{{ $report->name }}
                    </p>
                    <p class="mb-1">
                        <span class="fw-semibold">Registered name: </span>{{ $report->user->name }} / <span class="fw-semibold">User id: </span>{{ $report->user_id }}
                    </p>
                    <p>
                        <span class="fw-semibold">Email: </span>{{ $report->email }}
                    </p>

                    <p class="mb-1">
                        <span class="fw-semibold">Subject: </span>
                        <a href="{{ route('report.show', $report) }}" class="color4 fw-semibold">
                            {{ $report->subject}}
                        </a>
                    </p>
                    <p class="mb-1">
                        {{ $report->created_at }}
                    </p>
                    <hr class="w-100 mt-0">
                    <p>
                        <span class="fw-semibold">Details: </span>{{ $report->details }}
                    </p>
                </div>
            </div>
            @endforeach

            <div class="text-secondary mb-2">
                {{ $reports->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
