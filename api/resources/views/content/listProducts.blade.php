<p class="text-end mt-4 mb-4">{{ count($products) }} Résultats</p>
<div class="row g-5">
    @forelse ($products as $product)
        @include('content.cardProduct', ['product' => $product])
    @empty
        <p>Aucun article pour cette recherche.</p>
    @endforelse
</div>
