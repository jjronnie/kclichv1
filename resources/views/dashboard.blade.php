<x-app-layout>
       <section
        class="relative flex min-h-screen items-center justify-center overflow-hidden bg-slate-900 p-4 font-sans sm:p-8">
        <div class="absolute inset-0">
            <img src="123.jpg"
                alt="Train Interior" class="h-full w-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
        </div>

        <div class="relative z-10 grid w-full max-w-6xl grid-cols-1 items-center gap-12 lg:grid-cols-2">

            <div class="flex flex-col justify-center text-white">
                <h1 class="mb-4 text-5xl font-bold leading-tight md:text-6xl">
                    Create <br> New Account
                </h1>
                <p class="mb-6 text-lg text-slate-300">
                    Already Registered? <a href="#" class="font-semibold text-orange-500 hover:underline">Login</a>
                </p>
                <p class="max-w-md text-slate-400">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean semper mauris in magna venenatis
                    suscipit.
                </p>
                <div class="mt-8">
                    <a href="#"
                        class="rounded-lg bg-orange-600 px-8 py-3 font-semibold text-white transition hover:bg-orange-700">
                        Learn More
                    </a>
                </div>
            </div>

            <div class="rounded-2xl border border-slate-700 bg-slate-800/50 p-8 backdrop-blur-sm md:p-10">
                <form action="#" method="POST" class="w-full">
                    <h2 class="mb-6 text-center text-3xl font-bold text-white">Login</h2>

                    <div class="mb-4">
                        <label for="name" class="mb-2 block text-xs font-semibold uppercase text-slate-400">Name</label>
                        <input id="name" type="text" name="name" placeholder="Francois Mercer"
                            class="w-full rounded-lg border border-slate-600 bg-slate-700/50 p-3 text-white placeholder-slate-400 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500">
                    </div>

                    <div class="mb-4">
                        <label for="email"
                            class="mb-2 block text-xs font-semibold uppercase text-slate-400">Email</label>
                        <input id="email" type="email" name="email" placeholder="hello@reallygreatsite.com"
                            class="w-full rounded-lg border border-slate-600 bg-slate-700/50 p-3 text-white placeholder-slate-400 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500">
                    </div>

                    <div class="mb-4">
                        <label for="password"
                            class="mb-2 block text-xs font-semibold uppercase text-slate-400">Password</label>
                        <input id="password" type="password" name="password" placeholder="••••••••••"
                            class="w-full rounded-lg border border-slate-600 bg-slate-700/50 p-3 text-white placeholder-slate-400 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500">
                    </div>

                    <div class="mb-6">
                        <label for="dob" class="mb-2 block text-xs font-semibold uppercase text-slate-400">Date of
                            Birth</label>
                        <select id="dob" name="dob"
                            class="w-full cursor-pointer appearance-none rounded-lg border border-slate-600 bg-slate-700/50 p-3 pr-8 text-slate-400 focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500"
                            style="background-image: url('data:image/svg+xml,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 fill=%27none%27 viewBox=%270 0 20 20%27%3e%3cpath stroke=%27%2394a3b8%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27 stroke-width=%271.5%27 d=%27M6 8l4 4 4-4%27/%3e%3c/svg%3e'); background-position: right 0.5rem center; background-repeat: no-repeat; background-size: 1.5em 1.5em;">
                            <option selected disabled>Select</option>
                            <option value="some_date">Some Date</option>
                        </select>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full rounded-lg bg-orange-600 px-8 py-3 font-semibold text-white transition hover:bg-orange-700">
                            Sign Up
                        </button>
                    </div>

                </form>
            </div>

        </div>
    </section>
</x-app-layout>
