@extends('layouts.admin')
@section('content')
 <div class="content">

            <div class="admin-content">
                <div class="content">

                    <h2 class="page-title">Add User</h2>

                    <form action="create.html" method="post">
                        <div>
                            <label>Username</label>
                            <input type="text" name="username"
                                class="text-input">
                        </div>
                        <div>
                            <label>Email</label>
                            <input type="email" name="email" class="text-input">
                        </div>
                        <div>
                            <label>Password</label>
                            <input type="password" name="password"
                                class="text-input">
                        </div>
                        <div>
                            <label>Password Confirmation</label>
                            <input type="password" name="passwordConf"
                                class="text-input">
                        </div>
                        <div>
                            <label>Role</label>
                            <select name="role" class="text-input">
                                <option value="Author">Author</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                         <div>
                            <label>Image</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-big">Add User</button>
                        </div>
                    </form>

                </div>

            </div>
            <!-- // Admin Content -->


@endsection