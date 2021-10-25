@extends("espaces.template")

@section("menu")
 @include("espaces.menu.menu2")
@endsection

@section("container")

<!-- Main content -->
<!-- Content Header (Page header) -->
<!--<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h4 class="page-title">Mon Historique</h4>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item" aria-current="page">De mes </li>
                        <li class="breadcrumb-item active" aria-current="page">Documents</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>-->

<!-- Main content -->
<section class="content">

  <div class="row">

        <div class="col-12">
            <div class="box">
               <div class="box-header with-border">
                    <h4 class="box-title"> Document storage</h4>
                    <h6 class="box-subtitle">List of Documents opend by customers</h6>

                </div>
                <div class="box-body p-15">
                    <div class="table-responsive">
                        <table id="tickets" class="table mt-0 table-hover no-wrap" data-page-size="10">
                            <thead>
                                <tr>
                                   <!-- <th>ID</th>-->
                                    <th>Client</th>
                                    <th>Email</th>
                                    <th>Titre</th>
                                    <th>Status</th>
                                    <th>Gerant</th>
                                    <th>Date</th>

                                </tr>
                            </thead>
                            @foreach ( $customer as $user)
                            <tbody>
                                <tr>
                                    <td>
                                        {{ Auth::user()->name }}
                                    </td>
                                    <td>  {{$user->email}}</td>
                                    <td>{{ $user->title }}</td>
                                    <td><span class="badge badge-warning">{{ $user->status }}</span> </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->created_at }}</td>

                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- /.row -->

</section>
<!-- /.content -->
<!-- /.content -->

@endsection
