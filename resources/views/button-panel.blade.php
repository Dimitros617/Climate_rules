
<div class="button-bar position-fixed bottom-0 left-0 right-0 d-grid d-md-flex flex-wrap justify-content-center w-100 px-6 invisible visible-md ">


    <div class="cr-button hover-size-01"
         onclick="enterLobby({{$lobby->id}})"
    >
        <div class="cr-button-content ">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 250 250" ><path d="M125 62.5c-34.5 0-62.5 28-62.5 62.5 0 1.8.1 3.6.3 5.4.1.8.1 1.5.2 2.2 0 .3.1.5.1.8l.3 1.8c.1.4.2.9.2 1.3.1.4.2.9.3 1.3 3.9 18.6 16 34.3 32.9 42.8 8.5 4.3 18.1 6.8 28.2 6.8 34.5 0 62.5-28 62.5-62.5 0-34.4-28-62.4-62.5-62.4zm.7 120.1c-8.5-5.4-16.5-12.1-13-20.4 6.4-14.9.4-20.5-2.1-22.9l-.5-.5c-.7-.7-1.5-1.2-2.3-1.7-1.8-1.1-2.2-1.3-1.3-4.2.6-1.9 1.5-2.8 2.4-3.8 2.2-2.3 3.9-4.7 3.9-11.5 0-3.9-2-7.1-5.5-8.6-4-1.8-9.3-1.1-12.1 1.4-1.7 1.6-2.3 3.7-1.6 5.9 1.7 5.1-2.2 12.5-9.5 18-1.9 1.4-2.5.8-2.9.4-2.1-2.5-2-9.5-.2-11.2 1.2-1.2 1.5-2.7.9-4-1.5-3.4-9.4-4-14-4 .4-2.2.8-4.4 1.4-6.5 0-.1.1-.1.1-.2 2.4-8.1 6.4-15.3 11.7-21.4.4 1.4 1.4 2.6 3.1 3.5 2.2 1.2 5.5 1.9 8.8 1.8 1.6 0 3.5-.7 5.2-1.8 5.1-3.3 8.9-10.7 9.1-15.3.1-2.3-.7-3.9-2.1-4.8 6.2-2.3 12.8-3.5 19.7-3.5 4.1 0 8.1.4 12.1 1.3-.1 3.4 1.4 5.8 2.4 7.3.3.4.6 1 .7 1.1 0 8.6-1.8 10-1.7 10-3.9 0-10.3 3.5-12.7 7.9-1.5 2.7-1.4 5.6.3 8.2 1.2 1.7 2.2 3.7 3.1 5.5 2 3.9 4.3 8.3 7.9 8.3.8 0 1.6-.2 2.4-.6 2.8-1.4 4.8-5.4 6.8-9.2.9-1.7 2.1-4.2 2.9-5 2.4.3 3.6 2.5 5.2 6 1.2 2.6 2.4 5.2 4.8 6.4 3.6 1.8 14.6.3 22.2-2.2.3 1.3.5 2.6.7 3.9v.7c.4 2.6.5 5.3.5 8 .1 31.7-25.4 57.4-56.8 57.7z"/><defs ><path  d="M61.8-71.7v.2c-.1.1-.1.1-.2.1-.1.1-.1.3-.1.4-.2.1 0 .2 0 .3v.2c0 .1 0 .3.1.4.1.2.3.4.4.5.2.1.4.6.6.6s.4-.1.5-.1c.2 0 .4 0 .6-.1s.1-.3.3-.5c.1-.1.3 0 .4-.1.2-.1.3-.3.4-.5v-.2c0-.1.1-.2.1-.3s-.1-.1-.1-.2v-.3c0-.2 0-.4-.1-.5-.4-.7-1.2-.9-2-.8-.2 0-.3.1-.4.2-.2.1-.1.2-.3.2-.1 0-.2.1-.2.2v.3c0 .1 0 .1 0 0"/><path  d="M69.4-64v.2c-.1.1-.1.1-.2.1-.1.1-.1.3-.1.4-.2.1 0 .2 0 .3v.2c0 .1 0 .3.1.4.1.2.3.4.4.5.2.1.4.6.6.6s.4-.1.5-.1c.2 0 .4 0 .6-.1s.1-.3.3-.5c.1-.1.3 0 .4-.1.2-.1.3-.3.4-.5v-.2c0-.1.1-.2.1-.3s-.1-.1-.1-.2v-.3c0-.2 0-.4-.1-.5-.4-.7-1.2-.9-2-.8-.2 0-.3.1-.4.2-.2.1-.1.2-.3.2-.1 0-.2.1-.2.2v.3"/><path  d="M8.2-56.3v.2c-.1 0-.2 0-.2.1-.1.1-.1.3-.1.4-.2.1 0 .2 0 .3v.2c0 .1 0 .3.1.4.1.2.3.4.4.5.2.1.4.6.6.6s.4-.1.5-.1c.2 0 .4 0 .6-.1s.1-.3.3-.5c.1-.1.3 0 .4-.1.2-.1.3-.3.4-.5v-.2c0-.1.1-.2.1-.3s-.1-.1-.1-.2v-.3c0-.2 0-.4-.1-.5-.4-.7-1.2-.9-2-.8-.2 0-.3.1-.4.2-.2.1-.1.2-.3.2-.1 0-.2.1-.2.2v.3c-.1 0-.1 0 0 0"/><path  d="M69.4-18.1v.2c-.1.1-.1.1-.2.1-.1.1-.1.3-.1.4-.2.1 0 .2 0 .3v.2c0 .1 0 .3.1.4.1.2.3.4.4.5.2.1.4.6.6.6s.4-.1.5-.1c.2 0 .4 0 .6-.1s.1-.3.3-.5c.1-.1.3 0 .4-.1.2-.1.3-.3.4-.5v-.2c0-.1.1-.2.1-.3s-.1-.1-.1-.2v-.3c0-.2 0-.4-.1-.5-.4-.7-1.2-.9-2-.8-.2 0-.3.1-.4.2-.2.1-.1.2-.3.2-.1 0-.2.1-.2.2v.3c0 .1 0 0 0 0"/><path  d="M61.8-10.4v.2c-.1.1-.1.1-.2.1-.1.1-.1.3-.1.4-.2.1 0 .2 0 .3v.2c0 .1 0 .3.1.4.1.2.3.4.4.5.2.1.4.6.6.6s.4-.1.5-.1c.2 0 .4 0 .6-.1s.1-.3.3-.4c.1-.1.3 0 .4-.1.2-.1.3-.3.4-.5v-.2c0-.1.1-.2.1-.3s-.1-.1-.1-.2v-.3c0-.2 0-.4-.1-.5-.4-.7-1.2-.9-2-.8-.2 0-.3.1-.4.2-.2.1-.1.2-.3.2-.1 0-.2.1-.2.2v.2"/><path  d="M61.8-2.8v.2c-.1.1-.1.1-.2.1-.1.1-.1.3-.1.4-.2.1 0 .2 0 .3v.2c0 .1 0 .3.1.4 0 .2.2.4.4.5s.4.6.6.6.4-.1.5-.1c.2 0 .4 0 .6-.1s.1-.3.3-.5c.1-.1.3 0 .4-.1.2-.1.3-.3.4-.5v-.2c0-.1.1-.2.1-.3s-.1-.1-.1-.2v-.3c0-.2 0-.4-.1-.5-.4-.7-1.2-.9-2-.8-.2 0-.3.1-.4.2-.2.1-.1.2-.3.2-.1 0-.2.1-.2.2v.3c0 .1 0 0 0 0"/><path  d="M31.1-2.8v.2c-.1.1-.1.1-.2.1-.1.1-.1.3-.1.4-.2.1 0 .2 0 .3v.2c0 .1 0 .3.1.4.1.2.2.4.4.5s.4.6.6.6.4-.1.5-.1c.2 0 .4 0 .6-.1s.1-.3.3-.5c.1-.1.3 0 .4-.1.2-.1.3-.3.4-.5v-.2c0-.1.1-.2.1-.3s-.1-.1-.1-.2v-.3c0-.2 0-.4-.1-.5-.4-.7-1.2-.9-2-.8-.2 0-.3.1-.4.2-.2.1-.1.2-.3.2-.1 0-.2.1-.2.2v.3c0 .1 0 0 0 0"/></defs></svg>
            </span>
            <span class="cr-button-content-text">
                {{ __('world')}}
            </span>
        </div>
    </div>

    <div class="cr-button  hover-size-01"
         onclick="enterLobbyNation({{$lobby->id}})"
    >
        <div class="cr-button-content  pt-3">
            <span class="pb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-flag-fill" viewBox="0 0 16 16">
                  <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12.435 12.435 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A19.626 19.626 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a19.587 19.587 0 0 0 1.349-.476l.019-.007.004-.002h.001"/>
                </svg>
            </span>
            <span class="cr-button-content-text">
                {{__('state')}}
            </span>
        </div>
    </div>

    <div class="cr-button  hover-size-01"
         onclick="enterBank({{$lobby->id}})">
        <div class="cr-button-content  pt-3" >
            <span class="pb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                  <path d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z"/>
                </svg>
            </span>
            <span class="cr-button-content-text">
                {{__('bank')}}
            </span>
        </div>
    </div>

    <div class="cr-button  hover-size-01"
         onclick="window.location.assign('/lobby/{{$lobby->id}}/technologies')" >
        <div class="cr-button-content  pt-3">
            <span class="pb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                    <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                </svg>
            </span>
            <span class="cr-button-content-text">
                {{__('technology')}}
            </span>
        </div>
    </div>

    <div class="cr-button  hover-size-01"
         onclick="window.location.assign(@if(config('app.locale') == 'en')'https://forms.gle/zDJ88oWJBQMbMBPC7'@else 'https://forms.gle/yMK8g6XAVLwVaPjk8' @endif)" >
        <div class="cr-button-content  pt-3">
            <span class="pb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                </svg>
            </span>
            <span class="cr-button-content-text">
                {{__('news')}}
            </span>
        </div>
    </div>

    @if(Auth::permition()->admin ==1)
    <div class="cr-button  hover-size-01">
        <div class="cr-button-content  pt-3">
            <span class="pb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                </svg>
            </span>
            <span class="cr-button-content-text">
                {{__('events')}}
            </span>
        </div>
    </div>
    @endif

    <div class="cr-button  hover-size-01"
         onclick="window.location.assign(@if(config('app.locale') == 'en')'https://sites.google.com/nvias.org/climate-rules-info-en'@else 'https://sites.google.com/nvias.org/climate-rules-info' @endif)" >
        <div class="cr-button-content  pt-3">
            <span class="pb-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bank2" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z"/>
                </svg>
            </span>
            <span class="cr-button-content-text">
                {{__('help')}}
            </span>
        </div>
    </div>

</div>

<div class="mobile-button-bar position-fixed bottom-0 end-0 rounded-4 shadow-sm bg-white p-3 pb-4 mb--1 me-3 animate-05 hover-size-01 visible invisible-md"
onclick="hamburgerMenu()">


        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
        </svg>

</div>
