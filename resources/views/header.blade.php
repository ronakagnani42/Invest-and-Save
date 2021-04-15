<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light p-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Groww More App</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <script type="text/javascript">
            window.onload = function(){
                location.href=document.getElementById("selectbox").value;
            }       
        </script>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">    
                    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0 mx-4">
                        <li>
                        <label for="exampleInputEmail1" class="form-label"></label>
                        <select class="btn bg-transparent" onchange="window.location.href=this.options[this.selectedIndex].value;">

                            <option value="" disabled selected >Calculators</option>
                            <option value="{{route('sip') }}">SIP</option>
                            <option value="{{route('lumpsum')}}">Lumpsum</option>
                            <option value="{{route('rd')}}">RD </option>
                            <option value="{{route('fd')}}">FD </option>
                            <option value="{{route('ssy')}}">SSY</option>
                            <option value="2">PPF</option>
                        </select>
                        </li>
                        
                        <li>
                    
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            Invest & Save
                        </a>
                        </li>
                    </div>

                    </ul>
                    </div>
                    
                    <div id="navbarNav">
                    <ul class="navbar-nav ml-auto"> 
                        @if (Route::has('login'))
                        <div class="flex justify-left pt-8 sm:justify-start sm:pt-0 mx-4">
                                @auth
                                    <li class="nav-item ml-4">
                                        <a href="{{ route('investment') }}" class="nav-link">My Investments</a>
                                    </li>
                                    <li class="nav-item ml-auto">
                                        <form method="POST" action="http://localhost/mutual-fund-app/public/logout">
                                            {{ csrf_field() }}
                                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
                                        </form>
                                    </li>
                                    <!-- <li>
                                        <a href="{{route('initiate.payment')}}" class="ml-4 nav-link">Payment</a>
                                    </li> -->
                                    <li>
                                        <a href="{{ route('user-profile') }}" class="nav-link ml-4">
                                        <img src="http://www.pngall.com/wp-content/uploads/5/User-Profile-PNG-High-Quality-Image.png" style="width: 40px;" alt="My Profile">
                                        </a>
                                    </li>
                                            
                                @else
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="ml-4 nav-link">Register</a>
                                        </li>
                                    @endif
                                @endauth
                        </div>
                        @endif
                        
                        
                    </ul>
                    </div>
                </div>
            </nav>
</header>