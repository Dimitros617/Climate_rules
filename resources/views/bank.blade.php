@section('title','Climate rules')
@section('title_name', $my_nation->name)

@section('css', URL::asset('css/admin-setting.css'))

<script src="/js/main.js"></script>
<script src="/js/nations.js"></script>
<script src="/js/game.js"></script>
<script src="/js/bank.js"></script>


<x-app-layout>
    <x-slot name="header">

    </x-slot>

    {{--Context menu--}}

    <div hidden="" id="lobby-id" lobbyId="{{$lobby->id}}"></div>

    @include('lobby-admin-panel')




    <div class="w-100 w-md-90 ms-auto me-auto d-block">

        <div class="d-flex flex-wrap justify-content-center">
            <div class="w-100 w-xl-75 w-sm-90  p-4 mb-4 shadow-md rounded-3 bg-white d-flex flex-wrap">

                <div class="w-100 w-md-50 d-grid">
                    <div class="fw-bold fs-2 mb-2 text-center text-md-start" style="    border-bottom: 2px solid black;">
                            <span class="pb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bank2 mb-1" viewBox="0 0 16 16">
                                  <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                                </svg>
                            </span>
                            {{ __('summarize')}}
                    </div>

                    <div class="d-flex flex-wrap justify-content-between">
                        <span class="fs-4 pt-1">
                            {{ __('balance')}}</span>
                        <span>
                            <span class="fs-3 fw-bold">{{$my_nation->money}}</span>
                            <img style="width: 1.3rem; margin-top: -0.5rem" src="{{URL::asset('Img/CR-coin.svg')}}">
                        </span>

                    </div>


                    <div class="d-flex flex-wrap justify-content-between">
                        <span class="fs-5 pt-1">{{ __('loans_to_others')}}</span>
                        <span>
                            <span class="fs-4 fw-bold">0</span>
                            <img style="width: 1.3rem; margin-top: -0.5rem" src="{{URL::asset('Img/CR-coin.svg')}}">
                        </span>

                    </div>

                    <div class="d-flex flex-wrap justify-content-between">
                        <span class="fs-5 pt-1">{{ __('debts_to_others')}}</span>
                        <span>
                            <span class="fs-4 fw-bold">0</span>
                            <img style="width: 1.3rem; margin-top: -0.5rem" src="{{URL::asset('Img/CR-coin.svg')}}">
                        </span>

                    </div>

                    <div class="d-flex flex-wrap justify-content-between ">
                        <span class="fs-5 pt-1">{{ __('value_of_technology')}}</span>
                        <span>
                            <span class="fs-4 fw-bold">{{$technology_value}}</span>
                            <img style="width: 1.3rem; margin-top: -0.5rem" src="{{URL::asset('Img/CR-coin.svg')}}">
                        </span>

                    </div>
                    <div class="d-flex flex-wrap justify-content-between ">
                        <span class="fs-5 pt-1">{{ __('income_for_a_longer_period')}}</span>
                        <span>
                            <span class="fs-4 fw-bold">{{$next_round_icome}}</span>
                            <img style="width: 1.3rem; margin-top: -0.5rem" src="{{URL::asset('Img/CR-coin.svg')}}">
                        </span>

                    </div>
                </div>

                <div class="w-100 w-md-50 d-grid ">

                    <button class="btn btn-primary w-90 m-2 ms-auto me-auto ms-md-5 mt-4 mt-md-0" onclick="getOnePayForm({{$lobby->id}})">{{ __('one-time_payment')}}</button>
                    <button class="btn btn-primary w-90 m-2 ms-auto me-auto ms-md-5" disabled>{{ __('lend_to_somebody')}}</button>
                    <button class="btn btn-primary w-90 m-2 ms-auto me-auto ms-md-5" disabled>{{ __('apply_for_a_loan')}}</button>
                    <button class="btn btn-primary w-90 m-2 ms-auto me-auto ms-md-5" @if($edit_tax == 1) disabled @endif onclick="changeNationTax()">{{ __('change_taxes')}}</button>

                </div>

            </div>

