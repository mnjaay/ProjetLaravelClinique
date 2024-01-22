<div class="container-fluid">

    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex align-items-center">
                        <div>
                            <h4 class="card-title">Liste des Patients</h4>
                            <h5 class="card-subtitle">les Patients, notre priorite</h5>
                        </div>

                    </div>
                    <!-- title -->
                </div>
                <div class="table-responsive">
                    <table class="table v-middle">
                        <thead>
                            <tr class="bg-light">
                                <th class="border-top-0">Nom Client</th>
                                <th class="border-top-0">Adresse</th>
                                <th class="border-top-0">Age</th>
                                <th class="border-top-0">Genre</th>
                                <th class="border-top-0">Soins</th>
                                <th class="border-top-0">Telephone</th>
                                <th class="border-top-0">Prix</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($Clients as $Client)


                                    <tr >

                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="">
                                                    <h4 class="m-b-0 font-16">{{$Client -> nom}}</h4>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$Client -> adresse}}</td>
                                        <td> {{$Client -> age}} ans</td>
                                        <td>
                                            {{$Client -> genre}}
                                        </td>
                                        <td>{{$Client -> soin->nom}}</td>
                                        <td>{{$Client -> numero}}</td>
                                        <td>
                                            <h5 class="m-b-0">{{$Client -> soin->price}} XOF</h5>
                                        </td>
                                        <td>
                                        <!--
                                          <div class="d-flex justify-content-around">
                                                <a href={{route('client.edit',$Client->id)}} class="btn btn-success">Modifier</a>

                                                <form action="{{ route('client.destroy', $Client->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce patient ?')" class="btn btn-danger" type="submit">Supprimer</button>
                                                </form>
                                                -->


                                                <a href="{{route ('client.detailclient',$Client->id)}}" type="button" class="btn btn-outline-info "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye pt-1" viewBox="0 0 16 16">
                                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                                  </svg> voir patient</a>
                                            </div>
                                        </td>
                                    </tr>



                            @endforeach


                        </tbody>

                    </table>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Table -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- column -->
        <div class="col-lg-6">

        </div>
        <!-- column -->

    </div>
    <!-- ============================================================== -->
    <!-- Recent comment and chats -->
    <!-- ============================================================== -->
</div>
