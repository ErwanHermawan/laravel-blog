<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container">
    <a class="navbar-brand" href="/">WPU Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{($active === 'home' ? 'active': '')}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === 'about' ? 'active': '')}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === 'posts ' ? 'active': '')}}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{($active === 'categories' ? 'active': '')}}" href="/posts">Categories</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
