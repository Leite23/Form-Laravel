<x-layout title="Criar conta">

    <div class="flex justify-center items-center " style="height:100vh">

        <form method="POST" class="bg-white flex flex-col w-2/6 gap-6 p-10 shadow-2xl" action={{route('auth.store')}}>
            @csrf
            <div class="flex justify-start">

                <img class="h-6" src={{ asset('LogoMicrosoft.svg') }} alt="">
            </div>
            <h1 class="font-medium text-2xl">Criar nova conta</h1>

            <input type="text" placeholder="Nome & sobrenome" id="name" name="name"
            class="border-b border-zinc-500 focus:outline-none">

            <input type="email" placeholder="Email" id="email" name="email"
            class="border-b border-zinc-500 focus:outline-none">

            <input type="password" placeholder="Senha" id="password" name="password"
            class="border-b border-zinc-500 focus:outline-none">

            <p class="text-sm">Ja possui uma conta? <a style="color:#0067B8" class="" href={{route('auth.index')}}>Entre aqui</a></p>
            <div class="flex justify-center">
                <button type="submit"
                    class="text-white text-base font-medium p-1 w-2/6"
                    style="background-color: #0067B8">
                    Criar
                </button>
            </div>

        </form>
    </div>


</x-layout>


