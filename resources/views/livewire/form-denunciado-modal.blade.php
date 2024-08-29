<div>
    <x-dialog-modal>
        <x-slot name="title">
            Nuevo Denunciado
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-1 gap-6 mb-4">
                <div>
                    <x-label class="mb-1">
                        Nombre
                    </x-label>
                    <x-input wire:model.lazy="nombre" class="w-full" placeholder="Diego Hurtado Vargas" />
                    @error('nombre')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <x-label class="mb-1">
                        Cargo
                    </x-label>
                    <x-input wire:model.lazy="cargo" class="w-full"
                        placeholder="Profesora de Secundaria en Literatura" />
                    @error('cargo')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <x-danger-button class="btn btn-blue mx-2" wire:click.prevent="$set('show_modal_denunciado', false)">
                Cerrar
            </x-danger-button>
            <x-button class="btn btn-blue mx-2" wire:click.prevent="addDenunciado">
                Agregar
            </x-button>
    
        </x-slot>
    </x-dialog-modal>
</div>
