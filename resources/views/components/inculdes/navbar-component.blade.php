<div>
    <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
        <a class="navbar-brand" href="{{ url('/') }}">Navbar</a>
        <ul class="nav nav-pills">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/').'/create' }}">Create</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/').'/table' }}">Table</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/').'/card' }}">Card</a>
          </li>
        </ul>
    </nav>
</div>
