<ul class="flex gap-[30px] mt-[60px]">
    @foreach ($products as $product)
        <x-card.product :product="$product" />
    @endforeach
</ul>
