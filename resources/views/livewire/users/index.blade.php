<div>
    <table class="w-full divide-y divide-gray-200">

    <thead class="font-bold text-gray-500 bg-indigo-200">
        <tr>
            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
            </th>

            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                Id
            </th>

            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                Імʼя
            </th>

            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                Електронна Пошта
            </th>

            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                Роль
            </th>
            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                Дата створення
            </th>

            <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                Дії
            </th>
        </tr>
    </thead>

    <tbody class="text-xs divide-y divide-gray-200 bg-indigo-50">
        @foreach ($users as $user)

        <tr>
            <td class="px-2 py-4 whitespace-nowrap">
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{ $user->id }}
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{ $user->name }}
            </td>


            <td class="px-2 py-4 whitespace-nowrap">
                {{ $user->email }}
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{ $user->role }}
            </td>

            <td class="px-2 py-4 whitespace-nowrap">
                {{ $user->created_at->format('m/d/y') }}
            </td>

            <td class="px-2 py-4 text-sm text-gray-500 whitespace-nowrap">

                <div class="flex justify-start space-x-1">


                    <a href="{{ route('users.edit', $user) }}" class="p-1 border-2 border-indigo-200 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </a>
                    <livewire:buttons.delete-user :user="$user" :key="$user->id" />

                </div>

            </td>
        </tr>
        @endforeach

    </tbody>
    </table>
</div>