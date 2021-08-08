@extends("template.index")
@section('content')
    <div class="container">
        <h1>Vroum vroum</h1>


        <!-- Button trigger modal addVoiture -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAddCars">
            Ajouter une voiture
        </button>
        <!-- Button trigger modal 1 -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal1">
            Toutes les voitures
        </button>
        <!-- Button trigger modal 2 -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal2">
            Voitures moins chères que 4000 €
        </button>
        <!-- Button trigger modal 3 -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal3">
            Voitures plus chères que 4000 €
        </button>
        <!-- Button trigger modal 4 -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal4">
            Voitures en réductions
        </button>


        <!-- Modal Add Cars -->
        <div class="modal fade" id="modalAddCars" tabindex="-1" aria-labelledby="modalLabelAddCars" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabelAddCars">Voitures moins chères que 4000 €</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        {{-- /* -------------------------------------------------------------------------- */ --}}
                        <form action="/create-cars" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="inputMarque" class="form-label">Marque</label>
                                <input name="marque" type="text" class="form-control" id="inputMarque"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="inputAnnee" class="form-label">Annee</label>
                                <input name="annee" type="number" class="form-control" id="inputAnnee"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="inputCouleur" class="form-label">Couleur</label>
                                <input name="couleur" type="text" class="form-control" id="inputCouleur"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="inputPrix" class="form-label">Prix</label>
                                <input name="prix" type="number" class="form-control" id="inputPrix"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="inputReduction" class="form-label">Réduction</label>
                                <input name="reduction" type="number" class="form-control" id="inputReduction"
                                    aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        {{-- /* -------------------------------------------------------------------------- */ --}}
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 1-->
        <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel1">Toutes les voiture</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        {{-- /* -------------------------------------------------------------------------- */ --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Marque</th>
                                    <th scope="col">Année</th>
                                    <th scope="col">Couleur</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Réduction</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                    <tr>
                                        <td>{{ $car->id }}</td>
                                        <td>{{ $car->marque }}</td>
                                        <td>{{ $car->annee }}</td>
                                        <td>{{ $car->couleur }}</td>
                                        <td>{{ $car->prix }}</td>
                                        <td>{{ $car->reduction }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- /* -------------------------------------------------------------------------- */ --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modalLabel2" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel2">Voitures moins chères que 4000 €</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        {{-- /* -------------------------------------------------------------------------- */ --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Marque</th>
                                    <th scope="col">Année</th>
                                    <th scope="col">Couleur</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Réduction</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                    @if ($car->prix < 4000)

                                        <tr>
                                            <td>{{ $car->id }}</td>
                                            <td>{{ $car->marque }}</td>
                                            <td>{{ $car->annee }}</td>
                                            <td>{{ $car->couleur }}</td>
                                            <td>{{ $car->prix }}</td>
                                            <td>{{ $car->reduction }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                        {{-- /* -------------------------------------------------------------------------- */ --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 3 -->
        <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modalLabel3" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel3">Voitures plus chères que 4000 €</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        {{-- /* -------------------------------------------------------------------------- */ --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Marque</th>
                                    <th scope="col">Année</th>
                                    <th scope="col">Couleur</th>
                                    <th scope="col">Prix</th>
                                    <th scope="col">Réduction</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                    @if ($car->prix > 4000)
                                        <tr>
                                            <td>{{ $car->id }}</td>
                                            <td>{{ $car->marque }}</td>
                                            <td>{{ $car->annee }}</td>
                                            <td>{{ $car->couleur }}</td>
                                            <td>{{ $car->prix }}</td>
                                            <td>{{ $car->reduction }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                        {{-- /* -------------------------------------------------------------------------- */ --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal 4 -->
        <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modalLabel4" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel4">Voitures en réductions</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        {{-- /* -------------------------------------------------------------------------- */ --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Marque</th>
                                    <th scope="col">Année</th>
                                    <th scope="col">Couleur</th>
                                    <th scope="col">Prix</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cars as $car)
                                    @if ($car->reduction != null)
                                        <tr>
                                            <td>{{ $car->id }}</td>
                                            <td>{{ $car->marque }}</td>
                                            <td>{{ $car->annee }}</td>
                                            <td>{{ $car->couleur }}</td>
                                            <td><span class="text-decoration-line-through">{{ $car->prix }}
                                                </span>{{ ($car->prix / 100) * $car->reduction }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>

                        {{-- /* -------------------------------------------------------------------------- */ --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
