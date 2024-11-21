<div class="max-w-2xl mx-auto p-8 bg-gradient-to-r from-teal-700 via-teal-800 to-teal-900 text-white shadow-2xl rounded-lg">
    <h2 class="text-4xl font-extrabold text-center mb-8">{{ $is_editing ? 'Editar Proyecto' : 'Crear Proyecto' }}</h2>

    <form wire:submit.prevent="save" class="space-y-6">
        <!-- Fila de columnas: Nombre y Descripción -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Nombre del Proyecto -->
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-200">Nombre del Proyecto</label>
                <div class="relative mt-2">
                    <input type="text" id="name" wire:model="name" class="block w-full px-4 py-3 rounded-lg bg-gray-800 text-white border-2 border-transparent focus:ring-2 focus:ring-teal-500 focus:border-teal-500 placeholder-gray-400" placeholder="Nombre del Proyecto" />
                    @error('name') <span class="text-red-400 text-sm absolute top-full left-0">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Descripción -->
            <div class="mb-6">
                <label for="description" class="block text-sm font-medium text-gray-200">Descripción</label>
                <div class="relative mt-2">
                    <textarea id="description" wire:model="description" rows="5" class="block w-full px-4 py-3 rounded-lg bg-gray-800 text-white border-2 border-transparent focus:ring-2 focus:ring-teal-500 focus:border-teal-500 placeholder-gray-400" placeholder="Descripción del Proyecto"></textarea>
                    @error('description') <span class="text-red-400 text-sm absolute top-full left-0">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- Fila de columnas: Objetivo de Financiamiento y Duración -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Objetivo de Financiamiento -->
            <div class="mb-6">
                <label for="funding_goal" class="block text-sm font-medium text-gray-200">Objetivo de Financiamiento</label>
                <div class="relative mt-2">
                    <input type="number" id="funding_goal" wire:model="funding_goal" step="0.01" class="block w-full px-4 py-3 rounded-lg bg-gray-800 text-white border-2 border-transparent focus:ring-2 focus:ring-teal-500 focus:border-teal-500 placeholder-gray-400" placeholder="Cantidad" />
                    @error('funding_goal') <span class="text-red-400 text-sm absolute top-full left-0">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Duración -->
            <div class="mb-6">
                <label for="duration" class="block text-sm font-medium text-gray-200">Duración (días)</label>
                <div class="relative mt-2">
                    <input type="number" id="duration" wire:model="duration" class="block w-full px-4 py-3 rounded-lg bg-gray-800 text-white border-2 border-transparent focus:ring-2 focus:ring-teal-500 focus:border-teal-500 placeholder-gray-400" placeholder="Duración del Proyecto" />
                    @error('duration') <span class="text-red-400 text-sm absolute top-full left-0">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <!-- Categoría -->
        <div class="mb-6">
            <label for="category" class="block text-sm font-medium text-gray-200">Categoría</label>
            <div class="relative mt-2">
                <select id="category" wire:model="category" class="block w-full px-4 py-3 rounded-lg bg-gray-800 text-white border-2 border-transparent focus:ring-2 focus:ring-teal-500 focus:border-teal-500">
                    <option value="">Seleccione una categoría</option>
                    <option value="energia_renovable">Energía Renovable</option>
                    <option value="reciclaje">Reciclaje</option>
                    <option value="agricultura_sostenible">Agricultura Sostenible</option>
                    <option value="energia_solar">Energía Solar</option>
                    <option value="reforestacion">Reforestación</option>
                </select>
                @error('category') <span class="text-red-400 text-sm absolute top-full left-0">{{ $message }}</span> @enderror
            </div>
        </div>

        <!-- Botón de Enviar -->
        <div class="text-center">
            <button type="submit" class="bg-teal-600 text-white px-8 py-4 rounded-lg shadow-lg transform hover:bg-teal-700 hover:scale-105 transition-all duration-300">
                {{ $is_editing ? 'Actualizar Proyecto' : 'Crear Proyecto' }}
            </button>
        </div>
    </form>
</div>
