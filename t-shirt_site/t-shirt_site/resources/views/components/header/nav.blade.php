<nav>
        <a class="{{ request()->is('tshirts') ? 'knopje-active' : 'knopje' }}" href="{{ url('/tshirts') }}">Unsorted</a>
        <a class="{{ request()->is('tshirts-sorted') ? 'knopje-active' : 'knopje' }}" href="{{ url('/tshirts-sorted') }}">Sorted</a>


        <select id="page-navigator-colors" onchange="location = this.value;">
                <option value="{{ url('/tshirts') }}">All Colors</option>
                <option value="{{ url('/color/red') }}">Red</option>
                <option value="{{ url('/color/green') }}">Green</option>
                <option value="{{ url('/color/blue') }}">blue</option>
                <option value="{{ url('/color/yellow') }}">yellow</option>
                <option value="{{ url('/color/pink') }}">pink</option>
        </select>

        <select id="page-navigator-category" onchange="location = this.value;">
                <option value="{{ url('/tshirts') }}">All Categories</option>
                <option value="{{ url('/category/baggy') }}">Baggy</option>
                <option value="{{ url('/category/slim') }}">Slim</option>
                <option value="{{ url('/category/short') }}">Short</option>
        </select>
</nav> 