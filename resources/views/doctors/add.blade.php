@extends('layouts.app')

@section('title')

    <title>Add doctor</title>

@endsection

@section('content')

<form action="api/store-doctor" method="POST">
@csrf
<div class="card-header">Add address</div>
<div class="form-group my-5 mx-5">
        <label for="doc_name">Name :</label>
        <input id= "doc_name" class="form-control"  type ="text" name="doc_name" placeholder="name" required="required"/><br>
        <label for="gender">Gender:</label>
        <input id= "gender" class="form-control" type ="text" name="gender" placeholder="gender"required="required"/><br>
        <label for="contact_no">Contact number:</label>
        <input id= "contact_no" class="form-control" type ="text" name="contact_no" placeholder="contact number"required="required"/><br>
        <button class="btn btn-success btn-sm float-center" type="submit" >Store</button>
</div>


    </form>

@endsection
