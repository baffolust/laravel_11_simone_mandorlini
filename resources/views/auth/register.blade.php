<x-layout>

    <header class="container-fluid bg-color-2 text-color-1 header-custom">
        <div class="row justify-content-center align-items-center text-center h-100">
            <div class="col-12">
                <h1 class="pt-2 mt-1 mb-0">Registrati</h1>
            </div>
        </div>
    </header>

    <x-display-errors/>

    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-12 col-md-6">
                <form class="rounded-4 bg-color-3 text-color-1 p-4 shadow" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome Completo</label>
                        <input type="name" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</x-layout>
