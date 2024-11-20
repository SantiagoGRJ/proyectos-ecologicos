
<div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-bold mb-4">{{ $is_editing ? 'Editar Proyecto' : 'Crear Proyecto' }}</h2>



    <form wire:submit.prevent="save">
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Nombre del Proyecto</label>
            <input type="text" id="name"  wire:model="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea id="description" wire:model="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"></textarea>
            @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="funding_goal" class="block text-sm font-medium text-gray-700">Objetivo de Financiamiento</label>
            <input type="number" id="funding_goal" wire:model="funding_goal" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            @error('funding_goal') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="duration" class="block text-sm font-medium text-gray-700">Duración (días)</label>
            <input type="number" id="duration" wire:model="duration" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" />
            @error('duration') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Categoría</label>
            <select id="category" wire:model="category" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                <option value="">Seleccione una categoría</option>
                <option value="energia renovable">Energía Renovable</option>
                <option value="reciclaje">Reciclaje</option>
                <option value="agricultura sostenible">Agricultura Sostenible</option>
            </select>
            @error('category') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            {{ $is_editing ? 'Actualizar Proyecto' : 'Crear Proyecto' }}
        </button>
    </form>
</div>

