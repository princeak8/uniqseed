
    @include('inc.head_links')

        @include('inc.header')
        <div id="colorlib-page">
	        <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
            
            @yield('content')
        </div>

        @include('inc.footer')

        @yield('js')
        </body>
</html>    
    
