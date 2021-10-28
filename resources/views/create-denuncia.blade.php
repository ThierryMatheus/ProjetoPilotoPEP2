<x-app-layout>
   <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('criar_denuncia') }}" method="POST" >
                        <fieldset>
                          
                        <legend class="text-center text-2xl">Criar Denúncia</legend>

                        <div class="flex items-center justify-end mt-4">
                            <x-label class="pr-2">Título:</x-label>
                            <x-input type="text" name="titulo" class="block mt-1 w-full"/>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-label class="pr-2">Data:</x-label>
                            <x-input type="date" name="data" class="block mt-1 w-full"/>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-label class="pr-2">Hora:</x-label>
                            <x-input type="time" name="hora" class="block mt-1 w-full"/>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-label class="pr-2">Comentário:</x-label>
                            <textarea type="text" name="coment" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                        </div>
                        </fieldset>
                        <div class="flex items-center justify-end mt-4">
                            <x-button>Enviar</x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>    