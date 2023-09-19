<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class=" grid grid-cols-2  gap-4 items-center">

                        @include('criar-novo-usuario')

                        <!-- Campo de busca aqui -->
                        <input type="text" class="border rounded px-3 py-2 w-100" placeholder="Buscar usuário">


                        <x-create-button>{{_("Buscar")}}/x-create-button>
                    </div>

                    <!-- <div class="py-2">
                        <h1 class="text-2xl font-semibold mb-4">Lista de Usuários</h1>
                        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                            <thead class="bg-gray-800 text-white">
                                <tr>
                                    <th class="py-2 px-4">Nome</th>
                                    <th class="py-2 px-4">E-mail</th>
                                    <th class="py-2 px-4">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-2 px-4">{{ $user->name }}</td>
                                    <td class="py-2 px-4">{{ $user->email }}</td>
                                    <td class="py-2 px-4">
                                        <a href="{{ route('editar-usuario', ['id' => $user->id]) }}" class="text-blue-500 hover:underline mr-2">
                                            <i class="fas fa-pencil-alt"></i> Editar
                                        </a>
                                        <a href="{{ route('excluir-usuario', ['id' => $user->id]) }}" onclick="return confirm('Tem certeza que deseja excluir este usuário?');" class="text-red-500 hover:underline">
                                            <i class="fas fa-trash"></i> Excluir
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> -->

            </div>
        </div>
    </div>




</x-app-layout>