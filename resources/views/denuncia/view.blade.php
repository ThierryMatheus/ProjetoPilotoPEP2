<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="w-full">
                        <thead>
                        <tr class="text-md tracking-wide bg-gray-100 uppercase border-b border-gray-600">
                            <th>Título</th>
                            <th>Data de Registro</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        @foreach(Auth::user()->denuncia as $denuncia)
                            <tbody>
                            <tr class="border border-gray-300">
                                <td>{{$denuncia->titulo}}</td>
                                <td>{{$denuncia->created_at}}</td>
                                <td><a href="/denuncia/{{ $denuncia->id }}/edit" class="text-green-500">Editar</a></td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
