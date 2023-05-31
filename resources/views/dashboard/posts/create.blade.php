<x-app-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Пости') }}
        </h2>
    </x-slot>

    <x-slot name="nav">
        <div class="space-x-4">
            {{-- Index --}}
            <x-jet-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">
                {{ __('Лист постів') }}
            </x-jet-nav-link>

            {{-- Create --}}
            <x-jet-nav-link href="{{ route('posts.create') }}" :active="request()->routeIs('posts.create')">
                {{ __('Створити') }}
            </x-jet-nav-link>
        </div>
    </x-slot>


    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">

                <div class="p-6">

                    <x-form action="{{ route('posts.store') }}" has-files>
                        <div class="space-y-6">

                            {{-- Cover Image --}}
                            <div>
                                <x-jet-label for="cover_image" value="{{ __('Обкладинка') }}" />
                                <input name="cover_image" type="file" id="cover_image">
                                <span class="mt-2 text-xs text-gray-500">Тип файлу:тільки jpg,png</span>
                                <x-jet-input-error for="cover_image" class="mt-2" />
                            </div>

                            {{-- Title --}}
                            <div>
                                <x-jet-label for="title" value="{{ __('Заголовок') }}" />
                                <x-jet-input id="title" class="block w-full mt-1" type="text" name="title" :value="old('title')" autofocus autocomplete="title" />
                                <span class="mt-2 text-xs text-gray-500">Максимум 200 символів</span>
                                <x-jet-input-error for="title" class="mt-2" />
                            </div>

                            {{-- Category --}}
                            <div>
                                <x-jet-label for="category_id" value="{{ __('Категорії') }}" />
                                <select name="category_id" id="category_id" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

                                    <option value="">Оберіть категорію</option>
                                    @foreach ($categories as $category )
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <x-jet-input-error for="category_id" class="mt-2" />
                            </div>

                            {{-- Body --}}
                            <div>
                                <x-jet-label for="body" value="{{ __('Основний текст') }}" />
                                <input id="content" type="hidden" name="content">
                                <x-trix name="body" styling="overflow-y-scroll h-96" input="content"></x-trix>
                                <x-jet-input-error for="body" class="mt-2" />
                            </div>
                            {{-- URL 
                            <div>
                                <x-jet-input id="attachment_url" class="hidden" type="file" name="attachment_url" />
                            </div>--}}
                            {{-- Schedule --}}
                            <div>
                                <x-jet-label for="published_at" value="{{ __('Дата випуску') }}" />
                                <x-pikaday name="published_at" format="YYYY-MM-DD" />
                                <x-jet-input-error for="published_at" class="mt-2" />
                            </div>

                            {{-- Tags --}}
                            <div>
                                <x-jet-label for="tags" value="{{ __('Основний текст') }}" />
                                <select name="tags[]" id="create-post" multiple x-data="{}" x-init="function () { choices($el) }">
                                    @foreach ($tags as $tag )
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Meta Description --}}
                            <div>
                                <x-jet-label for="meta_description" value="{{ __('Мета-опис') }}" />
                                <x-trix name="meta_description" styling="overflow-y-scroll h-40"></x-trix>
                                <x-jet-input-error for="meta_description" class="mt-2" />
                            </div>

                        </div>


                        <x-jet-button class="mt-12">
                            {{ __('Створити') }}
                        </x-jet-button>

                    </x-form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.addEventListener('trix-attachment-add', function (event) {
            var attachment = event.attachment;
            if (attachment.file) {
                uploadAttachment(attachment);
            }
        });

        function uploadAttachment(attachment) {
            var formData = new FormData();
            formData.append('attachment', attachment.file);
            formData.append('_token', "{{ csrf_token() }}");

            fetch("{{ route('trix-attachment') }}", {
                method: 'POST',
                body: formData,
            })
            .then(response => response.json())
            .then(data => {
            attachment.setAttributes({ url: data.url });
            console.log(data.url);
            document.getElementById('content').value = data.url;
            })
            .catch(error => {
                console.error('Error uploading attachment:', error);
            });
        }
    });
</script>