{{--            Admin panel přehledu--}}
            @if(Auth::check() && Auth::permition()->admin == "1")
            <div class="w-100 w-xl-75 w-sm-90  p-4 mb-4 shadow-md rounded-3 bg-white d-flex flex-wrap">

                <div class="w-100 w-md-50 pe-3 d-grid">
                    <div class="fw-bold fs-2 mb-2 text-center text-md-start" style="    border-bottom: 2px solid black; height: 3.5rem;">
                        {{ __('overview_of_states')}}
                    </div>

                    @foreach($allNations as $nation)
                    <div class="fast-pay-nation-row d-flex flex-wrap justify-content-between" nationId="{{$nation->id}}">
                        <div class="d-flex">
                            <div class=" form-check form-switch d-grid text-center justify-content-center p-0 pt-3">
                                <input onchange="changeFastPay()" style="transform: scale(1.2)" class="form-check-input m-0 p-0 ms-1"  type="checkbox" role="switch" nationId="{{$nation->id}}" id="flexSwitchCheckDefault">
                                <label class="form-check-label mt-1 fw-bold" style=" font-size: 10px" for="flexSwitchCheckDefault"></label>
                            </div>

                            <span class="ms-4 fs-4 pt-1 text-start">
                                {{$nation->name}}
                            </span>
                        </div>
                        <span>
                            <span class="fs-3 fw-bold nation-money">{{$nation->money}}<span class="nation-money-add "></span></span>
                            <img style="width: 1.3rem; margin-top: -0.5rem" src="{{URL::asset('Img/CR-coin.svg')}}">
                        </span>

                    </div>
                    @endforeach
                </div>

                <div class="w-100 w-md-50 ps-3 d-grid ">

                    <div class="fw-bold fs-2 mb-2 text-center text-md-start" style="    border-bottom: 2px solid black; height: 3.5rem;">
                        {{ __('fast_payments')}}
                    </div>

                    <div class="d-flex flex-wrap mb-3">
                        <span class="w-10rem pt-1 text-end pe-3">{{ __('transaction_type')}}:</span>
                        <span class="w-50">
                            <select id="one-pay-transaction-type" class="rounded-2 shadow-sm p-2 w-100" >
                                @foreach($allTransactionTypes as $transactionType)
                                    <option id="fast-pay-transaction-type-select" value="{{$transactionType->code}}">{{__($transactionType->name)}}</option>
                                @endforeach
                            </select>
                        </span>
                    </div>


                    <div class="d-flex flex-wrap mb-3">
                        <span class="w-10rem pt-1 text-end pe-3">{{ __('amount')}}:</span>
                        <span class="w-50">
                            <input onchange="changeFastPay()" id="fast-pay-amouth-admin" type="number" value="1"  class="number p-2 fw-bold rounded-2 shadow-sm  w-100">
                         </span>
                    </div>

                    <div class="d-flex flex-wrap mb-3 ">
                        <span class="w-10rem pt-1 text-end pe-3">{{ __('note')}}:</span>
                        <span class="w-50"><textarea id="fast-pay-description" maxlength="350" class="w-100 rounded-2 shadow-sm p-2" style="max-height: 200px; min-height: 50px" placeholder="Zde můžete zadat poznámku k platbě, MAX 350 znaků"></textarea></span>
                    </div>


                    <button class="btn btn-primary w-90 m-2 ms-auto me-auto ms-md-5 mt-4 mt-md-0" onclick="sendFastPay()">{{ __('send')}}</button>


                </div>

            </div>
            @endif

        </div>

        <div class="d-flex flex-wrap w-100 w-xl-75 w-sm-90 bg-white rounded-3 shadow-md p-4 mx-auto">

            @foreach($my_payment_balance as $balance_item)
            <div class="rounded-3 shadow-sm p-3 m-1 w-100 d-flex flex-wrap justify-content-between bg-light">

                <div class="d-flex flex-wrap">
                    <span class="pt-3">@php echo explode(" ",$balance_item->created_at)[1] @endphp</span>
                    <div class="d-grid ms-4">
                        <div>
    {{--                        <span class=" text-muted">Typ platby: </span>--}}
                            <span>
                            {{__($balance_item->transaction_type_name)}}
                            </span>
                            <span data-toggle="tooltip" data-placement="bottom" title="{{__($balance_item->description)}}">
                                <svg xmlns="http://www.w3.org/2000/svg"  width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                </svg>
                            </span>
                        </div>

                        <div>

                            <span class="fs-5 fw-bold ">{{$balance_item->nation_name_from}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-right-short mb-1" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"/>
                            </svg>
                            <span class="fs-5 fw-bold">{{$balance_item->nation_name_to}}</span>

                            @if($balance_item->description != null)
                            <div class="ms-2">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-right-quote" viewBox="0 0 16 16">
                                      <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
                                      <path d="M7.066 4.76A1.665 1.665 0 0 0 4 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112zm4 0A1.665 1.665 0 0 0 8 5.668a1.667 1.667 0 0 0 2.561 1.406c-.131.389-.375.804-.777 1.22a.417.417 0 1 0 .6.58c1.486-1.54 1.293-3.214.682-4.112z"/>
                                    </svg>
                                </span>
                                {{__($balance_item->description)}}
                            </div>
                            @endif

                        </div>

                    </div>
                </div>

                <div>
                    <span class="fw-bold fs-2 @if($balance_item->nation_id_from == $my_nation->id || $balance_item->money_change < 0) text-red @else text-green @endif ">
                        @if($balance_item->nation_id_from == $my_nation->id || $balance_item->money_change < 0)- @else + @endif
                        @php echo abs($balance_item->money_change) @endphp
                    </span>
                    <span>
                        <img class="@if($balance_item->nation_id_from == $my_nation->id || $balance_item->money_change < 0) text-red @else text-green @endif" style="width: 1.3rem; margin-top: -0.5rem" src="{{URL::asset('Img/CR-coin.svg')}}">
                    </span>
                </div>
            </div>
            @endforeach
        </div>

    </div>

    @include('button-panel')


</x-app-layout>
