<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
    .login{
        background: url('http://bit.ly/2gPLxZ4');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<body>
<div class="h-screen font-sans login bg-cover">
    <div class="container mx-auto h-full flex flex-1 justify-center items-center">
        <div class="w-full max-w-lg">
           <div class="leading-loose">
               <form action="{{ route('login') }}" method="post" class="max-w-sm m-4 p-10 bg-white bg-opacity-25 rounded shadow-xl">
                   @csrf
                    <p class="text-white font-medium text-center text-lg font-bold">
                        Connect Plus
                    </p>
                    @if($errors)
                        @foreach($errors->all() as $error)
                            <div class="flex items-center bg-red-500 text-white text-md font-light px-4 py-3" role="alert">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <p>{{ $error }} </p>
                            </div>
                        @endforeach
                    @endif
                    <div class="">
                        <label class="block text-sm text-white" for="">E-mail</label>
                <input type="email" value="{{ old('email')}}" name="email" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white"   placeholder="digite o seu e-mail"  required>
                    </div>
                    <div class="mt-2">
                        <label class="block text-sm text-white" for="">Senha</label>
                        <input type="password" name="password" class="w-full px-5 py-1 text-gray-700 bg-gray-300 rounded focus:outline-none focus:bg-white"  placeholder="digite a sua senha" required>
                    </div>

                    <div class="mt-4 items-center flex justify-between">
                        <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 hover:bg-gray-800 rounded" type="submit">Entrar</button>
                    </div>
                    <div class="text-center">
                        <a class="inline-block right-0 align-baseline font-light text-sm text-500 text-white hover:text-red-300">Criar uma conta</a>
                    </div>
               </form>
           </div>
        </div>
    </div>
</div>

</body>
</html>
