<div>
    <input type="number" class="form-control" wire:model="keranjang">
    <button class="btn btn-primary" wire:click="plus">+</button>
    @if ($keranjang > 0)
    <button class="btn btn-danger" wire:click="minus">-</button>
    @endif
</div>
