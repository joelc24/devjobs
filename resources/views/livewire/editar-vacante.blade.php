<form action="" class="md:w-1/2 space-y-5" wire:submit.prevent="editarVacante">
    <!-- Titulo Vacante -->
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')"
            placeholder="Titulo Vacante"
            autofocus 
        />
        @error('titulo')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <!-- Salario Mensual -->
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select 
            wire:model="salario" 
            id="salario" 
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        >
            <option value="">-- SELECCIONE --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
            
        </select>
        @error('salario')
            <livewire:mostrar-alerta :message="$message" />
        @enderror
    </div>
    <!-- Cateogria -->
    <div>
        <x-input-label for="categoria" :value="__('Cateogria')" />
        <select 
            wire:model="categoria" 
            id="categoria" 
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        >
            <option value="">-- SELECCIONE --</option>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->categoria }}</option>
            @endforeach
        </select>
        @error('categoria')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <!-- Empresa -->
    <div>
        <x-input-label for="empres" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="empresa" 
            :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify"
            autofocus 
        />
        @error('empresa')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>
    <!-- Ultimo Dia -->
    <div>
        <x-input-label for="ultimo_dia" :value="__('Ultimo Dia Para Postularse')" />
        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            wire:model="ultimo_dia" 
            :value="old('ultimo_dia')"
            autofocus 
        />
        @error('ultimo_dia')
            <livewire:mostrar-alerta :message="$message">
        @enderror
    </div>
    <!-- Descripcion Puesto -->
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion Puesto')" />
        <textarea 
            wire:model="descripcion" 
            id="descripcion" 
            placeholder="Descripcion del puesto, experiencia"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"
        >

        </textarea>
        @error('descripcion')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>
    <!-- Imagen -->
    <div>
        <x-input-label for="imagen" :value="__('Imagen Nueva')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            wire:model="imagen_nueva"
            autofocus 
            accept="image/*"
        />
        <div class="my-5 w-80">
            <x-input-label :value="__('Imagen Actual')" />
            <img src="{{ asset('storage/vacantes/' . $imagen) }}" alt="{{ 'Imagen Vacante ' . $titulo }}">
        </div>
        <div class="my-5 w-80">
            @if($imagen_nueva)
                Imagen Nueva: 
                <img src="{{ $imagen_nueva->temporaryUrl() }}" alt="Previsaulizacion de la imagen seleccionada">
            @endif
        </div>
        @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <x-primary-button>
        Guardar Cambios
    </x-primary-button>
</form>
