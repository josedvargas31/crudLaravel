@extends('layouts/main')

@section('contenido')
    <h2 class="text-2xl font-bold text-center pb-4">Agregar un usuario 🤘🏻</h2>
    <div class="md:flex md:justify-center">
        <div class="md:w-96 bg-white p-6 rounded-lg shadow-xl">
            <form id="createUserForm" action="{{ route('store') }}" method="post">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label for="name" class="block text-gray-600 text-sm font-bold mb-2">Nombre</label>
                    <input type="text" name="name" id="name"
                        class="rounded-lg border-2 p-2 border-gray-500 w-11/12" placeholder="Ingrese su nombre" required>
                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white rounded-lg px-3 py-2 m-2">
                        Registrar usuario
                    </button>
                </div>

            </form>
        </div>
        <div class="md:w-4/12">
            <img class="-translate-x-6 rounded-xl " src="{{ asset('img/imgRegister.jpg') }}" alt="Imagen de registro">
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        // Seleccionar todos los formularios con la clase 'deleteUserForm'
        $('#createUserForm').on('submit', function(e) {
            e.preventDefault(); // Detener el envío del formulario
            const form = this; // Referencia al formulario actual

            let timerInterval;
            Swal.fire({
                title: "Please wait!",
                html: "I will close in <b></b> milliseconds.",
                timer: 1000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading();
                    const timer = Swal.getPopup().querySelector("b");
                    timerInterval = setInterval(() => {
                        timer.textContent = `${Swal.getTimerLeft()}`;
                    }, 100);
                },
                willClose: () => {
                    clearInterval(timerInterval);
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    Swal.fire({
                        title: "Registered!",
                        text: "Your user has been registered.",
                        icon: "success"
                    });
                    console.log("I was closed by the timer");
                    form.submit(); // Enviar el formulario si se confirma
                }
            });
        });
    </script>
@endsection
