<?php 
$denuncia = App\Models\Denuncia::all();
//$user = App\Models\User::all();
?>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <a href="{{route('denunciar')}}">Criar denuncia</a>
<<<<<<< HEAD
                   <a href="{{route('suas_denuncias')}}">Suas denuncias</a>
=======
                   <a href="{{route('show_denuncia')}}">Ver denuncias</a>
>>>>>>> 20ae8b86d92c280c94787da60de610dcb5a4ddd3
                </div>
            </div>
        </div>
    </div>
</x-app-layout>