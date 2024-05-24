<div class="d-flex flex-column flex-shrink-0 pt-5 pe-3" style="width: auto;">
    <ul class="d-flex flex-column mb-auto text-start color-Letter" id="sidebar">

        <!-- Calendar -->
        <li class="d-flex">
            <div class="side-icon me-2">
                <img src="{{ asset('images/nav-calendar.svg') }}" alt="">
            </div>
            <div class="outer" id="calendar">
                <div class="inner">
                    <a href="{{ route('calendars.home') }}" class="py-1 active text-decoration-none color-Letter">
                        <p class="py-1 px-3 m-0 fw-bold">Calendar</p>
                    </a>
                </div>
            </div>
        </li>

        <!-- Analisys -->
        <li class="list-unstyled mt-4">
            <div class="d-flex">
                <div class="side-icon me-2">
                    <img src="{{ asset('images/nav-analysis.svg') }}" alt="">
                </div>
                <div class="outer">
                    <div class="inner">
                        <a href="{{ route('analysis.summary') }}" class="py-1 text-decoration-none color-Letter">
                            <p class="py-1 px-3 m-0 fw-bold">Analisys</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start pb-3">
                <div class="border-color-Letter py-3 mt-1" style="width: 16px;"></div>
                <ul class="detail-link ps-2 mt-2">
                    <li class="nav-item">
                        <div class="outer" id="analysisSummary">
                            <div class="inner">
                                <a href="{{ route('analysis.summary') }}" class="text-decoration-none">
                                    <p class="py-1 px-2 m-0 mx-auto fw-medium color-Letter">Summary</p>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="outer" id="categoryAnalysis">
                            <div class="inner">
                                <a href="{{ route('analysis.category') }}" class="text-decoration-none">
                                    <p class="py-1 px-2 m-0 fw-medium color-Letter">Category Analysis</p>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="outer" id="cashflowAnalysis">
                            <div class="inner">
                                <a href="{{ route('analysis.cashflow') }}" class="text-decoration-none">
                                    <p class="py-1 px-2 m-0 fw-medium color-Letter">Cashflow Analysis</p>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="outer" id="peopleAnalysis">
                            <div class="inner">
                                <a href="{{ route('analysis.people') }}" class="text-decoration-none">
                                    <p class="py-1 px-2 m-0 fw-medium color-Letter">People Analysis</p>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Entry -->
        <li class="d-flex mt-4">
            <div class="side-icon me-2">
                <img src="{{ asset('images/nav-pen.svg') }}" alt="">
            </div>
            <div class="outer" id="entry">
                <div class="inner">
                    <a href="{{ route('calendars.transactions.new') }}" class="py-1 border-bottom text-decoration-none color-Letter">
                        <p class="py-1 px-3 m-0 fw-bold">Entry</p>
                    </a>
                </div>
            </div>
        </li>
        
        <!-- Profile -->
        <li class="d-flex mt-4">
            <div class="side-icon me-2">
                <img src="{{ asset('images/nav-profile.svg') }}" alt="">
            </div>
            <div class="outer" id="side_profile">
                <div class="inner">
                    <a href="{{ route('profile.show') }}" class="py-1 border-bottom text-decoration-none color-Letter">
                        <p class="py-1 px-3 m-0 fw-bold fw-bold">Profile</p>
                    </a>
                </div>
            </div>
        </li>

        <!-- Setting -->
        <li class="list-unstyled mt-4">
            <div class="d-flex">
                <div class="side-icon me-2">
                    <img src="{{ asset('images/nav-setting.svg') }}" alt="">
                </div>
                <div class="outer">
                    <div class="inner">
                        <a href="#" class="py-1 border-bottom text-decoration-none color-Letter">
                            <p class="py-1 px-3 m-0 fw-bold">Setting</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start pb-3">
                <div class="border-color-Letter py-3 mt-1" style="width: 16px;"></div>
                <ul class="detail-link ps-2 my-2">
                    <li class="nav-item fw-medium">
                        <div class="outer" id="editCategory">
                            <div class="inner">
                                <a href="{{ route('category.show') }}" class="text-decoration-none">
                                    <p class="py-1 px-2 m-0 fw-medium color-Letter">Edit Category</p>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mt-1 fw-medium">
                        <div class="outer">
                            <div class="inner">
                                <a href="" class="text-decoration-none">
                                    <p class="py-1 px-2 m-0 fw-medium color-Letter">Edit Profile</p>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mt-1 fw-medium">
                        <div class="outer" id="editPeople">
                            <div class="inner">
                                <a href="{{ route('people.show') }}" class="text-decoration-none">
                                    <p class="py-1 px-2 m-0 fw-medium color-Letter">Edit People</p>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
  </div>