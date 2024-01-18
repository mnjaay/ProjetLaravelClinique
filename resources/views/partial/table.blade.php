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
                                        <td>{{$Client -> soin}}</td>
                                        <td>{{$Client -> numero}}</td>
                                        <td>
                                            <h5 class="m-b-0">{{$Client -> prix}} XOF</h5>
                                        </td>
                                        <td>

                                            <div class="d-flex justify-content-around">
                                                <a href={{route('client.edit',$Client->id)}} class="btn btn-success">Modifier</a>

                                                <form action="{{ route('client.destroy', $Client->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger" type="submit">Supprimer</button>
                                                </form>
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
