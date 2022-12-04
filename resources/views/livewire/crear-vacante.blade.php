<form action="" class="md:w-1/2 space-y-5">
    <!-- Titulo Vacante -->
    <div>
        <x-input-label for="titulo" :value="__('Titulo Vacante')" />
        <x-text-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            name="titulo" 
            :value="old('titulo')"
            placeholder="Titulo Vacante"
            autofocus 
        />
        <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
    </div>
    <!-- Salario Mensual -->
    <div>
        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <select 
            name="salario" 
            id="salario" 
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        >
            <option value="">-- SELECCIONE --</option>
            @foreach ($salarios as $salario)
                <option value="{{ $salario->id }}">{{ $salario->salario }}</option>
            @endforeach
            
        </select>
        <x-input-error :messages="$errors->get('salario')" class="mt-2" />
    </div>
    <!-- Cateogria -->
    <div>
        <x-input-label for="categoria" :value="__('Cateogria')" />
        <select 
            name="categoria" 
            id="categoria" 
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full"
        >
            
        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>
    <!-- Empresa -->
    <div>
        <x-input-label for="titulo" :value="__('Empresa')" />
        <x-text-input 
            id="empresa" 
            class="block mt-1 w-full" 
            type="text" 
            name="empresa" 
            :value="old('empresa')"
            placeholder="Empresa: ej. Netflix, Uber, Shopify"
            autofocus 
        />
        <x-input-error :messages="$errors->get('empresa')" class="mt-2" />
    </div>
    <!-- Ultimo Dia -->
    <div>
        <x-input-label for="titulo" :value="__('Ultimo Dia Para Postularse')" />
        <x-text-input 
            id="ultimo_dia" 
            class="block mt-1 w-full" 
            type="date" 
            name="ultimo_dia" 
            :value="old('ultimo_dia')"
            autofocus 
        />
        <x-input-error :messages="$errors->get('ultimo_dia')" class="mt-2" />
    </div>
    <!-- Descripcion Puesto -->
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion Puesto')" />
        <textarea 
            name="descripcion" 
            id="descripcion" 
            placeholder="Descripcion del puesto, experiencia"
            class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm w-full h-72"
        >

        </textarea>
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>
    <!-- Imagen -->
    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
            name="imagen"
            autofocus 
        />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>

    <x-primary-button>
        Crear Vacante
    </x-primary-button>
</form>
