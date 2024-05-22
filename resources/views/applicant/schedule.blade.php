<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <title>Document</title>
                </head>
                <body>
                    <form action="{{route('scheduled.store')}}" method="POST">
                        @csrf
                        <div>
                            <label for="category_id" class="form-label">Session</label>
                            {{-- <select class="form-select" name="category_id" required> 
                                <option value="" disabled selected>Select a session</option>
                                @foreach ($sessionType as $sessionType)
                                    <option value="{{ $sessionType->id }}">{{ $sessionType->name }}</option>  
                                @endforeach
                            </select> --}}
                            <select class="form-select" name="session_type_id" required>
                                <option value="" disabled selected>Select a session</option>
                                @foreach ($sessionType as $type)
                                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="date">Select a date:</label>
                            <input type="date" id="date" name="date" min="{{date('Y-m-d' , strtotime('tomorrow'))}}">
                            
                            <label for="time">Select a time:</label>
                            <input type="time" id="time" name="time">
                        </div>
                        <div>
                            <button type="submit" class=" ">
                                Schedule
                            </button>
                        </div>
                    </form>
                </body>
                </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
