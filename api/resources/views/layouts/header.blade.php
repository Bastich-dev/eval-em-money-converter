<header class="bg-dark">
    <div class="d-flex justify-content-between align-items-center container py-3">
        <a href="/" class="logo scale-anim">
            <img src="{{ asset('logo.png') }}" alt="We Fashion" class="img-fluid">
        </a>
        @if (false)
            <nav class="me-auto ms-5">
                <ul class="d-flex align-items-center list-unstyled p-0 m-0">
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="/category/soldes">
                            Produits
                        </a>
                    </li>
                    <li>
                        <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link" href="/category/homme">
                            Catégories
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="/admin">
                <button type="button" class="btn btn-primary d-flex align-items-center"> <span
                        class="material-symbols-outlined me-2">
                        admin_panel_settings
                    </span> Espace administrateur</button>
            </a>
        @else
            <nav class="me-auto ms-5">
                <ul class="d-flex align-items-center list-unstyled p-0 m-0">
                    @foreach ($categories as $category)
                        <li>
                            <a class="h5 text-white pt-2 pb-1 m-3 text-decoration-none link {{ request()->is('/category/$category->slug ') ? 'active' : '' }} "
                                href="/category/{{ $category['slug'] }}">
                                {{ $category['name'] }}
                            </a>
                        </li>
                    @endforeach

                </ul>
            </nav>
            <a href="/admin">
                <button type="button" class="btn btn-primary d-flex align-items-center"> <span
                        class="material-symbols-outlined me-2">
                        admin_panel_settings
                    </span> Espace administrateur</button>
            </a>
        @endif

    </div>
</header>
