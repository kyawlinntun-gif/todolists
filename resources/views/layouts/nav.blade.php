<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('todo.index') }}">TodoLists</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('todo.index') }}">Home</a>
                </li>
                <li class="nav-item {{ Request::is('todo/create') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('todo.create') }}">Create Todo</a>
                </li>
            </ul>
        </div>
    </div>
</nav>