<x-layout title="Entrar na conta da Microsoft">

    <div class="flex justify-center items-center " style="height:100vh">

        <form class="bg-white flex flex-col w-2/6 gap-6 p-10 shadow-2xl" action="">
            @csrf
            <div class="flex justify-start">

                <img class="h-6" src={{ asset('LogoMicrosoft.svg') }} alt="">
            </div>
            <h1 class="font-medium text-2xl">Entrar</h1>

            <input type="email" placeholder="Email, telefone ou Skype"
            class="border-b border-zinc-500 focus:outline-none">
            <input type="password" placeholder="Senha"
            class="border-b border-zinc-500 focus:outline-none">

            <p class="text-sm">Não tem uma conta? <a style="color:#0067B8" class="" href="">Crie uma!</a></p>
            <div class="flex justify-end">

                <button class="text-white text-base font-medium p-1 w-2/6" style="background-color: #0067B8">Próximo
                </button>
            </div>

        </form>
    </div>

</x-layout>
