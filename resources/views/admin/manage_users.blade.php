@extends('layouts.admin')
@section('content')
 <!-- Admin Content -->
            <div class="admin-content">
                <div class="button-group">
                    <a href="{{ Route('c_chambres') }}" class="btn btn-big">Nouveau utilisateurs</a>
                    <a href="index.html" class="btn btn-big">xxx</a>
                </div>


                <div class="content">

                    <h2 class="page-title">Gestion d'hôtels</h2>

                    <table>
                        <thead>
                            <th>SN</th>
                            <th>Title</th>
                            <th>Author</th>
                            <th colspan="3">Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>This is the first post</td>
                                <td>Awa</td>
                                <td><a href="#" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                                <td><a href="#" class="publish">publish</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>This is the second post</td>
                                <td>Melvine</td>
                                <td><a href="#" class="edit">edit</a></td>
                                <td><a href="#" class="delete">delete</a></td>
                                <td><a href="#" class="publish">publish</a></td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
            <!-- // Admin Content -->
@endsection
