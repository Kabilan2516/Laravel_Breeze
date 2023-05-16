


      <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>
                        <a href="#">Insert</a>
                        <ul class="dropdown">
                            <li><a name="user_form" href="/insert_user">user data</a></li>
                            <li><a name="question_form" href="/insert_question">Question</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">View</a>
                        <ul class="dropdown">

                            <li><a name="users" href="{{route('select',['table_name'=>'user_info'])}}">users</a></li>
                            <li><a name="question" href="{{route('select',['table_name'=>'question_bank'])}}">Question</a></li>
                        </ul>
                    </li>

                </ul>
                <ul>
                    <div>
                        <input type="text" name="" id="" placeholder="Search..">
                        <button type="submit">Submit</button>
                    </div>
                    <body class="antialiased">
                        <div>
                            @if (Route::has('login'))
                                <div>
                                    @auth
                                        {{-- <a href="{{ url('/dashboard') }}" >Dashboard</a> --}}
                                        <a href="{{ url('/profile') }}" >Profile</a>
                                    @else
                                        <a href="{{ route('login') }}" >Log in</a>

                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" >Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </div>
                    </body>
                </ul>
            </nav>
        </header>

        <br><br>
