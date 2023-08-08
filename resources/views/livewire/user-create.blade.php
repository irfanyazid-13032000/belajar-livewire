<div>
    <div class="card">
        <div class="card-header">form</div>
        <div class="card-body">
            @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
            @endif
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="" class="form-label">nama</label>
                    <input type="text" class="form-control" wire:model="name">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="" class="form-label">email</label>
                    <input type="text" class="form-control" wire:model="email">
                    @error('email')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
    
                <div class="mb-3">
                    <label for="" class="form-label">password</label>
                    <input type="password" class="form-control" wire:model="password">
                    @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">submit</button>
            </form>

        </div>
    </div>
</div>
