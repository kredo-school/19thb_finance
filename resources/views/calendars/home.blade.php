@extends('layouts.app')

@section('content')
<main class="row container mx-auto">
    <aside class="col-auto">
        @include('components.sidebar')
    </aside>
    
    <article class="col-9 mt-4">

        <div class="row mx-auto">

            <!-- Calendar -->
            <div class="col-8 Calendar text-center">
                {{-- <h2>May</h2> --}}
                <a class="btn float-left" href="{{ url('/home?date=' . $calendar->getPreviousMonth()) }}">
                    <svg width="27" height="33" viewBox="0 0 27 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 16.5L27 0.478531L27 32.5215L0 16.5Z" fill="#D9D9D9"/>
                    </svg>
                </a>
                
                <span class="h2 fw-bold align-middle mx-5 mt-2">{{ $calendar->getTitle() }}</span>
                
                <a class="btn float-right" href="{{ url('/home?date=' . $calendar->getNextMonth()) }}">
                    <svg width="27" height="33" viewBox="0 0 27 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M27 16.5L0 0.478531L0 32.5215L27 16.5Z" fill="#D9D9D9"/>
                    </svg>                            
                </a>
                <div class="card shadow">
                    <div class="card-body">
                            {!! $calendar->render() !!}
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="card bg-white shadow border-0 rounded-4 mt-3 w-auto">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless text-center text-nowrap mb-0">
                                    <thead>
                                        <th class="text-secondary bg-white p-0">Income</th>
                                        <th class="bg-white"></th>
                                        <th class="text-secondary bg-white p-0">Expense</th>
                                        <th class="bg-white"></th>
                                        <th class="text-secondary bg-white p-0">Balance</th>
                                    </thead>
                                    <tbody>
                                        <td class="h4 bg-white p-2" style="color: #227C9D;">¥{{ number_format(floor($totalIncomeAmount)) }}</td>
                                        <td class="h4 bg-white p-2">-</td>
                                        <td class="h4 bg-white p-2" style="color: #FE6D73;">¥{{ number_format(floor($totalExpenseAmount)) }}</td>
                                        <td class="h4 bg-white p-2">=</td>
                                        <td class="h4 bg-white p-2" style="color: {{ $totalIncomeAmount - $totalExpenseAmount > 0 ? '#227C9D' : '#FE6D73' }};">
                                            @if ($totalIncomeAmount - $totalExpenseAmount < 0)
                                                - ¥{{ number_format(floor(abs($totalIncomeAmount - $totalExpenseAmount))) }}
                                            @else
                                                ¥{{ number_format(floor($totalIncomeAmount - $totalExpenseAmount)) }}
                                            @endif
                                        </td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Detail of Calendar -->
            <div class="col-4 detail_lalendar mt-5">
                <div class="overflow-y-scroll shadow" style="max-height: 630px;">
                    @foreach ($groupedTransactions as $date => $dailyTransactions)
                        <div class="card rounded-0 border-0">
                            <div class="card-header bg-color3 rounded-0 border-0 py-1">
                                {{ Carbon\Carbon::parse($date)->format('jS (D)') }}
                            </div>
                            <div class="card-body">
                                @foreach ($dailyTransactions as $transaction)
                                    <div class="card-text d-flex border-bottom p-2">
                                        <!-- Icon -->
                                        <div class="icon-sm me-2">
                                            <img src="{{ asset('images/category-icon/' . $transaction->childCategory->parentCategory->icon_path . '.svg') }}" class="object-contain filter-{{ $transaction->childCategory->parentCategory->color_hex }}" alt="{{ $transaction->childCategory->parentCategory->icon_path }}">
                                        </div>
                                        <!-- Category -->
                                        <p class="ms-2 mb-0">{{ $transaction->childCategory->name }}</p>
                                        <!-- Cost -->
                                        <p class="{{ $transaction->transaction_type == 'expense' ? 'color2' : 'color1' }} ms-auto mb-0">
                                            {{ $transaction->transaction_type == 'expense' ? '-' : '+' }}{{ number_format(floor($transaction->amount)) }} yen
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach                    
                </div>
            </div>
            
        </div>

        <div class="row mx-auto my-4">

            <!-- Wish -->
            <div class="col show text-center" style="height: 100px;">
                <a href="{{ route('calendars.wishlists.new') }}" class="btn btn-main btn-lg px-5 d-flex justify-content-center align-items-center">
                    
                    <!-- icon -->
                    <div class="icon-in-btn me-2">
                        <img src="{{ asset('images/icon_plus.svg') }}" alt="">
                    </div>

                    <!-- title -->
                    <span class="pt-1">Set my wish</span>
                    
                </a>
                <p>you can create your own wish.</p>
            </div>

            <!-- Lists -->
            <div class="col list">
                @foreach ($user->itemLists as $itemList)
                    <div class="accordion shadow-sm rounded rounded-4" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $itemList->id }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $itemList->id }}" aria-expanded="true" aria-controls="collapse{{ $itemList->id }}">
                                {{ $itemList->name }}
                            </button>
                            </h2>
                            <div id="collapse{{ $itemList->id }}" class="accordion-collapse collapse show" aria-labelledby="heading{{ $itemList->id }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <div class="row">
                                        <div class="col">
                                            @forelse ($itemList->items as $item)
                                                @if ( $item->is_checked == 0 )
                                                    <div class="d-flex justify-content-between">
                                                        <form id="todo-form" action="#" method="post">
                                                            @csrf
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="item{{ $item->id }}" data-item-id="{{ $item->id }}" {{ $item->is_checked ? 'checked' : '' }}>
                                                                <label class="form-check-label" for="item{{ $item->id }}">
                                                                    {{ $item->name }}
                                                                </label>
                                                            </div>
                                                        </form>
                                                        <form action="{{ route('item.destroy', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn p-0">
                                                                <i class="fa-solid fa-trash-can text-secondary"></i> 
                                                            </button>
                                                        </form>
                                                    </div>
                                                @endif
                                            @empty
                                                
                                            @endforelse
                                        </div>
                                        <div class="col">
                                            <div class="card border-0 p-2 bg-color-Background">
                                                <p class="text-center mb-2">New Item</p>
                                                <form action="{{ route('item.store') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="item_list_id" value="{{ $itemList->id }}">
                                                    <input type="text" class="rounded-pill border border-1 px-2 py-1 mb-2 w-100" name="name" placeholder="Name">
                                                    @error('name')
                                                        <p class="text-danger small m-0">{{$message}}</p>
                                                    @enderror
                                                    <button type="submit" class="btn btn-sm w-100 btn-main d-flex justify-content-center align-items-center p-0">
                                                        <div class="icon-in-btn d-flex align-items-center">
                                                            <img src="{{ asset('images/icon_plus.svg') }}" alt="" width="20px" height="20px">
                                                        </div>
                                                        Add
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    
                                    <div class="row row-cols-auto">
                                        @forelse ($itemList->items as $item)
                                            @if ( $item->is_checked == 1 )
                                                <div class="col me-3">
                                                    <div class="d-flex">
                                                        <li class="text-secondary text-decoration-line-through mb-1 me-4">{{ $item->name }}</li>
                                                        <form action="{{ route('item.destroy', $item->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn p-0">
                                                                <i class="fa-solid fa-trash-can text-secondary"></i> 
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endif
                                        @empty
                                            
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div class="accordion shadow-sm mt-2" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                            Memo List
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                
                                <div class="row">
                                    <div class="col">
                                        <form id="todo-form" action="#" method="post">
                                            <input class="form-control border-0" type="text" value="memo">
                                        </form>
                                    </div>
                                    <div class="col">
                                        <div class="card border-0 p-2 bg-color-Background">
                                            <p class="text-center mb-2">New Item</p>
                                            <input type="text" class="rounded-pill border border-1 px-2 py-1 mb-2" placeholder="Name">
                                            <button class="btn btn-sm btn-main d-flex justify-content-center align-items-center p-0">
                                                <div class="icon-in-btn d-flex align-items-center">
                                                    <img src="{{ asset('images/icon_plus.svg') }}" alt="" width="20px" height="20px">
                                                </div>
                                                 Add
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>

        </div>
        
    </article>
</main>

@endsection
